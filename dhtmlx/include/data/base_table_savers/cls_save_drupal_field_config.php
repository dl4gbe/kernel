<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_field_config extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_field_config';
		}

	public static function save_object($drupal_field_config,$db_manager,$application)
		{
			if (is_null($drupal_field_config))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_field_config->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_field_config->get_field_name_is_dirty())
				{
				$data[] = array("name" => "field_name" , "value" => $drupal_field_config->get_field_name() , "type" => "varchar");
				}
			if ($drupal_field_config->get_type_is_dirty())
				{
				$data[] = array("name" => "type" , "value" => $drupal_field_config->get_type() , "type" => "varchar");
				}
			if ($drupal_field_config->get_module_is_dirty())
				{
				$data[] = array("name" => "module" , "value" => $drupal_field_config->get_module() , "type" => "varchar");
				}
			if ($drupal_field_config->get_active_is_dirty())
				{
				$data[] = array("name" => "active" , "value" => $drupal_field_config->get_active() , "type" => "int2");
				}
			if ($drupal_field_config->get_storage_type_is_dirty())
				{
				$data[] = array("name" => "storage_type" , "value" => $drupal_field_config->get_storage_type() , "type" => "varchar");
				}
			if ($drupal_field_config->get_storage_module_is_dirty())
				{
				$data[] = array("name" => "storage_module" , "value" => $drupal_field_config->get_storage_module() , "type" => "varchar");
				}
			if ($drupal_field_config->get_storage_active_is_dirty())
				{
				$data[] = array("name" => "storage_active" , "value" => $drupal_field_config->get_storage_active() , "type" => "int2");
				}
			if ($drupal_field_config->get_locked_is_dirty())
				{
				$data[] = array("name" => "locked" , "value" => $drupal_field_config->get_locked() , "type" => "int2");
				}
			if ($drupal_field_config->get_data_is_dirty())
				{
				$data[] = array("name" => "data" , "value" => $drupal_field_config->get_data() , "type" => "bytea");
				}
			if ($drupal_field_config->get_cardinality_is_dirty())
				{
				$data[] = array("name" => "cardinality" , "value" => $drupal_field_config->get_cardinality() , "type" => "int2");
				}
			if ($drupal_field_config->get_translatable_is_dirty())
				{
				$data[] = array("name" => "translatable" , "value" => $drupal_field_config->get_translatable() , "type" => "int2");
				}
			if ($drupal_field_config->get_deleted_is_dirty())
				{
				$data[] = array("name" => "deleted" , "value" => $drupal_field_config->get_deleted() , "type" => "int2");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_field_config',$drupal_field_config->get_id()))
				{
				$result = $drupal_field_config->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_field_config',$drupal_field_config->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_field_config',$drupal_field_config->get_id(),$application,$drupal_field_config->get_id_save_location(),false);
				$drupal_field_config->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_field_config->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_field_config',$drupal_field_config->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_field_config',$drupal_field_config->get_id(),$application,$drupal_field_config->get_id_save_location(),true);
				$drupal_field_config->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_field_config = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_field_config = cls_table_factory::get_common_drupal_field_config()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_field_config))
				{
					$drupal_field_config = cls_table_factory::create_instance('drupal_field_config');
				}
			$drupal_field_config->fill($data,false);
			return self::save_object($drupal_field_config,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 13;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "drupal_field_config.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_field_config.field_name":
					$counter++;
					break;
				case "field_name":
					$counter++;
					break;
				case "drupal_field_config.type":
					$counter++;
					break;
				case "type":
					$counter++;
					break;
				case "drupal_field_config.module":
					$counter++;
					break;
				case "module":
					$counter++;
					break;
				case "drupal_field_config.active":
					$counter++;
					break;
				case "active":
					$counter++;
					break;
				case "drupal_field_config.storage_type":
					$counter++;
					break;
				case "storage_type":
					$counter++;
					break;
				case "drupal_field_config.storage_module":
					$counter++;
					break;
				case "storage_module":
					$counter++;
					break;
				case "drupal_field_config.storage_active":
					$counter++;
					break;
				case "storage_active":
					$counter++;
					break;
				case "drupal_field_config.locked":
					$counter++;
					break;
				case "locked":
					$counter++;
					break;
				case "drupal_field_config.data":
					$counter++;
					break;
				case "data":
					$counter++;
					break;
				case "drupal_field_config.cardinality":
					$counter++;
					break;
				case "cardinality":
					$counter++;
					break;
				case "drupal_field_config.translatable":
					$counter++;
					break;
				case "translatable":
					$counter++;
					break;
				case "drupal_field_config.deleted":
					$counter++;
					break;
				case "deleted":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
