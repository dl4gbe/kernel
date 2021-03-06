<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_taxonomy_vocabulary extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_taxonomy_vocabulary';
		}

	public static function save_object($drupal_taxonomy_vocabulary,$db_manager,$application)
		{
			if (is_null($drupal_taxonomy_vocabulary))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_taxonomy_vocabulary->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_taxonomy_vocabulary->get_weight_is_dirty())
				{
				$data[] = array("name" => "weight" , "value" => $drupal_taxonomy_vocabulary->get_weight() , "type" => "int4");
				}
			if ($drupal_taxonomy_vocabulary->get_module_is_dirty())
				{
				$data[] = array("name" => "module" , "value" => $drupal_taxonomy_vocabulary->get_module() , "type" => "varchar");
				}
			if ($drupal_taxonomy_vocabulary->get_hierarchy_is_dirty())
				{
				$data[] = array("name" => "hierarchy" , "value" => $drupal_taxonomy_vocabulary->get_hierarchy() , "type" => "int4");
				}
			if ($drupal_taxonomy_vocabulary->get_description_is_dirty())
				{
				$data[] = array("name" => "description" , "value" => $drupal_taxonomy_vocabulary->get_description() , "type" => "text");
				}
			if ($drupal_taxonomy_vocabulary->get_machine_name_is_dirty())
				{
				$data[] = array("name" => "machine_name" , "value" => $drupal_taxonomy_vocabulary->get_machine_name() , "type" => "varchar");
				}
			if ($drupal_taxonomy_vocabulary->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $drupal_taxonomy_vocabulary->get_name() , "type" => "varchar");
				}
			if ($drupal_taxonomy_vocabulary->get_vid_is_dirty())
				{
				$data[] = array("name" => "vid" , "value" => $drupal_taxonomy_vocabulary->get_vid() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_taxonomy_vocabulary',$drupal_taxonomy_vocabulary->get_id()))
				{
				$result = $drupal_taxonomy_vocabulary->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_taxonomy_vocabulary',$drupal_taxonomy_vocabulary->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_taxonomy_vocabulary',$drupal_taxonomy_vocabulary->get_id(),$application,$drupal_taxonomy_vocabulary->get_id_save_location(),false);
				$drupal_taxonomy_vocabulary->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_taxonomy_vocabulary->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_taxonomy_vocabulary',$drupal_taxonomy_vocabulary->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_taxonomy_vocabulary',$drupal_taxonomy_vocabulary->get_id(),$application,$drupal_taxonomy_vocabulary->get_id_save_location(),true);
				$drupal_taxonomy_vocabulary->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_taxonomy_vocabulary = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_taxonomy_vocabulary = cls_table_factory::get_common_drupal_taxonomy_vocabulary()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_taxonomy_vocabulary))
				{
					$drupal_taxonomy_vocabulary = cls_table_factory::create_instance('drupal_taxonomy_vocabulary');
				}
			$drupal_taxonomy_vocabulary->fill($data,false);
			return self::save_object($drupal_taxonomy_vocabulary,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 8;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "drupal_taxonomy_vocabulary.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_taxonomy_vocabulary.weight":
					$counter++;
					break;
				case "weight":
					$counter++;
					break;
				case "drupal_taxonomy_vocabulary.module":
					$counter++;
					break;
				case "module":
					$counter++;
					break;
				case "drupal_taxonomy_vocabulary.hierarchy":
					$counter++;
					break;
				case "hierarchy":
					$counter++;
					break;
				case "drupal_taxonomy_vocabulary.description":
					$counter++;
					break;
				case "description":
					$counter++;
					break;
				case "drupal_taxonomy_vocabulary.machine_name":
					$counter++;
					break;
				case "machine_name":
					$counter++;
					break;
				case "drupal_taxonomy_vocabulary.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "drupal_taxonomy_vocabulary.vid":
					$counter++;
					break;
				case "vid":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
