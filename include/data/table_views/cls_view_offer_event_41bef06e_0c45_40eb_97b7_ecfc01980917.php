<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_offer_event_41bef06e_0c45_40eb_97b7_ecfc01980917 extends cls_table_view_base 
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
		$common_offer_event = cls_table_factory::get_common_offer_event();
		$array_offer_event =  $common_offer_event->get_offer_events($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_event_type($array_offer_event);
		$data_array_id_event_type = $this->fill_distinct_id_event_type($where);

		$where = $this->get_distinct_ids_id_offer($array_offer_event);
		$data_array_id_offer = $this->fill_distinct_id_offer($where);

		$where = $this->get_distinct_ids_id_person($array_offer_event);
		$data_array_id_person = $this->fill_distinct_id_person($where);

		$where = $this->get_distinct_ids_id_device($array_offer_event);
		$data_array_id_device = $this->fill_distinct_id_device($where);

		$where = $this->get_distinct_ids_id_posting_header($array_offer_event);
		$data_array_id_posting_header = $this->fill_distinct_id_posting_header($where);

		$result_array = array();
		foreach($array_offer_event as $offer_event)
			{
			$offer_event_id = $offer_event->get_id();
			$result_array[$offer_event_id]['offer_event.id'] = $offer_event->get_id();
			$link_id = $offer_event->get_id_event_type();
			if (empty($link_id))
				{
				$result_array[$offer_event_id]['event_type.name'] = '';
				}
			else
				{
				$result_array[$offer_event_id]['event_type.name'] = $data_array_id_event_type[$link_id]->get_name();
				}
			$link_id = $offer_event->get_id_offer();
			if (empty($link_id))
				{
				$result_array[$offer_event_id]['offer.name'] = '';
				}
			else
				{
				$result_array[$offer_event_id]['offer.name'] = $data_array_id_offer[$link_id]->get_name();
				}
			$link_id = $offer_event->get_id_person();
			if (empty($link_id))
				{
				$result_array[$offer_event_id]['person.name'] = '';
				}
			else
				{
				$result_array[$offer_event_id]['person.name'] = $data_array_id_person[$link_id]->get_name();
				}
			$result_array[$offer_event_id]['offer_event.id_data'] = $offer_event->get_id_data();
			$result_array[$offer_event_id]['offer_event.datefrom'] = $offer_event->get_datefrom();
			$result_array[$offer_event_id]['offer_event.datetil'] = $offer_event->get_datetil();
			$result_array[$offer_event_id]['offer_event.data1'] = $offer_event->get_data1();
			$result_array[$offer_event_id]['offer_event.data2'] = $offer_event->get_data2();
			$link_id = $offer_event->get_id_device();
			if (empty($link_id))
				{
				$result_array[$offer_event_id]['device.name'] = '';
				}
			else
				{
				$result_array[$offer_event_id]['device.name'] = $data_array_id_device[$link_id]->get_name();
				}
			$link_id = $offer_event->get_id_posting_header();
			if (empty($link_id))
				{
				$result_array[$offer_event_id]['posting_header.remark'] = '';
				}
			else
				{
				$result_array[$offer_event_id]['posting_header.remark'] = $data_array_id_posting_header[$link_id]->get_remark();
				}
			$link_id = $offer_event->get_id_posting_header();
			if (empty($link_id))
				{
				$result_array[$offer_event_id]['posting_header.systemremark'] = '';
				}
			else
				{
				$result_array[$offer_event_id]['posting_header.systemremark'] = $data_array_id_posting_header[$link_id]->get_systemremark();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_event_type($array_offer_event)
	{
		$ids = array();
		foreach ($array_offer_event as $offer_event)
		{
			$id = $offer_event->get_id_event_type();
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

	private function fill_distinct_id_event_type($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "event_type.id",event_type.name as "event_type.name" from event_type where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$event_type = cls_table_factory::create_instance('event_type');
			$event_type->fill($row);
			$data[$row['event_type.id']] = $event_type;
		}
		return $data;
	}

	private function get_distinct_ids_id_offer($array_offer_event)
	{
		$ids = array();
		foreach ($array_offer_event as $offer_event)
		{
			$id = $offer_event->get_id_offer();
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

	private function get_distinct_ids_id_person($array_offer_event)
	{
		$ids = array();
		foreach ($array_offer_event as $offer_event)
		{
			$id = $offer_event->get_id_person();
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

	private function fill_distinct_id_person($where)
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

	private function get_distinct_ids_id_device($array_offer_event)
	{
		$ids = array();
		foreach ($array_offer_event as $offer_event)
		{
			$id = $offer_event->get_id_device();
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

	private function get_distinct_ids_id_posting_header($array_offer_event)
	{
		$ids = array();
		foreach ($array_offer_event as $offer_event)
		{
			$id = $offer_event->get_id_posting_header();
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

	private function fill_distinct_id_posting_header($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "posting_header.id",posting_header.remark as "posting_header.remark",posting_header.systemremark as "posting_header.systemremark" from posting_header where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$posting_header = cls_table_factory::create_instance('posting_header');
			$posting_header->fill($row);
			$data[$row['posting_header.id']] = $posting_header;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['offer_event.id']['type'] = 'uuid';
			$this->p_column_definitions['event_type.name']['type'] = 'varchar';
			$this->p_column_definitions['offer.name']['type'] = 'varchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['offer_event.id_data']['type'] = 'uuid';
			$this->p_column_definitions['offer_event.datefrom']['type'] = 'timestamptz';
			$this->p_column_definitions['offer_event.datetil']['type'] = 'timestamptz';
			$this->p_column_definitions['offer_event.data1']['type'] = 'varchar';
			$this->p_column_definitions['offer_event.data2']['type'] = 'varchar';
			$this->p_column_definitions['device.name']['type'] = 'varchar';
			$this->p_column_definitions['posting_header.remark']['type'] = 'varchar';
			$this->p_column_definitions['posting_header.systemremark']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
