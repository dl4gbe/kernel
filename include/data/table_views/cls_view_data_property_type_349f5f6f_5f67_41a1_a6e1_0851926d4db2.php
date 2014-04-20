<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_data_property_type_349f5f6f_5f67_41a1_a6e1_0851926d4db2 extends cls_table_view_base 
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
		$common_data_property_type = cls_table_factory::get_common_data_property_type();
		$array_data_property_type =  $common_data_property_type->get_data_property_types($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person_states($array_data_property_type);
		$data_array_id_person_states = $this->fill_distinct_id_person_states($where);

		$result_array = array();
		foreach($array_data_property_type as $data_property_type)
			{
			$data_property_type_id = $data_property_type->get_id();
			$result_array[$data_property_type_id]['data_property_type.id'] = $data_property_type->get_id();
			$result_array[$data_property_type_id]['data_property_type.tablename'] = $data_property_type->get_tablename();
			$result_array[$data_property_type_id]['data_property_type.name'] = $data_property_type->get_name();
			$result_array[$data_property_type_id]['data_property_type.datatype'] = $data_property_type->get_datatype();
			$link_id = $data_property_type->get_id_person_states();
			if (empty($link_id))
				{
				$result_array[$data_property_type_id]['person.name'] = '';
				}
			else
				{
				$result_array[$data_property_type_id]['person.name'] = $data_array_id_person_states[$link_id]->get_name();
				}
			$result_array[$data_property_type_id]['data_property_type.defaultvalue'] = $data_property_type->get_defaultvalue();
			$result_array[$data_property_type_id]['data_property_type.active'] = $data_property_type->get_active();
			$result_array[$data_property_type_id]['data_property_type.lookuptablename'] = $data_property_type->get_lookuptablename();
			$result_array[$data_property_type_id]['data_property_type.lookuptable_idfield'] = $data_property_type->get_lookuptable_idfield();
			$result_array[$data_property_type_id]['data_property_type.lookuptable_namefield1'] = $data_property_type->get_lookuptable_namefield1();
			$result_array[$data_property_type_id]['data_property_type.lookuptable_namefield2'] = $data_property_type->get_lookuptable_namefield2();
			$result_array[$data_property_type_id]['data_property_type.lookuptable_namefield3'] = $data_property_type->get_lookuptable_namefield3();
			$result_array[$data_property_type_id]['data_property_type.lookuptable_namefield4'] = $data_property_type->get_lookuptable_namefield4();
			$result_array[$data_property_type_id]['data_property_type.lookuptable_namefield5'] = $data_property_type->get_lookuptable_namefield5();
			$result_array[$data_property_type_id]['data_property_type.lookuptable_wherecondition'] = $data_property_type->get_lookuptable_wherecondition();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person_states($array_data_property_type)
	{
		$ids = array();
		foreach ($array_data_property_type as $data_property_type)
		{
			$id = $data_property_type->get_id_person_states();
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

	private function fill_distinct_id_person_states($where)
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
			$this->p_column_definitions['data_property_type.id']['type'] = 'uuid';
			$this->p_column_definitions['data_property_type.tablename']['type'] = 'varchar';
			$this->p_column_definitions['data_property_type.name']['type'] = 'varchar';
			$this->p_column_definitions['data_property_type.datatype']['type'] = 'bpchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['data_property_type.defaultvalue']['type'] = 'varchar';
			$this->p_column_definitions['data_property_type.active']['type'] = 'bool';
			$this->p_column_definitions['data_property_type.lookuptablename']['type'] = 'varchar';
			$this->p_column_definitions['data_property_type.lookuptable_idfield']['type'] = 'varchar';
			$this->p_column_definitions['data_property_type.lookuptable_namefield1']['type'] = 'varchar';
			$this->p_column_definitions['data_property_type.lookuptable_namefield2']['type'] = 'varchar';
			$this->p_column_definitions['data_property_type.lookuptable_namefield3']['type'] = 'varchar';
			$this->p_column_definitions['data_property_type.lookuptable_namefield4']['type'] = 'varchar';
			$this->p_column_definitions['data_property_type.lookuptable_namefield5']['type'] = 'varchar';
			$this->p_column_definitions['data_property_type.lookuptable_wherecondition']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
