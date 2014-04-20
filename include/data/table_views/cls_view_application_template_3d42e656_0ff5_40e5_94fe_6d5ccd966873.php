<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_application_template_3d42e656_0ff5_40e5_94fe_6d5ccd966873 extends cls_table_view_base 
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
		$common_application_template = cls_table_factory::get_common_application_template();
		$array_application_template =  $common_application_template->get_application_templates($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_application_template as $application_template)
			{
			$application_template_id = $application_template->get_id();
			$result_array[$application_template_id]['application_template.id'] = $application_template->get_id();
			$result_array[$application_template_id]['application_template.name'] = $application_template->get_name();
			$result_array[$application_template_id]['application_template.path'] = $application_template->get_path();
			$result_array[$application_template_id]['application_template.source'] = $application_template->get_source();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['application_template.id']['type'] = 'uuid';
			$this->p_column_definitions['application_template.name']['type'] = 'varchar';
			$this->p_column_definitions['application_template.path']['type'] = 'varchar';
			$this->p_column_definitions['application_template.source']['type'] = 'text';
		}
		return $this->p_column_definitions;
	}
}
?>
