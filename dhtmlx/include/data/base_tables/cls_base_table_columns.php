<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_table_columns extends cls_datatable_base
{
private static $p_cmmon;
private $p_table_name = null;
private $p_table_name_original = null;
private $p_column_name = null;
private $p_column_name_original = null;
private $p_name = null;
private $p_name_original = null;

private $p_table_name_is_dirty = false;
private $p_column_name_is_dirty = false;
private $p_name_is_dirty = false;

public function get_table_name()
{
	return 'table_columns';
}

public function get_table_fields()
{
	return array('id','table_name','column_name','name');
}

public function get_table_select($delimiter = "'")
{
	return 'select id as ' . $delimiter . 'table_columns.id' . $delimiter . ',table_name as ' . $delimiter . 'table_columns.table_name' . $delimiter . ',column_name as ' . $delimiter . 'table_columns.column_name' . $delimiter . ',name as ' . $delimiter . 'table_columns.name' . $delimiter . ' from table_columns';
}


public function get_table_name()
{
	return $this->p_table_name;
}

public function get_table_name_original()
{
	return $this->p_table_name_original;
}

public function set_table_name($value)
{
	if ($this->p_table_name === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_table_name_is_dirty = true;
	$this->p_table_name = $value;
}

public function set_table_name_original($value)
{
	$this->p_table_name_original = $value;
}

public function get_table_name_is_dirty()
{
	return $this->p_table_name_is_dirty;
}


public function get_column_name()
{
	return $this->p_column_name;
}

public function get_column_name_original()
{
	return $this->p_column_name_original;
}

public function set_column_name($value)
{
	if ($this->p_column_name === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_column_name_is_dirty = true;
	$this->p_column_name = $value;
}

public function set_column_name_original($value)
{
	$this->p_column_name_original = $value;
}

public function get_column_name_is_dirty()
{
	return $this->p_column_name_is_dirty;
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
	$this->p_table_name_is_dirty = false;
	$this->p_column_name_is_dirty = false;
	$this->p_name_is_dirty = false;
	if ($reset_values)
	{
		$this->p_table_name = $this->p_table_name_original;
		$this->p_column_name = $this->p_column_name_original;
		$this->p_name = $this->p_name_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => &$val)
		{
		switch ($key)
			{
				case "table_columns.id":
					$this->id = $val;
					$this->id_original = $val;
					break;
				case "table_columns.table_name":
					$this->table_name = $val;
					$this->table_name_original = $val;
					break;
				case "table_columns.column_name":
					$this->column_name = $val;
					$this->column_name_original = $val;
					break;
				case "table_columns.name":
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
		$table_columns = cls_table_factory::create_instance('table_columns');
		$row = $db_manager->fetch_row($result);
		$table_columns->fill($row);
		return $table_columns;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_table_columns.php');
		return cls_save_table_columns::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_table_columns.php');
		return cls_save_table_columns::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}
}
?>
