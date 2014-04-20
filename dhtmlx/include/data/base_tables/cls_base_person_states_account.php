<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_person_states_account extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_person_states = null;
private $p_id_person_states_original = null;
private $p_id_chart_of_account = null;
private $p_id_chart_of_account_original = null;
private $p_id_account_receivable = null;
private $p_id_account_receivable_original = null;
private $p_id_account_payable = null;
private $p_id_account_payable_original = null;

private $p_id_person_states_is_dirty = false;
private $p_id_chart_of_account_is_dirty = false;
private $p_id_account_receivable_is_dirty = false;
private $p_id_account_payable_is_dirty = false;

public function get_table_name()
{
	return 'person_states_account';
}

public function get_table_fields()
{
	return array('id','id_person_states','id_chart_of_account','id_account_receivable','id_account_payable');
}

public function get_table_select($delimiter = "'")
{
	return 'select id as ' . $delimiter . 'person_states_account.id' . $delimiter . ',id_person_states as ' . $delimiter . 'person_states_account.id_person_states' . $delimiter . ',id_chart_of_account as ' . $delimiter . 'person_states_account.id_chart_of_account' . $delimiter . ',id_account_receivable as ' . $delimiter . 'person_states_account.id_account_receivable' . $delimiter . ',id_account_payable as ' . $delimiter . 'person_states_account.id_account_payable' . $delimiter . ' from person_states_account';
}


public function get_id_person_states()
{
	return $this->p_id_person_states;
}

public function get_id_person_states_original()
{
	return $this->p_id_person_states_original;
}

public function set_id_person_states($value)
{
	if ($this->p_id_person_states === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_states_is_dirty = true;
	$this->p_id_person_states = $value;
}

public function set_id_person_states_original($value)
{
	$this->p_id_person_states_original = $value;
}

public function get_id_person_states_is_dirty()
{
	return $this->p_id_person_states_is_dirty;
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
	$this->p_id_person_states_is_dirty = false;
	$this->p_id_chart_of_account_is_dirty = false;
	$this->p_id_account_receivable_is_dirty = false;
	$this->p_id_account_payable_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_person_states = $this->p_id_person_states_original;
		$this->p_id_chart_of_account = $this->p_id_chart_of_account_original;
		$this->p_id_account_receivable = $this->p_id_account_receivable_original;
		$this->p_id_account_payable = $this->p_id_account_payable_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => &$val)
		{
		switch ($key)
			{
				case "person_states_account.id":
					$this->id = $val;
					$this->id_original = $val;
					break;
				case "person_states_account.id_person_states":
					$this->id_person_states = $val;
					$this->id_person_states_original = $val;
					break;
				case "person_states_account.id_chart_of_account":
					$this->id_chart_of_account = $val;
					$this->id_chart_of_account_original = $val;
					break;
				case "person_states_account.id_account_receivable":
					$this->id_account_receivable = $val;
					$this->id_account_receivable_original = $val;
					break;
				case "person_states_account.id_account_payable":
					$this->id_account_payable = $val;
					$this->id_account_payable_original = $val;
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
		require_once('/include/data/table_factory/cls_table_factory.php');
		$person_states_account = cls_table_factory::create_instance('person_states_account');
		$row = $db_manager->fetch_row($result);
		$person_states_account->fill($row);
		return $person_states_account;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_person_states_account.php');
		return cls_save_person_states_account::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_person_states_account.php');
		return cls_save_person_states_account::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}
}
?>
