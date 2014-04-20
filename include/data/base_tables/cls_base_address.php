<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_address extends cls_datatable_base
{
private static $p_cmmon;
private $p_open_geo_db_id = null;
private $p_open_geo_db_id_original = null;
private $p_lon = null;
private $p_lon_original = null;
private $p_lat = null;
private $p_lat_original = null;
private $p_id_address_type = null;
private $p_id_address_type_original = null;
private $p_main = null;
private $p_main_original = null;
private $p_id_country = null;
private $p_id_country_original = null;
private $p_city = null;
private $p_city_original = null;
private $p_zip = null;
private $p_zip_original = null;
private $p_address2 = null;
private $p_address2_original = null;
private $p_address1 = null;
private $p_address1_original = null;
private $p_id_data = null;
private $p_id_data_original = null;

private $p_open_geo_db_id_is_dirty = false;
private $p_lon_is_dirty = false;
private $p_lat_is_dirty = false;
private $p_id_address_type_is_dirty = false;
private $p_main_is_dirty = false;
private $p_id_country_is_dirty = false;
private $p_city_is_dirty = false;
private $p_zip_is_dirty = false;
private $p_address2_is_dirty = false;
private $p_address1_is_dirty = false;
private $p_id_data_is_dirty = false;

public function _get_table_name()
{
	return 'address';
}

public function get_table_fields()
{
	return array('open_geo_db_id','lon','lat','id_address_type','main','id_country','city','zip','address2','address1','id_data','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select open_geo_db_id as ' . $delimiter . 'address.open_geo_db_id' . $delimiter . ',lon as ' . $delimiter . 'address.lon' . $delimiter . ',lat as ' . $delimiter . 'address.lat' . $delimiter . ',id_address_type as ' . $delimiter . 'address.id_address_type' . $delimiter . ',main as ' . $delimiter . 'address.main' . $delimiter . ',id_country as ' . $delimiter . 'address.id_country' . $delimiter . ',city as ' . $delimiter . 'address.city' . $delimiter . ',zip as ' . $delimiter . 'address.zip' . $delimiter . ',address2 as ' . $delimiter . 'address.address2' . $delimiter . ',address1 as ' . $delimiter . 'address.address1' . $delimiter . ',id_data as ' . $delimiter . 'address.id_data' . $delimiter . ',id as ' . $delimiter . 'address.id' . $delimiter . ' from address';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}

public function get_open_geo_db_id()
{
	return $this->p_open_geo_db_id;
}

public function get_open_geo_db_id_original()
{
	return $this->p_open_geo_db_id_original;
}

public function set_open_geo_db_id($value)
{
	if ($this->p_open_geo_db_id === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_open_geo_db_id_is_dirty = true;
	$this->p_open_geo_db_id = $value;
}

public function set_open_geo_db_id_original($value)
{
	$this->p_open_geo_db_id_original = $value;
}

public function get_open_geo_db_id_is_dirty()
{
	return $this->p_open_geo_db_id_is_dirty;
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


public function get_id_address_type()
{
	return $this->p_id_address_type;
}

public function get_id_address_type_original()
{
	return $this->p_id_address_type_original;
}

public function set_id_address_type($value)
{
	if ($this->p_id_address_type === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_address_type_is_dirty = true;
	$this->p_id_address_type = $value;
}

public function set_id_address_type_original($value)
{
	$this->p_id_address_type_original = $value;
}

public function get_id_address_type_is_dirty()
{
	return $this->p_id_address_type_is_dirty;
}


public function get_main()
{
	return $this->p_main;
}

public function get_main_original()
{
	return $this->p_main_original;
}

public function set_main($value)
{
	if ($this->p_main === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_main_is_dirty = true;
	$this->p_main = $value;
}

public function set_main_original($value)
{
	$this->p_main_original = $value;
}

public function get_main_is_dirty()
{
	return $this->p_main_is_dirty;
}


public function get_id_country()
{
	return $this->p_id_country;
}

public function get_id_country_original()
{
	return $this->p_id_country_original;
}

public function set_id_country($value)
{
	if ($this->p_id_country === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_country_is_dirty = true;
	$this->p_id_country = $value;
}

public function set_id_country_original($value)
{
	$this->p_id_country_original = $value;
}

public function get_id_country_is_dirty()
{
	return $this->p_id_country_is_dirty;
}


public function get_city()
{
	return $this->p_city;
}

public function get_city_original()
{
	return $this->p_city_original;
}

public function set_city($value)
{
	if ($this->p_city === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_city_is_dirty = true;
	$this->p_city = $value;
}

public function set_city_original($value)
{
	$this->p_city_original = $value;
}

public function get_city_is_dirty()
{
	return $this->p_city_is_dirty;
}


public function get_zip()
{
	return $this->p_zip;
}

public function get_zip_original()
{
	return $this->p_zip_original;
}

public function set_zip($value)
{
	if ($this->p_zip === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_zip_is_dirty = true;
	$this->p_zip = $value;
}

public function set_zip_original($value)
{
	$this->p_zip_original = $value;
}

public function get_zip_is_dirty()
{
	return $this->p_zip_is_dirty;
}


public function get_address2()
{
	return $this->p_address2;
}

public function get_address2_original()
{
	return $this->p_address2_original;
}

public function set_address2($value)
{
	if ($this->p_address2 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_address2_is_dirty = true;
	$this->p_address2 = $value;
}

public function set_address2_original($value)
{
	$this->p_address2_original = $value;
}

public function get_address2_is_dirty()
{
	return $this->p_address2_is_dirty;
}


public function get_address1()
{
	return $this->p_address1;
}

public function get_address1_original()
{
	return $this->p_address1_original;
}

public function set_address1($value)
{
	if ($this->p_address1 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_address1_is_dirty = true;
	$this->p_address1 = $value;
}

public function set_address1_original($value)
{
	$this->p_address1_original = $value;
}

public function get_address1_is_dirty()
{
	return $this->p_address1_is_dirty;
}


public function get_id_data()
{
	return $this->p_id_data;
}

public function get_id_data_original()
{
	return $this->p_id_data_original;
}

public function set_id_data($value)
{
	if ($this->p_id_data === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_data_is_dirty = true;
	$this->p_id_data = $value;
}

public function set_id_data_original($value)
{
	$this->p_id_data_original = $value;
}

public function get_id_data_is_dirty()
{
	return $this->p_id_data_is_dirty;
}



public function reset_dirty($reset_values = false)
{
	$this->p_open_geo_db_id_is_dirty = false;
	$this->p_lon_is_dirty = false;
	$this->p_lat_is_dirty = false;
	$this->p_id_address_type_is_dirty = false;
	$this->p_main_is_dirty = false;
	$this->p_id_country_is_dirty = false;
	$this->p_city_is_dirty = false;
	$this->p_zip_is_dirty = false;
	$this->p_address2_is_dirty = false;
	$this->p_address1_is_dirty = false;
	$this->p_id_data_is_dirty = false;
	if ($reset_values)
	{
		$this->p_open_geo_db_id = $this->p_open_geo_db_id_original;
		$this->p_lon = $this->p_lon_original;
		$this->p_lat = $this->p_lat_original;
		$this->p_id_address_type = $this->p_id_address_type_original;
		$this->p_main = $this->p_main_original;
		$this->p_id_country = $this->p_id_country_original;
		$this->p_city = $this->p_city_original;
		$this->p_zip = $this->p_zip_original;
		$this->p_address2 = $this->p_address2_original;
		$this->p_address1 = $this->p_address1_original;
		$this->p_id_data = $this->p_id_data_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "address.open_geo_db_id":
					$this->set_open_geo_db_id($val);
					$this->set_open_geo_db_id_original($val);
					break;
				case "address.lon":
					$this->set_lon($val);
					$this->set_lon_original($val);
					break;
				case "address.lat":
					$this->set_lat($val);
					$this->set_lat_original($val);
					break;
				case "address.id_address_type":
					$this->set_id_address_type($val);
					$this->set_id_address_type_original($val);
					break;
				case "address.main":
					$this->set_main($val);
					$this->set_main_original($val);
					break;
				case "address.id_country":
					$this->set_id_country($val);
					$this->set_id_country_original($val);
					break;
				case "address.city":
					$this->set_city($val);
					$this->set_city_original($val);
					break;
				case "address.zip":
					$this->set_zip($val);
					$this->set_zip_original($val);
					break;
				case "address.address2":
					$this->set_address2($val);
					$this->set_address2_original($val);
					break;
				case "address.address1":
					$this->set_address1($val);
					$this->set_address1_original($val);
					break;
				case "address.id_data":
					$this->set_id_data($val);
					$this->set_id_data_original($val);
					break;
				case "address.id":
					$this->set_id($val);
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
		$address = cls_table_factory::create_instance('address');
		$row = $db_manager->fetch_row($result);
		$address->fill($row);
		return $address;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_address.php');
		return cls_save_address::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_address.php');
		return cls_save_address::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_addresss($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('address',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('address',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$address = cls_table_factory::create_instance('address');
				$address->fill($row);
				$data[] = $address;
			}
		return $data;
	}

function get_address_type($db_manager,$application)
	{
		$result = $db_manager->get_records('address_type',$this->get_id_address_type());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$address_type = cls_table_factory::create_instance('address_type');
		$row = $db_manager->fetch_row($result);
		$address_type->fill($row);
		return $address_type;
	}

function get_country($db_manager,$application)
	{
		$result = $db_manager->get_records('country',$this->get_id_country());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$country = cls_table_factory::create_instance('country');
		$row = $db_manager->fetch_row($result);
		$country->fill($row);
		return $country;
	}

public function get_table_test_data($addresss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($addresss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$addresss,'id_data');
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

public function get_communication_reason($addresss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($addresss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$addresss,'id_data');
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

public function get_data_change($addresss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($addresss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$addresss,'id_data');
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

public function get_data_help($addresss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($addresss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$addresss,'id_data');
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

public function get_data_location($addresss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($addresss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$addresss,'id_data');
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

public function get_data_posting($addresss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($addresss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$addresss,'id_data');
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

public function get_offer_event($addresss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($addresss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$addresss,'id_data');
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

public function get_supplier_data($addresss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($addresss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$addresss,'id_data');
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

public function get_address($addresss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($addresss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$addresss,'id_data');
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

public function get_data_property($addresss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($addresss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$addresss,'id_data');
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

public function get_data_translation($addresss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($addresss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$addresss,'id_data');
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

public function get_dms($addresss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($addresss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$addresss,'id_data');
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

public function get_data_relation_id_data1($addresss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($addresss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$addresss,'id_data1');
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

public function get_data_relation_id_data2($addresss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($addresss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$addresss,'id_data2');
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

public function get_data_property_id_link_data($addresss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($addresss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$addresss,'id_link_data');
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
