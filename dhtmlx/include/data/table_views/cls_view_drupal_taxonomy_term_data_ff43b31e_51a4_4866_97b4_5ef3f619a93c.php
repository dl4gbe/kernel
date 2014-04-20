<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_taxonomy_term_data_ff43b31e_51a4_4866_97b4_5ef3f619a93c extends cls_table_view_base 
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
		$common_drupal_taxonomy_term_data = cls_table_factory::get_common_drupal_taxonomy_term_data();
		$array_drupal_taxonomy_term_data =  $common_drupal_taxonomy_term_data->get_drupal_taxonomy_term_datas($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_taxonomy_term_data as $drupal_taxonomy_term_data)
			{
			$drupal_taxonomy_term_data_id = $drupal_taxonomy_term_data->get_id();
			$result_array[$drupal_taxonomy_term_data_id]['drupal_taxonomy_term_data.tid'] = $drupal_taxonomy_term_data->get_tid();
			$result_array[$drupal_taxonomy_term_data_id]['drupal_taxonomy_term_data.vid'] = $drupal_taxonomy_term_data->get_vid();
			$result_array[$drupal_taxonomy_term_data_id]['drupal_taxonomy_term_data.name'] = $drupal_taxonomy_term_data->get_name();
			$result_array[$drupal_taxonomy_term_data_id]['drupal_taxonomy_term_data.description'] = $drupal_taxonomy_term_data->get_description();
			$result_array[$drupal_taxonomy_term_data_id]['drupal_taxonomy_term_data.format'] = $drupal_taxonomy_term_data->get_format();
			$result_array[$drupal_taxonomy_term_data_id]['drupal_taxonomy_term_data.weight'] = $drupal_taxonomy_term_data->get_weight();
			$result_array[$drupal_taxonomy_term_data_id]['drupal_taxonomy_term_data.id'] = $drupal_taxonomy_term_data->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_taxonomy_term_data.tid']['type'] = 'int4';
			$this->p_column_definitions['drupal_taxonomy_term_data.vid']['type'] = 'int8';
			$this->p_column_definitions['drupal_taxonomy_term_data.name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_taxonomy_term_data.description']['type'] = 'text';
			$this->p_column_definitions['drupal_taxonomy_term_data.format']['type'] = 'varchar';
			$this->p_column_definitions['drupal_taxonomy_term_data.weight']['type'] = 'int4';
			$this->p_column_definitions['drupal_taxonomy_term_data.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
