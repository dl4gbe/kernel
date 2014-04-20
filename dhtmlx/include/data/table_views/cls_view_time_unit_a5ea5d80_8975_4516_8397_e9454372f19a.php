<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_time_unit_a5ea5d80_8975_4516_8397_e9454372f19a extends cls_table_view_base 
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
		$common_time_unit = cls_table_factory::get_common_time_unit();
		$array_time_unit =  $common_time_unit->get_time_units($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_time_unit as $time_unit)
			{
			$time_unit_id = $time_unit->get_id();
			$result_array[$time_unit_id]['time_unit.id'] = $time_unit->get_id();
			$result_array[$time_unit_id]['time_unit.name'] = $time_unit->get_name();
			$result_array[$time_unit_id]['time_unit.unit'] = $time_unit->get_unit();
			$result_array[$time_unit_id]['time_unit.unittype'] = $time_unit->get_unittype();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['time_unit.id']['type'] = 'uuid';
			$this->p_column_definitions['time_unit.name']['type'] = 'varchar';
			$this->p_column_definitions['time_unit.unit']['type'] = 'int4';
			$this->p_column_definitions['time_unit.unittype']['type'] = 'bpchar';
		}
		return $this->p_column_definitions;
	}
}
?>
