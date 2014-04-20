
<?php
/**
* Short description for file
*
* Long description for file (if any)...
*
* LICENSE: Some license information
*
* @category   kernel
* @package    kernel
* @subpackage database
* @copyright  Copyright (c) 2014 Christoph Eisenmann (http://www.Kernel4ypou.com)
* @license    (http://www.Kernel4ypou.com/licence)   BSD License
* @version    $Id:$
* @link       http://www.Kernel4ypou.com/kernel/include/application/cls_db_manager.php
* @since      File available since Release 1.0.0
*/


if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

require_once("include/database/db_utils.php");

abstract class cls_db_manager
{

	private $p_table_preafix = '';
	private $p_table_preafix_system = '';


	private $p_id_column_name = 'id';
	
	public function get_id_column_name()
	{
	
		if (is_null($this->p_id_column_name)) $this->p_id_column_name = '';
		if (empty($this->p_id_column_name)) $this->p_id_column_name = '';
	
		return $this->p_id_column_name;
	}
	
	public function get_table_prefix()
	{
		if (is_null($this->p_table_preafix)) $this->p_table_preafix = '';
		if (empty($this->p_table_preafix)) $this->p_table_preafix = '';

		if ($this->p_table_preafix != '')
		{
			if (!cls_utils::ends_with($tablename,'_')) $this->p_table_preafix .= '_';
		}
		return $this->p_table_preafix;
	}

	public function set_table_prefix($table_preafix)
	{
		$this->p_table_preafix = $table_preafix;
	}

	public function get_table_prefix_system()
	{
		if (is_null($this->p_table_preafix_system)) $this->p_table_preafix_system = '';
		if (empty($this->p_table_preafix_system)) $this->p_table_preafix_system = '';

		if ($this->p_table_preafix_system != '')
		{
			if (!cls_utils::ends_with($tablename,'_')) $this->p_table_preafix_system .= '_';
		}
		return $this->p_table_preafix_system;
	}

	public function set_table_prefix_system($table_preafix_system)
	{
		$this->p_table_preafix_system = $table_preafix_system;
	}


	

	/**
	 * Indicates whether we should html encode the results from a query by default
	 */
	protected $encode = true;

	/**
	* Array of prepared statements and their correspoding parsed tokens
	*/
	protected $preparedTokens = array();

		/**
	 * Maximum length of identifiers
	 * @abstract
	 * @var array
	 */
	protected $maxNameLengths = array(
		'table' => 64,
		'column' => 64,
		'index' => 64,
		'alias' => 64
	);

	/**
	* Last error message from the DB backend
	*/
	
	protected $last_error = false;

	/**
	 * Registry of available result sets
	 */
	
	protected $lastResult;

		/**
	 * Registry of last sql query
	 */

	protected $lastsql; 
	 
	
	
	/**
	 * Name of database
	 * @var resource
	 */
	public $database = null;

	/**
     * @abstract
	 * Does this type represent text (i.e., non-varchar) value?
	 * @param string $type
     * @return bool
	 */
	public function isTextType($type)
	{
		return false;
	}

	/**
    * Returns the current database handle
	* @return resource
	*/
	public function get_database()
	{
		//$this->checkConnection();
		return $this->database;
	}
	
	/**
	* Connects to the database backend
	*
	* Takes in the database settings and opens a database connection based on those
	* will open either a persistent or non-persistent connection.
	* If a persistent connection is desired but not available it will defualt to non-persistent
	*
	* configOptions must include
	* db_host_name - server ip
	* db_user_name - database user name
	* db_password - database password
	*
	* @param array   $configOptions
	* @param boolean $dieOnError
	*/
	abstract public function connect(array $configOptions = null, $dieOnError = false);
	
	/**
    * Parses and runs queries
    *
    * @param  string   $sql        SQL Statement to execute
    * @param  bool     $dieOnError True if we want to call die if the query returns errors
    * @param  string   $msg        Message to log if error occurs
    * @param  bool     $suppress   Flag to suppress all error output unless in debug logging mode.
    * @param  bool     $keepResult Keep query result in the object?
    * @return resource|bool result set or success/failure bool
    */
	abstract public function query($sql, $dieOnError = false, $msg = '', $suppress = false, $keepResult = false);

	/**
    * Parses and runs queries
    *
    * @param  string   $sql        SQL Statement to execute
    * @param  bool     $dieOnError True if we want to call die if the query returns errors
    * @param  string   $msg        Message to log if error occurs
    * @param  bool     $suppress   Flag to suppress all error output unless in debug logging mode.
    * @param  bool     $keepResult Keep query result in the object?
    * @return resource|bool result set or success/failure bool
    */
	abstract public function query_scalar($sql, $dieOnError = false, $msg = '', $suppress = false, $keepResult = false);
	
