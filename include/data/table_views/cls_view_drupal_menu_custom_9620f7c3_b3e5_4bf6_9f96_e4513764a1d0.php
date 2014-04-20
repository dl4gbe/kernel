<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_menu_custom_9620f7c3_b3e5_4bf6_9f96_e4513764a1d0 extends cls_table_view_base 
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
		$common_drupal_menu_custom = cls_table_factory::get_common_drupal_menu_custom();
		$array_drupal_menu_custom =  $common_drupal_menu_custom->get_drupal_menu_customs($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_menu_custom as $drupal_menu_custom)
			{
			$drupal_menu_custom_id = $drupal_menu_custom->get_id();
			$result_array[$drupal_menu_custom_id]['drupal_menu_custom.menu_name'] = $drupal_menu_custom->get_menu_name();
			$result_array[$drupal_menu_custom_id]['drupal_menu_custom.title'] = $drupal_menu_custom->get_title();
			$result_array[$drupal_menu_custom_id]['drupal_menu_custom.description'] = $drupal_menu_custom->get_description();
			$result_array[$drupal_menu_custom_id]['drupal_menu_custom.id'] = $drupal_menu_custom->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_menu_custom.menu_name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_custom.title']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_custom.description']['type'] = 'text';
			$this->p_column_definitions['drupal_menu_custom.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
