<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_communication extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'communication';
		}

	public static function save_object($communication,$db_manager,$application)
		{
			if (is_null($communication))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$communication->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($communication->get_id_communication_type_is_dirty())
				{
				$data[] = array("name" => "id_communication_type" , "value" => $communication->get_id_communication_type() , "type" => "uuid");
				}
			if ($communication->get_value_is_dirty())
				{
				$data[] = array("name" => "value" , "value" => $communication->get_value() , "type" => "varchar");
				}
			if ($communication->get_id_person_is_dirty())
				{
				$data[] = array("name" => "id_person" , "value" => $communication->get_id_person() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('communication',$communication->get_id()))
				{
				$result = $communication->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('communication',$communication->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('communication',$communication->get_id(),$application,$communication->get_id_save_location(),false);
				$communication->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $communication->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('communication',$communication->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('communication',$communication->get_id(),$application,$communication->get_id_save_location(),true);
				$communication->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$communication = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$communication = cls_table_factory::get_common_communication()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($communication))
				{
					$communication = cls_table_factory::create_instance('communication');
				}
			$communication->fill($data,false);
			return self::save_object($communication,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 4;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "communication.id_communication_type":
					$counter++;
					break;
				case "id_communication_type":
					$counter++;
					break;
				case "communication.value":
					$counter++;
					break;
				case "value":
					$counter++;
					break;
				case "communication.id_person":
					$counter++;
					break;
				case "id_person":
					$counter++;
					break;
				case "communication.id":
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
