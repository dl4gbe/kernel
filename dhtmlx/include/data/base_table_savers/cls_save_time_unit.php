<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_time_unit extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'time_unit';
		}

	public static function save_object($time_unit,$db_manager,$application)
		{
			if (is_null($time_unit))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$time_unit->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($time_unit->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $time_unit->get_name() , "type" => "varchar");
				}
			if ($time_unit->get_unit_is_dirty())
				{
				$data[] = array("name" => "unit" , "value" => $time_unit->get_unit() , "type" => "int4");
				}
			if ($time_unit->get_unittype_is_dirty())
				{
				$data[] = array("name" => "unittype" , "value" => $time_unit->get_unittype() , "type" => "bpchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('time_unit',$time_unit->get_id()))
				{
				$result = $time_unit->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('time_unit',$time_unit->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$time_unit->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $time_unit->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('time_unit',$time_unit->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$time_unit->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$time_unit = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$time_unit = cls_table_factory::get_common_time_unit()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($time_unit))
				{
					$time_unit = cls_table_factory::create_instance('time_unit');
				}
			$time_unit->fill($data,false);
			return self::save_object($time_unit,$db_manager,$application);
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
				case "time_unit.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "time_unit.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "time_unit.unit":
					$counter++;
					break;
				case "unit":
					$counter++;
					break;
				case "time_unit.unittype":
					$counter++;
					break;
				case "unittype":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
