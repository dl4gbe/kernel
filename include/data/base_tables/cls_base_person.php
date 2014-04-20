<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_person extends cls_datatable_base
{
private static $p_cmmon;
private $p_name = null;
private $p_name_original = null;
private $p_personno = null;
private $p_personno_original = null;
private $p_id_article_price_group = null;
private $p_id_article_price_group_original = null;
private $p_cardno = null;
private $p_cardno_original = null;
private $p_paymenttype = null;
private $p_paymenttype_original = null;
private $p_id_bank_account = null;
private $p_id_bank_account_original = null;
private $p_id_country_nationality = null;
private $p_id_country_nationality_original = null;
private $p_birthdate = null;
private $p_birthdate_original = null;
private $p_id_salutation = null;
private $p_id_salutation_original = null;
private $p_middlename = null;
private $p_middlename_original = null;
private $p_lastname = null;
private $p_lastname_original = null;
private $p_firstname = null;
private $p_firstname_original = null;

private $p_name_is_dirty = false;
private $p_personno_is_dirty = false;
private $p_id_article_price_group_is_dirty = false;
private $p_cardno_is_dirty = false;
private $p_paymenttype_is_dirty = false;
private $p_id_bank_account_is_dirty = false;
private $p_id_country_nationality_is_dirty = false;
private $p_birthdate_is_dirty = false;
private $p_id_salutation_is_dirty = false;
private $p_middlename_is_dirty = false;
private $p_lastname_is_dirty = false;
private $p_firstname_is_dirty = false;

public function _get_table_name()
{
	return 'person';
}

public function get_table_fields()
{
	return array('name','personno','id_article_price_group','cardno','paymenttype','id_bank_account','id_country_nationality','birthdate','id_salutation','middlename','lastname','firstname','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select name as ' . $delimiter . 'person.name' . $delimiter . ',personno as ' . $delimiter . 'person.personno' . $delimiter . ',id_article_price_group as ' . $delimiter . 'person.id_article_price_group' . $delimiter . ',cardno as ' . $delimiter . 'person.cardno' . $delimiter . ',paymenttype as ' . $delimiter . 'person.paymenttype' . $delimiter . ',id_bank_account as ' . $delimiter . 'person.id_bank_account' . $delimiter . ',id_country_nationality as ' . $delimiter . 'person.id_country_nationality' . $delimiter . ',birthdate as ' . $delimiter . 'person.birthdate' . $delimiter . ',id_salutation as ' . $delimiter . 'person.id_salutation' . $delimiter . ',middlename as ' . $delimiter . 'person.middlename' . $delimiter . ',lastname as ' . $delimiter . 'person.lastname' . $delimiter . ',firstname as ' . $delimiter . 'person.firstname' . $delimiter . ',id as ' . $delimiter . 'person.id' . $delimiter . ' from person';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
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


public function get_personno()
{
	return $this->p_personno;
}

public function get_personno_original()
{
	return $this->p_personno_original;
}

public function set_personno($value)
{
	if ($this->p_personno === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_personno_is_dirty = true;
	$this->p_personno = $value;
}

public function set_personno_original($value)
{
	$this->p_personno_original = $value;
}

public function get_personno_is_dirty()
{
	return $this->p_personno_is_dirty;
}


public function get_id_article_price_group()
{
	return $this->p_id_article_price_group;
}

public function get_id_article_price_group_original()
{
	return $this->p_id_article_price_group_original;
}

public function set_id_article_price_group($value)
{
	if ($this->p_id_article_price_group === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_article_price_group_is_dirty = true;
	$this->p_id_article_price_group = $value;
}

public function set_id_article_price_group_original($value)
{
	$this->p_id_article_price_group_original = $value;
}

public function get_id_article_price_group_is_dirty()
{
	return $this->p_id_article_price_group_is_dirty;
}


public function get_cardno()
{
	return $this->p_cardno;
}

public function get_cardno_original()
{
	return $this->p_cardno_original;
}

public function set_cardno($value)
{
	if ($this->p_cardno === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_cardno_is_dirty = true;
	$this->p_cardno = $value;
}

public function set_cardno_original($value)
{
	$this->p_cardno_original = $value;
}

public function get_cardno_is_dirty()
{
	return $this->p_cardno_is_dirty;
}


public function get_paymenttype()
{
	return $this->p_paymenttype;
}

public function get_paymenttype_original()
{
	return $this->p_paymenttype_original;
}

public function set_paymenttype($value)
{
	if ($this->p_paymenttype === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_paymenttype_is_dirty = true;
	$this->p_paymenttype = $value;
}

public function set_paymenttype_original($value)
{
	$this->p_paymenttype_original = $value;
}

public function get_paymenttype_is_dirty()
{
	return $this->p_paymenttype_is_dirty;
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


public function get_id_country_nationality()
{
	return $this->p_id_country_nationality;
}

public function get_id_country_nationality_original()
{
	return $this->p_id_country_nationality_original;
}

public function set_id_country_nationality($value)
{
	if ($this->p_id_country_nationality === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_country_nationality_is_dirty = true;
	$this->p_id_country_nationality = $value;
}

public function set_id_country_nationality_original($value)
{
	$this->p_id_country_nationality_original = $value;
}

public function get_id_country_nationality_is_dirty()
{
	return $this->p_id_country_nationality_is_dirty;
}


public function get_birthdate()
{
	return $this->p_birthdate;
}

public function get_birthdate_original()
{
	return $this->p_birthdate_original;
}

public function set_birthdate($value)
{
	if ($this->p_birthdate === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_birthdate_is_dirty = true;
	$this->p_birthdate = $value;
}

public function set_birthdate_original($value)
{
	$this->p_birthdate_original = $value;
}

public function get_birthdate_is_dirty()
{
	return $this->p_birthdate_is_dirty;
}


public function get_id_salutation()
{
	return $this->p_id_salutation;
}

public function get_id_salutation_original()
{
	return $this->p_id_salutation_original;
}

public function set_id_salutation($value)
{
	if ($this->p_id_salutation === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_salutation_is_dirty = true;
	$this->p_id_salutation = $value;
}

public function set_id_salutation_original($value)
{
	$this->p_id_salutation_original = $value;
}

public function get_id_salutation_is_dirty()
{
	return $this->p_id_salutation_is_dirty;
}


public function get_middlename()
{
	return $this->p_middlename;
}

public function get_middlename_original()
{
	return $this->p_middlename_original;
}

public function set_middlename($value)
{
	if ($this->p_middlename === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_middlename_is_dirty = true;
	$this->p_middlename = $value;
}

public function set_middlename_original($value)
{
	$this->p_middlename_original = $value;
}

public function get_middlename_is_dirty()
{
	return $this->p_middlename_is_dirty;
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



public function reset_dirty($reset_values = false)
{
	$this->p_name_is_dirty = false;
	$this->p_personno_is_dirty = false;
	$this->p_id_article_price_group_is_dirty = false;
	$this->p_cardno_is_dirty = false;
	$this->p_paymenttype_is_dirty = false;
	$this->p_id_bank_account_is_dirty = false;
	$this->p_id_country_nationality_is_dirty = false;
	$this->p_birthdate_is_dirty = false;
	$this->p_id_salutation_is_dirty = false;
	$this->p_middlename_is_dirty = false;
	$this->p_lastname_is_dirty = false;
	$this->p_firstname_is_dirty = false;
	if ($reset_values)
	{
		$this->p_name = $this->p_name_original;
		$this->p_personno = $this->p_personno_original;
		$this->p_id_article_price_group = $this->p_id_article_price_group_original;
		$this->p_cardno = $this->p_cardno_original;
		$this->p_paymenttype = $this->p_paymenttype_original;
		$this->p_id_bank_account = $this->p_id_bank_account_original;
		$this->p_id_country_nationality = $this->p_id_country_nationality_original;
		$this->p_birthdate = $this->p_birthdate_original;
		$this->p_id_salutation = $this->p_id_salutation_original;
		$this->p_middlename = $this->p_middlename_original;
		$this->p_lastname = $this->p_lastname_original;
		$this->p_firstname = $this->p_firstname_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "person.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "person.personno":
					$this->set_personno($val);
					$this->set_personno_original($val);
					break;
				case "person.id_article_price_group":
					$this->set_id_article_price_group($val);
					$this->set_id_article_price_group_original($val);
					break;
				case "person.cardno":
					$this->set_cardno($val);
					$this->set_cardno_original($val);
					break;
				case "person.paymenttype":
					$this->set_paymenttype($val);
					$this->set_paymenttype_original($val);
					break;
				case "person.id_bank_account":
					$this->set_id_bank_account($val);
					$this->set_id_bank_account_original($val);
					break;
				case "person.id_country_nationality":
					$this->set_id_country_nationality($val);
					$this->set_id_country_nationality_original($val);
					break;
				case "person.birthdate":
					$this->set_birthdate($val);
					$this->set_birthdate_original($val);
					break;
				case "person.id_salutation":
					$this->set_id_salutation($val);
					$this->set_id_salutation_original($val);
					break;
				case "person.middlename":
					$this->set_middlename($val);
					$this->set_middlename_original($val);
					break;
				case "person.lastname":
					$this->set_lastname($val);
					$this->set_lastname_original($val);
					break;
				case "person.firstname":
					$this->set_firstname($val);
					$this->set_firstname_original($val);
					break;
				case "person.id":
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
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_person.php');
		return cls_save_person::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_person.php');
		return cls_save_person::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_persons($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('person',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('person',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person = cls_table_factory::create_instance('person');
				$person->fill($row);
				$data[] = $person;
			}
		return $data;
	}

function get_article_price_group($db_manager,$application)
	{
		$result = $db_manager->get_records('article_price_group',$this->get_id_article_price_group());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article_price_group = cls_table_factory::create_instance('article_price_group');
		$row = $db_manager->fetch_row($result);
		$article_price_group->fill($row);
		return $article_price_group;
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

function get_country_nationality($db_manager,$application)
	{
		$result = $db_manager->get_records('country',$this->get_id_country_nationality());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$country = cls_table_factory::create_instance('country');
		$row = $db_manager->fetch_row($result);
		$country->fill($row);
		return $country;
	}

function get_salutation($db_manager,$application)
	{
		$result = $db_manager->get_records('salutation',$this->get_id_salutation());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$salutation = cls_table_factory::create_instance('salutation');
		$row = $db_manager->fetch_row($result);
		$salutation->fill($row);
		return $salutation;
	}

//changed 1
public function get_drupal_person($db_manager,$application)
	{
		$result = $db_manager->get_records('drupal_person',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$drupal_person = cls_table_factory::create_instance('drupal_person');
		$row = $db_manager->fetch_row($result);
		$drupal_person->fill($row);
		return $drupal_person;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_drupal_persons_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('drupal_person',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$drupal_person = cls_table_factory::create_instance('drupal_person');
				$drupal_person->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $drupal_person;
				}
				else
				{
					$data[] = $drupal_person;
				}
			}
		return $data;
	}

public function get_multi_drupal_persons_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('drupal_person',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$drupal_person = cls_table_factory::create_instance('drupal_person');
				$drupal_person->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $drupal_person;
			}
		return $data;
	}

//changed 1
public function get_article_person_rent($db_manager,$application)
	{
		$result = $db_manager->get_records('article_person_rent',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article_person_rent = cls_table_factory::create_instance('article_person_rent');
		$row = $db_manager->fetch_row($result);
		$article_person_rent->fill($row);
		return $article_person_rent;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_article_person_rents_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('article_person_rent',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_person_rent = cls_table_factory::create_instance('article_person_rent');
				$article_person_rent->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $article_person_rent;
				}
				else
				{
					$data[] = $article_person_rent;
				}
			}
		return $data;
	}

public function get_multi_article_person_rents_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('article_person_rent',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_person_rent = cls_table_factory::create_instance('article_person_rent');
				$article_person_rent->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $article_person_rent;
			}
		return $data;
	}

//changed 1
public function get_bank($db_manager,$application)
	{
		$result = $db_manager->get_records('bank',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$bank = cls_table_factory::create_instance('bank');
		$row = $db_manager->fetch_row($result);
		$bank->fill($row);
		return $bank;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_banks_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('bank',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$bank = cls_table_factory::create_instance('bank');
				$bank->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $bank;
				}
				else
				{
					$data[] = $bank;
				}
			}
		return $data;
	}

public function get_multi_banks_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('bank',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$bank = cls_table_factory::create_instance('bank');
				$bank->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $bank;
			}
		return $data;
	}

//changed 1
public function get_communication($db_manager,$application)
	{
		$result = $db_manager->get_records('communication',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$communication = cls_table_factory::create_instance('communication');
		$row = $db_manager->fetch_row($result);
		$communication->fill($row);
		return $communication;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_communications_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('communication',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$communication = cls_table_factory::create_instance('communication');
				$communication->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $communication;
				}
				else
				{
					$data[] = $communication;
				}
			}
		return $data;
	}

public function get_multi_communications_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$communication = cls_table_factory::create_instance('communication');
				$communication->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $communication;
			}
		return $data;
	}

//changed 1
public function get_communication_event($db_manager,$application)
	{
		$result = $db_manager->get_records('communication_event',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$communication_event = cls_table_factory::create_instance('communication_event');
		$row = $db_manager->fetch_row($result);
		$communication_event->fill($row);
		return $communication_event;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_communication_events_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('communication_event',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$communication_event = cls_table_factory::create_instance('communication_event');
				$communication_event->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $communication_event;
				}
				else
				{
					$data[] = $communication_event;
				}
			}
		return $data;
	}

public function get_multi_communication_events_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_event',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$communication_event = cls_table_factory::create_instance('communication_event');
				$communication_event->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $communication_event;
			}
		return $data;
	}

//changed 1
public function get_contract($db_manager,$application)
	{
		$result = $db_manager->get_records('contract',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$contract = cls_table_factory::create_instance('contract');
		$row = $db_manager->fetch_row($result);
		$contract->fill($row);
		return $contract;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_contracts_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('contract',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract = cls_table_factory::create_instance('contract');
				$contract->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $contract;
				}
				else
				{
					$data[] = $contract;
				}
			}
		return $data;
	}

public function get_multi_contracts_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('contract',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract = cls_table_factory::create_instance('contract');
				$contract->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $contract;
			}
		return $data;
	}

//changed 1
public function get_insurance($db_manager,$application)
	{
		$result = $db_manager->get_records('insurance',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$insurance = cls_table_factory::create_instance('insurance');
		$row = $db_manager->fetch_row($result);
		$insurance->fill($row);
		return $insurance;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_insurances_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('insurance',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$insurance = cls_table_factory::create_instance('insurance');
				$insurance->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $insurance;
				}
				else
				{
					$data[] = $insurance;
				}
			}
		return $data;
	}

public function get_multi_insurances_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('insurance',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$insurance = cls_table_factory::create_instance('insurance');
				$insurance->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $insurance;
			}
		return $data;
	}

//changed 1
public function get_invoice($db_manager,$application)
	{
		$result = $db_manager->get_records('invoice',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$invoice = cls_table_factory::create_instance('invoice');
		$row = $db_manager->fetch_row($result);
		$invoice->fill($row);
		return $invoice;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_invoices_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('invoice',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$invoice = cls_table_factory::create_instance('invoice');
				$invoice->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $invoice;
				}
				else
				{
					$data[] = $invoice;
				}
			}
		return $data;
	}

public function get_multi_invoices_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('invoice',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$invoice = cls_table_factory::create_instance('invoice');
				$invoice->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $invoice;
			}
		return $data;
	}

//changed 1
public function get_location($db_manager,$application)
	{
		$result = $db_manager->get_records('location',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$location = cls_table_factory::create_instance('location');
		$row = $db_manager->fetch_row($result);
		$location->fill($row);
		return $location;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_locations_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('location',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$location = cls_table_factory::create_instance('location');
				$location->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $location;
				}
				else
				{
					$data[] = $location;
				}
			}
		return $data;
	}

public function get_multi_locations_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('location',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$location = cls_table_factory::create_instance('location');
				$location->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $location;
			}
		return $data;
	}

//changed 1
public function get_logon($db_manager,$application)
	{
		$result = $db_manager->get_records('logon',$this->get_id(),'id_person');
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
public function get_logons_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('logon',$this->get_id(),'id_person');
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

public function get_multi_logons_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('logon',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$logon = cls_table_factory::create_instance('logon');
				$logon->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $logon;
			}
		return $data;
	}

//changed 1
public function get_offer_event($db_manager,$application)
	{
		$result = $db_manager->get_records('offer_event',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$offer_event = cls_table_factory::create_instance('offer_event');
		$row = $db_manager->fetch_row($result);
		$offer_event->fill($row);
		return $offer_event;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_offer_events_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('offer_event',$this->get_id(),'id_person');
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

public function get_multi_offer_events_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_event = cls_table_factory::create_instance('offer_event');
				$offer_event->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $offer_event;
			}
		return $data;
	}

//changed 1
public function get_person_access_group($db_manager,$application)
	{
		$result = $db_manager->get_records('person_access_group',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person_access_group = cls_table_factory::create_instance('person_access_group');
		$row = $db_manager->fetch_row($result);
		$person_access_group->fill($row);
		return $person_access_group;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_person_access_groups_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('person_access_group',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_access_group = cls_table_factory::create_instance('person_access_group');
				$person_access_group->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $person_access_group;
				}
				else
				{
					$data[] = $person_access_group;
				}
			}
		return $data;
	}

public function get_multi_person_access_groups_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('person_access_group',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_access_group = cls_table_factory::create_instance('person_access_group');
				$person_access_group->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $person_access_group;
			}
		return $data;
	}

//changed 1
public function get_person_account($db_manager,$application)
	{
		$result = $db_manager->get_records('person_account',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person_account = cls_table_factory::create_instance('person_account');
		$row = $db_manager->fetch_row($result);
		$person_account->fill($row);
		return $person_account;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_person_accounts_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('person_account',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_account = cls_table_factory::create_instance('person_account');
				$person_account->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $person_account;
				}
				else
				{
					$data[] = $person_account;
				}
			}
		return $data;
	}

public function get_multi_person_accounts_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('person_account',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_account = cls_table_factory::create_instance('person_account');
				$person_account->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $person_account;
			}
		return $data;
	}

//changed 1
public function get_person_article_renting($db_manager,$application)
	{
		$result = $db_manager->get_records('person_article_renting',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person_article_renting = cls_table_factory::create_instance('person_article_renting');
		$row = $db_manager->fetch_row($result);
		$person_article_renting->fill($row);
		return $person_article_renting;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_person_article_rentings_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('person_article_renting',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_article_renting = cls_table_factory::create_instance('person_article_renting');
				$person_article_renting->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $person_article_renting;
				}
				else
				{
					$data[] = $person_article_renting;
				}
			}
		return $data;
	}

public function get_multi_person_article_rentings_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('person_article_renting',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_article_renting = cls_table_factory::create_instance('person_article_renting');
				$person_article_renting->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $person_article_renting;
			}
		return $data;
	}

//changed 1
public function get_person_desease($db_manager,$application)
	{
		$result = $db_manager->get_records('person_desease',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person_desease = cls_table_factory::create_instance('person_desease');
		$row = $db_manager->fetch_row($result);
		$person_desease->fill($row);
		return $person_desease;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_person_deseases_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('person_desease',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_desease = cls_table_factory::create_instance('person_desease');
				$person_desease->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $person_desease;
				}
				else
				{
					$data[] = $person_desease;
				}
			}
		return $data;
	}

public function get_multi_person_deseases_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('person_desease',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_desease = cls_table_factory::create_instance('person_desease');
				$person_desease->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $person_desease;
			}
		return $data;
	}

//changed 1
public function get_person_search_values($db_manager,$application)
	{
		$result = $db_manager->get_records('person_search_values',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person_search_values = cls_table_factory::create_instance('person_search_values');
		$row = $db_manager->fetch_row($result);
		$person_search_values->fill($row);
		return $person_search_values;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_person_search_valuess_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('person_search_values',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_search_values = cls_table_factory::create_instance('person_search_values');
				$person_search_values->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $person_search_values;
				}
				else
				{
					$data[] = $person_search_values;
				}
			}
		return $data;
	}

public function get_multi_person_search_valuess_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('person_search_values',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_search_values = cls_table_factory::create_instance('person_search_values');
				$person_search_values->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $person_search_values;
			}
		return $data;
	}

//changed 1
public function get_person_state($db_manager,$application)
	{
		$result = $db_manager->get_records('person_state',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person_state = cls_table_factory::create_instance('person_state');
		$row = $db_manager->fetch_row($result);
		$person_state->fill($row);
		return $person_state;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_person_states_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('person_state',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_state = cls_table_factory::create_instance('person_state');
				$person_state->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $person_state;
				}
				else
				{
					$data[] = $person_state;
				}
			}
		return $data;
	}

public function get_multi_person_states_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('person_state',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_state = cls_table_factory::create_instance('person_state');
				$person_state->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $person_state;
			}
		return $data;
	}

