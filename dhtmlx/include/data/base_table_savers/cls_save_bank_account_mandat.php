<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_bank_account_mandat extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'bank_account_mandat';
		}

	public static function save_object($bank_account_mandat,$db_manager,$application)
		{
			if (is_null($bank_account_mandat))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$bank_account_mandat->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($bank_account_mandat->get_id_bank_account_is_dirty())
				{
				$data[] = array("name" => "id_bank_account" , "value" => $bank_account_mandat->get_id_bank_account() , "type" => "uuid");
				}
			if ($bank_account_mandat->get_mandatsreferenzno_is_dirty())
				{
				$data[] = array("name" => "mandatsreferenzno" , "value" => $bank_account_mandat->get_mandatsreferenzno() , "type" => "varchar");
				}
			if ($bank_account_mandat->get_signaturedate_is_dirty())
				{
				$data[] = array("name" => "signaturedate" , "value" => $bank_account_mandat->get_signaturedate() , "type" => "date");
				}
			if ($bank_account_mandat->get_issuedate_is_dirty())
				{
				$data[] = array("name" => "issuedate" , "value" => $bank_account_mandat->get_issuedate() , "type" => "date");
				}
			if ($bank_account_mandat->get_firstname_is_dirty())
				{
				$data[] = array("name" => "firstname" , "value" => $bank_account_mandat->get_firstname() , "type" => "varchar");
				}
			if ($bank_account_mandat->get_lastname_is_dirty())
				{
				$data[] = array("name" => "lastname" , "value" => $bank_account_mandat->get_lastname() , "type" => "varchar");
				}
			if ($bank_account_mandat->get_address_is_dirty())
				{
				$data[] = array("name" => "address" , "value" => $bank_account_mandat->get_address() , "type" => "varchar");
				}
			if ($bank_account_mandat->get_zip_is_dirty())
				{
				$data[] = array("name" => "zip" , "value" => $bank_account_mandat->get_zip() , "type" => "varchar");
				}
			if ($bank_account_mandat->get_city_is_dirty())
				{
				$data[] = array("name" => "city" , "value" => $bank_account_mandat->get_city() , "type" => "varchar");
				}
			if ($bank_account_mandat->get_iban_is_dirty())
				{
				$data[] = array("name" => "iban" , "value" => $bank_account_mandat->get_iban() , "type" => "varchar");
				}
			if ($bank_account_mandat->get_bic_is_dirty())
				{
				$data[] = array("name" => "bic" , "value" => $bank_account_mandat->get_bic() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('bank_account_mandat',$bank_account_mandat->get_id()))
				{
				$result = $bank_account_mandat->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('bank_account_mandat',$bank_account_mandat->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('bank_account_mandat',$bank_account_mandat->get_id(),$application,$bank_account_mandat->get_id_save_location(),false);
				$bank_account_mandat->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $bank_account_mandat->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('bank_account_mandat',$bank_account_mandat->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('bank_account_mandat',$bank_account_mandat->get_id(),$application,$bank_account_mandat->get_id_save_location(),true);
				$bank_account_mandat->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$bank_account_mandat = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$bank_account_mandat = cls_table_factory::get_common_bank_account_mandat()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($bank_account_mandat))
				{
					$bank_account_mandat = cls_table_factory::create_instance('bank_account_mandat');
				}
			$bank_account_mandat->fill($data,false);
			return self::save_object($bank_account_mandat,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 12;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "bank_account_mandat.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "bank_account_mandat.id_bank_account":
					$counter++;
					break;
				case "id_bank_account":
					$counter++;
					break;
				case "bank_account_mandat.mandatsreferenzno":
					$counter++;
					break;
				case "mandatsreferenzno":
					$counter++;
					break;
				case "bank_account_mandat.signaturedate":
					$counter++;
					break;
				case "signaturedate":
					$counter++;
					break;
				case "bank_account_mandat.issuedate":
					$counter++;
					break;
				case "issuedate":
					$counter++;
					break;
				case "bank_account_mandat.firstname":
					$counter++;
					break;
				case "firstname":
					$counter++;
					break;
				case "bank_account_mandat.lastname":
					$counter++;
					break;
				case "lastname":
					$counter++;
					break;
				case "bank_account_mandat.address":
					$counter++;
					break;
				case "address":
					$counter++;
					break;
				case "bank_account_mandat.zip":
					$counter++;
					break;
				case "zip":
					$counter++;
					break;
				case "bank_account_mandat.city":
					$counter++;
					break;
				case "city":
					$counter++;
					break;
				case "bank_account_mandat.iban":
					$counter++;
					break;
				case "iban":
					$counter++;
					break;
				case "bank_account_mandat.bic":
					$counter++;
					break;
				case "bic":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
