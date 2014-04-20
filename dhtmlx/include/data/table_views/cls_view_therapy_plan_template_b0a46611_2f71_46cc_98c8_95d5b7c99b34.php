<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_therapy_plan_template_b0a46611_2f71_46cc_98c8_95d5b7c99b34 extends cls_table_view_base 
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
		$common_therapy_plan_template = cls_table_factory::get_common_therapy_plan_template();
		$array_therapy_plan_template =  $common_therapy_plan_template->get_therapy_plan_templates($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_therapy_plan_template as $therapy_plan_template)
			{
			$therapy_plan_template_id = $therapy_plan_template->get_id();
			$result_array[$therapy_plan_template_id]['therapy_plan_template.id'] = $therapy_plan_template->get_id();
			$result_array[$therapy_plan_template_id]['therapy_plan_template.name'] = $therapy_plan_template->get_name();
			$result_array[$therapy_plan_template_id]['therapy_plan_template.active'] = $therapy_plan_template->get_active();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['therapy_plan_template.id']['type'] = 'uuid';
			$this->p_column_definitions['therapy_plan_template.name']['type'] = 'varchar';
			$this->p_column_definitions['therapy_plan_template.active']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
