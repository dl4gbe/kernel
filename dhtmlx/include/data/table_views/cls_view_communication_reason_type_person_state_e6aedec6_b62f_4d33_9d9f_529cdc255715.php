<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_communication_reason_type_person_state_e6aedec6_b62f_4d33_9d9f_529cdc255715 extends cls_table_view_base 
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
		$common_communication_reason_type_person_state = cls_table_factory::get_common_communication_reason_type_person_state();
		$array_communication_reason_type_person_state =  $common_communication_reason_type_person_state->get_communication_reason_type_person_states($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_communication_reason_type($array_communication_reason_type_person_state);
		$data_array_id_communication_reason_type = $this->fill_distinct_id_communication_reason_type($where);

		$result_array = array();
		foreach($array_communication_reason_type_person_state as $communication_reason_type_person_state)
			{
			$communication_reason_type_person_state_id = $communication_reason_type_person_state->get_id();
			$result_array[$communication_reason_type_person_state_id]['communication_reason_type_person_state.id'] = $communication_reason_type_person_state->get_id();
			$link_id = $communication_reason_type_person_state->get_id_communication_reason_type();
			if (empty($link_id))
				{
				$result_array[$communication_reason_type_person_state_id]['communication_reason_type.name'] = '';
				}
			else
				{
				$result_array[$communication_reason_type_person_state_id]['communication_reason_type.name'] = $data_array_id_communication_reason_type[$link_id]->get_name();
				}
			$result_array[$communication_reason_type_person_state_id]['communication_reason_type_person_state.person_states_code'] = $communication_reason_type_person_state->get_person_states_code();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_communication_reason_type($array_communication_reason_type_person_state)
	{
		$ids = array();
		foreach ($array_communication_reason_type_person_state as $communication_reason_type_person_state)
		{
			$id = $communication_reason_type_person_state->get_id_communication_reason_type();
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

	private function fill_distinct_id_communication_reason_type($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "communication_reason_type.id",communication_reason_type.name as "communication_reason_type.name" from communication_reason_type where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$communication_reason_type = cls_table_factory::create_instance('communication_reason_type');
			$communication_reason_type->fill($row);
			$data[$row['communication_reason_type.id']] = $communication_reason_type;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['communication_reason_type_person_state.id']['type'] = 'uuid';
			$this->p_column_definitions['communication_reason_type.name']['type'] = 'varchar';
			$this->p_column_definitions['communication_reason_type_person_state.person_states_code']['type'] = 'bpchar';
		}
		return $this->p_column_definitions;
	}
}
?>
