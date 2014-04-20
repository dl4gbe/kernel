<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_dms extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'dms';
		}

	public static function save_object($dms,$db_manager,$application)
		{
			if (is_null($dms))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$dms->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($dms->get_shortdescription_is_dirty())
				{
				$data[] = array("name" => "shortdescription" , "value" => $dms->get_shortdescription() , "type" => "varchar");
				}
			if ($dms->get_description_is_dirty())
				{
				$data[] = array("name" => "description" , "value" => $dms->get_description() , "type" => "text");
				}
			if ($dms->get_createdate_is_dirty())
				{
				$data[] = array("name" => "createdate" , "value" => $dms->get_createdate() , "type" => "timestamptz");
				}
			if ($dms->get_id_data_is_dirty())
				{
				$data[] = array("name" => "id_data" , "value" => $dms->get_id_data() , "type" => "uuid");
				}
			if ($dms->get_data_is_dirty())
				{
				$data[] = array("name" => "data" , "value" => $dms->get_data() , "type" => "bytea");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('dms',$dms->get_id()))
				{
				$result = $dms->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('dms',$dms->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('dms',$dms->get_id(),$application,$dms->get_id_save_location(),false);
				$dms->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $dms->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('dms',$dms->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('dms',$dms->get_id(),$application,$dms->get_id_save_location(),true);
				$dms->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$dms = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$dms = cls_table_factory::get_common_dms()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($dms))
				{
					$dms = cls_table_factory::create_instance('dms');
				}
			$dms->fill($data,false);
			return self::save_object($dms,$db_manager,$application);
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
				case "dms.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "dms.shortdescription":
					$counter++;
					break;
				case "shortdescription":
					$counter++;
					break;
				case "dms.description":
					$counter++;
					break;
				case "description":
					$counter++;
					break;
				case "dms.createdate":
					$counter++;
					break;
				case "createdate":
					$counter++;
					break;
				case "dms.id_data":
					$counter++;
					break;
				case "id_data":
					$counter++;
					break;
				case "dms.data":
					$counter++;
					break;
				case "data":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
