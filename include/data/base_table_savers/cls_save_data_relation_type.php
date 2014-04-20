<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_data_relation_type extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'data_relation_type';
		}

	public static function save_object($data_relation_type,$db_manager,$application)
		{
			if (is_null($data_relation_type))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$data_relation_type->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($data_relation_type->get_basetype_is_dirty())
				{
				$data[] = array("name" => "basetype" , "value" => $data_relation_type->get_basetype() , "type" => "bpchar");
				}
			if ($data_relation_type->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $data_relation_type->get_name() , "type" => "varchar");
				}
			if ($data_relation_type->get_tablename_is_dirty())
				{
				$data[] = array("name" => "tablename" , "value" => $data_relation_type->get_tablename() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('data_relation_type',$data_relation_type->get_id()))
				{
				$result = $data_relation_type->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('data_relation_type',$data_relation_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$data_relation_type->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $data_relation_type->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('data_relation_type',$data_relation_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$data_relation_type->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$data_relation_type = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$data_relation_type = cls_table_factory::get_common_data_relation_type()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($data_relation_type))
				{
					$data_relation_type = cls_table_factory::create_instance('data_relation_type');
				}
			$data_relation_type->fill($data,false);
			return self::save_object($data_relation_type,$db_manager,$application);
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
				case "data_relation_type.basetype":
					$counter++;
					break;
				case "basetype":
					$counter++;
					break;
				case "data_relation_type.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "data_relation_type.tablename":
					$counter++;
					break;
				case "tablename":
					$counter++;
					break;
				case "data_relation_type.id":
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
