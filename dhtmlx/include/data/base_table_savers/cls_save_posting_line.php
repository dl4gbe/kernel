<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_posting_line extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'posting_line';
		}

	public static function save_object($posting_line,$db_manager,$application)
		{
			if (is_null($posting_line))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$posting_line->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($posting_line->get_id_posting_header_is_dirty())
				{
				$data[] = array("name" => "id_posting_header" , "value" => $posting_line->get_id_posting_header() , "type" => "uuid");
				}
			if ($posting_line->get_debit_is_dirty())
				{
				$data[] = array("name" => "debit" , "value" => $posting_line->get_debit() , "type" => "money");
				}
			if ($posting_line->get_credit_is_dirty())
				{
				$data[] = array("name" => "credit" , "value" => $posting_line->get_credit() , "type" => "money");
				}
			if ($posting_line->get_id_account_is_dirty())
				{
				$data[] = array("name" => "id_account" , "value" => $posting_line->get_id_account() , "type" => "uuid");
				}
			if ($posting_line->get_postingtype_is_dirty())
				{
				$data[] = array("name" => "postingtype" , "value" => $posting_line->get_postingtype() , "type" => "bpchar");
				}
			if ($posting_line->get_id_article_is_dirty())
				{
				$data[] = array("name" => "id_article" , "value" => $posting_line->get_id_article() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('posting_line',$posting_line->get_id()))
				{
				$result = $posting_line->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('posting_line',$posting_line->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('posting_line',$posting_line->get_id(),$application,$posting_line->get_id_save_location(),false);
				$posting_line->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $posting_line->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('posting_line',$posting_line->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('posting_line',$posting_line->get_id(),$application,$posting_line->get_id_save_location(),true);
				$posting_line->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$posting_line = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$posting_line = cls_table_factory::get_common_posting_line()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($posting_line))
				{
					$posting_line = cls_table_factory::create_instance('posting_line');
				}
			$posting_line->fill($data,false);
			return self::save_object($posting_line,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 7;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "posting_line.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "posting_line.id_posting_header":
					$counter++;
					break;
				case "id_posting_header":
					$counter++;
					break;
				case "posting_line.debit":
					$counter++;
					break;
				case "debit":
					$counter++;
					break;
				case "posting_line.credit":
					$counter++;
					break;
				case "credit":
					$counter++;
					break;
				case "posting_line.id_account":
					$counter++;
					break;
				case "id_account":
					$counter++;
					break;
				case "posting_line.postingtype":
					$counter++;
					break;
				case "postingtype":
					$counter++;
					break;
				case "posting_line.id_article":
					$counter++;
					break;
				case "id_article":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
