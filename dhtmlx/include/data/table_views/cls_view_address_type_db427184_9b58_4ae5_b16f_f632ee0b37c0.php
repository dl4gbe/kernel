<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_address_type_db427184_9b58_4ae5_b16f_f632ee0b37c0 extends cls_table_view_base 
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
		$common_address_type = cls_table_factory::get_common_address_type();
		$array_address_type =  $common_address_type->get_address_types($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_address_type as $address_type)
			{
			$address_type_id = $address_type->get_id();
			$result_array[$address_type_id]['address_type.id'] = $address_type->get_id();
			$result_array[$address_type_id]['address_type.name'] = $address_type->get_name();
			$result_array[$address_type_id]['address_type.active'] = $address_type->get_active();
			$result_array[$address_type_id]['address_type.restrictions'] = $address_type->get_restrictions();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['address_type.id']['type'] = 'uuid';
			$this->p_column_definitions['address_type.name']['type'] = 'varchar';
			$this->p_column_definitions['address_type.active']['type'] = 'bool';
			$this->p_column_definitions['address_type.restrictions']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
