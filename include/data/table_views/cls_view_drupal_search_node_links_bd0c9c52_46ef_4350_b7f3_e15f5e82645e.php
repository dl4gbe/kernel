<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_search_node_links_bd0c9c52_46ef_4350_b7f3_e15f5e82645e extends cls_table_view_base 
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
		$common_drupal_search_node_links = cls_table_factory::get_common_drupal_search_node_links();
		$array_drupal_search_node_links =  $common_drupal_search_node_links->get_drupal_search_node_linkss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_search_node_links as $drupal_search_node_links)
			{
			$drupal_search_node_links_id = $drupal_search_node_links->get_id();
			$result_array[$drupal_search_node_links_id]['drupal_search_node_links.sid'] = $drupal_search_node_links->get_sid();
			$result_array[$drupal_search_node_links_id]['drupal_search_node_links.type'] = $drupal_search_node_links->get_type();
			$result_array[$drupal_search_node_links_id]['drupal_search_node_links.nid'] = $drupal_search_node_links->get_nid();
			$result_array[$drupal_search_node_links_id]['drupal_search_node_links.caption'] = $drupal_search_node_links->get_caption();
			$result_array[$drupal_search_node_links_id]['drupal_search_node_links.id'] = $drupal_search_node_links->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_search_node_links.sid']['type'] = 'int8';
			$this->p_column_definitions['drupal_search_node_links.type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_search_node_links.nid']['type'] = 'int8';
			$this->p_column_definitions['drupal_search_node_links.caption']['type'] = 'text';
			$this->p_column_definitions['drupal_search_node_links.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
