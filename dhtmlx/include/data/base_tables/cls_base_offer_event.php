<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_offer_event extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_event_type = null;
private $p_id_event_type_original = null;
private $p_id_offer = null;
private $p_id_offer_original = null;
private $p_id_person = null;
private $p_id_person_original = null;
private $p_id_data = null;
private $p_id_data_original = null;
private $p_datefrom = null;
private $p_datefrom_original = null;
private $p_datetil = null;
private $p_datetil_original = null;
private $p_data1 = null;
private $p_data1_original = null;
private $p_data2 = null;
private $p_data2_original = null;
private $p_id_device = null;
private $p_id_device_original = null;
private $p_id_posting_header = null;
private $p_id_posting_header_original = null;

private $p_id_event_type_is_dirty = false;
private $p_id_offer_is_dirty = false;
private $p_id_person_is_dirty = false;
private $p_id_data_is_dirty = false;
private $p_datefrom_is_dirty = false;
private $p_datetil_is_dirty = false;
private $p_data1_is_dirty = false;
private $p_data2_is_dirty = false;
private $p_id_device_is_dirty = false;
private $p_id_posting_header_is_dirty = false;

public function _get_table_name()
{
	return 'offer_event';
}

public function get_table_fields()
{
	return array('id','id_event_type','id_offer','id_person','id_data','datefrom','datetil','data1','data2','id_device','id_posting_header');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'offer_event.id' . $delimiter . ',id_event_type as ' . $delimiter . 'offer_event.id_event_type' . $delimiter . ',id_offer as ' . $delimiter . 'offer_event.id_offer' . $delimiter . ',id_person as ' . $delimiter . 'offer_event.id_person' . $delimiter . ',id_data as ' . $delimiter . 'offer_event.id_data' . $delimiter . ',datefrom as ' . $delimiter . 'offer_event.datefrom' . $delimiter . ',datetil as ' . $delimiter . 'offer_event.datetil' . $delimiter . ',data1 as ' . $delimiter . 'offer_event.data1' . $delimiter . ',data2 as ' . $delimiter . 'offer_event.data2' . $delimiter . ',id_device as ' . $delimiter . 'offer_event.id_device' . $delimiter . ',id_posting_header as ' . $delimiter . 'offer_event.id_posting_header' . $delimiter . ' from offer_event';
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


public function get_id_offer()
{
	return $this->p_id_offer;
}

public function get_id_offer_original()
{
	return $this->p_id_offer_original;
}

public function set_id_offer($value)
{
	if ($this->p_id_offer === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_offer_is_dirty = true;
	$this->p_id_offer = $value;
}

public function set_id_offer_original($value)
{
	$this->p_id_offer_original = $value;
}

public function get_id_offer_is_dirty()
{
	return $this->p_id_offer_is_dirty;
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


public function get_id_data()
{
	return $this->p_id_data;
}

public function get_id_data_original()
{
	return $this->p_id_data_original;
}

public function set_id_data($value)
{
	if ($this->p_id_data === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_data_is_dirty = true;
	$this->p_id_data = $value;
}

public function set_id_data_original($value)
{
	$this->p_id_data_original = $value;
}

public function get_id_data_is_dirty()
{
	return $this->p_id_data_is_dirty;
}


public function get_datefrom()
{
	return $this->p_datefrom;
}

public function get_datefrom_original()
{
	return $this->p_datefrom_original;
}

public function set_datefrom($value)
{
	if ($this->p_datefrom === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_datefrom_is_dirty = true;
	$this->p_datefrom = $value;
}

public function set_datefrom_original($value)
{
	$this->p_datefrom_original = $value;
}

public function get_datefrom_is_dirty()
{
	return $this->p_datefrom_is_dirty;
}


public function get_datetil()
{
	return $this->p_datetil;
}

public function get_datetil_original()
{
	return $this->p_datetil_original;
}

public function set_datetil($value)
{
	if ($this->p_datetil === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_datetil_is_dirty = true;
	$this->p_datetil = $value;
}

public function set_datetil_original($value)
{
	$this->p_datetil_original = $value;
}

public function get_datetil_is_dirty()
{
	return $this->p_datetil_is_dirty;
}


public function get_data1()
{
	return $this->p_data1;
}

public function get_data1_original()
{
	return $this->p_data1_original;
}

public function set_data1($value)
{
	if ($this->p_data1 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_data1_is_dirty = true;
	$this->p_data1 = $value;
}

public function set_data1_original($value)
{
	$this->p_data1_original = $value;
}

public function get_data1_is_dirty()
{
	return $this->p_data1_is_dirty;
}


public function get_data2()
{
	return $this->p_data2;
}

public function get_data2_original()
{
	return $this->p_data2_original;
}

public function set_data2($value)
{
	if ($this->p_data2 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_data2_is_dirty = true;
	$this->p_data2 = $value;
}

public function set_data2_original($value)
{
	$this->p_data2_original = $value;
}

public function get_data2_is_dirty()
{
	return $this->p_data2_is_dirty;
}


public function get_id_device()
{
	return $this->p_id_device;
}

public function get_id_device_original()
{
	return $this->p_id_device_original;
}

public function set_id_device($value)
{
	if ($this->p_id_device === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_device_is_dirty = true;
	$this->p_id_device = $value;
}

public function set_id_device_original($value)
{
	$this->p_id_device_original = $value;
}

public function get_id_device_is_dirty()
{
	return $this->p_id_device_is_dirty;
}


public function get_id_posting_header()
{
	return $this->p_id_posting_header;
}

public function get_id_posting_header_original()
{
	return $this->p_id_posting_header_original;
}

public function set_id_posting_header($value)
{
	if ($this->p_id_posting_header === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_posting_header_is_dirty = true;
	$this->p_id_posting_header = $value;
}

public function set_id_posting_header_original($value)
{
	$this->p_id_posting_header_original = $value;
}

public function get_id_posting_header_is_dirty()
{
	return $this->p_id_posting_header_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_id_event_type_is_dirty = false;
	$this->p_id_offer_is_dirty = false;
	$this->p_id_person_is_dirty = false;
	$this->p_id_data_is_dirty = false;
	$this->p_datefrom_is_dirty = false;
	$this->p_datetil_is_dirty = false;
	$this->p_data1_is_dirty = false;
	$this->p_data2_is_dirty = false;
	$this->p_id_device_is_dirty = false;
	$this->p_id_posting_header_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_event_type = $this->p_id_event_type_original;
		$this->p_id_offer = $this->p_id_offer_original;
		$this->p_id_person = $this->p_id_person_original;
		$this->p_id_data = $this->p_id_data_original;
		$this->p_datefrom = $this->p_datefrom_original;
		$this->p_datetil = $this->p_datetil_original;
		$this->p_data1 = $this->p_data1_original;
		$this->p_data2 = $this->p_data2_original;
		$this->p_id_device = $this->p_id_device_original;
		$this->p_id_posting_header = $this->p_id_posting_header_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "offer_event.id":
					$this->set_id($val);
					break;
				case "offer_event.id_event_type":
					$this->set_id_event_type($val);
					$this->set_id_event_type_original($val);
					break;
				case "offer_event.id_offer":
					$this->set_id_offer($val);
					$this->set_id_offer_original($val);
					break;
				case "offer_event.id_person":
					$this->set_id_person($val);
					$this->set_id_person_original($val);
					break;
				case "offer_event.id_data":
					$this->set_id_data($val);
					$this->set_id_data_original($val);
					break;
				case "offer_event.datefrom":
					$this->set_datefrom($val);
					$this->set_datefrom_original($val);
					break;
				case "offer_event.datetil":
					$this->set_datetil($val);
					$this->set_datetil_original($val);
					break;
				case "offer_event.data1":
					$this->set_data1($val);
					$this->set_data1_original($val);
					break;
				case "offer_event.data2":
					$this->set_data2($val);
					$this->set_data2_original($val);
					break;
				case "offer_event.id_device":
					$this->set_id_device($val);
					$this->set_id_device_original($val);
					break;
				case "offer_event.id_posting_header":
					$this->set_id_posting_header($val);
					$this->set_id_posting_header_original($val);
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
		$offer_event = cls_table_factory::create_instance('offer_event');
		$row = $db_manager->fetch_row($result);
		$offer_event->fill($row);
		return $offer_event;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_offer_event.php');
		return cls_save_offer_event::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_offer_event.php');
		return cls_save_offer_event::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_offer_events($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('offer_event',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('offer_event',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_event = cls_table_factory::create_instance('offer_event');
				$offer_event->fill($row);
				$data[] = $offer_event;
			}
		return $data;
	}

function get_device($db_manager,$application)
	{
		$result = $db_manager->get_records('device',$this->get_id_device());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$device = cls_table_factory::create_instance('device');
		$row = $db_manager->fetch_row($result);
		$device->fill($row);
		return $device;
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

function get_offer($db_manager,$application)
	{
		$result = $db_manager->get_records('offer',$this->get_id_offer());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$offer = cls_table_factory::create_instance('offer');
		$row = $db_manager->fetch_row($result);
		$offer->fill($row);
		return $offer;
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

function get_posting_header($db_manager,$application)
	{
		$result = $db_manager->get_records('posting_header',$this->get_id_posting_header());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$posting_header = cls_table_factory::create_instance('posting_header');
		$row = $db_manager->fetch_row($result);
		$posting_header->fill($row);
		return $posting_header;
	}

//changed 1
public function get_person_desease($db_manager,$application)
	{
		$result = $db_manager->get_records('person_desease',$this->get_id(),'id_offer_event');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person_desease = cls_table_factory::create_instance('person_desease');
		$row = $db_manager->fetch_row($result);
		$person_desease->fill($row);
		return $person_desease;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_person_deseases_by_offer_event($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('person_desease',$this->get_id(),'id_offer_event');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_desease = cls_table_factory::create_instance('person_desease');
				$person_desease->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $person_desease;
				}
				else
				{
					$data[] = $person_desease;
				}
			}
		return $data;
	}

public function get_multi_person_deseases_by_offer_event($offer_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('person_desease',$offer_events,'id_offer_event');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_desease = cls_table_factory::create_instance('person_desease');
				$person_desease->fill($row);
				if (!array_key_exists($data[$row['id_offer_event']]))
				{
					$data[$row['id_offer_event']] = array();
				}
				$data[$row['id_offer_event']][] = $person_desease;
			}
		return $data;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_posting_headers_by_offer_event($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('posting_header',$this->get_id(),'id_offer_event');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$posting_header = cls_table_factory::create_instance('posting_header');
				$posting_header->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $posting_header;
				}
				else
				{
					$data[] = $posting_header;
				}
			}
		return $data;
	}

public function get_multi_posting_headers_by_offer_event($offer_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('posting_header',$offer_events,'id_offer_event');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$posting_header = cls_table_factory::create_instance('posting_header');
				$posting_header->fill($row);
				if (!array_key_exists($data[$row['id_offer_event']]))
				{
					$data[$row['id_offer_event']] = array();
				}
				$data[$row['id_offer_event']][] = $posting_header;
			}
		return $data;
	}

public function get_address($offer_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($offer_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$offer_events,'id_data');
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

public function get_communication_reason($offer_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($offer_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$offer_events,'id_data');
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

public function get_data_change($offer_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($offer_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$offer_events,'id_data');
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

public function get_data_help($offer_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($offer_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$offer_events,'id_data');
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

public function get_data_location($offer_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($offer_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$offer_events,'id_data');
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

public function get_data_posting($offer_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($offer_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$offer_events,'id_data');
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

public function get_data_property($offer_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($offer_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$offer_events,'id_data');
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

public function get_offer_event($offer_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($offer_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$offer_events,'id_data');
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

public function get_supplier_data($offer_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($offer_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$offer_events,'id_data');
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

public function get_table_test_data($offer_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($offer_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$offer_events,'id_data');
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

public function get_data_translation($offer_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($offer_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$offer_events,'id_data');
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

public function get_dms($offer_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($offer_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$offer_events,'id_data');
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

public function get_data_relation_id_data1($offer_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($offer_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$offer_events,'id_data1');
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

public function get_data_relation_id_data2($offer_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($offer_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$offer_events,'id_data2');
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

public function get_data_property_id_link_data($offer_events,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($offer_events,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$offer_events,'id_link_data');
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
