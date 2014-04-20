<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_ribbonbar_template extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'ribbonbar_template';
		}

	public static function save_object($ribbonbar_template,$db_manager,$application)
		{
			if (is_null($ribbonbar_template))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$ribbonbar_template->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($ribbonbar_template->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $ribbonbar_template->get_name() , "type" => "varchar");
				}
			if ($ribbonbar_template->get_creator_path_is_dirty())
				{
				$data[] = array("name" => "creator_path" , "value" => $ribbonbar_template->get_creator_path() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('ribbonbar_template',$ribbonbar_template->get_id()))
				{
				$result = $ribbonbar_template->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('ribbonbar_template',$ribbonbar_template->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('ribbonbar_template',$ribbonbar_template->get_id(),$application,$ribbonbar_template->get_id_save_location(),false);
				$ribbonbar_template->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $ribbonbar_template->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('ribbonbar_template',$ribbonbar_template->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('ribbonbar_template',$ribbonbar_template->get_id(),$application,$ribbonbar_template->get_id_save_location(),true);
				$ribbonbar_template->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$ribbonbar_template = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$ribbonbar_template = cls_table_factory::get_common_ribbonbar_template()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($ribbonbar_template))
				{
					$ribbonbar_template = cls_table_factory::create_instance('ribbonbar_template');
				}
			$ribbonbar_template->fill($data,false);
			return self::save_object($ribbonbar_template,$db_manager,$application);
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
				case "ribbonbar_template.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "ribbonbar_template.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "ribbonbar_template.creator_path":
					$counter++;
					break;
				case "creator_path":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
