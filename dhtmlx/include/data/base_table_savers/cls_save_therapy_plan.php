<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_therapy_plan extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'therapy_plan';
		}

	public static function save_object($therapy_plan,$db_manager,$application)
		{
			if (is_null($therapy_plan))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$therapy_plan->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($therapy_plan->get_id_therapy_plan_template_is_dirty())
				{
				$data[] = array("name" => "id_therapy_plan_template" , "value" => $therapy_plan->get_id_therapy_plan_template() , "type" => "uuid");
				}
			if ($therapy_plan->get_id_person_is_dirty())
				{
				$data[] = array("name" => "id_person" , "value" => $therapy_plan->get_id_person() , "type" => "uuid");
				}
			if ($therapy_plan->get_id_person_employee_created_is_dirty())
				{
				$data[] = array("name" => "id_person_employee_created" , "value" => $therapy_plan->get_id_person_employee_created() , "type" => "uuid");
				}
			if ($therapy_plan->get_create_date_is_dirty())
				{
				$data[] = array("name" => "create_date" , "value" => $therapy_plan->get_create_date() , "type" => "date");
				}
			if ($therapy_plan->get_valid_from_is_dirty())
				{
				$data[] = array("name" => "valid_from" , "value" => $therapy_plan->get_valid_from() , "type" => "date");
				}
			if ($therapy_plan->get_valid_til_is_dirty())
				{
				$data[] = array("name" => "valid_til" , "value" => $therapy_plan->get_valid_til() , "type" => "date");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('therapy_plan',$therapy_plan->get_id()))
				{
				$result = $therapy_plan->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('therapy_plan',$therapy_plan->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('therapy_plan',$therapy_plan->get_id(),$application,$therapy_plan->get_id_save_location(),false);
				$therapy_plan->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $therapy_plan->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('therapy_plan',$therapy_plan->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('therapy_plan',$therapy_plan->get_id(),$application,$therapy_plan->get_id_save_location(),true);
				$therapy_plan->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$therapy_plan = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$therapy_plan = cls_table_factory::get_common_therapy_plan()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($therapy_plan))
				{
					$therapy_plan = cls_table_factory::create_instance('therapy_plan');
				}
			$therapy_plan->fill($data,false);
			return self::save_object($therapy_plan,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 7;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "therapy_plan.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "therapy_plan.id_therapy_plan_template":
					$counter++;
					break;
				case "id_therapy_plan_template":
					$counter++;
					break;
				case "therapy_plan.id_person":
					$counter++;
					break;
				case "id_person":
					$counter++;
					break;
				case "therapy_plan.id_person_employee_created":
					$counter++;
					break;
				case "id_person_employee_created":
					$counter++;
					break;
				case "therapy_plan.create_date":
					$counter++;
					break;
				case "create_date":
					$counter++;
					break;
				case "therapy_plan.valid_from":
					$counter++;
					break;
				case "valid_from":
					$counter++;
					break;
				case "therapy_plan.valid_til":
					$counter++;
					break;
				case "valid_til":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
