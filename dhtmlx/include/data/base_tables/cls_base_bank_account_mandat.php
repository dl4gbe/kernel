<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_bank_account_mandat extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_bank_account = null;
private $p_id_bank_account_original = null;
private $p_mandatsreferenzno = null;
private $p_mandatsreferenzno_original = null;
private $p_signaturedate = null;
private $p_signaturedate_original = null;
private $p_issuedate = null;
private $p_issuedate_original = null;
private $p_firstname = null;
private $p_firstname_original = null;
private $p_lastname = null;
private $p_lastname_original = null;
private $p_address = null;
private $p_address_original = null;
private $p_zip = null;
private $p_zip_original = null;
private $p_city = null;
private $p_city_original = null;
private $p_iban = null;
private $p_iban_original = null;
private $p_bic = null;
private $p_bic_original = null;

private $p_id_bank_account_is_dirty = false;
private $p_mandatsreferenzno_is_dirty = false;
private $p_signaturedate_is_dirty = false;
private $p_issuedate_is_dirty = false;
private $p_firstname_is_dirty = false;
private $p_lastname_is_dirty = false;
private $p_address_is_dirty = false;
private $p_zip_is_dirty = false;
private $p_city_is_dirty = false;
private $p_iban_is_dirty = false;
private $p_bic_is_dirty = false;

public function _get_table_name()
{
	return 'bank_account_mandat';
}

