<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_control_control_group_8b6079f7_d8b1_4b94_8aa0_8d619fcd95d2 extends cls_table_view_base 
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
		$common_control_control_group = cls_table_factory::get_common_control_control_group();
		$array_control_control_group =  $common_control_control_group->get_control_control_groups($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_control($array_control_control_group);
		$data_array_id_control = $this->fill_distinct_id_control($where);

		$where = $this->get_distinct_ids_id_control_group($array_control_control_group);
		$data_array_id_control_group = $this->fill_distinct_id_control_group($where);

		$result_array = array();
		foreach($array_control_control_group as $control_control_group)
			{
			$control_control_group_id = $control_control_group->get_id();
			$result_array[$control_control_group_id]['control_control_group.id'] = $control_control_group->get_id();
			$link_id = $control_control_group->get_id_control();
			if (empty($link_id))
				{
				$result_array[$control_control_group_id]['control.name'] = '';
				}
			else
				{
				$result_array[$control_control_group_id]['control.name'] = $data_array_id_control[$link_id]->get_name();
				}
			$link_id = $control_control_group->get_id_control_group();
			if (empty($link_id))
				{
				$result_array[$control_control_group_id]['control_group.name'] = '';
				}
			else
				{
				$result_array[$control_control_group_id]['control_group.name'] = $data_array_id_control_group[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_control($array_control_control_group)
	{
		$ids = array();
		foreach ($array_control_control_group as $control_control_group)
		{
			$id = $control_control_group->get_id_control();
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

	private function fill_distinct_id_control($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "control.id",control.name as "control.name" from control where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$control = cls_table_factory::create_instance('control');
			$control->fill($row);
			$data[$row['control.id']] = $control;
		}
		return $data;
	}

	private function get_distinct_ids_id_control_group($array_control_control_group)
	{
		$ids = array();
		foreach ($array_control_control_group as $control_control_group)
		{
			$id = $control_control_group->get_id_control_group();
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

	private function fill_distinct_id_control_group($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "control_group.id",control_group.name as "control_group.name" from control_group where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$control_group = cls_table_factory::create_instance('control_group');
			$control_group->fill($row);
			$data[$row['control_group.id']] = $control_group;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['control_control_group.id']['type'] = 'uuid';
			$this->p_column_definitions['control.name']['type'] = 'varchar';
			$this->p_column_definitions['control_group.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
