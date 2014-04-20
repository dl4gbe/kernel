<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

abstract class cls_datatable_save_base
{

public abstract function get_table_name();

public function get_id_from_array($data)
{
	$key = $this->get_table_name() . '.id';

	reset($data);
	if (!array_key_exists($key, $data))
	{
		$key = 'id';
		
		reset($data);
		if (!array_key_exists($key, $data))
		{
			return null;
		}
	}

	return $data[$key];	
	

}




}
