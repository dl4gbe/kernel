<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_authmap extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_authmap';
		}

	public static function save_object($drupal_authmap,$db_manager,$application)
		{
			if (is_null($drupal_authmap))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_authmap->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_authmap->get_aid_is_dirty())
				{
				$data[] = array("name" => "aid" , "value" => $drupal_authmap->get_aid() , "type" => "int4");
				}
			if ($drupal_authmap->get_uid_is_dirty())
				{
				$data[] = array("name" => "uid" , "value" => $drupal_authmap->get_uid() , "type" => "int4");
				}
			if ($drupal_authmap->get_authname_is_dirty())
				{
				$data[] = array("name" => "authname" , "value" => $drupal_authmap->get_authname() , "type" => "varchar");
				}
			if ($drupal_authmap->get_module_is_dirty())
				{
				$data[] = array("name" => "module" , "value" => $drupal_authmap->get_module() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_authmap',$drupal_authmap->get_id()))
				{
				$result = $drupal_authmap->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_authmap',$drupal_authmap->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_authmap',$drupal_authmap->get_id(),$application,$drupal_authmap->get_id_save_location(),false);
				$drupal_authmap->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_authmap->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_authmap',$drupal_authmap->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_authmap',$drupal_authmap->get_id(),$application,$drupal_authmap->get_id_save_location(),true);
				$drupal_authmap->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_authmap = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_authmap = cls_table_factory::get_common_drupal_authmap()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_authmap))
				{
					$drupal_authmap = cls_table_factory::create_instance('drupal_authmap');
				}
			$drupal_authmap->fill($data,false);
			return self::save_object($drupal_authmap,$db_manager,$application);
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
				case "drupal_authmap.aid":
					$counter++;
					break;
				case "aid":
					$counter++;
					break;
				case "drupal_authmap.uid":
					$counter++;
					break;
				case "uid":
					$counter++;
					break;
				case "drupal_authmap.authname":
					$counter++;
					break;
				case "authname":
					$counter++;
					break;
				case "drupal_authmap.module":
					$counter++;
					break;
				case "module":
					$counter++;
					break;
				case "drupal_authmap.id":
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
