<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_communication_reason_type extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'communication_reason_type';
		}

	public static function save_object($communication_reason_type,$db_manager,$application)
		{
			if (is_null($communication_reason_type))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$communication_reason_type->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($communication_reason_type->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $communication_reason_type->get_name() , "type" => "varchar");
				}
			if ($communication_reason_type->get_tablename_is_dirty())
				{
				$data[] = array("name" => "tablename" , "value" => $communication_reason_type->get_tablename() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('communication_reason_type',$communication_reason_type->get_id()))
				{
				$result = $communication_reason_type->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('communication_reason_type',$communication_reason_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$communication_reason_type->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $communication_reason_type->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('communication_reason_type',$communication_reason_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$communication_reason_type->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$communication_reason_type = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$communication_reason_type = cls_table_factory::get_common_communication_reason_type()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($communication_reason_type))
				{
					$communication_reason_type = cls_table_factory::create_instance('communication_reason_type');
				}
			$communication_reason_type->fill($data,false);
			return self::save_object($communication_reason_type,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 3;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "communication_reason_type.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "communication_reason_type.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "communication_reason_type.tablename":
					$counter++;
					break;
				case "tablename":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
