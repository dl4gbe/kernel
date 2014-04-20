<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_menu_access_group extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'menu_access_group';
		}

	public static function save_object($menu_access_group,$db_manager,$application)
		{
			if (is_null($menu_access_group))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$menu_access_group->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($menu_access_group->get_id_menu_is_dirty())
				{
				$data[] = array("name" => "id_menu" , "value" => $menu_access_group->get_id_menu() , "type" => "uuid");
				}
			if ($menu_access_group->get_id_access_group_is_dirty())
				{
				$data[] = array("name" => "id_access_group" , "value" => $menu_access_group->get_id_access_group() , "type" => "uuid");
				}
			if ($menu_access_group->get_active_is_dirty())
				{
				$data[] = array("name" => "active" , "value" => $menu_access_group->get_active() , "type" => "bool");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('menu_access_group',$menu_access_group->get_id()))
				{
				$result = $menu_access_group->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('menu_access_group',$menu_access_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('menu_access_group',$menu_access_group->get_id(),$application,$menu_access_group->get_id_save_location(),false);
				$menu_access_group->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $menu_access_group->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('menu_access_group',$menu_access_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('menu_access_group',$menu_access_group->get_id(),$application,$menu_access_group->get_id_save_location(),true);
				$menu_access_group->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$menu_access_group = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$menu_access_group = cls_table_factory::get_common_menu_access_group()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($menu_access_group))
				{
					$menu_access_group = cls_table_factory::create_instance('menu_access_group');
				}
			$menu_access_group->fill($data,false);
			return self::save_object($menu_access_group,$db_manager,$application);
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
				case "menu_access_group.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "menu_access_group.id_menu":
					$counter++;
					break;
				case "id_menu":
					$counter++;
					break;
				case "menu_access_group.id_access_group":
					$counter++;
					break;
				case "id_access_group":
					$counter++;
					break;
				case "menu_access_group.active":
					$counter++;
					break;
				case "active":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
