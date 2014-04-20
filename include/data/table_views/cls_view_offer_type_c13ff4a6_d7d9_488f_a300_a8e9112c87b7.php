<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_offer_type_c13ff4a6_d7d9_488f_a300_a8e9112c87b7 extends cls_table_view_base 
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
		$common_offer_type = cls_table_factory::get_common_offer_type();
		$array_offer_type =  $common_offer_type->get_offer_types($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_article_base($array_offer_type);
		$data_array_id_article_base = $this->fill_distinct_id_article_base($where);

		$where = $this->get_distinct_ids_id_article_visit($array_offer_type);
		$data_array_id_article_visit = $this->fill_distinct_id_article_visit($where);

		$where = $this->get_distinct_ids_id_article_transport($array_offer_type);
		$data_array_id_article_transport = $this->fill_distinct_id_article_transport($where);

		$result_array = array();
		foreach($array_offer_type as $offer_type)
			{
			$offer_type_id = $offer_type->get_id();
			$result_array[$offer_type_id]['offer_type.id'] = $offer_type->get_id();
			$result_array[$offer_type_id]['offer_type.type'] = $offer_type->get_type();
			$result_array[$offer_type_id]['offer_type.name'] = $offer_type->get_name();
			$link_id = $offer_type->get_id_article_base();
			if (empty($link_id))
				{
				$result_array[$offer_type_id]['article.name'] = '';
				}
			else
				{
				$result_array[$offer_type_id]['article.name'] = $data_array_id_article_base[$link_id]->get_name();
				}
			$link_id = $offer_type->get_id_article_visit();
			if (empty($link_id))
				{
				$result_array[$offer_type_id]['article.name'] = '';
				}
			else
				{
				$result_array[$offer_type_id]['article.name'] = $data_array_id_article_visit[$link_id]->get_name();
				}
			$link_id = $offer_type->get_id_article_transport();
			if (empty($link_id))
				{
				$result_array[$offer_type_id]['article.name'] = '';
				}
			else
				{
				$result_array[$offer_type_id]['article.name'] = $data_array_id_article_transport[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_article_base($array_offer_type)
	{
		$ids = array();
		foreach ($array_offer_type as $offer_type)
		{
			$id = $offer_type->get_id_article_base();
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

	private function fill_distinct_id_article_base($where)
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

	private function get_distinct_ids_id_article_visit($array_offer_type)
	{
		$ids = array();
		foreach ($array_offer_type as $offer_type)
		{
			$id = $offer_type->get_id_article_visit();
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

	private function fill_distinct_id_article_visit($where)
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

	private function get_distinct_ids_id_article_transport($array_offer_type)
	{
		$ids = array();
		foreach ($array_offer_type as $offer_type)
		{
			$id = $offer_type->get_id_article_transport();
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

	private function fill_distinct_id_article_transport($where)
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
			$this->p_column_definitions['offer_type.id']['type'] = 'uuid';
			$this->p_column_definitions['offer_type.type']['type'] = 'bpchar';
			$this->p_column_definitions['offer_type.name']['type'] = 'varchar';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