//changed 1
public function get_prescription($db_manager,$application)
	{
		$result = $db_manager->get_records('prescription',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$prescription = cls_table_factory::create_instance('prescription');
		$row = $db_manager->fetch_row($result);
		$prescription->fill($row);
		return $prescription;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_prescriptions_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('prescription',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$prescription = cls_table_factory::create_instance('prescription');
				$prescription->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $prescription;
				}
				else
				{
					$data[] = $prescription;
				}
			}
		return $data;
	}

public function get_multi_prescriptions_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('prescription',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$prescription = cls_table_factory::create_instance('prescription');
				$prescription->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $prescription;
			}
		return $data;
	}

//changed 1
public function get_restperiod($db_manager,$application)
	{
		$result = $db_manager->get_records('restperiod',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$restperiod = cls_table_factory::create_instance('restperiod');
		$row = $db_manager->fetch_row($result);
		$restperiod->fill($row);
		return $restperiod;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_restperiods_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('restperiod',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$restperiod = cls_table_factory::create_instance('restperiod');
				$restperiod->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $restperiod;
				}
				else
				{
					$data[] = $restperiod;
				}
			}
		return $data;
	}

public function get_multi_restperiods_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('restperiod',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$restperiod = cls_table_factory::create_instance('restperiod');
				$restperiod->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $restperiod;
			}
		return $data;
	}

