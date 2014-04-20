<?php

if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/utils/cls_utils.php');
require_once('creator/orm/cls_orm_view.php');
class cls_orm
{

	private $p_db_manager = null;
	private $p_application = null;
	private $p_drupal_db_manager = null;
	
	
	
	public function get_application()
	{
		return $this->p_application;
	}

	public function set_application($application)
	{
		$this->p_application = $application;
	}
	

	public function set_drupal_db_manager($db_manager)
	{
		$this->p_drupal_db_manager = $db_manager;
	}

		public function get_drupal_db_manager()
	{
		return $this->p_drupal_db_manager;
	}

	public function get_db_manager()
	{
		return $this->p_db_manager;
	}
	
	public function set_db_manager($db_manager)
	{
		$this->p_db_manager = $db_manager;
	}

	
	
	function __construct()
    { 
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) 
		{
            call_user_func_array(array($this,$f),$a);
        }
	}
	
	public function __construct1($db_manager)
	{
		$this->set_db_manager($db_manager);
	} 

		public function __construct2($db_manager,$application)
	{
		$this->set_db_manager($db_manager);
		$this->set_application($application);
	} 

	
	
	
	
	
	public function write_base_classes()
	{

		if (is_null($this->get_db_manager())) 
		{
			return;
		}
	
		$db = $this->get_db_manager();
		
		$db->cleanup_data_dictionary();
	
		$db->check_tables();
	
		$tables = $this->get_db_manager()->get_tables_array();

		$this->update_data_dictionary();	
		
		$this->create_missing_relations($tables);
		
		foreach ($tables as $tablename)
			{

				$this->get_application()->log(__CLASS__, __FUNCTION__, 'table--> ' . $tablename);

				$this->get_db_manager()->create_search_columns($tablename);
									
				$this->get_db_manager()->create_lookup_columns($tablename);					
									
				$this->write_base_class($tablename);
				
				$this->write_save_class($tablename);
				
				$this->write_test_class($tablename);
			}

		$this->write_table_factory($tables);	
		
		$this->write_table_includes($tables);
		
		$this->write_test_run($tables);	

		$this->create_exporters($tables);
		
		$this->create_default_exporters($tables);
		
		$this->create_default_views($tables);
	}

	
	public function create_default_views($tables)
	{
	
		$creator = new cls_orm_view($this->get_db_manager(),$this->get_application());
	
		if (is_null($creator)) return false; 
		
		foreach ($tables as $tablename)
		{
			$this->create_default_view($tablename,$creator);
		}
	
	
	
		$creator->create_table_view_files();
	
	
	
	}
	

	public function create_default_view($tablename,$creator)
	{
	
		$view_id = $creator->create_default_view($tablename);
	
	
	}


	
	public function create_default_exporters($tables)
	{
	
		if (is_null($this->get_db_manager())) 
		{
			return;
		}
	
		foreach ($tables as $tablename)
		{
			$this->create_default_exporter($tablename);
		}
	
	
	}

	public function create_default_exporter($tablename)
	{

		if (is_null($this->get_db_manager())) 
		{
			return;
		}

		$db = $this->get_db_manager();
		
		$fields = $this->get_db_manager()->get_columns($tablename);


	
		$file =  'include/data/base_table_exporters/cls_json_' . $tablename . '.php';

		$class = '<?php' . PHP_EOL;
		$class .= "if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');" . PHP_EOL;
		$class .= 'class cls_json_' . $tablename . PHP_EOL;
		$class .= '{' . PHP_EOL;
		$class .= 'public function write_buffer($data)' . PHP_EOL;
		$class .= "\t" . '{' . PHP_EOL;
		
		$class .= "\t" . '}' . PHP_EOL;
		$class .= PHP_EOL;
		$class .= 'public function echo_export_string($data)' . PHP_EOL;
		$class .= "\t" . '{' . PHP_EOL;
		$class .= "\t" . 'echo $this->create_export_string($data);' . PHP_EOL; 
		$class .= "\t" . '}' . PHP_EOL;
		$class .= PHP_EOL;
		$class .= 'private function create_export_string($data)' . PHP_EOL; 
		$class .= "\t" . '{' . PHP_EOL;
		
		$class .= "\t\t\$i = 0;" . PHP_EOL;
				
		
		
		$class .= "\t\t" . '$content = ' . "'" . '' . 'data = {' . "' . PHP_EOL;" . PHP_EOL; 
		$class .= "\t\t" . '$content .= ' . "'" . '' . 'rows: [' . "' . PHP_EOL;" . PHP_EOL;
		
		$class .= "\t\t" . 'foreach ($data as $' . $tablename . ')' . PHP_EOL;
		$class .= "\t\t" . '{'  . PHP_EOL;

		$class .= "\t\t\t" . 'if ($i != 0)'  . PHP_EOL;
		$class .= "\t\t\t\t" . '{'  . PHP_EOL;
		$class .= "\t\t\t\t\t" . '$content .= ' . "'" . '' . ',' . "' . PHP_EOL;" . PHP_EOL;
		$class .= "\t\t\t\t" . '}'  . PHP_EOL;
		
		$class .= "\t\t\t" . '$content .= ' . "'" . '' . '{' . "' . PHP_EOL;" . PHP_EOL;
		
		$class .= "\t\t\t" . '$content .= '  . "'";
		
		$class .= 'id:';
		$class .= "'" . ' . ';
		$class .= '"' . "'" . '"';
		$class .= ' . ';
		$class .= '$' . $tablename . '->get_id()';
		$class .= ' . ';
		$class .= '"' . "'" . '"';
		$class .= ' . ';
		$class .= "' , '";
		$class .= ' . PHP_EOL;'; 
		
		$class .= PHP_EOL;

		
		$class .= "\t\t\t" . '$content .= '  . "'";
		$class .= 'data:';
		$class .= "'" . ' . ';
		$class .= '"' . "[" . '"';
		//$class .= ' . ';
		
		$i = 0;
		foreach ($fields as $fieldinfo)
		{
			if ($fieldinfo['name'] == "id") continue;
			
			if ($i != 0)
			{
				$class .= '"' . "," . '"';		
			}
			
			$class .= $this->write_single_quote();

			$class .= '$' . $tablename . '->get_' . $fieldinfo['name'] . '()'; 
			
			$class .= $this->write_single_quote();
	

			$i++;
		}
		$class .= '"' . "]" . '"';
		$class .= ' . PHP_EOL;';

		$class .= PHP_EOL;
		$class .= "\t\t\t" . '$content .= ' . "'" . '' . '}' . "' . PHP_EOL;" . PHP_EOL;
		$class .= "\t\t\t\$i++;" . PHP_EOL;
		$class .= PHP_EOL;

		$class .= "\t\t" . '}'  . PHP_EOL;
		$class .= "\t\t" . '$content .= ' . "'" . '' . ']' . "' . PHP_EOL;" . PHP_EOL; 
		$class .= "\t\t" . '$content .= ' . "'" . '' . ' }' . "' . PHP_EOL;" . PHP_EOL; 
		$class .= "\t\t" . 'return $content;' . PHP_EOL;
		$class .= "\t" . '}' . PHP_EOL;
		$class .= '}' . PHP_EOL;
		$class .= '?>' . PHP_EOL;
		

		file_put_contents($file, $class);
	
	
	
	}
	
	private function write_single_quote()
	{
			$content = ' . ';
			$content .= '"' . "'" . '"';
			$content .= ' . ';
			return $content;
	}
	
	private function write_comma()
	{
		$content = ' . ';
		$content .= '"' . "," . '"';
		$content .= ' . ';
		return $content;
	}	

	public function create_exporters($tables)
	{
	
		if (is_null($this->get_db_manager())) 
		{
			return;
		}
	
		foreach ($tables as $tablename)
		{
			$this->create_exporter($tablename);
		}
	
	
	}

	public function create_exporter($tablename)
	{
		$file =  $tablename . '.php';

		$content = '<?php' . PHP_EOL;

		$content .= "if(!defined('kernel_entry'))define('kernel_entry', true);" . PHP_EOL;
		$content .= "require_once('include/cls_get_parameter.php');" . PHP_EOL;
		$content .= "require_once('include/entry_point.php');" . PHP_EOL; 
		$content .= "require_once('include/application/cls_application.php');" . PHP_EOL;
		$content .= "require_once('include/data/tables/cls_table_" . $tablename . ".php');" . PHP_EOL;
		$content .= "require_once('table_helpers/cls_" . $tablename . "_helpers.php');" . PHP_EOL;

		$content .= '$app = new cls_application();' . PHP_EOL;
		$content .= '$get_parameter = new cls_get_parameter();' . PHP_EOL;
		$content .= '$helper = new cls_' . $tablename . '_helpers($app->get_db_manager(),$app);' . PHP_EOL; 
		
		
		$content .=  'if (!empty($get_parameter->mode))' . PHP_EOL;
		$content .=  '{' . PHP_EOL;		
		
		//$content .=  "\t" . '$root = $_SERVER["REQUEST_URI"] ;' . PHP_EOL;
		//$content .=  "\t" . '$pos = strpos($root,' . "'" . $tablename . "'" . ');' . PHP_EOL;
		//$content .=  "\t" . '$root = substr($root,0,$pos);' . PHP_EOL;
		
		$content .= "\t" . '$mode = strtolower($get_parameter->mode);'  . PHP_EOL;
		$content .= "\t" . 'switch ($mode)'  . PHP_EOL;
		$content .= "\t\t" . '{' . PHP_EOL;
		$content .= "\t\t\t" . 'case "grid":' . PHP_EOL;
		$content .= "\t\t\t\t" . '$helper->get_grid_page($get_parameter);' . PHP_EOL;
		$content .= "\t\t\t\t" . 'break;' . PHP_EOL;
		$content .= "\t\t\t" . 'case "describe":' . PHP_EOL;
		
		$content .= "\t\t\t\t" . 'break;' . PHP_EOL;

		$content .= "\t\t\t" . 'case "save":' . PHP_EOL;
		
		$content .= "\t\t\t\t" . 'break;' . PHP_EOL;

		$content .= "\t\t\t" . 'case "form":' . PHP_EOL;
		
		$content .= "\t\t\t\t" . 'break;' . PHP_EOL;

		$content .= "\t\t\t" . 'case "sql_create":' . PHP_EOL;
		
		$content .= "\t\t\t\t" . "require_once('creator/orm/cls_orm.php');" . PHP_EOL;
	
		$content .= "\t\t\t\t" . '$orm = new cls_orm($app->get_db_manager(),$app);' . PHP_EOL;
	
		$content .= "\t\t\t\t" . 'return $orm->create_table_sql_statement("' . $tablename . '"' . ',$get_parameter->database_type);'  . PHP_EOL; 
		
		
		
		$content .= "\t\t\t\t" . 'break;' . PHP_EOL;


		$content .= "\t\t" . '}' . PHP_EOL;
		$content .=  "\t" . 'exit;' . PHP_EOL;
		$content .=  '}' . PHP_EOL;		
		
		$content .= '$helper->get_data($get_parameter);' . PHP_EOL;
		
	

		
		$content .= '?>' . PHP_EOL;
		

		file_put_contents($file, $content);
	
		$this->create_data_helpers($tablename);
	
	}
	
	
	public function create_data_helpers($tablename)
	{

		$file =  'table_helpers/cls_' . $tablename . '_helpers.php';

		$class = '<?php' . PHP_EOL;
		$class .= "if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');" . PHP_EOL;
		$class .= "require_once('include/cls_base_class.php');"  . PHP_EOL;

		
	
		$class .= 'class cls_' . $tablename . '_helpers extends cls_base_class' . PHP_EOL;
		$class .=  '{' . PHP_EOL;
		$class .= $this->get_contructor();
		$class .=  PHP_EOL;

		$class .= "\t" . 'public function get_grid_page($get_parameter)' . PHP_EOL;
		$class .= "\t" . '{' . PHP_EOL;
		$class .= "\t\t" . '$app = $this->get_application();' . PHP_EOL;
		$class .= "\t\t" . '$file = ' . "'';" . PHP_EOL;
		$class .= "\t\t" . 'if ($get_parameter->view_requested)' . PHP_EOL;
		$class .= "\t\t" . '{' . PHP_EOL;
		$class .= "\t\t\t" . 'if (empty($get_parameter->view_name))' . PHP_EOL;
		$class .= "\t\t\t" . '{'. PHP_EOL;
		$id = $this->get_db_manager()->get_default_view_id($tablename);
		$class .= "\t\t\t\t" . '$file = ' .  "'" . 'grid_pages/grid_' . $tablename . '_' . $id . '.html' . "';" . PHP_EOL;  
		$class .= "\t\t\t" . '}'. PHP_EOL;
		$class .= "\t\t\t" . 'else'. PHP_EOL;
		$class .= "\t\t\t" . '{'. PHP_EOL;
		$class .= "\t\t\t\t" . 'switch ($get_parameter->view_name)' . PHP_EOL; 
		$class .= "\t\t\t\t" . '{' . PHP_EOL;
		

		$class .= "\t\t\t\t" . '}' . PHP_EOL;
		
		$class .= "\t\t\t" . '}' . PHP_EOL;
		
		$class .= "\t\t" . '}' . PHP_EOL;
		$class .= "\t\t" . 'else' . PHP_EOL;
		$class .= "\t\t" . '{' . PHP_EOL;

		$class .= "\t\t" . '}' . PHP_EOL;
		$class .= "\t\t" . 'if (empty($file))' . PHP_EOL; 
		$class .= "\t\t" . '{' . PHP_EOL;
		$class .= "\t\t\t" . '$app->display_error_and_die(__CLASS__,__FUNCTION__,' . "'" . 'no view page found' . "'" . ');' . PHP_EOL;
		$class .= "\t\t" . '}' . PHP_EOL;
		$class .= "\t\t" . 'if (!file_exists($file))' . PHP_EOL;
		$class .= "\t\t" . '{' . PHP_EOL;
		$class .= "\t\t\t" . '$app->display_error_and_die(__CLASS__,__FUNCTION__,' . '"' . '$file view page not found' . '"' . ');' . PHP_EOL;
		$class .= "\t\t" . '}' . PHP_EOL;

		$class .= "\t\t" . '$result = file_get_contents($file);' . PHP_EOL;		
		
		$class .= 'echo $result;' . PHP_EOL;	 
		
		$class .=  "\t" . '}' . PHP_EOL;

		$class .=  PHP_EOL;
		
		$class .=  "\t" . 'public function get_data($get_parameter)' . PHP_EOL;
		$class .=  "\t" . '{' . PHP_EOL;
		$class .=  "\t\t" . '$app = $this->get_application();' . PHP_EOL;
		$class .=  "\t\t" . 'if (!$get_parameter->view_requested)' . PHP_EOL; 
		$class .=  "\t\t" . '{' . PHP_EOL;	

		$class .= "\t\t\t" . "require_once('include/data/table_factory/cls_table_factory.php');"  . PHP_EOL; 
		$class .= "\t\t\t" . '$common_' . $tablename . ' = cls_table_factory::get_common_' . $tablename . '();' . PHP_EOL; 
		$class .= "\t\t\t" . '$array_' . $tablename . ' =  $common_' . $tablename . '->get_' . $tablename . 's($app->get_db_manager(),$app,$get_parameter->search_values,$get_parameter->limit,$get_parameter->offset,false);' . PHP_EOL;
		
		$class .= "\t\t\t" . 'if ($get_parameter->format == ' . "'" . 'json' . "')" . PHP_EOL;
		$class .= "\t\t\t" . '{' . PHP_EOL;
		$class .= "\t\t\t\t" . 'require_once(' . "'" . 'include/data/base_table_exporters/cls_json_' . $tablename . '.php' . "'" . ');' . PHP_EOL;
		$class .= "\t\t\t\t" . '$exporter = new cls_json_' . $tablename . '();' . PHP_EOL;
		$class .= "\t\t\t\t" . 'if (!$get_parameter->buffering)' . PHP_EOL;
		$class .= "\t\t\t\t" . '{' . PHP_EOL;
		$class .= "\t\t\t\t\t" . '$exporter->echo_export_string($array_' . $tablename . ');' . PHP_EOL;
		$class .= "\t\t\t\t" . '}' . PHP_EOL;
		$class .= "\t\t\t\t" . 'else'  . PHP_EOL;
		$class .= "\t\t\t\t" . '{' . PHP_EOL;
		$class .= "\t\t\t\t\t" . 'if ($app->get_allow_buffering())' . PHP_EOL;
		$class .= "\t\t\t\t\t" . '{' . PHP_EOL;
		$class .= "\t\t\t\t\t\t" . '$exporter->write_buffer($array_' . $tablename . ');' . PHP_EOL;
		$class .= "\t\t\t\t\t" . '}' . PHP_EOL;
		$class .= "\t\t\t\t\t" . 'else' . PHP_EOL;
		$class .= "\t\t\t\t\t" . '{'  . PHP_EOL;
		$class .= "\t\t\t\t\t\t" . '$app->display_error_and_die(' . "'" . $tablename . '.php' . "','entrypoint','access error write buffer');" . PHP_EOL;
		$class .= "\t\t\t\t\t" . '}'  . PHP_EOL;

		
		$class .= "\t\t\t\t" . '}' . PHP_EOL;
		$class .= "\t\t\t" . '}' . PHP_EOL;
		$class .= "\t\t" . '}' . PHP_EOL;	 
		$class .=  "\t\t" . 'else' . PHP_EOL;
		$class .=  "\t\t" . '{' . PHP_EOL;	
		
		$default_view_id = $this->get_db_manager()->get_default_view_id($tablename);
		
		$class .= "\t\t\t" . '$view = null;' . PHP_EOL;

		$class .= "\t\t\t" . 'if (empty($get_parameter->view_name))' . PHP_EOL;
		$class .= "\t\t\t" . '{' . PHP_EOL;
		$class .= "\t\t\t\t" . 'require_once(' ."'" . 'include/data/table_views/cls_view_' . $tablename . '_' .  str_replace('-','_',$default_view_id) . ".php'" . ');' . PHP_EOL;
		$class .= "\t\t\t\t" . '$view = new cls_view_' . $tablename . '_' .  str_replace('-','_',$default_view_id) . '($app->get_db_manager(),$app);' . PHP_EOL;
		$class .= "\t\t\t" . '}' . PHP_EOL;
		$class .= "\t\t\t" . 'else' . PHP_EOL;
		$class .= "\t\t\t" . '{' . PHP_EOL;
	
		$array_views = $this->get_db_manager()->get_data_views_for_table($tablename);

		if (count($array_views) != 0)
		{		
			$class .= "\t\t\t\t" . 'switch (strtolower($get_parameter->view_name))' . PHP_EOL;
			$class .= "\t\t\t\t" . '{'  . PHP_EOL;
			foreach ($array_views as $array_view)
			{
				$view_id = $array_view['id'];
				$view_id_masked = str_replace('-','_',$view_id);
				
				$class .= "\t\t\t\t\t" . 'case ' . '"' . strtolower($array_view['name']) . '":' . PHP_EOL;  
				$class .= "\t\t\t\t\t\t" . 'require_once(' . "'" . 'include/data/table_views/cls_view_' . $tablename . '_' .  $view_id_masked .  ".php'" . ');' . PHP_EOL;
				$class .= "\t\t\t\t\t\t" . '$view = new cls_view_' . $tablename . '_' .  $view_id_masked . '($app->get_db_manager(),$app);' . PHP_EOL;
				$class .= "\t\t\t\t\t\t" . 'break;'  . PHP_EOL;
				$class .= "\t\t\t\t\t" . 'case ' . '"' . $view_id . '":' . PHP_EOL;  
				$class .= "\t\t\t\t\t\t" . 'require_once(' ."'" . 'include/data/table_views/cls_view_' . $tablename . '_' .  $view_id_masked .  ".php'" . ');' . PHP_EOL;
				$class .= "\t\t\t\t\t\t" . '$view = new cls_view_' . $tablename . '_' .  $view_id_masked . '($app->get_db_manager(),$app);' . PHP_EOL;
				$class .= "\t\t\t\t\t\t" . 'break;'  . PHP_EOL;
				
			
			}
		
			$class .= "\t\t\t\t" . '}'  . PHP_EOL;
		}

		$class .= "\t\t\t" . '}' . PHP_EOL;
		$class .= "\t\t\t" . 'if (is_null($view))' . PHP_EOL;
		$class .= "\t\t\t\t" . '{' . PHP_EOL;
		$class .= "\t\t\t\t\t" . '$app->display_error_and_die(' . "'" . $tablename . '.php' . "','entrypoint','no view class found');" . PHP_EOL;
		$class .= "\t\t\t\t" . '}' . PHP_EOL;
		
		$class .= "\t\t\t" . '$data = $view->query($get_parameter->search_values,$get_parameter->limit,$get_parameter->offset);' . PHP_EOL;
		
		$class .= "\t\t\t" . 'if (count($data) == 0) return  ' . "'';" . PHP_EOL;
		
		$class .= "\t\t\t" . '$formatter = null;' . PHP_EOL;
		
		$class .=  PHP_EOL;
		
		$class .= "\t\t\t" . 'switch ($get_parameter->format)' . PHP_EOL;
		
		$class .= "\t\t\t" . '{'  . PHP_EOL;
		$class .= "\t\t\t\t" . ' case "json":' . PHP_EOL;
		$class .= "\t\t\t\t\t" . "require_once('include/data/base_formatters/cls_json_formatter.php');" . PHP_EOL;
		$class .= "\t\t\t\t\t" . '$formatter = new cls_json_formatter($app->get_db_manager(),$app);'  . PHP_EOL;
		$class .= "\t\t\t\t\t" . 'break;' . PHP_EOL;
		$class .= "\t\t\t" . '}' . PHP_EOL;
		
		$class .=  PHP_EOL;
		
		$class .= "\t\t\t" . 'if (is_null($formatter))' . PHP_EOL;
		$class .= "\t\t\t" . '{' . PHP_EOL;
		$class .= "\t\t\t\t" . '$app->display_error_and_die(' . "'" . $tablename . '.php' . "','" . 'entrypoint' . "'," . '"no formatter class found for $format");' . PHP_EOL;
		$class .= "\t\t\t" . '}' . PHP_EOL;
	
		$class .=  PHP_EOL;
		
		$class .= "\t\t\t" . '$formatter->set_column_types($view->get_column_definitions());' . PHP_EOL; 
		$class .= "\t\t\t" . '$result = $formatter->format_data($data);' . PHP_EOL;
		
		$class .=  PHP_EOL;
		
		$class .= "\t\t\t" . 'if (!$get_parameter->buffering)' . PHP_EOL;
		$class .= "\t\t\t" . '{'  . PHP_EOL;
		$class .= "\t\t\t\t" . 'echo $result;'  . PHP_EOL;
		$class .=  "\t\t\t" . '}' . PHP_EOL;
		$class .= "\t\t\t" . 'else' . PHP_EOL;
		$class .= "\t\t\t" . '{'  . PHP_EOL;
		$class .= "\t\t\t\t" . 'if ($app->get_allow_buffering())' . PHP_EOL;
		$class .= "\t\t\t\t" . '{' . PHP_EOL;
		$class .= "\t\t\t\t\t" . '$formatter->write_buffer($result);' . PHP_EOL;
		$class .= "\t\t\t\t" . '}' . PHP_EOL;
		$class .= "\t\t\t\t" . 'else' . PHP_EOL;
		$class .= "\t\t\t\t" . '{'  . PHP_EOL;
		$class .= "\t\t\t\t\t" . '$app->display_error_and_die(' . "'" . $tablename . '.php' . "','entrypoint','access error write buffer');" . PHP_EOL;
		$class .= "\t\t\t\t" . '}'  . PHP_EOL;
		$class .=  "\t\t\t" . '}' . PHP_EOL;
		$class .=  "\t\t" . '}' . PHP_EOL;

		$class .=  "\t" . '}' . PHP_EOL;
		$class .=  '}' . PHP_EOL;
		$class .= '?>' . PHP_EOL;
		

		file_put_contents($file, $class);
	
	
	
	}
	
	
	public function create_missing_relations($tables)
	{

		if (is_null($this->get_db_manager())) 
		{
			return;
		}
	
		$this->get_db_manager()->delete_empty_table_relations();
	
		foreach ($tables as $tablename)
		{
			$this->create_missing_table_relations($tablename,$tables);
		}
	
	
	}
	
	public function create_missing_table_relations($tablename,$tables)
	{

	
	
		if (is_null($this->get_db_manager())) 
		{
			return;
		}

		$db = $this->get_db_manager();
		
		$fields = $this->get_db_manager()->get_columns($tablename);

		foreach ($fields as $fieldinfo)
		{
		
			if (cls_utils::starts_with($fieldinfo['name'],'id_'))
			{
			
				if ($db->table_relation_exists($tablename,$fieldinfo['name'])) continue;
			
				$child_tablename = substr($fieldinfo['name'],3);

				if (!$db->table_exists($child_tablename))
				{
					foreach ($tables as $tablename_loop)
					{
						if (cls_utils::starts_with($child_tablename,$tablename_loop)) 
						{
							$child_tablename = $tablename_loop;
							break;
						}
					
					}
				
				
				}
				
			
				if (!$db->table_exists($child_tablename)) $child_tablename = null;
				
				$db->set_table_relation($tablename,$fieldinfo['name'],$child_tablename);
			
			
			}
		 
		}
	
	
	}
	
	
	
	public static function get_contructor()
	{
	
		$class = '';
		
		$class .= "\t" . 'function __construct()' . PHP_EOL;
		$class .= "\t" . '{' . PHP_EOL;
		$class .= "\t\t" . '$a = func_get_args();' . PHP_EOL;
		$class .= "\t\t" . '$i = func_num_args();' . PHP_EOL;
		$class .= "\t\t" . 'if (method_exists($this,$f="__construct".$i))' . PHP_EOL; 
		$class .= "\t\t" . '{' . PHP_EOL;
		$class .= "\t\t\t" . 'call_user_func_array(array($this,$f),$a);' . PHP_EOL; 
		$class .= "\t\t" . '}' . PHP_EOL;
		$class .= "\t" . '}' . PHP_EOL;

		return $class;
	
	}
	
	
	
	public function update_data_dictionary()
	{
	
		$this->get_db_manager()->update_data_dictionary();
	
	}
	
	
	
	public function checkstring($input)
	{
		return preg_replace('/[\x00-\x09\x0B\x0C\x0E-\x1F\x7F]/', '', $input);
	}
	
	public function write_table_factory($tables)
	{
	
		$file = 'include/data/table_factory/cls_table_factory.php';
	
		$class = '<?php' . PHP_EOL;
		$class .= "if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');" . PHP_EOL;
				$class .= 'class cls_table_factory' . PHP_EOL;
		$class .= '{'  . PHP_EOL;

		foreach ($tables as $tablename)
		{
			$tablename = $this->checkstring($tablename);

			$class .= "\t" . 'private static $p_common_' . $tablename . ' = null;' . PHP_EOL;
		}

		foreach ($tables as $tablename)
		{
			$tablename = $this->checkstring($tablename);
		
			$class .= PHP_EOL;
			$class .= "\t" . 'public static function get_common_' . $tablename . '()' . PHP_EOL ;
			$class .= "\t\t" . '{'  . PHP_EOL ;
			$class .= "\t\t" . 'if (is_null(self::$p_common_' . $tablename . '))' . PHP_EOL ;
			$class .= "\t\t\t" . '{'  . PHP_EOL ;
			$class .= "\t\t\t\t" . 'self::$p_common_' . $tablename . ' = self::create_instance("' . $tablename . '");' . PHP_EOL ;
			$class .= "\t\t\t" . '}'  . PHP_EOL ;
			$class .= "\t\t\t" . 'return self::$p_common_' . $tablename . ';'  . PHP_EOL ;
			$class .= "\t\t" .'}'  . PHP_EOL ;
			$class .= PHP_EOL;
		
		}
		
		
		
		$class .= PHP_EOL;

		$class .= "\t" . 'public static function get_common($tablename)' . PHP_EOL;
		
		$class .= "\t{" . PHP_EOL;
		
		$class .= "\t\t" . 'switch ($tablename)' . PHP_EOL; 
		$class .= "\t\t\t{" . PHP_EOL;
		
		foreach ($tables as $tablename)
		{
			$class .= "\t\t\t\t" . "case " . '"' . $tablename . '":' . PHP_EOL;
			$class .= "\t\t\t\t\t" . "require_once('include/data/tables/cls_table_" . $tablename . '.php' . "');" . PHP_EOL;
			$class .= "\t\t\t\t\t" . 'return self::get_common_' . $tablename . "();" . PHP_EOL;
			$class .= "\t\t\t\t\t" . "break;" . PHP_EOL;

		}

		$class .= "\t\t\t}" . PHP_EOL;
		$class .= "\t}" . PHP_EOL;
		
		$class .= PHP_EOL;

		
		$class .= "\t" . 'public static function create_instance($tablename)' . PHP_EOL;
		
		$class .= "\t{" . PHP_EOL;
		
		$class .= "\t\t" . 'switch ($tablename)' . PHP_EOL; 
		$class .= "\t\t\t{" . PHP_EOL;
		
		foreach ($tables as $tablename)
		{
		
			$class .= "\t\t\t\t" . "case " . '"' . $tablename . '":' . PHP_EOL;
			$class .= "\t\t\t\t\t" . "require_once('include/data/tables/cls_table_" . $tablename . '.php' . "');" . PHP_EOL;
			$class .= "\t\t\t\t\t" . "return new cls_table_" . $tablename . "();" . PHP_EOL;
			$class .= "\t\t\t\t\t" . "break;" . PHP_EOL;
		
		}
		
		$class .= "\t\t\t}" . PHP_EOL;
		
		$class .= "\t}" . PHP_EOL;

		$class .= '}' . PHP_EOL;
		$class .= '?>' . PHP_EOL;
	
		file_put_contents($file, $class);

	
	}
	

	public function write_table_includes($tables)
	{
	
		$file = 'include/data/table_includes/cls_table_includes.php';
	
		$class = '<?php' . PHP_EOL;
		$class .= "if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');" . PHP_EOL;
		$class .= 'class cls_table_includes' . PHP_EOL;
		$class .= '{'  . PHP_EOL;

		$class .= 'public static function include_table($tablename)' . PHP_EOL;
		
		$class .= "\t{" . PHP_EOL;
		
		$class .= "\t\t" . 'switch ($tablename)' . PHP_EOL; 
		$class .= "\t\t\t{" . PHP_EOL;
		
		foreach ($tables as $tablename)
		{
		
			$class .= "\t\t\t\t" . "case " . '"' . $tablename . '":' . PHP_EOL;
			$class .= "\t\t\t\t\t" . "require_once('include/data/tables/cls_table_" . $tablename . '.php' . "');" . PHP_EOL;
			$class .= "\t\t\t\t\t" . "break;" . PHP_EOL;
		
		}
		
		$class .= "\t\t\t}" . PHP_EOL;
		
		$class .= "\t}" . PHP_EOL;

		$class .= '}' . PHP_EOL;
		$class .= '?>' . PHP_EOL;
	
		file_put_contents($file, $class);


	
	}
	
	public function write_test_run($tables)
	{
	
		$file = 'include/data/table_test_run/cls_table_test_run.php';

		if (is_null($this->get_db_manager())) 
		{
			return;
		}

		
		$db = $this->get_db_manager();
		$application = $this->get_application();
		
		$class = "<?php" . PHP_EOL;
		$class .= "if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');" . PHP_EOL;
		$class .= "require_once('include/data/cls_table_test_result.php');"  . PHP_EOL;
		$class .= "require_once('include/cls_base_class.php');"  . PHP_EOL;
		$class .= "class cls_table_test_run extends cls_base_class" . PHP_EOL;
		$class .= "{"  . PHP_EOL;
		
		$class .= "\t" . 'private $p_results  = array();' . PHP_EOL;
		$class .=  PHP_EOL;
		
		$class .= "\t" . 'public function get_results()' . PHP_EOL;
		$class .= "\t" . '{' . PHP_EOL;
		$class .= "\t\t" . 'return $this->p_results;' . PHP_EOL;
		$class .= "\t" . '}' . PHP_EOL;

		
		$class .=  PHP_EOL;
		$class .= self::get_contructor();
		$class .=  PHP_EOL;
		
		$test_file = false;
		
		foreach ($tables as $tablename)
		{

			$test_file = $db->get_table_test_run($tablename,$db,$application);
			if (!empty($test_file))
			{
				$application->log(__CLASS__, __FUNCTION__, 'overwritten test file table--> ' . $tablename . ' include--> ' . $include);
				if (!file_exists($test_file))
				{
					$application->log(__CLASS__, __FUNCTION__, 'test file does not exist table--> ' . $tablename . ' include--> ' . $test_file);
					$test_file = null;
				}
				
			}
			
			
			if (empty($test_file))
			{
				$include = 'include/data/table_tests/cls_test_' . $tablename . '.php';
			}
			
			$class .= "\t" . 'public function run_' . $tablename . '($db_manager,$application)' . PHP_EOL;
			$class .= "\t" . '{' . PHP_EOL;

			if (file_exists($include)) 
				{
				$application->log(__CLASS__, __FUNCTION__, 'table--> ' . $tablename . ' include--> ' . $include);
				$class .= "\t\t" . "require_once('" . $include . "');" . PHP_EOL;
				$class .= "\t\t" . '$result = new cls_table_test_result(' . "'" . $tablename . "'" . ');' . PHP_EOL;
				$class .= "\t\t" . '$test = new cls_test_' . $tablename . '($db_manager,$application,$result);' . PHP_EOL;
				$class .= "\t\t" . '$test->run_tests();' . PHP_EOL;
				$class .= "\t\t" . '$this->get_results()[' . "'" . $tablename . "'" . '] = $result;' . PHP_EOL; 
				$class .= "\t\t" . 'return $result;' . PHP_EOL;
				}
			else
				{
				$application->log(__CLASS__, __FUNCTION__, 'test file does not exist table--> ' . $tablename . ' include--> ' . $include);
				$class .= "\t\t" . '$result = new cls_table_test_result();' . PHP_EOL;
				$class .= "\t\t" . '$result->state = 3;' . PHP_EOL;
				$class .= "\t\t" . 'return $result;' . PHP_EOL;
				}
	
	
			$class .= "\t" . '}' . PHP_EOL;
			$class .=  PHP_EOL;
	
	
		}

		$class .= "\t" . 'public function run_tests()' . PHP_EOL;
		$class .= "\t" . '{' . PHP_EOL;

		
		foreach ($tables as $tablename)
		{
			$class .= "\t\t" . '$this->run_' . $tablename . '($this->get_db_manager(),$this->get_application());' . PHP_EOL;
		}		
		
		$class .= "\t" . '}' . PHP_EOL;

		$class .= "\t" . 'public function run_group($id_test_group)' . PHP_EOL;
		$class .= "\t" . '{' . PHP_EOL;
		$class .= "\t" . '}' . PHP_EOL;
		
		$class .= "}"  . PHP_EOL;
		$class .= "?>" . PHP_EOL;
	
		file_put_contents($file, $class);

		
	
	}
	
	public function write_test_class($tablename)
	{

		if (is_null($this->get_db_manager())) 
		{
			return;
		}

		
		$file = 'include/data/table_tests/cls_test_' . $tablename . '.php';
		
		$class = "<?php" . PHP_EOL;
		$class .= "if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');" . PHP_EOL;
		$class .= "require_once('include/data/cls_table_test_result.php');" . PHP_EOL;
		$class .= "require_once('include/data/cls_table_test_base.php');" . PHP_EOL;
		$class .= "require_once('include/utils/cls_utils.php');" . PHP_EOL;
		
		$class .= "class cls_test_"  . $tablename . ' extends cls_table_test_base' . PHP_EOL;
		$class .= "{"  . PHP_EOL;
		$class .= self::get_contructor();
		$class .= "\t" . 'public function run_tests()' . PHP_EOL; 
		$class .= "\t" . "{"  . PHP_EOL;
		$class .= "\t\t" . '$class_methods = get_class_methods(__CLASS__);' . PHP_EOL ;
		$class .= "\t\t" . '$found = false;' . PHP_EOL ;
		$class .= "\t\t" . 'foreach ($class_methods as $method_name)' . PHP_EOL ;
		$class .= "\t\t" . '{' . PHP_EOL ; 
		$class .= "\t\t\t" . 'if (cls_utils::starts_with($method_name,"run_"))'  . PHP_EOL ;
		$class .= "\t\t\t\t" . '{'  . PHP_EOL ;
		$class .= "\t\t\t\t\t" . '$found = true;' . PHP_EOL ;
		$class .= "\t\t\t\t\t" . 'break; ' . PHP_EOL ;
		$class .= "\t\t\t\t" . '}'  . PHP_EOL ;
		$class .= "\t\t" . '}' . PHP_EOL ;
		$class .= "\t\t" . 'if (!$found)' . PHP_EOL ;
		$class .= "\t\t" . '{' . PHP_EOL ; 
		$class .= "\t\t\t" . '$this->result->state = 2;' . PHP_EOL; 
		$class .= "\t\t\t" . 'return $this->result;' . PHP_EOL; 
		$class .= "\t\t" . '}' . PHP_EOL ; 
		
		$class .= "\t" . "}"  . PHP_EOL;
		
		

		$class .= "}"  . PHP_EOL;
		$class .= "?>" . PHP_EOL;
	
		file_put_contents($file, $class);
	
	
	}
	
	
	public function write_save_class($tablename)
	{
	
		if (is_null($this->get_db_manager())) 
		{
			return;
		}

		$fields = $this->get_db_manager()->get_columns($tablename);
		
		$file = 'include/data/base_table_savers/cls_save_' . $tablename . '.php';

		$class = "<?php" . PHP_EOL;
		$class .= "if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');" . PHP_EOL;
		$class .= "require_once('include/data/cls_datatable_save_base.php');" . PHP_EOL;
		$class .= "require_once('include/data/cls_data_result.php');" .  PHP_EOL;
		$class .= "class cls_save_"  . $tablename . ' extends cls_datatable_save_base' . PHP_EOL;
		$class .= "{"  . PHP_EOL;

		$class .= PHP_EOL;
		$class .= "\t" . 'public function get_table_name()' . PHP_EOL; 
		$class .= "\t\t" . "{"  . PHP_EOL;
		$class .= "\t\t\t" . "return '" . $tablename . "';" . PHP_EOL; 
		$class .= "\t\t" . "}"  . PHP_EOL;
		
		$class .= PHP_EOL;
		$class .= "\t" . 'public static function save_object($' . $tablename . ',$db_manager,$application)' . PHP_EOL; 
		$class .= "\t\t" . "{"  . PHP_EOL;
		 	
		
		$class .= "\t\t\t" . 'if (is_null($' . $tablename . '))' . PHP_EOL;
		$class .= "\t\t\t" . '{'  . PHP_EOL;	
		$class .= "\t\t\t\t" . '$result = new cls_data_result();' . PHP_EOL;
		$class .= "\t\t\t\t" . '$result->state = 1;' . PHP_EOL; 
		$class .= "\t\t\t\t" . '$result->message_no = 1;' . PHP_EOL; 
		$class .= "\t\t\t\t" . 'return $result;'  . PHP_EOL;  
		$class .= "\t\t\t" . '}'  . PHP_EOL;
		$class .= "\t\t\t" . 'if (!$' . $tablename . '->is_dirty())' . PHP_EOL;
		$class .= "\t\t\t" . '{'  . PHP_EOL;	
		$class .= "\t\t\t\t" . '$result = new cls_data_result();' . PHP_EOL;
		$class .= "\t\t\t\t" . '$result->state = 2;' . PHP_EOL; 
		$class .= "\t\t\t\t" . 'return $result;'  . PHP_EOL;  
		$class .= "\t\t\t" . '}' . PHP_EOL;
		
		$class .= "\t\t\t" . '$data = array();' . PHP_EOL;
		foreach ($fields as $fieldinfo)
		{
			if ($fieldinfo['name'] == "id") continue;
			$class .= "\t\t\t" . 'if ($' . $tablename . '->get_' . $fieldinfo['name'] . '_is_dirty())' . PHP_EOL;
			$class .= "\t\t\t\t" . '{' . PHP_EOL;
			$class .= "\t\t\t\t" . '$data[] = array("name" => "' . $fieldinfo['name'] . '" , "value" => $' . $tablename . '->get_' . $fieldinfo['name'] . '() , "type" => "' . $fieldinfo['udt_name'] . '");'  . PHP_EOL;
			$class .= "\t\t\t\t" . '}' . PHP_EOL;
		}		
		
		$class .= "\t\t\t" . 'if (count($data) == 0)' . PHP_EOL;
		$class .= "\t\t\t\t" . '{' . PHP_EOL;
		$class .= "\t\t\t\t" . '$result = new cls_data_result();' . PHP_EOL;
		$class .= "\t\t\t\t" . '$result->state = 2;' . PHP_EOL; 
		$class .= "\t\t\t\t" . 'return $result;'  . PHP_EOL;  
		$class .= "\t\t\t\t" . '}' . PHP_EOL;
		
		$is_table_location_dependant = $this->get_db_manager()->is_table_location_dependant($tablename);
		
		$class .= "\t\t\t" . 'if ($db_manager->record_exists(' . "'" . $tablename . "',"  . '$' . $tablename . '->get_id()))'  . PHP_EOL;
		$class .= "\t\t\t\t" . '{' . PHP_EOL;
		$class .= "\t\t\t\t" . '$result = $' . $tablename . '->check_values($db_manager,$application,false);' . PHP_EOL;
		$class .= "\t\t\t\t" . 'if ($result->get_state() != 0) return $result;' . PHP_EOL;
		$class .= "\t\t\t\t" . '$result = $db_manager->update_record(' . "'" . $tablename .  "'," . '$' . $tablename . '->get_id(),$data);' . PHP_EOL; 
		$class .= "\t\t\t\t" . 'if ($result->get_state() != 0) return $result;' . PHP_EOL;
		if ($is_table_location_dependant)
			{
			$class .= "\t\t\t\t" . '$db_manager->register_location_dependant_record(' . "'" . $tablename . "',$" . $tablename . '->get_id(),$application,$' .$tablename . '->get_id_save_location(),false);' . PHP_EOL;   
			}
		$class .= "\t\t\t\t" . '$' . $tablename . '->after_save($db_manager,$application,false);' . PHP_EOL;
		$class .= "\t\t\t\t" . '}' . PHP_EOL;
		$class .= "\t\t\t" . 'else' . PHP_EOL;
		$class .= "\t\t\t\t" . '{' . PHP_EOL;
		$class .= "\t\t\t\t" . '$result = $' . $tablename . '->check_values($db_manager,$application,true);' . PHP_EOL;
		$class .= "\t\t\t\t" . 'if ($result->get_state() != 0) return $result;' . PHP_EOL;
		$class .= "\t\t\t\t" . '$result = $db_manager->insert_record(' . "'" . $tablename .  "'," . '$' . $tablename . '->get_id(),$data);' . PHP_EOL; 
		$class .= "\t\t\t\t" . 'if ($result->get_state() != 0) return $result;' . PHP_EOL;
		if ($is_table_location_dependant)
			{
			$class .= "\t\t\t\t" . '$db_manager->register_location_dependant_record(' . "'" . $tablename . "',$" . $tablename . '->get_id(),$application,$' .$tablename . '->get_id_save_location(),true);' . PHP_EOL;   
			}
		$class .= "\t\t\t\t" . '$' . $tablename . '->after_save($db_manager,$application,true);' . PHP_EOL;
		$class .= "\t\t\t\t" . '}' . PHP_EOL;
		$class .= "\t\t\t" . 'if (!is_null($application->get_table_test()))'  . PHP_EOL;
		$class .= "\t\t\t\t" . '{' . PHP_EOL;
		
		$class .= "\t\t\t\t" . '}' . PHP_EOL;
		
		$class .= "\t\t\t" . 'return $result;' . PHP_EOL; 	
		$class .= "\t\t" . "}"  . PHP_EOL;

		$class .= PHP_EOL;
		$class .= "\t" . 'public static function save_array($data,$db_manager,$application)' . PHP_EOL; 
		$class .= "\t\t" . "{"  . PHP_EOL;
		 	
		
		$class .= "\t\t\t" . "require_once('include/data/table_factory/cls_table_factory.php');" . PHP_EOL;
		$class .= "\t\t\t" . '$' . $tablename . ' = null;' . PHP_EOL;
		$class .= "\t\t\t" . '$id = $this->get_id_from_array($data);' . PHP_EOL;
		
		
		$class .= "\t\t\t" . 'if (!empty($id))' . PHP_EOL;
		$class .= "\t\t\t\t" . '{' . PHP_EOL;
		$class .= "\t\t\t\t" . 'if (!self::check_data_complete($data))' . PHP_EOL;
		$class .= "\t\t\t\t\t" . '{' . PHP_EOL;
		$class .= "\t\t\t\t\t\t" . '$' . $tablename . ' = cls_table_factory::get_common_' . $tablename . '()->get_by_id($id,$db_manager);' . PHP_EOL;
		$class .= "\t\t\t\t\t" . '}' . PHP_EOL;
		$class .= "\t\t\t\t" . '}' . PHP_EOL;
		
		$class .= "\t\t\t" . 'if (is_null($' . $tablename . '))' . PHP_EOL; 
		$class .= "\t\t\t\t" . '{' . PHP_EOL;
		$class .= "\t\t\t\t\t" . '$' .  $tablename . " = cls_table_factory::create_instance('" . $tablename . "');" . PHP_EOL; 
		$class .= "\t\t\t\t" . '}' . PHP_EOL;
		$class .= "\t\t\t" . '$' .  $tablename . '->fill($data,false);' . PHP_EOL; 
		
		$class .= "\t\t\t" . 'return self::save_object($' . $tablename . ',$db_manager,$application);' . PHP_EOL; 	
		$class .= "\t\t" . "}"  . PHP_EOL;

		$class .= PHP_EOL;
		$class .= "\t" . 'public static function check_data_complete($data)' . PHP_EOL;
		$class .= "\t\t" . '{'  . PHP_EOL;
		$class .= "\t\t\t" . '$field_count = ' . count($fields) . ';' . PHP_EOL;
		$class .= "\t\t\t" . '$counter = 0;' . PHP_EOL;
		$class .= "\t\t\t" . 'if (count($data) < $field_count) return false;' . PHP_EOL;
		$class .= "\t\t\t" . 'reset($data);' . PHP_EOL;
		$class .= "\t\t\t" . 'foreach ($data as $key => &$val)' . PHP_EOL;
		$class .= "\t\t\t" . '{'  . PHP_EOL;
		$class .= "\t\t\t\t" . 'switch($key)' . PHP_EOL;
		$class .= "\t\t\t\t" . '{'  . PHP_EOL;

		foreach ($fields as $fieldinfo)
		{
			$class .= "\t\t\t\t" . 'case "' . $tablename . '.' . $fieldinfo['name'] . '":' . PHP_EOL;
			$class .= "\t\t\t\t\t" . '$counter++;' . PHP_EOL;
			$class .= "\t\t\t\t\t" . 'break;' . PHP_EOL;
			$class .= "\t\t\t\t" . 'case "' . $fieldinfo['name'] . '":' . PHP_EOL;
			$class .= "\t\t\t\t\t" . '$counter++;' . PHP_EOL;
			$class .= "\t\t\t\t\t" . 'break;' . PHP_EOL;
		}		
		$class .= "\t\t\t\t" . '}'  . PHP_EOL;

		
		$class .= "\t\t\t" . '}'  . PHP_EOL;		
		
		$class .= "\t\t\t" . 'if ($counter == $field_count) return true;' . PHP_EOL;  
		
		$class .= "\t\t\t" . 'return false;' . PHP_EOL;
		
		$class .= "\t\t" . '}' . PHP_EOL;
		
		
		
		$class .= "}"  . PHP_EOL;
		

		
		
		$class .= "?>" . PHP_EOL;
	
		file_put_contents($file, $class);
		
	
	}
	
	
	public function write_base_class($tablename)
	{

	
	
		if (is_null($this->get_db_manager())) 
		{
			return;
		}



		
		$file = 'include/data/base_tables/cls_base_' . $tablename . '.php';
	
		$class = "<?php" . PHP_EOL;
		$class .= "if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');" . PHP_EOL;
		$class .= "require_once('include/data/cls_datatable_base.php');" . PHP_EOL;
		$class .= "require_once('include/data/cls_data_result.php');" .  PHP_EOL;
		$class .= "abstract class cls_base_"  . $tablename . ' extends cls_datatable_base' . PHP_EOL;
		$class .= "{"  . PHP_EOL;
	
		$class .= 'private static $p_cmmon;' . PHP_EOL;
		
		$fields = $this->get_db_manager()->get_columns($tablename);
	
		foreach ($fields as $fieldinfo)
		{
		
			if ($fieldinfo['name'] != "id")
			{
				$class .= 'private $p_' . $fieldinfo['name'] . ' = null;' . PHP_EOL; 
				$class .= 'private $p_' . $fieldinfo['name'] . '_original = null;' . PHP_EOL;
			}
		
		}

		$class .= PHP_EOL;
		
		foreach ($fields as $fieldinfo)
		{
		
			if ($fieldinfo['name'] != "id")
			{
				$class .= 'private $p_' . $fieldinfo['name'] . '_is_dirty = false;' . PHP_EOL; 
			}
		
		}

		$class .= PHP_EOL;
	
		$class .= 'public function _get_table_name()' . PHP_EOL; 
		$class .= "{"  . PHP_EOL;
		$class .= "\t" . "return '" . $tablename .	"';" . PHP_EOL;
		$class .= "}"  . PHP_EOL;

		$class .= PHP_EOL;
		
		$class .= 'public function get_table_fields()' . PHP_EOL; 
		$class .= "{"  . PHP_EOL;
		
		$class .= "\treturn array(";
		
		$afields = '';
		
		$i = 0;
		foreach ($fields as $fieldinfo)
		{
			If ($i != 0)
			{
				$class .= ',';
			}
			$class .= "'" . $fieldinfo['name'] . "'";
			$i++;
		}
		
		$class .= ');' . PHP_EOL; 
		
		$class .= "}"  . PHP_EOL;

		$class .= PHP_EOL;
		
		$class .= 'public function get_table_select($delimiter = ' . "'" .'"'. "'" . ')' . PHP_EOL; 
		$class .= "{"  . PHP_EOL;
		
		$class .= "\treturn 'select ";

		$i = 0;
		foreach ($fields as $fieldinfo)
		{
			If ($i != 0)
			{
				$class .= ',';
			}

			$class .=  $fieldinfo['name'] . ' as ';
			
			$class .= "' . " . '$delimiter' . " . '"; 
			$class .= $tablename;
			$class .= '.';
			$class .= $fieldinfo['name'];
			$class .= "' . " . '$delimiter' . " . '";
			
			$i++;
		}
		
		$class .= ' from ' . $tablename . "';"  . PHP_EOL;
		
		$class .= "}"  . PHP_EOL;
		
		$class .= PHP_EOL;
		
		$class .= 'public function get_search_fields()'  . PHP_EOL;
		$class .= "{"  . PHP_EOL;
		$class .= "\t" . '$search_fields = array();' . PHP_EOL;
		
		$search_fields = $this->get_db_manager()->get_search_columns($tablename);
		
		foreach ($search_fields as $searchfieldinfo)
		{
			if ($searchfieldinfo['case_sensitive']) 
			{
				$case_sensitive = 'true';
			}
			else
			{
				$case_sensitive = 'false';
			}
			
			
			$class .= "\t" . '$search_fields[] = array("name"  => "' . $searchfieldinfo['name'] . '" , ' . '"udt_name" => "' . $searchfieldinfo['udt_name'] . '" , "case_sensitive" => ' . $case_sensitive . ');'  . PHP_EOL;  
		}
		
		$class .= "\t" . 'return $search_fields;' . PHP_EOL;
		$class .= "}"  . PHP_EOL;
				
		foreach ($fields as $fieldinfo)
		{
			$class .= PHP_EOL;
			
			if ($fieldinfo['name'] != "id")
			{
			$class .= 'public function get_' . $fieldinfo['name'] . '()' . PHP_EOL;
			$class .= "{"  . PHP_EOL;
			$class .= "\t" . 'return $this->p_' . $fieldinfo['name'] . ';' . PHP_EOL;
			$class .= "}"  . PHP_EOL;

			$class .= PHP_EOL;

			$class .= 'public function get_' . $fieldinfo['name'] . '_original()' . PHP_EOL;
			$class .= "{"  . PHP_EOL;
			$class .= "\t" . 'return $this->p_' . $fieldinfo['name'] . '_original;' . PHP_EOL;
			$class .= "}"  . PHP_EOL;

			$class .= PHP_EOL;

			
			$class .= 'public function set_' . $fieldinfo['name'] . '($value)' . PHP_EOL;
			$class .= "{"  . PHP_EOL;
			$class .= "\t" . 'if ($this->p_' . $fieldinfo['name'] . ' === $value)' . PHP_EOL;
			$class .= "\t{"  . PHP_EOL;
			$class .= "\t\t" . 'return;' . PHP_EOL; 
			$class .= "\t}"  . PHP_EOL;
			$class .= "\t" . '$this->set_dirty(true);' . PHP_EOL;
			$class .= "\t" . '$this->p_' . $fieldinfo['name'] . '_is_dirty = true;'  . PHP_EOL;
			$class .= "\t" . '$this->p_' . $fieldinfo['name'] . ' = $value;'  . PHP_EOL;
			$class .= "}"  . PHP_EOL;

			$class .= PHP_EOL;
			
			$class .= 'public function set_' . $fieldinfo['name'] . '_original($value)' . PHP_EOL;
			$class .= "{"  . PHP_EOL;
			$class .= "\t" . '$this->p_' . $fieldinfo['name'] . '_original = $value;'  . PHP_EOL;
			$class .= "}"  . PHP_EOL;

			$class .= PHP_EOL;
			
			$class .= 'public function get_' . $fieldinfo['name'] . '_is_dirty()' . PHP_EOL;
			$class .= "{"  . PHP_EOL;
			$class .= "\t" . 'return $this->p_' . $fieldinfo['name'] . '_is_dirty;'  . PHP_EOL;
			$class .= "}"  . PHP_EOL;
			
			$class .= PHP_EOL;

			
			}
			
		
		}
		
		$class .= PHP_EOL;
		
		$class .= 'public function reset_dirty($reset_values = false)' . PHP_EOL;
		$class .= "{"  . PHP_EOL;
		foreach ($fields as $fieldinfo)
			{
			if ($fieldinfo['name'] != "id")
				{
				$class .= "\t" . '$this->p_' . $fieldinfo['name'] . '_is_dirty = false;'  . PHP_EOL;
				
				}
			}

		$class .= "\t" . 'if ($reset_values)' . PHP_EOL;
		$class .= "\t{"  . PHP_EOL;
		foreach ($fields as $fieldinfo)
		{
		if ($fieldinfo['name'] != "id")
			{
			$class .= "\t\t" . '$this->p_' . $fieldinfo['name'] . ' = $this->p_' . $fieldinfo['name'] . '_original;' . PHP_EOL;
			}
		}
		$class .= "\t}"  . PHP_EOL;
		$class .= "}"  . PHP_EOL;
		
		
		$class .= 'public function fill($row,$reset = true)' . PHP_EOL;
		$class .= "{" . PHP_EOL;
		
		$class .= "\t" . 'foreach ($row as $key => $val)' . PHP_EOL;
		$class .= "\t\t" . '{'  . PHP_EOL;
		$class .= "\t\t" . 'switch ($key)' . PHP_EOL;
		$class .= "\t\t\t" . '{' . PHP_EOL;
		foreach ($fields as $fieldinfo)
		{
			$class .= "\t\t\t\t" . 'case "' . $tablename . '.' . $fieldinfo['name'] . '":'  . PHP_EOL;
			$class .= "\t\t\t\t\t" . '$this->set_' . $fieldinfo['name'] . '($val);'  . PHP_EOL;
			if ($fieldinfo['name'] != "id")
			{
			$class .= "\t\t\t\t\t" . '$this->set_' . $fieldinfo['name'] . '_original($val);'  . PHP_EOL;
			}
			$class .= "\t\t\t\t\t" . 'break;'  . PHP_EOL;
		}

		
		$class .= "\t\t\t" . '}' . PHP_EOL;
		$class .= "\t\t" . '}'  . PHP_EOL;
		
		$class .= "\t" . 'if ($reset)' . PHP_EOL; 
		$class .= "\t" . '{' . PHP_EOL;
		$class .= "\t\t" . '$this->reset_dirty(false);' . PHP_EOL; 
		$class .= "\t" . '}' . PHP_EOL;
		$class .= "}" . PHP_EOL;
		
		$class .= 'public function get_by_id($id,$db_manager,$application = null)'  . PHP_EOL;
		$class .= "{" . PHP_EOL;
		$class .= "\t" . '$sql = $this->get_table_select($db_manager->get_delimeter());'  . PHP_EOL; 
		$class .= "\t" . '$sql .= ';
		$class .= '"' . " where id = '" . '"' . ' . $id . ' .  '"' . "'" . '";';
		
		$class .= PHP_EOL;

		
		$class .= "\t" . '$result = $db_manager->query($sql);' . PHP_EOL; 
		
		$class .= "\t" . 'if (!is_null($result))' . PHP_EOL; 
		
		$class .= "\t{" . PHP_EOL;
		
		$class .= "\t\trequire_once('include/data/table_factory/cls_table_factory.php');" . PHP_EOL; 
		
		$class .= "\t\t" . '$' . $tablename . " = cls_table_factory::create_instance('" . $tablename . "');" . PHP_EOL;
		
		$class .= "\t\t" . '$row = $db_manager->fetch_row($result);' . PHP_EOL; 
		$class .= "\t\t" . '$' . $tablename . '->fill($row);' . PHP_EOL;
		$class .= "\t\t" . 'return $' . $tablename . ';' . PHP_EOL;
		
		$class .= "\t}" . PHP_EOL;
		
		$class .= "}" . PHP_EOL;
	
		$class .= PHP_EOL;
		$class .= 'public function save($db_manager,$application)'  . PHP_EOL;
		$class .= "\t" . "{" . PHP_EOL;
		$class .= "\t\t" . "require_once('include/data/base_table_savers/cls_save_" . $tablename . ".php');" . PHP_EOL;
		$class .= "\t\t" . 'return cls_save_' . $tablename . '::save_object($this,$db_manager,$application);' . PHP_EOL;
		$class .= "\t" . "}" . PHP_EOL;

		$class .= PHP_EOL;
		
		$class .= 'public function save_array($data,$db_manager,$application)'  . PHP_EOL;
		$class .= "\t" . "{" . PHP_EOL;
		$class .= "\t\t" . "require_once('include/data/base_table_savers/cls_save_" . $tablename . ".php');" . PHP_EOL;
		$class .= "\t\t" . 'return cls_save_' . $tablename . '::save_array($data,$db_manager,$application);' . PHP_EOL;
		$class .= "\t" . "}" . PHP_EOL;

		$class .= PHP_EOL;

		$class .= 'function save_data($data,$db_manager,$application)'  . PHP_EOL;
		$class .= "\t" . "{" . PHP_EOL;

		$class .= "\t" . "}" . PHP_EOL;
		
		$class .= PHP_EOL;

		$function_names = array();

		
//test
		$function_name = 'get_' . $tablename . 's';

		if (!in_array($function_name,$function_names))
		{
			$function_names[] = $function_name; 
		
			$class .= 'public function ' . $function_name . '($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)' . PHP_EOL;
			$class .= "\t" . "{" . PHP_EOL;
			$class .= "\t\t" . '$result = null;' . PHP_EOL; 
			$class .= "\t\t" . 'if (empty($seach_values))'  . PHP_EOL; 
			$class .= "\t\t" . '{'  . PHP_EOL; 
			$class .= "\t\t\t" . '$result = $db_manager->search_for_records(' . "'" . $tablename . "'" . ',null,null,$limit,$offset);' . PHP_EOL; 
			$class .= "\t\t" . '}'  . PHP_EOL; 
			$class .= "\t\t" . 'else' . PHP_EOL;
			$class .= "\t\t" . '{'  . PHP_EOL;
			$class .= "\t\t\t" . '$result = $db_manager->search_for_records(' . "'" . $tablename . "'," . '$this->get_search_fields(),$seach_values,$limit,$offset);'  . PHP_EOL; 
			$class .= "\t\t" . '}'  . PHP_EOL;				
			$class .= "\t\t" . 'if (is_null($result)) return null;' . PHP_EOL;
			$class .= "\t\t" . 'if (count($result) == 0) return null;' . PHP_EOL;
			$class .= "\t\t" . "require_once('include/data/table_factory/cls_table_factory.php');" . PHP_EOL; 
			$class .= "\t\t" . '$data = array();' . PHP_EOL; 
			$class .= "\t\t" . 'while (($row=$db_manager->fetch_by_assoc($result)) !=null)' . PHP_EOL;
			$class .= "\t\t\t" . "{" . PHP_EOL;
			$class .= "\t\t\t\t" . '$' . $tablename . " = cls_table_factory::create_instance('" . $tablename . "');" . PHP_EOL;
			$class .= "\t\t\t\t" . '$' . $tablename . '->fill($row);' . PHP_EOL;
			$class .= "\t\t\t\t" . '$data[] = $' . $tablename . ';'  . PHP_EOL;
			$class .= "\t\t\t" . "}" . PHP_EOL;
			$class .= "\t\t" . 'return $data;' . PHP_EOL; 
			$class .= "\t" . '}' . PHP_EOL;
				
			$class .=  PHP_EOL;
		}	
		else
		{
			echo 'Duplikate Funktion ' . $function_name . '</br>' . PHP_EOL; 
		}	




// end test





		
		$relation_result = $this->get_db_manager()->get_table_relations($tablename);
		
		
		while (($row = $this->get_db_manager()->fetch_by_assoc($relation_result)) !=null) 
		{
			$one_to_many = $row['one_to_many'];
			$table_name_child = $row['table_name_child'];

			$function_name = substr($row['parent_table_field'],3);
			
			$function_name = 'get_' . $function_name;
			
			if (!in_array($function_name,$function_names))
			{
				$function_names[] = $function_name; 
				
				$class .= 'function ' . $function_name . '($db_manager,$application)' . PHP_EOL;
				$class .= "\t" . "{" . PHP_EOL;
				$class .= "\t\t" . '$result = $db_manager->get_records(' . "'" . $row['table_name_child'] . "'," . '$this->get_' . $row['parent_table_field'] .'());' . PHP_EOL; 
				$class .= "\t\t" . 'if (is_null($result)) return null;' . PHP_EOL;
				$class .= "\t\t" . 'if (count($result) == 0) return null;' . PHP_EOL;
				
				$class .= "\t\t" . "require_once('include/data/table_factory/cls_table_factory.php');" . PHP_EOL; 
				$class .= "\t\t" . '$' . $row['table_name_child'] . " = cls_table_factory::create_instance('" . $row['table_name_child'] . "');" . PHP_EOL;
				$class .= "\t\t" . '$row = $db_manager->fetch_row($result);' . PHP_EOL; 
				$class .= "\t\t" . '$' . $row['table_name_child'] . '->fill($row);' . PHP_EOL;
				$class .= "\t\t" . 'return $' . $row['table_name_child'] . ';' . PHP_EOL;
				$class .= "\t}" . PHP_EOL;
				
				$class .=  PHP_EOL;
			}
			else
			{
				echo 'Duplikate Funktion ' . $function_name . '</br>' . PHP_EOL; 
			}	



/*			
			$function_name = 'get_' . $tablename . 's';

			if (!in_array($function_name,$function_names))
			{
				$function_names[] = $function_name; 
			
				$class .= 'public function ' . $function_name . '($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)' . PHP_EOL;
				$class .= "\t" . "{" . PHP_EOL;
				$class .= "\t\t" . '$result = null;' . PHP_EOL; 
				$class .= "\t\t" . 'if (empty($seach_values))'  . PHP_EOL; 
				$class .= "\t\t" . '{'  . PHP_EOL; 
				$class .= "\t\t\t" . '$result = $db_manager->search_for_records(' . "'" . $tablename . "'" . ',null,null,$limit,$offset);' . PHP_EOL; 
				$class .= "\t\t" . '}'  . PHP_EOL; 
				$class .= "\t\t" . 'else' . PHP_EOL;
				$class .= "\t\t" . '{'  . PHP_EOL;
				$class .= "\t\t\t" . '$result = $db_manager->search_for_records(' . "'" . $tablename . "'," . '$this->get_search_fields(),$seach_values,$limit,$offset);'  . PHP_EOL; 
				$class .= "\t\t" . '}'  . PHP_EOL;				
				$class .= "\t\t" . 'if (is_null($result)) return null;' . PHP_EOL;
				$class .= "\t\t" . 'if (count($result) == 0) return null;' . PHP_EOL;
				$class .= "\t\t" . "require_once('include/data/table_factory/cls_table_factory.php');" . PHP_EOL; 
				$class .= "\t\t" . '$data = array();' . PHP_EOL; 
				$class .= "\t\t" . 'while (($row=$db_manager->fetch_by_assoc($result)) !=null)' . PHP_EOL;
				$class .= "\t\t\t" . "{" . PHP_EOL;
				$class .= "\t\t\t\t" . '$' . $tablename . " = cls_table_factory::create_instance('" . $row['table_name_parent'] . "');" . PHP_EOL;
				$class .= "\t\t\t\t" . '$' . $tablename . '->fill($row);' . PHP_EOL;
				$class .= "\t\t\t\t" . '$data[] = $' . $tablename . ';'  . PHP_EOL;
				$class .= "\t\t\t" . "}" . PHP_EOL;
				$class .= "\t\t" . 'return $data;' . PHP_EOL; 
				$class .= "\t" . '}' . PHP_EOL;
					
				$class .=  PHP_EOL;
			}	
			else
			{
				echo 'Duplikate Funktion ' . $function_name . '</br>' . PHP_EOL; 
			}	

			*/		

			
		}
		
		$relation_result = $this->get_db_manager()->get_table_child_relations($tablename);

		while (($row = $this->get_db_manager()->fetch_by_assoc($relation_result)) !=null) 
		{
			$one_to_many = $row['one_to_many'];
			$table_name_child = $row['table_name_child'];

			if ('id_' . $tablename == $row['parent_table_field'])
			{
				$function_name = $row['table_name_parent'];
			}
			else
			{
				$function_name = $row['table_name_parent'] . '_by_' . str_replace('id_' . $tablename, '',$row['parent_table_field']);
			}
			$function_name = str_replace('__','_',$function_name);

			$function_name_base = $function_name;
			
			$function_name = 'get_' . $function_name;
			
			if (!in_array($function_name,$function_names))
			{
				$function_names[] = $function_name; 
			
			
				$child_table_field = '$this->get_' . $row['child_table_field'] . '()';
				
				if ($this->get_db_manager()->get_boolean($one_to_many))
				{
					$class .=  '// it is a one to many relation! Do not use!' . PHP_EOL;
				}
				
				$class .= '//changed 1' . PHP_EOL;
				$class .= 'public function ' . $function_name . '($db_manager,$application)' . PHP_EOL;
				$class .= "\t" . "{" . PHP_EOL;
				$class .= "\t\t" . '$result = $db_manager->get_records(' . "'" . $row['table_name_parent'] . "'," . $child_table_field . ',' . "'" . $row['parent_table_field'] . "'" . ');' . PHP_EOL; 
				$class .= "\t\t" . 'if (is_null($result)) return null;' . PHP_EOL;
				$class .= "\t\t" . 'if (count($result) == 0) return null;' . PHP_EOL;
				
				$class .= "\t\t" . "require_once('include/data/table_factory/cls_table_factory.php');" . PHP_EOL; 
				$class .= "\t\t" . '$' . $row['table_name_parent'] . " = cls_table_factory::create_instance('" . $row['table_name_parent'] . "');" . PHP_EOL;
				$class .= "\t\t" . '$row = $db_manager->fetch_row($result);' . PHP_EOL; 
				$class .= "\t\t" . '$' . $row['table_name_parent'] . '->fill($row);' . PHP_EOL;
				$class .= "\t\t" . 'return $' . $row['table_name_parent'] . ';' . PHP_EOL;
				$class .= "\t}" . PHP_EOL;
				
				$class .=  PHP_EOL;

			}	
			else
			{
				echo 'Duplikate Funktion ' . $function_name . '</br>' . PHP_EOL; 
			}	
	
			
			if ('id_' . $function_name_base == $row['parent_table_field'])
			{
				$function_name_trailer = $row['table_name_parent'] . 's';
			}
			else
			{
				$function_name_trailer = $row['table_name_parent'] . 's_by_' . str_replace('id_' , '',$row['parent_table_field']);
			}
			
			$function_name_trailer = str_replace('__','_', $function_name_trailer);
					
			$function_name = 'get_' . $function_name_trailer; 
					
			if (!in_array($function_name,$function_names))
			{
				$function_names[] = $function_name; 
			
				if (!$this->get_db_manager()->get_boolean($one_to_many))
				{
					$class .=  '// it is a one to one relation! Do not use!' . PHP_EOL;
				}

				
				$class .= '//changed 2' . PHP_EOL;
				$class .= 'public function ' . $function_name . '($db_manager,$application,$use_key_value = false)'  . PHP_EOL;
				$class .= "\t" . "{" . PHP_EOL;
				$class .= "\t\t" . '$result = $db_manager->get_records(' . "'" . $row['table_name_parent'] . "'," . $child_table_field . ',' . "'" . $row['parent_table_field'] . "'" . ');' . PHP_EOL; 
				$class .= "\t\t" . 'if (is_null($result)) return null;' . PHP_EOL;
				$class .= "\t\t" . 'if (count($result) == 0) return null;' . PHP_EOL;
				$class .= "\t\t" . "require_once('include/data/table_factory/cls_table_factory.php');" . PHP_EOL; 
				$class .= "\t\t" . '$data = array();' . PHP_EOL; 
				$class .= "\t\t" . 'while (($row=$db_manager->fetch_by_assoc($result)) !=null)' . PHP_EOL;
				$class .= "\t\t\t" . "{" . PHP_EOL;
				$class .= "\t\t\t\t" . '$' . $row['table_name_parent'] . " = cls_table_factory::create_instance('" . $row['table_name_parent'] . "');" . PHP_EOL;
				$class .= "\t\t\t\t" . '$' . $row['table_name_parent'] . '->fill($row);' . PHP_EOL;
				$class .= "\t\t\t\t" . 'if ($use_key_value)' . PHP_EOL;
				$class .= "\t\t\t\t" . '{'  . PHP_EOL;
				$class .= "\t\t\t\t\t" . '$data[$row[' . "'id']] = " . '$' . $row['table_name_parent'] . ';'. PHP_EOL;
				$class .= "\t\t\t\t" . '}'  . PHP_EOL;
				$class .= "\t\t\t\t" . 'else'  . PHP_EOL;
				$class .= "\t\t\t\t" . '{'  . PHP_EOL;
				$class .= "\t\t\t\t\t" . '$data[] = ' . '$' . $row['table_name_parent'] . ';'. PHP_EOL;
				$class .= "\t\t\t\t" . '}'  . PHP_EOL;
				$class .= "\t\t\t" . "}" . PHP_EOL;
				$class .= "\t\t" . 'return $data;' . PHP_EOL; 
				$class .= "\t" . "}" . PHP_EOL;
				$class .=  PHP_EOL;
			}
			else
			{
				echo 'Duplikate Funktion ' . $function_name . '</br>' . PHP_EOL; 
			}	

			$function_name = 'get_multi_' . $function_name_trailer; 
			
			if (!in_array($function_name,$function_names))
			{
				$function_names[] = $function_name; 
			
				$class .= 'public function ' . $function_name . '($' . $tablename . 's,$db_manager,$application)' . PHP_EOL;
				$class .= "\t" . "{" . PHP_EOL;
				$class .= "\t\t" . '$result = $db_manager->get_records_by_ids(' . "'" . $row['table_name_parent'] . "'," . '$' . $tablename . 's,' . "'" . $row['parent_table_field'] . "'" . ');' . PHP_EOL; 
				$class .= "\t\t" . 'if (is_null($result)) return null;' . PHP_EOL;
				$class .= "\t\t" . 'if (count($result) == 0) return null;' . PHP_EOL;
				$class .= "\t\t" . "require_once('include/data/table_factory/cls_table_factory.php');" . PHP_EOL; 
				$class .= "\t\t" . '$data = array();' . PHP_EOL; 
				$class .= "\t\t" . 'while (($row=$db_manager->fetch_by_assoc($result)) !=null)' . PHP_EOL;
				$class .= "\t\t\t" . "{" . PHP_EOL;
				$class .= "\t\t\t\t" . '$' . $row['table_name_parent'] . " = cls_table_factory::create_instance('" . $row['table_name_parent'] . "');" . PHP_EOL;
				$class .= "\t\t\t\t" . '$' . $row['table_name_parent'] . '->fill($row);' . PHP_EOL;

				$class .= "\t\t\t\t" . 'if (!array_key_exists($data[$row[' . "'" . $row['parent_table_field'] . "'" . ']]))' . PHP_EOL;  
				$class .= "\t\t\t\t" . '{' . PHP_EOL;  
				$class .= "\t\t\t\t\t" . '$data[$row[' . "'" . $row['parent_table_field'] . "'" . ']] = array();'  . PHP_EOL;
				$class .= "\t\t\t\t" . '}' . PHP_EOL;
				$class .= "\t\t\t\t" . '$data[$row[' . "'" . $row['parent_table_field'] . "'" . ']][] = ' . '$' . $row['table_name_parent'] . ';'. PHP_EOL;
				$class .= "\t\t\t" . "}" . PHP_EOL;
				$class .= "\t\t" . 'return $data;' . PHP_EOL; 
				$class .= "\t" . "}" . PHP_EOL;
				$class .=  PHP_EOL;
			}	
			else
			{
				echo 'Duplikate Funktion ' . $function_name . '</br>' . PHP_EOL; 
			}	
			
		
		}
		
		$relation_result = $this->get_db_manager()->get_empty_table_relations();
		
		while (($row = $this->get_db_manager()->fetch_by_assoc($relation_result)) !=null) 
		{
			$function_name = $row['table_name_parent'];
			
			
			if ($row['parent_table_field'] != 'id_data')
			{
				$function_name .= '_' . $row['parent_table_field'];  
			}

			$function_name = 'get_' . $function_name;
			
			if (!in_array($function_name,$function_names))
			{
				$function_names[] = $function_name; 
			
				
			
				$class .= 'public function ' . $function_name . '($' . $tablename . 's,$db_manager,$application,$use_key_value = false)' . PHP_EOL;
				$class .= "\t" . "{" . PHP_EOL;
				$class .= "\t\t" . '$result = $db_manager->get_records(' . "'" . $row['table_name_parent'] . "'," . '$this->get_' . $row['child_table_field'] . "(),'" . $row['parent_table_field'] . "'" . ');' . PHP_EOL; 
				$class .= "\t\t" . 'if (is_null($result)) return null;' . PHP_EOL;
				$class .= "\t\t" . 'if (count($result) == 0) return null;' . PHP_EOL;
				$class .= "\t\t" . "require_once('include/data/table_factory/cls_table_factory.php');" . PHP_EOL; 
				$class .= "\t\t" . '$data = array();' . PHP_EOL; 
				$class .= "\t\t" . 'while (($row=$db_manager->fetch_by_assoc($result)) !=null)' . PHP_EOL;
				$class .= "\t\t\t" . "{" . PHP_EOL;
				$class .= "\t\t\t\t" . '$' . $row['table_name_parent'] . " = cls_table_factory::create_instance('" . $row['table_name_parent'] . "');" . PHP_EOL;
				$class .= "\t\t\t\t" . '$' . $row['table_name_parent'] . '->fill($row);' . PHP_EOL;
				$class .= "\t\t\t\t" . 'if ($use_key_value)' . PHP_EOL;
				$class .= "\t\t\t\t" . '{'  . PHP_EOL;
				$class .= "\t\t\t\t\t" . '$data[$row[' . "'id']] = " . '$' . $row['table_name_parent'] . ';'. PHP_EOL;
				$class .= "\t\t\t\t" . '}'  . PHP_EOL;
				$class .= "\t\t\t\t" . 'else'  . PHP_EOL;
				$class .= "\t\t\t\t" . '{'  . PHP_EOL;
				$class .= "\t\t\t\t\t" . '$data[] = ' . '$' . $row['table_name_parent'] . ';'. PHP_EOL;
				$class .= "\t\t\t\t" . '}'  . PHP_EOL;
				$class .= "\t\t\t" . "}" . PHP_EOL;
				$class .= "\t\t" . 'return $data;' . PHP_EOL; 
				$class .= "\t" . "}" . PHP_EOL;
				$class .=  PHP_EOL;
			}
			else
			{
				echo 'Duplikate Funktion ' . $function_name . '</br>' . PHP_EOL; 
			}	

			
			$function_name = $row['table_name_parent'];
						
			if ($row['parent_table_field'] != 'id_data')
			{
				$function_name .= '_' . $row['parent_table_field'];  
			}
			
			$function_name = 'get_multi_' . $function_name;
			
			if (!in_array($function_name,$function_names))
			{
				$function_names[] = $function_name; 
			
				$class .= 'public function ' . $function_name . '($' . $tablename . 's,$db_manager,$application)' . PHP_EOL;
				$class .= "\t" . "{" . PHP_EOL;
				$class .= "\t\t" . '$result = $db_manager->get_records_by_ids(' . "'" . $row['table_name_parent'] . "'," . '$' . $tablename . 's,' . "'" . $row['parent_table_field'] . "'" . ');' . PHP_EOL; 
				$class .= "\t\t" . 'if (is_null($result)) return null;' . PHP_EOL;
				$class .= "\t\t" . 'if (count($result) == 0) return null;' . PHP_EOL;
				$class .= "\t\t" . "require_once('include/data/table_factory/cls_table_factory.php');" . PHP_EOL; 
				$class .= "\t\t" . '$data = array();' . PHP_EOL; 
				$class .= "\t\t" . 'while (($row=$db_manager->fetch_by_assoc($result)) !=null)' . PHP_EOL;
				$class .= "\t\t\t" . "{" . PHP_EOL;
				$class .= "\t\t\t\t" . '$' . $row['table_name_parent'] . " = cls_table_factory::create_instance('" . $row['table_name_parent'] . "');" . PHP_EOL;
				$class .= "\t\t\t\t" . '$' . $row['table_name_parent'] . '->fill($row);' . PHP_EOL;
				$class .= "\t\t\t\t" . 'if (!array_key_exists($data[$row[' . "'" . $row['parent_table_field'] . "'" . ']]))' . PHP_EOL;  
				$class .= "\t\t\t\t" . '{' . PHP_EOL;  
				$class .= "\t\t\t\t\t" . '$data[$row[' . "'" . $row['parent_table_field'] . "'" . ']] = array();'  . PHP_EOL;
				$class .= "\t\t\t\t" . '}' . PHP_EOL;
				$class .= "\t\t\t\t" . '$data[$row[' . "'" . $row['parent_table_field'] . "'" . ']][] = ' . '$' . $row['table_name_parent'] . ';'. PHP_EOL;
				$class .= "\t\t\t" . "}" . PHP_EOL;
				$class .= "\t\t" . 'return $data;' . PHP_EOL; 
				$class .= "\t" . "}" . PHP_EOL;
				$class .=  PHP_EOL;
			}	
			else
			{
				echo 'Duplikate Funktion ' . $function_name . '</br>' . PHP_EOL; 
			}	
		
		
		}
		
				
		$class .= PHP_EOL;

		
		$class .= "}" . PHP_EOL;
		$class .= "?>" . PHP_EOL;



		
		file_put_contents($file, $class);
	
		$file = 'include/data/tables/cls_table_' . $tablename . '.php';
	
		if (!file_exists($file))
		{
			$class = "<?php" . PHP_EOL;
			$class .= "if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');" . PHP_EOL;
			$class .= "require_once('include/data/base_tables/cls_base_" . $tablename . ".php');" . PHP_EOL;
	
			$class .= 'class cls_table_' . $tablename . ' extends cls_base_' . $tablename . PHP_EOL;
			
			$class .= "{"  . PHP_EOL;
			
			$class .= "}"  . PHP_EOL;
	
			$class .= "?>" . PHP_EOL;
	
			file_put_contents($file, $class);
	
	
		}
	
	}
	
	public function create_table_sql_statement($tablename,$database_type = 'mysql')
	{
		$db = $this->get_db_manager();
	
		$db_instance = null;
	
		$table_definition = null;
	
		require_once('include/database/cls_db_manager_factory.php');
	
		$db_instance = cls_db_manager_factory::get_type_instance($database_type);
	
		if (is_null($db_instance))
		{
		
		
			return '';
		
		}

		$table_definition = $db->get_columns($tablename);
		
		if (is_null($table_definition))
		{
		
		
			return '';
		
		}


		
		$db_instance->create_table_sql_statement($tablename,$table_definition);
	
	
	}


}





?>