<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_insurance_district_5a30be3c_e53c_4864_aef6_30c28045fd37 extends cls_table_view_base 
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
		$common_insurance_district = cls_table_factory::get_common_insurance_district();
		$array_insurance_district =  $common_insurance_district->get_insurance_districts($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_insurance_district as $insurance_district)
			{
			$insurance_district_id = $insurance_district->get_id();
			$result_array[$insurance_district_id]['insurance_district.id'] = $insurance_district->get_id();
			$result_array[$insurance_district_id]['insurance_district.number'] = $insurance_district->get_number();
			$result_array[$insurance_district_id]['insurance_district.name'] = $insurance_district->get_name();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['insurance_district.id']['type'] = 'uuid';
			$this->p_column_definitions['insurance_district.number']['type'] = 'varchar';
			$this->p_column_definitions['insurance_district.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
