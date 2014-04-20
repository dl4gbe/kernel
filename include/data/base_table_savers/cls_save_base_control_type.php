<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_base_control_type extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'base_control_type';
		}

	public static function save_object($base_control_type,$db_manager,$application)
		{
			if (is_null($base_control_type))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$base_control_type->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($base_control_type->get_creator_path_is_dirty())
				{
				$data[] = array("name" => "creator_path" , "value" => $base_control_type->get_creator_path() , "type" => "varchar");
				}
			if ($base_control_type->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $base_control_type->get_name() , "type" => "varchar");
				}
			if ($base_control_type->get_type_is_dirty())
				{
				$data[] = array("name" => "type" , "value" => $base_control_type->get_type() , "type" => "bpchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('base_control_type',$base_control_type->get_id()))
				{
				$result = $base_control_type->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('base_control_type',$base_control_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('base_control_type',$base_control_type->get_id(),$application,$base_control_type->get_id_save_location(),false);
				$base_control_type->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $base_control_type->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('base_control_type',$base_control_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('base_control_type',$base_control_type->get_id(),$application,$base_control_type->get_id_save_location(),true);
				$base_control_type->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$base_control_type = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$base_control_type = cls_table_factory::get_common_base_control_type()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($base_control_type))
				{
					$base_control_type = cls_table_factory::create_instance('base_control_type');
				}
			$base_control_type->fill($data,false);
			return self::save_object($base_control_type,$db_manager,$application);
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
				case "base_control_type.creator_path":
					$counter++;
					break;
				case "creator_path":
					$counter++;
					break;
				case "base_control_type.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "base_control_type.type":
					$counter++;
					break;
				case "type":
					$counter++;
					break;
				case "base_control_type.id":
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
