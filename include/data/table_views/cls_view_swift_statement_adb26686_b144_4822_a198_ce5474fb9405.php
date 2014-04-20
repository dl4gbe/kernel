<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_swift_statement_adb26686_b144_4822_a198_ce5474fb9405 extends cls_table_view_base 
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
		$common_swift_statement = cls_table_factory::get_common_swift_statement();
		$array_swift_statement =  $common_swift_statement->get_swift_statements($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_swift_statement as $swift_statement)
			{
			$swift_statement_id = $swift_statement->get_id();
			$result_array[$swift_statement_id]['swift_statement.id'] = $swift_statement->get_id();
			$result_array[$swift_statement_id]['swift_statement.retrieval_date'] = $swift_statement->get_retrieval_date();
			$result_array[$swift_statement_id]['swift_statement.account_identification_code'] = $swift_statement->get_account_identification_code();
			$result_array[$swift_statement_id]['swift_statement.closing_available_balance_amount'] = $swift_statement->get_closing_available_balance_amount();
			$result_array[$swift_statement_id]['swift_statement.closing_available_balance_currency_code'] = $swift_statement->get_closing_available_balance_currency_code();
			$result_array[$swift_statement_id]['swift_statement.closing_available_balance_date'] = $swift_statement->get_closing_available_balance_date();
			$result_array[$swift_statement_id]['swift_statement.closing_balance_amount'] = $swift_statement->get_closing_balance_amount();
			$result_array[$swift_statement_id]['swift_statement.closing_balance_currency_code'] = $swift_statement->get_closing_balance_currency_code();
			$result_array[$swift_statement_id]['swift_statement.closing_balance_date'] = $swift_statement->get_closing_balance_date();
			$result_array[$swift_statement_id]['swift_statement.opening_balance_amount'] = $swift_statement->get_opening_balance_amount();
			$result_array[$swift_statement_id]['swift_statement.opening_balance_currency_code'] = $swift_statement->get_opening_balance_currency_code();
			$result_array[$swift_statement_id]['swift_statement.opening_balance_date'] = $swift_statement->get_opening_balance_date();
			$result_array[$swift_statement_id]['swift_statement.related_reference'] = $swift_statement->get_related_reference();
			$result_array[$swift_statement_id]['swift_statement.statement_number'] = $swift_statement->get_statement_number();
			$result_array[$swift_statement_id]['swift_statement.transaction_reference_number'] = $swift_statement->get_transaction_reference_number();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['swift_statement.id']['type'] = 'uuid';
			$this->p_column_definitions['swift_statement.retrieval_date']['type'] = 'date';
			$this->p_column_definitions['swift_statement.account_identification_code']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement.closing_available_balance_amount']['type'] = 'money';
			$this->p_column_definitions['swift_statement.closing_available_balance_currency_code']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement.closing_available_balance_date']['type'] = 'date';
			$this->p_column_definitions['swift_statement.closing_balance_amount']['type'] = 'money';
			$this->p_column_definitions['swift_statement.closing_balance_currency_code']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement.closing_balance_date']['type'] = 'date';
			$this->p_column_definitions['swift_statement.opening_balance_amount']['type'] = 'money';
			$this->p_column_definitions['swift_statement.opening_balance_currency_code']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement.opening_balance_date']['type'] = 'date';
			$this->p_column_definitions['swift_statement.related_reference']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement.statement_number']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement.transaction_reference_number']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
