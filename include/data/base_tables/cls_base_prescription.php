<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_prescription extends cls_datatable_base
{
private static $p_cmmon;
private $p_id_sport = null;
private $p_id_sport_original = null;
private $p_goal = null;
private $p_goal_original = null;
private $p_damage = null;
private $p_damage_original = null;
private $p_diagnosis = null;
private $p_diagnosis_original = null;
private $p_id_prescription_type = null;
private $p_id_prescription_type_original = null;
private $p_issuedate = null;
private $p_issuedate_original = null;
private $p_startdate = null;
private $p_startdate_original = null;
private $p_patient_signature_date = null;
private $p_patient_signature_date_original = null;
private $p_physician_applicatiom_date = null;
private $p_physician_applicatiom_date_original = null;
private $p_insurance_approval_date = null;
private $p_insurance_approval_date_original = null;
private $p_validtil = null;
private $p_validtil_original = null;
private $p_validfrom = null;
private $p_validfrom_original = null;
private $p_betrno = null;
private $p_betrno_original = null;
private $p_lanr = null;
private $p_lanr_original = null;
private $p_maxmonths_issued = null;
private $p_maxmonths_issued_original = null;
private $p_maxunitsperweek_issued = null;
private $p_maxunitsperweek_issued_original = null;
private $p_maxunits_issued = null;
private $p_maxunits_issued_original = null;
private $p_maxmonths_applied = null;
private $p_maxmonths_applied_original = null;
private $p_maxunitsperweek_applied = null;
private $p_maxunitsperweek_applied_original = null;
private $p_maxunits_applied = null;
private $p_maxunits_applied_original = null;
private $p_positionsnumber2 = null;
private $p_positionsnumber2_original = null;
private $p_positionnumber1 = null;
private $p_positionnumber1_original = null;
private $p_memberstate = null;
private $p_memberstate_original = null;
private $p_memberno = null;
private $p_memberno_original = null;
private $p_id_insurance = null;
private $p_id_insurance_original = null;
private $p_insurance_name = null;
private $p_insurance_name_original = null;
private $p_ik = null;
private $p_ik_original = null;
private $p_id_person = null;
private $p_id_person_original = null;

private $p_id_sport_is_dirty = false;
private $p_goal_is_dirty = false;
private $p_damage_is_dirty = false;
private $p_diagnosis_is_dirty = false;
private $p_id_prescription_type_is_dirty = false;
private $p_issuedate_is_dirty = false;
private $p_startdate_is_dirty = false;
private $p_patient_signature_date_is_dirty = false;
private $p_physician_applicatiom_date_is_dirty = false;
private $p_insurance_approval_date_is_dirty = false;
private $p_validtil_is_dirty = false;
private $p_validfrom_is_dirty = false;
private $p_betrno_is_dirty = false;
private $p_lanr_is_dirty = false;
private $p_maxmonths_issued_is_dirty = false;
private $p_maxunitsperweek_issued_is_dirty = false;
private $p_maxunits_issued_is_dirty = false;
private $p_maxmonths_applied_is_dirty = false;
private $p_maxunitsperweek_applied_is_dirty = false;
private $p_maxunits_applied_is_dirty = false;
private $p_positionsnumber2_is_dirty = false;
private $p_positionnumber1_is_dirty = false;
private $p_memberstate_is_dirty = false;
private $p_memberno_is_dirty = false;
private $p_id_insurance_is_dirty = false;
private $p_insurance_name_is_dirty = false;
private $p_ik_is_dirty = false;
private $p_id_person_is_dirty = false;

public function _get_table_name()
{
	return 'prescription';
}

public function get_table_fields()
{
	return array('id_sport','goal','damage','diagnosis','id_prescription_type','issuedate','startdate','patient_signature_date','physician_applicatiom_date','insurance_approval_date','validtil','validfrom','betrno','lanr','maxmonths_issued','maxunitsperweek_issued','maxunits_issued','maxmonths_applied','maxunitsperweek_applied','maxunits_applied','positionsnumber2','positionnumber1','memberstate','memberno','id_insurance','insurance_name','ik','id_person','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select id_sport as ' . $delimiter . 'prescription.id_sport' . $delimiter . ',goal as ' . $delimiter . 'prescription.goal' . $delimiter . ',damage as ' . $delimiter . 'prescription.damage' . $delimiter . ',diagnosis as ' . $delimiter . 'prescription.diagnosis' . $delimiter . ',id_prescription_type as ' . $delimiter . 'prescription.id_prescription_type' . $delimiter . ',issuedate as ' . $delimiter . 'prescription.issuedate' . $delimiter . ',startdate as ' . $delimiter . 'prescription.startdate' . $delimiter . ',patient_signature_date as ' . $delimiter . 'prescription.patient_signature_date' . $delimiter . ',physician_applicatiom_date as ' . $delimiter . 'prescription.physician_applicatiom_date' . $delimiter . ',insurance_approval_date as ' . $delimiter . 'prescription.insurance_approval_date' . $delimiter . ',validtil as ' . $delimiter . 'prescription.validtil' . $delimiter . ',validfrom as ' . $delimiter . 'prescription.validfrom' . $delimiter . ',betrno as ' . $delimiter . 'prescription.betrno' . $delimiter . ',lanr as ' . $delimiter . 'prescription.lanr' . $delimiter . ',maxmonths_issued as ' . $delimiter . 'prescription.maxmonths_issued' . $delimiter . ',maxunitsperweek_issued as ' . $delimiter . 'prescription.maxunitsperweek_issued' . $delimiter . ',maxunits_issued as ' . $delimiter . 'prescription.maxunits_issued' . $delimiter . ',maxmonths_applied as ' . $delimiter . 'prescription.maxmonths_applied' . $delimiter . ',maxunitsperweek_applied as ' . $delimiter . 'prescription.maxunitsperweek_applied' . $delimiter . ',maxunits_applied as ' . $delimiter . 'prescription.maxunits_applied' . $delimiter . ',positionsnumber2 as ' . $delimiter . 'prescription.positionsnumber2' . $delimiter . ',positionnumber1 as ' . $delimiter . 'prescription.positionnumber1' . $delimiter . ',memberstate as ' . $delimiter . 'prescription.memberstate' . $delimiter . ',memberno as ' . $delimiter . 'prescription.memberno' . $delimiter . ',id_insurance as ' . $delimiter . 'prescription.id_insurance' . $delimiter . ',insurance_name as ' . $delimiter . 'prescription.insurance_name' . $delimiter . ',ik as ' . $delimiter . 'prescription.ik' . $delimiter . ',id_person as ' . $delimiter . 'prescription.id_person' . $delimiter . ',id as ' . $delimiter . 'prescription.id' . $delimiter . ' from prescription';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}

public function get_id_sport()
{
	return $this->p_id_sport;
}

public function get_id_sport_original()
{
	return $this->p_id_sport_original;
}

public function set_id_sport($value)
{
	if ($this->p_id_sport === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_sport_is_dirty = true;
	$this->p_id_sport = $value;
}

public function set_id_sport_original($value)
{
	$this->p_id_sport_original = $value;
}

public function get_id_sport_is_dirty()
{
	return $this->p_id_sport_is_dirty;
}


public function get_goal()
{
	return $this->p_goal;
}

public function get_goal_original()
{
	return $this->p_goal_original;
}

public function set_goal($value)
{
	if ($this->p_goal === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_goal_is_dirty = true;
	$this->p_goal = $value;
}

public function set_goal_original($value)
{
	$this->p_goal_original = $value;
}

public function get_goal_is_dirty()
{
	return $this->p_goal_is_dirty;
}


public function get_damage()
{
	return $this->p_damage;
}

public function get_damage_original()
{
	return $this->p_damage_original;
}

public function set_damage($value)
{
	if ($this->p_damage === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_damage_is_dirty = true;
	$this->p_damage = $value;
}

public function set_damage_original($value)
{
	$this->p_damage_original = $value;
}

public function get_damage_is_dirty()
{
	return $this->p_damage_is_dirty;
}


public function get_diagnosis()
{
	return $this->p_diagnosis;
}

public function get_diagnosis_original()
{
	return $this->p_diagnosis_original;
}

public function set_diagnosis($value)
{
	if ($this->p_diagnosis === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_diagnosis_is_dirty = true;
	$this->p_diagnosis = $value;
}

public function set_diagnosis_original($value)
{
	$this->p_diagnosis_original = $value;
}

public function get_diagnosis_is_dirty()
{
	return $this->p_diagnosis_is_dirty;
}


public function get_id_prescription_type()
{
	return $this->p_id_prescription_type;
}

public function get_id_prescription_type_original()
{
	return $this->p_id_prescription_type_original;
}

public function set_id_prescription_type($value)
{
	if ($this->p_id_prescription_type === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_prescription_type_is_dirty = true;
	$this->p_id_prescription_type = $value;
}

public function set_id_prescription_type_original($value)
{
	$this->p_id_prescription_type_original = $value;
}

public function get_id_prescription_type_is_dirty()
{
	return $this->p_id_prescription_type_is_dirty;
}


public function get_issuedate()
{
	return $this->p_issuedate;
}

public function get_issuedate_original()
{
	return $this->p_issuedate_original;
}

public function set_issuedate($value)
{
	if ($this->p_issuedate === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_issuedate_is_dirty = true;
	$this->p_issuedate = $value;
}

public function set_issuedate_original($value)
{
	$this->p_issuedate_original = $value;
}

public function get_issuedate_is_dirty()
{
	return $this->p_issuedate_is_dirty;
}


public function get_startdate()
{
	return $this->p_startdate;
}

public function get_startdate_original()
{
	return $this->p_startdate_original;
}

public function set_startdate($value)
{
	if ($this->p_startdate === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_startdate_is_dirty = true;
	$this->p_startdate = $value;
}

public function set_startdate_original($value)
{
	$this->p_startdate_original = $value;
}

public function get_startdate_is_dirty()
{
	return $this->p_startdate_is_dirty;
}


public function get_patient_signature_date()
{
	return $this->p_patient_signature_date;
}

public function get_patient_signature_date_original()
{
	return $this->p_patient_signature_date_original;
}

public function set_patient_signature_date($value)
{
	if ($this->p_patient_signature_date === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_patient_signature_date_is_dirty = true;
	$this->p_patient_signature_date = $value;
}

public function set_patient_signature_date_original($value)
{
	$this->p_patient_signature_date_original = $value;
}

public function get_patient_signature_date_is_dirty()
{
	return $this->p_patient_signature_date_is_dirty;
}


public function get_physician_applicatiom_date()
{
	return $this->p_physician_applicatiom_date;
}

public function get_physician_applicatiom_date_original()
{
	return $this->p_physician_applicatiom_date_original;
}

public function set_physician_applicatiom_date($value)
{
	if ($this->p_physician_applicatiom_date === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_physician_applicatiom_date_is_dirty = true;
	$this->p_physician_applicatiom_date = $value;
}

public function set_physician_applicatiom_date_original($value)
{
	$this->p_physician_applicatiom_date_original = $value;
}

public function get_physician_applicatiom_date_is_dirty()
{
	return $this->p_physician_applicatiom_date_is_dirty;
}


public function get_insurance_approval_date()
{
	return $this->p_insurance_approval_date;
}

public function get_insurance_approval_date_original()
{
	return $this->p_insurance_approval_date_original;
}

public function set_insurance_approval_date($value)
{
	if ($this->p_insurance_approval_date === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_insurance_approval_date_is_dirty = true;
	$this->p_insurance_approval_date = $value;
}

public function set_insurance_approval_date_original($value)
{
	$this->p_insurance_approval_date_original = $value;
}

public function get_insurance_approval_date_is_dirty()
{
	return $this->p_insurance_approval_date_is_dirty;
}


public function get_validtil()
{
	return $this->p_validtil;
}

public function get_validtil_original()
{
	return $this->p_validtil_original;
}

public function set_validtil($value)
{
	if ($this->p_validtil === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_validtil_is_dirty = true;
	$this->p_validtil = $value;
}

public function set_validtil_original($value)
{
	$this->p_validtil_original = $value;
}

public function get_validtil_is_dirty()
{
	return $this->p_validtil_is_dirty;
}


public function get_validfrom()
{
	return $this->p_validfrom;
}

public function get_validfrom_original()
{
	return $this->p_validfrom_original;
}

public function set_validfrom($value)
{
	if ($this->p_validfrom === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_validfrom_is_dirty = true;
	$this->p_validfrom = $value;
}

public function set_validfrom_original($value)
{
	$this->p_validfrom_original = $value;
}

public function get_validfrom_is_dirty()
{
	return $this->p_validfrom_is_dirty;
}


public function get_betrno()
{
	return $this->p_betrno;
}

public function get_betrno_original()
{
	return $this->p_betrno_original;
}

public function set_betrno($value)
{
	if ($this->p_betrno === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_betrno_is_dirty = true;
	$this->p_betrno = $value;
}

public function set_betrno_original($value)
{
	$this->p_betrno_original = $value;
}

public function get_betrno_is_dirty()
{
	return $this->p_betrno_is_dirty;
}


public function get_lanr()
{
	return $this->p_lanr;
}

public function get_lanr_original()
{
	return $this->p_lanr_original;
}

public function set_lanr($value)
{
	if ($this->p_lanr === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_lanr_is_dirty = true;
	$this->p_lanr = $value;
}

public function set_lanr_original($value)
{
	$this->p_lanr_original = $value;
}

public function get_lanr_is_dirty()
{
	return $this->p_lanr_is_dirty;
}


public function get_maxmonths_issued()
{
	return $this->p_maxmonths_issued;
}

public function get_maxmonths_issued_original()
{
	return $this->p_maxmonths_issued_original;
}

public function set_maxmonths_issued($value)
{
	if ($this->p_maxmonths_issued === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_maxmonths_issued_is_dirty = true;
	$this->p_maxmonths_issued = $value;
}

public function set_maxmonths_issued_original($value)
{
	$this->p_maxmonths_issued_original = $value;
}

public function get_maxmonths_issued_is_dirty()
{
	return $this->p_maxmonths_issued_is_dirty;
}


public function get_maxunitsperweek_issued()
{
	return $this->p_maxunitsperweek_issued;
}

public function get_maxunitsperweek_issued_original()
{
	return $this->p_maxunitsperweek_issued_original;
}

public function set_maxunitsperweek_issued($value)
{
	if ($this->p_maxunitsperweek_issued === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_maxunitsperweek_issued_is_dirty = true;
	$this->p_maxunitsperweek_issued = $value;
}

public function set_maxunitsperweek_issued_original($value)
{
	$this->p_maxunitsperweek_issued_original = $value;
}

public function get_maxunitsperweek_issued_is_dirty()
{
	return $this->p_maxunitsperweek_issued_is_dirty;
}


public function get_maxunits_issued()
{
	return $this->p_maxunits_issued;
}

public function get_maxunits_issued_original()
{
	return $this->p_maxunits_issued_original;
}

public function set_maxunits_issued($value)
{
	if ($this->p_maxunits_issued === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_maxunits_issued_is_dirty = true;
	$this->p_maxunits_issued = $value;
}

public function set_maxunits_issued_original($value)
{
	$this->p_maxunits_issued_original = $value;
}

public function get_maxunits_issued_is_dirty()
{
	return $this->p_maxunits_issued_is_dirty;
}


public function get_maxmonths_applied()
{
	return $this->p_maxmonths_applied;
}

public function get_maxmonths_applied_original()
{
	return $this->p_maxmonths_applied_original;
}

public function set_maxmonths_applied($value)
{
	if ($this->p_maxmonths_applied === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_maxmonths_applied_is_dirty = true;
	$this->p_maxmonths_applied = $value;
}

public function set_maxmonths_applied_original($value)
{
	$this->p_maxmonths_applied_original = $value;
}

public function get_maxmonths_applied_is_dirty()
{
	return $this->p_maxmonths_applied_is_dirty;
}


public function get_maxunitsperweek_applied()
{
	return $this->p_maxunitsperweek_applied;
}

public function get_maxunitsperweek_applied_original()
{
	return $this->p_maxunitsperweek_applied_original;
}

public function set_maxunitsperweek_applied($value)
{
	if ($this->p_maxunitsperweek_applied === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_maxunitsperweek_applied_is_dirty = true;
	$this->p_maxunitsperweek_applied = $value;
}

public function set_maxunitsperweek_applied_original($value)
{
	$this->p_maxunitsperweek_applied_original = $value;
}

public function get_maxunitsperweek_applied_is_dirty()
{
	return $this->p_maxunitsperweek_applied_is_dirty;
}


public function get_maxunits_applied()
{
	return $this->p_maxunits_applied;
}

public function get_maxunits_applied_original()
{
	return $this->p_maxunits_applied_original;
}

public function set_maxunits_applied($value)
{
	if ($this->p_maxunits_applied === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_maxunits_applied_is_dirty = true;
	$this->p_maxunits_applied = $value;
}

public function set_maxunits_applied_original($value)
{
	$this->p_maxunits_applied_original = $value;
}

public function get_maxunits_applied_is_dirty()
{
	return $this->p_maxunits_applied_is_dirty;
}


public function get_positionsnumber2()
{
	return $this->p_positionsnumber2;
}

public function get_positionsnumber2_original()
{
	return $this->p_positionsnumber2_original;
}

public function set_positionsnumber2($value)
{
	if ($this->p_positionsnumber2 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_positionsnumber2_is_dirty = true;
	$this->p_positionsnumber2 = $value;
}

public function set_positionsnumber2_original($value)
{
	$this->p_positionsnumber2_original = $value;
}

public function get_positionsnumber2_is_dirty()
{
	return $this->p_positionsnumber2_is_dirty;
}


public function get_positionnumber1()
{
	return $this->p_positionnumber1;
}

public function get_positionnumber1_original()
{
	return $this->p_positionnumber1_original;
}

public function set_positionnumber1($value)
{
	if ($this->p_positionnumber1 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_positionnumber1_is_dirty = true;
	$this->p_positionnumber1 = $value;
}

public function set_positionnumber1_original($value)
{
	$this->p_positionnumber1_original = $value;
}

public function get_positionnumber1_is_dirty()
{
	return $this->p_positionnumber1_is_dirty;
}


public function get_memberstate()
{
	return $this->p_memberstate;
}

public function get_memberstate_original()
{
	return $this->p_memberstate_original;
}

public function set_memberstate($value)
{
	if ($this->p_memberstate === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_memberstate_is_dirty = true;
	$this->p_memberstate = $value;
}

public function set_memberstate_original($value)
{
	$this->p_memberstate_original = $value;
}

public function get_memberstate_is_dirty()
{
	return $this->p_memberstate_is_dirty;
}


public function get_memberno()
{
	return $this->p_memberno;
}

public function get_memberno_original()
{
	return $this->p_memberno_original;
}

public function set_memberno($value)
{
	if ($this->p_memberno === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_memberno_is_dirty = true;
	$this->p_memberno = $value;
}

public function set_memberno_original($value)
{
	$this->p_memberno_original = $value;
}

public function get_memberno_is_dirty()
{
	return $this->p_memberno_is_dirty;
}


public function get_id_insurance()
{
	return $this->p_id_insurance;
}

public function get_id_insurance_original()
{
	return $this->p_id_insurance_original;
}

public function set_id_insurance($value)
{
	if ($this->p_id_insurance === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_insurance_is_dirty = true;
	$this->p_id_insurance = $value;
}

public function set_id_insurance_original($value)
{
	$this->p_id_insurance_original = $value;
}

public function get_id_insurance_is_dirty()
{
	return $this->p_id_insurance_is_dirty;
}


public function get_insurance_name()
{
	return $this->p_insurance_name;
}

public function get_insurance_name_original()
{
	return $this->p_insurance_name_original;
}

public function set_insurance_name($value)
{
	if ($this->p_insurance_name === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_insurance_name_is_dirty = true;
	$this->p_insurance_name = $value;
}

public function set_insurance_name_original($value)
{
	$this->p_insurance_name_original = $value;
}

public function get_insurance_name_is_dirty()
{
	return $this->p_insurance_name_is_dirty;
}


public function get_ik()
{
	return $this->p_ik;
}

public function get_ik_original()
{
	return $this->p_ik_original;
}

public function set_ik($value)
{
	if ($this->p_ik === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_ik_is_dirty = true;
	$this->p_ik = $value;
}

public function set_ik_original($value)
{
	$this->p_ik_original = $value;
}

public function get_ik_is_dirty()
{
	return $this->p_ik_is_dirty;
}


public function get_id_person()
{
	return $this->p_id_person;
}

public function get_id_person_original()
{
	return $this->p_id_person_original;
}

public function set_id_person($value)
{
	if ($this->p_id_person === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_id_person_is_dirty = true;
	$this->p_id_person = $value;
}

public function set_id_person_original($value)
{
	$this->p_id_person_original = $value;
}

public function get_id_person_is_dirty()
{
	return $this->p_id_person_is_dirty;
}



public function reset_dirty($reset_values = false)
{
	$this->p_id_sport_is_dirty = false;
	$this->p_goal_is_dirty = false;
	$this->p_damage_is_dirty = false;
	$this->p_diagnosis_is_dirty = false;
	$this->p_id_prescription_type_is_dirty = false;
	$this->p_issuedate_is_dirty = false;
	$this->p_startdate_is_dirty = false;
	$this->p_patient_signature_date_is_dirty = false;
	$this->p_physician_applicatiom_date_is_dirty = false;
	$this->p_insurance_approval_date_is_dirty = false;
	$this->p_validtil_is_dirty = false;
	$this->p_validfrom_is_dirty = false;
	$this->p_betrno_is_dirty = false;
	$this->p_lanr_is_dirty = false;
	$this->p_maxmonths_issued_is_dirty = false;
	$this->p_maxunitsperweek_issued_is_dirty = false;
	$this->p_maxunits_issued_is_dirty = false;
	$this->p_maxmonths_applied_is_dirty = false;
	$this->p_maxunitsperweek_applied_is_dirty = false;
	$this->p_maxunits_applied_is_dirty = false;
	$this->p_positionsnumber2_is_dirty = false;
	$this->p_positionnumber1_is_dirty = false;
	$this->p_memberstate_is_dirty = false;
	$this->p_memberno_is_dirty = false;
	$this->p_id_insurance_is_dirty = false;
	$this->p_insurance_name_is_dirty = false;
	$this->p_ik_is_dirty = false;
	$this->p_id_person_is_dirty = false;
	if ($reset_values)
	{
		$this->p_id_sport = $this->p_id_sport_original;
		$this->p_goal = $this->p_goal_original;
		$this->p_damage = $this->p_damage_original;
		$this->p_diagnosis = $this->p_diagnosis_original;
		$this->p_id_prescription_type = $this->p_id_prescription_type_original;
		$this->p_issuedate = $this->p_issuedate_original;
		$this->p_startdate = $this->p_startdate_original;
		$this->p_patient_signature_date = $this->p_patient_signature_date_original;
		$this->p_physician_applicatiom_date = $this->p_physician_applicatiom_date_original;
		$this->p_insurance_approval_date = $this->p_insurance_approval_date_original;
		$this->p_validtil = $this->p_validtil_original;
		$this->p_validfrom = $this->p_validfrom_original;
		$this->p_betrno = $this->p_betrno_original;
		$this->p_lanr = $this->p_lanr_original;
		$this->p_maxmonths_issued = $this->p_maxmonths_issued_original;
		$this->p_maxunitsperweek_issued = $this->p_maxunitsperweek_issued_original;
		$this->p_maxunits_issued = $this->p_maxunits_issued_original;
		$this->p_maxmonths_applied = $this->p_maxmonths_applied_original;
		$this->p_maxunitsperweek_applied = $this->p_maxunitsperweek_applied_original;
		$this->p_maxunits_applied = $this->p_maxunits_applied_original;
		$this->p_positionsnumber2 = $this->p_positionsnumber2_original;
		$this->p_positionnumber1 = $this->p_positionnumber1_original;
		$this->p_memberstate = $this->p_memberstate_original;
		$this->p_memberno = $this->p_memberno_original;
		$this->p_id_insurance = $this->p_id_insurance_original;
		$this->p_insurance_name = $this->p_insurance_name_original;
		$this->p_ik = $this->p_ik_original;
		$this->p_id_person = $this->p_id_person_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "prescription.id_sport":
					$this->set_id_sport($val);
					$this->set_id_sport_original($val);
					break;
				case "prescription.goal":
					$this->set_goal($val);
					$this->set_goal_original($val);
					break;
				case "prescription.damage":
					$this->set_damage($val);
					$this->set_damage_original($val);
					break;
				case "prescription.diagnosis":
					$this->set_diagnosis($val);
					$this->set_diagnosis_original($val);
					break;
				case "prescription.id_prescription_type":
					$this->set_id_prescription_type($val);
					$this->set_id_prescription_type_original($val);
					break;
				case "prescription.issuedate":
					$this->set_issuedate($val);
					$this->set_issuedate_original($val);
					break;
				case "prescription.startdate":
					$this->set_startdate($val);
					$this->set_startdate_original($val);
					break;
				case "prescription.patient_signature_date":
					$this->set_patient_signature_date($val);
					$this->set_patient_signature_date_original($val);
					break;
				case "prescription.physician_applicatiom_date":
					$this->set_physician_applicatiom_date($val);
					$this->set_physician_applicatiom_date_original($val);
					break;
				case "prescription.insurance_approval_date":
					$this->set_insurance_approval_date($val);
					$this->set_insurance_approval_date_original($val);
					break;
				case "prescription.validtil":
					$this->set_validtil($val);
					$this->set_validtil_original($val);
					break;
				case "prescription.validfrom":
					$this->set_validfrom($val);
					$this->set_validfrom_original($val);
					break;
				case "prescription.betrno":
					$this->set_betrno($val);
					$this->set_betrno_original($val);
					break;
				case "prescription.lanr":
					$this->set_lanr($val);
					$this->set_lanr_original($val);
					break;
				case "prescription.maxmonths_issued":
					$this->set_maxmonths_issued($val);
					$this->set_maxmonths_issued_original($val);
					break;
				case "prescription.maxunitsperweek_issued":
					$this->set_maxunitsperweek_issued($val);
					$this->set_maxunitsperweek_issued_original($val);
					break;
				case "prescription.maxunits_issued":
					$this->set_maxunits_issued($val);
					$this->set_maxunits_issued_original($val);
					break;
				case "prescription.maxmonths_applied":
					$this->set_maxmonths_applied($val);
					$this->set_maxmonths_applied_original($val);
					break;
				case "prescription.maxunitsperweek_applied":
					$this->set_maxunitsperweek_applied($val);
					$this->set_maxunitsperweek_applied_original($val);
					break;
				case "prescription.maxunits_applied":
					$this->set_maxunits_applied($val);
					$this->set_maxunits_applied_original($val);
					break;
				case "prescription.positionsnumber2":
					$this->set_positionsnumber2($val);
					$this->set_positionsnumber2_original($val);
					break;
				case "prescription.positionnumber1":
					$this->set_positionnumber1($val);
					$this->set_positionnumber1_original($val);
					break;
				case "prescription.memberstate":
					$this->set_memberstate($val);
					$this->set_memberstate_original($val);
					break;
				case "prescription.memberno":
					$this->set_memberno($val);
					$this->set_memberno_original($val);
					break;
				case "prescription.id_insurance":
					$this->set_id_insurance($val);
					$this->set_id_insurance_original($val);
					break;
				case "prescription.insurance_name":
					$this->set_insurance_name($val);
					$this->set_insurance_name_original($val);
					break;
				case "prescription.ik":
					$this->set_ik($val);
					$this->set_ik_original($val);
					break;
				case "prescription.id_person":
					$this->set_id_person($val);
					$this->set_id_person_original($val);
					break;
				case "prescription.id":
					$this->set_id($val);
					break;
			}
		}
	if ($reset)
	{
		$this->reset_dirty(false);
	}
}
public function get_by_id($id,$db_manager,$application = null)
{
	$sql = $this->get_table_select($db_manager->get_delimeter());
	$sql .= " where id = '" . $id . "'";
	$result = $db_manager->query($sql);
	if (!is_null($result))
	{
		require_once('include/data/table_factory/cls_table_factory.php');
		$prescription = cls_table_factory::create_instance('prescription');
		$row = $db_manager->fetch_row($result);
		$prescription->fill($row);
		return $prescription;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_prescription.php');
		return cls_save_prescription::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_prescription.php');
		return cls_save_prescription::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_prescriptions($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('prescription',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('prescription',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$prescription = cls_table_factory::create_instance('prescription');
				$prescription->fill($row);
				$data[] = $prescription;
			}
		return $data;
	}

function get_insurance($db_manager,$application)
	{
		$result = $db_manager->get_records('insurance',$this->get_id_insurance());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$insurance = cls_table_factory::create_instance('insurance');
		$row = $db_manager->fetch_row($result);
		$insurance->fill($row);
		return $insurance;
	}

function get_person($db_manager,$application)
	{
		$result = $db_manager->get_records('person',$this->get_id_person());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$person = cls_table_factory::create_instance('person');
		$row = $db_manager->fetch_row($result);
		$person->fill($row);
		return $person;
	}

function get_prescription_type($db_manager,$application)
	{
		$result = $db_manager->get_records('prescription_type',$this->get_id_prescription_type());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$prescription_type = cls_table_factory::create_instance('prescription_type');
		$row = $db_manager->fetch_row($result);
		$prescription_type->fill($row);
		return $prescription_type;
	}

function get_sport($db_manager,$application)
	{
		$result = $db_manager->get_records('sport',$this->get_id_sport());
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$sport = cls_table_factory::create_instance('sport');
		$row = $db_manager->fetch_row($result);
		$sport->fill($row);
		return $sport;
	}

public function get_table_test_data($prescriptions,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('table_test_data',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$table_test_data = cls_table_factory::create_instance('table_test_data');
				$table_test_data->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $table_test_data;
				}
				else
				{
					$data[] = $table_test_data;
				}
			}
		return $data;
	}

public function get_multi_table_test_data($prescriptions,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$prescriptions,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$table_test_data = cls_table_factory::create_instance('table_test_data');
				$table_test_data->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $table_test_data;
			}
		return $data;
	}

public function get_communication_reason($prescriptions,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('communication_reason',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$communication_reason = cls_table_factory::create_instance('communication_reason');
				$communication_reason->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $communication_reason;
				}
				else
				{
					$data[] = $communication_reason;
				}
			}
		return $data;
	}

public function get_multi_communication_reason($prescriptions,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$prescriptions,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$communication_reason = cls_table_factory::create_instance('communication_reason');
				$communication_reason->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $communication_reason;
			}
		return $data;
	}

public function get_data_change($prescriptions,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_change',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_change = cls_table_factory::create_instance('data_change');
				$data_change->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_change;
				}
				else
				{
					$data[] = $data_change;
				}
			}
		return $data;
	}

public function get_multi_data_change($prescriptions,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$prescriptions,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_change = cls_table_factory::create_instance('data_change');
				$data_change->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_change;
			}
		return $data;
	}

public function get_data_help($prescriptions,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_help',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_help = cls_table_factory::create_instance('data_help');
				$data_help->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_help;
				}
				else
				{
					$data[] = $data_help;
				}
			}
		return $data;
	}

public function get_multi_data_help($prescriptions,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$prescriptions,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_help = cls_table_factory::create_instance('data_help');
				$data_help->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_help;
			}
		return $data;
	}

public function get_data_location($prescriptions,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_location',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_location = cls_table_factory::create_instance('data_location');
				$data_location->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_location;
				}
				else
				{
					$data[] = $data_location;
				}
			}
		return $data;
	}

public function get_multi_data_location($prescriptions,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$prescriptions,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_location = cls_table_factory::create_instance('data_location');
				$data_location->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_location;
			}
		return $data;
	}

public function get_data_posting($prescriptions,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_posting',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_posting = cls_table_factory::create_instance('data_posting');
				$data_posting->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_posting;
				}
				else
				{
					$data[] = $data_posting;
				}
			}
		return $data;
	}

public function get_multi_data_posting($prescriptions,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$prescriptions,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_posting = cls_table_factory::create_instance('data_posting');
				$data_posting->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_posting;
			}
		return $data;
	}

public function get_offer_event($prescriptions,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('offer_event',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_event = cls_table_factory::create_instance('offer_event');
				$offer_event->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $offer_event;
				}
				else
				{
					$data[] = $offer_event;
				}
			}
		return $data;
	}

public function get_multi_offer_event($prescriptions,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$prescriptions,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_event = cls_table_factory::create_instance('offer_event');
				$offer_event->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $offer_event;
			}
		return $data;
	}

public function get_supplier_data($prescriptions,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('supplier_data',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$supplier_data = cls_table_factory::create_instance('supplier_data');
				$supplier_data->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $supplier_data;
				}
				else
				{
					$data[] = $supplier_data;
				}
			}
		return $data;
	}

public function get_multi_supplier_data($prescriptions,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$prescriptions,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$supplier_data = cls_table_factory::create_instance('supplier_data');
				$supplier_data->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $supplier_data;
			}
		return $data;
	}

public function get_address($prescriptions,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('address',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$address = cls_table_factory::create_instance('address');
				$address->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $address;
				}
				else
				{
					$data[] = $address;
				}
			}
		return $data;
	}

public function get_multi_address($prescriptions,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$prescriptions,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$address = cls_table_factory::create_instance('address');
				$address->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $address;
			}
		return $data;
	}

public function get_data_property($prescriptions,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_property',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property = cls_table_factory::create_instance('data_property');
				$data_property->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_property;
				}
				else
				{
					$data[] = $data_property;
				}
			}
		return $data;
	}

public function get_multi_data_property($prescriptions,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$prescriptions,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property = cls_table_factory::create_instance('data_property');
				$data_property->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_property;
			}
		return $data;
	}

public function get_data_translation($prescriptions,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_translation',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_translation = cls_table_factory::create_instance('data_translation');
				$data_translation->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_translation;
				}
				else
				{
					$data[] = $data_translation;
				}
			}
		return $data;
	}

public function get_multi_data_translation($prescriptions,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$prescriptions,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_translation = cls_table_factory::create_instance('data_translation');
				$data_translation->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_translation;
			}
		return $data;
	}

public function get_dms($prescriptions,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('dms',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$dms = cls_table_factory::create_instance('dms');
				$dms->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $dms;
				}
				else
				{
					$data[] = $dms;
				}
			}
		return $data;
	}

public function get_multi_dms($prescriptions,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$prescriptions,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$dms = cls_table_factory::create_instance('dms');
				$dms->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $dms;
			}
		return $data;
	}

public function get_data_relation_id_data1($prescriptions,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_relation',$this->get_id(),'id_data1');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_relation = cls_table_factory::create_instance('data_relation');
				$data_relation->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_relation;
				}
				else
				{
					$data[] = $data_relation;
				}
			}
		return $data;
	}

