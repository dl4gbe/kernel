<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_ribbonbar_item extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'ribbonbar_item';
		}

	public static function save_object($ribbonbar_item,$db_manager,$application)
		{
			if (is_null($ribbonbar_item))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$ribbonbar_item->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($ribbonbar_item->get_active_is_dirty())
				{
				$data[] = array("name" => "active" , "value" => $ribbonbar_item->get_active() , "type" => "bool");
				}
			if ($ribbonbar_item->get_id_action_is_dirty())
				{
				$data[] = array("name" => "id_action" , "value" => $ribbonbar_item->get_id_action() , "type" => "uuid");
				}
			if ($ribbonbar_item->get_imagepath_is_dirty())
				{
				$data[] = array("name" => "imagepath" , "value" => $ribbonbar_item->get_imagepath() , "type" => "varchar");
				}
			if ($ribbonbar_item->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $ribbonbar_item->get_name() , "type" => "varchar");
				}
			if ($ribbonbar_item->get_item_order_is_dirty())
				{
				$data[] = array("name" => "item_order" , "value" => $ribbonbar_item->get_item_order() , "type" => "int4");
				}
			if ($ribbonbar_item->get_id_ribbonbar_group_is_dirty())
				{
				$data[] = array("name" => "id_ribbonbar_group" , "value" => $ribbonbar_item->get_id_ribbonbar_group() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('ribbonbar_item',$ribbonbar_item->get_id()))
				{
				$result = $ribbonbar_item->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('ribbonbar_item',$ribbonbar_item->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('ribbonbar_item',$ribbonbar_item->get_id(),$application,$ribbonbar_item->get_id_save_location(),false);
				$ribbonbar_item->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $ribbonbar_item->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('ribbonbar_item',$ribbonbar_item->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('ribbonbar_item',$ribbonbar_item->get_id(),$application,$ribbonbar_item->get_id_save_location(),true);
				$ribbonbar_item->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$ribbonbar_item = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$ribbonbar_item = cls_table_factory::get_common_ribbonbar_item()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($ribbonbar_item))
				{
					$ribbonbar_item = cls_table_factory::create_instance('ribbonbar_item');
				}
			$ribbonbar_item->fill($data,false);
			return self::save_object($ribbonbar_item,$db_manager,$application);
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
				case "ribbonbar_item.active":
					$counter++;
					break;
				case "active":
					$counter++;
					break;
				case "ribbonbar_item.id_action":
					$counter++;
					break;
				case "id_action":
					$counter++;
					break;
				case "ribbonbar_item.imagepath":
					$counter++;
					break;
				case "imagepath":
					$counter++;
					break;
				case "ribbonbar_item.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "ribbonbar_item.item_order":
					$counter++;
					break;
				case "item_order":
					$counter++;
					break;
				case "ribbonbar_item.id_ribbonbar_group":
					$counter++;
					break;
				case "id_ribbonbar_group":
					$counter++;
					break;
				case "ribbonbar_item.id":
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
