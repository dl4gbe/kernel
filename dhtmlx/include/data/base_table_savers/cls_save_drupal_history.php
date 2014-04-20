<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_history extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_history';
		}

	public static function save_object($drupal_history,$db_manager,$application)
		{
			if (is_null($drupal_history))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_history->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_history->get_uid_is_dirty())
				{
				$data[] = array("name" => "uid" , "value" => $drupal_history->get_uid() , "type" => "int4");
				}
			if ($drupal_history->get_nid_is_dirty())
				{
				$data[] = array("name" => "nid" , "value" => $drupal_history->get_nid() , "type" => "int4");
				}
			if ($drupal_history->get_timestamp_is_dirty())
				{
				$data[] = array("name" => "timestamp" , "value" => $drupal_history->get_timestamp() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_history',$drupal_history->get_id()))
				{
				$result = $drupal_history->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_history',$drupal_history->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_history',$drupal_history->get_id(),$application,$drupal_history->get_id_save_location(),false);
				$drupal_history->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_history->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_history',$drupal_history->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_history',$drupal_history->get_id(),$application,$drupal_history->get_id_save_location(),true);
				$drupal_history->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_history = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_history = cls_table_factory::get_common_drupal_history()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_history))
				{
					$drupal_history = cls_table_factory::create_instance('drupal_history');
				}
			$drupal_history->fill($data,false);
			return self::save_object($drupal_history,$db_manager,$application);
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
				case "drupal_history.uid":
					$counter++;
					break;
				case "uid":
					$counter++;
					break;
				case "drupal_history.nid":
					$counter++;
					break;
				case "nid":
					$counter++;
					break;
				case "drupal_history.timestamp":
					$counter++;
					break;
				case "timestamp":
					$counter++;
					break;
				case "drupal_history.id":
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