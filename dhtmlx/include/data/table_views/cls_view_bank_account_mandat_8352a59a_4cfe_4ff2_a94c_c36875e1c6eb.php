<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_bank_account_mandat_8352a59a_4cfe_4ff2_a94c_c36875e1c6eb extends cls_table_view_base 
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
		$common_bank_account_mandat = cls_table_factory::get_common_bank_account_mandat();
		$array_bank_account_mandat =  $common_bank_account_mandat->get_bank_account_mandats($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_bank_account($array_bank_account_mandat);
		$data_array_id_bank_account = $this->fill_distinct_id_bank_account($where);

		$result_array = array();
		foreach($array_bank_account_mandat as $bank_account_mandat)
			{
			$bank_account_mandat_id = $bank_account_mandat->get_id();
			$result_array[$bank_account_mandat_id]['bank_account_mandat.id'] = $bank_account_mandat->get_id();
			$link_id = $bank_account_mandat->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$bank_account_mandat_id]['bank_account.bankcode'] = '';
				}
			else
				{
				$result_array[$bank_account_mandat_id]['bank_account.bankcode'] = $data_array_id_bank_account[$link_id]->get_bankcode();
				}
			$link_id = $bank_account_mandat->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$bank_account_mandat_id]['bank_account.accountno'] = '';
				}
			else
				{
				$result_array[$bank_account_mandat_id]['bank_account.accountno'] = $data_array_id_bank_account[$link_id]->get_accountno();
				}
			$link_id = $bank_account_mandat->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$bank_account_mandat_id]['bank_account.iban'] = '';
				}
			else
				{
				$result_array[$bank_account_mandat_id]['bank_account.iban'] = $data_array_id_bank_account[$link_id]->get_iban();
				}
			$link_id = $bank_account_mandat->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$bank_account_mandat_id]['bank_account.bic'] = '';
				}
			else
				{
				$result_array[$bank_account_mandat_id]['bank_account.bic'] = $data_array_id_bank_account[$link_id]->get_bic();
				}
			$link_id = $bank_account_mandat->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$bank_account_mandat_id]['bank_account.holder'] = '';
				}
			else
				{
				$result_array[$bank_account_mandat_id]['bank_account.holder'] = $data_array_id_bank_account[$link_id]->get_holder();
				}
			$result_array[$bank_account_mandat_id]['bank_account_mandat.mandatsreferenzno'] = $bank_account_mandat->get_mandatsreferenzno();
			$result_array[$bank_account_mandat_id]['bank_account_mandat.signaturedate'] = $bank_account_mandat->get_signaturedate();
			$result_array[$bank_account_mandat_id]['bank_account_mandat.issuedate'] = $bank_account_mandat->get_issuedate();
			$result_array[$bank_account_mandat_id]['bank_account_mandat.firstname'] = $bank_account_mandat->get_firstname();
			$result_array[$bank_account_mandat_id]['bank_account_mandat.lastname'] = $bank_account_mandat->get_lastname();
			$result_array[$bank_account_mandat_id]['bank_account_mandat.address'] = $bank_account_mandat->get_address();
			$result_array[$bank_account_mandat_id]['bank_account_mandat.zip'] = $bank_account_mandat->get_zip();
			$result_array[$bank_account_mandat_id]['bank_account_mandat.city'] = $bank_account_mandat->get_city();
			$result_array[$bank_account_mandat_id]['bank_account_mandat.iban'] = $bank_account_mandat->get_iban();
			$result_array[$bank_account_mandat_id]['bank_account_mandat.bic'] = $bank_account_mandat->get_bic();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_bank_account($array_bank_account_mandat)
	{
		$ids = array();
		foreach ($array_bank_account_mandat as $bank_account_mandat)
		{
			$id = $bank_account_mandat->get_id_bank_account();
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
			$this->p_column_definitions['bank_account_mandat.id']['type'] = 'uuid';
			$this->p_column_definitions['bank_account.bankcode']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.accountno']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.iban']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.bic']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.holder']['type'] = 'varchar';
			$this->p_column_definitions['bank_account_mandat.mandatsreferenzno']['type'] = 'varchar';
			$this->p_column_definitions['bank_account_mandat.signaturedate']['type'] = 'date';
			$this->p_column_definitions['bank_account_mandat.issuedate']['type'] = 'date';
			$this->p_column_definitions['bank_account_mandat.firstname']['type'] = 'varchar';
			$this->p_column_definitions['bank_account_mandat.lastname']['type'] = 'varchar';
			$this->p_column_definitions['bank_account_mandat.address']['type'] = 'varchar';
			$this->p_column_definitions['bank_account_mandat.zip']['type'] = 'varchar';
			$this->p_column_definitions['bank_account_mandat.city']['type'] = 'varchar';
			$this->p_column_definitions['bank_account_mandat.iban']['type'] = 'varchar';
			$this->p_column_definitions['bank_account_mandat.bic']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
