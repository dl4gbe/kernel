<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_data_relation extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'data_relation';
		}

	public static function save_object($data_relation,$db_manager,$application)
		{
			if (is_null($data_relation))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$data_relation->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($data_relation->get_id_data_relation_type_is_dirty())
				{
				$data[] = array("name" => "id_data_relation_type" , "value" => $data_relation->get_id_data_relation_type() , "type" => "uuid");
				}
			if ($data_relation->get_id_data1_is_dirty())
				{
				$data[] = array("name" => "id_data1" , "value" => $data_relation->get_id_data1() , "type" => "uuid");
				}
			if ($data_relation->get_id_data2_is_dirty())
				{
				$data[] = array("name" => "id_data2" , "value" => $data_relation->get_id_data2() , "type" => "uuid");
				}
			if ($data_relation->get_id_data_relation_type_vals_is_dirty())
				{
				$data[] = array("name" => "id_data_relation_type_vals" , "value" => $data_relation->get_id_data_relation_type_vals() , "type" => "uuid");
				}
			if ($data_relation->get_remark_is_dirty())
				{
				$data[] = array("name" => "remark" , "value" => $data_relation->get_remark() , "type" => "varchar");
				}
			if ($data_relation->get_active_is_dirty())
				{
				$data[] = array("name" => "active" , "value" => $data_relation->get_active() , "type" => "bool");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('data_relation',$data_relation->get_id()))
				{
				$result = $data_relation->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('data_relation',$data_relation->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('data_relation',$data_relation->get_id(),$application,$data_relation->get_id_save_location(),false);
				$data_relation->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $data_relation->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('data_relation',$data_relation->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('data_relation',$data_relation->get_id(),$application,$data_relation->get_id_save_location(),true);
				$data_relation->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$data_relation = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$data_relation = cls_table_factory::get_common_data_relation()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($data_relation))
				{
					$data_relation = cls_table_factory::create_instance('data_relation');
				}
			$data_relation->fill($data,false);
			return self::save_object($data_relation,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 7;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "data_relation.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "data_relation.id_data_relation_type":
					$counter++;
					break;
				case "id_data_relation_type":
					$counter++;
					break;
				case "data_relation.id_data1":
					$counter++;
					break;
				case "id_data1":
					$counter++;
					break;
				case "data_relation.id_data2":
					$counter++;
					break;
				case "id_data2":
					$counter++;
					break;
				case "data_relation.id_data_relation_type_vals":
					$counter++;
					break;
				case "id_data_relation_type_vals":
					$counter++;
					break;
				case "data_relation.remark":
					$counter++;
					break;
				case "remark":
					$counter++;
					break;
				case "data_relation.active":
					$counter++;
					break;
				case "active":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
