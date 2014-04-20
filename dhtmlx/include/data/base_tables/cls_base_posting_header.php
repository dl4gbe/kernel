<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_posting_header extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_posting_header_main_id = null;
private $p_id_posting_header_main_id_original = null;
private $p_remark = null;
private $p_remark_original = null;
private $p_id_offer_event = null;
private $p_id_offer_event_original = null;
private $p_period = null;
private $p_period_original = null;
private $p_systemremark = null;
private $p_systemremark_original = null;
private $p_duedate = null;
private $p_duedate_original = null;
private $p_paymenttype = null;
private $p_paymenttype_original = null;
private $p_id_contract = null;
private $p_id_contract_original = null;
private $p_id_contract_pos = null;
private $p_id_contract_pos_original = null;

private $p_id_posting_header_main_id_is_dirty = false;
private $p_remark_is_dirty = false;
private $p_id_offer_event_is_dirty = false;
private $p_period_is_dirty = false;
private $p_systemremark_is_dirty = false;
private $p_duedate_is_dirty = false;
private $p_paymenttype_is_dirty = false;
private $p_id_contract_is_dirty = false;
private $p_id_contract_pos_is_dirty = false;

public function _get_table_name()
{
	return 'posting_header';
}

public function get_table_fields()
{
	return array('id','id_posting_header_main_id','remark','id_offer_event','period','systemremark','duedate','paymenttype','id_contract','id_contract_pos');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'posting_header.id' . $delimiter . ',id_posting_header_main_id as ' . $delimiter . 'posting_header.id_posting_header_main_id' . $delimiter . ',remark as ' . $delimiter . 'posting_header.remark' . $delimiter . ',id_offer_event as ' . $delimiter . 'posting_header.id_offer_event' . $delimiter . ',period as ' . $delimiter . 'posting_header.period' . $delimiter . ',systemremark as ' . $delimiter . 'posting_header.systemremark' . $delimiter . ',duedate as ' . $delimiter . 'posting_header.duedate' . $delimiter . ',paymenttype as ' . $delimiter . 'posting_header.paymenttype' . $delimiter . ',id_contract as ' . $delimiter . 'posting_header.id_contract' . $delimiter . ',id_contract_pos as ' . $delimiter . 'posting_header.id_contract_pos' . $delimiter . ' from posting_header';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_id_posting_header_main_id()
{
	return $this->p_id_posting_header_main_id;
}

public function get_id_posting_header_main_id_original()
{
	return $this->p_id_posting_header_main_id_original;
}

public function set_id_posting_header_main_id($value)
{
	if ($this->p_id_posting_header_main_id === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_posting_header_main_id_is_dirty = true;
	$this->p_id_posting_header_main_id = $value;
}

public function set_id_posting_header_main_id_original($value)
{
	$this->p_id_posting_header_main_id_original = $value;
}

public function get_id_posting_header_main_id_is_dirty()
{
	return $this->p_id_posting_header_main_id_is_dirty;
}


public function get_remark()
{
	return $this->p_remark;
}

public function get_remark_original()
{
	return $this->p_remark_original;
}

public function set_remark($value)
{
	if ($this->p_remark === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_remark_is_dirty = true;
	$this->p_remark = $value;
}

public function set_remark_original($value)
{
	$this->p_remark_original = $value;
}

public function get_remark_is_dirty()
{
	return $this->p_remark_is_dirty;
}


public function get_id_offer_event()
{
	return $this->p_id_offer_event;
}

public function get_id_offer_event_original()
{
	return $this->p_id_offer_event_original;
}

public function set_id_offer_event($value)
{
	if ($this->p_id_offer_event === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_offer_event_is_dirty = true;
	$this->p_id_offer_event = $value;
}

public function set_id_offer_event_original($value)
{
	$this->p_id_offer_event_original = $value;
}

public function get_id_offer_event_is_dirty()
{
	return $this->p_id_offer_event_is_dirty;
}


public function get_period()
{
	return $this->p_period;
}

public function get_period_original()
{
	return $this->p_period_original;
}

public function set_period($value)
{
	if ($this->p_period === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_period_is_dirty = true;
	$this->p_period = $value;
}

public function set_period_original($value)
{
	$this->p_period_original = $value;
}

public function get_period_is_dirty()
{
	return $this->p_period_is_dirty;
}


public function get_systemremark()
{
	return $this->p_systemremark;
}

public function get_systemremark_original()
{
	return $this->p_systemremark_original;
}

public function set_systemremark($value)
{
	if ($this->p_systemremark === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_systemremark_is_dirty = true;
	$this->p_systemremark = $value;
}

public function set_systemremark_original($value)
{
	$this->p_systemremark_original = $value;
}

public function get_systemremark_is_dirty()
{
	return $this->p_systemremark_is_dirty;
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


public function get_id_contract()
{
	return $this->p_id_contract;
}

public function get_id_contract_original()
{
	return $this->p_id_contract_original;
}

public function set_id_contract($value)
{
	if ($this->p_id_contract === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_contract_is_dirty = true;
	$this->p_id_contract = $value;
}

public function set_id_contract_original($value)
{
	$this->p_id_contract_original = $value;
}

public function get_id_contract_is_dirty()
{
	return $this->p_id_contract_is_dirty;
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


public function reset_dirty($reset_values = false)
{
	$this->p_id_posting_header_main_id_is_dirty = false;
	$this->p_remark_is_dirty = false;
	$this->p_id_offer_event_is_dirty = false;
	$this->p_period_is_dirty = false;
	$this->p_systemremark_is_dirty = false;
	$this->p_duedate_is_dirty = false;
	$this->p_paymenttype_is_dirty = false;
	$this->p_id_contract_is_dirty = false;
	$this->p_id_contract_pos_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_posting_header_main_id = $this->p_id_posting_header_main_id_original;
		$this->p_remark = $this->p_remark_original;
		$this->p_id_offer_event = $this->p_id_offer_event_original;
		$this->p_period = $this->p_period_original;
		$this->p_systemremark = $this->p_systemremark_original;
		$this->p_duedate = $this->p_duedate_original;
		$this->p_paymenttype = $this->p_paymenttype_original;
		$this->p_id_contract = $this->p_id_contract_original;
		$this->p_id_contract_pos = $this->p_id_contract_pos_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "posting_header.id":
					$this->set_id($val);
					break;
				case "posting_header.id_posting_header_main_id":
					$this->set_id_posting_header_main_id($val);
					$this->set_id_posting_header_main_id_original($val);
					break;
				case "posting_header.remark":
					$this->set_remark($val);
					$this->set_remark_original($val);
					break;
				case "posting_header.id_offer_event":
					$this->set_id_offer_event($val);
					$this->set_id_offer_event_original($val);
					break;
				case "posting_header.period":
					$this->set_period($val);
					$this->set_period_original($val);
					break;
				case "posting_header.systemremark":
					$this->set_systemremark($val);
					$this->set_systemremark_original($val);
					break;
				case "posting_header.duedate":
					$this->set_duedate($val);
					$this->set_duedate_original($val);
					break;
				case "posting_header.paymenttype":
					$this->set_paymenttype($val);
					$this->set_paymenttype_original($val);
					break;
				case "posting_header.id_contract":
					$this->set_id_contract($val);
					$this->set_id_contract_original($val);
					break;
				case "posting_header.id_contract_pos":
					$this->set_id_contract_pos($val);
					$this->set_id_contract_pos_original($val);
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
		$posting_header = cls_table_factory::create_instance('posting_header');
		$row = $db_manager->fetch_row($result);
		$posting_header->fill($row);
		return $posting_header;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_posting_header.php');
		return cls_save_posting_header::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_posting_header.php');
		return cls_save_posting_header::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_posting_headers($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('posting_header',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('posting_header',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$posting_header = cls_table_factory::create_instance('posting_header');
				$posting_header->fill($row);
				$data[] = $posting_header;
			}
		return $data;
	}

function get_contract($db_manager,$application)
	{
		$result = $db_manager->get_records('contract',$this->get_id_contract());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$contract = cls_table_factory::create_instance('contract');
		$row = $db_manager->fetch_row($result);
		$contract->fill($row);
		return $contract;
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

function get_offer_event($db_manager,$application)
	{
		$result = $db_manager->get_records('offer_event',$this->get_id_offer_event());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$offer_event = cls_table_factory::create_instance('offer_event');
		$row = $db_manager->fetch_row($result);
		$offer_event->fill($row);
		return $offer_event;
	}

function get_posting_header_main_id($db_manager,$application)
	{
		$result = $db_manager->get_records('posting_header',$this->get_id_posting_header_main_id());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$posting_header = cls_table_factory::create_instance('posting_header');
		$row = $db_manager->fetch_row($result);
		$posting_header->fill($row);
		return $posting_header;
	}

//changed 1
public function get_article_person_rent($db_manager,$application)
	{
		$result = $db_manager->get_records('article_person_rent',$this->get_id(),'id_posting_header');
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
public function get_article_person_rents_by_posting_header($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('article_person_rent',$this->get_id(),'id_posting_header');
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

public function get_multi_article_person_rents_by_posting_header($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('article_person_rent',$posting_headers,'id_posting_header');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_person_rent = cls_table_factory::create_instance('article_person_rent');
				$article_person_rent->fill($row);
				if (!array_key_exists($data[$row['id_posting_header']]))
				{
					$data[$row['id_posting_header']] = array();
				}
				$data[$row['id_posting_header']][] = $article_person_rent;
			}
		return $data;
	}

//changed 1
public function get_contract_plan($db_manager,$application)
	{
		$result = $db_manager->get_records('contract_plan',$this->get_id(),'id_posting_header');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$contract_plan = cls_table_factory::create_instance('contract_plan');
		$row = $db_manager->fetch_row($result);
		$contract_plan->fill($row);
		return $contract_plan;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_contract_plans_by_posting_header($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('contract_plan',$this->get_id(),'id_posting_header');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_plan = cls_table_factory::create_instance('contract_plan');
				$contract_plan->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $contract_plan;
				}
				else
				{
					$data[] = $contract_plan;
				}
			}
		return $data;
	}

public function get_multi_contract_plans_by_posting_header($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('contract_plan',$posting_headers,'id_posting_header');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_plan = cls_table_factory::create_instance('contract_plan');
				$contract_plan->fill($row);
				if (!array_key_exists($data[$row['id_posting_header']]))
				{
					$data[$row['id_posting_header']] = array();
				}
				$data[$row['id_posting_header']][] = $contract_plan;
			}
		return $data;
	}

//changed 1
public function get_data_posting($db_manager,$application)
	{
		$result = $db_manager->get_records('data_posting',$this->get_id(),'id_posting_header');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data_posting = cls_table_factory::create_instance('data_posting');
		$row = $db_manager->fetch_row($result);
		$data_posting->fill($row);
		return $data_posting;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_data_postings_by_posting_header($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_posting',$this->get_id(),'id_posting_header');
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

public function get_multi_data_postings_by_posting_header($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$posting_headers,'id_posting_header');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_posting = cls_table_factory::create_instance('data_posting');
				$data_posting->fill($row);
				if (!array_key_exists($data[$row['id_posting_header']]))
				{
					$data[$row['id_posting_header']] = array();
				}
				$data[$row['id_posting_header']][] = $data_posting;
			}
		return $data;
	}

//changed 1
public function get_invoice_item($db_manager,$application)
	{
		$result = $db_manager->get_records('invoice_item',$this->get_id(),'id_posting_header');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$invoice_item = cls_table_factory::create_instance('invoice_item');
		$row = $db_manager->fetch_row($result);
		$invoice_item->fill($row);
		return $invoice_item;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_invoice_items_by_posting_header($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('invoice_item',$this->get_id(),'id_posting_header');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$invoice_item = cls_table_factory::create_instance('invoice_item');
				$invoice_item->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $invoice_item;
				}
				else
				{
					$data[] = $invoice_item;
				}
			}
		return $data;
	}

public function get_multi_invoice_items_by_posting_header($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('invoice_item',$posting_headers,'id_posting_header');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$invoice_item = cls_table_factory::create_instance('invoice_item');
				$invoice_item->fill($row);
				if (!array_key_exists($data[$row['id_posting_header']]))
				{
					$data[$row['id_posting_header']] = array();
				}
				$data[$row['id_posting_header']][] = $invoice_item;
			}
		return $data;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_offer_events_by_posting_header($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('offer_event',$this->get_id(),'id_posting_header');
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

public function get_multi_offer_events_by_posting_header($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$posting_headers,'id_posting_header');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_event = cls_table_factory::create_instance('offer_event');
				$offer_event->fill($row);
				if (!array_key_exists($data[$row['id_posting_header']]))
				{
					$data[$row['id_posting_header']] = array();
				}
				$data[$row['id_posting_header']][] = $offer_event;
			}
		return $data;
	}

//changed 1
public function get_posting_line($db_manager,$application)
	{
		$result = $db_manager->get_records('posting_line',$this->get_id(),'id_posting_header');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$posting_line = cls_table_factory::create_instance('posting_line');
		$row = $db_manager->fetch_row($result);
		$posting_line->fill($row);
		return $posting_line;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_posting_lines_by_posting_header($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('posting_line',$this->get_id(),'id_posting_header');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$posting_line = cls_table_factory::create_instance('posting_line');
				$posting_line->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $posting_line;
				}
				else
				{
					$data[] = $posting_line;
				}
			}
		return $data;
	}

public function get_multi_posting_lines_by_posting_header($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('posting_line',$posting_headers,'id_posting_header');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$posting_line = cls_table_factory::create_instance('posting_line');
				$posting_line->fill($row);
				if (!array_key_exists($data[$row['id_posting_header']]))
				{
					$data[$row['id_posting_header']] = array();
				}
				$data[$row['id_posting_header']][] = $posting_line;
			}
		return $data;
	}

//changed 1
public function get_transfer_item($db_manager,$application)
	{
		$result = $db_manager->get_records('transfer_item',$this->get_id(),'id_posting_header');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$transfer_item = cls_table_factory::create_instance('transfer_item');
		$row = $db_manager->fetch_row($result);
		$transfer_item->fill($row);
		return $transfer_item;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_transfer_items_by_posting_header($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('transfer_item',$this->get_id(),'id_posting_header');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$transfer_item = cls_table_factory::create_instance('transfer_item');
				$transfer_item->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $transfer_item;
				}
				else
				{
					$data[] = $transfer_item;
				}
			}
		return $data;
	}

public function get_multi_transfer_items_by_posting_header($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('transfer_item',$posting_headers,'id_posting_header');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$transfer_item = cls_table_factory::create_instance('transfer_item');
				$transfer_item->fill($row);
				if (!array_key_exists($data[$row['id_posting_header']]))
				{
					$data[$row['id_posting_header']] = array();
				}
				$data[$row['id_posting_header']][] = $transfer_item;
			}
		return $data;
	}

//changed 1
public function get_posting_header_by_main_id($db_manager,$application)
	{
		$result = $db_manager->get_records('posting_header',$this->get_id(),'id_posting_header_main_id');
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
public function get_posting_headers_by_posting_header_main_id($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('posting_header',$this->get_id(),'id_posting_header_main_id');
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

public function get_multi_posting_headers_by_posting_header_main_id($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('posting_header',$posting_headers,'id_posting_header_main_id');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$posting_header = cls_table_factory::create_instance('posting_header');
				$posting_header->fill($row);
				if (!array_key_exists($data[$row['id_posting_header_main_id']]))
				{
					$data[$row['id_posting_header_main_id']] = array();
				}
				$data[$row['id_posting_header_main_id']][] = $posting_header;
			}
		return $data;
	}

//changed 1
public function get_transfer_item_by_storno($db_manager,$application)
	{
		$result = $db_manager->get_records('transfer_item',$this->get_id(),'id_posting_header_storno');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$transfer_item = cls_table_factory::create_instance('transfer_item');
		$row = $db_manager->fetch_row($result);
		$transfer_item->fill($row);
		return $transfer_item;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_transfer_items_by_posting_header_storno($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('transfer_item',$this->get_id(),'id_posting_header_storno');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$transfer_item = cls_table_factory::create_instance('transfer_item');
				$transfer_item->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $transfer_item;
				}
				else
				{
					$data[] = $transfer_item;
				}
			}
		return $data;
	}

public function get_multi_transfer_items_by_posting_header_storno($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('transfer_item',$posting_headers,'id_posting_header_storno');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$transfer_item = cls_table_factory::create_instance('transfer_item');
				$transfer_item->fill($row);
				if (!array_key_exists($data[$row['id_posting_header_storno']]))
				{
					$data[$row['id_posting_header_storno']] = array();
				}
				$data[$row['id_posting_header_storno']][] = $transfer_item;
			}
		return $data;
	}

public function get_address($posting_headers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$posting_headers,'id_data');
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

public function get_communication_reason($posting_headers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$posting_headers,'id_data');
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

public function get_data_change($posting_headers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$posting_headers,'id_data');
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

public function get_data_help($posting_headers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$posting_headers,'id_data');
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

public function get_data_location($posting_headers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$posting_headers,'id_data');
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

public function get_multi_data_posting($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$posting_headers,'id_data');
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

public function get_data_property($posting_headers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$posting_headers,'id_data');
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

public function get_multi_offer_event($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$posting_headers,'id_data');
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

public function get_supplier_data($posting_headers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$posting_headers,'id_data');
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

public function get_table_test_data($posting_headers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$posting_headers,'id_data');
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

public function get_data_translation($posting_headers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$posting_headers,'id_data');
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

public function get_dms($posting_headers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$posting_headers,'id_data');
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

public function get_data_relation_id_data1($posting_headers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$posting_headers,'id_data1');
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

public function get_data_relation_id_data2($posting_headers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$posting_headers,'id_data2');
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

public function get_data_property_id_link_data($posting_headers,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($posting_headers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$posting_headers,'id_link_data');
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
