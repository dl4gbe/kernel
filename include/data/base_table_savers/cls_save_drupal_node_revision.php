<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_node_revision extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_node_revision';
		}

	public static function save_object($drupal_node_revision,$db_manager,$application)
		{
			if (is_null($drupal_node_revision))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_node_revision->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_node_revision->get_sticky_is_dirty())
				{
				$data[] = array("name" => "sticky" , "value" => $drupal_node_revision->get_sticky() , "type" => "int4");
				}
			if ($drupal_node_revision->get_promote_is_dirty())
				{
				$data[] = array("name" => "promote" , "value" => $drupal_node_revision->get_promote() , "type" => "int4");
				}
			if ($drupal_node_revision->get_comment_is_dirty())
				{
				$data[] = array("name" => "comment" , "value" => $drupal_node_revision->get_comment() , "type" => "int4");
				}
			if ($drupal_node_revision->get_status_is_dirty())
				{
				$data[] = array("name" => "status" , "value" => $drupal_node_revision->get_status() , "type" => "int4");
				}
			if ($drupal_node_revision->get_timestamp_is_dirty())
				{
				$data[] = array("name" => "timestamp" , "value" => $drupal_node_revision->get_timestamp() , "type" => "int4");
				}
			if ($drupal_node_revision->get_log_is_dirty())
				{
				$data[] = array("name" => "log" , "value" => $drupal_node_revision->get_log() , "type" => "text");
				}
			if ($drupal_node_revision->get_title_is_dirty())
				{
				$data[] = array("name" => "title" , "value" => $drupal_node_revision->get_title() , "type" => "varchar");
				}
			if ($drupal_node_revision->get_uid_is_dirty())
				{
				$data[] = array("name" => "uid" , "value" => $drupal_node_revision->get_uid() , "type" => "int4");
				}
			if ($drupal_node_revision->get_vid_is_dirty())
				{
				$data[] = array("name" => "vid" , "value" => $drupal_node_revision->get_vid() , "type" => "int4");
				}
			if ($drupal_node_revision->get_nid_is_dirty())
				{
				$data[] = array("name" => "nid" , "value" => $drupal_node_revision->get_nid() , "type" => "int8");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_node_revision',$drupal_node_revision->get_id()))
				{
				$result = $drupal_node_revision->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_node_revision',$drupal_node_revision->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_node_revision',$drupal_node_revision->get_id(),$application,$drupal_node_revision->get_id_save_location(),false);
				$drupal_node_revision->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_node_revision->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_node_revision',$drupal_node_revision->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_node_revision',$drupal_node_revision->get_id(),$application,$drupal_node_revision->get_id_save_location(),true);
				$drupal_node_revision->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_node_revision = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_node_revision = cls_table_factory::get_common_drupal_node_revision()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_node_revision))
				{
					$drupal_node_revision = cls_table_factory::create_instance('drupal_node_revision');
				}
			$drupal_node_revision->fill($data,false);
			return self::save_object($drupal_node_revision,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 11;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "drupal_node_revision.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_node_revision.sticky":
					$counter++;
					break;
				case "sticky":
					$counter++;
					break;
				case "drupal_node_revision.promote":
					$counter++;
					break;
				case "promote":
					$counter++;
					break;
				case "drupal_node_revision.comment":
					$counter++;
					break;
				case "comment":
					$counter++;
					break;
				case "drupal_node_revision.status":
					$counter++;
					break;
				case "status":
					$counter++;
					break;
				case "drupal_node_revision.timestamp":
					$counter++;
					break;
				case "timestamp":
					$counter++;
					break;
				case "drupal_node_revision.log":
					$counter++;
					break;
				case "log":
					$counter++;
					break;
				case "drupal_node_revision.title":
					$counter++;
					break;
				case "title":
					$counter++;
					break;
				case "drupal_node_revision.uid":
					$counter++;
					break;
				case "uid":
					$counter++;
					break;
				case "drupal_node_revision.vid":
					$counter++;
					break;
				case "vid":
					$counter++;
					break;
				case "drupal_node_revision.nid":
					$counter++;
					break;
				case "nid":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