//changed 1
public function get_table_test($db_manager,$application)
	{
		$result = $db_manager->get_records('table_test',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$table_test = cls_table_factory::create_instance('table_test');
		$row = $db_manager->fetch_row($result);
		$table_test->fill($row);
		return $table_test;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_table_tests_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('table_test',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$table_test = cls_table_factory::create_instance('table_test');
				$table_test->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $table_test;
				}
				else
				{
					$data[] = $table_test;
				}
			}
		return $data;
	}

public function get_multi_table_tests_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$table_test = cls_table_factory::create_instance('table_test');
				$table_test->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $table_test;
			}
		return $data;
	}

//changed 1
public function get_therapy_plan($db_manager,$application)
	{
		$result = $db_manager->get_records('therapy_plan',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$therapy_plan = cls_table_factory::create_instance('therapy_plan');
		$row = $db_manager->fetch_row($result);
		$therapy_plan->fill($row);
		return $therapy_plan;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_therapy_plans_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('therapy_plan',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$therapy_plan = cls_table_factory::create_instance('therapy_plan');
				$therapy_plan->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $therapy_plan;
				}
				else
				{
					$data[] = $therapy_plan;
				}
			}
		return $data;
	}

public function get_multi_therapy_plans_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('therapy_plan',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$therapy_plan = cls_table_factory::create_instance('therapy_plan');
				$therapy_plan->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $therapy_plan;
			}
		return $data;
	}

