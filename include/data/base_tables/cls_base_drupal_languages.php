<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_drupal_languages extends cls_datatable_base
{
private static $p_cmmon;
private $p_javascript = null;
private $p_javascript_original = null;
private $p_weight = null;
private $p_weight_original = null;
private $p_prefix = null;
private $p_prefix_original = null;
private $p_domain = null;
private $p_domain_original = null;
private $p_formula = null;
private $p_formula_original = null;
private $p_plurals = null;
private $p_plurals_original = null;
private $p_enabled = null;
private $p_enabled_original = null;
private $p_direction = null;
private $p_direction_original = null;
private $p_native = null;
private $p_native_original = null;
private $p_name = null;
private $p_name_original = null;
private $p_language = null;
private $p_language_original = null;

private $p_javascript_is_dirty = false;
private $p_weight_is_dirty = false;
private $p_prefix_is_dirty = false;
private $p_domain_is_dirty = false;
private $p_formula_is_dirty = false;
private $p_plurals_is_dirty = false;
private $p_enabled_is_dirty = false;
private $p_direction_is_dirty = false;
private $p_native_is_dirty = false;
private $p_name_is_dirty = false;
private $p_language_is_dirty = false;

public function _get_table_name()
{
	return 'drupal_languages';
}

public function get_table_fields()
{
	return array('id','javascript','weight','prefix','domain','formula','plurals','enabled','direction','native','name','language');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'drupal_languages.id' . $delimiter . ',javascript as ' . $delimiter . 'drupal_languages.javascript' . $delimiter . ',weight as ' . $delimiter . 'drupal_languages.weight' . $delimiter . ',prefix as ' . $delimiter . 'drupal_languages.prefix' . $delimiter . ',domain as ' . $delimiter . 'drupal_languages.domain' . $delimiter . ',formula as ' . $delimiter . 'drupal_languages.formula' . $delimiter . ',plurals as ' . $delimiter . 'drupal_languages.plurals' . $delimiter . ',enabled as ' . $delimiter . 'drupal_languages.enabled' . $delimiter . ',direction as ' . $delimiter . 'drupal_languages.direction' . $delimiter . ',native as ' . $delimiter . 'drupal_languages.native' . $delimiter . ',name as ' . $delimiter . 'drupal_languages.name' . $delimiter . ',language as ' . $delimiter . 'drupal_languages.language' . $delimiter . ' from drupal_languages';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_javascript()
{
	return $this->p_javascript;
}

public function get_javascript_original()
{
	return $this->p_javascript_original;
}

public function set_javascript($value)
{
	if ($this->p_javascript === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_javascript_is_dirty = true;
	$this->p_javascript = $value;
}

public function set_javascript_original($value)
{
	$this->p_javascript_original = $value;
}

public function get_javascript_is_dirty()
{
	return $this->p_javascript_is_dirty;
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


public function get_prefix()
{
	return $this->p_prefix;
}

public function get_prefix_original()
{
	return $this->p_prefix_original;
}

public function set_prefix($value)
{
	if ($this->p_prefix === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_prefix_is_dirty = true;
	$this->p_prefix = $value;
}

public function set_prefix_original($value)
{
	$this->p_prefix_original = $value;
}

public function get_prefix_is_dirty()
{
	return $this->p_prefix_is_dirty;
}


public function get_domain()
{
	return $this->p_domain;
}

public function get_domain_original()
{
	return $this->p_domain_original;
}

public function set_domain($value)
{
	if ($this->p_domain === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_domain_is_dirty = true;
	$this->p_domain = $value;
}

public function set_domain_original($value)
{
	$this->p_domain_original = $value;
}

public function get_domain_is_dirty()
{
	return $this->p_domain_is_dirty;
}


public function get_formula()
{
	return $this->p_formula;
}

public function get_formula_original()
{
	return $this->p_formula_original;
}

public function set_formula($value)
{
	if ($this->p_formula === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_formula_is_dirty = true;
	$this->p_formula = $value;
}

public function set_formula_original($value)
{
	$this->p_formula_original = $value;
}

public function get_formula_is_dirty()
{
	return $this->p_formula_is_dirty;
}


public function get_plurals()
{
	return $this->p_plurals;
}

public function get_plurals_original()
{
	return $this->p_plurals_original;
}

public function set_plurals($value)
{
	if ($this->p_plurals === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_plurals_is_dirty = true;
	$this->p_plurals = $value;
}

public function set_plurals_original($value)
{
	$this->p_plurals_original = $value;
}

public function get_plurals_is_dirty()
{
	return $this->p_plurals_is_dirty;
}


public function get_enabled()
{
	return $this->p_enabled;
}

public function get_enabled_original()
{
	return $this->p_enabled_original;
}

public function set_enabled($value)
{
	if ($this->p_enabled === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_enabled_is_dirty = true;
	$this->p_enabled = $value;
}

public function set_enabled_original($value)
{
	$this->p_enabled_original = $value;
}

public function get_enabled_is_dirty()
{
	return $this->p_enabled_is_dirty;
}


public function get_direction()
{
	return $this->p_direction;
}

public function get_direction_original()
{
	return $this->p_direction_original;
}

public function set_direction($value)
{
	if ($this->p_direction === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_direction_is_dirty = true;
	$this->p_direction = $value;
}

public function set_direction_original($value)
{
	$this->p_direction_original = $value;
}

public function get_direction_is_dirty()
{
	return $this->p_direction_is_dirty;
}


public function get_native()
{
	return $this->p_native;
}

public function get_native_original()
{
	return $this->p_native_original;
}

public function set_native($value)
{
	if ($this->p_native === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_native_is_dirty = true;
	$this->p_native = $value;
}

public function set_native_original($value)
{
	$this->p_native_original = $value;
}

public function get_native_is_dirty()
{
	return $this->p_native_is_dirty;
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


public function get_language()
{
	return $this->p_language;
}

public function get_language_original()
{
	return $this->p_language_original;
}

public function set_language($value)
{
	if ($this->p_language === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_language_is_dirty = true;
	$this->p_language = $value;
}

public function set_language_original($value)
{
	$this->p_language_original = $value;
}

public function get_language_is_dirty()
{
	return $this->p_language_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_javascript_is_dirty = false;
	$this->p_weight_is_dirty = false;
	$this->p_prefix_is_dirty = false;
	$this->p_domain_is_dirty = false;
	$this->p_formula_is_dirty = false;
	$this->p_plurals_is_dirty = false;
	$this->p_enabled_is_dirty = false;
	$this->p_direction_is_dirty = false;
	$this->p_native_is_dirty = false;
	$this->p_name_is_dirty = false;
	$this->p_language_is_dirty = false;
	if ($reset_values)
	{
		$this->p_javascript = $this->p_javascript_original;
		$this->p_weight = $this->p_weight_original;
		$this->p_prefix = $this->p_prefix_original;
		$this->p_domain = $this->p_domain_original;
		$this->p_formula = $this->p_formula_original;
		$this->p_plurals = $this->p_plurals_original;
		$this->p_enabled = $this->p_enabled_original;
		$this->p_direction = $this->p_direction_original;
		$this->p_native = $this->p_native_original;
		$this->p_name = $this->p_name_original;
		$this->p_language = $this->p_language_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "drupal_languages.id":
					$this->set_id($val);
					break;
				case "drupal_languages.javascript":
					$this->set_javascript($val);
					$this->set_javascript_original($val);
					break;
				case "drupal_languages.weight":
					$this->set_weight($val);
					$this->set_weight_original($val);
					break;
				case "drupal_languages.prefix":
					$this->set_prefix($val);
					$this->set_prefix_original($val);
					break;
				case "drupal_languages.domain":
					$this->set_domain($val);
					$this->set_domain_original($val);
					break;
				case "drupal_languages.formula":
					$this->set_formula($val);
					$this->set_formula_original($val);
					break;
				case "drupal_languages.plurals":
					$this->set_plurals($val);
					$this->set_plurals_original($val);
					break;
				case "drupal_languages.enabled":
					$this->set_enabled($val);
					$this->set_enabled_original($val);
					break;
				case "drupal_languages.direction":
					$this->set_direction($val);
					$this->set_direction_original($val);
					break;
				case "drupal_languages.native":
					$this->set_native($val);
					$this->set_native_original($val);
					break;
				case "drupal_languages.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "drupal_languages.language":
					$this->set_language($val);
					$this->set_language_original($val);
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
		$drupal_languages = cls_table_factory::create_instance('drupal_languages');
		$row = $db_manager->fetch_row($result);
		$drupal_languages->fill($row);
		return $drupal_languages;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_languages.php');
		return cls_save_drupal_languages::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_languages.php');
		return cls_save_drupal_languages::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_drupal_languagess($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('drupal_languages',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('drupal_languages',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$drupal_languages = cls_table_factory::create_instance('drupal_languages');
				$drupal_languages->fill($row);
				$data[] = $drupal_languages;
			}
		return $data;
	}

public function get_table_test_data($drupal_languagess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($drupal_languagess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$drupal_languagess,'id_data');
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

public function get_communication_reason($drupal_languagess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($drupal_languagess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$drupal_languagess,'id_data');
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

public function get_data_change($drupal_languagess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($drupal_languagess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$drupal_languagess,'id_data');
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

public function get_data_help($drupal_languagess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($drupal_languagess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$drupal_languagess,'id_data');
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

public function get_data_location($drupal_languagess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($drupal_languagess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$drupal_languagess,'id_data');
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

public function get_data_posting($drupal_languagess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($drupal_languagess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$drupal_languagess,'id_data');
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

public function get_offer_event($drupal_languagess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($drupal_languagess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$drupal_languagess,'id_data');
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

public function get_supplier_data($drupal_languagess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($drupal_languagess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$drupal_languagess,'id_data');
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

public function get_address($drupal_languagess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($drupal_languagess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$drupal_languagess,'id_data');
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

public function get_data_property($drupal_languagess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($drupal_languagess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_languagess,'id_data');
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

public function get_data_translation($drupal_languagess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($drupal_languagess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$drupal_languagess,'id_data');
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

public function get_dms($drupal_languagess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($drupal_languagess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$drupal_languagess,'id_data');
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

public function get_data_relation_id_data1($drupal_languagess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($drupal_languagess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_languagess,'id_data1');
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

public function get_data_relation_id_data2($drupal_languagess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($drupal_languagess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_languagess,'id_data2');
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

public function get_data_property_id_link_data($drupal_languagess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($drupal_languagess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_languagess,'id_link_data');
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
