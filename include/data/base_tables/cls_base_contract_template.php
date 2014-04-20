<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_contract_template extends cls_datatable_base
{
private static $p_cmmon;
private $p_calcdifferenceamount = null;
private $p_calcdifferenceamount_original = null;
private $p_id_contract_template_group = null;
private $p_id_contract_template_group_original = null;
private $p_maxsales = null;
private $p_maxsales_original = null;
private $p_active = null;
private $p_active_original = null;
private $p_name = null;
private $p_name_original = null;

private $p_calcdifferenceamount_is_dirty = false;
private $p_id_contract_template_group_is_dirty = false;
private $p_maxsales_is_dirty = false;
private $p_active_is_dirty = false;
private $p_name_is_dirty = false;

public function _get_table_name()
{
	return 'contract_template';
}

public function get_table_fields()
{
	return array('calcdifferenceamount','id_contract_template_group','maxsales','active','name','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select calcdifferenceamount as ' . $delimiter . 'contract_template.calcdifferenceamount' . $delimiter . ',id_contract_template_group as ' . $delimiter . 'contract_template.id_contract_template_group' . $delimiter . ',maxsales as ' . $delimiter . 'contract_template.maxsales' . $delimiter . ',active as ' . $delimiter . 'contract_template.active' . $delimiter . ',name as ' . $delimiter . 'contract_template.name' . $delimiter . ',id as ' . $delimiter . 'contract_template.id' . $delimiter . ' from contract_template';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}

public function get_calcdifferenceamount()
{
	return $this->p_calcdifferenceamount;
}

public function get_calcdifferenceamount_original()
{
	return $this->p_calcdifferenceamount_original;
}

public function set_calcdifferenceamount($value)
{
	if ($this->p_calcdifferenceamount === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_calcdifferenceamount_is_dirty = true;
	$this->p_calcdifferenceamount = $value;
}

public function set_calcdifferenceamount_original($value)
{
	$this->p_calcdifferenceamount_original = $value;
}

public function get_calcdifferenceamount_is_dirty()
{
	return $this->p_calcdifferenceamount_is_dirty;
}


public function get_id_contract_template_group()
{
	return $this->p_id_contract_template_group;
}

public function get_id_contract_template_group_original()
{
	return $this->p_id_contract_template_group_original;
}

public function set_id_contract_template_group($value)
{
	if ($this->p_id_contract_template_group === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_contract_template_group_is_dirty = true;
	$this->p_id_contract_template_group = $value;
}

public function set_id_contract_template_group_original($value)
{
	$this->p_id_contract_template_group_original = $value;
}

public function get_id_contract_template_group_is_dirty()
{
	return $this->p_id_contract_template_group_is_dirty;
}


public function get_maxsales()
{
	return $this->p_maxsales;
}

public function get_maxsales_original()
{
	return $this->p_maxsales_original;
}

public function set_maxsales($value)
{
	if ($this->p_maxsales === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_maxsales_is_dirty = true;
	$this->p_maxsales = $value;
}

public function set_maxsales_original($value)
{
	$this->p_maxsales_original = $value;
}

public function get_maxsales_is_dirty()
{
	return $this->p_maxsales_is_dirty;
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



public function reset_dirty($reset_values = false)
{
	$this->p_calcdifferenceamount_is_dirty = false;
	$this->p_id_contract_template_group_is_dirty = false;
	$this->p_maxsales_is_dirty = false;
	$this->p_active_is_dirty = false;
	$this->p_name_is_dirty = false;
	if ($reset_values)
	{
		$this->p_calcdifferenceamount = $this->p_calcdifferenceamount_original;
		$this->p_id_contract_template_group = $this->p_id_contract_template_group_original;
		$this->p_maxsales = $this->p_maxsales_original;
		$this->p_active = $this->p_active_original;
		$this->p_name = $this->p_name_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "contract_template.calcdifferenceamount":
					$this->set_calcdifferenceamount($val);
					$this->set_calcdifferenceamount_original($val);
					break;
				case "contract_template.id_contract_template_group":
					$this->set_id_contract_template_group($val);
					$this->set_id_contract_template_group_original($val);
					break;
				case "contract_template.maxsales":
					$this->set_maxsales($val);
					$this->set_maxsales_original($val);
					break;
				case "contract_template.active":
					$this->set_active($val);
					$this->set_active_original($val);
					break;
				case "contract_template.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "contract_template.id":
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
		$contract_template = cls_table_factory::create_instance('contract_template');
		$row = $db_manager->fetch_row($result);
		$contract_template->fill($row);
		return $contract_template;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_contract_template.php');
		return cls_save_contract_template::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_contract_template.php');
		return cls_save_contract_template::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_contract_templates($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('contract_template',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('contract_template',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_template = cls_table_factory::create_instance('contract_template');
				$contract_template->fill($row);
				$data[] = $contract_template;
			}
		return $data;
	}

function get_contract_template_group($db_manager,$application)
	{
		$result = $db_manager->get_records('contract_template_group',$this->get_id_contract_template_group());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$contract_template_group = cls_table_factory::create_instance('contract_template_group');
		$row = $db_manager->fetch_row($result);
		$contract_template_group->fill($row);
		return $contract_template_group;
	}

//changed 1
public function get_contract($db_manager,$application)
	{
		$result = $db_manager->get_records('contract',$this->get_id(),'id_contract_template');
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
public function get_contracts_by_contract_template($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('contract',$this->get_id(),'id_contract_template');
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

public function get_multi_contracts_by_contract_template($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('contract',$contract_templates,'id_contract_template');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract = cls_table_factory::create_instance('contract');
				$contract->fill($row);
				if (!array_key_exists($data[$row['id_contract_template']]))
				{
					$data[$row['id_contract_template']] = array();
				}
				$data[$row['id_contract_template']][] = $contract;
			}
		return $data;
	}

//changed 1
public function get_contract_template_onetimepayment($db_manager,$application)
	{
		$result = $db_manager->get_records('contract_template_onetimepayment',$this->get_id(),'id_contract_template');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$contract_template_onetimepayment = cls_table_factory::create_instance('contract_template_onetimepayment');
		$row = $db_manager->fetch_row($result);
		$contract_template_onetimepayment->fill($row);
		return $contract_template_onetimepayment;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_contract_template_onetimepayments_by_contract_template($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('contract_template_onetimepayment',$this->get_id(),'id_contract_template');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_template_onetimepayment = cls_table_factory::create_instance('contract_template_onetimepayment');
				$contract_template_onetimepayment->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $contract_template_onetimepayment;
				}
				else
				{
					$data[] = $contract_template_onetimepayment;
				}
			}
		return $data;
	}

public function get_multi_contract_template_onetimepayments_by_contract_template($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('contract_template_onetimepayment',$contract_templates,'id_contract_template');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_template_onetimepayment = cls_table_factory::create_instance('contract_template_onetimepayment');
				$contract_template_onetimepayment->fill($row);
				if (!array_key_exists($data[$row['id_contract_template']]))
				{
					$data[$row['id_contract_template']] = array();
				}
				$data[$row['id_contract_template']][] = $contract_template_onetimepayment;
			}
		return $data;
	}

//changed 1
public function get_contract_template_pos($db_manager,$application)
	{
		$result = $db_manager->get_records('contract_template_pos',$this->get_id(),'id_contract_template');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$contract_template_pos = cls_table_factory::create_instance('contract_template_pos');
		$row = $db_manager->fetch_row($result);
		$contract_template_pos->fill($row);
		return $contract_template_pos;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_contract_template_poss_by_contract_template($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('contract_template_pos',$this->get_id(),'id_contract_template');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_template_pos = cls_table_factory::create_instance('contract_template_pos');
				$contract_template_pos->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $contract_template_pos;
				}
				else
				{
					$data[] = $contract_template_pos;
				}
			}
		return $data;
	}

public function get_multi_contract_template_poss_by_contract_template($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('contract_template_pos',$contract_templates,'id_contract_template');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_template_pos = cls_table_factory::create_instance('contract_template_pos');
				$contract_template_pos->fill($row);
				if (!array_key_exists($data[$row['id_contract_template']]))
				{
					$data[$row['id_contract_template']] = array();
				}
				$data[$row['id_contract_template']][] = $contract_template_pos;
			}
		return $data;
	}

//changed 1
public function get_person_state_type($db_manager,$application)
	{
		$result = $db_manager->get_records('person_state_type',$this->get_id(),'id_contract_template');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person_state_type = cls_table_factory::create_instance('person_state_type');
		$row = $db_manager->fetch_row($result);
		$person_state_type->fill($row);
		return $person_state_type;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_person_state_types_by_contract_template($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('person_state_type',$this->get_id(),'id_contract_template');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_state_type = cls_table_factory::create_instance('person_state_type');
				$person_state_type->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $person_state_type;
				}
				else
				{
					$data[] = $person_state_type;
				}
			}
		return $data;
	}

public function get_multi_person_state_types_by_contract_template($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('person_state_type',$contract_templates,'id_contract_template');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_state_type = cls_table_factory::create_instance('person_state_type');
				$person_state_type->fill($row);
				if (!array_key_exists($data[$row['id_contract_template']]))
				{
					$data[$row['id_contract_template']] = array();
				}
				$data[$row['id_contract_template']][] = $person_state_type;
			}
		return $data;
	}

public function get_table_test_data($contract_templates,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$contract_templates,'id_data');
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

public function get_communication_reason($contract_templates,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$contract_templates,'id_data');
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

public function get_data_change($contract_templates,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$contract_templates,'id_data');
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

public function get_data_help($contract_templates,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$contract_templates,'id_data');
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

public function get_data_location($contract_templates,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$contract_templates,'id_data');
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

public function get_data_posting($contract_templates,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$contract_templates,'id_data');
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

public function get_offer_event($contract_templates,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$contract_templates,'id_data');
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

public function get_supplier_data($contract_templates,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$contract_templates,'id_data');
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

public function get_address($contract_templates,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$contract_templates,'id_data');
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

public function get_data_property($contract_templates,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$contract_templates,'id_data');
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

public function get_data_translation($contract_templates,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$contract_templates,'id_data');
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

public function get_dms($contract_templates,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$contract_templates,'id_data');
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

public function get_data_relation_id_data1($contract_templates,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$contract_templates,'id_data1');
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

public function get_data_relation_id_data2($contract_templates,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$contract_templates,'id_data2');
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

public function get_data_property_id_link_data($contract_templates,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($contract_templates,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$contract_templates,'id_link_data');
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
