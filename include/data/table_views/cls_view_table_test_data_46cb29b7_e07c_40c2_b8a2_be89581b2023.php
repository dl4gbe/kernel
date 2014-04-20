<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_table_test_data_46cb29b7_e07c_40c2_b8a2_be89581b2023 extends cls_table_view_base 
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
		$common_table_test_data = cls_table_factory::get_common_table_test_data();
		$array_table_test_data =  $common_table_test_data->get_table_test_datas($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_table_test($array_table_test_data);
		$data_array_id_table_test = $this->fill_distinct_id_table_test($where);

		$result_array = array();
		foreach($array_table_test_data as $table_test_data)
			{
			$table_test_data_id = $table_test_data->get_id();
			$result_array[$table_test_data_id]['table_test_data.id'] = $table_test_data->get_id();
			$link_id = $table_test_data->get_id_table_test();
			if (empty($link_id))
				{
				$result_array[$table_test_data_id]['table_test.remark'] = '';
				}
			else
				{
				$result_array[$table_test_data_id]['table_test.remark'] = $data_array_id_table_test[$link_id]->get_remark();
				}
			$result_array[$table_test_data_id]['table_test_data.tablename'] = $table_test_data->get_tablename();
			$result_array[$table_test_data_id]['table_test_data.id_data'] = $table_test_data->get_id_data();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_table_test($array_table_test_data)
	{
		$ids = array();
		foreach ($array_table_test_data as $table_test_data)
		{
			$id = $table_test_data->get_id_table_test();
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

	private function fill_distinct_id_table_test($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "table_test.id",table_test.remark as "table_test.remark" from table_test where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$table_test = cls_table_factory::create_instance('table_test');
			$table_test->fill($row);
			$data[$row['table_test.id']] = $table_test;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['table_test_data.id']['type'] = 'uuid';
			$this->p_column_definitions['table_test.remark']['type'] = 'varchar';
			$this->p_column_definitions['table_test_data.tablename']['type'] = 'varchar';
			$this->p_column_definitions['table_test_data.id_data']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
