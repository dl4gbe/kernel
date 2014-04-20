<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_country extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'country';
		}

	public static function save_object($country,$db_manager,$application)
		{
			if (is_null($country))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$country->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($country->get_alpha2_is_dirty())
				{
				$data[] = array("name" => "alpha2" , "value" => $country->get_alpha2() , "type" => "bpchar");
				}
			if ($country->get_alpha3_is_dirty())
				{
				$data[] = array("name" => "alpha3" , "value" => $country->get_alpha3() , "type" => "bpchar");
				}
			if ($country->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $country->get_name() , "type" => "varchar");
				}
			if ($country->get_nationality_is_dirty())
				{
				$data[] = array("name" => "nationality" , "value" => $country->get_nationality() , "type" => "varchar");
				}
			if ($country->get_countrycode_is_dirty())
				{
				$data[] = array("name" => "countrycode" , "value" => $country->get_countrycode() , "type" => "varchar");
				}
			if ($country->get_orderno_is_dirty())
				{
				$data[] = array("name" => "orderno" , "value" => $country->get_orderno() , "type" => "int4");
				}
			if ($country->get_display_is_dirty())
				{
				$data[] = array("name" => "display" , "value" => $country->get_display() , "type" => "bool");
				}
			if ($country->get_ibanlength_is_dirty())
				{
				$data[] = array("name" => "ibanlength" , "value" => $country->get_ibanlength() , "type" => "int4");
				}
			if ($country->get_sepa_is_dirty())
				{
				$data[] = array("name" => "sepa" , "value" => $country->get_sepa() , "type" => "bool");
				}
			if ($country->get_currency_is_dirty())
				{
				$data[] = array("name" => "currency" , "value" => $country->get_currency() , "type" => "varchar");
				}
			if ($country->get_id_chart_of_account_default_is_dirty())
				{
				$data[] = array("name" => "id_chart_of_account_default" , "value" => $country->get_id_chart_of_account_default() , "type" => "uuid");
				}
			if ($country->get_open_geo_db_id_is_dirty())
				{
				$data[] = array("name" => "open_geo_db_id" , "value" => $country->get_open_geo_db_id() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('country',$country->get_id()))
				{
				$result = $country->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('country',$country->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$country->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $country->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('country',$country->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$country->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$country = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$country = cls_table_factory::get_common_country()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($country))
				{
					$country = cls_table_factory::create_instance('country');
				}
			$country->fill($data,false);
			return self::save_object($country,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 13;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "country.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "country.alpha2":
					$counter++;
					break;
				case "alpha2":
					$counter++;
					break;
				case "country.alpha3":
					$counter++;
					break;
				case "alpha3":
					$counter++;
					break;
				case "country.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "country.nationality":
					$counter++;
					break;
				case "nationality":
					$counter++;
					break;
				case "country.countrycode":
					$counter++;
					break;
				case "countrycode":
					$counter++;
					break;
				case "country.orderno":
					$counter++;
					break;
				case "orderno":
					$counter++;
					break;
				case "country.display":
					$counter++;
					break;
				case "display":
					$counter++;
					break;
				case "country.ibanlength":
					$counter++;
					break;
				case "ibanlength":
					$counter++;
					break;
				case "country.sepa":
					$counter++;
					break;
				case "sepa":
					$counter++;
					break;
				case "country.currency":
					$counter++;
					break;
				case "currency":
					$counter++;
					break;
				case "country.id_chart_of_account_default":
					$counter++;
					break;
				case "id_chart_of_account_default":
					$counter++;
					break;
				case "country.open_geo_db_id":
					$counter++;
					break;
				case "open_geo_db_id":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
