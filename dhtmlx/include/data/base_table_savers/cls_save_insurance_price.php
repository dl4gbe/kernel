<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_insurance_price extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'insurance_price';
		}

	public static function save_object($insurance_price,$db_manager,$application)
		{
			if (is_null($insurance_price))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$insurance_price->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($insurance_price->get_id_insurance_is_dirty())
				{
				$data[] = array("name" => "id_insurance" , "value" => $insurance_price->get_id_insurance() , "type" => "uuid");
				}
			if ($insurance_price->get_id_insurance_group_is_dirty())
				{
				$data[] = array("name" => "id_insurance_group" , "value" => $insurance_price->get_id_insurance_group() , "type" => "uuid");
				}
			if ($insurance_price->get_id_article_is_dirty())
				{
				$data[] = array("name" => "id_article" , "value" => $insurance_price->get_id_article() , "type" => "uuid");
				}
			if ($insurance_price->get_validfrom_is_dirty())
				{
				$data[] = array("name" => "validfrom" , "value" => $insurance_price->get_validfrom() , "type" => "date");
				}
			if ($insurance_price->get_price_is_dirty())
				{
				$data[] = array("name" => "price" , "value" => $insurance_price->get_price() , "type" => "money");
				}
			if ($insurance_price->get_onlyfornewprescriptions_is_dirty())
				{
				$data[] = array("name" => "onlyfornewprescriptions" , "value" => $insurance_price->get_onlyfornewprescriptions() , "type" => "bool");
				}
			if ($insurance_price->get_id_insurance_district_is_dirty())
				{
				$data[] = array("name" => "id_insurance_district" , "value" => $insurance_price->get_id_insurance_district() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('insurance_price',$insurance_price->get_id()))
				{
				$result = $insurance_price->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('insurance_price',$insurance_price->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$insurance_price->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $insurance_price->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('insurance_price',$insurance_price->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$insurance_price->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$insurance_price = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$insurance_price = cls_table_factory::get_common_insurance_price()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($insurance_price))
				{
					$insurance_price = cls_table_factory::create_instance('insurance_price');
				}
			$insurance_price->fill($data,false);
			return self::save_object($insurance_price,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 8;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "insurance_price.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "insurance_price.id_insurance":
					$counter++;
					break;
				case "id_insurance":
					$counter++;
					break;
				case "insurance_price.id_insurance_group":
					$counter++;
					break;
				case "id_insurance_group":
					$counter++;
					break;
				case "insurance_price.id_article":
					$counter++;
					break;
				case "id_article":
					$counter++;
					break;
				case "insurance_price.validfrom":
					$counter++;
					break;
				case "validfrom":
					$counter++;
					break;
				case "insurance_price.price":
					$counter++;
					break;
				case "price":
					$counter++;
					break;
				case "insurance_price.onlyfornewprescriptions":
					$counter++;
					break;
				case "onlyfornewprescriptions":
					$counter++;
					break;
				case "insurance_price.id_insurance_district":
					$counter++;
					break;
				case "id_insurance_district":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
