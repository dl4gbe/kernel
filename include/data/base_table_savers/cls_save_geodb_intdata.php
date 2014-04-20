<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_geodb_intdata extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'geodb_intdata';
		}

	public static function save_object($geodb_intdata,$db_manager,$application)
		{
			if (is_null($geodb_intdata))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$geodb_intdata->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($geodb_intdata->get_date_type_until_is_dirty())
				{
				$data[] = array("name" => "date_type_until" , "value" => $geodb_intdata->get_date_type_until() , "type" => "int4");
				}
			if ($geodb_intdata->get_valid_until_is_dirty())
				{
				$data[] = array("name" => "valid_until" , "value" => $geodb_intdata->get_valid_until() , "type" => "date");
				}
			if ($geodb_intdata->get_date_type_since_is_dirty())
				{
				$data[] = array("name" => "date_type_since" , "value" => $geodb_intdata->get_date_type_since() , "type" => "int4");
				}
			if ($geodb_intdata->get_valid_since_is_dirty())
				{
				$data[] = array("name" => "valid_since" , "value" => $geodb_intdata->get_valid_since() , "type" => "date");
				}
			if ($geodb_intdata->get_int_val_is_dirty())
				{
				$data[] = array("name" => "int_val" , "value" => $geodb_intdata->get_int_val() , "type" => "int8");
				}
			if ($geodb_intdata->get_int_type_is_dirty())
				{
				$data[] = array("name" => "int_type" , "value" => $geodb_intdata->get_int_type() , "type" => "int4");
				}
			if ($geodb_intdata->get_loc_id_is_dirty())
				{
				$data[] = array("name" => "loc_id" , "value" => $geodb_intdata->get_loc_id() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('geodb_intdata',$geodb_intdata->get_id()))
				{
				$result = $geodb_intdata->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('geodb_intdata',$geodb_intdata->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('geodb_intdata',$geodb_intdata->get_id(),$application,$geodb_intdata->get_id_save_location(),false);
				$geodb_intdata->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $geodb_intdata->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('geodb_intdata',$geodb_intdata->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('geodb_intdata',$geodb_intdata->get_id(),$application,$geodb_intdata->get_id_save_location(),true);
				$geodb_intdata->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$geodb_intdata = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$geodb_intdata = cls_table_factory::get_common_geodb_intdata()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($geodb_intdata))
				{
					$geodb_intdata = cls_table_factory::create_instance('geodb_intdata');
				}
			$geodb_intdata->fill($data,false);
			return self::save_object($geodb_intdata,$db_manager,$application);
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
				case "geodb_intdata.date_type_until":
					$counter++;
					break;
				case "date_type_until":
					$counter++;
					break;
				case "geodb_intdata.valid_until":
					$counter++;
					break;
				case "valid_until":
					$counter++;
					break;
				case "geodb_intdata.date_type_since":
					$counter++;
					break;
				case "date_type_since":
					$counter++;
					break;
				case "geodb_intdata.valid_since":
					$counter++;
					break;
				case "valid_since":
					$counter++;
					break;
				case "geodb_intdata.int_val":
					$counter++;
					break;
				case "int_val":
					$counter++;
					break;
				case "geodb_intdata.int_type":
					$counter++;
					break;
				case "int_type":
					$counter++;
					break;
				case "geodb_intdata.loc_id":
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
