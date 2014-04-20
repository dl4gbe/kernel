<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_prescription_type_pos_b6ca5b35_f431_4651_b484_9add4dd7c9e4 extends cls_table_view_base 
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
		$common_prescription_type_pos = cls_table_factory::get_common_prescription_type_pos();
		$array_prescription_type_pos =  $common_prescription_type_pos->get_prescription_type_poss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_prescription_type($array_prescription_type_pos);
		$data_array_id_prescription_type = $this->fill_distinct_id_prescription_type($where);

		$where = $this->get_distinct_ids_id_article($array_prescription_type_pos);
		$data_array_id_article = $this->fill_distinct_id_article($where);

		$result_array = array();
		foreach($array_prescription_type_pos as $prescription_type_pos)
			{
			$prescription_type_pos_id = $prescription_type_pos->get_id();
			$result_array[$prescription_type_pos_id]['prescription_type_pos.id'] = $prescription_type_pos->get_id();
			$link_id = $prescription_type_pos->get_id_prescription_type();
			if (empty($link_id))
				{
				$result_array[$prescription_type_pos_id]['prescription_type.name'] = '';
				}
			else
				{
				$result_array[$prescription_type_pos_id]['prescription_type.name'] = $data_array_id_prescription_type[$link_id]->get_name();
				}
			$link_id = $prescription_type_pos->get_id_article();
			if (empty($link_id))
				{
				$result_array[$prescription_type_pos_id]['article.name'] = '';
				}
			else
				{
				$result_array[$prescription_type_pos_id]['article.name'] = $data_array_id_article[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_prescription_type($array_prescription_type_pos)
	{
		$ids = array();
		foreach ($array_prescription_type_pos as $prescription_type_pos)
		{
			$id = $prescription_type_pos->get_id_prescription_type();
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

	private function fill_distinct_id_prescription_type($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "prescription_type.id",prescription_type.name as "prescription_type.name" from prescription_type where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$prescription_type = cls_table_factory::create_instance('prescription_type');
			$prescription_type->fill($row);
			$data[$row['prescription_type.id']] = $prescription_type;
		}
		return $data;
	}

	private function get_distinct_ids_id_article($array_prescription_type_pos)
	{
		$ids = array();
		foreach ($array_prescription_type_pos as $prescription_type_pos)
		{
			$id = $prescription_type_pos->get_id_article();
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

	private function fill_distinct_id_article($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "article.id",article.name as "article.name" from article where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$article = cls_table_factory::create_instance('article');
			$article->fill($row);
			$data[$row['article.id']] = $article;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['prescription_type_pos.id']['type'] = 'uuid';
			$this->p_column_definitions['prescription_type.name']['type'] = 'varchar';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
