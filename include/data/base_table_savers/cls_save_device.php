<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_device extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'device';
		}

	public static function save_object($device,$db_manager,$application)
		{
			if (is_null($device))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$device->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($device->get_config_is_dirty())
				{
				$data[] = array("name" => "config" , "value" => $device->get_config() , "type" => "text");
				}
			if ($device->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $device->get_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('device',$device->get_id()))
				{
				$result = $device->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('device',$device->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('device',$device->get_id(),$application,$device->get_id_save_location(),false);
				$device->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $device->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('device',$device->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('device',$device->get_id(),$application,$device->get_id_save_location(),true);
				$device->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$device = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$device = cls_table_factory::get_common_device()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($device))
				{
					$device = cls_table_factory::create_instance('device');
				}
			$device->fill($data,false);
			return self::save_object($device,$db_manager,$application);
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
				case "device.config":
					$counter++;
					break;
				case "config":
					$counter++;
					break;
				case "device.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "device.id":
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
