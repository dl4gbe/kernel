<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_cache_filter_0e34e270_50af_4b01_9e93_cd3e6c56ccab extends cls_table_view_base 
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
		$common_drupal_cache_filter = cls_table_factory::get_common_drupal_cache_filter();
		$array_drupal_cache_filter =  $common_drupal_cache_filter->get_drupal_cache_filters($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_cache_filter as $drupal_cache_filter)
			{
			$drupal_cache_filter_id = $drupal_cache_filter->get_id();
			$result_array[$drupal_cache_filter_id]['drupal_cache_filter.cid'] = $drupal_cache_filter->get_cid();
			$result_array[$drupal_cache_filter_id]['drupal_cache_filter.data'] = $drupal_cache_filter->get_data();
			$result_array[$drupal_cache_filter_id]['drupal_cache_filter.expire'] = $drupal_cache_filter->get_expire();
			$result_array[$drupal_cache_filter_id]['drupal_cache_filter.created'] = $drupal_cache_filter->get_created();
			$result_array[$drupal_cache_filter_id]['drupal_cache_filter.serialized'] = $drupal_cache_filter->get_serialized();
			$result_array[$drupal_cache_filter_id]['drupal_cache_filter.id'] = $drupal_cache_filter->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_cache_filter.cid']['type'] = 'varchar';
			$this->p_column_definitions['drupal_cache_filter.data']['type'] = 'bytea';
			$this->p_column_definitions['drupal_cache_filter.expire']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_filter.created']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_filter.serialized']['type'] = 'int2';
			$this->p_column_definitions['drupal_cache_filter.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
