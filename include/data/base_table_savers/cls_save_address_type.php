<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_address_type extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'address_type';
		}

	public static function save_object($address_type,$db_manager,$application)
		{
			if (is_null($address_type))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$address_type->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($address_type->get_restrictions_is_dirty())
				{
				$data[] = array("name" => "restrictions" , "value" => $address_type->get_restrictions() , "type" => "varchar");
				}
			if ($address_type->get_active_is_dirty())
				{
				$data[] = array("name" => "active" , "value" => $address_type->get_active() , "type" => "bool");
				}
			if ($address_type->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $address_type->get_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('address_type',$address_type->get_id()))
				{
				$result = $address_type->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('address_type',$address_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$address_type->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $address_type->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('address_type',$address_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$address_type->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$address_type = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$address_type = cls_table_factory::get_common_address_type()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($address_type))
				{
					$address_type = cls_table_factory::create_instance('address_type');
				}
			$address_type->fill($data,false);
			return self::save_object($address_type,$db_manager,$application);
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
				case "address_type.restrictions":
					$counter++;
					break;
				case "restrictions":
					$counter++;
					break;
				case "address_type.active":
					$counter++;
					break;
				case "active":
					$counter++;
					break;
				case "address_type.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "address_type.id":
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
