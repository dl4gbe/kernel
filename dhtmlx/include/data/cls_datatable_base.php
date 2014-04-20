<?php

if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_uuid.php');
require_once('include/data/cls_data_result.php');

abstract class cls_datatable_base
{

	private $p_id;
	private $p_dirty = false;
	private $p_id_save_location;
	
	public function get_id_save_location()
	{
		return $this->p_id_save_location;
	}

	public function set_id_save_location($id_save_location)
	{
		$this->p_id_save_location = $id_save_location;
	}
	
	public function is_dirty()
	{
		return $this->p_dirty;
	}

	protected function set_dirty($dirty,$resetvalues = false)
	{
		$this->p_dirty = $dirty;
		
		if (!$dirty)
		{
			$this->reset_dirty($resetvalues);
		}
	}

	abstract function reset_dirty($resetvalues = false);

	public function get_id()
	{
	
		//echo 'old guid ' . $this->p_id . '</br>';
	
		if (is_null($this->p_id))
		{
	
			//echo 'creates new guid </br>';	

			$this->p_id = cls_uuid::v4();
		}
		return $this->p_id;
	}

	public function set_id($id)
	{
		$this->p_id = $id;
	}
	
	public abstract function _get_table_name();
	
	public abstract function get_table_fields();
	
	public abstract function get_table_select($delimiter = '"');
	
	public abstract function fill($row);
	
	public abstract function get_by_id($id,$db_manager);
	
	public abstract function save($db_manager,$application);

	public abstract function save_array($data,$db_manager,$application);
	
	public abstract function save_data($data,$db_manager,$application);
	
	public function check_values($db_manager,$application,$insert = false)
	{
		$result = new cls_data_result();
		return $result;
	}	
	
	public function after_save($db_manager,$application,$insert = false)
	{
		// over writable
	}
	
}





?>