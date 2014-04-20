<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_geodb_floatdata_7ac4f338_e140_46fb_8375_67c2a842fa06 extends cls_table_view_base 
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
		$common_geodb_floatdata = cls_table_factory::get_common_geodb_floatdata();
		$array_geodb_floatdata =  $common_geodb_floatdata->get_geodb_floatdatas($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_geodb_floatdata as $geodb_floatdata)
			{
			$geodb_floatdata_id = $geodb_floatdata->get_id();
			$result_array[$geodb_floatdata_id]['geodb_floatdata.loc_id'] = $geodb_floatdata->get_loc_id();
			$result_array[$geodb_floatdata_id]['geodb_floatdata.float_type'] = $geodb_floatdata->get_float_type();
			$result_array[$geodb_floatdata_id]['geodb_floatdata.float_val'] = $geodb_floatdata->get_float_val();
			$result_array[$geodb_floatdata_id]['geodb_floatdata.valid_since'] = $geodb_floatdata->get_valid_since();
			$result_array[$geodb_floatdata_id]['geodb_floatdata.date_type_since'] = $geodb_floatdata->get_date_type_since();
			$result_array[$geodb_floatdata_id]['geodb_floatdata.valid_until'] = $geodb_floatdata->get_valid_until();
			$result_array[$geodb_floatdata_id]['geodb_floatdata.date_type_until'] = $geodb_floatdata->get_date_type_until();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['geodb_floatdata.loc_id']['type'] = 'int4';
			$this->p_column_definitions['geodb_floatdata.float_type']['type'] = 'int4';
			$this->p_column_definitions['geodb_floatdata.float_val']['type'] = 'float8';
			$this->p_column_definitions['geodb_floatdata.valid_since']['type'] = 'int4';
			$this->p_column_definitions['geodb_floatdata.date_type_since']['type'] = 'int4';
			$this->p_column_definitions['geodb_floatdata.valid_until']['type'] = 'date';
			$this->p_column_definitions['geodb_floatdata.date_type_until']['type'] = 'int4';
		}
		return $this->p_column_definitions;
	}
}
?>
