<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_menu_group_51fc78ef_98b6_4597_b0cd_513ad44486f3 extends cls_table_view_base 
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
		$common_menu_group = cls_table_factory::get_common_menu_group();
		$array_menu_group =  $common_menu_group->get_menu_groups($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_menu($array_menu_group);
		$data_array_id_menu = $this->fill_distinct_id_menu($where);

		$result_array = array();
		foreach($array_menu_group as $menu_group)
			{
			$menu_group_id = $menu_group->get_id();
			$result_array[$menu_group_id]['menu_group.id'] = $menu_group->get_id();
			$link_id = $menu_group->get_id_menu();
			if (empty($link_id))
				{
				$result_array[$menu_group_id]['menu.name'] = '';
				}
			else
				{
				$result_array[$menu_group_id]['menu.name'] = $data_array_id_menu[$link_id]->get_name();
				}
			$result_array[$menu_group_id]['menu_group.name'] = $menu_group->get_name();
			$result_array[$menu_group_id]['menu_group.imagepath'] = $menu_group->get_imagepath();
			$result_array[$menu_group_id]['menu_group.order'] = $menu_group->get_order();
			$result_array[$menu_group_id]['menu_group.active'] = $menu_group->get_active();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_menu($array_menu_group)
	{
		$ids = array();
		foreach ($array_menu_group as $menu_group)
		{
			$id = $menu_group->get_id_menu();
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

	private function fill_distinct_id_menu($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "menu.id",menu.name as "menu.name" from menu where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$menu = cls_table_factory::create_instance('menu');
			$menu->fill($row);
			$data[$row['menu.id']] = $menu;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['menu_group.id']['type'] = 'uuid';
			$this->p_column_definitions['menu.name']['type'] = 'varchar';
			$this->p_column_definitions['menu_group.name']['type'] = 'varchar';
			$this->p_column_definitions['menu_group.imagepath']['type'] = 'varchar';
			$this->p_column_definitions['menu_group.order']['type'] = 'int4';
			$this->p_column_definitions['menu_group.active']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
