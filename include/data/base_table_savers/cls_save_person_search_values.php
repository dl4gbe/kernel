<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_person_search_values extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'person_search_values';
		}

	public static function save_object($person_search_values,$db_manager,$application)
		{
			if (is_null($person_search_values))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$person_search_values->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($person_search_values->get_value_is_dirty())
				{
				$data[] = array("name" => "value" , "value" => $person_search_values->get_value() , "type" => "varchar");
				}
			if ($person_search_values->get_id_person_is_dirty())
				{
				$data[] = array("name" => "id_person" , "value" => $person_search_values->get_id_person() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('person_search_values',$person_search_values->get_id()))
				{
				$result = $person_search_values->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('person_search_values',$person_search_values->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('person_search_values',$person_search_values->get_id(),$application,$person_search_values->get_id_save_location(),false);
				$person_search_values->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $person_search_values->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('person_search_values',$person_search_values->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('person_search_values',$person_search_values->get_id(),$application,$person_search_values->get_id_save_location(),true);
				$person_search_values->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$person_search_values = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$person_search_values = cls_table_factory::get_common_person_search_values()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($person_search_values))
				{
					$person_search_values = cls_table_factory::create_instance('person_search_values');
				}
			$person_search_values->fill($data,false);
			return self::save_object($person_search_values,$db_manager,$application);
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
				case "person_search_values.value":
					$counter++;
					break;
				case "value":
					$counter++;
					break;
				case "person_search_values.id_person":
					$counter++;
					break;
				case "id_person":
					$counter++;
					break;
				case "person_search_values.id":
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