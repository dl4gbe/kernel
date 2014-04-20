<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_cache_bootstrap_11429182_5d64_4823_aa83_29a78fcfacd9 extends cls_table_view_base 
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
		$common_drupal_cache_bootstrap = cls_table_factory::get_common_drupal_cache_bootstrap();
		$array_drupal_cache_bootstrap =  $common_drupal_cache_bootstrap->get_drupal_cache_bootstraps($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_cache_bootstrap as $drupal_cache_bootstrap)
			{
			$drupal_cache_bootstrap_id = $drupal_cache_bootstrap->get_id();
			$result_array[$drupal_cache_bootstrap_id]['drupal_cache_bootstrap.cid'] = $drupal_cache_bootstrap->get_cid();
			$result_array[$drupal_cache_bootstrap_id]['drupal_cache_bootstrap.data'] = $drupal_cache_bootstrap->get_data();
			$result_array[$drupal_cache_bootstrap_id]['drupal_cache_bootstrap.expire'] = $drupal_cache_bootstrap->get_expire();
			$result_array[$drupal_cache_bootstrap_id]['drupal_cache_bootstrap.created'] = $drupal_cache_bootstrap->get_created();
			$result_array[$drupal_cache_bootstrap_id]['drupal_cache_bootstrap.serialized'] = $drupal_cache_bootstrap->get_serialized();
			$result_array[$drupal_cache_bootstrap_id]['drupal_cache_bootstrap.id'] = $drupal_cache_bootstrap->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_cache_bootstrap.cid']['type'] = 'varchar';
			$this->p_column_definitions['drupal_cache_bootstrap.data']['type'] = 'bytea';
			$this->p_column_definitions['drupal_cache_bootstrap.expire']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_bootstrap.created']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_bootstrap.serialized']['type'] = 'int2';
			$this->p_column_definitions['drupal_cache_bootstrap.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