//changed 1
public function get_article_list($db_manager,$application)
	{
		$result = $db_manager->get_records('article_list',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article_list = cls_table_factory::create_instance('article_list');
		$row = $db_manager->fetch_row($result);
		$article_list->fill($row);
		return $article_list;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_article_lists_by_person($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('article_list',$this->get_id(),'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_list = cls_table_factory::create_instance('article_list');
				$article_list->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $article_list;
				}
				else
				{
					$data[] = $article_list;
				}
			}
		return $data;
	}

public function get_multi_article_lists_by_person($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('article_list',$persons,'id_person');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_list = cls_table_factory::create_instance('article_list');
				$article_list->fill($row);
				if (!array_key_exists($data[$row['id_person']]))
				{
					$data[$row['id_person']] = array();
				}
				$data[$row['id_person']][] = $article_list;
			}
		return $data;
	}

//changed 1
public function get_data_help_by_author($db_manager,$application)
	{
		$result = $db_manager->get_records('data_help',$this->get_id(),'id_person_author');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data_help = cls_table_factory::create_instance('data_help');
		$row = $db_manager->fetch_row($result);
		$data_help->fill($row);
		return $data_help;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_data_helps_by_person_author($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_help',$this->get_id(),'id_person_author');
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

public function get_multi_data_helps_by_person_author($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$persons,'id_person_author');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_help = cls_table_factory::create_instance('data_help');
				$data_help->fill($row);
				if (!array_key_exists($data[$row['id_person_author']]))
				{
					$data[$row['id_person_author']] = array();
				}
				$data[$row['id_person_author']][] = $data_help;
			}
		return $data;
	}

