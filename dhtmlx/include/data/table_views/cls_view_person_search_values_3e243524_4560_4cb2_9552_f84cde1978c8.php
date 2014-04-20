<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_person_search_values_3e243524_4560_4cb2_9552_f84cde1978c8 extends cls_table_view_base 
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
		$common_person_search_values = cls_table_factory::get_common_person_search_values();
		$array_person_search_values =  $common_person_search_values->get_person_search_valuess($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person($array_person_search_values);
		$data_array_id_person = $this->fill_distinct_id_person($where);

		$result_array = array();
		foreach($array_person_search_values as $person_search_values)
			{
			$person_search_values_id = $person_search_values->get_id();
			$result_array[$person_search_values_id]['person_search_values.id'] = $person_search_values->get_id();
			$link_id = $person_search_values->get_id_person();
			if (empty($link_id))
				{
				$result_array[$person_search_values_id]['person.name'] = '';
				}
			else
				{
				$result_array[$person_search_values_id]['person.name'] = $data_array_id_person[$link_id]->get_name();
				}
			$result_array[$person_search_values_id]['person_search_values.value'] = $person_search_values->get_value();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person($array_person_search_values)
	{
		$ids = array();
		foreach ($array_person_search_values as $person_search_values)
		{
			$id = $person_search_values->get_id_person();
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
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['person_search_values.id']['type'] = 'uuid';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['person_search_values.value']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
