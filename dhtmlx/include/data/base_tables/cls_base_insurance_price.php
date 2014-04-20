<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_insurance_price extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_insurance = null;
private $p_id_insurance_original = null;
private $p_id_insurance_group = null;
private $p_id_insurance_group_original = null;
private $p_id_article = null;
private $p_id_article_original = null;
private $p_validfrom = null;
private $p_validfrom_original = null;
private $p_price = null;
private $p_price_original = null;
private $p_onlyfornewprescriptions = null;
private $p_onlyfornewprescriptions_original = null;
private $p_id_insurance_district = null;
private $p_id_insurance_district_original = null;

private $p_id_insurance_is_dirty = false;
private $p_id_insurance_group_is_dirty = false;
private $p_id_article_is_dirty = false;
private $p_validfrom_is_dirty = false;
private $p_price_is_dirty = false;
private $p_onlyfornewprescriptions_is_dirty = false;
private $p_id_insurance_district_is_dirty = false;

public function _get_table_name()
{
	return 'insurance_price';
}

public function get_table_fields()
{
	return array('id','id_insurance','id_insurance_group','id_article','validfrom','price','onlyfornewprescriptions','id_insurance_district');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'insurance_price.id' . $delimiter . ',id_insurance as ' . $delimiter . 'insurance_price.id_insurance' . $delimiter . ',id_insurance_group as ' . $delimiter . 'insurance_price.id_insurance_group' . $delimiter . ',id_article as ' . $delimiter . 'insurance_price.id_article' . $delimiter . ',validfrom as ' . $delimiter . 'insurance_price.validfrom' . $delimiter . ',price as ' . $delimiter . 'insurance_price.price' . $delimiter . ',onlyfornewprescriptions as ' . $delimiter . 'insurance_price.onlyfornewprescriptions' . $delimiter . ',id_insurance_district as ' . $delimiter . 'insurance_price.id_insurance_district' . $delimiter . ' from insurance_price';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_id_insurance()
{
	return $this->p_id_insurance;
}

public function get_id_insurance_original()
{
	return $this->p_id_insurance_original;
}

public function set_id_insurance($value)
{
	if ($this->p_id_insurance === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_insurance_is_dirty = true;
	$this->p_id_insurance = $value;
}

public function set_id_insurance_original($value)
{
	$this->p_id_insurance_original = $value;
}

public function get_id_insurance_is_dirty()
{
	return $this->p_id_insurance_is_dirty;
}


public function get_id_insurance_group()
{
	return $this->p_id_insurance_group;
}

public function get_id_insurance_group_original()
{
	return $this->p_id_insurance_group_original;
}

public function set_id_insurance_group($value)
{
	if ($this->p_id_insurance_group === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_insurance_group_is_dirty = true;
	$this->p_id_insurance_group = $value;
}

public function set_id_insurance_group_original($value)
{
	$this->p_id_insurance_group_original = $value;
}

public function get_id_insurance_group_is_dirty()
{
	return $this->p_id_insurance_group_is_dirty;
}


public function get_id_article()
{
	return $this->p_id_article;
}

public function get_id_article_original()
{
	return $this->p_id_article_original;
}

public function set_id_article($value)
{
	if ($this->p_id_article === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_article_is_dirty = true;
	$this->p_id_article = $value;
}

public function set_id_article_original($value)
{
	$this->p_id_article_original = $value;
}

public function get_id_article_is_dirty()
{
	return $this->p_id_article_is_dirty;
}


public function get_validfrom()
{
	return $this->p_validfrom;
}

public function get_validfrom_original()
{
	return $this->p_validfrom_original;
}

public function set_validfrom($value)
{
	if ($this->p_validfrom === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_validfrom_is_dirty = true;
	$this->p_validfrom = $value;
}

public function set_validfrom_original($value)
{
	$this->p_validfrom_original = $value;
}

public function get_validfrom_is_dirty()
{
	return $this->p_validfrom_is_dirty;
}


public function get_price()
{
	return $this->p_price;
}

public function get_price_original()
{
	return $this->p_price_original;
}

public function set_price($value)
{
	if ($this->p_price === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_price_is_dirty = true;
	$this->p_price = $value;
}

public function set_price_original($value)
{
	$this->p_price_original = $value;
}

public function get_price_is_dirty()
{
	return $this->p_price_is_dirty;
}


public function get_onlyfornewprescriptions()
{
	return $this->p_onlyfornewprescriptions;
}

public function get_onlyfornewprescriptions_original()
{
	return $this->p_onlyfornewprescriptions_original;
}

public function set_onlyfornewprescriptions($value)
{
	if ($this->p_onlyfornewprescriptions === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_onlyfornewprescriptions_is_dirty = true;
	$this->p_onlyfornewprescriptions = $value;
}

public function set_onlyfornewprescriptions_original($value)
{
	$this->p_onlyfornewprescriptions_original = $value;
}

public function get_onlyfornewprescriptions_is_dirty()
{
	return $this->p_onlyfornewprescriptions_is_dirty;
}


public function get_id_insurance_district()
{
	return $this->p_id_insurance_district;
}

public function get_id_insurance_district_original()
{
	return $this->p_id_insurance_district_original;
}

public function set_id_insurance_district($value)
{
	if ($this->p_id_insurance_district === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_insurance_district_is_dirty = true;
	$this->p_id_insurance_district = $value;
}

public function set_id_insurance_district_original($value)
{
	$this->p_id_insurance_district_original = $value;
}

public function get_id_insurance_district_is_dirty()
{
	return $this->p_id_insurance_district_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_id_insurance_is_dirty = false;
	$this->p_id_insurance_group_is_dirty = false;
	$this->p_id_article_is_dirty = false;
	$this->p_validfrom_is_dirty = false;
	$this->p_price_is_dirty = false;
	$this->p_onlyfornewprescriptions_is_dirty = false;
	$this->p_id_insurance_district_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_insurance = $this->p_id_insurance_original;
		$this->p_id_insurance_group = $this->p_id_insurance_group_original;
		$this->p_id_article = $this->p_id_article_original;
		$this->p_validfrom = $this->p_validfrom_original;
		$this->p_price = $this->p_price_original;
		$this->p_onlyfornewprescriptions = $this->p_onlyfornewprescriptions_original;
		$this->p_id_insurance_district = $this->p_id_insurance_district_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "insurance_price.id":
					$this->set_id($val);
					break;
				case "insurance_price.id_insurance":
					$this->set_id_insurance($val);
					$this->set_id_insurance_original($val);
					break;
				case "insurance_price.id_insurance_group":
					$this->set_id_insurance_group($val);
					$this->set_id_insurance_group_original($val);
					break;
				case "insurance_price.id_article":
					$this->set_id_article($val);
					$this->set_id_article_original($val);
					break;
				case "insurance_price.validfrom":
					$this->set_validfrom($val);
					$this->set_validfrom_original($val);
					break;
				case "insurance_price.price":
					$this->set_price($val);
					$this->set_price_original($val);
					break;
				case "insurance_price.onlyfornewprescriptions":
					$this->set_onlyfornewprescriptions($val);
					$this->set_onlyfornewprescriptions_original($val);
					break;
				case "insurance_price.id_insurance_district":
					$this->set_id_insurance_district($val);
					$this->set_id_insurance_district_original($val);
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
		$insurance_price = cls_table_factory::create_instance('insurance_price');
		$row = $db_manager->fetch_row($result);
		$insurance_price->fill($row);
		return $insurance_price;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_insurance_price.php');
		return cls_save_insurance_price::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_insurance_price.php');
		return cls_save_insurance_price::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_insurance_prices($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('insurance_price',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('insurance_price',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$insurance_price = cls_table_factory::create_instance('insurance_price');
				$insurance_price->fill($row);
				$data[] = $insurance_price;
			}
		return $data;
	}

function get_article($db_manager,$application)
	{
		$result = $db_manager->get_records('article',$this->get_id_article());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article = cls_table_factory::create_instance('article');
		$row = $db_manager->fetch_row($result);
		$article->fill($row);
		return $article;
	}

function get_insurance($db_manager,$application)
	{
		$result = $db_manager->get_records('insurance',$this->get_id_insurance());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$insurance = cls_table_factory::create_instance('insurance');
		$row = $db_manager->fetch_row($result);
		$insurance->fill($row);
		return $insurance;
	}

function get_insurance_district($db_manager,$application)
	{
		$result = $db_manager->get_records('insurance_district',$this->get_id_insurance_district());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$insurance_district = cls_table_factory::create_instance('insurance_district');
		$row = $db_manager->fetch_row($result);
		$insurance_district->fill($row);
		return $insurance_district;
	}

function get_insurance_group($db_manager,$application)
	{
		$result = $db_manager->get_records('insurance_group',$this->get_id_insurance_group());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$insurance_group = cls_table_factory::create_instance('insurance_group');
		$row = $db_manager->fetch_row($result);
		$insurance_group->fill($row);
		return $insurance_group;
	}

public function get_address($insurance_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($insurance_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$insurance_prices,'id_data');
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

public function get_communication_reason($insurance_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($insurance_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$insurance_prices,'id_data');
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

public function get_data_change($insurance_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($insurance_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$insurance_prices,'id_data');
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

public function get_data_help($insurance_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($insurance_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$insurance_prices,'id_data');
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

public function get_data_location($insurance_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($insurance_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$insurance_prices,'id_data');
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

public function get_data_posting($insurance_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($insurance_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$insurance_prices,'id_data');
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

public function get_data_property($insurance_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($insurance_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$insurance_prices,'id_data');
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

public function get_offer_event($insurance_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($insurance_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$insurance_prices,'id_data');
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

public function get_supplier_data($insurance_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($insurance_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$insurance_prices,'id_data');
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

public function get_table_test_data($insurance_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($insurance_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$insurance_prices,'id_data');
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

public function get_data_translation($insurance_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($insurance_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$insurance_prices,'id_data');
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

public function get_dms($insurance_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($insurance_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$insurance_prices,'id_data');
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

public function get_data_relation_id_data1($insurance_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($insurance_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$insurance_prices,'id_data1');
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

public function get_data_relation_id_data2($insurance_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($insurance_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$insurance_prices,'id_data2');
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

public function get_data_property_id_link_data($insurance_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($insurance_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$insurance_prices,'id_link_data');
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
