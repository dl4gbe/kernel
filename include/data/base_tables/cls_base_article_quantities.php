<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_article_quantities extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_article = null;
private $p_id_article_original = null;
private $p_minqty = null;
private $p_minqty_original = null;
private $p_orderqty = null;
private $p_orderqty_original = null;

private $p_id_article_is_dirty = false;
private $p_minqty_is_dirty = false;
private $p_orderqty_is_dirty = false;

public function get_table_name()
{
	return 'article_quantities';
}

public function get_table_fields()
{
	return array('id','id_article','minqty','orderqty');
}

public function get_table_select($delimiter = "'")
{
	return 'select id as ' . $delimiter . 'article_quantities.id' . $delimiter . ',id_article as ' . $delimiter . 'article_quantities.id_article' . $delimiter . ',minqty as ' . $delimiter . 'article_quantities.minqty' . $delimiter . ',orderqty as ' . $delimiter . 'article_quantities.orderqty' . $delimiter . ' from article_quantities';
}


public function get_id_article()
{
	return $this->p_id_article;
}

public function get_id_article_original()
{
	return $this->p_id_article_original;
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

public function set_id_article_original($value)
{
	$this->p_id_article_original = $value;
}

public function get_id_article_is_dirty()
{
	return $this->p_id_article_is_dirty;
}


public function get_minqty()
{
	return $this->p_minqty;
}

public function get_minqty_original()
{
	return $this->p_minqty_original;
}

public function set_minqty($value)
{
	if ($this->p_minqty === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_minqty_is_dirty = true;
	$this->p_minqty = $value;
}

public function set_minqty_original($value)
{
	$this->p_minqty_original = $value;
}

public function get_minqty_is_dirty()
{
	return $this->p_minqty_is_dirty;
}


public function get_orderqty()
{
	return $this->p_orderqty;
}

public function get_orderqty_original()
{
	return $this->p_orderqty_original;
}

public function set_orderqty($value)
{
	if ($this->p_orderqty === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_orderqty_is_dirty = true;
	$this->p_orderqty = $value;
}

public function set_orderqty_original($value)
{
	$this->p_orderqty_original = $value;
}

public function get_orderqty_is_dirty()
{
	return $this->p_orderqty_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_id_article_is_dirty = false;
	$this->p_minqty_is_dirty = false;
	$this->p_orderqty_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_article = $this->p_id_article_original;
		$this->p_minqty = $this->p_minqty_original;
		$this->p_orderqty = $this->p_orderqty_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => &$val)
		{
		switch ($key)
			{
				case "article_quantities.id":
					$this->id = $val;
					$this->id_original = $val;
					break;
				case "article_quantities.id_article":
					$this->id_article = $val;
					$this->id_article_original = $val;
					break;
				case "article_quantities.minqty":
					$this->minqty = $val;
					$this->minqty_original = $val;
					break;
				case "article_quantities.orderqty":
					$this->orderqty = $val;
					$this->orderqty_original = $val;
					break;
			}
		}
	if ($reset)
	{
		$this->reset_dirty(false);
	}
}
public function get_by_id($id,$db_manager,$application = null)
{
	$sql = $this->get_table_select($db_manager->get_delimeter());
	$sql .= " where id = '" . $id . "'";
	$result = $db_manager->query($sql);
	if (!is_null($result))
	{
		require_once('/include/data/table_factory/cls_table_factory.php');
		$article_quantities = cls_table_factory::create_instance('article_quantities');
		$row = $db_manager->fetch_row($result);
		$article_quantities->fill($row);
		return $article_quantities;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_article_quantities.php');
		return cls_save_article_quantities::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_article_quantities.php');
		return cls_save_article_quantities::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}
}
?>
