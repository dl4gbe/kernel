<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_cache_bedb7726_a6b2_4b2e_9f89_e976a7ca119f extends cls_table_view_base 
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
		$common_drupal_cache = cls_table_factory::get_common_drupal_cache();
		$array_drupal_cache =  $common_drupal_cache->get_drupal_caches($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_cache as $drupal_cache)
			{
			$drupal_cache_id = $drupal_cache->get_id();
			$result_array[$drupal_cache_id]['drupal_cache.cid'] = $drupal_cache->get_cid();
			$result_array[$drupal_cache_id]['drupal_cache.data'] = $drupal_cache->get_data();
			$result_array[$drupal_cache_id]['drupal_cache.expire'] = $drupal_cache->get_expire();
			$result_array[$drupal_cache_id]['drupal_cache.created'] = $drupal_cache->get_created();
			$result_array[$drupal_cache_id]['drupal_cache.serialized'] = $drupal_cache->get_serialized();
			$result_array[$drupal_cache_id]['drupal_cache.id'] = $drupal_cache->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_cache.cid']['type'] = 'varchar';
			$this->p_column_definitions['drupal_cache.data']['type'] = 'bytea';
			$this->p_column_definitions['drupal_cache.expire']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache.created']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache.serialized']['type'] = 'int2';
			$this->p_column_definitions['drupal_cache.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
