<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_users extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_users';
		}

	public static function save_object($drupal_users,$db_manager,$application)
		{
			if (is_null($drupal_users))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_users->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_users->get_data_is_dirty())
				{
				$data[] = array("name" => "data" , "value" => $drupal_users->get_data() , "type" => "bytea");
				}
			if ($drupal_users->get_init_is_dirty())
				{
				$data[] = array("name" => "init" , "value" => $drupal_users->get_init() , "type" => "varchar");
				}
			if ($drupal_users->get_picture_is_dirty())
				{
				$data[] = array("name" => "picture" , "value" => $drupal_users->get_picture() , "type" => "int4");
				}
			if ($drupal_users->get_language_is_dirty())
				{
				$data[] = array("name" => "language" , "value" => $drupal_users->get_language() , "type" => "varchar");
				}
			if ($drupal_users->get_timezone_is_dirty())
				{
				$data[] = array("name" => "timezone" , "value" => $drupal_users->get_timezone() , "type" => "varchar");
				}
			if ($drupal_users->get_status_is_dirty())
				{
				$data[] = array("name" => "status" , "value" => $drupal_users->get_status() , "type" => "int2");
				}
			if ($drupal_users->get_login_is_dirty())
				{
				$data[] = array("name" => "login" , "value" => $drupal_users->get_login() , "type" => "int4");
				}
			if ($drupal_users->get_access_is_dirty())
				{
				$data[] = array("name" => "access" , "value" => $drupal_users->get_access() , "type" => "int4");
				}
			if ($drupal_users->get_created_is_dirty())
				{
				$data[] = array("name" => "created" , "value" => $drupal_users->get_created() , "type" => "int4");
				}
			if ($drupal_users->get_signature_format_is_dirty())
				{
				$data[] = array("name" => "signature_format" , "value" => $drupal_users->get_signature_format() , "type" => "varchar");
				}
			if ($drupal_users->get_signature_is_dirty())
				{
				$data[] = array("name" => "signature" , "value" => $drupal_users->get_signature() , "type" => "varchar");
				}
			if ($drupal_users->get_theme_is_dirty())
				{
				$data[] = array("name" => "theme" , "value" => $drupal_users->get_theme() , "type" => "varchar");
				}
			if ($drupal_users->get_mail_is_dirty())
				{
				$data[] = array("name" => "mail" , "value" => $drupal_users->get_mail() , "type" => "varchar");
				}
			if ($drupal_users->get_pass_is_dirty())
				{
				$data[] = array("name" => "pass" , "value" => $drupal_users->get_pass() , "type" => "varchar");
				}
			if ($drupal_users->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $drupal_users->get_name() , "type" => "varchar");
				}
			if ($drupal_users->get_uid_is_dirty())
				{
				$data[] = array("name" => "uid" , "value" => $drupal_users->get_uid() , "type" => "int8");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_users',$drupal_users->get_id()))
				{
				$result = $drupal_users->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_users',$drupal_users->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_users',$drupal_users->get_id(),$application,$drupal_users->get_id_save_location(),false);
				$drupal_users->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_users->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_users',$drupal_users->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_users',$drupal_users->get_id(),$application,$drupal_users->get_id_save_location(),true);
				$drupal_users->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_users = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_users = cls_table_factory::get_common_drupal_users()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_users))
				{
					$drupal_users = cls_table_factory::create_instance('drupal_users');
				}
			$drupal_users->fill($data,false);
			return self::save_object($drupal_users,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 17;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "drupal_users.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_users.data":
					$counter++;
					break;
				case "data":
					$counter++;
					break;
				case "drupal_users.init":
					$counter++;
					break;
				case "init":
					$counter++;
					break;
				case "drupal_users.picture":
					$counter++;
					break;
				case "picture":
					$counter++;
					break;
				case "drupal_users.language":
					$counter++;
					break;
				case "language":
					$counter++;
					break;
				case "drupal_users.timezone":
					$counter++;
					break;
				case "timezone":
					$counter++;
					break;
				case "drupal_users.status":
					$counter++;
					break;
				case "status":
					$counter++;
					break;
				case "drupal_users.login":
					$counter++;
					break;
				case "login":
					$counter++;
					break;
				case "drupal_users.access":
					$counter++;
					break;
				case "access":
					$counter++;
					break;
				case "drupal_users.created":
					$counter++;
					break;
				case "created":
					$counter++;
					break;
				case "drupal_users.signature_format":
					$counter++;
					break;
				case "signature_format":
					$counter++;
					break;
				case "drupal_users.signature":
					$counter++;
					break;
				case "signature":
					$counter++;
					break;
				case "drupal_users.theme":
					$counter++;
					break;
				case "theme":
					$counter++;
					break;
				case "drupal_users.mail":
					$counter++;
					break;
				case "mail":
					$counter++;
					break;
				case "drupal_users.pass":
					$counter++;
					break;
				case "pass":
					$counter++;
					break;
				case "drupal_users.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "drupal_users.uid":
					$counter++;
					break;
				case "uid":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
