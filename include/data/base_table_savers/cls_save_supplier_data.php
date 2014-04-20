<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_supplier_data extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'supplier_data';
		}

	public static function save_object($supplier_data,$db_manager,$application)
		{
			if (is_null($supplier_data))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$supplier_data->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($supplier_data->get_remark_is_dirty())
				{
				$data[] = array("name" => "remark" , "value" => $supplier_data->get_remark() , "type" => "text");
				}
			if ($supplier_data->get_min_order_days_is_dirty())
				{
				$data[] = array("name" => "min_order_days" , "value" => $supplier_data->get_min_order_days() , "type" => "int4");
				}
			if ($supplier_data->get_min_order_qty_is_dirty())
				{
				$data[] = array("name" => "min_order_qty" , "value" => $supplier_data->get_min_order_qty() , "type" => "int4");
				}
			if ($supplier_data->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $supplier_data->get_name() , "type" => "varchar");
				}
			if ($supplier_data->get_orderno_is_dirty())
				{
				$data[] = array("name" => "orderno" , "value" => $supplier_data->get_orderno() , "type" => "varchar");
				}
			if ($supplier_data->get_id_data_is_dirty())
				{
				$data[] = array("name" => "id_data" , "value" => $supplier_data->get_id_data() , "type" => "uuid");
				}
			if ($supplier_data->get_id_person_manufactorer_is_dirty())
				{
				$data[] = array("name" => "id_person_manufactorer" , "value" => $supplier_data->get_id_person_manufactorer() , "type" => "uuid");
				}
			if ($supplier_data->get_id_person_supplier_is_dirty())
				{
				$data[] = array("name" => "id_person_supplier" , "value" => $supplier_data->get_id_person_supplier() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('supplier_data',$supplier_data->get_id()))
				{
				$result = $supplier_data->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('supplier_data',$supplier_data->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('supplier_data',$supplier_data->get_id(),$application,$supplier_data->get_id_save_location(),false);
				$supplier_data->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $supplier_data->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('supplier_data',$supplier_data->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('supplier_data',$supplier_data->get_id(),$application,$supplier_data->get_id_save_location(),true);
				$supplier_data->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$supplier_data = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$supplier_data = cls_table_factory::get_common_supplier_data()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($supplier_data))
				{
					$supplier_data = cls_table_factory::create_instance('supplier_data');
				}
			$supplier_data->fill($data,false);
			return self::save_object($supplier_data,$db_manager,$application);
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
				case "supplier_data.remark":
					$counter++;
					break;
				case "remark":
					$counter++;
					break;
				case "supplier_data.min_order_days":
					$counter++;
					break;
				case "min_order_days":
					$counter++;
					break;
				case "supplier_data.min_order_qty":
					$counter++;
					break;
				case "min_order_qty":
					$counter++;
					break;
				case "supplier_data.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "supplier_data.orderno":
					$counter++;
					break;
				case "orderno":
					$counter++;
					break;
				case "supplier_data.id_data":
					$counter++;
					break;
				case "id_data":
					$counter++;
					break;
				case "supplier_data.id_person_manufactorer":
					$counter++;
					break;
				case "id_person_manufactorer":
					$counter++;
					break;
				case "supplier_data.id_person_supplier":
					$counter++;
					break;
				case "id_person_supplier":
					$counter++;
					break;
				case "supplier_data.id":
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
