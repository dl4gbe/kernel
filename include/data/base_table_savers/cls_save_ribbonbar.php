<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_ribbonbar extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'ribbonbar';
		}

	public static function save_object($ribbonbar,$db_manager,$application)
		{
			if (is_null($ribbonbar))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$ribbonbar->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($ribbonbar->get_has_edit_form_is_dirty())
				{
				$data[] = array("name" => "has_edit_form" , "value" => $ribbonbar->get_has_edit_form() , "type" => "bool");
				}
			if ($ribbonbar->get_id_ribbonbar_template_is_dirty())
				{
				$data[] = array("name" => "id_ribbonbar_template" , "value" => $ribbonbar->get_id_ribbonbar_template() , "type" => "uuid");
				}
			if ($ribbonbar->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $ribbonbar->get_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('ribbonbar',$ribbonbar->get_id()))
				{
				$result = $ribbonbar->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('ribbonbar',$ribbonbar->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('ribbonbar',$ribbonbar->get_id(),$application,$ribbonbar->get_id_save_location(),false);
				$ribbonbar->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $ribbonbar->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('ribbonbar',$ribbonbar->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('ribbonbar',$ribbonbar->get_id(),$application,$ribbonbar->get_id_save_location(),true);
				$ribbonbar->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$ribbonbar = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$ribbonbar = cls_table_factory::get_common_ribbonbar()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($ribbonbar))
				{
					$ribbonbar = cls_table_factory::create_instance('ribbonbar');
				}
			$ribbonbar->fill($data,false);
			return self::save_object($ribbonbar,$db_manager,$application);
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
				case "ribbonbar.has_edit_form":
					$counter++;
					break;
				case "has_edit_form":
					$counter++;
					break;
				case "ribbonbar.id_ribbonbar_template":
					$counter++;
					break;
				case "id_ribbonbar_template":
					$counter++;
					break;
				case "ribbonbar.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "ribbonbar.id":
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
