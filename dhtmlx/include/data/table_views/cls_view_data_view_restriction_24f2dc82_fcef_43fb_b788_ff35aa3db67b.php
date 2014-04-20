<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_data_view_restriction_24f2dc82_fcef_43fb_b788_ff35aa3db67b extends cls_table_view_base 
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
		$common_data_view_restriction = cls_table_factory::get_common_data_view_restriction();
		$array_data_view_restriction =  $common_data_view_restriction->get_data_view_restrictions($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_data_view($array_data_view_restriction);
		$data_array_id_data_view = $this->fill_distinct_id_data_view($where);

		$where = $this->get_distinct_ids_id_data_view_table($array_data_view_restriction);
		$data_array_id_data_view_table = $this->fill_distinct_id_data_view_table($where);

		$result_array = array();
		foreach($array_data_view_restriction as $data_view_restriction)
			{
			$data_view_restriction_id = $data_view_restriction->get_id();
			$result_array[$data_view_restriction_id]['data_view_restriction.id'] = $data_view_restriction->get_id();
			$link_id = $data_view_restriction->get_id_data_view();
			if (empty($link_id))
				{
				$result_array[$data_view_restriction_id]['data_view.name'] = '';
				}
			else
				{
				$result_array[$data_view_restriction_id]['data_view.name'] = $data_array_id_data_view[$link_id]->get_name();
				}
			$link_id = $data_view_restriction->get_id_data_view_table();
			if (empty($link_id))
				{
				$result_array[$data_view_restriction_id]['data_view_table.table_name'] = '';
				}
			else
				{
				$result_array[$data_view_restriction_id]['data_view_table.table_name'] = $data_array_id_data_view_table[$link_id]->get_table_name();
				}
			$link_id = $data_view_restriction->get_id_data_view_table();
			if (empty($link_id))
				{
				$result_array[$data_view_restriction_id]['data_view_table.link_field'] = '';
				}
			else
				{
				$result_array[$data_view_restriction_id]['data_view_table.link_field'] = $data_array_id_data_view_table[$link_id]->get_link_field();
				}
			$result_array[$data_view_restriction_id]['data_view_restriction.column_name'] = $data_view_restriction->get_column_name();
			$result_array[$data_view_restriction_id]['data_view_restriction.operator'] = $data_view_restriction->get_operator();
			$result_array[$data_view_restriction_id]['data_view_restriction.value'] = $data_view_restriction->get_value();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_data_view($array_data_view_restriction)
	{
		$ids = array();
		foreach ($array_data_view_restriction as $data_view_restriction)
		{
			$id = $data_view_restriction->get_id_data_view();
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

	private function get_distinct_ids_id_data_view_table($array_data_view_restriction)
	{
		$ids = array();
		foreach ($array_data_view_restriction as $data_view_restriction)
		{
			$id = $data_view_restriction->get_id_data_view_table();
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

	private function fill_distinct_id_data_view_table($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "data_view_table.id",data_view_table.table_name as "data_view_table.table_name",data_view_table.link_field as "data_view_table.link_field" from data_view_table where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$data_view_table = cls_table_factory::create_instance('data_view_table');
			$data_view_table->fill($row);
			$data[$row['data_view_table.id']] = $data_view_table;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['data_view_restriction.id']['type'] = 'uuid';
			$this->p_column_definitions['data_view.name']['type'] = 'varchar';
			$this->p_column_definitions['data_view_table.table_name']['type'] = 'varchar';
			$this->p_column_definitions['data_view_table.link_field']['type'] = 'varchar';
			$this->p_column_definitions['data_view_restriction.column_name']['type'] = 'varchar';
			$this->p_column_definitions['data_view_restriction.operator']['type'] = 'varchar';
			$this->p_column_definitions['data_view_restriction.value']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
