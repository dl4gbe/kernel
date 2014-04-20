<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_person_states_access_group extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_access_group = null;
private $p_id_access_group_original = null;
private $p_id_person_states = null;
private $p_id_person_states_original = null;

private $p_id_access_group_is_dirty = false;
private $p_id_person_states_is_dirty = false;

public function get_table_name()
{
	return 'person_states_access_group';
}

public function get_table_fields()
{
	return array('id','id_access_group','id_person_states');
}

public function get_table_select($delimiter = "'")
{
	return 'select id as ' . $delimiter . 'person_states_access_group.id' . $delimiter . ',id_access_group as ' . $delimiter . 'person_states_access_group.id_access_group' . $delimiter . ',id_person_states as ' . $delimiter . 'person_states_access_group.id_person_states' . $delimiter . ' from person_states_access_group';
}


public function get_id_access_group()
{
	return $this->p_id_access_group;
}

public function get_id_access_group_original()
{
	return $this->p_id_access_group_original;
}

public function set_id_access_group($value)
{
	if ($this->p_id_access_group === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_access_group_is_dirty = true;
	$this->p_id_access_group = $value;
}

public function set_id_access_group_original($value)
{
	$this->p_id_access_group_original = $value;
}

public function get_id_access_group_is_dirty()
{
	return $this->p_id_access_group_is_dirty;
}


public function get_id_person_states()
{
	return $this->p_id_person_states;
}

public function get_id_person_states_original()
{
	return $this->p_id_person_states_original;
}

public function set_id_person_states($value)
{
	if ($this->p_id_person_states === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_states_is_dirty = true;
	$this->p_id_person_states = $value;
}

public function set_id_person_states_original($value)
{
	$this->p_id_person_states_original = $value;
}

public function get_id_person_states_is_dirty()
{
	return $this->p_id_person_states_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_id_access_group_is_dirty = false;
	$this->p_id_person_states_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_access_group = $this->p_id_access_group_original;
		$this->p_id_person_states = $this->p_id_person_states_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => &$val)
		{
		switch ($key)
			{
				case "person_states_access_group.id":
					$this->id = $val;
					$this->id_original = $val;
					break;
				case "person_states_access_group.id_access_group":
					$this->id_access_group = $val;
					$this->id_access_group_original = $val;
					break;
				case "person_states_access_group.id_person_states":
					$this->id_person_states = $val;
					$this->id_person_states_original = $val;
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
		$person_states_access_group = cls_table_factory::create_instance('person_states_access_group');
		$row = $db_manager->fetch_row($result);
		$person_states_access_group->fill($row);
		return $person_states_access_group;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_person_states_access_group.php');
		return cls_save_person_states_access_group::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_person_states_access_group.php');
		return cls_save_person_states_access_group::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}
}
?>
