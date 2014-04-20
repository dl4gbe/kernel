<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_therapy_plan_67394896_a865_49d8_97ff_6ad0402931bc extends cls_table_view_base 
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
		$common_therapy_plan = cls_table_factory::get_common_therapy_plan();
		$array_therapy_plan =  $common_therapy_plan->get_therapy_plans($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_therapy_plan_template($array_therapy_plan);
		$data_array_id_therapy_plan_template = $this->fill_distinct_id_therapy_plan_template($where);

		$where = $this->get_distinct_ids_id_person($array_therapy_plan);
		$data_array_id_person = $this->fill_distinct_id_person($where);

		$where = $this->get_distinct_ids_id_person_employee_created($array_therapy_plan);
		$data_array_id_person_employee_created = $this->fill_distinct_id_person_employee_created($where);

		$result_array = array();
		foreach($array_therapy_plan as $therapy_plan)
			{
			$therapy_plan_id = $therapy_plan->get_id();
			$result_array[$therapy_plan_id]['therapy_plan.id'] = $therapy_plan->get_id();
			$link_id = $therapy_plan->get_id_therapy_plan_template();
			if (empty($link_id))
				{
				$result_array[$therapy_plan_id]['therapy_plan_template.name'] = '';
				}
			else
				{
				$result_array[$therapy_plan_id]['therapy_plan_template.name'] = $data_array_id_therapy_plan_template[$link_id]->get_name();
				}
			$link_id = $therapy_plan->get_id_person();
			if (empty($link_id))
				{
				$result_array[$therapy_plan_id]['person.name'] = '';
				}
			else
				{
				$result_array[$therapy_plan_id]['person.name'] = $data_array_id_person[$link_id]->get_name();
				}
			$link_id = $therapy_plan->get_id_person_employee_created();
			if (empty($link_id))
				{
				$result_array[$therapy_plan_id]['person.name'] = '';
				}
			else
				{
				$result_array[$therapy_plan_id]['person.name'] = $data_array_id_person_employee_created[$link_id]->get_name();
				}
			$result_array[$therapy_plan_id]['therapy_plan.create_date'] = $therapy_plan->get_create_date();
			$result_array[$therapy_plan_id]['therapy_plan.valid_from'] = $therapy_plan->get_valid_from();
			$result_array[$therapy_plan_id]['therapy_plan.valid_til'] = $therapy_plan->get_valid_til();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_therapy_plan_template($array_therapy_plan)
	{
		$ids = array();
		foreach ($array_therapy_plan as $therapy_plan)
		{
			$id = $therapy_plan->get_id_therapy_plan_template();
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

	private function fill_distinct_id_therapy_plan_template($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "therapy_plan_template.id",therapy_plan_template.name as "therapy_plan_template.name" from therapy_plan_template where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$therapy_plan_template = cls_table_factory::create_instance('therapy_plan_template');
			$therapy_plan_template->fill($row);
			$data[$row['therapy_plan_template.id']] = $therapy_plan_template;
		}
		return $data;
	}

	private function get_distinct_ids_id_person($array_therapy_plan)
	{
		$ids = array();
		foreach ($array_therapy_plan as $therapy_plan)
		{
			$id = $therapy_plan->get_id_person();
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

	private function get_distinct_ids_id_person_employee_created($array_therapy_plan)
	{
		$ids = array();
		foreach ($array_therapy_plan as $therapy_plan)
		{
			$id = $therapy_plan->get_id_person_employee_created();
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

	private function fill_distinct_id_person_employee_created($where)
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
			$this->p_column_definitions['therapy_plan.id']['type'] = 'uuid';
			$this->p_column_definitions['therapy_plan_template.name']['type'] = 'varchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['therapy_plan.create_date']['type'] = 'date';
			$this->p_column_definitions['therapy_plan.valid_from']['type'] = 'date';
			$this->p_column_definitions['therapy_plan.valid_til']['type'] = 'date';
		}
		return $this->p_column_definitions;
	}
}
?>
