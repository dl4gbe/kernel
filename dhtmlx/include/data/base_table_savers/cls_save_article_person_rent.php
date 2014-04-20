<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_article_person_rent extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'article_person_rent';
		}

	public static function save_object($article_person_rent,$db_manager,$application)
		{
			if (is_null($article_person_rent))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$article_person_rent->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($article_person_rent->get_id_article_is_dirty())
				{
				$data[] = array("name" => "id_article" , "value" => $article_person_rent->get_id_article() , "type" => "uuid");
				}
			if ($article_person_rent->get_id_person_is_dirty())
				{
				$data[] = array("name" => "id_person" , "value" => $article_person_rent->get_id_person() , "type" => "uuid");
				}
			if ($article_person_rent->get_datefrom_is_dirty())
				{
				$data[] = array("name" => "datefrom" , "value" => $article_person_rent->get_datefrom() , "type" => "timestamptz");
				}
			if ($article_person_rent->get_datetil_is_dirty())
				{
				$data[] = array("name" => "datetil" , "value" => $article_person_rent->get_datetil() , "type" => "timestamptz");
				}
			if ($article_person_rent->get_id_posting_header_is_dirty())
				{
				$data[] = array("name" => "id_posting_header" , "value" => $article_person_rent->get_id_posting_header() , "type" => "uuid");
				}
			if ($article_person_rent->get_id_person_employee_issued_is_dirty())
				{
				$data[] = array("name" => "id_person_employee_issued" , "value" => $article_person_rent->get_id_person_employee_issued() , "type" => "uuid");
				}
			if ($article_person_rent->get_id_person_employee_returned_is_dirty())
				{
				$data[] = array("name" => "id_person_employee_returned" , "value" => $article_person_rent->get_id_person_employee_returned() , "type" => "uuid");
				}
			if ($article_person_rent->get_id_fixed_asset_is_dirty())
				{
				$data[] = array("name" => "id_fixed_asset" , "value" => $article_person_rent->get_id_fixed_asset() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('article_person_rent',$article_person_rent->get_id()))
				{
				$result = $article_person_rent->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('article_person_rent',$article_person_rent->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('article_person_rent',$article_person_rent->get_id(),$application,$article_person_rent->get_id_save_location(),false);
				$article_person_rent->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $article_person_rent->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('article_person_rent',$article_person_rent->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('article_person_rent',$article_person_rent->get_id(),$application,$article_person_rent->get_id_save_location(),true);
				$article_person_rent->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$article_person_rent = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$article_person_rent = cls_table_factory::get_common_article_person_rent()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($article_person_rent))
				{
					$article_person_rent = cls_table_factory::create_instance('article_person_rent');
				}
			$article_person_rent->fill($data,false);
			return self::save_object($article_person_rent,$db_manager,$application);
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
				case "article_person_rent.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "article_person_rent.id_article":
					$counter++;
					break;
				case "id_article":
					$counter++;
					break;
				case "article_person_rent.id_person":
					$counter++;
					break;
				case "id_person":
					$counter++;
					break;
				case "article_person_rent.datefrom":
					$counter++;
					break;
				case "datefrom":
					$counter++;
					break;
				case "article_person_rent.datetil":
					$counter++;
					break;
				case "datetil":
					$counter++;
					break;
				case "article_person_rent.id_posting_header":
					$counter++;
					break;
				case "id_posting_header":
					$counter++;
					break;
				case "article_person_rent.id_person_employee_issued":
					$counter++;
					break;
				case "id_person_employee_issued":
					$counter++;
					break;
				case "article_person_rent.id_person_employee_returned":
					$counter++;
					break;
				case "id_person_employee_returned":
					$counter++;
					break;
				case "article_person_rent.id_fixed_asset":
					$counter++;
					break;
				case "id_fixed_asset":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
