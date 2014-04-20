<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_actions_b322d29e_1207_4a17_a1c5_8e13b2f9bbd8 extends cls_table_view_base 
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
		$common_drupal_actions = cls_table_factory::get_common_drupal_actions();
		$array_drupal_actions =  $common_drupal_actions->get_drupal_actionss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_actions as $drupal_actions)
			{
			$drupal_actions_id = $drupal_actions->get_id();
			$result_array[$drupal_actions_id]['drupal_actions.aid'] = $drupal_actions->get_aid();
			$result_array[$drupal_actions_id]['drupal_actions.type'] = $drupal_actions->get_type();
			$result_array[$drupal_actions_id]['drupal_actions.callback'] = $drupal_actions->get_callback();
			$result_array[$drupal_actions_id]['drupal_actions.parameters'] = $drupal_actions->get_parameters();
			$result_array[$drupal_actions_id]['drupal_actions.label'] = $drupal_actions->get_label();
			$result_array[$drupal_actions_id]['drupal_actions.id'] = $drupal_actions->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_actions.aid']['type'] = 'varchar';
			$this->p_column_definitions['drupal_actions.type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_actions.callback']['type'] = 'varchar';
			$this->p_column_definitions['drupal_actions.parameters']['type'] = 'bytea';
			$this->p_column_definitions['drupal_actions.label']['type'] = 'varchar';
			$this->p_column_definitions['drupal_actions.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
