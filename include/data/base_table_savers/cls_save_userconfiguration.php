<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_userconfiguration extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'userconfiguration';
		}

	public static function save_object($userconfiguration,$db_manager,$application)
		{
			if (is_null($userconfiguration))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$userconfiguration->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($userconfiguration->get_app_is_dirty())
				{
				$data[] = array("name" => "app" , "value" => $userconfiguration->get_app() , "type" => "varchar");
				}
			if ($userconfiguration->get_value_is_dirty())
				{
				$data[] = array("name" => "value" , "value" => $userconfiguration->get_value() , "type" => "varchar");
				}
			if ($userconfiguration->get_key_is_dirty())
				{
				$data[] = array("name" => "key" , "value" => $userconfiguration->get_key() , "type" => "varchar");
				}
			if ($userconfiguration->get_computer_is_dirty())
				{
				$data[] = array("name" => "computer" , "value" => $userconfiguration->get_computer() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('userconfiguration',$userconfiguration->get_id()))
				{
				$result = $userconfiguration->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('userconfiguration',$userconfiguration->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('userconfiguration',$userconfiguration->get_id(),$application,$userconfiguration->get_id_save_location(),false);
				$userconfiguration->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $userconfiguration->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('userconfiguration',$userconfiguration->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('userconfiguration',$userconfiguration->get_id(),$application,$userconfiguration->get_id_save_location(),true);
				$userconfiguration->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$userconfiguration = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$userconfiguration = cls_table_factory::get_common_userconfiguration()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($userconfiguration))
				{
					$userconfiguration = cls_table_factory::create_instance('userconfiguration');
				}
			$userconfiguration->fill($data,false);
			return self::save_object($userconfiguration,$db_manager,$application);
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
				case "userconfiguration.app":
					$counter++;
					break;
				case "app":
					$counter++;
					break;
				case "userconfiguration.value":
					$counter++;
					break;
				case "value":
					$counter++;
					break;
				case "userconfiguration.key":
					$counter++;
					break;
				case "key":
					$counter++;
					break;
				case "userconfiguration.computer":
					$counter++;
					break;
				case "computer":
					$counter++;
					break;
				case "userconfiguration.id":
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
