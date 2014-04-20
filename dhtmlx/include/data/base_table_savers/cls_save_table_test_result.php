<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_table_test_result extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'table_test_result';
		}

	public static function save_object($table_test_result,$db_manager,$application)
		{
			if (is_null($table_test_result))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$table_test_result->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($table_test_result->get_id_table_test_is_dirty())
				{
				$data[] = array("name" => "id_table_test" , "value" => $table_test_result->get_id_table_test() , "type" => "uuid");
				}
			if ($table_test_result->get_tablename_is_dirty())
				{
				$data[] = array("name" => "tablename" , "value" => $table_test_result->get_tablename() , "type" => "varchar");
				}
			if ($table_test_result->get_testname_is_dirty())
				{
				$data[] = array("name" => "testname" , "value" => $table_test_result->get_testname() , "type" => "varchar");
				}
			if ($table_test_result->get_passed_is_dirty())
				{
				$data[] = array("name" => "passed" , "value" => $table_test_result->get_passed() , "type" => "bool");
				}
			if ($table_test_result->get_remark_is_dirty())
				{
				$data[] = array("name" => "remark" , "value" => $table_test_result->get_remark() , "type" => "text");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('table_test_result',$table_test_result->get_id()))
				{
				$result = $table_test_result->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('table_test_result',$table_test_result->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('table_test_result',$table_test_result->get_id(),$application,$table_test_result->get_id_save_location(),false);
				$table_test_result->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $table_test_result->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('table_test_result',$table_test_result->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('table_test_result',$table_test_result->get_id(),$application,$table_test_result->get_id_save_location(),true);
				$table_test_result->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$table_test_result = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$table_test_result = cls_table_factory::get_common_table_test_result()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($table_test_result))
				{
					$table_test_result = cls_table_factory::create_instance('table_test_result');
				}
			$table_test_result->fill($data,false);
			return self::save_object($table_test_result,$db_manager,$application);
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
				case "table_test_result.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "table_test_result.id_table_test":
					$counter++;
					break;
				case "id_table_test":
					$counter++;
					break;
				case "table_test_result.tablename":
					$counter++;
					break;
				case "tablename":
					$counter++;
					break;
				case "table_test_result.testname":
					$counter++;
					break;
				case "testname":
					$counter++;
					break;
				case "table_test_result.passed":
					$counter++;
					break;
				case "passed":
					$counter++;
					break;
				case "table_test_result.remark":
					$counter++;
					break;
				case "remark":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
