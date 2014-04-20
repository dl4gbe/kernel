<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_data_location extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'data_location';
		}

	public static function save_object($data_location,$db_manager,$application)
		{
			if (is_null($data_location))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$data_location->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($data_location->get_id_data_is_dirty())
				{
				$data[] = array("name" => "id_data" , "value" => $data_location->get_id_data() , "type" => "uuid");
				}
			if ($data_location->get_id_location_is_dirty())
				{
				$data[] = array("name" => "id_location" , "value" => $data_location->get_id_location() , "type" => "uuid");
				}
			if ($data_location->get_owner_is_dirty())
				{
				$data[] = array("name" => "owner" , "value" => $data_location->get_owner() , "type" => "bool");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('data_location',$data_location->get_id()))
				{
				$result = $data_location->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('data_location',$data_location->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$data_location->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $data_location->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('data_location',$data_location->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$data_location->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$data_location = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$data_location = cls_table_factory::get_common_data_location()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($data_location))
				{
					$data_location = cls_table_factory::create_instance('data_location');
				}
			$data_location->fill($data,false);
			return self::save_object($data_location,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 4;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "data_location.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "data_location.id_data":
					$counter++;
					break;
				case "id_data":
					$counter++;
					break;
				case "data_location.id_location":
					$counter++;
					break;
				case "id_location":
					$counter++;
					break;
				case "data_location.owner":
					$counter++;
					break;
				case "owner":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
