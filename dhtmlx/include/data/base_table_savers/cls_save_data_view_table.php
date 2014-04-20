<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_data_view_table extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'data_view_table';
		}

	public static function save_object($data_view_table,$db_manager,$application)
		{
			if (is_null($data_view_table))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$data_view_table->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($data_view_table->get_id_data_view_is_dirty())
				{
				$data[] = array("name" => "id_data_view" , "value" => $data_view_table->get_id_data_view() , "type" => "uuid");
				}
			if ($data_view_table->get_table_name_is_dirty())
				{
				$data[] = array("name" => "table_name" , "value" => $data_view_table->get_table_name() , "type" => "varchar");
				}
			if ($data_view_table->get_link_field_is_dirty())
				{
				$data[] = array("name" => "link_field" , "value" => $data_view_table->get_link_field() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('data_view_table',$data_view_table->get_id()))
				{
				$result = $data_view_table->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('data_view_table',$data_view_table->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('data_view_table',$data_view_table->get_id(),$application,$data_view_table->get_id_save_location(),false);
				$data_view_table->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $data_view_table->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('data_view_table',$data_view_table->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('data_view_table',$data_view_table->get_id(),$application,$data_view_table->get_id_save_location(),true);
				$data_view_table->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$data_view_table = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$data_view_table = cls_table_factory::get_common_data_view_table()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($data_view_table))
				{
					$data_view_table = cls_table_factory::create_instance('data_view_table');
				}
			$data_view_table->fill($data,false);
			return self::save_object($data_view_table,$db_manager,$application);
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
				case "data_view_table.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "data_view_table.id_data_view":
					$counter++;
					break;
				case "id_data_view":
					$counter++;
					break;
				case "data_view_table.table_name":
					$counter++;
					break;
				case "table_name":
					$counter++;
					break;
				case "data_view_table.link_field":
					$counter++;
					break;
				case "link_field":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
