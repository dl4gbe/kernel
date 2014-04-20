<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_menu_item extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_data_view = null;
private $p_id_data_view_original = null;
private $p_table_name = null;
private $p_table_name_original = null;
private $p_parameters = null;
private $p_parameters_original = null;
private $p_active = null;
private $p_active_original = null;
private $p_imagepath = null;
private $p_imagepath_original = null;
private $p_order = null;
private $p_order_original = null;
private $p_id_control = null;
private $p_id_control_original = null;
private $p_name = null;
private $p_name_original = null;
private $p_id_menu_group = null;
private $p_id_menu_group_original = null;

private $p_id_data_view_is_dirty = false;
private $p_table_name_is_dirty = false;
private $p_parameters_is_dirty = false;
private $p_active_is_dirty = false;
private $p_imagepath_is_dirty = false;
private $p_order_is_dirty = false;
private $p_id_control_is_dirty = false;
private $p_name_is_dirty = false;
private $p_id_menu_group_is_dirty = false;

public function _get_table_name()
{
	return 'menu_item';
}

public function get_table_fields()
{
	return array('id_data_view','table_name','parameters','active','imagepath','order','id_control','name','id_menu_group','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select id_data_view as ' . $delimiter . 'menu_item.id_data_view' . $delimiter . ',table_name as ' . $delimiter . 'menu_item.table_name' . $delimiter . ',parameters as ' . $delimiter . 'menu_item.parameters' . $delimiter . ',active as ' . $delimiter . 'menu_item.active' . $delimiter . ',imagepath as ' . $delimiter . 'menu_item.imagepath' . $delimiter . ',order as ' . $delimiter . 'menu_item.order' . $delimiter . ',id_control as ' . $delimiter . 'menu_item.id_control' . $delimiter . ',name as ' . $delimiter . 'menu_item.name' . $delimiter . ',id_menu_group as ' . $delimiter . 'menu_item.id_menu_group' . $delimiter . ',id as ' . $delimiter . 'menu_item.id' . $delimiter . ' from menu_item';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}

public function get_id_data_view()
{
	return $this->p_id_data_view;
}

public function get_id_data_view_original()
{
	return $this->p_id_data_view_original;
}

public function set_id_data_view($value)
{
	if ($this->p_id_data_view === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_data_view_is_dirty = true;
	$this->p_id_data_view = $value;
}

public function set_id_data_view_original($value)
{
	$this->p_id_data_view_original = $value;
}

public function get_id_data_view_is_dirty()
{
	return $this->p_id_data_view_is_dirty;
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


public function get_parameters()
{
	return $this->p_parameters;
}

public function get_parameters_original()
{
	return $this->p_parameters_original;
}

public function set_parameters($value)
{
	if ($this->p_parameters === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_parameters_is_dirty = true;
	$this->p_parameters = $value;
}

public function set_parameters_original($value)
{
	$this->p_parameters_original = $value;
}

public function get_parameters_is_dirty()
{
	return $this->p_parameters_is_dirty;
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


public function get_imagepath()
{
	return $this->p_imagepath;
}

public function get_imagepath_original()
{
	return $this->p_imagepath_original;
}

public function set_imagepath($value)
{
	if ($this->p_imagepath === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_imagepath_is_dirty = true;
	$this->p_imagepath = $value;
}

public function set_imagepath_original($value)
{
	$this->p_imagepath_original = $value;
}

public function get_imagepath_is_dirty()
{
	return $this->p_imagepath_is_dirty;
}


public function get_order()
{
	return $this->p_order;
}

public function get_order_original()
{
	return $this->p_order_original;
}

public function set_order($value)
{
	if ($this->p_order === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_order_is_dirty = true;
	$this->p_order = $value;
}

public function set_order_original($value)
{
	$this->p_order_original = $value;
}

public function get_order_is_dirty()
{
	return $this->p_order_is_dirty;
}


public function get_id_control()
{
	return $this->p_id_control;
}

public function get_id_control_original()
{
	return $this->p_id_control_original;
}

public function set_id_control($value)
{
	if ($this->p_id_control === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_control_is_dirty = true;
	$this->p_id_control = $value;
}

public function set_id_control_original($value)
{
	$this->p_id_control_original = $value;
}

public function get_id_control_is_dirty()
{
	return $this->p_id_control_is_dirty;
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


public function get_id_menu_group()
{
	return $this->p_id_menu_group;
}

public function get_id_menu_group_original()
{
	return $this->p_id_menu_group_original;
}

public function set_id_menu_group($value)
{
	if ($this->p_id_menu_group === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_menu_group_is_dirty = true;
	$this->p_id_menu_group = $value;
}

public function set_id_menu_group_original($value)
{
	$this->p_id_menu_group_original = $value;
}

public function get_id_menu_group_is_dirty()
{
	return $this->p_id_menu_group_is_dirty;
}



public function reset_dirty($reset_values = false)
{
	$this->p_id_data_view_is_dirty = false;
	$this->p_table_name_is_dirty = false;
	$this->p_parameters_is_dirty = false;
	$this->p_active_is_dirty = false;
	$this->p_imagepath_is_dirty = false;
	$this->p_order_is_dirty = false;
	$this->p_id_control_is_dirty = false;
	$this->p_name_is_dirty = false;
	$this->p_id_menu_group_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_data_view = $this->p_id_data_view_original;
		$this->p_table_name = $this->p_table_name_original;
		$this->p_parameters = $this->p_parameters_original;
		$this->p_active = $this->p_active_original;
		$this->p_imagepath = $this->p_imagepath_original;
		$this->p_order = $this->p_order_original;
		$this->p_id_control = $this->p_id_control_original;
		$this->p_name = $this->p_name_original;
		$this->p_id_menu_group = $this->p_id_menu_group_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "menu_item.id_data_view":
					$this->set_id_data_view($val);
					$this->set_id_data_view_original($val);
					break;
				case "menu_item.table_name":
					$this->set_table_name($val);
					$this->set_table_name_original($val);
					break;
				case "menu_item.parameters":
					$this->set_parameters($val);
					$this->set_parameters_original($val);
					break;
				case "menu_item.active":
					$this->set_active($val);
					$this->set_active_original($val);
					break;
				case "menu_item.imagepath":
					$this->set_imagepath($val);
					$this->set_imagepath_original($val);
					break;
				case "menu_item.order":
					$this->set_order($val);
					$this->set_order_original($val);
					break;
				case "menu_item.id_control":
					$this->set_id_control($val);
					$this->set_id_control_original($val);
					break;
				case "menu_item.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "menu_item.id_menu_group":
					$this->set_id_menu_group($val);
					$this->set_id_menu_group_original($val);
					break;
				case "menu_item.id":
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
		$menu_item = cls_table_factory::create_instance('menu_item');
		$row = $db_manager->fetch_row($result);
		$menu_item->fill($row);
		return $menu_item;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_menu_item.php');
		return cls_save_menu_item::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_menu_item.php');
		return cls_save_menu_item::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_menu_items($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('menu_item',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('menu_item',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$menu_item = cls_table_factory::create_instance('menu_item');
				$menu_item->fill($row);
				$data[] = $menu_item;
			}
		return $data;
	}

function get_control($db_manager,$application)
	{
		$result = $db_manager->get_records('control',$this->get_id_control());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$control = cls_table_factory::create_instance('control');
		$row = $db_manager->fetch_row($result);
		$control->fill($row);
		return $control;
	}

function get_data_view($db_manager,$application)
	{
		$result = $db_manager->get_records('data_view',$this->get_id_data_view());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data_view = cls_table_factory::create_instance('data_view');
		$row = $db_manager->fetch_row($result);
		$data_view->fill($row);
		return $data_view;
	}

function get_menu_group($db_manager,$application)
	{
		$result = $db_manager->get_records('menu_group',$this->get_id_menu_group());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$menu_group = cls_table_factory::create_instance('menu_group');
		$row = $db_manager->fetch_row($result);
		$menu_group->fill($row);
		return $menu_group;
	}

public function get_table_test_data($menu_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($menu_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$menu_items,'id_data');
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

public function get_communication_reason($menu_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($menu_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$menu_items,'id_data');
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

public function get_data_change($menu_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($menu_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$menu_items,'id_data');
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

public function get_data_help($menu_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($menu_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$menu_items,'id_data');
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

public function get_data_location($menu_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($menu_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$menu_items,'id_data');
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

public function get_data_posting($menu_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($menu_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$menu_items,'id_data');
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

public function get_offer_event($menu_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($menu_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$menu_items,'id_data');
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

public function get_supplier_data($menu_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($menu_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$menu_items,'id_data');
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

public function get_address($menu_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($menu_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$menu_items,'id_data');
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

public function get_data_property($menu_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($menu_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$menu_items,'id_data');
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

public function get_data_translation($menu_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($menu_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$menu_items,'id_data');
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

public function get_dms($menu_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($menu_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$menu_items,'id_data');
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

public function get_data_relation_id_data1($menu_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($menu_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$menu_items,'id_data1');
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

public function get_data_relation_id_data2($menu_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($menu_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$menu_items,'id_data2');
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

public function get_data_property_id_link_data($menu_items,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($menu_items,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$menu_items,'id_link_data');
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
