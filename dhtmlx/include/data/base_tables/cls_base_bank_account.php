<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_bank_account extends cls_datatable_base
{
private static $p_cmmon;
private $p_bankcode = null;
private $p_bankcode_original = null;
private $p_accountno = null;
private $p_accountno_original = null;
private $p_iban = null;
private $p_iban_original = null;
private $p_bic = null;
private $p_bic_original = null;
private $p_holder = null;
private $p_holder_original = null;

private $p_bankcode_is_dirty = false;
private $p_accountno_is_dirty = false;
private $p_iban_is_dirty = false;
private $p_bic_is_dirty = false;
private $p_holder_is_dirty = false;

public function _get_table_name()
{
	return 'bank_account';
}

public function get_table_fields()
{
	return array('id','bankcode','accountno','iban','bic','holder');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'bank_account.id' . $delimiter . ',bankcode as ' . $delimiter . 'bank_account.bankcode' . $delimiter . ',accountno as ' . $delimiter . 'bank_account.accountno' . $delimiter . ',iban as ' . $delimiter . 'bank_account.iban' . $delimiter . ',bic as ' . $delimiter . 'bank_account.bic' . $delimiter . ',holder as ' . $delimiter . 'bank_account.holder' . $delimiter . ' from bank_account';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
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


public function get_accountno()
{
	return $this->p_accountno;
}

public function get_accountno_original()
{
	return $this->p_accountno_original;
}

public function set_accountno($value)
{
	if ($this->p_accountno === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_accountno_is_dirty = true;
	$this->p_accountno = $value;
}

public function set_accountno_original($value)
{
	$this->p_accountno_original = $value;
}

public function get_accountno_is_dirty()
{
	return $this->p_accountno_is_dirty;
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


public function get_holder()
{
	return $this->p_holder;
}

public function get_holder_original()
{
	return $this->p_holder_original;
}

public function set_holder($value)
{
	if ($this->p_holder === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_holder_is_dirty = true;
	$this->p_holder = $value;
}

public function set_holder_original($value)
{
	$this->p_holder_original = $value;
}

public function get_holder_is_dirty()
{
	return $this->p_holder_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_bankcode_is_dirty = false;
	$this->p_accountno_is_dirty = false;
	$this->p_iban_is_dirty = false;
	$this->p_bic_is_dirty = false;
	$this->p_holder_is_dirty = false;
	if ($reset_values)
	{
		$this->p_bankcode = $this->p_bankcode_original;
		$this->p_accountno = $this->p_accountno_original;
		$this->p_iban = $this->p_iban_original;
		$this->p_bic = $this->p_bic_original;
		$this->p_holder = $this->p_holder_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "bank_account.id":
					$this->set_id($val);
					break;
				case "bank_account.bankcode":
					$this->set_bankcode($val);
					$this->set_bankcode_original($val);
					break;
				case "bank_account.accountno":
					$this->set_accountno($val);
					$this->set_accountno_original($val);
					break;
				case "bank_account.iban":
					$this->set_iban($val);
					$this->set_iban_original($val);
					break;
				case "bank_account.bic":
					$this->set_bic($val);
					$this->set_bic_original($val);
					break;
				case "bank_account.holder":
					$this->set_holder($val);
					$this->set_holder_original($val);
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
		$bank_account = cls_table_factory::create_instance('bank_account');
		$row = $db_manager->fetch_row($result);
		$bank_account->fill($row);
		return $bank_account;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_bank_account.php');
		return cls_save_bank_account::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_bank_account.php');
		return cls_save_bank_account::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_bank_accounts($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('bank_account',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('bank_account',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$bank_account = cls_table_factory::create_instance('bank_account');
				$bank_account->fill($row);
				$data[] = $bank_account;
			}
		return $data;
	}

//changed 1
public function get_bank_account_mandat($db_manager,$application)
	{
		$result = $db_manager->get_records('bank_account_mandat',$this->get_id(),'id_bank_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$bank_account_mandat = cls_table_factory::create_instance('bank_account_mandat');
		$row = $db_manager->fetch_row($result);
		$bank_account_mandat->fill($row);
		return $bank_account_mandat;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_bank_account_mandats_by_bank_account($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('bank_account_mandat',$this->get_id(),'id_bank_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$bank_account_mandat = cls_table_factory::create_instance('bank_account_mandat');
				$bank_account_mandat->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $bank_account_mandat;
				}
				else
				{
					$data[] = $bank_account_mandat;
				}
			}
		return $data;
	}

public function get_multi_bank_account_mandats_by_bank_account($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('bank_account_mandat',$bank_accounts,'id_bank_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$bank_account_mandat = cls_table_factory::create_instance('bank_account_mandat');
				$bank_account_mandat->fill($row);
				if (!array_key_exists($data[$row['id_bank_account']]))
				{
					$data[$row['id_bank_account']] = array();
				}
				$data[$row['id_bank_account']][] = $bank_account_mandat;
			}
		return $data;
	}

//changed 1
public function get_contract($db_manager,$application)
	{
		$result = $db_manager->get_records('contract',$this->get_id(),'id_bank_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$contract = cls_table_factory::create_instance('contract');
		$row = $db_manager->fetch_row($result);
		$contract->fill($row);
		return $contract;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_contracts_by_bank_account($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('contract',$this->get_id(),'id_bank_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract = cls_table_factory::create_instance('contract');
				$contract->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $contract;
				}
				else
				{
					$data[] = $contract;
				}
			}
		return $data;
	}

public function get_multi_contracts_by_bank_account($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('contract',$bank_accounts,'id_bank_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract = cls_table_factory::create_instance('contract');
				$contract->fill($row);
				if (!array_key_exists($data[$row['id_bank_account']]))
				{
					$data[$row['id_bank_account']] = array();
				}
				$data[$row['id_bank_account']][] = $contract;
			}
		return $data;
	}

//changed 1
public function get_person($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id(),'id_bank_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_persons_by_bank_account($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('person',$this->get_id(),'id_bank_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person = cls_table_factory::create_instance('person');
				$person->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $person;
				}
				else
				{
					$data[] = $person;
				}
			}
		return $data;
	}

public function get_multi_persons_by_bank_account($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('person',$bank_accounts,'id_bank_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person = cls_table_factory::create_instance('person');
				$person->fill($row);
				if (!array_key_exists($data[$row['id_bank_account']]))
				{
					$data[$row['id_bank_account']] = array();
				}
				$data[$row['id_bank_account']][] = $person;
			}
		return $data;
	}

//changed 1
public function get_transfer($db_manager,$application)
	{
		$result = $db_manager->get_records('transfer',$this->get_id(),'id_bank_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$transfer = cls_table_factory::create_instance('transfer');
		$row = $db_manager->fetch_row($result);
		$transfer->fill($row);
		return $transfer;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_transfers_by_bank_account($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('transfer',$this->get_id(),'id_bank_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$transfer = cls_table_factory::create_instance('transfer');
				$transfer->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $transfer;
				}
				else
				{
					$data[] = $transfer;
				}
			}
		return $data;
	}

public function get_multi_transfers_by_bank_account($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('transfer',$bank_accounts,'id_bank_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$transfer = cls_table_factory::create_instance('transfer');
				$transfer->fill($row);
				if (!array_key_exists($data[$row['id_bank_account']]))
				{
					$data[$row['id_bank_account']] = array();
				}
				$data[$row['id_bank_account']][] = $transfer;
			}
		return $data;
	}

//changed 1
public function get_transfer_item($db_manager,$application)
	{
		$result = $db_manager->get_records('transfer_item',$this->get_id(),'id_bank_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$transfer_item = cls_table_factory::create_instance('transfer_item');
		$row = $db_manager->fetch_row($result);
		$transfer_item->fill($row);
		return $transfer_item;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_transfer_items_by_bank_account($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('transfer_item',$this->get_id(),'id_bank_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$transfer_item = cls_table_factory::create_instance('transfer_item');
				$transfer_item->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $transfer_item;
				}
				else
				{
					$data[] = $transfer_item;
				}
			}
		return $data;
	}

public function get_multi_transfer_items_by_bank_account($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('transfer_item',$bank_accounts,'id_bank_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$transfer_item = cls_table_factory::create_instance('transfer_item');
				$transfer_item->fill($row);
				if (!array_key_exists($data[$row['id_bank_account']]))
				{
					$data[$row['id_bank_account']] = array();
				}
				$data[$row['id_bank_account']][] = $transfer_item;
			}
		return $data;
	}

public function get_address($bank_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$bank_accounts,'id_data');
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

public function get_communication_reason($bank_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$bank_accounts,'id_data');
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

public function get_data_change($bank_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$bank_accounts,'id_data');
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

public function get_data_help($bank_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$bank_accounts,'id_data');
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

public function get_data_location($bank_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$bank_accounts,'id_data');
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

public function get_data_posting($bank_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$bank_accounts,'id_data');
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

public function get_data_property($bank_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$bank_accounts,'id_data');
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

public function get_offer_event($bank_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$bank_accounts,'id_data');
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

public function get_supplier_data($bank_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$bank_accounts,'id_data');
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

public function get_table_test_data($bank_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$bank_accounts,'id_data');
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

public function get_data_translation($bank_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$bank_accounts,'id_data');
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

public function get_dms($bank_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$bank_accounts,'id_data');
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

public function get_data_relation_id_data1($bank_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$bank_accounts,'id_data1');
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

public function get_data_relation_id_data2($bank_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$bank_accounts,'id_data2');
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

public function get_data_property_id_link_data($bank_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($bank_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$bank_accounts,'id_link_data');
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
