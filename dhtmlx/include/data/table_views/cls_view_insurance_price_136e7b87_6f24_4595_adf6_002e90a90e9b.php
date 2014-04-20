<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_insurance_price_136e7b87_6f24_4595_adf6_002e90a90e9b extends cls_table_view_base 
{
	private $p_column_definitions = null;

	function __construct()
	{
		$a = func_get_args();
		$i = func_num_args();
		if (method_exists($this,$f="__construct".$i))
		{
			call_user_func_array(array($this,$f),$a);
		}
	}
	public function query($search_values,$limit,$offset)
		{
		require_once('include/data/table_factory/cls_table_factory.php');
		$common_insurance_price = cls_table_factory::get_common_insurance_price();
		$array_insurance_price =  $common_insurance_price->get_insurance_prices($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_insurance($array_insurance_price);
		$data_array_id_insurance = $this->fill_distinct_id_insurance($where);

		$where = $this->get_distinct_ids_id_insurance_group($array_insurance_price);
		$data_array_id_insurance_group = $this->fill_distinct_id_insurance_group($where);

		$where = $this->get_distinct_ids_id_article($array_insurance_price);
		$data_array_id_article = $this->fill_distinct_id_article($where);

		$where = $this->get_distinct_ids_id_insurance_district($array_insurance_price);
		$data_array_id_insurance_district = $this->fill_distinct_id_insurance_district($where);

		$result_array = array();
		foreach($array_insurance_price as $insurance_price)
			{
			$insurance_price_id = $insurance_price->get_id();
			$result_array[$insurance_price_id]['insurance_price.id'] = $insurance_price->get_id();
			$link_id = $insurance_price->get_id_insurance();
			if (empty($link_id))
				{
				$result_array[$insurance_price_id]['insurance.name'] = '';
				}
			else
				{
				$result_array[$insurance_price_id]['insurance.name'] = $data_array_id_insurance[$link_id]->get_name();
				}
			$link_id = $insurance_price->get_id_insurance_group();
			if (empty($link_id))
				{
				$result_array[$insurance_price_id]['insurance_group.name'] = '';
				}
			else
				{
				$result_array[$insurance_price_id]['insurance_group.name'] = $data_array_id_insurance_group[$link_id]->get_name();
				}
			$link_id = $insurance_price->get_id_article();
			if (empty($link_id))
				{
				$result_array[$insurance_price_id]['article.name'] = '';
				}
			else
				{
				$result_array[$insurance_price_id]['article.name'] = $data_array_id_article[$link_id]->get_name();
				}
			$result_array[$insurance_price_id]['insurance_price.validfrom'] = $insurance_price->get_validfrom();
			$result_array[$insurance_price_id]['insurance_price.price'] = $insurance_price->get_price();
			$result_array[$insurance_price_id]['insurance_price.onlyfornewprescriptions'] = $insurance_price->get_onlyfornewprescriptions();
			$link_id = $insurance_price->get_id_insurance_district();
			if (empty($link_id))
				{
				$result_array[$insurance_price_id]['insurance_district.name'] = '';
				}
			else
				{
				$result_array[$insurance_price_id]['insurance_district.name'] = $data_array_id_insurance_district[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_insurance($array_insurance_price)
	{
		$ids = array();
		foreach ($array_insurance_price as $insurance_price)
		{
			$id = $insurance_price->get_id_insurance();
			if (!in_array($id,$ids)) $ids[] = $id;
		}
		$i = 0;
		$in = "";
		foreach ($ids as $id)
		{
			if (empty($id)) continue;
			if ($i != 0) $in .= ',';
			$in .= "'" . $id . "'";
			$i++;
		}
		if (!empty($in)) $in = ' id in (' . $in . ')';
		return $in;
	}

	private function fill_distinct_id_insurance($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "insurance.id",insurance.name as "insurance.name" from insurance where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$insurance = cls_table_factory::create_instance('insurance');
			$insurance->fill($row);
			$data[$row['insurance.id']] = $insurance;
		}
		return $data;
	}

	private function get_distinct_ids_id_insurance_group($array_insurance_price)
	{
		$ids = array();
		foreach ($array_insurance_price as $insurance_price)
		{
			$id = $insurance_price->get_id_insurance_group();
			if (!in_array($id,$ids)) $ids[] = $id;
		}
		$i = 0;
		$in = "";
		foreach ($ids as $id)
		{
			if (empty($id)) continue;
			if ($i != 0) $in .= ',';
			$in .= "'" . $id . "'";
			$i++;
		}
		if (!empty($in)) $in = ' id in (' . $in . ')';
		return $in;
	}

	private function fill_distinct_id_insurance_group($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "insurance_group.id",insurance_group.name as "insurance_group.name" from insurance_group where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$insurance_group = cls_table_factory::create_instance('insurance_group');
			$insurance_group->fill($row);
			$data[$row['insurance_group.id']] = $insurance_group;
		}
		return $data;
	}

	private function get_distinct_ids_id_article($array_insurance_price)
	{
		$ids = array();
		foreach ($array_insurance_price as $insurance_price)
		{
			$id = $insurance_price->get_id_article();
			if (!in_array($id,$ids)) $ids[] = $id;
		}
		$i = 0;
		$in = "";
		foreach ($ids as $id)
		{
			if (empty($id)) continue;
			if ($i != 0) $in .= ',';
			$in .= "'" . $id . "'";
			$i++;
		}
		if (!empty($in)) $in = ' id in (' . $in . ')';
		return $in;
	}

	private function fill_distinct_id_article($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "article.id",article.name as "article.name" from article where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$article = cls_table_factory::create_instance('article');
			$article->fill($row);
			$data[$row['article.id']] = $article;
		}
		return $data;
	}

	private function get_distinct_ids_id_insurance_district($array_insurance_price)
	{
		$ids = array();
		foreach ($array_insurance_price as $insurance_price)
		{
			$id = $insurance_price->get_id_insurance_district();
			if (!in_array($id,$ids)) $ids[] = $id;
		}
		$i = 0;
		$in = "";
		foreach ($ids as $id)
		{
			if (empty($id)) continue;
			if ($i != 0) $in .= ',';
			$in .= "'" . $id . "'";
			$i++;
		}
		if (!empty($in)) $in = ' id in (' . $in . ')';
		return $in;
	}

	private function fill_distinct_id_insurance_district($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "insurance_district.id",insurance_district.name as "insurance_district.name" from insurance_district where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$insurance_district = cls_table_factory::create_instance('insurance_district');
			$insurance_district->fill($row);
			$data[$row['insurance_district.id']] = $insurance_district;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['insurance_price.id']['type'] = 'uuid';
			$this->p_column_definitions['insurance.name']['type'] = 'varchar';
			$this->p_column_definitions['insurance_group.name']['type'] = 'varchar';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
			$this->p_column_definitions['insurance_price.validfrom']['type'] = 'date';
			$this->p_column_definitions['insurance_price.price']['type'] = 'money';
			$this->p_column_definitions['insurance_price.onlyfornewprescriptions']['type'] = 'bool';
			$this->p_column_definitions['insurance_district.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
