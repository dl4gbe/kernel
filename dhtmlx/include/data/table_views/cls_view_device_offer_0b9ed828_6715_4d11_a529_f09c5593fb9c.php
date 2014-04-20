<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_device_offer_0b9ed828_6715_4d11_a529_f09c5593fb9c extends cls_table_view_base 
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
		$common_device_offer = cls_table_factory::get_common_device_offer();
		$array_device_offer =  $common_device_offer->get_device_offers($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_device($array_device_offer);
		$data_array_id_device = $this->fill_distinct_id_device($where);

		$where = $this->get_distinct_ids_id_offer($array_device_offer);
		$data_array_id_offer = $this->fill_distinct_id_offer($where);

		$result_array = array();
		foreach($array_device_offer as $device_offer)
			{
			$device_offer_id = $device_offer->get_id();
			$result_array[$device_offer_id]['device_offer.id'] = $device_offer->get_id();
			$link_id = $device_offer->get_id_device();
			if (empty($link_id))
				{
				$result_array[$device_offer_id]['device.name'] = '';
				}
			else
				{
				$result_array[$device_offer_id]['device.name'] = $data_array_id_device[$link_id]->get_name();
				}
			$link_id = $device_offer->get_id_offer();
			if (empty($link_id))
				{
				$result_array[$device_offer_id]['offer.name'] = '';
				}
			else
				{
				$result_array[$device_offer_id]['offer.name'] = $data_array_id_offer[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_device($array_device_offer)
	{
		$ids = array();
		foreach ($array_device_offer as $device_offer)
		{
			$id = $device_offer->get_id_device();
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

	private function fill_distinct_id_device($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "device.id",device.name as "device.name" from device where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$device = cls_table_factory::create_instance('device');
			$device->fill($row);
			$data[$row['device.id']] = $device;
		}
		return $data;
	}

	private function get_distinct_ids_id_offer($array_device_offer)
	{
		$ids = array();
		foreach ($array_device_offer as $device_offer)
		{
			$id = $device_offer->get_id_offer();
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

	private function fill_distinct_id_offer($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "offer.id",offer.name as "offer.name" from offer where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$offer = cls_table_factory::create_instance('offer');
			$offer->fill($row);
			$data[$row['offer.id']] = $offer;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['device_offer.id']['type'] = 'uuid';
			$this->p_column_definitions['device.name']['type'] = 'varchar';
			$this->p_column_definitions['offer.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
