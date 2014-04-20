<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_geodb_type_names extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'geodb_type_names';
		}

	public static function save_object($geodb_type_names,$db_manager,$application)
		{
			if (is_null($geodb_type_names))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$geodb_type_names->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($geodb_type_names->get_type_id_is_dirty())
				{
				$data[] = array("name" => "type_id" , "value" => $geodb_type_names->get_type_id() , "type" => "int4");
				}
			if ($geodb_type_names->get_type_locale_is_dirty())
				{
				$data[] = array("name" => "type_locale" , "value" => $geodb_type_names->get_type_locale() , "type" => "varchar");
				}
			if ($geodb_type_names->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $geodb_type_names->get_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('geodb_type_names',$geodb_type_names->get_id()))
				{
				$result = $geodb_type_names->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('geodb_type_names',$geodb_type_names->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('geodb_type_names',$geodb_type_names->get_id(),$application,$geodb_type_names->get_id_save_location(),false);
				$geodb_type_names->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $geodb_type_names->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('geodb_type_names',$geodb_type_names->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('geodb_type_names',$geodb_type_names->get_id(),$application,$geodb_type_names->get_id_save_location(),true);
				$geodb_type_names->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$geodb_type_names = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$geodb_type_names = cls_table_factory::get_common_geodb_type_names()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($geodb_type_names))
				{
					$geodb_type_names = cls_table_factory::create_instance('geodb_type_names');
				}
			$geodb_type_names->fill($data,false);
			return self::save_object($geodb_type_names,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 3;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "geodb_type_names.type_id":
					$counter++;
					break;
				case "type_id":
					$counter++;
					break;
				case "geodb_type_names.type_locale":
					$counter++;
					break;
				case "type_locale":
					$counter++;
					break;
				case "geodb_type_names.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
