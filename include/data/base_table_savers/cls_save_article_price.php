<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_article_price extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'article_price';
		}

	public static function save_object($article_price,$db_manager,$application)
		{
			if (is_null($article_price))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$article_price->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($article_price->get_minqty_is_dirty())
				{
				$data[] = array("name" => "minqty" , "value" => $article_price->get_minqty() , "type" => "int4");
				}
			if ($article_price->get_validtil_is_dirty())
				{
				$data[] = array("name" => "validtil" , "value" => $article_price->get_validtil() , "type" => "date");
				}
			if ($article_price->get_validfrom_is_dirty())
				{
				$data[] = array("name" => "validfrom" , "value" => $article_price->get_validfrom() , "type" => "date");
				}
			if ($article_price->get_id_article_price_group_is_dirty())
				{
				$data[] = array("name" => "id_article_price_group" , "value" => $article_price->get_id_article_price_group() , "type" => "uuid");
				}
			if ($article_price->get_price_is_dirty())
				{
				$data[] = array("name" => "price" , "value" => $article_price->get_price() , "type" => "money");
				}
			if ($article_price->get_id_article_is_dirty())
				{
				$data[] = array("name" => "id_article" , "value" => $article_price->get_id_article() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('article_price',$article_price->get_id()))
				{
				$result = $article_price->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('article_price',$article_price->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('article_price',$article_price->get_id(),$application,$article_price->get_id_save_location(),false);
				$article_price->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $article_price->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('article_price',$article_price->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('article_price',$article_price->get_id(),$application,$article_price->get_id_save_location(),true);
				$article_price->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$article_price = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$article_price = cls_table_factory::get_common_article_price()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($article_price))
				{
					$article_price = cls_table_factory::create_instance('article_price');
				}
			$article_price->fill($data,false);
			return self::save_object($article_price,$db_manager,$application);
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
				case "article_price.minqty":
					$counter++;
					break;
				case "minqty":
					$counter++;
					break;
				case "article_price.validtil":
					$counter++;
					break;
				case "validtil":
					$counter++;
					break;
				case "article_price.validfrom":
					$counter++;
					break;
				case "validfrom":
					$counter++;
					break;
				case "article_price.id_article_price_group":
					$counter++;
					break;
				case "id_article_price_group":
					$counter++;
					break;
				case "article_price.price":
					$counter++;
					break;
				case "price":
					$counter++;
					break;
				case "article_price.id_article":
					$counter++;
					break;
				case "id_article":
					$counter++;
					break;
				case "article_price.id":
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
