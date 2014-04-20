<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_data_help extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'data_help';
		}

	public static function save_object($data_help,$db_manager,$application)
		{
			if (is_null($data_help))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$data_help->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($data_help->get_id_person_author_is_dirty())
				{
				$data[] = array("name" => "id_person_author" , "value" => $data_help->get_id_person_author() , "type" => "uuid");
				}
			if ($data_help->get_language_is_dirty())
				{
				$data[] = array("name" => "language" , "value" => $data_help->get_language() , "type" => "bpchar");
				}
			if ($data_help->get_content_is_dirty())
				{
				$data[] = array("name" => "content" , "value" => $data_help->get_content() , "type" => "text");
				}
			if ($data_help->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $data_help->get_name() , "type" => "varchar");
				}
			if ($data_help->get_id_data_is_dirty())
				{
				$data[] = array("name" => "id_data" , "value" => $data_help->get_id_data() , "type" => "uuid");
				}
			if ($data_help->get_id_application_is_dirty())
				{
				$data[] = array("name" => "id_application" , "value" => $data_help->get_id_application() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('data_help',$data_help->get_id()))
				{
				$result = $data_help->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('data_help',$data_help->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('data_help',$data_help->get_id(),$application,$data_help->get_id_save_location(),false);
				$data_help->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $data_help->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('data_help',$data_help->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('data_help',$data_help->get_id(),$application,$data_help->get_id_save_location(),true);
				$data_help->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$data_help = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$data_help = cls_table_factory::get_common_data_help()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($data_help))
				{
					$data_help = cls_table_factory::create_instance('data_help');
				}
			$data_help->fill($data,false);
			return self::save_object($data_help,$db_manager,$application);
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
				case "data_help.id_person_author":
					$counter++;
					break;
				case "id_person_author":
					$counter++;
					break;
				case "data_help.language":
					$counter++;
					break;
				case "language":
					$counter++;
					break;
				case "data_help.content":
					$counter++;
					break;
				case "content":
					$counter++;
					break;
				case "data_help.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "data_help.id_data":
					$counter++;
					break;
				case "id_data":
					$counter++;
					break;
				case "data_help.id_application":
					$counter++;
					break;
				case "id_application":
					$counter++;
					break;
				case "data_help.id":
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
