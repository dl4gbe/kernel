<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_date_formats_20a0aeae_ec4f_4c98_8620_8709104cc42b extends cls_table_view_base 
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
		$common_drupal_date_formats = cls_table_factory::get_common_drupal_date_formats();
		$array_drupal_date_formats =  $common_drupal_date_formats->get_drupal_date_formatss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_date_formats as $drupal_date_formats)
			{
			$drupal_date_formats_id = $drupal_date_formats->get_id();
			$result_array[$drupal_date_formats_id]['drupal_date_formats.dfid'] = $drupal_date_formats->get_dfid();
			$result_array[$drupal_date_formats_id]['drupal_date_formats.format'] = $drupal_date_formats->get_format();
			$result_array[$drupal_date_formats_id]['drupal_date_formats.type'] = $drupal_date_formats->get_type();
			$result_array[$drupal_date_formats_id]['drupal_date_formats.locked'] = $drupal_date_formats->get_locked();
			$result_array[$drupal_date_formats_id]['drupal_date_formats.id'] = $drupal_date_formats->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_date_formats.dfid']['type'] = 'int4';
			$this->p_column_definitions['drupal_date_formats.format']['type'] = 'varchar';
			$this->p_column_definitions['drupal_date_formats.type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_date_formats.locked']['type'] = 'int2';
			$this->p_column_definitions['drupal_date_formats.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
