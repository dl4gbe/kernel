<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_supplier_price extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'supplier_price';
		}

	public static function save_object($supplier_price,$db_manager,$application)
		{
			if (is_null($supplier_price))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$supplier_price->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($supplier_price->get_valid_from_is_dirty())
				{
				$data[] = array("name" => "valid_from" , "value" => $supplier_price->get_valid_from() , "type" => "date");
				}
			if ($supplier_price->get_price_is_dirty())
				{
				$data[] = array("name" => "price" , "value" => $supplier_price->get_price() , "type" => "money");
				}
			if ($supplier_price->get_qty_is_dirty())
				{
				$data[] = array("name" => "qty" , "value" => $supplier_price->get_qty() , "type" => "int4");
				}
			if ($supplier_price->get_id_supplier_data_is_dirty())
				{
				$data[] = array("name" => "id_supplier_data" , "value" => $supplier_price->get_id_supplier_data() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('supplier_price',$supplier_price->get_id()))
				{
				$result = $supplier_price->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('supplier_price',$supplier_price->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('supplier_price',$supplier_price->get_id(),$application,$supplier_price->get_id_save_location(),false);
				$supplier_price->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $supplier_price->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('supplier_price',$supplier_price->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('supplier_price',$supplier_price->get_id(),$application,$supplier_price->get_id_save_location(),true);
				$supplier_price->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$supplier_price = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$supplier_price = cls_table_factory::get_common_supplier_price()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($supplier_price))
				{
					$supplier_price = cls_table_factory::create_instance('supplier_price');
				}
			$supplier_price->fill($data,false);
			return self::save_object($supplier_price,$db_manager,$application);
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
				case "supplier_price.valid_from":
					$counter++;
					break;
				case "valid_from":
					$counter++;
					break;
				case "supplier_price.price":
					$counter++;
					break;
				case "price":
					$counter++;
					break;
				case "supplier_price.qty":
					$counter++;
					break;
				case "qty":
					$counter++;
					break;
				case "supplier_price.id_supplier_data":
					$counter++;
					break;
				case "id_supplier_data":
					$counter++;
					break;
				case "supplier_price.id":
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
