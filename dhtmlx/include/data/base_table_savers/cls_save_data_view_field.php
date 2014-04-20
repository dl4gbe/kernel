<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_data_view_field extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'data_view_field';
		}

	public static function save_object($data_view_field,$db_manager,$application)
		{
			if (is_null($data_view_field))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$data_view_field->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($data_view_field->get_id_data_view_table_is_dirty())
				{
				$data[] = array("name" => "id_data_view_table" , "value" => $data_view_field->get_id_data_view_table() , "type" => "uuid");
				}
			if ($data_view_field->get_table_column_is_dirty())
				{
				$data[] = array("name" => "table_column" , "value" => $data_view_field->get_table_column() , "type" => "varchar");
				}
			if ($data_view_field->get_format_is_dirty())
				{
				$data[] = array("name" => "format" , "value" => $data_view_field->get_format() , "type" => "varchar");
				}
			if ($data_view_field->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $data_view_field->get_name() , "type" => "varchar");
				}
			if ($data_view_field->get_column_order_is_dirty())
				{
				$data[] = array("name" => "column_order" , "value" => $data_view_field->get_column_order() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('data_view_field',$data_view_field->get_id()))
				{
				$result = $data_view_field->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('data_view_field',$data_view_field->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('data_view_field',$data_view_field->get_id(),$application,$data_view_field->get_id_save_location(),false);
				$data_view_field->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $data_view_field->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('data_view_field',$data_view_field->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('data_view_field',$data_view_field->get_id(),$application,$data_view_field->get_id_save_location(),true);
				$data_view_field->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$data_view_field = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$data_view_field = cls_table_factory::get_common_data_view_field()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($data_view_field))
				{
					$data_view_field = cls_table_factory::create_instance('data_view_field');
				}
			$data_view_field->fill($data,false);
			return self::save_object($data_view_field,$db_manager,$application);
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
				case "data_view_field.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "data_view_field.id_data_view_table":
					$counter++;
					break;
				case "id_data_view_table":
					$counter++;
					break;
				case "data_view_field.table_column":
					$counter++;
					break;
				case "table_column":
					$counter++;
					break;
				case "data_view_field.format":
					$counter++;
					break;
				case "format":
					$counter++;
					break;
				case "data_view_field.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "data_view_field.column_order":
					$counter++;
					break;
				case "column_order":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
