<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_geodb_changelog extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'geodb_changelog';
		}

	public static function save_object($geodb_changelog,$db_manager,$application)
		{
			if (is_null($geodb_changelog))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$geodb_changelog->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($geodb_changelog->get_datum_is_dirty())
				{
				$data[] = array("name" => "datum" , "value" => $geodb_changelog->get_datum() , "type" => "date");
				}
			if ($geodb_changelog->get_beschreibung_is_dirty())
				{
				$data[] = array("name" => "beschreibung" , "value" => $geodb_changelog->get_beschreibung() , "type" => "text");
				}
			if ($geodb_changelog->get_autor_is_dirty())
				{
				$data[] = array("name" => "autor" , "value" => $geodb_changelog->get_autor() , "type" => "varchar");
				}
			if ($geodb_changelog->get_version_is_dirty())
				{
				$data[] = array("name" => "version" , "value" => $geodb_changelog->get_version() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('geodb_changelog',$geodb_changelog->get_id()))
				{
				$result = $geodb_changelog->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('geodb_changelog',$geodb_changelog->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('geodb_changelog',$geodb_changelog->get_id(),$application,$geodb_changelog->get_id_save_location(),false);
				$geodb_changelog->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $geodb_changelog->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('geodb_changelog',$geodb_changelog->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('geodb_changelog',$geodb_changelog->get_id(),$application,$geodb_changelog->get_id_save_location(),true);
				$geodb_changelog->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$geodb_changelog = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$geodb_changelog = cls_table_factory::get_common_geodb_changelog()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($geodb_changelog))
				{
					$geodb_changelog = cls_table_factory::create_instance('geodb_changelog');
				}
			$geodb_changelog->fill($data,false);
			return self::save_object($geodb_changelog,$db_manager,$application);
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
				case "geodb_changelog.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "geodb_changelog.datum":
					$counter++;
					break;
				case "datum":
					$counter++;
					break;
				case "geodb_changelog.beschreibung":
					$counter++;
					break;
				case "beschreibung":
					$counter++;
					break;
				case "geodb_changelog.autor":
					$counter++;
					break;
				case "autor":
					$counter++;
					break;
				case "geodb_changelog.version":
					$counter++;
					break;
				case "version":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
