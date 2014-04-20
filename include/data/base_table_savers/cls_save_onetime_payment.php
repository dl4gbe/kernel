<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_onetime_payment extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'onetime_payment';
		}

	public static function save_object($onetime_payment,$db_manager,$application)
		{
			if (is_null($onetime_payment))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$onetime_payment->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($onetime_payment->get_price_is_dirty())
				{
				$data[] = array("name" => "price" , "value" => $onetime_payment->get_price() , "type" => "money");
				}
			if ($onetime_payment->get_id_article_is_dirty())
				{
				$data[] = array("name" => "id_article" , "value" => $onetime_payment->get_id_article() , "type" => "uuid");
				}
			if ($onetime_payment->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $onetime_payment->get_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('onetime_payment',$onetime_payment->get_id()))
				{
				$result = $onetime_payment->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('onetime_payment',$onetime_payment->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('onetime_payment',$onetime_payment->get_id(),$application,$onetime_payment->get_id_save_location(),false);
				$onetime_payment->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $onetime_payment->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('onetime_payment',$onetime_payment->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('onetime_payment',$onetime_payment->get_id(),$application,$onetime_payment->get_id_save_location(),true);
				$onetime_payment->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$onetime_payment = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$onetime_payment = cls_table_factory::get_common_onetime_payment()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($onetime_payment))
				{
					$onetime_payment = cls_table_factory::create_instance('onetime_payment');
				}
			$onetime_payment->fill($data,false);
			return self::save_object($onetime_payment,$db_manager,$application);
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
				case "onetime_payment.price":
					$counter++;
					break;
				case "price":
					$counter++;
					break;
				case "onetime_payment.id_article":
					$counter++;
					break;
				case "id_article":
					$counter++;
					break;
				case "onetime_payment.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "onetime_payment.id":
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
