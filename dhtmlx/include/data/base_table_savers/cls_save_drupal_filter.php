<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_filter extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_filter';
		}

	public static function save_object($drupal_filter,$db_manager,$application)
		{
			if (is_null($drupal_filter))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_filter->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_filter->get_format_is_dirty())
				{
				$data[] = array("name" => "format" , "value" => $drupal_filter->get_format() , "type" => "varchar");
				}
			if ($drupal_filter->get_module_is_dirty())
				{
				$data[] = array("name" => "module" , "value" => $drupal_filter->get_module() , "type" => "varchar");
				}
			if ($drupal_filter->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $drupal_filter->get_name() , "type" => "varchar");
				}
			if ($drupal_filter->get_weight_is_dirty())
				{
				$data[] = array("name" => "weight" , "value" => $drupal_filter->get_weight() , "type" => "int4");
				}
			if ($drupal_filter->get_status_is_dirty())
				{
				$data[] = array("name" => "status" , "value" => $drupal_filter->get_status() , "type" => "int4");
				}
			if ($drupal_filter->get_settings_is_dirty())
				{
				$data[] = array("name" => "settings" , "value" => $drupal_filter->get_settings() , "type" => "bytea");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_filter',$drupal_filter->get_id()))
				{
				$result = $drupal_filter->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_filter',$drupal_filter->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_filter',$drupal_filter->get_id(),$application,$drupal_filter->get_id_save_location(),false);
				$drupal_filter->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_filter->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_filter',$drupal_filter->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_filter',$drupal_filter->get_id(),$application,$drupal_filter->get_id_save_location(),true);
				$drupal_filter->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_filter = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_filter = cls_table_factory::get_common_drupal_filter()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_filter))
				{
					$drupal_filter = cls_table_factory::create_instance('drupal_filter');
				}
			$drupal_filter->fill($data,false);
			return self::save_object($drupal_filter,$db_manager,$application);
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
				case "drupal_filter.format":
					$counter++;
					break;
				case "format":
					$counter++;
					break;
				case "drupal_filter.module":
					$counter++;
					break;
				case "module":
					$counter++;
					break;
				case "drupal_filter.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "drupal_filter.weight":
					$counter++;
					break;
				case "weight":
					$counter++;
					break;
				case "drupal_filter.status":
					$counter++;
					break;
				case "status":
					$counter++;
					break;
				case "drupal_filter.settings":
					$counter++;
					break;
				case "settings":
					$counter++;
					break;
				case "drupal_filter.id":
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
