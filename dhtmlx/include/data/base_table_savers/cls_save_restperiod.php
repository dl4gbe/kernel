<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_restperiod extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'restperiod';
		}

	public static function save_object($restperiod,$db_manager,$application)
		{
			if (is_null($restperiod))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$restperiod->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($restperiod->get_id_person_is_dirty())
				{
				$data[] = array("name" => "id_person" , "value" => $restperiod->get_id_person() , "type" => "uuid");
				}
			if ($restperiod->get_id_contract_is_dirty())
				{
				$data[] = array("name" => "id_contract" , "value" => $restperiod->get_id_contract() , "type" => "uuid");
				}
			if ($restperiod->get_id_contract_pos_is_dirty())
				{
				$data[] = array("name" => "id_contract_pos" , "value" => $restperiod->get_id_contract_pos() , "type" => "uuid");
				}
			if ($restperiod->get_startdate_is_dirty())
				{
				$data[] = array("name" => "startdate" , "value" => $restperiod->get_startdate() , "type" => "date");
				}
			if ($restperiod->get_enddate_is_dirty())
				{
				$data[] = array("name" => "enddate" , "value" => $restperiod->get_enddate() , "type" => "date");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('restperiod',$restperiod->get_id()))
				{
				$result = $restperiod->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('restperiod',$restperiod->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('restperiod',$restperiod->get_id(),$application,$restperiod->get_id_save_location(),false);
				$restperiod->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $restperiod->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('restperiod',$restperiod->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('restperiod',$restperiod->get_id(),$application,$restperiod->get_id_save_location(),true);
				$restperiod->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$restperiod = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$restperiod = cls_table_factory::get_common_restperiod()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($restperiod))
				{
					$restperiod = cls_table_factory::create_instance('restperiod');
				}
			$restperiod->fill($data,false);
			return self::save_object($restperiod,$db_manager,$application);
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
				case "restperiod.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "restperiod.id_person":
					$counter++;
					break;
				case "id_person":
					$counter++;
					break;
				case "restperiod.id_contract":
					$counter++;
					break;
				case "id_contract":
					$counter++;
					break;
				case "restperiod.id_contract_pos":
					$counter++;
					break;
				case "id_contract_pos":
					$counter++;
					break;
				case "restperiod.startdate":
					$counter++;
					break;
				case "startdate":
					$counter++;
					break;
				case "restperiod.enddate":
					$counter++;
					break;
				case "enddate":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
