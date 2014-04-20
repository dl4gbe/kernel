<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_application_template extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'application_template';
		}

	public static function save_object($application_template,$db_manager,$application)
		{
			if (is_null($application_template))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$application_template->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($application_template->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $application_template->get_name() , "type" => "varchar");
				}
			if ($application_template->get_path_is_dirty())
				{
				$data[] = array("name" => "path" , "value" => $application_template->get_path() , "type" => "varchar");
				}
			if ($application_template->get_source_is_dirty())
				{
				$data[] = array("name" => "source" , "value" => $application_template->get_source() , "type" => "text");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('application_template',$application_template->get_id()))
				{
				$result = $application_template->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('application_template',$application_template->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('application_template',$application_template->get_id(),$application,$application_template->get_id_save_location(),false);
				$application_template->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $application_template->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('application_template',$application_template->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('application_template',$application_template->get_id(),$application,$application_template->get_id_save_location(),true);
				$application_template->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$application_template = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$application_template = cls_table_factory::get_common_application_template()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($application_template))
				{
					$application_template = cls_table_factory::create_instance('application_template');
				}
			$application_template->fill($data,false);
			return self::save_object($application_template,$db_manager,$application);
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
				case "application_template.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "application_template.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "application_template.path":
					$counter++;
					break;
				case "path":
					$counter++;
					break;
				case "application_template.source":
					$counter++;
					break;
				case "source":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
