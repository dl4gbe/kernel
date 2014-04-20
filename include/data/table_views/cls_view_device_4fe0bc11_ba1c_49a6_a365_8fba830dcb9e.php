<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_device_4fe0bc11_ba1c_49a6_a365_8fba830dcb9e extends cls_table_view_base 
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
		$common_device = cls_table_factory::get_common_device();
		$array_device =  $common_device->get_devices($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_device as $device)
			{
			$device_id = $device->get_id();
			$result_array[$device_id]['device.id'] = $device->get_id();
			$result_array[$device_id]['device.name'] = $device->get_name();
			$result_array[$device_id]['device.config'] = $device->get_config();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['device.id']['type'] = 'uuid';
			$this->p_column_definitions['device.name']['type'] = 'varchar';
			$this->p_column_definitions['device.config']['type'] = 'text';
		}
		return $this->p_column_definitions;
	}
}
?>
