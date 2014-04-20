<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_person_state_type_access_group_c7390f18_0014_4ad2_8a4f_07b459543033 extends cls_table_view_base 
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
		$common_person_state_type_access_group = cls_table_factory::get_common_person_state_type_access_group();
		$array_person_state_type_access_group =  $common_person_state_type_access_group->get_person_state_type_access_groups($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_access_group($array_person_state_type_access_group);
		$data_array_id_access_group = $this->fill_distinct_id_access_group($where);

		$where = $this->get_distinct_ids_id_person_state_type($array_person_state_type_access_group);
		$data_array_id_person_state_type = $this->fill_distinct_id_person_state_type($where);

		$result_array = array();
		foreach($array_person_state_type_access_group as $person_state_type_access_group)
			{
			$person_state_type_access_group_id = $person_state_type_access_group->get_id();
			$result_array[$person_state_type_access_group_id]['person_state_type_access_group.id'] = $person_state_type_access_group->get_id();
			$link_id = $person_state_type_access_group->get_id_access_group();
			if (empty($link_id))
				{
				$result_array[$person_state_type_access_group_id]['access_group.name'] = '';
				}
			else
				{
				$result_array[$person_state_type_access_group_id]['access_group.name'] = $data_array_id_access_group[$link_id]->get_name();
				}
			$link_id = $person_state_type_access_group->get_id_person_state_type();
			if (empty($link_id))
				{
				$result_array[$person_state_type_access_group_id]['person_state_type.name'] = '';
				}
			else
				{
				$result_array[$person_state_type_access_group_id]['person_state_type.name'] = $data_array_id_person_state_type[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_access_group($array_person_state_type_access_group)
	{
		$ids = array();
		foreach ($array_person_state_type_access_group as $person_state_type_access_group)
		{
			$id = $person_state_type_access_group->get_id_access_group();
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

	private function get_distinct_ids_id_person_state_type($array_person_state_type_access_group)
	{
		$ids = array();
		foreach ($array_person_state_type_access_group as $person_state_type_access_group)
		{
			$id = $person_state_type_access_group->get_id_person_state_type();
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
			$this->p_column_definitions['person_state_type_access_group.id']['type'] = 'uuid';
			$this->p_column_definitions['access_group.name']['type'] = 'varchar';
			$this->p_column_definitions['person_state_type.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
