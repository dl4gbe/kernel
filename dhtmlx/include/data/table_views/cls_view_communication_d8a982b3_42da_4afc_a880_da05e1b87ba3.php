<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_communication_d8a982b3_42da_4afc_a880_da05e1b87ba3 extends cls_table_view_base 
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
		$common_communication = cls_table_factory::get_common_communication();
		$array_communication =  $common_communication->get_communications($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person($array_communication);
		$data_array_id_person = $this->fill_distinct_id_person($where);

		$where = $this->get_distinct_ids_id_communication_type($array_communication);
		$data_array_id_communication_type = $this->fill_distinct_id_communication_type($where);

		$result_array = array();
		foreach($array_communication as $communication)
			{
			$communication_id = $communication->get_id();
			$result_array[$communication_id]['communication.id'] = $communication->get_id();
			$link_id = $communication->get_id_person();
			if (empty($link_id))
				{
				$result_array[$communication_id]['person.name'] = '';
				}
			else
				{
				$result_array[$communication_id]['person.name'] = $data_array_id_person[$link_id]->get_name();
				}
			$result_array[$communication_id]['communication.value'] = $communication->get_value();
			$link_id = $communication->get_id_communication_type();
			if (empty($link_id))
				{
				$result_array[$communication_id]['communication_type.name'] = '';
				}
			else
				{
				$result_array[$communication_id]['communication_type.name'] = $data_array_id_communication_type[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person($array_communication)
	{
		$ids = array();
		foreach ($array_communication as $communication)
		{
			$id = $communication->get_id_person();
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

	private function get_distinct_ids_id_communication_type($array_communication)
	{
		$ids = array();
		foreach ($array_communication as $communication)
		{
			$id = $communication->get_id_communication_type();
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

	private function fill_distinct_id_communication_type($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "communication_type.id",communication_type.name as "communication_type.name" from communication_type where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$communication_type = cls_table_factory::create_instance('communication_type');
			$communication_type->fill($row);
			$data[$row['communication_type.id']] = $communication_type;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['communication.id']['type'] = 'uuid';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['communication.value']['type'] = 'varchar';
			$this->p_column_definitions['communication_type.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
