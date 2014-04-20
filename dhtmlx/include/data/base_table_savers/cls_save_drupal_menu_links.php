<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_drupal_menu_links extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'drupal_menu_links';
		}

	public static function save_object($drupal_menu_links,$db_manager,$application)
		{
			if (is_null($drupal_menu_links))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$drupal_menu_links->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($drupal_menu_links->get_menu_name_is_dirty())
				{
				$data[] = array("name" => "menu_name" , "value" => $drupal_menu_links->get_menu_name() , "type" => "varchar");
				}
			if ($drupal_menu_links->get_mlid_is_dirty())
				{
				$data[] = array("name" => "mlid" , "value" => $drupal_menu_links->get_mlid() , "type" => "int4");
				}
			if ($drupal_menu_links->get_plid_is_dirty())
				{
				$data[] = array("name" => "plid" , "value" => $drupal_menu_links->get_plid() , "type" => "int8");
				}
			if ($drupal_menu_links->get_link_path_is_dirty())
				{
				$data[] = array("name" => "link_path" , "value" => $drupal_menu_links->get_link_path() , "type" => "varchar");
				}
			if ($drupal_menu_links->get_router_path_is_dirty())
				{
				$data[] = array("name" => "router_path" , "value" => $drupal_menu_links->get_router_path() , "type" => "varchar");
				}
			if ($drupal_menu_links->get_link_title_is_dirty())
				{
				$data[] = array("name" => "link_title" , "value" => $drupal_menu_links->get_link_title() , "type" => "varchar");
				}
			if ($drupal_menu_links->get_options_is_dirty())
				{
				$data[] = array("name" => "options" , "value" => $drupal_menu_links->get_options() , "type" => "bytea");
				}
			if ($drupal_menu_links->get_module_is_dirty())
				{
				$data[] = array("name" => "module" , "value" => $drupal_menu_links->get_module() , "type" => "varchar");
				}
			if ($drupal_menu_links->get_hidden_is_dirty())
				{
				$data[] = array("name" => "hidden" , "value" => $drupal_menu_links->get_hidden() , "type" => "int2");
				}
			if ($drupal_menu_links->get_external_is_dirty())
				{
				$data[] = array("name" => "external" , "value" => $drupal_menu_links->get_external() , "type" => "int2");
				}
			if ($drupal_menu_links->get_has_children_is_dirty())
				{
				$data[] = array("name" => "has_children" , "value" => $drupal_menu_links->get_has_children() , "type" => "int2");
				}
			if ($drupal_menu_links->get_expanded_is_dirty())
				{
				$data[] = array("name" => "expanded" , "value" => $drupal_menu_links->get_expanded() , "type" => "int2");
				}
			if ($drupal_menu_links->get_weight_is_dirty())
				{
				$data[] = array("name" => "weight" , "value" => $drupal_menu_links->get_weight() , "type" => "int4");
				}
			if ($drupal_menu_links->get_depth_is_dirty())
				{
				$data[] = array("name" => "depth" , "value" => $drupal_menu_links->get_depth() , "type" => "int2");
				}
			if ($drupal_menu_links->get_customized_is_dirty())
				{
				$data[] = array("name" => "customized" , "value" => $drupal_menu_links->get_customized() , "type" => "int2");
				}
			if ($drupal_menu_links->get_p1_is_dirty())
				{
				$data[] = array("name" => "p1" , "value" => $drupal_menu_links->get_p1() , "type" => "int8");
				}
			if ($drupal_menu_links->get_p2_is_dirty())
				{
				$data[] = array("name" => "p2" , "value" => $drupal_menu_links->get_p2() , "type" => "int8");
				}
			if ($drupal_menu_links->get_p3_is_dirty())
				{
				$data[] = array("name" => "p3" , "value" => $drupal_menu_links->get_p3() , "type" => "int8");
				}
			if ($drupal_menu_links->get_p4_is_dirty())
				{
				$data[] = array("name" => "p4" , "value" => $drupal_menu_links->get_p4() , "type" => "int8");
				}
			if ($drupal_menu_links->get_p5_is_dirty())
				{
				$data[] = array("name" => "p5" , "value" => $drupal_menu_links->get_p5() , "type" => "int8");
				}
			if ($drupal_menu_links->get_p6_is_dirty())
				{
				$data[] = array("name" => "p6" , "value" => $drupal_menu_links->get_p6() , "type" => "int8");
				}
			if ($drupal_menu_links->get_p7_is_dirty())
				{
				$data[] = array("name" => "p7" , "value" => $drupal_menu_links->get_p7() , "type" => "int8");
				}
			if ($drupal_menu_links->get_p8_is_dirty())
				{
				$data[] = array("name" => "p8" , "value" => $drupal_menu_links->get_p8() , "type" => "int8");
				}
			if ($drupal_menu_links->get_p9_is_dirty())
				{
				$data[] = array("name" => "p9" , "value" => $drupal_menu_links->get_p9() , "type" => "int8");
				}
			if ($drupal_menu_links->get_updated_is_dirty())
				{
				$data[] = array("name" => "updated" , "value" => $drupal_menu_links->get_updated() , "type" => "int2");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('drupal_menu_links',$drupal_menu_links->get_id()))
				{
				$result = $drupal_menu_links->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('drupal_menu_links',$drupal_menu_links->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_menu_links',$drupal_menu_links->get_id(),$application,$drupal_menu_links->get_id_save_location(),false);
				$drupal_menu_links->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $drupal_menu_links->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('drupal_menu_links',$drupal_menu_links->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('drupal_menu_links',$drupal_menu_links->get_id(),$application,$drupal_menu_links->get_id_save_location(),true);
				$drupal_menu_links->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$drupal_menu_links = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$drupal_menu_links = cls_table_factory::get_common_drupal_menu_links()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($drupal_menu_links))
				{
					$drupal_menu_links = cls_table_factory::create_instance('drupal_menu_links');
				}
			$drupal_menu_links->fill($data,false);
			return self::save_object($drupal_menu_links,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 26;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "drupal_menu_links.menu_name":
					$counter++;
					break;
				case "menu_name":
					$counter++;
					break;
				case "drupal_menu_links.mlid":
					$counter++;
					break;
				case "mlid":
					$counter++;
					break;
				case "drupal_menu_links.plid":
					$counter++;
					break;
				case "plid":
					$counter++;
					break;
				case "drupal_menu_links.link_path":
					$counter++;
					break;
				case "link_path":
					$counter++;
					break;
				case "drupal_menu_links.router_path":
					$counter++;
					break;
				case "router_path":
					$counter++;
					break;
				case "drupal_menu_links.link_title":
					$counter++;
					break;
				case "link_title":
					$counter++;
					break;
				case "drupal_menu_links.options":
					$counter++;
					break;
				case "options":
					$counter++;
					break;
				case "drupal_menu_links.module":
					$counter++;
					break;
				case "module":
					$counter++;
					break;
				case "drupal_menu_links.hidden":
					$counter++;
					break;
				case "hidden":
					$counter++;
					break;
				case "drupal_menu_links.external":
					$counter++;
					break;
				case "external":
					$counter++;
					break;
				case "drupal_menu_links.has_children":
					$counter++;
					break;
				case "has_children":
					$counter++;
					break;
				case "drupal_menu_links.expanded":
					$counter++;
					break;
				case "expanded":
					$counter++;
					break;
				case "drupal_menu_links.weight":
					$counter++;
					break;
				case "weight":
					$counter++;
					break;
				case "drupal_menu_links.depth":
					$counter++;
					break;
				case "depth":
					$counter++;
					break;
				case "drupal_menu_links.customized":
					$counter++;
					break;
				case "customized":
					$counter++;
					break;
				case "drupal_menu_links.p1":
					$counter++;
					break;
				case "p1":
					$counter++;
					break;
				case "drupal_menu_links.p2":
					$counter++;
					break;
				case "p2":
					$counter++;
					break;
				case "drupal_menu_links.p3":
					$counter++;
					break;
				case "p3":
					$counter++;
					break;
				case "drupal_menu_links.p4":
					$counter++;
					break;
				case "p4":
					$counter++;
					break;
				case "drupal_menu_links.p5":
					$counter++;
					break;
				case "p5":
					$counter++;
					break;
				case "drupal_menu_links.p6":
					$counter++;
					break;
				case "p6":
					$counter++;
					break;
				case "drupal_menu_links.p7":
					$counter++;
					break;
				case "p7":
					$counter++;
					break;
				case "drupal_menu_links.p8":
					$counter++;
					break;
				case "p8":
					$counter++;
					break;
				case "drupal_menu_links.p9":
					$counter++;
					break;
				case "p9":
					$counter++;
					break;
				case "drupal_menu_links.updated":
					$counter++;
					break;
				case "updated":
					$counter++;
					break;
				case "drupal_menu_links.id":
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
