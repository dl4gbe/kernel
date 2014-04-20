<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_application_controller_c8f258e2_8757_421b_be0a_1c7d853693e7 extends cls_table_view_base 
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
		$common_application_controller = cls_table_factory::get_common_application_controller();
		$array_application_controller =  $common_application_controller->get_application_controllers($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_application_controller as $application_controller)
			{
			$application_controller_id = $application_controller->get_id();
			$result_array[$application_controller_id]['application_controller.id'] = $application_controller->get_id();
			$result_array[$application_controller_id]['application_controller.name'] = $application_controller->get_name();
			$result_array[$application_controller_id]['application_controller.path'] = $application_controller->get_path();
			$result_array[$application_controller_id]['application_controller.source'] = $application_controller->get_source();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['application_controller.id']['type'] = 'uuid';
			$this->p_column_definitions['application_controller.name']['type'] = 'varchar';
			$this->p_column_definitions['application_controller.path']['type'] = 'varchar';
			$this->p_column_definitions['application_controller.source']['type'] = 'text';
		}
		return $this->p_column_definitions;
	}
}
?>
