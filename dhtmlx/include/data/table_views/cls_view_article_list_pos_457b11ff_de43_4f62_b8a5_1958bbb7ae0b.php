<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_article_list_pos_457b11ff_de43_4f62_b8a5_1958bbb7ae0b extends cls_table_view_base 
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
		$common_article_list_pos = cls_table_factory::get_common_article_list_pos();
		$array_article_list_pos =  $common_article_list_pos->get_article_list_poss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_article_list($array_article_list_pos);
		$data_array_id_article_list = $this->fill_distinct_id_article_list($where);

		$where = $this->get_distinct_ids_id_article($array_article_list_pos);
		$data_array_id_article = $this->fill_distinct_id_article($where);

		$result_array = array();
		foreach($array_article_list_pos as $article_list_pos)
			{
			$article_list_pos_id = $article_list_pos->get_id();
			$result_array[$article_list_pos_id]['article_list_pos.id'] = $article_list_pos->get_id();
			$link_id = $article_list_pos->get_id_article_list();
			if (empty($link_id))
				{
				$result_array[$article_list_pos_id]['article_list.no'] = '';
				}
			else
				{
				$result_array[$article_list_pos_id]['article_list.no'] = $data_array_id_article_list[$link_id]->get_no();
				}
			$link_id = $article_list_pos->get_id_article();
			if (empty($link_id))
				{
				$result_array[$article_list_pos_id]['article.name'] = '';
				}
			else
				{
				$result_array[$article_list_pos_id]['article.name'] = $data_array_id_article[$link_id]->get_name();
				}
			$result_array[$article_list_pos_id]['article_list_pos.qty'] = $article_list_pos->get_qty();
			$result_array[$article_list_pos_id]['article_list_pos.price'] = $article_list_pos->get_price();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_article_list($array_article_list_pos)
	{
		$ids = array();
		foreach ($array_article_list_pos as $article_list_pos)
		{
			$id = $article_list_pos->get_id_article_list();
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

	private function fill_distinct_id_article_list($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "article_list.id",article_list.no as "article_list.no" from article_list where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$article_list = cls_table_factory::create_instance('article_list');
			$article_list->fill($row);
			$data[$row['article_list.id']] = $article_list;
		}
		return $data;
	}

	private function get_distinct_ids_id_article($array_article_list_pos)
	{
		$ids = array();
		foreach ($array_article_list_pos as $article_list_pos)
		{
			$id = $article_list_pos->get_id_article();
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
			$this->p_column_definitions['article_list_pos.id']['type'] = 'uuid';
			$this->p_column_definitions['article_list.no']['type'] = 'varchar';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
			$this->p_column_definitions['article_list_pos.qty']['type'] = 'int4';
			$this->p_column_definitions['article_list_pos.price']['type'] = 'money';
		}
		return $this->p_column_definitions;
	}
}
?>
