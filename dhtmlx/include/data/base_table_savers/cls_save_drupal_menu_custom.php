<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_menu_custom extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_menu_custom';
		}

	public static function save_object($drupal_menu_custom,$db_manager,$application)
		{
			if (is_null($drupal_menu_custom))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_menu_custom->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_menu_custom->get_menu_name_is_dirty())
				{
				$data[] = array("name" => "menu_name" , "value" => $drupal_menu_custom->get_menu_name() , "type" => "varchar");
				}
			if ($drupal_menu_custom->get_title_is_dirty())
				{
				$data[] = array("name" => "title" , "value" => $drupal_menu_custom->get_title() , "type" => "varchar");
				}
			if ($drupal_menu_custom->get_description_is_dirty())
				{
				$data[] = array("name" => "description" , "value" => $drupal_menu_custom->get_description() , "type" => "text");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_menu_custom',$drupal_menu_custom->get_id()))
				{
				$result = $drupal_menu_custom->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_menu_custom',$drupal_menu_custom->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_menu_custom',$drupal_menu_custom->get_id(),$application,$drupal_menu_custom->get_id_save_location(),false);
				$drupal_menu_custom->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_menu_custom->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_menu_custom',$drupal_menu_custom->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_menu_custom',$drupal_menu_custom->get_id(),$application,$drupal_menu_custom->get_id_save_location(),true);
				$drupal_menu_custom->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_menu_custom = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_menu_custom = cls_table_factory::get_common_drupal_menu_custom()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_menu_custom))
				{
					$drupal_menu_custom = cls_table_factory::create_instance('drupal_menu_custom');
				}
			$drupal_menu_custom->fill($data,false);
			return self::save_object($drupal_menu_custom,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 4;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "drupal_menu_custom.menu_name":
					$counter++;
					break;
				case "menu_name":
					$counter++;
					break;
				case "drupal_menu_custom.title":
					$counter++;
					break;
				case "title":
					$counter++;
					break;
				case "drupal_menu_custom.description":
					$counter++;
					break;
				case "description":
					$counter++;
					break;
				case "drupal_menu_custom.id":
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
