<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_computer_configuration extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'computer_configuration';
		}

	public static function save_object($computer_configuration,$db_manager,$application)
		{
			if (is_null($computer_configuration))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$computer_configuration->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($computer_configuration->get_app_is_dirty())
				{
				$data[] = array("name" => "app" , "value" => $computer_configuration->get_app() , "type" => "varchar");
				}
			if ($computer_configuration->get_value_is_dirty())
				{
				$data[] = array("name" => "value" , "value" => $computer_configuration->get_value() , "type" => "varchar");
				}
			if ($computer_configuration->get_key_is_dirty())
				{
				$data[] = array("name" => "key" , "value" => $computer_configuration->get_key() , "type" => "varchar");
				}
			if ($computer_configuration->get_computer_is_dirty())
				{
				$data[] = array("name" => "computer" , "value" => $computer_configuration->get_computer() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('computer_configuration',$computer_configuration->get_id()))
				{
				$result = $computer_configuration->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('computer_configuration',$computer_configuration->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('computer_configuration',$computer_configuration->get_id(),$application,$computer_configuration->get_id_save_location(),false);
				$computer_configuration->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $computer_configuration->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('computer_configuration',$computer_configuration->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('computer_configuration',$computer_configuration->get_id(),$application,$computer_configuration->get_id_save_location(),true);
				$computer_configuration->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$computer_configuration = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$computer_configuration = cls_table_factory::get_common_computer_configuration()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($computer_configuration))
				{
					$computer_configuration = cls_table_factory::create_instance('computer_configuration');
				}
			$computer_configuration->fill($data,false);
			return self::save_object($computer_configuration,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 5;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "computer_configuration.app":
					$counter++;
					break;
				case "app":
					$counter++;
					break;
				case "computer_configuration.value":
					$counter++;
					break;
				case "value":
					$counter++;
					break;
				case "computer_configuration.key":
					$counter++;
					break;
				case "key":
					$counter++;
					break;
				case "computer_configuration.computer":
					$counter++;
					break;
				case "computer":
					$counter++;
					break;
				case "computer_configuration.id":
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
