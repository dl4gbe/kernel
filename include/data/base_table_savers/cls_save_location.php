<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_location extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'location';
		}

	public static function save_object($location,$db_manager,$application)
		{
			if (is_null($location))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$location->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($location->get_sollversteuerung_is_dirty())
				{
				$data[] = array("name" => "sollversteuerung" , "value" => $location->get_sollversteuerung() , "type" => "bool");
				}
			if ($location->get_id_person_laywer_is_dirty())
				{
				$data[] = array("name" => "id_person_laywer" , "value" => $location->get_id_person_laywer() , "type" => "uuid");
				}
			if ($location->get_id_person_taxadvisor_is_dirty())
				{
				$data[] = array("name" => "id_person_taxadvisor" , "value" => $location->get_id_person_taxadvisor() , "type" => "uuid");
				}
			if ($location->get_id_person_revenue_department_is_dirty())
				{
				$data[] = array("name" => "id_person_revenue_department" , "value" => $location->get_id_person_revenue_department() , "type" => "uuid");
				}
			if ($location->get_taxid_is_dirty())
				{
				$data[] = array("name" => "taxid" , "value" => $location->get_taxid() , "type" => "varchar");
				}
			if ($location->get_id_insurance_district_is_dirty())
				{
				$data[] = array("name" => "id_insurance_district" , "value" => $location->get_id_insurance_district() , "type" => "uuid");
				}
			if ($location->get_id_chart_of_account_is_dirty())
				{
				$data[] = array("name" => "id_chart_of_account" , "value" => $location->get_id_chart_of_account() , "type" => "uuid");
				}
			if ($location->get_iscenter_is_dirty())
				{
				$data[] = array("name" => "iscenter" , "value" => $location->get_iscenter() , "type" => "bool");
				}
			if ($location->get_ik_is_dirty())
				{
				$data[] = array("name" => "ik" , "value" => $location->get_ik() , "type" => "varchar");
				}
			if ($location->get_unique_credit_identifier_is_dirty())
				{
				$data[] = array("name" => "unique_credit_identifier" , "value" => $location->get_unique_credit_identifier() , "type" => "varchar");
				}
			if ($location->get_no_is_dirty())
				{
				$data[] = array("name" => "no" , "value" => $location->get_no() , "type" => "varchar");
				}
			if ($location->get_id_person_is_dirty())
				{
				$data[] = array("name" => "id_person" , "value" => $location->get_id_person() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('location',$location->get_id()))
				{
				$result = $location->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('location',$location->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$location->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $location->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('location',$location->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$location->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$location = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$location = cls_table_factory::get_common_location()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($location))
				{
					$location = cls_table_factory::create_instance('location');
				}
			$location->fill($data,false);
			return self::save_object($location,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 13;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "location.sollversteuerung":
					$counter++;
					break;
				case "sollversteuerung":
					$counter++;
					break;
				case "location.id_person_laywer":
					$counter++;
					break;
				case "id_person_laywer":
					$counter++;
					break;
				case "location.id_person_taxadvisor":
					$counter++;
					break;
				case "id_person_taxadvisor":
					$counter++;
					break;
				case "location.id_person_revenue_department":
					$counter++;
					break;
				case "id_person_revenue_department":
					$counter++;
					break;
				case "location.taxid":
					$counter++;
					break;
				case "taxid":
					$counter++;
					break;
				case "location.id_insurance_district":
					$counter++;
					break;
				case "id_insurance_district":
					$counter++;
					break;
				case "location.id_chart_of_account":
					$counter++;
					break;
				case "id_chart_of_account":
					$counter++;
					break;
				case "location.iscenter":
					$counter++;
					break;
				case "iscenter":
					$counter++;
					break;
				case "location.ik":
					$counter++;
					break;
				case "ik":
					$counter++;
					break;
				case "location.unique_credit_identifier":
					$counter++;
					break;
				case "unique_credit_identifier":
					$counter++;
					break;
				case "location.no":
					$counter++;
					break;
				case "no":
					$counter++;
					break;
				case "location.id_person":
					$counter++;
					break;
				case "id_person":
					$counter++;
					break;
				case "location.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
