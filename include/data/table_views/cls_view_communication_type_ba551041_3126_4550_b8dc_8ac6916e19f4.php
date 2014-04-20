<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_communication_type_ba551041_3126_4550_b8dc_8ac6916e19f4 extends cls_table_view_base 
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
		$common_communication_type = cls_table_factory::get_common_communication_type();
		$array_communication_type =  $common_communication_type->get_communication_types($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_communication_type as $communication_type)
			{
			$communication_type_id = $communication_type->get_id();
			$result_array[$communication_type_id]['communication_type.id'] = $communication_type->get_id();
			$result_array[$communication_type_id]['communication_type.basetype'] = $communication_type->get_basetype();
			$result_array[$communication_type_id]['communication_type.name'] = $communication_type->get_name();
			$result_array[$communication_type_id]['communication_type.active'] = $communication_type->get_active();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['communication_type.id']['type'] = 'uuid';
			$this->p_column_definitions['communication_type.basetype']['type'] = 'bpchar';
			$this->p_column_definitions['communication_type.name']['type'] = 'varchar';
			$this->p_column_definitions['communication_type.active']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
