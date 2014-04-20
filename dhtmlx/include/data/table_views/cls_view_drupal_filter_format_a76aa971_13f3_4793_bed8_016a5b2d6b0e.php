<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_filter_format_a76aa971_13f3_4793_bed8_016a5b2d6b0e extends cls_table_view_base 
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
		$common_drupal_filter_format = cls_table_factory::get_common_drupal_filter_format();
		$array_drupal_filter_format =  $common_drupal_filter_format->get_drupal_filter_formats($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_filter_format as $drupal_filter_format)
			{
			$drupal_filter_format_id = $drupal_filter_format->get_id();
			$result_array[$drupal_filter_format_id]['drupal_filter_format.format'] = $drupal_filter_format->get_format();
			$result_array[$drupal_filter_format_id]['drupal_filter_format.name'] = $drupal_filter_format->get_name();
			$result_array[$drupal_filter_format_id]['drupal_filter_format.cache'] = $drupal_filter_format->get_cache();
			$result_array[$drupal_filter_format_id]['drupal_filter_format.status'] = $drupal_filter_format->get_status();
			$result_array[$drupal_filter_format_id]['drupal_filter_format.weight'] = $drupal_filter_format->get_weight();
			$result_array[$drupal_filter_format_id]['drupal_filter_format.id'] = $drupal_filter_format->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_filter_format.format']['type'] = 'varchar';
			$this->p_column_definitions['drupal_filter_format.name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_filter_format.cache']['type'] = 'int2';
			$this->p_column_definitions['drupal_filter_format.status']['type'] = 'int4';
			$this->p_column_definitions['drupal_filter_format.weight']['type'] = 'int4';
			$this->p_column_definitions['drupal_filter_format.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
