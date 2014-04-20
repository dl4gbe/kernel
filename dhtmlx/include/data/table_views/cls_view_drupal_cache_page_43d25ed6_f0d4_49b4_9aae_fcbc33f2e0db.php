<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_cache_page_43d25ed6_f0d4_49b4_9aae_fcbc33f2e0db extends cls_table_view_base 
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
		$common_drupal_cache_page = cls_table_factory::get_common_drupal_cache_page();
		$array_drupal_cache_page =  $common_drupal_cache_page->get_drupal_cache_pages($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_cache_page as $drupal_cache_page)
			{
			$drupal_cache_page_id = $drupal_cache_page->get_id();
			$result_array[$drupal_cache_page_id]['drupal_cache_page.cid'] = $drupal_cache_page->get_cid();
			$result_array[$drupal_cache_page_id]['drupal_cache_page.data'] = $drupal_cache_page->get_data();
			$result_array[$drupal_cache_page_id]['drupal_cache_page.expire'] = $drupal_cache_page->get_expire();
			$result_array[$drupal_cache_page_id]['drupal_cache_page.created'] = $drupal_cache_page->get_created();
			$result_array[$drupal_cache_page_id]['drupal_cache_page.serialized'] = $drupal_cache_page->get_serialized();
			$result_array[$drupal_cache_page_id]['drupal_cache_page.id'] = $drupal_cache_page->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_cache_page.cid']['type'] = 'varchar';
			$this->p_column_definitions['drupal_cache_page.data']['type'] = 'bytea';
			$this->p_column_definitions['drupal_cache_page.expire']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_page.created']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_page.serialized']['type'] = 'int2';
			$this->p_column_definitions['drupal_cache_page.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
