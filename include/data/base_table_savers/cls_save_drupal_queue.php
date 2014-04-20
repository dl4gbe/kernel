<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_queue extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_queue';
		}

	public static function save_object($drupal_queue,$db_manager,$application)
		{
			if (is_null($drupal_queue))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_queue->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_queue->get_created_is_dirty())
				{
				$data[] = array("name" => "created" , "value" => $drupal_queue->get_created() , "type" => "int4");
				}
			if ($drupal_queue->get_expire_is_dirty())
				{
				$data[] = array("name" => "expire" , "value" => $drupal_queue->get_expire() , "type" => "int4");
				}
			if ($drupal_queue->get_data_is_dirty())
				{
				$data[] = array("name" => "data" , "value" => $drupal_queue->get_data() , "type" => "bytea");
				}
			if ($drupal_queue->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $drupal_queue->get_name() , "type" => "varchar");
				}
			if ($drupal_queue->get_item_id_is_dirty())
				{
				$data[] = array("name" => "item_id" , "value" => $drupal_queue->get_item_id() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_queue',$drupal_queue->get_id()))
				{
				$result = $drupal_queue->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_queue',$drupal_queue->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_queue',$drupal_queue->get_id(),$application,$drupal_queue->get_id_save_location(),false);
				$drupal_queue->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_queue->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_queue',$drupal_queue->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_queue',$drupal_queue->get_id(),$application,$drupal_queue->get_id_save_location(),true);
				$drupal_queue->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_queue = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_queue = cls_table_factory::get_common_drupal_queue()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_queue))
				{
					$drupal_queue = cls_table_factory::create_instance('drupal_queue');
				}
			$drupal_queue->fill($data,false);
			return self::save_object($drupal_queue,$db_manager,$application);
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
				case "drupal_queue.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_queue.created":
					$counter++;
					break;
				case "created":
					$counter++;
					break;
				case "drupal_queue.expire":
					$counter++;
					break;
				case "expire":
					$counter++;
					break;
				case "drupal_queue.data":
					$counter++;
					break;
				case "data":
					$counter++;
					break;
				case "drupal_queue.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "drupal_queue.item_id":
					$counter++;
					break;
				case "item_id":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
