<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_prescription extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'prescription';
		}

	public static function save_object($prescription,$db_manager,$application)
		{
			if (is_null($prescription))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$prescription->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($prescription->get_id_person_is_dirty())
				{
				$data[] = array("name" => "id_person" , "value" => $prescription->get_id_person() , "type" => "uuid");
				}
			if ($prescription->get_ik_is_dirty())
				{
				$data[] = array("name" => "ik" , "value" => $prescription->get_ik() , "type" => "varchar");
				}
			if ($prescription->get_insurance_name_is_dirty())
				{
				$data[] = array("name" => "insurance_name" , "value" => $prescription->get_insurance_name() , "type" => "varchar");
				}
			if ($prescription->get_id_insurance_is_dirty())
				{
				$data[] = array("name" => "id_insurance" , "value" => $prescription->get_id_insurance() , "type" => "uuid");
				}
			if ($prescription->get_memberno_is_dirty())
				{
				$data[] = array("name" => "memberno" , "value" => $prescription->get_memberno() , "type" => "varchar");
				}
			if ($prescription->get_memberstate_is_dirty())
				{
				$data[] = array("name" => "memberstate" , "value" => $prescription->get_memberstate() , "type" => "bpchar");
				}
			if ($prescription->get_positionnumber1_is_dirty())
				{
				$data[] = array("name" => "positionnumber1" , "value" => $prescription->get_positionnumber1() , "type" => "varchar");
				}
			if ($prescription->get_positionsnumber2_is_dirty())
				{
				$data[] = array("name" => "positionsnumber2" , "value" => $prescription->get_positionsnumber2() , "type" => "varchar");
				}
			if ($prescription->get_maxunits_applied_is_dirty())
				{
				$data[] = array("name" => "maxunits_applied" , "value" => $prescription->get_maxunits_applied() , "type" => "int4");
				}
			if ($prescription->get_maxunitsperweek_applied_is_dirty())
				{
				$data[] = array("name" => "maxunitsperweek_applied" , "value" => $prescription->get_maxunitsperweek_applied() , "type" => "int4");
				}
			if ($prescription->get_maxmonths_applied_is_dirty())
				{
				$data[] = array("name" => "maxmonths_applied" , "value" => $prescription->get_maxmonths_applied() , "type" => "int4");
				}
			if ($prescription->get_maxunits_issued_is_dirty())
				{
				$data[] = array("name" => "maxunits_issued" , "value" => $prescription->get_maxunits_issued() , "type" => "int4");
				}
			if ($prescription->get_maxunitsperweek_issued_is_dirty())
				{
				$data[] = array("name" => "maxunitsperweek_issued" , "value" => $prescription->get_maxunitsperweek_issued() , "type" => "int4");
				}
			if ($prescription->get_maxmonths_issued_is_dirty())
				{
				$data[] = array("name" => "maxmonths_issued" , "value" => $prescription->get_maxmonths_issued() , "type" => "int4");
				}
			if ($prescription->get_lanr_is_dirty())
				{
				$data[] = array("name" => "lanr" , "value" => $prescription->get_lanr() , "type" => "varchar");
				}
			if ($prescription->get_betrno_is_dirty())
				{
				$data[] = array("name" => "betrno" , "value" => $prescription->get_betrno() , "type" => "varchar");
				}
			if ($prescription->get_validfrom_is_dirty())
				{
				$data[] = array("name" => "validfrom" , "value" => $prescription->get_validfrom() , "type" => "date");
				}
			if ($prescription->get_validtil_is_dirty())
				{
				$data[] = array("name" => "validtil" , "value" => $prescription->get_validtil() , "type" => "date");
				}
			if ($prescription->get_insurance_approval_date_is_dirty())
				{
				$data[] = array("name" => "insurance_approval_date" , "value" => $prescription->get_insurance_approval_date() , "type" => "date");
				}
			if ($prescription->get_physician_applicatiom_date_is_dirty())
				{
				$data[] = array("name" => "physician_applicatiom_date" , "value" => $prescription->get_physician_applicatiom_date() , "type" => "date");
				}
			if ($prescription->get_patient_signature_date_is_dirty())
				{
				$data[] = array("name" => "patient_signature_date" , "value" => $prescription->get_patient_signature_date() , "type" => "date");
				}
			if ($prescription->get_startdate_is_dirty())
				{
				$data[] = array("name" => "startdate" , "value" => $prescription->get_startdate() , "type" => "date");
				}
			if ($prescription->get_issuedate_is_dirty())
				{
				$data[] = array("name" => "issuedate" , "value" => $prescription->get_issuedate() , "type" => "date");
				}
			if ($prescription->get_id_prescription_type_is_dirty())
				{
				$data[] = array("name" => "id_prescription_type" , "value" => $prescription->get_id_prescription_type() , "type" => "uuid");
				}
			if ($prescription->get_diagnosis_is_dirty())
				{
				$data[] = array("name" => "diagnosis" , "value" => $prescription->get_diagnosis() , "type" => "varchar");
				}
			if ($prescription->get_damage_is_dirty())
				{
				$data[] = array("name" => "damage" , "value" => $prescription->get_damage() , "type" => "varchar");
				}
			if ($prescription->get_goal_is_dirty())
				{
				$data[] = array("name" => "goal" , "value" => $prescription->get_goal() , "type" => "varchar");
				}
			if ($prescription->get_id_sport_is_dirty())
				{
				$data[] = array("name" => "id_sport" , "value" => $prescription->get_id_sport() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('prescription',$prescription->get_id()))
				{
				$result = $prescription->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('prescription',$prescription->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('prescription',$prescription->get_id(),$application,$prescription->get_id_save_location(),false);
				$prescription->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $prescription->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('prescription',$prescription->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('prescription',$prescription->get_id(),$application,$prescription->get_id_save_location(),true);
				$prescription->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$prescription = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$prescription = cls_table_factory::get_common_prescription()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($prescription))
				{
					$prescription = cls_table_factory::create_instance('prescription');
				}
			$prescription->fill($data,false);
			return self::save_object($prescription,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 29;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "prescription.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "prescription.id_person":
					$counter++;
					break;
				case "id_person":
					$counter++;
					break;
				case "prescription.ik":
					$counter++;
					break;
				case "ik":
					$counter++;
					break;
				case "prescription.insurance_name":
					$counter++;
					break;
				case "insurance_name":
					$counter++;
					break;
				case "prescription.id_insurance":
					$counter++;
					break;
				case "id_insurance":
					$counter++;
					break;
				case "prescription.memberno":
					$counter++;
					break;
				case "memberno":
					$counter++;
					break;
				case "prescription.memberstate":
					$counter++;
					break;
				case "memberstate":
					$counter++;
					break;
				case "prescription.positionnumber1":
					$counter++;
					break;
				case "positionnumber1":
					$counter++;
					break;
				case "prescription.positionsnumber2":
					$counter++;
					break;
				case "positionsnumber2":
					$counter++;
					break;
				case "prescription.maxunits_applied":
					$counter++;
					break;
				case "maxunits_applied":
					$counter++;
					break;
				case "prescription.maxunitsperweek_applied":
					$counter++;
					break;
				case "maxunitsperweek_applied":
					$counter++;
					break;
				case "prescription.maxmonths_applied":
					$counter++;
					break;
				case "maxmonths_applied":
					$counter++;
					break;
				case "prescription.maxunits_issued":
					$counter++;
					break;
				case "maxunits_issued":
					$counter++;
					break;
				case "prescription.maxunitsperweek_issued":
					$counter++;
					break;
				case "maxunitsperweek_issued":
					$counter++;
					break;
				case "prescription.maxmonths_issued":
					$counter++;
					break;
				case "maxmonths_issued":
					$counter++;
					break;
				case "prescription.lanr":
					$counter++;
					break;
				case "lanr":
					$counter++;
					break;
				case "prescription.betrno":
					$counter++;
					break;
				case "betrno":
					$counter++;
					break;
				case "prescription.validfrom":
					$counter++;
					break;
				case "validfrom":
					$counter++;
					break;
				case "prescription.validtil":
					$counter++;
					break;
				case "validtil":
					$counter++;
					break;
				case "prescription.insurance_approval_date":
					$counter++;
					break;
				case "insurance_approval_date":
					$counter++;
					break;
				case "prescription.physician_applicatiom_date":
					$counter++;
					break;
				case "physician_applicatiom_date":
					$counter++;
					break;
				case "prescription.patient_signature_date":
					$counter++;
					break;
				case "patient_signature_date":
					$counter++;
					break;
				case "prescription.startdate":
					$counter++;
					break;
				case "startdate":
					$counter++;
					break;
				case "prescription.issuedate":
					$counter++;
					break;
				case "issuedate":
					$counter++;
					break;
				case "prescription.id_prescription_type":
					$counter++;
					break;
				case "id_prescription_type":
					$counter++;
					break;
				case "prescription.diagnosis":
					$counter++;
					break;
				case "diagnosis":
					$counter++;
					break;
				case "prescription.damage":
					$counter++;
					break;
				case "damage":
					$counter++;
					break;
				case "prescription.goal":
					$counter++;
					break;
				case "goal":
					$counter++;
					break;
				case "prescription.id_sport":
					$counter++;
					break;
				case "id_sport":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
