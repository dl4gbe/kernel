<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_control_group_e8fc538a_926b_40b8_b223_b6a6fbca2691 extends cls_table_view_base 
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
		$common_control_group = cls_table_factory::get_common_control_group();
		$array_control_group =  $common_control_group->get_control_groups($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_application($array_control_group);
		$data_array_id_application = $this->fill_distinct_id_application($where);

		$result_array = array();
		foreach($array_control_group as $control_group)
			{
			$control_group_id = $control_group->get_id();
			$result_array[$control_group_id]['control_group.id'] = $control_group->get_id();
			$link_id = $control_group->get_id_application();
			if (empty($link_id))
				{
				$result_array[$control_group_id]['application.name'] = '';
				}
			else
				{
				$result_array[$control_group_id]['application.name'] = $data_array_id_application[$link_id]->get_name();
				}
			$result_array[$control_group_id]['control_group.name'] = $control_group->get_name();
			$result_array[$control_group_id]['control_group.open_in_own_form'] = $control_group->get_open_in_own_form();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_application($array_control_group)
	{
		$ids = array();
		foreach ($array_control_group as $control_group)
		{
			$id = $control_group->get_id_application();
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

	private function fill_distinct_id_application($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "application.id",application.name as "application.name" from application where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$application = cls_table_factory::create_instance('application');
			$application->fill($row);
			$data[$row['application.id']] = $application;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['control_group.id']['type'] = 'uuid';
			$this->p_column_definitions['application.name']['type'] = 'varchar';
			$this->p_column_definitions['control_group.name']['type'] = 'varchar';
			$this->p_column_definitions['control_group.open_in_own_form']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
