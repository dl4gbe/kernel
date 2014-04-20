<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_languages extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_languages';
		}

	public static function save_object($drupal_languages,$db_manager,$application)
		{
			if (is_null($drupal_languages))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_languages->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_languages->get_javascript_is_dirty())
				{
				$data[] = array("name" => "javascript" , "value" => $drupal_languages->get_javascript() , "type" => "varchar");
				}
			if ($drupal_languages->get_weight_is_dirty())
				{
				$data[] = array("name" => "weight" , "value" => $drupal_languages->get_weight() , "type" => "int4");
				}
			if ($drupal_languages->get_prefix_is_dirty())
				{
				$data[] = array("name" => "prefix" , "value" => $drupal_languages->get_prefix() , "type" => "varchar");
				}
			if ($drupal_languages->get_domain_is_dirty())
				{
				$data[] = array("name" => "domain" , "value" => $drupal_languages->get_domain() , "type" => "varchar");
				}
			if ($drupal_languages->get_formula_is_dirty())
				{
				$data[] = array("name" => "formula" , "value" => $drupal_languages->get_formula() , "type" => "varchar");
				}
			if ($drupal_languages->get_plurals_is_dirty())
				{
				$data[] = array("name" => "plurals" , "value" => $drupal_languages->get_plurals() , "type" => "int4");
				}
			if ($drupal_languages->get_enabled_is_dirty())
				{
				$data[] = array("name" => "enabled" , "value" => $drupal_languages->get_enabled() , "type" => "int4");
				}
			if ($drupal_languages->get_direction_is_dirty())
				{
				$data[] = array("name" => "direction" , "value" => $drupal_languages->get_direction() , "type" => "int4");
				}
			if ($drupal_languages->get_native_is_dirty())
				{
				$data[] = array("name" => "native" , "value" => $drupal_languages->get_native() , "type" => "varchar");
				}
			if ($drupal_languages->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $drupal_languages->get_name() , "type" => "varchar");
				}
			if ($drupal_languages->get_language_is_dirty())
				{
				$data[] = array("name" => "language" , "value" => $drupal_languages->get_language() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_languages',$drupal_languages->get_id()))
				{
				$result = $drupal_languages->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_languages',$drupal_languages->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_languages',$drupal_languages->get_id(),$application,$drupal_languages->get_id_save_location(),false);
				$drupal_languages->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_languages->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_languages',$drupal_languages->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_languages',$drupal_languages->get_id(),$application,$drupal_languages->get_id_save_location(),true);
				$drupal_languages->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_languages = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_languages = cls_table_factory::get_common_drupal_languages()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_languages))
				{
					$drupal_languages = cls_table_factory::create_instance('drupal_languages');
				}
			$drupal_languages->fill($data,false);
			return self::save_object($drupal_languages,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 12;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "drupal_languages.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_languages.javascript":
					$counter++;
					break;
				case "javascript":
					$counter++;
					break;
				case "drupal_languages.weight":
					$counter++;
					break;
				case "weight":
					$counter++;
					break;
				case "drupal_languages.prefix":
					$counter++;
					break;
				case "prefix":
					$counter++;
					break;
				case "drupal_languages.domain":
					$counter++;
					break;
				case "domain":
					$counter++;
					break;
				case "drupal_languages.formula":
					$counter++;
					break;
				case "formula":
					$counter++;
					break;
				case "drupal_languages.plurals":
					$counter++;
					break;
				case "plurals":
					$counter++;
					break;
				case "drupal_languages.enabled":
					$counter++;
					break;
				case "enabled":
					$counter++;
					break;
				case "drupal_languages.direction":
					$counter++;
					break;
				case "direction":
					$counter++;
					break;
				case "drupal_languages.native":
					$counter++;
					break;
				case "native":
					$counter++;
					break;
				case "drupal_languages.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "drupal_languages.language":
					$counter++;
					break;
				case "language":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
