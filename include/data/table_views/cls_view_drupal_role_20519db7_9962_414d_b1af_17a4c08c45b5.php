<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_role_20519db7_9962_414d_b1af_17a4c08c45b5 extends cls_table_view_base 
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
		$common_drupal_role = cls_table_factory::get_common_drupal_role();
		$array_drupal_role =  $common_drupal_role->get_drupal_roles($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_role as $drupal_role)
			{
			$drupal_role_id = $drupal_role->get_id();
			$result_array[$drupal_role_id]['drupal_role.rid'] = $drupal_role->get_rid();
			$result_array[$drupal_role_id]['drupal_role.name'] = $drupal_role->get_name();
			$result_array[$drupal_role_id]['drupal_role.weight'] = $drupal_role->get_weight();
			$result_array[$drupal_role_id]['drupal_role.id'] = $drupal_role->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_role.rid']['type'] = 'int4';
			$this->p_column_definitions['drupal_role.name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_role.weight']['type'] = 'int4';
			$this->p_column_definitions['drupal_role.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
