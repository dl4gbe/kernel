<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_block extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_block';
		}

	public static function save_object($drupal_block,$db_manager,$application)
		{
			if (is_null($drupal_block))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_block->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_block->get_cache_is_dirty())
				{
				$data[] = array("name" => "cache" , "value" => $drupal_block->get_cache() , "type" => "int2");
				}
			if ($drupal_block->get_title_is_dirty())
				{
				$data[] = array("name" => "title" , "value" => $drupal_block->get_title() , "type" => "varchar");
				}
			if ($drupal_block->get_pages_is_dirty())
				{
				$data[] = array("name" => "pages" , "value" => $drupal_block->get_pages() , "type" => "text");
				}
			if ($drupal_block->get_visibility_is_dirty())
				{
				$data[] = array("name" => "visibility" , "value" => $drupal_block->get_visibility() , "type" => "int2");
				}
			if ($drupal_block->get_custom_is_dirty())
				{
				$data[] = array("name" => "custom" , "value" => $drupal_block->get_custom() , "type" => "int2");
				}
			if ($drupal_block->get_region_is_dirty())
				{
				$data[] = array("name" => "region" , "value" => $drupal_block->get_region() , "type" => "varchar");
				}
			if ($drupal_block->get_weight_is_dirty())
				{
				$data[] = array("name" => "weight" , "value" => $drupal_block->get_weight() , "type" => "int4");
				}
			if ($drupal_block->get_status_is_dirty())
				{
				$data[] = array("name" => "status" , "value" => $drupal_block->get_status() , "type" => "int2");
				}
			if ($drupal_block->get_theme_is_dirty())
				{
				$data[] = array("name" => "theme" , "value" => $drupal_block->get_theme() , "type" => "varchar");
				}
			if ($drupal_block->get_delta_is_dirty())
				{
				$data[] = array("name" => "delta" , "value" => $drupal_block->get_delta() , "type" => "varchar");
				}
			if ($drupal_block->get_module_is_dirty())
				{
				$data[] = array("name" => "module" , "value" => $drupal_block->get_module() , "type" => "varchar");
				}
			if ($drupal_block->get_bid_is_dirty())
				{
				$data[] = array("name" => "bid" , "value" => $drupal_block->get_bid() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_block',$drupal_block->get_id()))
				{
				$result = $drupal_block->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_block',$drupal_block->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_block',$drupal_block->get_id(),$application,$drupal_block->get_id_save_location(),false);
				$drupal_block->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_block->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_block',$drupal_block->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_block',$drupal_block->get_id(),$application,$drupal_block->get_id_save_location(),true);
				$drupal_block->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_block = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_block = cls_table_factory::get_common_drupal_block()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_block))
				{
					$drupal_block = cls_table_factory::create_instance('drupal_block');
				}
			$drupal_block->fill($data,false);
			return self::save_object($drupal_block,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 13;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "drupal_block.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_block.cache":
					$counter++;
					break;
				case "cache":
					$counter++;
					break;
				case "drupal_block.title":
					$counter++;
					break;
				case "title":
					$counter++;
					break;
				case "drupal_block.pages":
					$counter++;
					break;
				case "pages":
					$counter++;
					break;
				case "drupal_block.visibility":
					$counter++;
					break;
				case "visibility":
					$counter++;
					break;
				case "drupal_block.custom":
					$counter++;
					break;
				case "custom":
					$counter++;
					break;
				case "drupal_block.region":
					$counter++;
					break;
				case "region":
					$counter++;
					break;
				case "drupal_block.weight":
					$counter++;
					break;
				case "weight":
					$counter++;
					break;
				case "drupal_block.status":
					$counter++;
					break;
				case "status":
					$counter++;
					break;
				case "drupal_block.theme":
					$counter++;
					break;
				case "theme":
					$counter++;
					break;
				case "drupal_block.delta":
					$counter++;
					break;
				case "delta":
					$counter++;
					break;
				case "drupal_block.module":
					$counter++;
					break;
				case "module":
					$counter++;
					break;
				case "drupal_block.bid":
					$counter++;
					break;
				case "bid":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
