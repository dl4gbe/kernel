<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_transfer_item extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_transfer = null;
private $p_id_transfer_original = null;
private $p_id_posting_header = null;
private $p_id_posting_header_original = null;
private $p_no = null;
private $p_no_original = null;
private $p_id_posting_header_storno = null;
private $p_id_posting_header_storno_original = null;
private $p_id_bank_account = null;
private $p_id_bank_account_original = null;
private $p_amount = null;
private $p_amount_original = null;

private $p_id_transfer_is_dirty = false;
private $p_id_posting_header_is_dirty = false;
private $p_no_is_dirty = false;
private $p_id_posting_header_storno_is_dirty = false;
private $p_id_bank_account_is_dirty = false;
private $p_amount_is_dirty = false;

public function _get_table_name()
{
	return 'transfer_item';
}

public function get_table_fields()
{
	return array('id','id_transfer','id_posting_header','no','id_posting_header_storno','id_bank_account','amount');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'transfer_item.id' . $delimiter . ',id_transfer as ' . $delimiter . 'transfer_item.id_transfer' . $delimiter . ',id_posting_header as ' . $delimiter . 'transfer_item.id_posting_header' . $delimiter . ',no as ' . $delimiter . 'transfer_item.no' . $delimiter . ',id_posting_header_storno as ' . $delimiter . 'transfer_item.id_posting_header_storno' . $delimiter . ',id_bank_account as ' . $delimiter . 'transfer_item.id_bank_account' . $delimiter . ',amount as ' . $delimiter . 'transfer_item.amount' . $delimiter . ' from transfer_item';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_id_transfer()
{
	return $this->p_id_transfer;
}

public function get_id_transfer_original()
{
	return $this->p_id_transfer_original;
}

public function set_id_transfer($value)
{
	if ($this->p_id_transfer === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_transfer_is_dirty = true;
	$this->p_id_transfer = $value;
}

public function set_id_transfer_original($value)
{
	$this->p_id_transfer_original = $value;
}

public function get_id_transfer_is_dirty()
{
	return $this->p_id_transfer_is_dirty;
}


public function get_id_posting_header()
{
	return $this->p_id_posting_header;
}

public function get_id_posting_header_original()
{
	return $this->p_id_posting_header_original;
}

public function set_id_posting_header($value)
{
	if ($this->p_id_posting_header === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_posting_header_is_dirty = true;
	$this->p_id_posting_header = $value;
}

public function set_id_posting_header_original($value)
{
	$this->p_id_posting_header_original = $value;
}

public function get_id_posting_header_is_dirty()
{
	return $this->p_id_posting_header_is_dirty;
}


public function get_no()
{
	return $this->p_no;
}

public function get_no_original()
{
	return $this->p_no_original;
}

public function set_no($value)
{
	if ($this->p_no === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_no_is_dirty = true;
	$this->p_no = $value;
}

public function set_no_original($value)
{
	$this->p_no_original = $value;
}

public function get_no_is_dirty()
{
	return $this->p_no_is_dirty;
}


public function get_id_posting_header_storno()
{
	return $this->p_id_posting_header_storno;
}

public function get_id_posting_header_storno_original()
{
	return $this->p_id_posting_header_storno_original;
}

public function set_id_posting_header_storno($value)
{
	if ($this->p_id_posting_header_storno === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_posting_header_storno_is_dirty = true;
	$this->p_id_posting_header_storno = $value;
}

public function set_id_posting_header_storno_original($value)
{
	$this->p_id_posting_header_storno_original = $value;
}

public function get_id_posting_header_storno_is_dirty()
{
	return $this->p_id_posting_header_storno_is_dirty;
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


public function reset_dirty($reset_values = false)
{
	$this->p_id_transfer_is_dirty = false;
	$this->p_id_posting_header_is_dirty = false;
	$this->p_no_is_dirty = false;
	$this->p_id_posting_header_storno_is_dirty = false;
	$this->p_id_bank_account_is_dirty = false;
	$this->p_amount_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_transfer = $this->p_id_transfer_original;
		$this->p_id_posting_header = $this->p_id_posting_header_original;
		$this->p_no = $this->p_no_original;
		$this->p_id_posting_header_storno = $this->p_id_posting_header_storno_original;
		$this->p_id_bank_account = $this->p_id_bank_account_original;
		$this->p_amount = $this->p_amount_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "transfer_item.id":
					$this->set_id($val);
					break;
				case "transfer_item.id_transfer":
					$this->set_id_transfer($val);
					$this->set_id_transfer_original($val);
					break;
				case "transfer_item.id_posting_header":
					$this->set_id_posting_header($val);
					$this->set_id_posting_header_original($val);
					break;
				case "transfer_item.no":
					$this->set_no($val);
					$this->set_no_original($val);
					break;
				case "transfer_item.id_posting_header_storno":
					$this->set_id_posting_header_storno($val);
					$this->set_id_posting_header_storno_original($val);
					break;
				case "transfer_item.id_bank_account":
					$this->set_id_bank_account($val);
					$this->set_id_bank_account_original($val);
					break;
				case "transfer_item.amount":
					$this->set_amount($val);
					$this->set_amount_original($val);
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
		$transfer_item = cls_table_factory::create_instance('transfer_item');
		$row = $db_manager->fetch_row($result);
		$transfer_item->fill($row);
		return $transfer_item;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_transfer_item.php');
		return cls_save_transfer_item::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_transfer_item.php');
		return cls_save_transfer_item::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_transfer_items($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('transfer_item',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('transfer_item',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$transfer_item = cls_table_factory::create_instance('transfer_item');
				$transfer_item->fill($row);
				$data[] = $transfer_item;
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

function get_posting_header($db_manager,$application)
	{
		$result = $db_manager->get_records('posting_header',$this->get_id_posting_header());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$posting_header = cls_table_factory::create_instance('posting_header');
		$row = $db_manager->fetch_row($result);
		$posting_header->fill($row);
		return $posting_header;
	}

function get_posting_header_storno($db_manager,$application)
	{
		$result = $db_manager->get_records('posting_header',$this->get_id_posting_header_storno());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$posting_header = cls_table_factory::create_instance('posting_header');
		$row = $db_manager->fetch_row($result);
		$posting_header->fill($row);
		return $posting_header;
	}

function get_transfer($db_manager,$application)
	{
		$result = $db_manager->get_records('transfer',$this->get_id_transfer());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$transfer = cls_table_factory::create_instance('transfer');
		$row = $db_manager->fetch_row($result);
		$transfer->fill($row);
		return $transfer;
	}

public function get_address($transfer_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($transfer_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$transfer_items,'id_data');
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

public function get_communication_reason($transfer_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($transfer_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$transfer_items,'id_data');
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

public function get_data_change($transfer_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($transfer_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$transfer_items,'id_data');
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

public function get_data_help($transfer_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($transfer_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$transfer_items,'id_data');
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

public function get_data_location($transfer_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($transfer_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$transfer_items,'id_data');
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

public function get_data_posting($transfer_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($transfer_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$transfer_items,'id_data');
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

public function get_data_property($transfer_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($transfer_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$transfer_items,'id_data');
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

public function get_offer_event($transfer_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($transfer_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$transfer_items,'id_data');
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

public function get_supplier_data($transfer_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($transfer_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$transfer_items,'id_data');
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

public function get_table_test_data($transfer_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($transfer_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$transfer_items,'id_data');
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

public function get_data_translation($transfer_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($transfer_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$transfer_items,'id_data');
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

public function get_dms($transfer_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($transfer_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$transfer_items,'id_data');
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

public function get_data_relation_id_data1($transfer_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($transfer_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$transfer_items,'id_data1');
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

public function get_data_relation_id_data2($transfer_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($transfer_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$transfer_items,'id_data2');
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

public function get_data_property_id_link_data($transfer_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($transfer_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$transfer_items,'id_link_data');
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
