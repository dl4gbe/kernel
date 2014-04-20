<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_transfer extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_person_employee = null;
private $p_id_person_employee_original = null;
private $p_rundate = null;
private $p_rundate_original = null;
private $p_typ = null;
private $p_typ_original = null;
private $p_id_bank_account = null;
private $p_id_bank_account_original = null;
private $p_stornodate = null;
private $p_stornodate_original = null;
private $p_id_person_storno = null;
private $p_id_person_storno_original = null;
private $p_defaultrun = null;
private $p_defaultrun_original = null;
private $p_remark = null;
private $p_remark_original = null;

private $p_id_person_employee_is_dirty = false;
private $p_rundate_is_dirty = false;
private $p_typ_is_dirty = false;
private $p_id_bank_account_is_dirty = false;
private $p_stornodate_is_dirty = false;
private $p_id_person_storno_is_dirty = false;
private $p_defaultrun_is_dirty = false;
private $p_remark_is_dirty = false;

public function _get_table_name()
{
	return 'transfer';
}

public function get_table_fields()
{
	return array('id','id_person_employee','rundate','typ','id_bank_account','stornodate','id_person_storno','defaultrun','remark');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'transfer.id' . $delimiter . ',id_person_employee as ' . $delimiter . 'transfer.id_person_employee' . $delimiter . ',rundate as ' . $delimiter . 'transfer.rundate' . $delimiter . ',typ as ' . $delimiter . 'transfer.typ' . $delimiter . ',id_bank_account as ' . $delimiter . 'transfer.id_bank_account' . $delimiter . ',stornodate as ' . $delimiter . 'transfer.stornodate' . $delimiter . ',id_person_storno as ' . $delimiter . 'transfer.id_person_storno' . $delimiter . ',defaultrun as ' . $delimiter . 'transfer.defaultrun' . $delimiter . ',remark as ' . $delimiter . 'transfer.remark' . $delimiter . ' from transfer';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_id_person_employee()
{
	return $this->p_id_person_employee;
}

public function get_id_person_employee_original()
{
	return $this->p_id_person_employee_original;
}

public function set_id_person_employee($value)
{
	if ($this->p_id_person_employee === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_employee_is_dirty = true;
	$this->p_id_person_employee = $value;
}

public function set_id_person_employee_original($value)
{
	$this->p_id_person_employee_original = $value;
}

public function get_id_person_employee_is_dirty()
{
	return $this->p_id_person_employee_is_dirty;
}


public function get_rundate()
{
	return $this->p_rundate;
}

public function get_rundate_original()
{
	return $this->p_rundate_original;
}

public function set_rundate($value)
{
	if ($this->p_rundate === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_rundate_is_dirty = true;
	$this->p_rundate = $value;
}

public function set_rundate_original($value)
{
	$this->p_rundate_original = $value;
}

public function get_rundate_is_dirty()
{
	return $this->p_rundate_is_dirty;
}


public function get_typ()
{
	return $this->p_typ;
}

public function get_typ_original()
{
	return $this->p_typ_original;
}

public function set_typ($value)
{
	if ($this->p_typ === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_typ_is_dirty = true;
	$this->p_typ = $value;
}

public function set_typ_original($value)
{
	$this->p_typ_original = $value;
}

public function get_typ_is_dirty()
{
	return $this->p_typ_is_dirty;
}


public function get_id_bank_account()
{
	return $this->p_id_bank_account;
}

public function get_id_bank_account_original()
{
	return $this->p_id_bank_account_original;
}

public function set_id_bank_account($value)
{
	if ($this->p_id_bank_account === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_bank_account_is_dirty = true;
	$this->p_id_bank_account = $value;
}

public function set_id_bank_account_original($value)
{
	$this->p_id_bank_account_original = $value;
}

public function get_id_bank_account_is_dirty()
{
	return $this->p_id_bank_account_is_dirty;
}


public function get_stornodate()
{
	return $this->p_stornodate;
}

public function get_stornodate_original()
{
	return $this->p_stornodate_original;
}

public function set_stornodate($value)
{
	if ($this->p_stornodate === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_stornodate_is_dirty = true;
	$this->p_stornodate = $value;
}

public function set_stornodate_original($value)
{
	$this->p_stornodate_original = $value;
}

public function get_stornodate_is_dirty()
{
	return $this->p_stornodate_is_dirty;
}


public function get_id_person_storno()
{
	return $this->p_id_person_storno;
}

public function get_id_person_storno_original()
{
	return $this->p_id_person_storno_original;
}

public function set_id_person_storno($value)
{
	if ($this->p_id_person_storno === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_storno_is_dirty = true;
	$this->p_id_person_storno = $value;
}

public function set_id_person_storno_original($value)
{
	$this->p_id_person_storno_original = $value;
}

public function get_id_person_storno_is_dirty()
{
	return $this->p_id_person_storno_is_dirty;
}


public function get_defaultrun()
{
	return $this->p_defaultrun;
}

public function get_defaultrun_original()
{
	return $this->p_defaultrun_original;
}

public function set_defaultrun($value)
{
	if ($this->p_defaultrun === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_defaultrun_is_dirty = true;
	$this->p_defaultrun = $value;
}

public function set_defaultrun_original($value)
{
	$this->p_defaultrun_original = $value;
}

public function get_defaultrun_is_dirty()
{
	return $this->p_defaultrun_is_dirty;
}


public function get_remark()
{
	return $this->p_remark;
}

public function get_remark_original()
{
	return $this->p_remark_original;
}

public function set_remark($value)
{
	if ($this->p_remark === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_remark_is_dirty = true;
	$this->p_remark = $value;
}

public function set_remark_original($value)
{
	$this->p_remark_original = $value;
}

public function get_remark_is_dirty()
{
	return $this->p_remark_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_id_person_employee_is_dirty = false;
	$this->p_rundate_is_dirty = false;
	$this->p_typ_is_dirty = false;
	$this->p_id_bank_account_is_dirty = false;
	$this->p_stornodate_is_dirty = false;
	$this->p_id_person_storno_is_dirty = false;
	$this->p_defaultrun_is_dirty = false;
	$this->p_remark_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_person_employee = $this->p_id_person_employee_original;
		$this->p_rundate = $this->p_rundate_original;
		$this->p_typ = $this->p_typ_original;
		$this->p_id_bank_account = $this->p_id_bank_account_original;
		$this->p_stornodate = $this->p_stornodate_original;
		$this->p_id_person_storno = $this->p_id_person_storno_original;
		$this->p_defaultrun = $this->p_defaultrun_original;
		$this->p_remark = $this->p_remark_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "transfer.id":
					$this->set_id($val);
					break;
				case "transfer.id_person_employee":
					$this->set_id_person_employee($val);
					$this->set_id_person_employee_original($val);
					break;
				case "transfer.rundate":
					$this->set_rundate($val);
					$this->set_rundate_original($val);
					break;
				case "transfer.typ":
					$this->set_typ($val);
					$this->set_typ_original($val);
					break;
				case "transfer.id_bank_account":
					$this->set_id_bank_account($val);
					$this->set_id_bank_account_original($val);
					break;
				case "transfer.stornodate":
					$this->set_stornodate($val);
					$this->set_stornodate_original($val);
					break;
				case "transfer.id_person_storno":
					$this->set_id_person_storno($val);
					$this->set_id_person_storno_original($val);
					break;
				case "transfer.defaultrun":
					$this->set_defaultrun($val);
					$this->set_defaultrun_original($val);
					break;
				case "transfer.remark":
					$this->set_remark($val);
					$this->set_remark_original($val);
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
		$transfer = cls_table_factory::create_instance('transfer');
		$row = $db_manager->fetch_row($result);
		$transfer->fill($row);
		return $transfer;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_transfer.php');
		return cls_save_transfer::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_transfer.php');
		return cls_save_transfer::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_transfers($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('transfer',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('transfer',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$transfer = cls_table_factory::create_instance('transfer');
				$transfer->fill($row);
				$data[] = $transfer;
			}
		return $data;
	}

function get_bank_account($db_manager,$application)
	{
		$result = $db_manager->get_records('bank_account',$this->get_id_bank_account());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$bank_account = cls_table_factory::create_instance('bank_account');
		$row = $db_manager->fetch_row($result);
		$bank_account->fill($row);
		return $bank_account;
	}

function get_person_employee($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person_employee());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

function get_person_storno($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person_storno());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

//changed 1
public function get_transfer_item($db_manager,$application)
	{
		$result = $db_manager->get_records('transfer_item',$this->get_id(),'id_transfer');
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
public function get_transfer_items_by_transfer($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('transfer_item',$this->get_id(),'id_transfer');
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

public function get_multi_transfer_items_by_transfer($transfers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('transfer_item',$transfers,'id_transfer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$transfer_item = cls_table_factory::create_instance('transfer_item');
				$transfer_item->fill($row);
				if (!array_key_exists($data[$row['id_transfer']]))
				{
					$data[$row['id_transfer']] = array();
				}
				$data[$row['id_transfer']][] = $transfer_item;
			}
		return $data;
	}

public function get_address($transfers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($transfers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$transfers,'id_data');
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

public function get_communication_reason($transfers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($transfers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$transfers,'id_data');
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

public function get_data_change($transfers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($transfers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$transfers,'id_data');
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

public function get_data_help($transfers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($transfers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$transfers,'id_data');
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

public function get_data_location($transfers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($transfers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$transfers,'id_data');
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

public function get_data_posting($transfers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($transfers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$transfers,'id_data');
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

public function get_data_property($transfers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($transfers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$transfers,'id_data');
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

public function get_offer_event($transfers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($transfers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$transfers,'id_data');
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

public function get_supplier_data($transfers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($transfers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$transfers,'id_data');
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

public function get_table_test_data($transfers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($transfers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$transfers,'id_data');
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

public function get_data_translation($transfers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($transfers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$transfers,'id_data');
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

public function get_dms($transfers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($transfers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$transfers,'id_data');
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

public function get_data_relation_id_data1($transfers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($transfers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$transfers,'id_data1');
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

public function get_data_relation_id_data2($transfers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($transfers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$transfers,'id_data2');
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

public function get_data_property_id_link_data($transfers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($transfers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$transfers,'id_link_data');
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
