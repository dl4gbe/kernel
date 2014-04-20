<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_control_group extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'control_group';
		}

	public static function save_object($control_group,$db_manager,$application)
		{
			if (is_null($control_group))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$control_group->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($control_group->get_id_application_is_dirty())
				{
				$data[] = array("name" => "id_application" , "value" => $control_group->get_id_application() , "type" => "uuid");
				}
			if ($control_group->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $control_group->get_name() , "type" => "varchar");
				}
			if ($control_group->get_open_in_own_form_is_dirty())
				{
				$data[] = array("name" => "open_in_own_form" , "value" => $control_group->get_open_in_own_form() , "type" => "bool");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('control_group',$control_group->get_id()))
				{
				$result = $control_group->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('control_group',$control_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('control_group',$control_group->get_id(),$application,$control_group->get_id_save_location(),false);
				$control_group->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $control_group->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('control_group',$control_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('control_group',$control_group->get_id(),$application,$control_group->get_id_save_location(),true);
				$control_group->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$control_group = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$control_group = cls_table_factory::get_common_control_group()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($control_group))
				{
					$control_group = cls_table_factory::create_instance('control_group');
				}
			$control_group->fill($data,false);
			return self::save_object($control_group,$db_manager,$application);
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
				case "control_group.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "control_group.id_application":
					$counter++;
					break;
				case "id_application":
					$counter++;
					break;
				case "control_group.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "control_group.open_in_own_form":
					$counter++;
					break;
				case "open_in_own_form":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
