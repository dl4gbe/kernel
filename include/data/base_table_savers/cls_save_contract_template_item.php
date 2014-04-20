<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_contract_template_item extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'contract_template_item';
		}

	public static function save_object($contract_template_item,$db_manager,$application)
		{
			if (is_null($contract_template_item))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$contract_template_item->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($contract_template_item->get_freeunitsperyear_is_dirty())
				{
				$data[] = array("name" => "freeunitsperyear" , "value" => $contract_template_item->get_freeunitsperyear() , "type" => "int4");
				}
			if ($contract_template_item->get_freeunitspermonth_is_dirty())
				{
				$data[] = array("name" => "freeunitspermonth" , "value" => $contract_template_item->get_freeunitspermonth() , "type" => "int4");
				}
			if ($contract_template_item->get_freeunitsperweek_is_dirty())
				{
				$data[] = array("name" => "freeunitsperweek" , "value" => $contract_template_item->get_freeunitsperweek() , "type" => "int4");
				}
			if ($contract_template_item->get_freeunitsperday_is_dirty())
				{
				$data[] = array("name" => "freeunitsperday" , "value" => $contract_template_item->get_freeunitsperday() , "type" => "int4");
				}
			if ($contract_template_item->get_increaseperyear_is_dirty())
				{
				$data[] = array("name" => "increaseperyear" , "value" => $contract_template_item->get_increaseperyear() , "type" => "numeric");
				}
			if ($contract_template_item->get_increasepermonth_is_dirty())
				{
				$data[] = array("name" => "increasepermonth" , "value" => $contract_template_item->get_increasepermonth() , "type" => "numeric");
				}
			if ($contract_template_item->get_amountperyear_is_dirty())
				{
				$data[] = array("name" => "amountperyear" , "value" => $contract_template_item->get_amountperyear() , "type" => "money");
				}
			if ($contract_template_item->get_amountpermonth_is_dirty())
				{
				$data[] = array("name" => "amountpermonth" , "value" => $contract_template_item->get_amountpermonth() , "type" => "money");
				}
			if ($contract_template_item->get_amountperweek_is_dirty())
				{
				$data[] = array("name" => "amountperweek" , "value" => $contract_template_item->get_amountperweek() , "type" => "money");
				}
			if ($contract_template_item->get_amountperday_is_dirty())
				{
				$data[] = array("name" => "amountperday" , "value" => $contract_template_item->get_amountperday() , "type" => "money");
				}
			if ($contract_template_item->get_durationinmonths_is_dirty())
				{
				$data[] = array("name" => "durationinmonths" , "value" => $contract_template_item->get_durationinmonths() , "type" => "int4");
				}
			if ($contract_template_item->get_maincontract_is_dirty())
				{
				$data[] = array("name" => "maincontract" , "value" => $contract_template_item->get_maincontract() , "type" => "bool");
				}
			if ($contract_template_item->get_id_article_is_dirty())
				{
				$data[] = array("name" => "id_article" , "value" => $contract_template_item->get_id_article() , "type" => "uuid");
				}
			if ($contract_template_item->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $contract_template_item->get_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('contract_template_item',$contract_template_item->get_id()))
				{
				$result = $contract_template_item->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('contract_template_item',$contract_template_item->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$contract_template_item->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $contract_template_item->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('contract_template_item',$contract_template_item->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$contract_template_item->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$contract_template_item = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$contract_template_item = cls_table_factory::get_common_contract_template_item()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($contract_template_item))
				{
					$contract_template_item = cls_table_factory::create_instance('contract_template_item');
				}
			$contract_template_item->fill($data,false);
			return self::save_object($contract_template_item,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 15;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "contract_template_item.freeunitsperyear":
					$counter++;
					break;
				case "freeunitsperyear":
					$counter++;
					break;
				case "contract_template_item.freeunitspermonth":
					$counter++;
					break;
				case "freeunitspermonth":
					$counter++;
					break;
				case "contract_template_item.freeunitsperweek":
					$counter++;
					break;
				case "freeunitsperweek":
					$counter++;
					break;
				case "contract_template_item.freeunitsperday":
					$counter++;
					break;
				case "freeunitsperday":
					$counter++;
					break;
				case "contract_template_item.increaseperyear":
					$counter++;
					break;
				case "increaseperyear":
					$counter++;
					break;
				case "contract_template_item.increasepermonth":
					$counter++;
					break;
				case "increasepermonth":
					$counter++;
					break;
				case "contract_template_item.amountperyear":
					$counter++;
					break;
				case "amountperyear":
					$counter++;
					break;
				case "contract_template_item.amountpermonth":
					$counter++;
					break;
				case "amountpermonth":
					$counter++;
					break;
				case "contract_template_item.amountperweek":
					$counter++;
					break;
				case "amountperweek":
					$counter++;
					break;
				case "contract_template_item.amountperday":
					$counter++;
					break;
				case "amountperday":
					$counter++;
					break;
				case "contract_template_item.durationinmonths":
					$counter++;
					break;
				case "durationinmonths":
					$counter++;
					break;
				case "contract_template_item.maincontract":
					$counter++;
					break;
				case "maincontract":
					$counter++;
					break;
				case "contract_template_item.id_article":
					$counter++;
					break;
				case "id_article":
					$counter++;
					break;
				case "contract_template_item.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "contract_template_item.id":
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
