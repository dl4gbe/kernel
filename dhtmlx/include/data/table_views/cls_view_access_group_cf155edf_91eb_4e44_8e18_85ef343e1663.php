<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_access_group_cf155edf_91eb_4e44_8e18_85ef343e1663 extends cls_table_view_base 
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
		$common_access_group = cls_table_factory::get_common_access_group();
		$array_access_group =  $common_access_group->get_access_groups($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_access_group as $access_group)
			{
			$access_group_id = $access_group->get_id();
			$result_array[$access_group_id]['access_group.id'] = $access_group->get_id();
			$result_array[$access_group_id]['access_group.name'] = $access_group->get_name();
			$result_array[$access_group_id]['access_group.only_access_on_own_data'] = $access_group->get_only_access_on_own_data();
			$result_array[$access_group_id]['access_group.access_to_all_locations'] = $access_group->get_access_to_all_locations();
			$result_array[$access_group_id]['access_group.active'] = $access_group->get_active();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['access_group.id']['type'] = 'uuid';
			$this->p_column_definitions['access_group.name']['type'] = 'varchar';
			$this->p_column_definitions['access_group.only_access_on_own_data']['type'] = 'bool';
			$this->p_column_definitions['access_group.access_to_all_locations']['type'] = 'bool';
			$this->p_column_definitions['access_group.active']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
