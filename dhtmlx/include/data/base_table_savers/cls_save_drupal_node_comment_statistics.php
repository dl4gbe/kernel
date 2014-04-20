<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_node_comment_statistics extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_node_comment_statistics';
		}

	public static function save_object($drupal_node_comment_statistics,$db_manager,$application)
		{
			if (is_null($drupal_node_comment_statistics))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_node_comment_statistics->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_node_comment_statistics->get_nid_is_dirty())
				{
				$data[] = array("name" => "nid" , "value" => $drupal_node_comment_statistics->get_nid() , "type" => "int8");
				}
			if ($drupal_node_comment_statistics->get_cid_is_dirty())
				{
				$data[] = array("name" => "cid" , "value" => $drupal_node_comment_statistics->get_cid() , "type" => "int4");
				}
			if ($drupal_node_comment_statistics->get_last_comment_timestamp_is_dirty())
				{
				$data[] = array("name" => "last_comment_timestamp" , "value" => $drupal_node_comment_statistics->get_last_comment_timestamp() , "type" => "int4");
				}
			if ($drupal_node_comment_statistics->get_last_comment_name_is_dirty())
				{
				$data[] = array("name" => "last_comment_name" , "value" => $drupal_node_comment_statistics->get_last_comment_name() , "type" => "varchar");
				}
			if ($drupal_node_comment_statistics->get_last_comment_uid_is_dirty())
				{
				$data[] = array("name" => "last_comment_uid" , "value" => $drupal_node_comment_statistics->get_last_comment_uid() , "type" => "int4");
				}
			if ($drupal_node_comment_statistics->get_comment_count_is_dirty())
				{
				$data[] = array("name" => "comment_count" , "value" => $drupal_node_comment_statistics->get_comment_count() , "type" => "int8");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_node_comment_statistics',$drupal_node_comment_statistics->get_id()))
				{
				$result = $drupal_node_comment_statistics->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_node_comment_statistics',$drupal_node_comment_statistics->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_node_comment_statistics',$drupal_node_comment_statistics->get_id(),$application,$drupal_node_comment_statistics->get_id_save_location(),false);
				$drupal_node_comment_statistics->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_node_comment_statistics->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_node_comment_statistics',$drupal_node_comment_statistics->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_node_comment_statistics',$drupal_node_comment_statistics->get_id(),$application,$drupal_node_comment_statistics->get_id_save_location(),true);
				$drupal_node_comment_statistics->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_node_comment_statistics = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_node_comment_statistics = cls_table_factory::get_common_drupal_node_comment_statistics()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_node_comment_statistics))
				{
					$drupal_node_comment_statistics = cls_table_factory::create_instance('drupal_node_comment_statistics');
				}
			$drupal_node_comment_statistics->fill($data,false);
			return self::save_object($drupal_node_comment_statistics,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 7;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "drupal_node_comment_statistics.nid":
					$counter++;
					break;
				case "nid":
					$counter++;
					break;
				case "drupal_node_comment_statistics.cid":
					$counter++;
					break;
				case "cid":
					$counter++;
					break;
				case "drupal_node_comment_statistics.last_comment_timestamp":
					$counter++;
					break;
				case "last_comment_timestamp":
					$counter++;
					break;
				case "drupal_node_comment_statistics.last_comment_name":
					$counter++;
					break;
				case "last_comment_name":
					$counter++;
					break;
				case "drupal_node_comment_statistics.last_comment_uid":
					$counter++;
					break;
				case "last_comment_uid":
					$counter++;
					break;
				case "drupal_node_comment_statistics.comment_count":
					$counter++;
					break;
				case "comment_count":
					$counter++;
					break;
				case "drupal_node_comment_statistics.id":
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
