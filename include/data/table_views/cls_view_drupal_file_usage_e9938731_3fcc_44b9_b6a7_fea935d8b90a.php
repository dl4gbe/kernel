<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_file_usage_e9938731_3fcc_44b9_b6a7_fea935d8b90a extends cls_table_view_base 
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
		$common_drupal_file_usage = cls_table_factory::get_common_drupal_file_usage();
		$array_drupal_file_usage =  $common_drupal_file_usage->get_drupal_file_usages($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_file_usage as $drupal_file_usage)
			{
			$drupal_file_usage_id = $drupal_file_usage->get_id();
			$result_array[$drupal_file_usage_id]['drupal_file_usage.fid'] = $drupal_file_usage->get_fid();
			$result_array[$drupal_file_usage_id]['drupal_file_usage.module'] = $drupal_file_usage->get_module();
			$result_array[$drupal_file_usage_id]['drupal_file_usage.type'] = $drupal_file_usage->get_type();
			$result_array[$drupal_file_usage_id]['drupal_file_usage.id'] = $drupal_file_usage->get_id();
			$result_array[$drupal_file_usage_id]['drupal_file_usage.count'] = $drupal_file_usage->get_count();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_file_usage.fid']['type'] = 'int8';
			$this->p_column_definitions['drupal_file_usage.module']['type'] = 'varchar';
			$this->p_column_definitions['drupal_file_usage.type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_file_usage.id']['type'] = 'int8';
			$this->p_column_definitions['drupal_file_usage.count']['type'] = 'int8';
		}
		return $this->p_column_definitions;
	}
}
?>
