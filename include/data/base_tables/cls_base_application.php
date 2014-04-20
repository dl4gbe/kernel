<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_application extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_main_page = null;
private $p_id_main_page_original = null;
private $p_id_application_controller = null;
private $p_id_application_controller_original = null;
private $p_id_application_template = null;
private $p_id_application_template_original = null;
private $p_caption = null;
private $p_caption_original = null;
private $p_name = null;
private $p_name_original = null;

private $p_id_main_page_is_dirty = false;
private $p_id_application_controller_is_dirty = false;
private $p_id_application_template_is_dirty = false;
private $p_caption_is_dirty = false;
private $p_name_is_dirty = false;

public function _get_table_name()
{
	return 'application';
}

public function get_table_fields()
{
	return array('id_main_page','id_application_controller','id_application_template','caption','name','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select id_main_page as ' . $delimiter . 'application.id_main_page' . $delimiter . ',id_application_controller as ' . $delimiter . 'application.id_application_controller' . $delimiter . ',id_application_template as ' . $delimiter . 'application.id_application_template' . $delimiter . ',caption as ' . $delimiter . 'application.caption' . $delimiter . ',name as ' . $delimiter . 'application.name' . $delimiter . ',id as ' . $delimiter . 'application.id' . $delimiter . ' from application';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}

public function get_id_main_page()
{
	return $this->p_id_main_page;
}

public function get_id_main_page_original()
{
	return $this->p_id_main_page_original;
}

public function set_id_main_page($value)
{
	if ($this->p_id_main_page === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_main_page_is_dirty = true;
	$this->p_id_main_page = $value;
}

public function set_id_main_page_original($value)
{
	$this->p_id_main_page_original = $value;
}

public function get_id_main_page_is_dirty()
{
	return $this->p_id_main_page_is_dirty;
}


public function get_id_application_controller()
{
	return $this->p_id_application_controller;
}

public function get_id_application_controller_original()
{
	return $this->p_id_application_controller_original;
}

public function set_id_application_controller($value)
{
	if ($this->p_id_application_controller === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_application_controller_is_dirty = true;
	$this->p_id_application_controller = $value;
}

public function set_id_application_controller_original($value)
{
	$this->p_id_application_controller_original = $value;
}

public function get_id_application_controller_is_dirty()
{
	return $this->p_id_application_controller_is_dirty;
}


public function get_id_application_template()
{
	return $this->p_id_application_template;
}

public function get_id_application_template_original()
{
	return $this->p_id_application_template_original;
}

public function set_id_application_template($value)
{
	if ($this->p_id_application_template === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_application_template_is_dirty = true;
	$this->p_id_application_template = $value;
}

public function set_id_application_template_original($value)
{
	$this->p_id_application_template_original = $value;
}

public function get_id_application_template_is_dirty()
{
	return $this->p_id_application_template_is_dirty;
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
	$this->p_id_main_page_is_dirty = false;
	$this->p_id_application_controller_is_dirty = false;
	$this->p_id_application_template_is_dirty = false;
	$this->p_caption_is_dirty = false;
	$this->p_name_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_main_page = $this->p_id_main_page_original;
		$this->p_id_application_controller = $this->p_id_application_controller_original;
		$this->p_id_application_template = $this->p_id_application_template_original;
		$this->p_caption = $this->p_caption_original;
		$this->p_name = $this->p_name_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "application.id_main_page":
					$this->set_id_main_page($val);
					$this->set_id_main_page_original($val);
					break;
				case "application.id_application_controller":
					$this->set_id_application_controller($val);
					$this->set_id_application_controller_original($val);
					break;
				case "application.id_application_template":
					$this->set_id_application_template($val);
					$this->set_id_application_template_original($val);
					break;
				case "application.caption":
					$this->set_caption($val);
					$this->set_caption_original($val);
					break;
				case "application.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "application.id":
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
		$application = cls_table_factory::create_instance('application');
		$row = $db_manager->fetch_row($result);
		$application->fill($row);
		return $application;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_application.php');
		return cls_save_application::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_application.php');
		return cls_save_application::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_applications($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('application',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('application',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$application = cls_table_factory::create_instance('application');
				$application->fill($row);
				$data[] = $application;
			}
		return $data;
	}

function get_application_controller($db_manager,$application)
	{
		$result = $db_manager->get_records('application_controller',$this->get_id_application_controller());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$application_controller = cls_table_factory::create_instance('application_controller');
		$row = $db_manager->fetch_row($result);
		$application_controller->fill($row);
		return $application_controller;
	}

function get_application_template($db_manager,$application)
	{
		$result = $db_manager->get_records('application_template',$this->get_id_application_template());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$application_template = cls_table_factory::create_instance('application_template');
		$row = $db_manager->fetch_row($result);
		$application_template->fill($row);
		return $application_template;
	}

function get_main_page($db_manager,$application)
	{
		$result = $db_manager->get_records('main_page',$this->get_id_main_page());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$main_page = cls_table_factory::create_instance('main_page');
		$row = $db_manager->fetch_row($result);
		$main_page->fill($row);
		return $main_page;
	}

//changed 1
public function get_control_group($db_manager,$application)
	{
		$result = $db_manager->get_records('control_group',$this->get_id(),'id_application');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$control_group = cls_table_factory::create_instance('control_group');
		$row = $db_manager->fetch_row($result);
		$control_group->fill($row);
		return $control_group;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_control_groups_by_application($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('control_group',$this->get_id(),'id_application');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$control_group = cls_table_factory::create_instance('control_group');
				$control_group->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $control_group;
				}
				else
				{
					$data[] = $control_group;
				}
			}
		return $data;
	}

public function get_multi_control_groups_by_application($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('control_group',$applications,'id_application');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$control_group = cls_table_factory::create_instance('control_group');
				$control_group->fill($row);
				if (!array_key_exists($data[$row['id_application']]))
				{
					$data[$row['id_application']] = array();
				}
				$data[$row['id_application']][] = $control_group;
			}
		return $data;
	}

//changed 1
public function get_menu($db_manager,$application)
	{
		$result = $db_manager->get_records('menu',$this->get_id(),'id_application');
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
public function get_menus_by_application($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('menu',$this->get_id(),'id_application');
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

public function get_multi_menus_by_application($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('menu',$applications,'id_application');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$menu = cls_table_factory::create_instance('menu');
				$menu->fill($row);
				if (!array_key_exists($data[$row['id_application']]))
				{
					$data[$row['id_application']] = array();
				}
				$data[$row['id_application']][] = $menu;
			}
		return $data;
	}

//changed 1
public function get_config_group($db_manager,$application)
	{
		$result = $db_manager->get_records('config_group',$this->get_id(),'id_application');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$config_group = cls_table_factory::create_instance('config_group');
		$row = $db_manager->fetch_row($result);
		$config_group->fill($row);
		return $config_group;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_config_groups_by_application($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('config_group',$this->get_id(),'id_application');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$config_group = cls_table_factory::create_instance('config_group');
				$config_group->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $config_group;
				}
				else
				{
					$data[] = $config_group;
				}
			}
		return $data;
	}

public function get_multi_config_groups_by_application($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('config_group',$applications,'id_application');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$config_group = cls_table_factory::create_instance('config_group');
				$config_group->fill($row);
				if (!array_key_exists($data[$row['id_application']]))
				{
					$data[$row['id_application']] = array();
				}
				$data[$row['id_application']][] = $config_group;
			}
		return $data;
	}

//changed 1
public function get_data_help($db_manager,$application)
	{
		$result = $db_manager->get_records('data_help',$this->get_id(),'id_application');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data_help = cls_table_factory::create_instance('data_help');
		$row = $db_manager->fetch_row($result);
		$data_help->fill($row);
		return $data_help;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_data_helps_by_application($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_help',$this->get_id(),'id_application');
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

public function get_multi_data_helps_by_application($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$applications,'id_application');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_help = cls_table_factory::create_instance('data_help');
				$data_help->fill($row);
				if (!array_key_exists($data[$row['id_application']]))
				{
					$data[$row['id_application']] = array();
				}
				$data[$row['id_application']][] = $data_help;
			}
		return $data;
	}

//changed 1
public function get_table_bean($db_manager,$application)
	{
		$result = $db_manager->get_records('table_bean',$this->get_id(),'id_application');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$table_bean = cls_table_factory::create_instance('table_bean');
		$row = $db_manager->fetch_row($result);
		$table_bean->fill($row);
		return $table_bean;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_table_beans_by_application($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('table_bean',$this->get_id(),'id_application');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$table_bean = cls_table_factory::create_instance('table_bean');
				$table_bean->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $table_bean;
				}
				else
				{
					$data[] = $table_bean;
				}
			}
		return $data;
	}

public function get_multi_table_beans_by_application($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_bean',$applications,'id_application');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$table_bean = cls_table_factory::create_instance('table_bean');
				$table_bean->fill($row);
				if (!array_key_exists($data[$row['id_application']]))
				{
					$data[$row['id_application']] = array();
				}
				$data[$row['id_application']][] = $table_bean;
			}
		return $data;
	}

public function get_table_test_data($applications,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$applications,'id_data');
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

public function get_communication_reason($applications,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$applications,'id_data');
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

public function get_data_change($applications,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$applications,'id_data');
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

public function get_multi_data_help($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$applications,'id_data');
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

public function get_data_location($applications,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$applications,'id_data');
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

public function get_data_posting($applications,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$applications,'id_data');
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

public function get_offer_event($applications,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$applications,'id_data');
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

public function get_supplier_data($applications,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$applications,'id_data');
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

public function get_address($applications,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$applications,'id_data');
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

public function get_data_property($applications,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$applications,'id_data');
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

public function get_data_translation($applications,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$applications,'id_data');
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

public function get_dms($applications,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$applications,'id_data');
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

public function get_data_relation_id_data1($applications,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$applications,'id_data1');
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

public function get_data_relation_id_data2($applications,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$applications,'id_data2');
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

public function get_data_property_id_link_data($applications,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($applications,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$applications,'id_link_data');
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
