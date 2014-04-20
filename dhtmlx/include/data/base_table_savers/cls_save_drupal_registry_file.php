<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_registry_file extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_registry_file';
		}

	public static function save_object($drupal_registry_file,$db_manager,$application)
		{
			if (is_null($drupal_registry_file))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_registry_file->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_registry_file->get_filename_is_dirty())
				{
				$data[] = array("name" => "filename" , "value" => $drupal_registry_file->get_filename() , "type" => "varchar");
				}
			if ($drupal_registry_file->get_hash_is_dirty())
				{
				$data[] = array("name" => "hash" , "value" => $drupal_registry_file->get_hash() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_registry_file',$drupal_registry_file->get_id()))
				{
				$result = $drupal_registry_file->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_registry_file',$drupal_registry_file->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_registry_file',$drupal_registry_file->get_id(),$application,$drupal_registry_file->get_id_save_location(),false);
				$drupal_registry_file->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_registry_file->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_registry_file',$drupal_registry_file->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_registry_file',$drupal_registry_file->get_id(),$application,$drupal_registry_file->get_id_save_location(),true);
				$drupal_registry_file->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_registry_file = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_registry_file = cls_table_factory::get_common_drupal_registry_file()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_registry_file))
				{
					$drupal_registry_file = cls_table_factory::create_instance('drupal_registry_file');
				}
			$drupal_registry_file->fill($data,false);
			return self::save_object($drupal_registry_file,$db_manager,$application);
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
				case "drupal_registry_file.filename":
					$counter++;
					break;
				case "filename":
					$counter++;
					break;
				case "drupal_registry_file.hash":
					$counter++;
					break;
				case "hash":
					$counter++;
					break;
				case "drupal_registry_file.id":
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
