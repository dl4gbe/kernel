<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_person_states_groups extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'person_states_groups';
		}

	public static function save_object($person_states_groups,$db_manager,$application)
		{
			if (is_null($person_states_groups))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$person_states_groups->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($person_states_groups->get_type_is_dirty())
				{
				$data[] = array("name" => "type" , "value" => $person_states_groups->get_type() , "type" => "bpchar");
				}
			if ($person_states_groups->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $person_states_groups->get_name() , "type" => "varchar");
				}
			if ($person_states_groups->get_locationindependant_is_dirty())
				{
				$data[] = array("name" => "locationindependant" , "value" => $person_states_groups->get_locationindependant() , "type" => "bool");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('person_states_groups',$person_states_groups->get_id()))
				{
				$result = $person_states_groups->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('person_states_groups',$person_states_groups->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$person_states_groups->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $person_states_groups->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('person_states_groups',$person_states_groups->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$person_states_groups->after_save($db_manager,$application,true);
				}
				if (!is_null($application->get_table_test())
					{
					}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('/include/data/table_factory/cls_table_factory.php');
			$person_states_groups = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$person_states_groups = cls_table_factory::get_common_person_states_groups()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($person_states_groups))
				{
					$person_states_groups = cls_table_factory::create_instance('person_states_groups');
				}
			$person_states_groups->fill($data,false);
			return self::save_object($person_states_groups,$db_manager,$application);
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
				case "person_states_groups.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "person_states_groups.type":
					$counter++;
					break;
				case "type":
					$counter++;
					break;
				case "person_states_groups.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "person_states_groups.locationindependant":
					$counter++;
					break;
				case "locationindependant":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
