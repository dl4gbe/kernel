<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_article_group extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'article_group';
		}

	public static function save_object($article_group,$db_manager,$application)
		{
			if (is_null($article_group))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$article_group->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($article_group->get_offerarticle_is_dirty())
				{
				$data[] = array("name" => "offerarticle" , "value" => $article_group->get_offerarticle() , "type" => "bool");
				}
			if ($article_group->get_showincontracts_is_dirty())
				{
				$data[] = array("name" => "showincontracts" , "value" => $article_group->get_showincontracts() , "type" => "bool");
				}
			if ($article_group->get_showinpos_is_dirty())
				{
				$data[] = array("name" => "showinpos" , "value" => $article_group->get_showinpos() , "type" => "bool");
				}
			if ($article_group->get_insurance_article_is_dirty())
				{
				$data[] = array("name" => "insurance_article" , "value" => $article_group->get_insurance_article() , "type" => "bool");
				}
			if ($article_group->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $article_group->get_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('article_group',$article_group->get_id()))
				{
				$result = $article_group->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('article_group',$article_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$article_group->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $article_group->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('article_group',$article_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$article_group->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$article_group = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$article_group = cls_table_factory::get_common_article_group()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($article_group))
				{
					$article_group = cls_table_factory::create_instance('article_group');
				}
			$article_group->fill($data,false);
			return self::save_object($article_group,$db_manager,$application);
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
				case "article_group.offerarticle":
					$counter++;
					break;
				case "offerarticle":
					$counter++;
					break;
				case "article_group.showincontracts":
					$counter++;
					break;
				case "showincontracts":
					$counter++;
					break;
				case "article_group.showinpos":
					$counter++;
					break;
				case "showinpos":
					$counter++;
					break;
				case "article_group.insurance_article":
					$counter++;
					break;
				case "insurance_article":
					$counter++;
					break;
				case "article_group.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "article_group.id":
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
