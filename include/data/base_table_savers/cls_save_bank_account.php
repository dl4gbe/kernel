<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_bank_account extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'bank_account';
		}

	public static function save_object($bank_account,$db_manager,$application)
		{
			if (is_null($bank_account))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$bank_account->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($bank_account->get_holder_is_dirty())
				{
				$data[] = array("name" => "holder" , "value" => $bank_account->get_holder() , "type" => "varchar");
				}
			if ($bank_account->get_bic_is_dirty())
				{
				$data[] = array("name" => "bic" , "value" => $bank_account->get_bic() , "type" => "varchar");
				}
			if ($bank_account->get_iban_is_dirty())
				{
				$data[] = array("name" => "iban" , "value" => $bank_account->get_iban() , "type" => "varchar");
				}
			if ($bank_account->get_accountno_is_dirty())
				{
				$data[] = array("name" => "accountno" , "value" => $bank_account->get_accountno() , "type" => "varchar");
				}
			if ($bank_account->get_bankcode_is_dirty())
				{
				$data[] = array("name" => "bankcode" , "value" => $bank_account->get_bankcode() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('bank_account',$bank_account->get_id()))
				{
				$result = $bank_account->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('bank_account',$bank_account->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('bank_account',$bank_account->get_id(),$application,$bank_account->get_id_save_location(),false);
				$bank_account->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $bank_account->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('bank_account',$bank_account->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('bank_account',$bank_account->get_id(),$application,$bank_account->get_id_save_location(),true);
				$bank_account->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$bank_account = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$bank_account = cls_table_factory::get_common_bank_account()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($bank_account))
				{
					$bank_account = cls_table_factory::create_instance('bank_account');
				}
			$bank_account->fill($data,false);
			return self::save_object($bank_account,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 6;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "bank_account.holder":
					$counter++;
					break;
				case "holder":
					$counter++;
					break;
				case "bank_account.bic":
					$counter++;
					break;
				case "bic":
					$counter++;
					break;
				case "bank_account.iban":
					$counter++;
					break;
				case "iban":
					$counter++;
					break;
				case "bank_account.accountno":
					$counter++;
					break;
				case "accountno":
					$counter++;
					break;
				case "bank_account.bankcode":
					$counter++;
					break;
				case "bankcode":
					$counter++;
					break;
				case "bank_account.id":
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
