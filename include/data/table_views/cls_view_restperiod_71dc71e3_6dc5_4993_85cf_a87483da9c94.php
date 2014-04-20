<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_restperiod_71dc71e3_6dc5_4993_85cf_a87483da9c94 extends cls_table_view_base 
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
		$common_restperiod = cls_table_factory::get_common_restperiod();
		$array_restperiod =  $common_restperiod->get_restperiods($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person($array_restperiod);
		$data_array_id_person = $this->fill_distinct_id_person($where);

		$where = $this->get_distinct_ids_id_contract($array_restperiod);
		$data_array_id_contract = $this->fill_distinct_id_contract($where);

		$result_array = array();
		foreach($array_restperiod as $restperiod)
			{
			$restperiod_id = $restperiod->get_id();
			$result_array[$restperiod_id]['restperiod.id'] = $restperiod->get_id();
			$link_id = $restperiod->get_id_person();
			if (empty($link_id))
				{
				$result_array[$restperiod_id]['person.name'] = '';
				}
			else
				{
				$result_array[$restperiod_id]['person.name'] = $data_array_id_person[$link_id]->get_name();
				}
			$link_id = $restperiod->get_id_contract();
			if (empty($link_id))
				{
				$result_array[$restperiod_id]['contract.contractno'] = '';
				}
			else
				{
				$result_array[$restperiod_id]['contract.contractno'] = $data_array_id_contract[$link_id]->get_contractno();
				}
			$result_array[$restperiod_id]['restperiod.startdate'] = $restperiod->get_startdate();
			$result_array[$restperiod_id]['restperiod.enddate'] = $restperiod->get_enddate();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person($array_restperiod)
	{
		$ids = array();
		foreach ($array_restperiod as $restperiod)
		{
			$id = $restperiod->get_id_person();
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

	private function get_distinct_ids_id_contract($array_restperiod)
	{
		$ids = array();
		foreach ($array_restperiod as $restperiod)
		{
			$id = $restperiod->get_id_contract();
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

	private function fill_distinct_id_contract($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "contract.id",contract.contractno as "contract.contractno" from contract where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$contract = cls_table_factory::create_instance('contract');
			$contract->fill($row);
			$data[$row['contract.id']] = $contract;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['restperiod.id']['type'] = 'uuid';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['contract.contractno']['type'] = 'varchar';
			$this->p_column_definitions['restperiod.startdate']['type'] = 'date';
			$this->p_column_definitions['restperiod.enddate']['type'] = 'date';
		}
		return $this->p_column_definitions;
	}
}
?>
