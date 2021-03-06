<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_config_group_item extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'config_group_item';
		}

	public static function save_object($config_group_item,$db_manager,$application)
		{
			if (is_null($config_group_item))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$config_group_item->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($config_group_item->get_id_config_group_is_dirty())
				{
				$data[] = array("name" => "id_config_group" , "value" => $config_group_item->get_id_config_group() , "type" => "uuid");
				}
			if ($config_group_item->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $config_group_item->get_name() , "type" => "varchar");
				}
			if ($config_group_item->get_table_name_is_dirty())
				{
				$data[] = array("name" => "table_name" , "value" => $config_group_item->get_table_name() , "type" => "varchar");
				}
			if ($config_group_item->get_path_is_dirty())
				{
				$data[] = array("name" => "path" , "value" => $config_group_item->get_path() , "type" => "varchar");
				}
			if ($config_group_item->get_source_is_dirty())
				{
				$data[] = array("name" => "source" , "value" => $config_group_item->get_source() , "type" => "text");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('config_group_item',$config_group_item->get_id()))
				{
				$result = $config_group_item->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('config_group_item',$config_group_item->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('config_group_item',$config_group_item->get_id(),$application,$config_group_item->get_id_save_location(),false);
				$config_group_item->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $config_group_item->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('config_group_item',$config_group_item->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('config_group_item',$config_group_item->get_id(),$application,$config_group_item->get_id_save_location(),true);
				$config_group_item->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$config_group_item = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$config_group_item = cls_table_factory::get_common_config_group_item()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($config_group_item))
				{
					$config_group_item = cls_table_factory::create_instance('config_group_item');
				}
			$config_group_item->fill($data,false);
			return self::save_object($config_group_item,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 6;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "config_group_item.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "config_group_item.id_config_group":
					$counter++;
					break;
				case "id_config_group":
					$counter++;
					break;
				case "config_group_item.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "config_group_item.table_name":
					$counter++;
					break;
				case "table_name":
					$counter++;
					break;
				case "config_group_item.path":
					$counter++;
					break;
				case "path":
					$counter++;
					break;
				case "config_group_item.source":
					$counter++;
					break;
				case "source":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
