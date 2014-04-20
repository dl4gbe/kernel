<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_file_usage extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_file_usage';
		}

	public static function save_object($drupal_file_usage,$db_manager,$application)
		{
			if (is_null($drupal_file_usage))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_file_usage->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_file_usage->get_fid_is_dirty())
				{
				$data[] = array("name" => "fid" , "value" => $drupal_file_usage->get_fid() , "type" => "int8");
				}
			if ($drupal_file_usage->get_module_is_dirty())
				{
				$data[] = array("name" => "module" , "value" => $drupal_file_usage->get_module() , "type" => "varchar");
				}
			if ($drupal_file_usage->get_type_is_dirty())
				{
				$data[] = array("name" => "type" , "value" => $drupal_file_usage->get_type() , "type" => "varchar");
				}
			if ($drupal_file_usage->get_count_is_dirty())
				{
				$data[] = array("name" => "count" , "value" => $drupal_file_usage->get_count() , "type" => "int8");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_file_usage',$drupal_file_usage->get_id()))
				{
				$result = $drupal_file_usage->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_file_usage',$drupal_file_usage->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_file_usage',$drupal_file_usage->get_id(),$application,$drupal_file_usage->get_id_save_location(),false);
				$drupal_file_usage->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_file_usage->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_file_usage',$drupal_file_usage->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_file_usage',$drupal_file_usage->get_id(),$application,$drupal_file_usage->get_id_save_location(),true);
				$drupal_file_usage->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_file_usage = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_file_usage = cls_table_factory::get_common_drupal_file_usage()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_file_usage))
				{
					$drupal_file_usage = cls_table_factory::create_instance('drupal_file_usage');
				}
			$drupal_file_usage->fill($data,false);
			return self::save_object($drupal_file_usage,$db_manager,$application);
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
				case "drupal_file_usage.fid":
					$counter++;
					break;
				case "fid":
					$counter++;
					break;
				case "drupal_file_usage.module":
					$counter++;
					break;
				case "module":
					$counter++;
					break;
				case "drupal_file_usage.type":
					$counter++;
					break;
				case "type":
					$counter++;
					break;
				case "drupal_file_usage.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_file_usage.count":
					$counter++;
					break;
				case "count":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
