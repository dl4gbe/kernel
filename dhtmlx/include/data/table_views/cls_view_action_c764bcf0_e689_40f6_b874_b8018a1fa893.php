<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_action_c764bcf0_e689_40f6_b874_b8018a1fa893 extends cls_table_view_base 
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
		$common_action = cls_table_factory::get_common_action();
		$array_action =  $common_action->get_actions($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_action as $action)
			{
			$action_id = $action->get_id();
			$result_array[$action_id]['action.id'] = $action->get_id();
			$result_array[$action_id]['action.nane'] = $action->get_nane();
			$result_array[$action_id]['action.name'] = $action->get_name();
			$result_array[$action_id]['action.key'] = $action->get_key();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['action.id']['type'] = 'uuid';
			$this->p_column_definitions['action.name']['type'] = 'varchar';
			$this->p_column_definitions['action.key']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
