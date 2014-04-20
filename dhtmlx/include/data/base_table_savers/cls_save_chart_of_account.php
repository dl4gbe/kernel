<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_chart_of_account extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'chart_of_account';
		}

	public static function save_object($chart_of_account,$db_manager,$application)
		{
			if (is_null($chart_of_account))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$chart_of_account->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($chart_of_account->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $chart_of_account->get_name() , "type" => "varchar");
				}
			if ($chart_of_account->get_active_is_dirty())
				{
				$data[] = array("name" => "active" , "value" => $chart_of_account->get_active() , "type" => "bool");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('chart_of_account',$chart_of_account->get_id()))
				{
				$result = $chart_of_account->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('chart_of_account',$chart_of_account->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$chart_of_account->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $chart_of_account->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('chart_of_account',$chart_of_account->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$chart_of_account->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$chart_of_account = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$chart_of_account = cls_table_factory::get_common_chart_of_account()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($chart_of_account))
				{
					$chart_of_account = cls_table_factory::create_instance('chart_of_account');
				}
			$chart_of_account->fill($data,false);
			return self::save_object($chart_of_account,$db_manager,$application);
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
				case "chart_of_account.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "chart_of_account.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "chart_of_account.active":
					$counter++;
					break;
				case "active":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
