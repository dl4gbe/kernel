<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_dms_type_3286ffc9_7af1_48d5_955d_102fa596cb9c extends cls_table_view_base 
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
		$common_dms_type = cls_table_factory::get_common_dms_type();
		$array_dms_type =  $common_dms_type->get_dms_types($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_dms_type as $dms_type)
			{
			$dms_type_id = $dms_type->get_id();
			$result_array[$dms_type_id]['dms_type.id'] = $dms_type->get_id();
			$result_array[$dms_type_id]['dms_type.suffix'] = $dms_type->get_suffix();
			$result_array[$dms_type_id]['dms_type.name'] = $dms_type->get_name();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['dms_type.id']['type'] = 'uuid';
			$this->p_column_definitions['dms_type.suffix']['type'] = 'varchar';
			$this->p_column_definitions['dms_type.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
