<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_location extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_person = null;
private $p_id_person_original = null;
private $p_no = null;
private $p_no_original = null;
private $p_unique_credit_identifier = null;
private $p_unique_credit_identifier_original = null;
private $p_ik = null;
private $p_ik_original = null;
private $p_iscenter = null;
private $p_iscenter_original = null;
private $p_id_chart_of_account = null;
private $p_id_chart_of_account_original = null;
private $p_id_insurance_district = null;
private $p_id_insurance_district_original = null;
private $p_taxid = null;
private $p_taxid_original = null;
private $p_id_person_revenue_department = null;
private $p_id_person_revenue_department_original = null;
private $p_id_person_taxadvisor = null;
private $p_id_person_taxadvisor_original = null;
private $p_id_person_laywer = null;
private $p_id_person_laywer_original = null;
private $p_sollversteuerung = null;
private $p_sollversteuerung_original = null;

private $p_id_person_is_dirty = false;
private $p_no_is_dirty = false;
private $p_unique_credit_identifier_is_dirty = false;
private $p_ik_is_dirty = false;
private $p_iscenter_is_dirty = false;
private $p_id_chart_of_account_is_dirty = false;
private $p_id_insurance_district_is_dirty = false;
private $p_taxid_is_dirty = false;
private $p_id_person_revenue_department_is_dirty = false;
private $p_id_person_taxadvisor_is_dirty = false;
private $p_id_person_laywer_is_dirty = false;
private $p_sollversteuerung_is_dirty = false;

public function _get_table_name()
{
	return 'location';
}

