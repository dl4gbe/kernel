<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_data_posting extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'data_posting';
		}

	public static function save_object($data_posting,$db_manager,$application)
		{
			if (is_null($data_posting))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$data_posting->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($data_posting->get_id_posting_header_is_dirty())
				{
				$data[] = array("name" => "id_posting_header" , "value" => $data_posting->get_id_posting_header() , "type" => "uuid");
				}
			if ($data_posting->get_id_data_is_dirty())
				{
				$data[] = array("name" => "id_data" , "value" => $data_posting->get_id_data() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('data_posting',$data_posting->get_id()))
				{
				$result = $data_posting->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('data_posting',$data_posting->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('data_posting',$data_posting->get_id(),$application,$data_posting->get_id_save_location(),false);
				$data_posting->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $data_posting->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('data_posting',$data_posting->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('data_posting',$data_posting->get_id(),$application,$data_posting->get_id_save_location(),true);
				$data_posting->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$data_posting = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$data_posting = cls_table_factory::get_common_data_posting()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($data_posting))
				{
					$data_posting = cls_table_factory::create_instance('data_posting');
				}
			$data_posting->fill($data,false);
			return self::save_object($data_posting,$db_manager,$application);
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
				case "data_posting.id_posting_header":
					$counter++;
					break;
				case "id_posting_header":
					$counter++;
					break;
				case "data_posting.id_data":
					$counter++;
					break;
				case "id_data":
					$counter++;
					break;
				case "data_posting.id":
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
