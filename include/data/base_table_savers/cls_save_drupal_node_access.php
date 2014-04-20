<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_node_access extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_node_access';
		}

	public static function save_object($drupal_node_access,$db_manager,$application)
		{
			if (is_null($drupal_node_access))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_node_access->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_node_access->get_grant_delete_is_dirty())
				{
				$data[] = array("name" => "grant_delete" , "value" => $drupal_node_access->get_grant_delete() , "type" => "int4");
				}
			if ($drupal_node_access->get_grant_update_is_dirty())
				{
				$data[] = array("name" => "grant_update" , "value" => $drupal_node_access->get_grant_update() , "type" => "int4");
				}
			if ($drupal_node_access->get_grant_view_is_dirty())
				{
				$data[] = array("name" => "grant_view" , "value" => $drupal_node_access->get_grant_view() , "type" => "int4");
				}
			if ($drupal_node_access->get_realm_is_dirty())
				{
				$data[] = array("name" => "realm" , "value" => $drupal_node_access->get_realm() , "type" => "varchar");
				}
			if ($drupal_node_access->get_gid_is_dirty())
				{
				$data[] = array("name" => "gid" , "value" => $drupal_node_access->get_gid() , "type" => "int8");
				}
			if ($drupal_node_access->get_nid_is_dirty())
				{
				$data[] = array("name" => "nid" , "value" => $drupal_node_access->get_nid() , "type" => "int8");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_node_access',$drupal_node_access->get_id()))
				{
				$result = $drupal_node_access->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_node_access',$drupal_node_access->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_node_access',$drupal_node_access->get_id(),$application,$drupal_node_access->get_id_save_location(),false);
				$drupal_node_access->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_node_access->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_node_access',$drupal_node_access->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_node_access',$drupal_node_access->get_id(),$application,$drupal_node_access->get_id_save_location(),true);
				$drupal_node_access->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_node_access = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_node_access = cls_table_factory::get_common_drupal_node_access()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_node_access))
				{
					$drupal_node_access = cls_table_factory::create_instance('drupal_node_access');
				}
			$drupal_node_access->fill($data,false);
			return self::save_object($drupal_node_access,$db_manager,$application);
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
				case "drupal_node_access.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_node_access.grant_delete":
					$counter++;
					break;
				case "grant_delete":
					$counter++;
					break;
				case "drupal_node_access.grant_update":
					$counter++;
					break;
				case "grant_update":
					$counter++;
					break;
				case "drupal_node_access.grant_view":
					$counter++;
					break;
				case "grant_view":
					$counter++;
					break;
				case "drupal_node_access.realm":
					$counter++;
					break;
				case "realm":
					$counter++;
					break;
				case "drupal_node_access.gid":
					$counter++;
					break;
				case "gid":
					$counter++;
					break;
				case "drupal_node_access.nid":
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
