<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_person extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'person';
		}

	public static function save_object($person,$db_manager,$application)
		{
			if (is_null($person))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$person->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($person->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $person->get_name() , "type" => "varchar");
				}
			if ($person->get_personno_is_dirty())
				{
				$data[] = array("name" => "personno" , "value" => $person->get_personno() , "type" => "varchar");
				}
			if ($person->get_id_article_price_group_is_dirty())
				{
				$data[] = array("name" => "id_article_price_group" , "value" => $person->get_id_article_price_group() , "type" => "uuid");
				}
			if ($person->get_cardno_is_dirty())
				{
				$data[] = array("name" => "cardno" , "value" => $person->get_cardno() , "type" => "varchar");
				}
			if ($person->get_paymenttype_is_dirty())
				{
				$data[] = array("name" => "paymenttype" , "value" => $person->get_paymenttype() , "type" => "bpchar");
				}
			if ($person->get_id_bank_account_is_dirty())
				{
				$data[] = array("name" => "id_bank_account" , "value" => $person->get_id_bank_account() , "type" => "uuid");
				}
			if ($person->get_id_country_nationality_is_dirty())
				{
				$data[] = array("name" => "id_country_nationality" , "value" => $person->get_id_country_nationality() , "type" => "uuid");
				}
			if ($person->get_birthdate_is_dirty())
				{
				$data[] = array("name" => "birthdate" , "value" => $person->get_birthdate() , "type" => "date");
				}
			if ($person->get_id_salutation_is_dirty())
				{
				$data[] = array("name" => "id_salutation" , "value" => $person->get_id_salutation() , "type" => "uuid");
				}
			if ($person->get_middlename_is_dirty())
				{
				$data[] = array("name" => "middlename" , "value" => $person->get_middlename() , "type" => "varchar");
				}
			if ($person->get_lastname_is_dirty())
				{
				$data[] = array("name" => "lastname" , "value" => $person->get_lastname() , "type" => "varchar");
				}
			if ($person->get_firstname_is_dirty())
				{
				$data[] = array("name" => "firstname" , "value" => $person->get_firstname() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('person',$person->get_id()))
				{
				$result = $person->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('person',$person->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('person',$person->get_id(),$application,$person->get_id_save_location(),false);
				$person->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $person->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('person',$person->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('person',$person->get_id(),$application,$person->get_id_save_location(),true);
				$person->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$person = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$person = cls_table_factory::get_common_person()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($person))
				{
					$person = cls_table_factory::create_instance('person');
				}
			$person->fill($data,false);
			return self::save_object($person,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 13;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "person.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "person.personno":
					$counter++;
					break;
				case "personno":
					$counter++;
					break;
				case "person.id_article_price_group":
					$counter++;
					break;
				case "id_article_price_group":
					$counter++;
					break;
				case "person.cardno":
					$counter++;
					break;
				case "cardno":
					$counter++;
					break;
				case "person.paymenttype":
					$counter++;
					break;
				case "paymenttype":
					$counter++;
					break;
				case "person.id_bank_account":
					$counter++;
					break;
				case "id_bank_account":
					$counter++;
					break;
				case "person.id_country_nationality":
					$counter++;
					break;
				case "id_country_nationality":
					$counter++;
					break;
				case "person.birthdate":
					$counter++;
					break;
				case "birthdate":
					$counter++;
					break;
				case "person.id_salutation":
					$counter++;
					break;
				case "id_salutation":
					$counter++;
					break;
				case "person.middlename":
					$counter++;
					break;
				case "middlename":
					$counter++;
					break;
				case "person.lastname":
					$counter++;
					break;
				case "lastname":
					$counter++;
					break;
				case "person.firstname":
					$counter++;
					break;
				case "firstname":
					$counter++;
					break;
				case "person.id":
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
