<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_menu_item extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'menu_item';
		}

	public static function save_object($menu_item,$db_manager,$application)
		{
			if (is_null($menu_item))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$menu_item->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($menu_item->get_id_menu_group_is_dirty())
				{
				$data[] = array("name" => "id_menu_group" , "value" => $menu_item->get_id_menu_group() , "type" => "uuid");
				}
			if ($menu_item->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $menu_item->get_name() , "type" => "varchar");
				}
			if ($menu_item->get_id_control_is_dirty())
				{
				$data[] = array("name" => "id_control" , "value" => $menu_item->get_id_control() , "type" => "uuid");
				}
			if ($menu_item->get_order_is_dirty())
				{
				$data[] = array("name" => "order" , "value" => $menu_item->get_order() , "type" => "int4");
				}
			if ($menu_item->get_imagepath_is_dirty())
				{
				$data[] = array("name" => "imagepath" , "value" => $menu_item->get_imagepath() , "type" => "varchar");
				}
			if ($menu_item->get_active_is_dirty())
				{
				$data[] = array("name" => "active" , "value" => $menu_item->get_active() , "type" => "bool");
				}
			if ($menu_item->get_parameters_is_dirty())
				{
				$data[] = array("name" => "parameters" , "value" => $menu_item->get_parameters() , "type" => "varchar");
				}
			if ($menu_item->get_table_name_is_dirty())
				{
				$data[] = array("name" => "table_name" , "value" => $menu_item->get_table_name() , "type" => "varchar");
				}
			if ($menu_item->get_id_data_view_is_dirty())
				{
				$data[] = array("name" => "id_data_view" , "value" => $menu_item->get_id_data_view() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('menu_item',$menu_item->get_id()))
				{
				$result = $menu_item->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('menu_item',$menu_item->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('menu_item',$menu_item->get_id(),$application,$menu_item->get_id_save_location(),false);
				$menu_item->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $menu_item->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('menu_item',$menu_item->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('menu_item',$menu_item->get_id(),$application,$menu_item->get_id_save_location(),true);
				$menu_item->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$menu_item = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$menu_item = cls_table_factory::get_common_menu_item()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($menu_item))
				{
					$menu_item = cls_table_factory::create_instance('menu_item');
				}
			$menu_item->fill($data,false);
			return self::save_object($menu_item,$db_manager,$application);
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
				case "menu_item.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "menu_item.id_menu_group":
					$counter++;
					break;
				case "id_menu_group":
					$counter++;
					break;
				case "menu_item.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "menu_item.id_control":
					$counter++;
					break;
				case "id_control":
					$counter++;
					break;
				case "menu_item.order":
					$counter++;
					break;
				case "order":
					$counter++;
					break;
				case "menu_item.imagepath":
					$counter++;
					break;
				case "imagepath":
					$counter++;
					break;
				case "menu_item.active":
					$counter++;
					break;
				case "active":
					$counter++;
					break;
				case "menu_item.parameters":
					$counter++;
					break;
				case "parameters":
					$counter++;
					break;
				case "menu_item.table_name":
					$counter++;
					break;
				case "table_name":
					$counter++;
					break;
				case "menu_item.id_data_view":
					$counter++;
					break;
				case "id_data_view":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