public function get_table_fields()
{
	return array('id','id_person','no','unique_credit_identifier','ik','iscenter','id_chart_of_account','id_insurance_district','taxid','id_person_revenue_department','id_person_taxadvisor','id_person_laywer','sollversteuerung');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'location.id' . $delimiter . ',id_person as ' . $delimiter . 'location.id_person' . $delimiter . ',no as ' . $delimiter . 'location.no' . $delimiter . ',unique_credit_identifier as ' . $delimiter . 'location.unique_credit_identifier' . $delimiter . ',ik as ' . $delimiter . 'location.ik' . $delimiter . ',iscenter as ' . $delimiter . 'location.iscenter' . $delimiter . ',id_chart_of_account as ' . $delimiter . 'location.id_chart_of_account' . $delimiter . ',id_insurance_district as ' . $delimiter . 'location.id_insurance_district' . $delimiter . ',taxid as ' . $delimiter . 'location.taxid' . $delimiter . ',id_person_revenue_department as ' . $delimiter . 'location.id_person_revenue_department' . $delimiter . ',id_person_taxadvisor as ' . $delimiter . 'location.id_person_taxadvisor' . $delimiter . ',id_person_laywer as ' . $delimiter . 'location.id_person_laywer' . $delimiter . ',sollversteuerung as ' . $delimiter . 'location.sollversteuerung' . $delimiter . ' from location';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_id_person()
{
	return $this->p_id_person;
}

public function get_id_person_original()
{
	return $this->p_id_person_original;
}

public function set_id_person($value)
{
	if ($this->p_id_person === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_is_dirty = true;
	$this->p_id_person = $value;
}

public function set_id_person_original($value)
{
	$this->p_id_person_original = $value;
}

public function get_id_person_is_dirty()
{
	return $this->p_id_person_is_dirty;
}


public function get_no()
{
	return $this->p_no;
}

public function get_no_original()
{
	return $this->p_no_original;
}

public function set_no($value)
{
	if ($this->p_no === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_no_is_dirty = true;
	$this->p_no = $value;
}

public function set_no_original($value)
{
	$this->p_no_original = $value;
}

public function get_no_is_dirty()
{
	return $this->p_no_is_dirty;
}


public function get_unique_credit_identifier()
{
	return $this->p_unique_credit_identifier;
}

public function get_unique_credit_identifier_original()
{
	return $this->p_unique_credit_identifier_original;
}

public function set_unique_credit_identifier($value)
{
	if ($this->p_unique_credit_identifier === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_unique_credit_identifier_is_dirty = true;
	$this->p_unique_credit_identifier = $value;
}

public function set_unique_credit_identifier_original($value)
{
	$this->p_unique_credit_identifier_original = $value;
}

public function get_unique_credit_identifier_is_dirty()
{
	return $this->p_unique_credit_identifier_is_dirty;
}


public function get_ik()
{
	return $this->p_ik;
}

public function get_ik_original()
{
	return $this->p_ik_original;
}

public function set_ik($value)
{
	if ($this->p_ik === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_ik_is_dirty = true;
	$this->p_ik = $value;
}

public function set_ik_original($value)
{
	$this->p_ik_original = $value;
}

public function get_ik_is_dirty()
{
	return $this->p_ik_is_dirty;
}


public function get_iscenter()
{
	return $this->p_iscenter;
}

public function get_iscenter_original()
{
	return $this->p_iscenter_original;
}

public function set_iscenter($value)
{
	if ($this->p_iscenter === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_iscenter_is_dirty = true;
	$this->p_iscenter = $value;
}

public function set_iscenter_original($value)
{
	$this->p_iscenter_original = $value;
}

public function get_iscenter_is_dirty()
{
	return $this->p_iscenter_is_dirty;
}


public function get_id_chart_of_account()
{
	return $this->p_id_chart_of_account;
}

public function get_id_chart_of_account_original()
{
	return $this->p_id_chart_of_account_original;
}

public function set_id_chart_of_account($value)
{
	if ($this->p_id_chart_of_account === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_chart_of_account_is_dirty = true;
	$this->p_id_chart_of_account = $value;
}

public function set_id_chart_of_account_original($value)
{
	$this->p_id_chart_of_account_original = $value;
}

public function get_id_chart_of_account_is_dirty()
{
	return $this->p_id_chart_of_account_is_dirty;
}


public function get_id_insurance_district()
{
	return $this->p_id_insurance_district;
}

public function get_id_insurance_district_original()
{
	return $this->p_id_insurance_district_original;
}

public function set_id_insurance_district($value)
{
	if ($this->p_id_insurance_district === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_insurance_district_is_dirty = true;
	$this->p_id_insurance_district = $value;
}

public function set_id_insurance_district_original($value)
{
	$this->p_id_insurance_district_original = $value;
}

public function get_id_insurance_district_is_dirty()
{
	return $this->p_id_insurance_district_is_dirty;
}


public function get_taxid()
{
	return $this->p_taxid;
}

public function get_taxid_original()
{
	return $this->p_taxid_original;
}

public function set_taxid($value)
{
	if ($this->p_taxid === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_taxid_is_dirty = true;
	$this->p_taxid = $value;
}

public function set_taxid_original($value)
{
	$this->p_taxid_original = $value;
}

public function get_taxid_is_dirty()
{
	return $this->p_taxid_is_dirty;
}


public function get_id_person_revenue_department()
{
	return $this->p_id_person_revenue_department;
}

public function get_id_person_revenue_department_original()
{
	return $this->p_id_person_revenue_department_original;
}

public function set_id_person_revenue_department($value)
{
	if ($this->p_id_person_revenue_department === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_revenue_department_is_dirty = true;
	$this->p_id_person_revenue_department = $value;
}

public function set_id_person_revenue_department_original($value)
{
	$this->p_id_person_revenue_department_original = $value;
}

public function get_id_person_revenue_department_is_dirty()
{
	return $this->p_id_person_revenue_department_is_dirty;
}


public function get_id_person_taxadvisor()
{
	return $this->p_id_person_taxadvisor;
}

public function get_id_person_taxadvisor_original()
{
	return $this->p_id_person_taxadvisor_original;
}

public function set_id_person_taxadvisor($value)
{
	if ($this->p_id_person_taxadvisor === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_taxadvisor_is_dirty = true;
	$this->p_id_person_taxadvisor = $value;
}

public function set_id_person_taxadvisor_original($value)
{
	$this->p_id_person_taxadvisor_original = $value;
}

public function get_id_person_taxadvisor_is_dirty()
{
	return $this->p_id_person_taxadvisor_is_dirty;
}


public function get_id_person_laywer()
{
	return $this->p_id_person_laywer;
}

public function get_id_person_laywer_original()
{
	return $this->p_id_person_laywer_original;
}

public function set_id_person_laywer($value)
{
	if ($this->p_id_person_laywer === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_laywer_is_dirty = true;
	$this->p_id_person_laywer = $value;
}

public function set_id_person_laywer_original($value)
{
	$this->p_id_person_laywer_original = $value;
}

public function get_id_person_laywer_is_dirty()
{
	return $this->p_id_person_laywer_is_dirty;
}


public function get_sollversteuerung()
{
	return $this->p_sollversteuerung;
}

public function get_sollversteuerung_original()
{
	return $this->p_sollversteuerung_original;
}

public function set_sollversteuerung($value)
{
	if ($this->p_sollversteuerung === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_sollversteuerung_is_dirty = true;
	$this->p_sollversteuerung = $value;
}

public function set_sollversteuerung_original($value)
{
	$this->p_sollversteuerung_original = $value;
}

public function get_sollversteuerung_is_dirty()
{
	return $this->p_sollversteuerung_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_id_person_is_dirty = false;
	$this->p_no_is_dirty = false;
	$this->p_unique_credit_identifier_is_dirty = false;
	$this->p_ik_is_dirty = false;
	$this->p_iscenter_is_dirty = false;
	$this->p_id_chart_of_account_is_dirty = false;
	$this->p_id_insurance_district_is_dirty = false;
	$this->p_taxid_is_dirty = false;
	$this->p_id_person_revenue_department_is_dirty = false;
	$this->p_id_person_taxadvisor_is_dirty = false;
	$this->p_id_person_laywer_is_dirty = false;
	$this->p_sollversteuerung_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_person = $this->p_id_person_original;
		$this->p_no = $this->p_no_original;
		$this->p_unique_credit_identifier = $this->p_unique_credit_identifier_original;
		$this->p_ik = $this->p_ik_original;
		$this->p_iscenter = $this->p_iscenter_original;
		$this->p_id_chart_of_account = $this->p_id_chart_of_account_original;
		$this->p_id_insurance_district = $this->p_id_insurance_district_original;
		$this->p_taxid = $this->p_taxid_original;
		$this->p_id_person_revenue_department = $this->p_id_person_revenue_department_original;
		$this->p_id_person_taxadvisor = $this->p_id_person_taxadvisor_original;
		$this->p_id_person_laywer = $this->p_id_person_laywer_original;
		$this->p_sollversteuerung = $this->p_sollversteuerung_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "location.id":
					$this->set_id($val);
					break;
				case "location.id_person":
					$this->set_id_person($val);
					$this->set_id_person_original($val);
					break;
				case "location.no":
					$this->set_no($val);
					$this->set_no_original($val);
					break;
				case "location.unique_credit_identifier":
					$this->set_unique_credit_identifier($val);
					$this->set_unique_credit_identifier_original($val);
					break;
				case "location.ik":
					$this->set_ik($val);
					$this->set_ik_original($val);
					break;
				case "location.iscenter":
					$this->set_iscenter($val);
					$this->set_iscenter_original($val);
					break;
				case "location.id_chart_of_account":
					$this->set_id_chart_of_account($val);
					$this->set_id_chart_of_account_original($val);
					break;
				case "location.id_insurance_district":
					$this->set_id_insurance_district($val);
					$this->set_id_insurance_district_original($val);
					break;
				case "location.taxid":
					$this->set_taxid($val);
					$this->set_taxid_original($val);
					break;
				case "location.id_person_revenue_department":
					$this->set_id_person_revenue_department($val);
					$this->set_id_person_revenue_department_original($val);
					break;
				case "location.id_person_taxadvisor":
					$this->set_id_person_taxadvisor($val);
					$this->set_id_person_taxadvisor_original($val);
					break;
				case "location.id_person_laywer":
					$this->set_id_person_laywer($val);
					$this->set_id_person_laywer_original($val);
					break;
				case "location.sollversteuerung":
					$this->set_sollversteuerung($val);
					$this->set_sollversteuerung_original($val);
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
		$location = cls_table_factory::create_instance('location');
		$row = $db_manager->fetch_row($result);
		$location->fill($row);
		return $location;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_location.php');
		return cls_save_location::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_location.php');
		return cls_save_location::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_locations($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('location',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('location',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$location = cls_table_factory::create_instance('location');
				$location->fill($row);
				$data[] = $location;
			}
		return $data;
	}

function get_chart_of_account($db_manager,$application)
	{
		$result = $db_manager->get_records('chart_of_account',$this->get_id_chart_of_account());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$chart_of_account = cls_table_factory::create_instance('chart_of_account');
		$row = $db_manager->fetch_row($result);
		$chart_of_account->fill($row);
		return $chart_of_account;
	}

function get_insurance_district($db_manager,$application)
	{
		$result = $db_manager->get_records('insurance_district',$this->get_id_insurance_district());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$insurance_district = cls_table_factory::create_instance('insurance_district');
		$row = $db_manager->fetch_row($result);
		$insurance_district->fill($row);
		return $insurance_district;
	}

function get_person($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

function get_person_laywer($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person_laywer());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

function get_person_revenue_department($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person_revenue_department());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

function get_person_taxadvisor($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person_taxadvisor());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

//changed 1
public function get_data_location($db_manager,$application)
	{
		$result = $db_manager->get_records('data_location',$this->get_id(),'id_location');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data_location = cls_table_factory::create_instance('data_location');
		$row = $db_manager->fetch_row($result);
		$data_location->fill($row);
		return $data_location;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_data_locations_by_location($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_location',$this->get_id(),'id_location');
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

public function get_multi_data_locations_by_location($locations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$locations,'id_location');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_location = cls_table_factory::create_instance('data_location');
				$data_location->fill($row);
				if (!array_key_exists($data[$row['id_location']]))
				{
					$data[$row['id_location']] = array();
				}
				$data[$row['id_location']][] = $data_location;
			}
		return $data;
	}

//changed 1
public function get_logon($db_manager,$application)
	{
		$result = $db_manager->get_records('logon',$this->get_id(),'id_location');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$logon = cls_table_factory::create_instance('logon');
		$row = $db_manager->fetch_row($result);
		$logon->fill($row);
		return $logon;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_logons_by_location($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('logon',$this->get_id(),'id_location');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$logon = cls_table_factory::create_instance('logon');
				$logon->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $logon;
				}
				else
				{
					$data[] = $logon;
				}
			}
		return $data;
	}

public function get_multi_logons_by_location($locations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('logon',$locations,'id_location');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$logon = cls_table_factory::create_instance('logon');
				$logon->fill($row);
				if (!array_key_exists($data[$row['id_location']]))
				{
					$data[$row['id_location']] = array();
				}
				$data[$row['id_location']][] = $logon;
			}
		return $data;
	}

public function get_address($locations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($locations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$locations,'id_data');
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

public function get_communication_reason($locations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($locations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$locations,'id_data');
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

public function get_data_change($locations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($locations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$locations,'id_data');
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

public function get_data_help($locations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($locations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$locations,'id_data');
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

public function get_multi_data_location($locations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$locations,'id_data');
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

public function get_data_posting($locations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($locations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$locations,'id_data');
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

public function get_data_property($locations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($locations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$locations,'id_data');
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

public function get_offer_event($locations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($locations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$locations,'id_data');
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

public function get_supplier_data($locations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($locations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$locations,'id_data');
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

public function get_table_test_data($locations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($locations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$locations,'id_data');
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

public function get_data_translation($locations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($locations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$locations,'id_data');
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

public function get_dms($locations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($locations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$locations,'id_data');
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

public function get_data_relation_id_data1($locations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($locations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$locations,'id_data1');
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

public function get_data_relation_id_data2($locations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($locations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$locations,'id_data2');
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

public function get_data_property_id_link_data($locations,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($locations,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$locations,'id_link_data');
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
