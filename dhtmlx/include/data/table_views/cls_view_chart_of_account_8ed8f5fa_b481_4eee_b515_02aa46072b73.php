<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_chart_of_account_8ed8f5fa_b481_4eee_b515_02aa46072b73 extends cls_table_view_base 
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
		$common_chart_of_account = cls_table_factory::get_common_chart_of_account();
		$array_chart_of_account =  $common_chart_of_account->get_chart_of_accounts($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_chart_of_account as $chart_of_account)
			{
			$chart_of_account_id = $chart_of_account->get_id();
			$result_array[$chart_of_account_id]['chart_of_account.id'] = $chart_of_account->get_id();
			$result_array[$chart_of_account_id]['chart_of_account.name'] = $chart_of_account->get_name();
			$result_array[$chart_of_account_id]['chart_of_account.active'] = $chart_of_account->get_active();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['chart_of_account.id']['type'] = 'uuid';
			$this->p_column_definitions['chart_of_account.name']['type'] = 'varchar';
			$this->p_column_definitions['chart_of_account.active']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
