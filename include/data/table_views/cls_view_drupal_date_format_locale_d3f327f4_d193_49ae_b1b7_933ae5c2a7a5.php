<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_date_format_locale_d3f327f4_d193_49ae_b1b7_933ae5c2a7a5 extends cls_table_view_base 
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
		$common_drupal_date_format_locale = cls_table_factory::get_common_drupal_date_format_locale();
		$array_drupal_date_format_locale =  $common_drupal_date_format_locale->get_drupal_date_format_locales($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_date_format_locale as $drupal_date_format_locale)
			{
			$drupal_date_format_locale_id = $drupal_date_format_locale->get_id();
			$result_array[$drupal_date_format_locale_id]['drupal_date_format_locale.format'] = $drupal_date_format_locale->get_format();
			$result_array[$drupal_date_format_locale_id]['drupal_date_format_locale.type'] = $drupal_date_format_locale->get_type();
			$result_array[$drupal_date_format_locale_id]['drupal_date_format_locale.language'] = $drupal_date_format_locale->get_language();
			$result_array[$drupal_date_format_locale_id]['drupal_date_format_locale.id'] = $drupal_date_format_locale->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_date_format_locale.format']['type'] = 'varchar';
			$this->p_column_definitions['drupal_date_format_locale.type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_date_format_locale.language']['type'] = 'varchar';
			$this->p_column_definitions['drupal_date_format_locale.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
