<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_article_group_account extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_account_rent_revenue_account = null;
private $p_id_account_rent_revenue_account_original = null;
private $p_id_account_expense_account = null;
private $p_id_account_expense_account_original = null;
private $p_id_account_revenue_account = null;
private $p_id_account_revenue_account_original = null;
private $p_id_chart_of_account = null;
private $p_id_chart_of_account_original = null;
private $p_id_article_group = null;
private $p_id_article_group_original = null;

private $p_id_account_rent_revenue_account_is_dirty = false;
private $p_id_account_expense_account_is_dirty = false;
private $p_id_account_revenue_account_is_dirty = false;
private $p_id_chart_of_account_is_dirty = false;
private $p_id_article_group_is_dirty = false;

public function _get_table_name()
{
	return 'article_group_account';
}

public function get_table_fields()
{
	return array('id_account_rent_revenue_account','id_account_expense_account','id_account_revenue_account','id_chart_of_account','id_article_group','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select id_account_rent_revenue_account as ' . $delimiter . 'article_group_account.id_account_rent_revenue_account' . $delimiter . ',id_account_expense_account as ' . $delimiter . 'article_group_account.id_account_expense_account' . $delimiter . ',id_account_revenue_account as ' . $delimiter . 'article_group_account.id_account_revenue_account' . $delimiter . ',id_chart_of_account as ' . $delimiter . 'article_group_account.id_chart_of_account' . $delimiter . ',id_article_group as ' . $delimiter . 'article_group_account.id_article_group' . $delimiter . ',id as ' . $delimiter . 'article_group_account.id' . $delimiter . ' from article_group_account';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}

public function get_id_account_rent_revenue_account()
{
	return $this->p_id_account_rent_revenue_account;
}

public function get_id_account_rent_revenue_account_original()
{
	return $this->p_id_account_rent_revenue_account_original;
}

public function set_id_account_rent_revenue_account($value)
{
	if ($this->p_id_account_rent_revenue_account === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_account_rent_revenue_account_is_dirty = true;
	$this->p_id_account_rent_revenue_account = $value;
}

public function set_id_account_rent_revenue_account_original($value)
{
	$this->p_id_account_rent_revenue_account_original = $value;
}

public function get_id_account_rent_revenue_account_is_dirty()
{
	return $this->p_id_account_rent_revenue_account_is_dirty;
}


public function get_id_account_expense_account()
{
	return $this->p_id_account_expense_account;
}

public function get_id_account_expense_account_original()
{
	return $this->p_id_account_expense_account_original;
}

public function set_id_account_expense_account($value)
{
	if ($this->p_id_account_expense_account === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_account_expense_account_is_dirty = true;
	$this->p_id_account_expense_account = $value;
}

public function set_id_account_expense_account_original($value)
{
	$this->p_id_account_expense_account_original = $value;
}

public function get_id_account_expense_account_is_dirty()
{
	return $this->p_id_account_expense_account_is_dirty;
}


public function get_id_account_revenue_account()
{
	return $this->p_id_account_revenue_account;
}

public function get_id_account_revenue_account_original()
{
	return $this->p_id_account_revenue_account_original;
}

public function set_id_account_revenue_account($value)
{
	if ($this->p_id_account_revenue_account === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_account_revenue_account_is_dirty = true;
	$this->p_id_account_revenue_account = $value;
}

public function set_id_account_revenue_account_original($value)
{
	$this->p_id_account_revenue_account_original = $value;
}

public function get_id_account_revenue_account_is_dirty()
{
	return $this->p_id_account_revenue_account_is_dirty;
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


public function get_id_article_group()
{
	return $this->p_id_article_group;
}

public function get_id_article_group_original()
{
	return $this->p_id_article_group_original;
}

public function set_id_article_group($value)
{
	if ($this->p_id_article_group === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_article_group_is_dirty = true;
	$this->p_id_article_group = $value;
}

public function set_id_article_group_original($value)
{
	$this->p_id_article_group_original = $value;
}

public function get_id_article_group_is_dirty()
{
	return $this->p_id_article_group_is_dirty;
}



public function reset_dirty($reset_values = false)
{
	$this->p_id_account_rent_revenue_account_is_dirty = false;
	$this->p_id_account_expense_account_is_dirty = false;
	$this->p_id_account_revenue_account_is_dirty = false;
	$this->p_id_chart_of_account_is_dirty = false;
	$this->p_id_article_group_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_account_rent_revenue_account = $this->p_id_account_rent_revenue_account_original;
		$this->p_id_account_expense_account = $this->p_id_account_expense_account_original;
		$this->p_id_account_revenue_account = $this->p_id_account_revenue_account_original;
		$this->p_id_chart_of_account = $this->p_id_chart_of_account_original;
		$this->p_id_article_group = $this->p_id_article_group_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "article_group_account.id_account_rent_revenue_account":
					$this->set_id_account_rent_revenue_account($val);
					$this->set_id_account_rent_revenue_account_original($val);
					break;
				case "article_group_account.id_account_expense_account":
					$this->set_id_account_expense_account($val);
					$this->set_id_account_expense_account_original($val);
					break;
				case "article_group_account.id_account_revenue_account":
					$this->set_id_account_revenue_account($val);
					$this->set_id_account_revenue_account_original($val);
					break;
				case "article_group_account.id_chart_of_account":
					$this->set_id_chart_of_account($val);
					$this->set_id_chart_of_account_original($val);
					break;
				case "article_group_account.id_article_group":
					$this->set_id_article_group($val);
					$this->set_id_article_group_original($val);
					break;
				case "article_group_account.id":
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
		$article_group_account = cls_table_factory::create_instance('article_group_account');
		$row = $db_manager->fetch_row($result);
		$article_group_account->fill($row);
		return $article_group_account;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_article_group_account.php');
		return cls_save_article_group_account::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_article_group_account.php');
		return cls_save_article_group_account::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_article_group_accounts($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('article_group_account',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('article_group_account',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_group_account = cls_table_factory::create_instance('article_group_account');
				$article_group_account->fill($row);
				$data[] = $article_group_account;
			}
		return $data;
	}

function get_account_expense_account($db_manager,$application)
	{
		$result = $db_manager->get_records('account',$this->get_id_account_expense_account());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$account = cls_table_factory::create_instance('account');
		$row = $db_manager->fetch_row($result);
		$account->fill($row);
		return $account;
	}

function get_account_rent_revenue_account($db_manager,$application)
	{
		$result = $db_manager->get_records('account',$this->get_id_account_rent_revenue_account());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$account = cls_table_factory::create_instance('account');
		$row = $db_manager->fetch_row($result);
		$account->fill($row);
		return $account;
	}

function get_account_revenue_account($db_manager,$application)
	{
		$result = $db_manager->get_records('account',$this->get_id_account_revenue_account());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$account = cls_table_factory::create_instance('account');
		$row = $db_manager->fetch_row($result);
		$account->fill($row);
		return $account;
	}

function get_article_group($db_manager,$application)
	{
		$result = $db_manager->get_records('article_group',$this->get_id_article_group());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article_group = cls_table_factory::create_instance('article_group');
		$row = $db_manager->fetch_row($result);
		$article_group->fill($row);
		return $article_group;
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

public function get_table_test_data($article_group_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($article_group_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$article_group_accounts,'id_data');
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

public function get_communication_reason($article_group_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($article_group_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$article_group_accounts,'id_data');
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

public function get_data_change($article_group_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($article_group_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$article_group_accounts,'id_data');
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

public function get_data_help($article_group_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($article_group_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$article_group_accounts,'id_data');
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

public function get_data_location($article_group_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($article_group_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$article_group_accounts,'id_data');
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

public function get_data_posting($article_group_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($article_group_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$article_group_accounts,'id_data');
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

public function get_offer_event($article_group_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($article_group_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$article_group_accounts,'id_data');
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

public function get_supplier_data($article_group_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($article_group_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$article_group_accounts,'id_data');
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

public function get_address($article_group_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($article_group_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$article_group_accounts,'id_data');
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

public function get_data_property($article_group_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($article_group_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$article_group_accounts,'id_data');
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

public function get_data_translation($article_group_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($article_group_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$article_group_accounts,'id_data');
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

public function get_dms($article_group_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($article_group_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$article_group_accounts,'id_data');
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

public function get_data_relation_id_data1($article_group_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($article_group_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$article_group_accounts,'id_data1');
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

public function get_data_relation_id_data2($article_group_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($article_group_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$article_group_accounts,'id_data2');
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

public function get_data_property_id_link_data($article_group_accounts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($article_group_accounts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$article_group_accounts,'id_link_data');
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