	/**
	* Run both prepare and execute without the client having to run both individually.
	*
	* @param  string	$sql        The sql to parse
	* @param  array    $data 		The array of data to replace the tokens with.
	* @return resource result set or false on error
	*/
	public function pQuery($sql, $data = array())
	{
		$stmt = $this->prepareQuery($sql);
		return $this->executePreparedQuery($stmt, $data);
	}

	/**
	 * Given a sql stmt attempt to parse it into the sql and the tokens. Then return the index of this prepared statement
	 * Tokens can come in the following forms:
	 * ? - a scalar which will be quoted
	 * ! - a literal which will not be quoted
	 * & - binary data to read from a file
	 *
	 * @param  string	$sql        The sql to parse
	 * @return int index of the prepared statement to be used with execute
	 */
	public function prepareQuery($sql)
	{
		//parse out the tokens
		$tokens = preg_split('/((?<!\\\)[&?!])/', $sql, -1, PREG_SPLIT_DELIM_CAPTURE);

		//maintain a count of the actual tokens for quick reference in execute
		$count = 0;

		$sqlStr = '';
		foreach ($tokens as $key => $val) {
			switch ($val) {
				case '?' :
				case '!' :
				case '&' :
					$count++;
					$sqlStr .= '?';
					break;

				default :
					//escape any special characters
					$tokens[$key] = preg_replace('/\\\([&?!])/', "\\1", $val);
					$sqlStr .= $tokens[$key];
					break;
			} // switch
		} // foreach

		$this->preparedTokens[] = array('tokens' => $tokens, 'tokenCount' => $count, 'sqlString' => $sqlStr);
		end($this->preparedTokens);
		return key($this->preparedTokens);
	}

	/**
	* Returns an array of tables for this database
	*
	* @return	array|false 	an array of with table names, false if no tables found
	*/
	abstract public function get_tables_array();

	/**
	* Fetches the next row in the query result into an associative array
	*
	* @param  resource $result
	* @return array    returns false if there are no more rows available to fetch
	*/
	abstract public function fetch_row($result);


	/**
	* Fetches the next row in the query result into an associative array
	*
	* @param  resource $result
	* @param  bool $encode Need to HTML-encode the result?
	* @return array    returns false if there are no more rows available to fetch
	*/
	public function fetch_by_assoc($result, $encode = true)
	{
		$row = $this->fetch_row($result);
		
		if (!empty($row) && $encode && $this->encode) 
		{
	    	return array_map('to_html', $row);

		} 
		else 
		{
	       return $row;
	    }
		
	}
	
	/**
	* Quote string in DB-specific manner
	* @param string $string
	* @return string
	*/
	abstract public function quote($string);

    /**
    * Quote the strings of the passed in array
    *
    * The array must only contain strings
    *
    * @param array $array
    * @return array Quoted strings
    */
	public function array_quote(array &$array)
	{
		foreach($array as &$val) {
			$val = $this->quote($val);
		}
		return $array;
	}


	/**
	* Pre-process string for quoting
	* @internal
	* @param string $string
    * @return string
    */
	protected function quote_internal($string)
	{
		return from_html($string);
	}

	/**
	* Get last database error
	* This function should return last error as reported by DB driver
	* and should return false if no error condition happened
	* @return string|false Error message or false if no error happened
	*/
	abstract public function last_db_error();
	
	/**
	* Returns definitions of all indies for passed table.
	*
	* return will is a multi-dimensional array that
	* categorizes the index definition by types, unique, primary and index.
	* <code>
	* <?php
	* array(
	*       'field1'=> array (
	*           'name'   => 'field1',
	*           'type'   => 'varchar',
	*           'len' => '200'
	*           )
	*       )
	* ?>
	* </code>
	* This format is similar to how indicies are defined in vardef file.
	*
	* @param  string $tablename
	* @return array
	*/

	abstract public function get_columns($tablename);

	/**
	* @abstract
	* Check if query has LIMIT clause
	* Relevant for now only for Mysql
	* @param string $sql
	* @return bool
	*/

	abstract function has_limit($sql);

	/**
    * Returns a DB specific piece of SQL which will generate GUID (UUID)
    * This string can be used in dynamic SQL to do multiple inserts with a single query.
    * I.e. generate a unique kernel id in a sub select of an insert statement.
    * @return string
    */

	abstract function get_guid_sql();
	
	public function get_delimeter()
	{
		return '"';
	}

	/**
	* Updates the data dictionary
    * @return string
    */
	
	abstract public function update_data_dictionary();
	
	abstract public function record_exists($tablename,$id);
	
	abstract public function update_record($tablename,$id,$data);
	
	abstract public function insert_record($tablename,$id,$data);
	
	abstract public function prepare_sql_value($value,$type);
	
	abstract public function table_exists($tablename);

	abstract public function get_boolean($value);	
	
