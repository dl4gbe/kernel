<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_posting_header extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'posting_header';
		}

	public static function save_object($posting_header,$db_manager,$application)
		{
			if (is_null($posting_header))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$posting_header->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($posting_header->get_id_posting_header_main_id_is_dirty())
				{
				$data[] = array("name" => "id_posting_header_main_id" , "value" => $posting_header->get_id_posting_header_main_id() , "type" => "uuid");
				}
			if ($posting_header->get_remark_is_dirty())
				{
				$data[] = array("name" => "remark" , "value" => $posting_header->get_remark() , "type" => "varchar");
				}
			if ($posting_header->get_id_offer_event_is_dirty())
				{
				$data[] = array("name" => "id_offer_event" , "value" => $posting_header->get_id_offer_event() , "type" => "uuid");
				}
			if ($posting_header->get_period_is_dirty())
				{
				$data[] = array("name" => "period" , "value" => $posting_header->get_period() , "type" => "bpchar");
				}
			if ($posting_header->get_systemremark_is_dirty())
				{
				$data[] = array("name" => "systemremark" , "value" => $posting_header->get_systemremark() , "type" => "varchar");
				}
			if ($posting_header->get_duedate_is_dirty())
				{
				$data[] = array("name" => "duedate" , "value" => $posting_header->get_duedate() , "type" => "date");
				}
			if ($posting_header->get_paymenttype_is_dirty())
				{
				$data[] = array("name" => "paymenttype" , "value" => $posting_header->get_paymenttype() , "type" => "bpchar");
				}
			if ($posting_header->get_id_contract_is_dirty())
				{
				$data[] = array("name" => "id_contract" , "value" => $posting_header->get_id_contract() , "type" => "uuid");
				}
			if ($posting_header->get_id_contract_pos_is_dirty())
				{
				$data[] = array("name" => "id_contract_pos" , "value" => $posting_header->get_id_contract_pos() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('posting_header',$posting_header->get_id()))
				{
				$result = $posting_header->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('posting_header',$posting_header->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('posting_header',$posting_header->get_id(),$application,$posting_header->get_id_save_location(),false);
				$posting_header->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $posting_header->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('posting_header',$posting_header->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('posting_header',$posting_header->get_id(),$application,$posting_header->get_id_save_location(),true);
				$posting_header->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$posting_header = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$posting_header = cls_table_factory::get_common_posting_header()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($posting_header))
				{
					$posting_header = cls_table_factory::create_instance('posting_header');
				}
			$posting_header->fill($data,false);
			return self::save_object($posting_header,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 10;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "posting_header.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "posting_header.id_posting_header_main_id":
					$counter++;
					break;
				case "id_posting_header_main_id":
					$counter++;
					break;
				case "posting_header.remark":
					$counter++;
					break;
				case "remark":
					$counter++;
					break;
				case "posting_header.id_offer_event":
					$counter++;
					break;
				case "id_offer_event":
					$counter++;
					break;
				case "posting_header.period":
					$counter++;
					break;
				case "period":
					$counter++;
					break;
				case "posting_header.systemremark":
					$counter++;
					break;
				case "systemremark":
					$counter++;
					break;
				case "posting_header.duedate":
					$counter++;
					break;
				case "duedate":
					$counter++;
					break;
				case "posting_header.paymenttype":
					$counter++;
					break;
				case "paymenttype":
					$counter++;
					break;
				case "posting_header.id_contract":
					$counter++;
					break;
				case "id_contract":
					$counter++;
					break;
				case "posting_header.id_contract_pos":
					$counter++;
					break;
				case "id_contract_pos":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
