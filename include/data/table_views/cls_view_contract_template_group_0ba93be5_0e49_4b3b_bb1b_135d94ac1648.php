<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_contract_template_group_0ba93be5_0e49_4b3b_bb1b_135d94ac1648 extends cls_table_view_base 
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
		$common_contract_template_group = cls_table_factory::get_common_contract_template_group();
		$array_contract_template_group =  $common_contract_template_group->get_contract_template_groups($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_contract_template_group as $contract_template_group)
			{
			$contract_template_group_id = $contract_template_group->get_id();
			$result_array[$contract_template_group_id]['contract_template_group.id'] = $contract_template_group->get_id();
			$result_array[$contract_template_group_id]['contract_template_group.name'] = $contract_template_group->get_name();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['contract_template_group.id']['type'] = 'uuid';
			$this->p_column_definitions['contract_template_group.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
