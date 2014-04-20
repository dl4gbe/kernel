<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_data_relation_types_vals extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_data_relation_type = null;
private $p_id_data_relation_type_original = null;
private $p_name = null;
private $p_name_original = null;

private $p_id_data_relation_type_is_dirty = false;
private $p_name_is_dirty = false;

public function get_table_name()
{
	return 'data_relation_types_vals';
}

public function get_table_fields()
{
	return array('id','id_data_relation_type','name');
}

public function get_table_select($delimiter = "'")
{
	return 'select id as ' . $delimiter . 'data_relation_types_vals.id' . $delimiter . ',id_data_relation_type as ' . $delimiter . 'data_relation_types_vals.id_data_relation_type' . $delimiter . ',name as ' . $delimiter . 'data_relation_types_vals.name' . $delimiter . ' from data_relation_types_vals';
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


public function reset_dirty($reset_values = false)
{
	$this->p_id_data_relation_type_is_dirty = false;
	$this->p_name_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_data_relation_type = $this->p_id_data_relation_type_original;
		$this->p_name = $this->p_name_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => &$val)
		{
		switch ($key)
			{
				case "data_relation_types_vals.id":
					$this->id = $val;
					$this->id_original = $val;
					break;
				case "data_relation_types_vals.id_data_relation_type":
					$this->id_data_relation_type = $val;
					$this->id_data_relation_type_original = $val;
					break;
				case "data_relation_types_vals.name":
					$this->name = $val;
					$this->name_original = $val;
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
		$data_relation_types_vals = cls_table_factory::create_instance('data_relation_types_vals');
		$row = $db_manager->fetch_row($result);
		$data_relation_types_vals->fill($row);
		return $data_relation_types_vals;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_data_relation_types_vals.php');
		return cls_save_data_relation_types_vals::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_data_relation_types_vals.php');
		return cls_save_data_relation_types_vals::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}
}
?>