	abstract public function get_records($tablename,$id = '',$id_field = 'id');
	
	abstract public function get_records_by_ids($tablename,$ids,$id_field = 'id');
	
	abstract public function get_all_columns_per_table();

	abstract public function create_table_sql_statement($tablename,$definition);
	
	/*
	* check if the table is location dependant, needs an entry in table data_location
	*/
	
	public function is_table_location_dependant($tablename)
	{
	
		$table_prefix = $this->get_table_prefix_system();
	
		$sql = "select count(*) from " . $table_prefix . "location_independent_table where tablename = '" . $tablename . "'";
		
		$result = $this->query_scalar($sql);
	
		if ($result == 0) return true;
		return false;
	}

	
	public function register_location_dependant_record($tablename,$id,$application,$id_location,$insert = true)
	{
	
		$table_prefix = $this->get_table_prefix();
		
		if (!$insert)
			{
			$sql = "select count(*) from " . $table_prefix . "data_location where id_data = '" . $id . "'";
		
			$result = $this->query_scalar($sql);
		
			if ($result != 0) return true;

			return false;
			
			}
	
		if (empty($id_location))
			{
			$id_selected_location = $application->get_id_location();
			}
		else
			{
			$id_selected_location = $id_location;
			}
	
		$sql = "INSERT INTO " . $table_prefix . "data_location(id_data, id_location)  VALUES ('" . $id . "','" . $id_selected_location . "')";
	
		$this->query_scalar($sql);
	
	
	
	}

	
	public function get_table_test_runs($db_manager,$application)
	{
	
	
	
	
	}

	public function get_table_test_run($tablename,$db_manager,$db_application)
	{

		$table_prefix = $this->get_table_prefix_system();
	
		$sql = "select path from " . $table_prefix . "table_test_test," . $table_prefix . "table_test_item where " . $table_prefix . "table_test_item.id = " . $table_prefix . "table_test_test.id_table_test_item and " . $table_prefix . "table_test_test.tablename = '" . $tablename . "';";
	
		$result = $this->query_scalar($sql);
		
		return $result;
	
	}
	


	
	
	public function table_relation_exists($tablename,$fieldname)
	{

		$table_prefix = $this->get_table_prefix_system();
	
		$sql = "SELECT count(*) FROM " . $table_prefix . "table_relation where table_name_parent = '" . $tablename . "' and parent_table_field = '" . $fieldname . "'" ;
	
		$result = $this->query_scalar($sql);
	
		if ($result != 0) return true;

		return false;
	
	}
	
	
	public function set_table_relation($table_name_parent,$parent_field_name,$table_name_child,$child_field_name = 'id')
	{
	
		$table_prefix = $this->get_table_prefix_system();
	
		$sql = 'insert into ' . $table_prefix . 'table_relation (table_name_parent ,parent_table_field,table_name_child) values (' . "'" . $table_name_parent . "','" . $parent_field_name . "','" .  $table_name_child . "');";
				
		$this->query_scalar($sql);
	
	}
	
	public function delete_empty_table_relations()
	{

		$table_prefix = $this->get_table_prefix_system();

		$sql = "delete from " . $table_prefix . "table_relation where table_name_child is null or table_name_child = '';";
		
		$this->query_scalar($sql);
	}

	public function get_table_relations($tablename)
	{

		$table_prefix = $this->get_table_prefix_system();

		$sql = "select * from " . $table_prefix . "table_relation where table_name_parent = '" . $tablename . "' and table_name_child is not null and table_name_child <> '' order by parent_table_field;";
		
		$result = $this->query($sql);
		
		return $result;
	
	}
	
	public function get_empty_table_relations()
	{
	
		$table_prefix = $this->get_table_prefix_system();
	
		$sql = "select * from " . $table_prefix . "table_relation where table_name_child is null or table_name_child = '' order by parent_table_field;";
		
		$result = $this->query($sql);
		
		return $result;
	}
	
	
	public function get_table_child_relations($tablename)
	{
	
		$table_prefix = $this->get_table_prefix_system();
	
		$sql = "select * from " . $table_prefix . "table_relation where " . $table_prefix . "table_name_child = '" . $tablename . "' and table_name_child is not null and table_name_child <> '' order by parent_table_field;";
		
		$result = $this->query($sql);
		
		return $result;
	}

	
	abstract public function search_for_records($tablename,$search_fields = '',$search_values = '',$limit = 0,$offset = 0,$and = false);
	

