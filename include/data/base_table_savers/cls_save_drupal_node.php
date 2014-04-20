<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_node extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_node';
		}

	public static function save_object($drupal_node,$db_manager,$application)
		{
			if (is_null($drupal_node))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_node->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_node->get_translate_is_dirty())
				{
				$data[] = array("name" => "translate" , "value" => $drupal_node->get_translate() , "type" => "int4");
				}
			if ($drupal_node->get_tnid_is_dirty())
				{
				$data[] = array("name" => "tnid" , "value" => $drupal_node->get_tnid() , "type" => "int8");
				}
			if ($drupal_node->get_sticky_is_dirty())
				{
				$data[] = array("name" => "sticky" , "value" => $drupal_node->get_sticky() , "type" => "int4");
				}
			if ($drupal_node->get_promote_is_dirty())
				{
				$data[] = array("name" => "promote" , "value" => $drupal_node->get_promote() , "type" => "int4");
				}
			if ($drupal_node->get_comment_is_dirty())
				{
				$data[] = array("name" => "comment" , "value" => $drupal_node->get_comment() , "type" => "int4");
				}
			if ($drupal_node->get_changed_is_dirty())
				{
				$data[] = array("name" => "changed" , "value" => $drupal_node->get_changed() , "type" => "int4");
				}
			if ($drupal_node->get_created_is_dirty())
				{
				$data[] = array("name" => "created" , "value" => $drupal_node->get_created() , "type" => "int4");
				}
			if ($drupal_node->get_status_is_dirty())
				{
				$data[] = array("name" => "status" , "value" => $drupal_node->get_status() , "type" => "int4");
				}
			if ($drupal_node->get_uid_is_dirty())
				{
				$data[] = array("name" => "uid" , "value" => $drupal_node->get_uid() , "type" => "int4");
				}
			if ($drupal_node->get_title_is_dirty())
				{
				$data[] = array("name" => "title" , "value" => $drupal_node->get_title() , "type" => "varchar");
				}
			if ($drupal_node->get_language_is_dirty())
				{
				$data[] = array("name" => "language" , "value" => $drupal_node->get_language() , "type" => "varchar");
				}
			if ($drupal_node->get_type_is_dirty())
				{
				$data[] = array("name" => "type" , "value" => $drupal_node->get_type() , "type" => "varchar");
				}
			if ($drupal_node->get_vid_is_dirty())
				{
				$data[] = array("name" => "vid" , "value" => $drupal_node->get_vid() , "type" => "int8");
				}
			if ($drupal_node->get_nid_is_dirty())
				{
				$data[] = array("name" => "nid" , "value" => $drupal_node->get_nid() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_node',$drupal_node->get_id()))
				{
				$result = $drupal_node->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_node',$drupal_node->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_node',$drupal_node->get_id(),$application,$drupal_node->get_id_save_location(),false);
				$drupal_node->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_node->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_node',$drupal_node->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_node',$drupal_node->get_id(),$application,$drupal_node->get_id_save_location(),true);
				$drupal_node->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_node = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_node = cls_table_factory::get_common_drupal_node()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_node))
				{
					$drupal_node = cls_table_factory::create_instance('drupal_node');
				}
			$drupal_node->fill($data,false);
			return self::save_object($drupal_node,$db_manager,$application);
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
				case "drupal_node.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_node.translate":
					$counter++;
					break;
				case "translate":
					$counter++;
					break;
				case "drupal_node.tnid":
					$counter++;
					break;
				case "tnid":
					$counter++;
					break;
				case "drupal_node.sticky":
					$counter++;
					break;
				case "sticky":
					$counter++;
					break;
				case "drupal_node.promote":
					$counter++;
					break;
				case "promote":
					$counter++;
					break;
				case "drupal_node.comment":
					$counter++;
					break;
				case "comment":
					$counter++;
					break;
				case "drupal_node.changed":
					$counter++;
					break;
				case "changed":
					$counter++;
					break;
				case "drupal_node.created":
					$counter++;
					break;
				case "created":
					$counter++;
					break;
				case "drupal_node.status":
					$counter++;
					break;
				case "status":
					$counter++;
					break;
				case "drupal_node.uid":
					$counter++;
					break;
				case "uid":
					$counter++;
					break;
				case "drupal_node.title":
					$counter++;
					break;
				case "title":
					$counter++;
					break;
				case "drupal_node.language":
					$counter++;
					break;
				case "language":
					$counter++;
					break;
				case "drupal_node.type":
					$counter++;
					break;
				case "type":
					$counter++;
					break;
				case "drupal_node.vid":
					$counter++;
					break;
				case "vid":
					$counter++;
					break;
				case "drupal_node.nid":
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
