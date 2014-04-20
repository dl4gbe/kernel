<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_fixed_asset extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'fixed_asset';
		}

	public static function save_object($fixed_asset,$db_manager,$application)
		{
			if (is_null($fixed_asset))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$fixed_asset->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($fixed_asset->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $fixed_asset->get_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('fixed_asset',$fixed_asset->get_id()))
				{
				$result = $fixed_asset->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('fixed_asset',$fixed_asset->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('fixed_asset',$fixed_asset->get_id(),$application,$fixed_asset->get_id_save_location(),false);
				$fixed_asset->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $fixed_asset->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('fixed_asset',$fixed_asset->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$db_manager->register_location_dependant_record('fixed_asset',$fixed_asset->get_id(),$application,$fixed_asset->get_id_save_location(),true);
				$fixed_asset->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$fixed_asset = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$fixed_asset = cls_table_factory::get_common_fixed_asset()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($fixed_asset))
				{
					$fixed_asset = cls_table_factory::create_instance('fixed_asset');
				}
			$fixed_asset->fill($data,false);
			return self::save_object($fixed_asset,$db_manager,$application);
		}

	public static function check_data_complete($data)
		{
			$field_count = 2;
			$counter = 0;
			if (count($data) < $field_count) return false;
			reset($data);
			foreach ($data as $key => &$val)
			{
				switch($key)
				{
				case "fixed_asset.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "fixed_asset.id":
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
