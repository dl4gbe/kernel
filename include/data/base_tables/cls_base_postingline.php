<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_postingline extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_postingheader = null;
private $p_id_postingheader_original = null;
private $p_debit = null;
private $p_debit_original = null;
private $p_credit = null;
private $p_credit_original = null;
private $p_id_account = null;
private $p_id_account_original = null;
private $p_postingtype = null;
private $p_postingtype_original = null;
private $p_id_article = null;
private $p_id_article_original = null;

private $p_id_postingheader_is_dirty = false;
private $p_debit_is_dirty = false;
private $p_credit_is_dirty = false;
private $p_id_account_is_dirty = false;
private $p_postingtype_is_dirty = false;
private $p_id_article_is_dirty = false;

public function get_table_name()
{
	return 'postingline';
}

public function get_table_fields()
{
	return array('id','id_postingheader','debit','credit','id_account','postingtype','id_article');
}

public function get_table_select($delimiter = "'")
{
	return 'select id as ' . $delimiter . 'postingline.id' . $delimiter . ',id_postingheader as ' . $delimiter . 'postingline.id_postingheader' . $delimiter . ',debit as ' . $delimiter . 'postingline.debit' . $delimiter . ',credit as ' . $delimiter . 'postingline.credit' . $delimiter . ',id_account as ' . $delimiter . 'postingline.id_account' . $delimiter . ',postingtype as ' . $delimiter . 'postingline.postingtype' . $delimiter . ',id_article as ' . $delimiter . 'postingline.id_article' . $delimiter . ' from postingline';
}


public function get_id_postingheader()
{
	return $this->p_id_postingheader;
}

public function get_id_postingheader_original()
{
	return $this->p_id_postingheader_original;
}

public function set_id_postingheader($value)
{
	if ($this->p_id_postingheader === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_postingheader_is_dirty = true;
	$this->p_id_postingheader = $value;
}

public function set_id_postingheader_original($value)
{
	$this->p_id_postingheader_original = $value;
}

public function get_id_postingheader_is_dirty()
{
	return $this->p_id_postingheader_is_dirty;
}


public function get_debit()
{
	return $this->p_debit;
}

public function get_debit_original()
{
	return $this->p_debit_original;
}

public function set_debit($value)
{
	if ($this->p_debit === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_debit_is_dirty = true;
	$this->p_debit = $value;
}

public function set_debit_original($value)
{
	$this->p_debit_original = $value;
}

public function get_debit_is_dirty()
{
	return $this->p_debit_is_dirty;
}


public function get_credit()
{
	return $this->p_credit;
}

public function get_credit_original()
{
	return $this->p_credit_original;
}

public function set_credit($value)
{
	if ($this->p_credit === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_credit_is_dirty = true;
	$this->p_credit = $value;
}

public function set_credit_original($value)
{
	$this->p_credit_original = $value;
}

public function get_credit_is_dirty()
{
	return $this->p_credit_is_dirty;
}


public function get_id_account()
{
	return $this->p_id_account;
}

public function get_id_account_original()
{
	return $this->p_id_account_original;
}

public function set_id_account($value)
{
	if ($this->p_id_account === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_account_is_dirty = true;
	$this->p_id_account = $value;
}

public function set_id_account_original($value)
{
	$this->p_id_account_original = $value;
}

public function get_id_account_is_dirty()
{
	return $this->p_id_account_is_dirty;
}


public function get_postingtype()
{
	return $this->p_postingtype;
}

public function get_postingtype_original()
{
	return $this->p_postingtype_original;
}

public function set_postingtype($value)
{
	if ($this->p_postingtype === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_postingtype_is_dirty = true;
	$this->p_postingtype = $value;
}

public function set_postingtype_original($value)
{
	$this->p_postingtype_original = $value;
}

public function get_postingtype_is_dirty()
{
	return $this->p_postingtype_is_dirty;
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


public function reset_dirty($reset_values = false)
{
	$this->p_id_postingheader_is_dirty = false;
	$this->p_debit_is_dirty = false;
	$this->p_credit_is_dirty = false;
	$this->p_id_account_is_dirty = false;
	$this->p_postingtype_is_dirty = false;
	$this->p_id_article_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_postingheader = $this->p_id_postingheader_original;
		$this->p_debit = $this->p_debit_original;
		$this->p_credit = $this->p_credit_original;
		$this->p_id_account = $this->p_id_account_original;
		$this->p_postingtype = $this->p_postingtype_original;
		$this->p_id_article = $this->p_id_article_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => &$val)
		{
		switch ($key)
			{
				case "postingline.id":
					$this->id = $val;
					$this->id_original = $val;
					break;
				case "postingline.id_postingheader":
					$this->id_postingheader = $val;
					$this->id_postingheader_original = $val;
					break;
				case "postingline.debit":
					$this->debit = $val;
					$this->debit_original = $val;
					break;
				case "postingline.credit":
					$this->credit = $val;
					$this->credit_original = $val;
					break;
				case "postingline.id_account":
					$this->id_account = $val;
					$this->id_account_original = $val;
					break;
				case "postingline.postingtype":
					$this->postingtype = $val;
					$this->postingtype_original = $val;
					break;
				case "postingline.id_article":
					$this->id_article = $val;
					$this->id_article_original = $val;
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
		$postingline = cls_table_factory::create_instance('postingline');
		$row = $db_manager->fetch_row($result);
		$postingline->fill($row);
		return $postingline;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_postingline.php');
		return cls_save_postingline::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_postingline.php');
		return cls_save_postingline::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}
}
?>
