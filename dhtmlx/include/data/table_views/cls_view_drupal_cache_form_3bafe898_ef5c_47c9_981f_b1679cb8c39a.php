<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_cache_form_3bafe898_ef5c_47c9_981f_b1679cb8c39a extends cls_table_view_base 
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
		$common_drupal_cache_form = cls_table_factory::get_common_drupal_cache_form();
		$array_drupal_cache_form =  $common_drupal_cache_form->get_drupal_cache_forms($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_cache_form as $drupal_cache_form)
			{
			$drupal_cache_form_id = $drupal_cache_form->get_id();
			$result_array[$drupal_cache_form_id]['drupal_cache_form.cid'] = $drupal_cache_form->get_cid();
			$result_array[$drupal_cache_form_id]['drupal_cache_form.data'] = $drupal_cache_form->get_data();
			$result_array[$drupal_cache_form_id]['drupal_cache_form.expire'] = $drupal_cache_form->get_expire();
			$result_array[$drupal_cache_form_id]['drupal_cache_form.created'] = $drupal_cache_form->get_created();
			$result_array[$drupal_cache_form_id]['drupal_cache_form.serialized'] = $drupal_cache_form->get_serialized();
			$result_array[$drupal_cache_form_id]['drupal_cache_form.id'] = $drupal_cache_form->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_cache_form.cid']['type'] = 'varchar';
			$this->p_column_definitions['drupal_cache_form.data']['type'] = 'bytea';
			$this->p_column_definitions['drupal_cache_form.expire']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_form.created']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_form.serialized']['type'] = 'int2';
			$this->p_column_definitions['drupal_cache_form.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
