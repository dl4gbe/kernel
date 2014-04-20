<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_article_aa2ab97f_c106_4c19_9bc6_86428acf789d extends cls_table_view_base 
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
		$common_article = cls_table_factory::get_common_article();
		$array_article =  $common_article->get_articles($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_uom($array_article);
		$data_array_id_uom = $this->fill_distinct_id_uom($where);

		$result_array = array();
		foreach($array_article as $article)
			{
			$article_id = $article->get_id();
			$result_array[$article_id]['article.id'] = $article->get_id();
			$result_array[$article_id]['article.name'] = $article->get_name();
			$link_id = $article->get_id_uom();
			if (empty($link_id))
				{
				$result_array[$article_id]['uom.name'] = '';
				}
			else
				{
				$result_array[$article_id]['uom.name'] = $data_array_id_uom[$link_id]->get_name();
				}
			$result_array[$article_id]['article.insurance_no'] = $article->get_insurance_no();
			$result_array[$article_id]['article.articleno'] = $article->get_articleno();
			$result_array[$article_id]['article.barcode'] = $article->get_barcode();
			$result_array[$article_id]['article.rentable'] = $article->get_rentable();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_uom($array_article)
	{
		$ids = array();
		foreach ($array_article as $article)
		{
			$id = $article->get_id_uom();
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

	private function fill_distinct_id_uom($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "uom.id",uom.name as "uom.name" from uom where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$uom = cls_table_factory::create_instance('uom');
			$uom->fill($row);
			$data[$row['uom.id']] = $uom;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['article.id']['type'] = 'uuid';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
			$this->p_column_definitions['uom.name']['type'] = 'varchar';
			$this->p_column_definitions['article.insurance_no']['type'] = 'varchar';
			$this->p_column_definitions['article.articleno']['type'] = 'varchar';
			$this->p_column_definitions['article.barcode']['type'] = 'varchar';
			$this->p_column_definitions['article.rentable']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
