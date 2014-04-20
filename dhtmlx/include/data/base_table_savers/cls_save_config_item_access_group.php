<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_config_item_access_group extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'config_item_access_group';
		}

	public static function save_object($config_item_access_group,$db_manager,$application)
		{
			if (is_null($config_item_access_group))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$config_item_access_group->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($config_item_access_group->get_id_person_access_group_is_dirty())
				{
				$data[] = array("name" => "id_person_access_group" , "value" => $config_item_access_group->get_id_person_access_group() , "type" => "uuid");
				}
			if ($config_item_access_group->get_read_only_is_dirty())
				{
				$data[] = array("name" => "read_only" , "value" => $config_item_access_group->get_read_only() , "type" => "bool");
				}
			if ($config_item_access_group->get_grant_access_is_dirty())
				{
				$data[] = array("name" => "grant_access" , "value" => $config_item_access_group->get_grant_access() , "type" => "bool");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('config_item_access_group',$config_item_access_group->get_id()))
				{
				$result = $config_item_access_group->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('config_item_access_group',$config_item_access_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('config_item_access_group',$config_item_access_group->get_id(),$application,$config_item_access_group->get_id_save_location(),false);
				$config_item_access_group->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $config_item_access_group->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('config_item_access_group',$config_item_access_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('config_item_access_group',$config_item_access_group->get_id(),$application,$config_item_access_group->get_id_save_location(),true);
				$config_item_access_group->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$config_item_access_group = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$config_item_access_group = cls_table_factory::get_common_config_item_access_group()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($config_item_access_group))
				{
					$config_item_access_group = cls_table_factory::create_instance('config_item_access_group');
				}
			$config_item_access_group->fill($data,false);
			return self::save_object($config_item_access_group,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 4;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "config_item_access_group.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "config_item_access_group.id_person_access_group":
					$counter++;
					break;
				case "id_person_access_group":
					$counter++;
					break;
				case "config_item_access_group.read_only":
					$counter++;
					break;
				case "read_only":
					$counter++;
					break;
				case "config_item_access_group.grant_access":
					$counter++;
					break;
				case "grant_access":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
