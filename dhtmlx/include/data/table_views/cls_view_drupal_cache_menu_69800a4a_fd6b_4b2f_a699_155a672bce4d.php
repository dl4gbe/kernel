<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_cache_menu_69800a4a_fd6b_4b2f_a699_155a672bce4d extends cls_table_view_base 
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
		$common_drupal_cache_menu = cls_table_factory::get_common_drupal_cache_menu();
		$array_drupal_cache_menu =  $common_drupal_cache_menu->get_drupal_cache_menus($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_cache_menu as $drupal_cache_menu)
			{
			$drupal_cache_menu_id = $drupal_cache_menu->get_id();
			$result_array[$drupal_cache_menu_id]['drupal_cache_menu.cid'] = $drupal_cache_menu->get_cid();
			$result_array[$drupal_cache_menu_id]['drupal_cache_menu.data'] = $drupal_cache_menu->get_data();
			$result_array[$drupal_cache_menu_id]['drupal_cache_menu.expire'] = $drupal_cache_menu->get_expire();
			$result_array[$drupal_cache_menu_id]['drupal_cache_menu.created'] = $drupal_cache_menu->get_created();
			$result_array[$drupal_cache_menu_id]['drupal_cache_menu.serialized'] = $drupal_cache_menu->get_serialized();
			$result_array[$drupal_cache_menu_id]['drupal_cache_menu.id'] = $drupal_cache_menu->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_cache_menu.cid']['type'] = 'varchar';
			$this->p_column_definitions['drupal_cache_menu.data']['type'] = 'bytea';
			$this->p_column_definitions['drupal_cache_menu.expire']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_menu.created']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_menu.serialized']['type'] = 'int2';
			$this->p_column_definitions['drupal_cache_menu.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
