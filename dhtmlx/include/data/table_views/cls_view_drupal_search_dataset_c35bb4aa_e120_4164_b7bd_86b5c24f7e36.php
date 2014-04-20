<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_search_dataset_c35bb4aa_e120_4164_b7bd_86b5c24f7e36 extends cls_table_view_base 
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
		$common_drupal_search_dataset = cls_table_factory::get_common_drupal_search_dataset();
		$array_drupal_search_dataset =  $common_drupal_search_dataset->get_drupal_search_datasets($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_search_dataset as $drupal_search_dataset)
			{
			$drupal_search_dataset_id = $drupal_search_dataset->get_id();
			$result_array[$drupal_search_dataset_id]['drupal_search_dataset.sid'] = $drupal_search_dataset->get_sid();
			$result_array[$drupal_search_dataset_id]['drupal_search_dataset.type'] = $drupal_search_dataset->get_type();
			$result_array[$drupal_search_dataset_id]['drupal_search_dataset.data'] = $drupal_search_dataset->get_data();
			$result_array[$drupal_search_dataset_id]['drupal_search_dataset.reindex'] = $drupal_search_dataset->get_reindex();
			$result_array[$drupal_search_dataset_id]['drupal_search_dataset.id'] = $drupal_search_dataset->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_search_dataset.sid']['type'] = 'int8';
			$this->p_column_definitions['drupal_search_dataset.type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_search_dataset.data']['type'] = 'text';
			$this->p_column_definitions['drupal_search_dataset.reindex']['type'] = 'int8';
			$this->p_column_definitions['drupal_search_dataset.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