//changed 1
public function get_transfer_by_employee($db_manager,$application)
	{
		$result = $db_manager->get_records('transfer',$this->get_id(),'id_person_employee');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$transfer = cls_table_factory::create_instance('transfer');
		$row = $db_manager->fetch_row($result);
		$transfer->fill($row);
		return $transfer;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_transfers_by_person_employee($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('transfer',$this->get_id(),'id_person_employee');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$transfer = cls_table_factory::create_instance('transfer');
				$transfer->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $transfer;
				}
				else
				{
					$data[] = $transfer;
				}
			}
		return $data;
	}

public function get_multi_transfers_by_person_employee($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('transfer',$persons,'id_person_employee');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$transfer = cls_table_factory::create_instance('transfer');
				$transfer->fill($row);
				if (!array_key_exists($data[$row['id_person_employee']]))
				{
					$data[$row['id_person_employee']] = array();
				}
				$data[$row['id_person_employee']][] = $transfer;
			}
		return $data;
	}

//changed 1
public function get_offer_by_employee($db_manager,$application)
	{
		$result = $db_manager->get_records('offer',$this->get_id(),'id_person_employee');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$offer = cls_table_factory::create_instance('offer');
		$row = $db_manager->fetch_row($result);
		$offer->fill($row);
		return $offer;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_offers_by_person_employee($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('offer',$this->get_id(),'id_person_employee');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer = cls_table_factory::create_instance('offer');
				$offer->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $offer;
				}
				else
				{
					$data[] = $offer;
				}
			}
		return $data;
	}

public function get_multi_offers_by_person_employee($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer',$persons,'id_person_employee');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer = cls_table_factory::create_instance('offer');
				$offer->fill($row);
				if (!array_key_exists($data[$row['id_person_employee']]))
				{
					$data[$row['id_person_employee']] = array();
				}
				$data[$row['id_person_employee']][] = $offer;
			}
		return $data;
	}

//changed 1
public function get_person_desease_by_employee($db_manager,$application)
	{
		$result = $db_manager->get_records('person_desease',$this->get_id(),'id_person_employee');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person_desease = cls_table_factory::create_instance('person_desease');
		$row = $db_manager->fetch_row($result);
		$person_desease->fill($row);
		return $person_desease;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_person_deseases_by_person_employee($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('person_desease',$this->get_id(),'id_person_employee');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_desease = cls_table_factory::create_instance('person_desease');
				$person_desease->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $person_desease;
				}
				else
				{
					$data[] = $person_desease;
				}
			}
		return $data;
	}

public function get_multi_person_deseases_by_person_employee($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('person_desease',$persons,'id_person_employee');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$person_desease = cls_table_factory::create_instance('person_desease');
				$person_desease->fill($row);
				if (!array_key_exists($data[$row['id_person_employee']]))
				{
					$data[$row['id_person_employee']] = array();
				}
				$data[$row['id_person_employee']][] = $person_desease;
			}
		return $data;
	}

//changed 1
public function get_invoice_by_employee($db_manager,$application)
	{
		$result = $db_manager->get_records('invoice',$this->get_id(),'id_person_employee');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$invoice = cls_table_factory::create_instance('invoice');
		$row = $db_manager->fetch_row($result);
		$invoice->fill($row);
		return $invoice;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_invoices_by_person_employee($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('invoice',$this->get_id(),'id_person_employee');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$invoice = cls_table_factory::create_instance('invoice');
				$invoice->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $invoice;
				}
				else
				{
					$data[] = $invoice;
				}
			}
		return $data;
	}

public function get_multi_invoices_by_person_employee($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('invoice',$persons,'id_person_employee');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$invoice = cls_table_factory::create_instance('invoice');
				$invoice->fill($row);
				if (!array_key_exists($data[$row['id_person_employee']]))
				{
					$data[$row['id_person_employee']] = array();
				}
				$data[$row['id_person_employee']][] = $invoice;
			}
		return $data;
	}

//changed 1
public function get_article_list_by_employee($db_manager,$application)
	{
		$result = $db_manager->get_records('article_list',$this->get_id(),'id_person_employee');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article_list = cls_table_factory::create_instance('article_list');
		$row = $db_manager->fetch_row($result);
		$article_list->fill($row);
		return $article_list;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_article_lists_by_person_employee($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('article_list',$this->get_id(),'id_person_employee');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_list = cls_table_factory::create_instance('article_list');
				$article_list->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $article_list;
				}
				else
				{
					$data[] = $article_list;
				}
			}
		return $data;
	}

public function get_multi_article_lists_by_person_employee($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('article_list',$persons,'id_person_employee');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_list = cls_table_factory::create_instance('article_list');
				$article_list->fill($row);
				if (!array_key_exists($data[$row['id_person_employee']]))
				{
					$data[$row['id_person_employee']] = array();
				}
				$data[$row['id_person_employee']][] = $article_list;
			}
		return $data;
	}

//changed 1
public function get_therapy_plan_by_employee_created($db_manager,$application)
	{
		$result = $db_manager->get_records('therapy_plan',$this->get_id(),'id_person_employee_created');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$therapy_plan = cls_table_factory::create_instance('therapy_plan');
		$row = $db_manager->fetch_row($result);
		$therapy_plan->fill($row);
		return $therapy_plan;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_therapy_plans_by_person_employee_created($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('therapy_plan',$this->get_id(),'id_person_employee_created');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$therapy_plan = cls_table_factory::create_instance('therapy_plan');
				$therapy_plan->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $therapy_plan;
				}
				else
				{
					$data[] = $therapy_plan;
				}
			}
		return $data;
	}

