<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_table_test_group_table_7bad3e75_44fd_4732_a053_f0d4c82f25be extends cls_table_view_base 
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
		$common_table_test_group_table = cls_table_factory::get_common_table_test_group_table();
		$array_table_test_group_table =  $common_table_test_group_table->get_table_test_group_tables($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_table_test_group($array_table_test_group_table);
		$data_array_id_table_test_group = $this->fill_distinct_id_table_test_group($where);

		$result_array = array();
		foreach($array_table_test_group_table as $table_test_group_table)
			{
			$table_test_group_table_id = $table_test_group_table->get_id();
			$result_array[$table_test_group_table_id]['table_test_group_table.id'] = $table_test_group_table->get_id();
			$link_id = $table_test_group_table->get_id_table_test_group();
			if (empty($link_id))
				{
				$result_array[$table_test_group_table_id]['table_test_group.name'] = '';
				}
			else
				{
				$result_array[$table_test_group_table_id]['table_test_group.name'] = $data_array_id_table_test_group[$link_id]->get_name();
				}
			$result_array[$table_test_group_table_id]['table_test_group_table.tablename'] = $table_test_group_table->get_tablename();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_table_test_group($array_table_test_group_table)
	{
		$ids = array();
		foreach ($array_table_test_group_table as $table_test_group_table)
		{
			$id = $table_test_group_table->get_id_table_test_group();
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

	private function fill_distinct_id_table_test_group($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "table_test_group.id",table_test_group.name as "table_test_group.name" from table_test_group where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$table_test_group = cls_table_factory::create_instance('table_test_group');
			$table_test_group->fill($row);
			$data[$row['table_test_group.id']] = $table_test_group;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['table_test_group_table.id']['type'] = 'uuid';
			$this->p_column_definitions['table_test_group.name']['type'] = 'varchar';
			$this->p_column_definitions['table_test_group_table.tablename']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
