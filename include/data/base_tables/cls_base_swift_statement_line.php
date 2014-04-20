<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_swift_statement_line extends cls_datatable_base
{
private static $p_cmmon;
private $p_purpose_code = null;
private $p_purpose_code_original = null;
private $p_iban = null;
private $p_iban_original = null;
private $p_different_recipient = null;
private $p_different_recipient_original = null;
private $p_compensation_amount = null;
private $p_compensation_amount_original = null;
private $p_bic = null;
private $p_bic_original = null;
private $p_prev_opening_balance_date = null;
private $p_prev_opening_balance_date_original = null;
private $p_prev_opening_balance_currency_code = null;
private $p_prev_opening_balance_currency_code_original = null;
private $p_prev_opening_balance_amount = null;
private $p_prev_opening_balance_amount_original = null;
private $p_prev_interim_balance_date = null;
private $p_prev_interim_balance_date_original = null;
private $p_prev_interim_balance_currency_code = null;
private $p_prev_interim_balance_currency_code_original = null;
private $p_prev_interim_balance_amount = null;
private $p_prev_interim_balance_amount_original = null;
private $p_next_interim_closing_currency_code = null;
private $p_next_interim_closing_currency_code_original = null;
private $p_next_interim_closing_balance_date = null;
private $p_next_interim_closing_balance_date_original = null;
private $p_next_interim_closing_amount = null;
private $p_next_interim_closing_amount_original = null;
private $p_next_closing_balance_date = null;
private $p_next_closing_balance_date_original = null;
private $p_next_closing_balance_currency_code = null;
private $p_next_closing_balance_currency_code_original = null;
private $p_next_closing_balance_amount = null;
private $p_next_closing_balance_amount_original = null;
private $p_sepa_purpose = null;
private $p_sepa_purpose_original = null;
private $p_originator_id = null;
private $p_originator_id_original = null;
private $p_mandate_reference = null;
private $p_mandate_reference_original = null;
private $p_end_to_end_id = null;
private $p_end_to_end_id_original = null;
private $p_different_originator = null;
private $p_different_originator_original = null;
private $p_creditor_id = null;
private $p_creditor_id_original = null;
private $p_contains_sepa = null;
private $p_contains_sepa_original = null;
private $p_statement_number = null;
private $p_statement_number_original = null;
private $p_real_validity_date = null;
private $p_real_validity_date_original = null;
private $p_currency_code = null;
private $p_currency_code_original = null;
private $p_equivalent_currency_code = null;
private $p_equivalent_currency_code_original = null;
private $p_equivalent_amount = null;
private $p_equivalent_amount_original = null;
private $p_validity_date = null;
private $p_validity_date_original = null;
private $p_transaction_type = null;
private $p_transaction_type_original = null;
private $p_textkey_supplement = null;
private $p_textkey_supplement_original = null;
private $p_supplementary_details = null;
private $p_supplementary_details_original = null;
private $p_reversal = null;
private $p_reversal_original = null;
private $p_purpose = null;
private $p_purpose_original = null;
private $p_prima_note_number = null;
private $p_prima_note_number_original = null;
private $p_original_currency_code = null;
private $p_original_currency_code_original = null;
private $p_original_amount = null;
private $p_original_amount_original = null;
private $p_name = null;
private $p_name_original = null;
private $p_institution_reference = null;
private $p_institution_reference_original = null;
private $p_entry_date = null;
private $p_entry_date_original = null;
private $p_customer_reference = null;
private $p_customer_reference_original = null;
private $p_charges_currency_code = null;
private $p_charges_currency_code_original = null;
private $p_charges_amount = null;
private $p_charges_amount_original = null;
private $p_business_transaction_text = null;
private $p_business_transaction_text_original = null;
private $p_business_transaction_code = null;
private $p_business_transaction_code_original = null;
private $p_bankcode = null;
private $p_bankcode_original = null;
private $p_amount = null;
private $p_amount_original = null;
private $p_account_number = null;
private $p_account_number_original = null;
private $p_retrieval_no = null;
private $p_retrieval_no_original = null;
private $p_retrieval_date = null;
private $p_retrieval_date_original = null;
private $p_id_swift_statement = null;
private $p_id_swift_statement_original = null;

private $p_purpose_code_is_dirty = false;
private $p_iban_is_dirty = false;
private $p_different_recipient_is_dirty = false;
private $p_compensation_amount_is_dirty = false;
private $p_bic_is_dirty = false;
private $p_prev_opening_balance_date_is_dirty = false;
private $p_prev_opening_balance_currency_code_is_dirty = false;
private $p_prev_opening_balance_amount_is_dirty = false;
private $p_prev_interim_balance_date_is_dirty = false;
private $p_prev_interim_balance_currency_code_is_dirty = false;
private $p_prev_interim_balance_amount_is_dirty = false;
private $p_next_interim_closing_currency_code_is_dirty = false;
private $p_next_interim_closing_balance_date_is_dirty = false;
private $p_next_interim_closing_amount_is_dirty = false;
private $p_next_closing_balance_date_is_dirty = false;
private $p_next_closing_balance_currency_code_is_dirty = false;
private $p_next_closing_balance_amount_is_dirty = false;
private $p_sepa_purpose_is_dirty = false;
private $p_originator_id_is_dirty = false;
private $p_mandate_reference_is_dirty = false;
private $p_end_to_end_id_is_dirty = false;
private $p_different_originator_is_dirty = false;
private $p_creditor_id_is_dirty = false;
private $p_contains_sepa_is_dirty = false;
private $p_statement_number_is_dirty = false;
private $p_real_validity_date_is_dirty = false;
private $p_currency_code_is_dirty = false;
private $p_equivalent_currency_code_is_dirty = false;
private $p_equivalent_amount_is_dirty = false;
private $p_validity_date_is_dirty = false;
private $p_transaction_type_is_dirty = false;
private $p_textkey_supplement_is_dirty = false;
private $p_supplementary_details_is_dirty = false;
private $p_reversal_is_dirty = false;
private $p_purpose_is_dirty = false;
private $p_prima_note_number_is_dirty = false;
private $p_original_currency_code_is_dirty = false;
private $p_original_amount_is_dirty = false;
private $p_name_is_dirty = false;
private $p_institution_reference_is_dirty = false;
private $p_entry_date_is_dirty = false;
private $p_customer_reference_is_dirty = false;
private $p_charges_currency_code_is_dirty = false;
private $p_charges_amount_is_dirty = false;
private $p_business_transaction_text_is_dirty = false;
private $p_business_transaction_code_is_dirty = false;
private $p_bankcode_is_dirty = false;
private $p_amount_is_dirty = false;
private $p_account_number_is_dirty = false;
private $p_retrieval_no_is_dirty = false;
private $p_retrieval_date_is_dirty = false;
private $p_id_swift_statement_is_dirty = false;

public function _get_table_name()
{
	return 'swift_statement_line';
}

public function get_table_fields()
{
	return array('purpose_code','iban','different_recipient','compensation_amount','bic','prev_opening_balance_date','prev_opening_balance_currency_code','prev_opening_balance_amount','prev_interim_balance_date','prev_interim_balance_currency_code','prev_interim_balance_amount','next_interim_closing_currency_code','next_interim_closing_balance_date','next_interim_closing_amount','next_closing_balance_date','next_closing_balance_currency_code','next_closing_balance_amount','sepa_purpose','originator_id','mandate_reference','end_to_end_id','different_originator','creditor_id','contains_sepa','statement_number','real_validity_date','currency_code','equivalent_currency_code','equivalent_amount','validity_date','transaction_type','textkey_supplement','supplementary_details','reversal','purpose','prima_note_number','original_currency_code','original_amount','name','institution_reference','entry_date','customer_reference','charges_currency_code','charges_amount','business_transaction_text','business_transaction_code','bankcode','amount','account_number','retrieval_no','retrieval_date','id_swift_statement','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select purpose_code as ' . $delimiter . 'swift_statement_line.purpose_code' . $delimiter . ',iban as ' . $delimiter . 'swift_statement_line.iban' . $delimiter . ',different_recipient as ' . $delimiter . 'swift_statement_line.different_recipient' . $delimiter . ',compensation_amount as ' . $delimiter . 'swift_statement_line.compensation_amount' . $delimiter . ',bic as ' . $delimiter . 'swift_statement_line.bic' . $delimiter . ',prev_opening_balance_date as ' . $delimiter . 'swift_statement_line.prev_opening_balance_date' . $delimiter . ',prev_opening_balance_currency_code as ' . $delimiter . 'swift_statement_line.prev_opening_balance_currency_code' . $delimiter . ',prev_opening_balance_amount as ' . $delimiter . 'swift_statement_line.prev_opening_balance_amount' . $delimiter . ',prev_interim_balance_date as ' . $delimiter . 'swift_statement_line.prev_interim_balance_date' . $delimiter . ',prev_interim_balance_currency_code as ' . $delimiter . 'swift_statement_line.prev_interim_balance_currency_code' . $delimiter . ',prev_interim_balance_amount as ' . $delimiter . 'swift_statement_line.prev_interim_balance_amount' . $delimiter . ',next_interim_closing_currency_code as ' . $delimiter . 'swift_statement_line.next_interim_closing_currency_code' . $delimiter . ',next_interim_closing_balance_date as ' . $delimiter . 'swift_statement_line.next_interim_closing_balance_date' . $delimiter . ',next_interim_closing_amount as ' . $delimiter . 'swift_statement_line.next_interim_closing_amount' . $delimiter . ',next_closing_balance_date as ' . $delimiter . 'swift_statement_line.next_closing_balance_date' . $delimiter . ',next_closing_balance_currency_code as ' . $delimiter . 'swift_statement_line.next_closing_balance_currency_code' . $delimiter . ',next_closing_balance_amount as ' . $delimiter . 'swift_statement_line.next_closing_balance_amount' . $delimiter . ',sepa_purpose as ' . $delimiter . 'swift_statement_line.sepa_purpose' . $delimiter . ',originator_id as ' . $delimiter . 'swift_statement_line.originator_id' . $delimiter . ',mandate_reference as ' . $delimiter . 'swift_statement_line.mandate_reference' . $delimiter . ',end_to_end_id as ' . $delimiter . 'swift_statement_line.end_to_end_id' . $delimiter . ',different_originator as ' . $delimiter . 'swift_statement_line.different_originator' . $delimiter . ',creditor_id as ' . $delimiter . 'swift_statement_line.creditor_id' . $delimiter . ',contains_sepa as ' . $delimiter . 'swift_statement_line.contains_sepa' . $delimiter . ',statement_number as ' . $delimiter . 'swift_statement_line.statement_number' . $delimiter . ',real_validity_date as ' . $delimiter . 'swift_statement_line.real_validity_date' . $delimiter . ',currency_code as ' . $delimiter . 'swift_statement_line.currency_code' . $delimiter . ',equivalent_currency_code as ' . $delimiter . 'swift_statement_line.equivalent_currency_code' . $delimiter . ',equivalent_amount as ' . $delimiter . 'swift_statement_line.equivalent_amount' . $delimiter . ',validity_date as ' . $delimiter . 'swift_statement_line.validity_date' . $delimiter . ',transaction_type as ' . $delimiter . 'swift_statement_line.transaction_type' . $delimiter . ',textkey_supplement as ' . $delimiter . 'swift_statement_line.textkey_supplement' . $delimiter . ',supplementary_details as ' . $delimiter . 'swift_statement_line.supplementary_details' . $delimiter . ',reversal as ' . $delimiter . 'swift_statement_line.reversal' . $delimiter . ',purpose as ' . $delimiter . 'swift_statement_line.purpose' . $delimiter . ',prima_note_number as ' . $delimiter . 'swift_statement_line.prima_note_number' . $delimiter . ',original_currency_code as ' . $delimiter . 'swift_statement_line.original_currency_code' . $delimiter . ',original_amount as ' . $delimiter . 'swift_statement_line.original_amount' . $delimiter . ',name as ' . $delimiter . 'swift_statement_line.name' . $delimiter . ',institution_reference as ' . $delimiter . 'swift_statement_line.institution_reference' . $delimiter . ',entry_date as ' . $delimiter . 'swift_statement_line.entry_date' . $delimiter . ',customer_reference as ' . $delimiter . 'swift_statement_line.customer_reference' . $delimiter . ',charges_currency_code as ' . $delimiter . 'swift_statement_line.charges_currency_code' . $delimiter . ',charges_amount as ' . $delimiter . 'swift_statement_line.charges_amount' . $delimiter . ',business_transaction_text as ' . $delimiter . 'swift_statement_line.business_transaction_text' . $delimiter . ',business_transaction_code as ' . $delimiter . 'swift_statement_line.business_transaction_code' . $delimiter . ',bankcode as ' . $delimiter . 'swift_statement_line.bankcode' . $delimiter . ',amount as ' . $delimiter . 'swift_statement_line.amount' . $delimiter . ',account_number as ' . $delimiter . 'swift_statement_line.account_number' . $delimiter . ',retrieval_no as ' . $delimiter . 'swift_statement_line.retrieval_no' . $delimiter . ',retrieval_date as ' . $delimiter . 'swift_statement_line.retrieval_date' . $delimiter . ',id_swift_statement as ' . $delimiter . 'swift_statement_line.id_swift_statement' . $delimiter . ',id as ' . $delimiter . 'swift_statement_line.id' . $delimiter . ' from swift_statement_line';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}

public function get_purpose_code()
{
	return $this->p_purpose_code;
}

public function get_purpose_code_original()
{
	return $this->p_purpose_code_original;
}

public function set_purpose_code($value)
{
	if ($this->p_purpose_code === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_purpose_code_is_dirty = true;
	$this->p_purpose_code = $value;
}

public function set_purpose_code_original($value)
{
	$this->p_purpose_code_original = $value;
}

public function get_purpose_code_is_dirty()
{
	return $this->p_purpose_code_is_dirty;
}


public function get_iban()
{
	return $this->p_iban;
}

public function get_iban_original()
{
	return $this->p_iban_original;
}

public function set_iban($value)
{
	if ($this->p_iban === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_iban_is_dirty = true;
	$this->p_iban = $value;
}

public function set_iban_original($value)
{
	$this->p_iban_original = $value;
}

public function get_iban_is_dirty()
{
	return $this->p_iban_is_dirty;
}


public function get_different_recipient()
{
	return $this->p_different_recipient;
}

public function get_different_recipient_original()
{
	return $this->p_different_recipient_original;
}

public function set_different_recipient($value)
{
	if ($this->p_different_recipient === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_different_recipient_is_dirty = true;
	$this->p_different_recipient = $value;
}

public function set_different_recipient_original($value)
{
	$this->p_different_recipient_original = $value;
}

public function get_different_recipient_is_dirty()
{
	return $this->p_different_recipient_is_dirty;
}


public function get_compensation_amount()
{
	return $this->p_compensation_amount;
}

public function get_compensation_amount_original()
{
	return $this->p_compensation_amount_original;
}

public function set_compensation_amount($value)
{
	if ($this->p_compensation_amount === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_compensation_amount_is_dirty = true;
	$this->p_compensation_amount = $value;
}

public function set_compensation_amount_original($value)
{
	$this->p_compensation_amount_original = $value;
}

public function get_compensation_amount_is_dirty()
{
	return $this->p_compensation_amount_is_dirty;
}


public function get_bic()
{
	return $this->p_bic;
}

public function get_bic_original()
{
	return $this->p_bic_original;
}

public function set_bic($value)
{
	if ($this->p_bic === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_bic_is_dirty = true;
	$this->p_bic = $value;
}

public function set_bic_original($value)
{
	$this->p_bic_original = $value;
}

public function get_bic_is_dirty()
{
	return $this->p_bic_is_dirty;
}


public function get_prev_opening_balance_date()
{
	return $this->p_prev_opening_balance_date;
}

public function get_prev_opening_balance_date_original()
{
	return $this->p_prev_opening_balance_date_original;
}

public function set_prev_opening_balance_date($value)
{
	if ($this->p_prev_opening_balance_date === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_prev_opening_balance_date_is_dirty = true;
	$this->p_prev_opening_balance_date = $value;
}

public function set_prev_opening_balance_date_original($value)
{
	$this->p_prev_opening_balance_date_original = $value;
}

public function get_prev_opening_balance_date_is_dirty()
{
	return $this->p_prev_opening_balance_date_is_dirty;
}


public function get_prev_opening_balance_currency_code()
{
	return $this->p_prev_opening_balance_currency_code;
}

public function get_prev_opening_balance_currency_code_original()
{
	return $this->p_prev_opening_balance_currency_code_original;
}

public function set_prev_opening_balance_currency_code($value)
{
	if ($this->p_prev_opening_balance_currency_code === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_prev_opening_balance_currency_code_is_dirty = true;
	$this->p_prev_opening_balance_currency_code = $value;
}

public function set_prev_opening_balance_currency_code_original($value)
{
	$this->p_prev_opening_balance_currency_code_original = $value;
}

public function get_prev_opening_balance_currency_code_is_dirty()
{
	return $this->p_prev_opening_balance_currency_code_is_dirty;
}


public function get_prev_opening_balance_amount()
{
	return $this->p_prev_opening_balance_amount;
}

public function get_prev_opening_balance_amount_original()
{
	return $this->p_prev_opening_balance_amount_original;
}

public function set_prev_opening_balance_amount($value)
{
	if ($this->p_prev_opening_balance_amount === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_prev_opening_balance_amount_is_dirty = true;
	$this->p_prev_opening_balance_amount = $value;
}

public function set_prev_opening_balance_amount_original($value)
{
	$this->p_prev_opening_balance_amount_original = $value;
}

public function get_prev_opening_balance_amount_is_dirty()
{
	return $this->p_prev_opening_balance_amount_is_dirty;
}


public function get_prev_interim_balance_date()
{
	return $this->p_prev_interim_balance_date;
}

public function get_prev_interim_balance_date_original()
{
	return $this->p_prev_interim_balance_date_original;
}

public function set_prev_interim_balance_date($value)
{
	if ($this->p_prev_interim_balance_date === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_prev_interim_balance_date_is_dirty = true;
	$this->p_prev_interim_balance_date = $value;
}

public function set_prev_interim_balance_date_original($value)
{
	$this->p_prev_interim_balance_date_original = $value;
}

public function get_prev_interim_balance_date_is_dirty()
{
	return $this->p_prev_interim_balance_date_is_dirty;
}


public function get_prev_interim_balance_currency_code()
{
	return $this->p_prev_interim_balance_currency_code;
}

public function get_prev_interim_balance_currency_code_original()
{
	return $this->p_prev_interim_balance_currency_code_original;
}

public function set_prev_interim_balance_currency_code($value)
{
	if ($this->p_prev_interim_balance_currency_code === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_prev_interim_balance_currency_code_is_dirty = true;
	$this->p_prev_interim_balance_currency_code = $value;
}

public function set_prev_interim_balance_currency_code_original($value)
{
	$this->p_prev_interim_balance_currency_code_original = $value;
}

public function get_prev_interim_balance_currency_code_is_dirty()
{
	return $this->p_prev_interim_balance_currency_code_is_dirty;
}


public function get_prev_interim_balance_amount()
{
	return $this->p_prev_interim_balance_amount;
}

public function get_prev_interim_balance_amount_original()
{
	return $this->p_prev_interim_balance_amount_original;
}

public function set_prev_interim_balance_amount($value)
{
	if ($this->p_prev_interim_balance_amount === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_prev_interim_balance_amount_is_dirty = true;
	$this->p_prev_interim_balance_amount = $value;
}

public function set_prev_interim_balance_amount_original($value)
{
	$this->p_prev_interim_balance_amount_original = $value;
}

public function get_prev_interim_balance_amount_is_dirty()
{
	return $this->p_prev_interim_balance_amount_is_dirty;
}


public function get_next_interim_closing_currency_code()
{
	return $this->p_next_interim_closing_currency_code;
}

public function get_next_interim_closing_currency_code_original()
{
	return $this->p_next_interim_closing_currency_code_original;
}

public function set_next_interim_closing_currency_code($value)
{
	if ($this->p_next_interim_closing_currency_code === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_next_interim_closing_currency_code_is_dirty = true;
	$this->p_next_interim_closing_currency_code = $value;
}

public function set_next_interim_closing_currency_code_original($value)
{
	$this->p_next_interim_closing_currency_code_original = $value;
}

public function get_next_interim_closing_currency_code_is_dirty()
{
	return $this->p_next_interim_closing_currency_code_is_dirty;
}


public function get_next_interim_closing_balance_date()
{
	return $this->p_next_interim_closing_balance_date;
}

public function get_next_interim_closing_balance_date_original()
{
	return $this->p_next_interim_closing_balance_date_original;
}

public function set_next_interim_closing_balance_date($value)
{
	if ($this->p_next_interim_closing_balance_date === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_next_interim_closing_balance_date_is_dirty = true;
	$this->p_next_interim_closing_balance_date = $value;
}

public function set_next_interim_closing_balance_date_original($value)
{
	$this->p_next_interim_closing_balance_date_original = $value;
}

public function get_next_interim_closing_balance_date_is_dirty()
{
	return $this->p_next_interim_closing_balance_date_is_dirty;
}


public function get_next_interim_closing_amount()
{
	return $this->p_next_interim_closing_amount;
}

public function get_next_interim_closing_amount_original()
{
	return $this->p_next_interim_closing_amount_original;
}

public function set_next_interim_closing_amount($value)
{
	if ($this->p_next_interim_closing_amount === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_next_interim_closing_amount_is_dirty = true;
	$this->p_next_interim_closing_amount = $value;
}

public function set_next_interim_closing_amount_original($value)
{
	$this->p_next_interim_closing_amount_original = $value;
}

public function get_next_interim_closing_amount_is_dirty()
{
	return $this->p_next_interim_closing_amount_is_dirty;
}


public function get_next_closing_balance_date()
{
	return $this->p_next_closing_balance_date;
}

public function get_next_closing_balance_date_original()
{
	return $this->p_next_closing_balance_date_original;
}

public function set_next_closing_balance_date($value)
{
	if ($this->p_next_closing_balance_date === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_next_closing_balance_date_is_dirty = true;
	$this->p_next_closing_balance_date = $value;
}

public function set_next_closing_balance_date_original($value)
{
	$this->p_next_closing_balance_date_original = $value;
}

public function get_next_closing_balance_date_is_dirty()
{
	return $this->p_next_closing_balance_date_is_dirty;
}


public function get_next_closing_balance_currency_code()
{
	return $this->p_next_closing_balance_currency_code;
}

public function get_next_closing_balance_currency_code_original()
{
	return $this->p_next_closing_balance_currency_code_original;
}

public function set_next_closing_balance_currency_code($value)
{
	if ($this->p_next_closing_balance_currency_code === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_next_closing_balance_currency_code_is_dirty = true;
	$this->p_next_closing_balance_currency_code = $value;
}

public function set_next_closing_balance_currency_code_original($value)
{
	$this->p_next_closing_balance_currency_code_original = $value;
}

public function get_next_closing_balance_currency_code_is_dirty()
{
	return $this->p_next_closing_balance_currency_code_is_dirty;
}


public function get_next_closing_balance_amount()
{
	return $this->p_next_closing_balance_amount;
}

public function get_next_closing_balance_amount_original()
{
	return $this->p_next_closing_balance_amount_original;
}

public function set_next_closing_balance_amount($value)
{
	if ($this->p_next_closing_balance_amount === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_next_closing_balance_amount_is_dirty = true;
	$this->p_next_closing_balance_amount = $value;
}

public function set_next_closing_balance_amount_original($value)
{
	$this->p_next_closing_balance_amount_original = $value;
}

public function get_next_closing_balance_amount_is_dirty()
{
	return $this->p_next_closing_balance_amount_is_dirty;
}


public function get_sepa_purpose()
{
	return $this->p_sepa_purpose;
}

public function get_sepa_purpose_original()
{
	return $this->p_sepa_purpose_original;
}

public function set_sepa_purpose($value)
{
	if ($this->p_sepa_purpose === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_sepa_purpose_is_dirty = true;
	$this->p_sepa_purpose = $value;
}

public function set_sepa_purpose_original($value)
{
	$this->p_sepa_purpose_original = $value;
}

public function get_sepa_purpose_is_dirty()
{
	return $this->p_sepa_purpose_is_dirty;
}


public function get_originator_id()
{
	return $this->p_originator_id;
}

public function get_originator_id_original()
{
	return $this->p_originator_id_original;
}

public function set_originator_id($value)
{
	if ($this->p_originator_id === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_originator_id_is_dirty = true;
	$this->p_originator_id = $value;
}

public function set_originator_id_original($value)
{
	$this->p_originator_id_original = $value;
}

public function get_originator_id_is_dirty()
{
	return $this->p_originator_id_is_dirty;
}


public function get_mandate_reference()
{
	return $this->p_mandate_reference;
}

public function get_mandate_reference_original()
{
	return $this->p_mandate_reference_original;
}

public function set_mandate_reference($value)
{
	if ($this->p_mandate_reference === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_mandate_reference_is_dirty = true;
	$this->p_mandate_reference = $value;
}

public function set_mandate_reference_original($value)
{
	$this->p_mandate_reference_original = $value;
}

public function get_mandate_reference_is_dirty()
{
	return $this->p_mandate_reference_is_dirty;
}


public function get_end_to_end_id()
{
	return $this->p_end_to_end_id;
}

public function get_end_to_end_id_original()
{
	return $this->p_end_to_end_id_original;
}

public function set_end_to_end_id($value)
{
	if ($this->p_end_to_end_id === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_end_to_end_id_is_dirty = true;
	$this->p_end_to_end_id = $value;
}

public function set_end_to_end_id_original($value)
{
	$this->p_end_to_end_id_original = $value;
}

public function get_end_to_end_id_is_dirty()
{
	return $this->p_end_to_end_id_is_dirty;
}


public function get_different_originator()
{
	return $this->p_different_originator;
}

public function get_different_originator_original()
{
	return $this->p_different_originator_original;
}

public function set_different_originator($value)
{
	if ($this->p_different_originator === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_different_originator_is_dirty = true;
	$this->p_different_originator = $value;
}

public function set_different_originator_original($value)
{
	$this->p_different_originator_original = $value;
}

public function get_different_originator_is_dirty()
{
	return $this->p_different_originator_is_dirty;
}


public function get_creditor_id()
{
	return $this->p_creditor_id;
}

public function get_creditor_id_original()
{
	return $this->p_creditor_id_original;
}

public function set_creditor_id($value)
{
	if ($this->p_creditor_id === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_creditor_id_is_dirty = true;
	$this->p_creditor_id = $value;
}

public function set_creditor_id_original($value)
{
	$this->p_creditor_id_original = $value;
}

public function get_creditor_id_is_dirty()
{
	return $this->p_creditor_id_is_dirty;
}


public function get_contains_sepa()
{
	return $this->p_contains_sepa;
}

public function get_contains_sepa_original()
{
	return $this->p_contains_sepa_original;
}

public function set_contains_sepa($value)
{
	if ($this->p_contains_sepa === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_contains_sepa_is_dirty = true;
	$this->p_contains_sepa = $value;
}

public function set_contains_sepa_original($value)
{
	$this->p_contains_sepa_original = $value;
}

public function get_contains_sepa_is_dirty()
{
	return $this->p_contains_sepa_is_dirty;
}


public function get_statement_number()
{
	return $this->p_statement_number;
}

public function get_statement_number_original()
{
	return $this->p_statement_number_original;
}

public function set_statement_number($value)
{
	if ($this->p_statement_number === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_statement_number_is_dirty = true;
	$this->p_statement_number = $value;
}

public function set_statement_number_original($value)
{
	$this->p_statement_number_original = $value;
}

public function get_statement_number_is_dirty()
{
	return $this->p_statement_number_is_dirty;
}


public function get_real_validity_date()
{
	return $this->p_real_validity_date;
}

public function get_real_validity_date_original()
{
	return $this->p_real_validity_date_original;
}

public function set_real_validity_date($value)
{
	if ($this->p_real_validity_date === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_real_validity_date_is_dirty = true;
	$this->p_real_validity_date = $value;
}

public function set_real_validity_date_original($value)
{
	$this->p_real_validity_date_original = $value;
}

public function get_real_validity_date_is_dirty()
{
	return $this->p_real_validity_date_is_dirty;
}


public function get_currency_code()
{
	return $this->p_currency_code;
}

public function get_currency_code_original()
{
	return $this->p_currency_code_original;
}

public function set_currency_code($value)
{
	if ($this->p_currency_code === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_currency_code_is_dirty = true;
	$this->p_currency_code = $value;
}

public function set_currency_code_original($value)
{
	$this->p_currency_code_original = $value;
}

public function get_currency_code_is_dirty()
{
	return $this->p_currency_code_is_dirty;
}


public function get_equivalent_currency_code()
{
	return $this->p_equivalent_currency_code;
}

public function get_equivalent_currency_code_original()
{
	return $this->p_equivalent_currency_code_original;
}

public function set_equivalent_currency_code($value)
{
	if ($this->p_equivalent_currency_code === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_equivalent_currency_code_is_dirty = true;
	$this->p_equivalent_currency_code = $value;
}

public function set_equivalent_currency_code_original($value)
{
	$this->p_equivalent_currency_code_original = $value;
}

public function get_equivalent_currency_code_is_dirty()
{
	return $this->p_equivalent_currency_code_is_dirty;
}


public function get_equivalent_amount()
{
	return $this->p_equivalent_amount;
}

public function get_equivalent_amount_original()
{
	return $this->p_equivalent_amount_original;
}

public function set_equivalent_amount($value)
{
	if ($this->p_equivalent_amount === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_equivalent_amount_is_dirty = true;
	$this->p_equivalent_amount = $value;
}

public function set_equivalent_amount_original($value)
{
	$this->p_equivalent_amount_original = $value;
}

public function get_equivalent_amount_is_dirty()
{
	return $this->p_equivalent_amount_is_dirty;
}


public function get_validity_date()
{
	return $this->p_validity_date;
}

public function get_validity_date_original()
{
	return $this->p_validity_date_original;
}

public function set_validity_date($value)
{
	if ($this->p_validity_date === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_validity_date_is_dirty = true;
	$this->p_validity_date = $value;
}

public function set_validity_date_original($value)
{
	$this->p_validity_date_original = $value;
}

public function get_validity_date_is_dirty()
{
	return $this->p_validity_date_is_dirty;
}


public function get_transaction_type()
{
	return $this->p_transaction_type;
}

public function get_transaction_type_original()
{
	return $this->p_transaction_type_original;
}

public function set_transaction_type($value)
{
	if ($this->p_transaction_type === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_transaction_type_is_dirty = true;
	$this->p_transaction_type = $value;
}

public function set_transaction_type_original($value)
{
	$this->p_transaction_type_original = $value;
}

public function get_transaction_type_is_dirty()
{
	return $this->p_transaction_type_is_dirty;
}


public function get_textkey_supplement()
{
	return $this->p_textkey_supplement;
}

public function get_textkey_supplement_original()
{
	return $this->p_textkey_supplement_original;
}

public function set_textkey_supplement($value)
{
	if ($this->p_textkey_supplement === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_textkey_supplement_is_dirty = true;
	$this->p_textkey_supplement = $value;
}

public function set_textkey_supplement_original($value)
{
	$this->p_textkey_supplement_original = $value;
}

public function get_textkey_supplement_is_dirty()
{
	return $this->p_textkey_supplement_is_dirty;
}


public function get_supplementary_details()
{
	return $this->p_supplementary_details;
}

public function get_supplementary_details_original()
{
	return $this->p_supplementary_details_original;
}

public function set_supplementary_details($value)
{
	if ($this->p_supplementary_details === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_supplementary_details_is_dirty = true;
	$this->p_supplementary_details = $value;
}

public function set_supplementary_details_original($value)
{
	$this->p_supplementary_details_original = $value;
}

public function get_supplementary_details_is_dirty()
{
	return $this->p_supplementary_details_is_dirty;
}


public function get_reversal()
{
	return $this->p_reversal;
}

public function get_reversal_original()
{
	return $this->p_reversal_original;
}

public function set_reversal($value)
{
	if ($this->p_reversal === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_reversal_is_dirty = true;
	$this->p_reversal = $value;
}

public function set_reversal_original($value)
{
	$this->p_reversal_original = $value;
}

public function get_reversal_is_dirty()
{
	return $this->p_reversal_is_dirty;
}


public function get_purpose()
{
	return $this->p_purpose;
}

public function get_purpose_original()
{
	return $this->p_purpose_original;
}

public function set_purpose($value)
{
	if ($this->p_purpose === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_purpose_is_dirty = true;
	$this->p_purpose = $value;
}

public function set_purpose_original($value)
{
	$this->p_purpose_original = $value;
}

public function get_purpose_is_dirty()
{
	return $this->p_purpose_is_dirty;
}


public function get_prima_note_number()
{
	return $this->p_prima_note_number;
}

public function get_prima_note_number_original()
{
	return $this->p_prima_note_number_original;
}

public function set_prima_note_number($value)
{
	if ($this->p_prima_note_number === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_prima_note_number_is_dirty = true;
	$this->p_prima_note_number = $value;
}

public function set_prima_note_number_original($value)
{
	$this->p_prima_note_number_original = $value;
}

public function get_prima_note_number_is_dirty()
{
	return $this->p_prima_note_number_is_dirty;
}


public function get_original_currency_code()
{
	return $this->p_original_currency_code;
}

public function get_original_currency_code_original()
{
	return $this->p_original_currency_code_original;
}

public function set_original_currency_code($value)
{
	if ($this->p_original_currency_code === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_original_currency_code_is_dirty = true;
	$this->p_original_currency_code = $value;
}

public function set_original_currency_code_original($value)
{
	$this->p_original_currency_code_original = $value;
}

public function get_original_currency_code_is_dirty()
{
	return $this->p_original_currency_code_is_dirty;
}


public function get_original_amount()
{
	return $this->p_original_amount;
}

public function get_original_amount_original()
{
	return $this->p_original_amount_original;
}

public function set_original_amount($value)
{
	if ($this->p_original_amount === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_original_amount_is_dirty = true;
	$this->p_original_amount = $value;
}

public function set_original_amount_original($value)
{
	$this->p_original_amount_original = $value;
}

public function get_original_amount_is_dirty()
{
	return $this->p_original_amount_is_dirty;
}


public function get_name()
{
	return $this->p_name;
}

public function get_name_original()
{
	return $this->p_name_original;
}

public function set_name($value)
{
	if ($this->p_name === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_name_is_dirty = true;
	$this->p_name = $value;
}

public function set_name_original($value)
{
	$this->p_name_original = $value;
}

public function get_name_is_dirty()
{
	return $this->p_name_is_dirty;
}


public function get_institution_reference()
{
	return $this->p_institution_reference;
}

public function get_institution_reference_original()
{
	return $this->p_institution_reference_original;
}

public function set_institution_reference($value)
{
	if ($this->p_institution_reference === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_institution_reference_is_dirty = true;
	$this->p_institution_reference = $value;
}

public function set_institution_reference_original($value)
{
	$this->p_institution_reference_original = $value;
}

public function get_institution_reference_is_dirty()
{
	return $this->p_institution_reference_is_dirty;
}


public function get_entry_date()
{
	return $this->p_entry_date;
}

public function get_entry_date_original()
{
	return $this->p_entry_date_original;
}

public function set_entry_date($value)
{
	if ($this->p_entry_date === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_entry_date_is_dirty = true;
	$this->p_entry_date = $value;
}

public function set_entry_date_original($value)
{
	$this->p_entry_date_original = $value;
}

public function get_entry_date_is_dirty()
{
	return $this->p_entry_date_is_dirty;
}


public function get_customer_reference()
{
	return $this->p_customer_reference;
}

public function get_customer_reference_original()
{
	return $this->p_customer_reference_original;
}

public function set_customer_reference($value)
{
	if ($this->p_customer_reference === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_customer_reference_is_dirty = true;
	$this->p_customer_reference = $value;
}

public function set_customer_reference_original($value)
{
	$this->p_customer_reference_original = $value;
}

public function get_customer_reference_is_dirty()
{
	return $this->p_customer_reference_is_dirty;
}


public function get_charges_currency_code()
{
	return $this->p_charges_currency_code;
}

public function get_charges_currency_code_original()
{
	return $this->p_charges_currency_code_original;
}

public function set_charges_currency_code($value)
{
	if ($this->p_charges_currency_code === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_charges_currency_code_is_dirty = true;
	$this->p_charges_currency_code = $value;
}

public function set_charges_currency_code_original($value)
{
	$this->p_charges_currency_code_original = $value;
}

public function get_charges_currency_code_is_dirty()
{
	return $this->p_charges_currency_code_is_dirty;
}


public function get_charges_amount()
{
	return $this->p_charges_amount;
}

public function get_charges_amount_original()
{
	return $this->p_charges_amount_original;
}

public function set_charges_amount($value)
{
	if ($this->p_charges_amount === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_charges_amount_is_dirty = true;
	$this->p_charges_amount = $value;
}

public function set_charges_amount_original($value)
{
	$this->p_charges_amount_original = $value;
}

public function get_charges_amount_is_dirty()
{
	return $this->p_charges_amount_is_dirty;
}


public function get_business_transaction_text()
{
	return $this->p_business_transaction_text;
}

public function get_business_transaction_text_original()
{
	return $this->p_business_transaction_text_original;
}

public function set_business_transaction_text($value)
{
	if ($this->p_business_transaction_text === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_business_transaction_text_is_dirty = true;
	$this->p_business_transaction_text = $value;
}

public function set_business_transaction_text_original($value)
{
	$this->p_business_transaction_text_original = $value;
}

public function get_business_transaction_text_is_dirty()
{
	return $this->p_business_transaction_text_is_dirty;
}


public function get_business_transaction_code()
{
	return $this->p_business_transaction_code;
}

public function get_business_transaction_code_original()
{
	return $this->p_business_transaction_code_original;
}

public function set_business_transaction_code($value)
{
	if ($this->p_business_transaction_code === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_business_transaction_code_is_dirty = true;
	$this->p_business_transaction_code = $value;
}

public function set_business_transaction_code_original($value)
{
	$this->p_business_transaction_code_original = $value;
}

public function get_business_transaction_code_is_dirty()
{
	return $this->p_business_transaction_code_is_dirty;
}


public function get_bankcode()
{
	return $this->p_bankcode;
}

public function get_bankcode_original()
{
	return $this->p_bankcode_original;
}

public function set_bankcode($value)
{
	if ($this->p_bankcode === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_bankcode_is_dirty = true;
	$this->p_bankcode = $value;
}

public function set_bankcode_original($value)
{
	$this->p_bankcode_original = $value;
}

public function get_bankcode_is_dirty()
{
	return $this->p_bankcode_is_dirty;
}


public function get_amount()
{
	return $this->p_amount;
}

public function get_amount_original()
{
	return $this->p_amount_original;
}

public function set_amount($value)
{
	if ($this->p_amount === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_amount_is_dirty = true;
	$this->p_amount = $value;
}

public function set_amount_original($value)
{
	$this->p_amount_original = $value;
}

public function get_amount_is_dirty()
{
	return $this->p_amount_is_dirty;
}


public function get_account_number()
{
	return $this->p_account_number;
}

public function get_account_number_original()
{
	return $this->p_account_number_original;
}

public function set_account_number($value)
{
	if ($this->p_account_number === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_account_number_is_dirty = true;
	$this->p_account_number = $value;
}

public function set_account_number_original($value)
{
	$this->p_account_number_original = $value;
}

public function get_account_number_is_dirty()
{
	return $this->p_account_number_is_dirty;
}


public function get_retrieval_no()
{
	return $this->p_retrieval_no;
}

public function get_retrieval_no_original()
{
	return $this->p_retrieval_no_original;
}

public function set_retrieval_no($value)
{
	if ($this->p_retrieval_no === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_retrieval_no_is_dirty = true;
	$this->p_retrieval_no = $value;
}

public function set_retrieval_no_original($value)
{
	$this->p_retrieval_no_original = $value;
}

public function get_retrieval_no_is_dirty()
{
	return $this->p_retrieval_no_is_dirty;
}


public function get_retrieval_date()
{
	return $this->p_retrieval_date;
}

public function get_retrieval_date_original()
{
	return $this->p_retrieval_date_original;
}

public function set_retrieval_date($value)
{
	if ($this->p_retrieval_date === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_retrieval_date_is_dirty = true;
	$this->p_retrieval_date = $value;
}

public function set_retrieval_date_original($value)
{
	$this->p_retrieval_date_original = $value;
}

public function get_retrieval_date_is_dirty()
{
	return $this->p_retrieval_date_is_dirty;
}


public function get_id_swift_statement()
{
	return $this->p_id_swift_statement;
}

public function get_id_swift_statement_original()
{
	return $this->p_id_swift_statement_original;
}

public function set_id_swift_statement($value)
{
	if ($this->p_id_swift_statement === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_swift_statement_is_dirty = true;
	$this->p_id_swift_statement = $value;
}

public function set_id_swift_statement_original($value)
{
	$this->p_id_swift_statement_original = $value;
}

public function get_id_swift_statement_is_dirty()
{
	return $this->p_id_swift_statement_is_dirty;
}



public function reset_dirty($reset_values = false)
{
	$this->p_purpose_code_is_dirty = false;
	$this->p_iban_is_dirty = false;
	$this->p_different_recipient_is_dirty = false;
	$this->p_compensation_amount_is_dirty = false;
	$this->p_bic_is_dirty = false;
	$this->p_prev_opening_balance_date_is_dirty = false;
	$this->p_prev_opening_balance_currency_code_is_dirty = false;
	$this->p_prev_opening_balance_amount_is_dirty = false;
	$this->p_prev_interim_balance_date_is_dirty = false;
	$this->p_prev_interim_balance_currency_code_is_dirty = false;
	$this->p_prev_interim_balance_amount_is_dirty = false;
	$this->p_next_interim_closing_currency_code_is_dirty = false;
	$this->p_next_interim_closing_balance_date_is_dirty = false;
	$this->p_next_interim_closing_amount_is_dirty = false;
	$this->p_next_closing_balance_date_is_dirty = false;
	$this->p_next_closing_balance_currency_code_is_dirty = false;
	$this->p_next_closing_balance_amount_is_dirty = false;
	$this->p_sepa_purpose_is_dirty = false;
	$this->p_originator_id_is_dirty = false;
	$this->p_mandate_reference_is_dirty = false;
	$this->p_end_to_end_id_is_dirty = false;
	$this->p_different_originator_is_dirty = false;
	$this->p_creditor_id_is_dirty = false;
	$this->p_contains_sepa_is_dirty = false;
	$this->p_statement_number_is_dirty = false;
	$this->p_real_validity_date_is_dirty = false;
	$this->p_currency_code_is_dirty = false;
	$this->p_equivalent_currency_code_is_dirty = false;
	$this->p_equivalent_amount_is_dirty = false;
	$this->p_validity_date_is_dirty = false;
	$this->p_transaction_type_is_dirty = false;
	$this->p_textkey_supplement_is_dirty = false;
	$this->p_supplementary_details_is_dirty = false;
	$this->p_reversal_is_dirty = false;
	$this->p_purpose_is_dirty = false;
	$this->p_prima_note_number_is_dirty = false;
	$this->p_original_currency_code_is_dirty = false;
	$this->p_original_amount_is_dirty = false;
	$this->p_name_is_dirty = false;
	$this->p_institution_reference_is_dirty = false;
	$this->p_entry_date_is_dirty = false;
	$this->p_customer_reference_is_dirty = false;
	$this->p_charges_currency_code_is_dirty = false;
	$this->p_charges_amount_is_dirty = false;
	$this->p_business_transaction_text_is_dirty = false;
	$this->p_business_transaction_code_is_dirty = false;
	$this->p_bankcode_is_dirty = false;
	$this->p_amount_is_dirty = false;
	$this->p_account_number_is_dirty = false;
	$this->p_retrieval_no_is_dirty = false;
	$this->p_retrieval_date_is_dirty = false;
	$this->p_id_swift_statement_is_dirty = false;
	if ($reset_values)
	{
		$this->p_purpose_code = $this->p_purpose_code_original;
		$this->p_iban = $this->p_iban_original;
		$this->p_different_recipient = $this->p_different_recipient_original;
		$this->p_compensation_amount = $this->p_compensation_amount_original;
		$this->p_bic = $this->p_bic_original;
		$this->p_prev_opening_balance_date = $this->p_prev_opening_balance_date_original;
		$this->p_prev_opening_balance_currency_code = $this->p_prev_opening_balance_currency_code_original;
		$this->p_prev_opening_balance_amount = $this->p_prev_opening_balance_amount_original;
		$this->p_prev_interim_balance_date = $this->p_prev_interim_balance_date_original;
		$this->p_prev_interim_balance_currency_code = $this->p_prev_interim_balance_currency_code_original;
		$this->p_prev_interim_balance_amount = $this->p_prev_interim_balance_amount_original;
		$this->p_next_interim_closing_currency_code = $this->p_next_interim_closing_currency_code_original;
		$this->p_next_interim_closing_balance_date = $this->p_next_interim_closing_balance_date_original;
		$this->p_next_interim_closing_amount = $this->p_next_interim_closing_amount_original;
		$this->p_next_closing_balance_date = $this->p_next_closing_balance_date_original;
		$this->p_next_closing_balance_currency_code = $this->p_next_closing_balance_currency_code_original;
		$this->p_next_closing_balance_amount = $this->p_next_closing_balance_amount_original;
		$this->p_sepa_purpose = $this->p_sepa_purpose_original;
		$this->p_originator_id = $this->p_originator_id_original;
		$this->p_mandate_reference = $this->p_mandate_reference_original;
		$this->p_end_to_end_id = $this->p_end_to_end_id_original;
		$this->p_different_originator = $this->p_different_originator_original;
		$this->p_creditor_id = $this->p_creditor_id_original;
		$this->p_contains_sepa = $this->p_contains_sepa_original;
		$this->p_statement_number = $this->p_statement_number_original;
		$this->p_real_validity_date = $this->p_real_validity_date_original;
		$this->p_currency_code = $this->p_currency_code_original;
		$this->p_equivalent_currency_code = $this->p_equivalent_currency_code_original;
		$this->p_equivalent_amount = $this->p_equivalent_amount_original;
		$this->p_validity_date = $this->p_validity_date_original;
		$this->p_transaction_type = $this->p_transaction_type_original;
		$this->p_textkey_supplement = $this->p_textkey_supplement_original;
		$this->p_supplementary_details = $this->p_supplementary_details_original;
		$this->p_reversal = $this->p_reversal_original;
		$this->p_purpose = $this->p_purpose_original;
		$this->p_prima_note_number = $this->p_prima_note_number_original;
		$this->p_original_currency_code = $this->p_original_currency_code_original;
		$this->p_original_amount = $this->p_original_amount_original;
		$this->p_name = $this->p_name_original;
		$this->p_institution_reference = $this->p_institution_reference_original;
		$this->p_entry_date = $this->p_entry_date_original;
		$this->p_customer_reference = $this->p_customer_reference_original;
		$this->p_charges_currency_code = $this->p_charges_currency_code_original;
		$this->p_charges_amount = $this->p_charges_amount_original;
		$this->p_business_transaction_text = $this->p_business_transaction_text_original;
		$this->p_business_transaction_code = $this->p_business_transaction_code_original;
		$this->p_bankcode = $this->p_bankcode_original;
		$this->p_amount = $this->p_amount_original;
		$this->p_account_number = $this->p_account_number_original;
		$this->p_retrieval_no = $this->p_retrieval_no_original;
		$this->p_retrieval_date = $this->p_retrieval_date_original;
		$this->p_id_swift_statement = $this->p_id_swift_statement_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "swift_statement_line.purpose_code":
					$this->set_purpose_code($val);
					$this->set_purpose_code_original($val);
					break;
				case "swift_statement_line.iban":
					$this->set_iban($val);
					$this->set_iban_original($val);
					break;
				case "swift_statement_line.different_recipient":
					$this->set_different_recipient($val);
					$this->set_different_recipient_original($val);
					break;
				case "swift_statement_line.compensation_amount":
					$this->set_compensation_amount($val);
					$this->set_compensation_amount_original($val);
					break;
				case "swift_statement_line.bic":
					$this->set_bic($val);
					$this->set_bic_original($val);
					break;
				case "swift_statement_line.prev_opening_balance_date":
					$this->set_prev_opening_balance_date($val);
					$this->set_prev_opening_balance_date_original($val);
					break;
				case "swift_statement_line.prev_opening_balance_currency_code":
					$this->set_prev_opening_balance_currency_code($val);
					$this->set_prev_opening_balance_currency_code_original($val);
					break;
				case "swift_statement_line.prev_opening_balance_amount":
					$this->set_prev_opening_balance_amount($val);
					$this->set_prev_opening_balance_amount_original($val);
					break;
				case "swift_statement_line.prev_interim_balance_date":
					$this->set_prev_interim_balance_date($val);
					$this->set_prev_interim_balance_date_original($val);
					break;
				case "swift_statement_line.prev_interim_balance_currency_code":
					$this->set_prev_interim_balance_currency_code($val);
					$this->set_prev_interim_balance_currency_code_original($val);
					break;
				case "swift_statement_line.prev_interim_balance_amount":
					$this->set_prev_interim_balance_amount($val);
					$this->set_prev_interim_balance_amount_original($val);
					break;
				case "swift_statement_line.next_interim_closing_currency_code":
					$this->set_next_interim_closing_currency_code($val);
					$this->set_next_interim_closing_currency_code_original($val);
					break;
				case "swift_statement_line.next_interim_closing_balance_date":
					$this->set_next_interim_closing_balance_date($val);
					$this->set_next_interim_closing_balance_date_original($val);
					break;
				case "swift_statement_line.next_interim_closing_amount":
					$this->set_next_interim_closing_amount($val);
					$this->set_next_interim_closing_amount_original($val);
					break;
				case "swift_statement_line.next_closing_balance_date":
					$this->set_next_closing_balance_date($val);
					$this->set_next_closing_balance_date_original($val);
					break;
				case "swift_statement_line.next_closing_balance_currency_code":
					$this->set_next_closing_balance_currency_code($val);
					$this->set_next_closing_balance_currency_code_original($val);
					break;
				case "swift_statement_line.next_closing_balance_amount":
					$this->set_next_closing_balance_amount($val);
					$this->set_next_closing_balance_amount_original($val);
					break;
				case "swift_statement_line.sepa_purpose":
					$this->set_sepa_purpose($val);
					$this->set_sepa_purpose_original($val);
					break;
				case "swift_statement_line.originator_id":
					$this->set_originator_id($val);
					$this->set_originator_id_original($val);
					break;
				case "swift_statement_line.mandate_reference":
					$this->set_mandate_reference($val);
					$this->set_mandate_reference_original($val);
					break;
				case "swift_statement_line.end_to_end_id":
					$this->set_end_to_end_id($val);
					$this->set_end_to_end_id_original($val);
					break;
				case "swift_statement_line.different_originator":
					$this->set_different_originator($val);
					$this->set_different_originator_original($val);
					break;
				case "swift_statement_line.creditor_id":
					$this->set_creditor_id($val);
					$this->set_creditor_id_original($val);
					break;
				case "swift_statement_line.contains_sepa":
					$this->set_contains_sepa($val);
					$this->set_contains_sepa_original($val);
					break;
				case "swift_statement_line.statement_number":
					$this->set_statement_number($val);
					$this->set_statement_number_original($val);
					break;
				case "swift_statement_line.real_validity_date":
					$this->set_real_validity_date($val);
					$this->set_real_validity_date_original($val);
					break;
				case "swift_statement_line.currency_code":
					$this->set_currency_code($val);
					$this->set_currency_code_original($val);
					break;
				case "swift_statement_line.equivalent_currency_code":
					$this->set_equivalent_currency_code($val);
					$this->set_equivalent_currency_code_original($val);
					break;
				case "swift_statement_line.equivalent_amount":
					$this->set_equivalent_amount($val);
					$this->set_equivalent_amount_original($val);
					break;
				case "swift_statement_line.validity_date":
					$this->set_validity_date($val);
					$this->set_validity_date_original($val);
					break;
				case "swift_statement_line.transaction_type":
					$this->set_transaction_type($val);
					$this->set_transaction_type_original($val);
					break;
				case "swift_statement_line.textkey_supplement":
					$this->set_textkey_supplement($val);
					$this->set_textkey_supplement_original($val);
					break;
				case "swift_statement_line.supplementary_details":
					$this->set_supplementary_details($val);
					$this->set_supplementary_details_original($val);
					break;
				case "swift_statement_line.reversal":
					$this->set_reversal($val);
					$this->set_reversal_original($val);
					break;
				case "swift_statement_line.purpose":
					$this->set_purpose($val);
					$this->set_purpose_original($val);
					break;
				case "swift_statement_line.prima_note_number":
					$this->set_prima_note_number($val);
					$this->set_prima_note_number_original($val);
					break;
				case "swift_statement_line.original_currency_code":
					$this->set_original_currency_code($val);
					$this->set_original_currency_code_original($val);
					break;
				case "swift_statement_line.original_amount":
					$this->set_original_amount($val);
					$this->set_original_amount_original($val);
					break;
				case "swift_statement_line.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "swift_statement_line.institution_reference":
					$this->set_institution_reference($val);
					$this->set_institution_reference_original($val);
					break;
				case "swift_statement_line.entry_date":
					$this->set_entry_date($val);
					$this->set_entry_date_original($val);
					break;
				case "swift_statement_line.customer_reference":
					$this->set_customer_reference($val);
					$this->set_customer_reference_original($val);
					break;
				case "swift_statement_line.charges_currency_code":
					$this->set_charges_currency_code($val);
					$this->set_charges_currency_code_original($val);
					break;
				case "swift_statement_line.charges_amount":
					$this->set_charges_amount($val);
					$this->set_charges_amount_original($val);
					break;
				case "swift_statement_line.business_transaction_text":
					$this->set_business_transaction_text($val);
					$this->set_business_transaction_text_original($val);
					break;
				case "swift_statement_line.business_transaction_code":
					$this->set_business_transaction_code($val);
					$this->set_business_transaction_code_original($val);
					break;
				case "swift_statement_line.bankcode":
					$this->set_bankcode($val);
					$this->set_bankcode_original($val);
					break;
				case "swift_statement_line.amount":
					$this->set_amount($val);
					$this->set_amount_original($val);
					break;
				case "swift_statement_line.account_number":
					$this->set_account_number($val);
					$this->set_account_number_original($val);
					break;
				case "swift_statement_line.retrieval_no":
					$this->set_retrieval_no($val);
					$this->set_retrieval_no_original($val);
					break;
				case "swift_statement_line.retrieval_date":
					$this->set_retrieval_date($val);
					$this->set_retrieval_date_original($val);
					break;
				case "swift_statement_line.id_swift_statement":
					$this->set_id_swift_statement($val);
					$this->set_id_swift_statement_original($val);
					break;
				case "swift_statement_line.id":
					$this->set_id($val);
					break;
			}
		}
	if ($reset)
	{
		$this->reset_dirty(false);
	}
}
public function get_by_id($id,$db_manager,$application = null)
{
	$sql = $this->get_table_select($db_manager->get_delimeter());
	$sql .= " where id = '" . $id . "'";
	$result = $db_manager->query($sql);
	if (!is_null($result))
	{
		require_once('include/data/table_factory/cls_table_factory.php');
		$swift_statement_line = cls_table_factory::create_instance('swift_statement_line');
		$row = $db_manager->fetch_row($result);
		$swift_statement_line->fill($row);
		return $swift_statement_line;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_swift_statement_line.php');
		return cls_save_swift_statement_line::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_swift_statement_line.php');
		return cls_save_swift_statement_line::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_swift_statement_lines($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('swift_statement_line',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('swift_statement_line',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$swift_statement_line = cls_table_factory::create_instance('swift_statement_line');
				$swift_statement_line->fill($row);
				$data[] = $swift_statement_line;
			}
		return $data;
	}

function get_swift_statement($db_manager,$application)
	{
		$result = $db_manager->get_records('swift_statement',$this->get_id_swift_statement());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$swift_statement = cls_table_factory::create_instance('swift_statement');
		$row = $db_manager->fetch_row($result);
		$swift_statement->fill($row);
		return $swift_statement;
	}

//changed 1
public function get_swift_statement_line_posting($db_manager,$application)
	{
		$result = $db_manager->get_records('swift_statement_line_posting',$this->get_id(),'id_swift_statement_line');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$swift_statement_line_posting = cls_table_factory::create_instance('swift_statement_line_posting');
		$row = $db_manager->fetch_row($result);
		$swift_statement_line_posting->fill($row);
		return $swift_statement_line_posting;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_swift_statement_line_postings_by_swift_statement_line($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('swift_statement_line_posting',$this->get_id(),'id_swift_statement_line');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$swift_statement_line_posting = cls_table_factory::create_instance('swift_statement_line_posting');
				$swift_statement_line_posting->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $swift_statement_line_posting;
				}
				else
				{
					$data[] = $swift_statement_line_posting;
				}
			}
		return $data;
	}

public function get_multi_swift_statement_line_postings_by_swift_statement_line($swift_statement_lines,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('swift_statement_line_posting',$swift_statement_lines,'id_swift_statement_line');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$swift_statement_line_posting = cls_table_factory::create_instance('swift_statement_line_posting');
				$swift_statement_line_posting->fill($row);
				if (!array_key_exists($data[$row['id_swift_statement_line']]))
				{
					$data[$row['id_swift_statement_line']] = array();
				}
				$data[$row['id_swift_statement_line']][] = $swift_statement_line_posting;
			}
		return $data;
	}

public function get_table_test_data($swift_statement_lines,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('table_test_data',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$table_test_data = cls_table_factory::create_instance('table_test_data');
				$table_test_data->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $table_test_data;
				}
				else
				{
					$data[] = $table_test_data;
				}
			}
		return $data;
	}

public function get_multi_table_test_data($swift_statement_lines,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$swift_statement_lines,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$table_test_data = cls_table_factory::create_instance('table_test_data');
				$table_test_data->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $table_test_data;
			}
		return $data;
	}

public function get_communication_reason($swift_statement_lines,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('communication_reason',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$communication_reason = cls_table_factory::create_instance('communication_reason');
				$communication_reason->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $communication_reason;
				}
				else
				{
					$data[] = $communication_reason;
				}
			}
		return $data;
	}

public function get_multi_communication_reason($swift_statement_lines,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$swift_statement_lines,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$communication_reason = cls_table_factory::create_instance('communication_reason');
				$communication_reason->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $communication_reason;
			}
		return $data;
	}

public function get_data_change($swift_statement_lines,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_change',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_change = cls_table_factory::create_instance('data_change');
				$data_change->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_change;
				}
				else
				{
					$data[] = $data_change;
				}
			}
		return $data;
	}

public function get_multi_data_change($swift_statement_lines,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$swift_statement_lines,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_change = cls_table_factory::create_instance('data_change');
				$data_change->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_change;
			}
		return $data;
	}

public function get_data_help($swift_statement_lines,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_help',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_help = cls_table_factory::create_instance('data_help');
				$data_help->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_help;
				}
				else
				{
					$data[] = $data_help;
				}
			}
		return $data;
	}

public function get_multi_data_help($swift_statement_lines,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$swift_statement_lines,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_help = cls_table_factory::create_instance('data_help');
				$data_help->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_help;
			}
		return $data;
	}

public function get_data_location($swift_statement_lines,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_location',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_location = cls_table_factory::create_instance('data_location');
				$data_location->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_location;
				}
				else
				{
					$data[] = $data_location;
				}
			}
		return $data;
	}

public function get_multi_data_location($swift_statement_lines,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$swift_statement_lines,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_location = cls_table_factory::create_instance('data_location');
				$data_location->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_location;
			}
		return $data;
	}

public function get_data_posting($swift_statement_lines,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_posting',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_posting = cls_table_factory::create_instance('data_posting');
				$data_posting->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_posting;
				}
				else
				{
					$data[] = $data_posting;
				}
			}
		return $data;
	}

public function get_multi_data_posting($swift_statement_lines,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$swift_statement_lines,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_posting = cls_table_factory::create_instance('data_posting');
				$data_posting->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_posting;
			}
		return $data;
	}

public function get_offer_event($swift_statement_lines,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('offer_event',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_event = cls_table_factory::create_instance('offer_event');
				$offer_event->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $offer_event;
				}
				else
				{
					$data[] = $offer_event;
				}
			}
		return $data;
	}

public function get_multi_offer_event($swift_statement_lines,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$swift_statement_lines,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_event = cls_table_factory::create_instance('offer_event');
				$offer_event->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $offer_event;
			}
		return $data;
	}

public function get_supplier_data($swift_statement_lines,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('supplier_data',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$supplier_data = cls_table_factory::create_instance('supplier_data');
				$supplier_data->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $supplier_data;
				}
				else
				{
					$data[] = $supplier_data;
				}
			}
		return $data;
	}

public function get_multi_supplier_data($swift_statement_lines,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$swift_statement_lines,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$supplier_data = cls_table_factory::create_instance('supplier_data');
				$supplier_data->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $supplier_data;
			}
		return $data;
	}

public function get_address($swift_statement_lines,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('address',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$address = cls_table_factory::create_instance('address');
				$address->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $address;
				}
				else
				{
					$data[] = $address;
				}
			}
		return $data;
	}

public function get_multi_address($swift_statement_lines,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$swift_statement_lines,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$address = cls_table_factory::create_instance('address');
				$address->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $address;
			}
		return $data;
	}

public function get_data_property($swift_statement_lines,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_property',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property = cls_table_factory::create_instance('data_property');
				$data_property->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_property;
				}
				else
				{
					$data[] = $data_property;
				}
			}
		return $data;
	}

public function get_multi_data_property($swift_statement_lines,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$swift_statement_lines,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property = cls_table_factory::create_instance('data_property');
				$data_property->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_property;
			}
		return $data;
	}

public function get_data_translation($swift_statement_lines,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_translation',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_translation = cls_table_factory::create_instance('data_translation');
				$data_translation->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_translation;
				}
				else
				{
					$data[] = $data_translation;
				}
			}
		return $data;
	}

public function get_multi_data_translation($swift_statement_lines,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$swift_statement_lines,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_translation = cls_table_factory::create_instance('data_translation');
				$data_translation->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_translation;
			}
		return $data;
	}

public function get_dms($swift_statement_lines,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('dms',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$dms = cls_table_factory::create_instance('dms');
				$dms->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $dms;
				}
				else
				{
					$data[] = $dms;
				}
			}
		return $data;
	}

public function get_multi_dms($swift_statement_lines,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$swift_statement_lines,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$dms = cls_table_factory::create_instance('dms');
				$dms->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $dms;
			}
		return $data;
	}

public function get_data_relation_id_data1($swift_statement_lines,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_relation',$this->get_id(),'id_data1');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_relation = cls_table_factory::create_instance('data_relation');
				$data_relation->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_relation;
				}
				else
				{
					$data[] = $data_relation;
				}
			}
		return $data;
	}

public function get_multi_data_relation_id_data1($swift_statement_lines,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$swift_statement_lines,'id_data1');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_relation = cls_table_factory::create_instance('data_relation');
				$data_relation->fill($row);
				if (!array_key_exists($data[$row['id_data1']]))
				{
					$data[$row['id_data1']] = array();
				}
				$data[$row['id_data1']][] = $data_relation;
			}
		return $data;
	}

public function get_data_relation_id_data2($swift_statement_lines,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_relation',$this->get_id(),'id_data2');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_relation = cls_table_factory::create_instance('data_relation');
				$data_relation->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_relation;
				}
				else
				{
					$data[] = $data_relation;
				}
			}
		return $data;
	}

public function get_multi_data_relation_id_data2($swift_statement_lines,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$swift_statement_lines,'id_data2');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_relation = cls_table_factory::create_instance('data_relation');
				$data_relation->fill($row);
				if (!array_key_exists($data[$row['id_data2']]))
				{
					$data[$row['id_data2']] = array();
				}
				$data[$row['id_data2']][] = $data_relation;
			}
		return $data;
	}

public function get_data_property_id_link_data($swift_statement_lines,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_property',$this->get_id(),'id_link_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property = cls_table_factory::create_instance('data_property');
				$data_property->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_property;
				}
				else
				{
					$data[] = $data_property;
				}
			}
		return $data;
	}

public function get_multi_data_property_id_link_data($swift_statement_lines,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$swift_statement_lines,'id_link_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property = cls_table_factory::create_instance('data_property');
				$data_property->fill($row);
				if (!array_key_exists($data[$row['id_link_data']]))
				{
					$data[$row['id_link_data']] = array();
				}
				$data[$row['id_link_data']][] = $data_property;
			}
		return $data;
	}


}
?>
