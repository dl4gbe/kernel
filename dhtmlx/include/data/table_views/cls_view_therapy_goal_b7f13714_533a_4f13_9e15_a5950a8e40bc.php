<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_therapy_goal_b7f13714_533a_4f13_9e15_a5950a8e40bc extends cls_table_view_base 
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
		$common_therapy_goal = cls_table_factory::get_common_therapy_goal();
		$array_therapy_goal =  $common_therapy_goal->get_therapy_goals($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_therapy_goal as $therapy_goal)
			{
			$therapy_goal_id = $therapy_goal->get_id();
			$result_array[$therapy_goal_id]['therapy_goal.id'] = $therapy_goal->get_id();
			$result_array[$therapy_goal_id]['therapy_goal.name'] = $therapy_goal->get_name();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['therapy_goal.id']['type'] = 'uuid';
			$this->p_column_definitions['therapy_goal.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
