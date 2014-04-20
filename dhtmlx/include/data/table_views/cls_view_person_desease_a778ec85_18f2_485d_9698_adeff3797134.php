<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_person_desease_a778ec85_18f2_485d_9698_adeff3797134 extends cls_table_view_base 
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
		$common_person_desease = cls_table_factory::get_common_person_desease();
		$array_person_desease =  $common_person_desease->get_person_deseases($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person($array_person_desease);
		$data_array_id_person = $this->fill_distinct_id_person($where);

		$where = $this->get_distinct_ids_id_desease($array_person_desease);
		$data_array_id_desease = $this->fill_distinct_id_desease($where);

		$where = $this->get_distinct_ids_id_offer_event($array_person_desease);
		$data_array_id_offer_event = $this->fill_distinct_id_offer_event($where);

		$where = $this->get_distinct_ids_id_person_employee($array_person_desease);
		$data_array_id_person_employee = $this->fill_distinct_id_person_employee($where);

		$result_array = array();
		foreach($array_person_desease as $person_desease)
			{
			$person_desease_id = $person_desease->get_id();
			$result_array[$person_desease_id]['person_desease.id'] = $person_desease->get_id();
			$link_id = $person_desease->get_id_person();
			if (empty($link_id))
				{
				$result_array[$person_desease_id]['person.name'] = '';
				}
			else
				{
				$result_array[$person_desease_id]['person.name'] = $data_array_id_person[$link_id]->get_name();
				}
			$link_id = $person_desease->get_id_desease();
			if (empty($link_id))
				{
				$result_array[$person_desease_id]['desease.name'] = '';
				}
			else
				{
				$result_array[$person_desease_id]['desease.name'] = $data_array_id_desease[$link_id]->get_name();
				}
			$link_id = $person_desease->get_id_offer_event();
			if (empty($link_id))
				{
				$result_array[$person_desease_id]['offer_event.data1'] = '';
				}
			else
				{
				$result_array[$person_desease_id]['offer_event.data1'] = $data_array_id_offer_event[$link_id]->get_data1();
				}
			$link_id = $person_desease->get_id_offer_event();
			if (empty($link_id))
				{
				$result_array[$person_desease_id]['offer_event.data2'] = '';
				}
			else
				{
				$result_array[$person_desease_id]['offer_event.data2'] = $data_array_id_offer_event[$link_id]->get_data2();
				}
			$result_array[$person_desease_id]['person_desease.state'] = $person_desease->get_state();
			$link_id = $person_desease->get_id_person_employee();
			if (empty($link_id))
				{
				$result_array[$person_desease_id]['person.name'] = '';
				}
			else
				{
				$result_array[$person_desease_id]['person.name'] = $data_array_id_person_employee[$link_id]->get_name();
				}
			$result_array[$person_desease_id]['person_desease.issuedate'] = $person_desease->get_issuedate();
			$result_array[$person_desease_id]['person_desease.quarter'] = $person_desease->get_quarter();
			$result_array[$person_desease_id]['person_desease.remark'] = $person_desease->get_remark();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person($array_person_desease)
	{
		$ids = array();
		foreach ($array_person_desease as $person_desease)
		{
			$id = $person_desease->get_id_person();
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

	private function get_distinct_ids_id_desease($array_person_desease)
	{
		$ids = array();
		foreach ($array_person_desease as $person_desease)
		{
			$id = $person_desease->get_id_desease();
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

	private function fill_distinct_id_desease($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "desease.id",desease.name as "desease.name" from desease where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$desease = cls_table_factory::create_instance('desease');
			$desease->fill($row);
			$data[$row['desease.id']] = $desease;
		}
		return $data;
	}

	private function get_distinct_ids_id_offer_event($array_person_desease)
	{
		$ids = array();
		foreach ($array_person_desease as $person_desease)
		{
			$id = $person_desease->get_id_offer_event();
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

	private function fill_distinct_id_offer_event($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "offer_event.id",offer_event.data1 as "offer_event.data1",offer_event.data2 as "offer_event.data2" from offer_event where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$offer_event = cls_table_factory::create_instance('offer_event');
			$offer_event->fill($row);
			$data[$row['offer_event.id']] = $offer_event;
		}
		return $data;
	}

	private function get_distinct_ids_id_person_employee($array_person_desease)
	{
		$ids = array();
		foreach ($array_person_desease as $person_desease)
		{
			$id = $person_desease->get_id_person_employee();
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

	private function fill_distinct_id_person_employee($where)
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
			$this->p_column_definitions['person_desease.id']['type'] = 'uuid';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['desease.name']['type'] = 'varchar';
			$this->p_column_definitions['offer_event.data1']['type'] = 'varchar';
			$this->p_column_definitions['offer_event.data2']['type'] = 'varchar';
			$this->p_column_definitions['person_desease.state']['type'] = 'bpchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['person_desease.issuedate']['type'] = 'timestamptz';
			$this->p_column_definitions['person_desease.quarter']['type'] = 'bpchar';
			$this->p_column_definitions['person_desease.remark']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
