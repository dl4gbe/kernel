<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_table_test_tests extends cls_datatable_base
{
private static $p_cmmon;
private $p_tablename = null;
private $p_tablename_original = null;
private $p_name = null;
private $p_name_original = null;
private $p_path = null;
private $p_path_original = null;
private $p_source = null;
private $p_source_original = null;

private $p_tablename_is_dirty = false;
private $p_name_is_dirty = false;
private $p_path_is_dirty = false;
private $p_source_is_dirty = false;

public function get_table_name()
{
	return 'table_test_tests';
}

public function get_table_fields()
{
	return array('id','tablename','name','path','source');
}

public function get_table_select($delimiter = "'")
{
	return 'select id as ' . $delimiter . 'table_test_tests.id' . $delimiter . ',tablename as ' . $delimiter . 'table_test_tests.tablename' . $delimiter . ',name as ' . $delimiter . 'table_test_tests.name' . $delimiter . ',path as ' . $delimiter . 'table_test_tests.path' . $delimiter . ',source as ' . $delimiter . 'table_test_tests.source' . $delimiter . ' from table_test_tests';
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


public function get_path()
{
	return $this->p_path;
}

public function get_path_original()
{
	return $this->p_path_original;
}

public function set_path($value)
{
	if ($this->p_path === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_path_is_dirty = true;
	$this->p_path = $value;
}

public function set_path_original($value)
{
	$this->p_path_original = $value;
}

public function get_path_is_dirty()
{
	return $this->p_path_is_dirty;
}


public function get_source()
{
	return $this->p_source;
}

public function get_source_original()
{
	return $this->p_source_original;
}

public function set_source($value)
{
	if ($this->p_source === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_source_is_dirty = true;
	$this->p_source = $value;
}

public function set_source_original($value)
{
	$this->p_source_original = $value;
}

public function get_source_is_dirty()
{
	return $this->p_source_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_tablename_is_dirty = false;
	$this->p_name_is_dirty = false;
	$this->p_path_is_dirty = false;
	$this->p_source_is_dirty = false;
	if ($reset_values)
	{
		$this->p_tablename = $this->p_tablename_original;
		$this->p_name = $this->p_name_original;
		$this->p_path = $this->p_path_original;
		$this->p_source = $this->p_source_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => &$val)
		{
		switch ($key)
			{
				case "table_test_tests.id":
					$this->id = $val;
					$this->id_original = $val;
					break;
				case "table_test_tests.tablename":
					$this->tablename = $val;
					$this->tablename_original = $val;
					break;
				case "table_test_tests.name":
					$this->name = $val;
					$this->name_original = $val;
					break;
				case "table_test_tests.path":
					$this->path = $val;
					$this->path_original = $val;
					break;
				case "table_test_tests.source":
					$this->source = $val;
					$this->source_original = $val;
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
		$table_test_tests = cls_table_factory::create_instance('table_test_tests');
		$row = $db_manager->fetch_row($result);
		$table_test_tests->fill($row);
		return $table_test_tests;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_table_test_tests.php');
		return cls_save_table_test_tests::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_table_test_tests.php');
		return cls_save_table_test_tests::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}
}
?>
