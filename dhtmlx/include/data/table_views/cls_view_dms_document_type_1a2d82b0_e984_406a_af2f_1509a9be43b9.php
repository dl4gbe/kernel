<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_dms_document_type_1a2d82b0_e984_406a_af2f_1509a9be43b9 extends cls_table_view_base 
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
		$common_dms_document_type = cls_table_factory::get_common_dms_document_type();
		$array_dms_document_type =  $common_dms_document_type->get_dms_document_types($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_dms_document_type as $dms_document_type)
			{
			$dms_document_type_id = $dms_document_type->get_id();
			$result_array[$dms_document_type_id]['dms_document_type.id'] = $dms_document_type->get_id();
			$result_array[$dms_document_type_id]['dms_document_type.code'] = $dms_document_type->get_code();
			$result_array[$dms_document_type_id]['dms_document_type.name'] = $dms_document_type->get_name();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['dms_document_type.id']['type'] = 'uuid';
			$this->p_column_definitions['dms_document_type.code']['type'] = 'varchar';
			$this->p_column_definitions['dms_document_type.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
