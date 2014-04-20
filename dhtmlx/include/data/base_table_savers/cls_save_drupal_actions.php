<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_actions extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_actions';
		}

	public static function save_object($drupal_actions,$db_manager,$application)
		{
			if (is_null($drupal_actions))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_actions->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_actions->get_aid_is_dirty())
				{
				$data[] = array("name" => "aid" , "value" => $drupal_actions->get_aid() , "type" => "varchar");
				}
			if ($drupal_actions->get_type_is_dirty())
				{
				$data[] = array("name" => "type" , "value" => $drupal_actions->get_type() , "type" => "varchar");
				}
			if ($drupal_actions->get_callback_is_dirty())
				{
				$data[] = array("name" => "callback" , "value" => $drupal_actions->get_callback() , "type" => "varchar");
				}
			if ($drupal_actions->get_parameters_is_dirty())
				{
				$data[] = array("name" => "parameters" , "value" => $drupal_actions->get_parameters() , "type" => "bytea");
				}
			if ($drupal_actions->get_label_is_dirty())
				{
				$data[] = array("name" => "label" , "value" => $drupal_actions->get_label() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_actions',$drupal_actions->get_id()))
				{
				$result = $drupal_actions->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_actions',$drupal_actions->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_actions',$drupal_actions->get_id(),$application,$drupal_actions->get_id_save_location(),false);
				$drupal_actions->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_actions->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_actions',$drupal_actions->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_actions',$drupal_actions->get_id(),$application,$drupal_actions->get_id_save_location(),true);
				$drupal_actions->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_actions = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_actions = cls_table_factory::get_common_drupal_actions()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_actions))
				{
					$drupal_actions = cls_table_factory::create_instance('drupal_actions');
				}
			$drupal_actions->fill($data,false);
			return self::save_object($drupal_actions,$db_manager,$application);
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
				case "drupal_actions.aid":
					$counter++;
					break;
				case "aid":
					$counter++;
					break;
				case "drupal_actions.type":
					$counter++;
					break;
				case "type":
					$counter++;
					break;
				case "drupal_actions.callback":
					$counter++;
					break;
				case "callback":
					$counter++;
					break;
				case "drupal_actions.parameters":
					$counter++;
					break;
				case "parameters":
					$counter++;
					break;
				case "drupal_actions.label":
					$counter++;
					break;
				case "label":
					$counter++;
					break;
				case "drupal_actions.id":
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
