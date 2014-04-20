<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_block_role extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_block_role';
		}

	public static function save_object($drupal_block_role,$db_manager,$application)
		{
			if (is_null($drupal_block_role))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_block_role->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_block_role->get_module_is_dirty())
				{
				$data[] = array("name" => "module" , "value" => $drupal_block_role->get_module() , "type" => "varchar");
				}
			if ($drupal_block_role->get_delta_is_dirty())
				{
				$data[] = array("name" => "delta" , "value" => $drupal_block_role->get_delta() , "type" => "varchar");
				}
			if ($drupal_block_role->get_rid_is_dirty())
				{
				$data[] = array("name" => "rid" , "value" => $drupal_block_role->get_rid() , "type" => "int8");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_block_role',$drupal_block_role->get_id()))
				{
				$result = $drupal_block_role->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_block_role',$drupal_block_role->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_block_role',$drupal_block_role->get_id(),$application,$drupal_block_role->get_id_save_location(),false);
				$drupal_block_role->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_block_role->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_block_role',$drupal_block_role->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_block_role',$drupal_block_role->get_id(),$application,$drupal_block_role->get_id_save_location(),true);
				$drupal_block_role->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_block_role = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_block_role = cls_table_factory::get_common_drupal_block_role()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_block_role))
				{
					$drupal_block_role = cls_table_factory::create_instance('drupal_block_role');
				}
			$drupal_block_role->fill($data,false);
			return self::save_object($drupal_block_role,$db_manager,$application);
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
				case "drupal_block_role.module":
					$counter++;
					break;
				case "module":
					$counter++;
					break;
				case "drupal_block_role.delta":
					$counter++;
					break;
				case "delta":
					$counter++;
					break;
				case "drupal_block_role.rid":
					$counter++;
					break;
				case "rid":
					$counter++;
					break;
				case "drupal_block_role.id":
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
