<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_access_group extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'access_group';
		}

	public static function save_object($access_group,$db_manager,$application)
		{
			if (is_null($access_group))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$access_group->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($access_group->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $access_group->get_name() , "type" => "varchar");
				}
			if ($access_group->get_only_access_on_own_data_is_dirty())
				{
				$data[] = array("name" => "only_access_on_own_data" , "value" => $access_group->get_only_access_on_own_data() , "type" => "bool");
				}
			if ($access_group->get_access_to_all_locations_is_dirty())
				{
				$data[] = array("name" => "access_to_all_locations" , "value" => $access_group->get_access_to_all_locations() , "type" => "bool");
				}
			if ($access_group->get_active_is_dirty())
				{
				$data[] = array("name" => "active" , "value" => $access_group->get_active() , "type" => "bool");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('access_group',$access_group->get_id()))
				{
				$result = $access_group->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('access_group',$access_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('access_group',$access_group->get_id(),$application,$access_group->get_id_save_location(),false);
				$access_group->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $access_group->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('access_group',$access_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('access_group',$access_group->get_id(),$application,$access_group->get_id_save_location(),true);
				$access_group->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$access_group = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$access_group = cls_table_factory::get_common_access_group()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($access_group))
				{
					$access_group = cls_table_factory::create_instance('access_group');
				}
			$access_group->fill($data,false);
			return self::save_object($access_group,$db_manager,$application);
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
				case "access_group.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "access_group.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "access_group.only_access_on_own_data":
					$counter++;
					break;
				case "only_access_on_own_data":
					$counter++;
					break;
				case "access_group.access_to_all_locations":
					$counter++;
					break;
				case "access_to_all_locations":
					$counter++;
					break;
				case "access_group.active":
					$counter++;
					break;
				case "active":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
