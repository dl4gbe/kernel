<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_person_state_type extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'person_state_type';
		}

	public static function save_object($person_state_type,$db_manager,$application)
		{
			if (is_null($person_state_type))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$person_state_type->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($person_state_type->get_id_contract_template_is_dirty())
				{
				$data[] = array("name" => "id_contract_template" , "value" => $person_state_type->get_id_contract_template() , "type" => "uuid");
				}
			if ($person_state_type->get_id_article_price_group_is_dirty())
				{
				$data[] = array("name" => "id_article_price_group" , "value" => $person_state_type->get_id_article_price_group() , "type" => "uuid");
				}
			if ($person_state_type->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $person_state_type->get_name() , "type" => "varchar");
				}
			if ($person_state_type->get_id_person_states_group_is_dirty())
				{
				$data[] = array("name" => "id_person_states_group" , "value" => $person_state_type->get_id_person_states_group() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('person_state_type',$person_state_type->get_id()))
				{
				$result = $person_state_type->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('person_state_type',$person_state_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('person_state_type',$person_state_type->get_id(),$application,$person_state_type->get_id_save_location(),false);
				$person_state_type->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $person_state_type->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('person_state_type',$person_state_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('person_state_type',$person_state_type->get_id(),$application,$person_state_type->get_id_save_location(),true);
				$person_state_type->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$person_state_type = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$person_state_type = cls_table_factory::get_common_person_state_type()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($person_state_type))
				{
					$person_state_type = cls_table_factory::create_instance('person_state_type');
				}
			$person_state_type->fill($data,false);
			return self::save_object($person_state_type,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 5;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "person_state_type.id_contract_template":
					$counter++;
					break;
				case "id_contract_template":
					$counter++;
					break;
				case "person_state_type.id_article_price_group":
					$counter++;
					break;
				case "id_article_price_group":
					$counter++;
					break;
				case "person_state_type.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "person_state_type.id_person_states_group":
					$counter++;
					break;
				case "id_person_states_group":
					$counter++;
					break;
				case "person_state_type.id":
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
