<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_bank_account_f71bdf75_7fdb_4e93_8d43_779ed9673120 extends cls_table_view_base 
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
		$common_bank_account = cls_table_factory::get_common_bank_account();
		$array_bank_account =  $common_bank_account->get_bank_accounts($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_bank_account as $bank_account)
			{
			$bank_account_id = $bank_account->get_id();
			$result_array[$bank_account_id]['bank_account.id'] = $bank_account->get_id();
			$result_array[$bank_account_id]['bank_account.bankcode'] = $bank_account->get_bankcode();
			$result_array[$bank_account_id]['bank_account.accountno'] = $bank_account->get_accountno();
			$result_array[$bank_account_id]['bank_account.iban'] = $bank_account->get_iban();
			$result_array[$bank_account_id]['bank_account.bic'] = $bank_account->get_bic();
			$result_array[$bank_account_id]['bank_account.holder'] = $bank_account->get_holder();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['bank_account.id']['type'] = 'uuid';
			$this->p_column_definitions['bank_account.bankcode']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.accountno']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.iban']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.bic']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.holder']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
