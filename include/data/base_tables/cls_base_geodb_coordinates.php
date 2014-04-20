<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_geodb_coordinates extends cls_datatable_base
{
private static $p_cmmon;
private $p_date_type_until = null;
private $p_date_type_until_original = null;
private $p_valid_until = null;
private $p_valid_until_original = null;
private $p_date_type_since = null;
private $p_date_type_since_original = null;
private $p_valid_since = null;
private $p_valid_since_original = null;
private $p_coord_subtype = null;
private $p_coord_subtype_original = null;
private $p_lon = null;
private $p_lon_original = null;
private $p_lat = null;
private $p_lat_original = null;
private $p_coord_type = null;
private $p_coord_type_original = null;
private $p_loc_id = null;
private $p_loc_id_original = null;

private $p_date_type_until_is_dirty = false;
private $p_valid_until_is_dirty = false;
private $p_date_type_since_is_dirty = false;
private $p_valid_since_is_dirty = false;
private $p_coord_subtype_is_dirty = false;
private $p_lon_is_dirty = false;
private $p_lat_is_dirty = false;
private $p_coord_type_is_dirty = false;
private $p_loc_id_is_dirty = false;

public function _get_table_name()
{
	return 'geodb_coordinates';
}

public function get_table_fields()
{
	return array('date_type_until','valid_until','date_type_since','valid_since','coord_subtype','lon','lat','coord_type','loc_id');
}

public function get_table_select($delimiter = '"')
{
	return 'select date_type_until as ' . $delimiter . 'geodb_coordinates.date_type_until' . $delimiter . ',valid_until as ' . $delimiter . 'geodb_coordinates.valid_until' . $delimiter . ',date_type_since as ' . $delimiter . 'geodb_coordinates.date_type_since' . $delimiter . ',valid_since as ' . $delimiter . 'geodb_coordinates.valid_since' . $delimiter . ',coord_subtype as ' . $delimiter . 'geodb_coordinates.coord_subtype' . $delimiter . ',lon as ' . $delimiter . 'geodb_coordinates.lon' . $delimiter . ',lat as ' . $delimiter . 'geodb_coordinates.lat' . $delimiter . ',coord_type as ' . $delimiter . 'geodb_coordinates.coord_type' . $delimiter . ',loc_id as ' . $delimiter . 'geodb_coordinates.loc_id' . $delimiter . ' from geodb_coordinates';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}

public function get_date_type_until()
{
	return $this->p_date_type_until;
}

public function get_date_type_until_original()
{
	return $this->p_date_type_until_original;
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

public function set_date_type_until_original($value)
{
	$this->p_date_type_until_original = $value;
}

public function get_date_type_until_is_dirty()
{
	return $this->p_date_type_until_is_dirty;
}


public function get_valid_until()
{
	return $this->p_valid_until;
}

public function get_valid_until_original()
{
	return $this->p_valid_until_original;
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

public function set_valid_until_original($value)
{
	$this->p_valid_until_original = $value;
}

public function get_valid_until_is_dirty()
{
	return $this->p_valid_until_is_dirty;
}


public function get_date_type_since()
{
	return $this->p_date_type_since;
}

public function get_date_type_since_original()
{
	return $this->p_date_type_since_original;
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

public function set_date_type_since_original($value)
{
	$this->p_date_type_since_original = $value;
}

public function get_date_type_since_is_dirty()
{
	return $this->p_date_type_since_is_dirty;
}


public function get_valid_since()
{
	return $this->p_valid_since;
}

public function get_valid_since_original()
{
	return $this->p_valid_since_original;
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

public function set_valid_since_original($value)
{
	$this->p_valid_since_original = $value;
}

public function get_valid_since_is_dirty()
{
	return $this->p_valid_since_is_dirty;
}


public function get_coord_subtype()
{
	return $this->p_coord_subtype;
}

public function get_coord_subtype_original()
{
	return $this->p_coord_subtype_original;
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

public function set_coord_subtype_original($value)
{
	$this->p_coord_subtype_original = $value;
}

public function get_coord_subtype_is_dirty()
{
	return $this->p_coord_subtype_is_dirty;
}


public function get_lon()
{
	return $this->p_lon;
}

public function get_lon_original()
{
	return $this->p_lon_original;
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

public function set_lon_original($value)
{
	$this->p_lon_original = $value;
}

public function get_lon_is_dirty()
{
	return $this->p_lon_is_dirty;
}


public function get_lat()
{
	return $this->p_lat;
}

public function get_lat_original()
{
	return $this->p_lat_original;
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

public function set_lat_original($value)
{
	$this->p_lat_original = $value;
}

public function get_lat_is_dirty()
{
	return $this->p_lat_is_dirty;
}


public function get_coord_type()
{
	return $this->p_coord_type;
}

public function get_coord_type_original()
{
	return $this->p_coord_type_original;
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

public function set_coord_type_original($value)
{
	$this->p_coord_type_original = $value;
}

public function get_coord_type_is_dirty()
{
	return $this->p_coord_type_is_dirty;
}


public function get_loc_id()
{
	return $this->p_loc_id;
}

public function get_loc_id_original()
{
	return $this->p_loc_id_original;
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

public function set_loc_id_original($value)
{
	$this->p_loc_id_original = $value;
}

public function get_loc_id_is_dirty()
{
	return $this->p_loc_id_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_date_type_until_is_dirty = false;
	$this->p_valid_until_is_dirty = false;
	$this->p_date_type_since_is_dirty = false;
	$this->p_valid_since_is_dirty = false;
	$this->p_coord_subtype_is_dirty = false;
	$this->p_lon_is_dirty = false;
	$this->p_lat_is_dirty = false;
	$this->p_coord_type_is_dirty = false;
	$this->p_loc_id_is_dirty = false;
	if ($reset_values)
	{
		$this->p_date_type_until = $this->p_date_type_until_original;
		$this->p_valid_until = $this->p_valid_until_original;
		$this->p_date_type_since = $this->p_date_type_since_original;
		$this->p_valid_since = $this->p_valid_since_original;
		$this->p_coord_subtype = $this->p_coord_subtype_original;
		$this->p_lon = $this->p_lon_original;
		$this->p_lat = $this->p_lat_original;
		$this->p_coord_type = $this->p_coord_type_original;
		$this->p_loc_id = $this->p_loc_id_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "geodb_coordinates.date_type_until":
					$this->set_date_type_until($val);
					$this->set_date_type_until_original($val);
					break;
				case "geodb_coordinates.valid_until":
					$this->set_valid_until($val);
					$this->set_valid_until_original($val);
					break;
				case "geodb_coordinates.date_type_since":
					$this->set_date_type_since($val);
					$this->set_date_type_since_original($val);
					break;
				case "geodb_coordinates.valid_since":
					$this->set_valid_since($val);
					$this->set_valid_since_original($val);
					break;
				case "geodb_coordinates.coord_subtype":
					$this->set_coord_subtype($val);
					$this->set_coord_subtype_original($val);
					break;
				case "geodb_coordinates.lon":
					$this->set_lon($val);
					$this->set_lon_original($val);
					break;
				case "geodb_coordinates.lat":
					$this->set_lat($val);
					$this->set_lat_original($val);
					break;
				case "geodb_coordinates.coord_type":
					$this->set_coord_type($val);
					$this->set_coord_type_original($val);
					break;
				case "geodb_coordinates.loc_id":
					$this->set_loc_id($val);
					$this->set_loc_id_original($val);
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
		$geodb_coordinates = cls_table_factory::create_instance('geodb_coordinates');
		$row = $db_manager->fetch_row($result);
		$geodb_coordinates->fill($row);
		return $geodb_coordinates;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_geodb_coordinates.php');
		return cls_save_geodb_coordinates::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_geodb_coordinates.php');
		return cls_save_geodb_coordinates::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_geodb_coordinatess($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('geodb_coordinates',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('geodb_coordinates',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$geodb_coordinates = cls_table_factory::create_instance('geodb_coordinates');
				$geodb_coordinates->fill($row);
				$data[] = $geodb_coordinates;
			}
		return $data;
	}

public function get_table_test_data($geodb_coordinatess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($geodb_coordinatess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$geodb_coordinatess,'id_data');
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

public function get_communication_reason($geodb_coordinatess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($geodb_coordinatess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$geodb_coordinatess,'id_data');
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

public function get_data_change($geodb_coordinatess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($geodb_coordinatess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$geodb_coordinatess,'id_data');
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

public function get_data_help($geodb_coordinatess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($geodb_coordinatess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$geodb_coordinatess,'id_data');
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

public function get_data_location($geodb_coordinatess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($geodb_coordinatess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$geodb_coordinatess,'id_data');
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

public function get_data_posting($geodb_coordinatess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($geodb_coordinatess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$geodb_coordinatess,'id_data');
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

public function get_offer_event($geodb_coordinatess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($geodb_coordinatess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$geodb_coordinatess,'id_data');
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

public function get_supplier_data($geodb_coordinatess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($geodb_coordinatess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$geodb_coordinatess,'id_data');
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

public function get_address($geodb_coordinatess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($geodb_coordinatess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$geodb_coordinatess,'id_data');
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

public function get_data_property($geodb_coordinatess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($geodb_coordinatess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$geodb_coordinatess,'id_data');
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

public function get_data_translation($geodb_coordinatess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($geodb_coordinatess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$geodb_coordinatess,'id_data');
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

public function get_dms($geodb_coordinatess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($geodb_coordinatess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$geodb_coordinatess,'id_data');
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

public function get_data_relation_id_data1($geodb_coordinatess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($geodb_coordinatess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$geodb_coordinatess,'id_data1');
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

public function get_data_relation_id_data2($geodb_coordinatess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($geodb_coordinatess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$geodb_coordinatess,'id_data2');
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

public function get_data_property_id_link_data($geodb_coordinatess,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($geodb_coordinatess,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$geodb_coordinatess,'id_link_data');
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
