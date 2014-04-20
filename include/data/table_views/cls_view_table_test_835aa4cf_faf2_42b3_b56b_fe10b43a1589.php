<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_table_test_835aa4cf_faf2_42b3_b56b_fe10b43a1589 extends cls_table_view_base 
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
		$common_table_test = cls_table_factory::get_common_table_test();
		$array_table_test =  $common_table_test->get_table_tests($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person($array_table_test);
		$data_array_id_person = $this->fill_distinct_id_person($where);

		$result_array = array();
		foreach($array_table_test as $table_test)
			{
			$table_test_id = $table_test->get_id();
			$result_array[$table_test_id]['table_test.id'] = $table_test->get_id();
			$result_array[$table_test_id]['table_test.run_date'] = $table_test->get_run_date();
			$link_id = $table_test->get_id_person();
			if (empty($link_id))
				{
				$result_array[$table_test_id]['person.name'] = '';
				}
			else
				{
				$result_array[$table_test_id]['person.name'] = $data_array_id_person[$link_id]->get_name();
				}
			$result_array[$table_test_id]['table_test.remark'] = $table_test->get_remark();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person($array_table_test)
	{
		$ids = array();
		foreach ($array_table_test as $table_test)
		{
			$id = $table_test->get_id_person();
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

	private function fill_distinct_id_person($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "person.id",person.name as "person.name" from person where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$person = cls_table_factory::create_instance('person');
			$person->fill($row);
			$data[$row['person.id']] = $person;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['table_test.id']['type'] = 'uuid';
			$this->p_column_definitions['table_test.run_date']['type'] = 'timestamptz';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['table_test.remark']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
