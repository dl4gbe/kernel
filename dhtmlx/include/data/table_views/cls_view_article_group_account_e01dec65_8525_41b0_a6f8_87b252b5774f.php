<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_article_group_account_e01dec65_8525_41b0_a6f8_87b252b5774f extends cls_table_view_base 
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
		$common_article_group_account = cls_table_factory::get_common_article_group_account();
		$array_article_group_account =  $common_article_group_account->get_article_group_accounts($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_article_group($array_article_group_account);
		$data_array_id_article_group = $this->fill_distinct_id_article_group($where);

		$where = $this->get_distinct_ids_id_chart_of_account($array_article_group_account);
		$data_array_id_chart_of_account = $this->fill_distinct_id_chart_of_account($where);

		$where = $this->get_distinct_ids_id_account_revenue_account($array_article_group_account);
		$data_array_id_account_revenue_account = $this->fill_distinct_id_account_revenue_account($where);

		$where = $this->get_distinct_ids_id_account_expense_account($array_article_group_account);
		$data_array_id_account_expense_account = $this->fill_distinct_id_account_expense_account($where);

		$where = $this->get_distinct_ids_id_account_rent_revenue_account($array_article_group_account);
		$data_array_id_account_rent_revenue_account = $this->fill_distinct_id_account_rent_revenue_account($where);

		$result_array = array();
		foreach($array_article_group_account as $article_group_account)
			{
			$article_group_account_id = $article_group_account->get_id();
			$result_array[$article_group_account_id]['article_group_account.id'] = $article_group_account->get_id();
			$link_id = $article_group_account->get_id_article_group();
			if (empty($link_id))
				{
				$result_array[$article_group_account_id]['article_group.name'] = '';
				}
			else
				{
				$result_array[$article_group_account_id]['article_group.name'] = $data_array_id_article_group[$link_id]->get_name();
				}
			$link_id = $article_group_account->get_id_chart_of_account();
			if (empty($link_id))
				{
				$result_array[$article_group_account_id]['chart_of_account.name'] = '';
				}
			else
				{
				$result_array[$article_group_account_id]['chart_of_account.name'] = $data_array_id_chart_of_account[$link_id]->get_name();
				}
			$link_id = $article_group_account->get_id_account_revenue_account();
			if (empty($link_id))
				{
				$result_array[$article_group_account_id]['account.name'] = '';
				}
			else
				{
				$result_array[$article_group_account_id]['account.name'] = $data_array_id_account_revenue_account[$link_id]->get_name();
				}
			$link_id = $article_group_account->get_id_account_expense_account();
			if (empty($link_id))
				{
				$result_array[$article_group_account_id]['account.name'] = '';
				}
			else
				{
				$result_array[$article_group_account_id]['account.name'] = $data_array_id_account_expense_account[$link_id]->get_name();
				}
			$link_id = $article_group_account->get_id_account_rent_revenue_account();
			if (empty($link_id))
				{
				$result_array[$article_group_account_id]['account.name'] = '';
				}
			else
				{
				$result_array[$article_group_account_id]['account.name'] = $data_array_id_account_rent_revenue_account[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_article_group($array_article_group_account)
	{
		$ids = array();
		foreach ($array_article_group_account as $article_group_account)
		{
			$id = $article_group_account->get_id_article_group();
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

	private function fill_distinct_id_article_group($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "article_group.id",article_group.name as "article_group.name" from article_group where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$article_group = cls_table_factory::create_instance('article_group');
			$article_group->fill($row);
			$data[$row['article_group.id']] = $article_group;
		}
		return $data;
	}

	private function get_distinct_ids_id_chart_of_account($array_article_group_account)
	{
		$ids = array();
		foreach ($array_article_group_account as $article_group_account)
		{
			$id = $article_group_account->get_id_chart_of_account();
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

	private function get_distinct_ids_id_account_revenue_account($array_article_group_account)
	{
		$ids = array();
		foreach ($array_article_group_account as $article_group_account)
		{
			$id = $article_group_account->get_id_account_revenue_account();
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

	private function fill_distinct_id_account_revenue_account($where)
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

	private function get_distinct_ids_id_account_expense_account($array_article_group_account)
	{
		$ids = array();
		foreach ($array_article_group_account as $article_group_account)
		{
			$id = $article_group_account->get_id_account_expense_account();
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

	private function fill_distinct_id_account_expense_account($where)
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

	private function get_distinct_ids_id_account_rent_revenue_account($array_article_group_account)
	{
		$ids = array();
		foreach ($array_article_group_account as $article_group_account)
		{
			$id = $article_group_account->get_id_account_rent_revenue_account();
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

	private function fill_distinct_id_account_rent_revenue_account($where)
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
			$this->p_column_definitions['article_group_account.id']['type'] = 'uuid';
			$this->p_column_definitions['article_group.name']['type'] = 'varchar';
			$this->p_column_definitions['chart_of_account.name']['type'] = 'varchar';
			$this->p_column_definitions['account.name']['type'] = 'varchar';
			$this->p_column_definitions['account.name']['type'] = 'varchar';
			$this->p_column_definitions['account.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
