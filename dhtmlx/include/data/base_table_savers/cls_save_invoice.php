<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_invoice extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'invoice';
		}

	public static function save_object($invoice,$db_manager,$application)
		{
			if (is_null($invoice))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$invoice->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($invoice->get_id_person_is_dirty())
				{
				$data[] = array("name" => "id_person" , "value" => $invoice->get_id_person() , "type" => "uuid");
				}
			if ($invoice->get_invoiceno_is_dirty())
				{
				$data[] = array("name" => "invoiceno" , "value" => $invoice->get_invoiceno() , "type" => "varchar");
				}
			if ($invoice->get_invoicedate_is_dirty())
				{
				$data[] = array("name" => "invoicedate" , "value" => $invoice->get_invoicedate() , "type" => "date");
				}
			if ($invoice->get_id_person_employee_is_dirty())
				{
				$data[] = array("name" => "id_person_employee" , "value" => $invoice->get_id_person_employee() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('invoice',$invoice->get_id()))
				{
				$result = $invoice->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('invoice',$invoice->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('invoice',$invoice->get_id(),$application,$invoice->get_id_save_location(),false);
				$invoice->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $invoice->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('invoice',$invoice->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('invoice',$invoice->get_id(),$application,$invoice->get_id_save_location(),true);
				$invoice->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$invoice = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$invoice = cls_table_factory::get_common_invoice()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($invoice))
				{
					$invoice = cls_table_factory::create_instance('invoice');
				}
			$invoice->fill($data,false);
			return self::save_object($invoice,$db_manager,$application);
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
				case "invoice.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "invoice.id_person":
					$counter++;
					break;
				case "id_person":
					$counter++;
					break;
				case "invoice.invoiceno":
					$counter++;
					break;
				case "invoiceno":
					$counter++;
					break;
				case "invoice.invoicedate":
					$counter++;
					break;
				case "invoicedate":
					$counter++;
					break;
				case "invoice.id_person_employee":
					$counter++;
					break;
				case "id_person_employee":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
