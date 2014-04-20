<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_article extends cls_datatable_base
{
private static $p_cmmon;
private $p_rentable = null;
private $p_rentable_original = null;
private $p_barcode = null;
private $p_barcode_original = null;
private $p_articleno = null;
private $p_articleno_original = null;
private $p_insurance_no = null;
private $p_insurance_no_original = null;
private $p_id_uom = null;
private $p_id_uom_original = null;
private $p_name = null;
private $p_name_original = null;

private $p_rentable_is_dirty = false;
private $p_barcode_is_dirty = false;
private $p_articleno_is_dirty = false;
private $p_insurance_no_is_dirty = false;
private $p_id_uom_is_dirty = false;
private $p_name_is_dirty = false;

public function _get_table_name()
{
	return 'article';
}

public function get_table_fields()
{
	return array('rentable','barcode','articleno','insurance_no','id_uom','name','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select rentable as ' . $delimiter . 'article.rentable' . $delimiter . ',barcode as ' . $delimiter . 'article.barcode' . $delimiter . ',articleno as ' . $delimiter . 'article.articleno' . $delimiter . ',insurance_no as ' . $delimiter . 'article.insurance_no' . $delimiter . ',id_uom as ' . $delimiter . 'article.id_uom' . $delimiter . ',name as ' . $delimiter . 'article.name' . $delimiter . ',id as ' . $delimiter . 'article.id' . $delimiter . ' from article';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}

public function get_rentable()
{
	return $this->p_rentable;
}

public function get_rentable_original()
{
	return $this->p_rentable_original;
}

public function set_rentable($value)
{
	if ($this->p_rentable === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_rentable_is_dirty = true;
	$this->p_rentable = $value;
}

public function set_rentable_original($value)
{
	$this->p_rentable_original = $value;
}

public function get_rentable_is_dirty()
{
	return $this->p_rentable_is_dirty;
}


public function get_barcode()
{
	return $this->p_barcode;
}

public function get_barcode_original()
{
	return $this->p_barcode_original;
}

public function set_barcode($value)
{
	if ($this->p_barcode === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_barcode_is_dirty = true;
	$this->p_barcode = $value;
}

public function set_barcode_original($value)
{
	$this->p_barcode_original = $value;
}

public function get_barcode_is_dirty()
{
	return $this->p_barcode_is_dirty;
}


public function get_articleno()
{
	return $this->p_articleno;
}

public function get_articleno_original()
{
	return $this->p_articleno_original;
}

public function set_articleno($value)
{
	if ($this->p_articleno === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_articleno_is_dirty = true;
	$this->p_articleno = $value;
}

public function set_articleno_original($value)
{
	$this->p_articleno_original = $value;
}

public function get_articleno_is_dirty()
{
	return $this->p_articleno_is_dirty;
}


public function get_insurance_no()
{
	return $this->p_insurance_no;
}

public function get_insurance_no_original()
{
	return $this->p_insurance_no_original;
}

public function set_insurance_no($value)
{
	if ($this->p_insurance_no === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_insurance_no_is_dirty = true;
	$this->p_insurance_no = $value;
}

public function set_insurance_no_original($value)
{
	$this->p_insurance_no_original = $value;
}

public function get_insurance_no_is_dirty()
{
	return $this->p_insurance_no_is_dirty;
}


public function get_id_uom()
{
	return $this->p_id_uom;
}

public function get_id_uom_original()
{
	return $this->p_id_uom_original;
}

public function set_id_uom($value)
{
	if ($this->p_id_uom === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_uom_is_dirty = true;
	$this->p_id_uom = $value;
}

public function set_id_uom_original($value)
{
	$this->p_id_uom_original = $value;
}

public function get_id_uom_is_dirty()
{
	return $this->p_id_uom_is_dirty;
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



public function reset_dirty($reset_values = false)
{
	$this->p_rentable_is_dirty = false;
	$this->p_barcode_is_dirty = false;
	$this->p_articleno_is_dirty = false;
	$this->p_insurance_no_is_dirty = false;
	$this->p_id_uom_is_dirty = false;
	$this->p_name_is_dirty = false;
	if ($reset_values)
	{
		$this->p_rentable = $this->p_rentable_original;
		$this->p_barcode = $this->p_barcode_original;
		$this->p_articleno = $this->p_articleno_original;
		$this->p_insurance_no = $this->p_insurance_no_original;
		$this->p_id_uom = $this->p_id_uom_original;
		$this->p_name = $this->p_name_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "article.rentable":
					$this->set_rentable($val);
					$this->set_rentable_original($val);
					break;
				case "article.barcode":
					$this->set_barcode($val);
					$this->set_barcode_original($val);
					break;
				case "article.articleno":
					$this->set_articleno($val);
					$this->set_articleno_original($val);
					break;
				case "article.insurance_no":
					$this->set_insurance_no($val);
					$this->set_insurance_no_original($val);
					break;
				case "article.id_uom":
					$this->set_id_uom($val);
					$this->set_id_uom_original($val);
					break;
				case "article.name":
					$this->set_name($val);
					$this->set_name_original($val);
					break;
				case "article.id":
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
		$article = cls_table_factory::create_instance('article');
		$row = $db_manager->fetch_row($result);
		$article->fill($row);
		return $article;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_article.php');
		return cls_save_article::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_article.php');
		return cls_save_article::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_articles($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('article',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('article',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article = cls_table_factory::create_instance('article');
				$article->fill($row);
				$data[] = $article;
			}
		return $data;
	}

function get_uom($db_manager,$application)
	{
		$result = $db_manager->get_records('uom',$this->get_id_uom());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$uom = cls_table_factory::create_instance('uom');
		$row = $db_manager->fetch_row($result);
		$uom->fill($row);
		return $uom;
	}

//changed 1
public function get_prescription_type_pos($db_manager,$application)
	{
		$result = $db_manager->get_records('prescription_type_pos',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$prescription_type_pos = cls_table_factory::create_instance('prescription_type_pos');
		$row = $db_manager->fetch_row($result);
		$prescription_type_pos->fill($row);
		return $prescription_type_pos;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_prescription_type_poss_by_article($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('prescription_type_pos',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$prescription_type_pos = cls_table_factory::create_instance('prescription_type_pos');
				$prescription_type_pos->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $prescription_type_pos;
				}
				else
				{
					$data[] = $prescription_type_pos;
				}
			}
		return $data;
	}

public function get_multi_prescription_type_poss_by_article($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('prescription_type_pos',$articles,'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$prescription_type_pos = cls_table_factory::create_instance('prescription_type_pos');
				$prescription_type_pos->fill($row);
				if (!array_key_exists($data[$row['id_article']]))
				{
					$data[$row['id_article']] = array();
				}
				$data[$row['id_article']][] = $prescription_type_pos;
			}
		return $data;
	}

//changed 1
public function get_article_list_pos($db_manager,$application)
	{
		$result = $db_manager->get_records('article_list_pos',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article_list_pos = cls_table_factory::create_instance('article_list_pos');
		$row = $db_manager->fetch_row($result);
		$article_list_pos->fill($row);
		return $article_list_pos;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_article_list_poss_by_article($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('article_list_pos',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_list_pos = cls_table_factory::create_instance('article_list_pos');
				$article_list_pos->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $article_list_pos;
				}
				else
				{
					$data[] = $article_list_pos;
				}
			}
		return $data;
	}

public function get_multi_article_list_poss_by_article($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('article_list_pos',$articles,'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_list_pos = cls_table_factory::create_instance('article_list_pos');
				$article_list_pos->fill($row);
				if (!array_key_exists($data[$row['id_article']]))
				{
					$data[$row['id_article']] = array();
				}
				$data[$row['id_article']][] = $article_list_pos;
			}
		return $data;
	}

//changed 1
public function get_article_person_rent($db_manager,$application)
	{
		$result = $db_manager->get_records('article_person_rent',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article_person_rent = cls_table_factory::create_instance('article_person_rent');
		$row = $db_manager->fetch_row($result);
		$article_person_rent->fill($row);
		return $article_person_rent;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_article_person_rents_by_article($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('article_person_rent',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_person_rent = cls_table_factory::create_instance('article_person_rent');
				$article_person_rent->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $article_person_rent;
				}
				else
				{
					$data[] = $article_person_rent;
				}
			}
		return $data;
	}

public function get_multi_article_person_rents_by_article($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('article_person_rent',$articles,'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_person_rent = cls_table_factory::create_instance('article_person_rent');
				$article_person_rent->fill($row);
				if (!array_key_exists($data[$row['id_article']]))
				{
					$data[$row['id_article']] = array();
				}
				$data[$row['id_article']][] = $article_person_rent;
			}
		return $data;
	}

//changed 1
public function get_article_price($db_manager,$application)
	{
		$result = $db_manager->get_records('article_price',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article_price = cls_table_factory::create_instance('article_price');
		$row = $db_manager->fetch_row($result);
		$article_price->fill($row);
		return $article_price;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_article_prices_by_article($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('article_price',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_price = cls_table_factory::create_instance('article_price');
				$article_price->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $article_price;
				}
				else
				{
					$data[] = $article_price;
				}
			}
		return $data;
	}

public function get_multi_article_prices_by_article($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('article_price',$articles,'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_price = cls_table_factory::create_instance('article_price');
				$article_price->fill($row);
				if (!array_key_exists($data[$row['id_article']]))
				{
					$data[$row['id_article']] = array();
				}
				$data[$row['id_article']][] = $article_price;
			}
		return $data;
	}

//changed 1
public function get_article_quantity($db_manager,$application)
	{
		$result = $db_manager->get_records('article_quantity',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article_quantity = cls_table_factory::create_instance('article_quantity');
		$row = $db_manager->fetch_row($result);
		$article_quantity->fill($row);
		return $article_quantity;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_article_quantitys_by_article($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('article_quantity',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_quantity = cls_table_factory::create_instance('article_quantity');
				$article_quantity->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $article_quantity;
				}
				else
				{
					$data[] = $article_quantity;
				}
			}
		return $data;
	}

public function get_multi_article_quantitys_by_article($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('article_quantity',$articles,'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_quantity = cls_table_factory::create_instance('article_quantity');
				$article_quantity->fill($row);
				if (!array_key_exists($data[$row['id_article']]))
				{
					$data[$row['id_article']] = array();
				}
				$data[$row['id_article']][] = $article_quantity;
			}
		return $data;
	}

//changed 1
public function get_article_rent_price($db_manager,$application)
	{
		$result = $db_manager->get_records('article_rent_price',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article_rent_price = cls_table_factory::create_instance('article_rent_price');
		$row = $db_manager->fetch_row($result);
		$article_rent_price->fill($row);
		return $article_rent_price;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_article_rent_prices_by_article($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('article_rent_price',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_rent_price = cls_table_factory::create_instance('article_rent_price');
				$article_rent_price->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $article_rent_price;
				}
				else
				{
					$data[] = $article_rent_price;
				}
			}
		return $data;
	}

public function get_multi_article_rent_prices_by_article($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('article_rent_price',$articles,'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_rent_price = cls_table_factory::create_instance('article_rent_price');
				$article_rent_price->fill($row);
				if (!array_key_exists($data[$row['id_article']]))
				{
					$data[$row['id_article']] = array();
				}
				$data[$row['id_article']][] = $article_rent_price;
			}
		return $data;
	}

//changed 1
public function get_article_supplier($db_manager,$application)
	{
		$result = $db_manager->get_records('article_supplier',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article_supplier = cls_table_factory::create_instance('article_supplier');
		$row = $db_manager->fetch_row($result);
		$article_supplier->fill($row);
		return $article_supplier;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_article_suppliers_by_article($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('article_supplier',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_supplier = cls_table_factory::create_instance('article_supplier');
				$article_supplier->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $article_supplier;
				}
				else
				{
					$data[] = $article_supplier;
				}
			}
		return $data;
	}

public function get_multi_article_suppliers_by_article($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('article_supplier',$articles,'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_supplier = cls_table_factory::create_instance('article_supplier');
				$article_supplier->fill($row);
				if (!array_key_exists($data[$row['id_article']]))
				{
					$data[$row['id_article']] = array();
				}
				$data[$row['id_article']][] = $article_supplier;
			}
		return $data;
	}

//changed 1
public function get_contract_pos($db_manager,$application)
	{
		$result = $db_manager->get_records('contract_pos',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$contract_pos = cls_table_factory::create_instance('contract_pos');
		$row = $db_manager->fetch_row($result);
		$contract_pos->fill($row);
		return $contract_pos;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_contract_poss_by_article($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('contract_pos',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_pos = cls_table_factory::create_instance('contract_pos');
				$contract_pos->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $contract_pos;
				}
				else
				{
					$data[] = $contract_pos;
				}
			}
		return $data;
	}

public function get_multi_contract_poss_by_article($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('contract_pos',$articles,'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_pos = cls_table_factory::create_instance('contract_pos');
				$contract_pos->fill($row);
				if (!array_key_exists($data[$row['id_article']]))
				{
					$data[$row['id_article']] = array();
				}
				$data[$row['id_article']][] = $contract_pos;
			}
		return $data;
	}

//changed 1
public function get_contract_template_item($db_manager,$application)
	{
		$result = $db_manager->get_records('contract_template_item',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$contract_template_item = cls_table_factory::create_instance('contract_template_item');
		$row = $db_manager->fetch_row($result);
		$contract_template_item->fill($row);
		return $contract_template_item;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_contract_template_items_by_article($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('contract_template_item',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_template_item = cls_table_factory::create_instance('contract_template_item');
				$contract_template_item->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $contract_template_item;
				}
				else
				{
					$data[] = $contract_template_item;
				}
			}
		return $data;
	}

public function get_multi_contract_template_items_by_article($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('contract_template_item',$articles,'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_template_item = cls_table_factory::create_instance('contract_template_item');
				$contract_template_item->fill($row);
				if (!array_key_exists($data[$row['id_article']]))
				{
					$data[$row['id_article']] = array();
				}
				$data[$row['id_article']][] = $contract_template_item;
			}
		return $data;
	}

//changed 1
public function get_contract_template_onetimepayment($db_manager,$application)
	{
		$result = $db_manager->get_records('contract_template_onetimepayment',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$contract_template_onetimepayment = cls_table_factory::create_instance('contract_template_onetimepayment');
		$row = $db_manager->fetch_row($result);
		$contract_template_onetimepayment->fill($row);
		return $contract_template_onetimepayment;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_contract_template_onetimepayments_by_article($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('contract_template_onetimepayment',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_template_onetimepayment = cls_table_factory::create_instance('contract_template_onetimepayment');
				$contract_template_onetimepayment->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $contract_template_onetimepayment;
				}
				else
				{
					$data[] = $contract_template_onetimepayment;
				}
			}
		return $data;
	}

public function get_multi_contract_template_onetimepayments_by_article($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('contract_template_onetimepayment',$articles,'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_template_onetimepayment = cls_table_factory::create_instance('contract_template_onetimepayment');
				$contract_template_onetimepayment->fill($row);
				if (!array_key_exists($data[$row['id_article']]))
				{
					$data[$row['id_article']] = array();
				}
				$data[$row['id_article']][] = $contract_template_onetimepayment;
			}
		return $data;
	}

//changed 1
public function get_contract_template_pos($db_manager,$application)
	{
		$result = $db_manager->get_records('contract_template_pos',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$contract_template_pos = cls_table_factory::create_instance('contract_template_pos');
		$row = $db_manager->fetch_row($result);
		$contract_template_pos->fill($row);
		return $contract_template_pos;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_contract_template_poss_by_article($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('contract_template_pos',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_template_pos = cls_table_factory::create_instance('contract_template_pos');
				$contract_template_pos->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $contract_template_pos;
				}
				else
				{
					$data[] = $contract_template_pos;
				}
			}
		return $data;
	}

public function get_multi_contract_template_poss_by_article($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('contract_template_pos',$articles,'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$contract_template_pos = cls_table_factory::create_instance('contract_template_pos');
				$contract_template_pos->fill($row);
				if (!array_key_exists($data[$row['id_article']]))
				{
					$data[$row['id_article']] = array();
				}
				$data[$row['id_article']][] = $contract_template_pos;
			}
		return $data;
	}

//changed 1
public function get_insurance_price($db_manager,$application)
	{
		$result = $db_manager->get_records('insurance_price',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$insurance_price = cls_table_factory::create_instance('insurance_price');
		$row = $db_manager->fetch_row($result);
		$insurance_price->fill($row);
		return $insurance_price;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_insurance_prices_by_article($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('insurance_price',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$insurance_price = cls_table_factory::create_instance('insurance_price');
				$insurance_price->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $insurance_price;
				}
				else
				{
					$data[] = $insurance_price;
				}
			}
		return $data;
	}

public function get_multi_insurance_prices_by_article($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('insurance_price',$articles,'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$insurance_price = cls_table_factory::create_instance('insurance_price');
				$insurance_price->fill($row);
				if (!array_key_exists($data[$row['id_article']]))
				{
					$data[$row['id_article']] = array();
				}
				$data[$row['id_article']][] = $insurance_price;
			}
		return $data;
	}

//changed 1
public function get_onetime_payment($db_manager,$application)
	{
		$result = $db_manager->get_records('onetime_payment',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$onetime_payment = cls_table_factory::create_instance('onetime_payment');
		$row = $db_manager->fetch_row($result);
		$onetime_payment->fill($row);
		return $onetime_payment;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_onetime_payments_by_article($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('onetime_payment',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$onetime_payment = cls_table_factory::create_instance('onetime_payment');
				$onetime_payment->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $onetime_payment;
				}
				else
				{
					$data[] = $onetime_payment;
				}
			}
		return $data;
	}

public function get_multi_onetime_payments_by_article($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('onetime_payment',$articles,'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$onetime_payment = cls_table_factory::create_instance('onetime_payment');
				$onetime_payment->fill($row);
				if (!array_key_exists($data[$row['id_article']]))
				{
					$data[$row['id_article']] = array();
				}
				$data[$row['id_article']][] = $onetime_payment;
			}
		return $data;
	}

//changed 1
public function get_posting_line($db_manager,$application)
	{
		$result = $db_manager->get_records('posting_line',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$posting_line = cls_table_factory::create_instance('posting_line');
		$row = $db_manager->fetch_row($result);
		$posting_line->fill($row);
		return $posting_line;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_posting_lines_by_article($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('posting_line',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$posting_line = cls_table_factory::create_instance('posting_line');
				$posting_line->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $posting_line;
				}
				else
				{
					$data[] = $posting_line;
				}
			}
		return $data;
	}

public function get_multi_posting_lines_by_article($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('posting_line',$articles,'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$posting_line = cls_table_factory::create_instance('posting_line');
				$posting_line->fill($row);
				if (!array_key_exists($data[$row['id_article']]))
				{
					$data[$row['id_article']] = array();
				}
				$data[$row['id_article']][] = $posting_line;
			}
		return $data;
	}

//changed 1
public function get_article_fixed_asset($db_manager,$application)
	{
		$result = $db_manager->get_records('article_fixed_asset',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$article_fixed_asset = cls_table_factory::create_instance('article_fixed_asset');
		$row = $db_manager->fetch_row($result);
		$article_fixed_asset->fill($row);
		return $article_fixed_asset;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_article_fixed_assets_by_article($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('article_fixed_asset',$this->get_id(),'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_fixed_asset = cls_table_factory::create_instance('article_fixed_asset');
				$article_fixed_asset->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $article_fixed_asset;
				}
				else
				{
					$data[] = $article_fixed_asset;
				}
			}
		return $data;
	}

public function get_multi_article_fixed_assets_by_article($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('article_fixed_asset',$articles,'id_article');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$article_fixed_asset = cls_table_factory::create_instance('article_fixed_asset');
				$article_fixed_asset->fill($row);
				if (!array_key_exists($data[$row['id_article']]))
				{
					$data[$row['id_article']] = array();
				}
				$data[$row['id_article']][] = $article_fixed_asset;
			}
		return $data;
	}

//changed 1
public function get_offer_type_by_base($db_manager,$application)
	{
		$result = $db_manager->get_records('offer_type',$this->get_id(),'id_article_base');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$offer_type = cls_table_factory::create_instance('offer_type');
		$row = $db_manager->fetch_row($result);
		$offer_type->fill($row);
		return $offer_type;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_offer_types_by_article_base($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('offer_type',$this->get_id(),'id_article_base');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_type = cls_table_factory::create_instance('offer_type');
				$offer_type->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $offer_type;
				}
				else
				{
					$data[] = $offer_type;
				}
			}
		return $data;
	}

public function get_multi_offer_types_by_article_base($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_type',$articles,'id_article_base');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_type = cls_table_factory::create_instance('offer_type');
				$offer_type->fill($row);
				if (!array_key_exists($data[$row['id_article_base']]))
				{
					$data[$row['id_article_base']] = array();
				}
				$data[$row['id_article_base']][] = $offer_type;
			}
		return $data;
	}

//changed 1
public function get_offer_type_by_transport($db_manager,$application)
	{
		$result = $db_manager->get_records('offer_type',$this->get_id(),'id_article_transport');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$offer_type = cls_table_factory::create_instance('offer_type');
		$row = $db_manager->fetch_row($result);
		$offer_type->fill($row);
		return $offer_type;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_offer_types_by_article_transport($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('offer_type',$this->get_id(),'id_article_transport');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_type = cls_table_factory::create_instance('offer_type');
				$offer_type->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $offer_type;
				}
				else
				{
					$data[] = $offer_type;
				}
			}
		return $data;
	}

public function get_multi_offer_types_by_article_transport($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_type',$articles,'id_article_transport');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_type = cls_table_factory::create_instance('offer_type');
				$offer_type->fill($row);
				if (!array_key_exists($data[$row['id_article_transport']]))
				{
					$data[$row['id_article_transport']] = array();
				}
				$data[$row['id_article_transport']][] = $offer_type;
			}
		return $data;
	}

//changed 1
public function get_offer_type_by_visit($db_manager,$application)
	{
		$result = $db_manager->get_records('offer_type',$this->get_id(),'id_article_visit');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$offer_type = cls_table_factory::create_instance('offer_type');
		$row = $db_manager->fetch_row($result);
		$offer_type->fill($row);
		return $offer_type;
	}

// it is a one to one relation! Do not use!
//changed 2
public function get_offer_types_by_article_visit($db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('offer_type',$this->get_id(),'id_article_visit');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_type = cls_table_factory::create_instance('offer_type');
				$offer_type->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $offer_type;
				}
				else
				{
					$data[] = $offer_type;
				}
			}
		return $data;
	}

public function get_multi_offer_types_by_article_visit($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_type',$articles,'id_article_visit');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_type = cls_table_factory::create_instance('offer_type');
				$offer_type->fill($row);
				if (!array_key_exists($data[$row['id_article_visit']]))
				{
					$data[$row['id_article_visit']] = array();
				}
				$data[$row['id_article_visit']][] = $offer_type;
			}
		return $data;
	}

public function get_table_test_data($articles,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$articles,'id_data');
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

public function get_communication_reason($articles,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$articles,'id_data');
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

public function get_data_change($articles,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$articles,'id_data');
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

public function get_data_help($articles,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$articles,'id_data');
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

public function get_data_location($articles,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$articles,'id_data');
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

public function get_data_posting($articles,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$articles,'id_data');
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

public function get_offer_event($articles,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$articles,'id_data');
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

public function get_supplier_data($articles,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$articles,'id_data');
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

public function get_address($articles,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$articles,'id_data');
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

public function get_data_property($articles,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$articles,'id_data');
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

public function get_data_translation($articles,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$articles,'id_data');
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

public function get_dms($articles,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$articles,'id_data');
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

public function get_data_relation_id_data1($articles,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$articles,'id_data1');
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

public function get_data_relation_id_data2($articles,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$articles,'id_data2');
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

public function get_data_property_id_link_data($articles,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($articles,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$articles,'id_link_data');
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
