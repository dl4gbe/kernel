<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_person_desease extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'person_desease';
		}

	public static function save_object($person_desease,$db_manager,$application)
		{
			if (is_null($person_desease))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$person_desease->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($person_desease->get_remark_is_dirty())
				{
				$data[] = array("name" => "remark" , "value" => $person_desease->get_remark() , "type" => "varchar");
				}
			if ($person_desease->get_quarter_is_dirty())
				{
				$data[] = array("name" => "quarter" , "value" => $person_desease->get_quarter() , "type" => "bpchar");
				}
			if ($person_desease->get_issuedate_is_dirty())
				{
				$data[] = array("name" => "issuedate" , "value" => $person_desease->get_issuedate() , "type" => "timestamptz");
				}
			if ($person_desease->get_id_person_employee_is_dirty())
				{
				$data[] = array("name" => "id_person_employee" , "value" => $person_desease->get_id_person_employee() , "type" => "uuid");
				}
			if ($person_desease->get_state_is_dirty())
				{
				$data[] = array("name" => "state" , "value" => $person_desease->get_state() , "type" => "bpchar");
				}
			if ($person_desease->get_id_offer_event_is_dirty())
				{
				$data[] = array("name" => "id_offer_event" , "value" => $person_desease->get_id_offer_event() , "type" => "uuid");
				}
			if ($person_desease->get_id_desease_is_dirty())
				{
				$data[] = array("name" => "id_desease" , "value" => $person_desease->get_id_desease() , "type" => "uuid");
				}
			if ($person_desease->get_id_person_is_dirty())
				{
				$data[] = array("name" => "id_person" , "value" => $person_desease->get_id_person() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('person_desease',$person_desease->get_id()))
				{
				$result = $person_desease->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('person_desease',$person_desease->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('person_desease',$person_desease->get_id(),$application,$person_desease->get_id_save_location(),false);
				$person_desease->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $person_desease->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('person_desease',$person_desease->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('person_desease',$person_desease->get_id(),$application,$person_desease->get_id_save_location(),true);
				$person_desease->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$person_desease = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$person_desease = cls_table_factory::get_common_person_desease()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($person_desease))
				{
					$person_desease = cls_table_factory::create_instance('person_desease');
				}
			$person_desease->fill($data,false);
			return self::save_object($person_desease,$db_manager,$application);
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
				case "person_desease.remark":
					$counter++;
					break;
				case "remark":
					$counter++;
					break;
				case "person_desease.quarter":
					$counter++;
					break;
				case "quarter":
					$counter++;
					break;
				case "person_desease.issuedate":
					$counter++;
					break;
				case "issuedate":
					$counter++;
					break;
				case "person_desease.id_person_employee":
					$counter++;
					break;
				case "id_person_employee":
					$counter++;
					break;
				case "person_desease.state":
					$counter++;
					break;
				case "state":
					$counter++;
					break;
				case "person_desease.id_offer_event":
					$counter++;
					break;
				case "id_offer_event":
					$counter++;
					break;
				case "person_desease.id_desease":
					$counter++;
					break;
				case "id_desease":
					$counter++;
					break;
				case "person_desease.id_person":
					$counter++;
					break;
				case "id_person":
					$counter++;
					break;
				case "person_desease.id":
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
