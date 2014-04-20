<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_drupal_block extends cls_datatable_base
{
private static $p_cmmon;
private $p_cache = null;
private $p_cache_original = null;
private $p_title = null;
private $p_title_original = null;
private $p_pages = null;
private $p_pages_original = null;
private $p_visibility = null;
private $p_visibility_original = null;
private $p_custom = null;
private $p_custom_original = null;
private $p_region = null;
private $p_region_original = null;
private $p_weight = null;
private $p_weight_original = null;
private $p_status = null;
private $p_status_original = null;
private $p_theme = null;
private $p_theme_original = null;
private $p_delta = null;
private $p_delta_original = null;
private $p_module = null;
private $p_module_original = null;
private $p_bid = null;
private $p_bid_original = null;

private $p_cache_is_dirty = false;
private $p_title_is_dirty = false;
private $p_pages_is_dirty = false;
private $p_visibility_is_dirty = false;
private $p_custom_is_dirty = false;
private $p_region_is_dirty = false;
private $p_weight_is_dirty = false;
private $p_status_is_dirty = false;
private $p_theme_is_dirty = false;
private $p_delta_is_dirty = false;
private $p_module_is_dirty = false;
private $p_bid_is_dirty = false;

public function _get_table_name()
{
	return 'drupal_block';
}

public function get_table_fields()
{
	return array('id','cache','title','pages','visibility','custom','region','weight','status','theme','delta','module','bid');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'drupal_block.id' . $delimiter . ',cache as ' . $delimiter . 'drupal_block.cache' . $delimiter . ',title as ' . $delimiter . 'drupal_block.title' . $delimiter . ',pages as ' . $delimiter . 'drupal_block.pages' . $delimiter . ',visibility as ' . $delimiter . 'drupal_block.visibility' . $delimiter . ',custom as ' . $delimiter . 'drupal_block.custom' . $delimiter . ',region as ' . $delimiter . 'drupal_block.region' . $delimiter . ',weight as ' . $delimiter . 'drupal_block.weight' . $delimiter . ',status as ' . $delimiter . 'drupal_block.status' . $delimiter . ',theme as ' . $delimiter . 'drupal_block.theme' . $delimiter . ',delta as ' . $delimiter . 'drupal_block.delta' . $delimiter . ',module as ' . $delimiter . 'drupal_block.module' . $delimiter . ',bid as ' . $delimiter . 'drupal_block.bid' . $delimiter . ' from drupal_block';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_cache()
{
	return $this->p_cache;
}

public function get_cache_original()
{
	return $this->p_cache_original;
}

public function set_cache($value)
{
	if ($this->p_cache === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_cache_is_dirty = true;
	$this->p_cache = $value;
}

public function set_cache_original($value)
{
	$this->p_cache_original = $value;
}

public function get_cache_is_dirty()
{
	return $this->p_cache_is_dirty;
}


public function get_title()
{
	return $this->p_title;
}

public function get_title_original()
{
	return $this->p_title_original;
}

public function set_title($value)
{
	if ($this->p_title === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_title_is_dirty = true;
	$this->p_title = $value;
}

public function set_title_original($value)
{
	$this->p_title_original = $value;
}

public function get_title_is_dirty()
{
	return $this->p_title_is_dirty;
}


public function get_pages()
{
	return $this->p_pages;
}

public function get_pages_original()
{
	return $this->p_pages_original;
}

public function set_pages($value)
{
	if ($this->p_pages === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_pages_is_dirty = true;
	$this->p_pages = $value;
}

public function set_pages_original($value)
{
	$this->p_pages_original = $value;
}

public function get_pages_is_dirty()
{
	return $this->p_pages_is_dirty;
}


public function get_visibility()
{
	return $this->p_visibility;
}

public function get_visibility_original()
{
	return $this->p_visibility_original;
}

public function set_visibility($value)
{
	if ($this->p_visibility === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_visibility_is_dirty = true;
	$this->p_visibility = $value;
}

public function set_visibility_original($value)
{
	$this->p_visibility_original = $value;
}

public function get_visibility_is_dirty()
{
	return $this->p_visibility_is_dirty;
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


public function get_region()
{
	return $this->p_region;
}

public function get_region_original()
{
	return $this->p_region_original;
}

public function set_region($value)
{
	if ($this->p_region === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_region_is_dirty = true;
	$this->p_region = $value;
}

public function set_region_original($value)
{
	$this->p_region_original = $value;
}

public function get_region_is_dirty()
{
	return $this->p_region_is_dirty;
}


public function get_weight()
{
	return $this->p_weight;
}

public function get_weight_original()
{
	return $this->p_weight_original;
}

public function set_weight($value)
{
	if ($this->p_weight === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_weight_is_dirty = true;
	$this->p_weight = $value;
}

public function set_weight_original($value)
{
	$this->p_weight_original = $value;
}

public function get_weight_is_dirty()
{
	return $this->p_weight_is_dirty;
}


public function get_status()
{
	return $this->p_status;
}

public function get_status_original()
{
	return $this->p_status_original;
}

public function set_status($value)
{
	if ($this->p_status === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_status_is_dirty = true;
	$this->p_status = $value;
}

public function set_status_original($value)
{
	$this->p_status_original = $value;
}

public function get_status_is_dirty()
{
	return $this->p_status_is_dirty;
}


public function get_theme()
{
	return $this->p_theme;
}

public function get_theme_original()
{
	return $this->p_theme_original;
}

public function set_theme($value)
{
	if ($this->p_theme === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_theme_is_dirty = true;
	$this->p_theme = $value;
}

public function set_theme_original($value)
{
	$this->p_theme_original = $value;
}

public function get_theme_is_dirty()
{
	return $this->p_theme_is_dirty;
}


public function get_delta()
{
	return $this->p_delta;
}

public function get_delta_original()
{
	return $this->p_delta_original;
}

public function set_delta($value)
{
	if ($this->p_delta === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_delta_is_dirty = true;
	$this->p_delta = $value;
}

public function set_delta_original($value)
{
	$this->p_delta_original = $value;
}

public function get_delta_is_dirty()
{
	return $this->p_delta_is_dirty;
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


public function get_bid()
{
	return $this->p_bid;
}

public function get_bid_original()
{
	return $this->p_bid_original;
}

public function set_bid($value)
{
	if ($this->p_bid === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_bid_is_dirty = true;
	$this->p_bid = $value;
}

public function set_bid_original($value)
{
	$this->p_bid_original = $value;
}

public function get_bid_is_dirty()
{
	return $this->p_bid_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_cache_is_dirty = false;
	$this->p_title_is_dirty = false;
	$this->p_pages_is_dirty = false;
	$this->p_visibility_is_dirty = false;
	$this->p_custom_is_dirty = false;
	$this->p_region_is_dirty = false;
	$this->p_weight_is_dirty = false;
	$this->p_status_is_dirty = false;
	$this->p_theme_is_dirty = false;
	$this->p_delta_is_dirty = false;
	$this->p_module_is_dirty = false;
	$this->p_bid_is_dirty = false;
	if ($reset_values)
	{
		$this->p_cache = $this->p_cache_original;
		$this->p_title = $this->p_title_original;
		$this->p_pages = $this->p_pages_original;
		$this->p_visibility = $this->p_visibility_original;
		$this->p_custom = $this->p_custom_original;
		$this->p_region = $this->p_region_original;
		$this->p_weight = $this->p_weight_original;
		$this->p_status = $this->p_status_original;
		$this->p_theme = $this->p_theme_original;
		$this->p_delta = $this->p_delta_original;
		$this->p_module = $this->p_module_original;
		$this->p_bid = $this->p_bid_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "drupal_block.id":
					$this->set_id($val);
					break;
				case "drupal_block.cache":
					$this->set_cache($val);
					$this->set_cache_original($val);
					break;
				case "drupal_block.title":
					$this->set_title($val);
					$this->set_title_original($val);
					break;
				case "drupal_block.pages":
					$this->set_pages($val);
					$this->set_pages_original($val);
					break;
				case "drupal_block.visibility":
					$this->set_visibility($val);
					$this->set_visibility_original($val);
					break;
				case "drupal_block.custom":
					$this->set_custom($val);
					$this->set_custom_original($val);
					break;
				case "drupal_block.region":
					$this->set_region($val);
					$this->set_region_original($val);
					break;
				case "drupal_block.weight":
					$this->set_weight($val);
					$this->set_weight_original($val);
					break;
				case "drupal_block.status":
					$this->set_status($val);
					$this->set_status_original($val);
					break;
				case "drupal_block.theme":
					$this->set_theme($val);
					$this->set_theme_original($val);
					break;
				case "drupal_block.delta":
					$this->set_delta($val);
					$this->set_delta_original($val);
					break;
				case "drupal_block.module":
					$this->set_module($val);
					$this->set_module_original($val);
					break;
				case "drupal_block.bid":
					$this->set_bid($val);
					$this->set_bid_original($val);
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
		$drupal_block = cls_table_factory::create_instance('drupal_block');
		$row = $db_manager->fetch_row($result);
		$drupal_block->fill($row);
		return $drupal_block;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_block.php');
		return cls_save_drupal_block::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_block.php');
		return cls_save_drupal_block::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_drupal_blocks($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('drupal_block',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('drupal_block',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$drupal_block = cls_table_factory::create_instance('drupal_block');
				$drupal_block->fill($row);
				$data[] = $drupal_block;
			}
		return $data;
	}

public function get_table_test_data($drupal_blocks,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($drupal_blocks,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$drupal_blocks,'id_data');
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

public function get_communication_reason($drupal_blocks,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($drupal_blocks,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$drupal_blocks,'id_data');
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

public function get_data_change($drupal_blocks,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($drupal_blocks,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$drupal_blocks,'id_data');
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

public function get_data_help($drupal_blocks,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($drupal_blocks,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$drupal_blocks,'id_data');
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

public function get_data_location($drupal_blocks,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($drupal_blocks,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$drupal_blocks,'id_data');
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

public function get_data_posting($drupal_blocks,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($drupal_blocks,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$drupal_blocks,'id_data');
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

public function get_offer_event($drupal_blocks,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($drupal_blocks,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$drupal_blocks,'id_data');
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

public function get_supplier_data($drupal_blocks,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($drupal_blocks,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$drupal_blocks,'id_data');
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

public function get_address($drupal_blocks,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($drupal_blocks,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$drupal_blocks,'id_data');
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

public function get_data_property($drupal_blocks,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($drupal_blocks,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_blocks,'id_data');
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

public function get_data_translation($drupal_blocks,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($drupal_blocks,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$drupal_blocks,'id_data');
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

public function get_dms($drupal_blocks,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($drupal_blocks,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$drupal_blocks,'id_data');
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

public function get_data_relation_id_data1($drupal_blocks,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($drupal_blocks,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_blocks,'id_data1');
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

public function get_data_relation_id_data2($drupal_blocks,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($drupal_blocks,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_blocks,'id_data2');
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

public function get_data_property_id_link_data($drupal_blocks,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($drupal_blocks,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_blocks,'id_link_data');
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
