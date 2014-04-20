<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_drupal_users extends cls_datatable_base
{
private static $p_cmmon;
private $p_data = null;
private $p_data_original = null;
private $p_init = null;
private $p_init_original = null;
private $p_picture = null;
private $p_picture_original = null;
private $p_language = null;
private $p_language_original = null;
private $p_timezone = null;
private $p_timezone_original = null;
private $p_status = null;
private $p_status_original = null;
private $p_login = null;
private $p_login_original = null;
private $p_access = null;
private $p_access_original = null;
private $p_created = null;
private $p_created_original = null;
private $p_signature_format = null;
private $p_signature_format_original = null;
private $p_signature = null;
private $p_signature_original = null;
private $p_theme = null;
private $p_theme_original = null;
private $p_mail = null;
private $p_mail_original = null;
private $p_pass = null;
private $p_pass_original = null;
private $p_name = null;
private $p_name_original = null;
private $p_uid = null;
private $p_uid_original = null;

private $p_data_is_dirty = false;
private $p_init_is_dirty = false;
private $p_picture_is_dirty = false;
private $p_language_is_dirty = false;
private $p_timezone_is_dirty = false;
private $p_status_is_dirty = false;
private $p_login_is_dirty = false;
private $p_access_is_dirty = false;
private $p_created_is_dirty = false;
private $p_signature_format_is_dirty = false;
private $p_signature_is_dirty = false;
private $p_theme_is_dirty = false;
private $p_mail_is_dirty = false;
private $p_pass_is_dirty = false;
private $p_name_is_dirty = false;
private $p_uid_is_dirty = false;

public function _get_table_name()
{
	return 'drupal_users';
}

public function get_table_fields()
{
	return array('id','data','init','picture','language','timezone','status','login','access','created','signature_format','signature','theme','mail','pass','name','uid');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'drupal_users.id' . $delimiter . ',data as ' . $delimiter . 'drupal_users.data' . $delimiter . ',init as ' . $delimiter . 'drupal_users.init' . $delimiter . ',picture as ' . $delimiter . 'drupal_users.picture' . $delimiter . ',language as ' . $delimiter . 'drupal_users.language' . $delimiter . ',timezone as ' . $delimiter . 'drupal_users.timezone' . $delimiter . ',status as ' . $delimiter . 'drupal_users.status' . $delimiter . ',login as ' . $delimiter . 'drupal_users.login' . $delimiter . ',access as ' . $delimiter . 'drupal_users.access' . $delimiter . ',created as ' . $delimiter . 'drupal_users.created' . $delimiter . ',signature_format as ' . $delimiter . 'drupal_users.signature_format' . $delimiter . ',signature as ' . $delimiter . 'drupal_users.signature' . $delimiter . ',theme as ' . $delimiter . 'drupal_users.theme' . $delimiter . ',mail as ' . $delimiter . 'drupal_users.mail' . $delimiter . ',pass as ' . $delimiter . 'drupal_users.pass' . $delimiter . ',name as ' . $delimiter . 'drupal_users.name' . $delimiter . ',uid as ' . $delimiter . 'drupal_users.uid' . $delimiter . ' from drupal_users';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
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


public function get_init()
{
	return $this->p_init;
}

public function get_init_original()
{
	return $this->p_init_original;
}

public function set_init($value)
{
	if ($this->p_init === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_init_is_dirty = true;
	$this->p_init = $value;
}

public function set_init_original($value)
{
	$this->p_init_original = $value;
}

public function get_init_is_dirty()
{
	return $this->p_init_is_dirty;
}


public function get_picture()
{
	return $this->p_picture;
}

public function get_picture_original()
{
	return $this->p_picture_original;
}

public function set_picture($value)
{
	if ($this->p_picture === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_picture_is_dirty = true;
	$this->p_picture = $value;
}

public function set_picture_original($value)
{
	$this->p_picture_original = $value;
}

public function get_picture_is_dirty()
{
	return $this->p_picture_is_dirty;
}


public function get_language()
{
	return $this->p_language;
}

public function get_language_original()
{
	return $this->p_language_original;
}

public function set_language($value)
{
	if ($this->p_language === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_language_is_dirty = true;
	$this->p_language = $value;
}

public function set_language_original($value)
{
	$this->p_language_original = $value;
}

public function get_language_is_dirty()
{
	return $this->p_language_is_dirty;
}


public function get_timezone()
{
	return $this->p_timezone;
}

public function get_timezone_original()
{
	return $this->p_timezone_original;
}

public function set_timezone($value)
{
	if ($this->p_timezone === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_timezone_is_dirty = true;
	$this->p_timezone = $value;
}

public function set_timezone_original($value)
{
	$this->p_timezone_original = $value;
}

public function get_timezone_is_dirty()
{
	return $this->p_timezone_is_dirty;
}


public function get_status()
{
	return $this->p_status;
}

public function get_status_original()
{
	return $this->p_status_original;
}

public function set_status($value)
{
	if ($this->p_status === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_status_is_dirty = true;
	$this->p_status = $value;
}

public function set_status_original($value)
{
	$this->p_status_original = $value;
}

public function get_status_is_dirty()
{
	return $this->p_status_is_dirty;
}


public function get_login()
{
	return $this->p_login;
}

public function get_login_original()
{
	return $this->p_login_original;
}

public function set_login($value)
{
	if ($this->p_login === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_login_is_dirty = true;
	$this->p_login = $value;
}

public function set_login_original($value)
{
	$this->p_login_original = $value;
}

public function get_login_is_dirty()
{
	return $this->p_login_is_dirty;
}


public function get_access()
{
	return $this->p_access;
}

public function get_access_original()
{
	return $this->p_access_original;
}

public function set_access($value)
{
	if ($this->p_access === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_access_is_dirty = true;
	$this->p_access = $value;
}

public function set_access_original($value)
{
	$this->p_access_original = $value;
}

public function get_access_is_dirty()
{
	return $this->p_access_is_dirty;
}


public function get_created()
{
	return $this->p_created;
}

public function get_created_original()
{
	return $this->p_created_original;
}

public function set_created($value)
{
	if ($this->p_created === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_created_is_dirty = true;
	$this->p_created = $value;
}

public function set_created_original($value)
{
	$this->p_created_original = $value;
}

public function get_created_is_dirty()
{
	return $this->p_created_is_dirty;
}


public function get_signature_format()
{
	return $this->p_signature_format;
}

public function get_signature_format_original()
{
	return $this->p_signature_format_original;
}

public function set_signature_format($value)
{
	if ($this->p_signature_format === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_signature_format_is_dirty = true;
	$this->p_signature_format = $value;
}

public function set_signature_format_original($value)
{
	$this->p_signature_format_original = $value;
}

public function get_signature_format_is_dirty()
{
	return $this->p_signature_format_is_dirty;
}


public function get_signature()
{
	return $this->p_signature;
}

public function get_signature_original()
{
	return $this->p_signature_original;
}

public function set_signature($value)
{
	if ($this->p_signature === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_signature_is_dirty = true;
	$this->p_signature = $value;
}

public function set_signature_original($value)
{
	$this->p_signature_original = $value;
}

public function get_signature_is_dirty()
{
	return $this->p_signature_is_dirty;
}


public function get_theme()
{
	return $this->p_theme;
}

public function get_theme_original()
{
	return $this->p_theme_original;
}

public function set_theme($value)
{
	if ($this->p_theme === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_theme_is_dirty = true;
	$this->p_theme = $value;
}

public function set_theme_original($value)
{
	$this->p_theme_original = $value;
}

public function get_theme_is_dirty()
{
	return $this->p_theme_is_dirty;
}


public function get_mail()
{
	return $this->p_mail;
}

public function get_mail_original()
{
	return $this->p_mail_original;
}

public function set_mail($value)
{
	if ($this->p_mail === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_mail_is_dirty = true;
	$this->p_mail = $value;
}

public function set_mail_original($value)
{
	$this->p_mail_original = $value;
}

public function get_mail_is_dirty()
{
	return $this->p_mail_is_dirty;
}


public function get_pass()
{
	return $this->p_pass;
}

public function get_pass_original()
{
	return $this->p_pass_original;
}

public function set_pass($value)
{
	if ($this->p_pass === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_pass_is_dirty = true;
	$this->p_pass = $value;
}

public function set_pass_original($value)
{
	$this->p_pass_original = $value;
}

public function get_pass_is_dirty()
{
	return $this->p_pass_is_dirty;
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


public function get_uid()
{
	return $this->p_uid;
}

public function get_uid_original()
{
	return $this->p_uid_original;
}

public function set_uid($value)
{
	if ($this->p_uid === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_uid_is_dirty = true;
	$this->p_uid = $value;
}

public function set_uid_original($value)
{
	$this->p_uid_original = $value;
}

public function get_uid_is_dirty()
{
	return $this->p_uid_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_data_is_dirty = false;
	$this->p_init_is_dirty = false;
	$this->p_picture_is_dirty = false;
	$this->p_language_is_dirty = false;
	$this->p_timezone_is_dirty = false;
	$this->p_status_is_dirty = false;
	$this->p_login_is_dirty = false;
	$this->p_access_is_dirty = false;
	$this->p_created_is_dirty = false;
	$this->p_signature_format_is_dirty = false;
	$this->p_signature_is_dirty = false;
	$this->p_theme_is_dirty = false;
	$this->p_mail_is_dirty = false;
	$this->p_pass_is_dirty = false;
	$this->p_name_is_dirty = false;
	$this->p_uid_is_dirty = false;
	if ($reset_values)
	{
		$this->p_data = $this->p_data_original;
		$this->p_init = $this->p_init_original;
		$this->p_picture = $this->p_picture_original;
		$this->p_language = $this->p_language_original;
		$this->p_timezone = $this->p_timezone_original;
		$this->p_status = $this->p_status_original;
		$this->p_login = $this->p_login_original;
		$this->p_access = $this->p_access_original;
		$this->p_created = $this->p_created_original;
		$this->p_signature_format = $this->p_signature_format_original;
		$this->p_signature = $this->p_signature_original;
		$this->p_theme = $this->p_theme_original;
		$this->p_mail = $this->p_mail_original;
		$this->p_pass = $this->p_pass_original;
		$this->p_name = $this->p_name_original;
		$this->p_uid = $this->p_uid_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "drupal_users.id":
					$this->set_id($val);
					break;
				case "drupal_users.data":
					$this->set_data($val);
					$this->set_data_original($val);
					break;
				case "drupal_users.init":
					$this->set_init($val);
					$this->set_init_original($val);
					break;
				case "drupal_users.picture":
					$this->set_picture($val);
					$this->set_picture_original($val);
					break;
				case "drupal_users.language":
					$this->set_language($val);
					$this->set_language_original($val);
					break;
				case "drupal_users.timezone":
					$this->set_timezone($val);
					$this->set_timezone_original($val);
					break;
				case "drupal_users.status":
					$this->set_status($val);
					$this->set_status_original($val);
					break;
				case "drupal_users.login":
					$this->set_login($val);
					$this->set_login_original($val);
					break;
				case "drupal_users.access":
					$this->set_access($val);
					$this->set_access_original($val);
					break;
				case "drupal_users.created":
					$this->set_created($val);
					$this->set_created_original($val);
					break;
				case "drupal_users.signature_format":
					$this->set_signature_format($val);
					$this->set_signature_format_original($val);
					break;
				case "drupal_users.signature":
					$this->set_signature($val);
					$this->set_signature_original($val);
					break;
				case "drupal_users.theme":
					$this->set_theme($val);
					$this->set_theme_original($val);
					break;
				case "drupal_users.mail":
					$this->set_mail($val);
					$this->set_mail_original($val);
					break;
				case "drupal_users.pass":
					$this->set_pass($val);
					$this->set_pass_original($val);
					break;
				case "drupal_users.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "drupal_users.uid":
					$this->set_uid($val);
					$this->set_uid_original($val);
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
		require_once('include/data/table_factory/cls_table_factory.php');
		$drupal_users = cls_table_factory::create_instance('drupal_users');
		$row = $db_manager->fetch_row($result);
		$drupal_users->fill($row);
		return $drupal_users;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_users.php');
		return cls_save_drupal_users::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_users.php');
		return cls_save_drupal_users::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_drupal_userss($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('drupal_users',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('drupal_users',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$drupal_users = cls_table_factory::create_instance('drupal_users');
				$drupal_users->fill($row);
				$data[] = $drupal_users;
			}
		return $data;
	}

public function get_table_test_data($drupal_userss,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('table_test_data',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$table_test_data = cls_table_factory::create_instance('table_test_data');
				$table_test_data->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $table_test_data;
				}
				else
				{
					$data[] = $table_test_data;
				}
			}
		return $data;
	}

public function get_multi_table_test_data($drupal_userss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$drupal_userss,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$table_test_data = cls_table_factory::create_instance('table_test_data');
				$table_test_data->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $table_test_data;
			}
		return $data;
	}

public function get_communication_reason($drupal_userss,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('communication_reason',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$communication_reason = cls_table_factory::create_instance('communication_reason');
				$communication_reason->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $communication_reason;
				}
				else
				{
					$data[] = $communication_reason;
				}
			}
		return $data;
	}

public function get_multi_communication_reason($drupal_userss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$drupal_userss,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$communication_reason = cls_table_factory::create_instance('communication_reason');
				$communication_reason->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $communication_reason;
			}
		return $data;
	}

public function get_data_change($drupal_userss,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_change',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_change = cls_table_factory::create_instance('data_change');
				$data_change->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_change;
				}
				else
				{
					$data[] = $data_change;
				}
			}
		return $data;
	}

public function get_multi_data_change($drupal_userss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$drupal_userss,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_change = cls_table_factory::create_instance('data_change');
				$data_change->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_change;
			}
		return $data;
	}

public function get_data_help($drupal_userss,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_help',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_help = cls_table_factory::create_instance('data_help');
				$data_help->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_help;
				}
				else
				{
					$data[] = $data_help;
				}
			}
		return $data;
	}

public function get_multi_data_help($drupal_userss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$drupal_userss,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_help = cls_table_factory::create_instance('data_help');
				$data_help->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_help;
			}
		return $data;
	}

public function get_data_location($drupal_userss,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_location',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_location = cls_table_factory::create_instance('data_location');
				$data_location->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_location;
				}
				else
				{
					$data[] = $data_location;
				}
			}
		return $data;
	}

public function get_multi_data_location($drupal_userss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$drupal_userss,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_location = cls_table_factory::create_instance('data_location');
				$data_location->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_location;
			}
		return $data;
	}

public function get_data_posting($drupal_userss,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_posting',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_posting = cls_table_factory::create_instance('data_posting');
				$data_posting->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_posting;
				}
				else
				{
					$data[] = $data_posting;
				}
			}
		return $data;
	}

public function get_multi_data_posting($drupal_userss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$drupal_userss,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_posting = cls_table_factory::create_instance('data_posting');
				$data_posting->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_posting;
			}
		return $data;
	}

public function get_offer_event($drupal_userss,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('offer_event',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_event = cls_table_factory::create_instance('offer_event');
				$offer_event->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $offer_event;
				}
				else
				{
					$data[] = $offer_event;
				}
			}
		return $data;
	}

public function get_multi_offer_event($drupal_userss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$drupal_userss,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_event = cls_table_factory::create_instance('offer_event');
				$offer_event->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $offer_event;
			}
		return $data;
	}

public function get_supplier_data($drupal_userss,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('supplier_data',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$supplier_data = cls_table_factory::create_instance('supplier_data');
				$supplier_data->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $supplier_data;
				}
				else
				{
					$data[] = $supplier_data;
				}
			}
		return $data;
	}

public function get_multi_supplier_data($drupal_userss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$drupal_userss,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$supplier_data = cls_table_factory::create_instance('supplier_data');
				$supplier_data->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $supplier_data;
			}
		return $data;
	}

