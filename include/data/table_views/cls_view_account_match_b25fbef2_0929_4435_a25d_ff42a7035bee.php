<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_account_match_b25fbef2_0929_4435_a25d_ff42a7035bee extends cls_table_view_base 
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
		$common_account_match = cls_table_factory::get_common_account_match();
		$array_account_match =  $common_account_match->get_account_matchs($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_account_chart_of_account1($array_account_match);
		$data_array_id_account_chart_of_account1 = $this->fill_distinct_id_account_chart_of_account1($where);

		$where = $this->get_distinct_ids_id_account_chart_of_account2($array_account_match);
		$data_array_id_account_chart_of_account2 = $this->fill_distinct_id_account_chart_of_account2($where);

		$result_array = array();
		foreach($array_account_match as $account_match)
			{
			$account_match_id = $account_match->get_id();
			$result_array[$account_match_id]['account_match.id'] = $account_match->get_id();
			$link_id = $account_match->get_id_account_chart_of_account1();
			if (empty($link_id))
				{
				$result_array[$account_match_id]['account.name'] = '';
				}
			else
				{
				$result_array[$account_match_id]['account.name'] = $data_array_id_account_chart_of_account1[$link_id]->get_name();
				}
			$link_id = $account_match->get_id_account_chart_of_account2();
			if (empty($link_id))
				{
				$result_array[$account_match_id]['account.name'] = '';
				}
			else
				{
				$result_array[$account_match_id]['account.name'] = $data_array_id_account_chart_of_account2[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_account_chart_of_account1($array_account_match)
	{
		$ids = array();
		foreach ($array_account_match as $account_match)
		{
			$id = $account_match->get_id_account_chart_of_account1();
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

	private function fill_distinct_id_account_chart_of_account1($where)
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

	private function get_distinct_ids_id_account_chart_of_account2($array_account_match)
	{
		$ids = array();
		foreach ($array_account_match as $account_match)
		{
			$id = $account_match->get_id_account_chart_of_account2();
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

	private function fill_distinct_id_account_chart_of_account2($where)
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
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['account_match.id']['type'] = 'uuid';
			$this->p_column_definitions['account.name']['type'] = 'varchar';
			$this->p_column_definitions['account.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
