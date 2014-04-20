<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_table_bean_access_group_018def77_6cdd_4021_bba5_e6bde1f7f363 extends cls_table_view_base 
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
		$common_table_bean_access_group = cls_table_factory::get_common_table_bean_access_group();
		$array_table_bean_access_group =  $common_table_bean_access_group->get_table_bean_access_groups($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_table_bean($array_table_bean_access_group);
		$data_array_id_table_bean = $this->fill_distinct_id_table_bean($where);

		$result_array = array();
		foreach($array_table_bean_access_group as $table_bean_access_group)
			{
			$table_bean_access_group_id = $table_bean_access_group->get_id();
			$result_array[$table_bean_access_group_id]['table_bean_access_group.id'] = $table_bean_access_group->get_id();
			$link_id = $table_bean_access_group->get_id_table_bean();
			if (empty($link_id))
				{
				$result_array[$table_bean_access_group_id]['table_bean.name'] = '';
				}
			else
				{
				$result_array[$table_bean_access_group_id]['table_bean.name'] = $data_array_id_table_bean[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_table_bean($array_table_bean_access_group)
	{
		$ids = array();
		foreach ($array_table_bean_access_group as $table_bean_access_group)
		{
			$id = $table_bean_access_group->get_id_table_bean();
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

	private function fill_distinct_id_table_bean($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "table_bean.id",table_bean.name as "table_bean.name" from table_bean where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$table_bean = cls_table_factory::create_instance('table_bean');
			$table_bean->fill($row);
			$data[$row['table_bean.id']] = $table_bean;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['table_bean_access_group.id']['type'] = 'uuid';
			$this->p_column_definitions['table_bean.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
