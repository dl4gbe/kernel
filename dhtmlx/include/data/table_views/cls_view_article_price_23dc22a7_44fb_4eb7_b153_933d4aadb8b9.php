<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_article_price_23dc22a7_44fb_4eb7_b153_933d4aadb8b9 extends cls_table_view_base 
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
		$common_article_price = cls_table_factory::get_common_article_price();
		$array_article_price =  $common_article_price->get_article_prices($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_article($array_article_price);
		$data_array_id_article = $this->fill_distinct_id_article($where);

		$where = $this->get_distinct_ids_id_article_price_group($array_article_price);
		$data_array_id_article_price_group = $this->fill_distinct_id_article_price_group($where);

		$result_array = array();
		foreach($array_article_price as $article_price)
			{
			$article_price_id = $article_price->get_id();
			$result_array[$article_price_id]['article_price.id'] = $article_price->get_id();
			$link_id = $article_price->get_id_article();
			if (empty($link_id))
				{
				$result_array[$article_price_id]['article.name'] = '';
				}
			else
				{
				$result_array[$article_price_id]['article.name'] = $data_array_id_article[$link_id]->get_name();
				}
			$result_array[$article_price_id]['article_price.price'] = $article_price->get_price();
			$link_id = $article_price->get_id_article_price_group();
			if (empty($link_id))
				{
				$result_array[$article_price_id]['article_price_group.name'] = '';
				}
			else
				{
				$result_array[$article_price_id]['article_price_group.name'] = $data_array_id_article_price_group[$link_id]->get_name();
				}
			$result_array[$article_price_id]['article_price.validfrom'] = $article_price->get_validfrom();
			$result_array[$article_price_id]['article_price.validtil'] = $article_price->get_validtil();
			$result_array[$article_price_id]['article_price.minqty'] = $article_price->get_minqty();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_article($array_article_price)
	{
		$ids = array();
		foreach ($array_article_price as $article_price)
		{
			$id = $article_price->get_id_article();
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

	private function get_distinct_ids_id_article_price_group($array_article_price)
	{
		$ids = array();
		foreach ($array_article_price as $article_price)
		{
			$id = $article_price->get_id_article_price_group();
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
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['article_price.id']['type'] = 'uuid';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
			$this->p_column_definitions['article_price.price']['type'] = 'money';
			$this->p_column_definitions['article_price_group.name']['type'] = 'varchar';
			$this->p_column_definitions['article_price.validfrom']['type'] = 'date';
			$this->p_column_definitions['article_price.validtil']['type'] = 'date';
			$this->p_column_definitions['article_price.minqty']['type'] = 'int4';
		}
		return $this->p_column_definitions;
	}
}
?>
