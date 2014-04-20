<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_rdf_mapping extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_rdf_mapping';
		}

	public static function save_object($drupal_rdf_mapping,$db_manager,$application)
		{
			if (is_null($drupal_rdf_mapping))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_rdf_mapping->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_rdf_mapping->get_type_is_dirty())
				{
				$data[] = array("name" => "type" , "value" => $drupal_rdf_mapping->get_type() , "type" => "varchar");
				}
			if ($drupal_rdf_mapping->get_bundle_is_dirty())
				{
				$data[] = array("name" => "bundle" , "value" => $drupal_rdf_mapping->get_bundle() , "type" => "varchar");
				}
			if ($drupal_rdf_mapping->get_mapping_is_dirty())
				{
				$data[] = array("name" => "mapping" , "value" => $drupal_rdf_mapping->get_mapping() , "type" => "bytea");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_rdf_mapping',$drupal_rdf_mapping->get_id()))
				{
				$result = $drupal_rdf_mapping->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_rdf_mapping',$drupal_rdf_mapping->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_rdf_mapping',$drupal_rdf_mapping->get_id(),$application,$drupal_rdf_mapping->get_id_save_location(),false);
				$drupal_rdf_mapping->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_rdf_mapping->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_rdf_mapping',$drupal_rdf_mapping->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_rdf_mapping',$drupal_rdf_mapping->get_id(),$application,$drupal_rdf_mapping->get_id_save_location(),true);
				$drupal_rdf_mapping->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_rdf_mapping = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_rdf_mapping = cls_table_factory::get_common_drupal_rdf_mapping()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_rdf_mapping))
				{
					$drupal_rdf_mapping = cls_table_factory::create_instance('drupal_rdf_mapping');
				}
			$drupal_rdf_mapping->fill($data,false);
			return self::save_object($drupal_rdf_mapping,$db_manager,$application);
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
				case "drupal_rdf_mapping.type":
					$counter++;
					break;
				case "type":
					$counter++;
					break;
				case "drupal_rdf_mapping.bundle":
					$counter++;
					break;
				case "bundle":
					$counter++;
					break;
				case "drupal_rdf_mapping.mapping":
					$counter++;
					break;
				case "mapping":
					$counter++;
					break;
				case "drupal_rdf_mapping.id":
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
