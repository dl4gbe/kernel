<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_ribbonbar_item_0be8642b_55d0_4b66_a3f6_ef35e8683717 extends cls_table_view_base 
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
		$common_ribbonbar_item = cls_table_factory::get_common_ribbonbar_item();
		$array_ribbonbar_item =  $common_ribbonbar_item->get_ribbonbar_items($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_ribbonbar_group($array_ribbonbar_item);
		$data_array_id_ribbonbar_group = $this->fill_distinct_id_ribbonbar_group($where);

		$where = $this->get_distinct_ids_id_action($array_ribbonbar_item);
		$data_array_id_action = $this->fill_distinct_id_action($where);

		$result_array = array();
		foreach($array_ribbonbar_item as $ribbonbar_item)
			{
			$ribbonbar_item_id = $ribbonbar_item->get_id();
			$result_array[$ribbonbar_item_id]['ribbonbar_item.id'] = $ribbonbar_item->get_id();
			$link_id = $ribbonbar_item->get_id_ribbonbar_group();
			if (empty($link_id))
				{
				$result_array[$ribbonbar_item_id]['ribbonbar_group.name'] = '';
				}
			else
				{
				$result_array[$ribbonbar_item_id]['ribbonbar_group.name'] = $data_array_id_ribbonbar_group[$link_id]->get_name();
				}
			$result_array[$ribbonbar_item_id]['ribbonbar_item.item_order'] = $ribbonbar_item->get_item_order();
			$result_array[$ribbonbar_item_id]['ribbonbar_item.order'] = $ribbonbar_item->get_order();
			$result_array[$ribbonbar_item_id]['ribbonbar_item.name'] = $ribbonbar_item->get_name();
			$result_array[$ribbonbar_item_id]['ribbonbar_item.imagepath'] = $ribbonbar_item->get_imagepath();
			$link_id = $ribbonbar_item->get_id_action();
			if (empty($link_id))
				{
				$result_array[$ribbonbar_item_id]['action.nane'] = '';
				}
			else
				{
				$result_array[$ribbonbar_item_id]['action.nane'] = $data_array_id_action[$link_id]->get_nane();
				}
			$result_array[$ribbonbar_item_id]['ribbonbar_item.active'] = $ribbonbar_item->get_active();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_ribbonbar_group($array_ribbonbar_item)
	{
		$ids = array();
		foreach ($array_ribbonbar_item as $ribbonbar_item)
		{
			$id = $ribbonbar_item->get_id_ribbonbar_group();
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

	private function fill_distinct_id_ribbonbar_group($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "ribbonbar_group.id",ribbonbar_group.name as "ribbonbar_group.name" from ribbonbar_group where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$ribbonbar_group = cls_table_factory::create_instance('ribbonbar_group');
			$ribbonbar_group->fill($row);
			$data[$row['ribbonbar_group.id']] = $ribbonbar_group;
		}
		return $data;
	}

	private function get_distinct_ids_id_action($array_ribbonbar_item)
	{
		$ids = array();
		foreach ($array_ribbonbar_item as $ribbonbar_item)
		{
			$id = $ribbonbar_item->get_id_action();
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

	private function fill_distinct_id_action($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "action.id",action.nane as "action.nane" from action where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$action = cls_table_factory::create_instance('action');
			$action->fill($row);
			$data[$row['action.id']] = $action;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['ribbonbar_item.id']['type'] = 'uuid';
			$this->p_column_definitions['ribbonbar_group.name']['type'] = 'varchar';
			$this->p_column_definitions['ribbonbar_item.item_order']['type'] = 'int4';
			$this->p_column_definitions['ribbonbar_item.name']['type'] = 'varchar';
			$this->p_column_definitions['ribbonbar_item.imagepath']['type'] = 'varchar';
			$this->p_column_definitions['ribbonbar_item.active']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
