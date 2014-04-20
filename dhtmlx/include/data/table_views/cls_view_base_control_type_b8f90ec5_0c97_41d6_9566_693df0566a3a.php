<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_base_control_type_b8f90ec5_0c97_41d6_9566_693df0566a3a extends cls_table_view_base 
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
		$common_base_control_type = cls_table_factory::get_common_base_control_type();
		$array_base_control_type =  $common_base_control_type->get_base_control_types($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_base_control_type as $base_control_type)
			{
			$base_control_type_id = $base_control_type->get_id();
			$result_array[$base_control_type_id]['base_control_type.id'] = $base_control_type->get_id();
			$result_array[$base_control_type_id]['base_control_type.type'] = $base_control_type->get_type();
			$result_array[$base_control_type_id]['base_control_type.name'] = $base_control_type->get_name();
			$result_array[$base_control_type_id]['base_control_type.creator_path'] = $base_control_type->get_creator_path();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['base_control_type.id']['type'] = 'uuid';
			$this->p_column_definitions['base_control_type.type']['type'] = 'bpchar';
			$this->p_column_definitions['base_control_type.name']['type'] = 'varchar';
			$this->p_column_definitions['base_control_type.creator_path']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
