<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_offer_time extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'offer_time';
		}

	public static function save_object($offer_time,$db_manager,$application)
		{
			if (is_null($offer_time))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$offer_time->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($offer_time->get_id_offer_is_dirty())
				{
				$data[] = array("name" => "id_offer" , "value" => $offer_time->get_id_offer() , "type" => "uuid");
				}
			if ($offer_time->get_dayofweek_is_dirty())
				{
				$data[] = array("name" => "dayofweek" , "value" => $offer_time->get_dayofweek() , "type" => "int4");
				}
			if ($offer_time->get_validfrom_is_dirty())
				{
				$data[] = array("name" => "validfrom" , "value" => $offer_time->get_validfrom() , "type" => "date");
				}
			if ($offer_time->get_validtil_is_dirty())
				{
				$data[] = array("name" => "validtil" , "value" => $offer_time->get_validtil() , "type" => "date");
				}
			if ($offer_time->get_timefrom_is_dirty())
				{
				$data[] = array("name" => "timefrom" , "value" => $offer_time->get_timefrom() , "type" => "timetz");
				}
			if ($offer_time->get_timetil_is_dirty())
				{
				$data[] = array("name" => "timetil" , "value" => $offer_time->get_timetil() , "type" => "timetz");
				}
			if ($offer_time->get_duration_in_minutes_is_dirty())
				{
				$data[] = array("name" => "duration_in_minutes" , "value" => $offer_time->get_duration_in_minutes() , "type" => "int4");
				}
			if ($offer_time->get_remark_is_dirty())
				{
				$data[] = array("name" => "remark" , "value" => $offer_time->get_remark() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('offer_time',$offer_time->get_id()))
				{
				$result = $offer_time->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('offer_time',$offer_time->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('offer_time',$offer_time->get_id(),$application,$offer_time->get_id_save_location(),false);
				$offer_time->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $offer_time->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('offer_time',$offer_time->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('offer_time',$offer_time->get_id(),$application,$offer_time->get_id_save_location(),true);
				$offer_time->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$offer_time = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$offer_time = cls_table_factory::get_common_offer_time()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($offer_time))
				{
					$offer_time = cls_table_factory::create_instance('offer_time');
				}
			$offer_time->fill($data,false);
			return self::save_object($offer_time,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 9;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "offer_time.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "offer_time.id_offer":
					$counter++;
					break;
				case "id_offer":
					$counter++;
					break;
				case "offer_time.dayofweek":
					$counter++;
					break;
				case "dayofweek":
					$counter++;
					break;
				case "offer_time.validfrom":
					$counter++;
					break;
				case "validfrom":
					$counter++;
					break;
				case "offer_time.validtil":
					$counter++;
					break;
				case "validtil":
					$counter++;
					break;
				case "offer_time.timefrom":
					$counter++;
					break;
				case "timefrom":
					$counter++;
					break;
				case "offer_time.timetil":
					$counter++;
					break;
				case "timetil":
					$counter++;
					break;
				case "offer_time.duration_in_minutes":
					$counter++;
					break;
				case "duration_in_minutes":
					$counter++;
					break;
				case "offer_time.remark":
					$counter++;
					break;
				case "remark":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