public function get_multi_therapy_plans_by_person_employee_created($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('therapy_plan',$persons,'id_person_employee_created');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$therapy_plan = cls_table_factory::create_instance('therapy_plan');
				$therapy_plan->fill($row);
				if (!array_key_exists($data[$row['id_person_employee_created']]))
				{
					$data[$row['id_person_employee_created']] = array();
				}
				$data[$row['id_person_employee_created']][] = $therapy_plan;
			}
		return $data;
	}

//changed 1
public function get_communication_event_by_employee_done($db_manager,$application)
	{
		$result = $db_manager->get_records('communication_event',$this->get_id(),'id_person_employee_done');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$communication_event = cls_table_factory::create_instance('communication_event');
		$row = $db_manager->fetch_row($result);
		$communication_event->fill($row);
		return $communication_event;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_communication_events_by_person_employee_done($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('communication_event',$this->get_id(),'id_person_employee_done');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$communication_event = cls_table_factory::create_instance('communication_event');
				$communication_event->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $communication_event;
				}
				else
				{
					$data[] = $communication_event;
				}
			}
		return $data;
	}

public function get_multi_communication_events_by_person_employee_done($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_event',$persons,'id_person_employee_done');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$communication_event = cls_table_factory::create_instance('communication_event');
				$communication_event->fill($row);
				if (!array_key_exists($data[$row['id_person_employee_done']]))
				{
					$data[$row['id_person_employee_done']] = array();
				}
				$data[$row['id_person_employee_done']][] = $communication_event;
			}
		return $data;
	}

//changed 1
public function get_article_person_rent_by_employee_issued($db_manager,$application)
	{
		$result = $db_manager->get_records('article_person_rent',$this->get_id(),'id_person_employee_issued');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article_person_rent = cls_table_factory::create_instance('article_person_rent');
		$row = $db_manager->fetch_row($result);
		$article_person_rent->fill($row);
		return $article_person_rent;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_article_person_rents_by_person_employee_issued($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('article_person_rent',$this->get_id(),'id_person_employee_issued');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_person_rent = cls_table_factory::create_instance('article_person_rent');
				$article_person_rent->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $article_person_rent;
				}
				else
				{
					$data[] = $article_person_rent;
				}
			}
		return $data;
	}

public function get_multi_article_person_rents_by_person_employee_issued($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('article_person_rent',$persons,'id_person_employee_issued');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_person_rent = cls_table_factory::create_instance('article_person_rent');
				$article_person_rent->fill($row);
				if (!array_key_exists($data[$row['id_person_employee_issued']]))
				{
					$data[$row['id_person_employee_issued']] = array();
				}
				$data[$row['id_person_employee_issued']][] = $article_person_rent;
			}
		return $data;
	}

//changed 1
public function get_swift_statement_line_posting_by_employee_linked($db_manager,$application)
	{
		$result = $db_manager->get_records('swift_statement_line_posting',$this->get_id(),'id_person_employee_linked');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$swift_statement_line_posting = cls_table_factory::create_instance('swift_statement_line_posting');
		$row = $db_manager->fetch_row($result);
		$swift_statement_line_posting->fill($row);
		return $swift_statement_line_posting;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_swift_statement_line_postings_by_person_employee_linked($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('swift_statement_line_posting',$this->get_id(),'id_person_employee_linked');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$swift_statement_line_posting = cls_table_factory::create_instance('swift_statement_line_posting');
				$swift_statement_line_posting->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $swift_statement_line_posting;
				}
				else
				{
					$data[] = $swift_statement_line_posting;
				}
			}
		return $data;
	}

public function get_multi_swift_statement_line_postings_by_person_employee_linked($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('swift_statement_line_posting',$persons,'id_person_employee_linked');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$swift_statement_line_posting = cls_table_factory::create_instance('swift_statement_line_posting');
				$swift_statement_line_posting->fill($row);
				if (!array_key_exists($data[$row['id_person_employee_linked']]))
				{
					$data[$row['id_person_employee_linked']] = array();
				}
				$data[$row['id_person_employee_linked']][] = $swift_statement_line_posting;
			}
		return $data;
	}

//changed 1
public function get_communication_event_by_employee_planned($db_manager,$application)
	{
		$result = $db_manager->get_records('communication_event',$this->get_id(),'id_person_employee_planned');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$communication_event = cls_table_factory::create_instance('communication_event');
		$row = $db_manager->fetch_row($result);
		$communication_event->fill($row);
		return $communication_event;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_communication_events_by_person_employee_planned($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('communication_event',$this->get_id(),'id_person_employee_planned');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$communication_event = cls_table_factory::create_instance('communication_event');
				$communication_event->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $communication_event;
				}
				else
				{
					$data[] = $communication_event;
				}
			}
		return $data;
	}

public function get_multi_communication_events_by_person_employee_planned($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_event',$persons,'id_person_employee_planned');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$communication_event = cls_table_factory::create_instance('communication_event');
				$communication_event->fill($row);
				if (!array_key_exists($data[$row['id_person_employee_planned']]))
				{
					$data[$row['id_person_employee_planned']] = array();
				}
				$data[$row['id_person_employee_planned']][] = $communication_event;
			}
		return $data;
	}

//changed 1
public function get_article_person_rent_by_employee_returned($db_manager,$application)
	{
		$result = $db_manager->get_records('article_person_rent',$this->get_id(),'id_person_employee_returned');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article_person_rent = cls_table_factory::create_instance('article_person_rent');
		$row = $db_manager->fetch_row($result);
		$article_person_rent->fill($row);
		return $article_person_rent;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_article_person_rents_by_person_employee_returned($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('article_person_rent',$this->get_id(),'id_person_employee_returned');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_person_rent = cls_table_factory::create_instance('article_person_rent');
				$article_person_rent->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $article_person_rent;
				}
				else
				{
					$data[] = $article_person_rent;
				}
			}
		return $data;
	}

public function get_multi_article_person_rents_by_person_employee_returned($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('article_person_rent',$persons,'id_person_employee_returned');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_person_rent = cls_table_factory::create_instance('article_person_rent');
				$article_person_rent->fill($row);
				if (!array_key_exists($data[$row['id_person_employee_returned']]))
				{
					$data[$row['id_person_employee_returned']] = array();
				}
				$data[$row['id_person_employee_returned']][] = $article_person_rent;
			}
		return $data;
	}

