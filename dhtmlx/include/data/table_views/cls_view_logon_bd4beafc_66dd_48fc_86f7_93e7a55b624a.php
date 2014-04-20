<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_logon_bd4beafc_66dd_48fc_86f7_93e7a55b624a extends cls_table_view_base 
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
		$common_logon = cls_table_factory::get_common_logon();
		$array_logon =  $common_logon->get_logons($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person($array_logon);
		$data_array_id_person = $this->fill_distinct_id_person($where);

		$where = $this->get_distinct_ids_id_location($array_logon);
		$data_array_id_location = $this->fill_distinct_id_location($where);

		$result_array = array();
		foreach($array_logon as $logon)
			{
			$logon_id = $logon->get_id();
			$result_array[$logon_id]['logon.id'] = $logon->get_id();
			$link_id = $logon->get_id_person();
			if (empty($link_id))
				{
				$result_array[$logon_id]['person.name'] = '';
				}
			else
				{
				$result_array[$logon_id]['person.name'] = $data_array_id_person[$link_id]->get_name();
				}
			$result_array[$logon_id]['logon.username'] = $logon->get_username();
			$result_array[$logon_id]['logon.password'] = $logon->get_password();
			$link_id = $logon->get_id_location();
			if (empty($link_id))
				{
				$result_array[$logon_id]['location.no'] = '';
				}
			else
				{
				$result_array[$logon_id]['location.no'] = $data_array_id_location[$link_id]->get_no();
				}
			$link_id = $logon->get_id_location();
			if (empty($link_id))
				{
				$result_array[$logon_id]['location.unique_credit_identifier'] = '';
				}
			else
				{
				$result_array[$logon_id]['location.unique_credit_identifier'] = $data_array_id_location[$link_id]->get_unique_credit_identifier();
				}
			$link_id = $logon->get_id_location();
			if (empty($link_id))
				{
				$result_array[$logon_id]['location.ik'] = '';
				}
			else
				{
				$result_array[$logon_id]['location.ik'] = $data_array_id_location[$link_id]->get_ik();
				}
			$link_id = $logon->get_id_location();
			if (empty($link_id))
				{
				$result_array[$logon_id]['location.taxid'] = '';
				}
			else
				{
				$result_array[$logon_id]['location.taxid'] = $data_array_id_location[$link_id]->get_taxid();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person($array_logon)
	{
		$ids = array();
		foreach ($array_logon as $logon)
		{
			$id = $logon->get_id_person();
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

	private function get_distinct_ids_id_location($array_logon)
	{
		$ids = array();
		foreach ($array_logon as $logon)
		{
			$id = $logon->get_id_location();
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

	private function fill_distinct_id_location($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "location.id",location.no as "location.no",location.unique_credit_identifier as "location.unique_credit_identifier",location.ik as "location.ik",location.taxid as "location.taxid" from location where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$location = cls_table_factory::create_instance('location');
			$location->fill($row);
			$data[$row['location.id']] = $location;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['logon.id']['type'] = 'uuid';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['logon.username']['type'] = 'varchar';
			$this->p_column_definitions['logon.password']['type'] = 'varchar';
			$this->p_column_definitions['location.no']['type'] = 'varchar';
			$this->p_column_definitions['location.unique_credit_identifier']['type'] = 'varchar';
			$this->p_column_definitions['location.ik']['type'] = 'varchar';
			$this->p_column_definitions['location.taxid']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
