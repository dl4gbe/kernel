<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
abstract class cls_base_table geodb_coordinates extends cls_datatable_base
{
private static $p_cmmon;
private $p_loc_id = null;
private $p_loc_id_original = null;
private $p_coord_type = null;
private $p_coord_type_original = null;
private $p_lat = null;
private $p_lat_original = null;
private $p_lon = null;
private $p_lon_original = null;
private $p_coord_subtype = null;
private $p_coord_subtype_original = null;
private $p_valid_since = null;
private $p_valid_since_original = null;
private $p_date_type_since = null;
private $p_date_type_since_original = null;
private $p_valid_until = null;
private $p_valid_until_original = null;
private $p_date_type_until = null;
private $p_date_type_until_original = null;

private $p_loc_id_is_dirty = false;
private $p_coord_type_is_dirty = false;
private $p_lat_is_dirty = false;
private $p_lon_is_dirty = false;
private $p_coord_subtype_is_dirty = false;
private $p_valid_since_is_dirty = false;
private $p_date_type_since_is_dirty = false;
private $p_valid_until_is_dirty = false;
private $p_date_type_until_is_dirty = false;

public function get_table_name()
{
	return 'table geodb_coordinates';
}

function get_table_fields()
{
	return array('loc_id','coord_type','lat','lon','coord_subtype','valid_since','date_type_since','valid_until','date_type_until');
}

public function get_table_select($delimiter = "'")
{
	return 'select loc_id as ' . $delimiter . 'table geodb_coordinates.loc_id' . $delimiter . ',coord_type as ' . $delimiter . 'table geodb_coordinates.coord_type' . $delimiter . ',lat as ' . $delimiter . 'table geodb_coordinates.lat' . $delimiter . ',lon as ' . $delimiter . 'table geodb_coordinates.lon' . $delimiter . ',coord_subtype as ' . $delimiter . 'table geodb_coordinates.coord_subtype' . $delimiter . ',valid_since as ' . $delimiter . 'table geodb_coordinates.valid_since' . $delimiter . ',date_type_since as ' . $delimiter . 'table geodb_coordinates.date_type_since' . $delimiter . ',valid_until as ' . $delimiter . 'table geodb_coordinates.valid_until' . $delimiter . ',date_type_until as ' . $delimiter . 'table geodb_coordinates.date_type_until' . $delimiter . ' from table geodb_coordinates';
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

public function get_coord_type()
{
	return $this->p_coord_type;
}

public function set_coord_type($value)
{
	if ($this->p_coord_type === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_coord_type_is_dirty = true;
	$this->p_coord_type = $value;
}

public function get_lat()
{
	return $this->p_lat;
}

public function set_lat($value)
{
	if ($this->p_lat === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_lat_is_dirty = true;
	$this->p_lat = $value;
}

public function get_lon()
{
	return $this->p_lon;
}

public function set_lon($value)
{
	if ($this->p_lon === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_lon_is_dirty = true;
	$this->p_lon = $value;
}

public function get_coord_subtype()
{
	return $this->p_coord_subtype;
}

public function set_coord_subtype($value)
{
	if ($this->p_coord_subtype === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_coord_subtype_is_dirty = true;
	$this->p_coord_subtype = $value;
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
	$this->p_coord_type_is_dirty = false;
	$this->p_lat_is_dirty = false;
	$this->p_lon_is_dirty = false;
	$this->p_coord_subtype_is_dirty = false;
	$this->p_valid_since_is_dirty = false;
	$this->p_date_type_since_is_dirty = false;
	$this->p_valid_until_is_dirty = false;
	$this->p_date_type_until_is_dirty = false;
	if ($reset_values)
	{
		$this->p_loc_id = $this->p_loc_id_original;
		$this->p_coord_type = $this->p_coord_type_original;
		$this->p_lat = $this->p_lat_original;
		$this->p_lon = $this->p_lon_original;
		$this->p_coord_subtype = $this->p_coord_subtype_original;
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
		$table geodb_coordinates = cls_table_factory::create_instance('table geodb_coordinates');
		$row = $db_manager->fetch_row($result);
		$table geodb_coordinates->fill($row);
		return $table geodb_coordinates;
	}
}
}
?>
