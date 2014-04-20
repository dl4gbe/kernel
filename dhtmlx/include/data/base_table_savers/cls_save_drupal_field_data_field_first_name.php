<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_field_data_field_first_name extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_field_data_field_first_name';
		}

	public static function save_object($drupal_field_data_field_first_name,$db_manager,$application)
		{
			if (is_null($drupal_field_data_field_first_name))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_field_data_field_first_name->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_field_data_field_first_name->get_entity_type_is_dirty())
				{
				$data[] = array("name" => "entity_type" , "value" => $drupal_field_data_field_first_name->get_entity_type() , "type" => "varchar");
				}
			if ($drupal_field_data_field_first_name->get_bundle_is_dirty())
				{
				$data[] = array("name" => "bundle" , "value" => $drupal_field_data_field_first_name->get_bundle() , "type" => "varchar");
				}
			if ($drupal_field_data_field_first_name->get_deleted_is_dirty())
				{
				$data[] = array("name" => "deleted" , "value" => $drupal_field_data_field_first_name->get_deleted() , "type" => "int2");
				}
			if ($drupal_field_data_field_first_name->get_entity_id_is_dirty())
				{
				$data[] = array("name" => "entity_id" , "value" => $drupal_field_data_field_first_name->get_entity_id() , "type" => "int8");
				}
			if ($drupal_field_data_field_first_name->get_revision_id_is_dirty())
				{
				$data[] = array("name" => "revision_id" , "value" => $drupal_field_data_field_first_name->get_revision_id() , "type" => "int8");
				}
			if ($drupal_field_data_field_first_name->get_language_is_dirty())
				{
				$data[] = array("name" => "language" , "value" => $drupal_field_data_field_first_name->get_language() , "type" => "varchar");
				}
			if ($drupal_field_data_field_first_name->get_delta_is_dirty())
				{
				$data[] = array("name" => "delta" , "value" => $drupal_field_data_field_first_name->get_delta() , "type" => "int8");
				}
			if ($drupal_field_data_field_first_name->get_field_first_name_value_is_dirty())
				{
				$data[] = array("name" => "field_first_name_value" , "value" => $drupal_field_data_field_first_name->get_field_first_name_value() , "type" => "varchar");
				}
			if ($drupal_field_data_field_first_name->get_field_first_name_format_is_dirty())
				{
				$data[] = array("name" => "field_first_name_format" , "value" => $drupal_field_data_field_first_name->get_field_first_name_format() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_field_data_field_first_name',$drupal_field_data_field_first_name->get_id()))
				{
				$result = $drupal_field_data_field_first_name->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_field_data_field_first_name',$drupal_field_data_field_first_name->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_field_data_field_first_name',$drupal_field_data_field_first_name->get_id(),$application,$drupal_field_data_field_first_name->get_id_save_location(),false);
				$drupal_field_data_field_first_name->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_field_data_field_first_name->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_field_data_field_first_name',$drupal_field_data_field_first_name->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_field_data_field_first_name',$drupal_field_data_field_first_name->get_id(),$application,$drupal_field_data_field_first_name->get_id_save_location(),true);
				$drupal_field_data_field_first_name->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_field_data_field_first_name = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_field_data_field_first_name = cls_table_factory::get_common_drupal_field_data_field_first_name()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_field_data_field_first_name))
				{
					$drupal_field_data_field_first_name = cls_table_factory::create_instance('drupal_field_data_field_first_name');
				}
			$drupal_field_data_field_first_name->fill($data,false);
			return self::save_object($drupal_field_data_field_first_name,$db_manager,$application);
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
				case "drupal_field_data_field_first_name.entity_type":
					$counter++;
					break;
				case "entity_type":
					$counter++;
					break;
				case "drupal_field_data_field_first_name.bundle":
					$counter++;
					break;
				case "bundle":
					$counter++;
					break;
				case "drupal_field_data_field_first_name.deleted":
					$counter++;
					break;
				case "deleted":
					$counter++;
					break;
				case "drupal_field_data_field_first_name.entity_id":
					$counter++;
					break;
				case "entity_id":
					$counter++;
					break;
				case "drupal_field_data_field_first_name.revision_id":
					$counter++;
					break;
				case "revision_id":
					$counter++;
					break;
				case "drupal_field_data_field_first_name.language":
					$counter++;
					break;
				case "language":
					$counter++;
					break;
				case "drupal_field_data_field_first_name.delta":
					$counter++;
					break;
				case "delta":
					$counter++;
					break;
				case "drupal_field_data_field_first_name.field_first_name_value":
					$counter++;
					break;
				case "field_first_name_value":
					$counter++;
					break;
				case "drupal_field_data_field_first_name.field_first_name_format":
					$counter++;
					break;
				case "field_first_name_format":
					$counter++;
					break;
				case "drupal_field_data_field_first_name.id":
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
