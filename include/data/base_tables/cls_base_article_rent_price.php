<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_article_rent_price extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_time_unit = null;
private $p_id_time_unit_original = null;
private $p_price_per_unit = null;
private $p_price_per_unit_original = null;
private $p_validtil = null;
private $p_validtil_original = null;
private $p_validfrom = null;
private $p_validfrom_original = null;
private $p_id_article_price_group = null;
private $p_id_article_price_group_original = null;
private $p_deposit = null;
private $p_deposit_original = null;
private $p_id_article = null;
private $p_id_article_original = null;

private $p_id_time_unit_is_dirty = false;
private $p_price_per_unit_is_dirty = false;
private $p_validtil_is_dirty = false;
private $p_validfrom_is_dirty = false;
private $p_id_article_price_group_is_dirty = false;
private $p_deposit_is_dirty = false;
private $p_id_article_is_dirty = false;

public function _get_table_name()
{
	return 'article_rent_price';
}

public function get_table_fields()
{
	return array('id_time_unit','price_per_unit','validtil','validfrom','id_article_price_group','deposit','id_article','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select id_time_unit as ' . $delimiter . 'article_rent_price.id_time_unit' . $delimiter . ',price_per_unit as ' . $delimiter . 'article_rent_price.price_per_unit' . $delimiter . ',validtil as ' . $delimiter . 'article_rent_price.validtil' . $delimiter . ',validfrom as ' . $delimiter . 'article_rent_price.validfrom' . $delimiter . ',id_article_price_group as ' . $delimiter . 'article_rent_price.id_article_price_group' . $delimiter . ',deposit as ' . $delimiter . 'article_rent_price.deposit' . $delimiter . ',id_article as ' . $delimiter . 'article_rent_price.id_article' . $delimiter . ',id as ' . $delimiter . 'article_rent_price.id' . $delimiter . ' from article_rent_price';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}

public function get_id_time_unit()
{
	return $this->p_id_time_unit;
}

public function get_id_time_unit_original()
{
	return $this->p_id_time_unit_original;
}

public function set_id_time_unit($value)
{
	if ($this->p_id_time_unit === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_time_unit_is_dirty = true;
	$this->p_id_time_unit = $value;
}

public function set_id_time_unit_original($value)
{
	$this->p_id_time_unit_original = $value;
}

public function get_id_time_unit_is_dirty()
{
	return $this->p_id_time_unit_is_dirty;
}


public function get_price_per_unit()
{
	return $this->p_price_per_unit;
}

public function get_price_per_unit_original()
{
	return $this->p_price_per_unit_original;
}

public function set_price_per_unit($value)
{
	if ($this->p_price_per_unit === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_price_per_unit_is_dirty = true;
	$this->p_price_per_unit = $value;
}

public function set_price_per_unit_original($value)
{
	$this->p_price_per_unit_original = $value;
}

public function get_price_per_unit_is_dirty()
{
	return $this->p_price_per_unit_is_dirty;
}


public function get_validtil()
{
	return $this->p_validtil;
}

public function get_validtil_original()
{
	return $this->p_validtil_original;
}

public function set_validtil($value)
{
	if ($this->p_validtil === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_validtil_is_dirty = true;
	$this->p_validtil = $value;
}

public function set_validtil_original($value)
{
	$this->p_validtil_original = $value;
}

public function get_validtil_is_dirty()
{
	return $this->p_validtil_is_dirty;
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


public function get_id_article_price_group()
{
	return $this->p_id_article_price_group;
}

public function get_id_article_price_group_original()
{
	return $this->p_id_article_price_group_original;
}

public function set_id_article_price_group($value)
{
	if ($this->p_id_article_price_group === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_article_price_group_is_dirty = true;
	$this->p_id_article_price_group = $value;
}

public function set_id_article_price_group_original($value)
{
	$this->p_id_article_price_group_original = $value;
}

public function get_id_article_price_group_is_dirty()
{
	return $this->p_id_article_price_group_is_dirty;
}


public function get_deposit()
{
	return $this->p_deposit;
}

public function get_deposit_original()
{
	return $this->p_deposit_original;
}

public function set_deposit($value)
{
	if ($this->p_deposit === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_deposit_is_dirty = true;
	$this->p_deposit = $value;
}

public function set_deposit_original($value)
{
	$this->p_deposit_original = $value;
}

public function get_deposit_is_dirty()
{
	return $this->p_deposit_is_dirty;
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



public function reset_dirty($reset_values = false)
{
	$this->p_id_time_unit_is_dirty = false;
	$this->p_price_per_unit_is_dirty = false;
	$this->p_validtil_is_dirty = false;
	$this->p_validfrom_is_dirty = false;
	$this->p_id_article_price_group_is_dirty = false;
	$this->p_deposit_is_dirty = false;
	$this->p_id_article_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_time_unit = $this->p_id_time_unit_original;
		$this->p_price_per_unit = $this->p_price_per_unit_original;
		$this->p_validtil = $this->p_validtil_original;
		$this->p_validfrom = $this->p_validfrom_original;
		$this->p_id_article_price_group = $this->p_id_article_price_group_original;
		$this->p_deposit = $this->p_deposit_original;
		$this->p_id_article = $this->p_id_article_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "article_rent_price.id_time_unit":
					$this->set_id_time_unit($val);
					$this->set_id_time_unit_original($val);
					break;
				case "article_rent_price.price_per_unit":
					$this->set_price_per_unit($val);
					$this->set_price_per_unit_original($val);
					break;
				case "article_rent_price.validtil":
					$this->set_validtil($val);
					$this->set_validtil_original($val);
					break;
				case "article_rent_price.validfrom":
					$this->set_validfrom($val);
					$this->set_validfrom_original($val);
					break;
				case "article_rent_price.id_article_price_group":
					$this->set_id_article_price_group($val);
					$this->set_id_article_price_group_original($val);
					break;
				case "article_rent_price.deposit":
					$this->set_deposit($val);
					$this->set_deposit_original($val);
					break;
				case "article_rent_price.id_article":
					$this->set_id_article($val);
					$this->set_id_article_original($val);
					break;
				case "article_rent_price.id":
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
		$article_rent_price = cls_table_factory::create_instance('article_rent_price');
		$row = $db_manager->fetch_row($result);
		$article_rent_price->fill($row);
		return $article_rent_price;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_article_rent_price.php');
		return cls_save_article_rent_price::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_article_rent_price.php');
		return cls_save_article_rent_price::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_article_rent_prices($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('article_rent_price',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('article_rent_price',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_rent_price = cls_table_factory::create_instance('article_rent_price');
				$article_rent_price->fill($row);
				$data[] = $article_rent_price;
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

function get_article_price_group($db_manager,$application)
	{
		$result = $db_manager->get_records('article_price_group',$this->get_id_article_price_group());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article_price_group = cls_table_factory::create_instance('article_price_group');
		$row = $db_manager->fetch_row($result);
		$article_price_group->fill($row);
		return $article_price_group;
	}

function get_time_unit($db_manager,$application)
	{
		$result = $db_manager->get_records('time_unit',$this->get_id_time_unit());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$time_unit = cls_table_factory::create_instance('time_unit');
		$row = $db_manager->fetch_row($result);
		$time_unit->fill($row);
		return $time_unit;
	}

public function get_table_test_data($article_rent_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($article_rent_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$article_rent_prices,'id_data');
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

public function get_communication_reason($article_rent_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($article_rent_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$article_rent_prices,'id_data');
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

public function get_data_change($article_rent_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($article_rent_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$article_rent_prices,'id_data');
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

public function get_data_help($article_rent_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($article_rent_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$article_rent_prices,'id_data');
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

public function get_data_location($article_rent_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($article_rent_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$article_rent_prices,'id_data');
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

public function get_data_posting($article_rent_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($article_rent_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$article_rent_prices,'id_data');
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

public function get_offer_event($article_rent_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($article_rent_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$article_rent_prices,'id_data');
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

public function get_supplier_data($article_rent_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($article_rent_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$article_rent_prices,'id_data');
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

public function get_address($article_rent_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($article_rent_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$article_rent_prices,'id_data');
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

public function get_data_property($article_rent_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($article_rent_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$article_rent_prices,'id_data');
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

public function get_data_translation($article_rent_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($article_rent_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$article_rent_prices,'id_data');
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

public function get_dms($article_rent_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($article_rent_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$article_rent_prices,'id_data');
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

public function get_data_relation_id_data1($article_rent_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($article_rent_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$article_rent_prices,'id_data1');
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

public function get_data_relation_id_data2($article_rent_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($article_rent_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$article_rent_prices,'id_data2');
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

public function get_data_property_id_link_data($article_rent_prices,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($article_rent_prices,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$article_rent_prices,'id_link_data');
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
