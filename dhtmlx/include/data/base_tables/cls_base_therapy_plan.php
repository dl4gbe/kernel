<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_therapy_plan extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_therapy_plan_template = null;
private $p_id_therapy_plan_template_original = null;
private $p_id_person = null;
private $p_id_person_original = null;
private $p_id_person_employee_created = null;
private $p_id_person_employee_created_original = null;
private $p_create_date = null;
private $p_create_date_original = null;
private $p_valid_from = null;
private $p_valid_from_original = null;
private $p_valid_til = null;
private $p_valid_til_original = null;

private $p_id_therapy_plan_template_is_dirty = false;
private $p_id_person_is_dirty = false;
private $p_id_person_employee_created_is_dirty = false;
private $p_create_date_is_dirty = false;
private $p_valid_from_is_dirty = false;
private $p_valid_til_is_dirty = false;

public function _get_table_name()
{
	return 'therapy_plan';
}

public function get_table_fields()
{
	return array('id','id_therapy_plan_template','id_person','id_person_employee_created','create_date','valid_from','valid_til');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'therapy_plan.id' . $delimiter . ',id_therapy_plan_template as ' . $delimiter . 'therapy_plan.id_therapy_plan_template' . $delimiter . ',id_person as ' . $delimiter . 'therapy_plan.id_person' . $delimiter . ',id_person_employee_created as ' . $delimiter . 'therapy_plan.id_person_employee_created' . $delimiter . ',create_date as ' . $delimiter . 'therapy_plan.create_date' . $delimiter . ',valid_from as ' . $delimiter . 'therapy_plan.valid_from' . $delimiter . ',valid_til as ' . $delimiter . 'therapy_plan.valid_til' . $delimiter . ' from therapy_plan';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_id_therapy_plan_template()
{
	return $this->p_id_therapy_plan_template;
}

public function get_id_therapy_plan_template_original()
{
	return $this->p_id_therapy_plan_template_original;
}

public function set_id_therapy_plan_template($value)
{
	if ($this->p_id_therapy_plan_template === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_therapy_plan_template_is_dirty = true;
	$this->p_id_therapy_plan_template = $value;
}

public function set_id_therapy_plan_template_original($value)
{
	$this->p_id_therapy_plan_template_original = $value;
}

public function get_id_therapy_plan_template_is_dirty()
{
	return $this->p_id_therapy_plan_template_is_dirty;
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


public function get_id_person_employee_created()
{
	return $this->p_id_person_employee_created;
}

public function get_id_person_employee_created_original()
{
	return $this->p_id_person_employee_created_original;
}

public function set_id_person_employee_created($value)
{
	if ($this->p_id_person_employee_created === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_employee_created_is_dirty = true;
	$this->p_id_person_employee_created = $value;
}

public function set_id_person_employee_created_original($value)
{
	$this->p_id_person_employee_created_original = $value;
}

public function get_id_person_employee_created_is_dirty()
{
	return $this->p_id_person_employee_created_is_dirty;
}


public function get_create_date()
{
	return $this->p_create_date;
}

public function get_create_date_original()
{
	return $this->p_create_date_original;
}

public function set_create_date($value)
{
	if ($this->p_create_date === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_create_date_is_dirty = true;
	$this->p_create_date = $value;
}

public function set_create_date_original($value)
{
	$this->p_create_date_original = $value;
}

public function get_create_date_is_dirty()
{
	return $this->p_create_date_is_dirty;
}


public function get_valid_from()
{
	return $this->p_valid_from;
}

public function get_valid_from_original()
{
	return $this->p_valid_from_original;
}

public function set_valid_from($value)
{
	if ($this->p_valid_from === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_valid_from_is_dirty = true;
	$this->p_valid_from = $value;
}

public function set_valid_from_original($value)
{
	$this->p_valid_from_original = $value;
}

public function get_valid_from_is_dirty()
{
	return $this->p_valid_from_is_dirty;
}


public function get_valid_til()
{
	return $this->p_valid_til;
}

public function get_valid_til_original()
{
	return $this->p_valid_til_original;
}

public function set_valid_til($value)
{
	if ($this->p_valid_til === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_valid_til_is_dirty = true;
	$this->p_valid_til = $value;
}

public function set_valid_til_original($value)
{
	$this->p_valid_til_original = $value;
}

public function get_valid_til_is_dirty()
{
	return $this->p_valid_til_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_id_therapy_plan_template_is_dirty = false;
	$this->p_id_person_is_dirty = false;
	$this->p_id_person_employee_created_is_dirty = false;
	$this->p_create_date_is_dirty = false;
	$this->p_valid_from_is_dirty = false;
	$this->p_valid_til_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_therapy_plan_template = $this->p_id_therapy_plan_template_original;
		$this->p_id_person = $this->p_id_person_original;
		$this->p_id_person_employee_created = $this->p_id_person_employee_created_original;
		$this->p_create_date = $this->p_create_date_original;
		$this->p_valid_from = $this->p_valid_from_original;
		$this->p_valid_til = $this->p_valid_til_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "therapy_plan.id":
					$this->set_id($val);
					break;
				case "therapy_plan.id_therapy_plan_template":
					$this->set_id_therapy_plan_template($val);
					$this->set_id_therapy_plan_template_original($val);
					break;
				case "therapy_plan.id_person":
					$this->set_id_person($val);
					$this->set_id_person_original($val);
					break;
				case "therapy_plan.id_person_employee_created":
					$this->set_id_person_employee_created($val);
					$this->set_id_person_employee_created_original($val);
					break;
				case "therapy_plan.create_date":
					$this->set_create_date($val);
					$this->set_create_date_original($val);
					break;
				case "therapy_plan.valid_from":
					$this->set_valid_from($val);
					$this->set_valid_from_original($val);
					break;
				case "therapy_plan.valid_til":
					$this->set_valid_til($val);
					$this->set_valid_til_original($val);
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
		$therapy_plan = cls_table_factory::create_instance('therapy_plan');
		$row = $db_manager->fetch_row($result);
		$therapy_plan->fill($row);
		return $therapy_plan;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_therapy_plan.php');
		return cls_save_therapy_plan::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_therapy_plan.php');
		return cls_save_therapy_plan::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_therapy_plans($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('therapy_plan',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('therapy_plan',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$therapy_plan = cls_table_factory::create_instance('therapy_plan');
				$therapy_plan->fill($row);
				$data[] = $therapy_plan;
			}
		return $data;
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

function get_person_employee_created($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person_employee_created());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

function get_therapy_plan_template($db_manager,$application)
	{
		$result = $db_manager->get_records('therapy_plan_template',$this->get_id_therapy_plan_template());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$therapy_plan_template = cls_table_factory::create_instance('therapy_plan_template');
		$row = $db_manager->fetch_row($result);
		$therapy_plan_template->fill($row);
		return $therapy_plan_template;
	}

public function get_address($therapy_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($therapy_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$therapy_plans,'id_data');
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

public function get_communication_reason($therapy_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($therapy_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$therapy_plans,'id_data');
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

public function get_data_change($therapy_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($therapy_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$therapy_plans,'id_data');
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

public function get_data_help($therapy_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($therapy_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$therapy_plans,'id_data');
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

public function get_data_location($therapy_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($therapy_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$therapy_plans,'id_data');
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

public function get_data_posting($therapy_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($therapy_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$therapy_plans,'id_data');
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

public function get_data_property($therapy_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($therapy_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$therapy_plans,'id_data');
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

public function get_offer_event($therapy_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($therapy_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$therapy_plans,'id_data');
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

public function get_supplier_data($therapy_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($therapy_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$therapy_plans,'id_data');
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

public function get_table_test_data($therapy_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($therapy_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$therapy_plans,'id_data');
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

public function get_data_translation($therapy_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($therapy_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$therapy_plans,'id_data');
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

public function get_dms($therapy_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($therapy_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$therapy_plans,'id_data');
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

public function get_data_relation_id_data1($therapy_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($therapy_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$therapy_plans,'id_data1');
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

public function get_data_relation_id_data2($therapy_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($therapy_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$therapy_plans,'id_data2');
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

public function get_data_property_id_link_data($therapy_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($therapy_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$therapy_plans,'id_link_data');
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
