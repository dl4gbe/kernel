<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_dms_type extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'dms_type';
		}

	public static function save_object($dms_type,$db_manager,$application)
		{
			if (is_null($dms_type))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$dms_type->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($dms_type->get_suffix_is_dirty())
				{
				$data[] = array("name" => "suffix" , "value" => $dms_type->get_suffix() , "type" => "varchar");
				}
			if ($dms_type->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $dms_type->get_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('dms_type',$dms_type->get_id()))
				{
				$result = $dms_type->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('dms_type',$dms_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$dms_type->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $dms_type->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('dms_type',$dms_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$dms_type->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$dms_type = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$dms_type = cls_table_factory::get_common_dms_type()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($dms_type))
				{
					$dms_type = cls_table_factory::create_instance('dms_type');
				}
			$dms_type->fill($data,false);
			return self::save_object($dms_type,$db_manager,$application);
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
				case "dms_type.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "dms_type.suffix":
					$counter++;
					break;
				case "suffix":
					$counter++;
					break;
				case "dms_type.name":
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
