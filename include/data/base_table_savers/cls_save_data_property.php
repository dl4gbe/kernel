<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_data_property extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'data_property';
		}

	public static function save_object($data_property,$db_manager,$application)
		{
			if (is_null($data_property))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$data_property->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($data_property->get_id_link_data_is_dirty())
				{
				$data[] = array("name" => "id_link_data" , "value" => $data_property->get_id_link_data() , "type" => "uuid");
				}
			if ($data_property->get_id_data_property_type_is_dirty())
				{
				$data[] = array("name" => "id_data_property_type" , "value" => $data_property->get_id_data_property_type() , "type" => "uuid");
				}
			if ($data_property->get_value_is_dirty())
				{
				$data[] = array("name" => "value" , "value" => $data_property->get_value() , "type" => "_varchar");
				}
			if ($data_property->get_id_data_is_dirty())
				{
				$data[] = array("name" => "id_data" , "value" => $data_property->get_id_data() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('data_property',$data_property->get_id()))
				{
				$result = $data_property->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('data_property',$data_property->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('data_property',$data_property->get_id(),$application,$data_property->get_id_save_location(),false);
				$data_property->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $data_property->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('data_property',$data_property->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('data_property',$data_property->get_id(),$application,$data_property->get_id_save_location(),true);
				$data_property->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$data_property = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$data_property = cls_table_factory::get_common_data_property()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($data_property))
				{
					$data_property = cls_table_factory::create_instance('data_property');
				}
			$data_property->fill($data,false);
			return self::save_object($data_property,$db_manager,$application);
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
				case "data_property.id_link_data":
					$counter++;
					break;
				case "id_link_data":
					$counter++;
					break;
				case "data_property.id_data_property_type":
					$counter++;
					break;
				case "id_data_property_type":
					$counter++;
					break;
				case "data_property.value":
					$counter++;
					break;
				case "value":
					$counter++;
					break;
				case "data_property.id_data":
					$counter++;
					break;
				case "id_data":
					$counter++;
					break;
				case "data_property.id":
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
