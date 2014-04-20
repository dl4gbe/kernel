<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_salutation extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'salutation';
		}

	public static function save_object($salutation,$db_manager,$application)
		{
			if (is_null($salutation))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$salutation->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($salutation->get_letter_is_dirty())
				{
				$data[] = array("name" => "letter" , "value" => $salutation->get_letter() , "type" => "varchar");
				}
			if ($salutation->get_formal_is_dirty())
				{
				$data[] = array("name" => "formal" , "value" => $salutation->get_formal() , "type" => "bool");
				}
			if ($salutation->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $salutation->get_name() , "type" => "varchar");
				}
			if ($salutation->get_gender_is_dirty())
				{
				$data[] = array("name" => "gender" , "value" => $salutation->get_gender() , "type" => "bpchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('salutation',$salutation->get_id()))
				{
				$result = $salutation->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('salutation',$salutation->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$salutation->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $salutation->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('salutation',$salutation->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$salutation->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$salutation = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$salutation = cls_table_factory::get_common_salutation()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($salutation))
				{
					$salutation = cls_table_factory::create_instance('salutation');
				}
			$salutation->fill($data,false);
			return self::save_object($salutation,$db_manager,$application);
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
				case "salutation.letter":
					$counter++;
					break;
				case "letter":
					$counter++;
					break;
				case "salutation.formal":
					$counter++;
					break;
				case "formal":
					$counter++;
					break;
				case "salutation.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "salutation.gender":
					$counter++;
					break;
				case "gender":
					$counter++;
					break;
				case "salutation.id":
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
