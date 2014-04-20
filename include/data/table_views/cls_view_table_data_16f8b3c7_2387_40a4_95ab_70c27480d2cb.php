<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_table_data_16f8b3c7_2387_40a4_95ab_70c27480d2cb extends cls_table_view_base 
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
		$common_table_data = cls_table_factory::get_common_table_data();
		$array_table_data =  $common_table_data->get_table_datas($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_table_search_template($array_table_data);
		$data_array_id_table_search_template = $this->fill_distinct_id_table_search_template($where);

		$where = $this->get_distinct_ids_id_data_view_default($array_table_data);
		$data_array_id_data_view_default = $this->fill_distinct_id_data_view_default($where);

		$result_array = array();
		foreach($array_table_data as $table_data)
			{
			$table_data_id = $table_data->get_id();
			$result_array[$table_data_id]['table_data.id'] = $table_data->get_id();
			$result_array[$table_data_id]['table_data.table_name'] = $table_data->get_table_name();
			$result_array[$table_data_id]['table_data.location_independant'] = $table_data->get_location_independant();
			$result_array[$table_data_id]['table_data.static_data'] = $table_data->get_static_data();
			$result_array[$table_data_id]['table_data.use_orm'] = $table_data->get_use_orm();
			$result_array[$table_data_id]['table_data.create_history'] = $table_data->get_create_history();
			$result_array[$table_data_id]['table_data.searchable'] = $table_data->get_searchable();
			$link_id = $table_data->get_id_table_search_template();
			if (empty($link_id))
				{
				$result_array[$table_data_id]['table_search_template.name'] = '';
				}
			else
				{
				$result_array[$table_data_id]['table_search_template.name'] = $data_array_id_table_search_template[$link_id]->get_name();
				}
			$result_array[$table_data_id]['table_data.config_table'] = $table_data->get_config_table();
			$link_id = $table_data->get_id_data_view_default();
			if (empty($link_id))
				{
				$result_array[$table_data_id]['data_view.name'] = '';
				}
			else
				{
				$result_array[$table_data_id]['data_view.name'] = $data_array_id_data_view_default[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_table_search_template($array_table_data)
	{
		$ids = array();
		foreach ($array_table_data as $table_data)
		{
			$id = $table_data->get_id_table_search_template();
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

	private function fill_distinct_id_table_search_template($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "table_search_template.id",table_search_template.name as "table_search_template.name" from table_search_template where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$table_search_template = cls_table_factory::create_instance('table_search_template');
			$table_search_template->fill($row);
			$data[$row['table_search_template.id']] = $table_search_template;
		}
		return $data;
	}

	private function get_distinct_ids_id_data_view_default($array_table_data)
	{
		$ids = array();
		foreach ($array_table_data as $table_data)
		{
			$id = $table_data->get_id_data_view_default();
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

	private function fill_distinct_id_data_view_default($where)
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
			$this->p_column_definitions['table_data.id']['type'] = 'uuid';
			$this->p_column_definitions['table_data.table_name']['type'] = 'varchar';
			$this->p_column_definitions['table_data.location_independant']['type'] = 'bool';
			$this->p_column_definitions['table_data.static_data']['type'] = 'bool';
			$this->p_column_definitions['table_data.use_orm']['type'] = 'bool';
			$this->p_column_definitions['table_data.create_history']['type'] = 'bool';
			$this->p_column_definitions['table_data.searchable']['type'] = 'bool';
			$this->p_column_definitions['table_search_template.name']['type'] = 'varchar';
			$this->p_column_definitions['table_data.config_table']['type'] = 'bool';
			$this->p_column_definitions['data_view.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
