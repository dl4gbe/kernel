<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_data_translation_5686b80f_11db_4c2b_9c5c_6a75a34e2a8a extends cls_table_view_base 
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
		$common_data_translation = cls_table_factory::get_common_data_translation();
		$array_data_translation =  $common_data_translation->get_data_translations($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_data_translation as $data_translation)
			{
			$data_translation_id = $data_translation->get_id();
			$result_array[$data_translation_id]['data_translation.id'] = $data_translation->get_id();
			$result_array[$data_translation_id]['data_translation.id_data'] = $data_translation->get_id_data();
			$result_array[$data_translation_id]['data_translation.fieldname'] = $data_translation->get_fieldname();
			$result_array[$data_translation_id]['data_translation.translation'] = $data_translation->get_translation();
			$result_array[$data_translation_id]['data_translation.language'] = $data_translation->get_language();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['data_translation.id']['type'] = 'uuid';
			$this->p_column_definitions['data_translation.id_data']['type'] = 'uuid';
			$this->p_column_definitions['data_translation.fieldname']['type'] = 'varchar';
			$this->p_column_definitions['data_translation.translation']['type'] = 'varchar';
			$this->p_column_definitions['data_translation.language']['type'] = 'bpchar';
		}
		return $this->p_column_definitions;
	}
}
?>
