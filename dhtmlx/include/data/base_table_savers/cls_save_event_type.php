<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_event_type extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'event_type';
		}

	public static function save_object($event_type,$db_manager,$application)
		{
			if (is_null($event_type))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$event_type->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($event_type->get_key_is_dirty())
				{
				$data[] = array("name" => "key" , "value" => $event_type->get_key() , "type" => "bpchar");
				}
			if ($event_type->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $event_type->get_name() , "type" => "varchar");
				}
			if ($event_type->get_tablename_is_dirty())
				{
				$data[] = array("name" => "tablename" , "value" => $event_type->get_tablename() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('event_type',$event_type->get_id()))
				{
				$result = $event_type->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('event_type',$event_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('event_type',$event_type->get_id(),$application,$event_type->get_id_save_location(),false);
				$event_type->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $event_type->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('event_type',$event_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('event_type',$event_type->get_id(),$application,$event_type->get_id_save_location(),true);
				$event_type->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$event_type = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$event_type = cls_table_factory::get_common_event_type()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($event_type))
				{
					$event_type = cls_table_factory::create_instance('event_type');
				}
			$event_type->fill($data,false);
			return self::save_object($event_type,$db_manager,$application);
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
				case "event_type.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "event_type.key":
					$counter++;
					break;
				case "key":
					$counter++;
					break;
				case "event_type.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "event_type.tablename":
					$counter++;
					break;
				case "tablename":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
