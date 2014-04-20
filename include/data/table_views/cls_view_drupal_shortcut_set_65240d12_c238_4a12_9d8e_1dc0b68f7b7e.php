<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_shortcut_set_65240d12_c238_4a12_9d8e_1dc0b68f7b7e extends cls_table_view_base 
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
		$common_drupal_shortcut_set = cls_table_factory::get_common_drupal_shortcut_set();
		$array_drupal_shortcut_set =  $common_drupal_shortcut_set->get_drupal_shortcut_sets($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_shortcut_set as $drupal_shortcut_set)
			{
			$drupal_shortcut_set_id = $drupal_shortcut_set->get_id();
			$result_array[$drupal_shortcut_set_id]['drupal_shortcut_set.set_name'] = $drupal_shortcut_set->get_set_name();
			$result_array[$drupal_shortcut_set_id]['drupal_shortcut_set.title'] = $drupal_shortcut_set->get_title();
			$result_array[$drupal_shortcut_set_id]['drupal_shortcut_set.id'] = $drupal_shortcut_set->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_shortcut_set.set_name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_shortcut_set.title']['type'] = 'varchar';
			$this->p_column_definitions['drupal_shortcut_set.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
