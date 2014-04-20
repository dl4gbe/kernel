<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_contract extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_person = null;
private $p_id_person_original = null;
private $p_id_person_signer = null;
private $p_id_person_signer_original = null;
private $p_id_campaign = null;
private $p_id_campaign_original = null;
private $p_id_person_promoter = null;
private $p_id_person_promoter_original = null;
private $p_id_bank_account = null;
private $p_id_bank_account_original = null;
private $p_id_contract_template = null;
private $p_id_contract_template_original = null;
private $p_contractstart = null;
private $p_contractstart_original = null;
private $p_signeddate = null;
private $p_signeddate_original = null;
private $p_accessdate = null;
private $p_accessdate_original = null;
private $p_contractno = null;
private $p_contractno_original = null;

private $p_id_person_is_dirty = false;
private $p_id_person_signer_is_dirty = false;
private $p_id_campaign_is_dirty = false;
private $p_id_person_promoter_is_dirty = false;
private $p_id_bank_account_is_dirty = false;
private $p_id_contract_template_is_dirty = false;
private $p_contractstart_is_dirty = false;
private $p_signeddate_is_dirty = false;
private $p_accessdate_is_dirty = false;
private $p_contractno_is_dirty = false;

public function _get_table_name()
{
	return 'contract';
}

