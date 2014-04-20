<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_dms_e49d2d5b_6391_4a6b_a620_6c3c3f854daf extends cls_table_view_base 
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
		$common_dms = cls_table_factory::get_common_dms();
		$array_dms =  $common_dms->get_dmss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_dms as $dms)
			{
			$dms_id = $dms->get_id();
			$result_array[$dms_id]['dms.id'] = $dms->get_id();
			$result_array[$dms_id]['dms.shortdescription'] = $dms->get_shortdescription();
			$result_array[$dms_id]['dms.description'] = $dms->get_description();
			$result_array[$dms_id]['dms.createdate'] = $dms->get_createdate();
			$result_array[$dms_id]['dms.id_data'] = $dms->get_id_data();
			$result_array[$dms_id]['dms.data'] = $dms->get_data();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['dms.id']['type'] = 'uuid';
			$this->p_column_definitions['dms.shortdescription']['type'] = 'varchar';
			$this->p_column_definitions['dms.description']['type'] = 'text';
			$this->p_column_definitions['dms.createdate']['type'] = 'timestamptz';
			$this->p_column_definitions['dms.id_data']['type'] = 'uuid';
			$this->p_column_definitions['dms.data']['type'] = 'bytea';
		}
		return $this->p_column_definitions;
	}
}
?>
