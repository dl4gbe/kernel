<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_flood extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_flood';
		}

	public static function save_object($drupal_flood,$db_manager,$application)
		{
			if (is_null($drupal_flood))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_flood->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_flood->get_expiration_is_dirty())
				{
				$data[] = array("name" => "expiration" , "value" => $drupal_flood->get_expiration() , "type" => "int4");
				}
			if ($drupal_flood->get_timestamp_is_dirty())
				{
				$data[] = array("name" => "timestamp" , "value" => $drupal_flood->get_timestamp() , "type" => "int4");
				}
			if ($drupal_flood->get_identifier_is_dirty())
				{
				$data[] = array("name" => "identifier" , "value" => $drupal_flood->get_identifier() , "type" => "varchar");
				}
			if ($drupal_flood->get_event_is_dirty())
				{
				$data[] = array("name" => "event" , "value" => $drupal_flood->get_event() , "type" => "varchar");
				}
			if ($drupal_flood->get_fid_is_dirty())
				{
				$data[] = array("name" => "fid" , "value" => $drupal_flood->get_fid() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_flood',$drupal_flood->get_id()))
				{
				$result = $drupal_flood->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_flood',$drupal_flood->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_flood',$drupal_flood->get_id(),$application,$drupal_flood->get_id_save_location(),false);
				$drupal_flood->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_flood->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_flood',$drupal_flood->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_flood',$drupal_flood->get_id(),$application,$drupal_flood->get_id_save_location(),true);
				$drupal_flood->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_flood = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_flood = cls_table_factory::get_common_drupal_flood()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_flood))
				{
					$drupal_flood = cls_table_factory::create_instance('drupal_flood');
				}
			$drupal_flood->fill($data,false);
			return self::save_object($drupal_flood,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 6;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "drupal_flood.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_flood.expiration":
					$counter++;
					break;
				case "expiration":
					$counter++;
					break;
				case "drupal_flood.timestamp":
					$counter++;
					break;
				case "timestamp":
					$counter++;
					break;
				case "drupal_flood.identifier":
					$counter++;
					break;
				case "identifier":
					$counter++;
					break;
				case "drupal_flood.event":
					$counter++;
					break;
				case "event":
					$counter++;
					break;
				case "drupal_flood.fid":
					$counter++;
					break;
				case "fid":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
