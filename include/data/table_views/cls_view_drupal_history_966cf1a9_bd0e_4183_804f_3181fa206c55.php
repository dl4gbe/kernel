<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_history_966cf1a9_bd0e_4183_804f_3181fa206c55 extends cls_table_view_base 
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
		$common_drupal_history = cls_table_factory::get_common_drupal_history();
		$array_drupal_history =  $common_drupal_history->get_drupal_historys($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_history as $drupal_history)
			{
			$drupal_history_id = $drupal_history->get_id();
			$result_array[$drupal_history_id]['drupal_history.uid'] = $drupal_history->get_uid();
			$result_array[$drupal_history_id]['drupal_history.nid'] = $drupal_history->get_nid();
			$result_array[$drupal_history_id]['drupal_history.timestamp'] = $drupal_history->get_timestamp();
			$result_array[$drupal_history_id]['drupal_history.id'] = $drupal_history->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_history.uid']['type'] = 'int4';
			$this->p_column_definitions['drupal_history.nid']['type'] = 'int4';
			$this->p_column_definitions['drupal_history.timestamp']['type'] = 'int4';
			$this->p_column_definitions['drupal_history.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
