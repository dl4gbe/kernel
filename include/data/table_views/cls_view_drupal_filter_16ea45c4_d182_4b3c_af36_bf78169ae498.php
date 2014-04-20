<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_filter_16ea45c4_d182_4b3c_af36_bf78169ae498 extends cls_table_view_base 
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
		$common_drupal_filter = cls_table_factory::get_common_drupal_filter();
		$array_drupal_filter =  $common_drupal_filter->get_drupal_filters($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_filter as $drupal_filter)
			{
			$drupal_filter_id = $drupal_filter->get_id();
			$result_array[$drupal_filter_id]['drupal_filter.format'] = $drupal_filter->get_format();
			$result_array[$drupal_filter_id]['drupal_filter.module'] = $drupal_filter->get_module();
			$result_array[$drupal_filter_id]['drupal_filter.name'] = $drupal_filter->get_name();
			$result_array[$drupal_filter_id]['drupal_filter.weight'] = $drupal_filter->get_weight();
			$result_array[$drupal_filter_id]['drupal_filter.status'] = $drupal_filter->get_status();
			$result_array[$drupal_filter_id]['drupal_filter.settings'] = $drupal_filter->get_settings();
			$result_array[$drupal_filter_id]['drupal_filter.id'] = $drupal_filter->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_filter.format']['type'] = 'varchar';
			$this->p_column_definitions['drupal_filter.module']['type'] = 'varchar';
			$this->p_column_definitions['drupal_filter.name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_filter.weight']['type'] = 'int4';
			$this->p_column_definitions['drupal_filter.status']['type'] = 'int4';
			$this->p_column_definitions['drupal_filter.settings']['type'] = 'bytea';
			$this->p_column_definitions['drupal_filter.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
