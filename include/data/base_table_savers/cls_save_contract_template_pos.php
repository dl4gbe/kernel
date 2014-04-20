<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_contract_template_pos extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'contract_template_pos';
		}

	public static function save_object($contract_template_pos,$db_manager,$application)
		{
			if (is_null($contract_template_pos))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$contract_template_pos->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($contract_template_pos->get_paymentcycle_is_dirty())
				{
				$data[] = array("name" => "paymentcycle" , "value" => $contract_template_pos->get_paymentcycle() , "type" => "int4");
				}
			if ($contract_template_pos->get_paymentinterval_is_dirty())
				{
				$data[] = array("name" => "paymentinterval" , "value" => $contract_template_pos->get_paymentinterval() , "type" => "int4");
				}
			if ($contract_template_pos->get_optional_is_dirty())
				{
				$data[] = array("name" => "optional" , "value" => $contract_template_pos->get_optional() , "type" => "bool");
				}
			if ($contract_template_pos->get_freeunitsperyear_is_dirty())
				{
				$data[] = array("name" => "freeunitsperyear" , "value" => $contract_template_pos->get_freeunitsperyear() , "type" => "int4");
				}
			if ($contract_template_pos->get_freeunitspermonth_is_dirty())
				{
				$data[] = array("name" => "freeunitspermonth" , "value" => $contract_template_pos->get_freeunitspermonth() , "type" => "int4");
				}
			if ($contract_template_pos->get_freeunitsperweek_is_dirty())
				{
				$data[] = array("name" => "freeunitsperweek" , "value" => $contract_template_pos->get_freeunitsperweek() , "type" => "int4");
				}
			if ($contract_template_pos->get_freeunitsperday_is_dirty())
				{
				$data[] = array("name" => "freeunitsperday" , "value" => $contract_template_pos->get_freeunitsperday() , "type" => "int4");
				}
			if ($contract_template_pos->get_increaseperyear_is_dirty())
				{
				$data[] = array("name" => "increaseperyear" , "value" => $contract_template_pos->get_increaseperyear() , "type" => "numeric");
				}
			if ($contract_template_pos->get_increasepermonth_is_dirty())
				{
				$data[] = array("name" => "increasepermonth" , "value" => $contract_template_pos->get_increasepermonth() , "type" => "numeric");
				}
			if ($contract_template_pos->get_amountperyear_is_dirty())
				{
				$data[] = array("name" => "amountperyear" , "value" => $contract_template_pos->get_amountperyear() , "type" => "money");
				}
			if ($contract_template_pos->get_amountpermonth_is_dirty())
				{
				$data[] = array("name" => "amountpermonth" , "value" => $contract_template_pos->get_amountpermonth() , "type" => "money");
				}
			if ($contract_template_pos->get_amountperweek_is_dirty())
				{
				$data[] = array("name" => "amountperweek" , "value" => $contract_template_pos->get_amountperweek() , "type" => "money");
				}
			if ($contract_template_pos->get_amountperday_is_dirty())
				{
				$data[] = array("name" => "amountperday" , "value" => $contract_template_pos->get_amountperday() , "type" => "money");
				}
			if ($contract_template_pos->get_durationinmonths_is_dirty())
				{
				$data[] = array("name" => "durationinmonths" , "value" => $contract_template_pos->get_durationinmonths() , "type" => "int4");
				}
			if ($contract_template_pos->get_maincontract_is_dirty())
				{
				$data[] = array("name" => "maincontract" , "value" => $contract_template_pos->get_maincontract() , "type" => "bool");
				}
			if ($contract_template_pos->get_id_article_is_dirty())
				{
				$data[] = array("name" => "id_article" , "value" => $contract_template_pos->get_id_article() , "type" => "uuid");
				}
			if ($contract_template_pos->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $contract_template_pos->get_name() , "type" => "varchar");
				}
			if ($contract_template_pos->get_id_contract_template_is_dirty())
				{
				$data[] = array("name" => "id_contract_template" , "value" => $contract_template_pos->get_id_contract_template() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('contract_template_pos',$contract_template_pos->get_id()))
				{
				$result = $contract_template_pos->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('contract_template_pos',$contract_template_pos->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$contract_template_pos->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $contract_template_pos->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('contract_template_pos',$contract_template_pos->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$contract_template_pos->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$contract_template_pos = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$contract_template_pos = cls_table_factory::get_common_contract_template_pos()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($contract_template_pos))
				{
					$contract_template_pos = cls_table_factory::create_instance('contract_template_pos');
				}
			$contract_template_pos->fill($data,false);
			return self::save_object($contract_template_pos,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 19;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "contract_template_pos.paymentcycle":
					$counter++;
					break;
				case "paymentcycle":
					$counter++;
					break;
				case "contract_template_pos.paymentinterval":
					$counter++;
					break;
				case "paymentinterval":
					$counter++;
					break;
				case "contract_template_pos.optional":
					$counter++;
					break;
				case "optional":
					$counter++;
					break;
				case "contract_template_pos.freeunitsperyear":
					$counter++;
					break;
				case "freeunitsperyear":
					$counter++;
					break;
				case "contract_template_pos.freeunitspermonth":
					$counter++;
					break;
				case "freeunitspermonth":
					$counter++;
					break;
				case "contract_template_pos.freeunitsperweek":
					$counter++;
					break;
				case "freeunitsperweek":
					$counter++;
					break;
				case "contract_template_pos.freeunitsperday":
					$counter++;
					break;
				case "freeunitsperday":
					$counter++;
					break;
				case "contract_template_pos.increaseperyear":
					$counter++;
					break;
				case "increaseperyear":
					$counter++;
					break;
				case "contract_template_pos.increasepermonth":
					$counter++;
					break;
				case "increasepermonth":
					$counter++;
					break;
				case "contract_template_pos.amountperyear":
					$counter++;
					break;
				case "amountperyear":
					$counter++;
					break;
				case "contract_template_pos.amountpermonth":
					$counter++;
					break;
				case "amountpermonth":
					$counter++;
					break;
				case "contract_template_pos.amountperweek":
					$counter++;
					break;
				case "amountperweek":
					$counter++;
					break;
				case "contract_template_pos.amountperday":
					$counter++;
					break;
				case "amountperday":
					$counter++;
					break;
				case "contract_template_pos.durationinmonths":
					$counter++;
					break;
				case "durationinmonths":
					$counter++;
					break;
				case "contract_template_pos.maincontract":
					$counter++;
					break;
				case "maincontract":
					$counter++;
					break;
				case "contract_template_pos.id_article":
					$counter++;
					break;
				case "id_article":
					$counter++;
					break;
				case "contract_template_pos.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "contract_template_pos.id_contract_template":
					$counter++;
					break;
				case "id_contract_template":
					$counter++;
					break;
				case "contract_template_pos.id":
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
