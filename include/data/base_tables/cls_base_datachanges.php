<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_datachanges extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_data = null;
private $p_id_data_original = null;
private $p_command = null;
private $p_command_original = null;
private $p_data = null;
private $p_data_original = null;
private $p_modidate = null;
private $p_modidate_original = null;
private $p_id_user = null;
private $p_id_user_original = null;

private $p_id_data_is_dirty = false;
private $p_command_is_dirty = false;
private $p_data_is_dirty = false;
private $p_modidate_is_dirty = false;
private $p_id_user_is_dirty = false;

public function get_table_name()
{
	return 'datachanges';
}

public function get_table_fields()
{
	return array('id','id_data','command','data','modidate','id_user');
}

public function get_table_select($delimiter = "'")
{
	return 'select id as ' . $delimiter . 'datachanges.id' . $delimiter . ',id_data as ' . $delimiter . 'datachanges.id_data' . $delimiter . ',command as ' . $delimiter . 'datachanges.command' . $delimiter . ',data as ' . $delimiter . 'datachanges.data' . $delimiter . ',modidate as ' . $delimiter . 'datachanges.modidate' . $delimiter . ',id_user as ' . $delimiter . 'datachanges.id_user' . $delimiter . ' from datachanges';
}


public function get_id_data()
{
	return $this->p_id_data;
}

public function get_id_data_original()
{
	return $this->p_id_data_original;
}

public function set_id_data($value)
{
	if ($this->p_id_data === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_data_is_dirty = true;
	$this->p_id_data = $value;
}

public function set_id_data_original($value)
{
	$this->p_id_data_original = $value;
}

public function get_id_data_is_dirty()
{
	return $this->p_id_data_is_dirty;
}


public function get_command()
{
	return $this->p_command;
}

public function get_command_original()
{
	return $this->p_command_original;
}

public function set_command($value)
{
	if ($this->p_command === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_command_is_dirty = true;
	$this->p_command = $value;
}

public function set_command_original($value)
{
	$this->p_command_original = $value;
}

public function get_command_is_dirty()
{
	return $this->p_command_is_dirty;
}


public function get_data()
{
	return $this->p_data;
}

public function get_data_original()
{
	return $this->p_data_original;
}

public function set_data($value)
{
	if ($this->p_data === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_data_is_dirty = true;
	$this->p_data = $value;
}

public function set_data_original($value)
{
	$this->p_data_original = $value;
}

public function get_data_is_dirty()
{
	return $this->p_data_is_dirty;
}


public function get_modidate()
{
	return $this->p_modidate;
}

public function get_modidate_original()
{
	return $this->p_modidate_original;
}

public function set_modidate($value)
{
	if ($this->p_modidate === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_modidate_is_dirty = true;
	$this->p_modidate = $value;
}

public function set_modidate_original($value)
{
	$this->p_modidate_original = $value;
}

public function get_modidate_is_dirty()
{
	return $this->p_modidate_is_dirty;
}


public function get_id_user()
{
	return $this->p_id_user;
}

public function get_id_user_original()
{
	return $this->p_id_user_original;
}

public function set_id_user($value)
{
	if ($this->p_id_user === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_user_is_dirty = true;
	$this->p_id_user = $value;
}

public function set_id_user_original($value)
{
	$this->p_id_user_original = $value;
}

public function get_id_user_is_dirty()
{
	return $this->p_id_user_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_id_data_is_dirty = false;
	$this->p_command_is_dirty = false;
	$this->p_data_is_dirty = false;
	$this->p_modidate_is_dirty = false;
	$this->p_id_user_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_data = $this->p_id_data_original;
		$this->p_command = $this->p_command_original;
		$this->p_data = $this->p_data_original;
		$this->p_modidate = $this->p_modidate_original;
		$this->p_id_user = $this->p_id_user_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => &$val)
		{
		switch ($key)
			{
				case "datachanges.id":
					$this->id = $val;
					$this->id_original = $val;
					break;
				case "datachanges.id_data":
					$this->id_data = $val;
					$this->id_data_original = $val;
					break;
				case "datachanges.command":
					$this->command = $val;
					$this->command_original = $val;
					break;
				case "datachanges.data":
					$this->data = $val;
					$this->data_original = $val;
					break;
				case "datachanges.modidate":
					$this->modidate = $val;
					$this->modidate_original = $val;
					break;
				case "datachanges.id_user":
					$this->id_user = $val;
					$this->id_user_original = $val;
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
		$datachanges = cls_table_factory::create_instance('datachanges');
		$row = $db_manager->fetch_row($result);
		$datachanges->fill($row);
		return $datachanges;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_datachanges.php');
		return cls_save_datachanges::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_datachanges.php');
		return cls_save_datachanges::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}
}
?>