public function get_address($drupal_userss,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('address',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$address = cls_table_factory::create_instance('address');
				$address->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $address;
				}
				else
				{
					$data[] = $address;
				}
			}
		return $data;
	}

public function get_multi_address($drupal_userss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$drupal_userss,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$address = cls_table_factory::create_instance('address');
				$address->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $address;
			}
		return $data;
	}

public function get_data_property($drupal_userss,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_property',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property = cls_table_factory::create_instance('data_property');
				$data_property->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_property;
				}
				else
				{
					$data[] = $data_property;
				}
			}
		return $data;
	}

public function get_multi_data_property($drupal_userss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_userss,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property = cls_table_factory::create_instance('data_property');
				$data_property->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_property;
			}
		return $data;
	}

public function get_data_translation($drupal_userss,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_translation',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_translation = cls_table_factory::create_instance('data_translation');
				$data_translation->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_translation;
				}
				else
				{
					$data[] = $data_translation;
				}
			}
		return $data;
	}

public function get_multi_data_translation($drupal_userss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$drupal_userss,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_translation = cls_table_factory::create_instance('data_translation');
				$data_translation->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_translation;
			}
		return $data;
	}

public function get_dms($drupal_userss,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('dms',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$dms = cls_table_factory::create_instance('dms');
				$dms->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $dms;
				}
				else
				{
					$data[] = $dms;
				}
			}
		return $data;
	}

