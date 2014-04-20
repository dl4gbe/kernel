<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_registry extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_registry';
		}

	public static function save_object($drupal_registry,$db_manager,$application)
		{
			if (is_null($drupal_registry))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_registry->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_registry->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $drupal_registry->get_name() , "type" => "varchar");
				}
			if ($drupal_registry->get_type_is_dirty())
				{
				$data[] = array("name" => "type" , "value" => $drupal_registry->get_type() , "type" => "varchar");
				}
			if ($drupal_registry->get_filename_is_dirty())
				{
				$data[] = array("name" => "filename" , "value" => $drupal_registry->get_filename() , "type" => "varchar");
				}
			if ($drupal_registry->get_module_is_dirty())
				{
				$data[] = array("name" => "module" , "value" => $drupal_registry->get_module() , "type" => "varchar");
				}
			if ($drupal_registry->get_weight_is_dirty())
				{
				$data[] = array("name" => "weight" , "value" => $drupal_registry->get_weight() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_registry',$drupal_registry->get_id()))
				{
				$result = $drupal_registry->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_registry',$drupal_registry->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_registry',$drupal_registry->get_id(),$application,$drupal_registry->get_id_save_location(),false);
				$drupal_registry->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_registry->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_registry',$drupal_registry->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_registry',$drupal_registry->get_id(),$application,$drupal_registry->get_id_save_location(),true);
				$drupal_registry->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_registry = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_registry = cls_table_factory::get_common_drupal_registry()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_registry))
				{
					$drupal_registry = cls_table_factory::create_instance('drupal_registry');
				}
			$drupal_registry->fill($data,false);
			return self::save_object($drupal_registry,$db_manager,$application);
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
				case "drupal_registry.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "drupal_registry.type":
					$counter++;
					break;
				case "type":
					$counter++;
					break;
				case "drupal_registry.filename":
					$counter++;
					break;
				case "filename":
					$counter++;
					break;
				case "drupal_registry.module":
					$counter++;
					break;
				case "module":
					$counter++;
					break;
				case "drupal_registry.weight":
					$counter++;
					break;
				case "weight":
					$counter++;
					break;
				case "drupal_registry.id":
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
