<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_ribbonbar_group extends cls_datatable_base
{
private static $p_cmmon;
private $p_active = null;
private $p_active_original = null;
private $p_group_order = null;
private $p_group_order_original = null;
private $p_imagepath = null;
private $p_imagepath_original = null;
private $p_name = null;
private $p_name_original = null;
private $p_id_ribbonbar_tab = null;
private $p_id_ribbonbar_tab_original = null;

private $p_active_is_dirty = false;
private $p_group_order_is_dirty = false;
private $p_imagepath_is_dirty = false;
private $p_name_is_dirty = false;
private $p_id_ribbonbar_tab_is_dirty = false;

public function _get_table_name()
{
	return 'ribbonbar_group';
}

public function get_table_fields()
{
	return array('active','group_order','imagepath','name','id_ribbonbar_tab','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select active as ' . $delimiter . 'ribbonbar_group.active' . $delimiter . ',group_order as ' . $delimiter . 'ribbonbar_group.group_order' . $delimiter . ',imagepath as ' . $delimiter . 'ribbonbar_group.imagepath' . $delimiter . ',name as ' . $delimiter . 'ribbonbar_group.name' . $delimiter . ',id_ribbonbar_tab as ' . $delimiter . 'ribbonbar_group.id_ribbonbar_tab' . $delimiter . ',id as ' . $delimiter . 'ribbonbar_group.id' . $delimiter . ' from ribbonbar_group';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
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


public function get_group_order()
{
	return $this->p_group_order;
}

public function get_group_order_original()
{
	return $this->p_group_order_original;
}

public function set_group_order($value)
{
	if ($this->p_group_order === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_group_order_is_dirty = true;
	$this->p_group_order = $value;
}

public function set_group_order_original($value)
{
	$this->p_group_order_original = $value;
}

public function get_group_order_is_dirty()
{
	return $this->p_group_order_is_dirty;
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


public function get_id_ribbonbar_tab()
{
	return $this->p_id_ribbonbar_tab;
}

public function get_id_ribbonbar_tab_original()
{
	return $this->p_id_ribbonbar_tab_original;
}

public function set_id_ribbonbar_tab($value)
{
	if ($this->p_id_ribbonbar_tab === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_ribbonbar_tab_is_dirty = true;
	$this->p_id_ribbonbar_tab = $value;
}

public function set_id_ribbonbar_tab_original($value)
{
	$this->p_id_ribbonbar_tab_original = $value;
}

public function get_id_ribbonbar_tab_is_dirty()
{
	return $this->p_id_ribbonbar_tab_is_dirty;
}



public function reset_dirty($reset_values = false)
{
	$this->p_active_is_dirty = false;
	$this->p_group_order_is_dirty = false;
	$this->p_imagepath_is_dirty = false;
	$this->p_name_is_dirty = false;
	$this->p_id_ribbonbar_tab_is_dirty = false;
	if ($reset_values)
	{
		$this->p_active = $this->p_active_original;
		$this->p_group_order = $this->p_group_order_original;
		$this->p_imagepath = $this->p_imagepath_original;
		$this->p_name = $this->p_name_original;
		$this->p_id_ribbonbar_tab = $this->p_id_ribbonbar_tab_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "ribbonbar_group.active":
					$this->set_active($val);
					$this->set_active_original($val);
					break;
				case "ribbonbar_group.group_order":
					$this->set_group_order($val);
					$this->set_group_order_original($val);
					break;
				case "ribbonbar_group.imagepath":
					$this->set_imagepath($val);
					$this->set_imagepath_original($val);
					break;
				case "ribbonbar_group.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "ribbonbar_group.id_ribbonbar_tab":
					$this->set_id_ribbonbar_tab($val);
					$this->set_id_ribbonbar_tab_original($val);
					break;
				case "ribbonbar_group.id":
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
		$ribbonbar_group = cls_table_factory::create_instance('ribbonbar_group');
		$row = $db_manager->fetch_row($result);
		$ribbonbar_group->fill($row);
		return $ribbonbar_group;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_ribbonbar_group.php');
		return cls_save_ribbonbar_group::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_ribbonbar_group.php');
		return cls_save_ribbonbar_group::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_ribbonbar_groups($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('ribbonbar_group',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('ribbonbar_group',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$ribbonbar_group = cls_table_factory::create_instance('ribbonbar_group');
				$ribbonbar_group->fill($row);
				$data[] = $ribbonbar_group;
			}
		return $data;
	}

function get_ribbonbar($db_manager,$application)
	{
		$result = $db_manager->get_records('ribbonbar',$this->get_id_ribbonbar());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$ribbonbar = cls_table_factory::create_instance('ribbonbar');
		$row = $db_manager->fetch_row($result);
		$ribbonbar->fill($row);
		return $ribbonbar;
	}

function get_ribbonbar_tab($db_manager,$application)
	{
		$result = $db_manager->get_records('ribbonbar_tab',$this->get_id_ribbonbar_tab());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$ribbonbar_tab = cls_table_factory::create_instance('ribbonbar_tab');
		$row = $db_manager->fetch_row($result);
		$ribbonbar_tab->fill($row);
		return $ribbonbar_tab;
	}

//changed 1
public function get_ribbonbar_item($db_manager,$application)
	{
		$result = $db_manager->get_records('ribbonbar_item',$this->get_id(),'id_ribbonbar_group');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$ribbonbar_item = cls_table_factory::create_instance('ribbonbar_item');
		$row = $db_manager->fetch_row($result);
		$ribbonbar_item->fill($row);
		return $ribbonbar_item;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_ribbonbar_items_by_ribbonbar_group($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('ribbonbar_item',$this->get_id(),'id_ribbonbar_group');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$ribbonbar_item = cls_table_factory::create_instance('ribbonbar_item');
				$ribbonbar_item->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $ribbonbar_item;
				}
				else
				{
					$data[] = $ribbonbar_item;
				}
			}
		return $data;
	}

public function get_multi_ribbonbar_items_by_ribbonbar_group($ribbonbar_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('ribbonbar_item',$ribbonbar_groups,'id_ribbonbar_group');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$ribbonbar_item = cls_table_factory::create_instance('ribbonbar_item');
				$ribbonbar_item->fill($row);
				if (!array_key_exists($data[$row['id_ribbonbar_group']]))
				{
					$data[$row['id_ribbonbar_group']] = array();
				}
				$data[$row['id_ribbonbar_group']][] = $ribbonbar_item;
			}
		return $data;
	}

public function get_table_test_data($ribbonbar_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($ribbonbar_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$ribbonbar_groups,'id_data');
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

public function get_communication_reason($ribbonbar_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($ribbonbar_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$ribbonbar_groups,'id_data');
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

public function get_data_change($ribbonbar_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($ribbonbar_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$ribbonbar_groups,'id_data');
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

public function get_data_help($ribbonbar_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($ribbonbar_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$ribbonbar_groups,'id_data');
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

public function get_data_location($ribbonbar_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($ribbonbar_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$ribbonbar_groups,'id_data');
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

public function get_data_posting($ribbonbar_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($ribbonbar_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$ribbonbar_groups,'id_data');
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

public function get_offer_event($ribbonbar_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($ribbonbar_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$ribbonbar_groups,'id_data');
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

public function get_supplier_data($ribbonbar_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($ribbonbar_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$ribbonbar_groups,'id_data');
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

public function get_address($ribbonbar_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($ribbonbar_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$ribbonbar_groups,'id_data');
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

public function get_data_property($ribbonbar_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($ribbonbar_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$ribbonbar_groups,'id_data');
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

public function get_data_translation($ribbonbar_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($ribbonbar_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$ribbonbar_groups,'id_data');
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

public function get_dms($ribbonbar_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($ribbonbar_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$ribbonbar_groups,'id_data');
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

public function get_data_relation_id_data1($ribbonbar_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($ribbonbar_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$ribbonbar_groups,'id_data1');
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

public function get_data_relation_id_data2($ribbonbar_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($ribbonbar_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$ribbonbar_groups,'id_data2');
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

public function get_data_property_id_link_data($ribbonbar_groups,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($ribbonbar_groups,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$ribbonbar_groups,'id_link_data');
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
