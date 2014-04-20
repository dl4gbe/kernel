<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_data_view_restriction extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'data_view_restriction';
		}

	public static function save_object($data_view_restriction,$db_manager,$application)
		{
			if (is_null($data_view_restriction))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$data_view_restriction->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($data_view_restriction->get_value_is_dirty())
				{
				$data[] = array("name" => "value" , "value" => $data_view_restriction->get_value() , "type" => "varchar");
				}
			if ($data_view_restriction->get_operator_is_dirty())
				{
				$data[] = array("name" => "operator" , "value" => $data_view_restriction->get_operator() , "type" => "varchar");
				}
			if ($data_view_restriction->get_column_name_is_dirty())
				{
				$data[] = array("name" => "column_name" , "value" => $data_view_restriction->get_column_name() , "type" => "varchar");
				}
			if ($data_view_restriction->get_id_data_view_table_is_dirty())
				{
				$data[] = array("name" => "id_data_view_table" , "value" => $data_view_restriction->get_id_data_view_table() , "type" => "uuid");
				}
			if ($data_view_restriction->get_id_data_view_is_dirty())
				{
				$data[] = array("name" => "id_data_view" , "value" => $data_view_restriction->get_id_data_view() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('data_view_restriction',$data_view_restriction->get_id()))
				{
				$result = $data_view_restriction->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('data_view_restriction',$data_view_restriction->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('data_view_restriction',$data_view_restriction->get_id(),$application,$data_view_restriction->get_id_save_location(),false);
				$data_view_restriction->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $data_view_restriction->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('data_view_restriction',$data_view_restriction->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('data_view_restriction',$data_view_restriction->get_id(),$application,$data_view_restriction->get_id_save_location(),true);
				$data_view_restriction->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$data_view_restriction = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$data_view_restriction = cls_table_factory::get_common_data_view_restriction()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($data_view_restriction))
				{
					$data_view_restriction = cls_table_factory::create_instance('data_view_restriction');
				}
			$data_view_restriction->fill($data,false);
			return self::save_object($data_view_restriction,$db_manager,$application);
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
				case "data_view_restriction.value":
					$counter++;
					break;
				case "value":
					$counter++;
					break;
				case "data_view_restriction.operator":
					$counter++;
					break;
				case "operator":
					$counter++;
					break;
				case "data_view_restriction.column_name":
					$counter++;
					break;
				case "column_name":
					$counter++;
					break;
				case "data_view_restriction.id_data_view_table":
					$counter++;
					break;
				case "id_data_view_table":
					$counter++;
					break;
				case "data_view_restriction.id_data_view":
					$counter++;
					break;
				case "id_data_view":
					$counter++;
					break;
				case "data_view_restriction.id":
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
