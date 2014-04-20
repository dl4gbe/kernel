<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_users_roles_5471e3f6_1eed_4c85_a8da_5f7e9df06879 extends cls_table_view_base 
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
		$common_drupal_users_roles = cls_table_factory::get_common_drupal_users_roles();
		$array_drupal_users_roles =  $common_drupal_users_roles->get_drupal_users_roless($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_users_roles as $drupal_users_roles)
			{
			$drupal_users_roles_id = $drupal_users_roles->get_id();
			$result_array[$drupal_users_roles_id]['drupal_users_roles.uid'] = $drupal_users_roles->get_uid();
			$result_array[$drupal_users_roles_id]['drupal_users_roles.rid'] = $drupal_users_roles->get_rid();
			$result_array[$drupal_users_roles_id]['drupal_users_roles.id'] = $drupal_users_roles->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_users_roles.uid']['type'] = 'int8';
			$this->p_column_definitions['drupal_users_roles.rid']['type'] = 'int8';
			$this->p_column_definitions['drupal_users_roles.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
