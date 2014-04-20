<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_transfer_item_79167f39_6763_441f_81fd_277d8991c4d6 extends cls_table_view_base 
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
		$common_transfer_item = cls_table_factory::get_common_transfer_item();
		$array_transfer_item =  $common_transfer_item->get_transfer_items($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_transfer($array_transfer_item);
		$data_array_id_transfer = $this->fill_distinct_id_transfer($where);

		$where = $this->get_distinct_ids_id_posting_header($array_transfer_item);
		$data_array_id_posting_header = $this->fill_distinct_id_posting_header($where);

		$where = $this->get_distinct_ids_id_posting_header_storno($array_transfer_item);
		$data_array_id_posting_header_storno = $this->fill_distinct_id_posting_header_storno($where);

		$where = $this->get_distinct_ids_id_bank_account($array_transfer_item);
		$data_array_id_bank_account = $this->fill_distinct_id_bank_account($where);

		$result_array = array();
		foreach($array_transfer_item as $transfer_item)
			{
			$transfer_item_id = $transfer_item->get_id();
			$result_array[$transfer_item_id]['transfer_item.id'] = $transfer_item->get_id();
			$link_id = $transfer_item->get_id_transfer();
			if (empty($link_id))
				{
				$result_array[$transfer_item_id]['transfer.remark'] = '';
				}
			else
				{
				$result_array[$transfer_item_id]['transfer.remark'] = $data_array_id_transfer[$link_id]->get_remark();
				}
			$link_id = $transfer_item->get_id_posting_header();
			if (empty($link_id))
				{
				$result_array[$transfer_item_id]['posting_header.remark'] = '';
				}
			else
				{
				$result_array[$transfer_item_id]['posting_header.remark'] = $data_array_id_posting_header[$link_id]->get_remark();
				}
			$link_id = $transfer_item->get_id_posting_header();
			if (empty($link_id))
				{
				$result_array[$transfer_item_id]['posting_header.systemremark'] = '';
				}
			else
				{
				$result_array[$transfer_item_id]['posting_header.systemremark'] = $data_array_id_posting_header[$link_id]->get_systemremark();
				}
			$result_array[$transfer_item_id]['transfer_item.no'] = $transfer_item->get_no();
			$link_id = $transfer_item->get_id_posting_header_storno();
			if (empty($link_id))
				{
				$result_array[$transfer_item_id]['posting_header.remark'] = '';
				}
			else
				{
				$result_array[$transfer_item_id]['posting_header.remark'] = $data_array_id_posting_header_storno[$link_id]->get_remark();
				}
			$link_id = $transfer_item->get_id_posting_header_storno();
			if (empty($link_id))
				{
				$result_array[$transfer_item_id]['posting_header.systemremark'] = '';
				}
			else
				{
				$result_array[$transfer_item_id]['posting_header.systemremark'] = $data_array_id_posting_header_storno[$link_id]->get_systemremark();
				}
			$link_id = $transfer_item->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$transfer_item_id]['bank_account.bankcode'] = '';
				}
			else
				{
				$result_array[$transfer_item_id]['bank_account.bankcode'] = $data_array_id_bank_account[$link_id]->get_bankcode();
				}
			$link_id = $transfer_item->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$transfer_item_id]['bank_account.accountno'] = '';
				}
			else
				{
				$result_array[$transfer_item_id]['bank_account.accountno'] = $data_array_id_bank_account[$link_id]->get_accountno();
				}
			$link_id = $transfer_item->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$transfer_item_id]['bank_account.iban'] = '';
				}
			else
				{
				$result_array[$transfer_item_id]['bank_account.iban'] = $data_array_id_bank_account[$link_id]->get_iban();
				}
			$link_id = $transfer_item->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$transfer_item_id]['bank_account.bic'] = '';
				}
			else
				{
				$result_array[$transfer_item_id]['bank_account.bic'] = $data_array_id_bank_account[$link_id]->get_bic();
				}
			$link_id = $transfer_item->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$transfer_item_id]['bank_account.holder'] = '';
				}
			else
				{
				$result_array[$transfer_item_id]['bank_account.holder'] = $data_array_id_bank_account[$link_id]->get_holder();
				}
			$result_array[$transfer_item_id]['transfer_item.amount'] = $transfer_item->get_amount();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_transfer($array_transfer_item)
	{
		$ids = array();
		foreach ($array_transfer_item as $transfer_item)
		{
			$id = $transfer_item->get_id_transfer();
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

	private function fill_distinct_id_transfer($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "transfer.id",transfer.remark as "transfer.remark" from transfer where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$transfer = cls_table_factory::create_instance('transfer');
			$transfer->fill($row);
			$data[$row['transfer.id']] = $transfer;
		}
		return $data;
	}

	private function get_distinct_ids_id_posting_header($array_transfer_item)
	{
		$ids = array();
		foreach ($array_transfer_item as $transfer_item)
		{
			$id = $transfer_item->get_id_posting_header();
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

	private function get_distinct_ids_id_posting_header_storno($array_transfer_item)
	{
		$ids = array();
		foreach ($array_transfer_item as $transfer_item)
		{
			$id = $transfer_item->get_id_posting_header_storno();
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

	private function fill_distinct_id_posting_header_storno($where)
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

	private function get_distinct_ids_id_bank_account($array_transfer_item)
	{
		$ids = array();
		foreach ($array_transfer_item as $transfer_item)
		{
			$id = $transfer_item->get_id_bank_account();
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

	private function fill_distinct_id_bank_account($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "bank_account.id",bank_account.bankcode as "bank_account.bankcode",bank_account.accountno as "bank_account.accountno",bank_account.iban as "bank_account.iban",bank_account.bic as "bank_account.bic",bank_account.holder as "bank_account.holder" from bank_account where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$bank_account = cls_table_factory::create_instance('bank_account');
			$bank_account->fill($row);
			$data[$row['bank_account.id']] = $bank_account;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['transfer_item.id']['type'] = 'uuid';
			$this->p_column_definitions['transfer.remark']['type'] = 'varchar';
			$this->p_column_definitions['posting_header.remark']['type'] = 'varchar';
			$this->p_column_definitions['posting_header.systemremark']['type'] = 'varchar';
			$this->p_column_definitions['transfer_item.no']['type'] = 'varchar';
			$this->p_column_definitions['posting_header.remark']['type'] = 'varchar';
			$this->p_column_definitions['posting_header.systemremark']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.bankcode']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.accountno']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.iban']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.bic']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.holder']['type'] = 'varchar';
			$this->p_column_definitions['transfer_item.amount']['type'] = 'money';
		}
		return $this->p_column_definitions;
	}
}
?>