	public function create_search_columns($tablename)
	{
	
		$table_prefix = $this->get_table_prefix_system();
	
		$sql = 'select count(*) from ' . $table_prefix . 'table_search_column where table_name = ' . "'" . $tablename . "'";
		
		$result = $this->query_scalar($sql);
	
		if ($result != 0) return true;
		
		
		
		$fields = $this->get_columns($tablename);
	
		
		foreach ($fields as $fieldinfo)
		{
		
			$search_field = '';
		
			$field_name = $fieldinfo['name']; 
		
			if ($field_name == 'name') $search_field = $field_name;  
			
		
			if ($search_field != '')
			{
				$sql = 'insert into ' . $table_prefix . 'table_search_column (table_name,table_column_name) values (' . "'" . $tablename . "','" .$search_field . "');" ;
				
				$this->query($sql);
				return true;

			}
		
		
		}
	
		foreach ($fields as $fieldinfo)
		{

			$search_field = '';
		
			$field_name = $fieldinfo['name']; 

			if ($fieldinfo['type'] == 'varchar') $search_field = $field_name ;

		
			if ($search_field != '')
			{
				$sql = 'insert into ' . $table_prefix . 'table_search_column (table_name,table_column_name) values (' . "'" . $tablename . "','" .$search_field . "');" ;
				
				$this->query($sql);

			}
		
		
		}
	
	
	
		return true;
	}

	
	public function get_search_columns($tablename)
	{

		$table_prefix = $this->get_table_prefix_system();
	
		$sql = 'select table_column_name,case_sensitive from ' . $table_prefix . 'table_search_column where table_name = ' . "'" . $tablename . "'";
		
		
		
		$result = $this->query($sql);

		$field_columns = $this->get_columns($tablename);
		
		
		$search_columns = array();
		while (($row=$this->fetch_by_assoc($result)) !=null) 
		{
			$name = strtolower($row['table_column_name']);
			if (!array_key_exists($name,$search_columns)) continue;
			$search_columns[$name]['name']=$name;
			$search_columns[$name]['udt_name'] = $field_columns[$name]['udt_name'];
			if ($this->get_boolean($row['case_sensitive']))
			{
				$search_columns[$name]['case_sensitive'] = true;
			}
			else
			{
				$search_columns[$name]['case_sensitive'] = false;
			}
			
		}		
		
		return $search_columns;
		
		
	
	}

	
	
	public function create_lookup_columns($tablename)
	{

		$table_prefix = $this->get_table_prefix_system();
	
		$sql = 'select count(*) from ' . $table_prefix . 'table_lookup_column where table_name = ' . "'" . $tablename . "'";
		
		$result = $this->query_scalar($sql);
	
		if ($result != 0) return true;

		$order = 1;

		$fields = $this->get_columns($tablename);
		
		foreach ($fields as $fieldinfo)
		{
			$lookup_field = '';
	
			$field_name = $fieldinfo['name']; 

			if ($field_name == 'name')
				{
					$lookup_field = 'name';
				}

			if ($lookup_field != '')
				{

				$sql = "insert into " . $table_prefix . "table_lookup_column (table_name,table_column_name,column_order) values ('$tablename','$lookup_field',$order);" ;

				$this->query($sql);
				return true;
				}
		}
		
		foreach ($fields as $fieldinfo)
		{

			$lookup_field = '';
		
			$field_name = $fieldinfo['name'];
		
			if ($fieldinfo['type'] == 'varchar') $lookup_field = $field_name ;
			
			if ($lookup_field != '')
				{

				$sql = "insert into " . $table_prefix . "table_lookup_column (table_name,table_column_name,column_order) values ('$tablename','$lookup_field',$order);" ;
				$this->query($sql);
				$order++;
				}
		}

		return true;	
	
	}
	

	
	
	public function create_data_view_table($view_id,$tablename,$link_field)
	{
		if (empty($tablename)) return false;

		$table_prefix = $this->get_table_prefix_system();
		
		
		$sql = "select id from " . $table_prefix . "data_view_table  where id_data_view = '$view_id' and table_name = '$tablename' and link_field = '$link_field';";
		
		$id = $this->query_scalar($sql);
	
		if (!empty($id))
		{
			return $id;
		}
		
		require_once('include/data/cls_uuid.php');
		
				
		$id = cls_uuid::v4();

		$sql = "INSERT INTO " . $table_prefix . "data_view_table(id, id_data_view, table_name,link_field) VALUES ('$id', '$view_id', '$tablename','$link_field');";
		
		$this->query($sql);

		return $id;
		
	
	}
	
	public function get_default_view_id($tablename)
	{
		if (empty($tablename)) return false;

		$table_prefix = $this->get_table_prefix_system();
		
		$sql = "select id_data_view_default from " . $table_prefix . "table_data where table_name ='$tablename'";
		
		$result = $this->query_scalar($sql);
	
		if ($result === false) return false;

		return $result;
	
	}

	public function set_default_view_id($tablename,$view_id)
	{

		$table_prefix = $this->get_table_prefix_system();
	
		if (empty($tablename)) return false;

		$sql = "update " . $table_prefix . "table_data set id_data_view_default = '$view_id' where table_name = '$tablename'";
		
		$this->query($sql);
	
	}
	
