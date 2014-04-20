<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_application_c0505604_35e1_4476_ac1e_2dec892c0942 extends cls_table_view_base 
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
		$common_application = cls_table_factory::get_common_application();
		$array_application =  $common_application->get_applications($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_application_template($array_application);
		$data_array_id_application_template = $this->fill_distinct_id_application_template($where);

		$where = $this->get_distinct_ids_id_application_controller($array_application);
		$data_array_id_application_controller = $this->fill_distinct_id_application_controller($where);

		$where = $this->get_distinct_ids_id_main_page($array_application);
		$data_array_id_main_page = $this->fill_distinct_id_main_page($where);

		$result_array = array();
		foreach($array_application as $application)
			{
			$application_id = $application->get_id();
			$result_array[$application_id]['application.id'] = $application->get_id();
			$result_array[$application_id]['application.name'] = $application->get_name();
			$result_array[$application_id]['application.caption'] = $application->get_caption();
			$link_id = $application->get_id_application_template();
			if (empty($link_id))
				{
				$result_array[$application_id]['application_template.name'] = '';
				}
			else
				{
				$result_array[$application_id]['application_template.name'] = $data_array_id_application_template[$link_id]->get_name();
				}
			$link_id = $application->get_id_application_controller();
			if (empty($link_id))
				{
				$result_array[$application_id]['application_controller.name'] = '';
				}
			else
				{
				$result_array[$application_id]['application_controller.name'] = $data_array_id_application_controller[$link_id]->get_name();
				}
			$link_id = $application->get_id_main_page();
			if (empty($link_id))
				{
				$result_array[$application_id]['main_page.name'] = '';
				}
			else
				{
				$result_array[$application_id]['main_page.name'] = $data_array_id_main_page[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_application_template($array_application)
	{
		$ids = array();
		foreach ($array_application as $application)
		{
			$id = $application->get_id_application_template();
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

	private function fill_distinct_id_application_template($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "application_template.id",application_template.name as "application_template.name" from application_template where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$application_template = cls_table_factory::create_instance('application_template');
			$application_template->fill($row);
			$data[$row['application_template.id']] = $application_template;
		}
		return $data;
	}

	private function get_distinct_ids_id_application_controller($array_application)
	{
		$ids = array();
		foreach ($array_application as $application)
		{
			$id = $application->get_id_application_controller();
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

	private function fill_distinct_id_application_controller($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "application_controller.id",application_controller.name as "application_controller.name" from application_controller where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$application_controller = cls_table_factory::create_instance('application_controller');
			$application_controller->fill($row);
			$data[$row['application_controller.id']] = $application_controller;
		}
		return $data;
	}

	private function get_distinct_ids_id_main_page($array_application)
	{
		$ids = array();
		foreach ($array_application as $application)
		{
			$id = $application->get_id_main_page();
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

	private function fill_distinct_id_main_page($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "main_page.id",main_page.name as "main_page.name" from main_page where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$main_page = cls_table_factory::create_instance('main_page');
			$main_page->fill($row);
			$data[$row['main_page.id']] = $main_page;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['application.id']['type'] = 'uuid';
			$this->p_column_definitions['application.name']['type'] = 'varchar';
			$this->p_column_definitions['application.caption']['type'] = 'varchar';
			$this->p_column_definitions['application_template.name']['type'] = 'varchar';
			$this->p_column_definitions['application_controller.name']['type'] = 'varchar';
			$this->p_column_definitions['main_page.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
