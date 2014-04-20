<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_offer_time extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_offer = null;
private $p_id_offer_original = null;
private $p_dayofweek = null;
private $p_dayofweek_original = null;
private $p_validfrom = null;
private $p_validfrom_original = null;
private $p_validtil = null;
private $p_validtil_original = null;
private $p_timefrom = null;
private $p_timefrom_original = null;
private $p_timetil = null;
private $p_timetil_original = null;
private $p_duration_in_minutes = null;
private $p_duration_in_minutes_original = null;
private $p_remark = null;
private $p_remark_original = null;

private $p_id_offer_is_dirty = false;
private $p_dayofweek_is_dirty = false;
private $p_validfrom_is_dirty = false;
private $p_validtil_is_dirty = false;
private $p_timefrom_is_dirty = false;
private $p_timetil_is_dirty = false;
private $p_duration_in_minutes_is_dirty = false;
private $p_remark_is_dirty = false;

public function _get_table_name()
{
	return 'offer_time';
}

public function get_table_fields()
{
	return array('id','id_offer','dayofweek','validfrom','validtil','timefrom','timetil','duration_in_minutes','remark');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'offer_time.id' . $delimiter . ',id_offer as ' . $delimiter . 'offer_time.id_offer' . $delimiter . ',dayofweek as ' . $delimiter . 'offer_time.dayofweek' . $delimiter . ',validfrom as ' . $delimiter . 'offer_time.validfrom' . $delimiter . ',validtil as ' . $delimiter . 'offer_time.validtil' . $delimiter . ',timefrom as ' . $delimiter . 'offer_time.timefrom' . $delimiter . ',timetil as ' . $delimiter . 'offer_time.timetil' . $delimiter . ',duration_in_minutes as ' . $delimiter . 'offer_time.duration_in_minutes' . $delimiter . ',remark as ' . $delimiter . 'offer_time.remark' . $delimiter . ' from offer_time';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
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


public function get_dayofweek()
{
	return $this->p_dayofweek;
}

public function get_dayofweek_original()
{
	return $this->p_dayofweek_original;
}

public function set_dayofweek($value)
{
	if ($this->p_dayofweek === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_dayofweek_is_dirty = true;
	$this->p_dayofweek = $value;
}

public function set_dayofweek_original($value)
{
	$this->p_dayofweek_original = $value;
}

public function get_dayofweek_is_dirty()
{
	return $this->p_dayofweek_is_dirty;
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


public function get_timefrom()
{
	return $this->p_timefrom;
}

public function get_timefrom_original()
{
	return $this->p_timefrom_original;
}

public function set_timefrom($value)
{
	if ($this->p_timefrom === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_timefrom_is_dirty = true;
	$this->p_timefrom = $value;
}

public function set_timefrom_original($value)
{
	$this->p_timefrom_original = $value;
}

public function get_timefrom_is_dirty()
{
	return $this->p_timefrom_is_dirty;
}


public function get_timetil()
{
	return $this->p_timetil;
}

public function get_timetil_original()
{
	return $this->p_timetil_original;
}

public function set_timetil($value)
{
	if ($this->p_timetil === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_timetil_is_dirty = true;
	$this->p_timetil = $value;
}

public function set_timetil_original($value)
{
	$this->p_timetil_original = $value;
}

public function get_timetil_is_dirty()
{
	return $this->p_timetil_is_dirty;
}


public function get_duration_in_minutes()
{
	return $this->p_duration_in_minutes;
}

public function get_duration_in_minutes_original()
{
	return $this->p_duration_in_minutes_original;
}

public function set_duration_in_minutes($value)
{
	if ($this->p_duration_in_minutes === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_duration_in_minutes_is_dirty = true;
	$this->p_duration_in_minutes = $value;
}

public function set_duration_in_minutes_original($value)
{
	$this->p_duration_in_minutes_original = $value;
}

public function get_duration_in_minutes_is_dirty()
{
	return $this->p_duration_in_minutes_is_dirty;
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


public function reset_dirty($reset_values = false)
{
	$this->p_id_offer_is_dirty = false;
	$this->p_dayofweek_is_dirty = false;
	$this->p_validfrom_is_dirty = false;
	$this->p_validtil_is_dirty = false;
	$this->p_timefrom_is_dirty = false;
	$this->p_timetil_is_dirty = false;
	$this->p_duration_in_minutes_is_dirty = false;
	$this->p_remark_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_offer = $this->p_id_offer_original;
		$this->p_dayofweek = $this->p_dayofweek_original;
		$this->p_validfrom = $this->p_validfrom_original;
		$this->p_validtil = $this->p_validtil_original;
		$this->p_timefrom = $this->p_timefrom_original;
		$this->p_timetil = $this->p_timetil_original;
		$this->p_duration_in_minutes = $this->p_duration_in_minutes_original;
		$this->p_remark = $this->p_remark_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "offer_time.id":
					$this->set_id($val);
					break;
				case "offer_time.id_offer":
					$this->set_id_offer($val);
					$this->set_id_offer_original($val);
					break;
				case "offer_time.dayofweek":
					$this->set_dayofweek($val);
					$this->set_dayofweek_original($val);
					break;
				case "offer_time.validfrom":
					$this->set_validfrom($val);
					$this->set_validfrom_original($val);
					break;
				case "offer_time.validtil":
					$this->set_validtil($val);
					$this->set_validtil_original($val);
					break;
				case "offer_time.timefrom":
					$this->set_timefrom($val);
					$this->set_timefrom_original($val);
					break;
				case "offer_time.timetil":
					$this->set_timetil($val);
					$this->set_timetil_original($val);
					break;
				case "offer_time.duration_in_minutes":
					$this->set_duration_in_minutes($val);
					$this->set_duration_in_minutes_original($val);
					break;
				case "offer_time.remark":
					$this->set_remark($val);
					$this->set_remark_original($val);
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
		$offer_time = cls_table_factory::create_instance('offer_time');
		$row = $db_manager->fetch_row($result);
		$offer_time->fill($row);
		return $offer_time;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_offer_time.php');
		return cls_save_offer_time::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_offer_time.php');
		return cls_save_offer_time::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_offer_times($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('offer_time',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('offer_time',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_time = cls_table_factory::create_instance('offer_time');
				$offer_time->fill($row);
				$data[] = $offer_time;
			}
		return $data;
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

public function get_address($offer_times,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($offer_times,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$offer_times,'id_data');
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

public function get_communication_reason($offer_times,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($offer_times,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$offer_times,'id_data');
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

public function get_data_change($offer_times,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($offer_times,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$offer_times,'id_data');
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

public function get_data_help($offer_times,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($offer_times,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$offer_times,'id_data');
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

public function get_data_location($offer_times,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($offer_times,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$offer_times,'id_data');
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

public function get_data_posting($offer_times,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($offer_times,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$offer_times,'id_data');
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

public function get_data_property($offer_times,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($offer_times,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$offer_times,'id_data');
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

public function get_offer_event($offer_times,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($offer_times,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$offer_times,'id_data');
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

public function get_supplier_data($offer_times,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($offer_times,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$offer_times,'id_data');
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

public function get_table_test_data($offer_times,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($offer_times,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$offer_times,'id_data');
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

public function get_data_translation($offer_times,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($offer_times,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$offer_times,'id_data');
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

public function get_dms($offer_times,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($offer_times,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$offer_times,'id_data');
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

public function get_data_relation_id_data1($offer_times,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($offer_times,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$offer_times,'id_data1');
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

public function get_data_relation_id_data2($offer_times,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($offer_times,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$offer_times,'id_data2');
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

public function get_data_property_id_link_data($offer_times,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($offer_times,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$offer_times,'id_link_data');
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
