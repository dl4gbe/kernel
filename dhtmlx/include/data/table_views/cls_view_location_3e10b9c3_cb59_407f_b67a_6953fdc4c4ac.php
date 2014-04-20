<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_location_3e10b9c3_cb59_407f_b67a_6953fdc4c4ac extends cls_table_view_base 
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
		$common_location = cls_table_factory::get_common_location();
		$array_location =  $common_location->get_locations($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person($array_location);
		$data_array_id_person = $this->fill_distinct_id_person($where);

		$where = $this->get_distinct_ids_id_chart_of_account($array_location);
		$data_array_id_chart_of_account = $this->fill_distinct_id_chart_of_account($where);

		$where = $this->get_distinct_ids_id_insurance_district($array_location);
		$data_array_id_insurance_district = $this->fill_distinct_id_insurance_district($where);

		$where = $this->get_distinct_ids_id_person_revenue_department($array_location);
		$data_array_id_person_revenue_department = $this->fill_distinct_id_person_revenue_department($where);

		$where = $this->get_distinct_ids_id_person_taxadvisor($array_location);
		$data_array_id_person_taxadvisor = $this->fill_distinct_id_person_taxadvisor($where);

		$where = $this->get_distinct_ids_id_person_laywer($array_location);
		$data_array_id_person_laywer = $this->fill_distinct_id_person_laywer($where);

		$result_array = array();
		foreach($array_location as $location)
			{
			$location_id = $location->get_id();
			$result_array[$location_id]['location.id'] = $location->get_id();
			$link_id = $location->get_id_person();
			if (empty($link_id))
				{
				$result_array[$location_id]['person.name'] = '';
				}
			else
				{
				$result_array[$location_id]['person.name'] = $data_array_id_person[$link_id]->get_name();
				}
			$result_array[$location_id]['location.no'] = $location->get_no();
			$result_array[$location_id]['location.unique_credit_identifier'] = $location->get_unique_credit_identifier();
			$result_array[$location_id]['location.ik'] = $location->get_ik();
			$result_array[$location_id]['location.iscenter'] = $location->get_iscenter();
			$link_id = $location->get_id_chart_of_account();
			if (empty($link_id))
				{
				$result_array[$location_id]['chart_of_account.name'] = '';
				}
			else
				{
				$result_array[$location_id]['chart_of_account.name'] = $data_array_id_chart_of_account[$link_id]->get_name();
				}
			$link_id = $location->get_id_insurance_district();
			if (empty($link_id))
				{
				$result_array[$location_id]['insurance_district.name'] = '';
				}
			else
				{
				$result_array[$location_id]['insurance_district.name'] = $data_array_id_insurance_district[$link_id]->get_name();
				}
			$result_array[$location_id]['location.taxid'] = $location->get_taxid();
			$link_id = $location->get_id_person_revenue_department();
			if (empty($link_id))
				{
				$result_array[$location_id]['person.name'] = '';
				}
			else
				{
				$result_array[$location_id]['person.name'] = $data_array_id_person_revenue_department[$link_id]->get_name();
				}
			$link_id = $location->get_id_person_taxadvisor();
			if (empty($link_id))
				{
				$result_array[$location_id]['person.name'] = '';
				}
			else
				{
				$result_array[$location_id]['person.name'] = $data_array_id_person_taxadvisor[$link_id]->get_name();
				}
			$link_id = $location->get_id_person_laywer();
			if (empty($link_id))
				{
				$result_array[$location_id]['person.name'] = '';
				}
			else
				{
				$result_array[$location_id]['person.name'] = $data_array_id_person_laywer[$link_id]->get_name();
				}
			$result_array[$location_id]['location.sollversteuerung'] = $location->get_sollversteuerung();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person($array_location)
	{
		$ids = array();
		foreach ($array_location as $location)
		{
			$id = $location->get_id_person();
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

	private function get_distinct_ids_id_chart_of_account($array_location)
	{
		$ids = array();
		foreach ($array_location as $location)
		{
			$id = $location->get_id_chart_of_account();
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

	private function fill_distinct_id_chart_of_account($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "chart_of_account.id",chart_of_account.name as "chart_of_account.name" from chart_of_account where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$chart_of_account = cls_table_factory::create_instance('chart_of_account');
			$chart_of_account->fill($row);
			$data[$row['chart_of_account.id']] = $chart_of_account;
		}
		return $data;
	}

	private function get_distinct_ids_id_insurance_district($array_location)
	{
		$ids = array();
		foreach ($array_location as $location)
		{
			$id = $location->get_id_insurance_district();
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

	private function fill_distinct_id_insurance_district($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "insurance_district.id",insurance_district.name as "insurance_district.name" from insurance_district where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$insurance_district = cls_table_factory::create_instance('insurance_district');
			$insurance_district->fill($row);
			$data[$row['insurance_district.id']] = $insurance_district;
		}
		return $data;
	}

	private function get_distinct_ids_id_person_revenue_department($array_location)
	{
		$ids = array();
		foreach ($array_location as $location)
		{
			$id = $location->get_id_person_revenue_department();
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

	private function fill_distinct_id_person_revenue_department($where)
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

	private function get_distinct_ids_id_person_taxadvisor($array_location)
	{
		$ids = array();
		foreach ($array_location as $location)
		{
			$id = $location->get_id_person_taxadvisor();
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

	private function fill_distinct_id_person_taxadvisor($where)
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

	private function get_distinct_ids_id_person_laywer($array_location)
	{
		$ids = array();
		foreach ($array_location as $location)
		{
			$id = $location->get_id_person_laywer();
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

	private function fill_distinct_id_person_laywer($where)
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
			$this->p_column_definitions['location.id']['type'] = 'uuid';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['location.no']['type'] = 'varchar';
			$this->p_column_definitions['location.unique_credit_identifier']['type'] = 'varchar';
			$this->p_column_definitions['location.ik']['type'] = 'varchar';
			$this->p_column_definitions['location.iscenter']['type'] = 'bool';
			$this->p_column_definitions['chart_of_account.name']['type'] = 'varchar';
			$this->p_column_definitions['insurance_district.name']['type'] = 'varchar';
			$this->p_column_definitions['location.taxid']['type'] = 'varchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['location.sollversteuerung']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
