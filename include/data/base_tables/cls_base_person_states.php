<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_person_states extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_person_states_group = null;
private $p_id_person_states_group_original = null;
private $p_name = null;
private $p_name_original = null;
private $p_id_article_price_group = null;
private $p_id_article_price_group_original = null;
private $p_id_contract_template = null;
private $p_id_contract_template_original = null;

private $p_id_person_states_group_is_dirty = false;
private $p_name_is_dirty = false;
private $p_id_article_price_group_is_dirty = false;
private $p_id_contract_template_is_dirty = false;

public function get_table_name()
{
	return 'person_states';
}

public function get_table_fields()
{
	return array('id','id_person_states_group','name','id_article_price_group','id_contract_template');
}

public function get_table_select($delimiter = "'")
{
	return 'select id as ' . $delimiter . 'person_states.id' . $delimiter . ',id_person_states_group as ' . $delimiter . 'person_states.id_person_states_group' . $delimiter . ',name as ' . $delimiter . 'person_states.name' . $delimiter . ',id_article_price_group as ' . $delimiter . 'person_states.id_article_price_group' . $delimiter . ',id_contract_template as ' . $delimiter . 'person_states.id_contract_template' . $delimiter . ' from person_states';
}


public function get_id_person_states_group()
{
	return $this->p_id_person_states_group;
}

public function get_id_person_states_group_original()
{
	return $this->p_id_person_states_group_original;
}

public function set_id_person_states_group($value)
{
	if ($this->p_id_person_states_group === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_states_group_is_dirty = true;
	$this->p_id_person_states_group = $value;
}

public function set_id_person_states_group_original($value)
{
	$this->p_id_person_states_group_original = $value;
}

public function get_id_person_states_group_is_dirty()
{
	return $this->p_id_person_states_group_is_dirty;
}


public function get_name()
{
	return $this->p_name;
}

public function get_name_original()
{
	return $this->p_name_original;
}

public function set_name($value)
{
	if ($this->p_name === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_name_is_dirty = true;
	$this->p_name = $value;
}

public function set_name_original($value)
{
	$this->p_name_original = $value;
}

public function get_name_is_dirty()
{
	return $this->p_name_is_dirty;
}


public function get_id_article_price_group()
{
	return $this->p_id_article_price_group;
}

public function get_id_article_price_group_original()
{
	return $this->p_id_article_price_group_original;
}

public function set_id_article_price_group($value)
{
	if ($this->p_id_article_price_group === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_article_price_group_is_dirty = true;
	$this->p_id_article_price_group = $value;
}

public function set_id_article_price_group_original($value)
{
	$this->p_id_article_price_group_original = $value;
}

public function get_id_article_price_group_is_dirty()
{
	return $this->p_id_article_price_group_is_dirty;
}


public function get_id_contract_template()
{
	return $this->p_id_contract_template;
}

public function get_id_contract_template_original()
{
	return $this->p_id_contract_template_original;
}

public function set_id_contract_template($value)
{
	if ($this->p_id_contract_template === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_contract_template_is_dirty = true;
	$this->p_id_contract_template = $value;
}

public function set_id_contract_template_original($value)
{
	$this->p_id_contract_template_original = $value;
}

public function get_id_contract_template_is_dirty()
{
	return $this->p_id_contract_template_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_id_person_states_group_is_dirty = false;
	$this->p_name_is_dirty = false;
	$this->p_id_article_price_group_is_dirty = false;
	$this->p_id_contract_template_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_person_states_group = $this->p_id_person_states_group_original;
		$this->p_name = $this->p_name_original;
		$this->p_id_article_price_group = $this->p_id_article_price_group_original;
		$this->p_id_contract_template = $this->p_id_contract_template_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => &$val)
		{
		switch ($key)
			{
				case "person_states.id":
					$this->id = $val;
					$this->id_original = $val;
					break;
				case "person_states.id_person_states_group":
					$this->id_person_states_group = $val;
					$this->id_person_states_group_original = $val;
					break;
				case "person_states.name":
					$this->name = $val;
					$this->name_original = $val;
					break;
				case "person_states.id_article_price_group":
					$this->id_article_price_group = $val;
					$this->id_article_price_group_original = $val;
					break;
				case "person_states.id_contract_template":
					$this->id_contract_template = $val;
					$this->id_contract_template_original = $val;
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
		$person_states = cls_table_factory::create_instance('person_states');
		$row = $db_manager->fetch_row($result);
		$person_states->fill($row);
		return $person_states;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_person_states.php');
		return cls_save_person_states::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_person_states.php');
		return cls_save_person_states::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}
}
?>
