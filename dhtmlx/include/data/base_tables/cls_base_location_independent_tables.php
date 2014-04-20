<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_location_independent_tables extends cls_datatable_base
{
private static $p_cmmon;
private $p_tablename = null;
private $p_tablename_original = null;

private $p_tablename_is_dirty = false;

public function get_table_name()
{
	return 'location_independent_tables';
}

public function get_table_fields()
{
	return array('id','tablename');
}

public function get_table_select($delimiter = "'")
{
	return 'select id as ' . $delimiter . 'location_independent_tables.id' . $delimiter . ',tablename as ' . $delimiter . 'location_independent_tables.tablename' . $delimiter . ' from location_independent_tables';
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


public function reset_dirty($reset_values = false)
{
	$this->p_tablename_is_dirty = false;
	if ($reset_values)
	{
		$this->p_tablename = $this->p_tablename_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => &$val)
		{
		switch ($key)
			{
				case "location_independent_tables.id":
					$this->id = $val;
					$this->id_original = $val;
					break;
				case "location_independent_tables.tablename":
					$this->tablename = $val;
					$this->tablename_original = $val;
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
		$location_independent_tables = cls_table_factory::create_instance('location_independent_tables');
		$row = $db_manager->fetch_row($result);
		$location_independent_tables->fill($row);
		return $location_independent_tables;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_location_independent_tables.php');
		return cls_save_location_independent_tables::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_location_independent_tables.php');
		return cls_save_location_independent_tables::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}
}
?>
