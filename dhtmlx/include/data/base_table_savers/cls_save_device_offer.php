<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_device_offer extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'device_offer';
		}

	public static function save_object($device_offer,$db_manager,$application)
		{
			if (is_null($device_offer))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$device_offer->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($device_offer->get_id_device_is_dirty())
				{
				$data[] = array("name" => "id_device" , "value" => $device_offer->get_id_device() , "type" => "uuid");
				}
			if ($device_offer->get_id_offer_is_dirty())
				{
				$data[] = array("name" => "id_offer" , "value" => $device_offer->get_id_offer() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('device_offer',$device_offer->get_id()))
				{
				$result = $device_offer->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('device_offer',$device_offer->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('device_offer',$device_offer->get_id(),$application,$device_offer->get_id_save_location(),false);
				$device_offer->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $device_offer->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('device_offer',$device_offer->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('device_offer',$device_offer->get_id(),$application,$device_offer->get_id_save_location(),true);
				$device_offer->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$device_offer = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$device_offer = cls_table_factory::get_common_device_offer()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($device_offer))
				{
					$device_offer = cls_table_factory::create_instance('device_offer');
				}
			$device_offer->fill($data,false);
			return self::save_object($device_offer,$db_manager,$application);
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
				case "device_offer.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "device_offer.id_device":
					$counter++;
					break;
				case "id_device":
					$counter++;
					break;
				case "device_offer.id_offer":
					$counter++;
					break;
				case "id_offer":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
