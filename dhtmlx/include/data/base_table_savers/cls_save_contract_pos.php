<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_contract_pos extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'contract_pos';
		}

	public static function save_object($contract_pos,$db_manager,$application)
		{
			if (is_null($contract_pos))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$contract_pos->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($contract_pos->get_id_contract_is_dirty())
				{
				$data[] = array("name" => "id_contract" , "value" => $contract_pos->get_id_contract() , "type" => "uuid");
				}
			if ($contract_pos->get_startdate_is_dirty())
				{
				$data[] = array("name" => "startdate" , "value" => $contract_pos->get_startdate() , "type" => "date");
				}
			if ($contract_pos->get_maincontract_is_dirty())
				{
				$data[] = array("name" => "maincontract" , "value" => $contract_pos->get_maincontract() , "type" => "bool");
				}
			if ($contract_pos->get_paymenttype_is_dirty())
				{
				$data[] = array("name" => "paymenttype" , "value" => $contract_pos->get_paymenttype() , "type" => "bpchar");
				}
			if ($contract_pos->get_enddate_is_dirty())
				{
				$data[] = array("name" => "enddate" , "value" => $contract_pos->get_enddate() , "type" => "date");
				}
			if ($contract_pos->get_paymentstart_is_dirty())
				{
				$data[] = array("name" => "paymentstart" , "value" => $contract_pos->get_paymentstart() , "type" => "date");
				}
			if ($contract_pos->get_cancelrequestreceived_is_dirty())
				{
				$data[] = array("name" => "cancelrequestreceived" , "value" => $contract_pos->get_cancelrequestreceived() , "type" => "date");
				}
			if ($contract_pos->get_extendable_is_dirty())
				{
				$data[] = array("name" => "extendable" , "value" => $contract_pos->get_extendable() , "type" => "bool");
				}
			if ($contract_pos->get_id_article_is_dirty())
				{
				$data[] = array("name" => "id_article" , "value" => $contract_pos->get_id_article() , "type" => "uuid");
				}
			if ($contract_pos->get_id_contract_template_pos_is_dirty())
				{
				$data[] = array("name" => "id_contract_template_pos" , "value" => $contract_pos->get_id_contract_template_pos() , "type" => "uuid");
				}
			if ($contract_pos->get_payday_is_dirty())
				{
				$data[] = array("name" => "payday" , "value" => $contract_pos->get_payday() , "type" => "int4");
				}
			if ($contract_pos->get_paydow_is_dirty())
				{
				$data[] = array("name" => "paydow" , "value" => $contract_pos->get_paydow() , "type" => "int4");
				}
			if ($contract_pos->get_durationinmonths_is_dirty())
				{
				$data[] = array("name" => "durationinmonths" , "value" => $contract_pos->get_durationinmonths() , "type" => "int4");
				}
			if ($contract_pos->get_extensioninmonth_is_dirty())
				{
				$data[] = array("name" => "extensioninmonth" , "value" => $contract_pos->get_extensioninmonth() , "type" => "int4");
				}
			if ($contract_pos->get_amountperday_is_dirty())
				{
				$data[] = array("name" => "amountperday" , "value" => $contract_pos->get_amountperday() , "type" => "money");
				}
			if ($contract_pos->get_amountperweek_is_dirty())
				{
				$data[] = array("name" => "amountperweek" , "value" => $contract_pos->get_amountperweek() , "type" => "money");
				}
			if ($contract_pos->get_amountpermonth_is_dirty())
				{
				$data[] = array("name" => "amountpermonth" , "value" => $contract_pos->get_amountpermonth() , "type" => "money");
				}
			if ($contract_pos->get_amountperyear_is_dirty())
				{
				$data[] = array("name" => "amountperyear" , "value" => $contract_pos->get_amountperyear() , "type" => "money");
				}
			if ($contract_pos->get_increasepermonth_is_dirty())
				{
				$data[] = array("name" => "increasepermonth" , "value" => $contract_pos->get_increasepermonth() , "type" => "numeric");
				}
			if ($contract_pos->get_increaseperyear_is_dirty())
				{
				$data[] = array("name" => "increaseperyear" , "value" => $contract_pos->get_increaseperyear() , "type" => "numeric");
				}
			if ($contract_pos->get_freeunitsperday_is_dirty())
				{
				$data[] = array("name" => "freeunitsperday" , "value" => $contract_pos->get_freeunitsperday() , "type" => "int4");
				}
			if ($contract_pos->get_freeunitsperweek_is_dirty())
				{
				$data[] = array("name" => "freeunitsperweek" , "value" => $contract_pos->get_freeunitsperweek() , "type" => "int4");
				}
			if ($contract_pos->get_freeunitspermonth_is_dirty())
				{
				$data[] = array("name" => "freeunitspermonth" , "value" => $contract_pos->get_freeunitspermonth() , "type" => "int4");
				}
			if ($contract_pos->get_freeunitsperyear_is_dirty())
				{
				$data[] = array("name" => "freeunitsperyear" , "value" => $contract_pos->get_freeunitsperyear() , "type" => "int4");
				}
			if ($contract_pos->get_paymentinterval_is_dirty())
				{
				$data[] = array("name" => "paymentinterval" , "value" => $contract_pos->get_paymentinterval() , "type" => "int4");
				}
			if ($contract_pos->get_paymentcycle_is_dirty())
				{
				$data[] = array("name" => "paymentcycle" , "value" => $contract_pos->get_paymentcycle() , "type" => "int4");
				}
			if ($contract_pos->get_paymentsduringrestperiod_is_dirty())
				{
				$data[] = array("name" => "paymentsduringrestperiod" , "value" => $contract_pos->get_paymentsduringrestperiod() , "type" => "bool");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('contract_pos',$contract_pos->get_id()))
				{
				$result = $contract_pos->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('contract_pos',$contract_pos->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('contract_pos',$contract_pos->get_id(),$application,$contract_pos->get_id_save_location(),false);
				$contract_pos->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $contract_pos->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('contract_pos',$contract_pos->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('contract_pos',$contract_pos->get_id(),$application,$contract_pos->get_id_save_location(),true);
				$contract_pos->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$contract_pos = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$contract_pos = cls_table_factory::get_common_contract_pos()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($contract_pos))
				{
					$contract_pos = cls_table_factory::create_instance('contract_pos');
				}
			$contract_pos->fill($data,false);
			return self::save_object($contract_pos,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 28;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "contract_pos.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "contract_pos.id_contract":
					$counter++;
					break;
				case "id_contract":
					$counter++;
					break;
				case "contract_pos.startdate":
					$counter++;
					break;
				case "startdate":
					$counter++;
					break;
				case "contract_pos.maincontract":
					$counter++;
					break;
				case "maincontract":
					$counter++;
					break;
				case "contract_pos.paymenttype":
					$counter++;
					break;
				case "paymenttype":
					$counter++;
					break;
				case "contract_pos.enddate":
					$counter++;
					break;
				case "enddate":
					$counter++;
					break;
				case "contract_pos.paymentstart":
					$counter++;
					break;
				case "paymentstart":
					$counter++;
					break;
				case "contract_pos.cancelrequestreceived":
					$counter++;
					break;
				case "cancelrequestreceived":
					$counter++;
					break;
				case "contract_pos.extendable":
					$counter++;
					break;
				case "extendable":
					$counter++;
					break;
				case "contract_pos.id_article":
					$counter++;
					break;
				case "id_article":
					$counter++;
					break;
				case "contract_pos.id_contract_template_pos":
					$counter++;
					break;
				case "id_contract_template_pos":
					$counter++;
					break;
				case "contract_pos.payday":
					$counter++;
					break;
				case "payday":
					$counter++;
					break;
				case "contract_pos.paydow":
					$counter++;
					break;
				case "paydow":
					$counter++;
					break;
				case "contract_pos.durationinmonths":
					$counter++;
					break;
				case "durationinmonths":
					$counter++;
					break;
				case "contract_pos.extensioninmonth":
					$counter++;
					break;
				case "extensioninmonth":
					$counter++;
					break;
				case "contract_pos.amountperday":
					$counter++;
					break;
				case "amountperday":
					$counter++;
					break;
				case "contract_pos.amountperweek":
					$counter++;
					break;
				case "amountperweek":
					$counter++;
					break;
				case "contract_pos.amountpermonth":
					$counter++;
					break;
				case "amountpermonth":
					$counter++;
					break;
				case "contract_pos.amountperyear":
					$counter++;
					break;
				case "amountperyear":
					$counter++;
					break;
				case "contract_pos.increasepermonth":
					$counter++;
					break;
				case "increasepermonth":
					$counter++;
					break;
				case "contract_pos.increaseperyear":
					$counter++;
					break;
				case "increaseperyear":
					$counter++;
					break;
				case "contract_pos.freeunitsperday":
					$counter++;
					break;
				case "freeunitsperday":
					$counter++;
					break;
				case "contract_pos.freeunitsperweek":
					$counter++;
					break;
				case "freeunitsperweek":
					$counter++;
					break;
				case "contract_pos.freeunitspermonth":
					$counter++;
					break;
				case "freeunitspermonth":
					$counter++;
					break;
				case "contract_pos.freeunitsperyear":
					$counter++;
					break;
				case "freeunitsperyear":
					$counter++;
					break;
				case "contract_pos.paymentinterval":
					$counter++;
					break;
				case "paymentinterval":
					$counter++;
					break;
				case "contract_pos.paymentcycle":
					$counter++;
					break;
				case "paymentcycle":
					$counter++;
					break;
				case "contract_pos.paymentsduringrestperiod":
					$counter++;
					break;
				case "paymentsduringrestperiod":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
