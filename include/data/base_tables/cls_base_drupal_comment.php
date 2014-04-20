<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_drupal_comment extends cls_datatable_base
{
private static $p_cmmon;
private $p_language = null;
private $p_language_original = null;
private $p_homepage = null;
private $p_homepage_original = null;
private $p_mail = null;
private $p_mail_original = null;
private $p_name = null;
private $p_name_original = null;
private $p_thread = null;
private $p_thread_original = null;
private $p_status = null;
private $p_status_original = null;
private $p_changed = null;
private $p_changed_original = null;
private $p_created = null;
private $p_created_original = null;
private $p_hostname = null;
private $p_hostname_original = null;
private $p_subject = null;
private $p_subject_original = null;
private $p_uid = null;
private $p_uid_original = null;
private $p_nid = null;
private $p_nid_original = null;
private $p_pid = null;
private $p_pid_original = null;
private $p_cid = null;
private $p_cid_original = null;

private $p_language_is_dirty = false;
private $p_homepage_is_dirty = false;
private $p_mail_is_dirty = false;
private $p_name_is_dirty = false;
private $p_thread_is_dirty = false;
private $p_status_is_dirty = false;
private $p_changed_is_dirty = false;
private $p_created_is_dirty = false;
private $p_hostname_is_dirty = false;
private $p_subject_is_dirty = false;
private $p_uid_is_dirty = false;
private $p_nid_is_dirty = false;
private $p_pid_is_dirty = false;
private $p_cid_is_dirty = false;

public function _get_table_name()
{
	return 'drupal_comment';
}

public function get_table_fields()
{
	return array('id','language','homepage','mail','name','thread','status','changed','created','hostname','subject','uid','nid','pid','cid');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'drupal_comment.id' . $delimiter . ',language as ' . $delimiter . 'drupal_comment.language' . $delimiter . ',homepage as ' . $delimiter . 'drupal_comment.homepage' . $delimiter . ',mail as ' . $delimiter . 'drupal_comment.mail' . $delimiter . ',name as ' . $delimiter . 'drupal_comment.name' . $delimiter . ',thread as ' . $delimiter . 'drupal_comment.thread' . $delimiter . ',status as ' . $delimiter . 'drupal_comment.status' . $delimiter . ',changed as ' . $delimiter . 'drupal_comment.changed' . $delimiter . ',created as ' . $delimiter . 'drupal_comment.created' . $delimiter . ',hostname as ' . $delimiter . 'drupal_comment.hostname' . $delimiter . ',subject as ' . $delimiter . 'drupal_comment.subject' . $delimiter . ',uid as ' . $delimiter . 'drupal_comment.uid' . $delimiter . ',nid as ' . $delimiter . 'drupal_comment.nid' . $delimiter . ',pid as ' . $delimiter . 'drupal_comment.pid' . $delimiter . ',cid as ' . $delimiter . 'drupal_comment.cid' . $delimiter . ' from drupal_comment';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
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


public function get_homepage()
{
	return $this->p_homepage;
}

public function get_homepage_original()
{
	return $this->p_homepage_original;
}

public function set_homepage($value)
{
	if ($this->p_homepage === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_homepage_is_dirty = true;
	$this->p_homepage = $value;
}

public function set_homepage_original($value)
{
	$this->p_homepage_original = $value;
}

public function get_homepage_is_dirty()
{
	return $this->p_homepage_is_dirty;
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


public function get_thread()
{
	return $this->p_thread;
}

public function get_thread_original()
{
	return $this->p_thread_original;
}

public function set_thread($value)
{
	if ($this->p_thread === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_thread_is_dirty = true;
	$this->p_thread = $value;
}

public function set_thread_original($value)
{
	$this->p_thread_original = $value;
}

public function get_thread_is_dirty()
{
	return $this->p_thread_is_dirty;
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


public function get_changed()
{
	return $this->p_changed;
}

public function get_changed_original()
{
	return $this->p_changed_original;
}

public function set_changed($value)
{
	if ($this->p_changed === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_changed_is_dirty = true;
	$this->p_changed = $value;
}

public function set_changed_original($value)
{
	$this->p_changed_original = $value;
}

public function get_changed_is_dirty()
{
	return $this->p_changed_is_dirty;
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


public function get_hostname()
{
	return $this->p_hostname;
}

public function get_hostname_original()
{
	return $this->p_hostname_original;
}

public function set_hostname($value)
{
	if ($this->p_hostname === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_hostname_is_dirty = true;
	$this->p_hostname = $value;
}

public function set_hostname_original($value)
{
	$this->p_hostname_original = $value;
}

public function get_hostname_is_dirty()
{
	return $this->p_hostname_is_dirty;
}


public function get_subject()
{
	return $this->p_subject;
}

public function get_subject_original()
{
	return $this->p_subject_original;
}

public function set_subject($value)
{
	if ($this->p_subject === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_subject_is_dirty = true;
	$this->p_subject = $value;
}

public function set_subject_original($value)
{
	$this->p_subject_original = $value;
}

public function get_subject_is_dirty()
{
	return $this->p_subject_is_dirty;
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


public function get_nid()
{
	return $this->p_nid;
}

public function get_nid_original()
{
	return $this->p_nid_original;
}

public function set_nid($value)
{
	if ($this->p_nid === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_nid_is_dirty = true;
	$this->p_nid = $value;
}

public function set_nid_original($value)
{
	$this->p_nid_original = $value;
}

public function get_nid_is_dirty()
{
	return $this->p_nid_is_dirty;
}


public function get_pid()
{
	return $this->p_pid;
}

public function get_pid_original()
{
	return $this->p_pid_original;
}

public function set_pid($value)
{
	if ($this->p_pid === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_pid_is_dirty = true;
	$this->p_pid = $value;
}

public function set_pid_original($value)
{
	$this->p_pid_original = $value;
}

public function get_pid_is_dirty()
{
	return $this->p_pid_is_dirty;
}


public function get_cid()
{
	return $this->p_cid;
}

public function get_cid_original()
{
	return $this->p_cid_original;
}

public function set_cid($value)
{
	if ($this->p_cid === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_cid_is_dirty = true;
	$this->p_cid = $value;
}

public function set_cid_original($value)
{
	$this->p_cid_original = $value;
}

public function get_cid_is_dirty()
{
	return $this->p_cid_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_language_is_dirty = false;
	$this->p_homepage_is_dirty = false;
	$this->p_mail_is_dirty = false;
	$this->p_name_is_dirty = false;
	$this->p_thread_is_dirty = false;
	$this->p_status_is_dirty = false;
	$this->p_changed_is_dirty = false;
	$this->p_created_is_dirty = false;
	$this->p_hostname_is_dirty = false;
	$this->p_subject_is_dirty = false;
	$this->p_uid_is_dirty = false;
	$this->p_nid_is_dirty = false;
	$this->p_pid_is_dirty = false;
	$this->p_cid_is_dirty = false;
	if ($reset_values)
	{
		$this->p_language = $this->p_language_original;
		$this->p_homepage = $this->p_homepage_original;
		$this->p_mail = $this->p_mail_original;
		$this->p_name = $this->p_name_original;
		$this->p_thread = $this->p_thread_original;
		$this->p_status = $this->p_status_original;
		$this->p_changed = $this->p_changed_original;
		$this->p_created = $this->p_created_original;
		$this->p_hostname = $this->p_hostname_original;
		$this->p_subject = $this->p_subject_original;
		$this->p_uid = $this->p_uid_original;
		$this->p_nid = $this->p_nid_original;
		$this->p_pid = $this->p_pid_original;
		$this->p_cid = $this->p_cid_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "drupal_comment.id":
					$this->set_id($val);
					break;
				case "drupal_comment.language":
					$this->set_language($val);
					$this->set_language_original($val);
					break;
				case "drupal_comment.homepage":
					$this->set_homepage($val);
					$this->set_homepage_original($val);
					break;
				case "drupal_comment.mail":
					$this->set_mail($val);
					$this->set_mail_original($val);
					break;
				case "drupal_comment.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "drupal_comment.thread":
					$this->set_thread($val);
					$this->set_thread_original($val);
					break;
				case "drupal_comment.status":
					$this->set_status($val);
					$this->set_status_original($val);
					break;
				case "drupal_comment.changed":
					$this->set_changed($val);
					$this->set_changed_original($val);
					break;
				case "drupal_comment.created":
					$this->set_created($val);
					$this->set_created_original($val);
					break;
				case "drupal_comment.hostname":
					$this->set_hostname($val);
					$this->set_hostname_original($val);
					break;
				case "drupal_comment.subject":
					$this->set_subject($val);
					$this->set_subject_original($val);
					break;
				case "drupal_comment.uid":
					$this->set_uid($val);
					$this->set_uid_original($val);
					break;
				case "drupal_comment.nid":
					$this->set_nid($val);
					$this->set_nid_original($val);
					break;
				case "drupal_comment.pid":
					$this->set_pid($val);
					$this->set_pid_original($val);
					break;
				case "drupal_comment.cid":
					$this->set_cid($val);
					$this->set_cid_original($val);
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
		$drupal_comment = cls_table_factory::create_instance('drupal_comment');
		$row = $db_manager->fetch_row($result);
		$drupal_comment->fill($row);
		return $drupal_comment;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_comment.php');
		return cls_save_drupal_comment::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_comment.php');
		return cls_save_drupal_comment::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_drupal_comments($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('drupal_comment',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('drupal_comment',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$drupal_comment = cls_table_factory::create_instance('drupal_comment');
				$drupal_comment->fill($row);
				$data[] = $drupal_comment;
			}
		return $data;
	}

public function get_table_test_data($drupal_comments,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($drupal_comments,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$drupal_comments,'id_data');
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

public function get_communication_reason($drupal_comments,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($drupal_comments,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$drupal_comments,'id_data');
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

public function get_data_change($drupal_comments,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($drupal_comments,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$drupal_comments,'id_data');
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

public function get_data_help($drupal_comments,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($drupal_comments,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$drupal_comments,'id_data');
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

public function get_data_location($drupal_comments,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($drupal_comments,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$drupal_comments,'id_data');
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

public function get_data_posting($drupal_comments,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($drupal_comments,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$drupal_comments,'id_data');
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

public function get_offer_event($drupal_comments,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($drupal_comments,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$drupal_comments,'id_data');
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

public function get_supplier_data($drupal_comments,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($drupal_comments,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$drupal_comments,'id_data');
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

public function get_address($drupal_comments,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($drupal_comments,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$drupal_comments,'id_data');
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

public function get_data_property($drupal_comments,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($drupal_comments,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_comments,'id_data');
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

public function get_data_translation($drupal_comments,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($drupal_comments,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$drupal_comments,'id_data');
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

public function get_dms($drupal_comments,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($drupal_comments,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$drupal_comments,'id_data');
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

public function get_data_relation_id_data1($drupal_comments,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($drupal_comments,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_comments,'id_data1');
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

public function get_data_relation_id_data2($drupal_comments,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($drupal_comments,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_comments,'id_data2');
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

public function get_data_property_id_link_data($drupal_comments,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($drupal_comments,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_comments,'id_link_data');
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
