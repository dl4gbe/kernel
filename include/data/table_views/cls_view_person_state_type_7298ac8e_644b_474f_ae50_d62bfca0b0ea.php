<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_person_state_type_7298ac8e_644b_474f_ae50_d62bfca0b0ea extends cls_table_view_base 
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
		$common_person_state_type = cls_table_factory::get_common_person_state_type();
		$array_person_state_type =  $common_person_state_type->get_person_state_types($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person_states_group($array_person_state_type);
		$data_array_id_person_states_group = $this->fill_distinct_id_person_states_group($where);

		$where = $this->get_distinct_ids_id_article_price_group($array_person_state_type);
		$data_array_id_article_price_group = $this->fill_distinct_id_article_price_group($where);

		$where = $this->get_distinct_ids_id_contract_template($array_person_state_type);
		$data_array_id_contract_template = $this->fill_distinct_id_contract_template($where);

		$result_array = array();
		foreach($array_person_state_type as $person_state_type)
			{
			$person_state_type_id = $person_state_type->get_id();
			$result_array[$person_state_type_id]['person_state_type.id'] = $person_state_type->get_id();
			$link_id = $person_state_type->get_id_person_states_group();
			if (empty($link_id))
				{
				$result_array[$person_state_type_id]['person_states_group.name'] = '';
				}
			else
				{
				$result_array[$person_state_type_id]['person_states_group.name'] = $data_array_id_person_states_group[$link_id]->get_name();
				}
			$result_array[$person_state_type_id]['person_state_type.name'] = $person_state_type->get_name();
			$link_id = $person_state_type->get_id_article_price_group();
			if (empty($link_id))
				{
				$result_array[$person_state_type_id]['article_price_group.name'] = '';
				}
			else
				{
				$result_array[$person_state_type_id]['article_price_group.name'] = $data_array_id_article_price_group[$link_id]->get_name();
				}
			$link_id = $person_state_type->get_id_contract_template();
			if (empty($link_id))
				{
				$result_array[$person_state_type_id]['contract_template.name'] = '';
				}
			else
				{
				$result_array[$person_state_type_id]['contract_template.name'] = $data_array_id_contract_template[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person_states_group($array_person_state_type)
	{
		$ids = array();
		foreach ($array_person_state_type as $person_state_type)
		{
			$id = $person_state_type->get_id_person_states_group();
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

	private function fill_distinct_id_person_states_group($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "person_states_group.id",person_states_group.name as "person_states_group.name" from person_states_group where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$person_states_group = cls_table_factory::create_instance('person_states_group');
			$person_states_group->fill($row);
			$data[$row['person_states_group.id']] = $person_states_group;
		}
		return $data;
	}

	private function get_distinct_ids_id_article_price_group($array_person_state_type)
	{
		$ids = array();
		foreach ($array_person_state_type as $person_state_type)
		{
			$id = $person_state_type->get_id_article_price_group();
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

	private function fill_distinct_id_article_price_group($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "article_price_group.id",article_price_group.name as "article_price_group.name" from article_price_group where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$article_price_group = cls_table_factory::create_instance('article_price_group');
			$article_price_group->fill($row);
			$data[$row['article_price_group.id']] = $article_price_group;
		}
		return $data;
	}

	private function get_distinct_ids_id_contract_template($array_person_state_type)
	{
		$ids = array();
		foreach ($array_person_state_type as $person_state_type)
		{
			$id = $person_state_type->get_id_contract_template();
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

	private function fill_distinct_id_contract_template($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "contract_template.id",contract_template.name as "contract_template.name" from contract_template where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$contract_template = cls_table_factory::create_instance('contract_template');
			$contract_template->fill($row);
			$data[$row['contract_template.id']] = $contract_template;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['person_state_type.id']['type'] = 'uuid';
			$this->p_column_definitions['person_states_group.name']['type'] = 'varchar';
			$this->p_column_definitions['person_state_type.name']['type'] = 'varchar';
			$this->p_column_definitions['article_price_group.name']['type'] = 'varchar';
			$this->p_column_definitions['contract_template.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
