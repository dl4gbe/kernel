<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_communication_reason_type_person_states extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_communication_reason_type = null;
private $p_id_communication_reason_type_original = null;
private $p_person_states_code = null;
private $p_person_states_code_original = null;

private $p_id_communication_reason_type_is_dirty = false;
private $p_person_states_code_is_dirty = false;

public function get_table_name()
{
	return 'communication_reason_type_person_states';
}

public function get_table_fields()
{
	return array('id','id_communication_reason_type','person_states_code');
}

public function get_table_select($delimiter = "'")
{
	return 'select id as ' . $delimiter . 'communication_reason_type_person_states.id' . $delimiter . ',id_communication_reason_type as ' . $delimiter . 'communication_reason_type_person_states.id_communication_reason_type' . $delimiter . ',person_states_code as ' . $delimiter . 'communication_reason_type_person_states.person_states_code' . $delimiter . ' from communication_reason_type_person_states';
}


public function get_id_communication_reason_type()
{
	return $this->p_id_communication_reason_type;
}

public function get_id_communication_reason_type_original()
{
	return $this->p_id_communication_reason_type_original;
}

public function set_id_communication_reason_type($value)
{
	if ($this->p_id_communication_reason_type === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_communication_reason_type_is_dirty = true;
	$this->p_id_communication_reason_type = $value;
}

public function set_id_communication_reason_type_original($value)
{
	$this->p_id_communication_reason_type_original = $value;
}

public function get_id_communication_reason_type_is_dirty()
{
	return $this->p_id_communication_reason_type_is_dirty;
}


public function get_person_states_code()
{
	return $this->p_person_states_code;
}

public function get_person_states_code_original()
{
	return $this->p_person_states_code_original;
}

public function set_person_states_code($value)
{
	if ($this->p_person_states_code === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_person_states_code_is_dirty = true;
	$this->p_person_states_code = $value;
}

public function set_person_states_code_original($value)
{
	$this->p_person_states_code_original = $value;
}

public function get_person_states_code_is_dirty()
{
	return $this->p_person_states_code_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_id_communication_reason_type_is_dirty = false;
	$this->p_person_states_code_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_communication_reason_type = $this->p_id_communication_reason_type_original;
		$this->p_person_states_code = $this->p_person_states_code_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => &$val)
		{
		switch ($key)
			{
				case "communication_reason_type_person_states.id":
					$this->id = $val;
					$this->id_original = $val;
					break;
				case "communication_reason_type_person_states.id_communication_reason_type":
					$this->id_communication_reason_type = $val;
					$this->id_communication_reason_type_original = $val;
					break;
				case "communication_reason_type_person_states.person_states_code":
					$this->person_states_code = $val;
					$this->person_states_code_original = $val;
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
		$communication_reason_type_person_states = cls_table_factory::create_instance('communication_reason_type_person_states');
		$row = $db_manager->fetch_row($result);
		$communication_reason_type_person_states->fill($row);
		return $communication_reason_type_person_states;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_communication_reason_type_person_states.php');
		return cls_save_communication_reason_type_person_states::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_communication_reason_type_person_states.php');
		return cls_save_communication_reason_type_person_states::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}
}
?>
