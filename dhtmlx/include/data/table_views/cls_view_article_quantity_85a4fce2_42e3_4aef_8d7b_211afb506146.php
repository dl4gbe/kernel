<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_article_quantity_85a4fce2_42e3_4aef_8d7b_211afb506146 extends cls_table_view_base 
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
		$common_article_quantity = cls_table_factory::get_common_article_quantity();
		$array_article_quantity =  $common_article_quantity->get_article_quantitys($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_article($array_article_quantity);
		$data_array_id_article = $this->fill_distinct_id_article($where);

		$result_array = array();
		foreach($array_article_quantity as $article_quantity)
			{
			$article_quantity_id = $article_quantity->get_id();
			$result_array[$article_quantity_id]['article_quantity.id'] = $article_quantity->get_id();
			$link_id = $article_quantity->get_id_article();
			if (empty($link_id))
				{
				$result_array[$article_quantity_id]['article.name'] = '';
				}
			else
				{
				$result_array[$article_quantity_id]['article.name'] = $data_array_id_article[$link_id]->get_name();
				}
			$result_array[$article_quantity_id]['article_quantity.minqty'] = $article_quantity->get_minqty();
			$result_array[$article_quantity_id]['article_quantity.orderqty'] = $article_quantity->get_orderqty();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_article($array_article_quantity)
	{
		$ids = array();
		foreach ($array_article_quantity as $article_quantity)
		{
			$id = $article_quantity->get_id_article();
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
			$this->p_column_definitions['article_quantity.id']['type'] = 'uuid';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
			$this->p_column_definitions['article_quantity.minqty']['type'] = 'int4';
			$this->p_column_definitions['article_quantity.orderqty']['type'] = 'int4';
		}
		return $this->p_column_definitions;
	}
}
?>
