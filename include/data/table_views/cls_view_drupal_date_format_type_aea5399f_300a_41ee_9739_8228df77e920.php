<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_date_format_type_aea5399f_300a_41ee_9739_8228df77e920 extends cls_table_view_base 
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
		$common_drupal_date_format_type = cls_table_factory::get_common_drupal_date_format_type();
		$array_drupal_date_format_type =  $common_drupal_date_format_type->get_drupal_date_format_types($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_date_format_type as $drupal_date_format_type)
			{
			$drupal_date_format_type_id = $drupal_date_format_type->get_id();
			$result_array[$drupal_date_format_type_id]['drupal_date_format_type.type'] = $drupal_date_format_type->get_type();
			$result_array[$drupal_date_format_type_id]['drupal_date_format_type.title'] = $drupal_date_format_type->get_title();
			$result_array[$drupal_date_format_type_id]['drupal_date_format_type.locked'] = $drupal_date_format_type->get_locked();
			$result_array[$drupal_date_format_type_id]['drupal_date_format_type.id'] = $drupal_date_format_type->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_date_format_type.type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_date_format_type.title']['type'] = 'varchar';
			$this->p_column_definitions['drupal_date_format_type.locked']['type'] = 'int2';
			$this->p_column_definitions['drupal_date_format_type.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
