<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_data_property_type_val_78fd3a5d_203e_4043_b52d_0555fcace4a6 extends cls_table_view_base 
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
		$common_data_property_type_val = cls_table_factory::get_common_data_property_type_val();
		$array_data_property_type_val =  $common_data_property_type_val->get_data_property_type_vals($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_data_property_type($array_data_property_type_val);
		$data_array_id_data_property_type = $this->fill_distinct_id_data_property_type($where);

		$result_array = array();
		foreach($array_data_property_type_val as $data_property_type_val)
			{
			$data_property_type_val_id = $data_property_type_val->get_id();
			$result_array[$data_property_type_val_id]['data_property_type_val.id'] = $data_property_type_val->get_id();
			$link_id = $data_property_type_val->get_id_data_property_type();
			if (empty($link_id))
				{
				$result_array[$data_property_type_val_id]['data_property_type.name'] = '';
				}
			else
				{
				$result_array[$data_property_type_val_id]['data_property_type.name'] = $data_array_id_data_property_type[$link_id]->get_name();
				}
			$result_array[$data_property_type_val_id]['data_property_type_val.value'] = $data_property_type_val->get_value();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_data_property_type($array_data_property_type_val)
	{
		$ids = array();
		foreach ($array_data_property_type_val as $data_property_type_val)
		{
			$id = $data_property_type_val->get_id_data_property_type();
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
			$this->p_column_definitions['data_property_type_val.id']['type'] = 'uuid';
			$this->p_column_definitions['data_property_type.name']['type'] = 'varchar';
			$this->p_column_definitions['data_property_type_val.value']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
