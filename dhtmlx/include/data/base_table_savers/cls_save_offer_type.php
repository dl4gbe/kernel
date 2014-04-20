<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_offer_type extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'offer_type';
		}

	public static function save_object($offer_type,$db_manager,$application)
		{
			if (is_null($offer_type))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$offer_type->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($offer_type->get_type_is_dirty())
				{
				$data[] = array("name" => "type" , "value" => $offer_type->get_type() , "type" => "bpchar");
				}
			if ($offer_type->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $offer_type->get_name() , "type" => "varchar");
				}
			if ($offer_type->get_id_article_base_is_dirty())
				{
				$data[] = array("name" => "id_article_base" , "value" => $offer_type->get_id_article_base() , "type" => "uuid");
				}
			if ($offer_type->get_id_article_visit_is_dirty())
				{
				$data[] = array("name" => "id_article_visit" , "value" => $offer_type->get_id_article_visit() , "type" => "uuid");
				}
			if ($offer_type->get_id_article_transport_is_dirty())
				{
				$data[] = array("name" => "id_article_transport" , "value" => $offer_type->get_id_article_transport() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('offer_type',$offer_type->get_id()))
				{
				$result = $offer_type->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('offer_type',$offer_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('offer_type',$offer_type->get_id(),$application,$offer_type->get_id_save_location(),false);
				$offer_type->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $offer_type->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('offer_type',$offer_type->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('offer_type',$offer_type->get_id(),$application,$offer_type->get_id_save_location(),true);
				$offer_type->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$offer_type = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$offer_type = cls_table_factory::get_common_offer_type()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($offer_type))
				{
					$offer_type = cls_table_factory::create_instance('offer_type');
				}
			$offer_type->fill($data,false);
			return self::save_object($offer_type,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 6;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "offer_type.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "offer_type.type":
					$counter++;
					break;
				case "type":
					$counter++;
					break;
				case "offer_type.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "offer_type.id_article_base":
					$counter++;
					break;
				case "id_article_base":
					$counter++;
					break;
				case "offer_type.id_article_visit":
					$counter++;
					break;
				case "id_article_visit":
					$counter++;
					break;
				case "offer_type.id_article_transport":
					$counter++;
					break;
				case "id_article_transport":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
