<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_account extends cls_datatable_base
{
private static $p_cmmon;
private $p_name = null;
private $p_name_original = null;
private $p_accountno = null;
private $p_accountno_original = null;
private $p_id_account_chart_of_account = null;
private $p_id_account_chart_of_account_original = null;

private $p_name_is_dirty = false;
private $p_accountno_is_dirty = false;
private $p_id_account_chart_of_account_is_dirty = false;

public function _get_table_name()
{
	return 'account';
}

public function get_table_fields()
{
	return array('name','accountno','id_account_chart_of_account','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select name as ' . $delimiter . 'account.name' . $delimiter . ',accountno as ' . $delimiter . 'account.accountno' . $delimiter . ',id_account_chart_of_account as ' . $delimiter . 'account.id_account_chart_of_account' . $delimiter . ',id as ' . $delimiter . 'account.id' . $delimiter . ' from account';
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


public function get_id_account_chart_of_account()
{
	return $this->p_id_account_chart_of_account;
}

public function get_id_account_chart_of_account_original()
{
	return $this->p_id_account_chart_of_account_original;
}

public function set_id_account_chart_of_account($value)
{
	if ($this->p_id_account_chart_of_account === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_account_chart_of_account_is_dirty = true;
	$this->p_id_account_chart_of_account = $value;
}

public function set_id_account_chart_of_account_original($value)
{
	$this->p_id_account_chart_of_account_original = $value;
}

public function get_id_account_chart_of_account_is_dirty()
{
	return $this->p_id_account_chart_of_account_is_dirty;
}



public function reset_dirty($reset_values = false)
{
	$this->p_name_is_dirty = false;
	$this->p_accountno_is_dirty = false;
	$this->p_id_account_chart_of_account_is_dirty = false;
	if ($reset_values)
	{
		$this->p_name = $this->p_name_original;
		$this->p_accountno = $this->p_accountno_original;
		$this->p_id_account_chart_of_account = $this->p_id_account_chart_of_account_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "account.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "account.accountno":
					$this->set_accountno($val);
					$this->set_accountno_original($val);
					break;
				case "account.id_account_chart_of_account":
					$this->set_id_account_chart_of_account($val);
					$this->set_id_account_chart_of_account_original($val);
					break;
				case "account.id":
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
		$account = cls_table_factory::create_instance('account');
		$row = $db_manager->fetch_row($result);
		$account->fill($row);
		return $account;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_account.php');
		return cls_save_account::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_account.php');
		return cls_save_account::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_accounts($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('account',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('account',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$account = cls_table_factory::create_instance('account');
				$account->fill($row);
				$data[] = $account;
			}
		return $data;
	}

function get_account_chart_of_account($db_manager,$application)
	{
		$result = $db_manager->get_records('account_chart_of_account',$this->get_id_account_chart_of_account());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$account_chart_of_account = cls_table_factory::create_instance('account_chart_of_account');
		$row = $db_manager->fetch_row($result);
		$account_chart_of_account->fill($row);
		return $account_chart_of_account;
	}

//changed 1
public function get_account_bankaccount($db_manager,$application)
	{
		$result = $db_manager->get_records('account_bankaccount',$this->get_id(),'id_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$account_bankaccount = cls_table_factory::create_instance('account_bankaccount');
		$row = $db_manager->fetch_row($result);
		$account_bankaccount->fill($row);
		return $account_bankaccount;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_account_bankaccounts_by_account($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('account_bankaccount',$this->get_id(),'id_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$account_bankaccount = cls_table_factory::create_instance('account_bankaccount');
				$account_bankaccount->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $account_bankaccount;
				}
				else
				{
					$data[] = $account_bankaccount;
				}
			}
		return $data;
	}

public function get_multi_account_bankaccounts_by_account($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('account_bankaccount',$accounts,'id_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$account_bankaccount = cls_table_factory::create_instance('account_bankaccount');
				$account_bankaccount->fill($row);
				if (!array_key_exists($data[$row['id_account']]))
				{
					$data[$row['id_account']] = array();
				}
				$data[$row['id_account']][] = $account_bankaccount;
			}
		return $data;
	}

//changed 1
public function get_posting_line($db_manager,$application)
	{
		$result = $db_manager->get_records('posting_line',$this->get_id(),'id_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$posting_line = cls_table_factory::create_instance('posting_line');
		$row = $db_manager->fetch_row($result);
		$posting_line->fill($row);
		return $posting_line;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_posting_lines_by_account($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('posting_line',$this->get_id(),'id_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$posting_line = cls_table_factory::create_instance('posting_line');
				$posting_line->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $posting_line;
				}
				else
				{
					$data[] = $posting_line;
				}
			}
		return $data;
	}

public function get_multi_posting_lines_by_account($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('posting_line',$accounts,'id_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$posting_line = cls_table_factory::create_instance('posting_line');
				$posting_line->fill($row);
				if (!array_key_exists($data[$row['id_account']]))
				{
					$data[$row['id_account']] = array();
				}
				$data[$row['id_account']][] = $posting_line;
			}
		return $data;
	}

//changed 1
public function get_fixed_asset_group_account_by_asset($db_manager,$application)
	{
		$result = $db_manager->get_records('fixed_asset_group_account',$this->get_id(),'id_account_asset');
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
public function get_fixed_asset_group_accounts_by_account_asset($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('fixed_asset_group_account',$this->get_id(),'id_account_asset');
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

public function get_multi_fixed_asset_group_accounts_by_account_asset($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('fixed_asset_group_account',$accounts,'id_account_asset');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$fixed_asset_group_account = cls_table_factory::create_instance('fixed_asset_group_account');
				$fixed_asset_group_account->fill($row);
				if (!array_key_exists($data[$row['id_account_asset']]))
				{
					$data[$row['id_account_asset']] = array();
				}
				$data[$row['id_account_asset']][] = $fixed_asset_group_account;
			}
		return $data;
	}

//changed 1
public function get_account_match_by_chart_of_account1($db_manager,$application)
	{
		$result = $db_manager->get_records('account_match',$this->get_id(),'id_account_chart_of_account1');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$account_match = cls_table_factory::create_instance('account_match');
		$row = $db_manager->fetch_row($result);
		$account_match->fill($row);
		return $account_match;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_account_matchs_by_account_chart_of_account1($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('account_match',$this->get_id(),'id_account_chart_of_account1');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$account_match = cls_table_factory::create_instance('account_match');
				$account_match->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $account_match;
				}
				else
				{
					$data[] = $account_match;
				}
			}
		return $data;
	}

public function get_multi_account_matchs_by_account_chart_of_account1($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('account_match',$accounts,'id_account_chart_of_account1');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$account_match = cls_table_factory::create_instance('account_match');
				$account_match->fill($row);
				if (!array_key_exists($data[$row['id_account_chart_of_account1']]))
				{
					$data[$row['id_account_chart_of_account1']] = array();
				}
				$data[$row['id_account_chart_of_account1']][] = $account_match;
			}
		return $data;
	}

//changed 1
public function get_account_match_by_chart_of_account2($db_manager,$application)
	{
		$result = $db_manager->get_records('account_match',$this->get_id(),'id_account_chart_of_account2');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$account_match = cls_table_factory::create_instance('account_match');
		$row = $db_manager->fetch_row($result);
		$account_match->fill($row);
		return $account_match;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_account_matchs_by_account_chart_of_account2($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('account_match',$this->get_id(),'id_account_chart_of_account2');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$account_match = cls_table_factory::create_instance('account_match');
				$account_match->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $account_match;
				}
				else
				{
					$data[] = $account_match;
				}
			}
		return $data;
	}

public function get_multi_account_matchs_by_account_chart_of_account2($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('account_match',$accounts,'id_account_chart_of_account2');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$account_match = cls_table_factory::create_instance('account_match');
				$account_match->fill($row);
				if (!array_key_exists($data[$row['id_account_chart_of_account2']]))
				{
					$data[$row['id_account_chart_of_account2']] = array();
				}
				$data[$row['id_account_chart_of_account2']][] = $account_match;
			}
		return $data;
	}

//changed 1
public function get_fixed_asset_group_account_by_depreciation($db_manager,$application)
	{
		$result = $db_manager->get_records('fixed_asset_group_account',$this->get_id(),'id_account_depreciation');
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
public function get_fixed_asset_group_accounts_by_account_depreciation($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('fixed_asset_group_account',$this->get_id(),'id_account_depreciation');
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

public function get_multi_fixed_asset_group_accounts_by_account_depreciation($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('fixed_asset_group_account',$accounts,'id_account_depreciation');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$fixed_asset_group_account = cls_table_factory::create_instance('fixed_asset_group_account');
				$fixed_asset_group_account->fill($row);
				if (!array_key_exists($data[$row['id_account_depreciation']]))
				{
					$data[$row['id_account_depreciation']] = array();
				}
				$data[$row['id_account_depreciation']][] = $fixed_asset_group_account;
			}
		return $data;
	}

//changed 1
public function get_article_group_account_by_expense_account($db_manager,$application)
	{
		$result = $db_manager->get_records('article_group_account',$this->get_id(),'id_account_expense_account');
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
public function get_article_group_accounts_by_account_expense_account($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('article_group_account',$this->get_id(),'id_account_expense_account');
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

public function get_multi_article_group_accounts_by_account_expense_account($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('article_group_account',$accounts,'id_account_expense_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_group_account = cls_table_factory::create_instance('article_group_account');
				$article_group_account->fill($row);
				if (!array_key_exists($data[$row['id_account_expense_account']]))
				{
					$data[$row['id_account_expense_account']] = array();
				}
				$data[$row['id_account_expense_account']][] = $article_group_account;
			}
		return $data;
	}

//changed 1
public function get_person_state_type_account_by_payable($db_manager,$application)
	{
		$result = $db_manager->get_records('person_state_type_account',$this->get_id(),'id_account_payable');
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
public function get_person_state_type_accounts_by_account_payable($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('person_state_type_account',$this->get_id(),'id_account_payable');
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

public function get_multi_person_state_type_accounts_by_account_payable($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('person_state_type_account',$accounts,'id_account_payable');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_state_type_account = cls_table_factory::create_instance('person_state_type_account');
				$person_state_type_account->fill($row);
				if (!array_key_exists($data[$row['id_account_payable']]))
				{
					$data[$row['id_account_payable']] = array();
				}
				$data[$row['id_account_payable']][] = $person_state_type_account;
			}
		return $data;
	}

//changed 1
public function get_person_account_by_payable($db_manager,$application)
	{
		$result = $db_manager->get_records('person_account',$this->get_id(),'id_account_payable');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person_account = cls_table_factory::create_instance('person_account');
		$row = $db_manager->fetch_row($result);
		$person_account->fill($row);
		return $person_account;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_person_accounts_by_account_payable($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('person_account',$this->get_id(),'id_account_payable');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_account = cls_table_factory::create_instance('person_account');
				$person_account->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $person_account;
				}
				else
				{
					$data[] = $person_account;
				}
			}
		return $data;
	}

public function get_multi_person_accounts_by_account_payable($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('person_account',$accounts,'id_account_payable');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_account = cls_table_factory::create_instance('person_account');
				$person_account->fill($row);
				if (!array_key_exists($data[$row['id_account_payable']]))
				{
					$data[$row['id_account_payable']] = array();
				}
				$data[$row['id_account_payable']][] = $person_account;
			}
		return $data;
	}

//changed 1
public function get_person_account_by_receivable($db_manager,$application)
	{
		$result = $db_manager->get_records('person_account',$this->get_id(),'id_account_receivable');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person_account = cls_table_factory::create_instance('person_account');
		$row = $db_manager->fetch_row($result);
		$person_account->fill($row);
		return $person_account;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_person_accounts_by_account_receivable($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('person_account',$this->get_id(),'id_account_receivable');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_account = cls_table_factory::create_instance('person_account');
				$person_account->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $person_account;
				}
				else
				{
					$data[] = $person_account;
				}
			}
		return $data;
	}

public function get_multi_person_accounts_by_account_receivable($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('person_account',$accounts,'id_account_receivable');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_account = cls_table_factory::create_instance('person_account');
				$person_account->fill($row);
				if (!array_key_exists($data[$row['id_account_receivable']]))
				{
					$data[$row['id_account_receivable']] = array();
				}
				$data[$row['id_account_receivable']][] = $person_account;
			}
		return $data;
	}

//changed 1
public function get_person_state_type_account_by_receivable($db_manager,$application)
	{
		$result = $db_manager->get_records('person_state_type_account',$this->get_id(),'id_account_receivable');
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
public function get_person_state_type_accounts_by_account_receivable($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('person_state_type_account',$this->get_id(),'id_account_receivable');
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

public function get_multi_person_state_type_accounts_by_account_receivable($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('person_state_type_account',$accounts,'id_account_receivable');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_state_type_account = cls_table_factory::create_instance('person_state_type_account');
				$person_state_type_account->fill($row);
				if (!array_key_exists($data[$row['id_account_receivable']]))
				{
					$data[$row['id_account_receivable']] = array();
				}
				$data[$row['id_account_receivable']][] = $person_state_type_account;
			}
		return $data;
	}

//changed 1
public function get_article_group_account_by_rent_revenue_account($db_manager,$application)
	{
		$result = $db_manager->get_records('article_group_account',$this->get_id(),'id_account_rent_revenue_account');
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
public function get_article_group_accounts_by_account_rent_revenue_account($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('article_group_account',$this->get_id(),'id_account_rent_revenue_account');
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

public function get_multi_article_group_accounts_by_account_rent_revenue_account($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('article_group_account',$accounts,'id_account_rent_revenue_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_group_account = cls_table_factory::create_instance('article_group_account');
				$article_group_account->fill($row);
				if (!array_key_exists($data[$row['id_account_rent_revenue_account']]))
				{
					$data[$row['id_account_rent_revenue_account']] = array();
				}
				$data[$row['id_account_rent_revenue_account']][] = $article_group_account;
			}
		return $data;
	}

//changed 1
public function get_article_group_account_by_revenue_account($db_manager,$application)
	{
		$result = $db_manager->get_records('article_group_account',$this->get_id(),'id_account_revenue_account');
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
public function get_article_group_accounts_by_account_revenue_account($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('article_group_account',$this->get_id(),'id_account_revenue_account');
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

public function get_multi_article_group_accounts_by_account_revenue_account($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('article_group_account',$accounts,'id_account_revenue_account');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_group_account = cls_table_factory::create_instance('article_group_account');
				$article_group_account->fill($row);
				if (!array_key_exists($data[$row['id_account_revenue_account']]))
				{
					$data[$row['id_account_revenue_account']] = array();
				}
				$data[$row['id_account_revenue_account']][] = $article_group_account;
			}
		return $data;
	}

public function get_table_test_data($accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$accounts,'id_data');
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

public function get_communication_reason($accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$accounts,'id_data');
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

public function get_data_change($accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$accounts,'id_data');
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

public function get_data_help($accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$accounts,'id_data');
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

public function get_data_location($accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$accounts,'id_data');
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

public function get_data_posting($accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$accounts,'id_data');
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

public function get_offer_event($accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$accounts,'id_data');
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

public function get_supplier_data($accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$accounts,'id_data');
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

public function get_address($accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$accounts,'id_data');
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

public function get_data_property($accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$accounts,'id_data');
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

public function get_data_translation($accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$accounts,'id_data');
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

public function get_dms($accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$accounts,'id_data');
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

public function get_data_relation_id_data1($accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$accounts,'id_data1');
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

public function get_data_relation_id_data2($accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$accounts,'id_data2');
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

public function get_data_property_id_link_data($accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$accounts,'id_link_data');
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
