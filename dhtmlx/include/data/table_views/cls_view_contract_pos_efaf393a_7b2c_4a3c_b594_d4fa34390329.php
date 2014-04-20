<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_contract_pos_efaf393a_7b2c_4a3c_b594_d4fa34390329 extends cls_table_view_base 
{
	private $p_column_definitions = null;

	function __construct()
	{
		$a = func_get_args();
		$i = func_num_args();
		if (method_exists($this,$f="__construct".$i))
		{
			call_user_func_array(array($this,$f),$a);
		}
	}
	public function query($search_values,$limit,$offset)
		{
		require_once('include/data/table_factory/cls_table_factory.php');
		$common_contract_pos = cls_table_factory::get_common_contract_pos();
		$array_contract_pos =  $common_contract_pos->get_contract_poss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_contract($array_contract_pos);
		$data_array_id_contract = $this->fill_distinct_id_contract($where);

		$where = $this->get_distinct_ids_id_article($array_contract_pos);
		$data_array_id_article = $this->fill_distinct_id_article($where);

		$where = $this->get_distinct_ids_id_contract_template_pos($array_contract_pos);
		$data_array_id_contract_template_pos = $this->fill_distinct_id_contract_template_pos($where);

		$result_array = array();
		foreach($array_contract_pos as $contract_pos)
			{
			$contract_pos_id = $contract_pos->get_id();
			$result_array[$contract_pos_id]['contract_pos.id'] = $contract_pos->get_id();
			$link_id = $contract_pos->get_id_contract();
			if (empty($link_id))
				{
				$result_array[$contract_pos_id]['contract.contractno'] = '';
				}
			else
				{
				$result_array[$contract_pos_id]['contract.contractno'] = $data_array_id_contract[$link_id]->get_contractno();
				}
			$result_array[$contract_pos_id]['contract_pos.startdate'] = $contract_pos->get_startdate();
			$result_array[$contract_pos_id]['contract_pos.maincontract'] = $contract_pos->get_maincontract();
			$result_array[$contract_pos_id]['contract_pos.paymenttype'] = $contract_pos->get_paymenttype();
			$result_array[$contract_pos_id]['contract_pos.enddate'] = $contract_pos->get_enddate();
			$result_array[$contract_pos_id]['contract_pos.paymentstart'] = $contract_pos->get_paymentstart();
			$result_array[$contract_pos_id]['contract_pos.cancelrequestreceived'] = $contract_pos->get_cancelrequestreceived();
			$result_array[$contract_pos_id]['contract_pos.extendable'] = $contract_pos->get_extendable();
			$link_id = $contract_pos->get_id_article();
			if (empty($link_id))
				{
				$result_array[$contract_pos_id]['article.name'] = '';
				}
			else
				{
				$result_array[$contract_pos_id]['article.name'] = $data_array_id_article[$link_id]->get_name();
				}
			$link_id = $contract_pos->get_id_contract_template_pos();
			if (empty($link_id))
				{
				$result_array[$contract_pos_id]['contract_template_pos.name'] = '';
				}
			else
				{
				$result_array[$contract_pos_id]['contract_template_pos.name'] = $data_array_id_contract_template_pos[$link_id]->get_name();
				}
			$result_array[$contract_pos_id]['contract_pos.payday'] = $contract_pos->get_payday();
			$result_array[$contract_pos_id]['contract_pos.paydow'] = $contract_pos->get_paydow();
			$result_array[$contract_pos_id]['contract_pos.durationinmonths'] = $contract_pos->get_durationinmonths();
			$result_array[$contract_pos_id]['contract_pos.extensioninmonth'] = $contract_pos->get_extensioninmonth();
			$result_array[$contract_pos_id]['contract_pos.amountperday'] = $contract_pos->get_amountperday();
			$result_array[$contract_pos_id]['contract_pos.amountperweek'] = $contract_pos->get_amountperweek();
			$result_array[$contract_pos_id]['contract_pos.amountpermonth'] = $contract_pos->get_amountpermonth();
			$result_array[$contract_pos_id]['contract_pos.amountperyear'] = $contract_pos->get_amountperyear();
			$result_array[$contract_pos_id]['contract_pos.increasepermonth'] = $contract_pos->get_increasepermonth();
			$result_array[$contract_pos_id]['contract_pos.increaseperyear'] = $contract_pos->get_increaseperyear();
			$result_array[$contract_pos_id]['contract_pos.freeunitsperday'] = $contract_pos->get_freeunitsperday();
			$result_array[$contract_pos_id]['contract_pos.freeunitsperweek'] = $contract_pos->get_freeunitsperweek();
			$result_array[$contract_pos_id]['contract_pos.freeunitspermonth'] = $contract_pos->get_freeunitspermonth();
			$result_array[$contract_pos_id]['contract_pos.freeunitsperyear'] = $contract_pos->get_freeunitsperyear();
			$result_array[$contract_pos_id]['contract_pos.paymentinterval'] = $contract_pos->get_paymentinterval();
			$result_array[$contract_pos_id]['contract_pos.paymentcycle'] = $contract_pos->get_paymentcycle();
			$result_array[$contract_pos_id]['contract_pos.paymentsduringrestperiod'] = $contract_pos->get_paymentsduringrestperiod();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_contract($array_contract_pos)
	{
		$ids = array();
		foreach ($array_contract_pos as $contract_pos)
		{
			$id = $contract_pos->get_id_contract();
			if (!in_array($id,$ids)) $ids[] = $id;
		}
		$i = 0;
		$in = "";
		foreach ($ids as $id)
		{
			if (empty($id)) continue;
			if ($i != 0) $in .= ',';
			$in .= "'" . $id . "'";
			$i++;
		}
		if (!empty($in)) $in = ' id in (' . $in . ')';
		return $in;
	}

	private function fill_distinct_id_contract($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "contract.id",contract.contractno as "contract.contractno" from contract where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$contract = cls_table_factory::create_instance('contract');
			$contract->fill($row);
			$data[$row['contract.id']] = $contract;
		}
		return $data;
	}

	private function get_distinct_ids_id_article($array_contract_pos)
	{
		$ids = array();
		foreach ($array_contract_pos as $contract_pos)
		{
			$id = $contract_pos->get_id_article();
			if (!in_array($id,$ids)) $ids[] = $id;
		}
		$i = 0;
		$in = "";
		foreach ($ids as $id)
		{
			if (empty($id)) continue;
			if ($i != 0) $in .= ',';
			$in .= "'" . $id . "'";
			$i++;
		}
		if (!empty($in)) $in = ' id in (' . $in . ')';
		return $in;
	}

	private function fill_distinct_id_article($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "article.id",article.name as "article.name" from article where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$article = cls_table_factory::create_instance('article');
			$article->fill($row);
			$data[$row['article.id']] = $article;
		}
		return $data;
	}

	private function get_distinct_ids_id_contract_template_pos($array_contract_pos)
	{
		$ids = array();
		foreach ($array_contract_pos as $contract_pos)
		{
			$id = $contract_pos->get_id_contract_template_pos();
			if (!in_array($id,$ids)) $ids[] = $id;
		}
		$i = 0;
		$in = "";
		foreach ($ids as $id)
		{
			if (empty($id)) continue;
			if ($i != 0) $in .= ',';
			$in .= "'" . $id . "'";
			$i++;
		}
		if (!empty($in)) $in = ' id in (' . $in . ')';
		return $in;
	}

	private function fill_distinct_id_contract_template_pos($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "contract_template_pos.id",contract_template_pos.name as "contract_template_pos.name" from contract_template_pos where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$contract_template_pos = cls_table_factory::create_instance('contract_template_pos');
			$contract_template_pos->fill($row);
			$data[$row['contract_template_pos.id']] = $contract_template_pos;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['contract_pos.id']['type'] = 'uuid';
			$this->p_column_definitions['contract.contractno']['type'] = 'varchar';
			$this->p_column_definitions['contract_pos.startdate']['type'] = 'date';
			$this->p_column_definitions['contract_pos.maincontract']['type'] = 'bool';
			$this->p_column_definitions['contract_pos.paymenttype']['type'] = 'bpchar';
			$this->p_column_definitions['contract_pos.enddate']['type'] = 'date';
			$this->p_column_definitions['contract_pos.paymentstart']['type'] = 'date';
			$this->p_column_definitions['contract_pos.cancelrequestreceived']['type'] = 'date';
			$this->p_column_definitions['contract_pos.extendable']['type'] = 'bool';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
			$this->p_column_definitions['contract_template_pos.name']['type'] = 'varchar';
			$this->p_column_definitions['contract_pos.payday']['type'] = 'int4';
			$this->p_column_definitions['contract_pos.paydow']['type'] = 'int4';
			$this->p_column_definitions['contract_pos.durationinmonths']['type'] = 'int4';
			$this->p_column_definitions['contract_pos.extensioninmonth']['type'] = 'int4';
			$this->p_column_definitions['contract_pos.amountperday']['type'] = 'money';
			$this->p_column_definitions['contract_pos.amountperweek']['type'] = 'money';
			$this->p_column_definitions['contract_pos.amountpermonth']['type'] = 'money';
			$this->p_column_definitions['contract_pos.amountperyear']['type'] = 'money';
			$this->p_column_definitions['contract_pos.increasepermonth']['type'] = 'numeric';
			$this->p_column_definitions['contract_pos.increaseperyear']['type'] = 'numeric';
			$this->p_column_definitions['contract_pos.freeunitsperday']['type'] = 'int4';
			$this->p_column_definitions['contract_pos.freeunitsperweek']['type'] = 'int4';
			$this->p_column_definitions['contract_pos.freeunitspermonth']['type'] = 'int4';
			$this->p_column_definitions['contract_pos.freeunitsperyear']['type'] = 'int4';
			$this->p_column_definitions['contract_pos.paymentinterval']['type'] = 'int4';
			$this->p_column_definitions['contract_pos.paymentcycle']['type'] = 'int4';
			$this->p_column_definitions['contract_pos.paymentsduringrestperiod']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
