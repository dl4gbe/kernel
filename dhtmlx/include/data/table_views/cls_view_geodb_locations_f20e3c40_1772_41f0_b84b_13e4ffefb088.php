<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_geodb_locations_f20e3c40_1772_41f0_b84b_13e4ffefb088 extends cls_table_view_base 
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
		$common_geodb_locations = cls_table_factory::get_common_geodb_locations();
		$array_geodb_locations =  $common_geodb_locations->get_geodb_locationss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_geodb_locations as $geodb_locations)
			{
			$geodb_locations_id = $geodb_locations->get_id();
			$result_array[$geodb_locations_id]['geodb_locations.loc_id'] = $geodb_locations->get_loc_id();
			$result_array[$geodb_locations_id]['geodb_locations.loc_type'] = $geodb_locations->get_loc_type();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['geodb_locations.loc_id']['type'] = 'numeric';
			$this->p_column_definitions['geodb_locations.loc_type']['type'] = 'numeric';
		}
		return $this->p_column_definitions;
	}
}
?>
