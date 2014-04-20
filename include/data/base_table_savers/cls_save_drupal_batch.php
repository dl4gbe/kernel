<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_batch extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_batch';
		}

	public static function save_object($drupal_batch,$db_manager,$application)
		{
			if (is_null($drupal_batch))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_batch->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_batch->get_batch_is_dirty())
				{
				$data[] = array("name" => "batch" , "value" => $drupal_batch->get_batch() , "type" => "bytea");
				}
			if ($drupal_batch->get_timestamp_is_dirty())
				{
				$data[] = array("name" => "timestamp" , "value" => $drupal_batch->get_timestamp() , "type" => "int4");
				}
			if ($drupal_batch->get_token_is_dirty())
				{
				$data[] = array("name" => "token" , "value" => $drupal_batch->get_token() , "type" => "varchar");
				}
			if ($drupal_batch->get_bid_is_dirty())
				{
				$data[] = array("name" => "bid" , "value" => $drupal_batch->get_bid() , "type" => "int8");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_batch',$drupal_batch->get_id()))
				{
				$result = $drupal_batch->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_batch',$drupal_batch->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_batch',$drupal_batch->get_id(),$application,$drupal_batch->get_id_save_location(),false);
				$drupal_batch->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_batch->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_batch',$drupal_batch->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_batch',$drupal_batch->get_id(),$application,$drupal_batch->get_id_save_location(),true);
				$drupal_batch->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_batch = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_batch = cls_table_factory::get_common_drupal_batch()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_batch))
				{
					$drupal_batch = cls_table_factory::create_instance('drupal_batch');
				}
			$drupal_batch->fill($data,false);
			return self::save_object($drupal_batch,$db_manager,$application);
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
				case "drupal_batch.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_batch.batch":
					$counter++;
					break;
				case "batch":
					$counter++;
					break;
				case "drupal_batch.timestamp":
					$counter++;
					break;
				case "timestamp":
					$counter++;
					break;
				case "drupal_batch.token":
					$counter++;
					break;
				case "token":
					$counter++;
					break;
				case "drupal_batch.bid":
					$counter++;
					break;
				case "bid":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
