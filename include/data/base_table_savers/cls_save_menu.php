<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_menu extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'menu';
		}

	public static function save_object($menu,$db_manager,$application)
		{
			if (is_null($menu))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$menu->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($menu->get_id_data_view_is_dirty())
				{
				$data[] = array("name" => "id_data_view" , "value" => $menu->get_id_data_view() , "type" => "uuid");
				}
			if ($menu->get_caption_is_dirty())
				{
				$data[] = array("name" => "caption" , "value" => $menu->get_caption() , "type" => "varchar");
				}
			if ($menu->get_id_menu_template_is_dirty())
				{
				$data[] = array("name" => "id_menu_template" , "value" => $menu->get_id_menu_template() , "type" => "uuid");
				}
			if ($menu->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $menu->get_name() , "type" => "varchar");
				}
			if ($menu->get_id_application_is_dirty())
				{
				$data[] = array("name" => "id_application" , "value" => $menu->get_id_application() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('menu',$menu->get_id()))
				{
				$result = $menu->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('menu',$menu->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('menu',$menu->get_id(),$application,$menu->get_id_save_location(),false);
				$menu->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $menu->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('menu',$menu->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('menu',$menu->get_id(),$application,$menu->get_id_save_location(),true);
				$menu->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$menu = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$menu = cls_table_factory::get_common_menu()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($menu))
				{
					$menu = cls_table_factory::create_instance('menu');
				}
			$menu->fill($data,false);
			return self::save_object($menu,$db_manager,$application);
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
				case "menu.id_data_view":
					$counter++;
					break;
				case "id_data_view":
					$counter++;
					break;
				case "menu.caption":
					$counter++;
					break;
				case "caption":
					$counter++;
					break;
				case "menu.id_menu_template":
					$counter++;
					break;
				case "id_menu_template":
					$counter++;
					break;
				case "menu.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "menu.id_application":
					$counter++;
					break;
				case "id_application":
					$counter++;
					break;
				case "menu.id":
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
