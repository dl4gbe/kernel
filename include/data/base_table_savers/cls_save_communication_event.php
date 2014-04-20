<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_communication_event extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'communication_event';
		}

	public static function save_object($communication_event,$db_manager,$application)
		{
			if (is_null($communication_event))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$communication_event->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($communication_event->get_state_is_dirty())
				{
				$data[] = array("name" => "state" , "value" => $communication_event->get_state() , "type" => "bpchar");
				}
			if ($communication_event->get_id_communication_event_previous_is_dirty())
				{
				$data[] = array("name" => "id_communication_event_previous" , "value" => $communication_event->get_id_communication_event_previous() , "type" => "uuid");
				}
			if ($communication_event->get_remark_is_dirty())
				{
				$data[] = array("name" => "remark" , "value" => $communication_event->get_remark() , "type" => "text");
				}
			if ($communication_event->get_donedate_is_dirty())
				{
				$data[] = array("name" => "donedate" , "value" => $communication_event->get_donedate() , "type" => "timestamptz");
				}
			if ($communication_event->get_id_person_employee_done_is_dirty())
				{
				$data[] = array("name" => "id_person_employee_done" , "value" => $communication_event->get_id_person_employee_done() , "type" => "uuid");
				}
			if ($communication_event->get_plandate_is_dirty())
				{
				$data[] = array("name" => "plandate" , "value" => $communication_event->get_plandate() , "type" => "timestamptz");
				}
			if ($communication_event->get_id_person_employee_planned_is_dirty())
				{
				$data[] = array("name" => "id_person_employee_planned" , "value" => $communication_event->get_id_person_employee_planned() , "type" => "uuid");
				}
			if ($communication_event->get_id_communication_is_dirty())
				{
				$data[] = array("name" => "id_communication" , "value" => $communication_event->get_id_communication() , "type" => "uuid");
				}
			if ($communication_event->get_id_person_is_dirty())
				{
				$data[] = array("name" => "id_person" , "value" => $communication_event->get_id_person() , "type" => "uuid");
				}
			if ($communication_event->get_id_event_type_is_dirty())
				{
				$data[] = array("name" => "id_event_type" , "value" => $communication_event->get_id_event_type() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('communication_event',$communication_event->get_id()))
				{
				$result = $communication_event->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('communication_event',$communication_event->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('communication_event',$communication_event->get_id(),$application,$communication_event->get_id_save_location(),false);
				$communication_event->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $communication_event->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('communication_event',$communication_event->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('communication_event',$communication_event->get_id(),$application,$communication_event->get_id_save_location(),true);
				$communication_event->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$communication_event = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$communication_event = cls_table_factory::get_common_communication_event()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($communication_event))
				{
					$communication_event = cls_table_factory::create_instance('communication_event');
				}
			$communication_event->fill($data,false);
			return self::save_object($communication_event,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 11;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "communication_event.state":
					$counter++;
					break;
				case "state":
					$counter++;
					break;
				case "communication_event.id_communication_event_previous":
					$counter++;
					break;
				case "id_communication_event_previous":
					$counter++;
					break;
				case "communication_event.remark":
					$counter++;
					break;
				case "remark":
					$counter++;
					break;
				case "communication_event.donedate":
					$counter++;
					break;
				case "donedate":
					$counter++;
					break;
				case "communication_event.id_person_employee_done":
					$counter++;
					break;
				case "id_person_employee_done":
					$counter++;
					break;
				case "communication_event.plandate":
					$counter++;
					break;
				case "plandate":
					$counter++;
					break;
				case "communication_event.id_person_employee_planned":
					$counter++;
					break;
				case "id_person_employee_planned":
					$counter++;
					break;
				case "communication_event.id_communication":
					$counter++;
					break;
				case "id_communication":
					$counter++;
					break;
				case "communication_event.id_person":
					$counter++;
					break;
				case "id_person":
					$counter++;
					break;
				case "communication_event.id_event_type":
					$counter++;
					break;
				case "id_event_type":
					$counter++;
					break;
				case "communication_event.id":
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
