<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_userconfiguration_b85f147b_9658_4ee5_a37c_339f5b43c6e1 extends cls_table_view_base 
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
		$common_userconfiguration = cls_table_factory::get_common_userconfiguration();
		$array_userconfiguration =  $common_userconfiguration->get_userconfigurations($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_userconfiguration as $userconfiguration)
			{
			$userconfiguration_id = $userconfiguration->get_id();
			$result_array[$userconfiguration_id]['userconfiguration.id'] = $userconfiguration->get_id();
			$result_array[$userconfiguration_id]['userconfiguration.computer'] = $userconfiguration->get_computer();
			$result_array[$userconfiguration_id]['userconfiguration.key'] = $userconfiguration->get_key();
			$result_array[$userconfiguration_id]['userconfiguration.value'] = $userconfiguration->get_value();
			$result_array[$userconfiguration_id]['userconfiguration.app'] = $userconfiguration->get_app();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['userconfiguration.id']['type'] = 'uuid';
			$this->p_column_definitions['userconfiguration.computer']['type'] = 'varchar';
			$this->p_column_definitions['userconfiguration.key']['type'] = 'varchar';
			$this->p_column_definitions['userconfiguration.value']['type'] = 'varchar';
			$this->p_column_definitions['userconfiguration.app']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
