<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_drupal_node_type extends cls_datatable_base
{
private static $p_cmmon;
private $p_orig_type = null;
private $p_orig_type_original = null;
private $p_disabled = null;
private $p_disabled_original = null;
private $p_locked = null;
private $p_locked_original = null;
private $p_modified = null;
private $p_modified_original = null;
private $p_custom = null;
private $p_custom_original = null;
private $p_title_label = null;
private $p_title_label_original = null;
private $p_has_title = null;
private $p_has_title_original = null;
private $p_help = null;
private $p_help_original = null;
private $p_description = null;
private $p_description_original = null;
private $p_module = null;
private $p_module_original = null;
private $p_base = null;
private $p_base_original = null;
private $p_name = null;
private $p_name_original = null;
private $p_type = null;
private $p_type_original = null;

private $p_orig_type_is_dirty = false;
private $p_disabled_is_dirty = false;
private $p_locked_is_dirty = false;
private $p_modified_is_dirty = false;
private $p_custom_is_dirty = false;
private $p_title_label_is_dirty = false;
private $p_has_title_is_dirty = false;
private $p_help_is_dirty = false;
private $p_description_is_dirty = false;
private $p_module_is_dirty = false;
private $p_base_is_dirty = false;
private $p_name_is_dirty = false;
private $p_type_is_dirty = false;

public function _get_table_name()
{
	return 'drupal_node_type';
}

public function get_table_fields()
{
	return array('id','orig_type','disabled','locked','modified','custom','title_label','has_title','help','description','module','base','name','type');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'drupal_node_type.id' . $delimiter . ',orig_type as ' . $delimiter . 'drupal_node_type.orig_type' . $delimiter . ',disabled as ' . $delimiter . 'drupal_node_type.disabled' . $delimiter . ',locked as ' . $delimiter . 'drupal_node_type.locked' . $delimiter . ',modified as ' . $delimiter . 'drupal_node_type.modified' . $delimiter . ',custom as ' . $delimiter . 'drupal_node_type.custom' . $delimiter . ',title_label as ' . $delimiter . 'drupal_node_type.title_label' . $delimiter . ',has_title as ' . $delimiter . 'drupal_node_type.has_title' . $delimiter . ',help as ' . $delimiter . 'drupal_node_type.help' . $delimiter . ',description as ' . $delimiter . 'drupal_node_type.description' . $delimiter . ',module as ' . $delimiter . 'drupal_node_type.module' . $delimiter . ',base as ' . $delimiter . 'drupal_node_type.base' . $delimiter . ',name as ' . $delimiter . 'drupal_node_type.name' . $delimiter . ',type as ' . $delimiter . 'drupal_node_type.type' . $delimiter . ' from drupal_node_type';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_orig_type()
{
	return $this->p_orig_type;
}

public function get_orig_type_original()
{
	return $this->p_orig_type_original;
}

public function set_orig_type($value)
{
	if ($this->p_orig_type === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_orig_type_is_dirty = true;
	$this->p_orig_type = $value;
}

public function set_orig_type_original($value)
{
	$this->p_orig_type_original = $value;
}

public function get_orig_type_is_dirty()
{
	return $this->p_orig_type_is_dirty;
}


public function get_disabled()
{
	return $this->p_disabled;
}

public function get_disabled_original()
{
	return $this->p_disabled_original;
}

public function set_disabled($value)
{
	if ($this->p_disabled === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_disabled_is_dirty = true;
	$this->p_disabled = $value;
}

public function set_disabled_original($value)
{
	$this->p_disabled_original = $value;
}

public function get_disabled_is_dirty()
{
	return $this->p_disabled_is_dirty;
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


public function get_modified()
{
	return $this->p_modified;
}

public function get_modified_original()
{
	return $this->p_modified_original;
}

public function set_modified($value)
{
	if ($this->p_modified === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_modified_is_dirty = true;
	$this->p_modified = $value;
}

public function set_modified_original($value)
{
	$this->p_modified_original = $value;
}

public function get_modified_is_dirty()
{
	return $this->p_modified_is_dirty;
}


public function get_custom()
{
	return $this->p_custom;
}

public function get_custom_original()
{
	return $this->p_custom_original;
}

public function set_custom($value)
{
	if ($this->p_custom === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_custom_is_dirty = true;
	$this->p_custom = $value;
}

public function set_custom_original($value)
{
	$this->p_custom_original = $value;
}

public function get_custom_is_dirty()
{
	return $this->p_custom_is_dirty;
}


public function get_title_label()
{
	return $this->p_title_label;
}

public function get_title_label_original()
{
	return $this->p_title_label_original;
}

public function set_title_label($value)
{
	if ($this->p_title_label === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_title_label_is_dirty = true;
	$this->p_title_label = $value;
}

public function set_title_label_original($value)
{
	$this->p_title_label_original = $value;
}

public function get_title_label_is_dirty()
{
	return $this->p_title_label_is_dirty;
}


public function get_has_title()
{
	return $this->p_has_title;
}

public function get_has_title_original()
{
	return $this->p_has_title_original;
}

public function set_has_title($value)
{
	if ($this->p_has_title === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_has_title_is_dirty = true;
	$this->p_has_title = $value;
}

public function set_has_title_original($value)
{
	$this->p_has_title_original = $value;
}

public function get_has_title_is_dirty()
{
	return $this->p_has_title_is_dirty;
}


public function get_help()
{
	return $this->p_help;
}

public function get_help_original()
{
	return $this->p_help_original;
}

public function set_help($value)
{
	if ($this->p_help === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_help_is_dirty = true;
	$this->p_help = $value;
}

public function set_help_original($value)
{
	$this->p_help_original = $value;
}

public function get_help_is_dirty()
{
	return $this->p_help_is_dirty;
}


public function get_description()
{
	return $this->p_description;
}

public function get_description_original()
{
	return $this->p_description_original;
}

public function set_description($value)
{
	if ($this->p_description === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_description_is_dirty = true;
	$this->p_description = $value;
}

public function set_description_original($value)
{
	$this->p_description_original = $value;
}

public function get_description_is_dirty()
{
	return $this->p_description_is_dirty;
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


public function get_base()
{
	return $this->p_base;
}

public function get_base_original()
{
	return $this->p_base_original;
}

public function set_base($value)
{
	if ($this->p_base === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_base_is_dirty = true;
	$this->p_base = $value;
}

public function set_base_original($value)
{
	$this->p_base_original = $value;
}

public function get_base_is_dirty()
{
	return $this->p_base_is_dirty;
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


public function reset_dirty($reset_values = false)
{
	$this->p_orig_type_is_dirty = false;
	$this->p_disabled_is_dirty = false;
	$this->p_locked_is_dirty = false;
	$this->p_modified_is_dirty = false;
	$this->p_custom_is_dirty = false;
	$this->p_title_label_is_dirty = false;
	$this->p_has_title_is_dirty = false;
	$this->p_help_is_dirty = false;
	$this->p_description_is_dirty = false;
	$this->p_module_is_dirty = false;
	$this->p_base_is_dirty = false;
	$this->p_name_is_dirty = false;
	$this->p_type_is_dirty = false;
	if ($reset_values)
	{
		$this->p_orig_type = $this->p_orig_type_original;
		$this->p_disabled = $this->p_disabled_original;
		$this->p_locked = $this->p_locked_original;
		$this->p_modified = $this->p_modified_original;
		$this->p_custom = $this->p_custom_original;
		$this->p_title_label = $this->p_title_label_original;
		$this->p_has_title = $this->p_has_title_original;
		$this->p_help = $this->p_help_original;
		$this->p_description = $this->p_description_original;
		$this->p_module = $this->p_module_original;
		$this->p_base = $this->p_base_original;
		$this->p_name = $this->p_name_original;
		$this->p_type = $this->p_type_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "drupal_node_type.id":
					$this->set_id($val);
					break;
				case "drupal_node_type.orig_type":
					$this->set_orig_type($val);
					$this->set_orig_type_original($val);
					break;
				case "drupal_node_type.disabled":
					$this->set_disabled($val);
					$this->set_disabled_original($val);
					break;
				case "drupal_node_type.locked":
					$this->set_locked($val);
					$this->set_locked_original($val);
					break;
				case "drupal_node_type.modified":
					$this->set_modified($val);
					$this->set_modified_original($val);
					break;
				case "drupal_node_type.custom":
					$this->set_custom($val);
					$this->set_custom_original($val);
					break;
				case "drupal_node_type.title_label":
					$this->set_title_label($val);
					$this->set_title_label_original($val);
					break;
				case "drupal_node_type.has_title":
					$this->set_has_title($val);
					$this->set_has_title_original($val);
					break;
				case "drupal_node_type.help":
					$this->set_help($val);
					$this->set_help_original($val);
					break;
				case "drupal_node_type.description":
					$this->set_description($val);
					$this->set_description_original($val);
					break;
				case "drupal_node_type.module":
					$this->set_module($val);
					$this->set_module_original($val);
					break;
				case "drupal_node_type.base":
					$this->set_base($val);
					$this->set_base_original($val);
					break;
				case "drupal_node_type.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "drupal_node_type.type":
					$this->set_type($val);
					$this->set_type_original($val);
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
		$drupal_node_type = cls_table_factory::create_instance('drupal_node_type');
		$row = $db_manager->fetch_row($result);
		$drupal_node_type->fill($row);
		return $drupal_node_type;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_node_type.php');
		return cls_save_drupal_node_type::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_node_type.php');
		return cls_save_drupal_node_type::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_drupal_node_types($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('drupal_node_type',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('drupal_node_type',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$drupal_node_type = cls_table_factory::create_instance('drupal_node_type');
				$drupal_node_type->fill($row);
				$data[] = $drupal_node_type;
			}
		return $data;
	}

public function get_table_test_data($drupal_node_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($drupal_node_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$drupal_node_types,'id_data');
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

public function get_communication_reason($drupal_node_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($drupal_node_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$drupal_node_types,'id_data');
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

public function get_data_change($drupal_node_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($drupal_node_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$drupal_node_types,'id_data');
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

public function get_data_help($drupal_node_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($drupal_node_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$drupal_node_types,'id_data');
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

public function get_data_location($drupal_node_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($drupal_node_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$drupal_node_types,'id_data');
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

public function get_data_posting($drupal_node_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($drupal_node_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$drupal_node_types,'id_data');
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

public function get_offer_event($drupal_node_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($drupal_node_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$drupal_node_types,'id_data');
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

public function get_supplier_data($drupal_node_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($drupal_node_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$drupal_node_types,'id_data');
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

public function get_address($drupal_node_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($drupal_node_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$drupal_node_types,'id_data');
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

public function get_data_property($drupal_node_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($drupal_node_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_node_types,'id_data');
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

public function get_data_translation($drupal_node_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($drupal_node_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$drupal_node_types,'id_data');
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

public function get_dms($drupal_node_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($drupal_node_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$drupal_node_types,'id_data');
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

public function get_data_relation_id_data1($drupal_node_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($drupal_node_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_node_types,'id_data1');
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

public function get_data_relation_id_data2($drupal_node_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($drupal_node_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_node_types,'id_data2');
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

public function get_data_property_id_link_data($drupal_node_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($drupal_node_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_node_types,'id_link_data');
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
