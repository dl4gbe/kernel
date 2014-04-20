<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_postingline extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'postingline';
		}

	public static function save_object($postingline,$db_manager,$application)
		{
			if (is_null($postingline))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$postingline->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($postingline->get_id_postingheader_is_dirty())
				{
				$data[] = array("name" => "id_postingheader" , "value" => $postingline->get_id_postingheader() , "type" => "uuid");
				}
			if ($postingline->get_debit_is_dirty())
				{
				$data[] = array("name" => "debit" , "value" => $postingline->get_debit() , "type" => "money");
				}
			if ($postingline->get_credit_is_dirty())
				{
				$data[] = array("name" => "credit" , "value" => $postingline->get_credit() , "type" => "money");
				}
			if ($postingline->get_id_account_is_dirty())
				{
				$data[] = array("name" => "id_account" , "value" => $postingline->get_id_account() , "type" => "uuid");
				}
			if ($postingline->get_postingtype_is_dirty())
				{
				$data[] = array("name" => "postingtype" , "value" => $postingline->get_postingtype() , "type" => "bpchar");
				}
			if ($postingline->get_id_article_is_dirty())
				{
				$data[] = array("name" => "id_article" , "value" => $postingline->get_id_article() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('postingline',$postingline->get_id()))
				{
				$result = $postingline->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('postingline',$postingline->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('postingline',$postingline->get_id(),$application,$postingline->get_id_save_location(),false);
				$postingline->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $postingline->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('postingline',$postingline->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('postingline',$postingline->get_id(),$application,$postingline->get_id_save_location(),true);
				$postingline->after_save($db_manager,$application,true);
				}
				if (!is_null($application->get_table_test())
					{
					}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('/include/data/table_factory/cls_table_factory.php');
			$postingline = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$postingline = cls_table_factory::get_common_postingline()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($postingline))
				{
					$postingline = cls_table_factory::create_instance('postingline');
				}
			$postingline->fill($data,false);
			return self::save_object($postingline,$db_manager,$application);
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
				case "postingline.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "postingline.id_postingheader":
					$counter++;
					break;
				case "id_postingheader":
					$counter++;
					break;
				case "postingline.debit":
					$counter++;
					break;
				case "debit":
					$counter++;
					break;
				case "postingline.credit":
					$counter++;
					break;
				case "credit":
					$counter++;
					break;
				case "postingline.id_account":
					$counter++;
					break;
				case "id_account":
					$counter++;
					break;
				case "postingline.postingtype":
					$counter++;
					break;
				case "postingtype":
					$counter++;
					break;
				case "postingline.id_article":
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
