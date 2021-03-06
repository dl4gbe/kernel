<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_person_state_type_account extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_person_state_type = null;
private $p_id_person_state_type_original = null;
private $p_id_chart_of_account = null;
private $p_id_chart_of_account_original = null;
private $p_id_account_receivable = null;
private $p_id_account_receivable_original = null;
private $p_id_account_payable = null;
private $p_id_account_payable_original = null;

private $p_id_person_state_type_is_dirty = false;
private $p_id_chart_of_account_is_dirty = false;
private $p_id_account_receivable_is_dirty = false;
private $p_id_account_payable_is_dirty = false;

public function _get_table_name()
{
	return 'person_state_type_account';
}

public function get_table_fields()
{
	return array('id','id_person_state_type','id_chart_of_account','id_account_receivable','id_account_payable');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'person_state_type_account.id' . $delimiter . ',id_person_state_type as ' . $delimiter . 'person_state_type_account.id_person_state_type' . $delimiter . ',id_chart_of_account as ' . $delimiter . 'person_state_type_account.id_chart_of_account' . $delimiter . ',id_account_receivable as ' . $delimiter . 'person_state_type_account.id_account_receivable' . $delimiter . ',id_account_payable as ' . $delimiter . 'person_state_type_account.id_account_payable' . $delimiter . ' from person_state_type_account';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_id_person_state_type()
{
	return $this->p_id_person_state_type;
}

public function get_id_person_state_type_original()
{
	return $this->p_id_person_state_type_original;
}

public function set_id_person_state_type($value)
{
	if ($this->p_id_person_state_type === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_state_type_is_dirty = true;
	$this->p_id_person_state_type = $value;
}

public function set_id_person_state_type_original($value)
{
	$this->p_id_person_state_type_original = $value;
}

public function get_id_person_state_type_is_dirty()
{
	return $this->p_id_person_state_type_is_dirty;
}


public function get_id_chart_of_account()
{
	return $this->p_id_chart_of_account;
}

public function get_id_chart_of_account_original()
{
	return $this->p_id_chart_of_account_original;
}

public function set_id_chart_of_account($value)
{
	if ($this->p_id_chart_of_account === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_chart_of_account_is_dirty = true;
	$this->p_id_chart_of_account = $value;
}

public function set_id_chart_of_account_original($value)
{
	$this->p_id_chart_of_account_original = $value;
}

public function get_id_chart_of_account_is_dirty()
{
	return $this->p_id_chart_of_account_is_dirty;
}


public function get_id_account_receivable()
{
	return $this->p_id_account_receivable;
}

public function get_id_account_receivable_original()
{
	return $this->p_id_account_receivable_original;
}

public function set_id_account_receivable($value)
{
	if ($this->p_id_account_receivable === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_account_receivable_is_dirty = true;
	$this->p_id_account_receivable = $value;
}

public function set_id_account_receivable_original($value)
{
	$this->p_id_account_receivable_original = $value;
}

public function get_id_account_receivable_is_dirty()
{
	return $this->p_id_account_receivable_is_dirty;
}


public function get_id_account_payable()
{
	return $this->p_id_account_payable;
}

public function get_id_account_payable_original()
{
	return $this->p_id_account_payable_original;
}

public function set_id_account_payable($value)
{
	if ($this->p_id_account_payable === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_account_payable_is_dirty = true;
	$this->p_id_account_payable = $value;
}

public function set_id_account_payable_original($value)
{
	$this->p_id_account_payable_original = $value;
}

public function get_id_account_payable_is_dirty()
{
	return $this->p_id_account_payable_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_id_person_state_type_is_dirty = false;
	$this->p_id_chart_of_account_is_dirty = false;
	$this->p_id_account_receivable_is_dirty = false;
	$this->p_id_account_payable_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_person_state_type = $this->p_id_person_state_type_original;
		$this->p_id_chart_of_account = $this->p_id_chart_of_account_original;
		$this->p_id_account_receivable = $this->p_id_account_receivable_original;
		$this->p_id_account_payable = $this->p_id_account_payable_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "person_state_type_account.id":
					$this->set_id($val);
					break;
				case "person_state_type_account.id_person_state_type":
					$this->set_id_person_state_type($val);
					$this->set_id_person_state_type_original($val);
					break;
				case "person_state_type_account.id_chart_of_account":
					$this->set_id_chart_of_account($val);
					$this->set_id_chart_of_account_original($val);
					break;
				case "person_state_type_account.id_account_receivable":
					$this->set_id_account_receivable($val);
					$this->set_id_account_receivable_original($val);
					break;
				case "person_state_type_account.id_account_payable":
					$this->set_id_account_payable($val);
					$this->set_id_account_payable_original($val);
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
		$person_state_type_account = cls_table_factory::create_instance('person_state_type_account');
		$row = $db_manager->fetch_row($result);
		$person_state_type_account->fill($row);
		return $person_state_type_account;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_person_state_type_account.php');
		return cls_save_person_state_type_account::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_person_state_type_account.php');
		return cls_save_person_state_type_account::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_person_state_type_accounts($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('person_state_type_account',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('person_state_type_account',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_state_type_account = cls_table_factory::create_instance('person_state_type_account');
				$person_state_type_account->fill($row);
				$data[] = $person_state_type_account;
			}
		return $data;
	}

function get_account_payable($db_manager,$application)
	{
		$result = $db_manager->get_records('account',$this->get_id_account_payable());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$account = cls_table_factory::create_instance('account');
		$row = $db_manager->fetch_row($result);
		$account->fill($row);
		return $account;
	}

function get_account_receivable($db_manager,$application)
	{
		$result = $db_manager->get_records('account',$this->get_id_account_receivable());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$account = cls_table_factory::create_instance('account');
		$row = $db_manager->fetch_row($result);
		$account->fill($row);
		return $account;
	}

function get_chart_of_account($db_manager,$application)
	{
		$result = $db_manager->get_records('chart_of_account',$this->get_id_chart_of_account());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$chart_of_account = cls_table_factory::create_instance('chart_of_account');
		$row = $db_manager->fetch_row($result);
		$chart_of_account->fill($row);
		return $chart_of_account;
	}

function get_person_state_type($db_manager,$application)
	{
		$result = $db_manager->get_records('person_state_type',$this->get_id_person_state_type());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person_state_type = cls_table_factory::create_instance('person_state_type');
		$row = $db_manager->fetch_row($result);
		$person_state_type->fill($row);
		return $person_state_type;
	}

public function get_address($person_state_type_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($person_state_type_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$person_state_type_accounts,'id_data');
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

public function get_communication_reason($person_state_type_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($person_state_type_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$person_state_type_accounts,'id_data');
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

public function get_data_change($person_state_type_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($person_state_type_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$person_state_type_accounts,'id_data');
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

public function get_data_help($person_state_type_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($person_state_type_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$person_state_type_accounts,'id_data');
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

public function get_data_location($person_state_type_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($person_state_type_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$person_state_type_accounts,'id_data');
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

public function get_data_posting($person_state_type_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($person_state_type_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$person_state_type_accounts,'id_data');
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

public function get_data_property($person_state_type_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($person_state_type_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$person_state_type_accounts,'id_data');
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

public function get_offer_event($person_state_type_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($person_state_type_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$person_state_type_accounts,'id_data');
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

public function get_supplier_data($person_state_type_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($person_state_type_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$person_state_type_accounts,'id_data');
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

public function get_table_test_data($person_state_type_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($person_state_type_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$person_state_type_accounts,'id_data');
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

public function get_data_translation($person_state_type_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($person_state_type_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$person_state_type_accounts,'id_data');
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

public function get_dms($person_state_type_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($person_state_type_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$person_state_type_accounts,'id_data');
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

public function get_data_relation_id_data1($person_state_type_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($person_state_type_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$person_state_type_accounts,'id_data1');
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

public function get_data_relation_id_data2($person_state_type_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($person_state_type_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$person_state_type_accounts,'id_data2');
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

public function get_data_property_id_link_data($person_state_type_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($person_state_type_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$person_state_type_accounts,'id_link_data');
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
