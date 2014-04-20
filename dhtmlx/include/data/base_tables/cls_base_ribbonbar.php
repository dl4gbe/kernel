<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_ribbonbar extends cls_datatable_base
{
private static $p_cmmon;
private $p_name = null;
private $p_name_original = null;
private $p_id_ribbonbar_template = null;
private $p_id_ribbonbar_template_original = null;
private $p_has_edit_form = null;
private $p_has_edit_form_original = null;

private $p_name_is_dirty = false;
private $p_id_ribbonbar_template_is_dirty = false;
private $p_has_edit_form_is_dirty = false;

public function _get_table_name()
{
	return 'ribbonbar';
}

public function get_table_fields()
{
	return array('id','name','id_ribbonbar_template','has_edit_form');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'ribbonbar.id' . $delimiter . ',name as ' . $delimiter . 'ribbonbar.name' . $delimiter . ',id_ribbonbar_template as ' . $delimiter . 'ribbonbar.id_ribbonbar_template' . $delimiter . ',has_edit_form as ' . $delimiter . 'ribbonbar.has_edit_form' . $delimiter . ' from ribbonbar';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
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


public function get_id_ribbonbar_template()
{
	return $this->p_id_ribbonbar_template;
}

public function get_id_ribbonbar_template_original()
{
	return $this->p_id_ribbonbar_template_original;
}

public function set_id_ribbonbar_template($value)
{
	if ($this->p_id_ribbonbar_template === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_ribbonbar_template_is_dirty = true;
	$this->p_id_ribbonbar_template = $value;
}

public function set_id_ribbonbar_template_original($value)
{
	$this->p_id_ribbonbar_template_original = $value;
}

public function get_id_ribbonbar_template_is_dirty()
{
	return $this->p_id_ribbonbar_template_is_dirty;
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


public function reset_dirty($reset_values = false)
{
	$this->p_name_is_dirty = false;
	$this->p_id_ribbonbar_template_is_dirty = false;
	$this->p_has_edit_form_is_dirty = false;
	if ($reset_values)
	{
		$this->p_name = $this->p_name_original;
		$this->p_id_ribbonbar_template = $this->p_id_ribbonbar_template_original;
		$this->p_has_edit_form = $this->p_has_edit_form_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "ribbonbar.id":
					$this->set_id($val);
					break;
				case "ribbonbar.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "ribbonbar.id_ribbonbar_template":
					$this->set_id_ribbonbar_template($val);
					$this->set_id_ribbonbar_template_original($val);
					break;
				case "ribbonbar.has_edit_form":
					$this->set_has_edit_form($val);
					$this->set_has_edit_form_original($val);
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
		$ribbonbar = cls_table_factory::create_instance('ribbonbar');
		$row = $db_manager->fetch_row($result);
		$ribbonbar->fill($row);
		return $ribbonbar;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_ribbonbar.php');
		return cls_save_ribbonbar::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_ribbonbar.php');
		return cls_save_ribbonbar::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_ribbonbars($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('ribbonbar',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('ribbonbar',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$ribbonbar = cls_table_factory::create_instance('ribbonbar');
				$ribbonbar->fill($row);
				$data[] = $ribbonbar;
			}
		return $data;
	}

function get_ribbonbar_template($db_manager,$application)
	{
		$result = $db_manager->get_records('ribbonbar_template',$this->get_id_ribbonbar_template());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$ribbonbar_template = cls_table_factory::create_instance('ribbonbar_template');
		$row = $db_manager->fetch_row($result);
		$ribbonbar_template->fill($row);
		return $ribbonbar_template;
	}

//changed 1
public function get_control($db_manager,$application)
	{
		$result = $db_manager->get_records('control',$this->get_id(),'id_ribbonbar');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$control = cls_table_factory::create_instance('control');
		$row = $db_manager->fetch_row($result);
		$control->fill($row);
		return $control;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_controls_by_ribbonbar($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('control',$this->get_id(),'id_ribbonbar');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$control = cls_table_factory::create_instance('control');
				$control->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $control;
				}
				else
				{
					$data[] = $control;
				}
			}
		return $data;
	}

public function get_multi_controls_by_ribbonbar($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('control',$ribbonbars,'id_ribbonbar');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$control = cls_table_factory::create_instance('control');
				$control->fill($row);
				if (!array_key_exists($data[$row['id_ribbonbar']]))
				{
					$data[$row['id_ribbonbar']] = array();
				}
				$data[$row['id_ribbonbar']][] = $control;
			}
		return $data;
	}

//changed 1
public function get_ribbonbar_group($db_manager,$application)
	{
		$result = $db_manager->get_records('ribbonbar_group',$this->get_id(),'id_ribbonbar');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$ribbonbar_group = cls_table_factory::create_instance('ribbonbar_group');
		$row = $db_manager->fetch_row($result);
		$ribbonbar_group->fill($row);
		return $ribbonbar_group;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_ribbonbar_groups_by_ribbonbar($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('ribbonbar_group',$this->get_id(),'id_ribbonbar');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$ribbonbar_group = cls_table_factory::create_instance('ribbonbar_group');
				$ribbonbar_group->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $ribbonbar_group;
				}
				else
				{
					$data[] = $ribbonbar_group;
				}
			}
		return $data;
	}

public function get_multi_ribbonbar_groups_by_ribbonbar($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('ribbonbar_group',$ribbonbars,'id_ribbonbar');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$ribbonbar_group = cls_table_factory::create_instance('ribbonbar_group');
				$ribbonbar_group->fill($row);
				if (!array_key_exists($data[$row['id_ribbonbar']]))
				{
					$data[$row['id_ribbonbar']] = array();
				}
				$data[$row['id_ribbonbar']][] = $ribbonbar_group;
			}
		return $data;
	}

//changed 1
public function get_ribbonbar_tab($db_manager,$application)
	{
		$result = $db_manager->get_records('ribbonbar_tab',$this->get_id(),'id_ribbonbar');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$ribbonbar_tab = cls_table_factory::create_instance('ribbonbar_tab');
		$row = $db_manager->fetch_row($result);
		$ribbonbar_tab->fill($row);
		return $ribbonbar_tab;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_ribbonbar_tabs_by_ribbonbar($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('ribbonbar_tab',$this->get_id(),'id_ribbonbar');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$ribbonbar_tab = cls_table_factory::create_instance('ribbonbar_tab');
				$ribbonbar_tab->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $ribbonbar_tab;
				}
				else
				{
					$data[] = $ribbonbar_tab;
				}
			}
		return $data;
	}

public function get_multi_ribbonbar_tabs_by_ribbonbar($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('ribbonbar_tab',$ribbonbars,'id_ribbonbar');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$ribbonbar_tab = cls_table_factory::create_instance('ribbonbar_tab');
				$ribbonbar_tab->fill($row);
				if (!array_key_exists($data[$row['id_ribbonbar']]))
				{
					$data[$row['id_ribbonbar']] = array();
				}
				$data[$row['id_ribbonbar']][] = $ribbonbar_tab;
			}
		return $data;
	}

//changed 1
public function get_data_view($db_manager,$application)
	{
		$result = $db_manager->get_records('data_view',$this->get_id(),'id_ribbonbar');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data_view = cls_table_factory::create_instance('data_view');
		$row = $db_manager->fetch_row($result);
		$data_view->fill($row);
		return $data_view;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_data_views_by_ribbonbar($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_view',$this->get_id(),'id_ribbonbar');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_view = cls_table_factory::create_instance('data_view');
				$data_view->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_view;
				}
				else
				{
					$data[] = $data_view;
				}
			}
		return $data;
	}

