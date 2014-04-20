<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_person_access_group_2bfb46f0_c657_4022_9621_f227d2209f83 extends cls_table_view_base 
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
		$common_person_access_group = cls_table_factory::get_common_person_access_group();
		$array_person_access_group =  $common_person_access_group->get_person_access_groups($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_access_group($array_person_access_group);
		$data_array_id_access_group = $this->fill_distinct_id_access_group($where);

		$where = $this->get_distinct_ids_id_person($array_person_access_group);
		$data_array_id_person = $this->fill_distinct_id_person($where);

		$result_array = array();
		foreach($array_person_access_group as $person_access_group)
			{
			$person_access_group_id = $person_access_group->get_id();
			$result_array[$person_access_group_id]['person_access_group.id'] = $person_access_group->get_id();
			$link_id = $person_access_group->get_id_access_group();
			if (empty($link_id))
				{
				$result_array[$person_access_group_id]['access_group.name'] = '';
				}
			else
				{
				$result_array[$person_access_group_id]['access_group.name'] = $data_array_id_access_group[$link_id]->get_name();
				}
			$link_id = $person_access_group->get_id_person();
			if (empty($link_id))
				{
				$result_array[$person_access_group_id]['person.name'] = '';
				}
			else
				{
				$result_array[$person_access_group_id]['person.name'] = $data_array_id_person[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_access_group($array_person_access_group)
	{
		$ids = array();
		foreach ($array_person_access_group as $person_access_group)
		{
			$id = $person_access_group->get_id_access_group();
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

	private function fill_distinct_id_access_group($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "access_group.id",access_group.name as "access_group.name" from access_group where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$access_group = cls_table_factory::create_instance('access_group');
			$access_group->fill($row);
			$data[$row['access_group.id']] = $access_group;
		}
		return $data;
	}

	private function get_distinct_ids_id_person($array_person_access_group)
	{
		$ids = array();
		foreach ($array_person_access_group as $person_access_group)
		{
			$id = $person_access_group->get_id_person();
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
			$this->p_column_definitions['person_access_group.id']['type'] = 'uuid';
			$this->p_column_definitions['access_group.name']['type'] = 'varchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
