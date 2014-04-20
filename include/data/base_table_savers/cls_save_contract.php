<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_contract extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'contract';
		}

	public static function save_object($contract,$db_manager,$application)
		{
			if (is_null($contract))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$contract->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($contract->get_contractno_is_dirty())
				{
				$data[] = array("name" => "contractno" , "value" => $contract->get_contractno() , "type" => "varchar");
				}
			if ($contract->get_accessdate_is_dirty())
				{
				$data[] = array("name" => "accessdate" , "value" => $contract->get_accessdate() , "type" => "date");
				}
			if ($contract->get_signeddate_is_dirty())
				{
				$data[] = array("name" => "signeddate" , "value" => $contract->get_signeddate() , "type" => "date");
				}
			if ($contract->get_contractstart_is_dirty())
				{
				$data[] = array("name" => "contractstart" , "value" => $contract->get_contractstart() , "type" => "date");
				}
			if ($contract->get_id_contract_template_is_dirty())
				{
				$data[] = array("name" => "id_contract_template" , "value" => $contract->get_id_contract_template() , "type" => "uuid");
				}
			if ($contract->get_id_bank_account_is_dirty())
				{
				$data[] = array("name" => "id_bank_account" , "value" => $contract->get_id_bank_account() , "type" => "uuid");
				}
			if ($contract->get_id_person_promoter_is_dirty())
				{
				$data[] = array("name" => "id_person_promoter" , "value" => $contract->get_id_person_promoter() , "type" => "uuid");
				}
			if ($contract->get_id_campaign_is_dirty())
				{
				$data[] = array("name" => "id_campaign" , "value" => $contract->get_id_campaign() , "type" => "uuid");
				}
			if ($contract->get_id_person_signer_is_dirty())
				{
				$data[] = array("name" => "id_person_signer" , "value" => $contract->get_id_person_signer() , "type" => "uuid");
				}
			if ($contract->get_id_person_is_dirty())
				{
				$data[] = array("name" => "id_person" , "value" => $contract->get_id_person() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('contract',$contract->get_id()))
				{
				$result = $contract->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('contract',$contract->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('contract',$contract->get_id(),$application,$contract->get_id_save_location(),false);
				$contract->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $contract->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('contract',$contract->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('contract',$contract->get_id(),$application,$contract->get_id_save_location(),true);
				$contract->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$contract = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$contract = cls_table_factory::get_common_contract()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($contract))
				{
					$contract = cls_table_factory::create_instance('contract');
				}
			$contract->fill($data,false);
			return self::save_object($contract,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 11;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "contract.contractno":
					$counter++;
					break;
				case "contractno":
					$counter++;
					break;
				case "contract.accessdate":
					$counter++;
					break;
				case "accessdate":
					$counter++;
					break;
				case "contract.signeddate":
					$counter++;
					break;
				case "signeddate":
					$counter++;
					break;
				case "contract.contractstart":
					$counter++;
					break;
				case "contractstart":
					$counter++;
					break;
				case "contract.id_contract_template":
					$counter++;
					break;
				case "id_contract_template":
					$counter++;
					break;
				case "contract.id_bank_account":
					$counter++;
					break;
				case "id_bank_account":
					$counter++;
					break;
				case "contract.id_person_promoter":
					$counter++;
					break;
				case "id_person_promoter":
					$counter++;
					break;
				case "contract.id_campaign":
					$counter++;
					break;
				case "id_campaign":
					$counter++;
					break;
				case "contract.id_person_signer":
					$counter++;
					break;
				case "id_person_signer":
					$counter++;
					break;
				case "contract.id_person":
					$counter++;
					break;
				case "id_person":
					$counter++;
					break;
				case "contract.id":
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
