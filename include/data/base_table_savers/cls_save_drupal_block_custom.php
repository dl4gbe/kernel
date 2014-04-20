<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_block_custom extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_block_custom';
		}

	public static function save_object($drupal_block_custom,$db_manager,$application)
		{
			if (is_null($drupal_block_custom))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_block_custom->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_block_custom->get_format_is_dirty())
				{
				$data[] = array("name" => "format" , "value" => $drupal_block_custom->get_format() , "type" => "varchar");
				}
			if ($drupal_block_custom->get_info_is_dirty())
				{
				$data[] = array("name" => "info" , "value" => $drupal_block_custom->get_info() , "type" => "varchar");
				}
			if ($drupal_block_custom->get_body_is_dirty())
				{
				$data[] = array("name" => "body" , "value" => $drupal_block_custom->get_body() , "type" => "text");
				}
			if ($drupal_block_custom->get_bid_is_dirty())
				{
				$data[] = array("name" => "bid" , "value" => $drupal_block_custom->get_bid() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_block_custom',$drupal_block_custom->get_id()))
				{
				$result = $drupal_block_custom->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_block_custom',$drupal_block_custom->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_block_custom',$drupal_block_custom->get_id(),$application,$drupal_block_custom->get_id_save_location(),false);
				$drupal_block_custom->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_block_custom->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_block_custom',$drupal_block_custom->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_block_custom',$drupal_block_custom->get_id(),$application,$drupal_block_custom->get_id_save_location(),true);
				$drupal_block_custom->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$drupal_block_custom = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_block_custom = cls_table_factory::get_common_drupal_block_custom()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_block_custom))
				{
					$drupal_block_custom = cls_table_factory::create_instance('drupal_block_custom');
				}
			$drupal_block_custom->fill($data,false);
			return self::save_object($drupal_block_custom,$db_manager,$application);
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
				case "drupal_block_custom.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "drupal_block_custom.format":
					$counter++;
					break;
				case "format":
					$counter++;
					break;
				case "drupal_block_custom.info":
					$counter++;
					break;
				case "info":
					$counter++;
					break;
				case "drupal_block_custom.body":
					$counter++;
					break;
				case "body":
					$counter++;
					break;
				case "drupal_block_custom.bid":
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
