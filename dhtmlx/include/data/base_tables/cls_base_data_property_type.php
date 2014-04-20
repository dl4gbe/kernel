<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_data_property_type extends cls_datatable_base
{
private static $p_cmmon;
private $p_tablename = null;
private $p_tablename_original = null;
private $p_name = null;
private $p_name_original = null;
private $p_datatype = null;
private $p_datatype_original = null;
private $p_id_person_states = null;
private $p_id_person_states_original = null;
private $p_defaultvalue = null;
private $p_defaultvalue_original = null;
private $p_active = null;
private $p_active_original = null;
private $p_lookuptablename = null;
private $p_lookuptablename_original = null;
private $p_lookuptable_idfield = null;
private $p_lookuptable_idfield_original = null;
private $p_lookuptable_namefield1 = null;
private $p_lookuptable_namefield1_original = null;
private $p_lookuptable_namefield2 = null;
private $p_lookuptable_namefield2_original = null;
private $p_lookuptable_namefield3 = null;
private $p_lookuptable_namefield3_original = null;
private $p_lookuptable_namefield4 = null;
private $p_lookuptable_namefield4_original = null;
private $p_lookuptable_namefield5 = null;
private $p_lookuptable_namefield5_original = null;
private $p_lookuptable_wherecondition = null;
private $p_lookuptable_wherecondition_original = null;

private $p_tablename_is_dirty = false;
private $p_name_is_dirty = false;
private $p_datatype_is_dirty = false;
private $p_id_person_states_is_dirty = false;
private $p_defaultvalue_is_dirty = false;
private $p_active_is_dirty = false;
private $p_lookuptablename_is_dirty = false;
private $p_lookuptable_idfield_is_dirty = false;
private $p_lookuptable_namefield1_is_dirty = false;
private $p_lookuptable_namefield2_is_dirty = false;
private $p_lookuptable_namefield3_is_dirty = false;
private $p_lookuptable_namefield4_is_dirty = false;
private $p_lookuptable_namefield5_is_dirty = false;
private $p_lookuptable_wherecondition_is_dirty = false;

public function _get_table_name()
{
	return 'data_property_type';
}

public function get_table_fields()
{
	return array('id','tablename','name','datatype','id_person_states','defaultvalue','active','lookuptablename','lookuptable_idfield','lookuptable_namefield1','lookuptable_namefield2','lookuptable_namefield3','lookuptable_namefield4','lookuptable_namefield5','lookuptable_wherecondition');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'data_property_type.id' . $delimiter . ',tablename as ' . $delimiter . 'data_property_type.tablename' . $delimiter . ',name as ' . $delimiter . 'data_property_type.name' . $delimiter . ',datatype as ' . $delimiter . 'data_property_type.datatype' . $delimiter . ',id_person_states as ' . $delimiter . 'data_property_type.id_person_states' . $delimiter . ',defaultvalue as ' . $delimiter . 'data_property_type.defaultvalue' . $delimiter . ',active as ' . $delimiter . 'data_property_type.active' . $delimiter . ',lookuptablename as ' . $delimiter . 'data_property_type.lookuptablename' . $delimiter . ',lookuptable_idfield as ' . $delimiter . 'data_property_type.lookuptable_idfield' . $delimiter . ',lookuptable_namefield1 as ' . $delimiter . 'data_property_type.lookuptable_namefield1' . $delimiter . ',lookuptable_namefield2 as ' . $delimiter . 'data_property_type.lookuptable_namefield2' . $delimiter . ',lookuptable_namefield3 as ' . $delimiter . 'data_property_type.lookuptable_namefield3' . $delimiter . ',lookuptable_namefield4 as ' . $delimiter . 'data_property_type.lookuptable_namefield4' . $delimiter . ',lookuptable_namefield5 as ' . $delimiter . 'data_property_type.lookuptable_namefield5' . $delimiter . ',lookuptable_wherecondition as ' . $delimiter . 'data_property_type.lookuptable_wherecondition' . $delimiter . ' from data_property_type';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_tablename()
{
	return $this->p_tablename;
}

public function get_tablename_original()
{
	return $this->p_tablename_original;
}

public function set_tablename($value)
{
	if ($this->p_tablename === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_tablename_is_dirty = true;
	$this->p_tablename = $value;
}

public function set_tablename_original($value)
{
	$this->p_tablename_original = $value;
}

public function get_tablename_is_dirty()
{
	return $this->p_tablename_is_dirty;
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


public function get_datatype()
{
	return $this->p_datatype;
}

public function get_datatype_original()
{
	return $this->p_datatype_original;
}

public function set_datatype($value)
{
	if ($this->p_datatype === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_datatype_is_dirty = true;
	$this->p_datatype = $value;
}

public function set_datatype_original($value)
{
	$this->p_datatype_original = $value;
}

public function get_datatype_is_dirty()
{
	return $this->p_datatype_is_dirty;
}


public function get_id_person_states()
{
	return $this->p_id_person_states;
}

public function get_id_person_states_original()
{
	return $this->p_id_person_states_original;
}

public function set_id_person_states($value)
{
	if ($this->p_id_person_states === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_states_is_dirty = true;
	$this->p_id_person_states = $value;
}

public function set_id_person_states_original($value)
{
	$this->p_id_person_states_original = $value;
}

public function get_id_person_states_is_dirty()
{
	return $this->p_id_person_states_is_dirty;
}


public function get_defaultvalue()
{
	return $this->p_defaultvalue;
}

public function get_defaultvalue_original()
{
	return $this->p_defaultvalue_original;
}

public function set_defaultvalue($value)
{
	if ($this->p_defaultvalue === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_defaultvalue_is_dirty = true;
	$this->p_defaultvalue = $value;
}

public function set_defaultvalue_original($value)
{
	$this->p_defaultvalue_original = $value;
}

public function get_defaultvalue_is_dirty()
{
	return $this->p_defaultvalue_is_dirty;
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


public function get_lookuptablename()
{
	return $this->p_lookuptablename;
}

public function get_lookuptablename_original()
{
	return $this->p_lookuptablename_original;
}

public function set_lookuptablename($value)
{
	if ($this->p_lookuptablename === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_lookuptablename_is_dirty = true;
	$this->p_lookuptablename = $value;
}

public function set_lookuptablename_original($value)
{
	$this->p_lookuptablename_original = $value;
}

public function get_lookuptablename_is_dirty()
{
	return $this->p_lookuptablename_is_dirty;
}


public function get_lookuptable_idfield()
{
	return $this->p_lookuptable_idfield;
}

public function get_lookuptable_idfield_original()
{
	return $this->p_lookuptable_idfield_original;
}

public function set_lookuptable_idfield($value)
{
	if ($this->p_lookuptable_idfield === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_lookuptable_idfield_is_dirty = true;
	$this->p_lookuptable_idfield = $value;
}

public function set_lookuptable_idfield_original($value)
{
	$this->p_lookuptable_idfield_original = $value;
}

public function get_lookuptable_idfield_is_dirty()
{
	return $this->p_lookuptable_idfield_is_dirty;
}


public function get_lookuptable_namefield1()
{
	return $this->p_lookuptable_namefield1;
}

public function get_lookuptable_namefield1_original()
{
	return $this->p_lookuptable_namefield1_original;
}

public function set_lookuptable_namefield1($value)
{
	if ($this->p_lookuptable_namefield1 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_lookuptable_namefield1_is_dirty = true;
	$this->p_lookuptable_namefield1 = $value;
}

public function set_lookuptable_namefield1_original($value)
{
	$this->p_lookuptable_namefield1_original = $value;
}

public function get_lookuptable_namefield1_is_dirty()
{
	return $this->p_lookuptable_namefield1_is_dirty;
}


public function get_lookuptable_namefield2()
{
	return $this->p_lookuptable_namefield2;
}

public function get_lookuptable_namefield2_original()
{
	return $this->p_lookuptable_namefield2_original;
}

public function set_lookuptable_namefield2($value)
{
	if ($this->p_lookuptable_namefield2 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_lookuptable_namefield2_is_dirty = true;
	$this->p_lookuptable_namefield2 = $value;
}

public function set_lookuptable_namefield2_original($value)
{
	$this->p_lookuptable_namefield2_original = $value;
}

public function get_lookuptable_namefield2_is_dirty()
{
	return $this->p_lookuptable_namefield2_is_dirty;
}


public function get_lookuptable_namefield3()
{
	return $this->p_lookuptable_namefield3;
}

public function get_lookuptable_namefield3_original()
{
	return $this->p_lookuptable_namefield3_original;
}

public function set_lookuptable_namefield3($value)
{
	if ($this->p_lookuptable_namefield3 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_lookuptable_namefield3_is_dirty = true;
	$this->p_lookuptable_namefield3 = $value;
}

public function set_lookuptable_namefield3_original($value)
{
	$this->p_lookuptable_namefield3_original = $value;
}

public function get_lookuptable_namefield3_is_dirty()
{
	return $this->p_lookuptable_namefield3_is_dirty;
}


public function get_lookuptable_namefield4()
{
	return $this->p_lookuptable_namefield4;
}

public function get_lookuptable_namefield4_original()
{
	return $this->p_lookuptable_namefield4_original;
}

public function set_lookuptable_namefield4($value)
{
	if ($this->p_lookuptable_namefield4 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_lookuptable_namefield4_is_dirty = true;
	$this->p_lookuptable_namefield4 = $value;
}

public function set_lookuptable_namefield4_original($value)
{
	$this->p_lookuptable_namefield4_original = $value;
}

public function get_lookuptable_namefield4_is_dirty()
{
	return $this->p_lookuptable_namefield4_is_dirty;
}


public function get_lookuptable_namefield5()
{
	return $this->p_lookuptable_namefield5;
}

public function get_lookuptable_namefield5_original()
{
	return $this->p_lookuptable_namefield5_original;
}

public function set_lookuptable_namefield5($value)
{
	if ($this->p_lookuptable_namefield5 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_lookuptable_namefield5_is_dirty = true;
	$this->p_lookuptable_namefield5 = $value;
}

public function set_lookuptable_namefield5_original($value)
{
	$this->p_lookuptable_namefield5_original = $value;
}

public function get_lookuptable_namefield5_is_dirty()
{
	return $this->p_lookuptable_namefield5_is_dirty;
}


public function get_lookuptable_wherecondition()
{
	return $this->p_lookuptable_wherecondition;
}

public function get_lookuptable_wherecondition_original()
{
	return $this->p_lookuptable_wherecondition_original;
}

public function set_lookuptable_wherecondition($value)
{
	if ($this->p_lookuptable_wherecondition === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_lookuptable_wherecondition_is_dirty = true;
	$this->p_lookuptable_wherecondition = $value;
}

public function set_lookuptable_wherecondition_original($value)
{
	$this->p_lookuptable_wherecondition_original = $value;
}

public function get_lookuptable_wherecondition_is_dirty()
{
	return $this->p_lookuptable_wherecondition_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_tablename_is_dirty = false;
	$this->p_name_is_dirty = false;
	$this->p_datatype_is_dirty = false;
	$this->p_id_person_states_is_dirty = false;
	$this->p_defaultvalue_is_dirty = false;
	$this->p_active_is_dirty = false;
	$this->p_lookuptablename_is_dirty = false;
	$this->p_lookuptable_idfield_is_dirty = false;
	$this->p_lookuptable_namefield1_is_dirty = false;
	$this->p_lookuptable_namefield2_is_dirty = false;
	$this->p_lookuptable_namefield3_is_dirty = false;
	$this->p_lookuptable_namefield4_is_dirty = false;
	$this->p_lookuptable_namefield5_is_dirty = false;
	$this->p_lookuptable_wherecondition_is_dirty = false;
	if ($reset_values)
	{
		$this->p_tablename = $this->p_tablename_original;
		$this->p_name = $this->p_name_original;
		$this->p_datatype = $this->p_datatype_original;
		$this->p_id_person_states = $this->p_id_person_states_original;
		$this->p_defaultvalue = $this->p_defaultvalue_original;
		$this->p_active = $this->p_active_original;
		$this->p_lookuptablename = $this->p_lookuptablename_original;
		$this->p_lookuptable_idfield = $this->p_lookuptable_idfield_original;
		$this->p_lookuptable_namefield1 = $this->p_lookuptable_namefield1_original;
		$this->p_lookuptable_namefield2 = $this->p_lookuptable_namefield2_original;
		$this->p_lookuptable_namefield3 = $this->p_lookuptable_namefield3_original;
		$this->p_lookuptable_namefield4 = $this->p_lookuptable_namefield4_original;
		$this->p_lookuptable_namefield5 = $this->p_lookuptable_namefield5_original;
		$this->p_lookuptable_wherecondition = $this->p_lookuptable_wherecondition_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "data_property_type.id":
					$this->set_id($val);
					break;
				case "data_property_type.tablename":
					$this->set_tablename($val);
					$this->set_tablename_original($val);
					break;
				case "data_property_type.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "data_property_type.datatype":
					$this->set_datatype($val);
					$this->set_datatype_original($val);
					break;
				case "data_property_type.id_person_states":
					$this->set_id_person_states($val);
					$this->set_id_person_states_original($val);
					break;
				case "data_property_type.defaultvalue":
					$this->set_defaultvalue($val);
					$this->set_defaultvalue_original($val);
					break;
				case "data_property_type.active":
					$this->set_active($val);
					$this->set_active_original($val);
					break;
				case "data_property_type.lookuptablename":
					$this->set_lookuptablename($val);
					$this->set_lookuptablename_original($val);
					break;
				case "data_property_type.lookuptable_idfield":
					$this->set_lookuptable_idfield($val);
					$this->set_lookuptable_idfield_original($val);
					break;
				case "data_property_type.lookuptable_namefield1":
					$this->set_lookuptable_namefield1($val);
					$this->set_lookuptable_namefield1_original($val);
					break;
				case "data_property_type.lookuptable_namefield2":
					$this->set_lookuptable_namefield2($val);
					$this->set_lookuptable_namefield2_original($val);
					break;
				case "data_property_type.lookuptable_namefield3":
					$this->set_lookuptable_namefield3($val);
					$this->set_lookuptable_namefield3_original($val);
					break;
				case "data_property_type.lookuptable_namefield4":
					$this->set_lookuptable_namefield4($val);
					$this->set_lookuptable_namefield4_original($val);
					break;
				case "data_property_type.lookuptable_namefield5":
					$this->set_lookuptable_namefield5($val);
					$this->set_lookuptable_namefield5_original($val);
					break;
				case "data_property_type.lookuptable_wherecondition":
					$this->set_lookuptable_wherecondition($val);
					$this->set_lookuptable_wherecondition_original($val);
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
		$data_property_type = cls_table_factory::create_instance('data_property_type');
		$row = $db_manager->fetch_row($result);
		$data_property_type->fill($row);
		return $data_property_type;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_data_property_type.php');
		return cls_save_data_property_type::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_data_property_type.php');
		return cls_save_data_property_type::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_data_property_types($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('data_property_type',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('data_property_type',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property_type = cls_table_factory::create_instance('data_property_type');
				$data_property_type->fill($row);
				$data[] = $data_property_type;
			}
		return $data;
	}

function get_person_states($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person_states());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

//changed 1
public function get_data_property($db_manager,$application)
	{
		$result = $db_manager->get_records('data_property',$this->get_id(),'id_data_property_type');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data_property = cls_table_factory::create_instance('data_property');
		$row = $db_manager->fetch_row($result);
		$data_property->fill($row);
		return $data_property;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_data_propertys_by_data_property_type($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_property',$this->get_id(),'id_data_property_type');
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

public function get_multi_data_propertys_by_data_property_type($data_property_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$data_property_types,'id_data_property_type');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property = cls_table_factory::create_instance('data_property');
				$data_property->fill($row);
				if (!array_key_exists($data[$row['id_data_property_type']]))
				{
					$data[$row['id_data_property_type']] = array();
				}
				$data[$row['id_data_property_type']][] = $data_property;
			}
		return $data;
	}

//changed 1
public function get_data_property_type_val($db_manager,$application)
	{
		$result = $db_manager->get_records('data_property_type_val',$this->get_id(),'id_data_property_type');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data_property_type_val = cls_table_factory::create_instance('data_property_type_val');
		$row = $db_manager->fetch_row($result);
		$data_property_type_val->fill($row);
		return $data_property_type_val;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_data_property_type_vals_by_data_property_type($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_property_type_val',$this->get_id(),'id_data_property_type');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property_type_val = cls_table_factory::create_instance('data_property_type_val');
				$data_property_type_val->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_property_type_val;
				}
				else
				{
					$data[] = $data_property_type_val;
				}
			}
		return $data;
	}

public function get_multi_data_property_type_vals_by_data_property_type($data_property_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property_type_val',$data_property_types,'id_data_property_type');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property_type_val = cls_table_factory::create_instance('data_property_type_val');
				$data_property_type_val->fill($row);
				if (!array_key_exists($data[$row['id_data_property_type']]))
				{
					$data[$row['id_data_property_type']] = array();
				}
				$data[$row['id_data_property_type']][] = $data_property_type_val;
			}
		return $data;
	}

public function get_address($data_property_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($data_property_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$data_property_types,'id_data');
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

public function get_communication_reason($data_property_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($data_property_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$data_property_types,'id_data');
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

public function get_data_change($data_property_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($data_property_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$data_property_types,'id_data');
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

public function get_data_help($data_property_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($data_property_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$data_property_types,'id_data');
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

public function get_data_location($data_property_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($data_property_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$data_property_types,'id_data');
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

public function get_data_posting($data_property_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($data_property_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$data_property_types,'id_data');
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

public function get_multi_data_property($data_property_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$data_property_types,'id_data');
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

public function get_offer_event($data_property_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($data_property_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$data_property_types,'id_data');
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

public function get_supplier_data($data_property_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($data_property_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$data_property_types,'id_data');
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

public function get_table_test_data($data_property_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($data_property_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$data_property_types,'id_data');
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

public function get_data_translation($data_property_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($data_property_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$data_property_types,'id_data');
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

public function get_dms($data_property_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($data_property_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$data_property_types,'id_data');
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

public function get_data_relation_id_data1($data_property_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($data_property_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$data_property_types,'id_data1');
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

public function get_data_relation_id_data2($data_property_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($data_property_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$data_property_types,'id_data2');
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

public function get_data_property_id_link_data($data_property_types,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($data_property_types,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$data_property_types,'id_link_data');
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
