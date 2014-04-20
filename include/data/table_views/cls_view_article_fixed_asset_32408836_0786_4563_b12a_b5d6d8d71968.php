<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_article_fixed_asset_32408836_0786_4563_b12a_b5d6d8d71968 extends cls_table_view_base 
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
		$common_article_fixed_asset = cls_table_factory::get_common_article_fixed_asset();
		$array_article_fixed_asset =  $common_article_fixed_asset->get_article_fixed_assets($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_article($array_article_fixed_asset);
		$data_array_id_article = $this->fill_distinct_id_article($where);

		$where = $this->get_distinct_ids_id_fixed_asset($array_article_fixed_asset);
		$data_array_id_fixed_asset = $this->fill_distinct_id_fixed_asset($where);

		$result_array = array();
		foreach($array_article_fixed_asset as $article_fixed_asset)
			{
			$article_fixed_asset_id = $article_fixed_asset->get_id();
			$result_array[$article_fixed_asset_id]['article_fixed_asset.id'] = $article_fixed_asset->get_id();
			$link_id = $article_fixed_asset->get_id_article();
			if (empty($link_id))
				{
				$result_array[$article_fixed_asset_id]['article.name'] = '';
				}
			else
				{
				$result_array[$article_fixed_asset_id]['article.name'] = $data_array_id_article[$link_id]->get_name();
				}
			$link_id = $article_fixed_asset->get_id_fixed_asset();
			if (empty($link_id))
				{
				$result_array[$article_fixed_asset_id]['fixed_asset.name'] = '';
				}
			else
				{
				$result_array[$article_fixed_asset_id]['fixed_asset.name'] = $data_array_id_fixed_asset[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_article($array_article_fixed_asset)
	{
		$ids = array();
		foreach ($array_article_fixed_asset as $article_fixed_asset)
		{
			$id = $article_fixed_asset->get_id_article();
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

	private function get_distinct_ids_id_fixed_asset($array_article_fixed_asset)
	{
		$ids = array();
		foreach ($array_article_fixed_asset as $article_fixed_asset)
		{
			$id = $article_fixed_asset->get_id_fixed_asset();
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

	private function fill_distinct_id_fixed_asset($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "fixed_asset.id",fixed_asset.name as "fixed_asset.name" from fixed_asset where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$fixed_asset = cls_table_factory::create_instance('fixed_asset');
			$fixed_asset->fill($row);
			$data[$row['fixed_asset.id']] = $fixed_asset;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['article_fixed_asset.id']['type'] = 'uuid';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
			$this->p_column_definitions['fixed_asset.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
