<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_config_group extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'config_group';
		}

	public static function save_object($config_group,$db_manager,$application)
		{
			if (is_null($config_group))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$config_group->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($config_group->get_position_is_dirty())
				{
				$data[] = array("name" => "position" , "value" => $config_group->get_position() , "type" => "int4");
				}
			if ($config_group->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $config_group->get_name() , "type" => "varchar");
				}
			if ($config_group->get_id_application_is_dirty())
				{
				$data[] = array("name" => "id_application" , "value" => $config_group->get_id_application() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('config_group',$config_group->get_id()))
				{
				$result = $config_group->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('config_group',$config_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('config_group',$config_group->get_id(),$application,$config_group->get_id_save_location(),false);
				$config_group->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $config_group->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('config_group',$config_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('config_group',$config_group->get_id(),$application,$config_group->get_id_save_location(),true);
				$config_group->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$config_group = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$config_group = cls_table_factory::get_common_config_group()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($config_group))
				{
					$config_group = cls_table_factory::create_instance('config_group');
				}
			$config_group->fill($data,false);
			return self::save_object($config_group,$db_manager,$application);
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
				case "config_group.position":
					$counter++;
					break;
				case "position":
					$counter++;
					break;
				case "config_group.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "config_group.id_application":
					$counter++;
					break;
				case "id_application":
					$counter++;
					break;
				case "config_group.id":
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
