<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_table_column extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'table_column';
		}

	public static function save_object($table_column,$db_manager,$application)
		{
			if (is_null($table_column))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$table_column->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($table_column->get_default_control_is_dirty())
				{
				$data[] = array("name" => "default_control" , "value" => $table_column->get_default_control() , "type" => "varchar");
				}
			if ($table_column->get_width_is_dirty())
				{
				$data[] = array("name" => "width" , "value" => $table_column->get_width() , "type" => "int4");
				}
			if ($table_column->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $table_column->get_name() , "type" => "varchar");
				}
			if ($table_column->get_column_name_is_dirty())
				{
				$data[] = array("name" => "column_name" , "value" => $table_column->get_column_name() , "type" => "varchar");
				}
			if ($table_column->get_table_name_is_dirty())
				{
				$data[] = array("name" => "table_name" , "value" => $table_column->get_table_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('table_column',$table_column->get_id()))
				{
				$result = $table_column->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('table_column',$table_column->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('table_column',$table_column->get_id(),$application,$table_column->get_id_save_location(),false);
				$table_column->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $table_column->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('table_column',$table_column->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('table_column',$table_column->get_id(),$application,$table_column->get_id_save_location(),true);
				$table_column->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$table_column = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$table_column = cls_table_factory::get_common_table_column()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($table_column))
				{
					$table_column = cls_table_factory::create_instance('table_column');
				}
			$table_column->fill($data,false);
			return self::save_object($table_column,$db_manager,$application);
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
				case "table_column.default_control":
					$counter++;
					break;
				case "default_control":
					$counter++;
					break;
				case "table_column.width":
					$counter++;
					break;
				case "width":
					$counter++;
					break;
				case "table_column.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "table_column.column_name":
					$counter++;
					break;
				case "column_name":
					$counter++;
					break;
				case "table_column.table_name":
					$counter++;
					break;
				case "table_name":
					$counter++;
					break;
				case "table_column.id":
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
