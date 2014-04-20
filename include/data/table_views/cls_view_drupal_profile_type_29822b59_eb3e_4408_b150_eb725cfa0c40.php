<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_profile_type_29822b59_eb3e_4408_b150_eb725cfa0c40 extends cls_table_view_base 
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
		$common_drupal_profile_type = cls_table_factory::get_common_drupal_profile_type();
		$array_drupal_profile_type =  $common_drupal_profile_type->get_drupal_profile_types($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_profile_type as $drupal_profile_type)
			{
			$drupal_profile_type_id = $drupal_profile_type->get_id();
			$result_array[$drupal_profile_type_id]['drupal_profile_type.id'] = $drupal_profile_type->get_id();
			$result_array[$drupal_profile_type_id]['drupal_profile_type.type'] = $drupal_profile_type->get_type();
			$result_array[$drupal_profile_type_id]['drupal_profile_type.label'] = $drupal_profile_type->get_label();
			$result_array[$drupal_profile_type_id]['drupal_profile_type.weight'] = $drupal_profile_type->get_weight();
			$result_array[$drupal_profile_type_id]['drupal_profile_type.data'] = $drupal_profile_type->get_data();
			$result_array[$drupal_profile_type_id]['drupal_profile_type.status'] = $drupal_profile_type->get_status();
			$result_array[$drupal_profile_type_id]['drupal_profile_type.module'] = $drupal_profile_type->get_module();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_profile_type.id']['type'] = 'int4';
			$this->p_column_definitions['drupal_profile_type.type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_profile_type.label']['type'] = 'varchar';
			$this->p_column_definitions['drupal_profile_type.weight']['type'] = 'int2';
			$this->p_column_definitions['drupal_profile_type.data']['type'] = 'text';
			$this->p_column_definitions['drupal_profile_type.status']['type'] = 'int2';
			$this->p_column_definitions['drupal_profile_type.module']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
