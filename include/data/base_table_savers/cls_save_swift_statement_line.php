<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_swift_statement_line extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'swift_statement_line';
		}

	public static function save_object($swift_statement_line,$db_manager,$application)
		{
			if (is_null($swift_statement_line))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$swift_statement_line->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($swift_statement_line->get_purpose_code_is_dirty())
				{
				$data[] = array("name" => "purpose_code" , "value" => $swift_statement_line->get_purpose_code() , "type" => "varchar");
				}
			if ($swift_statement_line->get_iban_is_dirty())
				{
				$data[] = array("name" => "iban" , "value" => $swift_statement_line->get_iban() , "type" => "varchar");
				}
			if ($swift_statement_line->get_different_recipient_is_dirty())
				{
				$data[] = array("name" => "different_recipient" , "value" => $swift_statement_line->get_different_recipient() , "type" => "varchar");
				}
			if ($swift_statement_line->get_compensation_amount_is_dirty())
				{
				$data[] = array("name" => "compensation_amount" , "value" => $swift_statement_line->get_compensation_amount() , "type" => "money");
				}
			if ($swift_statement_line->get_bic_is_dirty())
				{
				$data[] = array("name" => "bic" , "value" => $swift_statement_line->get_bic() , "type" => "varchar");
				}
			if ($swift_statement_line->get_prev_opening_balance_date_is_dirty())
				{
				$data[] = array("name" => "prev_opening_balance_date" , "value" => $swift_statement_line->get_prev_opening_balance_date() , "type" => "varchar");
				}
			if ($swift_statement_line->get_prev_opening_balance_currency_code_is_dirty())
				{
				$data[] = array("name" => "prev_opening_balance_currency_code" , "value" => $swift_statement_line->get_prev_opening_balance_currency_code() , "type" => "varchar");
				}
			if ($swift_statement_line->get_prev_opening_balance_amount_is_dirty())
				{
				$data[] = array("name" => "prev_opening_balance_amount" , "value" => $swift_statement_line->get_prev_opening_balance_amount() , "type" => "money");
				}
			if ($swift_statement_line->get_prev_interim_balance_date_is_dirty())
				{
				$data[] = array("name" => "prev_interim_balance_date" , "value" => $swift_statement_line->get_prev_interim_balance_date() , "type" => "date");
				}
			if ($swift_statement_line->get_prev_interim_balance_currency_code_is_dirty())
				{
				$data[] = array("name" => "prev_interim_balance_currency_code" , "value" => $swift_statement_line->get_prev_interim_balance_currency_code() , "type" => "varchar");
				}
			if ($swift_statement_line->get_prev_interim_balance_amount_is_dirty())
				{
				$data[] = array("name" => "prev_interim_balance_amount" , "value" => $swift_statement_line->get_prev_interim_balance_amount() , "type" => "money");
				}
			if ($swift_statement_line->get_next_interim_closing_currency_code_is_dirty())
				{
				$data[] = array("name" => "next_interim_closing_currency_code" , "value" => $swift_statement_line->get_next_interim_closing_currency_code() , "type" => "varchar");
				}
			if ($swift_statement_line->get_next_interim_closing_balance_date_is_dirty())
				{
				$data[] = array("name" => "next_interim_closing_balance_date" , "value" => $swift_statement_line->get_next_interim_closing_balance_date() , "type" => "date");
				}
			if ($swift_statement_line->get_next_interim_closing_amount_is_dirty())
				{
				$data[] = array("name" => "next_interim_closing_amount" , "value" => $swift_statement_line->get_next_interim_closing_amount() , "type" => "money");
				}
			if ($swift_statement_line->get_next_closing_balance_date_is_dirty())
				{
				$data[] = array("name" => "next_closing_balance_date" , "value" => $swift_statement_line->get_next_closing_balance_date() , "type" => "date");
				}
			if ($swift_statement_line->get_next_closing_balance_currency_code_is_dirty())
				{
				$data[] = array("name" => "next_closing_balance_currency_code" , "value" => $swift_statement_line->get_next_closing_balance_currency_code() , "type" => "varchar");
				}
			if ($swift_statement_line->get_next_closing_balance_amount_is_dirty())
				{
				$data[] = array("name" => "next_closing_balance_amount" , "value" => $swift_statement_line->get_next_closing_balance_amount() , "type" => "money");
				}
			if ($swift_statement_line->get_sepa_purpose_is_dirty())
				{
				$data[] = array("name" => "sepa_purpose" , "value" => $swift_statement_line->get_sepa_purpose() , "type" => "varchar");
				}
			if ($swift_statement_line->get_originator_id_is_dirty())
				{
				$data[] = array("name" => "originator_id" , "value" => $swift_statement_line->get_originator_id() , "type" => "varchar");
				}
			if ($swift_statement_line->get_mandate_reference_is_dirty())
				{
				$data[] = array("name" => "mandate_reference" , "value" => $swift_statement_line->get_mandate_reference() , "type" => "varchar");
				}
			if ($swift_statement_line->get_end_to_end_id_is_dirty())
				{
				$data[] = array("name" => "end_to_end_id" , "value" => $swift_statement_line->get_end_to_end_id() , "type" => "varchar");
				}
			if ($swift_statement_line->get_different_originator_is_dirty())
				{
				$data[] = array("name" => "different_originator" , "value" => $swift_statement_line->get_different_originator() , "type" => "varchar");
				}
			if ($swift_statement_line->get_creditor_id_is_dirty())
				{
				$data[] = array("name" => "creditor_id" , "value" => $swift_statement_line->get_creditor_id() , "type" => "varchar");
				}
			if ($swift_statement_line->get_contains_sepa_is_dirty())
				{
				$data[] = array("name" => "contains_sepa" , "value" => $swift_statement_line->get_contains_sepa() , "type" => "bool");
				}
			if ($swift_statement_line->get_statement_number_is_dirty())
				{
				$data[] = array("name" => "statement_number" , "value" => $swift_statement_line->get_statement_number() , "type" => "varchar");
				}
			if ($swift_statement_line->get_real_validity_date_is_dirty())
				{
				$data[] = array("name" => "real_validity_date" , "value" => $swift_statement_line->get_real_validity_date() , "type" => "date");
				}
			if ($swift_statement_line->get_currency_code_is_dirty())
				{
				$data[] = array("name" => "currency_code" , "value" => $swift_statement_line->get_currency_code() , "type" => "varchar");
				}
			if ($swift_statement_line->get_equivalent_currency_code_is_dirty())
				{
				$data[] = array("name" => "equivalent_currency_code" , "value" => $swift_statement_line->get_equivalent_currency_code() , "type" => "varchar");
				}
			if ($swift_statement_line->get_equivalent_amount_is_dirty())
				{
				$data[] = array("name" => "equivalent_amount" , "value" => $swift_statement_line->get_equivalent_amount() , "type" => "money");
				}
			if ($swift_statement_line->get_validity_date_is_dirty())
				{
				$data[] = array("name" => "validity_date" , "value" => $swift_statement_line->get_validity_date() , "type" => "date");
				}
			if ($swift_statement_line->get_transaction_type_is_dirty())
				{
				$data[] = array("name" => "transaction_type" , "value" => $swift_statement_line->get_transaction_type() , "type" => "varchar");
				}
			if ($swift_statement_line->get_textkey_supplement_is_dirty())
				{
				$data[] = array("name" => "textkey_supplement" , "value" => $swift_statement_line->get_textkey_supplement() , "type" => "varchar");
				}
			if ($swift_statement_line->get_supplementary_details_is_dirty())
				{
				$data[] = array("name" => "supplementary_details" , "value" => $swift_statement_line->get_supplementary_details() , "type" => "varchar");
				}
			if ($swift_statement_line->get_reversal_is_dirty())
				{
				$data[] = array("name" => "reversal" , "value" => $swift_statement_line->get_reversal() , "type" => "bool");
				}
			if ($swift_statement_line->get_purpose_is_dirty())
				{
				$data[] = array("name" => "purpose" , "value" => $swift_statement_line->get_purpose() , "type" => "varchar");
				}
			if ($swift_statement_line->get_prima_note_number_is_dirty())
				{
				$data[] = array("name" => "prima_note_number" , "value" => $swift_statement_line->get_prima_note_number() , "type" => "varchar");
				}
			if ($swift_statement_line->get_original_currency_code_is_dirty())
				{
				$data[] = array("name" => "original_currency_code" , "value" => $swift_statement_line->get_original_currency_code() , "type" => "varchar");
				}
			if ($swift_statement_line->get_original_amount_is_dirty())
				{
				$data[] = array("name" => "original_amount" , "value" => $swift_statement_line->get_original_amount() , "type" => "money");
				}
			if ($swift_statement_line->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $swift_statement_line->get_name() , "type" => "varchar");
				}
			if ($swift_statement_line->get_institution_reference_is_dirty())
				{
				$data[] = array("name" => "institution_reference" , "value" => $swift_statement_line->get_institution_reference() , "type" => "varchar");
				}
			if ($swift_statement_line->get_entry_date_is_dirty())
				{
				$data[] = array("name" => "entry_date" , "value" => $swift_statement_line->get_entry_date() , "type" => "date");
				}
			if ($swift_statement_line->get_customer_reference_is_dirty())
				{
				$data[] = array("name" => "customer_reference" , "value" => $swift_statement_line->get_customer_reference() , "type" => "varchar");
				}
			if ($swift_statement_line->get_charges_currency_code_is_dirty())
				{
				$data[] = array("name" => "charges_currency_code" , "value" => $swift_statement_line->get_charges_currency_code() , "type" => "varchar");
				}
			if ($swift_statement_line->get_charges_amount_is_dirty())
				{
				$data[] = array("name" => "charges_amount" , "value" => $swift_statement_line->get_charges_amount() , "type" => "money");
				}
			if ($swift_statement_line->get_business_transaction_text_is_dirty())
				{
				$data[] = array("name" => "business_transaction_text" , "value" => $swift_statement_line->get_business_transaction_text() , "type" => "varchar");
				}
			if ($swift_statement_line->get_business_transaction_code_is_dirty())
				{
				$data[] = array("name" => "business_transaction_code" , "value" => $swift_statement_line->get_business_transaction_code() , "type" => "varchar");
				}
			if ($swift_statement_line->get_bankcode_is_dirty())
				{
				$data[] = array("name" => "bankcode" , "value" => $swift_statement_line->get_bankcode() , "type" => "varchar");
				}
			if ($swift_statement_line->get_amount_is_dirty())
				{
				$data[] = array("name" => "amount" , "value" => $swift_statement_line->get_amount() , "type" => "money");
				}
			if ($swift_statement_line->get_account_number_is_dirty())
				{
				$data[] = array("name" => "account_number" , "value" => $swift_statement_line->get_account_number() , "type" => "varchar");
				}
			if ($swift_statement_line->get_retrieval_no_is_dirty())
				{
				$data[] = array("name" => "retrieval_no" , "value" => $swift_statement_line->get_retrieval_no() , "type" => "int4");
				}
			if ($swift_statement_line->get_retrieval_date_is_dirty())
				{
				$data[] = array("name" => "retrieval_date" , "value" => $swift_statement_line->get_retrieval_date() , "type" => "date");
				}
			if ($swift_statement_line->get_id_swift_statement_is_dirty())
				{
				$data[] = array("name" => "id_swift_statement" , "value" => $swift_statement_line->get_id_swift_statement() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('swift_statement_line',$swift_statement_line->get_id()))
				{
				$result = $swift_statement_line->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('swift_statement_line',$swift_statement_line->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('swift_statement_line',$swift_statement_line->get_id(),$application,$swift_statement_line->get_id_save_location(),false);
				$swift_statement_line->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $swift_statement_line->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('swift_statement_line',$swift_statement_line->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('swift_statement_line',$swift_statement_line->get_id(),$application,$swift_statement_line->get_id_save_location(),true);
				$swift_statement_line->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$swift_statement_line = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$swift_statement_line = cls_table_factory::get_common_swift_statement_line()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($swift_statement_line))
				{
					$swift_statement_line = cls_table_factory::create_instance('swift_statement_line');
				}
			$swift_statement_line->fill($data,false);
			return self::save_object($swift_statement_line,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 53;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "swift_statement_line.purpose_code":
					$counter++;
					break;
				case "purpose_code":
					$counter++;
					break;
				case "swift_statement_line.iban":
					$counter++;
					break;
				case "iban":
					$counter++;
					break;
				case "swift_statement_line.different_recipient":
					$counter++;
					break;
				case "different_recipient":
					$counter++;
					break;
				case "swift_statement_line.compensation_amount":
					$counter++;
					break;
				case "compensation_amount":
					$counter++;
					break;
				case "swift_statement_line.bic":
					$counter++;
					break;
				case "bic":
					$counter++;
					break;
				case "swift_statement_line.prev_opening_balance_date":
					$counter++;
					break;
				case "prev_opening_balance_date":
					$counter++;
					break;
				case "swift_statement_line.prev_opening_balance_currency_code":
					$counter++;
					break;
				case "prev_opening_balance_currency_code":
					$counter++;
					break;
				case "swift_statement_line.prev_opening_balance_amount":
					$counter++;
					break;
				case "prev_opening_balance_amount":
					$counter++;
					break;
				case "swift_statement_line.prev_interim_balance_date":
					$counter++;
					break;
				case "prev_interim_balance_date":
					$counter++;
					break;
				case "swift_statement_line.prev_interim_balance_currency_code":
					$counter++;
					break;
				case "prev_interim_balance_currency_code":
					$counter++;
					break;
				case "swift_statement_line.prev_interim_balance_amount":
					$counter++;
					break;
				case "prev_interim_balance_amount":
					$counter++;
					break;
				case "swift_statement_line.next_interim_closing_currency_code":
					$counter++;
					break;
				case "next_interim_closing_currency_code":
					$counter++;
					break;
				case "swift_statement_line.next_interim_closing_balance_date":
					$counter++;
					break;
				case "next_interim_closing_balance_date":
					$counter++;
					break;
				case "swift_statement_line.next_interim_closing_amount":
					$counter++;
					break;
				case "next_interim_closing_amount":
					$counter++;
					break;
				case "swift_statement_line.next_closing_balance_date":
					$counter++;
					break;
				case "next_closing_balance_date":
					$counter++;
					break;
				case "swift_statement_line.next_closing_balance_currency_code":
					$counter++;
					break;
				case "next_closing_balance_currency_code":
					$counter++;
					break;
				case "swift_statement_line.next_closing_balance_amount":
					$counter++;
					break;
				case "next_closing_balance_amount":
					$counter++;
					break;
				case "swift_statement_line.sepa_purpose":
					$counter++;
					break;
				case "sepa_purpose":
					$counter++;
					break;
				case "swift_statement_line.originator_id":
					$counter++;
					break;
				case "originator_id":
					$counter++;
					break;
				case "swift_statement_line.mandate_reference":
					$counter++;
					break;
				case "mandate_reference":
					$counter++;
					break;
				case "swift_statement_line.end_to_end_id":
					$counter++;
					break;
				case "end_to_end_id":
					$counter++;
					break;
				case "swift_statement_line.different_originator":
					$counter++;
					break;
				case "different_originator":
					$counter++;
					break;
				case "swift_statement_line.creditor_id":
					$counter++;
					break;
				case "creditor_id":
					$counter++;
					break;
				case "swift_statement_line.contains_sepa":
					$counter++;
					break;
				case "contains_sepa":
					$counter++;
					break;
				case "swift_statement_line.statement_number":
					$counter++;
					break;
				case "statement_number":
					$counter++;
					break;
				case "swift_statement_line.real_validity_date":
					$counter++;
					break;
				case "real_validity_date":
					$counter++;
					break;
				case "swift_statement_line.currency_code":
					$counter++;
					break;
				case "currency_code":
					$counter++;
					break;
				case "swift_statement_line.equivalent_currency_code":
					$counter++;
					break;
				case "equivalent_currency_code":
					$counter++;
					break;
				case "swift_statement_line.equivalent_amount":
					$counter++;
					break;
				case "equivalent_amount":
					$counter++;
					break;
				case "swift_statement_line.validity_date":
					$counter++;
					break;
				case "validity_date":
					$counter++;
					break;
				case "swift_statement_line.transaction_type":
					$counter++;
					break;
				case "transaction_type":
					$counter++;
					break;
				case "swift_statement_line.textkey_supplement":
					$counter++;
					break;
				case "textkey_supplement":
					$counter++;
					break;
				case "swift_statement_line.supplementary_details":
					$counter++;
					break;
				case "supplementary_details":
					$counter++;
					break;
				case "swift_statement_line.reversal":
					$counter++;
					break;
				case "reversal":
					$counter++;
					break;
				case "swift_statement_line.purpose":
					$counter++;
					break;
				case "purpose":
					$counter++;
					break;
				case "swift_statement_line.prima_note_number":
					$counter++;
					break;
				case "prima_note_number":
					$counter++;
					break;
				case "swift_statement_line.original_currency_code":
					$counter++;
					break;
				case "original_currency_code":
					$counter++;
					break;
				case "swift_statement_line.original_amount":
					$counter++;
					break;
				case "original_amount":
					$counter++;
					break;
				case "swift_statement_line.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "swift_statement_line.institution_reference":
					$counter++;
					break;
				case "institution_reference":
					$counter++;
					break;
				case "swift_statement_line.entry_date":
					$counter++;
					break;
				case "entry_date":
					$counter++;
					break;
				case "swift_statement_line.customer_reference":
					$counter++;
					break;
				case "customer_reference":
					$counter++;
					break;
				case "swift_statement_line.charges_currency_code":
					$counter++;
					break;
				case "charges_currency_code":
					$counter++;
					break;
				case "swift_statement_line.charges_amount":
					$counter++;
					break;
				case "charges_amount":
					$counter++;
					break;
				case "swift_statement_line.business_transaction_text":
					$counter++;
					break;
				case "business_transaction_text":
					$counter++;
					break;
				case "swift_statement_line.business_transaction_code":
					$counter++;
					break;
				case "business_transaction_code":
					$counter++;
					break;
				case "swift_statement_line.bankcode":
					$counter++;
					break;
				case "bankcode":
					$counter++;
					break;
				case "swift_statement_line.amount":
					$counter++;
					break;
				case "amount":
					$counter++;
					break;
				case "swift_statement_line.account_number":
					$counter++;
					break;
				case "account_number":
					$counter++;
					break;
				case "swift_statement_line.retrieval_no":
					$counter++;
					break;
				case "retrieval_no":
					$counter++;
					break;
				case "swift_statement_line.retrieval_date":
					$counter++;
					break;
				case "retrieval_date":
					$counter++;
					break;
				case "swift_statement_line.id_swift_statement":
					$counter++;
					break;
				case "id_swift_statement":
					$counter++;
					break;
				case "swift_statement_line.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
