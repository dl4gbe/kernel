<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_article_supplier_87a794c8_98c4_448a_a63f_9625c5bc5dd8 extends cls_table_view_base 
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
		$common_article_supplier = cls_table_factory::get_common_article_supplier();
		$array_article_supplier =  $common_article_supplier->get_article_suppliers($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_article($array_article_supplier);
		$data_array_id_article = $this->fill_distinct_id_article($where);

		$where = $this->get_distinct_ids_id_person_supplier($array_article_supplier);
		$data_array_id_person_supplier = $this->fill_distinct_id_person_supplier($where);

		$result_array = array();
		foreach($array_article_supplier as $article_supplier)
			{
			$article_supplier_id = $article_supplier->get_id();
			$result_array[$article_supplier_id]['article_supplier.id'] = $article_supplier->get_id();
			$link_id = $article_supplier->get_id_article();
			if (empty($link_id))
				{
				$result_array[$article_supplier_id]['article.name'] = '';
				}
			else
				{
				$result_array[$article_supplier_id]['article.name'] = $data_array_id_article[$link_id]->get_name();
				}
			$link_id = $article_supplier->get_id_person_supplier();
			if (empty($link_id))
				{
				$result_array[$article_supplier_id]['person.name'] = '';
				}
			else
				{
				$result_array[$article_supplier_id]['person.name'] = $data_array_id_person_supplier[$link_id]->get_name();
				}
			$result_array[$article_supplier_id]['article_supplier.name'] = $article_supplier->get_name();
			$result_array[$article_supplier_id]['article_supplier.orderno'] = $article_supplier->get_orderno();
			$result_array[$article_supplier_id]['article_supplier.mindeliverytimedays'] = $article_supplier->get_mindeliverytimedays();
			$result_array[$article_supplier_id]['article_supplier.mininimumorderqty'] = $article_supplier->get_mininimumorderqty();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_article($array_article_supplier)
	{
		$ids = array();
		foreach ($array_article_supplier as $article_supplier)
		{
			$id = $article_supplier->get_id_article();
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

	private function get_distinct_ids_id_person_supplier($array_article_supplier)
	{
		$ids = array();
		foreach ($array_article_supplier as $article_supplier)
		{
			$id = $article_supplier->get_id_person_supplier();
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

	private function fill_distinct_id_person_supplier($where)
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
			$this->p_column_definitions['article_supplier.id']['type'] = 'uuid';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['article_supplier.name']['type'] = 'varchar';
			$this->p_column_definitions['article_supplier.orderno']['type'] = 'varchar';
			$this->p_column_definitions['article_supplier.mindeliverytimedays']['type'] = 'int4';
			$this->p_column_definitions['article_supplier.mininimumorderqty']['type'] = 'int4';
		}
		return $this->p_column_definitions;
	}
}
?>
