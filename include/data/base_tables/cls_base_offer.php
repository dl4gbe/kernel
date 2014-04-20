<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_offer extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_person_employee = null;
private $p_id_person_employee_original = null;
private $p_validtil = null;
private $p_validtil_original = null;
private $p_validfrom = null;
private $p_validfrom_original = null;
private $p_positionnumber = null;
private $p_positionnumber_original = null;
private $p_id_offertype = null;
private $p_id_offertype_original = null;
private $p_no = null;
private $p_no_original = null;
private $p_name = null;
private $p_name_original = null;

private $p_id_person_employee_is_dirty = false;
private $p_validtil_is_dirty = false;
private $p_validfrom_is_dirty = false;
private $p_positionnumber_is_dirty = false;
private $p_id_offertype_is_dirty = false;
private $p_no_is_dirty = false;
private $p_name_is_dirty = false;

public function _get_table_name()
{
	return 'offer';
}

public function get_table_fields()
{
	return array('id_person_employee','validtil','validfrom','positionnumber','id_offertype','no','name','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select id_person_employee as ' . $delimiter . 'offer.id_person_employee' . $delimiter . ',validtil as ' . $delimiter . 'offer.validtil' . $delimiter . ',validfrom as ' . $delimiter . 'offer.validfrom' . $delimiter . ',positionnumber as ' . $delimiter . 'offer.positionnumber' . $delimiter . ',id_offertype as ' . $delimiter . 'offer.id_offertype' . $delimiter . ',no as ' . $delimiter . 'offer.no' . $delimiter . ',name as ' . $delimiter . 'offer.name' . $delimiter . ',id as ' . $delimiter . 'offer.id' . $delimiter . ' from offer';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
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


public function get_validtil()
{
	return $this->p_validtil;
}

public function get_validtil_original()
{
	return $this->p_validtil_original;
}

public function set_validtil($value)
{
	if ($this->p_validtil === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_validtil_is_dirty = true;
	$this->p_validtil = $value;
}

public function set_validtil_original($value)
{
	$this->p_validtil_original = $value;
}

public function get_validtil_is_dirty()
{
	return $this->p_validtil_is_dirty;
}


public function get_validfrom()
{
	return $this->p_validfrom;
}

public function get_validfrom_original()
{
	return $this->p_validfrom_original;
}

public function set_validfrom($value)
{
	if ($this->p_validfrom === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_validfrom_is_dirty = true;
	$this->p_validfrom = $value;
}

public function set_validfrom_original($value)
{
	$this->p_validfrom_original = $value;
}

public function get_validfrom_is_dirty()
{
	return $this->p_validfrom_is_dirty;
}


public function get_positionnumber()
{
	return $this->p_positionnumber;
}

public function get_positionnumber_original()
{
	return $this->p_positionnumber_original;
}

public function set_positionnumber($value)
{
	if ($this->p_positionnumber === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_positionnumber_is_dirty = true;
	$this->p_positionnumber = $value;
}

public function set_positionnumber_original($value)
{
	$this->p_positionnumber_original = $value;
}

public function get_positionnumber_is_dirty()
{
	return $this->p_positionnumber_is_dirty;
}


public function get_id_offertype()
{
	return $this->p_id_offertype;
}

public function get_id_offertype_original()
{
	return $this->p_id_offertype_original;
}

public function set_id_offertype($value)
{
	if ($this->p_id_offertype === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_offertype_is_dirty = true;
	$this->p_id_offertype = $value;
}

public function set_id_offertype_original($value)
{
	$this->p_id_offertype_original = $value;
}

public function get_id_offertype_is_dirty()
{
	return $this->p_id_offertype_is_dirty;
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



public function reset_dirty($reset_values = false)
{
	$this->p_id_person_employee_is_dirty = false;
	$this->p_validtil_is_dirty = false;
	$this->p_validfrom_is_dirty = false;
	$this->p_positionnumber_is_dirty = false;
	$this->p_id_offertype_is_dirty = false;
	$this->p_no_is_dirty = false;
	$this->p_name_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_person_employee = $this->p_id_person_employee_original;
		$this->p_validtil = $this->p_validtil_original;
		$this->p_validfrom = $this->p_validfrom_original;
		$this->p_positionnumber = $this->p_positionnumber_original;
		$this->p_id_offertype = $this->p_id_offertype_original;
		$this->p_no = $this->p_no_original;
		$this->p_name = $this->p_name_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "offer.id_person_employee":
					$this->set_id_person_employee($val);
					$this->set_id_person_employee_original($val);
					break;
				case "offer.validtil":
					$this->set_validtil($val);
					$this->set_validtil_original($val);
					break;
				case "offer.validfrom":
					$this->set_validfrom($val);
					$this->set_validfrom_original($val);
					break;
				case "offer.positionnumber":
					$this->set_positionnumber($val);
					$this->set_positionnumber_original($val);
					break;
				case "offer.id_offertype":
					$this->set_id_offertype($val);
					$this->set_id_offertype_original($val);
					break;
				case "offer.no":
					$this->set_no($val);
					$this->set_no_original($val);
					break;
				case "offer.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "offer.id":
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
		$offer = cls_table_factory::create_instance('offer');
		$row = $db_manager->fetch_row($result);
		$offer->fill($row);
		return $offer;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_offer.php');
		return cls_save_offer::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_offer.php');
		return cls_save_offer::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_offers($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('offer',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('offer',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer = cls_table_factory::create_instance('offer');
				$offer->fill($row);
				$data[] = $offer;
			}
		return $data;
	}

function get_offertype($db_manager,$application)
	{
		$result = $db_manager->get_records('offer',$this->get_id_offertype());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$offer = cls_table_factory::create_instance('offer');
		$row = $db_manager->fetch_row($result);
		$offer->fill($row);
		return $offer;
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

//changed 1
public function get_device_offer($db_manager,$application)
	{
		$result = $db_manager->get_records('device_offer',$this->get_id(),'id_offer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$device_offer = cls_table_factory::create_instance('device_offer');
		$row = $db_manager->fetch_row($result);
		$device_offer->fill($row);
		return $device_offer;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_device_offers_by_offer($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('device_offer',$this->get_id(),'id_offer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$device_offer = cls_table_factory::create_instance('device_offer');
				$device_offer->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $device_offer;
				}
				else
				{
					$data[] = $device_offer;
				}
			}
		return $data;
	}

public function get_multi_device_offers_by_offer($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('device_offer',$offers,'id_offer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$device_offer = cls_table_factory::create_instance('device_offer');
				$device_offer->fill($row);
				if (!array_key_exists($data[$row['id_offer']]))
				{
					$data[$row['id_offer']] = array();
				}
				$data[$row['id_offer']][] = $device_offer;
			}
		return $data;
	}

//changed 1
public function get_offer_event($db_manager,$application)
	{
		$result = $db_manager->get_records('offer_event',$this->get_id(),'id_offer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$offer_event = cls_table_factory::create_instance('offer_event');
		$row = $db_manager->fetch_row($result);
		$offer_event->fill($row);
		return $offer_event;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_offer_events_by_offer($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('offer_event',$this->get_id(),'id_offer');
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

public function get_multi_offer_events_by_offer($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$offers,'id_offer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_event = cls_table_factory::create_instance('offer_event');
				$offer_event->fill($row);
				if (!array_key_exists($data[$row['id_offer']]))
				{
					$data[$row['id_offer']] = array();
				}
				$data[$row['id_offer']][] = $offer_event;
			}
		return $data;
	}

//changed 1
public function get_offer_time($db_manager,$application)
	{
		$result = $db_manager->get_records('offer_time',$this->get_id(),'id_offer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$offer_time = cls_table_factory::create_instance('offer_time');
		$row = $db_manager->fetch_row($result);
		$offer_time->fill($row);
		return $offer_time;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_offer_times_by_offer($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('offer_time',$this->get_id(),'id_offer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_time = cls_table_factory::create_instance('offer_time');
				$offer_time->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $offer_time;
				}
				else
				{
					$data[] = $offer_time;
				}
			}
		return $data;
	}

public function get_multi_offer_times_by_offer($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_time',$offers,'id_offer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_time = cls_table_factory::create_instance('offer_time');
				$offer_time->fill($row);
				if (!array_key_exists($data[$row['id_offer']]))
				{
					$data[$row['id_offer']] = array();
				}
				$data[$row['id_offer']][] = $offer_time;
			}
		return $data;
	}

//changed 1
public function get_offer_by_type($db_manager,$application)
	{
		$result = $db_manager->get_records('offer',$this->get_id(),'id_offertype');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$offer = cls_table_factory::create_instance('offer');
		$row = $db_manager->fetch_row($result);
		$offer->fill($row);
		return $offer;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_offers_by_offertype($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('offer',$this->get_id(),'id_offertype');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer = cls_table_factory::create_instance('offer');
				$offer->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $offer;
				}
				else
				{
					$data[] = $offer;
				}
			}
		return $data;
	}

public function get_multi_offers_by_offertype($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer',$offers,'id_offertype');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer = cls_table_factory::create_instance('offer');
				$offer->fill($row);
				if (!array_key_exists($data[$row['id_offertype']]))
				{
					$data[$row['id_offertype']] = array();
				}
				$data[$row['id_offertype']][] = $offer;
			}
		return $data;
	}

public function get_table_test_data($offers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$offers,'id_data');
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

public function get_communication_reason($offers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$offers,'id_data');
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

public function get_data_change($offers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$offers,'id_data');
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

public function get_data_help($offers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$offers,'id_data');
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

public function get_data_location($offers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$offers,'id_data');
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

public function get_data_posting($offers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$offers,'id_data');
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

public function get_multi_offer_event($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$offers,'id_data');
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

public function get_supplier_data($offers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$offers,'id_data');
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

public function get_address($offers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$offers,'id_data');
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

public function get_data_property($offers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$offers,'id_data');
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

public function get_data_translation($offers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$offers,'id_data');
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

public function get_dms($offers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$offers,'id_data');
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

public function get_data_relation_id_data1($offers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$offers,'id_data1');
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

public function get_data_relation_id_data2($offers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$offers,'id_data2');
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

public function get_data_property_id_link_data($offers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($offers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$offers,'id_link_data');
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
