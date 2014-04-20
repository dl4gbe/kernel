<?php
/**
* postgres database manager
*
* postgres database manager
*
* LICENSE: Some license information
*	
* @category   kernel
* @package    kernel
* @subpackage database
* @copyright  Copyright (c) 2014 Christoph Eisenmann (http://www.Kernel4ypou.com)
* @license    (http://www.Kernel4ypou.com/licence)   BSD License
* @version    $Id:$
* @link       http://www.Kernel4ypou.com/kernel/include/application/cls_db_manager_postgres.php
* @since      File available since Release 1.0.0
*/


if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

require_once('include/database/cls_db_manager.php');
require_once('include/data/cls_data_result.php');

class cls_db_manager_postgres  extends cls_db_manager
{

	public function connect(array $configOptions = null, $dieOnError = false)
	{

	if (!$this->database)
		{	
	
		$db_host_name = 'localhost';
		$db_port = 5432;
		$db_user_name = 'postgres';
		$db_password  = 'Dl6gbngbn2';
		//$db_password  = '12345';
		$db_database = 'kernel';
		
		$connection_string = 'host=' . $db_host_name . ' port=' . $db_port . ' dbname=' . $db_database . ' user=' . $db_user_name . ' password=' . $db_password;
		
		$this->database = pg_connect($connection_string);
		
		}

	
	
	
	}

	/**
	 * Parses and runs queries
	 *
	 * @param  string   $sql        SQL Statement to execute
	 * @param  bool     $dieOnError True if we want to call die if the query returns errors
	 * @param  string   $msg        Message to log if error occurs
	 * @param  bool     $suppress   Flag to suppress all error output unless in debug logging mode.
	 * @param  bool     $keepResult True if we want to push this result into the $lastResult array.
	 * @return resource result set
	 */
	public function query($sql, $dieOnError = false, $msg = '', $suppress = false, $keepResult = false)
	{

	$this->lastsql = $sql;
	
	$result = $suppress?@pg_query($this->database,$sql):pg_query($this->database,$sql);

	$this->lastresult = $result;
		
	return $result;
		
	}
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

	public function query_scalar($sql, $dieOnError = false, $msg = '', $suppress = false, $keepResult = false)
	{
		$this->lastsql = $sql;
	
		$result = $suppress?@pg_query($this->database,$sql):pg_query($this->database,$sql);

		if (!$result)
		{
			return false;
		}
		else
		{
			$row = pg_fetch_array($result); 
			if (isset($row[0])) 
			{
				return $row[0];
			}
			return false;
		}
	
	
	}



	
	
	/**
	* Fetches the next row in the query result into an associative array
	*
	* @param  resource $result
	* @return array    returns false if there are no more rows available to fetch
	*/
	public function fetch_row($result)
	{
		if (empty($result))	
		{
			return false;
		}
		return pg_fetch_assoc($result);

	}
	
	/**
	* Returns an array of tables for this database
	*
	* @return	array|false 	an array of with table names, false if no tables found
	*/
	
	public function get_tables_array()
	{
	
		if ($this->get_database())
		{
			$sql = "SELECT tablename FROM pg_catalog.pg_tables where schemaname = 'public' order by tablename;";
			
			
			
			$result = $this->query($sql);
			
			if (!empty($result))
			{
				$tables = array();
			

				while ($array = $this->fetch_by_assoc($result)) 
				{
					$row = array_values($array);
					$tables[]=$row[0];
			
					//echo $row[0] . '</br>';

				}
				return $tables;
			}
		}
		
	}
	
	public function get_columns($tablename)
	{
		$result = $this->query("select column_name,udt_name,character_maximum_length,character_octet_length from information_schema.columns where table_name='" . $tablename . "'");
		
		$columns = array();
		while (($row=$this->fetch_by_assoc($result)) !=null) 
		{
			$name = strtolower($row['column_name']);
			$columns[$name]['name']=$name;
			$matches = array();
			preg_match_all('/(\w+)(?:\(([0-9]+,?[0-9]*)\)|)( unsigned)?/i', $row['udt_name'], $matches);
			$columns[$name]['type']=strtolower($matches[1][0]);
			if ( isset($matches[2][0]) && in_array(strtolower($matches[1][0]),array('varchar','char','varchar2','int','decimal','float')))
			{
				$columns[$name]['len']=strtolower($matches[2][0]);
			}
			$columns[$name]['udt_name'] = strtolower($row['udt_name']);
			
			
			
			//if ( stristr($row['Extra'],'auto_increment') )
			//	$columns[$name]['auto_increment'] = '1';
			//if ($row['Null'] == 'NO' && !stristr($row['Key'],'PRI'))
			//	$columns[$name]['required'] = 'true';
			//if (!empty($row['Default']) )
			//	$columns[$name]['default'] = $row['Default'];
		}
		return $columns;
		
		
	}
	
