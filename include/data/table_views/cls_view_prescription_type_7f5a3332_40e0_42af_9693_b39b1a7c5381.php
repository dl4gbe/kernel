<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_prescription_type_7f5a3332_40e0_42af_9693_b39b1a7c5381 extends cls_table_view_base 
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
		$common_prescription_type = cls_table_factory::get_common_prescription_type();
		$array_prescription_type =  $common_prescription_type->get_prescription_types($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_prescription_type as $prescription_type)
			{
			$prescription_type_id = $prescription_type->get_id();
			$result_array[$prescription_type_id]['prescription_type.id'] = $prescription_type->get_id();
			$result_array[$prescription_type_id]['prescription_type.name'] = $prescription_type->get_name();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['prescription_type.id']['type'] = 'uuid';
			$this->p_column_definitions['prescription_type.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
