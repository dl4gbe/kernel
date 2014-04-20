<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_person_state_9c70a425_b69c_417e_bf7c_456aef5b8d25 extends cls_table_view_base 
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
		$common_person_state = cls_table_factory::get_common_person_state();
		$array_person_state =  $common_person_state->get_person_states($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person($array_person_state);
		$data_array_id_person = $this->fill_distinct_id_person($where);

		$where = $this->get_distinct_ids_id_person_state_type($array_person_state);
		$data_array_id_person_state_type = $this->fill_distinct_id_person_state_type($where);

		$result_array = array();
		foreach($array_person_state as $person_state)
			{
			$person_state_id = $person_state->get_id();
			$result_array[$person_state_id]['person_state.id'] = $person_state->get_id();
			$link_id = $person_state->get_id_person();
			if (empty($link_id))
				{
				$result_array[$person_state_id]['person.name'] = '';
				}
			else
				{
				$result_array[$person_state_id]['person.name'] = $data_array_id_person[$link_id]->get_name();
				}
			$link_id = $person_state->get_id_person_state_type();
			if (empty($link_id))
				{
				$result_array[$person_state_id]['person_state_type.name'] = '';
				}
			else
				{
				$result_array[$person_state_id]['person_state_type.name'] = $data_array_id_person_state_type[$link_id]->get_name();
				}
			$result_array[$person_state_id]['person_state.mainstate'] = $person_state->get_mainstate();
			$result_array[$person_state_id]['person_state.former'] = $person_state->get_former();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person($array_person_state)
	{
		$ids = array();
		foreach ($array_person_state as $person_state)
		{
			$id = $person_state->get_id_person();
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

	private function get_distinct_ids_id_person_state_type($array_person_state)
	{
		$ids = array();
		foreach ($array_person_state as $person_state)
		{
			$id = $person_state->get_id_person_state_type();
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
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['person_state.id']['type'] = 'uuid';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['person_state_type.name']['type'] = 'varchar';
			$this->p_column_definitions['person_state.mainstate']['type'] = 'bool';
			$this->p_column_definitions['person_state.former']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
