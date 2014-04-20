<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_search_index_b60515a1_ff9d_4cbe_8967_a2ee2e816d63 extends cls_table_view_base 
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
		$common_drupal_search_index = cls_table_factory::get_common_drupal_search_index();
		$array_drupal_search_index =  $common_drupal_search_index->get_drupal_search_indexs($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_search_index as $drupal_search_index)
			{
			$drupal_search_index_id = $drupal_search_index->get_id();
			$result_array[$drupal_search_index_id]['drupal_search_index.word'] = $drupal_search_index->get_word();
			$result_array[$drupal_search_index_id]['drupal_search_index.sid'] = $drupal_search_index->get_sid();
			$result_array[$drupal_search_index_id]['drupal_search_index.type'] = $drupal_search_index->get_type();
			$result_array[$drupal_search_index_id]['drupal_search_index.score'] = $drupal_search_index->get_score();
			$result_array[$drupal_search_index_id]['drupal_search_index.id'] = $drupal_search_index->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_search_index.word']['type'] = 'varchar';
			$this->p_column_definitions['drupal_search_index.sid']['type'] = 'int8';
			$this->p_column_definitions['drupal_search_index.type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_search_index.score']['type'] = 'float4';
			$this->p_column_definitions['drupal_search_index.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
