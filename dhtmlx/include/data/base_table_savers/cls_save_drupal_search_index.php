<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_search_index extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_search_index';
		}

	public static function save_object($drupal_search_index,$db_manager,$application)
		{
			if (is_null($drupal_search_index))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_search_index->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_search_index->get_word_is_dirty())
				{
				$data[] = array("name" => "word" , "value" => $drupal_search_index->get_word() , "type" => "varchar");
				}
			if ($drupal_search_index->get_sid_is_dirty())
				{
				$data[] = array("name" => "sid" , "value" => $drupal_search_index->get_sid() , "type" => "int8");
				}
			if ($drupal_search_index->get_type_is_dirty())
				{
				$data[] = array("name" => "type" , "value" => $drupal_search_index->get_type() , "type" => "varchar");
				}
			if ($drupal_search_index->get_score_is_dirty())
				{
				$data[] = array("name" => "score" , "value" => $drupal_search_index->get_score() , "type" => "float4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_search_index',$drupal_search_index->get_id()))
				{
				$result = $drupal_search_index->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_search_index',$drupal_search_index->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_search_index',$drupal_search_index->get_id(),$application,$drupal_search_index->get_id_save_location(),false);
				$drupal_search_index->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_search_index->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_search_index',$drupal_search_index->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_search_index',$drupal_search_index->get_id(),$application,$drupal_search_index->get_id_save_location(),true);
				$drupal_search_index->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_search_index = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_search_index = cls_table_factory::get_common_drupal_search_index()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_search_index))
				{
					$drupal_search_index = cls_table_factory::create_instance('drupal_search_index');
				}
			$drupal_search_index->fill($data,false);
			return self::save_object($drupal_search_index,$db_manager,$application);
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
				case "drupal_search_index.word":
					$counter++;
					break;
				case "word":
					$counter++;
					break;
				case "drupal_search_index.sid":
					$counter++;
					break;
				case "sid":
					$counter++;
					break;
				case "drupal_search_index.type":
					$counter++;
					break;
				case "type":
					$counter++;
					break;
				case "drupal_search_index.score":
					$counter++;
					break;
				case "score":
					$counter++;
					break;
				case "drupal_search_index.id":
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
