<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

require_once('include/cls_enum.php');



class GRID_SEARCH_MODE extends cls_enum 
{
  const GRID_SEARCH_NONE = "1";
  const GRID_SEARCH_HEADER = "2";
  const GRID_SEARCH_TEXTBOX = "3";
}

abstract class cls_grid_creator_base 
{

	private $p_db_manager = null;
	private $p_application = null;
	private $p_grid_template = 'creator/template/grid/grid_view_dhtmlx_template.html';
	private $p_template_source = null;
	private $p_grid_id = null;
	private $p_all_columns = null;
	private $p_all_table_columns = null;
	private $p_tablename = null;
	private $p_load_data_onload = true;
	private $p_all_dataviews = null;
	private $p_search_mode ="2";


	
	public function get_search_mode()
	{
		return $this->p_search_mode;
	}
	
	public function set_search_mode($search_mode)
	{
		$this->p_search_mode = $search_mode;
	}
	
	
	public function get_all_data_views()
	{
		if (is_null($this->p_all_dataviews))
		{
			$this->p_all_dataviews = $this->get_db_manager()->get_data_views();
		}
		return $this->p_all_dataviews; 
	}
	
	public function get_load_data_onload()
	{
		return $this->p_load_data_onload;
	}

	public function set_load_data_onload($load_data_onload)
	{
		$this->p_load_data_onload = $load_data_onload;
	}

	
	public function get_tablename()
	{
		return $this->p_tablename;
	}

	public function set_tablename($tablename)
	{
		$this->p_tablename = $tablename;
	}

	
	public function get_all_table_columns()
	{
		if (is_null($this->p_all_table_columns)) 
		{
			$this->p_all_table_columns = $this->get_db_manager()->get_all_table_columns();
		}                                   
		return $this->p_all_table_columns;
	}
	
	public function set_all_table_columns($all_table_columns)
	{
		$this->p_all_table_columns = $all_table_columns; 
	}
	
	public function get_all_columns()
	{
		if (is_null($this->p_all_columns))
		{
			$this->p_all_columns = $this->get_db_manager()->get_all_columns();
		}
		return $this->p_all_columns;
	}

	public function set_all_columns($all_columns)
	{
		$this->p_all_columns = $all_columns;
	}
	
	public function get_grid_id()
	{
		return $this->p_grid_id; 
	}
	
	public function set_grid_id($grid_id)
	{
		$this->p_grid_id = $grid_id; 
	}

	
	public function get_template_source()
	{

		if (is_null($this->p_template_source))
		{
		
			$file = $this->get_grid_template();
			
			if (empty($file))
			{
				$this->get_application()->display_error_and_die(get_class(),__FUNCTION__, "No template name");
			}
			
			if (!file_exists($file))
			{
				$this->get_application()->display_error_and_die(get_class(),__FUNCTION__, "The file $file does not exist");
			
			}
		
			$this->p_template_source = file_get_contents($file);
		
		}

		return $this->p_template_source;
	}

	public function set_template_source($template_source)
	{
		$this->p_template_source = $template_source;
	}

	public function get_grid_template()
	{
		return $this->p_grid_template;
	}

	public function set_grid_template($grid_template)
	{
		$this->p_grid_template = $grid_template;
	}
	
	public function get_application()
	{
		return $this->p_application;
	}

	public function set_application($application)
	{
		$this->p_application = $application;
	}
	
	public function get_db_manager()
	{
		return $this->p_db_manager;
	}

	public function set_db_manager($db_manager)
	{
		$this->p_db_manager = $db_manager;
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

	public function __construct3($db_manager,$application,$grid_template)
	{
		$this->set_db_manager($db_manager);
		$this->set_application($application);
		$this->set_grid_template($grid_template);
	} 

	abstract public function create_html_page();

	abstract public function get_column_alignment($type);
	abstract public function get_column_sorting($type);
	abstract public function get_column_type($type);

}







?>