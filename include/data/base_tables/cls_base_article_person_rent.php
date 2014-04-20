<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_article_person_rent extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_fixed_asset = null;
private $p_id_fixed_asset_original = null;
private $p_id_person_employee_returned = null;
private $p_id_person_employee_returned_original = null;
private $p_id_person_employee_issued = null;
private $p_id_person_employee_issued_original = null;
private $p_id_posting_header = null;
private $p_id_posting_header_original = null;
private $p_datetil = null;
private $p_datetil_original = null;
private $p_datefrom = null;
private $p_datefrom_original = null;
private $p_id_person = null;
private $p_id_person_original = null;
private $p_id_article = null;
private $p_id_article_original = null;

private $p_id_fixed_asset_is_dirty = false;
private $p_id_person_employee_returned_is_dirty = false;
private $p_id_person_employee_issued_is_dirty = false;
private $p_id_posting_header_is_dirty = false;
private $p_datetil_is_dirty = false;
private $p_datefrom_is_dirty = false;
private $p_id_person_is_dirty = false;
private $p_id_article_is_dirty = false;

public function _get_table_name()
{
	return 'article_person_rent';
}

public function get_table_fields()
{
	return array('id_fixed_asset','id_person_employee_returned','id_person_employee_issued','id_posting_header','datetil','datefrom','id_person','id_article','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select id_fixed_asset as ' . $delimiter . 'article_person_rent.id_fixed_asset' . $delimiter . ',id_person_employee_returned as ' . $delimiter . 'article_person_rent.id_person_employee_returned' . $delimiter . ',id_person_employee_issued as ' . $delimiter . 'article_person_rent.id_person_employee_issued' . $delimiter . ',id_posting_header as ' . $delimiter . 'article_person_rent.id_posting_header' . $delimiter . ',datetil as ' . $delimiter . 'article_person_rent.datetil' . $delimiter . ',datefrom as ' . $delimiter . 'article_person_rent.datefrom' . $delimiter . ',id_person as ' . $delimiter . 'article_person_rent.id_person' . $delimiter . ',id_article as ' . $delimiter . 'article_person_rent.id_article' . $delimiter . ',id as ' . $delimiter . 'article_person_rent.id' . $delimiter . ' from article_person_rent';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}

public function get_id_fixed_asset()
{
	return $this->p_id_fixed_asset;
}

public function get_id_fixed_asset_original()
{
	return $this->p_id_fixed_asset_original;
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

public function set_id_fixed_asset_original($value)
{
	$this->p_id_fixed_asset_original = $value;
}

public function get_id_fixed_asset_is_dirty()
{
	return $this->p_id_fixed_asset_is_dirty;
}


public function get_id_person_employee_returned()
{
	return $this->p_id_person_employee_returned;
}

public function get_id_person_employee_returned_original()
{
	return $this->p_id_person_employee_returned_original;
}

public function set_id_person_employee_returned($value)
{
	if ($this->p_id_person_employee_returned === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_employee_returned_is_dirty = true;
	$this->p_id_person_employee_returned = $value;
}

public function set_id_person_employee_returned_original($value)
{
	$this->p_id_person_employee_returned_original = $value;
}

public function get_id_person_employee_returned_is_dirty()
{
	return $this->p_id_person_employee_returned_is_dirty;
}


public function get_id_person_employee_issued()
{
	return $this->p_id_person_employee_issued;
}

public function get_id_person_employee_issued_original()
{
	return $this->p_id_person_employee_issued_original;
}

public function set_id_person_employee_issued($value)
{
	if ($this->p_id_person_employee_issued === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_employee_issued_is_dirty = true;
	$this->p_id_person_employee_issued = $value;
}

public function set_id_person_employee_issued_original($value)
{
	$this->p_id_person_employee_issued_original = $value;
}

public function get_id_person_employee_issued_is_dirty()
{
	return $this->p_id_person_employee_issued_is_dirty;
}


public function get_id_posting_header()
{
	return $this->p_id_posting_header;
}

public function get_id_posting_header_original()
{
	return $this->p_id_posting_header_original;
}

public function set_id_posting_header($value)
{
	if ($this->p_id_posting_header === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_posting_header_is_dirty = true;
	$this->p_id_posting_header = $value;
}

public function set_id_posting_header_original($value)
{
	$this->p_id_posting_header_original = $value;
}

public function get_id_posting_header_is_dirty()
{
	return $this->p_id_posting_header_is_dirty;
}


public function get_datetil()
{
	return $this->p_datetil;
}

public function get_datetil_original()
{
	return $this->p_datetil_original;
}

public function set_datetil($value)
{
	if ($this->p_datetil === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_datetil_is_dirty = true;
	$this->p_datetil = $value;
}

public function set_datetil_original($value)
{
	$this->p_datetil_original = $value;
}

public function get_datetil_is_dirty()
{
	return $this->p_datetil_is_dirty;
}


public function get_datefrom()
{
	return $this->p_datefrom;
}

public function get_datefrom_original()
{
	return $this->p_datefrom_original;
}

public function set_datefrom($value)
{
	if ($this->p_datefrom === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_datefrom_is_dirty = true;
	$this->p_datefrom = $value;
}

public function set_datefrom_original($value)
{
	$this->p_datefrom_original = $value;
}

public function get_datefrom_is_dirty()
{
	return $this->p_datefrom_is_dirty;
}


public function get_id_person()
{
	return $this->p_id_person;
}

public function get_id_person_original()
{
	return $this->p_id_person_original;
}

public function set_id_person($value)
{
	if ($this->p_id_person === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_is_dirty = true;
	$this->p_id_person = $value;
}

public function set_id_person_original($value)
{
	$this->p_id_person_original = $value;
}

public function get_id_person_is_dirty()
{
	return $this->p_id_person_is_dirty;
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
	$this->p_id_fixed_asset_is_dirty = false;
	$this->p_id_person_employee_returned_is_dirty = false;
	$this->p_id_person_employee_issued_is_dirty = false;
	$this->p_id_posting_header_is_dirty = false;
	$this->p_datetil_is_dirty = false;
	$this->p_datefrom_is_dirty = false;
	$this->p_id_person_is_dirty = false;
	$this->p_id_article_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_fixed_asset = $this->p_id_fixed_asset_original;
		$this->p_id_person_employee_returned = $this->p_id_person_employee_returned_original;
		$this->p_id_person_employee_issued = $this->p_id_person_employee_issued_original;
		$this->p_id_posting_header = $this->p_id_posting_header_original;
		$this->p_datetil = $this->p_datetil_original;
		$this->p_datefrom = $this->p_datefrom_original;
		$this->p_id_person = $this->p_id_person_original;
		$this->p_id_article = $this->p_id_article_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "article_person_rent.id_fixed_asset":
					$this->set_id_fixed_asset($val);
					$this->set_id_fixed_asset_original($val);
					break;
				case "article_person_rent.id_person_employee_returned":
					$this->set_id_person_employee_returned($val);
					$this->set_id_person_employee_returned_original($val);
					break;
				case "article_person_rent.id_person_employee_issued":
					$this->set_id_person_employee_issued($val);
					$this->set_id_person_employee_issued_original($val);
					break;
				case "article_person_rent.id_posting_header":
					$this->set_id_posting_header($val);
					$this->set_id_posting_header_original($val);
					break;
				case "article_person_rent.datetil":
					$this->set_datetil($val);
					$this->set_datetil_original($val);
					break;
				case "article_person_rent.datefrom":
					$this->set_datefrom($val);
					$this->set_datefrom_original($val);
					break;
				case "article_person_rent.id_person":
					$this->set_id_person($val);
					$this->set_id_person_original($val);
					break;
				case "article_person_rent.id_article":
					$this->set_id_article($val);
					$this->set_id_article_original($val);
					break;
				case "article_person_rent.id":
					$this->set_id($val);
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
		$article_person_rent = cls_table_factory::create_instance('article_person_rent');
		$row = $db_manager->fetch_row($result);
		$article_person_rent->fill($row);
		return $article_person_rent;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_article_person_rent.php');
		return cls_save_article_person_rent::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_article_person_rent.php');
		return cls_save_article_person_rent::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_article_person_rents($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('article_person_rent',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('article_person_rent',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_person_rent = cls_table_factory::create_instance('article_person_rent');
				$article_person_rent->fill($row);
				$data[] = $article_person_rent;
			}
		return $data;
	}

function get_article($db_manager,$application)
	{
		$result = $db_manager->get_records('article',$this->get_id_article());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article = cls_table_factory::create_instance('article');
		$row = $db_manager->fetch_row($result);
		$article->fill($row);
		return $article;
	}

function get_fixed_asset($db_manager,$application)
	{
		$result = $db_manager->get_records('fixed_asset',$this->get_id_fixed_asset());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$fixed_asset = cls_table_factory::create_instance('fixed_asset');
		$row = $db_manager->fetch_row($result);
		$fixed_asset->fill($row);
		return $fixed_asset;
	}

function get_person($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

function get_person_employee_issued($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person_employee_issued());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

function get_person_employee_returned($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person_employee_returned());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

function get_posting_header($db_manager,$application)
	{
		$result = $db_manager->get_records('posting_header',$this->get_id_posting_header());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$posting_header = cls_table_factory::create_instance('posting_header');
		$row = $db_manager->fetch_row($result);
		$posting_header->fill($row);
		return $posting_header;
	}

public function get_table_test_data($article_person_rents,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($article_person_rents,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$article_person_rents,'id_data');
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

public function get_communication_reason($article_person_rents,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($article_person_rents,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$article_person_rents,'id_data');
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

public function get_data_change($article_person_rents,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($article_person_rents,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$article_person_rents,'id_data');
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

public function get_data_help($article_person_rents,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($article_person_rents,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$article_person_rents,'id_data');
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

public function get_data_location($article_person_rents,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($article_person_rents,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$article_person_rents,'id_data');
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

public function get_data_posting($article_person_rents,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($article_person_rents,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$article_person_rents,'id_data');
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

public function get_offer_event($article_person_rents,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($article_person_rents,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$article_person_rents,'id_data');
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

public function get_supplier_data($article_person_rents,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($article_person_rents,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$article_person_rents,'id_data');
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

public function get_address($article_person_rents,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($article_person_rents,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$article_person_rents,'id_data');
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

public function get_data_property($article_person_rents,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($article_person_rents,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$article_person_rents,'id_data');
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

public function get_data_translation($article_person_rents,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($article_person_rents,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$article_person_rents,'id_data');
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

public function get_dms($article_person_rents,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($article_person_rents,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$article_person_rents,'id_data');
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

public function get_data_relation_id_data1($article_person_rents,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($article_person_rents,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$article_person_rents,'id_data1');
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

public function get_data_relation_id_data2($article_person_rents,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($article_person_rents,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$article_person_rents,'id_data2');
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

public function get_data_property_id_link_data($article_person_rents,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($article_person_rents,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$article_person_rents,'id_link_data');
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
