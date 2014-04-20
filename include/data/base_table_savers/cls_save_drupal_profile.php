<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_profile extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_profile';
		}

	public static function save_object($drupal_profile,$db_manager,$application)
		{
			if (is_null($drupal_profile))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_profile->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_profile->get_changed_is_dirty())
				{
				$data[] = array("name" => "changed" , "value" => $drupal_profile->get_changed() , "type" => "int4");
				}
			if ($drupal_profile->get_created_is_dirty())
				{
				$data[] = array("name" => "created" , "value" => $drupal_profile->get_created() , "type" => "int4");
				}
			if ($drupal_profile->get_label_is_dirty())
				{
				$data[] = array("name" => "label" , "value" => $drupal_profile->get_label() , "type" => "varchar");
				}
			if ($drupal_profile->get_uid_is_dirty())
				{
				$data[] = array("name" => "uid" , "value" => $drupal_profile->get_uid() , "type" => "int8");
				}
			if ($drupal_profile->get_type_is_dirty())
				{
				$data[] = array("name" => "type" , "value" => $drupal_profile->get_type() , "type" => "varchar");
				}
			if ($drupal_profile->get_pid_is_dirty())
				{
				$data[] = array("name" => "pid" , "value" => $drupal_profile->get_pid() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_profile',$drupal_profile->get_id()))
				{
				$result = $drupal_profile->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_profile',$drupal_profile->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_profile',$drupal_profile->get_id(),$application,$drupal_profile->get_id_save_location(),false);
				$drupal_profile->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_profile->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_profile',$drupal_profile->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_profile',$drupal_profile->get_id(),$application,$drupal_profile->get_id_save_location(),true);
				$drupal_profile->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_profile = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_profile = cls_table_factory::get_common_drupal_profile()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_profile))
				{
					$drupal_profile = cls_table_factory::create_instance('drupal_profile');
				}
			$drupal_profile->fill($data,false);
			return self::save_object($drupal_profile,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 7;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "drupal_profile.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_profile.changed":
					$counter++;
					break;
				case "changed":
					$counter++;
					break;
				case "drupal_profile.created":
					$counter++;
					break;
				case "created":
					$counter++;
					break;
				case "drupal_profile.label":
					$counter++;
					break;
				case "label":
					$counter++;
					break;
				case "drupal_profile.uid":
					$counter++;
					break;
				case "uid":
					$counter++;
					break;
				case "drupal_profile.type":
					$counter++;
					break;
				case "type":
					$counter++;
					break;
				case "drupal_profile.pid":
					$counter++;
					break;
				case "pid":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
