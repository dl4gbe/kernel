<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_table_search_template extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'table_search_template';
		}

	public static function save_object($table_search_template,$db_manager,$application)
		{
			if (is_null($table_search_template))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$table_search_template->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($table_search_template->get_activ_is_dirty())
				{
				$data[] = array("name" => "activ" , "value" => $table_search_template->get_activ() , "type" => "bool");
				}
			if ($table_search_template->get_source_is_dirty())
				{
				$data[] = array("name" => "source" , "value" => $table_search_template->get_source() , "type" => "text");
				}
			if ($table_search_template->get_path_is_dirty())
				{
				$data[] = array("name" => "path" , "value" => $table_search_template->get_path() , "type" => "varchar");
				}
			if ($table_search_template->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $table_search_template->get_name() , "type" => "varchar");
				}
			if ($table_search_template->get_table_name_is_dirty())
				{
				$data[] = array("name" => "table_name" , "value" => $table_search_template->get_table_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('table_search_template',$table_search_template->get_id()))
				{
				$result = $table_search_template->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('table_search_template',$table_search_template->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('table_search_template',$table_search_template->get_id(),$application,$table_search_template->get_id_save_location(),false);
				$table_search_template->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $table_search_template->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('table_search_template',$table_search_template->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('table_search_template',$table_search_template->get_id(),$application,$table_search_template->get_id_save_location(),true);
				$table_search_template->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$table_search_template = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$table_search_template = cls_table_factory::get_common_table_search_template()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($table_search_template))
				{
					$table_search_template = cls_table_factory::create_instance('table_search_template');
				}
			$table_search_template->fill($data,false);
			return self::save_object($table_search_template,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 6;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "table_search_template.activ":
					$counter++;
					break;
				case "activ":
					$counter++;
					break;
				case "table_search_template.source":
					$counter++;
					break;
				case "source":
					$counter++;
					break;
				case "table_search_template.path":
					$counter++;
					break;
				case "path":
					$counter++;
					break;
				case "table_search_template.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "table_search_template.table_name":
					$counter++;
					break;
				case "table_name":
					$counter++;
					break;
				case "table_search_template.id":
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
