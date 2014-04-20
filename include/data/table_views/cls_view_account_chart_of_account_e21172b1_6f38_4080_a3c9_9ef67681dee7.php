<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_account_chart_of_account_e21172b1_6f38_4080_a3c9_9ef67681dee7 extends cls_table_view_base 
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
		$common_account_chart_of_account = cls_table_factory::get_common_account_chart_of_account();
		$array_account_chart_of_account =  $common_account_chart_of_account->get_account_chart_of_accounts($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_chart_of_account($array_account_chart_of_account);
		$data_array_id_chart_of_account = $this->fill_distinct_id_chart_of_account($where);

		$where = $this->get_distinct_ids_id_account_group($array_account_chart_of_account);
		$data_array_id_account_group = $this->fill_distinct_id_account_group($where);

		$result_array = array();
		foreach($array_account_chart_of_account as $account_chart_of_account)
			{
			$account_chart_of_account_id = $account_chart_of_account->get_id();
			$result_array[$account_chart_of_account_id]['account_chart_of_account.id'] = $account_chart_of_account->get_id();
			$link_id = $account_chart_of_account->get_id_chart_of_account();
			if (empty($link_id))
				{
				$result_array[$account_chart_of_account_id]['chart_of_account.name'] = '';
				}
			else
				{
				$result_array[$account_chart_of_account_id]['chart_of_account.name'] = $data_array_id_chart_of_account[$link_id]->get_name();
				}
			$link_id = $account_chart_of_account->get_id_account_group();
			if (empty($link_id))
				{
				$result_array[$account_chart_of_account_id]['account_group.name'] = '';
				}
			else
				{
				$result_array[$account_chart_of_account_id]['account_group.name'] = $data_array_id_account_group[$link_id]->get_name();
				}
			$result_array[$account_chart_of_account_id]['account_chart_of_account.accountno'] = $account_chart_of_account->get_accountno();
			$result_array[$account_chart_of_account_id]['account_chart_of_account.name'] = $account_chart_of_account->get_name();
			$result_array[$account_chart_of_account_id]['account_chart_of_account.freedigits'] = $account_chart_of_account->get_freedigits();
			$result_array[$account_chart_of_account_id]['account_chart_of_account.active'] = $account_chart_of_account->get_active();
			$result_array[$account_chart_of_account_id]['account_chart_of_account.type'] = $account_chart_of_account->get_type();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_chart_of_account($array_account_chart_of_account)
	{
		$ids = array();
		foreach ($array_account_chart_of_account as $account_chart_of_account)
		{
			$id = $account_chart_of_account->get_id_chart_of_account();
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

	private function fill_distinct_id_chart_of_account($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "chart_of_account.id",chart_of_account.name as "chart_of_account.name" from chart_of_account where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$chart_of_account = cls_table_factory::create_instance('chart_of_account');
			$chart_of_account->fill($row);
			$data[$row['chart_of_account.id']] = $chart_of_account;
		}
		return $data;
	}

	private function get_distinct_ids_id_account_group($array_account_chart_of_account)
	{
		$ids = array();
		foreach ($array_account_chart_of_account as $account_chart_of_account)
		{
			$id = $account_chart_of_account->get_id_account_group();
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

	private function fill_distinct_id_account_group($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "account_group.id",account_group.name as "account_group.name" from account_group where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$account_group = cls_table_factory::create_instance('account_group');
			$account_group->fill($row);
			$data[$row['account_group.id']] = $account_group;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['account_chart_of_account.id']['type'] = 'uuid';
			$this->p_column_definitions['chart_of_account.name']['type'] = 'varchar';
			$this->p_column_definitions['account_group.name']['type'] = 'varchar';
			$this->p_column_definitions['account_chart_of_account.accountno']['type'] = 'varchar';
			$this->p_column_definitions['account_chart_of_account.name']['type'] = 'varchar';
			$this->p_column_definitions['account_chart_of_account.freedigits']['type'] = 'int4';
			$this->p_column_definitions['account_chart_of_account.active']['type'] = 'bool';
			$this->p_column_definitions['account_chart_of_account.type']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
