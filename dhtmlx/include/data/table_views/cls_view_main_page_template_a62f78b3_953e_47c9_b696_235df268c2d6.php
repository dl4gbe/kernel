<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_main_page_template_a62f78b3_953e_47c9_b696_235df268c2d6 extends cls_table_view_base 
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
		$common_main_page_template = cls_table_factory::get_common_main_page_template();
		$array_main_page_template =  $common_main_page_template->get_main_page_templates($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_main_page_template as $main_page_template)
			{
			$main_page_template_id = $main_page_template->get_id();
			$result_array[$main_page_template_id]['main_page_template.id'] = $main_page_template->get_id();
			$result_array[$main_page_template_id]['main_page_template.name'] = $main_page_template->get_name();
			$result_array[$main_page_template_id]['main_page_template.creator_path'] = $main_page_template->get_creator_path();
			$result_array[$main_page_template_id]['main_page_template.source'] = $main_page_template->get_source();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['main_page_template.id']['type'] = 'uuid';
			$this->p_column_definitions['main_page_template.name']['type'] = 'varchar';
			$this->p_column_definitions['main_page_template.creator_path']['type'] = 'varchar';
			$this->p_column_definitions['main_page_template.source']['type'] = 'text';
		}
		return $this->p_column_definitions;
	}
}
?>
