<?php

if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/utils/cls_utils.php');
require_once('include/cls_base_class.php');
class cls_orm_view extends cls_base_class
{

	private $p_all_columns = null;
	private $p_all_table_columns = null;
	private $p_grid_template = 'creator/template/grid/grid_view_dhtmlx_template.html';
	
	function __construct()
    { 
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) 
		{
            call_user_func_array(array($this,$f),$a);
        }
	}

	public function get_grid_template()
	{
		return $this->p_grid_template;
	}

	public function set_grid_template($grid_template)
	{
		$this->p_grid_template = $grid_template;
	}
	
	
	public function create_default_view($tablename)
	{
	
		$id = $this->get_db_manager()->create_data_view($tablename);
	
		if ($id === false) return false;
		
		return true;
	
	
	
	}
	
	public function create_table_view_files()
	{
	
		$views = $this->get_db_manager()->get_data_views();


		require_once('creator/template/grid/cls_grid_creator_factory.php');
	
		$grid_creator = cls_grid_creator_factory::create_grid_creator($this->get_db_manager(),$this->get_application(),$this->get_grid_template());

		$grid_creator->set_all_columns($this->get_all_columns());
		
		$grid_creator->set_all_table_columns($this->get_all_table_columns());
		
		
		
		foreach ($views as $view)
		{
			$this->create_table_view_file($view);
			$this->create_grid_default_page($view,$grid_creator);
		}
	
	
	
	}
	
	public function get_all_table_columns()
	{
		if (is_null($this->p_all_table_columns)) 
		{
			$this->p_all_table_columns = $this->get_db_manager()->get_all_table_columns();
		}                                   
		return $this->p_all_table_columns;
	}
	
	public function get_all_columns()
	{
		if (is_null($this->p_all_columns))
		{
			$this->p_all_columns = $this->get_db_manager()->get_all_columns();
		}
		return $this->p_all_columns;

	}


	public function create_grid_default_page($view,$creator)
	{
	
		$file =  $view['file_name'];
		$tablename = $view['table_name'];
		$id = $view['id'];
	
		$creator->set_grid_id($id);
		$creator->set_tablename($tablename);
		$creator->create_html_page();
		
	
	
	}
	
	
	public function create_table_view_file($view)
	{
	
		if (is_null($view)) return false;
	
		$file =  $view['file_name'];
		$tablename = $view['table_name'];
		$id = $view['id'];
	
		$foreign_data_tables = $this->get_db_manager()->get_data_view_tables_distinct($id);
	
		
	
	
		if (empty($file)) $file = 'include/data/table_views/cls_view_' . $tablename . '_' . str_replace("-",'_',$id);
		if (empty($tablename)) return false;
	
		$class = '<?php' . PHP_EOL;
		$class .= "if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');" . PHP_EOL;
		$class .= "require_once('include/data/cls_table_view_base.php');"  . PHP_EOL;
		$class .= 'class cls_view_' . $view['table_name'] . '_' . str_replace("-",'_',$id) . ' extends cls_table_view_base ' . PHP_EOL;
		$class .= '{' . PHP_EOL;
		$class .= "\t" . 'private $p_column_definitions = null;' . PHP_EOL;
		$class .= PHP_EOL;
		
		$class .= cls_orm::get_contructor();
				
		$class .= "\t" . 'public function query($search_values,$limit,$offset)' . PHP_EOL;
		$class .= "\t\t" . '{'  . PHP_EOL;
		
		$class .= "\t\t" . "require_once('include/data/table_factory/cls_table_factory.php');" . PHP_EOL;
		$class .= "\t\t" . '$common_' . $tablename . ' = cls_table_factory::get_common_' . $tablename . '();' . PHP_EOL;
		$class .= "\t\t" . '$array_' . $tablename . ' =  $common_' . $tablename . '->get_' . $tablename . 's($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);' . PHP_EOL;
		
		foreach ($foreign_data_tables as $key => $foreign_data_table)
		{
			$link_field = $foreign_data_table['link_field'];
			$class .= PHP_EOL;
			$class .= "\t\t" . '$where = $this->get_distinct_ids_' . $link_field . '($array_' . $tablename . ');' . PHP_EOL;
			$class .= "\t\t" . '$data_array_' . $link_field . ' = $this->fill_distinct_' . $link_field . '($where);' . PHP_EOL;
		}
		$class .= PHP_EOL;

		$class .= "\t\t" . '$result_array = array();'  . PHP_EOL;
		$class .= "\t\t" . 'foreach($array_' . $tablename . ' as $' . $tablename . ')' . PHP_EOL;
		$class .= "\t\t\t" . '{' . PHP_EOL;	
		$class .= "\t\t\t" . '$' . $tablename . '_id = $' . $tablename . '->get_id();' . PHP_EOL;
		
		$data_columns = $this->get_db_manager()->get_data_view_columns($id);
		
		
		
		foreach($data_columns as $data_column)
		{
			
		
			if ($data_column['table_name'] == $tablename)
			{
				$class .= "\t\t\t" . '$result_array[' . '$' . $tablename . '_id][' . "'" . $tablename . '.' . $data_column['table_column'] . "'" . '] = $'; 
				$class .= $tablename . '->get_' . $data_column['table_column'] . '();' . PHP_EOL;
			}	
			else
			{
				$class .= "\t\t\t" . '$link_id = $' .  $tablename . '->get_' . $data_column['link_field'] .'();' . PHP_EOL;
				$class .= "\t\t\t" . 'if (empty($link_id))' . PHP_EOL;
				$class .= "\t\t\t\t" . '{' . PHP_EOL;
				$class .= "\t\t\t\t" . '$result_array[' . '$' . $tablename . '_id][' . "'" . $data_column['table_name'] . '.' . $data_column['table_column'] . "'" . '] = ' . "'';" . PHP_EOL;
				$class .= "\t\t\t\t" . '}' . PHP_EOL;
				$class .= "\t\t\t" . 'else' . PHP_EOL;
				$class .= "\t\t\t\t" . '{' . PHP_EOL;
				$class .= "\t\t\t\t" . '$result_array[' . '$' . $tablename . '_id][' . "'" . $data_column['table_name'] . '.' . $data_column['table_column'] . "'" . '] = ';
				$class .= '$data_array_' . $data_column['link_field'] . '[$link_id]->get_' . $data_column['table_column'] . '();'  . PHP_EOL;
				$class .= "\t\t\t\t" . '}' . PHP_EOL;
			}
		
		}
		
		$class .= "\t\t\t" . '}' . PHP_EOL;	
		$class .= "\t\t" . 'return $result_array;' . PHP_EOL; 
		$class .= "\t\t" . '}'  . PHP_EOL;

		foreach ($foreign_data_tables as $key => $foreign_data_table)
		{
		
			$link_field = $foreign_data_table['link_field']; 
			$foreign_data_table_name = $foreign_data_table['table_name']; 
		
			$class .= PHP_EOL;
			$class .= "\t" . 'private function get_distinct_ids_' . $link_field . '($array_' . $tablename . ')' . PHP_EOL;
			$class .= "\t" . '{'  . PHP_EOL;
			$class .= "\t\t" . '$ids = array();' . PHP_EOL;
			
			$class .= "\t\t" . 'foreach ($array_' . $tablename . ' as $' . $tablename . ')' . PHP_EOL;
			$class .= "\t\t" . '{'  . PHP_EOL;
			$class .= "\t\t\t" . '$id = $' . $tablename . '->get_' . $link_field . '();' . PHP_EOL;
			$class .= "\t\t\t" . 'if (!in_array($id,$ids)) $ids[] = $id;' . PHP_EOL;
		
		
			$class .= "\t\t" . '}'  . PHP_EOL;
			$class .= "\t\t" . '$i = 0;'  . PHP_EOL;
			$class .= "\t\t" . '$in = "";' . PHP_EOL;
			$class .= "\t\t" . 'foreach ($ids as $id)' . PHP_EOL;
			$class .= "\t\t" . '{' . PHP_EOL;
			$class .= "\t\t\t" . 'if (empty($id)) continue;' . PHP_EOL;
			$class .= "\t\t\t" . 'if ($i != 0) $in .= ' ."','" . ';' . PHP_EOL;
			$class .= "\t\t\t" . '$in .= ' . '"' . "'" . '" . $id . ' . '"' . "'" . '";' . PHP_EOL;   
			$class .= "\t\t\t" . '$i++;' . PHP_EOL;
			$class .= "\t\t" . '}'  . PHP_EOL;
			$class .= "\t\t" . 'if (!empty($in)) $in = ' ;
			$class .= "' id in (' . " . '$in' . " . ')';" . PHP_EOL;  
			$class .= "\t\t" . 'return $in;' . PHP_EOL; 
			$class .= "\t" . '}'  . PHP_EOL;
			$class .= PHP_EOL;
			$class .= "\t" . 'private function fill_distinct_' . $link_field . '($where)' . PHP_EOL;
			$class .= "\t" . '{'  . PHP_EOL;
			$class .= "\t\t" . '$data = array();' . PHP_EOL;
			$class .= "\t\t" . 'if (empty($where)) return $data;' . PHP_EOL;
			$class .= "\t\t" . '$sql = ' . "'" . 'select id as "' .  $foreign_data_table_name . '.id' . '"'; 
			
			$fields = $foreign_data_table['table_columns'];
			foreach ($fields as $field_name)
			{
				$class .= ',' . $foreign_data_table_name . '.' . $field_name . ' as "' .  $foreign_data_table_name . '.' . $field_name . '"';
			}
			
			$class .= ' from ' . $foreign_data_table_name . ' where ' . "' . " . '$where;' . PHP_EOL;
			
			$class .= "\t\t" . '$db = $this->get_db_manager();' . PHP_EOL;
			$class .= "\t\t" . '$result = $db->query($sql);' . PHP_EOL;
			
			$class .= "\t\t" . 'while (($row=$db->fetch_by_assoc($result)) !=null)' . PHP_EOL;
			$class .= "\t\t" . '{' . PHP_EOL;
			$class .= "\t\t\t" . '$' . $foreign_data_table_name . ' = cls_table_factory::create_instance(' . "'" . $foreign_data_table_name . "');" . PHP_EOL;
			$class .= "\t\t\t" . '$' . $foreign_data_table_name . '->fill($row);' . PHP_EOL;
			
			$class .= "\t\t\t" . '$data[$row[' . "'" . $foreign_data_table_name . '.id' . "'" . ']] = $' . $foreign_data_table_name . ';' . PHP_EOL;
			$class .= "\t\t" . '}' . PHP_EOL;
			$class .= "\t\t" . 'return $data;'  . PHP_EOL;
			$class .= "\t" . '}'  . PHP_EOL;


		}

			
			
		//
		
		$class .= "\t" . 'public function get_column_definitions()' . PHP_EOL; 
		$class .= "\t" . '{' . PHP_EOL;		
		$class .= "\t\t" . 'if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;' . PHP_EOL;	 
		$class .= "\t\t" . '{'  . PHP_EOL;	
		$class .= "\t\t\t" . '$this->p_column_definitions = array();' . PHP_EOL;
		
		$all_columns = $this->get_all_columns();
		
		foreach($data_columns as $data_column)
		{
			
			
			
			$key = 	$data_column['table_name'] . '.' . $data_column['table_column'];
			
			if (!array_key_exists($key,$all_columns)) continue;
			
			$type = $all_columns[$key]['type'];
			
			$class .= "\t\t\t" . '$this->p_column_definitions[' . "'" . $key . "'" . '][' . "'" . 'type' . "'" . '] = ' . "'" . $type . "';" . PHP_EOL; 
		
		}
					
		$class .= "\t\t" . '}'  . PHP_EOL;			
		$class .= "\t\t" . 'return $this->p_column_definitions;' . PHP_EOL;	
		$class .= "\t" . '}'  . PHP_EOL;	
	
	
		$class .= "}" . PHP_EOL;
		$class .= "?>" . PHP_EOL;

		
		file_put_contents($file, $class);

	
	
	
	
	
	}
	

}

?>
