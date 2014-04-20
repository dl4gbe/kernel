<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_table_security extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'table_security';
		}

	public static function save_object($table_security,$db_manager,$application)
		{
			if (is_null($table_security))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$table_security->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($table_security->get_table_name_is_dirty())
				{
				$data[] = array("name" => "table_name" , "value" => $table_security->get_table_name() , "type" => "varchar");
				}
			if ($table_security->get_id_access_group_is_dirty())
				{
				$data[] = array("name" => "id_access_group" , "value" => $table_security->get_id_access_group() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('table_security',$table_security->get_id()))
				{
				$result = $table_security->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('table_security',$table_security->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$table_security->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $table_security->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('table_security',$table_security->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$table_security->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$table_security = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$table_security = cls_table_factory::get_common_table_security()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($table_security))
				{
					$table_security = cls_table_factory::create_instance('table_security');
				}
			$table_security->fill($data,false);
			return self::save_object($table_security,$db_manager,$application);
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
				case "table_security.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "table_security.table_name":
					$counter++;
					break;
				case "table_name":
					$counter++;
					break;
				case "table_security.id_access_group":
					$counter++;
					break;
				case "id_access_group":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
