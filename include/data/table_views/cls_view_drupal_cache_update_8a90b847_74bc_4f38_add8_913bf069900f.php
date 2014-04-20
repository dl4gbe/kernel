<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_cache_update_8a90b847_74bc_4f38_add8_913bf069900f extends cls_table_view_base 
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
		$common_drupal_cache_update = cls_table_factory::get_common_drupal_cache_update();
		$array_drupal_cache_update =  $common_drupal_cache_update->get_drupal_cache_updates($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_cache_update as $drupal_cache_update)
			{
			$drupal_cache_update_id = $drupal_cache_update->get_id();
			$result_array[$drupal_cache_update_id]['drupal_cache_update.cid'] = $drupal_cache_update->get_cid();
			$result_array[$drupal_cache_update_id]['drupal_cache_update.data'] = $drupal_cache_update->get_data();
			$result_array[$drupal_cache_update_id]['drupal_cache_update.expire'] = $drupal_cache_update->get_expire();
			$result_array[$drupal_cache_update_id]['drupal_cache_update.created'] = $drupal_cache_update->get_created();
			$result_array[$drupal_cache_update_id]['drupal_cache_update.serialized'] = $drupal_cache_update->get_serialized();
			$result_array[$drupal_cache_update_id]['drupal_cache_update.id'] = $drupal_cache_update->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_cache_update.cid']['type'] = 'varchar';
			$this->p_column_definitions['drupal_cache_update.data']['type'] = 'bytea';
			$this->p_column_definitions['drupal_cache_update.expire']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_update.created']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_update.serialized']['type'] = 'int2';
			$this->p_column_definitions['drupal_cache_update.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
