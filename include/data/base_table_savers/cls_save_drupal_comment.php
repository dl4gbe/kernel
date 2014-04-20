<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_comment extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_comment';
		}

	public static function save_object($drupal_comment,$db_manager,$application)
		{
			if (is_null($drupal_comment))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_comment->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_comment->get_language_is_dirty())
				{
				$data[] = array("name" => "language" , "value" => $drupal_comment->get_language() , "type" => "varchar");
				}
			if ($drupal_comment->get_homepage_is_dirty())
				{
				$data[] = array("name" => "homepage" , "value" => $drupal_comment->get_homepage() , "type" => "varchar");
				}
			if ($drupal_comment->get_mail_is_dirty())
				{
				$data[] = array("name" => "mail" , "value" => $drupal_comment->get_mail() , "type" => "varchar");
				}
			if ($drupal_comment->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $drupal_comment->get_name() , "type" => "varchar");
				}
			if ($drupal_comment->get_thread_is_dirty())
				{
				$data[] = array("name" => "thread" , "value" => $drupal_comment->get_thread() , "type" => "varchar");
				}
			if ($drupal_comment->get_status_is_dirty())
				{
				$data[] = array("name" => "status" , "value" => $drupal_comment->get_status() , "type" => "int4");
				}
			if ($drupal_comment->get_changed_is_dirty())
				{
				$data[] = array("name" => "changed" , "value" => $drupal_comment->get_changed() , "type" => "int4");
				}
			if ($drupal_comment->get_created_is_dirty())
				{
				$data[] = array("name" => "created" , "value" => $drupal_comment->get_created() , "type" => "int4");
				}
			if ($drupal_comment->get_hostname_is_dirty())
				{
				$data[] = array("name" => "hostname" , "value" => $drupal_comment->get_hostname() , "type" => "varchar");
				}
			if ($drupal_comment->get_subject_is_dirty())
				{
				$data[] = array("name" => "subject" , "value" => $drupal_comment->get_subject() , "type" => "varchar");
				}
			if ($drupal_comment->get_uid_is_dirty())
				{
				$data[] = array("name" => "uid" , "value" => $drupal_comment->get_uid() , "type" => "int4");
				}
			if ($drupal_comment->get_nid_is_dirty())
				{
				$data[] = array("name" => "nid" , "value" => $drupal_comment->get_nid() , "type" => "int4");
				}
			if ($drupal_comment->get_pid_is_dirty())
				{
				$data[] = array("name" => "pid" , "value" => $drupal_comment->get_pid() , "type" => "int4");
				}
			if ($drupal_comment->get_cid_is_dirty())
				{
				$data[] = array("name" => "cid" , "value" => $drupal_comment->get_cid() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_comment',$drupal_comment->get_id()))
				{
				$result = $drupal_comment->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_comment',$drupal_comment->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_comment',$drupal_comment->get_id(),$application,$drupal_comment->get_id_save_location(),false);
				$drupal_comment->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_comment->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_comment',$drupal_comment->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_comment',$drupal_comment->get_id(),$application,$drupal_comment->get_id_save_location(),true);
				$drupal_comment->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_comment = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_comment = cls_table_factory::get_common_drupal_comment()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_comment))
				{
					$drupal_comment = cls_table_factory::create_instance('drupal_comment');
				}
			$drupal_comment->fill($data,false);
			return self::save_object($drupal_comment,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 15;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "drupal_comment.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_comment.language":
					$counter++;
					break;
				case "language":
					$counter++;
					break;
				case "drupal_comment.homepage":
					$counter++;
					break;
				case "homepage":
					$counter++;
					break;
				case "drupal_comment.mail":
					$counter++;
					break;
				case "mail":
					$counter++;
					break;
				case "drupal_comment.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "drupal_comment.thread":
					$counter++;
					break;
				case "thread":
					$counter++;
					break;
				case "drupal_comment.status":
					$counter++;
					break;
				case "status":
					$counter++;
					break;
				case "drupal_comment.changed":
					$counter++;
					break;
				case "changed":
					$counter++;
					break;
				case "drupal_comment.created":
					$counter++;
					break;
				case "created":
					$counter++;
					break;
				case "drupal_comment.hostname":
					$counter++;
					break;
				case "hostname":
					$counter++;
					break;
				case "drupal_comment.subject":
					$counter++;
					break;
				case "subject":
					$counter++;
					break;
				case "drupal_comment.uid":
					$counter++;
					break;
				case "uid":
					$counter++;
					break;
				case "drupal_comment.nid":
					$counter++;
					break;
				case "nid":
					$counter++;
					break;
				case "drupal_comment.pid":
					$counter++;
					break;
				case "pid":
					$counter++;
					break;
				case "drupal_comment.cid":
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
