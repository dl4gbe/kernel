<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_supplier_price_724be5f8_da08_44f4_be4b_76f35d7da390 extends cls_table_view_base 
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
		$common_supplier_price = cls_table_factory::get_common_supplier_price();
		$array_supplier_price =  $common_supplier_price->get_supplier_prices($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_supplier_data($array_supplier_price);
		$data_array_id_supplier_data = $this->fill_distinct_id_supplier_data($where);

		$result_array = array();
		foreach($array_supplier_price as $supplier_price)
			{
			$supplier_price_id = $supplier_price->get_id();
			$result_array[$supplier_price_id]['supplier_price.id'] = $supplier_price->get_id();
			$link_id = $supplier_price->get_id_supplier_data();
			if (empty($link_id))
				{
				$result_array[$supplier_price_id]['supplier_data.name'] = '';
				}
			else
				{
				$result_array[$supplier_price_id]['supplier_data.name'] = $data_array_id_supplier_data[$link_id]->get_name();
				}
			$result_array[$supplier_price_id]['supplier_price.qty'] = $supplier_price->get_qty();
			$result_array[$supplier_price_id]['supplier_price.price'] = $supplier_price->get_price();
			$result_array[$supplier_price_id]['supplier_price.valid_from'] = $supplier_price->get_valid_from();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_supplier_data($array_supplier_price)
	{
		$ids = array();
		foreach ($array_supplier_price as $supplier_price)
		{
			$id = $supplier_price->get_id_supplier_data();
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

	private function fill_distinct_id_supplier_data($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "supplier_data.id",supplier_data.name as "supplier_data.name" from supplier_data where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$supplier_data = cls_table_factory::create_instance('supplier_data');
			$supplier_data->fill($row);
			$data[$row['supplier_data.id']] = $supplier_data;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['supplier_price.id']['type'] = 'uuid';
			$this->p_column_definitions['supplier_data.name']['type'] = 'varchar';
			$this->p_column_definitions['supplier_price.qty']['type'] = 'int4';
			$this->p_column_definitions['supplier_price.price']['type'] = 'money';
			$this->p_column_definitions['supplier_price.valid_from']['type'] = 'date';
		}
		return $this->p_column_definitions;
	}
}
?>
