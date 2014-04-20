<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_node_type extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_node_type';
		}

	public static function save_object($drupal_node_type,$db_manager,$application)
		{
			if (is_null($drupal_node_type))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_node_type->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_node_type->get_type_is_dirty())
				{
				$data[] = array("name" => "type" , "value" => $drupal_node_type->get_type() , "type" => "varchar");
				}
			if ($drupal_node_type->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $drupal_node_type->get_name() , "type" => "varchar");
				}
			if ($drupal_node_type->get_base_is_dirty())
				{
				$data[] = array("name" => "base" , "value" => $drupal_node_type->get_base() , "type" => "varchar");
				}
			if ($drupal_node_type->get_module_is_dirty())
				{
				$data[] = array("name" => "module" , "value" => $drupal_node_type->get_module() , "type" => "varchar");
				}
			if ($drupal_node_type->get_description_is_dirty())
				{
				$data[] = array("name" => "description" , "value" => $drupal_node_type->get_description() , "type" => "text");
				}
			if ($drupal_node_type->get_help_is_dirty())
				{
				$data[] = array("name" => "help" , "value" => $drupal_node_type->get_help() , "type" => "text");
				}
			if ($drupal_node_type->get_has_title_is_dirty())
				{
				$data[] = array("name" => "has_title" , "value" => $drupal_node_type->get_has_title() , "type" => "int4");
				}
			if ($drupal_node_type->get_title_label_is_dirty())
				{
				$data[] = array("name" => "title_label" , "value" => $drupal_node_type->get_title_label() , "type" => "varchar");
				}
			if ($drupal_node_type->get_custom_is_dirty())
				{
				$data[] = array("name" => "custom" , "value" => $drupal_node_type->get_custom() , "type" => "int2");
				}
			if ($drupal_node_type->get_modified_is_dirty())
				{
				$data[] = array("name" => "modified" , "value" => $drupal_node_type->get_modified() , "type" => "int2");
				}
			if ($drupal_node_type->get_locked_is_dirty())
				{
				$data[] = array("name" => "locked" , "value" => $drupal_node_type->get_locked() , "type" => "int2");
				}
			if ($drupal_node_type->get_disabled_is_dirty())
				{
				$data[] = array("name" => "disabled" , "value" => $drupal_node_type->get_disabled() , "type" => "int2");
				}
			if ($drupal_node_type->get_orig_type_is_dirty())
				{
				$data[] = array("name" => "orig_type" , "value" => $drupal_node_type->get_orig_type() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_node_type',$drupal_node_type->get_id()))
				{
				$result = $drupal_node_type->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_node_type',$drupal_node_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_node_type',$drupal_node_type->get_id(),$application,$drupal_node_type->get_id_save_location(),false);
				$drupal_node_type->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_node_type->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_node_type',$drupal_node_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_node_type',$drupal_node_type->get_id(),$application,$drupal_node_type->get_id_save_location(),true);
				$drupal_node_type->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_node_type = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_node_type = cls_table_factory::get_common_drupal_node_type()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_node_type))
				{
					$drupal_node_type = cls_table_factory::create_instance('drupal_node_type');
				}
			$drupal_node_type->fill($data,false);
			return self::save_object($drupal_node_type,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 14;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "drupal_node_type.type":
					$counter++;
					break;
				case "type":
					$counter++;
					break;
				case "drupal_node_type.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "drupal_node_type.base":
					$counter++;
					break;
				case "base":
					$counter++;
					break;
				case "drupal_node_type.module":
					$counter++;
					break;
				case "module":
					$counter++;
					break;
				case "drupal_node_type.description":
					$counter++;
					break;
				case "description":
					$counter++;
					break;
				case "drupal_node_type.help":
					$counter++;
					break;
				case "help":
					$counter++;
					break;
				case "drupal_node_type.has_title":
					$counter++;
					break;
				case "has_title":
					$counter++;
					break;
				case "drupal_node_type.title_label":
					$counter++;
					break;
				case "title_label":
					$counter++;
					break;
				case "drupal_node_type.custom":
					$counter++;
					break;
				case "custom":
					$counter++;
					break;
				case "drupal_node_type.modified":
					$counter++;
					break;
				case "modified":
					$counter++;
					break;
				case "drupal_node_type.locked":
					$counter++;
					break;
				case "locked":
					$counter++;
					break;
				case "drupal_node_type.disabled":
					$counter++;
					break;
				case "disabled":
					$counter++;
					break;
				case "drupal_node_type.orig_type":
					$counter++;
					break;
				case "orig_type":
					$counter++;
					break;
				case "drupal_node_type.id":
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
