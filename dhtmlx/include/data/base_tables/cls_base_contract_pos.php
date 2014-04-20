<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_contract_pos extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_contract = null;
private $p_id_contract_original = null;
private $p_startdate = null;
private $p_startdate_original = null;
private $p_maincontract = null;
private $p_maincontract_original = null;
private $p_paymenttype = null;
private $p_paymenttype_original = null;
private $p_enddate = null;
private $p_enddate_original = null;
private $p_paymentstart = null;
private $p_paymentstart_original = null;
private $p_cancelrequestreceived = null;
private $p_cancelrequestreceived_original = null;
private $p_extendable = null;
private $p_extendable_original = null;
private $p_id_article = null;
private $p_id_article_original = null;
private $p_id_contract_template_pos = null;
private $p_id_contract_template_pos_original = null;
private $p_payday = null;
private $p_payday_original = null;
private $p_paydow = null;
private $p_paydow_original = null;
private $p_durationinmonths = null;
private $p_durationinmonths_original = null;
private $p_extensioninmonth = null;
private $p_extensioninmonth_original = null;
private $p_amountperday = null;
private $p_amountperday_original = null;
private $p_amountperweek = null;
private $p_amountperweek_original = null;
private $p_amountpermonth = null;
private $p_amountpermonth_original = null;
private $p_amountperyear = null;
private $p_amountperyear_original = null;
private $p_increasepermonth = null;
private $p_increasepermonth_original = null;
private $p_increaseperyear = null;
private $p_increaseperyear_original = null;
private $p_freeunitsperday = null;
private $p_freeunitsperday_original = null;
private $p_freeunitsperweek = null;
private $p_freeunitsperweek_original = null;
private $p_freeunitspermonth = null;
private $p_freeunitspermonth_original = null;
private $p_freeunitsperyear = null;
private $p_freeunitsperyear_original = null;
private $p_paymentinterval = null;
private $p_paymentinterval_original = null;
private $p_paymentcycle = null;
private $p_paymentcycle_original = null;
private $p_paymentsduringrestperiod = null;
private $p_paymentsduringrestperiod_original = null;

private $p_id_contract_is_dirty = false;
private $p_startdate_is_dirty = false;
private $p_maincontract_is_dirty = false;
private $p_paymenttype_is_dirty = false;
private $p_enddate_is_dirty = false;
private $p_paymentstart_is_dirty = false;
private $p_cancelrequestreceived_is_dirty = false;
private $p_extendable_is_dirty = false;
private $p_id_article_is_dirty = false;
private $p_id_contract_template_pos_is_dirty = false;
private $p_payday_is_dirty = false;
private $p_paydow_is_dirty = false;
private $p_durationinmonths_is_dirty = false;
private $p_extensioninmonth_is_dirty = false;
private $p_amountperday_is_dirty = false;
private $p_amountperweek_is_dirty = false;
private $p_amountpermonth_is_dirty = false;
private $p_amountperyear_is_dirty = false;
private $p_increasepermonth_is_dirty = false;
private $p_increaseperyear_is_dirty = false;
private $p_freeunitsperday_is_dirty = false;
private $p_freeunitsperweek_is_dirty = false;
private $p_freeunitspermonth_is_dirty = false;
private $p_freeunitsperyear_is_dirty = false;
private $p_paymentinterval_is_dirty = false;
private $p_paymentcycle_is_dirty = false;
private $p_paymentsduringrestperiod_is_dirty = false;

public function _get_table_name()
{
	return 'contract_pos';
}

