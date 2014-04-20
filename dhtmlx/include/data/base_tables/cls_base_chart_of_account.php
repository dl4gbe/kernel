<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_chart_of_account extends cls_datatable_base
{
private static $p_cmmon;
private $p_name = null;
private $p_name_original = null;
private $p_active = null;
private $p_active_original = null;

private $p_name_is_dirty = false;
private $p_active_is_dirty = false;

public function _get_table_name()
{
	return 'chart_of_account';
}

public function get_table_fields()
{
	return array('id','name','active');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'chart_of_account.id' . $delimiter . ',name as ' . $delimiter . 'chart_of_account.name' . $delimiter . ',active as ' . $delimiter . 'chart_of_account.active' . $delimiter . ' from chart_of_account';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
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


public function get_active()
{
	return $this->p_active;
}

public function get_active_original()
{
	return $this->p_active_original;
}

public function set_active($value)
{
	if ($this->p_active === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_active_is_dirty = true;
	$this->p_active = $value;
}

public function set_active_original($value)
{
	$this->p_active_original = $value;
}

public function get_active_is_dirty()
{
	return $this->p_active_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_name_is_dirty = false;
	$this->p_active_is_dirty = false;
	if ($reset_values)
	{
		$this->p_name = $this->p_name_original;
		$this->p_active = $this->p_active_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "chart_of_account.id":
					$this->set_id($val);
					break;
				case "chart_of_account.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "chart_of_account.active":
					$this->set_active($val);
					$this->set_active_original($val);
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
		$chart_of_account = cls_table_factory::create_instance('chart_of_account');
		$row = $db_manager->fetch_row($result);
		$chart_of_account->fill($row);
		return $chart_of_account;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_chart_of_account.php');
		return cls_save_chart_of_account::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_chart_of_account.php');
		return cls_save_chart_of_account::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_chart_of_accounts($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('chart_of_account',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('chart_of_account',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$chart_of_account = cls_table_factory::create_instance('chart_of_account');
				$chart_of_account->fill($row);
				$data[] = $chart_of_account;
			}
		return $data;
	}

//changed 1
public function get_person_state_type_account($db_manager,$application)
	{
		$result = $db_manager->get_records('person_state_type_account',$this->get_id(),'id_chart_of_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person_state_type_account = cls_table_factory::create_instance('person_state_type_account');
		$row = $db_manager->fetch_row($result);
		$person_state_type_account->fill($row);
		return $person_state_type_account;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_person_state_type_accounts_by_chart_of_account($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('person_state_type_account',$this->get_id(),'id_chart_of_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_state_type_account = cls_table_factory::create_instance('person_state_type_account');
				$person_state_type_account->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $person_state_type_account;
				}
				else
				{
					$data[] = $person_state_type_account;
				}
			}
		return $data;
	}

public function get_multi_person_state_type_accounts_by_chart_of_account($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('person_state_type_account',$chart_of_accounts,'id_chart_of_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_state_type_account = cls_table_factory::create_instance('person_state_type_account');
				$person_state_type_account->fill($row);
				if (!array_key_exists($data[$row['id_chart_of_account']]))
				{
					$data[$row['id_chart_of_account']] = array();
				}
				$data[$row['id_chart_of_account']][] = $person_state_type_account;
			}
		return $data;
	}

//changed 1
public function get_account_group($db_manager,$application)
	{
		$result = $db_manager->get_records('account_group',$this->get_id(),'id_chart_of_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$account_group = cls_table_factory::create_instance('account_group');
		$row = $db_manager->fetch_row($result);
		$account_group->fill($row);
		return $account_group;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_account_groups_by_chart_of_account($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('account_group',$this->get_id(),'id_chart_of_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$account_group = cls_table_factory::create_instance('account_group');
				$account_group->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $account_group;
				}
				else
				{
					$data[] = $account_group;
				}
			}
		return $data;
	}

public function get_multi_account_groups_by_chart_of_account($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('account_group',$chart_of_accounts,'id_chart_of_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$account_group = cls_table_factory::create_instance('account_group');
				$account_group->fill($row);
				if (!array_key_exists($data[$row['id_chart_of_account']]))
				{
					$data[$row['id_chart_of_account']] = array();
				}
				$data[$row['id_chart_of_account']][] = $account_group;
			}
		return $data;
	}

//changed 1
public function get_article_group_account($db_manager,$application)
	{
		$result = $db_manager->get_records('article_group_account',$this->get_id(),'id_chart_of_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article_group_account = cls_table_factory::create_instance('article_group_account');
		$row = $db_manager->fetch_row($result);
		$article_group_account->fill($row);
		return $article_group_account;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_article_group_accounts_by_chart_of_account($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('article_group_account',$this->get_id(),'id_chart_of_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_group_account = cls_table_factory::create_instance('article_group_account');
				$article_group_account->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $article_group_account;
				}
				else
				{
					$data[] = $article_group_account;
				}
			}
		return $data;
	}

public function get_multi_article_group_accounts_by_chart_of_account($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('article_group_account',$chart_of_accounts,'id_chart_of_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_group_account = cls_table_factory::create_instance('article_group_account');
				$article_group_account->fill($row);
				if (!array_key_exists($data[$row['id_chart_of_account']]))
				{
					$data[$row['id_chart_of_account']] = array();
				}
				$data[$row['id_chart_of_account']][] = $article_group_account;
			}
		return $data;
	}

//changed 1
public function get_account_chart_of_account($db_manager,$application)
	{
		$result = $db_manager->get_records('account_chart_of_account',$this->get_id(),'id_chart_of_account');
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
public function get_account_chart_of_accounts_by_chart_of_account($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('account_chart_of_account',$this->get_id(),'id_chart_of_account');
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

public function get_multi_account_chart_of_accounts_by_chart_of_account($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('account_chart_of_account',$chart_of_accounts,'id_chart_of_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$account_chart_of_account = cls_table_factory::create_instance('account_chart_of_account');
				$account_chart_of_account->fill($row);
				if (!array_key_exists($data[$row['id_chart_of_account']]))
				{
					$data[$row['id_chart_of_account']] = array();
				}
				$data[$row['id_chart_of_account']][] = $account_chart_of_account;
			}
		return $data;
	}

//changed 1
public function get_fixed_asset_group_account($db_manager,$application)
	{
		$result = $db_manager->get_records('fixed_asset_group_account',$this->get_id(),'id_chart_of_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$fixed_asset_group_account = cls_table_factory::create_instance('fixed_asset_group_account');
		$row = $db_manager->fetch_row($result);
		$fixed_asset_group_account->fill($row);
		return $fixed_asset_group_account;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_fixed_asset_group_accounts_by_chart_of_account($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('fixed_asset_group_account',$this->get_id(),'id_chart_of_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$fixed_asset_group_account = cls_table_factory::create_instance('fixed_asset_group_account');
				$fixed_asset_group_account->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $fixed_asset_group_account;
				}
				else
				{
					$data[] = $fixed_asset_group_account;
				}
			}
		return $data;
	}

public function get_multi_fixed_asset_group_accounts_by_chart_of_account($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('fixed_asset_group_account',$chart_of_accounts,'id_chart_of_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$fixed_asset_group_account = cls_table_factory::create_instance('fixed_asset_group_account');
				$fixed_asset_group_account->fill($row);
				if (!array_key_exists($data[$row['id_chart_of_account']]))
				{
					$data[$row['id_chart_of_account']] = array();
				}
				$data[$row['id_chart_of_account']][] = $fixed_asset_group_account;
			}
		return $data;
	}

//changed 1
public function get_location($db_manager,$application)
	{
		$result = $db_manager->get_records('location',$this->get_id(),'id_chart_of_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$location = cls_table_factory::create_instance('location');
		$row = $db_manager->fetch_row($result);
		$location->fill($row);
		return $location;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_locations_by_chart_of_account($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('location',$this->get_id(),'id_chart_of_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$location = cls_table_factory::create_instance('location');
				$location->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $location;
				}
				else
				{
					$data[] = $location;
				}
			}
		return $data;
	}

public function get_multi_locations_by_chart_of_account($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('location',$chart_of_accounts,'id_chart_of_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$location = cls_table_factory::create_instance('location');
				$location->fill($row);
				if (!array_key_exists($data[$row['id_chart_of_account']]))
				{
					$data[$row['id_chart_of_account']] = array();
				}
				$data[$row['id_chart_of_account']][] = $location;
			}
		return $data;
	}

//changed 1
public function get_country_by_default($db_manager,$application)
	{
		$result = $db_manager->get_records('country',$this->get_id(),'id_chart_of_account_default');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$country = cls_table_factory::create_instance('country');
		$row = $db_manager->fetch_row($result);
		$country->fill($row);
		return $country;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_countrys_by_chart_of_account_default($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('country',$this->get_id(),'id_chart_of_account_default');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$country = cls_table_factory::create_instance('country');
				$country->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $country;
				}
				else
				{
					$data[] = $country;
				}
			}
		return $data;
	}

public function get_multi_countrys_by_chart_of_account_default($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('country',$chart_of_accounts,'id_chart_of_account_default');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$country = cls_table_factory::create_instance('country');
				$country->fill($row);
				if (!array_key_exists($data[$row['id_chart_of_account_default']]))
				{
					$data[$row['id_chart_of_account_default']] = array();
				}
				$data[$row['id_chart_of_account_default']][] = $country;
			}
		return $data;
	}

public function get_address($chart_of_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$chart_of_accounts,'id_data');
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

public function get_communication_reason($chart_of_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$chart_of_accounts,'id_data');
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

public function get_data_change($chart_of_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$chart_of_accounts,'id_data');
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

public function get_data_help($chart_of_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$chart_of_accounts,'id_data');
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

public function get_data_location($chart_of_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$chart_of_accounts,'id_data');
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

public function get_data_posting($chart_of_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$chart_of_accounts,'id_data');
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

public function get_data_property($chart_of_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$chart_of_accounts,'id_data');
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

public function get_offer_event($chart_of_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$chart_of_accounts,'id_data');
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

public function get_supplier_data($chart_of_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$chart_of_accounts,'id_data');
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

public function get_table_test_data($chart_of_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$chart_of_accounts,'id_data');
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

public function get_data_translation($chart_of_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$chart_of_accounts,'id_data');
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

public function get_dms($chart_of_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$chart_of_accounts,'id_data');
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

public function get_data_relation_id_data1($chart_of_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$chart_of_accounts,'id_data1');
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

public function get_data_relation_id_data2($chart_of_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$chart_of_accounts,'id_data2');
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

public function get_data_property_id_link_data($chart_of_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($chart_of_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$chart_of_accounts,'id_link_data');
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
