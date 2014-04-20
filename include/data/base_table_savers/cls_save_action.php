<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_action extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'action';
		}

	public static function save_object($action,$db_manager,$application)
		{
			if (is_null($action))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$action->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($action->get_key_is_dirty())
				{
				$data[] = array("name" => "key" , "value" => $action->get_key() , "type" => "varchar");
				}
			if ($action->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $action->get_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('action',$action->get_id()))
				{
				$result = $action->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('action',$action->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('action',$action->get_id(),$application,$action->get_id_save_location(),false);
				$action->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $action->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('action',$action->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('action',$action->get_id(),$application,$action->get_id_save_location(),true);
				$action->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$action = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$action = cls_table_factory::get_common_action()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($action))
				{
					$action = cls_table_factory::create_instance('action');
				}
			$action->fill($data,false);
			return self::save_object($action,$db_manager,$application);
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
				case "action.key":
					$counter++;
					break;
				case "key":
					$counter++;
					break;
				case "action.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "action.id":
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
