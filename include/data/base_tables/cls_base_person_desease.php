<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_person_desease extends cls_datatable_base
{
private static $p_cmmon;
private $p_remark = null;
private $p_remark_original = null;
private $p_quarter = null;
private $p_quarter_original = null;
private $p_issuedate = null;
private $p_issuedate_original = null;
private $p_id_person_employee = null;
private $p_id_person_employee_original = null;
private $p_state = null;
private $p_state_original = null;
private $p_id_offer_event = null;
private $p_id_offer_event_original = null;
private $p_id_desease = null;
private $p_id_desease_original = null;
private $p_id_person = null;
private $p_id_person_original = null;

private $p_remark_is_dirty = false;
private $p_quarter_is_dirty = false;
private $p_issuedate_is_dirty = false;
private $p_id_person_employee_is_dirty = false;
private $p_state_is_dirty = false;
private $p_id_offer_event_is_dirty = false;
private $p_id_desease_is_dirty = false;
private $p_id_person_is_dirty = false;

public function _get_table_name()
{
	return 'person_desease';
}

public function get_table_fields()
{
	return array('remark','quarter','issuedate','id_person_employee','state','id_offer_event','id_desease','id_person','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select remark as ' . $delimiter . 'person_desease.remark' . $delimiter . ',quarter as ' . $delimiter . 'person_desease.quarter' . $delimiter . ',issuedate as ' . $delimiter . 'person_desease.issuedate' . $delimiter . ',id_person_employee as ' . $delimiter . 'person_desease.id_person_employee' . $delimiter . ',state as ' . $delimiter . 'person_desease.state' . $delimiter . ',id_offer_event as ' . $delimiter . 'person_desease.id_offer_event' . $delimiter . ',id_desease as ' . $delimiter . 'person_desease.id_desease' . $delimiter . ',id_person as ' . $delimiter . 'person_desease.id_person' . $delimiter . ',id as ' . $delimiter . 'person_desease.id' . $delimiter . ' from person_desease';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
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


public function get_quarter()
{
	return $this->p_quarter;
}

public function get_quarter_original()
{
	return $this->p_quarter_original;
}

public function set_quarter($value)
{
	if ($this->p_quarter === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_quarter_is_dirty = true;
	$this->p_quarter = $value;
}

public function set_quarter_original($value)
{
	$this->p_quarter_original = $value;
}

public function get_quarter_is_dirty()
{
	return $this->p_quarter_is_dirty;
}


public function get_issuedate()
{
	return $this->p_issuedate;
}

public function get_issuedate_original()
{
	return $this->p_issuedate_original;
}

public function set_issuedate($value)
{
	if ($this->p_issuedate === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_issuedate_is_dirty = true;
	$this->p_issuedate = $value;
}

public function set_issuedate_original($value)
{
	$this->p_issuedate_original = $value;
}

public function get_issuedate_is_dirty()
{
	return $this->p_issuedate_is_dirty;
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


public function get_state()
{
	return $this->p_state;
}

public function get_state_original()
{
	return $this->p_state_original;
}

public function set_state($value)
{
	if ($this->p_state === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_state_is_dirty = true;
	$this->p_state = $value;
}

public function set_state_original($value)
{
	$this->p_state_original = $value;
}

public function get_state_is_dirty()
{
	return $this->p_state_is_dirty;
}


public function get_id_offer_event()
{
	return $this->p_id_offer_event;
}

public function get_id_offer_event_original()
{
	return $this->p_id_offer_event_original;
}

public function set_id_offer_event($value)
{
	if ($this->p_id_offer_event === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_offer_event_is_dirty = true;
	$this->p_id_offer_event = $value;
}

public function set_id_offer_event_original($value)
{
	$this->p_id_offer_event_original = $value;
}

public function get_id_offer_event_is_dirty()
{
	return $this->p_id_offer_event_is_dirty;
}


public function get_id_desease()
{
	return $this->p_id_desease;
}

public function get_id_desease_original()
{
	return $this->p_id_desease_original;
}

public function set_id_desease($value)
{
	if ($this->p_id_desease === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_desease_is_dirty = true;
	$this->p_id_desease = $value;
}

public function set_id_desease_original($value)
{
	$this->p_id_desease_original = $value;
}

public function get_id_desease_is_dirty()
{
	return $this->p_id_desease_is_dirty;
}


public function get_id_person()
{
	return $this->p_id_person;
}

public function get_id_person_original()
{
	return $this->p_id_person_original;
}

public function set_id_person($value)
{
	if ($this->p_id_person === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_is_dirty = true;
	$this->p_id_person = $value;
}

public function set_id_person_original($value)
{
	$this->p_id_person_original = $value;
}

public function get_id_person_is_dirty()
{
	return $this->p_id_person_is_dirty;
}



public function reset_dirty($reset_values = false)
{
	$this->p_remark_is_dirty = false;
	$this->p_quarter_is_dirty = false;
	$this->p_issuedate_is_dirty = false;
	$this->p_id_person_employee_is_dirty = false;
	$this->p_state_is_dirty = false;
	$this->p_id_offer_event_is_dirty = false;
	$this->p_id_desease_is_dirty = false;
	$this->p_id_person_is_dirty = false;
	if ($reset_values)
	{
		$this->p_remark = $this->p_remark_original;
		$this->p_quarter = $this->p_quarter_original;
		$this->p_issuedate = $this->p_issuedate_original;
		$this->p_id_person_employee = $this->p_id_person_employee_original;
		$this->p_state = $this->p_state_original;
		$this->p_id_offer_event = $this->p_id_offer_event_original;
		$this->p_id_desease = $this->p_id_desease_original;
		$this->p_id_person = $this->p_id_person_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "person_desease.remark":
					$this->set_remark($val);
					$this->set_remark_original($val);
					break;
				case "person_desease.quarter":
					$this->set_quarter($val);
					$this->set_quarter_original($val);
					break;
				case "person_desease.issuedate":
					$this->set_issuedate($val);
					$this->set_issuedate_original($val);
					break;
				case "person_desease.id_person_employee":
					$this->set_id_person_employee($val);
					$this->set_id_person_employee_original($val);
					break;
				case "person_desease.state":
					$this->set_state($val);
					$this->set_state_original($val);
					break;
				case "person_desease.id_offer_event":
					$this->set_id_offer_event($val);
					$this->set_id_offer_event_original($val);
					break;
				case "person_desease.id_desease":
					$this->set_id_desease($val);
					$this->set_id_desease_original($val);
					break;
				case "person_desease.id_person":
					$this->set_id_person($val);
					$this->set_id_person_original($val);
					break;
				case "person_desease.id":
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
		$person_desease = cls_table_factory::create_instance('person_desease');
		$row = $db_manager->fetch_row($result);
		$person_desease->fill($row);
		return $person_desease;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_person_desease.php');
		return cls_save_person_desease::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_person_desease.php');
		return cls_save_person_desease::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_person_deseases($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('person_desease',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('person_desease',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_desease = cls_table_factory::create_instance('person_desease');
				$person_desease->fill($row);
				$data[] = $person_desease;
			}
		return $data;
	}

function get_desease($db_manager,$application)
	{
		$result = $db_manager->get_records('desease',$this->get_id_desease());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$desease = cls_table_factory::create_instance('desease');
		$row = $db_manager->fetch_row($result);
		$desease->fill($row);
		return $desease;
	}

function get_offer_event($db_manager,$application)
	{
		$result = $db_manager->get_records('offer_event',$this->get_id_offer_event());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$offer_event = cls_table_factory::create_instance('offer_event');
		$row = $db_manager->fetch_row($result);
		$offer_event->fill($row);
		return $offer_event;
	}

function get_person($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
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

public function get_table_test_data($person_deseases,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($person_deseases,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$person_deseases,'id_data');
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

public function get_communication_reason($person_deseases,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($person_deseases,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$person_deseases,'id_data');
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

public function get_data_change($person_deseases,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($person_deseases,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$person_deseases,'id_data');
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

public function get_data_help($person_deseases,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($person_deseases,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$person_deseases,'id_data');
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

public function get_data_location($person_deseases,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($person_deseases,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$person_deseases,'id_data');
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

public function get_data_posting($person_deseases,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($person_deseases,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$person_deseases,'id_data');
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

public function get_multi_offer_event($person_deseases,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$person_deseases,'id_data');
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

public function get_supplier_data($person_deseases,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($person_deseases,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$person_deseases,'id_data');
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

public function get_address($person_deseases,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($person_deseases,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$person_deseases,'id_data');
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

public function get_data_property($person_deseases,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($person_deseases,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$person_deseases,'id_data');
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

public function get_data_translation($person_deseases,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($person_deseases,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$person_deseases,'id_data');
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

public function get_dms($person_deseases,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($person_deseases,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$person_deseases,'id_data');
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

public function get_data_relation_id_data1($person_deseases,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($person_deseases,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$person_deseases,'id_data1');
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

public function get_data_relation_id_data2($person_deseases,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($person_deseases,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$person_deseases,'id_data2');
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

public function get_data_property_id_link_data($person_deseases,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($person_deseases,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$person_deseases,'id_link_data');
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
