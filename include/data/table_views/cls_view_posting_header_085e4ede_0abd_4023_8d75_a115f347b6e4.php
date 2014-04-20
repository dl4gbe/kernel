<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_posting_header_085e4ede_0abd_4023_8d75_a115f347b6e4 extends cls_table_view_base 
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
		$common_posting_header = cls_table_factory::get_common_posting_header();
		$array_posting_header =  $common_posting_header->get_posting_headers($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_offer_event($array_posting_header);
		$data_array_id_offer_event = $this->fill_distinct_id_offer_event($where);

		$where = $this->get_distinct_ids_id_contract($array_posting_header);
		$data_array_id_contract = $this->fill_distinct_id_contract($where);

		$result_array = array();
		foreach($array_posting_header as $posting_header)
			{
			$posting_header_id = $posting_header->get_id();
			$result_array[$posting_header_id]['posting_header.id'] = $posting_header->get_id();
			$result_array[$posting_header_id]['posting_header.remark'] = $posting_header->get_remark();
			$result_array[$posting_header_id]['posting_header.systemremark'] = $posting_header->get_systemremark();
			$result_array[$posting_header_id]['posting_header.remark'] = $posting_header->get_remark();
			$link_id = $posting_header->get_id_offer_event();
			if (empty($link_id))
				{
				$result_array[$posting_header_id]['offer_event.data1'] = '';
				}
			else
				{
				$result_array[$posting_header_id]['offer_event.data1'] = $data_array_id_offer_event[$link_id]->get_data1();
				}
			$link_id = $posting_header->get_id_offer_event();
			if (empty($link_id))
				{
				$result_array[$posting_header_id]['offer_event.data2'] = '';
				}
			else
				{
				$result_array[$posting_header_id]['offer_event.data2'] = $data_array_id_offer_event[$link_id]->get_data2();
				}
			$result_array[$posting_header_id]['posting_header.period'] = $posting_header->get_period();
			$result_array[$posting_header_id]['posting_header.systemremark'] = $posting_header->get_systemremark();
			$result_array[$posting_header_id]['posting_header.duedate'] = $posting_header->get_duedate();
			$result_array[$posting_header_id]['posting_header.paymenttype'] = $posting_header->get_paymenttype();
			$link_id = $posting_header->get_id_contract();
			if (empty($link_id))
				{
				$result_array[$posting_header_id]['contract.contractno'] = '';
				}
			else
				{
				$result_array[$posting_header_id]['contract.contractno'] = $data_array_id_contract[$link_id]->get_contractno();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_offer_event($array_posting_header)
	{
		$ids = array();
		foreach ($array_posting_header as $posting_header)
		{
			$id = $posting_header->get_id_offer_event();
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

	private function fill_distinct_id_offer_event($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "offer_event.id",offer_event.data1 as "offer_event.data1",offer_event.data2 as "offer_event.data2" from offer_event where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$offer_event = cls_table_factory::create_instance('offer_event');
			$offer_event->fill($row);
			$data[$row['offer_event.id']] = $offer_event;
		}
		return $data;
	}

	private function get_distinct_ids_id_contract($array_posting_header)
	{
		$ids = array();
		foreach ($array_posting_header as $posting_header)
		{
			$id = $posting_header->get_id_contract();
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
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['posting_header.id']['type'] = 'uuid';
			$this->p_column_definitions['posting_header.remark']['type'] = 'varchar';
			$this->p_column_definitions['posting_header.systemremark']['type'] = 'varchar';
			$this->p_column_definitions['posting_header.remark']['type'] = 'varchar';
			$this->p_column_definitions['offer_event.data1']['type'] = 'varchar';
			$this->p_column_definitions['offer_event.data2']['type'] = 'varchar';
			$this->p_column_definitions['posting_header.period']['type'] = 'bpchar';
			$this->p_column_definitions['posting_header.systemremark']['type'] = 'varchar';
			$this->p_column_definitions['posting_header.duedate']['type'] = 'date';
			$this->p_column_definitions['posting_header.paymenttype']['type'] = 'bpchar';
			$this->p_column_definitions['contract.contractno']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
