<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_swift_statement_line
{
public function write_buffer($data)
	{
	}

public function echo_export_string($data)
	{
	echo $this->create_export_string($data);
	}

private function create_export_string($data)
	{
		$i = 0;
		$content = 'data = {' . PHP_EOL;
		$content .= 'rows: [' . PHP_EOL;
		foreach ($data as $swift_statement_line)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $swift_statement_line->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $swift_statement_line->get_id_swift_statement() . "'" . "," . "'" . $swift_statement_line->get_retrieval_date() . "'" . "," . "'" . $swift_statement_line->get_retrieval_no() . "'" . "," . "'" . $swift_statement_line->get_account_number() . "'" . "," . "'" . $swift_statement_line->get_amount() . "'" . "," . "'" . $swift_statement_line->get_bankcode() . "'" . "," . "'" . $swift_statement_line->get_business_transaction_code() . "'" . "," . "'" . $swift_statement_line->get_business_transaction_text() . "'" . "," . "'" . $swift_statement_line->get_charges_amount() . "'" . "," . "'" . $swift_statement_line->get_charges_currency_code() . "'" . "," . "'" . $swift_statement_line->get_customer_reference() . "'" . "," . "'" . $swift_statement_line->get_entry_date() . "'" . "," . "'" . $swift_statement_line->get_institution_reference() . "'" . "," . "'" . $swift_statement_line->get_name() . "'" . "," . "'" . $swift_statement_line->get_original_amount() . "'" . "," . "'" . $swift_statement_line->get_original_currency_code() . "'" . "," . "'" . $swift_statement_line->get_prima_note_number() . "'" . "," . "'" . $swift_statement_line->get_purpose() . "'" . "," . "'" . $swift_statement_line->get_reversal() . "'" . "," . "'" . $swift_statement_line->get_supplementary_details() . "'" . "," . "'" . $swift_statement_line->get_textkey_supplement() . "'" . "," . "'" . $swift_statement_line->get_transaction_type() . "'" . "," . "'" . $swift_statement_line->get_validity_date() . "'" . "," . "'" . $swift_statement_line->get_equivalent_amount() . "'" . "," . "'" . $swift_statement_line->get_equivalent_currency_code() . "'" . "," . "'" . $swift_statement_line->get_currency_code() . "'" . "," . "'" . $swift_statement_line->get_real_validity_date() . "'" . "," . "'" . $swift_statement_line->get_statement_number() . "'" . "," . "'" . $swift_statement_line->get_contains_sepa() . "'" . "," . "'" . $swift_statement_line->get_creditor_id() . "'" . "," . "'" . $swift_statement_line->get_different_originator() . "'" . "," . "'" . $swift_statement_line->get_end_to_end_id() . "'" . "," . "'" . $swift_statement_line->get_mandate_reference() . "'" . "," . "'" . $swift_statement_line->get_originator_id() . "'" . "," . "'" . $swift_statement_line->get_sepa_purpose() . "'" . "," . "'" . $swift_statement_line->get_next_closing_balance_amount() . "'" . "," . "'" . $swift_statement_line->get_next_closing_balance_currency_code() . "'" . "," . "'" . $swift_statement_line->get_next_closing_balance_date() . "'" . "," . "'" . $swift_statement_line->get_next_interim_closing_amount() . "'" . "," . "'" . $swift_statement_line->get_next_interim_closing_balance_date() . "'" . "," . "'" . $swift_statement_line->get_next_interim_closing_currency_code() . "'" . "," . "'" . $swift_statement_line->get_prev_interim_balance_amount() . "'" . "," . "'" . $swift_statement_line->get_prev_interim_balance_currency_code() . "'" . "," . "'" . $swift_statement_line->get_prev_interim_balance_date() . "'" . "," . "'" . $swift_statement_line->get_prev_opening_balance_amount() . "'" . "," . "'" . $swift_statement_line->get_prev_opening_balance_currency_code() . "'" . "," . "'" . $swift_statement_line->get_prev_opening_balance_date() . "'" . "," . "'" . $swift_statement_line->get_bic() . "'" . "," . "'" . $swift_statement_line->get_compensation_amount() . "'" . "," . "'" . $swift_statement_line->get_different_recipient() . "'" . "," . "'" . $swift_statement_line->get_iban() . "'" . "," . "'" . $swift_statement_line->get_purpose_code() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
