<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_article_list_pos extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'article_list_pos';
		}

	public static function save_object($article_list_pos,$db_manager,$application)
		{
			if (is_null($article_list_pos))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$article_list_pos->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($article_list_pos->get_id_article_list_is_dirty())
				{
				$data[] = array("name" => "id_article_list" , "value" => $article_list_pos->get_id_article_list() , "type" => "uuid");
				}
			if ($article_list_pos->get_id_article_is_dirty())
				{
				$data[] = array("name" => "id_article" , "value" => $article_list_pos->get_id_article() , "type" => "uuid");
				}
			if ($article_list_pos->get_qty_is_dirty())
				{
				$data[] = array("name" => "qty" , "value" => $article_list_pos->get_qty() , "type" => "int4");
				}
			if ($article_list_pos->get_price_is_dirty())
				{
				$data[] = array("name" => "price" , "value" => $article_list_pos->get_price() , "type" => "money");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('article_list_pos',$article_list_pos->get_id()))
				{
				$result = $article_list_pos->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('article_list_pos',$article_list_pos->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('article_list_pos',$article_list_pos->get_id(),$application,$article_list_pos->get_id_save_location(),false);
				$article_list_pos->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $article_list_pos->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('article_list_pos',$article_list_pos->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('article_list_pos',$article_list_pos->get_id(),$application,$article_list_pos->get_id_save_location(),true);
				$article_list_pos->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$article_list_pos = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$article_list_pos = cls_table_factory::get_common_article_list_pos()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($article_list_pos))
				{
					$article_list_pos = cls_table_factory::create_instance('article_list_pos');
				}
			$article_list_pos->fill($data,false);
			return self::save_object($article_list_pos,$db_manager,$application);
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
				case "article_list_pos.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "article_list_pos.id_article_list":
					$counter++;
					break;
				case "id_article_list":
					$counter++;
					break;
				case "article_list_pos.id_article":
					$counter++;
					break;
				case "id_article":
					$counter++;
					break;
				case "article_list_pos.qty":
					$counter++;
					break;
				case "qty":
					$counter++;
					break;
				case "article_list_pos.price":
					$counter++;
					break;
				case "price":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
