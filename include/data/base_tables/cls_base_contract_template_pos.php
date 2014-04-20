<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_contract_template_pos extends cls_datatable_base
{
private static $p_cmmon;
private $p_paymentcycle = null;
private $p_paymentcycle_original = null;
private $p_paymentinterval = null;
private $p_paymentinterval_original = null;
private $p_optional = null;
private $p_optional_original = null;
private $p_freeunitsperyear = null;
private $p_freeunitsperyear_original = null;
private $p_freeunitspermonth = null;
private $p_freeunitspermonth_original = null;
private $p_freeunitsperweek = null;
private $p_freeunitsperweek_original = null;
private $p_freeunitsperday = null;
private $p_freeunitsperday_original = null;
private $p_increaseperyear = null;
private $p_increaseperyear_original = null;
private $p_increasepermonth = null;
private $p_increasepermonth_original = null;
private $p_amountperyear = null;
private $p_amountperyear_original = null;
private $p_amountpermonth = null;
private $p_amountpermonth_original = null;
private $p_amountperweek = null;
private $p_amountperweek_original = null;
private $p_amountperday = null;
private $p_amountperday_original = null;
private $p_durationinmonths = null;
private $p_durationinmonths_original = null;
private $p_maincontract = null;
private $p_maincontract_original = null;
private $p_id_article = null;
private $p_id_article_original = null;
private $p_name = null;
private $p_name_original = null;
private $p_id_contract_template = null;
private $p_id_contract_template_original = null;

private $p_paymentcycle_is_dirty = false;
private $p_paymentinterval_is_dirty = false;
private $p_optional_is_dirty = false;
private $p_freeunitsperyear_is_dirty = false;
private $p_freeunitspermonth_is_dirty = false;
private $p_freeunitsperweek_is_dirty = false;
private $p_freeunitsperday_is_dirty = false;
private $p_increaseperyear_is_dirty = false;
private $p_increasepermonth_is_dirty = false;
private $p_amountperyear_is_dirty = false;
private $p_amountpermonth_is_dirty = false;
private $p_amountperweek_is_dirty = false;
private $p_amountperday_is_dirty = false;
private $p_durationinmonths_is_dirty = false;
private $p_maincontract_is_dirty = false;
private $p_id_article_is_dirty = false;
private $p_name_is_dirty = false;
private $p_id_contract_template_is_dirty = false;

public function _get_table_name()
{
	return 'contract_template_pos';
}

public function get_table_fields()
{
	return array('paymentcycle','paymentinterval','optional','freeunitsperyear','freeunitspermonth','freeunitsperweek','freeunitsperday','increaseperyear','increasepermonth','amountperyear','amountpermonth','amountperweek','amountperday','durationinmonths','maincontract','id_article','name','id_contract_template','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select paymentcycle as ' . $delimiter . 'contract_template_pos.paymentcycle' . $delimiter . ',paymentinterval as ' . $delimiter . 'contract_template_pos.paymentinterval' . $delimiter . ',optional as ' . $delimiter . 'contract_template_pos.optional' . $delimiter . ',freeunitsperyear as ' . $delimiter . 'contract_template_pos.freeunitsperyear' . $delimiter . ',freeunitspermonth as ' . $delimiter . 'contract_template_pos.freeunitspermonth' . $delimiter . ',freeunitsperweek as ' . $delimiter . 'contract_template_pos.freeunitsperweek' . $delimiter . ',freeunitsperday as ' . $delimiter . 'contract_template_pos.freeunitsperday' . $delimiter . ',increaseperyear as ' . $delimiter . 'contract_template_pos.increaseperyear' . $delimiter . ',increasepermonth as ' . $delimiter . 'contract_template_pos.increasepermonth' . $delimiter . ',amountperyear as ' . $delimiter . 'contract_template_pos.amountperyear' . $delimiter . ',amountpermonth as ' . $delimiter . 'contract_template_pos.amountpermonth' . $delimiter . ',amountperweek as ' . $delimiter . 'contract_template_pos.amountperweek' . $delimiter . ',amountperday as ' . $delimiter . 'contract_template_pos.amountperday' . $delimiter . ',durationinmonths as ' . $delimiter . 'contract_template_pos.durationinmonths' . $delimiter . ',maincontract as ' . $delimiter . 'contract_template_pos.maincontract' . $delimiter . ',id_article as ' . $delimiter . 'contract_template_pos.id_article' . $delimiter . ',name as ' . $delimiter . 'contract_template_pos.name' . $delimiter . ',id_contract_template as ' . $delimiter . 'contract_template_pos.id_contract_template' . $delimiter . ',id as ' . $delimiter . 'contract_template_pos.id' . $delimiter . ' from contract_template_pos';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
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


public function get_optional()
{
	return $this->p_optional;
}

public function get_optional_original()
{
	return $this->p_optional_original;
}

public function set_optional($value)
{
	if ($this->p_optional === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_optional_is_dirty = true;
	$this->p_optional = $value;
}

public function set_optional_original($value)
{
	$this->p_optional_original = $value;
}

public function get_optional_is_dirty()
{
	return $this->p_optional_is_dirty;
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



public function reset_dirty($reset_values = false)
{
	$this->p_paymentcycle_is_dirty = false;
	$this->p_paymentinterval_is_dirty = false;
	$this->p_optional_is_dirty = false;
	$this->p_freeunitsperyear_is_dirty = false;
	$this->p_freeunitspermonth_is_dirty = false;
	$this->p_freeunitsperweek_is_dirty = false;
	$this->p_freeunitsperday_is_dirty = false;
	$this->p_increaseperyear_is_dirty = false;
	$this->p_increasepermonth_is_dirty = false;
	$this->p_amountperyear_is_dirty = false;
	$this->p_amountpermonth_is_dirty = false;
	$this->p_amountperweek_is_dirty = false;
	$this->p_amountperday_is_dirty = false;
	$this->p_durationinmonths_is_dirty = false;
	$this->p_maincontract_is_dirty = false;
	$this->p_id_article_is_dirty = false;
	$this->p_name_is_dirty = false;
	$this->p_id_contract_template_is_dirty = false;
	if ($reset_values)
	{
		$this->p_paymentcycle = $this->p_paymentcycle_original;
		$this->p_paymentinterval = $this->p_paymentinterval_original;
		$this->p_optional = $this->p_optional_original;
		$this->p_freeunitsperyear = $this->p_freeunitsperyear_original;
		$this->p_freeunitspermonth = $this->p_freeunitspermonth_original;
		$this->p_freeunitsperweek = $this->p_freeunitsperweek_original;
		$this->p_freeunitsperday = $this->p_freeunitsperday_original;
		$this->p_increaseperyear = $this->p_increaseperyear_original;
		$this->p_increasepermonth = $this->p_increasepermonth_original;
		$this->p_amountperyear = $this->p_amountperyear_original;
		$this->p_amountpermonth = $this->p_amountpermonth_original;
		$this->p_amountperweek = $this->p_amountperweek_original;
		$this->p_amountperday = $this->p_amountperday_original;
		$this->p_durationinmonths = $this->p_durationinmonths_original;
		$this->p_maincontract = $this->p_maincontract_original;
		$this->p_id_article = $this->p_id_article_original;
		$this->p_name = $this->p_name_original;
		$this->p_id_contract_template = $this->p_id_contract_template_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "contract_template_pos.paymentcycle":
					$this->set_paymentcycle($val);
					$this->set_paymentcycle_original($val);
					break;
				case "contract_template_pos.paymentinterval":
					$this->set_paymentinterval($val);
					$this->set_paymentinterval_original($val);
					break;
				case "contract_template_pos.optional":
					$this->set_optional($val);
					$this->set_optional_original($val);
					break;
				case "contract_template_pos.freeunitsperyear":
					$this->set_freeunitsperyear($val);
					$this->set_freeunitsperyear_original($val);
					break;
				case "contract_template_pos.freeunitspermonth":
					$this->set_freeunitspermonth($val);
					$this->set_freeunitspermonth_original($val);
					break;
				case "contract_template_pos.freeunitsperweek":
					$this->set_freeunitsperweek($val);
					$this->set_freeunitsperweek_original($val);
					break;
				case "contract_template_pos.freeunitsperday":
					$this->set_freeunitsperday($val);
					$this->set_freeunitsperday_original($val);
					break;
				case "contract_template_pos.increaseperyear":
					$this->set_increaseperyear($val);
					$this->set_increaseperyear_original($val);
					break;
				case "contract_template_pos.increasepermonth":
					$this->set_increasepermonth($val);
					$this->set_increasepermonth_original($val);
					break;
				case "contract_template_pos.amountperyear":
					$this->set_amountperyear($val);
					$this->set_amountperyear_original($val);
					break;
				case "contract_template_pos.amountpermonth":
					$this->set_amountpermonth($val);
					$this->set_amountpermonth_original($val);
					break;
				case "contract_template_pos.amountperweek":
					$this->set_amountperweek($val);
					$this->set_amountperweek_original($val);
					break;
				case "contract_template_pos.amountperday":
					$this->set_amountperday($val);
					$this->set_amountperday_original($val);
					break;
				case "contract_template_pos.durationinmonths":
					$this->set_durationinmonths($val);
					$this->set_durationinmonths_original($val);
					break;
				case "contract_template_pos.maincontract":
					$this->set_maincontract($val);
					$this->set_maincontract_original($val);
					break;
				case "contract_template_pos.id_article":
					$this->set_id_article($val);
					$this->set_id_article_original($val);
					break;
				case "contract_template_pos.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "contract_template_pos.id_contract_template":
					$this->set_id_contract_template($val);
					$this->set_id_contract_template_original($val);
					break;
				case "contract_template_pos.id":
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
		$contract_template_pos = cls_table_factory::create_instance('contract_template_pos');
		$row = $db_manager->fetch_row($result);
		$contract_template_pos->fill($row);
		return $contract_template_pos;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_contract_template_pos.php');
		return cls_save_contract_template_pos::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_contract_template_pos.php');
		return cls_save_contract_template_pos::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_contract_template_poss($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('contract_template_pos',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('contract_template_pos',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_template_pos = cls_table_factory::create_instance('contract_template_pos');
				$contract_template_pos->fill($row);
				$data[] = $contract_template_pos;
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

//changed 1
public function get_contract_pos($db_manager,$application)
	{
		$result = $db_manager->get_records('contract_pos',$this->get_id(),'id_contract_template_pos');
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
public function get_contract_poss_by_contract_template_pos($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('contract_pos',$this->get_id(),'id_contract_template_pos');
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

public function get_multi_contract_poss_by_contract_template_pos($contract_template_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('contract_pos',$contract_template_poss,'id_contract_template_pos');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_pos = cls_table_factory::create_instance('contract_pos');
				$contract_pos->fill($row);
				if (!array_key_exists($data[$row['id_contract_template_pos']]))
				{
					$data[$row['id_contract_template_pos']] = array();
				}
				$data[$row['id_contract_template_pos']][] = $contract_pos;
			}
		return $data;
	}

public function get_table_test_data($contract_template_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($contract_template_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$contract_template_poss,'id_data');
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

public function get_communication_reason($contract_template_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($contract_template_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$contract_template_poss,'id_data');
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

public function get_data_change($contract_template_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($contract_template_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$contract_template_poss,'id_data');
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

public function get_data_help($contract_template_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($contract_template_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$contract_template_poss,'id_data');
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

public function get_data_location($contract_template_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($contract_template_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$contract_template_poss,'id_data');
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

public function get_data_posting($contract_template_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($contract_template_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$contract_template_poss,'id_data');
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

public function get_offer_event($contract_template_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($contract_template_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$contract_template_poss,'id_data');
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

public function get_supplier_data($contract_template_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($contract_template_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$contract_template_poss,'id_data');
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

public function get_address($contract_template_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($contract_template_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$contract_template_poss,'id_data');
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

public function get_data_property($contract_template_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($contract_template_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$contract_template_poss,'id_data');
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

public function get_data_translation($contract_template_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($contract_template_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$contract_template_poss,'id_data');
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

public function get_dms($contract_template_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($contract_template_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$contract_template_poss,'id_data');
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

public function get_data_relation_id_data1($contract_template_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($contract_template_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$contract_template_poss,'id_data1');
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

public function get_data_relation_id_data2($contract_template_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($contract_template_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$contract_template_poss,'id_data2');
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

public function get_data_property_id_link_data($contract_template_poss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($contract_template_poss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$contract_template_poss,'id_link_data');
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
