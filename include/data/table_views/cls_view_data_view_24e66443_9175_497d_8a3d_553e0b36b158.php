<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_data_view_24e66443_9175_497d_8a3d_553e0b36b158 extends cls_table_view_base 
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
		$common_data_view = cls_table_factory::get_common_data_view();
		$array_data_view =  $common_data_view->get_data_views($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_ribbonbar($array_data_view);
		$data_array_id_ribbonbar = $this->fill_distinct_id_ribbonbar($where);

		$where = $this->get_distinct_ids_id_control_detail($array_data_view);
		$data_array_id_control_detail = $this->fill_distinct_id_control_detail($where);

		$result_array = array();
		foreach($array_data_view as $data_view)
			{
			$data_view_id = $data_view->get_id();
			$result_array[$data_view_id]['data_view.id'] = $data_view->get_id();
			$result_array[$data_view_id]['data_view.name'] = $data_view->get_name();
			$result_array[$data_view_id]['data_view.file_name'] = $data_view->get_file_name();
			$result_array[$data_view_id]['data_view.table_name'] = $data_view->get_table_name();
			$result_array[$data_view_id]['data_view.caption'] = $data_view->get_caption();
			$link_id = $data_view->get_id_ribbonbar();
			if (empty($link_id))
				{
				$result_array[$data_view_id]['ribbonbar.name'] = '';
				}
			else
				{
				$result_array[$data_view_id]['ribbonbar.name'] = $data_array_id_ribbonbar[$link_id]->get_name();
				}
			$result_array[$data_view_id]['data_view.has_edit_form'] = $data_view->get_has_edit_form();
			$link_id = $data_view->get_id_control_detail();
			if (empty($link_id))
				{
				$result_array[$data_view_id]['control.name'] = '';
				}
			else
				{
				$result_array[$data_view_id]['control.name'] = $data_array_id_control_detail[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_ribbonbar($array_data_view)
	{
		$ids = array();
		foreach ($array_data_view as $data_view)
		{
			$id = $data_view->get_id_ribbonbar();
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

	private function fill_distinct_id_ribbonbar($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "ribbonbar.id",ribbonbar.name as "ribbonbar.name" from ribbonbar where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$ribbonbar = cls_table_factory::create_instance('ribbonbar');
			$ribbonbar->fill($row);
			$data[$row['ribbonbar.id']] = $ribbonbar;
		}
		return $data;
	}

	private function get_distinct_ids_id_control_detail($array_data_view)
	{
		$ids = array();
		foreach ($array_data_view as $data_view)
		{
			$id = $data_view->get_id_control_detail();
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

	private function fill_distinct_id_control_detail($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "control.id",control.name as "control.name" from control where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$control = cls_table_factory::create_instance('control');
			$control->fill($row);
			$data[$row['control.id']] = $control;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['data_view.id']['type'] = 'uuid';
			$this->p_column_definitions['data_view.name']['type'] = 'varchar';
			$this->p_column_definitions['data_view.file_name']['type'] = 'varchar';
			$this->p_column_definitions['data_view.table_name']['type'] = 'varchar';
			$this->p_column_definitions['data_view.caption']['type'] = 'varchar';
			$this->p_column_definitions['ribbonbar.name']['type'] = 'varchar';
			$this->p_column_definitions['data_view.has_edit_form']['type'] = 'bool';
			$this->p_column_definitions['control.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
