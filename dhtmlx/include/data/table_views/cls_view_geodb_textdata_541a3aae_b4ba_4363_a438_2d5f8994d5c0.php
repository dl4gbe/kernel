<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_geodb_textdata_541a3aae_b4ba_4363_a438_2d5f8994d5c0 extends cls_table_view_base 
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
		$common_geodb_textdata = cls_table_factory::get_common_geodb_textdata();
		$array_geodb_textdata =  $common_geodb_textdata->get_geodb_textdatas($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_geodb_textdata as $geodb_textdata)
			{
			$geodb_textdata_id = $geodb_textdata->get_id();
			$result_array[$geodb_textdata_id]['geodb_textdata.loc_id'] = $geodb_textdata->get_loc_id();
			$result_array[$geodb_textdata_id]['geodb_textdata.text_type'] = $geodb_textdata->get_text_type();
			$result_array[$geodb_textdata_id]['geodb_textdata.text_val'] = $geodb_textdata->get_text_val();
			$result_array[$geodb_textdata_id]['geodb_textdata.text_locale'] = $geodb_textdata->get_text_locale();
			$result_array[$geodb_textdata_id]['geodb_textdata.is_native_lang'] = $geodb_textdata->get_is_native_lang();
			$result_array[$geodb_textdata_id]['geodb_textdata.is_default_name'] = $geodb_textdata->get_is_default_name();
			$result_array[$geodb_textdata_id]['geodb_textdata.valid_since'] = $geodb_textdata->get_valid_since();
			$result_array[$geodb_textdata_id]['geodb_textdata.date_type_since'] = $geodb_textdata->get_date_type_since();
			$result_array[$geodb_textdata_id]['geodb_textdata.valid_until'] = $geodb_textdata->get_valid_until();
			$result_array[$geodb_textdata_id]['geodb_textdata.date_type_until'] = $geodb_textdata->get_date_type_until();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['geodb_textdata.loc_id']['type'] = 'int4';
			$this->p_column_definitions['geodb_textdata.text_type']['type'] = 'int4';
			$this->p_column_definitions['geodb_textdata.text_val']['type'] = 'varchar';
			$this->p_column_definitions['geodb_textdata.text_locale']['type'] = 'varchar';
			$this->p_column_definitions['geodb_textdata.is_native_lang']['type'] = 'int2';
			$this->p_column_definitions['geodb_textdata.is_default_name']['type'] = 'int2';
			$this->p_column_definitions['geodb_textdata.valid_since']['type'] = 'date';
			$this->p_column_definitions['geodb_textdata.date_type_since']['type'] = 'int4';
			$this->p_column_definitions['geodb_textdata.valid_until']['type'] = 'date';
			$this->p_column_definitions['geodb_textdata.date_type_until']['type'] = 'int4';
		}
		return $this->p_column_definitions;
	}
}
?>
