<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_event_type_8ecfab77_583e_487c_8f88_d841c0e52fa7 extends cls_table_view_base 
{
	private $p_column_definitions = null;

	function __construct()
	{
		$a = func_get_args();
		$i = func_num_args();
		if (method_exists($this,$f="__construct".$i))
		{
			call_user_func_array(array($this,$f),$a);
		}
	}
	public function query($search_values,$limit,$offset)
		{
		require_once('include/data/table_factory/cls_table_factory.php');
		$common_event_type = cls_table_factory::get_common_event_type();
		$array_event_type =  $common_event_type->get_event_types($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_event_type as $event_type)
			{
			$event_type_id = $event_type->get_id();
			$result_array[$event_type_id]['event_type.id'] = $event_type->get_id();
			$result_array[$event_type_id]['event_type.key'] = $event_type->get_key();
			$result_array[$event_type_id]['event_type.name'] = $event_type->get_name();
			$result_array[$event_type_id]['event_type.tablename'] = $event_type->get_tablename();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['event_type.id']['type'] = 'uuid';
			$this->p_column_definitions['event_type.key']['type'] = 'bpchar';
			$this->p_column_definitions['event_type.name']['type'] = 'varchar';
			$this->p_column_definitions['event_type.tablename']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
