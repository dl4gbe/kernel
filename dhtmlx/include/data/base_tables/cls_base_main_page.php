<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_main_page extends cls_datatable_base
{
private static $p_cmmon;
private $p_name = null;
private $p_name_original = null;
private $p_path = null;
private $p_path_original = null;
private $p_id_main_page_template = null;
private $p_id_main_page_template_original = null;
private $p_caption = null;
private $p_caption_original = null;

private $p_name_is_dirty = false;
private $p_path_is_dirty = false;
private $p_id_main_page_template_is_dirty = false;
private $p_caption_is_dirty = false;

public function _get_table_name()
{
	return 'main_page';
}

public function get_table_fields()
{
	return array('id','name','path','id_main_page_template','caption');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'main_page.id' . $delimiter . ',name as ' . $delimiter . 'main_page.name' . $delimiter . ',path as ' . $delimiter . 'main_page.path' . $delimiter . ',id_main_page_template as ' . $delimiter . 'main_page.id_main_page_template' . $delimiter . ',caption as ' . $delimiter . 'main_page.caption' . $delimiter . ' from main_page';
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


public function get_path()
{
	return $this->p_path;
}

public function get_path_original()
{
	return $this->p_path_original;
}

public function set_path($value)
{
	if ($this->p_path === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_path_is_dirty = true;
	$this->p_path = $value;
}

public function set_path_original($value)
{
	$this->p_path_original = $value;
}

public function get_path_is_dirty()
{
	return $this->p_path_is_dirty;
}


public function get_id_main_page_template()
{
	return $this->p_id_main_page_template;
}

public function get_id_main_page_template_original()
{
	return $this->p_id_main_page_template_original;
}

public function set_id_main_page_template($value)
{
	if ($this->p_id_main_page_template === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_main_page_template_is_dirty = true;
	$this->p_id_main_page_template = $value;
}

public function set_id_main_page_template_original($value)
{
	$this->p_id_main_page_template_original = $value;
}

public function get_id_main_page_template_is_dirty()
{
	return $this->p_id_main_page_template_is_dirty;
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


public function reset_dirty($reset_values = false)
{
	$this->p_name_is_dirty = false;
	$this->p_path_is_dirty = false;
	$this->p_id_main_page_template_is_dirty = false;
	$this->p_caption_is_dirty = false;
	if ($reset_values)
	{
		$this->p_name = $this->p_name_original;
		$this->p_path = $this->p_path_original;
		$this->p_id_main_page_template = $this->p_id_main_page_template_original;
		$this->p_caption = $this->p_caption_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "main_page.id":
					$this->set_id($val);
					break;
				case "main_page.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "main_page.path":
					$this->set_path($val);
					$this->set_path_original($val);
					break;
				case "main_page.id_main_page_template":
					$this->set_id_main_page_template($val);
					$this->set_id_main_page_template_original($val);
					break;
				case "main_page.caption":
					$this->set_caption($val);
					$this->set_caption_original($val);
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
		$main_page = cls_table_factory::create_instance('main_page');
		$row = $db_manager->fetch_row($result);
		$main_page->fill($row);
		return $main_page;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_main_page.php');
		return cls_save_main_page::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_main_page.php');
		return cls_save_main_page::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_main_pages($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('main_page',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('main_page',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$main_page = cls_table_factory::create_instance('main_page');
				$main_page->fill($row);
				$data[] = $main_page;
			}
		return $data;
	}

function get_main_page_template($db_manager,$application)
	{
		$result = $db_manager->get_records('main_page_template',$this->get_id_main_page_template());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$main_page_template = cls_table_factory::create_instance('main_page_template');
		$row = $db_manager->fetch_row($result);
		$main_page_template->fill($row);
		return $main_page_template;
	}

//changed 1
public function get_application($db_manager,$application)
	{
		$result = $db_manager->get_records('application',$this->get_id(),'id_main_page');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$application = cls_table_factory::create_instance('application');
		$row = $db_manager->fetch_row($result);
		$application->fill($row);
		return $application;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_applications_by_main_page($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('application',$this->get_id(),'id_main_page');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$application = cls_table_factory::create_instance('application');
				$application->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $application;
				}
				else
				{
					$data[] = $application;
				}
			}
		return $data;
	}

public function get_multi_applications_by_main_page($main_pages,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('application',$main_pages,'id_main_page');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$application = cls_table_factory::create_instance('application');
				$application->fill($row);
				if (!array_key_exists($data[$row['id_main_page']]))
				{
					$data[$row['id_main_page']] = array();
				}
				$data[$row['id_main_page']][] = $application;
			}
		return $data;
	}

public function get_address($main_pages,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($main_pages,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$main_pages,'id_data');
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

public function get_communication_reason($main_pages,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($main_pages,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$main_pages,'id_data');
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

public function get_data_change($main_pages,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($main_pages,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$main_pages,'id_data');
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

public function get_data_help($main_pages,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($main_pages,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$main_pages,'id_data');
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

public function get_data_location($main_pages,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($main_pages,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$main_pages,'id_data');
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

public function get_data_posting($main_pages,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($main_pages,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$main_pages,'id_data');
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

public function get_data_property($main_pages,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($main_pages,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$main_pages,'id_data');
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

public function get_offer_event($main_pages,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($main_pages,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$main_pages,'id_data');
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

public function get_supplier_data($main_pages,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($main_pages,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$main_pages,'id_data');
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

public function get_table_test_data($main_pages,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($main_pages,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$main_pages,'id_data');
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

public function get_data_translation($main_pages,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($main_pages,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$main_pages,'id_data');
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

public function get_dms($main_pages,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($main_pages,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$main_pages,'id_data');
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

public function get_data_relation_id_data1($main_pages,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($main_pages,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$main_pages,'id_data1');
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

public function get_data_relation_id_data2($main_pages,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($main_pages,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$main_pages,'id_data2');
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

public function get_data_property_id_link_data($main_pages,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($main_pages,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$main_pages,'id_link_data');
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