	public function create_data_view($tablename,$name = '',$file_name = '')
	{
	
		if (empty($tablename)) return false;

		$table_prefix = $this->get_table_prefix_system();

		
		$id = $this->get_default_view_id($tablename);

		if (empty($id)) 
		{	
			require_once('include/data/cls_uuid.php');
			
			$id = cls_uuid::v4();
			
			if (empty($name)) $name = 'Standart View ' . $tablename;
			
			
			if (empty($file_name)) 
			{
			
				$file_name = 'cls_view_' . $tablename . '_' . str_replace("-",'_',$id);
				$file_name = 'include/data/table_views/' . $file_name . '.php';
			
			}
			
			$sql = "INSERT INTO " . $table_prefix . "data_view(id, name, file_name, table_name) VALUES ('$id', '$name', '$file_name', '$tablename');";

			$this->query($sql);
		
			$this->set_default_view_id($tablename,$id);
		}
		
		$parent_table_ids = array();
		$child_tables = array();
		
		$data_view_table_main = $this->create_data_view_table($id,$tablename,'id');
		
		$relation_result = $this->get_table_relations($tablename);
		
		
		
		while (($row = $this->fetch_by_assoc($relation_result)) !=null) 
		{
			$table_name_child = $row['table_name_child'];
		
			$parent_table_field = $row['parent_table_field'];
		
			$data_view_table_id = $this->create_data_view_table($id,$table_name_child,$parent_table_field);
		
		
			if (!empty($data_view_table_id))
			{
				$parent_table_ids[$parent_table_field] = $data_view_table_id;
				$child_tables[$parent_table_field] = $table_name_child;
			}
		
		
		
		}
		
		$fields = $this->get_columns($tablename);

		
	
		$order = 1;
		foreach ($fields as $fieldinfo)
		{
		
			$field_name = $fieldinfo['name'];

			//temporary
			
			$name = $field_name;
		
			
			if (!array_key_exists($field_name,$parent_table_ids)) 
			{
				$this->create_data_view_field($data_view_table_main,$field_name,$order,$name);
			}	
			else
			{
				$lookup_columns = $this->get_lookup_fields($child_tables[$field_name]);
			
				foreach ($lookup_columns as $lookup_column)
				{
			
					$field_name_child = $lookup_column['column_name'];

					//temporary
					
					$name = $field_name_child;
					
					$this->create_data_view_field($parent_table_ids[$field_name],$field_name_child,$order,$name);

					$order++;
	
				}
			
			}
			$order++;

		}
		return $id;
	
	}

	
	
	
	public function create_data_view_field($data_view_table_id,$column_name,$order = 1,$name='',$format='')
	{

		if (empty($data_view_table_id)) return false;

		$table_prefix = $this->get_table_prefix_system();

		
		$sql = "select id from " . $table_prefix . "data_view_field  where id_data_view_table = '$data_view_table_id' and table_column = '$column_name' ;";
		
		$id = $this->query_scalar($sql);
	
		if (!empty($id))
		{
			return $id;
		}

	
		
		require_once('include/data/cls_uuid.php');

		$id = cls_uuid::v4();

		$sql = "INSERT INTO " . $table_prefix . "data_view_field(id, id_data_view_table, table_column, name, format, column_order) VALUES ('$id', '$data_view_table_id', '$column_name', '$name', '$format', $order);";
		
		$this->query($sql);

		return $id;
		
	
	}
	
	public function get_data_view_tables_distinct($data_view_id)
	{
	
		if (empty($data_view_id)) return false;

		$table_prefix = $this->get_table_prefix_system();
		
		$main_table_name = $this->get_data_view_main_table($data_view_id);
		
		if (empty($main_table_name)) return false;
	
		$sql =  'SELECT ' . $table_prefix . 'data_view_table.id as id,' . $table_prefix . 'data_view_table.table_name as table_name,link_field,table_column as table_column';  
		$sql .= ' FROM ' . $table_prefix . 'data_view_field,' . $table_prefix . 'data_view_table,' . $table_prefix . 'data_view where ' . $table_prefix . 'data_view_table.id = ' . $table_prefix . 'data_view_field.id_data_view_table';
		$sql .= " and " . $table_prefix . "data_view.id = " . $table_prefix . "data_view_table.id_data_view and " . $table_prefix . "data_view.id = '$data_view_id' order by column_order;";		

		$result = $this->query($sql);
		
		$data_tables = array();
		while (($row=$this->fetch_by_assoc($result)) !=null) 
		{
		
			$table_name = $row['table_name'];
			$link_field = $row['link_field'];
			$table_column = $row['table_column'];
			
			if ($table_name == $main_table_name) continue;
	
			$id_data_view_table = $row['id'];
	
			if (!array_key_exists($id_data_view_table,$data_tables))
			{
				$data_tables[$row['id']]['table_name'] = $table_name;
				$data_tables[$row['id']]['link_field'] = $link_field;
				$data_tables[$row['id']]['table_columns'] = array();	
			}
			$data_tables[$row['id']]['table_columns'][] = $table_column;
	
		
		}
	
		return $data_tables;
	}

	
	
