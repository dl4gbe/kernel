<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_address extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'address';
		}

	public static function save_object($address,$db_manager,$application)
		{
			if (is_null($address))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$address->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($address->get_open_geo_db_id_is_dirty())
				{
				$data[] = array("name" => "open_geo_db_id" , "value" => $address->get_open_geo_db_id() , "type" => "int4");
				}
			if ($address->get_lon_is_dirty())
				{
				$data[] = array("name" => "lon" , "value" => $address->get_lon() , "type" => "float8");
				}
			if ($address->get_lat_is_dirty())
				{
				$data[] = array("name" => "lat" , "value" => $address->get_lat() , "type" => "float8");
				}
			if ($address->get_id_address_type_is_dirty())
				{
				$data[] = array("name" => "id_address_type" , "value" => $address->get_id_address_type() , "type" => "uuid");
				}
			if ($address->get_main_is_dirty())
				{
				$data[] = array("name" => "main" , "value" => $address->get_main() , "type" => "bool");
				}
			if ($address->get_id_country_is_dirty())
				{
				$data[] = array("name" => "id_country" , "value" => $address->get_id_country() , "type" => "uuid");
				}
			if ($address->get_city_is_dirty())
				{
				$data[] = array("name" => "city" , "value" => $address->get_city() , "type" => "varchar");
				}
			if ($address->get_zip_is_dirty())
				{
				$data[] = array("name" => "zip" , "value" => $address->get_zip() , "type" => "varchar");
				}
			if ($address->get_address2_is_dirty())
				{
				$data[] = array("name" => "address2" , "value" => $address->get_address2() , "type" => "varchar");
				}
			if ($address->get_address1_is_dirty())
				{
				$data[] = array("name" => "address1" , "value" => $address->get_address1() , "type" => "varchar");
				}
			if ($address->get_id_data_is_dirty())
				{
				$data[] = array("name" => "id_data" , "value" => $address->get_id_data() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('address',$address->get_id()))
				{
				$result = $address->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('address',$address->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('address',$address->get_id(),$application,$address->get_id_save_location(),false);
				$address->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $address->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('address',$address->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('address',$address->get_id(),$application,$address->get_id_save_location(),true);
				$address->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$address = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$address = cls_table_factory::get_common_address()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($address))
				{
					$address = cls_table_factory::create_instance('address');
				}
			$address->fill($data,false);
			return self::save_object($address,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 12;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "address.open_geo_db_id":
					$counter++;
					break;
				case "open_geo_db_id":
					$counter++;
					break;
				case "address.lon":
					$counter++;
					break;
				case "lon":
					$counter++;
					break;
				case "address.lat":
					$counter++;
					break;
				case "lat":
					$counter++;
					break;
				case "address.id_address_type":
					$counter++;
					break;
				case "id_address_type":
					$counter++;
					break;
				case "address.main":
					$counter++;
					break;
				case "main":
					$counter++;
					break;
				case "address.id_country":
					$counter++;
					break;
				case "id_country":
					$counter++;
					break;
				case "address.city":
					$counter++;
					break;
				case "city":
					$counter++;
					break;
				case "address.zip":
					$counter++;
					break;
				case "zip":
					$counter++;
					break;
				case "address.address2":
					$counter++;
					break;
				case "address2":
					$counter++;
					break;
				case "address.address1":
					$counter++;
					break;
				case "address1":
					$counter++;
					break;
				case "address.id_data":
					$counter++;
					break;
				case "id_data":
					$counter++;
					break;
				case "address.id":
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
