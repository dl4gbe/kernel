<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_data_view extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'data_view';
		}

	public static function save_object($data_view,$db_manager,$application)
		{
			if (is_null($data_view))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$data_view->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($data_view->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $data_view->get_name() , "type" => "varchar");
				}
			if ($data_view->get_file_name_is_dirty())
				{
				$data[] = array("name" => "file_name" , "value" => $data_view->get_file_name() , "type" => "varchar");
				}
			if ($data_view->get_table_name_is_dirty())
				{
				$data[] = array("name" => "table_name" , "value" => $data_view->get_table_name() , "type" => "varchar");
				}
			if ($data_view->get_caption_is_dirty())
				{
				$data[] = array("name" => "caption" , "value" => $data_view->get_caption() , "type" => "varchar");
				}
			if ($data_view->get_id_ribbonbar_is_dirty())
				{
				$data[] = array("name" => "id_ribbonbar" , "value" => $data_view->get_id_ribbonbar() , "type" => "uuid");
				}
			if ($data_view->get_has_edit_form_is_dirty())
				{
				$data[] = array("name" => "has_edit_form" , "value" => $data_view->get_has_edit_form() , "type" => "bool");
				}
			if ($data_view->get_id_control_detail_is_dirty())
				{
				$data[] = array("name" => "id_control_detail" , "value" => $data_view->get_id_control_detail() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('data_view',$data_view->get_id()))
				{
				$result = $data_view->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('data_view',$data_view->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('data_view',$data_view->get_id(),$application,$data_view->get_id_save_location(),false);
				$data_view->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $data_view->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('data_view',$data_view->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('data_view',$data_view->get_id(),$application,$data_view->get_id_save_location(),true);
				$data_view->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$data_view = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$data_view = cls_table_factory::get_common_data_view()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($data_view))
				{
					$data_view = cls_table_factory::create_instance('data_view');
				}
			$data_view->fill($data,false);
			return self::save_object($data_view,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 8;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "data_view.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "data_view.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "data_view.file_name":
					$counter++;
					break;
				case "file_name":
					$counter++;
					break;
				case "data_view.table_name":
					$counter++;
					break;
				case "table_name":
					$counter++;
					break;
				case "data_view.caption":
					$counter++;
					break;
				case "caption":
					$counter++;
					break;
				case "data_view.id_ribbonbar":
					$counter++;
					break;
				case "id_ribbonbar":
					$counter++;
					break;
				case "data_view.has_edit_form":
					$counter++;
					break;
				case "has_edit_form":
					$counter++;
					break;
				case "data_view.id_control_detail":
					$counter++;
					break;
				case "id_control_detail":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
