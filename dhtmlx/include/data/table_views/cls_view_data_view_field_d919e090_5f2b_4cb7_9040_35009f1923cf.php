<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_data_view_field_d919e090_5f2b_4cb7_9040_35009f1923cf extends cls_table_view_base 
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
		$common_data_view_field = cls_table_factory::get_common_data_view_field();
		$array_data_view_field =  $common_data_view_field->get_data_view_fields($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_data_view_table($array_data_view_field);
		$data_array_id_data_view_table = $this->fill_distinct_id_data_view_table($where);

		$result_array = array();
		foreach($array_data_view_field as $data_view_field)
			{
			$data_view_field_id = $data_view_field->get_id();
			$result_array[$data_view_field_id]['data_view_field.id'] = $data_view_field->get_id();
			$link_id = $data_view_field->get_id_data_view_table();
			if (empty($link_id))
				{
				$result_array[$data_view_field_id]['data_view_table.table_name'] = '';
				}
			else
				{
				$result_array[$data_view_field_id]['data_view_table.table_name'] = $data_array_id_data_view_table[$link_id]->get_table_name();
				}
			$link_id = $data_view_field->get_id_data_view_table();
			if (empty($link_id))
				{
				$result_array[$data_view_field_id]['data_view_table.link_field'] = '';
				}
			else
				{
				$result_array[$data_view_field_id]['data_view_table.link_field'] = $data_array_id_data_view_table[$link_id]->get_link_field();
				}
			$result_array[$data_view_field_id]['data_view_field.table_column'] = $data_view_field->get_table_column();
			$result_array[$data_view_field_id]['data_view_field.format'] = $data_view_field->get_format();
			$result_array[$data_view_field_id]['data_view_field.name'] = $data_view_field->get_name();
			$result_array[$data_view_field_id]['data_view_field.column_order'] = $data_view_field->get_column_order();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_data_view_table($array_data_view_field)
	{
		$ids = array();
		foreach ($array_data_view_field as $data_view_field)
		{
			$id = $data_view_field->get_id_data_view_table();
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
			$this->p_column_definitions['data_view_field.id']['type'] = 'uuid';
			$this->p_column_definitions['data_view_table.table_name']['type'] = 'varchar';
			$this->p_column_definitions['data_view_table.link_field']['type'] = 'varchar';
			$this->p_column_definitions['data_view_field.table_column']['type'] = 'varchar';
			$this->p_column_definitions['data_view_field.format']['type'] = 'varchar';
			$this->p_column_definitions['data_view_field.name']['type'] = 'varchar';
			$this->p_column_definitions['data_view_field.column_order']['type'] = 'int4';
		}
		return $this->p_column_definitions;
	}
}
?>
