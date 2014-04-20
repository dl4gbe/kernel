<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_menu_template extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'menu_template';
		}

	public static function save_object($menu_template,$db_manager,$application)
		{
			if (is_null($menu_template))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$menu_template->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($menu_template->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $menu_template->get_name() , "type" => "varchar");
				}
			if ($menu_template->get_creator_path_is_dirty())
				{
				$data[] = array("name" => "creator_path" , "value" => $menu_template->get_creator_path() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('menu_template',$menu_template->get_id()))
				{
				$result = $menu_template->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('menu_template',$menu_template->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('menu_template',$menu_template->get_id(),$application,$menu_template->get_id_save_location(),false);
				$menu_template->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $menu_template->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('menu_template',$menu_template->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('menu_template',$menu_template->get_id(),$application,$menu_template->get_id_save_location(),true);
				$menu_template->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$menu_template = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$menu_template = cls_table_factory::get_common_menu_template()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($menu_template))
				{
					$menu_template = cls_table_factory::create_instance('menu_template');
				}
			$menu_template->fill($data,false);
			return self::save_object($menu_template,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 3;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "menu_template.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "menu_template.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "menu_template.creator_path":
					$counter++;
					break;
				case "creator_path":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
