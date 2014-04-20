<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_insurance_group_d2cb4119_c17f_47b5_819c_9b5e96f36686 extends cls_table_view_base 
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
		$common_insurance_group = cls_table_factory::get_common_insurance_group();
		$array_insurance_group =  $common_insurance_group->get_insurance_groups($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_insurance_group as $insurance_group)
			{
			$insurance_group_id = $insurance_group->get_id();
			$result_array[$insurance_group_id]['insurance_group.id'] = $insurance_group->get_id();
			$result_array[$insurance_group_id]['insurance_group.no'] = $insurance_group->get_no();
			$result_array[$insurance_group_id]['insurance_group.name'] = $insurance_group->get_name();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['insurance_group.id']['type'] = 'uuid';
			$this->p_column_definitions['insurance_group.no']['type'] = 'varchar';
			$this->p_column_definitions['insurance_group.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