	abstract public function get_all_columns();
	
	
		
	public function get_lookup_fields($tablename)
	{

		$table_prefix = $this->get_table_prefix_system();

	
		$sql = "select id, table_name, table_column_name, column_order, activ  FROM " . $table_prefix . "table_lookup_column where table_name = '$tablename' order by column_order";

		$result = $this->query($sql);
		
		$columns = array();
		while (($row=$this->fetch_by_assoc($result)) !=null) 
		{
			if ($this->get_boolean($row['activ']))
			{
				$name = strtolower($row['table_column_name']);
				$columns[$name]['column_name'] = $name;
				$columns[$name]['id'] = $row['id'];
			
			}
		
		}	
		return $columns;
	}
	
	public function get_data_view_main_table($data_view_id)
	{
	
		$table_prefix = $this->get_table_prefix_system();

		$sql = "select table_name from " . $table_prefix . "data_view where id = '$data_view_id'";

		$result = $this->query_scalar($sql);
	
		if ($result === false) return false;

		return $result;
	
	}
	
	public function get_data_view_columns($data_view_id)
	{
		if (empty($data_view_id)) return false;
	
		$table_prefix = $this->get_table_prefix_system();

	
		$main_table_name = $this->get_data_view_main_table($data_view_id);
		
		if (empty($main_table_name)) return false;
	
		$sql =  'SELECT ' . $table_prefix . 'data_view_field.id as id,' . $table_prefix . 'data_view_table.table_name as table_name,link_field,table_column as table_column';  
		$sql .= ' FROM ' . $table_prefix . 'data_view_field,' . $table_prefix . 'data_view_table,' . $table_prefix . 'data_view where ' . $table_prefix . 'data_view_table.id = ' . $table_prefix . 'data_view_field.id_data_view_table';
		$sql .= " and " . $table_prefix . "data_view.id = " . $table_prefix . "data_view_table.id_data_view and " . $table_prefix . "data_view.id = '$data_view_id' order by column_order;";		
		
		$result = $this->query($sql);
		
		$data_tables = array();
		while (($row=$this->fetch_by_assoc($result)) !=null) 
		{
		
			$table_name = $row['table_name'];
			$link_field = $row['link_field'];
			$table_column = $row['table_column'];
	
			$data_tables[$row['id']]['table_name'] = $table_name;
			$data_tables[$row['id']]['link_field'] = $link_field;
			$data_tables[$row['id']]['table_column'] = $table_column; 
	
	
		}
		
		return $data_tables;
	}
	
	
	
	public function get_data_views()
	{

		$table_prefix = $this->get_table_prefix_system();

	
		$sql = 'select * from ' . $table_prefix . 'data_view;';

		$result = $this->query($sql);
		
		$data_views = array();
		while (($row=$this->fetch_by_assoc($result)) !=null) 
		{
			$data_views[$row['id']]['id'] = $row['id'];
			$data_views[$row['id']]['name'] = $row['name'];
			$data_views[$row['id']]['file_name'] = $row['file_name'];
			$data_views[$row['id']]['table_name'] = $row['table_name'];
			$data_views[$row['id']]['caption'] = $row['caption'];
			$data_views[$row['id']]['id_ribbonbar'] = $row['id_ribbonbar'];
			$data_views[$row['id']]['has_edit_form'] =  $this->get_boolean($row['has_edit_form']);
		}
	
		return $data_views;
	
	}
	
	public function get_data_views_for_table($tablename)
	{

		if (empty($tablename)) return false;

		$table_prefix = $this->get_table_prefix_system();

		
		$sql = "select * from " . $table_prefix . "data_view where table_name = '$tablename';";

		$result = $this->query($sql);
		
		$data_views = array();
		while (($row=$this->fetch_by_assoc($result)) !=null) 
		{
			$data_views[$row['id']]['id'] = $row['id'];
			$data_views[$row['id']]['name'] = $row['name'];
			$data_views[$row['id']]['file_name'] = $row['file_name'];
			$data_views[$row['id']]['table_name'] = $row['table_name'];
			$data_views[$row['id']]['id_ribbonbar'] = $row['id_ribbonbar'];

		}
	
		return $data_views;

	
	
	}
	
