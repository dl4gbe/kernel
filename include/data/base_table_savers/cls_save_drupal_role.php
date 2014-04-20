<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_role extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_role';
		}

	public static function save_object($drupal_role,$db_manager,$application)
		{
			if (is_null($drupal_role))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_role->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_role->get_weight_is_dirty())
				{
				$data[] = array("name" => "weight" , "value" => $drupal_role->get_weight() , "type" => "int4");
				}
			if ($drupal_role->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $drupal_role->get_name() , "type" => "varchar");
				}
			if ($drupal_role->get_rid_is_dirty())
				{
				$data[] = array("name" => "rid" , "value" => $drupal_role->get_rid() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_role',$drupal_role->get_id()))
				{
				$result = $drupal_role->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_role',$drupal_role->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_role',$drupal_role->get_id(),$application,$drupal_role->get_id_save_location(),false);
				$drupal_role->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_role->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_role',$drupal_role->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_role',$drupal_role->get_id(),$application,$drupal_role->get_id_save_location(),true);
				$drupal_role->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_role = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_role = cls_table_factory::get_common_drupal_role()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_role))
				{
					$drupal_role = cls_table_factory::create_instance('drupal_role');
				}
			$drupal_role->fill($data,false);
			return self::save_object($drupal_role,$db_manager,$application);
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
				case "drupal_role.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_role.weight":
					$counter++;
					break;
				case "weight":
					$counter++;
					break;
				case "drupal_role.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "drupal_role.rid":
					$counter++;
					break;
				case "rid":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
