<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_blocked_ips extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_blocked_ips';
		}

	public static function save_object($drupal_blocked_ips,$db_manager,$application)
		{
			if (is_null($drupal_blocked_ips))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_blocked_ips->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_blocked_ips->get_iid_is_dirty())
				{
				$data[] = array("name" => "iid" , "value" => $drupal_blocked_ips->get_iid() , "type" => "int4");
				}
			if ($drupal_blocked_ips->get_ip_is_dirty())
				{
				$data[] = array("name" => "ip" , "value" => $drupal_blocked_ips->get_ip() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_blocked_ips',$drupal_blocked_ips->get_id()))
				{
				$result = $drupal_blocked_ips->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_blocked_ips',$drupal_blocked_ips->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_blocked_ips',$drupal_blocked_ips->get_id(),$application,$drupal_blocked_ips->get_id_save_location(),false);
				$drupal_blocked_ips->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_blocked_ips->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_blocked_ips',$drupal_blocked_ips->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_blocked_ips',$drupal_blocked_ips->get_id(),$application,$drupal_blocked_ips->get_id_save_location(),true);
				$drupal_blocked_ips->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_blocked_ips = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_blocked_ips = cls_table_factory::get_common_drupal_blocked_ips()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_blocked_ips))
				{
					$drupal_blocked_ips = cls_table_factory::create_instance('drupal_blocked_ips');
				}
			$drupal_blocked_ips->fill($data,false);
			return self::save_object($drupal_blocked_ips,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 3;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "drupal_blocked_ips.iid":
					$counter++;
					break;
				case "iid":
					$counter++;
					break;
				case "drupal_blocked_ips.ip":
					$counter++;
					break;
				case "ip":
					$counter++;
					break;
				case "drupal_blocked_ips.id":
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
