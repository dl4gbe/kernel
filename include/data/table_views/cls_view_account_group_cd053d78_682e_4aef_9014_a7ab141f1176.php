<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_account_group_cd053d78_682e_4aef_9014_a7ab141f1176 extends cls_table_view_base 
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
		$common_account_group = cls_table_factory::get_common_account_group();
		$array_account_group =  $common_account_group->get_account_groups($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_chart_of_account($array_account_group);
		$data_array_id_chart_of_account = $this->fill_distinct_id_chart_of_account($where);

		$result_array = array();
		foreach($array_account_group as $account_group)
			{
			$account_group_id = $account_group->get_id();
			$result_array[$account_group_id]['account_group.id'] = $account_group->get_id();
			$link_id = $account_group->get_id_chart_of_account();
			if (empty($link_id))
				{
				$result_array[$account_group_id]['chart_of_account.name'] = '';
				}
			else
				{
				$result_array[$account_group_id]['chart_of_account.name'] = $data_array_id_chart_of_account[$link_id]->get_name();
				}
			$result_array[$account_group_id]['account_group.no'] = $account_group->get_no();
			$result_array[$account_group_id]['account_group.name'] = $account_group->get_name();
			$result_array[$account_group_id]['account_group.accountfrom'] = $account_group->get_accountfrom();
			$result_array[$account_group_id]['account_group.accounttil'] = $account_group->get_accounttil();
			$result_array[$account_group_id]['account_group.balancesheetaccount'] = $account_group->get_balancesheetaccount();
			$result_array[$account_group_id]['account_group.profitandlostaccount'] = $account_group->get_profitandlostaccount();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_chart_of_account($array_account_group)
	{
		$ids = array();
		foreach ($array_account_group as $account_group)
		{
			$id = $account_group->get_id_chart_of_account();
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
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['account_group.id']['type'] = 'uuid';
			$this->p_column_definitions['chart_of_account.name']['type'] = 'varchar';
			$this->p_column_definitions['account_group.no']['type'] = 'varchar';
			$this->p_column_definitions['account_group.name']['type'] = 'varchar';
			$this->p_column_definitions['account_group.accountfrom']['type'] = 'varchar';
			$this->p_column_definitions['account_group.accounttil']['type'] = 'varchar';
			$this->p_column_definitions['account_group.balancesheetaccount']['type'] = 'bool';
			$this->p_column_definitions['account_group.profitandlostaccount']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
