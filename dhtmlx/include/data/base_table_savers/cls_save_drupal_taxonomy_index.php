<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_taxonomy_index extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_taxonomy_index';
		}

	public static function save_object($drupal_taxonomy_index,$db_manager,$application)
		{
			if (is_null($drupal_taxonomy_index))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_taxonomy_index->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_taxonomy_index->get_nid_is_dirty())
				{
				$data[] = array("name" => "nid" , "value" => $drupal_taxonomy_index->get_nid() , "type" => "int8");
				}
			if ($drupal_taxonomy_index->get_tid_is_dirty())
				{
				$data[] = array("name" => "tid" , "value" => $drupal_taxonomy_index->get_tid() , "type" => "int8");
				}
			if ($drupal_taxonomy_index->get_sticky_is_dirty())
				{
				$data[] = array("name" => "sticky" , "value" => $drupal_taxonomy_index->get_sticky() , "type" => "int2");
				}
			if ($drupal_taxonomy_index->get_created_is_dirty())
				{
				$data[] = array("name" => "created" , "value" => $drupal_taxonomy_index->get_created() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_taxonomy_index',$drupal_taxonomy_index->get_id()))
				{
				$result = $drupal_taxonomy_index->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_taxonomy_index',$drupal_taxonomy_index->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_taxonomy_index',$drupal_taxonomy_index->get_id(),$application,$drupal_taxonomy_index->get_id_save_location(),false);
				$drupal_taxonomy_index->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_taxonomy_index->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_taxonomy_index',$drupal_taxonomy_index->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_taxonomy_index',$drupal_taxonomy_index->get_id(),$application,$drupal_taxonomy_index->get_id_save_location(),true);
				$drupal_taxonomy_index->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_taxonomy_index = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_taxonomy_index = cls_table_factory::get_common_drupal_taxonomy_index()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_taxonomy_index))
				{
					$drupal_taxonomy_index = cls_table_factory::create_instance('drupal_taxonomy_index');
				}
			$drupal_taxonomy_index->fill($data,false);
			return self::save_object($drupal_taxonomy_index,$db_manager,$application);
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
				case "drupal_taxonomy_index.nid":
					$counter++;
					break;
				case "nid":
					$counter++;
					break;
				case "drupal_taxonomy_index.tid":
					$counter++;
					break;
				case "tid":
					$counter++;
					break;
				case "drupal_taxonomy_index.sticky":
					$counter++;
					break;
				case "sticky":
					$counter++;
					break;
				case "drupal_taxonomy_index.created":
					$counter++;
					break;
				case "created":
					$counter++;
					break;
				case "drupal_taxonomy_index.id":
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
