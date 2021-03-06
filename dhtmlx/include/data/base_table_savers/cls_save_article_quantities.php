<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_article_quantities extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'article_quantities';
		}

	public static function save_object($article_quantities,$db_manager,$application)
		{
			if (is_null($article_quantities))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$article_quantities->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($article_quantities->get_id_article_is_dirty())
				{
				$data[] = array("name" => "id_article" , "value" => $article_quantities->get_id_article() , "type" => "uuid");
				}
			if ($article_quantities->get_minqty_is_dirty())
				{
				$data[] = array("name" => "minqty" , "value" => $article_quantities->get_minqty() , "type" => "int4");
				}
			if ($article_quantities->get_orderqty_is_dirty())
				{
				$data[] = array("name" => "orderqty" , "value" => $article_quantities->get_orderqty() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('article_quantities',$article_quantities->get_id()))
				{
				$result = $article_quantities->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('article_quantities',$article_quantities->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('article_quantities',$article_quantities->get_id(),$application,$article_quantities->get_id_save_location(),false);
				$article_quantities->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $article_quantities->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('article_quantities',$article_quantities->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('article_quantities',$article_quantities->get_id(),$application,$article_quantities->get_id_save_location(),true);
				$article_quantities->after_save($db_manager,$application,true);
				}
				if (!is_null($application->get_table_test())
					{
					}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('/include/data/table_factory/cls_table_factory.php');
			$article_quantities = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$article_quantities = cls_table_factory::get_common_article_quantities()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($article_quantities))
				{
					$article_quantities = cls_table_factory::create_instance('article_quantities');
				}
			$article_quantities->fill($data,false);
			return self::save_object($article_quantities,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 4;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "article_quantities.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "article_quantities.id_article":
					$counter++;
					break;
				case "id_article":
					$counter++;
					break;
				case "article_quantities.minqty":
					$counter++;
					break;
				case "minqty":
					$counter++;
					break;
				case "article_quantities.orderqty":
					$counter++;
					break;
				case "orderqty":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
