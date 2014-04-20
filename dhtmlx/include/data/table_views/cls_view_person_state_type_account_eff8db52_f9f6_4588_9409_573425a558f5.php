<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_person_state_type_account_eff8db52_f9f6_4588_9409_573425a558f5 extends cls_table_view_base 
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
		$common_person_state_type_account = cls_table_factory::get_common_person_state_type_account();
		$array_person_state_type_account =  $common_person_state_type_account->get_person_state_type_accounts($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person_state_type($array_person_state_type_account);
		$data_array_id_person_state_type = $this->fill_distinct_id_person_state_type($where);

		$where = $this->get_distinct_ids_id_chart_of_account($array_person_state_type_account);
		$data_array_id_chart_of_account = $this->fill_distinct_id_chart_of_account($where);

		$where = $this->get_distinct_ids_id_account_receivable($array_person_state_type_account);
		$data_array_id_account_receivable = $this->fill_distinct_id_account_receivable($where);

		$where = $this->get_distinct_ids_id_account_payable($array_person_state_type_account);
		$data_array_id_account_payable = $this->fill_distinct_id_account_payable($where);

		$result_array = array();
		foreach($array_person_state_type_account as $person_state_type_account)
			{
			$person_state_type_account_id = $person_state_type_account->get_id();
			$result_array[$person_state_type_account_id]['person_state_type_account.id'] = $person_state_type_account->get_id();
			$link_id = $person_state_type_account->get_id_person_state_type();
			if (empty($link_id))
				{
				$result_array[$person_state_type_account_id]['person_state_type.name'] = '';
				}
			else
				{
				$result_array[$person_state_type_account_id]['person_state_type.name'] = $data_array_id_person_state_type[$link_id]->get_name();
				}
			$link_id = $person_state_type_account->get_id_chart_of_account();
			if (empty($link_id))
				{
				$result_array[$person_state_type_account_id]['chart_of_account.name'] = '';
				}
			else
				{
				$result_array[$person_state_type_account_id]['chart_of_account.name'] = $data_array_id_chart_of_account[$link_id]->get_name();
				}
			$link_id = $person_state_type_account->get_id_account_receivable();
			if (empty($link_id))
				{
				$result_array[$person_state_type_account_id]['account.name'] = '';
				}
			else
				{
				$result_array[$person_state_type_account_id]['account.name'] = $data_array_id_account_receivable[$link_id]->get_name();
				}
			$link_id = $person_state_type_account->get_id_account_payable();
			if (empty($link_id))
				{
				$result_array[$person_state_type_account_id]['account.name'] = '';
				}
			else
				{
				$result_array[$person_state_type_account_id]['account.name'] = $data_array_id_account_payable[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person_state_type($array_person_state_type_account)
	{
		$ids = array();
		foreach ($array_person_state_type_account as $person_state_type_account)
		{
			$id = $person_state_type_account->get_id_person_state_type();
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

	private function fill_distinct_id_person_state_type($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "person_state_type.id",person_state_type.name as "person_state_type.name" from person_state_type where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$person_state_type = cls_table_factory::create_instance('person_state_type');
			$person_state_type->fill($row);
			$data[$row['person_state_type.id']] = $person_state_type;
		}
		return $data;
	}

	private function get_distinct_ids_id_chart_of_account($array_person_state_type_account)
	{
		$ids = array();
		foreach ($array_person_state_type_account as $person_state_type_account)
		{
			$id = $person_state_type_account->get_id_chart_of_account();
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

	private function get_distinct_ids_id_account_receivable($array_person_state_type_account)
	{
		$ids = array();
		foreach ($array_person_state_type_account as $person_state_type_account)
		{
			$id = $person_state_type_account->get_id_account_receivable();
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

	private function fill_distinct_id_account_receivable($where)
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

	private function get_distinct_ids_id_account_payable($array_person_state_type_account)
	{
		$ids = array();
		foreach ($array_person_state_type_account as $person_state_type_account)
		{
			$id = $person_state_type_account->get_id_account_payable();
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

	private function fill_distinct_id_account_payable($where)
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
			$this->p_column_definitions['person_state_type_account.id']['type'] = 'uuid';
			$this->p_column_definitions['person_state_type.name']['type'] = 'varchar';
			$this->p_column_definitions['chart_of_account.name']['type'] = 'varchar';
			$this->p_column_definitions['account.name']['type'] = 'varchar';
			$this->p_column_definitions['account.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
