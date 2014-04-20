<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_account_bankaccount extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'account_bankaccount';
		}

	public static function save_object($account_bankaccount,$db_manager,$application)
		{
			if (is_null($account_bankaccount))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$account_bankaccount->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($account_bankaccount->get_id_account_is_dirty())
				{
				$data[] = array("name" => "id_account" , "value" => $account_bankaccount->get_id_account() , "type" => "uuid");
				}
			if ($account_bankaccount->get_id_bankaccount_is_dirty())
				{
				$data[] = array("name" => "id_bankaccount" , "value" => $account_bankaccount->get_id_bankaccount() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('account_bankaccount',$account_bankaccount->get_id()))
				{
				$result = $account_bankaccount->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('account_bankaccount',$account_bankaccount->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('account_bankaccount',$account_bankaccount->get_id(),$application,$account_bankaccount->get_id_save_location(),false);
				$account_bankaccount->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $account_bankaccount->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('account_bankaccount',$account_bankaccount->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('account_bankaccount',$account_bankaccount->get_id(),$application,$account_bankaccount->get_id_save_location(),true);
				$account_bankaccount->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$account_bankaccount = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$account_bankaccount = cls_table_factory::get_common_account_bankaccount()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($account_bankaccount))
				{
					$account_bankaccount = cls_table_factory::create_instance('account_bankaccount');
				}
			$account_bankaccount->fill($data,false);
			return self::save_object($account_bankaccount,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 3;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "account_bankaccount.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "account_bankaccount.id_account":
					$counter++;
					break;
				case "id_account":
					$counter++;
					break;
				case "account_bankaccount.id_bankaccount":
					$counter++;
					break;
				case "id_bankaccount":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
