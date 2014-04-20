<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_taxonomy_term_hierarchy_9609ee9c_7e15_477a_b109_4f9777082653 extends cls_table_view_base 
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
		$common_drupal_taxonomy_term_hierarchy = cls_table_factory::get_common_drupal_taxonomy_term_hierarchy();
		$array_drupal_taxonomy_term_hierarchy =  $common_drupal_taxonomy_term_hierarchy->get_drupal_taxonomy_term_hierarchys($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_taxonomy_term_hierarchy as $drupal_taxonomy_term_hierarchy)
			{
			$drupal_taxonomy_term_hierarchy_id = $drupal_taxonomy_term_hierarchy->get_id();
			$result_array[$drupal_taxonomy_term_hierarchy_id]['drupal_taxonomy_term_hierarchy.tid'] = $drupal_taxonomy_term_hierarchy->get_tid();
			$result_array[$drupal_taxonomy_term_hierarchy_id]['drupal_taxonomy_term_hierarchy.parent'] = $drupal_taxonomy_term_hierarchy->get_parent();
			$result_array[$drupal_taxonomy_term_hierarchy_id]['drupal_taxonomy_term_hierarchy.id'] = $drupal_taxonomy_term_hierarchy->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_taxonomy_term_hierarchy.tid']['type'] = 'int8';
			$this->p_column_definitions['drupal_taxonomy_term_hierarchy.parent']['type'] = 'int8';
			$this->p_column_definitions['drupal_taxonomy_term_hierarchy.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