	public function get_all_columns_per_table()
	{
	
		$result = $this->query("select table_name,column_name,udt_name,character_maximum_length,character_octet_length from information_schema.columns where table_schema = 'public' and is_updatable = 'YES'" ) ;
		
		$table_columns= array();
		while (($row=$this->fetch_by_assoc($result)) !=null) 
		{
			$tablename = $row['table_name'];
			if (!array_key_exists($tablename,$table_columns))
			{
				$table_columns[$tablename] = array();
			}
			$column_name = $row['column_name'];
			$udt_name = $row['udt_name'];
			$table_columns[$tablename][$column_name]['column_name'] = $column_name;
			$table_columns[$tablename][$column_name]['udt_name'] = $udt_name;
		
		}
	
		return $table_columns;
	
	}
	
	
	public function get_all_columns()
	{

		/*	
		"_aclitem"
		"_char"
		"_float4"
		"_int2"
		"_name"
		"_oid"
		"_regtype"
		"_text"
		"_varchar"
		"abstime"
		"anyarray"
		"bool"
		"bpchar"
		"bytea"
		"char"
		"date"
		"float4"
		"float8"
		"inet"
		"int2"
		"int2vector"
		"int4"
		"int8"
		"interval"
		"money"
		"name"
		"numeric"
		"oid"
		"oidvector"
		"pg_node_tree"
		"regproc"
		"text"
		"time"
		"timestamptz"
		"timetz"
		"uuid"
		"varchar"
		"xid"
		*/
	
	
		$result = $this->query("select table_name,column_name,udt_name,character_maximum_length,character_octet_length from information_schema.columns") ;
		
		$columns = array();
		while (($row=$this->fetch_by_assoc($result)) !=null) 
		{
			$name = strtolower($row['table_name'] . '.' . $row['column_name']);
			$columns[$name]['name']=$name;
			$matches = array();
			preg_match_all('/(\w+)(?:\(([0-9]+,?[0-9]*)\)|)( unsigned)?/i', $row['udt_name'], $matches);
			$columns[$name]['type']=strtolower($matches[1][0]);
			if ( isset($matches[2][0]) && in_array(strtolower($matches[1][0]),array('varchar','char','varchar2','int','decimal','float')))
			{
				$columns[$name]['len']=strtolower($matches[2][0]);
			}
			$columns[$name]['udt_name'] = strtolower($row['udt_name']);
			
			
			
			//if ( stristr($row['Extra'],'auto_increment') )
			//	$columns[$name]['auto_increment'] = '1';
			//if ($row['Null'] == 'NO' && !stristr($row['Key'],'PRI'))
			//	$columns[$name]['required'] = 'true';
			//if (!empty($row['Default']) )
			//	$columns[$name]['default'] = $row['Default'];
		}
	
		

		return $columns;
		
		
	}
	
	
	
	
	/**
	* Quote string in DB-specific manner
	* @param string $string
	* @return string
	*/
	public function quote($string)
	{
		if(is_array($string)) 
		{
			return $this->array_quote($string);
		}

		return pg_escape_string($this->getDatabase(),$this->quote_internal($string));
	}

	/**
	* Get last database error
	* This function should return last error as reported by DB driver
	* and should return false if no error condition happened
	* @return string|false Error message or false if no error happened
	*/
	public function last_db_error()
	{
		if($this->database) 
		{
		    if(pg_last_error($this->database)) 
			{
			    return "PostgresSQL error " . pg_last_error($this->database);
		    }
		} 
		else 
		{
			$err = pg_last_error();
			if($err) 
			{
			    return $err;
			}
		}
        return false;

	}
	
	/**
	* Check if query has LIMIT clause
	* Relevant for now only for Mysql
	* @param string $sql
	* @return bool
	*/
	
	public function has_limit($sql)
	{
	    return stripos($sql, " limit ") !== false;
	}

	/**
    * Returns a DB specific piece of SQL which will generate GUID (UUID)
    * This string can be used in dynamic SQL to do multiple inserts with a single query.
    * I.e. generate a unique Sugar id in a sub select of an insert statement.
    * @return string
    */

	public function get_guid_sql()
	{
		return 'uuid_generate_v4()';
	}
	
	/**
	* Updates the data dictionary
    * @return string
    */
	
	public function update_data_dictionary()
	{
	
		$sql = "select add_table_column(table_name,column_name) FROM information_schema.columns where table_schema = 'public' order by table_name";
	
		$this->query($sql);
	
		$sql = "select add_table(cast(tablename as character varying)) FROM pg_catalog.pg_tables where schemaname = 'public';";

		$this->query($sql);
	
	
	}

