<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_drupal_field_config extends cls_datatable_base
{
private static $p_cmmon;
private $p_field_name = null;
private $p_field_name_original = null;
private $p_type = null;
private $p_type_original = null;
private $p_module = null;
private $p_module_original = null;
private $p_active = null;
private $p_active_original = null;
private $p_storage_type = null;
private $p_storage_type_original = null;
private $p_storage_module = null;
private $p_storage_module_original = null;
private $p_storage_active = null;
private $p_storage_active_original = null;
private $p_locked = null;
private $p_locked_original = null;
private $p_data = null;
private $p_data_original = null;
private $p_cardinality = null;
private $p_cardinality_original = null;
private $p_translatable = null;
private $p_translatable_original = null;
private $p_deleted = null;
private $p_deleted_original = null;

private $p_field_name_is_dirty = false;
private $p_type_is_dirty = false;
private $p_module_is_dirty = false;
private $p_active_is_dirty = false;
private $p_storage_type_is_dirty = false;
private $p_storage_module_is_dirty = false;
private $p_storage_active_is_dirty = false;
private $p_locked_is_dirty = false;
private $p_data_is_dirty = false;
private $p_cardinality_is_dirty = false;
private $p_translatable_is_dirty = false;
private $p_deleted_is_dirty = false;

public function _get_table_name()
{
	return 'drupal_field_config';
}

public function get_table_fields()
{
	return array('id','field_name','type','module','active','storage_type','storage_module','storage_active','locked','data','cardinality','translatable','deleted');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'drupal_field_config.id' . $delimiter . ',field_name as ' . $delimiter . 'drupal_field_config.field_name' . $delimiter . ',type as ' . $delimiter . 'drupal_field_config.type' . $delimiter . ',module as ' . $delimiter . 'drupal_field_config.module' . $delimiter . ',active as ' . $delimiter . 'drupal_field_config.active' . $delimiter . ',storage_type as ' . $delimiter . 'drupal_field_config.storage_type' . $delimiter . ',storage_module as ' . $delimiter . 'drupal_field_config.storage_module' . $delimiter . ',storage_active as ' . $delimiter . 'drupal_field_config.storage_active' . $delimiter . ',locked as ' . $delimiter . 'drupal_field_config.locked' . $delimiter . ',data as ' . $delimiter . 'drupal_field_config.data' . $delimiter . ',cardinality as ' . $delimiter . 'drupal_field_config.cardinality' . $delimiter . ',translatable as ' . $delimiter . 'drupal_field_config.translatable' . $delimiter . ',deleted as ' . $delimiter . 'drupal_field_config.deleted' . $delimiter . ' from drupal_field_config';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_field_name()
{
	return $this->p_field_name;
}

public function get_field_name_original()
{
	return $this->p_field_name_original;
}

public function set_field_name($value)
{
	if ($this->p_field_name === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_field_name_is_dirty = true;
	$this->p_field_name = $value;
}

public function set_field_name_original($value)
{
	$this->p_field_name_original = $value;
}

public function get_field_name_is_dirty()
{
	return $this->p_field_name_is_dirty;
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


public function get_module()
{
	return $this->p_module;
}

public function get_module_original()
{
	return $this->p_module_original;
}

public function set_module($value)
{
	if ($this->p_module === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_module_is_dirty = true;
	$this->p_module = $value;
}

public function set_module_original($value)
{
	$this->p_module_original = $value;
}

public function get_module_is_dirty()
{
	return $this->p_module_is_dirty;
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


public function get_storage_type()
{
	return $this->p_storage_type;
}

public function get_storage_type_original()
{
	return $this->p_storage_type_original;
}

public function set_storage_type($value)
{
	if ($this->p_storage_type === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_storage_type_is_dirty = true;
	$this->p_storage_type = $value;
}

public function set_storage_type_original($value)
{
	$this->p_storage_type_original = $value;
}

public function get_storage_type_is_dirty()
{
	return $this->p_storage_type_is_dirty;
}


public function get_storage_module()
{
	return $this->p_storage_module;
}

public function get_storage_module_original()
{
	return $this->p_storage_module_original;
}

public function set_storage_module($value)
{
	if ($this->p_storage_module === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_storage_module_is_dirty = true;
	$this->p_storage_module = $value;
}

public function set_storage_module_original($value)
{
	$this->p_storage_module_original = $value;
}

public function get_storage_module_is_dirty()
{
	return $this->p_storage_module_is_dirty;
}


public function get_storage_active()
{
	return $this->p_storage_active;
}

public function get_storage_active_original()
{
	return $this->p_storage_active_original;
}

public function set_storage_active($value)
{
	if ($this->p_storage_active === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_storage_active_is_dirty = true;
	$this->p_storage_active = $value;
}

public function set_storage_active_original($value)
{
	$this->p_storage_active_original = $value;
}

public function get_storage_active_is_dirty()
{
	return $this->p_storage_active_is_dirty;
}


public function get_locked()
{
	return $this->p_locked;
}

public function get_locked_original()
{
	return $this->p_locked_original;
}

public function set_locked($value)
{
	if ($this->p_locked === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_locked_is_dirty = true;
	$this->p_locked = $value;
}

public function set_locked_original($value)
{
	$this->p_locked_original = $value;
}

public function get_locked_is_dirty()
{
	return $this->p_locked_is_dirty;
}


public function get_data()
{
	return $this->p_data;
}

public function get_data_original()
{
	return $this->p_data_original;
}

public function set_data($value)
{
	if ($this->p_data === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_data_is_dirty = true;
	$this->p_data = $value;
}

public function set_data_original($value)
{
	$this->p_data_original = $value;
}

public function get_data_is_dirty()
{
	return $this->p_data_is_dirty;
}


public function get_cardinality()
{
	return $this->p_cardinality;
}

public function get_cardinality_original()
{
	return $this->p_cardinality_original;
}

public function set_cardinality($value)
{
	if ($this->p_cardinality === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_cardinality_is_dirty = true;
	$this->p_cardinality = $value;
}

public function set_cardinality_original($value)
{
	$this->p_cardinality_original = $value;
}

public function get_cardinality_is_dirty()
{
	return $this->p_cardinality_is_dirty;
}


public function get_translatable()
{
	return $this->p_translatable;
}

public function get_translatable_original()
{
	return $this->p_translatable_original;
}

public function set_translatable($value)
{
	if ($this->p_translatable === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_translatable_is_dirty = true;
	$this->p_translatable = $value;
}

public function set_translatable_original($value)
{
	$this->p_translatable_original = $value;
}

public function get_translatable_is_dirty()
{
	return $this->p_translatable_is_dirty;
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


public function reset_dirty($reset_values = false)
{
	$this->p_field_name_is_dirty = false;
	$this->p_type_is_dirty = false;
	$this->p_module_is_dirty = false;
	$this->p_active_is_dirty = false;
	$this->p_storage_type_is_dirty = false;
	$this->p_storage_module_is_dirty = false;
	$this->p_storage_active_is_dirty = false;
	$this->p_locked_is_dirty = false;
	$this->p_data_is_dirty = false;
	$this->p_cardinality_is_dirty = false;
	$this->p_translatable_is_dirty = false;
	$this->p_deleted_is_dirty = false;
	if ($reset_values)
	{
		$this->p_field_name = $this->p_field_name_original;
		$this->p_type = $this->p_type_original;
		$this->p_module = $this->p_module_original;
		$this->p_active = $this->p_active_original;
		$this->p_storage_type = $this->p_storage_type_original;
		$this->p_storage_module = $this->p_storage_module_original;
		$this->p_storage_active = $this->p_storage_active_original;
		$this->p_locked = $this->p_locked_original;
		$this->p_data = $this->p_data_original;
		$this->p_cardinality = $this->p_cardinality_original;
		$this->p_translatable = $this->p_translatable_original;
		$this->p_deleted = $this->p_deleted_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "drupal_field_config.id":
					$this->set_id($val);
					break;
				case "drupal_field_config.field_name":
					$this->set_field_name($val);
					$this->set_field_name_original($val);
					break;
				case "drupal_field_config.type":
					$this->set_type($val);
					$this->set_type_original($val);
					break;
				case "drupal_field_config.module":
					$this->set_module($val);
					$this->set_module_original($val);
					break;
				case "drupal_field_config.active":
					$this->set_active($val);
					$this->set_active_original($val);
					break;
				case "drupal_field_config.storage_type":
					$this->set_storage_type($val);
					$this->set_storage_type_original($val);
					break;
				case "drupal_field_config.storage_module":
					$this->set_storage_module($val);
					$this->set_storage_module_original($val);
					break;
				case "drupal_field_config.storage_active":
					$this->set_storage_active($val);
					$this->set_storage_active_original($val);
					break;
				case "drupal_field_config.locked":
					$this->set_locked($val);
					$this->set_locked_original($val);
					break;
				case "drupal_field_config.data":
					$this->set_data($val);
					$this->set_data_original($val);
					break;
				case "drupal_field_config.cardinality":
					$this->set_cardinality($val);
					$this->set_cardinality_original($val);
					break;
				case "drupal_field_config.translatable":
					$this->set_translatable($val);
					$this->set_translatable_original($val);
					break;
				case "drupal_field_config.deleted":
					$this->set_deleted($val);
					$this->set_deleted_original($val);
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
		$drupal_field_config = cls_table_factory::create_instance('drupal_field_config');
		$row = $db_manager->fetch_row($result);
		$drupal_field_config->fill($row);
		return $drupal_field_config;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_field_config.php');
		return cls_save_drupal_field_config::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_field_config.php');
		return cls_save_drupal_field_config::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_drupal_field_configs($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('drupal_field_config',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('drupal_field_config',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$drupal_field_config = cls_table_factory::create_instance('drupal_field_config');
				$drupal_field_config->fill($row);
				$data[] = $drupal_field_config;
			}
		return $data;
	}

public function get_address($drupal_field_configs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($drupal_field_configs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$drupal_field_configs,'id_data');
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

public function get_communication_reason($drupal_field_configs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($drupal_field_configs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$drupal_field_configs,'id_data');
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

public function get_data_change($drupal_field_configs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($drupal_field_configs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$drupal_field_configs,'id_data');
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

public function get_data_help($drupal_field_configs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($drupal_field_configs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$drupal_field_configs,'id_data');
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

public function get_data_location($drupal_field_configs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($drupal_field_configs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$drupal_field_configs,'id_data');
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

public function get_data_posting($drupal_field_configs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($drupal_field_configs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$drupal_field_configs,'id_data');
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

public function get_data_property($drupal_field_configs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($drupal_field_configs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_field_configs,'id_data');
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

public function get_offer_event($drupal_field_configs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($drupal_field_configs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$drupal_field_configs,'id_data');
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

public function get_supplier_data($drupal_field_configs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($drupal_field_configs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$drupal_field_configs,'id_data');
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

public function get_table_test_data($drupal_field_configs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($drupal_field_configs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$drupal_field_configs,'id_data');
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

public function get_data_translation($drupal_field_configs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($drupal_field_configs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$drupal_field_configs,'id_data');
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

public function get_dms($drupal_field_configs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($drupal_field_configs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$drupal_field_configs,'id_data');
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

public function get_data_relation_id_data1($drupal_field_configs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($drupal_field_configs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_field_configs,'id_data1');
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

public function get_data_relation_id_data2($drupal_field_configs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($drupal_field_configs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_field_configs,'id_data2');
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

public function get_data_property_id_link_data($drupal_field_configs,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($drupal_field_configs,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_field_configs,'id_link_data');
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
