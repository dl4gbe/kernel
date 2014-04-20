<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_data_view extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_control_detail = null;
private $p_id_control_detail_original = null;
private $p_has_edit_form = null;
private $p_has_edit_form_original = null;
private $p_id_ribbonbar = null;
private $p_id_ribbonbar_original = null;
private $p_caption = null;
private $p_caption_original = null;
private $p_table_name = null;
private $p_table_name_original = null;
private $p_file_name = null;
private $p_file_name_original = null;
private $p_name = null;
private $p_name_original = null;

private $p_id_control_detail_is_dirty = false;
private $p_has_edit_form_is_dirty = false;
private $p_id_ribbonbar_is_dirty = false;
private $p_caption_is_dirty = false;
private $p_table_name_is_dirty = false;
private $p_file_name_is_dirty = false;
private $p_name_is_dirty = false;

public function _get_table_name()
{
	return 'data_view';
}

public function get_table_fields()
{
	return array('id_control_detail','has_edit_form','id_ribbonbar','caption','table_name','file_name','name','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select id_control_detail as ' . $delimiter . 'data_view.id_control_detail' . $delimiter . ',has_edit_form as ' . $delimiter . 'data_view.has_edit_form' . $delimiter . ',id_ribbonbar as ' . $delimiter . 'data_view.id_ribbonbar' . $delimiter . ',caption as ' . $delimiter . 'data_view.caption' . $delimiter . ',table_name as ' . $delimiter . 'data_view.table_name' . $delimiter . ',file_name as ' . $delimiter . 'data_view.file_name' . $delimiter . ',name as ' . $delimiter . 'data_view.name' . $delimiter . ',id as ' . $delimiter . 'data_view.id' . $delimiter . ' from data_view';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}

public function get_id_control_detail()
{
	return $this->p_id_control_detail;
}

public function get_id_control_detail_original()
{
	return $this->p_id_control_detail_original;
}

public function set_id_control_detail($value)
{
	if ($this->p_id_control_detail === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_control_detail_is_dirty = true;
	$this->p_id_control_detail = $value;
}

public function set_id_control_detail_original($value)
{
	$this->p_id_control_detail_original = $value;
}

public function get_id_control_detail_is_dirty()
{
	return $this->p_id_control_detail_is_dirty;
}


public function get_has_edit_form()
{
	return $this->p_has_edit_form;
}

public function get_has_edit_form_original()
{
	return $this->p_has_edit_form_original;
}

public function set_has_edit_form($value)
{
	if ($this->p_has_edit_form === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_has_edit_form_is_dirty = true;
	$this->p_has_edit_form = $value;
}

public function set_has_edit_form_original($value)
{
	$this->p_has_edit_form_original = $value;
}

public function get_has_edit_form_is_dirty()
{
	return $this->p_has_edit_form_is_dirty;
}


public function get_id_ribbonbar()
{
	return $this->p_id_ribbonbar;
}

public function get_id_ribbonbar_original()
{
	return $this->p_id_ribbonbar_original;
}

public function set_id_ribbonbar($value)
{
	if ($this->p_id_ribbonbar === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_ribbonbar_is_dirty = true;
	$this->p_id_ribbonbar = $value;
}

public function set_id_ribbonbar_original($value)
{
	$this->p_id_ribbonbar_original = $value;
}

public function get_id_ribbonbar_is_dirty()
{
	return $this->p_id_ribbonbar_is_dirty;
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


public function get_file_name()
{
	return $this->p_file_name;
}

public function get_file_name_original()
{
	return $this->p_file_name_original;
}

public function set_file_name($value)
{
	if ($this->p_file_name === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_file_name_is_dirty = true;
	$this->p_file_name = $value;
}

public function set_file_name_original($value)
{
	$this->p_file_name_original = $value;
}

public function get_file_name_is_dirty()
{
	return $this->p_file_name_is_dirty;
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



public function reset_dirty($reset_values = false)
{
	$this->p_id_control_detail_is_dirty = false;
	$this->p_has_edit_form_is_dirty = false;
	$this->p_id_ribbonbar_is_dirty = false;
	$this->p_caption_is_dirty = false;
	$this->p_table_name_is_dirty = false;
	$this->p_file_name_is_dirty = false;
	$this->p_name_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_control_detail = $this->p_id_control_detail_original;
		$this->p_has_edit_form = $this->p_has_edit_form_original;
		$this->p_id_ribbonbar = $this->p_id_ribbonbar_original;
		$this->p_caption = $this->p_caption_original;
		$this->p_table_name = $this->p_table_name_original;
		$this->p_file_name = $this->p_file_name_original;
		$this->p_name = $this->p_name_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "data_view.id_control_detail":
					$this->set_id_control_detail($val);
					$this->set_id_control_detail_original($val);
					break;
				case "data_view.has_edit_form":
					$this->set_has_edit_form($val);
					$this->set_has_edit_form_original($val);
					break;
				case "data_view.id_ribbonbar":
					$this->set_id_ribbonbar($val);
					$this->set_id_ribbonbar_original($val);
					break;
				case "data_view.caption":
					$this->set_caption($val);
					$this->set_caption_original($val);
					break;
				case "data_view.table_name":
					$this->set_table_name($val);
					$this->set_table_name_original($val);
					break;
				case "data_view.file_name":
					$this->set_file_name($val);
					$this->set_file_name_original($val);
					break;
				case "data_view.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "data_view.id":
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
		$data_view = cls_table_factory::create_instance('data_view');
		$row = $db_manager->fetch_row($result);
		$data_view->fill($row);
		return $data_view;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_data_view.php');
		return cls_save_data_view::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_data_view.php');
		return cls_save_data_view::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_data_views($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('data_view',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('data_view',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_view = cls_table_factory::create_instance('data_view');
				$data_view->fill($row);
				$data[] = $data_view;
			}
		return $data;
	}

function get_control_detail($db_manager,$application)
	{
		$result = $db_manager->get_records('control',$this->get_id_control_detail());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$control = cls_table_factory::create_instance('control');
		$row = $db_manager->fetch_row($result);
		$control->fill($row);
		return $control;
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

//changed 1
public function get_menu_item($db_manager,$application)
	{
		$result = $db_manager->get_records('menu_item',$this->get_id(),'id_data_view');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$menu_item = cls_table_factory::create_instance('menu_item');
		$row = $db_manager->fetch_row($result);
		$menu_item->fill($row);
		return $menu_item;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_menu_items_by_data_view($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('menu_item',$this->get_id(),'id_data_view');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$menu_item = cls_table_factory::create_instance('menu_item');
				$menu_item->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $menu_item;
				}
				else
				{
					$data[] = $menu_item;
				}
			}
		return $data;
	}

public function get_multi_menu_items_by_data_view($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('menu_item',$data_views,'id_data_view');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$menu_item = cls_table_factory::create_instance('menu_item');
				$menu_item->fill($row);
				if (!array_key_exists($data[$row['id_data_view']]))
				{
					$data[$row['id_data_view']] = array();
				}
				$data[$row['id_data_view']][] = $menu_item;
			}
		return $data;
	}

//changed 1
public function get_menu($db_manager,$application)
	{
		$result = $db_manager->get_records('menu',$this->get_id(),'id_data_view');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$menu = cls_table_factory::create_instance('menu');
		$row = $db_manager->fetch_row($result);
		$menu->fill($row);
		return $menu;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_menus_by_data_view($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('menu',$this->get_id(),'id_data_view');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$menu = cls_table_factory::create_instance('menu');
				$menu->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $menu;
				}
				else
				{
					$data[] = $menu;
				}
			}
		return $data;
	}

public function get_multi_menus_by_data_view($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('menu',$data_views,'id_data_view');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$menu = cls_table_factory::create_instance('menu');
				$menu->fill($row);
				if (!array_key_exists($data[$row['id_data_view']]))
				{
					$data[$row['id_data_view']] = array();
				}
				$data[$row['id_data_view']][] = $menu;
			}
		return $data;
	}

//changed 1
public function get_data_view_restriction($db_manager,$application)
	{
		$result = $db_manager->get_records('data_view_restriction',$this->get_id(),'id_data_view');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data_view_restriction = cls_table_factory::create_instance('data_view_restriction');
		$row = $db_manager->fetch_row($result);
		$data_view_restriction->fill($row);
		return $data_view_restriction;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_data_view_restrictions_by_data_view($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_view_restriction',$this->get_id(),'id_data_view');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_view_restriction = cls_table_factory::create_instance('data_view_restriction');
				$data_view_restriction->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_view_restriction;
				}
				else
				{
					$data[] = $data_view_restriction;
				}
			}
		return $data;
	}

public function get_multi_data_view_restrictions_by_data_view($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_view_restriction',$data_views,'id_data_view');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_view_restriction = cls_table_factory::create_instance('data_view_restriction');
				$data_view_restriction->fill($row);
				if (!array_key_exists($data[$row['id_data_view']]))
				{
					$data[$row['id_data_view']] = array();
				}
				$data[$row['id_data_view']][] = $data_view_restriction;
			}
		return $data;
	}

//changed 1
public function get_data_view_table($db_manager,$application)
	{
		$result = $db_manager->get_records('data_view_table',$this->get_id(),'id_data_view');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data_view_table = cls_table_factory::create_instance('data_view_table');
		$row = $db_manager->fetch_row($result);
		$data_view_table->fill($row);
		return $data_view_table;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_data_view_tables_by_data_view($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_view_table',$this->get_id(),'id_data_view');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_view_table = cls_table_factory::create_instance('data_view_table');
				$data_view_table->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_view_table;
				}
				else
				{
					$data[] = $data_view_table;
				}
			}
		return $data;
	}

public function get_multi_data_view_tables_by_data_view($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_view_table',$data_views,'id_data_view');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_view_table = cls_table_factory::create_instance('data_view_table');
				$data_view_table->fill($row);
				if (!array_key_exists($data[$row['id_data_view']]))
				{
					$data[$row['id_data_view']] = array();
				}
				$data[$row['id_data_view']][] = $data_view_table;
			}
		return $data;
	}

//changed 1
public function get_table_data_by_default($db_manager,$application)
	{
		$result = $db_manager->get_records('table_data',$this->get_id(),'id_data_view_default');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$table_data = cls_table_factory::create_instance('table_data');
		$row = $db_manager->fetch_row($result);
		$table_data->fill($row);
		return $table_data;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_table_datas_by_data_view_default($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('table_data',$this->get_id(),'id_data_view_default');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$table_data = cls_table_factory::create_instance('table_data');
				$table_data->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $table_data;
				}
				else
				{
					$data[] = $table_data;
				}
			}
		return $data;
	}

public function get_multi_table_datas_by_data_view_default($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_data',$data_views,'id_data_view_default');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$table_data = cls_table_factory::create_instance('table_data');
				$table_data->fill($row);
				if (!array_key_exists($data[$row['id_data_view_default']]))
				{
					$data[$row['id_data_view_default']] = array();
				}
				$data[$row['id_data_view_default']][] = $table_data;
			}
		return $data;
	}

public function get_table_test_data($data_views,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$data_views,'id_data');
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

public function get_communication_reason($data_views,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$data_views,'id_data');
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

public function get_data_change($data_views,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$data_views,'id_data');
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

public function get_data_help($data_views,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$data_views,'id_data');
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

public function get_data_location($data_views,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$data_views,'id_data');
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

public function get_data_posting($data_views,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$data_views,'id_data');
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

public function get_offer_event($data_views,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$data_views,'id_data');
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

public function get_supplier_data($data_views,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$data_views,'id_data');
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

public function get_address($data_views,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$data_views,'id_data');
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

public function get_data_property($data_views,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$data_views,'id_data');
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

public function get_data_translation($data_views,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$data_views,'id_data');
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

public function get_dms($data_views,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$data_views,'id_data');
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

public function get_data_relation_id_data1($data_views,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$data_views,'id_data1');
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

public function get_data_relation_id_data2($data_views,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$data_views,'id_data2');
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

public function get_data_property_id_link_data($data_views,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($data_views,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$data_views,'id_link_data');
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
