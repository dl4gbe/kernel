<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_datachanges extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'datachanges';
		}

	public static function save_object($datachanges,$db_manager,$application)
		{
			if (is_null($datachanges))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$datachanges->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($datachanges->get_id_data_is_dirty())
				{
				$data[] = array("name" => "id_data" , "value" => $datachanges->get_id_data() , "type" => "uuid");
				}
			if ($datachanges->get_command_is_dirty())
				{
				$data[] = array("name" => "command" , "value" => $datachanges->get_command() , "type" => "varchar");
				}
			if ($datachanges->get_data_is_dirty())
				{
				$data[] = array("name" => "data" , "value" => $datachanges->get_data() , "type" => "text");
				}
			if ($datachanges->get_modidate_is_dirty())
				{
				$data[] = array("name" => "modidate" , "value" => $datachanges->get_modidate() , "type" => "time");
				}
			if ($datachanges->get_id_user_is_dirty())
				{
				$data[] = array("name" => "id_user" , "value" => $datachanges->get_id_user() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('datachanges',$datachanges->get_id()))
				{
				$result = $datachanges->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('datachanges',$datachanges->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('datachanges',$datachanges->get_id(),$application,$datachanges->get_id_save_location(),false);
				$datachanges->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $datachanges->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('datachanges',$datachanges->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('datachanges',$datachanges->get_id(),$application,$datachanges->get_id_save_location(),true);
				$datachanges->after_save($db_manager,$application,true);
				}
				if (!is_null($application->get_table_test())
					{
					}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('/include/data/table_factory/cls_table_factory.php');
			$datachanges = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$datachanges = cls_table_factory::get_common_datachanges()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($datachanges))
				{
					$datachanges = cls_table_factory::create_instance('datachanges');
				}
			$datachanges->fill($data,false);
			return self::save_object($datachanges,$db_manager,$application);
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
				case "datachanges.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "datachanges.id_data":
					$counter++;
					break;
				case "id_data":
					$counter++;
					break;
				case "datachanges.command":
					$counter++;
					break;
				case "command":
					$counter++;
					break;
				case "datachanges.data":
					$counter++;
					break;
				case "data":
					$counter++;
					break;
				case "datachanges.modidate":
					$counter++;
					break;
				case "modidate":
					$counter++;
					break;
				case "datachanges.id_user":
					$counter++;
					break;
				case "id_user":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
