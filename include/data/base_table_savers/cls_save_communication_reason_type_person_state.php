<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_communication_reason_type_person_state extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'communication_reason_type_person_state';
		}

	public static function save_object($communication_reason_type_person_state,$db_manager,$application)
		{
			if (is_null($communication_reason_type_person_state))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$communication_reason_type_person_state->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($communication_reason_type_person_state->get_person_states_code_is_dirty())
				{
				$data[] = array("name" => "person_states_code" , "value" => $communication_reason_type_person_state->get_person_states_code() , "type" => "bpchar");
				}
			if ($communication_reason_type_person_state->get_id_communication_reason_type_is_dirty())
				{
				$data[] = array("name" => "id_communication_reason_type" , "value" => $communication_reason_type_person_state->get_id_communication_reason_type() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('communication_reason_type_person_state',$communication_reason_type_person_state->get_id()))
				{
				$result = $communication_reason_type_person_state->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('communication_reason_type_person_state',$communication_reason_type_person_state->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('communication_reason_type_person_state',$communication_reason_type_person_state->get_id(),$application,$communication_reason_type_person_state->get_id_save_location(),false);
				$communication_reason_type_person_state->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $communication_reason_type_person_state->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('communication_reason_type_person_state',$communication_reason_type_person_state->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('communication_reason_type_person_state',$communication_reason_type_person_state->get_id(),$application,$communication_reason_type_person_state->get_id_save_location(),true);
				$communication_reason_type_person_state->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$communication_reason_type_person_state = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$communication_reason_type_person_state = cls_table_factory::get_common_communication_reason_type_person_state()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($communication_reason_type_person_state))
				{
					$communication_reason_type_person_state = cls_table_factory::create_instance('communication_reason_type_person_state');
				}
			$communication_reason_type_person_state->fill($data,false);
			return self::save_object($communication_reason_type_person_state,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 3;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "communication_reason_type_person_state.person_states_code":
					$counter++;
					break;
				case "person_states_code":
					$counter++;
					break;
				case "communication_reason_type_person_state.id_communication_reason_type":
					$counter++;
					break;
				case "id_communication_reason_type":
					$counter++;
					break;
				case "communication_reason_type_person_state.id":
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
