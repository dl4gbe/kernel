<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_menu_router extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_menu_router';
		}

	public static function save_object($drupal_menu_router,$db_manager,$application)
		{
			if (is_null($drupal_menu_router))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_menu_router->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_menu_router->get_include_file_is_dirty())
				{
				$data[] = array("name" => "include_file" , "value" => $drupal_menu_router->get_include_file() , "type" => "text");
				}
			if ($drupal_menu_router->get_weight_is_dirty())
				{
				$data[] = array("name" => "weight" , "value" => $drupal_menu_router->get_weight() , "type" => "int4");
				}
			if ($drupal_menu_router->get_position_is_dirty())
				{
				$data[] = array("name" => "position" , "value" => $drupal_menu_router->get_position() , "type" => "varchar");
				}
			if ($drupal_menu_router->get_description_is_dirty())
				{
				$data[] = array("name" => "description" , "value" => $drupal_menu_router->get_description() , "type" => "text");
				}
			if ($drupal_menu_router->get_type_is_dirty())
				{
				$data[] = array("name" => "type" , "value" => $drupal_menu_router->get_type() , "type" => "int4");
				}
			if ($drupal_menu_router->get_theme_arguments_is_dirty())
				{
				$data[] = array("name" => "theme_arguments" , "value" => $drupal_menu_router->get_theme_arguments() , "type" => "varchar");
				}
			if ($drupal_menu_router->get_theme_callback_is_dirty())
				{
				$data[] = array("name" => "theme_callback" , "value" => $drupal_menu_router->get_theme_callback() , "type" => "varchar");
				}
			if ($drupal_menu_router->get_title_arguments_is_dirty())
				{
				$data[] = array("name" => "title_arguments" , "value" => $drupal_menu_router->get_title_arguments() , "type" => "varchar");
				}
			if ($drupal_menu_router->get_title_callback_is_dirty())
				{
				$data[] = array("name" => "title_callback" , "value" => $drupal_menu_router->get_title_callback() , "type" => "varchar");
				}
			if ($drupal_menu_router->get_title_is_dirty())
				{
				$data[] = array("name" => "title" , "value" => $drupal_menu_router->get_title() , "type" => "varchar");
				}
			if ($drupal_menu_router->get_tab_root_is_dirty())
				{
				$data[] = array("name" => "tab_root" , "value" => $drupal_menu_router->get_tab_root() , "type" => "varchar");
				}
			if ($drupal_menu_router->get_tab_parent_is_dirty())
				{
				$data[] = array("name" => "tab_parent" , "value" => $drupal_menu_router->get_tab_parent() , "type" => "varchar");
				}
			if ($drupal_menu_router->get_context_is_dirty())
				{
				$data[] = array("name" => "context" , "value" => $drupal_menu_router->get_context() , "type" => "int4");
				}
			if ($drupal_menu_router->get_number_parts_is_dirty())
				{
				$data[] = array("name" => "number_parts" , "value" => $drupal_menu_router->get_number_parts() , "type" => "int2");
				}
			if ($drupal_menu_router->get_fit_is_dirty())
				{
				$data[] = array("name" => "fit" , "value" => $drupal_menu_router->get_fit() , "type" => "int4");
				}
			if ($drupal_menu_router->get_delivery_callback_is_dirty())
				{
				$data[] = array("name" => "delivery_callback" , "value" => $drupal_menu_router->get_delivery_callback() , "type" => "varchar");
				}
			if ($drupal_menu_router->get_page_arguments_is_dirty())
				{
				$data[] = array("name" => "page_arguments" , "value" => $drupal_menu_router->get_page_arguments() , "type" => "bytea");
				}
			if ($drupal_menu_router->get_page_callback_is_dirty())
				{
				$data[] = array("name" => "page_callback" , "value" => $drupal_menu_router->get_page_callback() , "type" => "varchar");
				}
			if ($drupal_menu_router->get_access_arguments_is_dirty())
				{
				$data[] = array("name" => "access_arguments" , "value" => $drupal_menu_router->get_access_arguments() , "type" => "bytea");
				}
			if ($drupal_menu_router->get_access_callback_is_dirty())
				{
				$data[] = array("name" => "access_callback" , "value" => $drupal_menu_router->get_access_callback() , "type" => "varchar");
				}
			if ($drupal_menu_router->get_to_arg_functions_is_dirty())
				{
				$data[] = array("name" => "to_arg_functions" , "value" => $drupal_menu_router->get_to_arg_functions() , "type" => "bytea");
				}
			if ($drupal_menu_router->get_load_functions_is_dirty())
				{
				$data[] = array("name" => "load_functions" , "value" => $drupal_menu_router->get_load_functions() , "type" => "bytea");
				}
			if ($drupal_menu_router->get_path_is_dirty())
				{
				$data[] = array("name" => "path" , "value" => $drupal_menu_router->get_path() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_menu_router',$drupal_menu_router->get_id()))
				{
				$result = $drupal_menu_router->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_menu_router',$drupal_menu_router->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_menu_router',$drupal_menu_router->get_id(),$application,$drupal_menu_router->get_id_save_location(),false);
				$drupal_menu_router->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_menu_router->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_menu_router',$drupal_menu_router->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_menu_router',$drupal_menu_router->get_id(),$application,$drupal_menu_router->get_id_save_location(),true);
				$drupal_menu_router->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_menu_router = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_menu_router = cls_table_factory::get_common_drupal_menu_router()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_menu_router))
				{
					$drupal_menu_router = cls_table_factory::create_instance('drupal_menu_router');
				}
			$drupal_menu_router->fill($data,false);
			return self::save_object($drupal_menu_router,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 24;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "drupal_menu_router.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_menu_router.include_file":
					$counter++;
					break;
				case "include_file":
					$counter++;
					break;
				case "drupal_menu_router.weight":
					$counter++;
					break;
				case "weight":
					$counter++;
					break;
				case "drupal_menu_router.position":
					$counter++;
					break;
				case "position":
					$counter++;
					break;
				case "drupal_menu_router.description":
					$counter++;
					break;
				case "description":
					$counter++;
					break;
				case "drupal_menu_router.type":
					$counter++;
					break;
				case "type":
					$counter++;
					break;
				case "drupal_menu_router.theme_arguments":
					$counter++;
					break;
				case "theme_arguments":
					$counter++;
					break;
				case "drupal_menu_router.theme_callback":
					$counter++;
					break;
				case "theme_callback":
					$counter++;
					break;
				case "drupal_menu_router.title_arguments":
					$counter++;
					break;
				case "title_arguments":
					$counter++;
					break;
				case "drupal_menu_router.title_callback":
					$counter++;
					break;
				case "title_callback":
					$counter++;
					break;
				case "drupal_menu_router.title":
					$counter++;
					break;
				case "title":
					$counter++;
					break;
				case "drupal_menu_router.tab_root":
					$counter++;
					break;
				case "tab_root":
					$counter++;
					break;
				case "drupal_menu_router.tab_parent":
					$counter++;
					break;
				case "tab_parent":
					$counter++;
					break;
				case "drupal_menu_router.context":
					$counter++;
					break;
				case "context":
					$counter++;
					break;
				case "drupal_menu_router.number_parts":
					$counter++;
					break;
				case "number_parts":
					$counter++;
					break;
				case "drupal_menu_router.fit":
					$counter++;
					break;
				case "fit":
					$counter++;
					break;
				case "drupal_menu_router.delivery_callback":
					$counter++;
					break;
				case "delivery_callback":
					$counter++;
					break;
				case "drupal_menu_router.page_arguments":
					$counter++;
					break;
				case "page_arguments":
					$counter++;
					break;
				case "drupal_menu_router.page_callback":
					$counter++;
					break;
				case "page_callback":
					$counter++;
					break;
				case "drupal_menu_router.access_arguments":
					$counter++;
					break;
				case "access_arguments":
					$counter++;
					break;
				case "drupal_menu_router.access_callback":
					$counter++;
					break;
				case "access_callback":
					$counter++;
					break;
				case "drupal_menu_router.to_arg_functions":
					$counter++;
					break;
				case "to_arg_functions":
					$counter++;
					break;
				case "drupal_menu_router.load_functions":
					$counter++;
					break;
				case "load_functions":
					$counter++;
					break;
				case "drupal_menu_router.path":
					$counter++;
					break;
				case "path":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
