<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_search_total_a749557f_cbc6_43cc_a96f_9f05c27bb451 extends cls_table_view_base 
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
		$common_drupal_search_total = cls_table_factory::get_common_drupal_search_total();
		$array_drupal_search_total =  $common_drupal_search_total->get_drupal_search_totals($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_search_total as $drupal_search_total)
			{
			$drupal_search_total_id = $drupal_search_total->get_id();
			$result_array[$drupal_search_total_id]['drupal_search_total.word'] = $drupal_search_total->get_word();
			$result_array[$drupal_search_total_id]['drupal_search_total.count'] = $drupal_search_total->get_count();
			$result_array[$drupal_search_total_id]['drupal_search_total.id'] = $drupal_search_total->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_search_total.word']['type'] = 'varchar';
			$this->p_column_definitions['drupal_search_total.count']['type'] = 'float4';
			$this->p_column_definitions['drupal_search_total.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