//changed 1
public function get_certificate_type_by_issuer($db_manager,$application)
	{
		$result = $db_manager->get_records('certificate_type',$this->get_id(),'id_person_issuer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$certificate_type = cls_table_factory::create_instance('certificate_type');
		$row = $db_manager->fetch_row($result);
		$certificate_type->fill($row);
		return $certificate_type;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_certificate_types_by_person_issuer($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('certificate_type',$this->get_id(),'id_person_issuer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$certificate_type = cls_table_factory::create_instance('certificate_type');
				$certificate_type->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $certificate_type;
				}
				else
				{
					$data[] = $certificate_type;
				}
			}
		return $data;
	}

public function get_multi_certificate_types_by_person_issuer($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('certificate_type',$persons,'id_person_issuer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$certificate_type = cls_table_factory::create_instance('certificate_type');
				$certificate_type->fill($row);
				if (!array_key_exists($data[$row['id_person_issuer']]))
				{
					$data[$row['id_person_issuer']] = array();
				}
				$data[$row['id_person_issuer']][] = $certificate_type;
			}
		return $data;
	}

//changed 1
public function get_location_by_laywer($db_manager,$application)
	{
		$result = $db_manager->get_records('location',$this->get_id(),'id_person_laywer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$location = cls_table_factory::create_instance('location');
		$row = $db_manager->fetch_row($result);
		$location->fill($row);
		return $location;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_locations_by_person_laywer($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('location',$this->get_id(),'id_person_laywer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$location = cls_table_factory::create_instance('location');
				$location->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $location;
				}
				else
				{
					$data[] = $location;
				}
			}
		return $data;
	}

public function get_multi_locations_by_person_laywer($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('location',$persons,'id_person_laywer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$location = cls_table_factory::create_instance('location');
				$location->fill($row);
				if (!array_key_exists($data[$row['id_person_laywer']]))
				{
					$data[$row['id_person_laywer']] = array();
				}
				$data[$row['id_person_laywer']][] = $location;
			}
		return $data;
	}

//changed 1
public function get_supplier_data_by_manufactorer($db_manager,$application)
	{
		$result = $db_manager->get_records('supplier_data',$this->get_id(),'id_person_manufactorer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$supplier_data = cls_table_factory::create_instance('supplier_data');
		$row = $db_manager->fetch_row($result);
		$supplier_data->fill($row);
		return $supplier_data;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_supplier_datas_by_person_manufactorer($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('supplier_data',$this->get_id(),'id_person_manufactorer');
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

public function get_multi_supplier_datas_by_person_manufactorer($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$persons,'id_person_manufactorer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$supplier_data = cls_table_factory::create_instance('supplier_data');
				$supplier_data->fill($row);
				if (!array_key_exists($data[$row['id_person_manufactorer']]))
				{
					$data[$row['id_person_manufactorer']] = array();
				}
				$data[$row['id_person_manufactorer']][] = $supplier_data;
			}
		return $data;
	}

//changed 1
public function get_contract_by_promoter($db_manager,$application)
	{
		$result = $db_manager->get_records('contract',$this->get_id(),'id_person_promoter');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$contract = cls_table_factory::create_instance('contract');
		$row = $db_manager->fetch_row($result);
		$contract->fill($row);
		return $contract;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_contracts_by_person_promoter($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('contract',$this->get_id(),'id_person_promoter');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract = cls_table_factory::create_instance('contract');
				$contract->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $contract;
				}
				else
				{
					$data[] = $contract;
				}
			}
		return $data;
	}

public function get_multi_contracts_by_person_promoter($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('contract',$persons,'id_person_promoter');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract = cls_table_factory::create_instance('contract');
				$contract->fill($row);
				if (!array_key_exists($data[$row['id_person_promoter']]))
				{
					$data[$row['id_person_promoter']] = array();
				}
				$data[$row['id_person_promoter']][] = $contract;
			}
		return $data;
	}

//changed 1
public function get_location_by_revenue_department($db_manager,$application)
	{
		$result = $db_manager->get_records('location',$this->get_id(),'id_person_revenue_department');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$location = cls_table_factory::create_instance('location');
		$row = $db_manager->fetch_row($result);
		$location->fill($row);
		return $location;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_locations_by_person_revenue_department($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('location',$this->get_id(),'id_person_revenue_department');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$location = cls_table_factory::create_instance('location');
				$location->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $location;
				}
				else
				{
					$data[] = $location;
				}
			}
		return $data;
	}

public function get_multi_locations_by_person_revenue_department($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('location',$persons,'id_person_revenue_department');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$location = cls_table_factory::create_instance('location');
				$location->fill($row);
				if (!array_key_exists($data[$row['id_person_revenue_department']]))
				{
					$data[$row['id_person_revenue_department']] = array();
				}
				$data[$row['id_person_revenue_department']][] = $location;
			}
		return $data;
	}

//changed 1
public function get_contract_by_signer($db_manager,$application)
	{
		$result = $db_manager->get_records('contract',$this->get_id(),'id_person_signer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$contract = cls_table_factory::create_instance('contract');
		$row = $db_manager->fetch_row($result);
		$contract->fill($row);
		return $contract;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_contracts_by_person_signer($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('contract',$this->get_id(),'id_person_signer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract = cls_table_factory::create_instance('contract');
				$contract->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $contract;
				}
				else
				{
					$data[] = $contract;
				}
			}
		return $data;
	}

public function get_multi_contracts_by_person_signer($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('contract',$persons,'id_person_signer');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract = cls_table_factory::create_instance('contract');
				$contract->fill($row);
				if (!array_key_exists($data[$row['id_person_signer']]))
				{
					$data[$row['id_person_signer']] = array();
				}
				$data[$row['id_person_signer']][] = $contract;
			}
		return $data;
	}

//changed 1
public function get_data_property_type_by_states($db_manager,$application)
	{
		$result = $db_manager->get_records('data_property_type',$this->get_id(),'id_person_states');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data_property_type = cls_table_factory::create_instance('data_property_type');
		$row = $db_manager->fetch_row($result);
		$data_property_type->fill($row);
		return $data_property_type;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_data_property_types_by_person_states($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_property_type',$this->get_id(),'id_person_states');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property_type = cls_table_factory::create_instance('data_property_type');
				$data_property_type->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_property_type;
				}
				else
				{
					$data[] = $data_property_type;
				}
			}
		return $data;
	}

