<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_table_test_group extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'table_test_group';
		}

	public static function save_object($table_test_group,$db_manager,$application)
		{
			if (is_null($table_test_group))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$table_test_group->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($table_test_group->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $table_test_group->get_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('table_test_group',$table_test_group->get_id()))
				{
				$result = $table_test_group->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('table_test_group',$table_test_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('table_test_group',$table_test_group->get_id(),$application,$table_test_group->get_id_save_location(),false);
				$table_test_group->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $table_test_group->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('table_test_group',$table_test_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('table_test_group',$table_test_group->get_id(),$application,$table_test_group->get_id_save_location(),true);
				$table_test_group->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$table_test_group = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$table_test_group = cls_table_factory::get_common_table_test_group()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($table_test_group))
				{
					$table_test_group = cls_table_factory::create_instance('table_test_group');
				}
			$table_test_group->fill($data,false);
			return self::save_object($table_test_group,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 2;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "table_test_group.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "table_test_group.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
