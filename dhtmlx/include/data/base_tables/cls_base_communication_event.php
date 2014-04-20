<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_communication_event extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_event_type = null;
private $p_id_event_type_original = null;
private $p_id_person = null;
private $p_id_person_original = null;
private $p_id_communication = null;
private $p_id_communication_original = null;
private $p_id_person_employee_planned = null;
private $p_id_person_employee_planned_original = null;
private $p_plandate = null;
private $p_plandate_original = null;
private $p_id_person_employee_done = null;
private $p_id_person_employee_done_original = null;
private $p_donedate = null;
private $p_donedate_original = null;
private $p_remark = null;
private $p_remark_original = null;
private $p_id_communication_event_previous = null;
private $p_id_communication_event_previous_original = null;
private $p_state = null;
private $p_state_original = null;

private $p_id_event_type_is_dirty = false;
private $p_id_person_is_dirty = false;
private $p_id_communication_is_dirty = false;
private $p_id_person_employee_planned_is_dirty = false;
private $p_plandate_is_dirty = false;
private $p_id_person_employee_done_is_dirty = false;
private $p_donedate_is_dirty = false;
private $p_remark_is_dirty = false;
private $p_id_communication_event_previous_is_dirty = false;
private $p_state_is_dirty = false;

public function _get_table_name()
{
	return 'communication_event';
}

