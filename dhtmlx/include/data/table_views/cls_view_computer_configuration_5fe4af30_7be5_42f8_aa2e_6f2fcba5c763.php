<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_computer_configuration_5fe4af30_7be5_42f8_aa2e_6f2fcba5c763 extends cls_table_view_base 
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
		$common_computer_configuration = cls_table_factory::get_common_computer_configuration();
		$array_computer_configuration =  $common_computer_configuration->get_computer_configurations($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_computer_configuration as $computer_configuration)
			{
			$computer_configuration_id = $computer_configuration->get_id();
			$result_array[$computer_configuration_id]['computer_configuration.id'] = $computer_configuration->get_id();
			$result_array[$computer_configuration_id]['computer_configuration.computer'] = $computer_configuration->get_computer();
			$result_array[$computer_configuration_id]['computer_configuration.key'] = $computer_configuration->get_key();
			$result_array[$computer_configuration_id]['computer_configuration.value'] = $computer_configuration->get_value();
			$result_array[$computer_configuration_id]['computer_configuration.app'] = $computer_configuration->get_app();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['computer_configuration.id']['type'] = 'uuid';
			$this->p_column_definitions['computer_configuration.computer']['type'] = 'varchar';
			$this->p_column_definitions['computer_configuration.key']['type'] = 'varchar';
			$this->p_column_definitions['computer_configuration.value']['type'] = 'varchar';
			$this->p_column_definitions['computer_configuration.app']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
