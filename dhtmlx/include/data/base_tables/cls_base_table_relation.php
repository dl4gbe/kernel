<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_table_relation extends cls_datatable_base
{
private static $p_cmmon;
private $p_table_name_parent = null;
private $p_table_name_parent_original = null;
private $p_parent_table_field = null;
private $p_parent_table_field_original = null;
private $p_table_name_child = null;
private $p_table_name_child_original = null;
private $p_child_table_field = null;
private $p_child_table_field_original = null;
private $p_activ = null;
private $p_activ_original = null;
private $p_remark = null;
private $p_remark_original = null;
private $p_alias = null;
private $p_alias_original = null;
private $p_one_to_many = null;
private $p_one_to_many_original = null;

private $p_table_name_parent_is_dirty = false;
private $p_parent_table_field_is_dirty = false;
private $p_table_name_child_is_dirty = false;
private $p_child_table_field_is_dirty = false;
private $p_activ_is_dirty = false;
private $p_remark_is_dirty = false;
private $p_alias_is_dirty = false;
private $p_one_to_many_is_dirty = false;

public function _get_table_name()
{
	return 'table_relation';
}

public function get_table_fields()
{
	return array('id','table_name_parent','parent_table_field','table_name_child','child_table_field','activ','remark','alias','one_to_many');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'table_relation.id' . $delimiter . ',table_name_parent as ' . $delimiter . 'table_relation.table_name_parent' . $delimiter . ',parent_table_field as ' . $delimiter . 'table_relation.parent_table_field' . $delimiter . ',table_name_child as ' . $delimiter . 'table_relation.table_name_child' . $delimiter . ',child_table_field as ' . $delimiter . 'table_relation.child_table_field' . $delimiter . ',activ as ' . $delimiter . 'table_relation.activ' . $delimiter . ',remark as ' . $delimiter . 'table_relation.remark' . $delimiter . ',alias as ' . $delimiter . 'table_relation.alias' . $delimiter . ',one_to_many as ' . $delimiter . 'table_relation.one_to_many' . $delimiter . ' from table_relation';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_table_name_parent()
{
	return $this->p_table_name_parent;
}

public function get_table_name_parent_original()
{
	return $this->p_table_name_parent_original;
}

public function set_table_name_parent($value)
{
	if ($this->p_table_name_parent === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_table_name_parent_is_dirty = true;
	$this->p_table_name_parent = $value;
}

public function set_table_name_parent_original($value)
{
	$this->p_table_name_parent_original = $value;
}

public function get_table_name_parent_is_dirty()
{
	return $this->p_table_name_parent_is_dirty;
}


public function get_parent_table_field()
{
	return $this->p_parent_table_field;
}

public function get_parent_table_field_original()
{
	return $this->p_parent_table_field_original;
}

public function set_parent_table_field($value)
{
	if ($this->p_parent_table_field === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_parent_table_field_is_dirty = true;
	$this->p_parent_table_field = $value;
}

public function set_parent_table_field_original($value)
{
	$this->p_parent_table_field_original = $value;
}

public function get_parent_table_field_is_dirty()
{
	return $this->p_parent_table_field_is_dirty;
}


public function get_table_name_child()
{
	return $this->p_table_name_child;
}

public function get_table_name_child_original()
{
	return $this->p_table_name_child_original;
}

public function set_table_name_child($value)
{
	if ($this->p_table_name_child === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_table_name_child_is_dirty = true;
	$this->p_table_name_child = $value;
}

public function set_table_name_child_original($value)
{
	$this->p_table_name_child_original = $value;
}

public function get_table_name_child_is_dirty()
{
	return $this->p_table_name_child_is_dirty;
}


public function get_child_table_field()
{
	return $this->p_child_table_field;
}

public function get_child_table_field_original()
{
	return $this->p_child_table_field_original;
}

public function set_child_table_field($value)
{
	if ($this->p_child_table_field === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_child_table_field_is_dirty = true;
	$this->p_child_table_field = $value;
}

public function set_child_table_field_original($value)
{
	$this->p_child_table_field_original = $value;
}

public function get_child_table_field_is_dirty()
{
	return $this->p_child_table_field_is_dirty;
}


public function get_activ()
{
	return $this->p_activ;
}

public function get_activ_original()
{
	return $this->p_activ_original;
}

public function set_activ($value)
{
	if ($this->p_activ === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_activ_is_dirty = true;
	$this->p_activ = $value;
}

public function set_activ_original($value)
{
	$this->p_activ_original = $value;
}

public function get_activ_is_dirty()
{
	return $this->p_activ_is_dirty;
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


public function get_alias()
{
	return $this->p_alias;
}

public function get_alias_original()
{
	return $this->p_alias_original;
}

public function set_alias($value)
{
	if ($this->p_alias === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_alias_is_dirty = true;
	$this->p_alias = $value;
}

public function set_alias_original($value)
{
	$this->p_alias_original = $value;
}

public function get_alias_is_dirty()
{
	return $this->p_alias_is_dirty;
}


public function get_one_to_many()
{
	return $this->p_one_to_many;
}

public function get_one_to_many_original()
{
	return $this->p_one_to_many_original;
}

public function set_one_to_many($value)
{
	if ($this->p_one_to_many === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_one_to_many_is_dirty = true;
	$this->p_one_to_many = $value;
}

public function set_one_to_many_original($value)
{
	$this->p_one_to_many_original = $value;
}

public function get_one_to_many_is_dirty()
{
	return $this->p_one_to_many_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_table_name_parent_is_dirty = false;
	$this->p_parent_table_field_is_dirty = false;
	$this->p_table_name_child_is_dirty = false;
	$this->p_child_table_field_is_dirty = false;
	$this->p_activ_is_dirty = false;
	$this->p_remark_is_dirty = false;
	$this->p_alias_is_dirty = false;
	$this->p_one_to_many_is_dirty = false;
	if ($reset_values)
	{
		$this->p_table_name_parent = $this->p_table_name_parent_original;
		$this->p_parent_table_field = $this->p_parent_table_field_original;
		$this->p_table_name_child = $this->p_table_name_child_original;
		$this->p_child_table_field = $this->p_child_table_field_original;
		$this->p_activ = $this->p_activ_original;
		$this->p_remark = $this->p_remark_original;
		$this->p_alias = $this->p_alias_original;
		$this->p_one_to_many = $this->p_one_to_many_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "table_relation.id":
					$this->set_id($val);
					break;
				case "table_relation.table_name_parent":
					$this->set_table_name_parent($val);
					$this->set_table_name_parent_original($val);
					break;
				case "table_relation.parent_table_field":
					$this->set_parent_table_field($val);
					$this->set_parent_table_field_original($val);
					break;
				case "table_relation.table_name_child":
					$this->set_table_name_child($val);
					$this->set_table_name_child_original($val);
					break;
				case "table_relation.child_table_field":
					$this->set_child_table_field($val);
					$this->set_child_table_field_original($val);
					break;
				case "table_relation.activ":
					$this->set_activ($val);
					$this->set_activ_original($val);
					break;
				case "table_relation.remark":
					$this->set_remark($val);
					$this->set_remark_original($val);
					break;
				case "table_relation.alias":
					$this->set_alias($val);
					$this->set_alias_original($val);
					break;
				case "table_relation.one_to_many":
					$this->set_one_to_many($val);
					$this->set_one_to_many_original($val);
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
		$table_relation = cls_table_factory::create_instance('table_relation');
		$row = $db_manager->fetch_row($result);
		$table_relation->fill($row);
		return $table_relation;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_table_relation.php');
		return cls_save_table_relation::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_table_relation.php');
		return cls_save_table_relation::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_table_relations($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('table_relation',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('table_relation',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$table_relation = cls_table_factory::create_instance('table_relation');
				$table_relation->fill($row);
				$data[] = $table_relation;
			}
		return $data;
	}

public function get_address($table_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($table_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$table_relations,'id_data');
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

public function get_communication_reason($table_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($table_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$table_relations,'id_data');
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

public function get_data_change($table_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($table_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$table_relations,'id_data');
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

public function get_data_help($table_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($table_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$table_relations,'id_data');
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

public function get_data_location($table_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($table_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$table_relations,'id_data');
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

public function get_data_posting($table_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($table_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$table_relations,'id_data');
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

public function get_data_property($table_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($table_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$table_relations,'id_data');
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

public function get_offer_event($table_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($table_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$table_relations,'id_data');
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

public function get_supplier_data($table_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($table_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$table_relations,'id_data');
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

public function get_table_test_data($table_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($table_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$table_relations,'id_data');
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

public function get_data_translation($table_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($table_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$table_relations,'id_data');
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

public function get_dms($table_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($table_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$table_relations,'id_data');
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

public function get_data_relation_id_data1($table_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($table_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$table_relations,'id_data1');
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

public function get_data_relation_id_data2($table_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($table_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$table_relations,'id_data2');
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

public function get_data_property_id_link_data($table_relations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($table_relations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$table_relations,'id_link_data');
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
