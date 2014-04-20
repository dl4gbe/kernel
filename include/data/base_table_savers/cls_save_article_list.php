<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_article_list extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'article_list';
		}

	public static function save_object($article_list,$db_manager,$application)
		{
			if (is_null($article_list))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$article_list->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($article_list->get_id_person_employee_is_dirty())
				{
				$data[] = array("name" => "id_person_employee" , "value" => $article_list->get_id_person_employee() , "type" => "uuid");
				}
			if ($article_list->get_documentdate_is_dirty())
				{
				$data[] = array("name" => "documentdate" , "value" => $article_list->get_documentdate() , "type" => "date");
				}
			if ($article_list->get_no_is_dirty())
				{
				$data[] = array("name" => "no" , "value" => $article_list->get_no() , "type" => "varchar");
				}
			if ($article_list->get_transfertype_is_dirty())
				{
				$data[] = array("name" => "transfertype" , "value" => $article_list->get_transfertype() , "type" => "bpchar");
				}
			if ($article_list->get_id_person_is_dirty())
				{
				$data[] = array("name" => "id_person" , "value" => $article_list->get_id_person() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('article_list',$article_list->get_id()))
				{
				$result = $article_list->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('article_list',$article_list->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('article_list',$article_list->get_id(),$application,$article_list->get_id_save_location(),false);
				$article_list->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $article_list->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('article_list',$article_list->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('article_list',$article_list->get_id(),$application,$article_list->get_id_save_location(),true);
				$article_list->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$article_list = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$article_list = cls_table_factory::get_common_article_list()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($article_list))
				{
					$article_list = cls_table_factory::create_instance('article_list');
				}
			$article_list->fill($data,false);
			return self::save_object($article_list,$db_manager,$application);
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
				case "article_list.id_person_employee":
					$counter++;
					break;
				case "id_person_employee":
					$counter++;
					break;
				case "article_list.documentdate":
					$counter++;
					break;
				case "documentdate":
					$counter++;
					break;
				case "article_list.no":
					$counter++;
					break;
				case "no":
					$counter++;
					break;
				case "article_list.transfertype":
					$counter++;
					break;
				case "transfertype":
					$counter++;
					break;
				case "article_list.id_person":
					$counter++;
					break;
				case "id_person":
					$counter++;
					break;
				case "article_list.id":
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
