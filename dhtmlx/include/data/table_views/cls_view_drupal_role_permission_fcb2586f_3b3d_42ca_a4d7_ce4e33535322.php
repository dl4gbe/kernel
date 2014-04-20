<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_role_permission_fcb2586f_3b3d_42ca_a4d7_ce4e33535322 extends cls_table_view_base 
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
		$common_drupal_role_permission = cls_table_factory::get_common_drupal_role_permission();
		$array_drupal_role_permission =  $common_drupal_role_permission->get_drupal_role_permissions($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_role_permission as $drupal_role_permission)
			{
			$drupal_role_permission_id = $drupal_role_permission->get_id();
			$result_array[$drupal_role_permission_id]['drupal_role_permission.rid'] = $drupal_role_permission->get_rid();
			$result_array[$drupal_role_permission_id]['drupal_role_permission.permission'] = $drupal_role_permission->get_permission();
			$result_array[$drupal_role_permission_id]['drupal_role_permission.module'] = $drupal_role_permission->get_module();
			$result_array[$drupal_role_permission_id]['drupal_role_permission.id'] = $drupal_role_permission->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_role_permission.rid']['type'] = 'int8';
			$this->p_column_definitions['drupal_role_permission.permission']['type'] = 'varchar';
			$this->p_column_definitions['drupal_role_permission.module']['type'] = 'varchar';
			$this->p_column_definitions['drupal_role_permission.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
