<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_table_data extends cls_datatable_base
{
private static $p_cmmon;
private $p_table_name = null;
private $p_table_name_original = null;
private $p_location_independant = null;
private $p_location_independant_original = null;
private $p_static_data = null;
private $p_static_data_original = null;
private $p_use_orm = null;
private $p_use_orm_original = null;
private $p_create_history = null;
private $p_create_history_original = null;
private $p_searchable = null;
private $p_searchable_original = null;
private $p_id_table_search_template = null;
private $p_id_table_search_template_original = null;
private $p_config_table = null;
private $p_config_table_original = null;
private $p_id_data_view_default = null;
private $p_id_data_view_default_original = null;

private $p_table_name_is_dirty = false;
private $p_location_independant_is_dirty = false;
private $p_static_data_is_dirty = false;
private $p_use_orm_is_dirty = false;
private $p_create_history_is_dirty = false;
private $p_searchable_is_dirty = false;
private $p_id_table_search_template_is_dirty = false;
private $p_config_table_is_dirty = false;
private $p_id_data_view_default_is_dirty = false;

public function _get_table_name()
{
	return 'table_data';
}

public function get_table_fields()
{
	return array('id','table_name','location_independant','static_data','use_orm','create_history','searchable','id_table_search_template','config_table','id_data_view_default');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'table_data.id' . $delimiter . ',table_name as ' . $delimiter . 'table_data.table_name' . $delimiter . ',location_independant as ' . $delimiter . 'table_data.location_independant' . $delimiter . ',static_data as ' . $delimiter . 'table_data.static_data' . $delimiter . ',use_orm as ' . $delimiter . 'table_data.use_orm' . $delimiter . ',create_history as ' . $delimiter . 'table_data.create_history' . $delimiter . ',searchable as ' . $delimiter . 'table_data.searchable' . $delimiter . ',id_table_search_template as ' . $delimiter . 'table_data.id_table_search_template' . $delimiter . ',config_table as ' . $delimiter . 'table_data.config_table' . $delimiter . ',id_data_view_default as ' . $delimiter . 'table_data.id_data_view_default' . $delimiter . ' from table_data';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_table_name()
{
	return $this->p_table_name;
}

public function get_table_name_original()
{
	return $this->p_table_name_original;
}

public function set_table_name($value)
{
	if ($this->p_table_name === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_table_name_is_dirty = true;
	$this->p_table_name = $value;
}

public function set_table_name_original($value)
{
	$this->p_table_name_original = $value;
}

public function get_table_name_is_dirty()
{
	return $this->p_table_name_is_dirty;
}


public function get_location_independant()
{
	return $this->p_location_independant;
}

public function get_location_independant_original()
{
	return $this->p_location_independant_original;
}

public function set_location_independant($value)
{
	if ($this->p_location_independant === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_location_independant_is_dirty = true;
	$this->p_location_independant = $value;
}

public function set_location_independant_original($value)
{
	$this->p_location_independant_original = $value;
}

public function get_location_independant_is_dirty()
{
	return $this->p_location_independant_is_dirty;
}


public function get_static_data()
{
	return $this->p_static_data;
}

public function get_static_data_original()
{
	return $this->p_static_data_original;
}

public function set_static_data($value)
{
	if ($this->p_static_data === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_static_data_is_dirty = true;
	$this->p_static_data = $value;
}

public function set_static_data_original($value)
{
	$this->p_static_data_original = $value;
}

public function get_static_data_is_dirty()
{
	return $this->p_static_data_is_dirty;
}


public function get_use_orm()
{
	return $this->p_use_orm;
}

public function get_use_orm_original()
{
	return $this->p_use_orm_original;
}

public function set_use_orm($value)
{
	if ($this->p_use_orm === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_use_orm_is_dirty = true;
	$this->p_use_orm = $value;
}

public function set_use_orm_original($value)
{
	$this->p_use_orm_original = $value;
}

public function get_use_orm_is_dirty()
{
	return $this->p_use_orm_is_dirty;
}


public function get_create_history()
{
	return $this->p_create_history;
}

public function get_create_history_original()
{
	return $this->p_create_history_original;
}

public function set_create_history($value)
{
	if ($this->p_create_history === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_create_history_is_dirty = true;
	$this->p_create_history = $value;
}

public function set_create_history_original($value)
{
	$this->p_create_history_original = $value;
}

public function get_create_history_is_dirty()
{
	return $this->p_create_history_is_dirty;
}


public function get_searchable()
{
	return $this->p_searchable;
}

public function get_searchable_original()
{
	return $this->p_searchable_original;
}

public function set_searchable($value)
{
	if ($this->p_searchable === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_searchable_is_dirty = true;
	$this->p_searchable = $value;
}

public function set_searchable_original($value)
{
	$this->p_searchable_original = $value;
}

public function get_searchable_is_dirty()
{
	return $this->p_searchable_is_dirty;
}


public function get_id_table_search_template()
{
	return $this->p_id_table_search_template;
}

public function get_id_table_search_template_original()
{
	return $this->p_id_table_search_template_original;
}

public function set_id_table_search_template($value)
{
	if ($this->p_id_table_search_template === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_table_search_template_is_dirty = true;
	$this->p_id_table_search_template = $value;
}

public function set_id_table_search_template_original($value)
{
	$this->p_id_table_search_template_original = $value;
}

public function get_id_table_search_template_is_dirty()
{
	return $this->p_id_table_search_template_is_dirty;
}


public function get_config_table()
{
	return $this->p_config_table;
}

public function get_config_table_original()
{
	return $this->p_config_table_original;
}

public function set_config_table($value)
{
	if ($this->p_config_table === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_config_table_is_dirty = true;
	$this->p_config_table = $value;
}

public function set_config_table_original($value)
{
	$this->p_config_table_original = $value;
}

public function get_config_table_is_dirty()
{
	return $this->p_config_table_is_dirty;
}


public function get_id_data_view_default()
{
	return $this->p_id_data_view_default;
}

public function get_id_data_view_default_original()
{
	return $this->p_id_data_view_default_original;
}

public function set_id_data_view_default($value)
{
	if ($this->p_id_data_view_default === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_data_view_default_is_dirty = true;
	$this->p_id_data_view_default = $value;
}

public function set_id_data_view_default_original($value)
{
	$this->p_id_data_view_default_original = $value;
}

public function get_id_data_view_default_is_dirty()
{
	return $this->p_id_data_view_default_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_table_name_is_dirty = false;
	$this->p_location_independant_is_dirty = false;
	$this->p_static_data_is_dirty = false;
	$this->p_use_orm_is_dirty = false;
	$this->p_create_history_is_dirty = false;
	$this->p_searchable_is_dirty = false;
	$this->p_id_table_search_template_is_dirty = false;
	$this->p_config_table_is_dirty = false;
	$this->p_id_data_view_default_is_dirty = false;
	if ($reset_values)
	{
		$this->p_table_name = $this->p_table_name_original;
		$this->p_location_independant = $this->p_location_independant_original;
		$this->p_static_data = $this->p_static_data_original;
		$this->p_use_orm = $this->p_use_orm_original;
		$this->p_create_history = $this->p_create_history_original;
		$this->p_searchable = $this->p_searchable_original;
		$this->p_id_table_search_template = $this->p_id_table_search_template_original;
		$this->p_config_table = $this->p_config_table_original;
		$this->p_id_data_view_default = $this->p_id_data_view_default_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "table_data.id":
					$this->set_id($val);
					break;
				case "table_data.table_name":
					$this->set_table_name($val);
					$this->set_table_name_original($val);
					break;
				case "table_data.location_independant":
					$this->set_location_independant($val);
					$this->set_location_independant_original($val);
					break;
				case "table_data.static_data":
					$this->set_static_data($val);
					$this->set_static_data_original($val);
					break;
				case "table_data.use_orm":
					$this->set_use_orm($val);
					$this->set_use_orm_original($val);
					break;
				case "table_data.create_history":
					$this->set_create_history($val);
					$this->set_create_history_original($val);
					break;
				case "table_data.searchable":
					$this->set_searchable($val);
					$this->set_searchable_original($val);
					break;
				case "table_data.id_table_search_template":
					$this->set_id_table_search_template($val);
					$this->set_id_table_search_template_original($val);
					break;
				case "table_data.config_table":
					$this->set_config_table($val);
					$this->set_config_table_original($val);
					break;
				case "table_data.id_data_view_default":
					$this->set_id_data_view_default($val);
					$this->set_id_data_view_default_original($val);
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
		$table_data = cls_table_factory::create_instance('table_data');
		$row = $db_manager->fetch_row($result);
		$table_data->fill($row);
		return $table_data;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_table_data.php');
		return cls_save_table_data::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_table_data.php');
		return cls_save_table_data::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_table_datas($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('table_data',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('table_data',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$table_data = cls_table_factory::create_instance('table_data');
				$table_data->fill($row);
				$data[] = $table_data;
			}
		return $data;
	}

function get_data_view_default($db_manager,$application)
	{
		$result = $db_manager->get_records('data_view',$this->get_id_data_view_default());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data_view = cls_table_factory::create_instance('data_view');
		$row = $db_manager->fetch_row($result);
		$data_view->fill($row);
		return $data_view;
	}

function get_table_search_template($db_manager,$application)
	{
		$result = $db_manager->get_records('table_search_template',$this->get_id_table_search_template());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$table_search_template = cls_table_factory::create_instance('table_search_template');
		$row = $db_manager->fetch_row($result);
		$table_search_template->fill($row);
		return $table_search_template;
	}

public function get_address($table_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($table_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$table_datas,'id_data');
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

public function get_communication_reason($table_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($table_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$table_datas,'id_data');
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

public function get_data_change($table_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($table_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$table_datas,'id_data');
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

public function get_data_help($table_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($table_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$table_datas,'id_data');
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

public function get_data_location($table_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($table_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$table_datas,'id_data');
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

public function get_data_posting($table_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($table_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$table_datas,'id_data');
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

public function get_data_property($table_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($table_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$table_datas,'id_data');
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

public function get_offer_event($table_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($table_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$table_datas,'id_data');
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

public function get_supplier_data($table_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($table_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$table_datas,'id_data');
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

public function get_table_test_data($table_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($table_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$table_datas,'id_data');
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

public function get_data_translation($table_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($table_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$table_datas,'id_data');
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

public function get_dms($table_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($table_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$table_datas,'id_data');
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

public function get_data_relation_id_data1($table_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($table_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$table_datas,'id_data1');
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

public function get_data_relation_id_data2($table_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($table_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$table_datas,'id_data2');
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

public function get_data_property_id_link_data($table_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($table_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$table_datas,'id_link_data');
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
