<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_drupal_watchdog extends cls_datatable_base
{
private static $p_cmmon;
private $p_timestamp = null;
private $p_timestamp_original = null;
private $p_hostname = null;
private $p_hostname_original = null;
private $p_referer = null;
private $p_referer_original = null;
private $p_location = null;
private $p_location_original = null;
private $p_link = null;
private $p_link_original = null;
private $p_severity = null;
private $p_severity_original = null;
private $p_variables = null;
private $p_variables_original = null;
private $p_message = null;
private $p_message_original = null;
private $p_type = null;
private $p_type_original = null;
private $p_uid = null;
private $p_uid_original = null;
private $p_wid = null;
private $p_wid_original = null;

private $p_timestamp_is_dirty = false;
private $p_hostname_is_dirty = false;
private $p_referer_is_dirty = false;
private $p_location_is_dirty = false;
private $p_link_is_dirty = false;
private $p_severity_is_dirty = false;
private $p_variables_is_dirty = false;
private $p_message_is_dirty = false;
private $p_type_is_dirty = false;
private $p_uid_is_dirty = false;
private $p_wid_is_dirty = false;

public function _get_table_name()
{
	return 'drupal_watchdog';
}

public function get_table_fields()
{
	return array('id','timestamp','hostname','referer','location','link','severity','variables','message','type','uid','wid');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'drupal_watchdog.id' . $delimiter . ',timestamp as ' . $delimiter . 'drupal_watchdog.timestamp' . $delimiter . ',hostname as ' . $delimiter . 'drupal_watchdog.hostname' . $delimiter . ',referer as ' . $delimiter . 'drupal_watchdog.referer' . $delimiter . ',location as ' . $delimiter . 'drupal_watchdog.location' . $delimiter . ',link as ' . $delimiter . 'drupal_watchdog.link' . $delimiter . ',severity as ' . $delimiter . 'drupal_watchdog.severity' . $delimiter . ',variables as ' . $delimiter . 'drupal_watchdog.variables' . $delimiter . ',message as ' . $delimiter . 'drupal_watchdog.message' . $delimiter . ',type as ' . $delimiter . 'drupal_watchdog.type' . $delimiter . ',uid as ' . $delimiter . 'drupal_watchdog.uid' . $delimiter . ',wid as ' . $delimiter . 'drupal_watchdog.wid' . $delimiter . ' from drupal_watchdog';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_timestamp()
{
	return $this->p_timestamp;
}

public function get_timestamp_original()
{
	return $this->p_timestamp_original;
}

public function set_timestamp($value)
{
	if ($this->p_timestamp === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_timestamp_is_dirty = true;
	$this->p_timestamp = $value;
}

public function set_timestamp_original($value)
{
	$this->p_timestamp_original = $value;
}

public function get_timestamp_is_dirty()
{
	return $this->p_timestamp_is_dirty;
}


public function get_hostname()
{
	return $this->p_hostname;
}

public function get_hostname_original()
{
	return $this->p_hostname_original;
}

public function set_hostname($value)
{
	if ($this->p_hostname === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_hostname_is_dirty = true;
	$this->p_hostname = $value;
}

public function set_hostname_original($value)
{
	$this->p_hostname_original = $value;
}

public function get_hostname_is_dirty()
{
	return $this->p_hostname_is_dirty;
}


public function get_referer()
{
	return $this->p_referer;
}

public function get_referer_original()
{
	return $this->p_referer_original;
}

public function set_referer($value)
{
	if ($this->p_referer === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_referer_is_dirty = true;
	$this->p_referer = $value;
}

public function set_referer_original($value)
{
	$this->p_referer_original = $value;
}

public function get_referer_is_dirty()
{
	return $this->p_referer_is_dirty;
}


public function get_location()
{
	return $this->p_location;
}

public function get_location_original()
{
	return $this->p_location_original;
}

public function set_location($value)
{
	if ($this->p_location === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_location_is_dirty = true;
	$this->p_location = $value;
}

public function set_location_original($value)
{
	$this->p_location_original = $value;
}

public function get_location_is_dirty()
{
	return $this->p_location_is_dirty;
}


public function get_link()
{
	return $this->p_link;
}

public function get_link_original()
{
	return $this->p_link_original;
}

public function set_link($value)
{
	if ($this->p_link === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_link_is_dirty = true;
	$this->p_link = $value;
}

public function set_link_original($value)
{
	$this->p_link_original = $value;
}

public function get_link_is_dirty()
{
	return $this->p_link_is_dirty;
}


public function get_severity()
{
	return $this->p_severity;
}

public function get_severity_original()
{
	return $this->p_severity_original;
}

public function set_severity($value)
{
	if ($this->p_severity === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_severity_is_dirty = true;
	$this->p_severity = $value;
}

public function set_severity_original($value)
{
	$this->p_severity_original = $value;
}

public function get_severity_is_dirty()
{
	return $this->p_severity_is_dirty;
}


public function get_variables()
{
	return $this->p_variables;
}

public function get_variables_original()
{
	return $this->p_variables_original;
}

public function set_variables($value)
{
	if ($this->p_variables === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_variables_is_dirty = true;
	$this->p_variables = $value;
}

public function set_variables_original($value)
{
	$this->p_variables_original = $value;
}

public function get_variables_is_dirty()
{
	return $this->p_variables_is_dirty;
}


public function get_message()
{
	return $this->p_message;
}

public function get_message_original()
{
	return $this->p_message_original;
}

public function set_message($value)
{
	if ($this->p_message === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_message_is_dirty = true;
	$this->p_message = $value;
}

public function set_message_original($value)
{
	$this->p_message_original = $value;
}

public function get_message_is_dirty()
{
	return $this->p_message_is_dirty;
}


public function get_type()
{
	return $this->p_type;
}

public function get_type_original()
{
	return $this->p_type_original;
}

public function set_type($value)
{
	if ($this->p_type === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_type_is_dirty = true;
	$this->p_type = $value;
}

public function set_type_original($value)
{
	$this->p_type_original = $value;
}

public function get_type_is_dirty()
{
	return $this->p_type_is_dirty;
}


public function get_uid()
{
	return $this->p_uid;
}

public function get_uid_original()
{
	return $this->p_uid_original;
}

public function set_uid($value)
{
	if ($this->p_uid === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_uid_is_dirty = true;
	$this->p_uid = $value;
}

public function set_uid_original($value)
{
	$this->p_uid_original = $value;
}

public function get_uid_is_dirty()
{
	return $this->p_uid_is_dirty;
}


public function get_wid()
{
	return $this->p_wid;
}

public function get_wid_original()
{
	return $this->p_wid_original;
}

public function set_wid($value)
{
	if ($this->p_wid === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_wid_is_dirty = true;
	$this->p_wid = $value;
}

public function set_wid_original($value)
{
	$this->p_wid_original = $value;
}

public function get_wid_is_dirty()
{
	return $this->p_wid_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_timestamp_is_dirty = false;
	$this->p_hostname_is_dirty = false;
	$this->p_referer_is_dirty = false;
	$this->p_location_is_dirty = false;
	$this->p_link_is_dirty = false;
	$this->p_severity_is_dirty = false;
	$this->p_variables_is_dirty = false;
	$this->p_message_is_dirty = false;
	$this->p_type_is_dirty = false;
	$this->p_uid_is_dirty = false;
	$this->p_wid_is_dirty = false;
	if ($reset_values)
	{
		$this->p_timestamp = $this->p_timestamp_original;
		$this->p_hostname = $this->p_hostname_original;
		$this->p_referer = $this->p_referer_original;
		$this->p_location = $this->p_location_original;
		$this->p_link = $this->p_link_original;
		$this->p_severity = $this->p_severity_original;
		$this->p_variables = $this->p_variables_original;
		$this->p_message = $this->p_message_original;
		$this->p_type = $this->p_type_original;
		$this->p_uid = $this->p_uid_original;
		$this->p_wid = $this->p_wid_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "drupal_watchdog.id":
					$this->set_id($val);
					break;
				case "drupal_watchdog.timestamp":
					$this->set_timestamp($val);
					$this->set_timestamp_original($val);
					break;
				case "drupal_watchdog.hostname":
					$this->set_hostname($val);
					$this->set_hostname_original($val);
					break;
				case "drupal_watchdog.referer":
					$this->set_referer($val);
					$this->set_referer_original($val);
					break;
				case "drupal_watchdog.location":
					$this->set_location($val);
					$this->set_location_original($val);
					break;
				case "drupal_watchdog.link":
					$this->set_link($val);
					$this->set_link_original($val);
					break;
				case "drupal_watchdog.severity":
					$this->set_severity($val);
					$this->set_severity_original($val);
					break;
				case "drupal_watchdog.variables":
					$this->set_variables($val);
					$this->set_variables_original($val);
					break;
				case "drupal_watchdog.message":
					$this->set_message($val);
					$this->set_message_original($val);
					break;
				case "drupal_watchdog.type":
					$this->set_type($val);
					$this->set_type_original($val);
					break;
				case "drupal_watchdog.uid":
					$this->set_uid($val);
					$this->set_uid_original($val);
					break;
				case "drupal_watchdog.wid":
					$this->set_wid($val);
					$this->set_wid_original($val);
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
		$drupal_watchdog = cls_table_factory::create_instance('drupal_watchdog');
		$row = $db_manager->fetch_row($result);
		$drupal_watchdog->fill($row);
		return $drupal_watchdog;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_watchdog.php');
		return cls_save_drupal_watchdog::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_watchdog.php');
		return cls_save_drupal_watchdog::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_drupal_watchdogs($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('drupal_watchdog',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('drupal_watchdog',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$drupal_watchdog = cls_table_factory::create_instance('drupal_watchdog');
				$drupal_watchdog->fill($row);
				$data[] = $drupal_watchdog;
			}
		return $data;
	}

public function get_table_test_data($drupal_watchdogs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($drupal_watchdogs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$drupal_watchdogs,'id_data');
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

public function get_communication_reason($drupal_watchdogs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($drupal_watchdogs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$drupal_watchdogs,'id_data');
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

public function get_data_change($drupal_watchdogs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($drupal_watchdogs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$drupal_watchdogs,'id_data');
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

public function get_data_help($drupal_watchdogs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($drupal_watchdogs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$drupal_watchdogs,'id_data');
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

public function get_data_location($drupal_watchdogs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($drupal_watchdogs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$drupal_watchdogs,'id_data');
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

public function get_data_posting($drupal_watchdogs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($drupal_watchdogs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$drupal_watchdogs,'id_data');
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

public function get_offer_event($drupal_watchdogs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($drupal_watchdogs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$drupal_watchdogs,'id_data');
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

public function get_supplier_data($drupal_watchdogs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($drupal_watchdogs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$drupal_watchdogs,'id_data');
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

public function get_address($drupal_watchdogs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($drupal_watchdogs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$drupal_watchdogs,'id_data');
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

public function get_data_property($drupal_watchdogs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($drupal_watchdogs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_watchdogs,'id_data');
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

public function get_data_translation($drupal_watchdogs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($drupal_watchdogs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$drupal_watchdogs,'id_data');
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

public function get_dms($drupal_watchdogs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($drupal_watchdogs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$drupal_watchdogs,'id_data');
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

public function get_data_relation_id_data1($drupal_watchdogs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($drupal_watchdogs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_watchdogs,'id_data1');
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

public function get_data_relation_id_data2($drupal_watchdogs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($drupal_watchdogs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_watchdogs,'id_data2');
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

public function get_data_property_id_link_data($drupal_watchdogs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($drupal_watchdogs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_watchdogs,'id_link_data');
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
