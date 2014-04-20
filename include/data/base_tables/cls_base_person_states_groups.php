<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_person_states_groups extends cls_datatable_base
{
private static $p_cmmon;
private $p_type = null;
private $p_type_original = null;
private $p_name = null;
private $p_name_original = null;
private $p_locationindependant = null;
private $p_locationindependant_original = null;

private $p_type_is_dirty = false;
private $p_name_is_dirty = false;
private $p_locationindependant_is_dirty = false;

public function get_table_name()
{
	return 'person_states_groups';
}

public function get_table_fields()
{
	return array('id','type','name','locationindependant');
}

public function get_table_select($delimiter = "'")
{
	return 'select id as ' . $delimiter . 'person_states_groups.id' . $delimiter . ',type as ' . $delimiter . 'person_states_groups.type' . $delimiter . ',name as ' . $delimiter . 'person_states_groups.name' . $delimiter . ',locationindependant as ' . $delimiter . 'person_states_groups.locationindependant' . $delimiter . ' from person_states_groups';
}


public function get_type()
{
	return $this->p_type;
}

public function get_type_original()
{
	return $this->p_type_original;
}

public function set_type($value)
{
	if ($this->p_type === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_type_is_dirty = true;
	$this->p_type = $value;
}

public function set_type_original($value)
{
	$this->p_type_original = $value;
}

public function get_type_is_dirty()
{
	return $this->p_type_is_dirty;
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


public function get_locationindependant()
{
	return $this->p_locationindependant;
}

public function get_locationindependant_original()
{
	return $this->p_locationindependant_original;
}

public function set_locationindependant($value)
{
	if ($this->p_locationindependant === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_locationindependant_is_dirty = true;
	$this->p_locationindependant = $value;
}

public function set_locationindependant_original($value)
{
	$this->p_locationindependant_original = $value;
}

public function get_locationindependant_is_dirty()
{
	return $this->p_locationindependant_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_type_is_dirty = false;
	$this->p_name_is_dirty = false;
	$this->p_locationindependant_is_dirty = false;
	if ($reset_values)
	{
		$this->p_type = $this->p_type_original;
		$this->p_name = $this->p_name_original;
		$this->p_locationindependant = $this->p_locationindependant_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => &$val)
		{
		switch ($key)
			{
				case "person_states_groups.id":
					$this->id = $val;
					$this->id_original = $val;
					break;
				case "person_states_groups.type":
					$this->type = $val;
					$this->type_original = $val;
					break;
				case "person_states_groups.name":
					$this->name = $val;
					$this->name_original = $val;
					break;
				case "person_states_groups.locationindependant":
					$this->locationindependant = $val;
					$this->locationindependant_original = $val;
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
		require_once('/include/data/table_factory/cls_table_factory.php');
		$person_states_groups = cls_table_factory::create_instance('person_states_groups');
		$row = $db_manager->fetch_row($result);
		$person_states_groups->fill($row);
		return $person_states_groups;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_person_states_groups.php');
		return cls_save_person_states_groups::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_person_states_groups.php');
		return cls_save_person_states_groups::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}
}
?>
