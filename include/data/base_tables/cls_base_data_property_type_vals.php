<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_data_property_type_vals extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_data_property_type = null;
private $p_id_data_property_type_original = null;
private $p_value = null;
private $p_value_original = null;

private $p_id_data_property_type_is_dirty = false;
private $p_value_is_dirty = false;

public function get_table_name()
{
	return 'data_property_type_vals';
}

public function get_table_fields()
{
	return array('id','id_data_property_type','value');
}

public function get_table_select($delimiter = "'")
{
	return 'select id as ' . $delimiter . 'data_property_type_vals.id' . $delimiter . ',id_data_property_type as ' . $delimiter . 'data_property_type_vals.id_data_property_type' . $delimiter . ',value as ' . $delimiter . 'data_property_type_vals.value' . $delimiter . ' from data_property_type_vals';
}


public function get_id_data_property_type()
{
	return $this->p_id_data_property_type;
}

public function get_id_data_property_type_original()
{
	return $this->p_id_data_property_type_original;
}

public function set_id_data_property_type($value)
{
	if ($this->p_id_data_property_type === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_data_property_type_is_dirty = true;
	$this->p_id_data_property_type = $value;
}

public function set_id_data_property_type_original($value)
{
	$this->p_id_data_property_type_original = $value;
}

public function get_id_data_property_type_is_dirty()
{
	return $this->p_id_data_property_type_is_dirty;
}


public function get_value()
{
	return $this->p_value;
}

public function get_value_original()
{
	return $this->p_value_original;
}

public function set_value($value)
{
	if ($this->p_value === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_value_is_dirty = true;
	$this->p_value = $value;
}

public function set_value_original($value)
{
	$this->p_value_original = $value;
}

public function get_value_is_dirty()
{
	return $this->p_value_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_id_data_property_type_is_dirty = false;
	$this->p_value_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_data_property_type = $this->p_id_data_property_type_original;
		$this->p_value = $this->p_value_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => &$val)
		{
		switch ($key)
			{
				case "data_property_type_vals.id":
					$this->id = $val;
					$this->id_original = $val;
					break;
				case "data_property_type_vals.id_data_property_type":
					$this->id_data_property_type = $val;
					$this->id_data_property_type_original = $val;
					break;
				case "data_property_type_vals.value":
					$this->value = $val;
					$this->value_original = $val;
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
		$data_property_type_vals = cls_table_factory::create_instance('data_property_type_vals');
		$row = $db_manager->fetch_row($result);
		$data_property_type_vals->fill($row);
		return $data_property_type_vals;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_data_property_type_vals.php');
		return cls_save_data_property_type_vals::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_data_property_type_vals.php');
		return cls_save_data_property_type_vals::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}
}
?>
