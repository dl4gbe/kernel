<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_article_list_005903a3_fdde_4f75_beb1_5f797c92eb3f extends cls_table_view_base 
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
		$common_article_list = cls_table_factory::get_common_article_list();
		$array_article_list =  $common_article_list->get_article_lists($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person($array_article_list);
		$data_array_id_person = $this->fill_distinct_id_person($where);

		$where = $this->get_distinct_ids_id_person_employee($array_article_list);
		$data_array_id_person_employee = $this->fill_distinct_id_person_employee($where);

		$result_array = array();
		foreach($array_article_list as $article_list)
			{
			$article_list_id = $article_list->get_id();
			$result_array[$article_list_id]['article_list.id'] = $article_list->get_id();
			$link_id = $article_list->get_id_person();
			if (empty($link_id))
				{
				$result_array[$article_list_id]['person.name'] = '';
				}
			else
				{
				$result_array[$article_list_id]['person.name'] = $data_array_id_person[$link_id]->get_name();
				}
			$result_array[$article_list_id]['article_list.transfertype'] = $article_list->get_transfertype();
			$result_array[$article_list_id]['article_list.no'] = $article_list->get_no();
			$result_array[$article_list_id]['article_list.documentdate'] = $article_list->get_documentdate();
			$link_id = $article_list->get_id_person_employee();
			if (empty($link_id))
				{
				$result_array[$article_list_id]['person.name'] = '';
				}
			else
				{
				$result_array[$article_list_id]['person.name'] = $data_array_id_person_employee[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person($array_article_list)
	{
		$ids = array();
		foreach ($array_article_list as $article_list)
		{
			$id = $article_list->get_id_person();
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

	private function get_distinct_ids_id_person_employee($array_article_list)
	{
		$ids = array();
		foreach ($array_article_list as $article_list)
		{
			$id = $article_list->get_id_person_employee();
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

	private function fill_distinct_id_person_employee($where)
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
			$this->p_column_definitions['article_list.id']['type'] = 'uuid';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['article_list.transfertype']['type'] = 'bpchar';
			$this->p_column_definitions['article_list.no']['type'] = 'varchar';
			$this->p_column_definitions['article_list.documentdate']['type'] = 'date';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
