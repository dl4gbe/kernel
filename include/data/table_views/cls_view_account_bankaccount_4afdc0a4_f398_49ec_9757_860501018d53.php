<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_account_bankaccount_4afdc0a4_f398_49ec_9757_860501018d53 extends cls_table_view_base 
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
		$common_account_bankaccount = cls_table_factory::get_common_account_bankaccount();
		$array_account_bankaccount =  $common_account_bankaccount->get_account_bankaccounts($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_account($array_account_bankaccount);
		$data_array_id_account = $this->fill_distinct_id_account($where);

		$where = $this->get_distinct_ids_id_bankaccount($array_account_bankaccount);
		$data_array_id_bankaccount = $this->fill_distinct_id_bankaccount($where);

		$result_array = array();
		foreach($array_account_bankaccount as $account_bankaccount)
			{
			$account_bankaccount_id = $account_bankaccount->get_id();
			$result_array[$account_bankaccount_id]['account_bankaccount.id'] = $account_bankaccount->get_id();
			$link_id = $account_bankaccount->get_id_account();
			if (empty($link_id))
				{
				$result_array[$account_bankaccount_id]['account.name'] = '';
				}
			else
				{
				$result_array[$account_bankaccount_id]['account.name'] = $data_array_id_account[$link_id]->get_name();
				}
			$link_id = $account_bankaccount->get_id_bankaccount();
			if (empty($link_id))
				{
				$result_array[$account_bankaccount_id]['bank.name'] = '';
				}
			else
				{
				$result_array[$account_bankaccount_id]['bank.name'] = $data_array_id_bankaccount[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_account($array_account_bankaccount)
	{
		$ids = array();
		foreach ($array_account_bankaccount as $account_bankaccount)
		{
			$id = $account_bankaccount->get_id_account();
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

	private function fill_distinct_id_account($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "account.id",account.name as "account.name" from account where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$account = cls_table_factory::create_instance('account');
			$account->fill($row);
			$data[$row['account.id']] = $account;
		}
		return $data;
	}

	private function get_distinct_ids_id_bankaccount($array_account_bankaccount)
	{
		$ids = array();
		foreach ($array_account_bankaccount as $account_bankaccount)
		{
			$id = $account_bankaccount->get_id_bankaccount();
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

	private function fill_distinct_id_bankaccount($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "bank.id",bank.name as "bank.name" from bank where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$bank = cls_table_factory::create_instance('bank');
			$bank->fill($row);
			$data[$row['bank.id']] = $bank;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['account_bankaccount.id']['type'] = 'uuid';
			$this->p_column_definitions['account.name']['type'] = 'varchar';
			$this->p_column_definitions['bank.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
