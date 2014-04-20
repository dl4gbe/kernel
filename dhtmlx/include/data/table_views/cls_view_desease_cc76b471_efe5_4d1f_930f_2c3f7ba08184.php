<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_desease_cc76b471_efe5_4d1f_930f_2c3f7ba08184 extends cls_table_view_base 
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
		$common_desease = cls_table_factory::get_common_desease();
		$array_desease =  $common_desease->get_deseases($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_desease as $desease)
			{
			$desease_id = $desease->get_id();
			$result_array[$desease_id]['desease.id'] = $desease->get_id();
			$result_array[$desease_id]['desease.icd10'] = $desease->get_icd10();
			$result_array[$desease_id]['desease.name'] = $desease->get_name();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['desease.id']['type'] = 'uuid';
			$this->p_column_definitions['desease.icd10']['type'] = 'varchar';
			$this->p_column_definitions['desease.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
