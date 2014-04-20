<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_fixed_asset_group_account extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'fixed_asset_group_account';
		}

	public static function save_object($fixed_asset_group_account,$db_manager,$application)
		{
			if (is_null($fixed_asset_group_account))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$fixed_asset_group_account->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($fixed_asset_group_account->get_id_account_depreciation_is_dirty())
				{
				$data[] = array("name" => "id_account_depreciation" , "value" => $fixed_asset_group_account->get_id_account_depreciation() , "type" => "uuid");
				}
			if ($fixed_asset_group_account->get_id_account_asset_is_dirty())
				{
				$data[] = array("name" => "id_account_asset" , "value" => $fixed_asset_group_account->get_id_account_asset() , "type" => "uuid");
				}
			if ($fixed_asset_group_account->get_id_chart_of_account_is_dirty())
				{
				$data[] = array("name" => "id_chart_of_account" , "value" => $fixed_asset_group_account->get_id_chart_of_account() , "type" => "uuid");
				}
			if ($fixed_asset_group_account->get_id_fixed_asset_group_is_dirty())
				{
				$data[] = array("name" => "id_fixed_asset_group" , "value" => $fixed_asset_group_account->get_id_fixed_asset_group() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('fixed_asset_group_account',$fixed_asset_group_account->get_id()))
				{
				$result = $fixed_asset_group_account->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('fixed_asset_group_account',$fixed_asset_group_account->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('fixed_asset_group_account',$fixed_asset_group_account->get_id(),$application,$fixed_asset_group_account->get_id_save_location(),false);
				$fixed_asset_group_account->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $fixed_asset_group_account->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('fixed_asset_group_account',$fixed_asset_group_account->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('fixed_asset_group_account',$fixed_asset_group_account->get_id(),$application,$fixed_asset_group_account->get_id_save_location(),true);
				$fixed_asset_group_account->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$fixed_asset_group_account = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$fixed_asset_group_account = cls_table_factory::get_common_fixed_asset_group_account()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($fixed_asset_group_account))
				{
					$fixed_asset_group_account = cls_table_factory::create_instance('fixed_asset_group_account');
				}
			$fixed_asset_group_account->fill($data,false);
			return self::save_object($fixed_asset_group_account,$db_manager,$application);
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
				case "fixed_asset_group_account.id_account_depreciation":
					$counter++;
					break;
				case "id_account_depreciation":
					$counter++;
					break;
				case "fixed_asset_group_account.id_account_asset":
					$counter++;
					break;
				case "id_account_asset":
					$counter++;
					break;
				case "fixed_asset_group_account.id_chart_of_account":
					$counter++;
					break;
				case "id_chart_of_account":
					$counter++;
					break;
				case "fixed_asset_group_account.id_fixed_asset_group":
					$counter++;
					break;
				case "id_fixed_asset_group":
					$counter++;
					break;
				case "fixed_asset_group_account.id":
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
