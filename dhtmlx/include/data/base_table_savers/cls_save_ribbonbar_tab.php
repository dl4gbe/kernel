<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_ribbonbar_tab extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'ribbonbar_tab';
		}

	public static function save_object($ribbonbar_tab,$db_manager,$application)
		{
			if (is_null($ribbonbar_tab))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$ribbonbar_tab->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($ribbonbar_tab->get_id_ribbonbar_is_dirty())
				{
				$data[] = array("name" => "id_ribbonbar" , "value" => $ribbonbar_tab->get_id_ribbonbar() , "type" => "uuid");
				}
			if ($ribbonbar_tab->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $ribbonbar_tab->get_name() , "type" => "varchar");
				}
			if ($ribbonbar_tab->get_imagepath_is_dirty())
				{
				$data[] = array("name" => "imagepath" , "value" => $ribbonbar_tab->get_imagepath() , "type" => "varchar");
				}
			if ($ribbonbar_tab->get_active_is_dirty())
				{
				$data[] = array("name" => "active" , "value" => $ribbonbar_tab->get_active() , "type" => "bool");
				}
			if ($ribbonbar_tab->get_tab_order_is_dirty())
				{
				$data[] = array("name" => "tab_order" , "value" => $ribbonbar_tab->get_tab_order() , "type" => "int4");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('ribbonbar_tab',$ribbonbar_tab->get_id()))
				{
				$result = $ribbonbar_tab->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('ribbonbar_tab',$ribbonbar_tab->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('ribbonbar_tab',$ribbonbar_tab->get_id(),$application,$ribbonbar_tab->get_id_save_location(),false);
				$ribbonbar_tab->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $ribbonbar_tab->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('ribbonbar_tab',$ribbonbar_tab->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('ribbonbar_tab',$ribbonbar_tab->get_id(),$application,$ribbonbar_tab->get_id_save_location(),true);
				$ribbonbar_tab->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$ribbonbar_tab = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$ribbonbar_tab = cls_table_factory::get_common_ribbonbar_tab()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($ribbonbar_tab))
				{
					$ribbonbar_tab = cls_table_factory::create_instance('ribbonbar_tab');
				}
			$ribbonbar_tab->fill($data,false);
			return self::save_object($ribbonbar_tab,$db_manager,$application);
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
				case "ribbonbar_tab.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "ribbonbar_tab.id_ribbonbar":
					$counter++;
					break;
				case "id_ribbonbar":
					$counter++;
					break;
				case "ribbonbar_tab.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "ribbonbar_tab.imagepath":
					$counter++;
					break;
				case "imagepath":
					$counter++;
					break;
				case "ribbonbar_tab.active":
					$counter++;
					break;
				case "active":
					$counter++;
					break;
				case "ribbonbar_tab.tab_order":
					$counter++;
					break;
				case "tab_order":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
