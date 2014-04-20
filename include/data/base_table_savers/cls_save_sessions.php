<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_sessions extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'sessions';
		}

	public static function save_object($sessions,$db_manager,$application)
		{
			if (is_null($sessions))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$sessions->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($sessions->get_uid_is_dirty())
				{
				$data[] = array("name" => "uid" , "value" => $sessions->get_uid() , "type" => "int8");
				}
			if ($sessions->get_sid_is_dirty())
				{
				$data[] = array("name" => "sid" , "value" => $sessions->get_sid() , "type" => "varchar");
				}
			if ($sessions->get_ssid_is_dirty())
				{
				$data[] = array("name" => "ssid" , "value" => $sessions->get_ssid() , "type" => "varchar");
				}
			if ($sessions->get_hostname_is_dirty())
				{
				$data[] = array("name" => "hostname" , "value" => $sessions->get_hostname() , "type" => "varchar");
				}
			if ($sessions->get_timestamp_is_dirty())
				{
				$data[] = array("name" => "timestamp" , "value" => $sessions->get_timestamp() , "type" => "int4");
				}
			if ($sessions->get_cache_is_dirty())
				{
				$data[] = array("name" => "cache" , "value" => $sessions->get_cache() , "type" => "int4");
				}
			if ($sessions->get_session_is_dirty())
				{
				$data[] = array("name" => "session" , "value" => $sessions->get_session() , "type" => "bytea");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('sessions',$sessions->get_id()))
				{
				$result = $sessions->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('sessions',$sessions->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('sessions',$sessions->get_id(),$application,$sessions->get_id_save_location(),false);
				$sessions->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $sessions->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('sessions',$sessions->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('sessions',$sessions->get_id(),$application,$sessions->get_id_save_location(),true);
				$sessions->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('/include/data/table_factory/cls_table_factory.php');
			$sessions = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$sessions = cls_table_factory::get_common_sessions()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($sessions))
				{
					$sessions = cls_table_factory::create_instance('sessions');
				}
			$sessions->fill($data,false);
			return self::save_object($sessions,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 8;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "sessions.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "sessions.uid":
					$counter++;
					break;
				case "uid":
					$counter++;
					break;
				case "sessions.sid":
					$counter++;
					break;
				case "sid":
					$counter++;
					break;
				case "sessions.ssid":
					$counter++;
					break;
				case "ssid":
					$counter++;
					break;
				case "sessions.hostname":
					$counter++;
					break;
				case "hostname":
					$counter++;
					break;
				case "sessions.timestamp":
					$counter++;
					break;
				case "timestamp":
					$counter++;
					break;
				case "sessions.cache":
					$counter++;
					break;
				case "cache":
					$counter++;
					break;
				case "sessions.session":
					$counter++;
					break;
				case "session":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
