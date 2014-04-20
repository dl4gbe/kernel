<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_article_rent_price_54b90d1b_f5ec_4273_9eb3_8f182bbaf8ab extends cls_table_view_base 
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
		$common_article_rent_price = cls_table_factory::get_common_article_rent_price();
		$array_article_rent_price =  $common_article_rent_price->get_article_rent_prices($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_article($array_article_rent_price);
		$data_array_id_article = $this->fill_distinct_id_article($where);

		$where = $this->get_distinct_ids_id_article_price_group($array_article_rent_price);
		$data_array_id_article_price_group = $this->fill_distinct_id_article_price_group($where);

		$where = $this->get_distinct_ids_id_time_unit($array_article_rent_price);
		$data_array_id_time_unit = $this->fill_distinct_id_time_unit($where);

		$result_array = array();
		foreach($array_article_rent_price as $article_rent_price)
			{
			$article_rent_price_id = $article_rent_price->get_id();
			$result_array[$article_rent_price_id]['article_rent_price.id'] = $article_rent_price->get_id();
			$link_id = $article_rent_price->get_id_article();
			if (empty($link_id))
				{
				$result_array[$article_rent_price_id]['article.name'] = '';
				}
			else
				{
				$result_array[$article_rent_price_id]['article.name'] = $data_array_id_article[$link_id]->get_name();
				}
			$result_array[$article_rent_price_id]['article_rent_price.deposit'] = $article_rent_price->get_deposit();
			$link_id = $article_rent_price->get_id_article_price_group();
			if (empty($link_id))
				{
				$result_array[$article_rent_price_id]['article_price_group.name'] = '';
				}
			else
				{
				$result_array[$article_rent_price_id]['article_price_group.name'] = $data_array_id_article_price_group[$link_id]->get_name();
				}
			$result_array[$article_rent_price_id]['article_rent_price.validfrom'] = $article_rent_price->get_validfrom();
			$result_array[$article_rent_price_id]['article_rent_price.validtil'] = $article_rent_price->get_validtil();
			$result_array[$article_rent_price_id]['article_rent_price.price_per_unit'] = $article_rent_price->get_price_per_unit();
			$link_id = $article_rent_price->get_id_time_unit();
			if (empty($link_id))
				{
				$result_array[$article_rent_price_id]['time_unit.name'] = '';
				}
			else
				{
				$result_array[$article_rent_price_id]['time_unit.name'] = $data_array_id_time_unit[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_article($array_article_rent_price)
	{
		$ids = array();
		foreach ($array_article_rent_price as $article_rent_price)
		{
			$id = $article_rent_price->get_id_article();
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

	private function get_distinct_ids_id_article_price_group($array_article_rent_price)
	{
		$ids = array();
		foreach ($array_article_rent_price as $article_rent_price)
		{
			$id = $article_rent_price->get_id_article_price_group();
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

	private function get_distinct_ids_id_time_unit($array_article_rent_price)
	{
		$ids = array();
		foreach ($array_article_rent_price as $article_rent_price)
		{
			$id = $article_rent_price->get_id_time_unit();
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

	private function fill_distinct_id_time_unit($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "time_unit.id",time_unit.name as "time_unit.name" from time_unit where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$time_unit = cls_table_factory::create_instance('time_unit');
			$time_unit->fill($row);
			$data[$row['time_unit.id']] = $time_unit;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['article_rent_price.id']['type'] = 'uuid';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
			$this->p_column_definitions['article_rent_price.deposit']['type'] = 'money';
			$this->p_column_definitions['article_price_group.name']['type'] = 'varchar';
			$this->p_column_definitions['article_rent_price.validfrom']['type'] = 'date';
			$this->p_column_definitions['article_rent_price.validtil']['type'] = 'date';
			$this->p_column_definitions['article_rent_price.price_per_unit']['type'] = 'money';
			$this->p_column_definitions['time_unit.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
