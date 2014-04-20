<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_drupal_field_revision_field_tags extends cls_datatable_base
{
private static $p_cmmon;
private $p_field_tags_tid = null;
private $p_field_tags_tid_original = null;
private $p_delta = null;
private $p_delta_original = null;
private $p_language = null;
private $p_language_original = null;
private $p_revision_id = null;
private $p_revision_id_original = null;
private $p_entity_id = null;
private $p_entity_id_original = null;
private $p_deleted = null;
private $p_deleted_original = null;
private $p_bundle = null;
private $p_bundle_original = null;
private $p_entity_type = null;
private $p_entity_type_original = null;

private $p_field_tags_tid_is_dirty = false;
private $p_delta_is_dirty = false;
private $p_language_is_dirty = false;
private $p_revision_id_is_dirty = false;
private $p_entity_id_is_dirty = false;
private $p_deleted_is_dirty = false;
private $p_bundle_is_dirty = false;
private $p_entity_type_is_dirty = false;

public function _get_table_name()
{
	return 'drupal_field_revision_field_tags';
}

public function get_table_fields()
{
	return array('id','field_tags_tid','delta','language','revision_id','entity_id','deleted','bundle','entity_type');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'drupal_field_revision_field_tags.id' . $delimiter . ',field_tags_tid as ' . $delimiter . 'drupal_field_revision_field_tags.field_tags_tid' . $delimiter . ',delta as ' . $delimiter . 'drupal_field_revision_field_tags.delta' . $delimiter . ',language as ' . $delimiter . 'drupal_field_revision_field_tags.language' . $delimiter . ',revision_id as ' . $delimiter . 'drupal_field_revision_field_tags.revision_id' . $delimiter . ',entity_id as ' . $delimiter . 'drupal_field_revision_field_tags.entity_id' . $delimiter . ',deleted as ' . $delimiter . 'drupal_field_revision_field_tags.deleted' . $delimiter . ',bundle as ' . $delimiter . 'drupal_field_revision_field_tags.bundle' . $delimiter . ',entity_type as ' . $delimiter . 'drupal_field_revision_field_tags.entity_type' . $delimiter . ' from drupal_field_revision_field_tags';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_field_tags_tid()
{
	return $this->p_field_tags_tid;
}

public function get_field_tags_tid_original()
{
	return $this->p_field_tags_tid_original;
}

public function set_field_tags_tid($value)
{
	if ($this->p_field_tags_tid === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_field_tags_tid_is_dirty = true;
	$this->p_field_tags_tid = $value;
}

public function set_field_tags_tid_original($value)
{
	$this->p_field_tags_tid_original = $value;
}

public function get_field_tags_tid_is_dirty()
{
	return $this->p_field_tags_tid_is_dirty;
}


public function get_delta()
{
	return $this->p_delta;
}

public function get_delta_original()
{
	return $this->p_delta_original;
}

public function set_delta($value)
{
	if ($this->p_delta === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_delta_is_dirty = true;
	$this->p_delta = $value;
}

public function set_delta_original($value)
{
	$this->p_delta_original = $value;
}

public function get_delta_is_dirty()
{
	return $this->p_delta_is_dirty;
}


public function get_language()
{
	return $this->p_language;
}

public function get_language_original()
{
	return $this->p_language_original;
}

public function set_language($value)
{
	if ($this->p_language === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_language_is_dirty = true;
	$this->p_language = $value;
}

public function set_language_original($value)
{
	$this->p_language_original = $value;
}

public function get_language_is_dirty()
{
	return $this->p_language_is_dirty;
}


public function get_revision_id()
{
	return $this->p_revision_id;
}

public function get_revision_id_original()
{
	return $this->p_revision_id_original;
}

public function set_revision_id($value)
{
	if ($this->p_revision_id === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_revision_id_is_dirty = true;
	$this->p_revision_id = $value;
}

public function set_revision_id_original($value)
{
	$this->p_revision_id_original = $value;
}

public function get_revision_id_is_dirty()
{
	return $this->p_revision_id_is_dirty;
}


public function get_entity_id()
{
	return $this->p_entity_id;
}

public function get_entity_id_original()
{
	return $this->p_entity_id_original;
}

public function set_entity_id($value)
{
	if ($this->p_entity_id === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_entity_id_is_dirty = true;
	$this->p_entity_id = $value;
}

public function set_entity_id_original($value)
{
	$this->p_entity_id_original = $value;
}

public function get_entity_id_is_dirty()
{
	return $this->p_entity_id_is_dirty;
}


public function get_deleted()
{
	return $this->p_deleted;
}

public function get_deleted_original()
{
	return $this->p_deleted_original;
}

public function set_deleted($value)
{
	if ($this->p_deleted === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_deleted_is_dirty = true;
	$this->p_deleted = $value;
}

public function set_deleted_original($value)
{
	$this->p_deleted_original = $value;
}

public function get_deleted_is_dirty()
{
	return $this->p_deleted_is_dirty;
}


public function get_bundle()
{
	return $this->p_bundle;
}

public function get_bundle_original()
{
	return $this->p_bundle_original;
}

public function set_bundle($value)
{
	if ($this->p_bundle === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_bundle_is_dirty = true;
	$this->p_bundle = $value;
}

public function set_bundle_original($value)
{
	$this->p_bundle_original = $value;
}

public function get_bundle_is_dirty()
{
	return $this->p_bundle_is_dirty;
}


public function get_entity_type()
{
	return $this->p_entity_type;
}

public function get_entity_type_original()
{
	return $this->p_entity_type_original;
}

public function set_entity_type($value)
{
	if ($this->p_entity_type === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_entity_type_is_dirty = true;
	$this->p_entity_type = $value;
}

public function set_entity_type_original($value)
{
	$this->p_entity_type_original = $value;
}

public function get_entity_type_is_dirty()
{
	return $this->p_entity_type_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_field_tags_tid_is_dirty = false;
	$this->p_delta_is_dirty = false;
	$this->p_language_is_dirty = false;
	$this->p_revision_id_is_dirty = false;
	$this->p_entity_id_is_dirty = false;
	$this->p_deleted_is_dirty = false;
	$this->p_bundle_is_dirty = false;
	$this->p_entity_type_is_dirty = false;
	if ($reset_values)
	{
		$this->p_field_tags_tid = $this->p_field_tags_tid_original;
		$this->p_delta = $this->p_delta_original;
		$this->p_language = $this->p_language_original;
		$this->p_revision_id = $this->p_revision_id_original;
		$this->p_entity_id = $this->p_entity_id_original;
		$this->p_deleted = $this->p_deleted_original;
		$this->p_bundle = $this->p_bundle_original;
		$this->p_entity_type = $this->p_entity_type_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "drupal_field_revision_field_tags.id":
					$this->set_id($val);
					break;
				case "drupal_field_revision_field_tags.field_tags_tid":
					$this->set_field_tags_tid($val);
					$this->set_field_tags_tid_original($val);
					break;
				case "drupal_field_revision_field_tags.delta":
					$this->set_delta($val);
					$this->set_delta_original($val);
					break;
				case "drupal_field_revision_field_tags.language":
					$this->set_language($val);
					$this->set_language_original($val);
					break;
				case "drupal_field_revision_field_tags.revision_id":
					$this->set_revision_id($val);
					$this->set_revision_id_original($val);
					break;
				case "drupal_field_revision_field_tags.entity_id":
					$this->set_entity_id($val);
					$this->set_entity_id_original($val);
					break;
				case "drupal_field_revision_field_tags.deleted":
					$this->set_deleted($val);
					$this->set_deleted_original($val);
					break;
				case "drupal_field_revision_field_tags.bundle":
					$this->set_bundle($val);
					$this->set_bundle_original($val);
					break;
				case "drupal_field_revision_field_tags.entity_type":
					$this->set_entity_type($val);
					$this->set_entity_type_original($val);
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
		$drupal_field_revision_field_tags = cls_table_factory::create_instance('drupal_field_revision_field_tags');
		$row = $db_manager->fetch_row($result);
		$drupal_field_revision_field_tags->fill($row);
		return $drupal_field_revision_field_tags;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_field_revision_field_tags.php');
		return cls_save_drupal_field_revision_field_tags::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_field_revision_field_tags.php');
		return cls_save_drupal_field_revision_field_tags::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_drupal_field_revision_field_tagss($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('drupal_field_revision_field_tags',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('drupal_field_revision_field_tags',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$drupal_field_revision_field_tags = cls_table_factory::create_instance('drupal_field_revision_field_tags');
				$drupal_field_revision_field_tags->fill($row);
				$data[] = $drupal_field_revision_field_tags;
			}
		return $data;
	}

public function get_table_test_data($drupal_field_revision_field_tagss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($drupal_field_revision_field_tagss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$drupal_field_revision_field_tagss,'id_data');
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

public function get_communication_reason($drupal_field_revision_field_tagss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($drupal_field_revision_field_tagss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$drupal_field_revision_field_tagss,'id_data');
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

public function get_data_change($drupal_field_revision_field_tagss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($drupal_field_revision_field_tagss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$drupal_field_revision_field_tagss,'id_data');
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

public function get_data_help($drupal_field_revision_field_tagss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($drupal_field_revision_field_tagss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$drupal_field_revision_field_tagss,'id_data');
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

public function get_data_location($drupal_field_revision_field_tagss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($drupal_field_revision_field_tagss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$drupal_field_revision_field_tagss,'id_data');
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

public function get_data_posting($drupal_field_revision_field_tagss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($drupal_field_revision_field_tagss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$drupal_field_revision_field_tagss,'id_data');
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

public function get_offer_event($drupal_field_revision_field_tagss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($drupal_field_revision_field_tagss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$drupal_field_revision_field_tagss,'id_data');
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

public function get_supplier_data($drupal_field_revision_field_tagss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($drupal_field_revision_field_tagss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$drupal_field_revision_field_tagss,'id_data');
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

public function get_address($drupal_field_revision_field_tagss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($drupal_field_revision_field_tagss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$drupal_field_revision_field_tagss,'id_data');
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

public function get_data_property($drupal_field_revision_field_tagss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($drupal_field_revision_field_tagss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_field_revision_field_tagss,'id_data');
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

public function get_data_translation($drupal_field_revision_field_tagss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($drupal_field_revision_field_tagss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$drupal_field_revision_field_tagss,'id_data');
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

public function get_dms($drupal_field_revision_field_tagss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($drupal_field_revision_field_tagss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$drupal_field_revision_field_tagss,'id_data');
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

public function get_data_relation_id_data1($drupal_field_revision_field_tagss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($drupal_field_revision_field_tagss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_field_revision_field_tagss,'id_data1');
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

public function get_data_relation_id_data2($drupal_field_revision_field_tagss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($drupal_field_revision_field_tagss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_field_revision_field_tagss,'id_data2');
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

public function get_data_property_id_link_data($drupal_field_revision_field_tagss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($drupal_field_revision_field_tagss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_field_revision_field_tagss,'id_link_data');
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
