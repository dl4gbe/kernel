<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_account_group extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_chart_of_account = null;
private $p_id_chart_of_account_original = null;
private $p_no = null;
private $p_no_original = null;
private $p_name = null;
private $p_name_original = null;
private $p_accountfrom = null;
private $p_accountfrom_original = null;
private $p_accounttil = null;
private $p_accounttil_original = null;
private $p_balancesheetaccount = null;
private $p_balancesheetaccount_original = null;
private $p_profitandlostaccount = null;
private $p_profitandlostaccount_original = null;

private $p_id_chart_of_account_is_dirty = false;
private $p_no_is_dirty = false;
private $p_name_is_dirty = false;
private $p_accountfrom_is_dirty = false;
private $p_accounttil_is_dirty = false;
private $p_balancesheetaccount_is_dirty = false;
private $p_profitandlostaccount_is_dirty = false;

public function _get_table_name()
{
	return 'account_group';
}

public function get_table_fields()
{
	return array('id','id_chart_of_account','no','name','accountfrom','accounttil','balancesheetaccount','profitandlostaccount');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'account_group.id' . $delimiter . ',id_chart_of_account as ' . $delimiter . 'account_group.id_chart_of_account' . $delimiter . ',no as ' . $delimiter . 'account_group.no' . $delimiter . ',name as ' . $delimiter . 'account_group.name' . $delimiter . ',accountfrom as ' . $delimiter . 'account_group.accountfrom' . $delimiter . ',accounttil as ' . $delimiter . 'account_group.accounttil' . $delimiter . ',balancesheetaccount as ' . $delimiter . 'account_group.balancesheetaccount' . $delimiter . ',profitandlostaccount as ' . $delimiter . 'account_group.profitandlostaccount' . $delimiter . ' from account_group';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
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


public function get_accountfrom()
{
	return $this->p_accountfrom;
}

public function get_accountfrom_original()
{
	return $this->p_accountfrom_original;
}

public function set_accountfrom($value)
{
	if ($this->p_accountfrom === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_accountfrom_is_dirty = true;
	$this->p_accountfrom = $value;
}

public function set_accountfrom_original($value)
{
	$this->p_accountfrom_original = $value;
}

public function get_accountfrom_is_dirty()
{
	return $this->p_accountfrom_is_dirty;
}


public function get_accounttil()
{
	return $this->p_accounttil;
}

public function get_accounttil_original()
{
	return $this->p_accounttil_original;
}

public function set_accounttil($value)
{
	if ($this->p_accounttil === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_accounttil_is_dirty = true;
	$this->p_accounttil = $value;
}

public function set_accounttil_original($value)
{
	$this->p_accounttil_original = $value;
}

public function get_accounttil_is_dirty()
{
	return $this->p_accounttil_is_dirty;
}


public function get_balancesheetaccount()
{
	return $this->p_balancesheetaccount;
}

public function get_balancesheetaccount_original()
{
	return $this->p_balancesheetaccount_original;
}

public function set_balancesheetaccount($value)
{
	if ($this->p_balancesheetaccount === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_balancesheetaccount_is_dirty = true;
	$this->p_balancesheetaccount = $value;
}

public function set_balancesheetaccount_original($value)
{
	$this->p_balancesheetaccount_original = $value;
}

public function get_balancesheetaccount_is_dirty()
{
	return $this->p_balancesheetaccount_is_dirty;
}


public function get_profitandlostaccount()
{
	return $this->p_profitandlostaccount;
}

public function get_profitandlostaccount_original()
{
	return $this->p_profitandlostaccount_original;
}

public function set_profitandlostaccount($value)
{
	if ($this->p_profitandlostaccount === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_profitandlostaccount_is_dirty = true;
	$this->p_profitandlostaccount = $value;
}

public function set_profitandlostaccount_original($value)
{
	$this->p_profitandlostaccount_original = $value;
}

public function get_profitandlostaccount_is_dirty()
{
	return $this->p_profitandlostaccount_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_id_chart_of_account_is_dirty = false;
	$this->p_no_is_dirty = false;
	$this->p_name_is_dirty = false;
	$this->p_accountfrom_is_dirty = false;
	$this->p_accounttil_is_dirty = false;
	$this->p_balancesheetaccount_is_dirty = false;
	$this->p_profitandlostaccount_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_chart_of_account = $this->p_id_chart_of_account_original;
		$this->p_no = $this->p_no_original;
		$this->p_name = $this->p_name_original;
		$this->p_accountfrom = $this->p_accountfrom_original;
		$this->p_accounttil = $this->p_accounttil_original;
		$this->p_balancesheetaccount = $this->p_balancesheetaccount_original;
		$this->p_profitandlostaccount = $this->p_profitandlostaccount_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "account_group.id":
					$this->set_id($val);
					break;
				case "account_group.id_chart_of_account":
					$this->set_id_chart_of_account($val);
					$this->set_id_chart_of_account_original($val);
					break;
				case "account_group.no":
					$this->set_no($val);
					$this->set_no_original($val);
					break;
				case "account_group.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "account_group.accountfrom":
					$this->set_accountfrom($val);
					$this->set_accountfrom_original($val);
					break;
				case "account_group.accounttil":
					$this->set_accounttil($val);
					$this->set_accounttil_original($val);
					break;
				case "account_group.balancesheetaccount":
					$this->set_balancesheetaccount($val);
					$this->set_balancesheetaccount_original($val);
					break;
				case "account_group.profitandlostaccount":
					$this->set_profitandlostaccount($val);
					$this->set_profitandlostaccount_original($val);
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
		$account_group = cls_table_factory::create_instance('account_group');
		$row = $db_manager->fetch_row($result);
		$account_group->fill($row);
		return $account_group;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_account_group.php');
		return cls_save_account_group::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_account_group.php');
		return cls_save_account_group::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_account_groups($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('account_group',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('account_group',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$account_group = cls_table_factory::create_instance('account_group');
				$account_group->fill($row);
				$data[] = $account_group;
			}
		return $data;
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

//changed 1
public function get_account_chart_of_account($db_manager,$application)
	{
		$result = $db_manager->get_records('account_chart_of_account',$this->get_id(),'id_account_group');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$account_chart_of_account = cls_table_factory::create_instance('account_chart_of_account');
		$row = $db_manager->fetch_row($result);
		$account_chart_of_account->fill($row);
		return $account_chart_of_account;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_account_chart_of_accounts_by_account_group($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('account_chart_of_account',$this->get_id(),'id_account_group');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$account_chart_of_account = cls_table_factory::create_instance('account_chart_of_account');
				$account_chart_of_account->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $account_chart_of_account;
				}
				else
				{
					$data[] = $account_chart_of_account;
				}
			}
		return $data;
	}

public function get_multi_account_chart_of_accounts_by_account_group($account_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('account_chart_of_account',$account_groups,'id_account_group');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$account_chart_of_account = cls_table_factory::create_instance('account_chart_of_account');
				$account_chart_of_account->fill($row);
				if (!array_key_exists($data[$row['id_account_group']]))
				{
					$data[$row['id_account_group']] = array();
				}
				$data[$row['id_account_group']][] = $account_chart_of_account;
			}
		return $data;
	}

public function get_address($account_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($account_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$account_groups,'id_data');
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

public function get_communication_reason($account_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($account_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$account_groups,'id_data');
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

public function get_data_change($account_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($account_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$account_groups,'id_data');
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

public function get_data_help($account_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($account_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$account_groups,'id_data');
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

public function get_data_location($account_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($account_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$account_groups,'id_data');
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

public function get_data_posting($account_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($account_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$account_groups,'id_data');
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

public function get_data_property($account_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($account_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$account_groups,'id_data');
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

public function get_offer_event($account_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($account_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$account_groups,'id_data');
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

public function get_supplier_data($account_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($account_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$account_groups,'id_data');
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

public function get_table_test_data($account_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($account_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$account_groups,'id_data');
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

public function get_data_translation($account_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($account_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$account_groups,'id_data');
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

public function get_dms($account_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($account_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$account_groups,'id_data');
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

public function get_data_relation_id_data1($account_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($account_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$account_groups,'id_data1');
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

public function get_data_relation_id_data2($account_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($account_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$account_groups,'id_data2');
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

public function get_data_property_id_link_data($account_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($account_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$account_groups,'id_link_data');
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
