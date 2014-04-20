<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_account_8865e48a_a302_45e6_bcc5_a43e0d10844c extends cls_table_view_base 
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
		$common_account = cls_table_factory::get_common_account();
		$array_account =  $common_account->get_accounts($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_account_chart_of_account($array_account);
		$data_array_id_account_chart_of_account = $this->fill_distinct_id_account_chart_of_account($where);

		$result_array = array();
		foreach($array_account as $account)
			{
			$account_id = $account->get_id();
			$result_array[$account_id]['account.id'] = $account->get_id();
			$link_id = $account->get_id_account_chart_of_account();
			if (empty($link_id))
				{
				$result_array[$account_id]['account_chart_of_account.name'] = '';
				}
			else
				{
				$result_array[$account_id]['account_chart_of_account.name'] = $data_array_id_account_chart_of_account[$link_id]->get_name();
				}
			$result_array[$account_id]['account.accountno'] = $account->get_accountno();
			$result_array[$account_id]['account.name'] = $account->get_name();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_account_chart_of_account($array_account)
	{
		$ids = array();
		foreach ($array_account as $account)
		{
			$id = $account->get_id_account_chart_of_account();
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

	private function fill_distinct_id_account_chart_of_account($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "account_chart_of_account.id",account_chart_of_account.name as "account_chart_of_account.name" from account_chart_of_account where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$account_chart_of_account = cls_table_factory::create_instance('account_chart_of_account');
			$account_chart_of_account->fill($row);
			$data[$row['account_chart_of_account.id']] = $account_chart_of_account;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['account.id']['type'] = 'uuid';
			$this->p_column_definitions['account_chart_of_account.name']['type'] = 'varchar';
			$this->p_column_definitions['account.accountno']['type'] = 'varchar';
			$this->p_column_definitions['account.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
