<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_control extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'control';
		}

	public static function save_object($control,$db_manager,$application)
		{
			if (is_null($control))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$control->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($control->get_id_ribbonbar_is_dirty())
				{
				$data[] = array("name" => "id_ribbonbar" , "value" => $control->get_id_ribbonbar() , "type" => "uuid");
				}
			if ($control->get_description_is_dirty())
				{
				$data[] = array("name" => "description" , "value" => $control->get_description() , "type" => "text");
				}
			if ($control->get_path_is_dirty())
				{
				$data[] = array("name" => "path" , "value" => $control->get_path() , "type" => "varchar");
				}
			if ($control->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $control->get_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('control',$control->get_id()))
				{
				$result = $control->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('control',$control->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('control',$control->get_id(),$application,$control->get_id_save_location(),false);
				$control->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $control->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('control',$control->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('control',$control->get_id(),$application,$control->get_id_save_location(),true);
				$control->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$control = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$control = cls_table_factory::get_common_control()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($control))
				{
					$control = cls_table_factory::create_instance('control');
				}
			$control->fill($data,false);
			return self::save_object($control,$db_manager,$application);
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
				case "control.id_ribbonbar":
					$counter++;
					break;
				case "id_ribbonbar":
					$counter++;
					break;
				case "control.description":
					$counter++;
					break;
				case "description":
					$counter++;
					break;
				case "control.path":
					$counter++;
					break;
				case "path":
					$counter++;
					break;
				case "control.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "control.id":
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
