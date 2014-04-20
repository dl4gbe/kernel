<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_contract_plan extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'contract_plan';
		}

	public static function save_object($contract_plan,$db_manager,$application)
		{
			if (is_null($contract_plan))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$contract_plan->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($contract_plan->get_datefrom_is_dirty())
				{
				$data[] = array("name" => "datefrom" , "value" => $contract_plan->get_datefrom() , "type" => "date");
				}
			if ($contract_plan->get_datetil_is_dirty())
				{
				$data[] = array("name" => "datetil" , "value" => $contract_plan->get_datetil() , "type" => "date");
				}
			if ($contract_plan->get_amount_is_dirty())
				{
				$data[] = array("name" => "amount" , "value" => $contract_plan->get_amount() , "type" => "money");
				}
			if ($contract_plan->get_duedate_is_dirty())
				{
				$data[] = array("name" => "duedate" , "value" => $contract_plan->get_duedate() , "type" => "date");
				}
			if ($contract_plan->get_id_posting_header_is_dirty())
				{
				$data[] = array("name" => "id_posting_header" , "value" => $contract_plan->get_id_posting_header() , "type" => "uuid");
				}
			if ($contract_plan->get_type_is_dirty())
				{
				$data[] = array("name" => "type" , "value" => $contract_plan->get_type() , "type" => "bpchar");
				}
			if ($contract_plan->get_id_contract_pos_is_dirty())
				{
				$data[] = array("name" => "id_contract_pos" , "value" => $contract_plan->get_id_contract_pos() , "type" => "uuid");
				}
			if ($contract_plan->get_paymenttype_is_dirty())
				{
				$data[] = array("name" => "paymenttype" , "value" => $contract_plan->get_paymenttype() , "type" => "bpchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('contract_plan',$contract_plan->get_id()))
				{
				$result = $contract_plan->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('contract_plan',$contract_plan->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('contract_plan',$contract_plan->get_id(),$application,$contract_plan->get_id_save_location(),false);
				$contract_plan->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $contract_plan->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('contract_plan',$contract_plan->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('contract_plan',$contract_plan->get_id(),$application,$contract_plan->get_id_save_location(),true);
				$contract_plan->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$contract_plan = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$contract_plan = cls_table_factory::get_common_contract_plan()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($contract_plan))
				{
					$contract_plan = cls_table_factory::create_instance('contract_plan');
				}
			$contract_plan->fill($data,false);
			return self::save_object($contract_plan,$db_manager,$application);
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
				case "contract_plan.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "contract_plan.datefrom":
					$counter++;
					break;
				case "datefrom":
					$counter++;
					break;
				case "contract_plan.datetil":
					$counter++;
					break;
				case "datetil":
					$counter++;
					break;
				case "contract_plan.amount":
					$counter++;
					break;
				case "amount":
					$counter++;
					break;
				case "contract_plan.duedate":
					$counter++;
					break;
				case "duedate":
					$counter++;
					break;
				case "contract_plan.id_posting_header":
					$counter++;
					break;
				case "id_posting_header":
					$counter++;
					break;
				case "contract_plan.type":
					$counter++;
					break;
				case "type":
					$counter++;
					break;
				case "contract_plan.id_contract_pos":
					$counter++;
					break;
				case "id_contract_pos":
					$counter++;
					break;
				case "contract_plan.paymenttype":
					$counter++;
					break;
				case "paymenttype":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
