<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_url_alias extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_url_alias';
		}

	public static function save_object($drupal_url_alias,$db_manager,$application)
		{
			if (is_null($drupal_url_alias))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_url_alias->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_url_alias->get_language_is_dirty())
				{
				$data[] = array("name" => "language" , "value" => $drupal_url_alias->get_language() , "type" => "varchar");
				}
			if ($drupal_url_alias->get_alias_is_dirty())
				{
				$data[] = array("name" => "alias" , "value" => $drupal_url_alias->get_alias() , "type" => "varchar");
				}
			if ($drupal_url_alias->get_source_is_dirty())
				{
				$data[] = array("name" => "source" , "value" => $drupal_url_alias->get_source() , "type" => "varchar");
				}
			if ($drupal_url_alias->get_pid_is_dirty())
				{
				$data[] = array("name" => "pid" , "value" => $drupal_url_alias->get_pid() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_url_alias',$drupal_url_alias->get_id()))
				{
				$result = $drupal_url_alias->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_url_alias',$drupal_url_alias->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_url_alias',$drupal_url_alias->get_id(),$application,$drupal_url_alias->get_id_save_location(),false);
				$drupal_url_alias->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_url_alias->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_url_alias',$drupal_url_alias->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_url_alias',$drupal_url_alias->get_id(),$application,$drupal_url_alias->get_id_save_location(),true);
				$drupal_url_alias->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_url_alias = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_url_alias = cls_table_factory::get_common_drupal_url_alias()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_url_alias))
				{
					$drupal_url_alias = cls_table_factory::create_instance('drupal_url_alias');
				}
			$drupal_url_alias->fill($data,false);
			return self::save_object($drupal_url_alias,$db_manager,$application);
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
				case "drupal_url_alias.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_url_alias.language":
					$counter++;
					break;
				case "language":
					$counter++;
					break;
				case "drupal_url_alias.alias":
					$counter++;
					break;
				case "alias":
					$counter++;
					break;
				case "drupal_url_alias.source":
					$counter++;
					break;
				case "source":
					$counter++;
					break;
				case "drupal_url_alias.pid":
					$counter++;
					break;
				case "pid":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
