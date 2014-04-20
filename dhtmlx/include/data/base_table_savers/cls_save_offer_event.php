<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_offer_event extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'offer_event';
		}

	public static function save_object($offer_event,$db_manager,$application)
		{
			if (is_null($offer_event))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$offer_event->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($offer_event->get_id_event_type_is_dirty())
				{
				$data[] = array("name" => "id_event_type" , "value" => $offer_event->get_id_event_type() , "type" => "uuid");
				}
			if ($offer_event->get_id_offer_is_dirty())
				{
				$data[] = array("name" => "id_offer" , "value" => $offer_event->get_id_offer() , "type" => "uuid");
				}
			if ($offer_event->get_id_person_is_dirty())
				{
				$data[] = array("name" => "id_person" , "value" => $offer_event->get_id_person() , "type" => "uuid");
				}
			if ($offer_event->get_id_data_is_dirty())
				{
				$data[] = array("name" => "id_data" , "value" => $offer_event->get_id_data() , "type" => "uuid");
				}
			if ($offer_event->get_datefrom_is_dirty())
				{
				$data[] = array("name" => "datefrom" , "value" => $offer_event->get_datefrom() , "type" => "timestamptz");
				}
			if ($offer_event->get_datetil_is_dirty())
				{
				$data[] = array("name" => "datetil" , "value" => $offer_event->get_datetil() , "type" => "timestamptz");
				}
			if ($offer_event->get_data1_is_dirty())
				{
				$data[] = array("name" => "data1" , "value" => $offer_event->get_data1() , "type" => "varchar");
				}
			if ($offer_event->get_data2_is_dirty())
				{
				$data[] = array("name" => "data2" , "value" => $offer_event->get_data2() , "type" => "varchar");
				}
			if ($offer_event->get_id_device_is_dirty())
				{
				$data[] = array("name" => "id_device" , "value" => $offer_event->get_id_device() , "type" => "uuid");
				}
			if ($offer_event->get_id_posting_header_is_dirty())
				{
				$data[] = array("name" => "id_posting_header" , "value" => $offer_event->get_id_posting_header() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('offer_event',$offer_event->get_id()))
				{
				$result = $offer_event->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('offer_event',$offer_event->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('offer_event',$offer_event->get_id(),$application,$offer_event->get_id_save_location(),false);
				$offer_event->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $offer_event->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('offer_event',$offer_event->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('offer_event',$offer_event->get_id(),$application,$offer_event->get_id_save_location(),true);
				$offer_event->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$offer_event = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$offer_event = cls_table_factory::get_common_offer_event()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($offer_event))
				{
					$offer_event = cls_table_factory::create_instance('offer_event');
				}
			$offer_event->fill($data,false);
			return self::save_object($offer_event,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 11;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "offer_event.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "offer_event.id_event_type":
					$counter++;
					break;
				case "id_event_type":
					$counter++;
					break;
				case "offer_event.id_offer":
					$counter++;
					break;
				case "id_offer":
					$counter++;
					break;
				case "offer_event.id_person":
					$counter++;
					break;
				case "id_person":
					$counter++;
					break;
				case "offer_event.id_data":
					$counter++;
					break;
				case "id_data":
					$counter++;
					break;
				case "offer_event.datefrom":
					$counter++;
					break;
				case "datefrom":
					$counter++;
					break;
				case "offer_event.datetil":
					$counter++;
					break;
				case "datetil":
					$counter++;
					break;
				case "offer_event.data1":
					$counter++;
					break;
				case "data1":
					$counter++;
					break;
				case "offer_event.data2":
					$counter++;
					break;
				case "data2":
					$counter++;
					break;
				case "offer_event.id_device":
					$counter++;
					break;
				case "id_device":
					$counter++;
					break;
				case "offer_event.id_posting_header":
					$counter++;
					break;
				case "id_posting_header":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
