<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_contract_plan_902a7ffd_a054_4c96_8220_ab9c0bfbbe9e extends cls_table_view_base 
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
		$common_contract_plan = cls_table_factory::get_common_contract_plan();
		$array_contract_plan =  $common_contract_plan->get_contract_plans($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_posting_header($array_contract_plan);
		$data_array_id_posting_header = $this->fill_distinct_id_posting_header($where);

		$result_array = array();
		foreach($array_contract_plan as $contract_plan)
			{
			$contract_plan_id = $contract_plan->get_id();
			$result_array[$contract_plan_id]['contract_plan.id'] = $contract_plan->get_id();
			$result_array[$contract_plan_id]['contract_plan.datefrom'] = $contract_plan->get_datefrom();
			$result_array[$contract_plan_id]['contract_plan.datetil'] = $contract_plan->get_datetil();
			$result_array[$contract_plan_id]['contract_plan.amount'] = $contract_plan->get_amount();
			$result_array[$contract_plan_id]['contract_plan.duedate'] = $contract_plan->get_duedate();
			$link_id = $contract_plan->get_id_posting_header();
			if (empty($link_id))
				{
				$result_array[$contract_plan_id]['posting_header.remark'] = '';
				}
			else
				{
				$result_array[$contract_plan_id]['posting_header.remark'] = $data_array_id_posting_header[$link_id]->get_remark();
				}
			$link_id = $contract_plan->get_id_posting_header();
			if (empty($link_id))
				{
				$result_array[$contract_plan_id]['posting_header.systemremark'] = '';
				}
			else
				{
				$result_array[$contract_plan_id]['posting_header.systemremark'] = $data_array_id_posting_header[$link_id]->get_systemremark();
				}
			$result_array[$contract_plan_id]['contract_plan.type'] = $contract_plan->get_type();
			$result_array[$contract_plan_id]['contract_plan.paymenttype'] = $contract_plan->get_paymenttype();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_posting_header($array_contract_plan)
	{
		$ids = array();
		foreach ($array_contract_plan as $contract_plan)
		{
			$id = $contract_plan->get_id_posting_header();
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

	private function fill_distinct_id_posting_header($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "posting_header.id",posting_header.remark as "posting_header.remark",posting_header.systemremark as "posting_header.systemremark" from posting_header where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$posting_header = cls_table_factory::create_instance('posting_header');
			$posting_header->fill($row);
			$data[$row['posting_header.id']] = $posting_header;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['contract_plan.id']['type'] = 'uuid';
			$this->p_column_definitions['contract_plan.datefrom']['type'] = 'date';
			$this->p_column_definitions['contract_plan.datetil']['type'] = 'date';
			$this->p_column_definitions['contract_plan.amount']['type'] = 'money';
			$this->p_column_definitions['contract_plan.duedate']['type'] = 'date';
			$this->p_column_definitions['posting_header.remark']['type'] = 'varchar';
			$this->p_column_definitions['posting_header.systemremark']['type'] = 'varchar';
			$this->p_column_definitions['contract_plan.type']['type'] = 'bpchar';
			$this->p_column_definitions['contract_plan.paymenttype']['type'] = 'bpchar';
		}
		return $this->p_column_definitions;
	}
}
?>