public function get_multi_dms($drupal_userss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$drupal_userss,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$dms = cls_table_factory::create_instance('dms');
				$dms->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $dms;
			}
		return $data;
	}

public function get_data_relation_id_data1($drupal_userss,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_relation',$this->get_id(),'id_data1');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_relation = cls_table_factory::create_instance('data_relation');
				$data_relation->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_relation;
				}
				else
				{
					$data[] = $data_relation;
				}
			}
		return $data;
	}

public function get_multi_data_relation_id_data1($drupal_userss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_userss,'id_data1');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_relation = cls_table_factory::create_instance('data_relation');
				$data_relation->fill($row);
				if (!array_key_exists($data[$row['id_data1']]))
				{
					$data[$row['id_data1']] = array();
				}
				$data[$row['id_data1']][] = $data_relation;
			}
		return $data;
	}

public function get_data_relation_id_data2($drupal_userss,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_relation',$this->get_id(),'id_data2');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_relation = cls_table_factory::create_instance('data_relation');
				$data_relation->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_relation;
				}
				else
				{
					$data[] = $data_relation;
				}
			}
		return $data;
	}

public function get_multi_data_relation_id_data2($drupal_userss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_userss,'id_data2');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_relation = cls_table_factory::create_instance('data_relation');
				$data_relation->fill($row);
				if (!array_key_exists($data[$row['id_data2']]))
				{
					$data[$row['id_data2']] = array();
				}
				$data[$row['id_data2']][] = $data_relation;
			}
		return $data;
	}

public function get_data_property_id_link_data($drupal_userss,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_property',$this->get_id(),'id_link_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property = cls_table_factory::create_instance('data_property');
				$data_property->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_property;
				}
				else
				{
					$data[] = $data_property;
				}
			}
		return $data;
	}

public function get_multi_data_property_id_link_data($drupal_userss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_userss,'id_link_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property = cls_table_factory::create_instance('data_property');
				$data_property->fill($row);
				if (!array_key_exists($data[$row['id_link_data']]))
				{
					$data[$row['id_link_data']] = array();
				}
				$data[$row['id_link_data']][] = $data_property;
			}
		return $data;
	}


}
?>
