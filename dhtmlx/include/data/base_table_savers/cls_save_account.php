<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_account extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'account';
		}

	public static function save_object($account,$db_manager,$application)
		{
			if (is_null($account))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$account->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($account->get_id_account_chart_of_account_is_dirty())
				{
				$data[] = array("name" => "id_account_chart_of_account" , "value" => $account->get_id_account_chart_of_account() , "type" => "uuid");
				}
			if ($account->get_accountno_is_dirty())
				{
				$data[] = array("name" => "accountno" , "value" => $account->get_accountno() , "type" => "varchar");
				}
			if ($account->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $account->get_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('account',$account->get_id()))
				{
				$result = $account->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('account',$account->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('account',$account->get_id(),$application,$account->get_id_save_location(),false);
				$account->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $account->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('account',$account->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('account',$account->get_id(),$application,$account->get_id_save_location(),true);
				$account->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$account = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$account = cls_table_factory::get_common_account()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($account))
				{
					$account = cls_table_factory::create_instance('account');
				}
			$account->fill($data,false);
			return self::save_object($account,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 4;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "account.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "account.id_account_chart_of_account":
					$counter++;
					break;
				case "id_account_chart_of_account":
					$counter++;
					break;
				case "account.accountno":
					$counter++;
					break;
				case "accountno":
					$counter++;
					break;
				case "account.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
