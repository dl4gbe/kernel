<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_supplier_data extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_person_supplier = null;
private $p_id_person_supplier_original = null;
private $p_id_person_manufactorer = null;
private $p_id_person_manufactorer_original = null;
private $p_id_data = null;
private $p_id_data_original = null;
private $p_orderno = null;
private $p_orderno_original = null;
private $p_name = null;
private $p_name_original = null;
private $p_min_order_qty = null;
private $p_min_order_qty_original = null;
private $p_min_order_days = null;
private $p_min_order_days_original = null;
private $p_remark = null;
private $p_remark_original = null;

private $p_id_person_supplier_is_dirty = false;
private $p_id_person_manufactorer_is_dirty = false;
private $p_id_data_is_dirty = false;
private $p_orderno_is_dirty = false;
private $p_name_is_dirty = false;
private $p_min_order_qty_is_dirty = false;
private $p_min_order_days_is_dirty = false;
private $p_remark_is_dirty = false;

public function _get_table_name()
{
	return 'supplier_data';
}

public function get_table_fields()
{
	return array('id','id_person_supplier','id_person_manufactorer','id_data','orderno','name','min_order_qty','min_order_days','remark');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'supplier_data.id' . $delimiter . ',id_person_supplier as ' . $delimiter . 'supplier_data.id_person_supplier' . $delimiter . ',id_person_manufactorer as ' . $delimiter . 'supplier_data.id_person_manufactorer' . $delimiter . ',id_data as ' . $delimiter . 'supplier_data.id_data' . $delimiter . ',orderno as ' . $delimiter . 'supplier_data.orderno' . $delimiter . ',name as ' . $delimiter . 'supplier_data.name' . $delimiter . ',min_order_qty as ' . $delimiter . 'supplier_data.min_order_qty' . $delimiter . ',min_order_days as ' . $delimiter . 'supplier_data.min_order_days' . $delimiter . ',remark as ' . $delimiter . 'supplier_data.remark' . $delimiter . ' from supplier_data';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_id_person_supplier()
{
	return $this->p_id_person_supplier;
}

public function get_id_person_supplier_original()
{
	return $this->p_id_person_supplier_original;
}

public function set_id_person_supplier($value)
{
	if ($this->p_id_person_supplier === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_supplier_is_dirty = true;
	$this->p_id_person_supplier = $value;
}

public function set_id_person_supplier_original($value)
{
	$this->p_id_person_supplier_original = $value;
}

public function get_id_person_supplier_is_dirty()
{
	return $this->p_id_person_supplier_is_dirty;
}


public function get_id_person_manufactorer()
{
	return $this->p_id_person_manufactorer;
}

public function get_id_person_manufactorer_original()
{
	return $this->p_id_person_manufactorer_original;
}

public function set_id_person_manufactorer($value)
{
	if ($this->p_id_person_manufactorer === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_manufactorer_is_dirty = true;
	$this->p_id_person_manufactorer = $value;
}

public function set_id_person_manufactorer_original($value)
{
	$this->p_id_person_manufactorer_original = $value;
}

public function get_id_person_manufactorer_is_dirty()
{
	return $this->p_id_person_manufactorer_is_dirty;
}


public function get_id_data()
{
	return $this->p_id_data;
}

public function get_id_data_original()
{
	return $this->p_id_data_original;
}

public function set_id_data($value)
{
	if ($this->p_id_data === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_data_is_dirty = true;
	$this->p_id_data = $value;
}

public function set_id_data_original($value)
{
	$this->p_id_data_original = $value;
}

public function get_id_data_is_dirty()
{
	return $this->p_id_data_is_dirty;
}


public function get_orderno()
{
	return $this->p_orderno;
}

public function get_orderno_original()
{
	return $this->p_orderno_original;
}

public function set_orderno($value)
{
	if ($this->p_orderno === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_orderno_is_dirty = true;
	$this->p_orderno = $value;
}

public function set_orderno_original($value)
{
	$this->p_orderno_original = $value;
}

public function get_orderno_is_dirty()
{
	return $this->p_orderno_is_dirty;
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


public function get_min_order_qty()
{
	return $this->p_min_order_qty;
}

public function get_min_order_qty_original()
{
	return $this->p_min_order_qty_original;
}

public function set_min_order_qty($value)
{
	if ($this->p_min_order_qty === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_min_order_qty_is_dirty = true;
	$this->p_min_order_qty = $value;
}

public function set_min_order_qty_original($value)
{
	$this->p_min_order_qty_original = $value;
}

public function get_min_order_qty_is_dirty()
{
	return $this->p_min_order_qty_is_dirty;
}


public function get_min_order_days()
{
	return $this->p_min_order_days;
}

public function get_min_order_days_original()
{
	return $this->p_min_order_days_original;
}

public function set_min_order_days($value)
{
	if ($this->p_min_order_days === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_min_order_days_is_dirty = true;
	$this->p_min_order_days = $value;
}

public function set_min_order_days_original($value)
{
	$this->p_min_order_days_original = $value;
}

public function get_min_order_days_is_dirty()
{
	return $this->p_min_order_days_is_dirty;
}


public function get_remark()
{
	return $this->p_remark;
}

public function get_remark_original()
{
	return $this->p_remark_original;
}

public function set_remark($value)
{
	if ($this->p_remark === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_remark_is_dirty = true;
	$this->p_remark = $value;
}

public function set_remark_original($value)
{
	$this->p_remark_original = $value;
}

public function get_remark_is_dirty()
{
	return $this->p_remark_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_id_person_supplier_is_dirty = false;
	$this->p_id_person_manufactorer_is_dirty = false;
	$this->p_id_data_is_dirty = false;
	$this->p_orderno_is_dirty = false;
	$this->p_name_is_dirty = false;
	$this->p_min_order_qty_is_dirty = false;
	$this->p_min_order_days_is_dirty = false;
	$this->p_remark_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_person_supplier = $this->p_id_person_supplier_original;
		$this->p_id_person_manufactorer = $this->p_id_person_manufactorer_original;
		$this->p_id_data = $this->p_id_data_original;
		$this->p_orderno = $this->p_orderno_original;
		$this->p_name = $this->p_name_original;
		$this->p_min_order_qty = $this->p_min_order_qty_original;
		$this->p_min_order_days = $this->p_min_order_days_original;
		$this->p_remark = $this->p_remark_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "supplier_data.id":
					$this->set_id($val);
					break;
				case "supplier_data.id_person_supplier":
					$this->set_id_person_supplier($val);
					$this->set_id_person_supplier_original($val);
					break;
				case "supplier_data.id_person_manufactorer":
					$this->set_id_person_manufactorer($val);
					$this->set_id_person_manufactorer_original($val);
					break;
				case "supplier_data.id_data":
					$this->set_id_data($val);
					$this->set_id_data_original($val);
					break;
				case "supplier_data.orderno":
					$this->set_orderno($val);
					$this->set_orderno_original($val);
					break;
				case "supplier_data.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "supplier_data.min_order_qty":
					$this->set_min_order_qty($val);
					$this->set_min_order_qty_original($val);
					break;
				case "supplier_data.min_order_days":
					$this->set_min_order_days($val);
					$this->set_min_order_days_original($val);
					break;
				case "supplier_data.remark":
					$this->set_remark($val);
					$this->set_remark_original($val);
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
		$supplier_data = cls_table_factory::create_instance('supplier_data');
		$row = $db_manager->fetch_row($result);
		$supplier_data->fill($row);
		return $supplier_data;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_supplier_data.php');
		return cls_save_supplier_data::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_supplier_data.php');
		return cls_save_supplier_data::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_supplier_datas($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('supplier_data',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('supplier_data',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$supplier_data = cls_table_factory::create_instance('supplier_data');
				$supplier_data->fill($row);
				$data[] = $supplier_data;
			}
		return $data;
	}

function get_person_manufactorer($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person_manufactorer());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

function get_person_supplier($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person_supplier());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

//changed 1
public function get_supplier_price($db_manager,$application)
	{
		$result = $db_manager->get_records('supplier_price',$this->get_id(),'id_supplier_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$supplier_price = cls_table_factory::create_instance('supplier_price');
		$row = $db_manager->fetch_row($result);
		$supplier_price->fill($row);
		return $supplier_price;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_supplier_prices_by_supplier_data($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('supplier_price',$this->get_id(),'id_supplier_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$supplier_price = cls_table_factory::create_instance('supplier_price');
				$supplier_price->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $supplier_price;
				}
				else
				{
					$data[] = $supplier_price;
				}
			}
		return $data;
	}

public function get_multi_supplier_prices_by_supplier_data($supplier_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_price',$supplier_datas,'id_supplier_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$supplier_price = cls_table_factory::create_instance('supplier_price');
				$supplier_price->fill($row);
				if (!array_key_exists($data[$row['id_supplier_data']]))
				{
					$data[$row['id_supplier_data']] = array();
				}
				$data[$row['id_supplier_data']][] = $supplier_price;
			}
		return $data;
	}

public function get_address($supplier_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($supplier_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$supplier_datas,'id_data');
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

public function get_communication_reason($supplier_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($supplier_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$supplier_datas,'id_data');
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

public function get_data_change($supplier_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($supplier_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$supplier_datas,'id_data');
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

public function get_data_help($supplier_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($supplier_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$supplier_datas,'id_data');
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

public function get_data_location($supplier_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($supplier_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$supplier_datas,'id_data');
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

public function get_data_posting($supplier_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($supplier_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$supplier_datas,'id_data');
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

public function get_data_property($supplier_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($supplier_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$supplier_datas,'id_data');
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

public function get_offer_event($supplier_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($supplier_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$supplier_datas,'id_data');
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

public function get_supplier_data($supplier_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($supplier_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$supplier_datas,'id_data');
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

public function get_table_test_data($supplier_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($supplier_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$supplier_datas,'id_data');
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

public function get_data_translation($supplier_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($supplier_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$supplier_datas,'id_data');
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

public function get_dms($supplier_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($supplier_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$supplier_datas,'id_data');
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

public function get_data_relation_id_data1($supplier_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($supplier_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$supplier_datas,'id_data1');
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

public function get_data_relation_id_data2($supplier_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($supplier_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$supplier_datas,'id_data2');
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

public function get_data_property_id_link_data($supplier_datas,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($supplier_datas,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$supplier_datas,'id_link_data');
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
