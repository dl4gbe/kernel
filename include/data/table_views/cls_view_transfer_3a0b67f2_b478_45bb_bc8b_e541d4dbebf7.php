<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_transfer_3a0b67f2_b478_45bb_bc8b_e541d4dbebf7 extends cls_table_view_base 
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
		$common_transfer = cls_table_factory::get_common_transfer();
		$array_transfer =  $common_transfer->get_transfers($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person_employee($array_transfer);
		$data_array_id_person_employee = $this->fill_distinct_id_person_employee($where);

		$where = $this->get_distinct_ids_id_bank_account($array_transfer);
		$data_array_id_bank_account = $this->fill_distinct_id_bank_account($where);

		$where = $this->get_distinct_ids_id_person_storno($array_transfer);
		$data_array_id_person_storno = $this->fill_distinct_id_person_storno($where);

		$result_array = array();
		foreach($array_transfer as $transfer)
			{
			$transfer_id = $transfer->get_id();
			$result_array[$transfer_id]['transfer.id'] = $transfer->get_id();
			$link_id = $transfer->get_id_person_employee();
			if (empty($link_id))
				{
				$result_array[$transfer_id]['person.name'] = '';
				}
			else
				{
				$result_array[$transfer_id]['person.name'] = $data_array_id_person_employee[$link_id]->get_name();
				}
			$result_array[$transfer_id]['transfer.rundate'] = $transfer->get_rundate();
			$result_array[$transfer_id]['transfer.typ'] = $transfer->get_typ();
			$link_id = $transfer->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$transfer_id]['bank_account.bankcode'] = '';
				}
			else
				{
				$result_array[$transfer_id]['bank_account.bankcode'] = $data_array_id_bank_account[$link_id]->get_bankcode();
				}
			$link_id = $transfer->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$transfer_id]['bank_account.accountno'] = '';
				}
			else
				{
				$result_array[$transfer_id]['bank_account.accountno'] = $data_array_id_bank_account[$link_id]->get_accountno();
				}
			$link_id = $transfer->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$transfer_id]['bank_account.iban'] = '';
				}
			else
				{
				$result_array[$transfer_id]['bank_account.iban'] = $data_array_id_bank_account[$link_id]->get_iban();
				}
			$link_id = $transfer->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$transfer_id]['bank_account.bic'] = '';
				}
			else
				{
				$result_array[$transfer_id]['bank_account.bic'] = $data_array_id_bank_account[$link_id]->get_bic();
				}
			$link_id = $transfer->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$transfer_id]['bank_account.holder'] = '';
				}
			else
				{
				$result_array[$transfer_id]['bank_account.holder'] = $data_array_id_bank_account[$link_id]->get_holder();
				}
			$result_array[$transfer_id]['transfer.stornodate'] = $transfer->get_stornodate();
			$link_id = $transfer->get_id_person_storno();
			if (empty($link_id))
				{
				$result_array[$transfer_id]['person.name'] = '';
				}
			else
				{
				$result_array[$transfer_id]['person.name'] = $data_array_id_person_storno[$link_id]->get_name();
				}
			$result_array[$transfer_id]['transfer.defaultrun'] = $transfer->get_defaultrun();
			$result_array[$transfer_id]['transfer.remark'] = $transfer->get_remark();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person_employee($array_transfer)
	{
		$ids = array();
		foreach ($array_transfer as $transfer)
		{
			$id = $transfer->get_id_person_employee();
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

	private function fill_distinct_id_person_employee($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "person.id",person.name as "person.name" from person where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$person = cls_table_factory::create_instance('person');
			$person->fill($row);
			$data[$row['person.id']] = $person;
		}
		return $data;
	}

	private function get_distinct_ids_id_bank_account($array_transfer)
	{
		$ids = array();
		foreach ($array_transfer as $transfer)
		{
			$id = $transfer->get_id_bank_account();
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

	private function get_distinct_ids_id_person_storno($array_transfer)
	{
		$ids = array();
		foreach ($array_transfer as $transfer)
		{
			$id = $transfer->get_id_person_storno();
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

	private function fill_distinct_id_person_storno($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "person.id",person.name as "person.name" from person where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$person = cls_table_factory::create_instance('person');
			$person->fill($row);
			$data[$row['person.id']] = $person;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['transfer.id']['type'] = 'uuid';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['transfer.rundate']['type'] = 'timestamptz';
			$this->p_column_definitions['transfer.typ']['type'] = 'bpchar';
			$this->p_column_definitions['bank_account.bankcode']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.accountno']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.iban']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.bic']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.holder']['type'] = 'varchar';
			$this->p_column_definitions['transfer.stornodate']['type'] = 'timestamptz';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['transfer.defaultrun']['type'] = 'bool';
			$this->p_column_definitions['transfer.remark']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