public function get_table_fields()
{
	return array('id','id_event_type','id_person','id_communication','id_person_employee_planned','plandate','id_person_employee_done','donedate','remark','id_communication_event_previous','state');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'communication_event.id' . $delimiter . ',id_event_type as ' . $delimiter . 'communication_event.id_event_type' . $delimiter . ',id_person as ' . $delimiter . 'communication_event.id_person' . $delimiter . ',id_communication as ' . $delimiter . 'communication_event.id_communication' . $delimiter . ',id_person_employee_planned as ' . $delimiter . 'communication_event.id_person_employee_planned' . $delimiter . ',plandate as ' . $delimiter . 'communication_event.plandate' . $delimiter . ',id_person_employee_done as ' . $delimiter . 'communication_event.id_person_employee_done' . $delimiter . ',donedate as ' . $delimiter . 'communication_event.donedate' . $delimiter . ',remark as ' . $delimiter . 'communication_event.remark' . $delimiter . ',id_communication_event_previous as ' . $delimiter . 'communication_event.id_communication_event_previous' . $delimiter . ',state as ' . $delimiter . 'communication_event.state' . $delimiter . ' from communication_event';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_id_event_type()
{
	return $this->p_id_event_type;
}

public function get_id_event_type_original()
{
	return $this->p_id_event_type_original;
}

public function set_id_event_type($value)
{
	if ($this->p_id_event_type === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_event_type_is_dirty = true;
	$this->p_id_event_type = $value;
}

public function set_id_event_type_original($value)
{
	$this->p_id_event_type_original = $value;
}

public function get_id_event_type_is_dirty()
{
	return $this->p_id_event_type_is_dirty;
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


public function get_id_communication()
{
	return $this->p_id_communication;
}

public function get_id_communication_original()
{
	return $this->p_id_communication_original;
}

public function set_id_communication($value)
{
	if ($this->p_id_communication === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_communication_is_dirty = true;
	$this->p_id_communication = $value;
}

public function set_id_communication_original($value)
{
	$this->p_id_communication_original = $value;
}

public function get_id_communication_is_dirty()
{
	return $this->p_id_communication_is_dirty;
}


public function get_id_person_employee_planned()
{
	return $this->p_id_person_employee_planned;
}

public function get_id_person_employee_planned_original()
{
	return $this->p_id_person_employee_planned_original;
}

public function set_id_person_employee_planned($value)
{
	if ($this->p_id_person_employee_planned === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_employee_planned_is_dirty = true;
	$this->p_id_person_employee_planned = $value;
}

public function set_id_person_employee_planned_original($value)
{
	$this->p_id_person_employee_planned_original = $value;
}

public function get_id_person_employee_planned_is_dirty()
{
	return $this->p_id_person_employee_planned_is_dirty;
}


public function get_plandate()
{
	return $this->p_plandate;
}

public function get_plandate_original()
{
	return $this->p_plandate_original;
}

public function set_plandate($value)
{
	if ($this->p_plandate === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_plandate_is_dirty = true;
	$this->p_plandate = $value;
}

public function set_plandate_original($value)
{
	$this->p_plandate_original = $value;
}

public function get_plandate_is_dirty()
{
	return $this->p_plandate_is_dirty;
}


public function get_id_person_employee_done()
{
	return $this->p_id_person_employee_done;
}

public function get_id_person_employee_done_original()
{
	return $this->p_id_person_employee_done_original;
}

public function set_id_person_employee_done($value)
{
	if ($this->p_id_person_employee_done === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_employee_done_is_dirty = true;
	$this->p_id_person_employee_done = $value;
}

public function set_id_person_employee_done_original($value)
{
	$this->p_id_person_employee_done_original = $value;
}

public function get_id_person_employee_done_is_dirty()
{
	return $this->p_id_person_employee_done_is_dirty;
}


public function get_donedate()
{
	return $this->p_donedate;
}

public function get_donedate_original()
{
	return $this->p_donedate_original;
}

public function set_donedate($value)
{
	if ($this->p_donedate === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_donedate_is_dirty = true;
	$this->p_donedate = $value;
}

public function set_donedate_original($value)
{
	$this->p_donedate_original = $value;
}

public function get_donedate_is_dirty()
{
	return $this->p_donedate_is_dirty;
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


public function get_id_communication_event_previous()
{
	return $this->p_id_communication_event_previous;
}

public function get_id_communication_event_previous_original()
{
	return $this->p_id_communication_event_previous_original;
}

public function set_id_communication_event_previous($value)
{
	if ($this->p_id_communication_event_previous === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_communication_event_previous_is_dirty = true;
	$this->p_id_communication_event_previous = $value;
}

public function set_id_communication_event_previous_original($value)
{
	$this->p_id_communication_event_previous_original = $value;
}

public function get_id_communication_event_previous_is_dirty()
{
	return $this->p_id_communication_event_previous_is_dirty;
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


public function reset_dirty($reset_values = false)
{
	$this->p_id_event_type_is_dirty = false;
	$this->p_id_person_is_dirty = false;
	$this->p_id_communication_is_dirty = false;
	$this->p_id_person_employee_planned_is_dirty = false;
	$this->p_plandate_is_dirty = false;
	$this->p_id_person_employee_done_is_dirty = false;
	$this->p_donedate_is_dirty = false;
	$this->p_remark_is_dirty = false;
	$this->p_id_communication_event_previous_is_dirty = false;
	$this->p_state_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_event_type = $this->p_id_event_type_original;
		$this->p_id_person = $this->p_id_person_original;
		$this->p_id_communication = $this->p_id_communication_original;
		$this->p_id_person_employee_planned = $this->p_id_person_employee_planned_original;
		$this->p_plandate = $this->p_plandate_original;
		$this->p_id_person_employee_done = $this->p_id_person_employee_done_original;
		$this->p_donedate = $this->p_donedate_original;
		$this->p_remark = $this->p_remark_original;
		$this->p_id_communication_event_previous = $this->p_id_communication_event_previous_original;
		$this->p_state = $this->p_state_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "communication_event.id":
					$this->set_id($val);
					break;
				case "communication_event.id_event_type":
					$this->set_id_event_type($val);
					$this->set_id_event_type_original($val);
					break;
				case "communication_event.id_person":
					$this->set_id_person($val);
					$this->set_id_person_original($val);
					break;
				case "communication_event.id_communication":
					$this->set_id_communication($val);
					$this->set_id_communication_original($val);
					break;
				case "communication_event.id_person_employee_planned":
					$this->set_id_person_employee_planned($val);
					$this->set_id_person_employee_planned_original($val);
					break;
				case "communication_event.plandate":
					$this->set_plandate($val);
					$this->set_plandate_original($val);
					break;
				case "communication_event.id_person_employee_done":
					$this->set_id_person_employee_done($val);
					$this->set_id_person_employee_done_original($val);
					break;
				case "communication_event.donedate":
					$this->set_donedate($val);
					$this->set_donedate_original($val);
					break;
				case "communication_event.remark":
					$this->set_remark($val);
					$this->set_remark_original($val);
					break;
				case "communication_event.id_communication_event_previous":
					$this->set_id_communication_event_previous($val);
					$this->set_id_communication_event_previous_original($val);
					break;
				case "communication_event.state":
					$this->set_state($val);
					$this->set_state_original($val);
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
		$communication_event = cls_table_factory::create_instance('communication_event');
		$row = $db_manager->fetch_row($result);
		$communication_event->fill($row);
		return $communication_event;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_communication_event.php');
		return cls_save_communication_event::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_communication_event.php');
		return cls_save_communication_event::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_communication_events($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('communication_event',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('communication_event',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$communication_event = cls_table_factory::create_instance('communication_event');
				$communication_event->fill($row);
				$data[] = $communication_event;
			}
		return $data;
	}

function get_communication($db_manager,$application)
	{
		$result = $db_manager->get_records('communication',$this->get_id_communication());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$communication = cls_table_factory::create_instance('communication');
		$row = $db_manager->fetch_row($result);
		$communication->fill($row);
		return $communication;
	}

function get_communication_event_previous($db_manager,$application)
	{
		$result = $db_manager->get_records('communication',$this->get_id_communication_event_previous());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$communication = cls_table_factory::create_instance('communication');
		$row = $db_manager->fetch_row($result);
		$communication->fill($row);
		return $communication;
	}

function get_event_type($db_manager,$application)
	{
		$result = $db_manager->get_records('event_type',$this->get_id_event_type());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$event_type = cls_table_factory::create_instance('event_type');
		$row = $db_manager->fetch_row($result);
		$event_type->fill($row);
		return $event_type;
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

function get_person_employee_done($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person_employee_done());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

function get_person_employee_planned($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person_employee_planned());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

public function get_address($communication_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($communication_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$communication_events,'id_data');
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

public function get_communication_reason($communication_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($communication_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$communication_events,'id_data');
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

public function get_data_change($communication_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($communication_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$communication_events,'id_data');
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

public function get_data_help($communication_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($communication_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$communication_events,'id_data');
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

public function get_data_location($communication_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($communication_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$communication_events,'id_data');
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

public function get_data_posting($communication_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($communication_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$communication_events,'id_data');
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

public function get_data_property($communication_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($communication_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$communication_events,'id_data');
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

public function get_offer_event($communication_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($communication_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$communication_events,'id_data');
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

public function get_supplier_data($communication_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($communication_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$communication_events,'id_data');
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

public function get_table_test_data($communication_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($communication_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$communication_events,'id_data');
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

public function get_data_translation($communication_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($communication_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$communication_events,'id_data');
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

public function get_dms($communication_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($communication_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$communication_events,'id_data');
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

public function get_data_relation_id_data1($communication_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($communication_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$communication_events,'id_data1');
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

public function get_data_relation_id_data2($communication_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($communication_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$communication_events,'id_data2');
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

public function get_data_property_id_link_data($communication_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($communication_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$communication_events,'id_link_data');
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
