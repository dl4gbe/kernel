<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_table_bean_table extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'table_bean_table';
		}

	public static function save_object($table_bean_table,$db_manager,$application)
		{
			if (is_null($table_bean_table))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$table_bean_table->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($table_bean_table->get_id_table_bean_is_dirty())
				{
				$data[] = array("name" => "id_table_bean" , "value" => $table_bean_table->get_id_table_bean() , "type" => "uuid");
				}
			if ($table_bean_table->get_table_name_is_dirty())
				{
				$data[] = array("name" => "table_name" , "value" => $table_bean_table->get_table_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('table_bean_table',$table_bean_table->get_id()))
				{
				$result = $table_bean_table->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('table_bean_table',$table_bean_table->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('table_bean_table',$table_bean_table->get_id(),$application,$table_bean_table->get_id_save_location(),false);
				$table_bean_table->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $table_bean_table->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('table_bean_table',$table_bean_table->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('table_bean_table',$table_bean_table->get_id(),$application,$table_bean_table->get_id_save_location(),true);
				$table_bean_table->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$table_bean_table = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$table_bean_table = cls_table_factory::get_common_table_bean_table()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($table_bean_table))
				{
					$table_bean_table = cls_table_factory::create_instance('table_bean_table');
				}
			$table_bean_table->fill($data,false);
			return self::save_object($table_bean_table,$db_manager,$application);
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
				case "table_bean_table.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "table_bean_table.id_table_bean":
					$counter++;
					break;
				case "id_table_bean":
					$counter++;
					break;
				case "table_bean_table.table_name":
					$counter++;
					break;
				case "table_name":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
