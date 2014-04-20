<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_insurance_group extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'insurance_group';
		}

	public static function save_object($insurance_group,$db_manager,$application)
		{
			if (is_null($insurance_group))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$insurance_group->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($insurance_group->get_no_is_dirty())
				{
				$data[] = array("name" => "no" , "value" => $insurance_group->get_no() , "type" => "varchar");
				}
			if ($insurance_group->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $insurance_group->get_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('insurance_group',$insurance_group->get_id()))
				{
				$result = $insurance_group->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('insurance_group',$insurance_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$insurance_group->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $insurance_group->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('insurance_group',$insurance_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$insurance_group->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$insurance_group = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$insurance_group = cls_table_factory::get_common_insurance_group()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($insurance_group))
				{
					$insurance_group = cls_table_factory::create_instance('insurance_group');
				}
			$insurance_group->fill($data,false);
			return self::save_object($insurance_group,$db_manager,$application);
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
				case "insurance_group.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "insurance_group.no":
					$counter++;
					break;
				case "no":
					$counter++;
					break;
				case "insurance_group.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
