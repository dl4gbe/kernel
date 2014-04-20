<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_configuration_5ca4fb78_6d30_409f_8d9c_13c3110a31ea extends cls_table_view_base 
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
		$common_configuration = cls_table_factory::get_common_configuration();
		$array_configuration =  $common_configuration->get_configurations($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_configuration as $configuration)
			{
			$configuration_id = $configuration->get_id();
			$result_array[$configuration_id]['configuration.id'] = $configuration->get_id();
			$result_array[$configuration_id]['configuration.key'] = $configuration->get_key();
			$result_array[$configuration_id]['configuration.value'] = $configuration->get_value();
			$result_array[$configuration_id]['configuration.app'] = $configuration->get_app();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['configuration.id']['type'] = 'uuid';
			$this->p_column_definitions['configuration.key']['type'] = 'varchar';
			$this->p_column_definitions['configuration.value']['type'] = 'varchar';
			$this->p_column_definitions['configuration.app']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
