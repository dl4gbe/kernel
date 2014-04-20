<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_fixed_asset_421e9191_53be_4e97_ac1d_01a57c948c1f extends cls_table_view_base 
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
		$common_fixed_asset = cls_table_factory::get_common_fixed_asset();
		$array_fixed_asset =  $common_fixed_asset->get_fixed_assets($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_fixed_asset as $fixed_asset)
			{
			$fixed_asset_id = $fixed_asset->get_id();
			$result_array[$fixed_asset_id]['fixed_asset.id'] = $fixed_asset->get_id();
			$result_array[$fixed_asset_id]['fixed_asset.name'] = $fixed_asset->get_name();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['fixed_asset.id']['type'] = 'uuid';
			$this->p_column_definitions['fixed_asset.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
