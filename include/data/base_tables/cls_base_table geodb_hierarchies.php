<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
abstract class cls_base_table geodb_hierarchies extends cls_datatable_base
{
private static $p_cmmon;
private $p_loc_id = null;
private $p_loc_id_original = null;
private $p_level = null;
private $p_level_original = null;
private $p_id_lvl1 = null;
private $p_id_lvl1_original = null;
private $p_id_lvl2 = null;
private $p_id_lvl2_original = null;
private $p_id_lvl3 = null;
private $p_id_lvl3_original = null;
private $p_id_lvl4 = null;
private $p_id_lvl4_original = null;
private $p_id_lvl5 = null;
private $p_id_lvl5_original = null;
private $p_id_lvl6 = null;
private $p_id_lvl6_original = null;
private $p_id_lvl7 = null;
private $p_id_lvl7_original = null;
private $p_id_lvl8 = null;
private $p_id_lvl8_original = null;
private $p_id_lvl9 = null;
private $p_id_lvl9_original = null;
private $p_valid_since = null;
private $p_valid_since_original = null;
private $p_date_type_since = null;
private $p_date_type_since_original = null;
private $p_valid_until = null;
private $p_valid_until_original = null;
private $p_date_type_until = null;
private $p_date_type_until_original = null;

private $p_loc_id_is_dirty = false;
private $p_level_is_dirty = false;
private $p_id_lvl1_is_dirty = false;
private $p_id_lvl2_is_dirty = false;
private $p_id_lvl3_is_dirty = false;
private $p_id_lvl4_is_dirty = false;
private $p_id_lvl5_is_dirty = false;
private $p_id_lvl6_is_dirty = false;
private $p_id_lvl7_is_dirty = false;
private $p_id_lvl8_is_dirty = false;
private $p_id_lvl9_is_dirty = false;
private $p_valid_since_is_dirty = false;
private $p_date_type_since_is_dirty = false;
private $p_valid_until_is_dirty = false;
private $p_date_type_until_is_dirty = false;

public function get_table_name()
{
	return 'table geodb_hierarchies';
}

function get_table_fields()
{
	return array('loc_id','level','id_lvl1','id_lvl2','id_lvl3','id_lvl4','id_lvl5','id_lvl6','id_lvl7','id_lvl8','id_lvl9','valid_since','date_type_since','valid_until','date_type_until');
}

public function get_table_select($delimiter = "'")
{
	return 'select loc_id as ' . $delimiter . 'table geodb_hierarchies.loc_id' . $delimiter . ',level as ' . $delimiter . 'table geodb_hierarchies.level' . $delimiter . ',id_lvl1 as ' . $delimiter . 'table geodb_hierarchies.id_lvl1' . $delimiter . ',id_lvl2 as ' . $delimiter . 'table geodb_hierarchies.id_lvl2' . $delimiter . ',id_lvl3 as ' . $delimiter . 'table geodb_hierarchies.id_lvl3' . $delimiter . ',id_lvl4 as ' . $delimiter . 'table geodb_hierarchies.id_lvl4' . $delimiter . ',id_lvl5 as ' . $delimiter . 'table geodb_hierarchies.id_lvl5' . $delimiter . ',id_lvl6 as ' . $delimiter . 'table geodb_hierarchies.id_lvl6' . $delimiter . ',id_lvl7 as ' . $delimiter . 'table geodb_hierarchies.id_lvl7' . $delimiter . ',id_lvl8 as ' . $delimiter . 'table geodb_hierarchies.id_lvl8' . $delimiter . ',id_lvl9 as ' . $delimiter . 'table geodb_hierarchies.id_lvl9' . $delimiter . ',valid_since as ' . $delimiter . 'table geodb_hierarchies.valid_since' . $delimiter . ',date_type_since as ' . $delimiter . 'table geodb_hierarchies.date_type_since' . $delimiter . ',valid_until as ' . $delimiter . 'table geodb_hierarchies.valid_until' . $delimiter . ',date_type_until as ' . $delimiter . 'table geodb_hierarchies.date_type_until' . $delimiter . ' from table geodb_hierarchies';
}

public function get_loc_id()
{
	return $this->p_loc_id;
}

public function set_loc_id($value)
{
	if ($this->p_loc_id === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_loc_id_is_dirty = true;
	$this->p_loc_id = $value;
}

public function get_level()
{
	return $this->p_level;
}

public function set_level($value)
{
	if ($this->p_level === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_level_is_dirty = true;
	$this->p_level = $value;
}

public function get_id_lvl1()
{
	return $this->p_id_lvl1;
}

public function set_id_lvl1($value)
{
	if ($this->p_id_lvl1 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_lvl1_is_dirty = true;
	$this->p_id_lvl1 = $value;
}

public function get_id_lvl2()
{
	return $this->p_id_lvl2;
}

public function set_id_lvl2($value)
{
	if ($this->p_id_lvl2 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_lvl2_is_dirty = true;
	$this->p_id_lvl2 = $value;
}

public function get_id_lvl3()
{
	return $this->p_id_lvl3;
}

public function set_id_lvl3($value)
{
	if ($this->p_id_lvl3 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_lvl3_is_dirty = true;
	$this->p_id_lvl3 = $value;
}

public function get_id_lvl4()
{
	return $this->p_id_lvl4;
}

public function set_id_lvl4($value)
{
	if ($this->p_id_lvl4 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_lvl4_is_dirty = true;
	$this->p_id_lvl4 = $value;
}

public function get_id_lvl5()
{
	return $this->p_id_lvl5;
}

public function set_id_lvl5($value)
{
	if ($this->p_id_lvl5 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_lvl5_is_dirty = true;
	$this->p_id_lvl5 = $value;
}

public function get_id_lvl6()
{
	return $this->p_id_lvl6;
}

public function set_id_lvl6($value)
{
	if ($this->p_id_lvl6 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_lvl6_is_dirty = true;
	$this->p_id_lvl6 = $value;
}

public function get_id_lvl7()
{
	return $this->p_id_lvl7;
}

public function set_id_lvl7($value)
{
	if ($this->p_id_lvl7 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_lvl7_is_dirty = true;
	$this->p_id_lvl7 = $value;
}

public function get_id_lvl8()
{
	return $this->p_id_lvl8;
}

public function set_id_lvl8($value)
{
	if ($this->p_id_lvl8 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_lvl8_is_dirty = true;
	$this->p_id_lvl8 = $value;
}

public function get_id_lvl9()
{
	return $this->p_id_lvl9;
}

public function set_id_lvl9($value)
{
	if ($this->p_id_lvl9 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_lvl9_is_dirty = true;
	$this->p_id_lvl9 = $value;
}

public function get_valid_since()
{
	return $this->p_valid_since;
}

public function set_valid_since($value)
{
	if ($this->p_valid_since === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_valid_since_is_dirty = true;
	$this->p_valid_since = $value;
}

public function get_date_type_since()
{
	return $this->p_date_type_since;
}

public function set_date_type_since($value)
{
	if ($this->p_date_type_since === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_date_type_since_is_dirty = true;
	$this->p_date_type_since = $value;
}

public function get_valid_until()
{
	return $this->p_valid_until;
}

public function set_valid_until($value)
{
	if ($this->p_valid_until === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_valid_until_is_dirty = true;
	$this->p_valid_until = $value;
}

public function get_date_type_until()
{
	return $this->p_date_type_until;
}

public function set_date_type_until($value)
{
	if ($this->p_date_type_until === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_date_type_until_is_dirty = true;
	$this->p_date_type_until = $value;
}

public function reset_dirty($reset_values = false)
{
	$this->p_loc_id_is_dirty = false;
	$this->p_level_is_dirty = false;
	$this->p_id_lvl1_is_dirty = false;
	$this->p_id_lvl2_is_dirty = false;
	$this->p_id_lvl3_is_dirty = false;
	$this->p_id_lvl4_is_dirty = false;
	$this->p_id_lvl5_is_dirty = false;
	$this->p_id_lvl6_is_dirty = false;
	$this->p_id_lvl7_is_dirty = false;
	$this->p_id_lvl8_is_dirty = false;
	$this->p_id_lvl9_is_dirty = false;
	$this->p_valid_since_is_dirty = false;
	$this->p_date_type_since_is_dirty = false;
	$this->p_valid_until_is_dirty = false;
	$this->p_date_type_until_is_dirty = false;
	if ($reset_values)
	{
		$this->p_loc_id = $this->p_loc_id_original;
		$this->p_level = $this->p_level_original;
		$this->p_id_lvl1 = $this->p_id_lvl1_original;
		$this->p_id_lvl2 = $this->p_id_lvl2_original;
		$this->p_id_lvl3 = $this->p_id_lvl3_original;
		$this->p_id_lvl4 = $this->p_id_lvl4_original;
		$this->p_id_lvl5 = $this->p_id_lvl5_original;
		$this->p_id_lvl6 = $this->p_id_lvl6_original;
		$this->p_id_lvl7 = $this->p_id_lvl7_original;
		$this->p_id_lvl8 = $this->p_id_lvl8_original;
		$this->p_id_lvl9 = $this->p_id_lvl9_original;
		$this->p_valid_since = $this->p_valid_since_original;
		$this->p_date_type_since = $this->p_date_type_since_original;
		$this->p_valid_until = $this->p_valid_until_original;
		$this->p_date_type_until = $this->p_date_type_until_original;
	}
}
public function fill($row)
{
	foreach ($row as $key => &$val)
		{
			echo $key . " " . $val . "</br>";
		}
}
function get_by_id($id,$db_manager)
{
	$sql = $this->get_table_select($db_manager->get_delimeter());
	$sql .= " where id = '" . $id . "'";
	$result = $db_manager->query($sql);
	if (!is_null($result))
	{
		require_once('/include/data/table_factory/cls_table_factory.php');
		$table geodb_hierarchies = cls_table_factory::create_instance('table geodb_hierarchies');
		$row = $db_manager->fetch_row($result);
		$table geodb_hierarchies->fill($row);
		return $table geodb_hierarchies;
	}
}
}
?>