	public function record_exists($tablename,$id)
	{



		$sql = 'select count(*) from ' . '"' . $tablename . '"' . ' where id = ' . "'" . $id . "'";
		
		$result = $this->query_scalar($sql);
		
		if ($result != 0) return true;
		
		return false;
	
	}
	
	public function update_record($tablename,$id,$data)
	{
		$result = new cls_data_result();
	
		$update = '';
	
		$i = 0;
		foreach ($data as $field)
		{
			if ($i!= 0) 
			{
				$update .= ',';
			}
			$update .= '"' . $field['name'] . '"  * ' . $this->prepare_sql_value($field['value'],$field['type']); 
			$i++;
		}
	
		$sql = 'update ' . '"' . $tablename . ' set "' . $update . '" where "id" = ' . "'" . $id . "'"; 
					
		$this->query($sql);
	
		return $result;
	
	}

	public function insert_record($tablename,$id,$data)
	{

	
		$result = new cls_data_result();
		


		$sql1 = 'id';
		$sql2 = $this->prepare_sql_value($id,'uuid');
	
		$i = 0;
	
		foreach ($data as $field)
		{
			$sql1 .= ',';
			$sql2 .= ',';
		
			$sql1 .= '"' . $field['name'] . '"';
			$sql2 .= $this->prepare_sql_value($field['value'],$field['type']);
		}
	
		$sql = 'insert into ' . '"' . $tablename . '" (' . $sql1 . ') values ( ' . $sql2 . ');';
			
		$this->query($sql);
	
		return $result;
	
	}

	public function prepare_sql_value($value,$type)
	{
	
	return "'" . $value . "'";
	
	}
	
	public function get_records($tablename,$id = '',$id_field = 'id')
	{
		require_once('include/data/table_factory/cls_table_factory.php');
		
		$table_common = cls_table_factory::get_common($tablename);
		
		$sql = $table_common->get_table_select();
		
		if (!empty($id))
		{
			$sql .= ' where "' . $id_field . '" = ' . "'" . $id  . "'";
		}
			
		$result = $this->query($sql);
		
		return $result;
		
		
	}

	public function get_records_by_ids($tablename,$ids,$id_field = 'id')
	{
	 
	 
	} 
	 
	public function search_for_records($tablename,$search_fields = '',$search_values = '',$limit = 0,$offset = 0,$and = false)
	{

		require_once('include/data/table_factory/cls_table_factory.php');
		
		$table_common = cls_table_factory::get_common($tablename);
		
		$sql = $table_common->get_table_select();

		if (!empty($search_fields))
		{
			if (!empty($search_values))
			{
					
			}
		
		}

		If ($limit != 0)
		{
			$sql .= ' LIMIT ' . $limit;
		}
		
		if ($offset != 0)
		{
			$sql .= ' OFFSET ' . $offset;
		}
		
		$result = $this->query($sql);
		
		return $result;
	
	
	}
	
	public function get_boolean($value)
	{
		if (empty($value)) return false;
		
		if ($value == 'f') return false;
		
		if ($value == 't') return true;
		
		return false;
	}

	public function table_exists($tablename)
	{

		$sql = "SELECT count(*) FROM pg_catalog.pg_tables where schemaname = 'public' and tablename = '" . $tablename . "'";
	
		$result = $this->query_scalar($sql);
	
		if ($result != 0) return true;

		return false;


	}

	public static function get_drupal_field_type_map()
	{
    // Put :normal last so it gets preserved by array_flip. This makes
    // it much easier for modules (such as schema.module) to map
    // database types back into schema types.
    // $map does not use drupal_static as its value never changes.
    static $map = array(
      'varchar:normal' => 'varchar',
      'char:normal' => 'character',

      'text:tiny' => 'text',
      'text:small' => 'text',
      'text:medium' => 'text',
      'text:big' => 'text',
      'text:normal' => 'text',

      'int:tiny' => 'smallint',
      'int:small' => 'smallint',
      'int:medium' => 'int',
      'int:big' => 'bigint',
      'int:normal' => 'int',

      'float:tiny' => 'real',
      'float:small' => 'real',
      'float:medium' => 'real',
      'float:big' => 'double precision',
      'float:normal' => 'real',

      'numeric:normal' => 'numeric',

      'blob:big' => 'bytea',
      'blob:normal' => 'bytea',

      'serial:tiny' => 'serial',
      'serial:small' => 'serial',
      'serial:medium' => 'serial',
      'serial:big' => 'bigserial',
      'serial:normal' => 'serial',
      );
    return $map;
  }

	public function create_table_sql_statement($tablename,$definition)
	{	
	
	}
}

?>