public function get_multi_data_property_types_by_person_states($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property_type',$persons,'id_person_states');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property_type = cls_table_factory::create_instance('data_property_type');
				$data_property_type->fill($row);
				if (!array_key_exists($data[$row['id_person_states']]))
				{
					$data[$row['id_person_states']] = array();
				}
				$data[$row['id_person_states']][] = $data_property_type;
			}
		return $data;
	}

//changed 1
public function get_transfer_by_storno($db_manager,$application)
	{
		$result = $db_manager->get_records('transfer',$this->get_id(),'id_person_storno');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$transfer = cls_table_factory::create_instance('transfer');
		$row = $db_manager->fetch_row($result);
		$transfer->fill($row);
		return $transfer;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_transfers_by_person_storno($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('transfer',$this->get_id(),'id_person_storno');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$transfer = cls_table_factory::create_instance('transfer');
				$transfer->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $transfer;
				}
				else
				{
					$data[] = $transfer;
				}
			}
		return $data;
	}

public function get_multi_transfers_by_person_storno($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('transfer',$persons,'id_person_storno');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$transfer = cls_table_factory::create_instance('transfer');
				$transfer->fill($row);
				if (!array_key_exists($data[$row['id_person_storno']]))
				{
					$data[$row['id_person_storno']] = array();
				}
				$data[$row['id_person_storno']][] = $transfer;
			}
		return $data;
	}

//changed 1
public function get_supplier_data_by_supplier($db_manager,$application)
	{
		$result = $db_manager->get_records('supplier_data',$this->get_id(),'id_person_supplier');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$supplier_data = cls_table_factory::create_instance('supplier_data');
		$row = $db_manager->fetch_row($result);
		$supplier_data->fill($row);
		return $supplier_data;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_supplier_datas_by_person_supplier($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('supplier_data',$this->get_id(),'id_person_supplier');
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

public function get_multi_supplier_datas_by_person_supplier($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$persons,'id_person_supplier');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$supplier_data = cls_table_factory::create_instance('supplier_data');
				$supplier_data->fill($row);
				if (!array_key_exists($data[$row['id_person_supplier']]))
				{
					$data[$row['id_person_supplier']] = array();
				}
				$data[$row['id_person_supplier']][] = $supplier_data;
			}
		return $data;
	}

//changed 1
public function get_article_supplier_by_supplier($db_manager,$application)
	{
		$result = $db_manager->get_records('article_supplier',$this->get_id(),'id_person_supplier');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article_supplier = cls_table_factory::create_instance('article_supplier');
		$row = $db_manager->fetch_row($result);
		$article_supplier->fill($row);
		return $article_supplier;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_article_suppliers_by_person_supplier($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('article_supplier',$this->get_id(),'id_person_supplier');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_supplier = cls_table_factory::create_instance('article_supplier');
				$article_supplier->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $article_supplier;
				}
				else
				{
					$data[] = $article_supplier;
				}
			}
		return $data;
	}

public function get_multi_article_suppliers_by_person_supplier($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('article_supplier',$persons,'id_person_supplier');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_supplier = cls_table_factory::create_instance('article_supplier');
				$article_supplier->fill($row);
				if (!array_key_exists($data[$row['id_person_supplier']]))
				{
					$data[$row['id_person_supplier']] = array();
				}
				$data[$row['id_person_supplier']][] = $article_supplier;
			}
		return $data;
	}

//changed 1
public function get_location_by_taxadvisor($db_manager,$application)
	{
		$result = $db_manager->get_records('location',$this->get_id(),'id_person_taxadvisor');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$location = cls_table_factory::create_instance('location');
		$row = $db_manager->fetch_row($result);
		$location->fill($row);
		return $location;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_locations_by_person_taxadvisor($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('location',$this->get_id(),'id_person_taxadvisor');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$location = cls_table_factory::create_instance('location');
				$location->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $location;
				}
				else
				{
					$data[] = $location;
				}
			}
		return $data;
	}

public function get_multi_locations_by_person_taxadvisor($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('location',$persons,'id_person_taxadvisor');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$location = cls_table_factory::create_instance('location');
				$location->fill($row);
				if (!array_key_exists($data[$row['id_person_taxadvisor']]))
				{
					$data[$row['id_person_taxadvisor']] = array();
				}
				$data[$row['id_person_taxadvisor']][] = $location;
			}
		return $data;
	}

//changed 1
public function get_data_change_by_user($db_manager,$application)
	{
		$result = $db_manager->get_records('data_change',$this->get_id(),'id_person_user');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data_change = cls_table_factory::create_instance('data_change');
		$row = $db_manager->fetch_row($result);
		$data_change->fill($row);
		return $data_change;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_data_changes_by_person_user($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_change',$this->get_id(),'id_person_user');
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

public function get_multi_data_changes_by_person_user($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$persons,'id_person_user');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_change = cls_table_factory::create_instance('data_change');
				$data_change->fill($row);
				if (!array_key_exists($data[$row['id_person_user']]))
				{
					$data[$row['id_person_user']] = array();
				}
				$data[$row['id_person_user']][] = $data_change;
			}
		return $data;
	}

public function get_table_test_data($persons,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$persons,'id_data');
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

public function get_communication_reason($persons,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$persons,'id_data');
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

public function get_data_change($persons,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$persons,'id_data');
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

public function get_data_help($persons,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$persons,'id_data');
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

public function get_data_location($persons,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$persons,'id_data');
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

public function get_data_posting($persons,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$persons,'id_data');
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

public function get_multi_offer_event($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$persons,'id_data');
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

public function get_supplier_data($persons,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$persons,'id_data');
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

public function get_address($persons,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$persons,'id_data');
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

public function get_data_property($persons,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$persons,'id_data');
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

public function get_data_translation($persons,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$persons,'id_data');
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

public function get_dms($persons,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$persons,'id_data');
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

public function get_data_relation_id_data1($persons,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$persons,'id_data1');
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

public function get_data_relation_id_data2($persons,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$persons,'id_data2');
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

public function get_data_property_id_link_data($persons,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($persons,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$persons,'id_link_data');
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
