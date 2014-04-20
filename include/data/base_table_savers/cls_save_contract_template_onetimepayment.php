<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_contract_template_onetimepayment extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'contract_template_onetimepayment';
		}

	public static function save_object($contract_template_onetimepayment,$db_manager,$application)
		{
			if (is_null($contract_template_onetimepayment))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$contract_template_onetimepayment->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($contract_template_onetimepayment->get_price_is_dirty())
				{
				$data[] = array("name" => "price" , "value" => $contract_template_onetimepayment->get_price() , "type" => "money");
				}
			if ($contract_template_onetimepayment->get_id_article_is_dirty())
				{
				$data[] = array("name" => "id_article" , "value" => $contract_template_onetimepayment->get_id_article() , "type" => "uuid");
				}
			if ($contract_template_onetimepayment->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $contract_template_onetimepayment->get_name() , "type" => "varchar");
				}
			if ($contract_template_onetimepayment->get_id_contract_template_is_dirty())
				{
				$data[] = array("name" => "id_contract_template" , "value" => $contract_template_onetimepayment->get_id_contract_template() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('contract_template_onetimepayment',$contract_template_onetimepayment->get_id()))
				{
				$result = $contract_template_onetimepayment->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('contract_template_onetimepayment',$contract_template_onetimepayment->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$contract_template_onetimepayment->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $contract_template_onetimepayment->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('contract_template_onetimepayment',$contract_template_onetimepayment->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$contract_template_onetimepayment->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$contract_template_onetimepayment = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$contract_template_onetimepayment = cls_table_factory::get_common_contract_template_onetimepayment()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($contract_template_onetimepayment))
				{
					$contract_template_onetimepayment = cls_table_factory::create_instance('contract_template_onetimepayment');
				}
			$contract_template_onetimepayment->fill($data,false);
			return self::save_object($contract_template_onetimepayment,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 5;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "contract_template_onetimepayment.price":
					$counter++;
					break;
				case "price":
					$counter++;
					break;
				case "contract_template_onetimepayment.id_article":
					$counter++;
					break;
				case "id_article":
					$counter++;
					break;
				case "contract_template_onetimepayment.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "contract_template_onetimepayment.id_contract_template":
					$counter++;
					break;
				case "id_contract_template":
					$counter++;
					break;
				case "contract_template_onetimepayment.id":
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