	public function get_all_table_columns()
	{

		$table_prefix = $this->get_table_prefix_system();

	
		$sql = 'SELECT id, table_name, column_name, name, width, default_control FROM ' . $table_prefix . 'table_column order by table_name,column_name;';

		$result = $this->query($sql);
		
		$all_table_columns = array();
		
		while (($row=$this->fetch_by_assoc($result)) !=null) 
		{
			$key = $row['table_name'] . '.' . $row['column_name'];
		
			$all_table_columns[$key]['id'] = $row['id'];
			$all_table_columns[$key]['table_name'] = $row['table_name'];
			$all_table_columns[$key]['column_name'] = $row['column_name'];
			$all_table_columns[$key]['name'] = $row['name'];
			$all_table_columns[$key]['width'] = $row['width'];
			$all_table_columns[$key]['default_control'] = $row['default_control'];
		
		}
		
		return $all_table_columns;
	}
	
	public function get_ribbonbar_by_id($id)
	{
	
		if (empty($id)) return false;

		$table_prefix = $this->get_table_prefix_system();

		
		$sql = "select * from " . $table_prefix . "ribbonbar where id = '$id';";

		$result = $this->query($sql);
		
		$row=$this->fetch_by_assoc($result); 

		if (is_null($row)) return false;

		$ribbonbar = array();
		$ribbonbar['id'] = $row['id'];
		$ribbonbar['name'] = $row['name'];
		$ribbonbar['id_ribbonbar_template'] = $row['id_ribbonbar_template'];
		$ribbonbar['has_edit_form'] = $this->get_boolean($row['has_edit_form']);
		$ribbonbar['tabs'] = $this->get_ribbonbar_tabs_by_ribbonbar_id($id);
		
		if (empty($row['id_ribbonbar_template'])) 
		{
			$ribbonbar['ribbonbar_template'] = null;
			return $ribbonbar;
		}
		
		$ribbonbar['ribbonbar_template'] = $this->get_ribbonbar_template_by_id($row['id_ribbonbar_template']);
	
		return $ribbonbar;

	
	}

	public function get_ribbonbar_template_by_id($id)
	{
		if (empty($id)) return false;

		$table_prefix = $this->get_table_prefix_system();

		
		$sql = "select * " . $table_prefix . "from ribbonbar_template where id = '$id';";

		$result = $this->query($sql);
		
		$row=$this->fetch_by_assoc($result); 

		if (is_null($row)) return false;
		
		$ribbonbar_template = array();
		$ribbonbar_template['id'] = $row['id'];
		$ribbonbar_template['name'] = $row['name'];
		$ribbonbar_template['creator_path'] = $row['creator_path'];
	
		return $ribbonbar_template;

	}

	public function get_ribbonbar_tabs_by_ribbonbar_id($id)
	{
		if (empty($id)) return false;
	
		$table_prefix = $this->get_table_prefix_system();
	
		$sql = "select * from " . $table_prefix . "ribbonbar_tab where id_ribbonbar = '$id' order by tab_order;";

		$result = $this->query($sql);

		$all_tabs = array();
		
		while (($row=$this->fetch_by_assoc($result)) !=null) 
		{
			$id = $row['id'];
	
			$all_tabs[$id]['name'] = $row['name'];
			$all_tabs[$id]['imagepath'] = $row['imagepath'];
			$all_tabs[$id]['active'] = $this->get_boolean($row['active']);
			$all_tabs[$id]['tab_order'] = $row['tab_order'];
			$all_tabs[$id]['tab_groups'] = $this->get_ribbonbar_groups_by_ribbonbar_tab_id($id);
		}
		
		return $all_tabs;
	}
	
	public function get_ribbonbar_groups_by_ribbonbar_tab_id($id)
	{
	
		$table_prefix = $this->get_table_prefix_system();
		
		$sql = "select * from " . $table_prefix . "ribbonbar_group where id_ribbonbar_tab = '$id' order by group_order;";

		$result = $this->query($sql);

		$all_groups = array();
		
		while (($row=$this->fetch_by_assoc($result)) !=null) 
		{
			$id = $row['id'];
	
			$all_groups[$id]['name'] = $row['name'];
			$all_groups[$id]['imagepath'] = $row['imagepath'];
			$all_groups[$id]['active'] = $this->get_boolean($row['active']);
			$all_groups[$id]['group_order'] = $row['group_order'];
			$all_groups[$id]['items'] = $this->get_ribbonbar_items_by_ribbonbar_group_id($id);

		}
		
		return $all_groups;
		
	}
	
	public function get_ribbonbar_items_by_ribbonbar_group_id($id)
	{
	
		$table_prefix = $this->get_table_prefix_system();

		$sql = "select * from " . $table_prefix . "ribbonbar_item where id_ribbonbar_group = '$id' order by item_order;";

		$result = $this->query($sql);

		$all_items = array();
		
		while (($row=$this->fetch_by_assoc($result)) !=null) 
		{
			$id = $row['id'];
	
			$all_items[$id]['name'] = $row['name'];
			$all_items[$id]['imagepath'] = $row['imagepath'];
			$all_items[$id]['active'] = $this->get_boolean($row['active']);
			$all_items[$id]['item_order'] = $row['item_order'];
			$all_items[$id]['id_action'] = $row['id_action'];

		}
		
		return $all_items;
	}
	
