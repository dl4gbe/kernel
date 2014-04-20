<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_address_0954a127_afd7_48f8_8b11_745217a6fe0d extends cls_table_view_base 
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
		$common_address = cls_table_factory::get_common_address();
		$array_address =  $common_address->get_addresss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_country($array_address);
		$data_array_id_country = $this->fill_distinct_id_country($where);

		$where = $this->get_distinct_ids_id_address_type($array_address);
		$data_array_id_address_type = $this->fill_distinct_id_address_type($where);

		$result_array = array();
		foreach($array_address as $address)
			{
			$address_id = $address->get_id();
			$result_array[$address_id]['address.id'] = $address->get_id();
			$result_array[$address_id]['address.id_data'] = $address->get_id_data();
			$result_array[$address_id]['address.address1'] = $address->get_address1();
			$result_array[$address_id]['address.address2'] = $address->get_address2();
			$result_array[$address_id]['address.zip'] = $address->get_zip();
			$result_array[$address_id]['address.city'] = $address->get_city();
			$link_id = $address->get_id_country();
			if (empty($link_id))
				{
				$result_array[$address_id]['country.name'] = '';
				}
			else
				{
				$result_array[$address_id]['country.name'] = $data_array_id_country[$link_id]->get_name();
				}
			$result_array[$address_id]['address.main'] = $address->get_main();
			$link_id = $address->get_id_address_type();
			if (empty($link_id))
				{
				$result_array[$address_id]['address_type.name'] = '';
				}
			else
				{
				$result_array[$address_id]['address_type.name'] = $data_array_id_address_type[$link_id]->get_name();
				}
			$result_array[$address_id]['address.lat'] = $address->get_lat();
			$result_array[$address_id]['address.lon'] = $address->get_lon();
			$result_array[$address_id]['address.open_geo_db_id'] = $address->get_open_geo_db_id();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_country($array_address)
	{
		$ids = array();
		foreach ($array_address as $address)
		{
			$id = $address->get_id_country();
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

	private function fill_distinct_id_country($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "country.id",country.name as "country.name" from country where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$country = cls_table_factory::create_instance('country');
			$country->fill($row);
			$data[$row['country.id']] = $country;
		}
		return $data;
	}

	private function get_distinct_ids_id_address_type($array_address)
	{
		$ids = array();
		foreach ($array_address as $address)
		{
			$id = $address->get_id_address_type();
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

	private function fill_distinct_id_address_type($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "address_type.id",address_type.name as "address_type.name" from address_type where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$address_type = cls_table_factory::create_instance('address_type');
			$address_type->fill($row);
			$data[$row['address_type.id']] = $address_type;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['address.id']['type'] = 'uuid';
			$this->p_column_definitions['address.id_data']['type'] = 'uuid';
			$this->p_column_definitions['address.address1']['type'] = 'varchar';
			$this->p_column_definitions['address.address2']['type'] = 'varchar';
			$this->p_column_definitions['address.zip']['type'] = 'varchar';
			$this->p_column_definitions['address.city']['type'] = 'varchar';
			$this->p_column_definitions['country.name']['type'] = 'varchar';
			$this->p_column_definitions['address.main']['type'] = 'bool';
			$this->p_column_definitions['address_type.name']['type'] = 'varchar';
			$this->p_column_definitions['address.lat']['type'] = 'float8';
			$this->p_column_definitions['address.lon']['type'] = 'float8';
			$this->p_column_definitions['address.open_geo_db_id']['type'] = 'int4';
		}
		return $this->p_column_definitions;
	}
}
?>
