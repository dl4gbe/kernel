<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_insurance extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'insurance';
		}

	public static function save_object($insurance,$db_manager,$application)
		{
			if (is_null($insurance))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$insurance->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($insurance->get_ik_is_dirty())
				{
				$data[] = array("name" => "ik" , "value" => $insurance->get_ik() , "type" => "varchar");
				}
			if ($insurance->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $insurance->get_name() , "type" => "varchar");
				}
			if ($insurance->get_id_person_is_dirty())
				{
				$data[] = array("name" => "id_person" , "value" => $insurance->get_id_person() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('insurance',$insurance->get_id()))
				{
				$result = $insurance->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('insurance',$insurance->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$insurance->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $insurance->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('insurance',$insurance->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$insurance->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$insurance = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$insurance = cls_table_factory::get_common_insurance()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($insurance))
				{
					$insurance = cls_table_factory::create_instance('insurance');
				}
			$insurance->fill($data,false);
			return self::save_object($insurance,$db_manager,$application);
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
				case "insurance.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "insurance.ik":
					$counter++;
					break;
				case "ik":
					$counter++;
					break;
				case "insurance.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "insurance.id_person":
					$counter++;
					break;
				case "id_person":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
