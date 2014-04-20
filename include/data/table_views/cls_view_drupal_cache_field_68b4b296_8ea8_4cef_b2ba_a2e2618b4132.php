<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_cache_field_68b4b296_8ea8_4cef_b2ba_a2e2618b4132 extends cls_table_view_base 
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
		$common_drupal_cache_field = cls_table_factory::get_common_drupal_cache_field();
		$array_drupal_cache_field =  $common_drupal_cache_field->get_drupal_cache_fields($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_cache_field as $drupal_cache_field)
			{
			$drupal_cache_field_id = $drupal_cache_field->get_id();
			$result_array[$drupal_cache_field_id]['drupal_cache_field.cid'] = $drupal_cache_field->get_cid();
			$result_array[$drupal_cache_field_id]['drupal_cache_field.data'] = $drupal_cache_field->get_data();
			$result_array[$drupal_cache_field_id]['drupal_cache_field.expire'] = $drupal_cache_field->get_expire();
			$result_array[$drupal_cache_field_id]['drupal_cache_field.created'] = $drupal_cache_field->get_created();
			$result_array[$drupal_cache_field_id]['drupal_cache_field.serialized'] = $drupal_cache_field->get_serialized();
			$result_array[$drupal_cache_field_id]['drupal_cache_field.id'] = $drupal_cache_field->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_cache_field.cid']['type'] = 'varchar';
			$this->p_column_definitions['drupal_cache_field.data']['type'] = 'bytea';
			$this->p_column_definitions['drupal_cache_field.expire']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_field.created']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_field.serialized']['type'] = 'int2';
			$this->p_column_definitions['drupal_cache_field.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
