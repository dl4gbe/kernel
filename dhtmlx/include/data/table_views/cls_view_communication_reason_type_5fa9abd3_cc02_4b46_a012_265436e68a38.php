<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_communication_reason_type_5fa9abd3_cc02_4b46_a012_265436e68a38 extends cls_table_view_base 
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
		$common_communication_reason_type = cls_table_factory::get_common_communication_reason_type();
		$array_communication_reason_type =  $common_communication_reason_type->get_communication_reason_types($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_communication_reason_type as $communication_reason_type)
			{
			$communication_reason_type_id = $communication_reason_type->get_id();
			$result_array[$communication_reason_type_id]['communication_reason_type.id'] = $communication_reason_type->get_id();
			$result_array[$communication_reason_type_id]['communication_reason_type.name'] = $communication_reason_type->get_name();
			$result_array[$communication_reason_type_id]['communication_reason_type.tablename'] = $communication_reason_type->get_tablename();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['communication_reason_type.id']['type'] = 'uuid';
			$this->p_column_definitions['communication_reason_type.name']['type'] = 'varchar';
			$this->p_column_definitions['communication_reason_type.tablename']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
