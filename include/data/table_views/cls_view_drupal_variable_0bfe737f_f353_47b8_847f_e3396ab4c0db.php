<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_variable_0bfe737f_f353_47b8_847f_e3396ab4c0db extends cls_table_view_base 
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
		$common_drupal_variable = cls_table_factory::get_common_drupal_variable();
		$array_drupal_variable =  $common_drupal_variable->get_drupal_variables($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_variable as $drupal_variable)
			{
			$drupal_variable_id = $drupal_variable->get_id();
			$result_array[$drupal_variable_id]['drupal_variable.name'] = $drupal_variable->get_name();
			$result_array[$drupal_variable_id]['drupal_variable.value'] = $drupal_variable->get_value();
			$result_array[$drupal_variable_id]['drupal_variable.id'] = $drupal_variable->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_variable.name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_variable.value']['type'] = 'bytea';
			$this->p_column_definitions['drupal_variable.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
