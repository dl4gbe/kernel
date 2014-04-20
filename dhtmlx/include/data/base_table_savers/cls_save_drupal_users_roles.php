<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_users_roles extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_users_roles';
		}

	public static function save_object($drupal_users_roles,$db_manager,$application)
		{
			if (is_null($drupal_users_roles))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_users_roles->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_users_roles->get_uid_is_dirty())
				{
				$data[] = array("name" => "uid" , "value" => $drupal_users_roles->get_uid() , "type" => "int8");
				}
			if ($drupal_users_roles->get_rid_is_dirty())
				{
				$data[] = array("name" => "rid" , "value" => $drupal_users_roles->get_rid() , "type" => "int8");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_users_roles',$drupal_users_roles->get_id()))
				{
				$result = $drupal_users_roles->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_users_roles',$drupal_users_roles->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_users_roles',$drupal_users_roles->get_id(),$application,$drupal_users_roles->get_id_save_location(),false);
				$drupal_users_roles->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_users_roles->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_users_roles',$drupal_users_roles->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_users_roles',$drupal_users_roles->get_id(),$application,$drupal_users_roles->get_id_save_location(),true);
				$drupal_users_roles->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_users_roles = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_users_roles = cls_table_factory::get_common_drupal_users_roles()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_users_roles))
				{
					$drupal_users_roles = cls_table_factory::create_instance('drupal_users_roles');
				}
			$drupal_users_roles->fill($data,false);
			return self::save_object($drupal_users_roles,$db_manager,$application);
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
				case "drupal_users_roles.uid":
					$counter++;
					break;
				case "uid":
					$counter++;
					break;
				case "drupal_users_roles.rid":
					$counter++;
					break;
				case "rid":
					$counter++;
					break;
				case "drupal_users_roles.id":
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
