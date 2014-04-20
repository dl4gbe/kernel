<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

abstract class cls_control_creator_base
{
	private $p_application = null;
	private $p_data_view_id = null;
	private $p_language = 'DE';
	private $p_javascript = '';
	private $p_object_name_parent = '';
	private $p_all_table_columns = null;

	public function get_all_table_columns()
	{
		if(is_null($this->p_all_table_columns))
		{
			$application = $this->get_application();
			if (!is_null($application))
			{
				$db = $application->get_db_manager();
				if (!is_null($db))
				{
					$this->p_all_table_columns = $db->get_all_table_columns();
				}
			}
		
		}
		return $this->p_all_table_columns;
	
	}
	
	
	
	public function get_object_name_parent()
	{
		return $this->p_object_name_parent;
	}

	public function set_object_name_parent($object_name_parent)
	{
		$this->p_object_name_parent = $object_name_parent;
	}
	
	public function get_javascript()
	{
		return $this->p_javascript;
	}
	
	public function set_javascript($javascript)
	{
		$this->p_javascript = $javascript;
	}

	
	
	public function get_language()
	{
		return $this->p_language;
	}
	
	public function set_language($language)
	{
		$this->p_language = $language;
	}
	
	public function get_data_view_id()
	{
		return $this->p_data_view_id;
	}
	
	public function set_data_view_id($data_view_id)
	{
		$this->p_data_view_id = $data_view_id;
	}
		
	public function get_application()
	{
		return $this->p_application;
	}

	public function set_application($application)
	{
		$this->p_application = $application;
	}

	public function __construct1($application)
	{
		$this->set_application($application);
	} 

	public function __construct2($application,$data_view_id)
	{
		$this->set_application($application);
		$this->set_data_view_id($data_view_id);
	} 

	abstract public function create_control_javascript();
	
	abstract public function save_javascript();
	
	
}
?>	