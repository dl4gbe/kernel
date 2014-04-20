<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_locales_source extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_locales_source';
		}

	public static function save_object($drupal_locales_source,$db_manager,$application)
		{
			if (is_null($drupal_locales_source))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_locales_source->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_locales_source->get_lid_is_dirty())
				{
				$data[] = array("name" => "lid" , "value" => $drupal_locales_source->get_lid() , "type" => "int4");
				}
			if ($drupal_locales_source->get_location_is_dirty())
				{
				$data[] = array("name" => "location" , "value" => $drupal_locales_source->get_location() , "type" => "text");
				}
			if ($drupal_locales_source->get_textgroup_is_dirty())
				{
				$data[] = array("name" => "textgroup" , "value" => $drupal_locales_source->get_textgroup() , "type" => "varchar");
				}
			if ($drupal_locales_source->get_source_is_dirty())
				{
				$data[] = array("name" => "source" , "value" => $drupal_locales_source->get_source() , "type" => "text");
				}
			if ($drupal_locales_source->get_context_is_dirty())
				{
				$data[] = array("name" => "context" , "value" => $drupal_locales_source->get_context() , "type" => "varchar");
				}
			if ($drupal_locales_source->get_version_is_dirty())
				{
				$data[] = array("name" => "version" , "value" => $drupal_locales_source->get_version() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_locales_source',$drupal_locales_source->get_id()))
				{
				$result = $drupal_locales_source->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_locales_source',$drupal_locales_source->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_locales_source',$drupal_locales_source->get_id(),$application,$drupal_locales_source->get_id_save_location(),false);
				$drupal_locales_source->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_locales_source->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_locales_source',$drupal_locales_source->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_locales_source',$drupal_locales_source->get_id(),$application,$drupal_locales_source->get_id_save_location(),true);
				$drupal_locales_source->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_locales_source = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_locales_source = cls_table_factory::get_common_drupal_locales_source()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_locales_source))
				{
					$drupal_locales_source = cls_table_factory::create_instance('drupal_locales_source');
				}
			$drupal_locales_source->fill($data,false);
			return self::save_object($drupal_locales_source,$db_manager,$application);
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
				case "drupal_locales_source.lid":
					$counter++;
					break;
				case "lid":
					$counter++;
					break;
				case "drupal_locales_source.location":
					$counter++;
					break;
				case "location":
					$counter++;
					break;
				case "drupal_locales_source.textgroup":
					$counter++;
					break;
				case "textgroup":
					$counter++;
					break;
				case "drupal_locales_source.source":
					$counter++;
					break;
				case "source":
					$counter++;
					break;
				case "drupal_locales_source.context":
					$counter++;
					break;
				case "context":
					$counter++;
					break;
				case "drupal_locales_source.version":
					$counter++;
					break;
				case "version":
					$counter++;
					break;
				case "drupal_locales_source.id":
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
