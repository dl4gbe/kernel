<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_swift_statement extends cls_datatable_base
{
private static $p_cmmon;
private $p_transaction_reference_number = null;
private $p_transaction_reference_number_original = null;
private $p_statement_number = null;
private $p_statement_number_original = null;
private $p_related_reference = null;
private $p_related_reference_original = null;
private $p_opening_balance_date = null;
private $p_opening_balance_date_original = null;
private $p_opening_balance_currency_code = null;
private $p_opening_balance_currency_code_original = null;
private $p_opening_balance_amount = null;
private $p_opening_balance_amount_original = null;
private $p_closing_balance_date = null;
private $p_closing_balance_date_original = null;
private $p_closing_balance_currency_code = null;
private $p_closing_balance_currency_code_original = null;
private $p_closing_balance_amount = null;
private $p_closing_balance_amount_original = null;
private $p_closing_available_balance_date = null;
private $p_closing_available_balance_date_original = null;
private $p_closing_available_balance_currency_code = null;
private $p_closing_available_balance_currency_code_original = null;
private $p_closing_available_balance_amount = null;
private $p_closing_available_balance_amount_original = null;
private $p_account_identification_code = null;
private $p_account_identification_code_original = null;
private $p_retrieval_date = null;
private $p_retrieval_date_original = null;

private $p_transaction_reference_number_is_dirty = false;
private $p_statement_number_is_dirty = false;
private $p_related_reference_is_dirty = false;
private $p_opening_balance_date_is_dirty = false;
private $p_opening_balance_currency_code_is_dirty = false;
private $p_opening_balance_amount_is_dirty = false;
private $p_closing_balance_date_is_dirty = false;
private $p_closing_balance_currency_code_is_dirty = false;
private $p_closing_balance_amount_is_dirty = false;
private $p_closing_available_balance_date_is_dirty = false;
private $p_closing_available_balance_currency_code_is_dirty = false;
private $p_closing_available_balance_amount_is_dirty = false;
private $p_account_identification_code_is_dirty = false;
private $p_retrieval_date_is_dirty = false;

public function _get_table_name()
{
	return 'swift_statement';
}

public function get_table_fields()
{
	return array('transaction_reference_number','statement_number','related_reference','opening_balance_date','opening_balance_currency_code','opening_balance_amount','closing_balance_date','closing_balance_currency_code','closing_balance_amount','closing_available_balance_date','closing_available_balance_currency_code','closing_available_balance_amount','account_identification_code','retrieval_date','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select transaction_reference_number as ' . $delimiter . 'swift_statement.transaction_reference_number' . $delimiter . ',statement_number as ' . $delimiter . 'swift_statement.statement_number' . $delimiter . ',related_reference as ' . $delimiter . 'swift_statement.related_reference' . $delimiter . ',opening_balance_date as ' . $delimiter . 'swift_statement.opening_balance_date' . $delimiter . ',opening_balance_currency_code as ' . $delimiter . 'swift_statement.opening_balance_currency_code' . $delimiter . ',opening_balance_amount as ' . $delimiter . 'swift_statement.opening_balance_amount' . $delimiter . ',closing_balance_date as ' . $delimiter . 'swift_statement.closing_balance_date' . $delimiter . ',closing_balance_currency_code as ' . $delimiter . 'swift_statement.closing_balance_currency_code' . $delimiter . ',closing_balance_amount as ' . $delimiter . 'swift_statement.closing_balance_amount' . $delimiter . ',closing_available_balance_date as ' . $delimiter . 'swift_statement.closing_available_balance_date' . $delimiter . ',closing_available_balance_currency_code as ' . $delimiter . 'swift_statement.closing_available_balance_currency_code' . $delimiter . ',closing_available_balance_amount as ' . $delimiter . 'swift_statement.closing_available_balance_amount' . $delimiter . ',account_identification_code as ' . $delimiter . 'swift_statement.account_identification_code' . $delimiter . ',retrieval_date as ' . $delimiter . 'swift_statement.retrieval_date' . $delimiter . ',id as ' . $delimiter . 'swift_statement.id' . $delimiter . ' from swift_statement';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}

public function get_transaction_reference_number()
{
	return $this->p_transaction_reference_number;
}

public function get_transaction_reference_number_original()
{
	return $this->p_transaction_reference_number_original;
}

public function set_transaction_reference_number($value)
{
	if ($this->p_transaction_reference_number === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_transaction_reference_number_is_dirty = true;
	$this->p_transaction_reference_number = $value;
}

public function set_transaction_reference_number_original($value)
{
	$this->p_transaction_reference_number_original = $value;
}

public function get_transaction_reference_number_is_dirty()
{
	return $this->p_transaction_reference_number_is_dirty;
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


public function get_related_reference()
{
	return $this->p_related_reference;
}

public function get_related_reference_original()
{
	return $this->p_related_reference_original;
}

public function set_related_reference($value)
{
	if ($this->p_related_reference === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_related_reference_is_dirty = true;
	$this->p_related_reference = $value;
}

public function set_related_reference_original($value)
{
	$this->p_related_reference_original = $value;
}

public function get_related_reference_is_dirty()
{
	return $this->p_related_reference_is_dirty;
}


public function get_opening_balance_date()
{
	return $this->p_opening_balance_date;
}

public function get_opening_balance_date_original()
{
	return $this->p_opening_balance_date_original;
}

public function set_opening_balance_date($value)
{
	if ($this->p_opening_balance_date === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_opening_balance_date_is_dirty = true;
	$this->p_opening_balance_date = $value;
}

public function set_opening_balance_date_original($value)
{
	$this->p_opening_balance_date_original = $value;
}

public function get_opening_balance_date_is_dirty()
{
	return $this->p_opening_balance_date_is_dirty;
}


public function get_opening_balance_currency_code()
{
	return $this->p_opening_balance_currency_code;
}

public function get_opening_balance_currency_code_original()
{
	return $this->p_opening_balance_currency_code_original;
}

public function set_opening_balance_currency_code($value)
{
	if ($this->p_opening_balance_currency_code === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_opening_balance_currency_code_is_dirty = true;
	$this->p_opening_balance_currency_code = $value;
}

public function set_opening_balance_currency_code_original($value)
{
	$this->p_opening_balance_currency_code_original = $value;
}

public function get_opening_balance_currency_code_is_dirty()
{
	return $this->p_opening_balance_currency_code_is_dirty;
}


public function get_opening_balance_amount()
{
	return $this->p_opening_balance_amount;
}

public function get_opening_balance_amount_original()
{
	return $this->p_opening_balance_amount_original;
}

public function set_opening_balance_amount($value)
{
	if ($this->p_opening_balance_amount === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_opening_balance_amount_is_dirty = true;
	$this->p_opening_balance_amount = $value;
}

public function set_opening_balance_amount_original($value)
{
	$this->p_opening_balance_amount_original = $value;
}

public function get_opening_balance_amount_is_dirty()
{
	return $this->p_opening_balance_amount_is_dirty;
}


public function get_closing_balance_date()
{
	return $this->p_closing_balance_date;
}

public function get_closing_balance_date_original()
{
	return $this->p_closing_balance_date_original;
}

public function set_closing_balance_date($value)
{
	if ($this->p_closing_balance_date === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_closing_balance_date_is_dirty = true;
	$this->p_closing_balance_date = $value;
}

public function set_closing_balance_date_original($value)
{
	$this->p_closing_balance_date_original = $value;
}

public function get_closing_balance_date_is_dirty()
{
	return $this->p_closing_balance_date_is_dirty;
}


public function get_closing_balance_currency_code()
{
	return $this->p_closing_balance_currency_code;
}

public function get_closing_balance_currency_code_original()
{
	return $this->p_closing_balance_currency_code_original;
}

public function set_closing_balance_currency_code($value)
{
	if ($this->p_closing_balance_currency_code === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_closing_balance_currency_code_is_dirty = true;
	$this->p_closing_balance_currency_code = $value;
}

public function set_closing_balance_currency_code_original($value)
{
	$this->p_closing_balance_currency_code_original = $value;
}

public function get_closing_balance_currency_code_is_dirty()
{
	return $this->p_closing_balance_currency_code_is_dirty;
}


public function get_closing_balance_amount()
{
	return $this->p_closing_balance_amount;
}

public function get_closing_balance_amount_original()
{
	return $this->p_closing_balance_amount_original;
}

public function set_closing_balance_amount($value)
{
	if ($this->p_closing_balance_amount === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_closing_balance_amount_is_dirty = true;
	$this->p_closing_balance_amount = $value;
}

public function set_closing_balance_amount_original($value)
{
	$this->p_closing_balance_amount_original = $value;
}

public function get_closing_balance_amount_is_dirty()
{
	return $this->p_closing_balance_amount_is_dirty;
}


public function get_closing_available_balance_date()
{
	return $this->p_closing_available_balance_date;
}

public function get_closing_available_balance_date_original()
{
	return $this->p_closing_available_balance_date_original;
}

public function set_closing_available_balance_date($value)
{
	if ($this->p_closing_available_balance_date === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_closing_available_balance_date_is_dirty = true;
	$this->p_closing_available_balance_date = $value;
}

public function set_closing_available_balance_date_original($value)
{
	$this->p_closing_available_balance_date_original = $value;
}

public function get_closing_available_balance_date_is_dirty()
{
	return $this->p_closing_available_balance_date_is_dirty;
}


public function get_closing_available_balance_currency_code()
{
	return $this->p_closing_available_balance_currency_code;
}

public function get_closing_available_balance_currency_code_original()
{
	return $this->p_closing_available_balance_currency_code_original;
}

public function set_closing_available_balance_currency_code($value)
{
	if ($this->p_closing_available_balance_currency_code === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_closing_available_balance_currency_code_is_dirty = true;
	$this->p_closing_available_balance_currency_code = $value;
}

public function set_closing_available_balance_currency_code_original($value)
{
	$this->p_closing_available_balance_currency_code_original = $value;
}

public function get_closing_available_balance_currency_code_is_dirty()
{
	return $this->p_closing_available_balance_currency_code_is_dirty;
}


public function get_closing_available_balance_amount()
{
	return $this->p_closing_available_balance_amount;
}

public function get_closing_available_balance_amount_original()
{
	return $this->p_closing_available_balance_amount_original;
}

public function set_closing_available_balance_amount($value)
{
	if ($this->p_closing_available_balance_amount === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_closing_available_balance_amount_is_dirty = true;
	$this->p_closing_available_balance_amount = $value;
}

public function set_closing_available_balance_amount_original($value)
{
	$this->p_closing_available_balance_amount_original = $value;
}

public function get_closing_available_balance_amount_is_dirty()
{
	return $this->p_closing_available_balance_amount_is_dirty;
}


public function get_account_identification_code()
{
	return $this->p_account_identification_code;
}

public function get_account_identification_code_original()
{
	return $this->p_account_identification_code_original;
}

public function set_account_identification_code($value)
{
	if ($this->p_account_identification_code === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_account_identification_code_is_dirty = true;
	$this->p_account_identification_code = $value;
}

public function set_account_identification_code_original($value)
{
	$this->p_account_identification_code_original = $value;
}

public function get_account_identification_code_is_dirty()
{
	return $this->p_account_identification_code_is_dirty;
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



public function reset_dirty($reset_values = false)
{
	$this->p_transaction_reference_number_is_dirty = false;
	$this->p_statement_number_is_dirty = false;
	$this->p_related_reference_is_dirty = false;
	$this->p_opening_balance_date_is_dirty = false;
	$this->p_opening_balance_currency_code_is_dirty = false;
	$this->p_opening_balance_amount_is_dirty = false;
	$this->p_closing_balance_date_is_dirty = false;
	$this->p_closing_balance_currency_code_is_dirty = false;
	$this->p_closing_balance_amount_is_dirty = false;
	$this->p_closing_available_balance_date_is_dirty = false;
	$this->p_closing_available_balance_currency_code_is_dirty = false;
	$this->p_closing_available_balance_amount_is_dirty = false;
	$this->p_account_identification_code_is_dirty = false;
	$this->p_retrieval_date_is_dirty = false;
	if ($reset_values)
	{
		$this->p_transaction_reference_number = $this->p_transaction_reference_number_original;
		$this->p_statement_number = $this->p_statement_number_original;
		$this->p_related_reference = $this->p_related_reference_original;
		$this->p_opening_balance_date = $this->p_opening_balance_date_original;
		$this->p_opening_balance_currency_code = $this->p_opening_balance_currency_code_original;
		$this->p_opening_balance_amount = $this->p_opening_balance_amount_original;
		$this->p_closing_balance_date = $this->p_closing_balance_date_original;
		$this->p_closing_balance_currency_code = $this->p_closing_balance_currency_code_original;
		$this->p_closing_balance_amount = $this->p_closing_balance_amount_original;
		$this->p_closing_available_balance_date = $this->p_closing_available_balance_date_original;
		$this->p_closing_available_balance_currency_code = $this->p_closing_available_balance_currency_code_original;
		$this->p_closing_available_balance_amount = $this->p_closing_available_balance_amount_original;
		$this->p_account_identification_code = $this->p_account_identification_code_original;
		$this->p_retrieval_date = $this->p_retrieval_date_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "swift_statement.transaction_reference_number":
					$this->set_transaction_reference_number($val);
					$this->set_transaction_reference_number_original($val);
					break;
				case "swift_statement.statement_number":
					$this->set_statement_number($val);
					$this->set_statement_number_original($val);
					break;
				case "swift_statement.related_reference":
					$this->set_related_reference($val);
					$this->set_related_reference_original($val);
					break;
				case "swift_statement.opening_balance_date":
					$this->set_opening_balance_date($val);
					$this->set_opening_balance_date_original($val);
					break;
				case "swift_statement.opening_balance_currency_code":
					$this->set_opening_balance_currency_code($val);
					$this->set_opening_balance_currency_code_original($val);
					break;
				case "swift_statement.opening_balance_amount":
					$this->set_opening_balance_amount($val);
					$this->set_opening_balance_amount_original($val);
					break;
				case "swift_statement.closing_balance_date":
					$this->set_closing_balance_date($val);
					$this->set_closing_balance_date_original($val);
					break;
				case "swift_statement.closing_balance_currency_code":
					$this->set_closing_balance_currency_code($val);
					$this->set_closing_balance_currency_code_original($val);
					break;
				case "swift_statement.closing_balance_amount":
					$this->set_closing_balance_amount($val);
					$this->set_closing_balance_amount_original($val);
					break;
				case "swift_statement.closing_available_balance_date":
					$this->set_closing_available_balance_date($val);
					$this->set_closing_available_balance_date_original($val);
					break;
				case "swift_statement.closing_available_balance_currency_code":
					$this->set_closing_available_balance_currency_code($val);
					$this->set_closing_available_balance_currency_code_original($val);
					break;
				case "swift_statement.closing_available_balance_amount":
					$this->set_closing_available_balance_amount($val);
					$this->set_closing_available_balance_amount_original($val);
					break;
				case "swift_statement.account_identification_code":
					$this->set_account_identification_code($val);
					$this->set_account_identification_code_original($val);
					break;
				case "swift_statement.retrieval_date":
					$this->set_retrieval_date($val);
					$this->set_retrieval_date_original($val);
					break;
				case "swift_statement.id":
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
		$swift_statement = cls_table_factory::create_instance('swift_statement');
		$row = $db_manager->fetch_row($result);
		$swift_statement->fill($row);
		return $swift_statement;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_swift_statement.php');
		return cls_save_swift_statement::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_swift_statement.php');
		return cls_save_swift_statement::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_swift_statements($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('swift_statement',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('swift_statement',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$swift_statement = cls_table_factory::create_instance('swift_statement');
				$swift_statement->fill($row);
				$data[] = $swift_statement;
			}
		return $data;
	}

//changed 1
public function get_swift_statement_line($db_manager,$application)
	{
		$result = $db_manager->get_records('swift_statement_line',$this->get_id(),'id_swift_statement');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$swift_statement_line = cls_table_factory::create_instance('swift_statement_line');
		$row = $db_manager->fetch_row($result);
		$swift_statement_line->fill($row);
		return $swift_statement_line;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_swift_statement_lines_by_swift_statement($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('swift_statement_line',$this->get_id(),'id_swift_statement');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$swift_statement_line = cls_table_factory::create_instance('swift_statement_line');
				$swift_statement_line->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $swift_statement_line;
				}
				else
				{
					$data[] = $swift_statement_line;
				}
			}
		return $data;
	}

public function get_multi_swift_statement_lines_by_swift_statement($swift_statements,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('swift_statement_line',$swift_statements,'id_swift_statement');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$swift_statement_line = cls_table_factory::create_instance('swift_statement_line');
				$swift_statement_line->fill($row);
				if (!array_key_exists($data[$row['id_swift_statement']]))
				{
					$data[$row['id_swift_statement']] = array();
				}
				$data[$row['id_swift_statement']][] = $swift_statement_line;
			}
		return $data;
	}

public function get_table_test_data($swift_statements,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($swift_statements,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$swift_statements,'id_data');
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

public function get_communication_reason($swift_statements,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($swift_statements,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$swift_statements,'id_data');
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

public function get_data_change($swift_statements,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($swift_statements,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$swift_statements,'id_data');
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

public function get_data_help($swift_statements,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($swift_statements,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$swift_statements,'id_data');
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

public function get_data_location($swift_statements,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($swift_statements,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$swift_statements,'id_data');
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

public function get_data_posting($swift_statements,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($swift_statements,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$swift_statements,'id_data');
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

public function get_offer_event($swift_statements,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($swift_statements,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$swift_statements,'id_data');
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

public function get_supplier_data($swift_statements,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($swift_statements,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$swift_statements,'id_data');
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

public function get_address($swift_statements,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($swift_statements,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$swift_statements,'id_data');
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

public function get_data_property($swift_statements,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($swift_statements,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$swift_statements,'id_data');
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

public function get_data_translation($swift_statements,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($swift_statements,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$swift_statements,'id_data');
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

public function get_dms($swift_statements,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($swift_statements,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$swift_statements,'id_data');
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

public function get_data_relation_id_data1($swift_statements,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($swift_statements,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$swift_statements,'id_data1');
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

public function get_data_relation_id_data2($swift_statements,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($swift_statements,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$swift_statements,'id_data2');
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

public function get_data_property_id_link_data($swift_statements,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($swift_statements,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$swift_statements,'id_link_data');
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
