<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_data_relation extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_data_relation_type = null;
private $p_id_data_relation_type_original = null;
private $p_id_data1 = null;
private $p_id_data1_original = null;
private $p_id_data2 = null;
private $p_id_data2_original = null;
private $p_id_data_relation_type_vals = null;
private $p_id_data_relation_type_vals_original = null;
private $p_remark = null;
private $p_remark_original = null;
private $p_active = null;
private $p_active_original = null;

private $p_id_data_relation_type_is_dirty = false;
private $p_id_data1_is_dirty = false;
private $p_id_data2_is_dirty = false;
private $p_id_data_relation_type_vals_is_dirty = false;
private $p_remark_is_dirty = false;
private $p_active_is_dirty = false;

public function _get_table_name()
{
	return 'data_relation';
}

public function get_table_fields()
{
	return array('id','id_data_relation_type','id_data1','id_data2','id_data_relation_type_vals','remark','active');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'data_relation.id' . $delimiter . ',id_data_relation_type as ' . $delimiter . 'data_relation.id_data_relation_type' . $delimiter . ',id_data1 as ' . $delimiter . 'data_relation.id_data1' . $delimiter . ',id_data2 as ' . $delimiter . 'data_relation.id_data2' . $delimiter . ',id_data_relation_type_vals as ' . $delimiter . 'data_relation.id_data_relation_type_vals' . $delimiter . ',remark as ' . $delimiter . 'data_relation.remark' . $delimiter . ',active as ' . $delimiter . 'data_relation.active' . $delimiter . ' from data_relation';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_id_data_relation_type()
{
	return $this->p_id_data_relation_type;
}

public function get_id_data_relation_type_original()
{
	return $this->p_id_data_relation_type_original;
}

public function set_id_data_relation_type($value)
{
	if ($this->p_id_data_relation_type === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_data_relation_type_is_dirty = true;
	$this->p_id_data_relation_type = $value;
}

public function set_id_data_relation_type_original($value)
{
	$this->p_id_data_relation_type_original = $value;
}

public function get_id_data_relation_type_is_dirty()
{
	return $this->p_id_data_relation_type_is_dirty;
}


public function get_id_data1()
{
	return $this->p_id_data1;
}

public function get_id_data1_original()
{
	return $this->p_id_data1_original;
}

public function set_id_data1($value)
{
	if ($this->p_id_data1 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_data1_is_dirty = true;
	$this->p_id_data1 = $value;
}

public function set_id_data1_original($value)
{
	$this->p_id_data1_original = $value;
}

public function get_id_data1_is_dirty()
{
	return $this->p_id_data1_is_dirty;
}


public function get_id_data2()
{
	return $this->p_id_data2;
}

public function get_id_data2_original()
{
	return $this->p_id_data2_original;
}

public function set_id_data2($value)
{
	if ($this->p_id_data2 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_data2_is_dirty = true;
	$this->p_id_data2 = $value;
}

public function set_id_data2_original($value)
{
	$this->p_id_data2_original = $value;
}

public function get_id_data2_is_dirty()
{
	return $this->p_id_data2_is_dirty;
}


public function get_id_data_relation_type_vals()
{
	return $this->p_id_data_relation_type_vals;
}

public function get_id_data_relation_type_vals_original()
{
	return $this->p_id_data_relation_type_vals_original;
}

public function set_id_data_relation_type_vals($value)
{
	if ($this->p_id_data_relation_type_vals === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_data_relation_type_vals_is_dirty = true;
	$this->p_id_data_relation_type_vals = $value;
}

public function set_id_data_relation_type_vals_original($value)
{
	$this->p_id_data_relation_type_vals_original = $value;
}

public function get_id_data_relation_type_vals_is_dirty()
{
	return $this->p_id_data_relation_type_vals_is_dirty;
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


public function get_active()
{
	return $this->p_active;
}

public function get_active_original()
{
	return $this->p_active_original;
}

public function set_active($value)
{
	if ($this->p_active === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_active_is_dirty = true;
	$this->p_active = $value;
}

public function set_active_original($value)
{
	$this->p_active_original = $value;
}

public function get_active_is_dirty()
{
	return $this->p_active_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_id_data_relation_type_is_dirty = false;
	$this->p_id_data1_is_dirty = false;
	$this->p_id_data2_is_dirty = false;
	$this->p_id_data_relation_type_vals_is_dirty = false;
	$this->p_remark_is_dirty = false;
	$this->p_active_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_data_relation_type = $this->p_id_data_relation_type_original;
		$this->p_id_data1 = $this->p_id_data1_original;
		$this->p_id_data2 = $this->p_id_data2_original;
		$this->p_id_data_relation_type_vals = $this->p_id_data_relation_type_vals_original;
		$this->p_remark = $this->p_remark_original;
		$this->p_active = $this->p_active_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "data_relation.id":
					$this->set_id($val);
					break;
				case "data_relation.id_data_relation_type":
					$this->set_id_data_relation_type($val);
					$this->set_id_data_relation_type_original($val);
					break;
				case "data_relation.id_data1":
					$this->set_id_data1($val);
					$this->set_id_data1_original($val);
					break;
				case "data_relation.id_data2":
					$this->set_id_data2($val);
					$this->set_id_data2_original($val);
					break;
				case "data_relation.id_data_relation_type_vals":
					$this->set_id_data_relation_type_vals($val);
					$this->set_id_data_relation_type_vals_original($val);
					break;
				case "data_relation.remark":
					$this->set_remark($val);
					$this->set_remark_original($val);
					break;
				case "data_relation.active":
					$this->set_active($val);
					$this->set_active_original($val);
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
		$data_relation = cls_table_factory::create_instance('data_relation');
		$row = $db_manager->fetch_row($result);
		$data_relation->fill($row);
		return $data_relation;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_data_relation.php');
		return cls_save_data_relation::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_data_relation.php');
		return cls_save_data_relation::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_data_relations($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('data_relation',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('data_relation',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_relation = cls_table_factory::create_instance('data_relation');
				$data_relation->fill($row);
				$data[] = $data_relation;
			}
		return $data;
	}

function get_data_relation_type($db_manager,$application)
	{
		$result = $db_manager->get_records('data_relation_type',$this->get_id_data_relation_type());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data_relation_type = cls_table_factory::create_instance('data_relation_type');
		$row = $db_manager->fetch_row($result);
		$data_relation_type->fill($row);
		return $data_relation_type;
	}

function get_data_relation_type_vals($db_manager,$application)
	{
		$result = $db_manager->get_records('data_relation',$this->get_id_data_relation_type_vals());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data_relation = cls_table_factory::create_instance('data_relation');
		$row = $db_manager->fetch_row($result);
		$data_relation->fill($row);
		return $data_relation;
	}

//changed 1
public function get_data_relation_by_type_vals($db_manager,$application)
	{
		$result = $db_manager->get_records('data_relation',$this->get_id(),'id_data_relation_type_vals');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data_relation = cls_table_factory::create_instance('data_relation');
		$row = $db_manager->fetch_row($result);
		$data_relation->fill($row);
		return $data_relation;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_data_relations_by_data_relation_type_vals($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_relation',$this->get_id(),'id_data_relation_type_vals');
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

public function get_multi_data_relations_by_data_relation_type_vals($data_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$data_relations,'id_data_relation_type_vals');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_relation = cls_table_factory::create_instance('data_relation');
				$data_relation->fill($row);
				if (!array_key_exists($data[$row['id_data_relation_type_vals']]))
				{
					$data[$row['id_data_relation_type_vals']] = array();
				}
				$data[$row['id_data_relation_type_vals']][] = $data_relation;
			}
		return $data;
	}

public function get_address($data_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($data_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$data_relations,'id_data');
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

public function get_communication_reason($data_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($data_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$data_relations,'id_data');
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

public function get_data_change($data_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($data_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$data_relations,'id_data');
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

public function get_data_help($data_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($data_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$data_relations,'id_data');
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

public function get_data_location($data_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($data_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$data_relations,'id_data');
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

public function get_data_posting($data_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($data_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$data_relations,'id_data');
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

public function get_data_property($data_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($data_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$data_relations,'id_data');
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

public function get_offer_event($data_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($data_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$data_relations,'id_data');
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

public function get_supplier_data($data_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($data_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$data_relations,'id_data');
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

public function get_table_test_data($data_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($data_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$data_relations,'id_data');
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

public function get_data_translation($data_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($data_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$data_relations,'id_data');
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

public function get_dms($data_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($data_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$data_relations,'id_data');
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

public function get_data_relation_id_data1($data_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($data_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$data_relations,'id_data1');
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

public function get_data_relation_id_data2($data_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($data_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$data_relations,'id_data2');
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

public function get_data_property_id_link_data($data_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($data_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$data_relations,'id_link_data');
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
