<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_swift_statement_line_posting extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'swift_statement_line_posting';
		}

	public static function save_object($swift_statement_line_posting,$db_manager,$application)
		{
			if (is_null($swift_statement_line_posting))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$swift_statement_line_posting->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($swift_statement_line_posting->get_id_swift_statement_line_is_dirty())
				{
				$data[] = array("name" => "id_swift_statement_line" , "value" => $swift_statement_line_posting->get_id_swift_statement_line() , "type" => "uuid");
				}
			if ($swift_statement_line_posting->get_id_person_employee_linked_is_dirty())
				{
				$data[] = array("name" => "id_person_employee_linked" , "value" => $swift_statement_line_posting->get_id_person_employee_linked() , "type" => "uuid");
				}
			if ($swift_statement_line_posting->get_link_date_is_dirty())
				{
				$data[] = array("name" => "link_date" , "value" => $swift_statement_line_posting->get_link_date() , "type" => "date");
				}
			if ($swift_statement_line_posting->get_remark_is_dirty())
				{
				$data[] = array("name" => "remark" , "value" => $swift_statement_line_posting->get_remark() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('swift_statement_line_posting',$swift_statement_line_posting->get_id()))
				{
				$result = $swift_statement_line_posting->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('swift_statement_line_posting',$swift_statement_line_posting->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('swift_statement_line_posting',$swift_statement_line_posting->get_id(),$application,$swift_statement_line_posting->get_id_save_location(),false);
				$swift_statement_line_posting->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $swift_statement_line_posting->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('swift_statement_line_posting',$swift_statement_line_posting->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('swift_statement_line_posting',$swift_statement_line_posting->get_id(),$application,$swift_statement_line_posting->get_id_save_location(),true);
				$swift_statement_line_posting->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$swift_statement_line_posting = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$swift_statement_line_posting = cls_table_factory::get_common_swift_statement_line_posting()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($swift_statement_line_posting))
				{
					$swift_statement_line_posting = cls_table_factory::create_instance('swift_statement_line_posting');
				}
			$swift_statement_line_posting->fill($data,false);
			return self::save_object($swift_statement_line_posting,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 5;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "swift_statement_line_posting.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "swift_statement_line_posting.id_swift_statement_line":
					$counter++;
					break;
				case "id_swift_statement_line":
					$counter++;
					break;
				case "swift_statement_line_posting.id_person_employee_linked":
					$counter++;
					break;
				case "id_person_employee_linked":
					$counter++;
					break;
				case "swift_statement_line_posting.link_date":
					$counter++;
					break;
				case "link_date":
					$counter++;
					break;
				case "swift_statement_line_posting.remark":
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