public function get_table_fields()
{
	return array('id','id_person','id_person_signer','id_campaign','id_person_promoter','id_bank_account','id_contract_template','contractstart','signeddate','accessdate','contractno');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'contract.id' . $delimiter . ',id_person as ' . $delimiter . 'contract.id_person' . $delimiter . ',id_person_signer as ' . $delimiter . 'contract.id_person_signer' . $delimiter . ',id_campaign as ' . $delimiter . 'contract.id_campaign' . $delimiter . ',id_person_promoter as ' . $delimiter . 'contract.id_person_promoter' . $delimiter . ',id_bank_account as ' . $delimiter . 'contract.id_bank_account' . $delimiter . ',id_contract_template as ' . $delimiter . 'contract.id_contract_template' . $delimiter . ',contractstart as ' . $delimiter . 'contract.contractstart' . $delimiter . ',signeddate as ' . $delimiter . 'contract.signeddate' . $delimiter . ',accessdate as ' . $delimiter . 'contract.accessdate' . $delimiter . ',contractno as ' . $delimiter . 'contract.contractno' . $delimiter . ' from contract';
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


public function get_id_person_signer()
{
	return $this->p_id_person_signer;
}

public function get_id_person_signer_original()
{
	return $this->p_id_person_signer_original;
}

public function set_id_person_signer($value)
{
	if ($this->p_id_person_signer === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_signer_is_dirty = true;
	$this->p_id_person_signer = $value;
}

public function set_id_person_signer_original($value)
{
	$this->p_id_person_signer_original = $value;
}

public function get_id_person_signer_is_dirty()
{
	return $this->p_id_person_signer_is_dirty;
}


public function get_id_campaign()
{
	return $this->p_id_campaign;
}

public function get_id_campaign_original()
{
	return $this->p_id_campaign_original;
}

public function set_id_campaign($value)
{
	if ($this->p_id_campaign === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_campaign_is_dirty = true;
	$this->p_id_campaign = $value;
}

public function set_id_campaign_original($value)
{
	$this->p_id_campaign_original = $value;
}

public function get_id_campaign_is_dirty()
{
	return $this->p_id_campaign_is_dirty;
}


public function get_id_person_promoter()
{
	return $this->p_id_person_promoter;
}

public function get_id_person_promoter_original()
{
	return $this->p_id_person_promoter_original;
}

public function set_id_person_promoter($value)
{
	if ($this->p_id_person_promoter === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_promoter_is_dirty = true;
	$this->p_id_person_promoter = $value;
}

public function set_id_person_promoter_original($value)
{
	$this->p_id_person_promoter_original = $value;
}

public function get_id_person_promoter_is_dirty()
{
	return $this->p_id_person_promoter_is_dirty;
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


public function get_id_contract_template()
{
	return $this->p_id_contract_template;
}

public function get_id_contract_template_original()
{
	return $this->p_id_contract_template_original;
}

public function set_id_contract_template($value)
{
	if ($this->p_id_contract_template === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_contract_template_is_dirty = true;
	$this->p_id_contract_template = $value;
}

public function set_id_contract_template_original($value)
{
	$this->p_id_contract_template_original = $value;
}

public function get_id_contract_template_is_dirty()
{
	return $this->p_id_contract_template_is_dirty;
}


public function get_contractstart()
{
	return $this->p_contractstart;
}

public function get_contractstart_original()
{
	return $this->p_contractstart_original;
}

public function set_contractstart($value)
{
	if ($this->p_contractstart === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_contractstart_is_dirty = true;
	$this->p_contractstart = $value;
}

public function set_contractstart_original($value)
{
	$this->p_contractstart_original = $value;
}

public function get_contractstart_is_dirty()
{
	return $this->p_contractstart_is_dirty;
}


public function get_signeddate()
{
	return $this->p_signeddate;
}

public function get_signeddate_original()
{
	return $this->p_signeddate_original;
}

public function set_signeddate($value)
{
	if ($this->p_signeddate === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_signeddate_is_dirty = true;
	$this->p_signeddate = $value;
}

public function set_signeddate_original($value)
{
	$this->p_signeddate_original = $value;
}

public function get_signeddate_is_dirty()
{
	return $this->p_signeddate_is_dirty;
}


public function get_accessdate()
{
	return $this->p_accessdate;
}

public function get_accessdate_original()
{
	return $this->p_accessdate_original;
}

public function set_accessdate($value)
{
	if ($this->p_accessdate === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_accessdate_is_dirty = true;
	$this->p_accessdate = $value;
}

public function set_accessdate_original($value)
{
	$this->p_accessdate_original = $value;
}

public function get_accessdate_is_dirty()
{
	return $this->p_accessdate_is_dirty;
}


public function get_contractno()
{
	return $this->p_contractno;
}

public function get_contractno_original()
{
	return $this->p_contractno_original;
}

public function set_contractno($value)
{
	if ($this->p_contractno === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_contractno_is_dirty = true;
	$this->p_contractno = $value;
}

public function set_contractno_original($value)
{
	$this->p_contractno_original = $value;
}

public function get_contractno_is_dirty()
{
	return $this->p_contractno_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_id_person_is_dirty = false;
	$this->p_id_person_signer_is_dirty = false;
	$this->p_id_campaign_is_dirty = false;
	$this->p_id_person_promoter_is_dirty = false;
	$this->p_id_bank_account_is_dirty = false;
	$this->p_id_contract_template_is_dirty = false;
	$this->p_contractstart_is_dirty = false;
	$this->p_signeddate_is_dirty = false;
	$this->p_accessdate_is_dirty = false;
	$this->p_contractno_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_person = $this->p_id_person_original;
		$this->p_id_person_signer = $this->p_id_person_signer_original;
		$this->p_id_campaign = $this->p_id_campaign_original;
		$this->p_id_person_promoter = $this->p_id_person_promoter_original;
		$this->p_id_bank_account = $this->p_id_bank_account_original;
		$this->p_id_contract_template = $this->p_id_contract_template_original;
		$this->p_contractstart = $this->p_contractstart_original;
		$this->p_signeddate = $this->p_signeddate_original;
		$this->p_accessdate = $this->p_accessdate_original;
		$this->p_contractno = $this->p_contractno_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "contract.id":
					$this->set_id($val);
					break;
				case "contract.id_person":
					$this->set_id_person($val);
					$this->set_id_person_original($val);
					break;
				case "contract.id_person_signer":
					$this->set_id_person_signer($val);
					$this->set_id_person_signer_original($val);
					break;
				case "contract.id_campaign":
					$this->set_id_campaign($val);
					$this->set_id_campaign_original($val);
					break;
				case "contract.id_person_promoter":
					$this->set_id_person_promoter($val);
					$this->set_id_person_promoter_original($val);
					break;
				case "contract.id_bank_account":
					$this->set_id_bank_account($val);
					$this->set_id_bank_account_original($val);
					break;
				case "contract.id_contract_template":
					$this->set_id_contract_template($val);
					$this->set_id_contract_template_original($val);
					break;
				case "contract.contractstart":
					$this->set_contractstart($val);
					$this->set_contractstart_original($val);
					break;
				case "contract.signeddate":
					$this->set_signeddate($val);
					$this->set_signeddate_original($val);
					break;
				case "contract.accessdate":
					$this->set_accessdate($val);
					$this->set_accessdate_original($val);
					break;
				case "contract.contractno":
					$this->set_contractno($val);
					$this->set_contractno_original($val);
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
		$contract = cls_table_factory::create_instance('contract');
		$row = $db_manager->fetch_row($result);
		$contract->fill($row);
		return $contract;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_contract.php');
		return cls_save_contract::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_contract.php');
		return cls_save_contract::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_contracts($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('contract',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('contract',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract = cls_table_factory::create_instance('contract');
				$contract->fill($row);
				$data[] = $contract;
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

function get_campaign($db_manager,$application)
	{
		$result = $db_manager->get_records('campaign',$this->get_id_campaign());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$campaign = cls_table_factory::create_instance('campaign');
		$row = $db_manager->fetch_row($result);
		$campaign->fill($row);
		return $campaign;
	}

function get_contract_template($db_manager,$application)
	{
		$result = $db_manager->get_records('contract_template',$this->get_id_contract_template());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$contract_template = cls_table_factory::create_instance('contract_template');
		$row = $db_manager->fetch_row($result);
		$contract_template->fill($row);
		return $contract_template;
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

function get_person_promoter($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person_promoter());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

function get_person_signer($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person_signer());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

//changed 1
public function get_contract_pos($db_manager,$application)
	{
		$result = $db_manager->get_records('contract_pos',$this->get_id(),'id_contract');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$contract_pos = cls_table_factory::create_instance('contract_pos');
		$row = $db_manager->fetch_row($result);
		$contract_pos->fill($row);
		return $contract_pos;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_contract_poss_by_contract($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('contract_pos',$this->get_id(),'id_contract');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_pos = cls_table_factory::create_instance('contract_pos');
				$contract_pos->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $contract_pos;
				}
				else
				{
					$data[] = $contract_pos;
				}
			}
		return $data;
	}

public function get_multi_contract_poss_by_contract($contracts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('contract_pos',$contracts,'id_contract');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_pos = cls_table_factory::create_instance('contract_pos');
				$contract_pos->fill($row);
				if (!array_key_exists($data[$row['id_contract']]))
				{
					$data[$row['id_contract']] = array();
				}
				$data[$row['id_contract']][] = $contract_pos;
			}
		return $data;
	}

//changed 1
public function get_posting_header($db_manager,$application)
	{
		$result = $db_manager->get_records('posting_header',$this->get_id(),'id_contract');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$posting_header = cls_table_factory::create_instance('posting_header');
		$row = $db_manager->fetch_row($result);
		$posting_header->fill($row);
		return $posting_header;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_posting_headers_by_contract($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('posting_header',$this->get_id(),'id_contract');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$posting_header = cls_table_factory::create_instance('posting_header');
				$posting_header->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $posting_header;
				}
				else
				{
					$data[] = $posting_header;
				}
			}
		return $data;
	}

public function get_multi_posting_headers_by_contract($contracts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('posting_header',$contracts,'id_contract');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$posting_header = cls_table_factory::create_instance('posting_header');
				$posting_header->fill($row);
				if (!array_key_exists($data[$row['id_contract']]))
				{
					$data[$row['id_contract']] = array();
				}
				$data[$row['id_contract']][] = $posting_header;
			}
		return $data;
	}

//changed 1
public function get_restperiod($db_manager,$application)
	{
		$result = $db_manager->get_records('restperiod',$this->get_id(),'id_contract');
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
public function get_restperiods_by_contract($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('restperiod',$this->get_id(),'id_contract');
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

public function get_multi_restperiods_by_contract($contracts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('restperiod',$contracts,'id_contract');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$restperiod = cls_table_factory::create_instance('restperiod');
				$restperiod->fill($row);
				if (!array_key_exists($data[$row['id_contract']]))
				{
					$data[$row['id_contract']] = array();
				}
				$data[$row['id_contract']][] = $restperiod;
			}
		return $data;
	}

public function get_address($contracts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($contracts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$contracts,'id_data');
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

public function get_communication_reason($contracts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($contracts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$contracts,'id_data');
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

public function get_data_change($contracts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($contracts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$contracts,'id_data');
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

public function get_data_help($contracts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($contracts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$contracts,'id_data');
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

public function get_data_location($contracts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($contracts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$contracts,'id_data');
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

public function get_data_posting($contracts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($contracts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$contracts,'id_data');
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

public function get_data_property($contracts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($contracts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$contracts,'id_data');
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

public function get_offer_event($contracts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($contracts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$contracts,'id_data');
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

public function get_supplier_data($contracts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($contracts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$contracts,'id_data');
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

public function get_table_test_data($contracts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($contracts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$contracts,'id_data');
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

public function get_data_translation($contracts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($contracts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$contracts,'id_data');
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

public function get_dms($contracts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($contracts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$contracts,'id_data');
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

public function get_data_relation_id_data1($contracts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($contracts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$contracts,'id_data1');
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

public function get_data_relation_id_data2($contracts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($contracts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$contracts,'id_data2');
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

public function get_data_property_id_link_data($contracts,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($contracts,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$contracts,'id_link_data');
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
