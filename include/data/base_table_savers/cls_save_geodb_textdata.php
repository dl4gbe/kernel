<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_geodb_textdata extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'geodb_textdata';
		}

	public static function save_object($geodb_textdata,$db_manager,$application)
		{
			if (is_null($geodb_textdata))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$geodb_textdata->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($geodb_textdata->get_date_type_until_is_dirty())
				{
				$data[] = array("name" => "date_type_until" , "value" => $geodb_textdata->get_date_type_until() , "type" => "int4");
				}
			if ($geodb_textdata->get_valid_until_is_dirty())
				{
				$data[] = array("name" => "valid_until" , "value" => $geodb_textdata->get_valid_until() , "type" => "date");
				}
			if ($geodb_textdata->get_date_type_since_is_dirty())
				{
				$data[] = array("name" => "date_type_since" , "value" => $geodb_textdata->get_date_type_since() , "type" => "int4");
				}
			if ($geodb_textdata->get_valid_since_is_dirty())
				{
				$data[] = array("name" => "valid_since" , "value" => $geodb_textdata->get_valid_since() , "type" => "date");
				}
			if ($geodb_textdata->get_is_default_name_is_dirty())
				{
				$data[] = array("name" => "is_default_name" , "value" => $geodb_textdata->get_is_default_name() , "type" => "int2");
				}
			if ($geodb_textdata->get_is_native_lang_is_dirty())
				{
				$data[] = array("name" => "is_native_lang" , "value" => $geodb_textdata->get_is_native_lang() , "type" => "int2");
				}
			if ($geodb_textdata->get_text_locale_is_dirty())
				{
				$data[] = array("name" => "text_locale" , "value" => $geodb_textdata->get_text_locale() , "type" => "varchar");
				}
			if ($geodb_textdata->get_text_val_is_dirty())
				{
				$data[] = array("name" => "text_val" , "value" => $geodb_textdata->get_text_val() , "type" => "varchar");
				}
			if ($geodb_textdata->get_text_type_is_dirty())
				{
				$data[] = array("name" => "text_type" , "value" => $geodb_textdata->get_text_type() , "type" => "int4");
				}
			if ($geodb_textdata->get_loc_id_is_dirty())
				{
				$data[] = array("name" => "loc_id" , "value" => $geodb_textdata->get_loc_id() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('geodb_textdata',$geodb_textdata->get_id()))
				{
				$result = $geodb_textdata->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('geodb_textdata',$geodb_textdata->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('geodb_textdata',$geodb_textdata->get_id(),$application,$geodb_textdata->get_id_save_location(),false);
				$geodb_textdata->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $geodb_textdata->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('geodb_textdata',$geodb_textdata->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('geodb_textdata',$geodb_textdata->get_id(),$application,$geodb_textdata->get_id_save_location(),true);
				$geodb_textdata->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$geodb_textdata = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$geodb_textdata = cls_table_factory::get_common_geodb_textdata()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($geodb_textdata))
				{
					$geodb_textdata = cls_table_factory::create_instance('geodb_textdata');
				}
			$geodb_textdata->fill($data,false);
			return self::save_object($geodb_textdata,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 10;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "geodb_textdata.date_type_until":
					$counter++;
					break;
				case "date_type_until":
					$counter++;
					break;
				case "geodb_textdata.valid_until":
					$counter++;
					break;
				case "valid_until":
					$counter++;
					break;
				case "geodb_textdata.date_type_since":
					$counter++;
					break;
				case "date_type_since":
					$counter++;
					break;
				case "geodb_textdata.valid_since":
					$counter++;
					break;
				case "valid_since":
					$counter++;
					break;
				case "geodb_textdata.is_default_name":
					$counter++;
					break;
				case "is_default_name":
					$counter++;
					break;
				case "geodb_textdata.is_native_lang":
					$counter++;
					break;
				case "is_native_lang":
					$counter++;
					break;
				case "geodb_textdata.text_locale":
					$counter++;
					break;
				case "text_locale":
					$counter++;
					break;
				case "geodb_textdata.text_val":
					$counter++;
					break;
				case "text_val":
					$counter++;
					break;
				case "geodb_textdata.text_type":
					$counter++;
					break;
				case "text_type":
					$counter++;
					break;
				case "geodb_textdata.loc_id":
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
