<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_table_bean_19f886a7_afe5_4543_9561_db3f0fcf0874 extends cls_table_view_base 
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
		$common_table_bean = cls_table_factory::get_common_table_bean();
		$array_table_bean =  $common_table_bean->get_table_beans($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_application($array_table_bean);
		$data_array_id_application = $this->fill_distinct_id_application($where);

		$result_array = array();
		foreach($array_table_bean as $table_bean)
			{
			$table_bean_id = $table_bean->get_id();
			$result_array[$table_bean_id]['table_bean.id'] = $table_bean->get_id();
			$link_id = $table_bean->get_id_application();
			if (empty($link_id))
				{
				$result_array[$table_bean_id]['application.name'] = '';
				}
			else
				{
				$result_array[$table_bean_id]['application.name'] = $data_array_id_application[$link_id]->get_name();
				}
			$result_array[$table_bean_id]['table_bean.name'] = $table_bean->get_name();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_application($array_table_bean)
	{
		$ids = array();
		foreach ($array_table_bean as $table_bean)
		{
			$id = $table_bean->get_id_application();
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
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['table_bean.id']['type'] = 'uuid';
			$this->p_column_definitions['application.name']['type'] = 'varchar';
			$this->p_column_definitions['table_bean.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
