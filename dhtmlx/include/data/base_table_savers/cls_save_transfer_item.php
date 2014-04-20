<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_transfer_item extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'transfer_item';
		}

	public static function save_object($transfer_item,$db_manager,$application)
		{
			if (is_null($transfer_item))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$transfer_item->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($transfer_item->get_id_transfer_is_dirty())
				{
				$data[] = array("name" => "id_transfer" , "value" => $transfer_item->get_id_transfer() , "type" => "uuid");
				}
			if ($transfer_item->get_id_posting_header_is_dirty())
				{
				$data[] = array("name" => "id_posting_header" , "value" => $transfer_item->get_id_posting_header() , "type" => "uuid");
				}
			if ($transfer_item->get_no_is_dirty())
				{
				$data[] = array("name" => "no" , "value" => $transfer_item->get_no() , "type" => "varchar");
				}
			if ($transfer_item->get_id_posting_header_storno_is_dirty())
				{
				$data[] = array("name" => "id_posting_header_storno" , "value" => $transfer_item->get_id_posting_header_storno() , "type" => "uuid");
				}
			if ($transfer_item->get_id_bank_account_is_dirty())
				{
				$data[] = array("name" => "id_bank_account" , "value" => $transfer_item->get_id_bank_account() , "type" => "uuid");
				}
			if ($transfer_item->get_amount_is_dirty())
				{
				$data[] = array("name" => "amount" , "value" => $transfer_item->get_amount() , "type" => "money");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('transfer_item',$transfer_item->get_id()))
				{
				$result = $transfer_item->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('transfer_item',$transfer_item->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('transfer_item',$transfer_item->get_id(),$application,$transfer_item->get_id_save_location(),false);
				$transfer_item->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $transfer_item->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('transfer_item',$transfer_item->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('transfer_item',$transfer_item->get_id(),$application,$transfer_item->get_id_save_location(),true);
				$transfer_item->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$transfer_item = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$transfer_item = cls_table_factory::get_common_transfer_item()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($transfer_item))
				{
					$transfer_item = cls_table_factory::create_instance('transfer_item');
				}
			$transfer_item->fill($data,false);
			return self::save_object($transfer_item,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 7;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "transfer_item.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "transfer_item.id_transfer":
					$counter++;
					break;
				case "id_transfer":
					$counter++;
					break;
				case "transfer_item.id_posting_header":
					$counter++;
					break;
				case "id_posting_header":
					$counter++;
					break;
				case "transfer_item.no":
					$counter++;
					break;
				case "no":
					$counter++;
					break;
				case "transfer_item.id_posting_header_storno":
					$counter++;
					break;
				case "id_posting_header_storno":
					$counter++;
					break;
				case "transfer_item.id_bank_account":
					$counter++;
					break;
				case "id_bank_account":
					$counter++;
					break;
				case "transfer_item.amount":
					$counter++;
					break;
				case "amount":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
