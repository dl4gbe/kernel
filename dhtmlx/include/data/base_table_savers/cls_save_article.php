<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_article extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'article';
		}

	public static function save_object($article,$db_manager,$application)
		{
			if (is_null($article))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$article->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($article->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $article->get_name() , "type" => "varchar");
				}
			if ($article->get_id_uom_is_dirty())
				{
				$data[] = array("name" => "id_uom" , "value" => $article->get_id_uom() , "type" => "uuid");
				}
			if ($article->get_insurance_no_is_dirty())
				{
				$data[] = array("name" => "insurance_no" , "value" => $article->get_insurance_no() , "type" => "varchar");
				}
			if ($article->get_articleno_is_dirty())
				{
				$data[] = array("name" => "articleno" , "value" => $article->get_articleno() , "type" => "varchar");
				}
			if ($article->get_barcode_is_dirty())
				{
				$data[] = array("name" => "barcode" , "value" => $article->get_barcode() , "type" => "varchar");
				}
			if ($article->get_rentable_is_dirty())
				{
				$data[] = array("name" => "rentable" , "value" => $article->get_rentable() , "type" => "bool");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('article',$article->get_id()))
				{
				$result = $article->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('article',$article->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('article',$article->get_id(),$application,$article->get_id_save_location(),false);
				$article->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $article->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('article',$article->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('article',$article->get_id(),$application,$article->get_id_save_location(),true);
				$article->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$article = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$article = cls_table_factory::get_common_article()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($article))
				{
					$article = cls_table_factory::create_instance('article');
				}
			$article->fill($data,false);
			return self::save_object($article,$db_manager,$application);
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
				case "article.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "article.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "article.id_uom":
					$counter++;
					break;
				case "id_uom":
					$counter++;
					break;
				case "article.insurance_no":
					$counter++;
					break;
				case "insurance_no":
					$counter++;
					break;
				case "article.articleno":
					$counter++;
					break;
				case "articleno":
					$counter++;
					break;
				case "article.barcode":
					$counter++;
					break;
				case "barcode":
					$counter++;
					break;
				case "article.rentable":
					$counter++;
					break;
				case "rentable":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
