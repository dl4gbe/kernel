<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_geodb_locations extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'geodb_locations';
		}

	public static function save_object($geodb_locations,$db_manager,$application)
		{
			if (is_null($geodb_locations))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$geodb_locations->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($geodb_locations->get_loc_id_is_dirty())
				{
				$data[] = array("name" => "loc_id" , "value" => $geodb_locations->get_loc_id() , "type" => "numeric");
				}
			if ($geodb_locations->get_loc_type_is_dirty())
				{
				$data[] = array("name" => "loc_type" , "value" => $geodb_locations->get_loc_type() , "type" => "numeric");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('geodb_locations',$geodb_locations->get_id()))
				{
				$result = $geodb_locations->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('geodb_locations',$geodb_locations->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('geodb_locations',$geodb_locations->get_id(),$application,$geodb_locations->get_id_save_location(),false);
				$geodb_locations->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $geodb_locations->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('geodb_locations',$geodb_locations->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('geodb_locations',$geodb_locations->get_id(),$application,$geodb_locations->get_id_save_location(),true);
				$geodb_locations->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$geodb_locations = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$geodb_locations = cls_table_factory::get_common_geodb_locations()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($geodb_locations))
				{
					$geodb_locations = cls_table_factory::create_instance('geodb_locations');
				}
			$geodb_locations->fill($data,false);
			return self::save_object($geodb_locations,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 2;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "geodb_locations.loc_id":
					$counter++;
					break;
				case "loc_id":
					$counter++;
					break;
				case "geodb_locations.loc_type":
					$counter++;
					break;
				case "loc_type":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
