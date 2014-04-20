<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_geodb_coordinates extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'geodb_coordinates';
		}

	public static function save_object($geodb_coordinates,$db_manager,$application)
		{
			if (is_null($geodb_coordinates))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$geodb_coordinates->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($geodb_coordinates->get_date_type_until_is_dirty())
				{
				$data[] = array("name" => "date_type_until" , "value" => $geodb_coordinates->get_date_type_until() , "type" => "int4");
				}
			if ($geodb_coordinates->get_valid_until_is_dirty())
				{
				$data[] = array("name" => "valid_until" , "value" => $geodb_coordinates->get_valid_until() , "type" => "date");
				}
			if ($geodb_coordinates->get_date_type_since_is_dirty())
				{
				$data[] = array("name" => "date_type_since" , "value" => $geodb_coordinates->get_date_type_since() , "type" => "int4");
				}
			if ($geodb_coordinates->get_valid_since_is_dirty())
				{
				$data[] = array("name" => "valid_since" , "value" => $geodb_coordinates->get_valid_since() , "type" => "date");
				}
			if ($geodb_coordinates->get_coord_subtype_is_dirty())
				{
				$data[] = array("name" => "coord_subtype" , "value" => $geodb_coordinates->get_coord_subtype() , "type" => "int4");
				}
			if ($geodb_coordinates->get_lon_is_dirty())
				{
				$data[] = array("name" => "lon" , "value" => $geodb_coordinates->get_lon() , "type" => "float8");
				}
			if ($geodb_coordinates->get_lat_is_dirty())
				{
				$data[] = array("name" => "lat" , "value" => $geodb_coordinates->get_lat() , "type" => "float8");
				}
			if ($geodb_coordinates->get_coord_type_is_dirty())
				{
				$data[] = array("name" => "coord_type" , "value" => $geodb_coordinates->get_coord_type() , "type" => "int4");
				}
			if ($geodb_coordinates->get_loc_id_is_dirty())
				{
				$data[] = array("name" => "loc_id" , "value" => $geodb_coordinates->get_loc_id() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('geodb_coordinates',$geodb_coordinates->get_id()))
				{
				$result = $geodb_coordinates->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('geodb_coordinates',$geodb_coordinates->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('geodb_coordinates',$geodb_coordinates->get_id(),$application,$geodb_coordinates->get_id_save_location(),false);
				$geodb_coordinates->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $geodb_coordinates->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('geodb_coordinates',$geodb_coordinates->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('geodb_coordinates',$geodb_coordinates->get_id(),$application,$geodb_coordinates->get_id_save_location(),true);
				$geodb_coordinates->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$geodb_coordinates = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$geodb_coordinates = cls_table_factory::get_common_geodb_coordinates()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($geodb_coordinates))
				{
					$geodb_coordinates = cls_table_factory::create_instance('geodb_coordinates');
				}
			$geodb_coordinates->fill($data,false);
			return self::save_object($geodb_coordinates,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 9;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "geodb_coordinates.date_type_until":
					$counter++;
					break;
				case "date_type_until":
					$counter++;
					break;
				case "geodb_coordinates.valid_until":
					$counter++;
					break;
				case "valid_until":
					$counter++;
					break;
				case "geodb_coordinates.date_type_since":
					$counter++;
					break;
				case "date_type_since":
					$counter++;
					break;
				case "geodb_coordinates.valid_since":
					$counter++;
					break;
				case "valid_since":
					$counter++;
					break;
				case "geodb_coordinates.coord_subtype":
					$counter++;
					break;
				case "coord_subtype":
					$counter++;
					break;
				case "geodb_coordinates.lon":
					$counter++;
					break;
				case "lon":
					$counter++;
					break;
				case "geodb_coordinates.lat":
					$counter++;
					break;
				case "lat":
					$counter++;
					break;
				case "geodb_coordinates.coord_type":
					$counter++;
					break;
				case "coord_type":
					$counter++;
					break;
				case "geodb_coordinates.loc_id":
					$counter++;
					break;
				case "loc_id":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
