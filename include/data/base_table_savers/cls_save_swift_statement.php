<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_swift_statement extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'swift_statement';
		}

	public static function save_object($swift_statement,$db_manager,$application)
		{
			if (is_null($swift_statement))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$swift_statement->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($swift_statement->get_transaction_reference_number_is_dirty())
				{
				$data[] = array("name" => "transaction_reference_number" , "value" => $swift_statement->get_transaction_reference_number() , "type" => "varchar");
				}
			if ($swift_statement->get_statement_number_is_dirty())
				{
				$data[] = array("name" => "statement_number" , "value" => $swift_statement->get_statement_number() , "type" => "varchar");
				}
			if ($swift_statement->get_related_reference_is_dirty())
				{
				$data[] = array("name" => "related_reference" , "value" => $swift_statement->get_related_reference() , "type" => "varchar");
				}
			if ($swift_statement->get_opening_balance_date_is_dirty())
				{
				$data[] = array("name" => "opening_balance_date" , "value" => $swift_statement->get_opening_balance_date() , "type" => "date");
				}
			if ($swift_statement->get_opening_balance_currency_code_is_dirty())
				{
				$data[] = array("name" => "opening_balance_currency_code" , "value" => $swift_statement->get_opening_balance_currency_code() , "type" => "varchar");
				}
			if ($swift_statement->get_opening_balance_amount_is_dirty())
				{
				$data[] = array("name" => "opening_balance_amount" , "value" => $swift_statement->get_opening_balance_amount() , "type" => "money");
				}
			if ($swift_statement->get_closing_balance_date_is_dirty())
				{
				$data[] = array("name" => "closing_balance_date" , "value" => $swift_statement->get_closing_balance_date() , "type" => "date");
				}
			if ($swift_statement->get_closing_balance_currency_code_is_dirty())
				{
				$data[] = array("name" => "closing_balance_currency_code" , "value" => $swift_statement->get_closing_balance_currency_code() , "type" => "varchar");
				}
			if ($swift_statement->get_closing_balance_amount_is_dirty())
				{
				$data[] = array("name" => "closing_balance_amount" , "value" => $swift_statement->get_closing_balance_amount() , "type" => "money");
				}
			if ($swift_statement->get_closing_available_balance_date_is_dirty())
				{
				$data[] = array("name" => "closing_available_balance_date" , "value" => $swift_statement->get_closing_available_balance_date() , "type" => "date");
				}
			if ($swift_statement->get_closing_available_balance_currency_code_is_dirty())
				{
				$data[] = array("name" => "closing_available_balance_currency_code" , "value" => $swift_statement->get_closing_available_balance_currency_code() , "type" => "varchar");
				}
			if ($swift_statement->get_closing_available_balance_amount_is_dirty())
				{
				$data[] = array("name" => "closing_available_balance_amount" , "value" => $swift_statement->get_closing_available_balance_amount() , "type" => "money");
				}
			if ($swift_statement->get_account_identification_code_is_dirty())
				{
				$data[] = array("name" => "account_identification_code" , "value" => $swift_statement->get_account_identification_code() , "type" => "varchar");
				}
			if ($swift_statement->get_retrieval_date_is_dirty())
				{
				$data[] = array("name" => "retrieval_date" , "value" => $swift_statement->get_retrieval_date() , "type" => "date");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('swift_statement',$swift_statement->get_id()))
				{
				$result = $swift_statement->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('swift_statement',$swift_statement->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('swift_statement',$swift_statement->get_id(),$application,$swift_statement->get_id_save_location(),false);
				$swift_statement->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $swift_statement->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('swift_statement',$swift_statement->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('swift_statement',$swift_statement->get_id(),$application,$swift_statement->get_id_save_location(),true);
				$swift_statement->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$swift_statement = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$swift_statement = cls_table_factory::get_common_swift_statement()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($swift_statement))
				{
					$swift_statement = cls_table_factory::create_instance('swift_statement');
				}
			$swift_statement->fill($data,false);
			return self::save_object($swift_statement,$db_manager,$application);
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
				case "swift_statement.transaction_reference_number":
					$counter++;
					break;
				case "transaction_reference_number":
					$counter++;
					break;
				case "swift_statement.statement_number":
					$counter++;
					break;
				case "statement_number":
					$counter++;
					break;
				case "swift_statement.related_reference":
					$counter++;
					break;
				case "related_reference":
					$counter++;
					break;
				case "swift_statement.opening_balance_date":
					$counter++;
					break;
				case "opening_balance_date":
					$counter++;
					break;
				case "swift_statement.opening_balance_currency_code":
					$counter++;
					break;
				case "opening_balance_currency_code":
					$counter++;
					break;
				case "swift_statement.opening_balance_amount":
					$counter++;
					break;
				case "opening_balance_amount":
					$counter++;
					break;
				case "swift_statement.closing_balance_date":
					$counter++;
					break;
				case "closing_balance_date":
					$counter++;
					break;
				case "swift_statement.closing_balance_currency_code":
					$counter++;
					break;
				case "closing_balance_currency_code":
					$counter++;
					break;
				case "swift_statement.closing_balance_amount":
					$counter++;
					break;
				case "closing_balance_amount":
					$counter++;
					break;
				case "swift_statement.closing_available_balance_date":
					$counter++;
					break;
				case "closing_available_balance_date":
					$counter++;
					break;
				case "swift_statement.closing_available_balance_currency_code":
					$counter++;
					break;
				case "closing_available_balance_currency_code":
					$counter++;
					break;
				case "swift_statement.closing_available_balance_amount":
					$counter++;
					break;
				case "closing_available_balance_amount":
					$counter++;
					break;
				case "swift_statement.account_identification_code":
					$counter++;
					break;
				case "account_identification_code":
					$counter++;
					break;
				case "swift_statement.retrieval_date":
					$counter++;
					break;
				case "retrieval_date":
					$counter++;
					break;
				case "swift_statement.id":
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
