<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_taxonomy_index_748969d8_104c_4025_9907_f1526f0945d9 extends cls_table_view_base 
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
		$common_drupal_taxonomy_index = cls_table_factory::get_common_drupal_taxonomy_index();
		$array_drupal_taxonomy_index =  $common_drupal_taxonomy_index->get_drupal_taxonomy_indexs($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_taxonomy_index as $drupal_taxonomy_index)
			{
			$drupal_taxonomy_index_id = $drupal_taxonomy_index->get_id();
			$result_array[$drupal_taxonomy_index_id]['drupal_taxonomy_index.nid'] = $drupal_taxonomy_index->get_nid();
			$result_array[$drupal_taxonomy_index_id]['drupal_taxonomy_index.tid'] = $drupal_taxonomy_index->get_tid();
			$result_array[$drupal_taxonomy_index_id]['drupal_taxonomy_index.sticky'] = $drupal_taxonomy_index->get_sticky();
			$result_array[$drupal_taxonomy_index_id]['drupal_taxonomy_index.created'] = $drupal_taxonomy_index->get_created();
			$result_array[$drupal_taxonomy_index_id]['drupal_taxonomy_index.id'] = $drupal_taxonomy_index->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_taxonomy_index.nid']['type'] = 'int8';
			$this->p_column_definitions['drupal_taxonomy_index.tid']['type'] = 'int8';
			$this->p_column_definitions['drupal_taxonomy_index.sticky']['type'] = 'int2';
			$this->p_column_definitions['drupal_taxonomy_index.created']['type'] = 'int4';
			$this->p_column_definitions['drupal_taxonomy_index.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
