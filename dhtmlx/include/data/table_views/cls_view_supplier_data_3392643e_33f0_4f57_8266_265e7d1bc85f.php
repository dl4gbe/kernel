<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_supplier_data_3392643e_33f0_4f57_8266_265e7d1bc85f extends cls_table_view_base 
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
		$common_supplier_data = cls_table_factory::get_common_supplier_data();
		$array_supplier_data =  $common_supplier_data->get_supplier_datas($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person_supplier($array_supplier_data);
		$data_array_id_person_supplier = $this->fill_distinct_id_person_supplier($where);

		$where = $this->get_distinct_ids_id_person_manufactorer($array_supplier_data);
		$data_array_id_person_manufactorer = $this->fill_distinct_id_person_manufactorer($where);

		$result_array = array();
		foreach($array_supplier_data as $supplier_data)
			{
			$supplier_data_id = $supplier_data->get_id();
			$result_array[$supplier_data_id]['supplier_data.id'] = $supplier_data->get_id();
			$link_id = $supplier_data->get_id_person_supplier();
			if (empty($link_id))
				{
				$result_array[$supplier_data_id]['person.name'] = '';
				}
			else
				{
				$result_array[$supplier_data_id]['person.name'] = $data_array_id_person_supplier[$link_id]->get_name();
				}
			$link_id = $supplier_data->get_id_person_manufactorer();
			if (empty($link_id))
				{
				$result_array[$supplier_data_id]['person.name'] = '';
				}
			else
				{
				$result_array[$supplier_data_id]['person.name'] = $data_array_id_person_manufactorer[$link_id]->get_name();
				}
			$result_array[$supplier_data_id]['supplier_data.id_data'] = $supplier_data->get_id_data();
			$result_array[$supplier_data_id]['supplier_data.orderno'] = $supplier_data->get_orderno();
			$result_array[$supplier_data_id]['supplier_data.name'] = $supplier_data->get_name();
			$result_array[$supplier_data_id]['supplier_data.min_order_qty'] = $supplier_data->get_min_order_qty();
			$result_array[$supplier_data_id]['supplier_data.min_order_days'] = $supplier_data->get_min_order_days();
			$result_array[$supplier_data_id]['supplier_data.remark'] = $supplier_data->get_remark();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person_supplier($array_supplier_data)
	{
		$ids = array();
		foreach ($array_supplier_data as $supplier_data)
		{
			$id = $supplier_data->get_id_person_supplier();
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

	private function fill_distinct_id_person_supplier($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "person.id",person.name as "person.name" from person where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$person = cls_table_factory::create_instance('person');
			$person->fill($row);
			$data[$row['person.id']] = $person;
		}
		return $data;
	}

	private function get_distinct_ids_id_person_manufactorer($array_supplier_data)
	{
		$ids = array();
		foreach ($array_supplier_data as $supplier_data)
		{
			$id = $supplier_data->get_id_person_manufactorer();
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

	private function fill_distinct_id_person_manufactorer($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "person.id",person.name as "person.name" from person where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$person = cls_table_factory::create_instance('person');
			$person->fill($row);
			$data[$row['person.id']] = $person;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['supplier_data.id']['type'] = 'uuid';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['supplier_data.id_data']['type'] = 'uuid';
			$this->p_column_definitions['supplier_data.orderno']['type'] = 'varchar';
			$this->p_column_definitions['supplier_data.name']['type'] = 'varchar';
			$this->p_column_definitions['supplier_data.min_order_qty']['type'] = 'int4';
			$this->p_column_definitions['supplier_data.min_order_days']['type'] = 'int4';
			$this->p_column_definitions['supplier_data.remark']['type'] = 'text';
		}
		return $this->p_column_definitions;
	}
}
?>
