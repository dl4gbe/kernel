<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_data_property_type extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'data_property_type';
		}

	public static function save_object($data_property_type,$db_manager,$application)
		{
			if (is_null($data_property_type))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$data_property_type->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($data_property_type->get_tablename_is_dirty())
				{
				$data[] = array("name" => "tablename" , "value" => $data_property_type->get_tablename() , "type" => "varchar");
				}
			if ($data_property_type->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $data_property_type->get_name() , "type" => "varchar");
				}
			if ($data_property_type->get_datatype_is_dirty())
				{
				$data[] = array("name" => "datatype" , "value" => $data_property_type->get_datatype() , "type" => "bpchar");
				}
			if ($data_property_type->get_id_person_states_is_dirty())
				{
				$data[] = array("name" => "id_person_states" , "value" => $data_property_type->get_id_person_states() , "type" => "uuid");
				}
			if ($data_property_type->get_defaultvalue_is_dirty())
				{
				$data[] = array("name" => "defaultvalue" , "value" => $data_property_type->get_defaultvalue() , "type" => "varchar");
				}
			if ($data_property_type->get_active_is_dirty())
				{
				$data[] = array("name" => "active" , "value" => $data_property_type->get_active() , "type" => "bool");
				}
			if ($data_property_type->get_lookuptablename_is_dirty())
				{
				$data[] = array("name" => "lookuptablename" , "value" => $data_property_type->get_lookuptablename() , "type" => "varchar");
				}
			if ($data_property_type->get_lookuptable_idfield_is_dirty())
				{
				$data[] = array("name" => "lookuptable_idfield" , "value" => $data_property_type->get_lookuptable_idfield() , "type" => "varchar");
				}
			if ($data_property_type->get_lookuptable_namefield1_is_dirty())
				{
				$data[] = array("name" => "lookuptable_namefield1" , "value" => $data_property_type->get_lookuptable_namefield1() , "type" => "varchar");
				}
			if ($data_property_type->get_lookuptable_namefield2_is_dirty())
				{
				$data[] = array("name" => "lookuptable_namefield2" , "value" => $data_property_type->get_lookuptable_namefield2() , "type" => "varchar");
				}
			if ($data_property_type->get_lookuptable_namefield3_is_dirty())
				{
				$data[] = array("name" => "lookuptable_namefield3" , "value" => $data_property_type->get_lookuptable_namefield3() , "type" => "varchar");
				}
			if ($data_property_type->get_lookuptable_namefield4_is_dirty())
				{
				$data[] = array("name" => "lookuptable_namefield4" , "value" => $data_property_type->get_lookuptable_namefield4() , "type" => "varchar");
				}
			if ($data_property_type->get_lookuptable_namefield5_is_dirty())
				{
				$data[] = array("name" => "lookuptable_namefield5" , "value" => $data_property_type->get_lookuptable_namefield5() , "type" => "varchar");
				}
			if ($data_property_type->get_lookuptable_wherecondition_is_dirty())
				{
				$data[] = array("name" => "lookuptable_wherecondition" , "value" => $data_property_type->get_lookuptable_wherecondition() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('data_property_type',$data_property_type->get_id()))
				{
				$result = $data_property_type->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('data_property_type',$data_property_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$data_property_type->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $data_property_type->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('data_property_type',$data_property_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$data_property_type->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$data_property_type = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$data_property_type = cls_table_factory::get_common_data_property_type()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($data_property_type))
				{
					$data_property_type = cls_table_factory::create_instance('data_property_type');
				}
			$data_property_type->fill($data,false);
			return self::save_object($data_property_type,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 15;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "data_property_type.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "data_property_type.tablename":
					$counter++;
					break;
				case "tablename":
					$counter++;
					break;
				case "data_property_type.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "data_property_type.datatype":
					$counter++;
					break;
				case "datatype":
					$counter++;
					break;
				case "data_property_type.id_person_states":
					$counter++;
					break;
				case "id_person_states":
					$counter++;
					break;
				case "data_property_type.defaultvalue":
					$counter++;
					break;
				case "defaultvalue":
					$counter++;
					break;
				case "data_property_type.active":
					$counter++;
					break;
				case "active":
					$counter++;
					break;
				case "data_property_type.lookuptablename":
					$counter++;
					break;
				case "lookuptablename":
					$counter++;
					break;
				case "data_property_type.lookuptable_idfield":
					$counter++;
					break;
				case "lookuptable_idfield":
					$counter++;
					break;
				case "data_property_type.lookuptable_namefield1":
					$counter++;
					break;
				case "lookuptable_namefield1":
					$counter++;
					break;
				case "data_property_type.lookuptable_namefield2":
					$counter++;
					break;
				case "lookuptable_namefield2":
					$counter++;
					break;
				case "data_property_type.lookuptable_namefield3":
					$counter++;
					break;
				case "lookuptable_namefield3":
					$counter++;
					break;
				case "data_property_type.lookuptable_namefield4":
					$counter++;
					break;
				case "lookuptable_namefield4":
					$counter++;
					break;
				case "data_property_type.lookuptable_namefield5":
					$counter++;
					break;
				case "lookuptable_namefield5":
					$counter++;
					break;
				case "data_property_type.lookuptable_wherecondition":
					$counter++;
					break;
				case "lookuptable_wherecondition":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
