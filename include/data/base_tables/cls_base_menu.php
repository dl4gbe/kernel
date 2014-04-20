<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_menu extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_data_view = null;
private $p_id_data_view_original = null;
private $p_caption = null;
private $p_caption_original = null;
private $p_id_menu_template = null;
private $p_id_menu_template_original = null;
private $p_name = null;
private $p_name_original = null;
private $p_id_application = null;
private $p_id_application_original = null;

private $p_id_data_view_is_dirty = false;
private $p_caption_is_dirty = false;
private $p_id_menu_template_is_dirty = false;
private $p_name_is_dirty = false;
private $p_id_application_is_dirty = false;

public function _get_table_name()
{
	return 'menu';
}

public function get_table_fields()
{
	return array('id_data_view','caption','id_menu_template','name','id_application','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select id_data_view as ' . $delimiter . 'menu.id_data_view' . $delimiter . ',caption as ' . $delimiter . 'menu.caption' . $delimiter . ',id_menu_template as ' . $delimiter . 'menu.id_menu_template' . $delimiter . ',name as ' . $delimiter . 'menu.name' . $delimiter . ',id_application as ' . $delimiter . 'menu.id_application' . $delimiter . ',id as ' . $delimiter . 'menu.id' . $delimiter . ' from menu';
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


public function get_caption()
{
	return $this->p_caption;
}

public function get_caption_original()
{
	return $this->p_caption_original;
}

public function set_caption($value)
{
	if ($this->p_caption === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_caption_is_dirty = true;
	$this->p_caption = $value;
}

public function set_caption_original($value)
{
	$this->p_caption_original = $value;
}

public function get_caption_is_dirty()
{
	return $this->p_caption_is_dirty;
}


public function get_id_menu_template()
{
	return $this->p_id_menu_template;
}

public function get_id_menu_template_original()
{
	return $this->p_id_menu_template_original;
}

public function set_id_menu_template($value)
{
	if ($this->p_id_menu_template === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_menu_template_is_dirty = true;
	$this->p_id_menu_template = $value;
}

public function set_id_menu_template_original($value)
{
	$this->p_id_menu_template_original = $value;
}

public function get_id_menu_template_is_dirty()
{
	return $this->p_id_menu_template_is_dirty;
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


public function get_id_application()
{
	return $this->p_id_application;
}

public function get_id_application_original()
{
	return $this->p_id_application_original;
}

public function set_id_application($value)
{
	if ($this->p_id_application === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_application_is_dirty = true;
	$this->p_id_application = $value;
}

public function set_id_application_original($value)
{
	$this->p_id_application_original = $value;
}

public function get_id_application_is_dirty()
{
	return $this->p_id_application_is_dirty;
}



public function reset_dirty($reset_values = false)
{
	$this->p_id_data_view_is_dirty = false;
	$this->p_caption_is_dirty = false;
	$this->p_id_menu_template_is_dirty = false;
	$this->p_name_is_dirty = false;
	$this->p_id_application_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_data_view = $this->p_id_data_view_original;
		$this->p_caption = $this->p_caption_original;
		$this->p_id_menu_template = $this->p_id_menu_template_original;
		$this->p_name = $this->p_name_original;
		$this->p_id_application = $this->p_id_application_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "menu.id_data_view":
					$this->set_id_data_view($val);
					$this->set_id_data_view_original($val);
					break;
				case "menu.caption":
					$this->set_caption($val);
					$this->set_caption_original($val);
					break;
				case "menu.id_menu_template":
					$this->set_id_menu_template($val);
					$this->set_id_menu_template_original($val);
					break;
				case "menu.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "menu.id_application":
					$this->set_id_application($val);
					$this->set_id_application_original($val);
					break;
				case "menu.id":
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
		$menu = cls_table_factory::create_instance('menu');
		$row = $db_manager->fetch_row($result);
		$menu->fill($row);
		return $menu;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_menu.php');
		return cls_save_menu::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_menu.php');
		return cls_save_menu::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_menus($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('menu',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('menu',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$menu = cls_table_factory::create_instance('menu');
				$menu->fill($row);
				$data[] = $menu;
			}
		return $data;
	}

function get_application($db_manager,$application)
	{
		$result = $db_manager->get_records('application',$this->get_id_application());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$application = cls_table_factory::create_instance('application');
		$row = $db_manager->fetch_row($result);
		$application->fill($row);
		return $application;
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

function get_menu_template($db_manager,$application)
	{
		$result = $db_manager->get_records('menu_template',$this->get_id_menu_template());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$menu_template = cls_table_factory::create_instance('menu_template');
		$row = $db_manager->fetch_row($result);
		$menu_template->fill($row);
		return $menu_template;
	}

//changed 1
public function get_menu_access_group($db_manager,$application)
	{
		$result = $db_manager->get_records('menu_access_group',$this->get_id(),'id_menu');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$menu_access_group = cls_table_factory::create_instance('menu_access_group');
		$row = $db_manager->fetch_row($result);
		$menu_access_group->fill($row);
		return $menu_access_group;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_menu_access_groups_by_menu($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('menu_access_group',$this->get_id(),'id_menu');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$menu_access_group = cls_table_factory::create_instance('menu_access_group');
				$menu_access_group->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $menu_access_group;
				}
				else
				{
					$data[] = $menu_access_group;
				}
			}
		return $data;
	}

public function get_multi_menu_access_groups_by_menu($menus,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('menu_access_group',$menus,'id_menu');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$menu_access_group = cls_table_factory::create_instance('menu_access_group');
				$menu_access_group->fill($row);
				if (!array_key_exists($data[$row['id_menu']]))
				{
					$data[$row['id_menu']] = array();
				}
				$data[$row['id_menu']][] = $menu_access_group;
			}
		return $data;
	}

//changed 1
public function get_menu_group($db_manager,$application)
	{
		$result = $db_manager->get_records('menu_group',$this->get_id(),'id_menu');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$menu_group = cls_table_factory::create_instance('menu_group');
		$row = $db_manager->fetch_row($result);
		$menu_group->fill($row);
		return $menu_group;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_menu_groups_by_menu($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('menu_group',$this->get_id(),'id_menu');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$menu_group = cls_table_factory::create_instance('menu_group');
				$menu_group->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $menu_group;
				}
				else
				{
					$data[] = $menu_group;
				}
			}
		return $data;
	}

public function get_multi_menu_groups_by_menu($menus,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('menu_group',$menus,'id_menu');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$menu_group = cls_table_factory::create_instance('menu_group');
				$menu_group->fill($row);
				if (!array_key_exists($data[$row['id_menu']]))
				{
					$data[$row['id_menu']] = array();
				}
				$data[$row['id_menu']][] = $menu_group;
			}
		return $data;
	}

public function get_table_test_data($menus,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($menus,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$menus,'id_data');
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

public function get_communication_reason($menus,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($menus,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$menus,'id_data');
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

public function get_data_change($menus,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($menus,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$menus,'id_data');
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

public function get_data_help($menus,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($menus,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$menus,'id_data');
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

public function get_data_location($menus,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($menus,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$menus,'id_data');
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

public function get_data_posting($menus,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($menus,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$menus,'id_data');
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

public function get_offer_event($menus,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($menus,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$menus,'id_data');
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

public function get_supplier_data($menus,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($menus,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$menus,'id_data');
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

public function get_address($menus,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($menus,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$menus,'id_data');
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

public function get_data_property($menus,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($menus,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$menus,'id_data');
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

public function get_data_translation($menus,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($menus,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$menus,'id_data');
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

public function get_dms($menus,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($menus,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$menus,'id_data');
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

public function get_data_relation_id_data1($menus,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($menus,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$menus,'id_data1');
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

public function get_data_relation_id_data2($menus,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($menus,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$menus,'id_data2');
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

public function get_data_property_id_link_data($menus,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($menus,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$menus,'id_link_data');
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
