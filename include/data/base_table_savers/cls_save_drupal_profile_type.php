<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_profile_type extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_profile_type';
		}

	public static function save_object($drupal_profile_type,$db_manager,$application)
		{
			if (is_null($drupal_profile_type))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_profile_type->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_profile_type->get_module_is_dirty())
				{
				$data[] = array("name" => "module" , "value" => $drupal_profile_type->get_module() , "type" => "varchar");
				}
			if ($drupal_profile_type->get_status_is_dirty())
				{
				$data[] = array("name" => "status" , "value" => $drupal_profile_type->get_status() , "type" => "int2");
				}
			if ($drupal_profile_type->get_data_is_dirty())
				{
				$data[] = array("name" => "data" , "value" => $drupal_profile_type->get_data() , "type" => "text");
				}
			if ($drupal_profile_type->get_weight_is_dirty())
				{
				$data[] = array("name" => "weight" , "value" => $drupal_profile_type->get_weight() , "type" => "int2");
				}
			if ($drupal_profile_type->get_label_is_dirty())
				{
				$data[] = array("name" => "label" , "value" => $drupal_profile_type->get_label() , "type" => "varchar");
				}
			if ($drupal_profile_type->get_type_is_dirty())
				{
				$data[] = array("name" => "type" , "value" => $drupal_profile_type->get_type() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_profile_type',$drupal_profile_type->get_id()))
				{
				$result = $drupal_profile_type->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_profile_type',$drupal_profile_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_profile_type',$drupal_profile_type->get_id(),$application,$drupal_profile_type->get_id_save_location(),false);
				$drupal_profile_type->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_profile_type->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_profile_type',$drupal_profile_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_profile_type',$drupal_profile_type->get_id(),$application,$drupal_profile_type->get_id_save_location(),true);
				$drupal_profile_type->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_profile_type = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_profile_type = cls_table_factory::get_common_drupal_profile_type()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_profile_type))
				{
					$drupal_profile_type = cls_table_factory::create_instance('drupal_profile_type');
				}
			$drupal_profile_type->fill($data,false);
			return self::save_object($drupal_profile_type,$db_manager,$application);
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
				case "drupal_profile_type.module":
					$counter++;
					break;
				case "module":
					$counter++;
					break;
				case "drupal_profile_type.status":
					$counter++;
					break;
				case "status":
					$counter++;
					break;
				case "drupal_profile_type.data":
					$counter++;
					break;
				case "data":
					$counter++;
					break;
				case "drupal_profile_type.weight":
					$counter++;
					break;
				case "weight":
					$counter++;
					break;
				case "drupal_profile_type.label":
					$counter++;
					break;
				case "label":
					$counter++;
					break;
				case "drupal_profile_type.type":
					$counter++;
					break;
				case "type":
					$counter++;
					break;
				case "drupal_profile_type.id":
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
