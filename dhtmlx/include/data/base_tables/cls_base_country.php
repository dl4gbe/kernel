<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_country extends cls_datatable_base
{
private static $p_cmmon;
private $p_alpha2 = null;
private $p_alpha2_original = null;
private $p_alpha3 = null;
private $p_alpha3_original = null;
private $p_name = null;
private $p_name_original = null;
private $p_nationality = null;
private $p_nationality_original = null;
private $p_countrycode = null;
private $p_countrycode_original = null;
private $p_orderno = null;
private $p_orderno_original = null;
private $p_display = null;
private $p_display_original = null;
private $p_ibanlength = null;
private $p_ibanlength_original = null;
private $p_sepa = null;
private $p_sepa_original = null;
private $p_currency = null;
private $p_currency_original = null;
private $p_id_chart_of_account_default = null;
private $p_id_chart_of_account_default_original = null;
private $p_open_geo_db_id = null;
private $p_open_geo_db_id_original = null;

private $p_alpha2_is_dirty = false;
private $p_alpha3_is_dirty = false;
private $p_name_is_dirty = false;
private $p_nationality_is_dirty = false;
private $p_countrycode_is_dirty = false;
private $p_orderno_is_dirty = false;
private $p_display_is_dirty = false;
private $p_ibanlength_is_dirty = false;
private $p_sepa_is_dirty = false;
private $p_currency_is_dirty = false;
private $p_id_chart_of_account_default_is_dirty = false;
private $p_open_geo_db_id_is_dirty = false;

public function _get_table_name()
{
	return 'country';
}

public function get_table_fields()
{
	return array('id','alpha2','alpha3','name','nationality','countrycode','orderno','display','ibanlength','sepa','currency','id_chart_of_account_default','open_geo_db_id');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'country.id' . $delimiter . ',alpha2 as ' . $delimiter . 'country.alpha2' . $delimiter . ',alpha3 as ' . $delimiter . 'country.alpha3' . $delimiter . ',name as ' . $delimiter . 'country.name' . $delimiter . ',nationality as ' . $delimiter . 'country.nationality' . $delimiter . ',countrycode as ' . $delimiter . 'country.countrycode' . $delimiter . ',orderno as ' . $delimiter . 'country.orderno' . $delimiter . ',display as ' . $delimiter . 'country.display' . $delimiter . ',ibanlength as ' . $delimiter . 'country.ibanlength' . $delimiter . ',sepa as ' . $delimiter . 'country.sepa' . $delimiter . ',currency as ' . $delimiter . 'country.currency' . $delimiter . ',id_chart_of_account_default as ' . $delimiter . 'country.id_chart_of_account_default' . $delimiter . ',open_geo_db_id as ' . $delimiter . 'country.open_geo_db_id' . $delimiter . ' from country';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_alpha2()
{
	return $this->p_alpha2;
}

public function get_alpha2_original()
{
	return $this->p_alpha2_original;
}

public function set_alpha2($value)
{
	if ($this->p_alpha2 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_alpha2_is_dirty = true;
	$this->p_alpha2 = $value;
}

public function set_alpha2_original($value)
{
	$this->p_alpha2_original = $value;
}

public function get_alpha2_is_dirty()
{
	return $this->p_alpha2_is_dirty;
}


public function get_alpha3()
{
	return $this->p_alpha3;
}

public function get_alpha3_original()
{
	return $this->p_alpha3_original;
}

public function set_alpha3($value)
{
	if ($this->p_alpha3 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_alpha3_is_dirty = true;
	$this->p_alpha3 = $value;
}

public function set_alpha3_original($value)
{
	$this->p_alpha3_original = $value;
}

public function get_alpha3_is_dirty()
{
	return $this->p_alpha3_is_dirty;
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


public function get_nationality()
{
	return $this->p_nationality;
}

public function get_nationality_original()
{
	return $this->p_nationality_original;
}

public function set_nationality($value)
{
	if ($this->p_nationality === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_nationality_is_dirty = true;
	$this->p_nationality = $value;
}

public function set_nationality_original($value)
{
	$this->p_nationality_original = $value;
}

public function get_nationality_is_dirty()
{
	return $this->p_nationality_is_dirty;
}


public function get_countrycode()
{
	return $this->p_countrycode;
}

public function get_countrycode_original()
{
	return $this->p_countrycode_original;
}

public function set_countrycode($value)
{
	if ($this->p_countrycode === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_countrycode_is_dirty = true;
	$this->p_countrycode = $value;
}

public function set_countrycode_original($value)
{
	$this->p_countrycode_original = $value;
}

public function get_countrycode_is_dirty()
{
	return $this->p_countrycode_is_dirty;
}


public function get_orderno()
{
	return $this->p_orderno;
}

public function get_orderno_original()
{
	return $this->p_orderno_original;
}

public function set_orderno($value)
{
	if ($this->p_orderno === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_orderno_is_dirty = true;
	$this->p_orderno = $value;
}

public function set_orderno_original($value)
{
	$this->p_orderno_original = $value;
}

public function get_orderno_is_dirty()
{
	return $this->p_orderno_is_dirty;
}


public function get_display()
{
	return $this->p_display;
}

public function get_display_original()
{
	return $this->p_display_original;
}

public function set_display($value)
{
	if ($this->p_display === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_display_is_dirty = true;
	$this->p_display = $value;
}

public function set_display_original($value)
{
	$this->p_display_original = $value;
}

public function get_display_is_dirty()
{
	return $this->p_display_is_dirty;
}


public function get_ibanlength()
{
	return $this->p_ibanlength;
}

public function get_ibanlength_original()
{
	return $this->p_ibanlength_original;
}

public function set_ibanlength($value)
{
	if ($this->p_ibanlength === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_ibanlength_is_dirty = true;
	$this->p_ibanlength = $value;
}

public function set_ibanlength_original($value)
{
	$this->p_ibanlength_original = $value;
}

public function get_ibanlength_is_dirty()
{
	return $this->p_ibanlength_is_dirty;
}


public function get_sepa()
{
	return $this->p_sepa;
}

public function get_sepa_original()
{
	return $this->p_sepa_original;
}

public function set_sepa($value)
{
	if ($this->p_sepa === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_sepa_is_dirty = true;
	$this->p_sepa = $value;
}

public function set_sepa_original($value)
{
	$this->p_sepa_original = $value;
}

public function get_sepa_is_dirty()
{
	return $this->p_sepa_is_dirty;
}


public function get_currency()
{
	return $this->p_currency;
}

public function get_currency_original()
{
	return $this->p_currency_original;
}

public function set_currency($value)
{
	if ($this->p_currency === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_currency_is_dirty = true;
	$this->p_currency = $value;
}

public function set_currency_original($value)
{
	$this->p_currency_original = $value;
}

public function get_currency_is_dirty()
{
	return $this->p_currency_is_dirty;
}


public function get_id_chart_of_account_default()
{
	return $this->p_id_chart_of_account_default;
}

public function get_id_chart_of_account_default_original()
{
	return $this->p_id_chart_of_account_default_original;
}

public function set_id_chart_of_account_default($value)
{
	if ($this->p_id_chart_of_account_default === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_chart_of_account_default_is_dirty = true;
	$this->p_id_chart_of_account_default = $value;
}

public function set_id_chart_of_account_default_original($value)
{
	$this->p_id_chart_of_account_default_original = $value;
}

public function get_id_chart_of_account_default_is_dirty()
{
	return $this->p_id_chart_of_account_default_is_dirty;
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


public function reset_dirty($reset_values = false)
{
	$this->p_alpha2_is_dirty = false;
	$this->p_alpha3_is_dirty = false;
	$this->p_name_is_dirty = false;
	$this->p_nationality_is_dirty = false;
	$this->p_countrycode_is_dirty = false;
	$this->p_orderno_is_dirty = false;
	$this->p_display_is_dirty = false;
	$this->p_ibanlength_is_dirty = false;
	$this->p_sepa_is_dirty = false;
	$this->p_currency_is_dirty = false;
	$this->p_id_chart_of_account_default_is_dirty = false;
	$this->p_open_geo_db_id_is_dirty = false;
	if ($reset_values)
	{
		$this->p_alpha2 = $this->p_alpha2_original;
		$this->p_alpha3 = $this->p_alpha3_original;
		$this->p_name = $this->p_name_original;
		$this->p_nationality = $this->p_nationality_original;
		$this->p_countrycode = $this->p_countrycode_original;
		$this->p_orderno = $this->p_orderno_original;
		$this->p_display = $this->p_display_original;
		$this->p_ibanlength = $this->p_ibanlength_original;
		$this->p_sepa = $this->p_sepa_original;
		$this->p_currency = $this->p_currency_original;
		$this->p_id_chart_of_account_default = $this->p_id_chart_of_account_default_original;
		$this->p_open_geo_db_id = $this->p_open_geo_db_id_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "country.id":
					$this->set_id($val);
					break;
				case "country.alpha2":
					$this->set_alpha2($val);
					$this->set_alpha2_original($val);
					break;
				case "country.alpha3":
					$this->set_alpha3($val);
					$this->set_alpha3_original($val);
					break;
				case "country.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "country.nationality":
					$this->set_nationality($val);
					$this->set_nationality_original($val);
					break;
				case "country.countrycode":
					$this->set_countrycode($val);
					$this->set_countrycode_original($val);
					break;
				case "country.orderno":
					$this->set_orderno($val);
					$this->set_orderno_original($val);
					break;
				case "country.display":
					$this->set_display($val);
					$this->set_display_original($val);
					break;
				case "country.ibanlength":
					$this->set_ibanlength($val);
					$this->set_ibanlength_original($val);
					break;
				case "country.sepa":
					$this->set_sepa($val);
					$this->set_sepa_original($val);
					break;
				case "country.currency":
					$this->set_currency($val);
					$this->set_currency_original($val);
					break;
				case "country.id_chart_of_account_default":
					$this->set_id_chart_of_account_default($val);
					$this->set_id_chart_of_account_default_original($val);
					break;
				case "country.open_geo_db_id":
					$this->set_open_geo_db_id($val);
					$this->set_open_geo_db_id_original($val);
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
		$country = cls_table_factory::create_instance('country');
		$row = $db_manager->fetch_row($result);
		$country->fill($row);
		return $country;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_country.php');
		return cls_save_country::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_country.php');
		return cls_save_country::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_countrys($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('country',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('country',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$country = cls_table_factory::create_instance('country');
				$country->fill($row);
				$data[] = $country;
			}
		return $data;
	}

function get_chart_of_account_default($db_manager,$application)
	{
		$result = $db_manager->get_records('chart_of_account',$this->get_id_chart_of_account_default());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$chart_of_account = cls_table_factory::create_instance('chart_of_account');
		$row = $db_manager->fetch_row($result);
		$chart_of_account->fill($row);
		return $chart_of_account;
	}

//changed 1
public function get_address($db_manager,$application)
	{
		$result = $db_manager->get_records('address',$this->get_id(),'id_country');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$address = cls_table_factory::create_instance('address');
		$row = $db_manager->fetch_row($result);
		$address->fill($row);
		return $address;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_addresss_by_country($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('address',$this->get_id(),'id_country');
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

public function get_multi_addresss_by_country($countrys,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$countrys,'id_country');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$address = cls_table_factory::create_instance('address');
				$address->fill($row);
				if (!array_key_exists($data[$row['id_country']]))
				{
					$data[$row['id_country']] = array();
				}
				$data[$row['id_country']][] = $address;
			}
		return $data;
	}

//changed 1
public function get_person_by_nationality($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id(),'id_country_nationality');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_persons_by_country_nationality($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('person',$this->get_id(),'id_country_nationality');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person = cls_table_factory::create_instance('person');
				$person->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $person;
				}
				else
				{
					$data[] = $person;
				}
			}
		return $data;
	}

public function get_multi_persons_by_country_nationality($countrys,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('person',$countrys,'id_country_nationality');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person = cls_table_factory::create_instance('person');
				$person->fill($row);
				if (!array_key_exists($data[$row['id_country_nationality']]))
				{
					$data[$row['id_country_nationality']] = array();
				}
				$data[$row['id_country_nationality']][] = $person;
			}
		return $data;
	}

public function get_multi_address($countrys,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$countrys,'id_data');
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

public function get_communication_reason($countrys,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($countrys,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$countrys,'id_data');
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

public function get_data_change($countrys,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($countrys,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$countrys,'id_data');
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

public function get_data_help($countrys,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($countrys,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$countrys,'id_data');
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

public function get_data_location($countrys,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($countrys,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$countrys,'id_data');
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

public function get_data_posting($countrys,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($countrys,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$countrys,'id_data');
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

public function get_data_property($countrys,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($countrys,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$countrys,'id_data');
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

public function get_offer_event($countrys,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($countrys,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$countrys,'id_data');
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

public function get_supplier_data($countrys,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($countrys,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$countrys,'id_data');
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

public function get_table_test_data($countrys,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($countrys,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$countrys,'id_data');
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

public function get_data_translation($countrys,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($countrys,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$countrys,'id_data');
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

public function get_dms($countrys,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($countrys,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$countrys,'id_data');
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

public function get_data_relation_id_data1($countrys,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($countrys,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$countrys,'id_data1');
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

public function get_data_relation_id_data2($countrys,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($countrys,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$countrys,'id_data2');
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

public function get_data_property_id_link_data($countrys,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($countrys,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$countrys,'id_link_data');
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
