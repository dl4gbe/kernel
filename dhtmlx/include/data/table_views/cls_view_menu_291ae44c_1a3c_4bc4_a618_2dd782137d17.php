<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_menu_291ae44c_1a3c_4bc4_a618_2dd782137d17 extends cls_table_view_base 
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
		$common_menu = cls_table_factory::get_common_menu();
		$array_menu =  $common_menu->get_menus($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_application($array_menu);
		$data_array_id_application = $this->fill_distinct_id_application($where);

		$where = $this->get_distinct_ids_id_menu_template($array_menu);
		$data_array_id_menu_template = $this->fill_distinct_id_menu_template($where);

		$where = $this->get_distinct_ids_id_data_view($array_menu);
		$data_array_id_data_view = $this->fill_distinct_id_data_view($where);

		$result_array = array();
		foreach($array_menu as $menu)
			{
			$menu_id = $menu->get_id();
			$result_array[$menu_id]['menu.id'] = $menu->get_id();
			$link_id = $menu->get_id_application();
			if (empty($link_id))
				{
				$result_array[$menu_id]['application.name'] = '';
				}
			else
				{
				$result_array[$menu_id]['application.name'] = $data_array_id_application[$link_id]->get_name();
				}
			$result_array[$menu_id]['menu.name'] = $menu->get_name();
			$link_id = $menu->get_id_menu_template();
			if (empty($link_id))
				{
				$result_array[$menu_id]['menu_template.name'] = '';
				}
			else
				{
				$result_array[$menu_id]['menu_template.name'] = $data_array_id_menu_template[$link_id]->get_name();
				}
			$result_array[$menu_id]['menu.caption'] = $menu->get_caption();
			$link_id = $menu->get_id_data_view();
			if (empty($link_id))
				{
				$result_array[$menu_id]['data_view.name'] = '';
				}
			else
				{
				$result_array[$menu_id]['data_view.name'] = $data_array_id_data_view[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_application($array_menu)
	{
		$ids = array();
		foreach ($array_menu as $menu)
		{
			$id = $menu->get_id_application();
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

	private function get_distinct_ids_id_menu_template($array_menu)
	{
		$ids = array();
		foreach ($array_menu as $menu)
		{
			$id = $menu->get_id_menu_template();
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

	private function fill_distinct_id_menu_template($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "menu_template.id",menu_template.name as "menu_template.name" from menu_template where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$menu_template = cls_table_factory::create_instance('menu_template');
			$menu_template->fill($row);
			$data[$row['menu_template.id']] = $menu_template;
		}
		return $data;
	}

	private function get_distinct_ids_id_data_view($array_menu)
	{
		$ids = array();
		foreach ($array_menu as $menu)
		{
			$id = $menu->get_id_data_view();
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
			$this->p_column_definitions['menu.id']['type'] = 'uuid';
			$this->p_column_definitions['application.name']['type'] = 'varchar';
			$this->p_column_definitions['menu.name']['type'] = 'varchar';
			$this->p_column_definitions['menu_template.name']['type'] = 'varchar';
			$this->p_column_definitions['menu.caption']['type'] = 'varchar';
			$this->p_column_definitions['data_view.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
