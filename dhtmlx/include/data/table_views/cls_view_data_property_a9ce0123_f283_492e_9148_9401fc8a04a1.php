<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_data_property_a9ce0123_f283_492e_9148_9401fc8a04a1 extends cls_table_view_base 
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
		$common_data_property = cls_table_factory::get_common_data_property();
		$array_data_property =  $common_data_property->get_data_propertys($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_data_property_type($array_data_property);
		$data_array_id_data_property_type = $this->fill_distinct_id_data_property_type($where);

		$result_array = array();
		foreach($array_data_property as $data_property)
			{
			$data_property_id = $data_property->get_id();
			$result_array[$data_property_id]['data_property.id'] = $data_property->get_id();
			$result_array[$data_property_id]['data_property.id_data'] = $data_property->get_id_data();
			$result_array[$data_property_id]['data_property.value'] = $data_property->get_value();
			$link_id = $data_property->get_id_data_property_type();
			if (empty($link_id))
				{
				$result_array[$data_property_id]['data_property_type.name'] = '';
				}
			else
				{
				$result_array[$data_property_id]['data_property_type.name'] = $data_array_id_data_property_type[$link_id]->get_name();
				}
			$result_array[$data_property_id]['data_property.id_link_data'] = $data_property->get_id_link_data();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_data_property_type($array_data_property)
	{
		$ids = array();
		foreach ($array_data_property as $data_property)
		{
			$id = $data_property->get_id_data_property_type();
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

	private function fill_distinct_id_data_property_type($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "data_property_type.id",data_property_type.name as "data_property_type.name" from data_property_type where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$data_property_type = cls_table_factory::create_instance('data_property_type');
			$data_property_type->fill($row);
			$data[$row['data_property_type.id']] = $data_property_type;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['data_property.id']['type'] = 'uuid';
			$this->p_column_definitions['data_property.id_data']['type'] = 'uuid';
			$this->p_column_definitions['data_property.value']['type'] = '_varchar';
			$this->p_column_definitions['data_property_type.name']['type'] = 'varchar';
			$this->p_column_definitions['data_property.id_link_data']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
