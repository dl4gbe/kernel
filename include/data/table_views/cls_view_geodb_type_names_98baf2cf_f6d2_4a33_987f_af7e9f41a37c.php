<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_geodb_type_names_98baf2cf_f6d2_4a33_987f_af7e9f41a37c extends cls_table_view_base 
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
		$common_geodb_type_names = cls_table_factory::get_common_geodb_type_names();
		$array_geodb_type_names =  $common_geodb_type_names->get_geodb_type_namess($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_geodb_type_names as $geodb_type_names)
			{
			$geodb_type_names_id = $geodb_type_names->get_id();
			$result_array[$geodb_type_names_id]['geodb_type_names.type_id'] = $geodb_type_names->get_type_id();
			$result_array[$geodb_type_names_id]['geodb_type_names.type_locale'] = $geodb_type_names->get_type_locale();
			$result_array[$geodb_type_names_id]['geodb_type_names.name'] = $geodb_type_names->get_name();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['geodb_type_names.type_id']['type'] = 'int4';
			$this->p_column_definitions['geodb_type_names.type_locale']['type'] = 'varchar';
			$this->p_column_definitions['geodb_type_names.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
