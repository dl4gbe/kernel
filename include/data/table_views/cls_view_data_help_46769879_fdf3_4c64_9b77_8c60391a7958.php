<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_data_help_46769879_fdf3_4c64_9b77_8c60391a7958 extends cls_table_view_base 
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
		$common_data_help = cls_table_factory::get_common_data_help();
		$array_data_help =  $common_data_help->get_data_helps($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_application($array_data_help);
		$data_array_id_application = $this->fill_distinct_id_application($where);

		$where = $this->get_distinct_ids_id_person_author($array_data_help);
		$data_array_id_person_author = $this->fill_distinct_id_person_author($where);

		$result_array = array();
		foreach($array_data_help as $data_help)
			{
			$data_help_id = $data_help->get_id();
			$result_array[$data_help_id]['data_help.id'] = $data_help->get_id();
			$link_id = $data_help->get_id_application();
			if (empty($link_id))
				{
				$result_array[$data_help_id]['application.name'] = '';
				}
			else
				{
				$result_array[$data_help_id]['application.name'] = $data_array_id_application[$link_id]->get_name();
				}
			$result_array[$data_help_id]['data_help.id_data'] = $data_help->get_id_data();
			$result_array[$data_help_id]['data_help.name'] = $data_help->get_name();
			$result_array[$data_help_id]['data_help.content'] = $data_help->get_content();
			$result_array[$data_help_id]['data_help.language'] = $data_help->get_language();
			$link_id = $data_help->get_id_person_author();
			if (empty($link_id))
				{
				$result_array[$data_help_id]['person.name'] = '';
				}
			else
				{
				$result_array[$data_help_id]['person.name'] = $data_array_id_person_author[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_application($array_data_help)
	{
		$ids = array();
		foreach ($array_data_help as $data_help)
		{
			$id = $data_help->get_id_application();
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

	private function get_distinct_ids_id_person_author($array_data_help)
	{
		$ids = array();
		foreach ($array_data_help as $data_help)
		{
			$id = $data_help->get_id_person_author();
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

	private function fill_distinct_id_person_author($where)
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
			$this->p_column_definitions['data_help.id']['type'] = 'uuid';
			$this->p_column_definitions['application.name']['type'] = 'varchar';
			$this->p_column_definitions['data_help.id_data']['type'] = 'uuid';
			$this->p_column_definitions['data_help.name']['type'] = 'varchar';
			$this->p_column_definitions['data_help.content']['type'] = 'text';
			$this->p_column_definitions['data_help.language']['type'] = 'bpchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
