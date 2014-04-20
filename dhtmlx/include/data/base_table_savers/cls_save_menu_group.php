<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_menu_group extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'menu_group';
		}

	public static function save_object($menu_group,$db_manager,$application)
		{
			if (is_null($menu_group))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$menu_group->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($menu_group->get_id_menu_is_dirty())
				{
				$data[] = array("name" => "id_menu" , "value" => $menu_group->get_id_menu() , "type" => "uuid");
				}
			if ($menu_group->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $menu_group->get_name() , "type" => "varchar");
				}
			if ($menu_group->get_imagepath_is_dirty())
				{
				$data[] = array("name" => "imagepath" , "value" => $menu_group->get_imagepath() , "type" => "varchar");
				}
			if ($menu_group->get_order_is_dirty())
				{
				$data[] = array("name" => "order" , "value" => $menu_group->get_order() , "type" => "int4");
				}
			if ($menu_group->get_active_is_dirty())
				{
				$data[] = array("name" => "active" , "value" => $menu_group->get_active() , "type" => "bool");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('menu_group',$menu_group->get_id()))
				{
				$result = $menu_group->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('menu_group',$menu_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('menu_group',$menu_group->get_id(),$application,$menu_group->get_id_save_location(),false);
				$menu_group->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $menu_group->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('menu_group',$menu_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('menu_group',$menu_group->get_id(),$application,$menu_group->get_id_save_location(),true);
				$menu_group->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$menu_group = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$menu_group = cls_table_factory::get_common_menu_group()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($menu_group))
				{
					$menu_group = cls_table_factory::create_instance('menu_group');
				}
			$menu_group->fill($data,false);
			return self::save_object($menu_group,$db_manager,$application);
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
				case "menu_group.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "menu_group.id_menu":
					$counter++;
					break;
				case "id_menu":
					$counter++;
					break;
				case "menu_group.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "menu_group.imagepath":
					$counter++;
					break;
				case "imagepath":
					$counter++;
					break;
				case "menu_group.order":
					$counter++;
					break;
				case "order":
					$counter++;
					break;
				case "menu_group.active":
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
