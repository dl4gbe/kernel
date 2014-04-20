<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_config_group_item_1c4b104f_bb93_416e_87a1_cc243f094e6a extends cls_table_view_base 
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
		$common_config_group_item = cls_table_factory::get_common_config_group_item();
		$array_config_group_item =  $common_config_group_item->get_config_group_items($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_config_group($array_config_group_item);
		$data_array_id_config_group = $this->fill_distinct_id_config_group($where);

		$result_array = array();
		foreach($array_config_group_item as $config_group_item)
			{
			$config_group_item_id = $config_group_item->get_id();
			$result_array[$config_group_item_id]['config_group_item.id'] = $config_group_item->get_id();
			$link_id = $config_group_item->get_id_config_group();
			if (empty($link_id))
				{
				$result_array[$config_group_item_id]['config_group.name'] = '';
				}
			else
				{
				$result_array[$config_group_item_id]['config_group.name'] = $data_array_id_config_group[$link_id]->get_name();
				}
			$result_array[$config_group_item_id]['config_group_item.name'] = $config_group_item->get_name();
			$result_array[$config_group_item_id]['config_group_item.table_name'] = $config_group_item->get_table_name();
			$result_array[$config_group_item_id]['config_group_item.path'] = $config_group_item->get_path();
			$result_array[$config_group_item_id]['config_group_item.source'] = $config_group_item->get_source();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_config_group($array_config_group_item)
	{
		$ids = array();
		foreach ($array_config_group_item as $config_group_item)
		{
			$id = $config_group_item->get_id_config_group();
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

	private function fill_distinct_id_config_group($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "config_group.id",config_group.name as "config_group.name" from config_group where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$config_group = cls_table_factory::create_instance('config_group');
			$config_group->fill($row);
			$data[$row['config_group.id']] = $config_group;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['config_group_item.id']['type'] = 'uuid';
			$this->p_column_definitions['config_group.name']['type'] = 'varchar';
			$this->p_column_definitions['config_group_item.name']['type'] = 'varchar';
			$this->p_column_definitions['config_group_item.table_name']['type'] = 'varchar';
			$this->p_column_definitions['config_group_item.path']['type'] = 'varchar';
			$this->p_column_definitions['config_group_item.source']['type'] = 'text';
		}
		return $this->p_column_definitions;
	}
}
?>
