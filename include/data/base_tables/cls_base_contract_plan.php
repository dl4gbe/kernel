<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_contract_plan extends cls_datatable_base
{
private static $p_cmmon;
private $p_paymenttype = null;
private $p_paymenttype_original = null;
private $p_id_contract_pos = null;
private $p_id_contract_pos_original = null;
private $p_type = null;
private $p_type_original = null;
private $p_id_posting_header = null;
private $p_id_posting_header_original = null;
private $p_duedate = null;
private $p_duedate_original = null;
private $p_amount = null;
private $p_amount_original = null;
private $p_datetil = null;
private $p_datetil_original = null;
private $p_datefrom = null;
private $p_datefrom_original = null;

private $p_paymenttype_is_dirty = false;
private $p_id_contract_pos_is_dirty = false;
private $p_type_is_dirty = false;
private $p_id_posting_header_is_dirty = false;
private $p_duedate_is_dirty = false;
private $p_amount_is_dirty = false;
private $p_datetil_is_dirty = false;
private $p_datefrom_is_dirty = false;

public function _get_table_name()
{
	return 'contract_plan';
}

public function get_table_fields()
{
	return array('paymenttype','id_contract_pos','type','id_posting_header','duedate','amount','datetil','datefrom','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select paymenttype as ' . $delimiter . 'contract_plan.paymenttype' . $delimiter . ',id_contract_pos as ' . $delimiter . 'contract_plan.id_contract_pos' . $delimiter . ',type as ' . $delimiter . 'contract_plan.type' . $delimiter . ',id_posting_header as ' . $delimiter . 'contract_plan.id_posting_header' . $delimiter . ',duedate as ' . $delimiter . 'contract_plan.duedate' . $delimiter . ',amount as ' . $delimiter . 'contract_plan.amount' . $delimiter . ',datetil as ' . $delimiter . 'contract_plan.datetil' . $delimiter . ',datefrom as ' . $delimiter . 'contract_plan.datefrom' . $delimiter . ',id as ' . $delimiter . 'contract_plan.id' . $delimiter . ' from contract_plan';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
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


public function get_id_contract_pos()
{
	return $this->p_id_contract_pos;
}

public function get_id_contract_pos_original()
{
	return $this->p_id_contract_pos_original;
}

public function set_id_contract_pos($value)
{
	if ($this->p_id_contract_pos === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_contract_pos_is_dirty = true;
	$this->p_id_contract_pos = $value;
}

public function set_id_contract_pos_original($value)
{
	$this->p_id_contract_pos_original = $value;
}

public function get_id_contract_pos_is_dirty()
{
	return $this->p_id_contract_pos_is_dirty;
}


public function get_type()
{
	return $this->p_type;
}

public function get_type_original()
{
	return $this->p_type_original;
}

public function set_type($value)
{
	if ($this->p_type === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_type_is_dirty = true;
	$this->p_type = $value;
}

public function set_type_original($value)
{
	$this->p_type_original = $value;
}

public function get_type_is_dirty()
{
	return $this->p_type_is_dirty;
}


public function get_id_posting_header()
{
	return $this->p_id_posting_header;
}

public function get_id_posting_header_original()
{
	return $this->p_id_posting_header_original;
}

public function set_id_posting_header($value)
{
	if ($this->p_id_posting_header === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_posting_header_is_dirty = true;
	$this->p_id_posting_header = $value;
}

public function set_id_posting_header_original($value)
{
	$this->p_id_posting_header_original = $value;
}

public function get_id_posting_header_is_dirty()
{
	return $this->p_id_posting_header_is_dirty;
}


public function get_duedate()
{
	return $this->p_duedate;
}

public function get_duedate_original()
{
	return $this->p_duedate_original;
}

public function set_duedate($value)
{
	if ($this->p_duedate === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_duedate_is_dirty = true;
	$this->p_duedate = $value;
}

public function set_duedate_original($value)
{
	$this->p_duedate_original = $value;
}

public function get_duedate_is_dirty()
{
	return $this->p_duedate_is_dirty;
}


public function get_amount()
{
	return $this->p_amount;
}

public function get_amount_original()
{
	return $this->p_amount_original;
}

public function set_amount($value)
{
	if ($this->p_amount === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_amount_is_dirty = true;
	$this->p_amount = $value;
}

public function set_amount_original($value)
{
	$this->p_amount_original = $value;
}

public function get_amount_is_dirty()
{
	return $this->p_amount_is_dirty;
}


public function get_datetil()
{
	return $this->p_datetil;
}

public function get_datetil_original()
{
	return $this->p_datetil_original;
}

public function set_datetil($value)
{
	if ($this->p_datetil === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_datetil_is_dirty = true;
	$this->p_datetil = $value;
}

public function set_datetil_original($value)
{
	$this->p_datetil_original = $value;
}

public function get_datetil_is_dirty()
{
	return $this->p_datetil_is_dirty;
}


public function get_datefrom()
{
	return $this->p_datefrom;
}

public function get_datefrom_original()
{
	return $this->p_datefrom_original;
}

public function set_datefrom($value)
{
	if ($this->p_datefrom === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_datefrom_is_dirty = true;
	$this->p_datefrom = $value;
}

public function set_datefrom_original($value)
{
	$this->p_datefrom_original = $value;
}

public function get_datefrom_is_dirty()
{
	return $this->p_datefrom_is_dirty;
}



public function reset_dirty($reset_values = false)
{
	$this->p_paymenttype_is_dirty = false;
	$this->p_id_contract_pos_is_dirty = false;
	$this->p_type_is_dirty = false;
	$this->p_id_posting_header_is_dirty = false;
	$this->p_duedate_is_dirty = false;
	$this->p_amount_is_dirty = false;
	$this->p_datetil_is_dirty = false;
	$this->p_datefrom_is_dirty = false;
	if ($reset_values)
	{
		$this->p_paymenttype = $this->p_paymenttype_original;
		$this->p_id_contract_pos = $this->p_id_contract_pos_original;
		$this->p_type = $this->p_type_original;
		$this->p_id_posting_header = $this->p_id_posting_header_original;
		$this->p_duedate = $this->p_duedate_original;
		$this->p_amount = $this->p_amount_original;
		$this->p_datetil = $this->p_datetil_original;
		$this->p_datefrom = $this->p_datefrom_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "contract_plan.paymenttype":
					$this->set_paymenttype($val);
					$this->set_paymenttype_original($val);
					break;
				case "contract_plan.id_contract_pos":
					$this->set_id_contract_pos($val);
					$this->set_id_contract_pos_original($val);
					break;
				case "contract_plan.type":
					$this->set_type($val);
					$this->set_type_original($val);
					break;
				case "contract_plan.id_posting_header":
					$this->set_id_posting_header($val);
					$this->set_id_posting_header_original($val);
					break;
				case "contract_plan.duedate":
					$this->set_duedate($val);
					$this->set_duedate_original($val);
					break;
				case "contract_plan.amount":
					$this->set_amount($val);
					$this->set_amount_original($val);
					break;
				case "contract_plan.datetil":
					$this->set_datetil($val);
					$this->set_datetil_original($val);
					break;
				case "contract_plan.datefrom":
					$this->set_datefrom($val);
					$this->set_datefrom_original($val);
					break;
				case "contract_plan.id":
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
		$contract_plan = cls_table_factory::create_instance('contract_plan');
		$row = $db_manager->fetch_row($result);
		$contract_plan->fill($row);
		return $contract_plan;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_contract_plan.php');
		return cls_save_contract_plan::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_contract_plan.php');
		return cls_save_contract_plan::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_contract_plans($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('contract_plan',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('contract_plan',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_plan = cls_table_factory::create_instance('contract_plan');
				$contract_plan->fill($row);
				$data[] = $contract_plan;
			}
		return $data;
	}

function get_contract_pos($db_manager,$application)
	{
		$result = $db_manager->get_records('contract_pos',$this->get_id_contract_pos());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$contract_pos = cls_table_factory::create_instance('contract_pos');
		$row = $db_manager->fetch_row($result);
		$contract_pos->fill($row);
		return $contract_pos;
	}

function get_posting_header($db_manager,$application)
	{
		$result = $db_manager->get_records('posting_header',$this->get_id_posting_header());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$posting_header = cls_table_factory::create_instance('posting_header');
		$row = $db_manager->fetch_row($result);
		$posting_header->fill($row);
		return $posting_header;
	}

public function get_table_test_data($contract_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($contract_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$contract_plans,'id_data');
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

public function get_communication_reason($contract_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($contract_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$contract_plans,'id_data');
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

public function get_data_change($contract_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($contract_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$contract_plans,'id_data');
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

public function get_data_help($contract_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($contract_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$contract_plans,'id_data');
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

public function get_data_location($contract_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($contract_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$contract_plans,'id_data');
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

public function get_data_posting($contract_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($contract_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$contract_plans,'id_data');
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

public function get_offer_event($contract_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($contract_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$contract_plans,'id_data');
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

public function get_supplier_data($contract_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($contract_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$contract_plans,'id_data');
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

public function get_address($contract_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($contract_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$contract_plans,'id_data');
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

public function get_data_property($contract_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($contract_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$contract_plans,'id_data');
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

public function get_data_translation($contract_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($contract_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$contract_plans,'id_data');
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

public function get_dms($contract_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($contract_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$contract_plans,'id_data');
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

public function get_data_relation_id_data1($contract_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($contract_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$contract_plans,'id_data1');
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

public function get_data_relation_id_data2($contract_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($contract_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$contract_plans,'id_data2');
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

public function get_data_property_id_link_data($contract_plans,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($contract_plans,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$contract_plans,'id_link_data');
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
