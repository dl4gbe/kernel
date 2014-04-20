<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_geodb_intdata_66ead745_2feb_43e5_a08a_12000da04a50 extends cls_table_view_base 
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
		$common_geodb_intdata = cls_table_factory::get_common_geodb_intdata();
		$array_geodb_intdata =  $common_geodb_intdata->get_geodb_intdatas($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_geodb_intdata as $geodb_intdata)
			{
			$geodb_intdata_id = $geodb_intdata->get_id();
			$result_array[$geodb_intdata_id]['geodb_intdata.loc_id'] = $geodb_intdata->get_loc_id();
			$result_array[$geodb_intdata_id]['geodb_intdata.int_type'] = $geodb_intdata->get_int_type();
			$result_array[$geodb_intdata_id]['geodb_intdata.int_val'] = $geodb_intdata->get_int_val();
			$result_array[$geodb_intdata_id]['geodb_intdata.valid_since'] = $geodb_intdata->get_valid_since();
			$result_array[$geodb_intdata_id]['geodb_intdata.date_type_since'] = $geodb_intdata->get_date_type_since();
			$result_array[$geodb_intdata_id]['geodb_intdata.valid_until'] = $geodb_intdata->get_valid_until();
			$result_array[$geodb_intdata_id]['geodb_intdata.date_type_until'] = $geodb_intdata->get_date_type_until();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['geodb_intdata.loc_id']['type'] = 'int4';
			$this->p_column_definitions['geodb_intdata.int_type']['type'] = 'int4';
			$this->p_column_definitions['geodb_intdata.int_val']['type'] = 'int8';
			$this->p_column_definitions['geodb_intdata.valid_since']['type'] = 'date';
			$this->p_column_definitions['geodb_intdata.date_type_since']['type'] = 'int4';
			$this->p_column_definitions['geodb_intdata.valid_until']['type'] = 'date';
			$this->p_column_definitions['geodb_intdata.date_type_until']['type'] = 'int4';
		}
		return $this->p_column_definitions;
	}
}
?>
