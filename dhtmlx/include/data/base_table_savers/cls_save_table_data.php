<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_table_data extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'table_data';
		}

	public static function save_object($table_data,$db_manager,$application)
		{
			if (is_null($table_data))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$table_data->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($table_data->get_table_name_is_dirty())
				{
				$data[] = array("name" => "table_name" , "value" => $table_data->get_table_name() , "type" => "varchar");
				}
			if ($table_data->get_location_independant_is_dirty())
				{
				$data[] = array("name" => "location_independant" , "value" => $table_data->get_location_independant() , "type" => "bool");
				}
			if ($table_data->get_static_data_is_dirty())
				{
				$data[] = array("name" => "static_data" , "value" => $table_data->get_static_data() , "type" => "bool");
				}
			if ($table_data->get_use_orm_is_dirty())
				{
				$data[] = array("name" => "use_orm" , "value" => $table_data->get_use_orm() , "type" => "bool");
				}
			if ($table_data->get_create_history_is_dirty())
				{
				$data[] = array("name" => "create_history" , "value" => $table_data->get_create_history() , "type" => "bool");
				}
			if ($table_data->get_searchable_is_dirty())
				{
				$data[] = array("name" => "searchable" , "value" => $table_data->get_searchable() , "type" => "bool");
				}
			if ($table_data->get_id_table_search_template_is_dirty())
				{
				$data[] = array("name" => "id_table_search_template" , "value" => $table_data->get_id_table_search_template() , "type" => "uuid");
				}
			if ($table_data->get_config_table_is_dirty())
				{
				$data[] = array("name" => "config_table" , "value" => $table_data->get_config_table() , "type" => "bool");
				}
			if ($table_data->get_id_data_view_default_is_dirty())
				{
				$data[] = array("name" => "id_data_view_default" , "value" => $table_data->get_id_data_view_default() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('table_data',$table_data->get_id()))
				{
				$result = $table_data->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('table_data',$table_data->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('table_data',$table_data->get_id(),$application,$table_data->get_id_save_location(),false);
				$table_data->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $table_data->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('table_data',$table_data->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('table_data',$table_data->get_id(),$application,$table_data->get_id_save_location(),true);
				$table_data->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$table_data = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$table_data = cls_table_factory::get_common_table_data()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($table_data))
				{
					$table_data = cls_table_factory::create_instance('table_data');
				}
			$table_data->fill($data,false);
			return self::save_object($table_data,$db_manager,$application);
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
				case "table_data.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "table_data.table_name":
					$counter++;
					break;
				case "table_name":
					$counter++;
					break;
				case "table_data.location_independant":
					$counter++;
					break;
				case "location_independant":
					$counter++;
					break;
				case "table_data.static_data":
					$counter++;
					break;
				case "static_data":
					$counter++;
					break;
				case "table_data.use_orm":
					$counter++;
					break;
				case "use_orm":
					$counter++;
					break;
				case "table_data.create_history":
					$counter++;
					break;
				case "create_history":
					$counter++;
					break;
				case "table_data.searchable":
					$counter++;
					break;
				case "searchable":
					$counter++;
					break;
				case "table_data.id_table_search_template":
					$counter++;
					break;
				case "id_table_search_template":
					$counter++;
					break;
				case "table_data.config_table":
					$counter++;
					break;
				case "config_table":
					$counter++;
					break;
				case "table_data.id_data_view_default":
					$counter++;
					break;
				case "id_data_view_default":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
