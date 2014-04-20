<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_swift_statement_line_1b347525_3e15_4fc7_8ff5_3c580e6b7343 extends cls_table_view_base 
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
		$common_swift_statement_line = cls_table_factory::get_common_swift_statement_line();
		$array_swift_statement_line =  $common_swift_statement_line->get_swift_statement_lines($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_swift_statement($array_swift_statement_line);
		$data_array_id_swift_statement = $this->fill_distinct_id_swift_statement($where);

		$result_array = array();
		foreach($array_swift_statement_line as $swift_statement_line)
			{
			$swift_statement_line_id = $swift_statement_line->get_id();
			$result_array[$swift_statement_line_id]['swift_statement_line.id'] = $swift_statement_line->get_id();
			$link_id = $swift_statement_line->get_id_swift_statement();
			if (empty($link_id))
				{
				$result_array[$swift_statement_line_id]['swift_statement.account_identification_code'] = '';
				}
			else
				{
				$result_array[$swift_statement_line_id]['swift_statement.account_identification_code'] = $data_array_id_swift_statement[$link_id]->get_account_identification_code();
				}
			$link_id = $swift_statement_line->get_id_swift_statement();
			if (empty($link_id))
				{
				$result_array[$swift_statement_line_id]['swift_statement.closing_available_balance_currency_code'] = '';
				}
			else
				{
				$result_array[$swift_statement_line_id]['swift_statement.closing_available_balance_currency_code'] = $data_array_id_swift_statement[$link_id]->get_closing_available_balance_currency_code();
				}
			$link_id = $swift_statement_line->get_id_swift_statement();
			if (empty($link_id))
				{
				$result_array[$swift_statement_line_id]['swift_statement.closing_balance_currency_code'] = '';
				}
			else
				{
				$result_array[$swift_statement_line_id]['swift_statement.closing_balance_currency_code'] = $data_array_id_swift_statement[$link_id]->get_closing_balance_currency_code();
				}
			$link_id = $swift_statement_line->get_id_swift_statement();
			if (empty($link_id))
				{
				$result_array[$swift_statement_line_id]['swift_statement.opening_balance_currency_code'] = '';
				}
			else
				{
				$result_array[$swift_statement_line_id]['swift_statement.opening_balance_currency_code'] = $data_array_id_swift_statement[$link_id]->get_opening_balance_currency_code();
				}
			$link_id = $swift_statement_line->get_id_swift_statement();
			if (empty($link_id))
				{
				$result_array[$swift_statement_line_id]['swift_statement.related_reference'] = '';
				}
			else
				{
				$result_array[$swift_statement_line_id]['swift_statement.related_reference'] = $data_array_id_swift_statement[$link_id]->get_related_reference();
				}
			$link_id = $swift_statement_line->get_id_swift_statement();
			if (empty($link_id))
				{
				$result_array[$swift_statement_line_id]['swift_statement.statement_number'] = '';
				}
			else
				{
				$result_array[$swift_statement_line_id]['swift_statement.statement_number'] = $data_array_id_swift_statement[$link_id]->get_statement_number();
				}
			$link_id = $swift_statement_line->get_id_swift_statement();
			if (empty($link_id))
				{
				$result_array[$swift_statement_line_id]['swift_statement.transaction_reference_number'] = '';
				}
			else
				{
				$result_array[$swift_statement_line_id]['swift_statement.transaction_reference_number'] = $data_array_id_swift_statement[$link_id]->get_transaction_reference_number();
				}
			$result_array[$swift_statement_line_id]['swift_statement_line.retrieval_date'] = $swift_statement_line->get_retrieval_date();
			$result_array[$swift_statement_line_id]['swift_statement_line.retrieval_no'] = $swift_statement_line->get_retrieval_no();
			$result_array[$swift_statement_line_id]['swift_statement_line.account_number'] = $swift_statement_line->get_account_number();
			$result_array[$swift_statement_line_id]['swift_statement_line.amount'] = $swift_statement_line->get_amount();
			$result_array[$swift_statement_line_id]['swift_statement_line.bankcode'] = $swift_statement_line->get_bankcode();
			$result_array[$swift_statement_line_id]['swift_statement_line.business_transaction_code'] = $swift_statement_line->get_business_transaction_code();
			$result_array[$swift_statement_line_id]['swift_statement_line.business_transaction_text'] = $swift_statement_line->get_business_transaction_text();
			$result_array[$swift_statement_line_id]['swift_statement_line.charges_amount'] = $swift_statement_line->get_charges_amount();
			$result_array[$swift_statement_line_id]['swift_statement_line.charges_currency_code'] = $swift_statement_line->get_charges_currency_code();
			$result_array[$swift_statement_line_id]['swift_statement_line.customer_reference'] = $swift_statement_line->get_customer_reference();
			$result_array[$swift_statement_line_id]['swift_statement_line.entry_date'] = $swift_statement_line->get_entry_date();
			$result_array[$swift_statement_line_id]['swift_statement_line.institution_reference'] = $swift_statement_line->get_institution_reference();
			$result_array[$swift_statement_line_id]['swift_statement_line.name'] = $swift_statement_line->get_name();
			$result_array[$swift_statement_line_id]['swift_statement_line.original_amount'] = $swift_statement_line->get_original_amount();
			$result_array[$swift_statement_line_id]['swift_statement_line.original_currency_code'] = $swift_statement_line->get_original_currency_code();
			$result_array[$swift_statement_line_id]['swift_statement_line.prima_note_number'] = $swift_statement_line->get_prima_note_number();
			$result_array[$swift_statement_line_id]['swift_statement_line.purpose'] = $swift_statement_line->get_purpose();
			$result_array[$swift_statement_line_id]['swift_statement_line.reversal'] = $swift_statement_line->get_reversal();
			$result_array[$swift_statement_line_id]['swift_statement_line.supplementary_details'] = $swift_statement_line->get_supplementary_details();
			$result_array[$swift_statement_line_id]['swift_statement_line.textkey_supplement'] = $swift_statement_line->get_textkey_supplement();
			$result_array[$swift_statement_line_id]['swift_statement_line.transaction_type'] = $swift_statement_line->get_transaction_type();
			$result_array[$swift_statement_line_id]['swift_statement_line.validity_date'] = $swift_statement_line->get_validity_date();
			$result_array[$swift_statement_line_id]['swift_statement_line.equivalent_amount'] = $swift_statement_line->get_equivalent_amount();
			$result_array[$swift_statement_line_id]['swift_statement_line.equivalent_currency_code'] = $swift_statement_line->get_equivalent_currency_code();
			$result_array[$swift_statement_line_id]['swift_statement_line.currency_code'] = $swift_statement_line->get_currency_code();
			$result_array[$swift_statement_line_id]['swift_statement_line.real_validity_date'] = $swift_statement_line->get_real_validity_date();
			$result_array[$swift_statement_line_id]['swift_statement_line.statement_number'] = $swift_statement_line->get_statement_number();
			$result_array[$swift_statement_line_id]['swift_statement_line.contains_sepa'] = $swift_statement_line->get_contains_sepa();
			$result_array[$swift_statement_line_id]['swift_statement_line.creditor_id'] = $swift_statement_line->get_creditor_id();
			$result_array[$swift_statement_line_id]['swift_statement_line.different_originator'] = $swift_statement_line->get_different_originator();
			$result_array[$swift_statement_line_id]['swift_statement_line.end_to_end_id'] = $swift_statement_line->get_end_to_end_id();
			$result_array[$swift_statement_line_id]['swift_statement_line.mandate_reference'] = $swift_statement_line->get_mandate_reference();
			$result_array[$swift_statement_line_id]['swift_statement_line.originator_id'] = $swift_statement_line->get_originator_id();
			$result_array[$swift_statement_line_id]['swift_statement_line.sepa_purpose'] = $swift_statement_line->get_sepa_purpose();
			$result_array[$swift_statement_line_id]['swift_statement_line.next_closing_balance_amount'] = $swift_statement_line->get_next_closing_balance_amount();
			$result_array[$swift_statement_line_id]['swift_statement_line.next_closing_balance_currency_code'] = $swift_statement_line->get_next_closing_balance_currency_code();
			$result_array[$swift_statement_line_id]['swift_statement_line.next_closing_balance_date'] = $swift_statement_line->get_next_closing_balance_date();
			$result_array[$swift_statement_line_id]['swift_statement_line.next_interim_closing_amount'] = $swift_statement_line->get_next_interim_closing_amount();
			$result_array[$swift_statement_line_id]['swift_statement_line.next_interim_closing_balance_date'] = $swift_statement_line->get_next_interim_closing_balance_date();
			$result_array[$swift_statement_line_id]['swift_statement_line.next_interim_closing_currency_code'] = $swift_statement_line->get_next_interim_closing_currency_code();
			$result_array[$swift_statement_line_id]['swift_statement_line.prev_interim_balance_amount'] = $swift_statement_line->get_prev_interim_balance_amount();
			$result_array[$swift_statement_line_id]['swift_statement_line.prev_interim_balance_currency_code'] = $swift_statement_line->get_prev_interim_balance_currency_code();
			$result_array[$swift_statement_line_id]['swift_statement_line.prev_interim_balance_date'] = $swift_statement_line->get_prev_interim_balance_date();
			$result_array[$swift_statement_line_id]['swift_statement_line.prev_opening_balance_amount'] = $swift_statement_line->get_prev_opening_balance_amount();
			$result_array[$swift_statement_line_id]['swift_statement_line.prev_opening_balance_currency_code'] = $swift_statement_line->get_prev_opening_balance_currency_code();
			$result_array[$swift_statement_line_id]['swift_statement_line.prev_opening_balance_date'] = $swift_statement_line->get_prev_opening_balance_date();
			$result_array[$swift_statement_line_id]['swift_statement_line.bic'] = $swift_statement_line->get_bic();
			$result_array[$swift_statement_line_id]['swift_statement_line.compensation_amount'] = $swift_statement_line->get_compensation_amount();
			$result_array[$swift_statement_line_id]['swift_statement_line.different_recipient'] = $swift_statement_line->get_different_recipient();
			$result_array[$swift_statement_line_id]['swift_statement_line.iban'] = $swift_statement_line->get_iban();
			$result_array[$swift_statement_line_id]['swift_statement_line.purpose_code'] = $swift_statement_line->get_purpose_code();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_swift_statement($array_swift_statement_line)
	{
		$ids = array();
		foreach ($array_swift_statement_line as $swift_statement_line)
		{
			$id = $swift_statement_line->get_id_swift_statement();
			if (!in_array($id,$ids)) $ids[] = $id;
		}
		$i = 0;
		$in = "";
		foreach ($ids as $id)
		{
			if (empty($id)) continue;
			if ($i != 0) $in .= ',';
			$in .= "'" . $id . "'";
			$i++;
		}
		if (!empty($in)) $in = ' id in (' . $in . ')';
		return $in;
	}

	private function fill_distinct_id_swift_statement($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "swift_statement.id",swift_statement.account_identification_code as "swift_statement.account_identification_code",swift_statement.closing_available_balance_currency_code as "swift_statement.closing_available_balance_currency_code",swift_statement.closing_balance_currency_code as "swift_statement.closing_balance_currency_code",swift_statement.opening_balance_currency_code as "swift_statement.opening_balance_currency_code",swift_statement.related_reference as "swift_statement.related_reference",swift_statement.statement_number as "swift_statement.statement_number",swift_statement.transaction_reference_number as "swift_statement.transaction_reference_number" from swift_statement where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$swift_statement = cls_table_factory::create_instance('swift_statement');
			$swift_statement->fill($row);
			$data[$row['swift_statement.id']] = $swift_statement;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['swift_statement_line.id']['type'] = 'uuid';
			$this->p_column_definitions['swift_statement.account_identification_code']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement.closing_available_balance_currency_code']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement.closing_balance_currency_code']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement.opening_balance_currency_code']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement.related_reference']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement.statement_number']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement.transaction_reference_number']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.retrieval_date']['type'] = 'date';
			$this->p_column_definitions['swift_statement_line.retrieval_no']['type'] = 'int4';
			$this->p_column_definitions['swift_statement_line.account_number']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.amount']['type'] = 'money';
			$this->p_column_definitions['swift_statement_line.bankcode']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.business_transaction_code']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.business_transaction_text']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.charges_amount']['type'] = 'money';
			$this->p_column_definitions['swift_statement_line.charges_currency_code']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.customer_reference']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.entry_date']['type'] = 'date';
			$this->p_column_definitions['swift_statement_line.institution_reference']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.name']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.original_amount']['type'] = 'money';
			$this->p_column_definitions['swift_statement_line.original_currency_code']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.prima_note_number']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.purpose']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.reversal']['type'] = 'bool';
			$this->p_column_definitions['swift_statement_line.supplementary_details']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.textkey_supplement']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.transaction_type']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.validity_date']['type'] = 'date';
			$this->p_column_definitions['swift_statement_line.equivalent_amount']['type'] = 'money';
			$this->p_column_definitions['swift_statement_line.equivalent_currency_code']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.currency_code']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.real_validity_date']['type'] = 'date';
			$this->p_column_definitions['swift_statement_line.statement_number']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.contains_sepa']['type'] = 'bool';
			$this->p_column_definitions['swift_statement_line.creditor_id']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.different_originator']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.end_to_end_id']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.mandate_reference']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.originator_id']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.sepa_purpose']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.next_closing_balance_amount']['type'] = 'money';
			$this->p_column_definitions['swift_statement_line.next_closing_balance_currency_code']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.next_closing_balance_date']['type'] = 'date';
			$this->p_column_definitions['swift_statement_line.next_interim_closing_amount']['type'] = 'money';
			$this->p_column_definitions['swift_statement_line.next_interim_closing_balance_date']['type'] = 'date';
			$this->p_column_definitions['swift_statement_line.next_interim_closing_currency_code']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.prev_interim_balance_amount']['type'] = 'money';
			$this->p_column_definitions['swift_statement_line.prev_interim_balance_currency_code']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.prev_interim_balance_date']['type'] = 'date';
			$this->p_column_definitions['swift_statement_line.prev_opening_balance_amount']['type'] = 'money';
			$this->p_column_definitions['swift_statement_line.prev_opening_balance_currency_code']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.prev_opening_balance_date']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.bic']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.compensation_amount']['type'] = 'money';
			$this->p_column_definitions['swift_statement_line.different_recipient']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.iban']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line.purpose_code']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