public function get_multi_data_views_by_ribbonbar($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_view',$ribbonbars,'id_ribbonbar');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_view = cls_table_factory::create_instance('data_view');
				$data_view->fill($row);
				if (!array_key_exists($data[$row['id_ribbonbar']]))
				{
					$data[$row['id_ribbonbar']] = array();
				}
				$data[$row['id_ribbonbar']][] = $data_view;
			}
		return $data;
	}

public function get_address($ribbonbars,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$ribbonbars,'id_data');
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

public function get_communication_reason($ribbonbars,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$ribbonbars,'id_data');
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

public function get_data_change($ribbonbars,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$ribbonbars,'id_data');
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

public function get_data_help($ribbonbars,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$ribbonbars,'id_data');
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

public function get_data_location($ribbonbars,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$ribbonbars,'id_data');
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

public function get_data_posting($ribbonbars,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$ribbonbars,'id_data');
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

public function get_data_property($ribbonbars,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$ribbonbars,'id_data');
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

public function get_offer_event($ribbonbars,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$ribbonbars,'id_data');
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

public function get_supplier_data($ribbonbars,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$ribbonbars,'id_data');
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

public function get_table_test_data($ribbonbars,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$ribbonbars,'id_data');
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

public function get_data_translation($ribbonbars,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$ribbonbars,'id_data');
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

public function get_dms($ribbonbars,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$ribbonbars,'id_data');
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

public function get_data_relation_id_data1($ribbonbars,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$ribbonbars,'id_data1');
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

public function get_data_relation_id_data2($ribbonbars,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$ribbonbars,'id_data2');
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

public function get_data_property_id_link_data($ribbonbars,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($ribbonbars,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$ribbonbars,'id_link_data');
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