public function get_table_fields()
{
	return array('id','id_contract','startdate','maincontract','paymenttype','enddate','paymentstart','cancelrequestreceived','extendable','id_article','id_contract_template_pos','payday','paydow','durationinmonths','extensioninmonth','amountperday','amountperweek','amountpermonth','amountperyear','increasepermonth','increaseperyear','freeunitsperday','freeunitsperweek','freeunitspermonth','freeunitsperyear','paymentinterval','paymentcycle','paymentsduringrestperiod');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'contract_pos.id' . $delimiter . ',id_contract as ' . $delimiter . 'contract_pos.id_contract' . $delimiter . ',startdate as ' . $delimiter . 'contract_pos.startdate' . $delimiter . ',maincontract as ' . $delimiter . 'contract_pos.maincontract' . $delimiter . ',paymenttype as ' . $delimiter . 'contract_pos.paymenttype' . $delimiter . ',enddate as ' . $delimiter . 'contract_pos.enddate' . $delimiter . ',paymentstart as ' . $delimiter . 'contract_pos.paymentstart' . $delimiter . ',cancelrequestreceived as ' . $delimiter . 'contract_pos.cancelrequestreceived' . $delimiter . ',extendable as ' . $delimiter . 'contract_pos.extendable' . $delimiter . ',id_article as ' . $delimiter . 'contract_pos.id_article' . $delimiter . ',id_contract_template_pos as ' . $delimiter . 'contract_pos.id_contract_template_pos' . $delimiter . ',payday as ' . $delimiter . 'contract_pos.payday' . $delimiter . ',paydow as ' . $delimiter . 'contract_pos.paydow' . $delimiter . ',durationinmonths as ' . $delimiter . 'contract_pos.durationinmonths' . $delimiter . ',extensioninmonth as ' . $delimiter . 'contract_pos.extensioninmonth' . $delimiter . ',amountperday as ' . $delimiter . 'contract_pos.amountperday' . $delimiter . ',amountperweek as ' . $delimiter . 'contract_pos.amountperweek' . $delimiter . ',amountpermonth as ' . $delimiter . 'contract_pos.amountpermonth' . $delimiter . ',amountperyear as ' . $delimiter . 'contract_pos.amountperyear' . $delimiter . ',increasepermonth as ' . $delimiter . 'contract_pos.increasepermonth' . $delimiter . ',increaseperyear as ' . $delimiter . 'contract_pos.increaseperyear' . $delimiter . ',freeunitsperday as ' . $delimiter . 'contract_pos.freeunitsperday' . $delimiter . ',freeunitsperweek as ' . $delimiter . 'contract_pos.freeunitsperweek' . $delimiter . ',freeunitspermonth as ' . $delimiter . 'contract_pos.freeunitspermonth' . $delimiter . ',freeunitsperyear as ' . $delimiter . 'contract_pos.freeunitsperyear' . $delimiter . ',paymentinterval as ' . $delimiter . 'contract_pos.paymentinterval' . $delimiter . ',paymentcycle as ' . $delimiter . 'contract_pos.paymentcycle' . $delimiter . ',paymentsduringrestperiod as ' . $delimiter . 'contract_pos.paymentsduringrestperiod' . $delimiter . ' from contract_pos';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
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


public function get_startdate()
{
	return $this->p_startdate;
}

public function get_startdate_original()
{
	return $this->p_startdate_original;
}

public function set_startdate($value)
{
	if ($this->p_startdate === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_startdate_is_dirty = true;
	$this->p_startdate = $value;
}

public function set_startdate_original($value)
{
	$this->p_startdate_original = $value;
}

public function get_startdate_is_dirty()
{
	return $this->p_startdate_is_dirty;
}


public function get_maincontract()
{
	return $this->p_maincontract;
}

public function get_maincontract_original()
{
	return $this->p_maincontract_original;
}

public function set_maincontract($value)
{
	if ($this->p_maincontract === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_maincontract_is_dirty = true;
	$this->p_maincontract = $value;
}

public function set_maincontract_original($value)
{
	$this->p_maincontract_original = $value;
}

public function get_maincontract_is_dirty()
{
	return $this->p_maincontract_is_dirty;
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


public function get_enddate()
{
	return $this->p_enddate;
}

public function get_enddate_original()
{
	return $this->p_enddate_original;
}

public function set_enddate($value)
{
	if ($this->p_enddate === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_enddate_is_dirty = true;
	$this->p_enddate = $value;
}

public function set_enddate_original($value)
{
	$this->p_enddate_original = $value;
}

public function get_enddate_is_dirty()
{
	return $this->p_enddate_is_dirty;
}


public function get_paymentstart()
{
	return $this->p_paymentstart;
}

public function get_paymentstart_original()
{
	return $this->p_paymentstart_original;
}

public function set_paymentstart($value)
{
	if ($this->p_paymentstart === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_paymentstart_is_dirty = true;
	$this->p_paymentstart = $value;
}

public function set_paymentstart_original($value)
{
	$this->p_paymentstart_original = $value;
}

public function get_paymentstart_is_dirty()
{
	return $this->p_paymentstart_is_dirty;
}


public function get_cancelrequestreceived()
{
	return $this->p_cancelrequestreceived;
}

public function get_cancelrequestreceived_original()
{
	return $this->p_cancelrequestreceived_original;
}

public function set_cancelrequestreceived($value)
{
	if ($this->p_cancelrequestreceived === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_cancelrequestreceived_is_dirty = true;
	$this->p_cancelrequestreceived = $value;
}

public function set_cancelrequestreceived_original($value)
{
	$this->p_cancelrequestreceived_original = $value;
}

public function get_cancelrequestreceived_is_dirty()
{
	return $this->p_cancelrequestreceived_is_dirty;
}


public function get_extendable()
{
	return $this->p_extendable;
}

public function get_extendable_original()
{
	return $this->p_extendable_original;
}

public function set_extendable($value)
{
	if ($this->p_extendable === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_extendable_is_dirty = true;
	$this->p_extendable = $value;
}

public function set_extendable_original($value)
{
	$this->p_extendable_original = $value;
}

public function get_extendable_is_dirty()
{
	return $this->p_extendable_is_dirty;
}


public function get_id_article()
{
	return $this->p_id_article;
}

public function get_id_article_original()
{
	return $this->p_id_article_original;
}

public function set_id_article($value)
{
	if ($this->p_id_article === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_article_is_dirty = true;
	$this->p_id_article = $value;
}

public function set_id_article_original($value)
{
	$this->p_id_article_original = $value;
}

public function get_id_article_is_dirty()
{
	return $this->p_id_article_is_dirty;
}


public function get_id_contract_template_pos()
{
	return $this->p_id_contract_template_pos;
}

public function get_id_contract_template_pos_original()
{
	return $this->p_id_contract_template_pos_original;
}

public function set_id_contract_template_pos($value)
{
	if ($this->p_id_contract_template_pos === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_contract_template_pos_is_dirty = true;
	$this->p_id_contract_template_pos = $value;
}

public function set_id_contract_template_pos_original($value)
{
	$this->p_id_contract_template_pos_original = $value;
}

public function get_id_contract_template_pos_is_dirty()
{
	return $this->p_id_contract_template_pos_is_dirty;
}


public function get_payday()
{
	return $this->p_payday;
}

public function get_payday_original()
{
	return $this->p_payday_original;
}

public function set_payday($value)
{
	if ($this->p_payday === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_payday_is_dirty = true;
	$this->p_payday = $value;
}

public function set_payday_original($value)
{
	$this->p_payday_original = $value;
}

public function get_payday_is_dirty()
{
	return $this->p_payday_is_dirty;
}


public function get_paydow()
{
	return $this->p_paydow;
}

public function get_paydow_original()
{
	return $this->p_paydow_original;
}

public function set_paydow($value)
{
	if ($this->p_paydow === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_paydow_is_dirty = true;
	$this->p_paydow = $value;
}

public function set_paydow_original($value)
{
	$this->p_paydow_original = $value;
}

public function get_paydow_is_dirty()
{
	return $this->p_paydow_is_dirty;
}


public function get_durationinmonths()
{
	return $this->p_durationinmonths;
}

public function get_durationinmonths_original()
{
	return $this->p_durationinmonths_original;
}

public function set_durationinmonths($value)
{
	if ($this->p_durationinmonths === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_durationinmonths_is_dirty = true;
	$this->p_durationinmonths = $value;
}

public function set_durationinmonths_original($value)
{
	$this->p_durationinmonths_original = $value;
}

public function get_durationinmonths_is_dirty()
{
	return $this->p_durationinmonths_is_dirty;
}


public function get_extensioninmonth()
{
	return $this->p_extensioninmonth;
}

public function get_extensioninmonth_original()
{
	return $this->p_extensioninmonth_original;
}

public function set_extensioninmonth($value)
{
	if ($this->p_extensioninmonth === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_extensioninmonth_is_dirty = true;
	$this->p_extensioninmonth = $value;
}

public function set_extensioninmonth_original($value)
{
	$this->p_extensioninmonth_original = $value;
}

public function get_extensioninmonth_is_dirty()
{
	return $this->p_extensioninmonth_is_dirty;
}


public function get_amountperday()
{
	return $this->p_amountperday;
}

public function get_amountperday_original()
{
	return $this->p_amountperday_original;
}

public function set_amountperday($value)
{
	if ($this->p_amountperday === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_amountperday_is_dirty = true;
	$this->p_amountperday = $value;
}

public function set_amountperday_original($value)
{
	$this->p_amountperday_original = $value;
}

public function get_amountperday_is_dirty()
{
	return $this->p_amountperday_is_dirty;
}


public function get_amountperweek()
{
	return $this->p_amountperweek;
}

public function get_amountperweek_original()
{
	return $this->p_amountperweek_original;
}

public function set_amountperweek($value)
{
	if ($this->p_amountperweek === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_amountperweek_is_dirty = true;
	$this->p_amountperweek = $value;
}

public function set_amountperweek_original($value)
{
	$this->p_amountperweek_original = $value;
}

public function get_amountperweek_is_dirty()
{
	return $this->p_amountperweek_is_dirty;
}


public function get_amountpermonth()
{
	return $this->p_amountpermonth;
}

public function get_amountpermonth_original()
{
	return $this->p_amountpermonth_original;
}

public function set_amountpermonth($value)
{
	if ($this->p_amountpermonth === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_amountpermonth_is_dirty = true;
	$this->p_amountpermonth = $value;
}

public function set_amountpermonth_original($value)
{
	$this->p_amountpermonth_original = $value;
}

public function get_amountpermonth_is_dirty()
{
	return $this->p_amountpermonth_is_dirty;
}


public function get_amountperyear()
{
	return $this->p_amountperyear;
}

public function get_amountperyear_original()
{
	return $this->p_amountperyear_original;
}

public function set_amountperyear($value)
{
	if ($this->p_amountperyear === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_amountperyear_is_dirty = true;
	$this->p_amountperyear = $value;
}

public function set_amountperyear_original($value)
{
	$this->p_amountperyear_original = $value;
}

public function get_amountperyear_is_dirty()
{
	return $this->p_amountperyear_is_dirty;
}


public function get_increasepermonth()
{
	return $this->p_increasepermonth;
}

public function get_increasepermonth_original()
{
	return $this->p_increasepermonth_original;
}

public function set_increasepermonth($value)
{
	if ($this->p_increasepermonth === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_increasepermonth_is_dirty = true;
	$this->p_increasepermonth = $value;
}

public function set_increasepermonth_original($value)
{
	$this->p_increasepermonth_original = $value;
}

public function get_increasepermonth_is_dirty()
{
	return $this->p_increasepermonth_is_dirty;
}


public function get_increaseperyear()
{
	return $this->p_increaseperyear;
}

public function get_increaseperyear_original()
{
	return $this->p_increaseperyear_original;
}

public function set_increaseperyear($value)
{
	if ($this->p_increaseperyear === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_increaseperyear_is_dirty = true;
	$this->p_increaseperyear = $value;
}

public function set_increaseperyear_original($value)
{
	$this->p_increaseperyear_original = $value;
}

public function get_increaseperyear_is_dirty()
{
	return $this->p_increaseperyear_is_dirty;
}


public function get_freeunitsperday()
{
	return $this->p_freeunitsperday;
}

public function get_freeunitsperday_original()
{
	return $this->p_freeunitsperday_original;
}

public function set_freeunitsperday($value)
{
	if ($this->p_freeunitsperday === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_freeunitsperday_is_dirty = true;
	$this->p_freeunitsperday = $value;
}

public function set_freeunitsperday_original($value)
{
	$this->p_freeunitsperday_original = $value;
}

public function get_freeunitsperday_is_dirty()
{
	return $this->p_freeunitsperday_is_dirty;
}


public function get_freeunitsperweek()
{
	return $this->p_freeunitsperweek;
}

public function get_freeunitsperweek_original()
{
	return $this->p_freeunitsperweek_original;
}

public function set_freeunitsperweek($value)
{
	if ($this->p_freeunitsperweek === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_freeunitsperweek_is_dirty = true;
	$this->p_freeunitsperweek = $value;
}

public function set_freeunitsperweek_original($value)
{
	$this->p_freeunitsperweek_original = $value;
}

public function get_freeunitsperweek_is_dirty()
{
	return $this->p_freeunitsperweek_is_dirty;
}


public function get_freeunitspermonth()
{
	return $this->p_freeunitspermonth;
}

public function get_freeunitspermonth_original()
{
	return $this->p_freeunitspermonth_original;
}

public function set_freeunitspermonth($value)
{
	if ($this->p_freeunitspermonth === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_freeunitspermonth_is_dirty = true;
	$this->p_freeunitspermonth = $value;
}

public function set_freeunitspermonth_original($value)
{
	$this->p_freeunitspermonth_original = $value;
}

public function get_freeunitspermonth_is_dirty()
{
	return $this->p_freeunitspermonth_is_dirty;
}


public function get_freeunitsperyear()
{
	return $this->p_freeunitsperyear;
}

public function get_freeunitsperyear_original()
{
	return $this->p_freeunitsperyear_original;
}

public function set_freeunitsperyear($value)
{
	if ($this->p_freeunitsperyear === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_freeunitsperyear_is_dirty = true;
	$this->p_freeunitsperyear = $value;
}

public function set_freeunitsperyear_original($value)
{
	$this->p_freeunitsperyear_original = $value;
}

public function get_freeunitsperyear_is_dirty()
{
	return $this->p_freeunitsperyear_is_dirty;
}


public function get_paymentinterval()
{
	return $this->p_paymentinterval;
}

public function get_paymentinterval_original()
{
	return $this->p_paymentinterval_original;
}

public function set_paymentinterval($value)
{
	if ($this->p_paymentinterval === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_paymentinterval_is_dirty = true;
	$this->p_paymentinterval = $value;
}

public function set_paymentinterval_original($value)
{
	$this->p_paymentinterval_original = $value;
}

public function get_paymentinterval_is_dirty()
{
	return $this->p_paymentinterval_is_dirty;
}


public function get_paymentcycle()
{
	return $this->p_paymentcycle;
}

public function get_paymentcycle_original()
{
	return $this->p_paymentcycle_original;
}

public function set_paymentcycle($value)
{
	if ($this->p_paymentcycle === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_paymentcycle_is_dirty = true;
	$this->p_paymentcycle = $value;
}

public function set_paymentcycle_original($value)
{
	$this->p_paymentcycle_original = $value;
}

public function get_paymentcycle_is_dirty()
{
	return $this->p_paymentcycle_is_dirty;
}


public function get_paymentsduringrestperiod()
{
	return $this->p_paymentsduringrestperiod;
}

public function get_paymentsduringrestperiod_original()
{
	return $this->p_paymentsduringrestperiod_original;
}

public function set_paymentsduringrestperiod($value)
{
	if ($this->p_paymentsduringrestperiod === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_paymentsduringrestperiod_is_dirty = true;
	$this->p_paymentsduringrestperiod = $value;
}

public function set_paymentsduringrestperiod_original($value)
{
	$this->p_paymentsduringrestperiod_original = $value;
}

public function get_paymentsduringrestperiod_is_dirty()
{
	return $this->p_paymentsduringrestperiod_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_id_contract_is_dirty = false;
	$this->p_startdate_is_dirty = false;
	$this->p_maincontract_is_dirty = false;
	$this->p_paymenttype_is_dirty = false;
	$this->p_enddate_is_dirty = false;
	$this->p_paymentstart_is_dirty = false;
	$this->p_cancelrequestreceived_is_dirty = false;
	$this->p_extendable_is_dirty = false;
	$this->p_id_article_is_dirty = false;
	$this->p_id_contract_template_pos_is_dirty = false;
	$this->p_payday_is_dirty = false;
	$this->p_paydow_is_dirty = false;
	$this->p_durationinmonths_is_dirty = false;
	$this->p_extensioninmonth_is_dirty = false;
	$this->p_amountperday_is_dirty = false;
	$this->p_amountperweek_is_dirty = false;
	$this->p_amountpermonth_is_dirty = false;
	$this->p_amountperyear_is_dirty = false;
	$this->p_increasepermonth_is_dirty = false;
	$this->p_increaseperyear_is_dirty = false;
	$this->p_freeunitsperday_is_dirty = false;
	$this->p_freeunitsperweek_is_dirty = false;
	$this->p_freeunitspermonth_is_dirty = false;
	$this->p_freeunitsperyear_is_dirty = false;
	$this->p_paymentinterval_is_dirty = false;
	$this->p_paymentcycle_is_dirty = false;
	$this->p_paymentsduringrestperiod_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_contract = $this->p_id_contract_original;
		$this->p_startdate = $this->p_startdate_original;
		$this->p_maincontract = $this->p_maincontract_original;
		$this->p_paymenttype = $this->p_paymenttype_original;
		$this->p_enddate = $this->p_enddate_original;
		$this->p_paymentstart = $this->p_paymentstart_original;
		$this->p_cancelrequestreceived = $this->p_cancelrequestreceived_original;
		$this->p_extendable = $this->p_extendable_original;
		$this->p_id_article = $this->p_id_article_original;
		$this->p_id_contract_template_pos = $this->p_id_contract_template_pos_original;
		$this->p_payday = $this->p_payday_original;
		$this->p_paydow = $this->p_paydow_original;
		$this->p_durationinmonths = $this->p_durationinmonths_original;
		$this->p_extensioninmonth = $this->p_extensioninmonth_original;
		$this->p_amountperday = $this->p_amountperday_original;
		$this->p_amountperweek = $this->p_amountperweek_original;
		$this->p_amountpermonth = $this->p_amountpermonth_original;
		$this->p_amountperyear = $this->p_amountperyear_original;
		$this->p_increasepermonth = $this->p_increasepermonth_original;
		$this->p_increaseperyear = $this->p_increaseperyear_original;
		$this->p_freeunitsperday = $this->p_freeunitsperday_original;
		$this->p_freeunitsperweek = $this->p_freeunitsperweek_original;
		$this->p_freeunitspermonth = $this->p_freeunitspermonth_original;
		$this->p_freeunitsperyear = $this->p_freeunitsperyear_original;
		$this->p_paymentinterval = $this->p_paymentinterval_original;
		$this->p_paymentcycle = $this->p_paymentcycle_original;
		$this->p_paymentsduringrestperiod = $this->p_paymentsduringrestperiod_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "contract_pos.id":
					$this->set_id($val);
					break;
				case "contract_pos.id_contract":
					$this->set_id_contract($val);
					$this->set_id_contract_original($val);
					break;
				case "contract_pos.startdate":
					$this->set_startdate($val);
					$this->set_startdate_original($val);
					break;
				case "contract_pos.maincontract":
					$this->set_maincontract($val);
					$this->set_maincontract_original($val);
					break;
				case "contract_pos.paymenttype":
					$this->set_paymenttype($val);
					$this->set_paymenttype_original($val);
					break;
				case "contract_pos.enddate":
					$this->set_enddate($val);
					$this->set_enddate_original($val);
					break;
				case "contract_pos.paymentstart":
					$this->set_paymentstart($val);
					$this->set_paymentstart_original($val);
					break;
				case "contract_pos.cancelrequestreceived":
					$this->set_cancelrequestreceived($val);
					$this->set_cancelrequestreceived_original($val);
					break;
				case "contract_pos.extendable":
					$this->set_extendable($val);
					$this->set_extendable_original($val);
					break;
				case "contract_pos.id_article":
					$this->set_id_article($val);
					$this->set_id_article_original($val);
					break;
				case "contract_pos.id_contract_template_pos":
					$this->set_id_contract_template_pos($val);
					$this->set_id_contract_template_pos_original($val);
					break;
				case "contract_pos.payday":
					$this->set_payday($val);
					$this->set_payday_original($val);
					break;
				case "contract_pos.paydow":
					$this->set_paydow($val);
					$this->set_paydow_original($val);
					break;
				case "contract_pos.durationinmonths":
					$this->set_durationinmonths($val);
					$this->set_durationinmonths_original($val);
					break;
				case "contract_pos.extensioninmonth":
					$this->set_extensioninmonth($val);
					$this->set_extensioninmonth_original($val);
					break;
				case "contract_pos.amountperday":
					$this->set_amountperday($val);
					$this->set_amountperday_original($val);
					break;
				case "contract_pos.amountperweek":
					$this->set_amountperweek($val);
					$this->set_amountperweek_original($val);
					break;
				case "contract_pos.amountpermonth":
					$this->set_amountpermonth($val);
					$this->set_amountpermonth_original($val);
					break;
				case "contract_pos.amountperyear":
					$this->set_amountperyear($val);
					$this->set_amountperyear_original($val);
					break;
				case "contract_pos.increasepermonth":
					$this->set_increasepermonth($val);
					$this->set_increasepermonth_original($val);
					break;
				case "contract_pos.increaseperyear":
					$this->set_increaseperyear($val);
					$this->set_increaseperyear_original($val);
					break;
				case "contract_pos.freeunitsperday":
					$this->set_freeunitsperday($val);
					$this->set_freeunitsperday_original($val);
					break;
				case "contract_pos.freeunitsperweek":
					$this->set_freeunitsperweek($val);
					$this->set_freeunitsperweek_original($val);
					break;
				case "contract_pos.freeunitspermonth":
					$this->set_freeunitspermonth($val);
					$this->set_freeunitspermonth_original($val);
					break;
				case "contract_pos.freeunitsperyear":
					$this->set_freeunitsperyear($val);
					$this->set_freeunitsperyear_original($val);
					break;
				case "contract_pos.paymentinterval":
					$this->set_paymentinterval($val);
					$this->set_paymentinterval_original($val);
					break;
				case "contract_pos.paymentcycle":
					$this->set_paymentcycle($val);
					$this->set_paymentcycle_original($val);
					break;
				case "contract_pos.paymentsduringrestperiod":
					$this->set_paymentsduringrestperiod($val);
					$this->set_paymentsduringrestperiod_original($val);
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
		$contract_pos = cls_table_factory::create_instance('contract_pos');
		$row = $db_manager->fetch_row($result);
		$contract_pos->fill($row);
		return $contract_pos;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_contract_pos.php');
		return cls_save_contract_pos::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_contract_pos.php');
		return cls_save_contract_pos::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_contract_poss($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('contract_pos',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('contract_pos',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_pos = cls_table_factory::create_instance('contract_pos');
				$contract_pos->fill($row);
				$data[] = $contract_pos;
			}
		return $data;
	}

function get_article($db_manager,$application)
	{
		$result = $db_manager->get_records('article',$this->get_id_article());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article = cls_table_factory::create_instance('article');
		$row = $db_manager->fetch_row($result);
		$article->fill($row);
		return $article;
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

function get_contract_template_pos($db_manager,$application)
	{
		$result = $db_manager->get_records('contract_template_pos',$this->get_id_contract_template_pos());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$contract_template_pos = cls_table_factory::create_instance('contract_template_pos');
		$row = $db_manager->fetch_row($result);
		$contract_template_pos->fill($row);
		return $contract_template_pos;
	}

//changed 1
public function get_contract_plan($db_manager,$application)
	{
		$result = $db_manager->get_records('contract_plan',$this->get_id(),'id_contract_pos');
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
public function get_contract_plans_by_contract_pos($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('contract_plan',$this->get_id(),'id_contract_pos');
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

public function get_multi_contract_plans_by_contract_pos($contract_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('contract_plan',$contract_poss,'id_contract_pos');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_plan = cls_table_factory::create_instance('contract_plan');
				$contract_plan->fill($row);
				if (!array_key_exists($data[$row['id_contract_pos']]))
				{
					$data[$row['id_contract_pos']] = array();
				}
				$data[$row['id_contract_pos']][] = $contract_plan;
			}
		return $data;
	}

//changed 1
public function get_posting_header($db_manager,$application)
	{
		$result = $db_manager->get_records('posting_header',$this->get_id(),'id_contract_pos');
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
public function get_posting_headers_by_contract_pos($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('posting_header',$this->get_id(),'id_contract_pos');
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

public function get_multi_posting_headers_by_contract_pos($contract_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('posting_header',$contract_poss,'id_contract_pos');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$posting_header = cls_table_factory::create_instance('posting_header');
				$posting_header->fill($row);
				if (!array_key_exists($data[$row['id_contract_pos']]))
				{
					$data[$row['id_contract_pos']] = array();
				}
				$data[$row['id_contract_pos']][] = $posting_header;
			}
		return $data;
	}

//changed 1
public function get_restperiod($db_manager,$application)
	{
		$result = $db_manager->get_records('restperiod',$this->get_id(),'id_contract_pos');
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
public function get_restperiods_by_contract_pos($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('restperiod',$this->get_id(),'id_contract_pos');
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

public function get_multi_restperiods_by_contract_pos($contract_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('restperiod',$contract_poss,'id_contract_pos');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$restperiod = cls_table_factory::create_instance('restperiod');
				$restperiod->fill($row);
				if (!array_key_exists($data[$row['id_contract_pos']]))
				{
					$data[$row['id_contract_pos']] = array();
				}
				$data[$row['id_contract_pos']][] = $restperiod;
			}
		return $data;
	}

public function get_address($contract_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($contract_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$contract_poss,'id_data');
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

public function get_communication_reason($contract_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($contract_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$contract_poss,'id_data');
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

public function get_data_change($contract_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($contract_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$contract_poss,'id_data');
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

public function get_data_help($contract_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($contract_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$contract_poss,'id_data');
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

public function get_data_location($contract_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($contract_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$contract_poss,'id_data');
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

public function get_data_posting($contract_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($contract_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$contract_poss,'id_data');
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

public function get_data_property($contract_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($contract_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$contract_poss,'id_data');
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

public function get_offer_event($contract_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($contract_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$contract_poss,'id_data');
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

public function get_supplier_data($contract_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($contract_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$contract_poss,'id_data');
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

public function get_table_test_data($contract_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($contract_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$contract_poss,'id_data');
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

public function get_data_translation($contract_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($contract_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$contract_poss,'id_data');
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

public function get_dms($contract_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($contract_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$contract_poss,'id_data');
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

public function get_data_relation_id_data1($contract_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($contract_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$contract_poss,'id_data1');
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

public function get_data_relation_id_data2($contract_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($contract_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$contract_poss,'id_data2');
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

public function get_data_property_id_link_data($contract_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($contract_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$contract_poss,'id_link_data');
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
