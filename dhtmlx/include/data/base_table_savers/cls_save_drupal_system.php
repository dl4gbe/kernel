<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_system extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_system';
		}

	public static function save_object($drupal_system,$db_manager,$application)
		{
			if (is_null($drupal_system))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_system->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_system->get_filename_is_dirty())
				{
				$data[] = array("name" => "filename" , "value" => $drupal_system->get_filename() , "type" => "varchar");
				}
			if ($drupal_system->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $drupal_system->get_name() , "type" => "varchar");
				}
			if ($drupal_system->get_type_is_dirty())
				{
				$data[] = array("name" => "type" , "value" => $drupal_system->get_type() , "type" => "varchar");
				}
			if ($drupal_system->get_owner_is_dirty())
				{
				$data[] = array("name" => "owner" , "value" => $drupal_system->get_owner() , "type" => "varchar");
				}
			if ($drupal_system->get_status_is_dirty())
				{
				$data[] = array("name" => "status" , "value" => $drupal_system->get_status() , "type" => "int4");
				}
			if ($drupal_system->get_bootstrap_is_dirty())
				{
				$data[] = array("name" => "bootstrap" , "value" => $drupal_system->get_bootstrap() , "type" => "int4");
				}
			if ($drupal_system->get_schema_version_is_dirty())
				{
				$data[] = array("name" => "schema_version" , "value" => $drupal_system->get_schema_version() , "type" => "int2");
				}
			if ($drupal_system->get_weight_is_dirty())
				{
				$data[] = array("name" => "weight" , "value" => $drupal_system->get_weight() , "type" => "int4");
				}
			if ($drupal_system->get_info_is_dirty())
				{
				$data[] = array("name" => "info" , "value" => $drupal_system->get_info() , "type" => "bytea");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_system',$drupal_system->get_id()))
				{
				$result = $drupal_system->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_system',$drupal_system->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_system',$drupal_system->get_id(),$application,$drupal_system->get_id_save_location(),false);
				$drupal_system->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_system->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_system',$drupal_system->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_system',$drupal_system->get_id(),$application,$drupal_system->get_id_save_location(),true);
				$drupal_system->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_system = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_system = cls_table_factory::get_common_drupal_system()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_system))
				{
					$drupal_system = cls_table_factory::create_instance('drupal_system');
				}
			$drupal_system->fill($data,false);
			return self::save_object($drupal_system,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 10;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "drupal_system.filename":
					$counter++;
					break;
				case "filename":
					$counter++;
					break;
				case "drupal_system.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "drupal_system.type":
					$counter++;
					break;
				case "type":
					$counter++;
					break;
				case "drupal_system.owner":
					$counter++;
					break;
				case "owner":
					$counter++;
					break;
				case "drupal_system.status":
					$counter++;
					break;
				case "status":
					$counter++;
					break;
				case "drupal_system.bootstrap":
					$counter++;
					break;
				case "bootstrap":
					$counter++;
					break;
				case "drupal_system.schema_version":
					$counter++;
					break;
				case "schema_version":
					$counter++;
					break;
				case "drupal_system.weight":
					$counter++;
					break;
				case "weight":
					$counter++;
					break;
				case "drupal_system.info":
					$counter++;
					break;
				case "info":
					$counter++;
					break;
				case "drupal_system.id":
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
