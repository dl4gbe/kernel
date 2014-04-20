<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_watchdog extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_watchdog';
		}

	public static function save_object($drupal_watchdog,$db_manager,$application)
		{
			if (is_null($drupal_watchdog))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_watchdog->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_watchdog->get_timestamp_is_dirty())
				{
				$data[] = array("name" => "timestamp" , "value" => $drupal_watchdog->get_timestamp() , "type" => "int4");
				}
			if ($drupal_watchdog->get_hostname_is_dirty())
				{
				$data[] = array("name" => "hostname" , "value" => $drupal_watchdog->get_hostname() , "type" => "varchar");
				}
			if ($drupal_watchdog->get_referer_is_dirty())
				{
				$data[] = array("name" => "referer" , "value" => $drupal_watchdog->get_referer() , "type" => "text");
				}
			if ($drupal_watchdog->get_location_is_dirty())
				{
				$data[] = array("name" => "location" , "value" => $drupal_watchdog->get_location() , "type" => "text");
				}
			if ($drupal_watchdog->get_link_is_dirty())
				{
				$data[] = array("name" => "link" , "value" => $drupal_watchdog->get_link() , "type" => "varchar");
				}
			if ($drupal_watchdog->get_severity_is_dirty())
				{
				$data[] = array("name" => "severity" , "value" => $drupal_watchdog->get_severity() , "type" => "int4");
				}
			if ($drupal_watchdog->get_variables_is_dirty())
				{
				$data[] = array("name" => "variables" , "value" => $drupal_watchdog->get_variables() , "type" => "bytea");
				}
			if ($drupal_watchdog->get_message_is_dirty())
				{
				$data[] = array("name" => "message" , "value" => $drupal_watchdog->get_message() , "type" => "text");
				}
			if ($drupal_watchdog->get_type_is_dirty())
				{
				$data[] = array("name" => "type" , "value" => $drupal_watchdog->get_type() , "type" => "varchar");
				}
			if ($drupal_watchdog->get_uid_is_dirty())
				{
				$data[] = array("name" => "uid" , "value" => $drupal_watchdog->get_uid() , "type" => "int4");
				}
			if ($drupal_watchdog->get_wid_is_dirty())
				{
				$data[] = array("name" => "wid" , "value" => $drupal_watchdog->get_wid() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_watchdog',$drupal_watchdog->get_id()))
				{
				$result = $drupal_watchdog->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_watchdog',$drupal_watchdog->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_watchdog',$drupal_watchdog->get_id(),$application,$drupal_watchdog->get_id_save_location(),false);
				$drupal_watchdog->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_watchdog->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_watchdog',$drupal_watchdog->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_watchdog',$drupal_watchdog->get_id(),$application,$drupal_watchdog->get_id_save_location(),true);
				$drupal_watchdog->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_watchdog = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_watchdog = cls_table_factory::get_common_drupal_watchdog()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_watchdog))
				{
					$drupal_watchdog = cls_table_factory::create_instance('drupal_watchdog');
				}
			$drupal_watchdog->fill($data,false);
			return self::save_object($drupal_watchdog,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 12;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "drupal_watchdog.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_watchdog.timestamp":
					$counter++;
					break;
				case "timestamp":
					$counter++;
					break;
				case "drupal_watchdog.hostname":
					$counter++;
					break;
				case "hostname":
					$counter++;
					break;
				case "drupal_watchdog.referer":
					$counter++;
					break;
				case "referer":
					$counter++;
					break;
				case "drupal_watchdog.location":
					$counter++;
					break;
				case "location":
					$counter++;
					break;
				case "drupal_watchdog.link":
					$counter++;
					break;
				case "link":
					$counter++;
					break;
				case "drupal_watchdog.severity":
					$counter++;
					break;
				case "severity":
					$counter++;
					break;
				case "drupal_watchdog.variables":
					$counter++;
					break;
				case "variables":
					$counter++;
					break;
				case "drupal_watchdog.message":
					$counter++;
					break;
				case "message":
					$counter++;
					break;
				case "drupal_watchdog.type":
					$counter++;
					break;
				case "type":
					$counter++;
					break;
				case "drupal_watchdog.uid":
					$counter++;
					break;
				case "uid":
					$counter++;
					break;
				case "drupal_watchdog.wid":
					$counter++;
					break;
				case "wid":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
