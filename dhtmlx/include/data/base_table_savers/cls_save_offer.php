<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_offer extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'offer';
		}

	public static function save_object($offer,$db_manager,$application)
		{
			if (is_null($offer))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$offer->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($offer->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $offer->get_name() , "type" => "varchar");
				}
			if ($offer->get_no_is_dirty())
				{
				$data[] = array("name" => "no" , "value" => $offer->get_no() , "type" => "varchar");
				}
			if ($offer->get_id_offertype_is_dirty())
				{
				$data[] = array("name" => "id_offertype" , "value" => $offer->get_id_offertype() , "type" => "uuid");
				}
			if ($offer->get_positionnumber_is_dirty())
				{
				$data[] = array("name" => "positionnumber" , "value" => $offer->get_positionnumber() , "type" => "varchar");
				}
			if ($offer->get_validfrom_is_dirty())
				{
				$data[] = array("name" => "validfrom" , "value" => $offer->get_validfrom() , "type" => "date");
				}
			if ($offer->get_validtil_is_dirty())
				{
				$data[] = array("name" => "validtil" , "value" => $offer->get_validtil() , "type" => "date");
				}
			if ($offer->get_id_person_employee_is_dirty())
				{
				$data[] = array("name" => "id_person_employee" , "value" => $offer->get_id_person_employee() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('offer',$offer->get_id()))
				{
				$result = $offer->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('offer',$offer->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('offer',$offer->get_id(),$application,$offer->get_id_save_location(),false);
				$offer->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $offer->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('offer',$offer->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('offer',$offer->get_id(),$application,$offer->get_id_save_location(),true);
				$offer->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$offer = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$offer = cls_table_factory::get_common_offer()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($offer))
				{
					$offer = cls_table_factory::create_instance('offer');
				}
			$offer->fill($data,false);
			return self::save_object($offer,$db_manager,$application);
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
				case "offer.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "offer.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "offer.no":
					$counter++;
					break;
				case "no":
					$counter++;
					break;
				case "offer.id_offertype":
					$counter++;
					break;
				case "id_offertype":
					$counter++;
					break;
				case "offer.positionnumber":
					$counter++;
					break;
				case "positionnumber":
					$counter++;
					break;
				case "offer.validfrom":
					$counter++;
					break;
				case "validfrom":
					$counter++;
					break;
				case "offer.validtil":
					$counter++;
					break;
				case "validtil":
					$counter++;
					break;
				case "offer.id_person_employee":
					$counter++;
					break;
				case "id_person_employee":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
