<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_ribbonbar_template_2397fe00_310f_442c_be34_dfb18192e720 extends cls_table_view_base 
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
		$common_ribbonbar_template = cls_table_factory::get_common_ribbonbar_template();
		$array_ribbonbar_template =  $common_ribbonbar_template->get_ribbonbar_templates($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_ribbonbar_template as $ribbonbar_template)
			{
			$ribbonbar_template_id = $ribbonbar_template->get_id();
			$result_array[$ribbonbar_template_id]['ribbonbar_template.id'] = $ribbonbar_template->get_id();
			$result_array[$ribbonbar_template_id]['ribbonbar_template.name'] = $ribbonbar_template->get_name();
			$result_array[$ribbonbar_template_id]['ribbonbar_template.creator_path'] = $ribbonbar_template->get_creator_path();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['ribbonbar_template.id']['type'] = 'uuid';
			$this->p_column_definitions['ribbonbar_template.name']['type'] = 'varchar';
			$this->p_column_definitions['ribbonbar_template.creator_path']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
