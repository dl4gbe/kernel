<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_table_test_test_90214542_e90f_43a3_b10d_fdbe09b8323f extends cls_table_view_base 
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
		$common_table_test_test = cls_table_factory::get_common_table_test_test();
		$array_table_test_test =  $common_table_test_test->get_table_test_tests($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_table_test_item($array_table_test_test);
		$data_array_id_table_test_item = $this->fill_distinct_id_table_test_item($where);

		$result_array = array();
		foreach($array_table_test_test as $table_test_test)
			{
			$table_test_test_id = $table_test_test->get_id();
			$result_array[$table_test_test_id]['table_test_test.id'] = $table_test_test->get_id();
			$result_array[$table_test_test_id]['table_test_test.tablename'] = $table_test_test->get_tablename();
			$link_id = $table_test_test->get_id_table_test_item();
			if (empty($link_id))
				{
				$result_array[$table_test_test_id]['table_test_item.name'] = '';
				}
			else
				{
				$result_array[$table_test_test_id]['table_test_item.name'] = $data_array_id_table_test_item[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_table_test_item($array_table_test_test)
	{
		$ids = array();
		foreach ($array_table_test_test as $table_test_test)
		{
			$id = $table_test_test->get_id_table_test_item();
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

	private function fill_distinct_id_table_test_item($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "table_test_item.id",table_test_item.name as "table_test_item.name" from table_test_item where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$table_test_item = cls_table_factory::create_instance('table_test_item');
			$table_test_item->fill($row);
			$data[$row['table_test_item.id']] = $table_test_item;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['table_test_test.id']['type'] = 'uuid';
			$this->p_column_definitions['table_test_test.tablename']['type'] = 'varchar';
			$this->p_column_definitions['table_test_item.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
