<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_menu_item_e3fd7230_e02d_450a_b8d7_68f556977064 extends cls_table_view_base 
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
		$common_menu_item = cls_table_factory::get_common_menu_item();
		$array_menu_item =  $common_menu_item->get_menu_items($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_menu_group($array_menu_item);
		$data_array_id_menu_group = $this->fill_distinct_id_menu_group($where);

		$where = $this->get_distinct_ids_id_control($array_menu_item);
		$data_array_id_control = $this->fill_distinct_id_control($where);

		$where = $this->get_distinct_ids_id_data_view($array_menu_item);
		$data_array_id_data_view = $this->fill_distinct_id_data_view($where);

		$result_array = array();
		foreach($array_menu_item as $menu_item)
			{
			$menu_item_id = $menu_item->get_id();
			$result_array[$menu_item_id]['menu_item.id'] = $menu_item->get_id();
			$link_id = $menu_item->get_id_menu_group();
			if (empty($link_id))
				{
				$result_array[$menu_item_id]['menu_group.name'] = '';
				}
			else
				{
				$result_array[$menu_item_id]['menu_group.name'] = $data_array_id_menu_group[$link_id]->get_name();
				}
			$result_array[$menu_item_id]['menu_item.name'] = $menu_item->get_name();
			$link_id = $menu_item->get_id_control();
			if (empty($link_id))
				{
				$result_array[$menu_item_id]['control.name'] = '';
				}
			else
				{
				$result_array[$menu_item_id]['control.name'] = $data_array_id_control[$link_id]->get_name();
				}
			$result_array[$menu_item_id]['menu_item.order'] = $menu_item->get_order();
			$result_array[$menu_item_id]['menu_item.imagepath'] = $menu_item->get_imagepath();
			$result_array[$menu_item_id]['menu_item.active'] = $menu_item->get_active();
			$result_array[$menu_item_id]['menu_item.parameters'] = $menu_item->get_parameters();
			$result_array[$menu_item_id]['menu_item.table_name'] = $menu_item->get_table_name();
			$link_id = $menu_item->get_id_data_view();
			if (empty($link_id))
				{
				$result_array[$menu_item_id]['data_view.name'] = '';
				}
			else
				{
				$result_array[$menu_item_id]['data_view.name'] = $data_array_id_data_view[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_menu_group($array_menu_item)
	{
		$ids = array();
		foreach ($array_menu_item as $menu_item)
		{
			$id = $menu_item->get_id_menu_group();
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

	private function fill_distinct_id_menu_group($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "menu_group.id",menu_group.name as "menu_group.name" from menu_group where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$menu_group = cls_table_factory::create_instance('menu_group');
			$menu_group->fill($row);
			$data[$row['menu_group.id']] = $menu_group;
		}
		return $data;
	}

	private function get_distinct_ids_id_control($array_menu_item)
	{
		$ids = array();
		foreach ($array_menu_item as $menu_item)
		{
			$id = $menu_item->get_id_control();
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

	private function get_distinct_ids_id_data_view($array_menu_item)
	{
		$ids = array();
		foreach ($array_menu_item as $menu_item)
		{
			$id = $menu_item->get_id_data_view();
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

	private function fill_distinct_id_data_view($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "data_view.id",data_view.name as "data_view.name" from data_view where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$data_view = cls_table_factory::create_instance('data_view');
			$data_view->fill($row);
			$data[$row['data_view.id']] = $data_view;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['menu_item.id']['type'] = 'uuid';
			$this->p_column_definitions['menu_group.name']['type'] = 'varchar';
			$this->p_column_definitions['menu_item.name']['type'] = 'varchar';
			$this->p_column_definitions['control.name']['type'] = 'varchar';
			$this->p_column_definitions['menu_item.order']['type'] = 'int4';
			$this->p_column_definitions['menu_item.imagepath']['type'] = 'varchar';
			$this->p_column_definitions['menu_item.active']['type'] = 'bool';
			$this->p_column_definitions['menu_item.parameters']['type'] = 'varchar';
			$this->p_column_definitions['menu_item.table_name']['type'] = 'varchar';
			$this->p_column_definitions['data_view.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
