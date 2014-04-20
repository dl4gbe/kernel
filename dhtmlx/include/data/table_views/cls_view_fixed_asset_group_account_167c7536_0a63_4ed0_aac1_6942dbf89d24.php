<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_fixed_asset_group_account_167c7536_0a63_4ed0_aac1_6942dbf89d24 extends cls_table_view_base 
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
		$common_fixed_asset_group_account = cls_table_factory::get_common_fixed_asset_group_account();
		$array_fixed_asset_group_account =  $common_fixed_asset_group_account->get_fixed_asset_group_accounts($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_fixed_asset_group($array_fixed_asset_group_account);
		$data_array_id_fixed_asset_group = $this->fill_distinct_id_fixed_asset_group($where);

		$where = $this->get_distinct_ids_id_chart_of_account($array_fixed_asset_group_account);
		$data_array_id_chart_of_account = $this->fill_distinct_id_chart_of_account($where);

		$where = $this->get_distinct_ids_id_account_asset($array_fixed_asset_group_account);
		$data_array_id_account_asset = $this->fill_distinct_id_account_asset($where);

		$where = $this->get_distinct_ids_id_account_depreciation($array_fixed_asset_group_account);
		$data_array_id_account_depreciation = $this->fill_distinct_id_account_depreciation($where);

		$result_array = array();
		foreach($array_fixed_asset_group_account as $fixed_asset_group_account)
			{
			$fixed_asset_group_account_id = $fixed_asset_group_account->get_id();
			$result_array[$fixed_asset_group_account_id]['fixed_asset_group_account.id'] = $fixed_asset_group_account->get_id();
			$link_id = $fixed_asset_group_account->get_id_fixed_asset_group();
			if (empty($link_id))
				{
				$result_array[$fixed_asset_group_account_id]['fixed_asset_group.name'] = '';
				}
			else
				{
				$result_array[$fixed_asset_group_account_id]['fixed_asset_group.name'] = $data_array_id_fixed_asset_group[$link_id]->get_name();
				}
			$link_id = $fixed_asset_group_account->get_id_chart_of_account();
			if (empty($link_id))
				{
				$result_array[$fixed_asset_group_account_id]['chart_of_account.name'] = '';
				}
			else
				{
				$result_array[$fixed_asset_group_account_id]['chart_of_account.name'] = $data_array_id_chart_of_account[$link_id]->get_name();
				}
			$link_id = $fixed_asset_group_account->get_id_account_asset();
			if (empty($link_id))
				{
				$result_array[$fixed_asset_group_account_id]['account.name'] = '';
				}
			else
				{
				$result_array[$fixed_asset_group_account_id]['account.name'] = $data_array_id_account_asset[$link_id]->get_name();
				}
			$link_id = $fixed_asset_group_account->get_id_account_depreciation();
			if (empty($link_id))
				{
				$result_array[$fixed_asset_group_account_id]['account.name'] = '';
				}
			else
				{
				$result_array[$fixed_asset_group_account_id]['account.name'] = $data_array_id_account_depreciation[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_fixed_asset_group($array_fixed_asset_group_account)
	{
		$ids = array();
		foreach ($array_fixed_asset_group_account as $fixed_asset_group_account)
		{
			$id = $fixed_asset_group_account->get_id_fixed_asset_group();
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

	private function fill_distinct_id_fixed_asset_group($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "fixed_asset_group.id",fixed_asset_group.name as "fixed_asset_group.name" from fixed_asset_group where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$fixed_asset_group = cls_table_factory::create_instance('fixed_asset_group');
			$fixed_asset_group->fill($row);
			$data[$row['fixed_asset_group.id']] = $fixed_asset_group;
		}
		return $data;
	}

	private function get_distinct_ids_id_chart_of_account($array_fixed_asset_group_account)
	{
		$ids = array();
		foreach ($array_fixed_asset_group_account as $fixed_asset_group_account)
		{
			$id = $fixed_asset_group_account->get_id_chart_of_account();
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

	private function get_distinct_ids_id_account_asset($array_fixed_asset_group_account)
	{
		$ids = array();
		foreach ($array_fixed_asset_group_account as $fixed_asset_group_account)
		{
			$id = $fixed_asset_group_account->get_id_account_asset();
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

	private function fill_distinct_id_account_asset($where)
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

	private function get_distinct_ids_id_account_depreciation($array_fixed_asset_group_account)
	{
		$ids = array();
		foreach ($array_fixed_asset_group_account as $fixed_asset_group_account)
		{
			$id = $fixed_asset_group_account->get_id_account_depreciation();
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

	private function fill_distinct_id_account_depreciation($where)
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
			$this->p_column_definitions['fixed_asset_group_account.id']['type'] = 'uuid';
			$this->p_column_definitions['fixed_asset_group.name']['type'] = 'varchar';
			$this->p_column_definitions['chart_of_account.name']['type'] = 'varchar';
			$this->p_column_definitions['account.name']['type'] = 'varchar';
			$this->p_column_definitions['account.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
