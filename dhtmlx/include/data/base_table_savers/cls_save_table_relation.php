<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_table_relation extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'table_relation';
		}

	public static function save_object($table_relation,$db_manager,$application)
		{
			if (is_null($table_relation))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$table_relation->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($table_relation->get_table_name_parent_is_dirty())
				{
				$data[] = array("name" => "table_name_parent" , "value" => $table_relation->get_table_name_parent() , "type" => "varchar");
				}
			if ($table_relation->get_parent_table_field_is_dirty())
				{
				$data[] = array("name" => "parent_table_field" , "value" => $table_relation->get_parent_table_field() , "type" => "varchar");
				}
			if ($table_relation->get_table_name_child_is_dirty())
				{
				$data[] = array("name" => "table_name_child" , "value" => $table_relation->get_table_name_child() , "type" => "varchar");
				}
			if ($table_relation->get_child_table_field_is_dirty())
				{
				$data[] = array("name" => "child_table_field" , "value" => $table_relation->get_child_table_field() , "type" => "varchar");
				}
			if ($table_relation->get_activ_is_dirty())
				{
				$data[] = array("name" => "activ" , "value" => $table_relation->get_activ() , "type" => "bool");
				}
			if ($table_relation->get_remark_is_dirty())
				{
				$data[] = array("name" => "remark" , "value" => $table_relation->get_remark() , "type" => "varchar");
				}
			if ($table_relation->get_alias_is_dirty())
				{
				$data[] = array("name" => "alias" , "value" => $table_relation->get_alias() , "type" => "varchar");
				}
			if ($table_relation->get_one_to_many_is_dirty())
				{
				$data[] = array("name" => "one_to_many" , "value" => $table_relation->get_one_to_many() , "type" => "bool");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('table_relation',$table_relation->get_id()))
				{
				$result = $table_relation->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('table_relation',$table_relation->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('table_relation',$table_relation->get_id(),$application,$table_relation->get_id_save_location(),false);
				$table_relation->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $table_relation->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('table_relation',$table_relation->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('table_relation',$table_relation->get_id(),$application,$table_relation->get_id_save_location(),true);
				$table_relation->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$table_relation = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$table_relation = cls_table_factory::get_common_table_relation()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($table_relation))
				{
					$table_relation = cls_table_factory::create_instance('table_relation');
				}
			$table_relation->fill($data,false);
			return self::save_object($table_relation,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 9;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "table_relation.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "table_relation.table_name_parent":
					$counter++;
					break;
				case "table_name_parent":
					$counter++;
					break;
				case "table_relation.parent_table_field":
					$counter++;
					break;
				case "parent_table_field":
					$counter++;
					break;
				case "table_relation.table_name_child":
					$counter++;
					break;
				case "table_name_child":
					$counter++;
					break;
				case "table_relation.child_table_field":
					$counter++;
					break;
				case "child_table_field":
					$counter++;
					break;
				case "table_relation.activ":
					$counter++;
					break;
				case "activ":
					$counter++;
					break;
				case "table_relation.remark":
					$counter++;
					break;
				case "remark":
					$counter++;
					break;
				case "table_relation.alias":
					$counter++;
					break;
				case "alias":
					$counter++;
					break;
				case "table_relation.one_to_many":
					$counter++;
					break;
				case "one_to_many":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
