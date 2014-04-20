<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_transfer extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'transfer';
		}

	public static function save_object($transfer,$db_manager,$application)
		{
			if (is_null($transfer))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$transfer->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($transfer->get_id_person_employee_is_dirty())
				{
				$data[] = array("name" => "id_person_employee" , "value" => $transfer->get_id_person_employee() , "type" => "uuid");
				}
			if ($transfer->get_rundate_is_dirty())
				{
				$data[] = array("name" => "rundate" , "value" => $transfer->get_rundate() , "type" => "timestamptz");
				}
			if ($transfer->get_typ_is_dirty())
				{
				$data[] = array("name" => "typ" , "value" => $transfer->get_typ() , "type" => "bpchar");
				}
			if ($transfer->get_id_bank_account_is_dirty())
				{
				$data[] = array("name" => "id_bank_account" , "value" => $transfer->get_id_bank_account() , "type" => "uuid");
				}
			if ($transfer->get_stornodate_is_dirty())
				{
				$data[] = array("name" => "stornodate" , "value" => $transfer->get_stornodate() , "type" => "timestamptz");
				}
			if ($transfer->get_id_person_storno_is_dirty())
				{
				$data[] = array("name" => "id_person_storno" , "value" => $transfer->get_id_person_storno() , "type" => "uuid");
				}
			if ($transfer->get_defaultrun_is_dirty())
				{
				$data[] = array("name" => "defaultrun" , "value" => $transfer->get_defaultrun() , "type" => "bool");
				}
			if ($transfer->get_remark_is_dirty())
				{
				$data[] = array("name" => "remark" , "value" => $transfer->get_remark() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('transfer',$transfer->get_id()))
				{
				$result = $transfer->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('transfer',$transfer->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('transfer',$transfer->get_id(),$application,$transfer->get_id_save_location(),false);
				$transfer->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $transfer->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('transfer',$transfer->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('transfer',$transfer->get_id(),$application,$transfer->get_id_save_location(),true);
				$transfer->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$transfer = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$transfer = cls_table_factory::get_common_transfer()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($transfer))
				{
					$transfer = cls_table_factory::create_instance('transfer');
				}
			$transfer->fill($data,false);
			return self::save_object($transfer,$db_manager,$application);
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
				case "transfer.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "transfer.id_person_employee":
					$counter++;
					break;
				case "id_person_employee":
					$counter++;
					break;
				case "transfer.rundate":
					$counter++;
					break;
				case "rundate":
					$counter++;
					break;
				case "transfer.typ":
					$counter++;
					break;
				case "typ":
					$counter++;
					break;
				case "transfer.id_bank_account":
					$counter++;
					break;
				case "id_bank_account":
					$counter++;
					break;
				case "transfer.stornodate":
					$counter++;
					break;
				case "stornodate":
					$counter++;
					break;
				case "transfer.id_person_storno":
					$counter++;
					break;
				case "id_person_storno":
					$counter++;
					break;
				case "transfer.defaultrun":
					$counter++;
					break;
				case "defaultrun":
					$counter++;
					break;
				case "transfer.remark":
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
