<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_data_relation_type_a42ae37a_14f9_4b44_9382_607a76a1c785 extends cls_table_view_base 
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
		$common_data_relation_type = cls_table_factory::get_common_data_relation_type();
		$array_data_relation_type =  $common_data_relation_type->get_data_relation_types($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_data_relation_type as $data_relation_type)
			{
			$data_relation_type_id = $data_relation_type->get_id();
			$result_array[$data_relation_type_id]['data_relation_type.id'] = $data_relation_type->get_id();
			$result_array[$data_relation_type_id]['data_relation_type.tablename'] = $data_relation_type->get_tablename();
			$result_array[$data_relation_type_id]['data_relation_type.name'] = $data_relation_type->get_name();
			$result_array[$data_relation_type_id]['data_relation_type.basetype'] = $data_relation_type->get_basetype();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['data_relation_type.id']['type'] = 'uuid';
			$this->p_column_definitions['data_relation_type.tablename']['type'] = 'varchar';
			$this->p_column_definitions['data_relation_type.name']['type'] = 'varchar';
			$this->p_column_definitions['data_relation_type.basetype']['type'] = 'bpchar';
		}
		return $this->p_column_definitions;
	}
}
?>
