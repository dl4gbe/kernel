<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_person_account_f98fc949_aca7_4bab_a54a_afe6ed0b3659 extends cls_table_view_base 
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
		$common_person_account = cls_table_factory::get_common_person_account();
		$array_person_account =  $common_person_account->get_person_accounts($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person($array_person_account);
		$data_array_id_person = $this->fill_distinct_id_person($where);

		$where = $this->get_distinct_ids_id_account_receivable($array_person_account);
		$data_array_id_account_receivable = $this->fill_distinct_id_account_receivable($where);

		$where = $this->get_distinct_ids_id_account_payable($array_person_account);
		$data_array_id_account_payable = $this->fill_distinct_id_account_payable($where);

		$result_array = array();
		foreach($array_person_account as $person_account)
			{
			$person_account_id = $person_account->get_id();
			$result_array[$person_account_id]['person_account.id'] = $person_account->get_id();
			$link_id = $person_account->get_id_person();
			if (empty($link_id))
				{
				$result_array[$person_account_id]['person.name'] = '';
				}
			else
				{
				$result_array[$person_account_id]['person.name'] = $data_array_id_person[$link_id]->get_name();
				}
			$result_array[$person_account_id]['person_account.customeraccountno'] = $person_account->get_customeraccountno();
			$result_array[$person_account_id]['person_account.supplieraccountno'] = $person_account->get_supplieraccountno();
			$link_id = $person_account->get_id_account_receivable();
			if (empty($link_id))
				{
				$result_array[$person_account_id]['account.name'] = '';
				}
			else
				{
				$result_array[$person_account_id]['account.name'] = $data_array_id_account_receivable[$link_id]->get_name();
				}
			$link_id = $person_account->get_id_account_payable();
			if (empty($link_id))
				{
				$result_array[$person_account_id]['account.name'] = '';
				}
			else
				{
				$result_array[$person_account_id]['account.name'] = $data_array_id_account_payable[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person($array_person_account)
	{
		$ids = array();
		foreach ($array_person_account as $person_account)
		{
			$id = $person_account->get_id_person();
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

	private function fill_distinct_id_person($where)
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

	private function get_distinct_ids_id_account_receivable($array_person_account)
	{
		$ids = array();
		foreach ($array_person_account as $person_account)
		{
			$id = $person_account->get_id_account_receivable();
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

	private function get_distinct_ids_id_account_payable($array_person_account)
	{
		$ids = array();
		foreach ($array_person_account as $person_account)
		{
			$id = $person_account->get_id_account_payable();
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
			$this->p_column_definitions['person_account.id']['type'] = 'uuid';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['person_account.customeraccountno']['type'] = 'varchar';
			$this->p_column_definitions['person_account.supplieraccountno']['type'] = 'varchar';
			$this->p_column_definitions['account.name']['type'] = 'varchar';
			$this->p_column_definitions['account.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
