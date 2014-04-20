<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_block_role_1d5b2771_a6ee_4d75_ba2d_d7acdc217ddf extends cls_table_view_base 
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
		$common_drupal_block_role = cls_table_factory::get_common_drupal_block_role();
		$array_drupal_block_role =  $common_drupal_block_role->get_drupal_block_roles($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_block_role as $drupal_block_role)
			{
			$drupal_block_role_id = $drupal_block_role->get_id();
			$result_array[$drupal_block_role_id]['drupal_block_role.module'] = $drupal_block_role->get_module();
			$result_array[$drupal_block_role_id]['drupal_block_role.delta'] = $drupal_block_role->get_delta();
			$result_array[$drupal_block_role_id]['drupal_block_role.rid'] = $drupal_block_role->get_rid();
			$result_array[$drupal_block_role_id]['drupal_block_role.id'] = $drupal_block_role->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_block_role.module']['type'] = 'varchar';
			$this->p_column_definitions['drupal_block_role.delta']['type'] = 'varchar';
			$this->p_column_definitions['drupal_block_role.rid']['type'] = 'int8';
			$this->p_column_definitions['drupal_block_role.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
