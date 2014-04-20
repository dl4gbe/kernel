<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_node_comment_statistics_1a75e27c_4742_485a_bd48_6ec91cabdd58 extends cls_table_view_base 
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
		$common_drupal_node_comment_statistics = cls_table_factory::get_common_drupal_node_comment_statistics();
		$array_drupal_node_comment_statistics =  $common_drupal_node_comment_statistics->get_drupal_node_comment_statisticss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_node_comment_statistics as $drupal_node_comment_statistics)
			{
			$drupal_node_comment_statistics_id = $drupal_node_comment_statistics->get_id();
			$result_array[$drupal_node_comment_statistics_id]['drupal_node_comment_statistics.nid'] = $drupal_node_comment_statistics->get_nid();
			$result_array[$drupal_node_comment_statistics_id]['drupal_node_comment_statistics.cid'] = $drupal_node_comment_statistics->get_cid();
			$result_array[$drupal_node_comment_statistics_id]['drupal_node_comment_statistics.last_comment_timestamp'] = $drupal_node_comment_statistics->get_last_comment_timestamp();
			$result_array[$drupal_node_comment_statistics_id]['drupal_node_comment_statistics.last_comment_name'] = $drupal_node_comment_statistics->get_last_comment_name();
			$result_array[$drupal_node_comment_statistics_id]['drupal_node_comment_statistics.last_comment_uid'] = $drupal_node_comment_statistics->get_last_comment_uid();
			$result_array[$drupal_node_comment_statistics_id]['drupal_node_comment_statistics.comment_count'] = $drupal_node_comment_statistics->get_comment_count();
			$result_array[$drupal_node_comment_statistics_id]['drupal_node_comment_statistics.id'] = $drupal_node_comment_statistics->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_node_comment_statistics.nid']['type'] = 'int8';
			$this->p_column_definitions['drupal_node_comment_statistics.cid']['type'] = 'int4';
			$this->p_column_definitions['drupal_node_comment_statistics.last_comment_timestamp']['type'] = 'int4';
			$this->p_column_definitions['drupal_node_comment_statistics.last_comment_name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_node_comment_statistics.last_comment_uid']['type'] = 'int4';
			$this->p_column_definitions['drupal_node_comment_statistics.comment_count']['type'] = 'int8';
			$this->p_column_definitions['drupal_node_comment_statistics.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
