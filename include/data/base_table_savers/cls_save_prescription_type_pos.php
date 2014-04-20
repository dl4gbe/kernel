<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_prescription_type_pos extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'prescription_type_pos';
		}

	public static function save_object($prescription_type_pos,$db_manager,$application)
		{
			if (is_null($prescription_type_pos))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$prescription_type_pos->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($prescription_type_pos->get_id_article_is_dirty())
				{
				$data[] = array("name" => "id_article" , "value" => $prescription_type_pos->get_id_article() , "type" => "uuid");
				}
			if ($prescription_type_pos->get_id_prescription_type_is_dirty())
				{
				$data[] = array("name" => "id_prescription_type" , "value" => $prescription_type_pos->get_id_prescription_type() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('prescription_type_pos',$prescription_type_pos->get_id()))
				{
				$result = $prescription_type_pos->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('prescription_type_pos',$prescription_type_pos->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$prescription_type_pos->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $prescription_type_pos->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('prescription_type_pos',$prescription_type_pos->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$prescription_type_pos->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$prescription_type_pos = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$prescription_type_pos = cls_table_factory::get_common_prescription_type_pos()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($prescription_type_pos))
				{
					$prescription_type_pos = cls_table_factory::create_instance('prescription_type_pos');
				}
			$prescription_type_pos->fill($data,false);
			return self::save_object($prescription_type_pos,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 3;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "prescription_type_pos.id_article":
					$counter++;
					break;
				case "id_article":
					$counter++;
					break;
				case "prescription_type_pos.id_prescription_type":
					$counter++;
					break;
				case "id_prescription_type":
					$counter++;
					break;
				case "prescription_type_pos.id":
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
