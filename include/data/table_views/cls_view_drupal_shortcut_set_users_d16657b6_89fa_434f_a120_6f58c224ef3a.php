<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_shortcut_set_users_d16657b6_89fa_434f_a120_6f58c224ef3a extends cls_table_view_base 
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
		$common_drupal_shortcut_set_users = cls_table_factory::get_common_drupal_shortcut_set_users();
		$array_drupal_shortcut_set_users =  $common_drupal_shortcut_set_users->get_drupal_shortcut_set_userss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_shortcut_set_users as $drupal_shortcut_set_users)
			{
			$drupal_shortcut_set_users_id = $drupal_shortcut_set_users->get_id();
			$result_array[$drupal_shortcut_set_users_id]['drupal_shortcut_set_users.uid'] = $drupal_shortcut_set_users->get_uid();
			$result_array[$drupal_shortcut_set_users_id]['drupal_shortcut_set_users.set_name'] = $drupal_shortcut_set_users->get_set_name();
			$result_array[$drupal_shortcut_set_users_id]['drupal_shortcut_set_users.id'] = $drupal_shortcut_set_users->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_shortcut_set_users.uid']['type'] = 'int8';
			$this->p_column_definitions['drupal_shortcut_set_users.set_name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_shortcut_set_users.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
