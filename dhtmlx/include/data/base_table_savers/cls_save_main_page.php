<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_main_page extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'main_page';
		}

	public static function save_object($main_page,$db_manager,$application)
		{
			if (is_null($main_page))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$main_page->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($main_page->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $main_page->get_name() , "type" => "varchar");
				}
			if ($main_page->get_path_is_dirty())
				{
				$data[] = array("name" => "path" , "value" => $main_page->get_path() , "type" => "varchar");
				}
			if ($main_page->get_id_main_page_template_is_dirty())
				{
				$data[] = array("name" => "id_main_page_template" , "value" => $main_page->get_id_main_page_template() , "type" => "uuid");
				}
			if ($main_page->get_caption_is_dirty())
				{
				$data[] = array("name" => "caption" , "value" => $main_page->get_caption() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('main_page',$main_page->get_id()))
				{
				$result = $main_page->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('main_page',$main_page->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('main_page',$main_page->get_id(),$application,$main_page->get_id_save_location(),false);
				$main_page->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $main_page->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('main_page',$main_page->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('main_page',$main_page->get_id(),$application,$main_page->get_id_save_location(),true);
				$main_page->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$main_page = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$main_page = cls_table_factory::get_common_main_page()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($main_page))
				{
					$main_page = cls_table_factory::create_instance('main_page');
				}
			$main_page->fill($data,false);
			return self::save_object($main_page,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 5;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "main_page.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "main_page.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "main_page.path":
					$counter++;
					break;
				case "path":
					$counter++;
					break;
				case "main_page.id_main_page_template":
					$counter++;
					break;
				case "id_main_page_template":
					$counter++;
					break;
				case "main_page.caption":
					$counter++;
					break;
				case "caption":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
