<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_sessions extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_sessions';
		}

	public static function save_object($drupal_sessions,$db_manager,$application)
		{
			if (is_null($drupal_sessions))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_sessions->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_sessions->get_uid_is_dirty())
				{
				$data[] = array("name" => "uid" , "value" => $drupal_sessions->get_uid() , "type" => "int8");
				}
			if ($drupal_sessions->get_sid_is_dirty())
				{
				$data[] = array("name" => "sid" , "value" => $drupal_sessions->get_sid() , "type" => "varchar");
				}
			if ($drupal_sessions->get_ssid_is_dirty())
				{
				$data[] = array("name" => "ssid" , "value" => $drupal_sessions->get_ssid() , "type" => "varchar");
				}
			if ($drupal_sessions->get_hostname_is_dirty())
				{
				$data[] = array("name" => "hostname" , "value" => $drupal_sessions->get_hostname() , "type" => "varchar");
				}
			if ($drupal_sessions->get_timestamp_is_dirty())
				{
				$data[] = array("name" => "timestamp" , "value" => $drupal_sessions->get_timestamp() , "type" => "int4");
				}
			if ($drupal_sessions->get_cache_is_dirty())
				{
				$data[] = array("name" => "cache" , "value" => $drupal_sessions->get_cache() , "type" => "int4");
				}
			if ($drupal_sessions->get_session_is_dirty())
				{
				$data[] = array("name" => "session" , "value" => $drupal_sessions->get_session() , "type" => "bytea");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_sessions',$drupal_sessions->get_id()))
				{
				$result = $drupal_sessions->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_sessions',$drupal_sessions->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_sessions',$drupal_sessions->get_id(),$application,$drupal_sessions->get_id_save_location(),false);
				$drupal_sessions->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_sessions->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_sessions',$drupal_sessions->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_sessions',$drupal_sessions->get_id(),$application,$drupal_sessions->get_id_save_location(),true);
				$drupal_sessions->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_sessions = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_sessions = cls_table_factory::get_common_drupal_sessions()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_sessions))
				{
					$drupal_sessions = cls_table_factory::create_instance('drupal_sessions');
				}
			$drupal_sessions->fill($data,false);
			return self::save_object($drupal_sessions,$db_manager,$application);
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
				case "drupal_sessions.uid":
					$counter++;
					break;
				case "uid":
					$counter++;
					break;
				case "drupal_sessions.sid":
					$counter++;
					break;
				case "sid":
					$counter++;
					break;
				case "drupal_sessions.ssid":
					$counter++;
					break;
				case "ssid":
					$counter++;
					break;
				case "drupal_sessions.hostname":
					$counter++;
					break;
				case "hostname":
					$counter++;
					break;
				case "drupal_sessions.timestamp":
					$counter++;
					break;
				case "timestamp":
					$counter++;
					break;
				case "drupal_sessions.cache":
					$counter++;
					break;
				case "cache":
					$counter++;
					break;
				case "drupal_sessions.session":
					$counter++;
					break;
				case "session":
					$counter++;
					break;
				case "drupal_sessions.id":
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
