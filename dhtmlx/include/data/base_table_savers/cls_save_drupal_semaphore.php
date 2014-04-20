<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_semaphore extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_semaphore';
		}

	public static function save_object($drupal_semaphore,$db_manager,$application)
		{
			if (is_null($drupal_semaphore))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_semaphore->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_semaphore->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $drupal_semaphore->get_name() , "type" => "varchar");
				}
			if ($drupal_semaphore->get_value_is_dirty())
				{
				$data[] = array("name" => "value" , "value" => $drupal_semaphore->get_value() , "type" => "varchar");
				}
			if ($drupal_semaphore->get_expire_is_dirty())
				{
				$data[] = array("name" => "expire" , "value" => $drupal_semaphore->get_expire() , "type" => "float8");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_semaphore',$drupal_semaphore->get_id()))
				{
				$result = $drupal_semaphore->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_semaphore',$drupal_semaphore->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_semaphore',$drupal_semaphore->get_id(),$application,$drupal_semaphore->get_id_save_location(),false);
				$drupal_semaphore->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_semaphore->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_semaphore',$drupal_semaphore->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_semaphore',$drupal_semaphore->get_id(),$application,$drupal_semaphore->get_id_save_location(),true);
				$drupal_semaphore->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_semaphore = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_semaphore = cls_table_factory::get_common_drupal_semaphore()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_semaphore))
				{
					$drupal_semaphore = cls_table_factory::create_instance('drupal_semaphore');
				}
			$drupal_semaphore->fill($data,false);
			return self::save_object($drupal_semaphore,$db_manager,$application);
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
				case "drupal_semaphore.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "drupal_semaphore.value":
					$counter++;
					break;
				case "value":
					$counter++;
					break;
				case "drupal_semaphore.expire":
					$counter++;
					break;
				case "expire":
					$counter++;
					break;
				case "drupal_semaphore.id":
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
