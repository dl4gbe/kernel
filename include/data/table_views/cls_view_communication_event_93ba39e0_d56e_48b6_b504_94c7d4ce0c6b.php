<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_communication_event_93ba39e0_d56e_48b6_b504_94c7d4ce0c6b extends cls_table_view_base 
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
		$common_communication_event = cls_table_factory::get_common_communication_event();
		$array_communication_event =  $common_communication_event->get_communication_events($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_event_type($array_communication_event);
		$data_array_id_event_type = $this->fill_distinct_id_event_type($where);

		$where = $this->get_distinct_ids_id_person($array_communication_event);
		$data_array_id_person = $this->fill_distinct_id_person($where);

		$where = $this->get_distinct_ids_id_communication($array_communication_event);
		$data_array_id_communication = $this->fill_distinct_id_communication($where);

		$where = $this->get_distinct_ids_id_person_employee_planned($array_communication_event);
		$data_array_id_person_employee_planned = $this->fill_distinct_id_person_employee_planned($where);

		$where = $this->get_distinct_ids_id_person_employee_done($array_communication_event);
		$data_array_id_person_employee_done = $this->fill_distinct_id_person_employee_done($where);

		$where = $this->get_distinct_ids_id_communication_event_previous($array_communication_event);
		$data_array_id_communication_event_previous = $this->fill_distinct_id_communication_event_previous($where);

		$result_array = array();
		foreach($array_communication_event as $communication_event)
			{
			$communication_event_id = $communication_event->get_id();
			$result_array[$communication_event_id]['communication_event.id'] = $communication_event->get_id();
			$link_id = $communication_event->get_id_event_type();
			if (empty($link_id))
				{
				$result_array[$communication_event_id]['event_type.name'] = '';
				}
			else
				{
				$result_array[$communication_event_id]['event_type.name'] = $data_array_id_event_type[$link_id]->get_name();
				}
			$link_id = $communication_event->get_id_person();
			if (empty($link_id))
				{
				$result_array[$communication_event_id]['person.name'] = '';
				}
			else
				{
				$result_array[$communication_event_id]['person.name'] = $data_array_id_person[$link_id]->get_name();
				}
			$link_id = $communication_event->get_id_communication();
			if (empty($link_id))
				{
				$result_array[$communication_event_id]['communication.value'] = '';
				}
			else
				{
				$result_array[$communication_event_id]['communication.value'] = $data_array_id_communication[$link_id]->get_value();
				}
			$link_id = $communication_event->get_id_person_employee_planned();
			if (empty($link_id))
				{
				$result_array[$communication_event_id]['person.name'] = '';
				}
			else
				{
				$result_array[$communication_event_id]['person.name'] = $data_array_id_person_employee_planned[$link_id]->get_name();
				}
			$result_array[$communication_event_id]['communication_event.plandate'] = $communication_event->get_plandate();
			$link_id = $communication_event->get_id_person_employee_done();
			if (empty($link_id))
				{
				$result_array[$communication_event_id]['person.name'] = '';
				}
			else
				{
				$result_array[$communication_event_id]['person.name'] = $data_array_id_person_employee_done[$link_id]->get_name();
				}
			$result_array[$communication_event_id]['communication_event.donedate'] = $communication_event->get_donedate();
			$result_array[$communication_event_id]['communication_event.remark'] = $communication_event->get_remark();
			$link_id = $communication_event->get_id_communication_event_previous();
			if (empty($link_id))
				{
				$result_array[$communication_event_id]['communication.value'] = '';
				}
			else
				{
				$result_array[$communication_event_id]['communication.value'] = $data_array_id_communication_event_previous[$link_id]->get_value();
				}
			$result_array[$communication_event_id]['communication_event.state'] = $communication_event->get_state();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_event_type($array_communication_event)
	{
		$ids = array();
		foreach ($array_communication_event as $communication_event)
		{
			$id = $communication_event->get_id_event_type();
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

	private function get_distinct_ids_id_person($array_communication_event)
	{
		$ids = array();
		foreach ($array_communication_event as $communication_event)
		{
			$id = $communication_event->get_id_person();
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

	private function get_distinct_ids_id_communication($array_communication_event)
	{
		$ids = array();
		foreach ($array_communication_event as $communication_event)
		{
			$id = $communication_event->get_id_communication();
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

	private function fill_distinct_id_communication($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "communication.id",communication.value as "communication.value" from communication where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$communication = cls_table_factory::create_instance('communication');
			$communication->fill($row);
			$data[$row['communication.id']] = $communication;
		}
		return $data;
	}

	private function get_distinct_ids_id_person_employee_planned($array_communication_event)
	{
		$ids = array();
		foreach ($array_communication_event as $communication_event)
		{
			$id = $communication_event->get_id_person_employee_planned();
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

	private function fill_distinct_id_person_employee_planned($where)
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

	private function get_distinct_ids_id_person_employee_done($array_communication_event)
	{
		$ids = array();
		foreach ($array_communication_event as $communication_event)
		{
			$id = $communication_event->get_id_person_employee_done();
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

	private function fill_distinct_id_person_employee_done($where)
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

	private function get_distinct_ids_id_communication_event_previous($array_communication_event)
	{
		$ids = array();
		foreach ($array_communication_event as $communication_event)
		{
			$id = $communication_event->get_id_communication_event_previous();
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

	private function fill_distinct_id_communication_event_previous($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "communication.id",communication.value as "communication.value" from communication where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$communication = cls_table_factory::create_instance('communication');
			$communication->fill($row);
			$data[$row['communication.id']] = $communication;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['communication_event.id']['type'] = 'uuid';
			$this->p_column_definitions['event_type.name']['type'] = 'varchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['communication.value']['type'] = 'varchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['communication_event.plandate']['type'] = 'timestamptz';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['communication_event.donedate']['type'] = 'timestamptz';
			$this->p_column_definitions['communication_event.remark']['type'] = 'text';
			$this->p_column_definitions['communication.value']['type'] = 'varchar';
			$this->p_column_definitions['communication_event.state']['type'] = 'bpchar';
		}
		return $this->p_column_definitions;
	}
}
?>
