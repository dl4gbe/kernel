<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_data_change_80968a33_ebe2_478c_8119_f79ea7756f40 extends cls_table_view_base 
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
		$common_data_change = cls_table_factory::get_common_data_change();
		$array_data_change =  $common_data_change->get_data_changes($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person_user($array_data_change);
		$data_array_id_person_user = $this->fill_distinct_id_person_user($where);

		$result_array = array();
		foreach($array_data_change as $data_change)
			{
			$data_change_id = $data_change->get_id();
			$result_array[$data_change_id]['data_change.id'] = $data_change->get_id();
			$result_array[$data_change_id]['data_change.id_data'] = $data_change->get_id_data();
			$result_array[$data_change_id]['data_change.command'] = $data_change->get_command();
			$result_array[$data_change_id]['data_change.data'] = $data_change->get_data();
			$result_array[$data_change_id]['data_change.modidate'] = $data_change->get_modidate();
			$link_id = $data_change->get_id_person_user();
			if (empty($link_id))
				{
				$result_array[$data_change_id]['person.name'] = '';
				}
			else
				{
				$result_array[$data_change_id]['person.name'] = $data_array_id_person_user[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person_user($array_data_change)
	{
		$ids = array();
		foreach ($array_data_change as $data_change)
		{
			$id = $data_change->get_id_person_user();
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

	private function fill_distinct_id_person_user($where)
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
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['data_change.id']['type'] = 'uuid';
			$this->p_column_definitions['data_change.id_data']['type'] = 'uuid';
			$this->p_column_definitions['data_change.command']['type'] = 'varchar';
			$this->p_column_definitions['data_change.data']['type'] = 'text';
			$this->p_column_definitions['data_change.modidate']['type'] = 'time';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
