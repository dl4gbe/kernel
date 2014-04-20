<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_column_security_1637ab47_7f15_4325_826f_f2624a58f134 extends cls_table_view_base 
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
		$common_column_security = cls_table_factory::get_common_column_security();
		$array_column_security =  $common_column_security->get_column_securitys($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_table_columns($array_column_security);
		$data_array_id_table_columns = $this->fill_distinct_id_table_columns($where);

		$where = $this->get_distinct_ids_id_access_group($array_column_security);
		$data_array_id_access_group = $this->fill_distinct_id_access_group($where);

		$result_array = array();
		foreach($array_column_security as $column_security)
			{
			$column_security_id = $column_security->get_id();
			$result_array[$column_security_id]['column_security.id'] = $column_security->get_id();
			$link_id = $column_security->get_id_table_columns();
			if (empty($link_id))
				{
				$result_array[$column_security_id]['table_column.name'] = '';
				}
			else
				{
				$result_array[$column_security_id]['table_column.name'] = $data_array_id_table_columns[$link_id]->get_name();
				}
			$link_id = $column_security->get_id_access_group();
			if (empty($link_id))
				{
				$result_array[$column_security_id]['access_group.name'] = '';
				}
			else
				{
				$result_array[$column_security_id]['access_group.name'] = $data_array_id_access_group[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_table_columns($array_column_security)
	{
		$ids = array();
		foreach ($array_column_security as $column_security)
		{
			$id = $column_security->get_id_table_columns();
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

	private function fill_distinct_id_table_columns($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "table_column.id",table_column.name as "table_column.name" from table_column where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$table_column = cls_table_factory::create_instance('table_column');
			$table_column->fill($row);
			$data[$row['table_column.id']] = $table_column;
		}
		return $data;
	}

	private function get_distinct_ids_id_access_group($array_column_security)
	{
		$ids = array();
		foreach ($array_column_security as $column_security)
		{
			$id = $column_security->get_id_access_group();
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

	private function fill_distinct_id_access_group($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "access_group.id",access_group.name as "access_group.name" from access_group where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$access_group = cls_table_factory::create_instance('access_group');
			$access_group->fill($row);
			$data[$row['access_group.id']] = $access_group;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['column_security.id']['type'] = 'uuid';
			$this->p_column_definitions['table_column.name']['type'] = 'varchar';
			$this->p_column_definitions['access_group.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