public function get_multi_data_relation_id_data1($prescriptions,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$prescriptions,'id_data1');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_relation = cls_table_factory::create_instance('data_relation');
				$data_relation->fill($row);
				if (!array_key_exists($data[$row['id_data1']]))
				{
					$data[$row['id_data1']] = array();
				}
				$data[$row['id_data1']][] = $data_relation;
			}
		return $data;
	}

public function get_data_relation_id_data2($prescriptions,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_relation',$this->get_id(),'id_data2');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_relation = cls_table_factory::create_instance('data_relation');
				$data_relation->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_relation;
				}
				else
				{
					$data[] = $data_relation;
				}
			}
		return $data;
	}

public function get_multi_data_relation_id_data2($prescriptions,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$prescriptions,'id_data2');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_relation = cls_table_factory::create_instance('data_relation');
				$data_relation->fill($row);
				if (!array_key_exists($data[$row['id_data2']]))
				{
					$data[$row['id_data2']] = array();
				}
				$data[$row['id_data2']][] = $data_relation;
			}
		return $data;
	}

public function get_data_property_id_link_data($prescriptions,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_property',$this->get_id(),'id_link_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property = cls_table_factory::create_instance('data_property');
				$data_property->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_property;
				}
				else
				{
					$data[] = $data_property;
				}
			}
		return $data;
	}

public function get_multi_data_property_id_link_data($prescriptions,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$prescriptions,'id_link_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property = cls_table_factory::create_instance('data_property');
				$data_property->fill($row);
				if (!array_key_exists($data[$row['id_link_data']]))
				{
					$data[$row['id_link_data']] = array();
				}
				$data[$row['id_link_data']][] = $data_property;
			}
		return $data;
	}


}
?>
