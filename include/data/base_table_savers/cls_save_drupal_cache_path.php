<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_cache_path extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_cache_path';
		}

	public static function save_object($drupal_cache_path,$db_manager,$application)
		{
			if (is_null($drupal_cache_path))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_cache_path->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_cache_path->get_serialized_is_dirty())
				{
				$data[] = array("name" => "serialized" , "value" => $drupal_cache_path->get_serialized() , "type" => "int2");
				}
			if ($drupal_cache_path->get_created_is_dirty())
				{
				$data[] = array("name" => "created" , "value" => $drupal_cache_path->get_created() , "type" => "int4");
				}
			if ($drupal_cache_path->get_expire_is_dirty())
				{
				$data[] = array("name" => "expire" , "value" => $drupal_cache_path->get_expire() , "type" => "int4");
				}
			if ($drupal_cache_path->get_data_is_dirty())
				{
				$data[] = array("name" => "data" , "value" => $drupal_cache_path->get_data() , "type" => "bytea");
				}
			if ($drupal_cache_path->get_cid_is_dirty())
				{
				$data[] = array("name" => "cid" , "value" => $drupal_cache_path->get_cid() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_cache_path',$drupal_cache_path->get_id()))
				{
				$result = $drupal_cache_path->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_cache_path',$drupal_cache_path->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_cache_path',$drupal_cache_path->get_id(),$application,$drupal_cache_path->get_id_save_location(),false);
				$drupal_cache_path->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_cache_path->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_cache_path',$drupal_cache_path->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_cache_path',$drupal_cache_path->get_id(),$application,$drupal_cache_path->get_id_save_location(),true);
				$drupal_cache_path->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_cache_path = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_cache_path = cls_table_factory::get_common_drupal_cache_path()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_cache_path))
				{
					$drupal_cache_path = cls_table_factory::create_instance('drupal_cache_path');
				}
			$drupal_cache_path->fill($data,false);
			return self::save_object($drupal_cache_path,$db_manager,$application);
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
				case "drupal_cache_path.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_cache_path.serialized":
					$counter++;
					break;
				case "serialized":
					$counter++;
					break;
				case "drupal_cache_path.created":
					$counter++;
					break;
				case "created":
					$counter++;
					break;
				case "drupal_cache_path.expire":
					$counter++;
					break;
				case "expire":
					$counter++;
					break;
				case "drupal_cache_path.data":
					$counter++;
					break;
				case "data":
					$counter++;
					break;
				case "drupal_cache_path.cid":
					$counter++;
					break;
				case "cid":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
