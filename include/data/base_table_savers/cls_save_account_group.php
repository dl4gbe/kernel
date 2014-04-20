<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_account_group extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'account_group';
		}

	public static function save_object($account_group,$db_manager,$application)
		{
			if (is_null($account_group))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$account_group->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($account_group->get_profitandlostaccount_is_dirty())
				{
				$data[] = array("name" => "profitandlostaccount" , "value" => $account_group->get_profitandlostaccount() , "type" => "bool");
				}
			if ($account_group->get_balancesheetaccount_is_dirty())
				{
				$data[] = array("name" => "balancesheetaccount" , "value" => $account_group->get_balancesheetaccount() , "type" => "bool");
				}
			if ($account_group->get_accounttil_is_dirty())
				{
				$data[] = array("name" => "accounttil" , "value" => $account_group->get_accounttil() , "type" => "varchar");
				}
			if ($account_group->get_accountfrom_is_dirty())
				{
				$data[] = array("name" => "accountfrom" , "value" => $account_group->get_accountfrom() , "type" => "varchar");
				}
			if ($account_group->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $account_group->get_name() , "type" => "varchar");
				}
			if ($account_group->get_no_is_dirty())
				{
				$data[] = array("name" => "no" , "value" => $account_group->get_no() , "type" => "varchar");
				}
			if ($account_group->get_id_chart_of_account_is_dirty())
				{
				$data[] = array("name" => "id_chart_of_account" , "value" => $account_group->get_id_chart_of_account() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('account_group',$account_group->get_id()))
				{
				$result = $account_group->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('account_group',$account_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$account_group->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $account_group->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('account_group',$account_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$account_group->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$account_group = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$account_group = cls_table_factory::get_common_account_group()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($account_group))
				{
					$account_group = cls_table_factory::create_instance('account_group');
				}
			$account_group->fill($data,false);
			return self::save_object($account_group,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 8;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "account_group.profitandlostaccount":
					$counter++;
					break;
				case "profitandlostaccount":
					$counter++;
					break;
				case "account_group.balancesheetaccount":
					$counter++;
					break;
				case "balancesheetaccount":
					$counter++;
					break;
				case "account_group.accounttil":
					$counter++;
					break;
				case "accounttil":
					$counter++;
					break;
				case "account_group.accountfrom":
					$counter++;
					break;
				case "accountfrom":
					$counter++;
					break;
				case "account_group.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "account_group.no":
					$counter++;
					break;
				case "no":
					$counter++;
					break;
				case "account_group.id_chart_of_account":
					$counter++;
					break;
				case "id_chart_of_account":
					$counter++;
					break;
				case "account_group.id":
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