	public function get_actions()
	{
	
		$table_prefix = $this->get_table_prefix_system();
	
		$sql = "select * from " . $table_prefix . "action;";

		$result = $this->query($sql);

		$all_actions = array();
		
		while (($row=$this->fetch_by_assoc($result)) !=null) 
		{
			$id = $row['id'];
	
			$all_actions[$id]['name'] = $row['name'];
			$all_actions[$id]['key'] = $row['key'];
	

		}
		
		return $all_actions;
	
	
	
	}
	
	public function get_table_data_array()
	{
		$table_prefix = $this->get_table_prefix_system();

	
		if ($this->get_database())
		{
			$sql = "SELECT table_name FROM " . $table_prefix . "table_data order by table_name;";
			
			
			
			$result = $this->query($sql);
			
			if (!empty($result))
			{
				$tables = array();
			

				while ($array = $this->fetch_by_assoc($result)) 
				{
					$row = array_values($array);
					$tables[]=$row[0];

				}
				return $tables;
			}
		}
		
	}

	
	public function delete_views_by_table_name($tablename)
	{

		$table_prefix = $this->get_table_prefix_system();

		$sql = "select id from " . $table_prefix . "data_view_table where table_name = '" . $tablename . "'";  
	
		$result = $this->query($sql);

		$i = 0;
		$ids = '';
		while (($row=$this->fetch_by_assoc($result)) !=null)
		{
			if ($i != 0) $ids .= ',';
			$ids .=  "'" . $row[0] . "'";
			$i++;
		}

		if (!empty($ids))
		{
			$sql = "delete from  " . $table_prefix . "data_view_field where id_data_view_table in (" .  $ids .  ");";
			$this->query_scalar($sql);
		}

		$sql = "delete from " . $table_prefix . "table_relation where table_name_parent = '" . $tablename . "'";
		
		$this->query_scalar($sql);
		
		$sql = "DELETE FROM " . $table_prefix . "table_column where table_name = '" . $tablename . "'";
		
		$this->query_scalar($sql);
		
		$sql = "DELETE FROM " . $table_prefix . "table_data where table_name = '" . $tablename . "'";
		
		$this->query_scalar($sql);


		
	}
	
	
	public function cleanup_data_dictionary()
	{	
		$tables_in_db = $this->get_tables_array();
	
		$tables_in_dictionary = $this->get_table_data_array();


		
		foreach($tables_in_dictionary as $tablename)
		
		{
			if (!in_array($tablename,$tables_in_db))
			{
			
				$views = $this->get_data_views_for_table($tablename);
				
				foreach ($views as $id => $view) 	
				{
				
				
				
					$tablename = $view['table_name'];
				
					echo 'Delete data dictionary for table ' . $tablename . '</br>';				
				
					$this->delete_views_by_table_name($tablename);



					
				}
			
			}

			
			
			
			
			
		
		}
	
	
	
	}
	
	public function check_tables()
	{
		$table_infos = $this->get_all_columns_per_table();

		$table_prefix = $this->get_table_prefix();

		
		foreach ($table_infos as $tablename => $table_columns)  
		{

			//if (cls_utils::starts_with($tablename,'drupal_')) 
			//{
			//	$sql = 'UPDATE ' . $tablename . ' set id = uuid_generate_v4();';
			//	$this->query_scalar($sql);
			//}
		
			if (cls_utils::starts_with($tablename,'geodb_')) continue;
		
			if (!array_key_exists('id', $table_columns))
			{

				echo 'id column is missing table : ' . $tablename . '</br>';		

				
				
				
				$sql = 'ALTER TABLE ' . $tablename . ' ADD COLUMN id uuid;';
				$this->query_scalar($sql);
				$sql = 'UPDATE ' . $tablename . ' set id = uuid_generate_v4();';
				$this->query_scalar($sql);



				$sql = 'ALTER TABLE ' . $tablename . ' ALTER COLUMN id SET NOT NULL;';
				$this->query_scalar($sql);
				$sql = 'ALTER TABLE ' . $tablename . ' ALTER COLUMN id SET DEFAULT uuid_generate_v4();';
				$this->query_scalar($sql);


				
			}
			else
			{
				$column_type = $table_columns['id']['udt_name'];
			
				if ($column_type != 'uuid')
				{

					echo 'primary key id exists but is not a uuid ' . $tablename . '</br>';
					
					
					
					
				
				}
			
			
			}


		}
	}
	
	
}



?>