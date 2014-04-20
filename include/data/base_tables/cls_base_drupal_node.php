<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_drupal_node extends cls_datatable_base
{
private static $p_cmmon;
private $p_translate = null;
private $p_translate_original = null;
private $p_tnid = null;
private $p_tnid_original = null;
private $p_sticky = null;
private $p_sticky_original = null;
private $p_promote = null;
private $p_promote_original = null;
private $p_comment = null;
private $p_comment_original = null;
private $p_changed = null;
private $p_changed_original = null;
private $p_created = null;
private $p_created_original = null;
private $p_status = null;
private $p_status_original = null;
private $p_uid = null;
private $p_uid_original = null;
private $p_title = null;
private $p_title_original = null;
private $p_language = null;
private $p_language_original = null;
private $p_type = null;
private $p_type_original = null;
private $p_vid = null;
private $p_vid_original = null;
private $p_nid = null;
private $p_nid_original = null;

private $p_translate_is_dirty = false;
private $p_tnid_is_dirty = false;
private $p_sticky_is_dirty = false;
private $p_promote_is_dirty = false;
private $p_comment_is_dirty = false;
private $p_changed_is_dirty = false;
private $p_created_is_dirty = false;
private $p_status_is_dirty = false;
private $p_uid_is_dirty = false;
private $p_title_is_dirty = false;
private $p_language_is_dirty = false;
private $p_type_is_dirty = false;
private $p_vid_is_dirty = false;
private $p_nid_is_dirty = false;

public function _get_table_name()
{
	return 'drupal_node';
}

public function get_table_fields()
{
	return array('id','translate','tnid','sticky','promote','comment','changed','created','status','uid','title','language','type','vid','nid');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'drupal_node.id' . $delimiter . ',translate as ' . $delimiter . 'drupal_node.translate' . $delimiter . ',tnid as ' . $delimiter . 'drupal_node.tnid' . $delimiter . ',sticky as ' . $delimiter . 'drupal_node.sticky' . $delimiter . ',promote as ' . $delimiter . 'drupal_node.promote' . $delimiter . ',comment as ' . $delimiter . 'drupal_node.comment' . $delimiter . ',changed as ' . $delimiter . 'drupal_node.changed' . $delimiter . ',created as ' . $delimiter . 'drupal_node.created' . $delimiter . ',status as ' . $delimiter . 'drupal_node.status' . $delimiter . ',uid as ' . $delimiter . 'drupal_node.uid' . $delimiter . ',title as ' . $delimiter . 'drupal_node.title' . $delimiter . ',language as ' . $delimiter . 'drupal_node.language' . $delimiter . ',type as ' . $delimiter . 'drupal_node.type' . $delimiter . ',vid as ' . $delimiter . 'drupal_node.vid' . $delimiter . ',nid as ' . $delimiter . 'drupal_node.nid' . $delimiter . ' from drupal_node';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_translate()
{
	return $this->p_translate;
}

public function get_translate_original()
{
	return $this->p_translate_original;
}

public function set_translate($value)
{
	if ($this->p_translate === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_translate_is_dirty = true;
	$this->p_translate = $value;
}

public function set_translate_original($value)
{
	$this->p_translate_original = $value;
}

public function get_translate_is_dirty()
{
	return $this->p_translate_is_dirty;
}


public function get_tnid()
{
	return $this->p_tnid;
}

public function get_tnid_original()
{
	return $this->p_tnid_original;
}

public function set_tnid($value)
{
	if ($this->p_tnid === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_tnid_is_dirty = true;
	$this->p_tnid = $value;
}

public function set_tnid_original($value)
{
	$this->p_tnid_original = $value;
}

public function get_tnid_is_dirty()
{
	return $this->p_tnid_is_dirty;
}


public function get_sticky()
{
	return $this->p_sticky;
}

public function get_sticky_original()
{
	return $this->p_sticky_original;
}

public function set_sticky($value)
{
	if ($this->p_sticky === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_sticky_is_dirty = true;
	$this->p_sticky = $value;
}

public function set_sticky_original($value)
{
	$this->p_sticky_original = $value;
}

public function get_sticky_is_dirty()
{
	return $this->p_sticky_is_dirty;
}


public function get_promote()
{
	return $this->p_promote;
}

public function get_promote_original()
{
	return $this->p_promote_original;
}

public function set_promote($value)
{
	if ($this->p_promote === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_promote_is_dirty = true;
	$this->p_promote = $value;
}

public function set_promote_original($value)
{
	$this->p_promote_original = $value;
}

public function get_promote_is_dirty()
{
	return $this->p_promote_is_dirty;
}


public function get_comment()
{
	return $this->p_comment;
}

public function get_comment_original()
{
	return $this->p_comment_original;
}

public function set_comment($value)
{
	if ($this->p_comment === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_comment_is_dirty = true;
	$this->p_comment = $value;
}

public function set_comment_original($value)
{
	$this->p_comment_original = $value;
}

public function get_comment_is_dirty()
{
	return $this->p_comment_is_dirty;
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


public function get_title()
{
	return $this->p_title;
}

public function get_title_original()
{
	return $this->p_title_original;
}

public function set_title($value)
{
	if ($this->p_title === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_title_is_dirty = true;
	$this->p_title = $value;
}

public function set_title_original($value)
{
	$this->p_title_original = $value;
}

public function get_title_is_dirty()
{
	return $this->p_title_is_dirty;
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


public function get_type()
{
	return $this->p_type;
}

public function get_type_original()
{
	return $this->p_type_original;
}

public function set_type($value)
{
	if ($this->p_type === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_type_is_dirty = true;
	$this->p_type = $value;
}

public function set_type_original($value)
{
	$this->p_type_original = $value;
}

public function get_type_is_dirty()
{
	return $this->p_type_is_dirty;
}


public function get_vid()
{
	return $this->p_vid;
}

public function get_vid_original()
{
	return $this->p_vid_original;
}

public function set_vid($value)
{
	if ($this->p_vid === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_vid_is_dirty = true;
	$this->p_vid = $value;
}

public function set_vid_original($value)
{
	$this->p_vid_original = $value;
}

public function get_vid_is_dirty()
{
	return $this->p_vid_is_dirty;
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


public function reset_dirty($reset_values = false)
{
	$this->p_translate_is_dirty = false;
	$this->p_tnid_is_dirty = false;
	$this->p_sticky_is_dirty = false;
	$this->p_promote_is_dirty = false;
	$this->p_comment_is_dirty = false;
	$this->p_changed_is_dirty = false;
	$this->p_created_is_dirty = false;
	$this->p_status_is_dirty = false;
	$this->p_uid_is_dirty = false;
	$this->p_title_is_dirty = false;
	$this->p_language_is_dirty = false;
	$this->p_type_is_dirty = false;
	$this->p_vid_is_dirty = false;
	$this->p_nid_is_dirty = false;
	if ($reset_values)
	{
		$this->p_translate = $this->p_translate_original;
		$this->p_tnid = $this->p_tnid_original;
		$this->p_sticky = $this->p_sticky_original;
		$this->p_promote = $this->p_promote_original;
		$this->p_comment = $this->p_comment_original;
		$this->p_changed = $this->p_changed_original;
		$this->p_created = $this->p_created_original;
		$this->p_status = $this->p_status_original;
		$this->p_uid = $this->p_uid_original;
		$this->p_title = $this->p_title_original;
		$this->p_language = $this->p_language_original;
		$this->p_type = $this->p_type_original;
		$this->p_vid = $this->p_vid_original;
		$this->p_nid = $this->p_nid_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "drupal_node.id":
					$this->set_id($val);
					break;
				case "drupal_node.translate":
					$this->set_translate($val);
					$this->set_translate_original($val);
					break;
				case "drupal_node.tnid":
					$this->set_tnid($val);
					$this->set_tnid_original($val);
					break;
				case "drupal_node.sticky":
					$this->set_sticky($val);
					$this->set_sticky_original($val);
					break;
				case "drupal_node.promote":
					$this->set_promote($val);
					$this->set_promote_original($val);
					break;
				case "drupal_node.comment":
					$this->set_comment($val);
					$this->set_comment_original($val);
					break;
				case "drupal_node.changed":
					$this->set_changed($val);
					$this->set_changed_original($val);
					break;
				case "drupal_node.created":
					$this->set_created($val);
					$this->set_created_original($val);
					break;
				case "drupal_node.status":
					$this->set_status($val);
					$this->set_status_original($val);
					break;
				case "drupal_node.uid":
					$this->set_uid($val);
					$this->set_uid_original($val);
					break;
				case "drupal_node.title":
					$this->set_title($val);
					$this->set_title_original($val);
					break;
				case "drupal_node.language":
					$this->set_language($val);
					$this->set_language_original($val);
					break;
				case "drupal_node.type":
					$this->set_type($val);
					$this->set_type_original($val);
					break;
				case "drupal_node.vid":
					$this->set_vid($val);
					$this->set_vid_original($val);
					break;
				case "drupal_node.nid":
					$this->set_nid($val);
					$this->set_nid_original($val);
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
		$drupal_node = cls_table_factory::create_instance('drupal_node');
		$row = $db_manager->fetch_row($result);
		$drupal_node->fill($row);
		return $drupal_node;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_node.php');
		return cls_save_drupal_node::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_node.php');
		return cls_save_drupal_node::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_drupal_nodes($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('drupal_node',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('drupal_node',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$drupal_node = cls_table_factory::create_instance('drupal_node');
				$drupal_node->fill($row);
				$data[] = $drupal_node;
			}
		return $data;
	}

public function get_table_test_data($drupal_nodes,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($drupal_nodes,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$drupal_nodes,'id_data');
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

public function get_communication_reason($drupal_nodes,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($drupal_nodes,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$drupal_nodes,'id_data');
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

public function get_data_change($drupal_nodes,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($drupal_nodes,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$drupal_nodes,'id_data');
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

public function get_data_help($drupal_nodes,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($drupal_nodes,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$drupal_nodes,'id_data');
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

public function get_data_location($drupal_nodes,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($drupal_nodes,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$drupal_nodes,'id_data');
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

public function get_data_posting($drupal_nodes,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($drupal_nodes,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$drupal_nodes,'id_data');
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

public function get_offer_event($drupal_nodes,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($drupal_nodes,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$drupal_nodes,'id_data');
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

public function get_supplier_data($drupal_nodes,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($drupal_nodes,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$drupal_nodes,'id_data');
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

public function get_address($drupal_nodes,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($drupal_nodes,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$drupal_nodes,'id_data');
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

public function get_data_property($drupal_nodes,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($drupal_nodes,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_nodes,'id_data');
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

public function get_data_translation($drupal_nodes,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($drupal_nodes,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$drupal_nodes,'id_data');
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

public function get_dms($drupal_nodes,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($drupal_nodes,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$drupal_nodes,'id_data');
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

public function get_data_relation_id_data1($drupal_nodes,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($drupal_nodes,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_nodes,'id_data1');
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

public function get_data_relation_id_data2($drupal_nodes,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($drupal_nodes,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_nodes,'id_data2');
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

public function get_data_property_id_link_data($drupal_nodes,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($drupal_nodes,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_nodes,'id_link_data');
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
