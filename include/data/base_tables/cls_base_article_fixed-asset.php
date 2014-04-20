<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
abstract class cls_base_article_fixed-asset extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_article = null;
private $p_id_article_original = null;
private $p_id_fixed_asset = null;
private $p_id_fixed_asset_original = null;

private $p_id_article_is_dirty = false;
private $p_id_fixed_asset_is_dirty = false;

public function get_table_name()
{
	return 'article_fixed-asset';
}

function get_table_fields()
{
	return array('id','id_article','id_fixed_asset');
}

public function get_table_select($delimiter = "'")
{
	return 'select id as ' . $delimiter . 'article_fixed-asset.id' . $delimiter . ',id_article as ' . $delimiter . 'article_fixed-asset.id_article' . $delimiter . ',id_fixed_asset as ' . $delimiter . 'article_fixed-asset.id_fixed_asset' . $delimiter . ' from article_fixed-asset';
}


public function get_id_article()
{
	return $this->p_id_article;
}

public function set_id_article($value)
{
	if ($this->p_id_article === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_article_is_dirty = true;
	$this->p_id_article = $value;
}

public function get_id_fixed_asset()
{
	return $this->p_id_fixed_asset;
}

public function set_id_fixed_asset($value)
{
	if ($this->p_id_fixed_asset === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_fixed_asset_is_dirty = true;
	$this->p_id_fixed_asset = $value;
}

public function reset_dirty($reset_values = false)
{
	$this->p_id_article_is_dirty = false;
	$this->p_id_fixed_asset_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_article = $this->p_id_article_original;
		$this->p_id_fixed_asset = $this->p_id_fixed_asset_original;
	}
}
public function fill($row)
{
	foreach ($row as $key => &$val)
		{
			echo $key . " " . $val . "</br>";
		}
}
function get_by_id($id,$db_manager)
{
	$sql = $this->get_table_select($db_manager->get_delimeter());
	$sql .= " where id = '" . $id . "'";
	$result = $db_manager->query($sql);
	if (!is_null($result))
	{
		require_once('/include/data/table_factory/cls_table_factory.php');
		$article_fixed-asset = cls_table_factory::create_instance('article_fixed-asset');
		$row = $db_manager->fetch_row($result);
		$article_fixed-asset->fill($row);
		return $article_fixed-asset;
	}
}
}
?>
