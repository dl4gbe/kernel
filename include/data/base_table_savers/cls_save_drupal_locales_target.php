<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_locales_target extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_locales_target';
		}

	public static function save_object($drupal_locales_target,$db_manager,$application)
		{
			if (is_null($drupal_locales_target))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_locales_target->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_locales_target->get_plural_is_dirty())
				{
				$data[] = array("name" => "plural" , "value" => $drupal_locales_target->get_plural() , "type" => "int4");
				}
			if ($drupal_locales_target->get_plid_is_dirty())
				{
				$data[] = array("name" => "plid" , "value" => $drupal_locales_target->get_plid() , "type" => "int4");
				}
			if ($drupal_locales_target->get_language_is_dirty())
				{
				$data[] = array("name" => "language" , "value" => $drupal_locales_target->get_language() , "type" => "varchar");
				}
			if ($drupal_locales_target->get_translation_is_dirty())
				{
				$data[] = array("name" => "translation" , "value" => $drupal_locales_target->get_translation() , "type" => "text");
				}
			if ($drupal_locales_target->get_lid_is_dirty())
				{
				$data[] = array("name" => "lid" , "value" => $drupal_locales_target->get_lid() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_locales_target',$drupal_locales_target->get_id()))
				{
				$result = $drupal_locales_target->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_locales_target',$drupal_locales_target->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_locales_target',$drupal_locales_target->get_id(),$application,$drupal_locales_target->get_id_save_location(),false);
				$drupal_locales_target->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_locales_target->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_locales_target',$drupal_locales_target->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_locales_target',$drupal_locales_target->get_id(),$application,$drupal_locales_target->get_id_save_location(),true);
				$drupal_locales_target->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_locales_target = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_locales_target = cls_table_factory::get_common_drupal_locales_target()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_locales_target))
				{
					$drupal_locales_target = cls_table_factory::create_instance('drupal_locales_target');
				}
			$drupal_locales_target->fill($data,false);
			return self::save_object($drupal_locales_target,$db_manager,$application);
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
				case "drupal_locales_target.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_locales_target.plural":
					$counter++;
					break;
				case "plural":
					$counter++;
					break;
				case "drupal_locales_target.plid":
					$counter++;
					break;
				case "plid":
					$counter++;
					break;
				case "drupal_locales_target.language":
					$counter++;
					break;
				case "language":
					$counter++;
					break;
				case "drupal_locales_target.translation":
					$counter++;
					break;
				case "translation":
					$counter++;
					break;
				case "drupal_locales_target.lid":
					$counter++;
					break;
				case "lid":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
