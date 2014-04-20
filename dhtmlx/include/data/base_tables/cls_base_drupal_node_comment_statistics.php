<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_drupal_node_comment_statistics extends cls_datatable_base
{
private static $p_cmmon;
private $p_nid = null;
private $p_nid_original = null;
private $p_cid = null;
private $p_cid_original = null;
private $p_last_comment_timestamp = null;
private $p_last_comment_timestamp_original = null;
private $p_last_comment_name = null;
private $p_last_comment_name_original = null;
private $p_last_comment_uid = null;
private $p_last_comment_uid_original = null;
private $p_comment_count = null;
private $p_comment_count_original = null;

private $p_nid_is_dirty = false;
private $p_cid_is_dirty = false;
private $p_last_comment_timestamp_is_dirty = false;
private $p_last_comment_name_is_dirty = false;
private $p_last_comment_uid_is_dirty = false;
private $p_comment_count_is_dirty = false;

public function _get_table_name()
{
	return 'drupal_node_comment_statistics';
}

public function get_table_fields()
{
	return array('nid','cid','last_comment_timestamp','last_comment_name','last_comment_uid','comment_count','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select nid as ' . $delimiter . 'drupal_node_comment_statistics.nid' . $delimiter . ',cid as ' . $delimiter . 'drupal_node_comment_statistics.cid' . $delimiter . ',last_comment_timestamp as ' . $delimiter . 'drupal_node_comment_statistics.last_comment_timestamp' . $delimiter . ',last_comment_name as ' . $delimiter . 'drupal_node_comment_statistics.last_comment_name' . $delimiter . ',last_comment_uid as ' . $delimiter . 'drupal_node_comment_statistics.last_comment_uid' . $delimiter . ',comment_count as ' . $delimiter . 'drupal_node_comment_statistics.comment_count' . $delimiter . ',id as ' . $delimiter . 'drupal_node_comment_statistics.id' . $delimiter . ' from drupal_node_comment_statistics';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}

public function get_nid()
{
	return $this->p_nid;
}

public function get_nid_original()
{
	return $this->p_nid_original;
}

public function set_nid($value)
{
	if ($this->p_nid === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_nid_is_dirty = true;
	$this->p_nid = $value;
}

public function set_nid_original($value)
{
	$this->p_nid_original = $value;
}

public function get_nid_is_dirty()
{
	return $this->p_nid_is_dirty;
}


public function get_cid()
{
	return $this->p_cid;
}

public function get_cid_original()
{
	return $this->p_cid_original;
}

public function set_cid($value)
{
	if ($this->p_cid === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_cid_is_dirty = true;
	$this->p_cid = $value;
}

public function set_cid_original($value)
{
	$this->p_cid_original = $value;
}

public function get_cid_is_dirty()
{
	return $this->p_cid_is_dirty;
}


public function get_last_comment_timestamp()
{
	return $this->p_last_comment_timestamp;
}

public function get_last_comment_timestamp_original()
{
	return $this->p_last_comment_timestamp_original;
}

public function set_last_comment_timestamp($value)
{
	if ($this->p_last_comment_timestamp === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_last_comment_timestamp_is_dirty = true;
	$this->p_last_comment_timestamp = $value;
}

public function set_last_comment_timestamp_original($value)
{
	$this->p_last_comment_timestamp_original = $value;
}

public function get_last_comment_timestamp_is_dirty()
{
	return $this->p_last_comment_timestamp_is_dirty;
}


public function get_last_comment_name()
{
	return $this->p_last_comment_name;
}

public function get_last_comment_name_original()
{
	return $this->p_last_comment_name_original;
}

public function set_last_comment_name($value)
{
	if ($this->p_last_comment_name === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_last_comment_name_is_dirty = true;
	$this->p_last_comment_name = $value;
}

public function set_last_comment_name_original($value)
{
	$this->p_last_comment_name_original = $value;
}

public function get_last_comment_name_is_dirty()
{
	return $this->p_last_comment_name_is_dirty;
}


public function get_last_comment_uid()
{
	return $this->p_last_comment_uid;
}

public function get_last_comment_uid_original()
{
	return $this->p_last_comment_uid_original;
}

public function set_last_comment_uid($value)
{
	if ($this->p_last_comment_uid === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_last_comment_uid_is_dirty = true;
	$this->p_last_comment_uid = $value;
}

public function set_last_comment_uid_original($value)
{
	$this->p_last_comment_uid_original = $value;
}

public function get_last_comment_uid_is_dirty()
{
	return $this->p_last_comment_uid_is_dirty;
}


public function get_comment_count()
{
	return $this->p_comment_count;
}

public function get_comment_count_original()
{
	return $this->p_comment_count_original;
}

public function set_comment_count($value)
{
	if ($this->p_comment_count === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_comment_count_is_dirty = true;
	$this->p_comment_count = $value;
}

public function set_comment_count_original($value)
{
	$this->p_comment_count_original = $value;
}

public function get_comment_count_is_dirty()
{
	return $this->p_comment_count_is_dirty;
}



public function reset_dirty($reset_values = false)
{
	$this->p_nid_is_dirty = false;
	$this->p_cid_is_dirty = false;
	$this->p_last_comment_timestamp_is_dirty = false;
	$this->p_last_comment_name_is_dirty = false;
	$this->p_last_comment_uid_is_dirty = false;
	$this->p_comment_count_is_dirty = false;
	if ($reset_values)
	{
		$this->p_nid = $this->p_nid_original;
		$this->p_cid = $this->p_cid_original;
		$this->p_last_comment_timestamp = $this->p_last_comment_timestamp_original;
		$this->p_last_comment_name = $this->p_last_comment_name_original;
		$this->p_last_comment_uid = $this->p_last_comment_uid_original;
		$this->p_comment_count = $this->p_comment_count_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "drupal_node_comment_statistics.nid":
					$this->set_nid($val);
					$this->set_nid_original($val);
					break;
				case "drupal_node_comment_statistics.cid":
					$this->set_cid($val);
					$this->set_cid_original($val);
					break;
				case "drupal_node_comment_statistics.last_comment_timestamp":
					$this->set_last_comment_timestamp($val);
					$this->set_last_comment_timestamp_original($val);
					break;
				case "drupal_node_comment_statistics.last_comment_name":
					$this->set_last_comment_name($val);
					$this->set_last_comment_name_original($val);
					break;
				case "drupal_node_comment_statistics.last_comment_uid":
					$this->set_last_comment_uid($val);
					$this->set_last_comment_uid_original($val);
					break;
				case "drupal_node_comment_statistics.comment_count":
					$this->set_comment_count($val);
					$this->set_comment_count_original($val);
					break;
				case "drupal_node_comment_statistics.id":
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
		$drupal_node_comment_statistics = cls_table_factory::create_instance('drupal_node_comment_statistics');
		$row = $db_manager->fetch_row($result);
		$drupal_node_comment_statistics->fill($row);
		return $drupal_node_comment_statistics;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_node_comment_statistics.php');
		return cls_save_drupal_node_comment_statistics::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_node_comment_statistics.php');
		return cls_save_drupal_node_comment_statistics::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_drupal_node_comment_statisticss($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('drupal_node_comment_statistics',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('drupal_node_comment_statistics',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$drupal_node_comment_statistics = cls_table_factory::create_instance('drupal_node_comment_statistics');
				$drupal_node_comment_statistics->fill($row);
				$data[] = $drupal_node_comment_statistics;
			}
		return $data;
	}

public function get_address($drupal_node_comment_statisticss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($drupal_node_comment_statisticss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$drupal_node_comment_statisticss,'id_data');
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

public function get_communication_reason($drupal_node_comment_statisticss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($drupal_node_comment_statisticss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$drupal_node_comment_statisticss,'id_data');
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

public function get_data_change($drupal_node_comment_statisticss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($drupal_node_comment_statisticss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$drupal_node_comment_statisticss,'id_data');
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

public function get_data_help($drupal_node_comment_statisticss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($drupal_node_comment_statisticss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$drupal_node_comment_statisticss,'id_data');
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

public function get_data_location($drupal_node_comment_statisticss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($drupal_node_comment_statisticss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$drupal_node_comment_statisticss,'id_data');
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

public function get_data_posting($drupal_node_comment_statisticss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($drupal_node_comment_statisticss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$drupal_node_comment_statisticss,'id_data');
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

public function get_data_property($drupal_node_comment_statisticss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($drupal_node_comment_statisticss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_node_comment_statisticss,'id_data');
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

public function get_offer_event($drupal_node_comment_statisticss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($drupal_node_comment_statisticss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$drupal_node_comment_statisticss,'id_data');
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

public function get_supplier_data($drupal_node_comment_statisticss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($drupal_node_comment_statisticss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$drupal_node_comment_statisticss,'id_data');
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

public function get_table_test_data($drupal_node_comment_statisticss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($drupal_node_comment_statisticss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$drupal_node_comment_statisticss,'id_data');
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

public function get_data_translation($drupal_node_comment_statisticss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($drupal_node_comment_statisticss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$drupal_node_comment_statisticss,'id_data');
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

public function get_dms($drupal_node_comment_statisticss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($drupal_node_comment_statisticss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$drupal_node_comment_statisticss,'id_data');
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

public function get_data_relation_id_data1($drupal_node_comment_statisticss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($drupal_node_comment_statisticss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_node_comment_statisticss,'id_data1');
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

public function get_data_relation_id_data2($drupal_node_comment_statisticss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($drupal_node_comment_statisticss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_node_comment_statisticss,'id_data2');
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

public function get_data_property_id_link_data($drupal_node_comment_statisticss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($drupal_node_comment_statisticss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_node_comment_statisticss,'id_link_data');
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
