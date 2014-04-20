<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_image_effects extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_image_effects';
		}

	public static function save_object($drupal_image_effects,$db_manager,$application)
		{
			if (is_null($drupal_image_effects))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_image_effects->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_image_effects->get_ieid_is_dirty())
				{
				$data[] = array("name" => "ieid" , "value" => $drupal_image_effects->get_ieid() , "type" => "int4");
				}
			if ($drupal_image_effects->get_isid_is_dirty())
				{
				$data[] = array("name" => "isid" , "value" => $drupal_image_effects->get_isid() , "type" => "int8");
				}
			if ($drupal_image_effects->get_weight_is_dirty())
				{
				$data[] = array("name" => "weight" , "value" => $drupal_image_effects->get_weight() , "type" => "int4");
				}
			if ($drupal_image_effects->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $drupal_image_effects->get_name() , "type" => "varchar");
				}
			if ($drupal_image_effects->get_data_is_dirty())
				{
				$data[] = array("name" => "data" , "value" => $drupal_image_effects->get_data() , "type" => "bytea");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_image_effects',$drupal_image_effects->get_id()))
				{
				$result = $drupal_image_effects->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_image_effects',$drupal_image_effects->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_image_effects',$drupal_image_effects->get_id(),$application,$drupal_image_effects->get_id_save_location(),false);
				$drupal_image_effects->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_image_effects->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_image_effects',$drupal_image_effects->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_image_effects',$drupal_image_effects->get_id(),$application,$drupal_image_effects->get_id_save_location(),true);
				$drupal_image_effects->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_image_effects = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_image_effects = cls_table_factory::get_common_drupal_image_effects()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_image_effects))
				{
					$drupal_image_effects = cls_table_factory::create_instance('drupal_image_effects');
				}
			$drupal_image_effects->fill($data,false);
			return self::save_object($drupal_image_effects,$db_manager,$application);
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
				case "drupal_image_effects.ieid":
					$counter++;
					break;
				case "ieid":
					$counter++;
					break;
				case "drupal_image_effects.isid":
					$counter++;
					break;
				case "isid":
					$counter++;
					break;
				case "drupal_image_effects.weight":
					$counter++;
					break;
				case "weight":
					$counter++;
					break;
				case "drupal_image_effects.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "drupal_image_effects.data":
					$counter++;
					break;
				case "data":
					$counter++;
					break;
				case "drupal_image_effects.id":
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
