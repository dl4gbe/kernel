<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_cache_path_9c967b5f_19c0_4225_b0d2_6d1913f3dcc4 extends cls_table_view_base 
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
		$common_drupal_cache_path = cls_table_factory::get_common_drupal_cache_path();
		$array_drupal_cache_path =  $common_drupal_cache_path->get_drupal_cache_paths($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_cache_path as $drupal_cache_path)
			{
			$drupal_cache_path_id = $drupal_cache_path->get_id();
			$result_array[$drupal_cache_path_id]['drupal_cache_path.cid'] = $drupal_cache_path->get_cid();
			$result_array[$drupal_cache_path_id]['drupal_cache_path.data'] = $drupal_cache_path->get_data();
			$result_array[$drupal_cache_path_id]['drupal_cache_path.expire'] = $drupal_cache_path->get_expire();
			$result_array[$drupal_cache_path_id]['drupal_cache_path.created'] = $drupal_cache_path->get_created();
			$result_array[$drupal_cache_path_id]['drupal_cache_path.serialized'] = $drupal_cache_path->get_serialized();
			$result_array[$drupal_cache_path_id]['drupal_cache_path.id'] = $drupal_cache_path->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_cache_path.cid']['type'] = 'varchar';
			$this->p_column_definitions['drupal_cache_path.data']['type'] = 'bytea';
			$this->p_column_definitions['drupal_cache_path.expire']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_path.created']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_path.serialized']['type'] = 'int2';
			$this->p_column_definitions['drupal_cache_path.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
