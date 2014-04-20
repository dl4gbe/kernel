<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_file_managed extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_file_managed';
		}

	public static function save_object($drupal_file_managed,$db_manager,$application)
		{
			if (is_null($drupal_file_managed))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_file_managed->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_file_managed->get_fid_is_dirty())
				{
				$data[] = array("name" => "fid" , "value" => $drupal_file_managed->get_fid() , "type" => "int4");
				}
			if ($drupal_file_managed->get_uid_is_dirty())
				{
				$data[] = array("name" => "uid" , "value" => $drupal_file_managed->get_uid() , "type" => "int8");
				}
			if ($drupal_file_managed->get_filename_is_dirty())
				{
				$data[] = array("name" => "filename" , "value" => $drupal_file_managed->get_filename() , "type" => "varchar");
				}
			if ($drupal_file_managed->get_uri_is_dirty())
				{
				$data[] = array("name" => "uri" , "value" => $drupal_file_managed->get_uri() , "type" => "varchar");
				}
			if ($drupal_file_managed->get_filemime_is_dirty())
				{
				$data[] = array("name" => "filemime" , "value" => $drupal_file_managed->get_filemime() , "type" => "varchar");
				}
			if ($drupal_file_managed->get_filesize_is_dirty())
				{
				$data[] = array("name" => "filesize" , "value" => $drupal_file_managed->get_filesize() , "type" => "int8");
				}
			if ($drupal_file_managed->get_status_is_dirty())
				{
				$data[] = array("name" => "status" , "value" => $drupal_file_managed->get_status() , "type" => "int2");
				}
			if ($drupal_file_managed->get_timestamp_is_dirty())
				{
				$data[] = array("name" => "timestamp" , "value" => $drupal_file_managed->get_timestamp() , "type" => "int8");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_file_managed',$drupal_file_managed->get_id()))
				{
				$result = $drupal_file_managed->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_file_managed',$drupal_file_managed->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_file_managed',$drupal_file_managed->get_id(),$application,$drupal_file_managed->get_id_save_location(),false);
				$drupal_file_managed->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_file_managed->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_file_managed',$drupal_file_managed->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_file_managed',$drupal_file_managed->get_id(),$application,$drupal_file_managed->get_id_save_location(),true);
				$drupal_file_managed->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_file_managed = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_file_managed = cls_table_factory::get_common_drupal_file_managed()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_file_managed))
				{
					$drupal_file_managed = cls_table_factory::create_instance('drupal_file_managed');
				}
			$drupal_file_managed->fill($data,false);
			return self::save_object($drupal_file_managed,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 9;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "drupal_file_managed.fid":
					$counter++;
					break;
				case "fid":
					$counter++;
					break;
				case "drupal_file_managed.uid":
					$counter++;
					break;
				case "uid":
					$counter++;
					break;
				case "drupal_file_managed.filename":
					$counter++;
					break;
				case "filename":
					$counter++;
					break;
				case "drupal_file_managed.uri":
					$counter++;
					break;
				case "uri":
					$counter++;
					break;
				case "drupal_file_managed.filemime":
					$counter++;
					break;
				case "filemime":
					$counter++;
					break;
				case "drupal_file_managed.filesize":
					$counter++;
					break;
				case "filesize":
					$counter++;
					break;
				case "drupal_file_managed.status":
					$counter++;
					break;
				case "status":
					$counter++;
					break;
				case "drupal_file_managed.timestamp":
					$counter++;
					break;
				case "timestamp":
					$counter++;
					break;
				case "drupal_file_managed.id":
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
