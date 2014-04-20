<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_article_group_account extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'article_group_account';
		}

	public static function save_object($article_group_account,$db_manager,$application)
		{
			if (is_null($article_group_account))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$article_group_account->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($article_group_account->get_id_article_group_is_dirty())
				{
				$data[] = array("name" => "id_article_group" , "value" => $article_group_account->get_id_article_group() , "type" => "uuid");
				}
			if ($article_group_account->get_id_chart_of_account_is_dirty())
				{
				$data[] = array("name" => "id_chart_of_account" , "value" => $article_group_account->get_id_chart_of_account() , "type" => "uuid");
				}
			if ($article_group_account->get_id_account_revenue_account_is_dirty())
				{
				$data[] = array("name" => "id_account_revenue_account" , "value" => $article_group_account->get_id_account_revenue_account() , "type" => "uuid");
				}
			if ($article_group_account->get_id_account_expense_account_is_dirty())
				{
				$data[] = array("name" => "id_account_expense_account" , "value" => $article_group_account->get_id_account_expense_account() , "type" => "uuid");
				}
			if ($article_group_account->get_id_account_rent_revenue_account_is_dirty())
				{
				$data[] = array("name" => "id_account_rent_revenue_account" , "value" => $article_group_account->get_id_account_rent_revenue_account() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('article_group_account',$article_group_account->get_id()))
				{
				$result = $article_group_account->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('article_group_account',$article_group_account->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('article_group_account',$article_group_account->get_id(),$application,$article_group_account->get_id_save_location(),false);
				$article_group_account->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $article_group_account->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('article_group_account',$article_group_account->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('article_group_account',$article_group_account->get_id(),$application,$article_group_account->get_id_save_location(),true);
				$article_group_account->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$article_group_account = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$article_group_account = cls_table_factory::get_common_article_group_account()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($article_group_account))
				{
					$article_group_account = cls_table_factory::create_instance('article_group_account');
				}
			$article_group_account->fill($data,false);
			return self::save_object($article_group_account,$db_manager,$application);
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
				case "article_group_account.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "article_group_account.id_article_group":
					$counter++;
					break;
				case "id_article_group":
					$counter++;
					break;
				case "article_group_account.id_chart_of_account":
					$counter++;
					break;
				case "id_chart_of_account":
					$counter++;
					break;
				case "article_group_account.id_account_revenue_account":
					$counter++;
					break;
				case "id_account_revenue_account":
					$counter++;
					break;
				case "article_group_account.id_account_expense_account":
					$counter++;
					break;
				case "id_account_expense_account":
					$counter++;
					break;
				case "article_group_account.id_account_rent_revenue_account":
					$counter++;
					break;
				case "id_account_rent_revenue_account":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