public function get_table_fields()
{
	return array('id','id_bank_account','mandatsreferenzno','signaturedate','issuedate','firstname','lastname','address','zip','city','iban','bic');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'bank_account_mandat.id' . $delimiter . ',id_bank_account as ' . $delimiter . 'bank_account_mandat.id_bank_account' . $delimiter . ',mandatsreferenzno as ' . $delimiter . 'bank_account_mandat.mandatsreferenzno' . $delimiter . ',signaturedate as ' . $delimiter . 'bank_account_mandat.signaturedate' . $delimiter . ',issuedate as ' . $delimiter . 'bank_account_mandat.issuedate' . $delimiter . ',firstname as ' . $delimiter . 'bank_account_mandat.firstname' . $delimiter . ',lastname as ' . $delimiter . 'bank_account_mandat.lastname' . $delimiter . ',address as ' . $delimiter . 'bank_account_mandat.address' . $delimiter . ',zip as ' . $delimiter . 'bank_account_mandat.zip' . $delimiter . ',city as ' . $delimiter . 'bank_account_mandat.city' . $delimiter . ',iban as ' . $delimiter . 'bank_account_mandat.iban' . $delimiter . ',bic as ' . $delimiter . 'bank_account_mandat.bic' . $delimiter . ' from bank_account_mandat';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_id_bank_account()
{
	return $this->p_id_bank_account;
}

public function get_id_bank_account_original()
{
	return $this->p_id_bank_account_original;
}

public function set_id_bank_account($value)
{
	if ($this->p_id_bank_account === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_bank_account_is_dirty = true;
	$this->p_id_bank_account = $value;
}

public function set_id_bank_account_original($value)
{
	$this->p_id_bank_account_original = $value;
}

public function get_id_bank_account_is_dirty()
{
	return $this->p_id_bank_account_is_dirty;
}


public function get_mandatsreferenzno()
{
	return $this->p_mandatsreferenzno;
}

public function get_mandatsreferenzno_original()
{
	return $this->p_mandatsreferenzno_original;
}

public function set_mandatsreferenzno($value)
{
	if ($this->p_mandatsreferenzno === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_mandatsreferenzno_is_dirty = true;
	$this->p_mandatsreferenzno = $value;
}

public function set_mandatsreferenzno_original($value)
{
	$this->p_mandatsreferenzno_original = $value;
}

public function get_mandatsreferenzno_is_dirty()
{
	return $this->p_mandatsreferenzno_is_dirty;
}


public function get_signaturedate()
{
	return $this->p_signaturedate;
}

public function get_signaturedate_original()
{
	return $this->p_signaturedate_original;
}

public function set_signaturedate($value)
{
	if ($this->p_signaturedate === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_signaturedate_is_dirty = true;
	$this->p_signaturedate = $value;
}

public function set_signaturedate_original($value)
{
	$this->p_signaturedate_original = $value;
}

public function get_signaturedate_is_dirty()
{
	return $this->p_signaturedate_is_dirty;
}


public function get_issuedate()
{
	return $this->p_issuedate;
}

public function get_issuedate_original()
{
	return $this->p_issuedate_original;
}

public function set_issuedate($value)
{
	if ($this->p_issuedate === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_issuedate_is_dirty = true;
	$this->p_issuedate = $value;
}

public function set_issuedate_original($value)
{
	$this->p_issuedate_original = $value;
}

public function get_issuedate_is_dirty()
{
	return $this->p_issuedate_is_dirty;
}


public function get_firstname()
{
	return $this->p_firstname;
}

public function get_firstname_original()
{
	return $this->p_firstname_original;
}

public function set_firstname($value)
{
	if ($this->p_firstname === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_firstname_is_dirty = true;
	$this->p_firstname = $value;
}

public function set_firstname_original($value)
{
	$this->p_firstname_original = $value;
}

public function get_firstname_is_dirty()
{
	return $this->p_firstname_is_dirty;
}


public function get_lastname()
{
	return $this->p_lastname;
}

public function get_lastname_original()
{
	return $this->p_lastname_original;
}

public function set_lastname($value)
{
	if ($this->p_lastname === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_lastname_is_dirty = true;
	$this->p_lastname = $value;
}

public function set_lastname_original($value)
{
	$this->p_lastname_original = $value;
}

public function get_lastname_is_dirty()
{
	return $this->p_lastname_is_dirty;
}


public function get_address()
{
	return $this->p_address;
}

public function get_address_original()
{
	return $this->p_address_original;
}

public function set_address($value)
{
	if ($this->p_address === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_address_is_dirty = true;
	$this->p_address = $value;
}

public function set_address_original($value)
{
	$this->p_address_original = $value;
}

public function get_address_is_dirty()
{
	return $this->p_address_is_dirty;
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


public function get_iban()
{
	return $this->p_iban;
}

public function get_iban_original()
{
	return $this->p_iban_original;
}

public function set_iban($value)
{
	if ($this->p_iban === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_iban_is_dirty = true;
	$this->p_iban = $value;
}

public function set_iban_original($value)
{
	$this->p_iban_original = $value;
}

public function get_iban_is_dirty()
{
	return $this->p_iban_is_dirty;
}


public function get_bic()
{
	return $this->p_bic;
}

public function get_bic_original()
{
	return $this->p_bic_original;
}

public function set_bic($value)
{
	if ($this->p_bic === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_bic_is_dirty = true;
	$this->p_bic = $value;
}

public function set_bic_original($value)
{
	$this->p_bic_original = $value;
}

public function get_bic_is_dirty()
{
	return $this->p_bic_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_id_bank_account_is_dirty = false;
	$this->p_mandatsreferenzno_is_dirty = false;
	$this->p_signaturedate_is_dirty = false;
	$this->p_issuedate_is_dirty = false;
	$this->p_firstname_is_dirty = false;
	$this->p_lastname_is_dirty = false;
	$this->p_address_is_dirty = false;
	$this->p_zip_is_dirty = false;
	$this->p_city_is_dirty = false;
	$this->p_iban_is_dirty = false;
	$this->p_bic_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_bank_account = $this->p_id_bank_account_original;
		$this->p_mandatsreferenzno = $this->p_mandatsreferenzno_original;
		$this->p_signaturedate = $this->p_signaturedate_original;
		$this->p_issuedate = $this->p_issuedate_original;
		$this->p_firstname = $this->p_firstname_original;
		$this->p_lastname = $this->p_lastname_original;
		$this->p_address = $this->p_address_original;
		$this->p_zip = $this->p_zip_original;
		$this->p_city = $this->p_city_original;
		$this->p_iban = $this->p_iban_original;
		$this->p_bic = $this->p_bic_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "bank_account_mandat.id":
					$this->set_id($val);
					break;
				case "bank_account_mandat.id_bank_account":
					$this->set_id_bank_account($val);
					$this->set_id_bank_account_original($val);
					break;
				case "bank_account_mandat.mandatsreferenzno":
					$this->set_mandatsreferenzno($val);
					$this->set_mandatsreferenzno_original($val);
					break;
				case "bank_account_mandat.signaturedate":
					$this->set_signaturedate($val);
					$this->set_signaturedate_original($val);
					break;
				case "bank_account_mandat.issuedate":
					$this->set_issuedate($val);
					$this->set_issuedate_original($val);
					break;
				case "bank_account_mandat.firstname":
					$this->set_firstname($val);
					$this->set_firstname_original($val);
					break;
				case "bank_account_mandat.lastname":
					$this->set_lastname($val);
					$this->set_lastname_original($val);
					break;
				case "bank_account_mandat.address":
					$this->set_address($val);
					$this->set_address_original($val);
					break;
				case "bank_account_mandat.zip":
					$this->set_zip($val);
					$this->set_zip_original($val);
					break;
				case "bank_account_mandat.city":
					$this->set_city($val);
					$this->set_city_original($val);
					break;
				case "bank_account_mandat.iban":
					$this->set_iban($val);
					$this->set_iban_original($val);
					break;
				case "bank_account_mandat.bic":
					$this->set_bic($val);
					$this->set_bic_original($val);
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
		$bank_account_mandat = cls_table_factory::create_instance('bank_account_mandat');
		$row = $db_manager->fetch_row($result);
		$bank_account_mandat->fill($row);
		return $bank_account_mandat;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_bank_account_mandat.php');
		return cls_save_bank_account_mandat::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_bank_account_mandat.php');
		return cls_save_bank_account_mandat::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_bank_account_mandats($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('bank_account_mandat',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('bank_account_mandat',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$bank_account_mandat = cls_table_factory::create_instance('bank_account_mandat');
				$bank_account_mandat->fill($row);
				$data[] = $bank_account_mandat;
			}
		return $data;
	}

function get_bank_account($db_manager,$application)
	{
		$result = $db_manager->get_records('bank_account',$this->get_id_bank_account());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$bank_account = cls_table_factory::create_instance('bank_account');
		$row = $db_manager->fetch_row($result);
		$bank_account->fill($row);
		return $bank_account;
	}

public function get_address($bank_account_mandats,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($bank_account_mandats,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$bank_account_mandats,'id_data');
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

public function get_communication_reason($bank_account_mandats,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($bank_account_mandats,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$bank_account_mandats,'id_data');
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

public function get_data_change($bank_account_mandats,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($bank_account_mandats,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$bank_account_mandats,'id_data');
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

public function get_data_help($bank_account_mandats,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($bank_account_mandats,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$bank_account_mandats,'id_data');
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

public function get_data_location($bank_account_mandats,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($bank_account_mandats,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$bank_account_mandats,'id_data');
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

public function get_data_posting($bank_account_mandats,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($bank_account_mandats,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$bank_account_mandats,'id_data');
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

public function get_data_property($bank_account_mandats,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($bank_account_mandats,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$bank_account_mandats,'id_data');
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

public function get_offer_event($bank_account_mandats,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($bank_account_mandats,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$bank_account_mandats,'id_data');
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

public function get_supplier_data($bank_account_mandats,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($bank_account_mandats,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$bank_account_mandats,'id_data');
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

public function get_table_test_data($bank_account_mandats,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($bank_account_mandats,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$bank_account_mandats,'id_data');
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

public function get_data_translation($bank_account_mandats,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($bank_account_mandats,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$bank_account_mandats,'id_data');
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

public function get_dms($bank_account_mandats,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($bank_account_mandats,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$bank_account_mandats,'id_data');
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

public function get_data_relation_id_data1($bank_account_mandats,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($bank_account_mandats,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$bank_account_mandats,'id_data1');
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

public function get_data_relation_id_data2($bank_account_mandats,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($bank_account_mandats,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$bank_account_mandats,'id_data2');
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

public function get_data_property_id_link_data($bank_account_mandats,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($bank_account_mandats,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$bank_account_mandats,'id_link_data');
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
