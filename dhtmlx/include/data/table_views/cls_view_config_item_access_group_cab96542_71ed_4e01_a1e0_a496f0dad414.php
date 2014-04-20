<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_config_item_access_group_cab96542_71ed_4e01_a1e0_a496f0dad414 extends cls_table_view_base 
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
		$common_config_item_access_group = cls_table_factory::get_common_config_item_access_group();
		$array_config_item_access_group =  $common_config_item_access_group->get_config_item_access_groups($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_config_item_access_group as $config_item_access_group)
			{
			$config_item_access_group_id = $config_item_access_group->get_id();
			$result_array[$config_item_access_group_id]['config_item_access_group.id'] = $config_item_access_group->get_id();
			$result_array[$config_item_access_group_id]['config_item_access_group.read_only'] = $config_item_access_group->get_read_only();
			$result_array[$config_item_access_group_id]['config_item_access_group.grant_access'] = $config_item_access_group->get_grant_access();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['config_item_access_group.id']['type'] = 'uuid';
			$this->p_column_definitions['config_item_access_group.read_only']['type'] = 'bool';
			$this->p_column_definitions['config_item_access_group.grant_access']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
