<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_article_supplier extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'article_supplier';
		}

	public static function save_object($article_supplier,$db_manager,$application)
		{
			if (is_null($article_supplier))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$article_supplier->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($article_supplier->get_mininimumorderqty_is_dirty())
				{
				$data[] = array("name" => "mininimumorderqty" , "value" => $article_supplier->get_mininimumorderqty() , "type" => "int4");
				}
			if ($article_supplier->get_mindeliverytimedays_is_dirty())
				{
				$data[] = array("name" => "mindeliverytimedays" , "value" => $article_supplier->get_mindeliverytimedays() , "type" => "int4");
				}
			if ($article_supplier->get_orderno_is_dirty())
				{
				$data[] = array("name" => "orderno" , "value" => $article_supplier->get_orderno() , "type" => "varchar");
				}
			if ($article_supplier->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $article_supplier->get_name() , "type" => "varchar");
				}
			if ($article_supplier->get_id_person_supplier_is_dirty())
				{
				$data[] = array("name" => "id_person_supplier" , "value" => $article_supplier->get_id_person_supplier() , "type" => "uuid");
				}
			if ($article_supplier->get_id_article_is_dirty())
				{
				$data[] = array("name" => "id_article" , "value" => $article_supplier->get_id_article() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('article_supplier',$article_supplier->get_id()))
				{
				$result = $article_supplier->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('article_supplier',$article_supplier->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('article_supplier',$article_supplier->get_id(),$application,$article_supplier->get_id_save_location(),false);
				$article_supplier->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $article_supplier->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('article_supplier',$article_supplier->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('article_supplier',$article_supplier->get_id(),$application,$article_supplier->get_id_save_location(),true);
				$article_supplier->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$article_supplier = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$article_supplier = cls_table_factory::get_common_article_supplier()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($article_supplier))
				{
					$article_supplier = cls_table_factory::create_instance('article_supplier');
				}
			$article_supplier->fill($data,false);
			return self::save_object($article_supplier,$db_manager,$application);
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
				case "article_supplier.mininimumorderqty":
					$counter++;
					break;
				case "mininimumorderqty":
					$counter++;
					break;
				case "article_supplier.mindeliverytimedays":
					$counter++;
					break;
				case "mindeliverytimedays":
					$counter++;
					break;
				case "article_supplier.orderno":
					$counter++;
					break;
				case "orderno":
					$counter++;
					break;
				case "article_supplier.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "article_supplier.id_person_supplier":
					$counter++;
					break;
				case "id_person_supplier":
					$counter++;
					break;
				case "article_supplier.id_article":
					$counter++;
					break;
				case "id_article":
					$counter++;
					break;
				case "article_supplier.id":
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
