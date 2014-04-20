<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_ribbonbar_group_21761cfd_4a47_482e_89fe_a045cbc1930d extends cls_table_view_base 
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
		$common_ribbonbar_group = cls_table_factory::get_common_ribbonbar_group();
		$array_ribbonbar_group =  $common_ribbonbar_group->get_ribbonbar_groups($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_ribbonbar_tab($array_ribbonbar_group);
		$data_array_id_ribbonbar_tab = $this->fill_distinct_id_ribbonbar_tab($where);

		$where = $this->get_distinct_ids_id_ribbonbar($array_ribbonbar_group);
		$data_array_id_ribbonbar = $this->fill_distinct_id_ribbonbar($where);

		$result_array = array();
		foreach($array_ribbonbar_group as $ribbonbar_group)
			{
			$ribbonbar_group_id = $ribbonbar_group->get_id();
			$result_array[$ribbonbar_group_id]['ribbonbar_group.id'] = $ribbonbar_group->get_id();
			$link_id = $ribbonbar_group->get_id_ribbonbar_tab();
			if (empty($link_id))
				{
				$result_array[$ribbonbar_group_id]['ribbonbar_tab.name'] = '';
				}
			else
				{
				$result_array[$ribbonbar_group_id]['ribbonbar_tab.name'] = $data_array_id_ribbonbar_tab[$link_id]->get_name();
				}
			$link_id = $ribbonbar_group->get_id_ribbonbar();
			if (empty($link_id))
				{
				$result_array[$ribbonbar_group_id]['ribbonbar.name'] = '';
				}
			else
				{
				$result_array[$ribbonbar_group_id]['ribbonbar.name'] = $data_array_id_ribbonbar[$link_id]->get_name();
				}
			$result_array[$ribbonbar_group_id]['ribbonbar_group.name'] = $ribbonbar_group->get_name();
			$result_array[$ribbonbar_group_id]['ribbonbar_group.imagepath'] = $ribbonbar_group->get_imagepath();
			$result_array[$ribbonbar_group_id]['ribbonbar_group.group_order'] = $ribbonbar_group->get_group_order();
			$result_array[$ribbonbar_group_id]['ribbonbar_group.active'] = $ribbonbar_group->get_active();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_ribbonbar_tab($array_ribbonbar_group)
	{
		$ids = array();
		foreach ($array_ribbonbar_group as $ribbonbar_group)
		{
			$id = $ribbonbar_group->get_id_ribbonbar_tab();
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

	private function fill_distinct_id_ribbonbar_tab($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "ribbonbar_tab.id",ribbonbar_tab.name as "ribbonbar_tab.name" from ribbonbar_tab where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$ribbonbar_tab = cls_table_factory::create_instance('ribbonbar_tab');
			$ribbonbar_tab->fill($row);
			$data[$row['ribbonbar_tab.id']] = $ribbonbar_tab;
		}
		return $data;
	}

	private function get_distinct_ids_id_ribbonbar($array_ribbonbar_group)
	{
		$ids = array();
		foreach ($array_ribbonbar_group as $ribbonbar_group)
		{
			$id = $ribbonbar_group->get_id_ribbonbar();
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

	private function fill_distinct_id_ribbonbar($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "ribbonbar.id",ribbonbar.name as "ribbonbar.name" from ribbonbar where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$ribbonbar = cls_table_factory::create_instance('ribbonbar');
			$ribbonbar->fill($row);
			$data[$row['ribbonbar.id']] = $ribbonbar;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['ribbonbar_group.id']['type'] = 'uuid';
			$this->p_column_definitions['ribbonbar_tab.name']['type'] = 'varchar';
			$this->p_column_definitions['ribbonbar.name']['type'] = 'varchar';
			$this->p_column_definitions['ribbonbar_group.name']['type'] = 'varchar';
			$this->p_column_definitions['ribbonbar_group.imagepath']['type'] = 'varchar';
			$this->p_column_definitions['ribbonbar_group.group_order']['type'] = 'int4';
			$this->p_column_definitions['ribbonbar_group.active']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
