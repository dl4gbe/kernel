<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_fixed_asset_group_20f52472_2167_45bc_ba14_9b30eba9341a extends cls_table_view_base 
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
		$common_fixed_asset_group = cls_table_factory::get_common_fixed_asset_group();
		$array_fixed_asset_group =  $common_fixed_asset_group->get_fixed_asset_groups($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_fixed_asset_group as $fixed_asset_group)
			{
			$fixed_asset_group_id = $fixed_asset_group->get_id();
			$result_array[$fixed_asset_group_id]['fixed_asset_group.id'] = $fixed_asset_group->get_id();
			$result_array[$fixed_asset_group_id]['fixed_asset_group.name'] = $fixed_asset_group->get_name();
			$result_array[$fixed_asset_group_id]['fixed_asset_group.therapy'] = $fixed_asset_group->get_therapy();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['fixed_asset_group.id']['type'] = 'uuid';
			$this->p_column_definitions['fixed_asset_group.name']['type'] = 'varchar';
			$this->p_column_definitions['fixed_asset_group.therapy']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
