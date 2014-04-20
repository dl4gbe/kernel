<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_prescription_21536465_f331_4794_8964_ddc636df6841 extends cls_table_view_base 
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
		$common_prescription = cls_table_factory::get_common_prescription();
		$array_prescription =  $common_prescription->get_prescriptions($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person($array_prescription);
		$data_array_id_person = $this->fill_distinct_id_person($where);

		$where = $this->get_distinct_ids_id_insurance($array_prescription);
		$data_array_id_insurance = $this->fill_distinct_id_insurance($where);

		$where = $this->get_distinct_ids_id_prescription_type($array_prescription);
		$data_array_id_prescription_type = $this->fill_distinct_id_prescription_type($where);

		$where = $this->get_distinct_ids_id_sport($array_prescription);
		$data_array_id_sport = $this->fill_distinct_id_sport($where);

		$result_array = array();
		foreach($array_prescription as $prescription)
			{
			$prescription_id = $prescription->get_id();
			$result_array[$prescription_id]['prescription.id'] = $prescription->get_id();
			$link_id = $prescription->get_id_person();
			if (empty($link_id))
				{
				$result_array[$prescription_id]['person.name'] = '';
				}
			else
				{
				$result_array[$prescription_id]['person.name'] = $data_array_id_person[$link_id]->get_name();
				}
			$result_array[$prescription_id]['prescription.ik'] = $prescription->get_ik();
			$result_array[$prescription_id]['prescription.insurance_name'] = $prescription->get_insurance_name();
			$link_id = $prescription->get_id_insurance();
			if (empty($link_id))
				{
				$result_array[$prescription_id]['insurance.name'] = '';
				}
			else
				{
				$result_array[$prescription_id]['insurance.name'] = $data_array_id_insurance[$link_id]->get_name();
				}
			$result_array[$prescription_id]['prescription.memberno'] = $prescription->get_memberno();
			$result_array[$prescription_id]['prescription.memberstate'] = $prescription->get_memberstate();
			$result_array[$prescription_id]['prescription.positionnumber1'] = $prescription->get_positionnumber1();
			$result_array[$prescription_id]['prescription.positionsnumber2'] = $prescription->get_positionsnumber2();
			$result_array[$prescription_id]['prescription.maxunits_applied'] = $prescription->get_maxunits_applied();
			$result_array[$prescription_id]['prescription.maxunitsperweek_applied'] = $prescription->get_maxunitsperweek_applied();
			$result_array[$prescription_id]['prescription.maxmonths_applied'] = $prescription->get_maxmonths_applied();
			$result_array[$prescription_id]['prescription.maxunits_issued'] = $prescription->get_maxunits_issued();
			$result_array[$prescription_id]['prescription.maxunitsperweek_issued'] = $prescription->get_maxunitsperweek_issued();
			$result_array[$prescription_id]['prescription.maxmonths_issued'] = $prescription->get_maxmonths_issued();
			$result_array[$prescription_id]['prescription.lanr'] = $prescription->get_lanr();
			$result_array[$prescription_id]['prescription.betrno'] = $prescription->get_betrno();
			$result_array[$prescription_id]['prescription.validfrom'] = $prescription->get_validfrom();
			$result_array[$prescription_id]['prescription.validtil'] = $prescription->get_validtil();
			$result_array[$prescription_id]['prescription.insurance_approval_date'] = $prescription->get_insurance_approval_date();
			$result_array[$prescription_id]['prescription.physician_applicatiom_date'] = $prescription->get_physician_applicatiom_date();
			$result_array[$prescription_id]['prescription.patient_signature_date'] = $prescription->get_patient_signature_date();
			$result_array[$prescription_id]['prescription.startdate'] = $prescription->get_startdate();
			$result_array[$prescription_id]['prescription.issuedate'] = $prescription->get_issuedate();
			$link_id = $prescription->get_id_prescription_type();
			if (empty($link_id))
				{
				$result_array[$prescription_id]['prescription_type.name'] = '';
				}
			else
				{
				$result_array[$prescription_id]['prescription_type.name'] = $data_array_id_prescription_type[$link_id]->get_name();
				}
			$result_array[$prescription_id]['prescription.diagnosis'] = $prescription->get_diagnosis();
			$result_array[$prescription_id]['prescription.damage'] = $prescription->get_damage();
			$result_array[$prescription_id]['prescription.goal'] = $prescription->get_goal();
			$link_id = $prescription->get_id_sport();
			if (empty($link_id))
				{
				$result_array[$prescription_id]['sport.name'] = '';
				}
			else
				{
				$result_array[$prescription_id]['sport.name'] = $data_array_id_sport[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person($array_prescription)
	{
		$ids = array();
		foreach ($array_prescription as $prescription)
		{
			$id = $prescription->get_id_person();
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

	private function get_distinct_ids_id_insurance($array_prescription)
	{
		$ids = array();
		foreach ($array_prescription as $prescription)
		{
			$id = $prescription->get_id_insurance();
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

	private function fill_distinct_id_insurance($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "insurance.id",insurance.name as "insurance.name" from insurance where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$insurance = cls_table_factory::create_instance('insurance');
			$insurance->fill($row);
			$data[$row['insurance.id']] = $insurance;
		}
		return $data;
	}

	private function get_distinct_ids_id_prescription_type($array_prescription)
	{
		$ids = array();
		foreach ($array_prescription as $prescription)
		{
			$id = $prescription->get_id_prescription_type();
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

	private function fill_distinct_id_prescription_type($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "prescription_type.id",prescription_type.name as "prescription_type.name" from prescription_type where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$prescription_type = cls_table_factory::create_instance('prescription_type');
			$prescription_type->fill($row);
			$data[$row['prescription_type.id']] = $prescription_type;
		}
		return $data;
	}

	private function get_distinct_ids_id_sport($array_prescription)
	{
		$ids = array();
		foreach ($array_prescription as $prescription)
		{
			$id = $prescription->get_id_sport();
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

	private function fill_distinct_id_sport($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "sport.id",sport.name as "sport.name" from sport where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$sport = cls_table_factory::create_instance('sport');
			$sport->fill($row);
			$data[$row['sport.id']] = $sport;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['prescription.id']['type'] = 'uuid';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['prescription.ik']['type'] = 'varchar';
			$this->p_column_definitions['prescription.insurance_name']['type'] = 'varchar';
			$this->p_column_definitions['insurance.name']['type'] = 'varchar';
			$this->p_column_definitions['prescription.memberno']['type'] = 'varchar';
			$this->p_column_definitions['prescription.memberstate']['type'] = 'bpchar';
			$this->p_column_definitions['prescription.positionnumber1']['type'] = 'varchar';
			$this->p_column_definitions['prescription.positionsnumber2']['type'] = 'varchar';
			$this->p_column_definitions['prescription.maxunits_applied']['type'] = 'int4';
			$this->p_column_definitions['prescription.maxunitsperweek_applied']['type'] = 'int4';
			$this->p_column_definitions['prescription.maxmonths_applied']['type'] = 'int4';
			$this->p_column_definitions['prescription.maxunits_issued']['type'] = 'int4';
			$this->p_column_definitions['prescription.maxunitsperweek_issued']['type'] = 'int4';
			$this->p_column_definitions['prescription.maxmonths_issued']['type'] = 'int4';
			$this->p_column_definitions['prescription.lanr']['type'] = 'varchar';
			$this->p_column_definitions['prescription.betrno']['type'] = 'varchar';
			$this->p_column_definitions['prescription.validfrom']['type'] = 'date';
			$this->p_column_definitions['prescription.validtil']['type'] = 'date';
			$this->p_column_definitions['prescription.insurance_approval_date']['type'] = 'date';
			$this->p_column_definitions['prescription.physician_applicatiom_date']['type'] = 'date';
			$this->p_column_definitions['prescription.patient_signature_date']['type'] = 'date';
			$this->p_column_definitions['prescription.startdate']['type'] = 'date';
			$this->p_column_definitions['prescription.issuedate']['type'] = 'date';
			$this->p_column_definitions['prescription_type.name']['type'] = 'varchar';
			$this->p_column_definitions['prescription.diagnosis']['type'] = 'varchar';
			$this->p_column_definitions['prescription.damage']['type'] = 'varchar';
			$this->p_column_definitions['prescription.goal']['type'] = 'varchar';
			$this->p_column_definitions['sport.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
