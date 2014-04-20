<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_logon extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'logon';
		}

	public static function save_object($logon,$db_manager,$application)
		{
			if (is_null($logon))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$logon->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($logon->get_id_person_is_dirty())
				{
				$data[] = array("name" => "id_person" , "value" => $logon->get_id_person() , "type" => "uuid");
				}
			if ($logon->get_username_is_dirty())
				{
				$data[] = array("name" => "username" , "value" => $logon->get_username() , "type" => "varchar");
				}
			if ($logon->get_password_is_dirty())
				{
				$data[] = array("name" => "password" , "value" => $logon->get_password() , "type" => "varchar");
				}
			if ($logon->get_id_location_is_dirty())
				{
				$data[] = array("name" => "id_location" , "value" => $logon->get_id_location() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('logon',$logon->get_id()))
				{
				$result = $logon->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('logon',$logon->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('logon',$logon->get_id(),$application,$logon->get_id_save_location(),false);
				$logon->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $logon->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('logon',$logon->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('logon',$logon->get_id(),$application,$logon->get_id_save_location(),true);
				$logon->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$logon = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$logon = cls_table_factory::get_common_logon()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($logon))
				{
					$logon = cls_table_factory::create_instance('logon');
				}
			$logon->fill($data,false);
			return self::save_object($logon,$db_manager,$application);
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
				case "logon.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "logon.id_person":
					$counter++;
					break;
				case "id_person":
					$counter++;
					break;
				case "logon.username":
					$counter++;
					break;
				case "username":
					$counter++;
					break;
				case "logon.password":
					$counter++;
					break;
				case "password":
					$counter++;
					break;
				case "logon.id_location":
					$counter++;
					break;
				case "id_location":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
