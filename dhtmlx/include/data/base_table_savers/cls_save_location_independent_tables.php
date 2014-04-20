<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_location_independent_tables extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'location_independent_tables';
		}

	public static function save_object($location_independent_tables,$db_manager,$application)
		{
			if (is_null($location_independent_tables))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$location_independent_tables->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($location_independent_tables->get_tablename_is_dirty())
				{
				$data[] = array("name" => "tablename" , "value" => $location_independent_tables->get_tablename() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('location_independent_tables',$location_independent_tables->get_id()))
				{
				$result = $location_independent_tables->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('location_independent_tables',$location_independent_tables->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$location_independent_tables->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $location_independent_tables->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('location_independent_tables',$location_independent_tables->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$location_independent_tables->after_save($db_manager,$application,true);
				}
				if (!is_null($application->get_table_test())
					{
					}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('/include/data/table_factory/cls_table_factory.php');
			$location_independent_tables = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$location_independent_tables = cls_table_factory::get_common_location_independent_tables()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($location_independent_tables))
				{
					$location_independent_tables = cls_table_factory::create_instance('location_independent_tables');
				}
			$location_independent_tables->fill($data,false);
			return self::save_object($location_independent_tables,$db_manager,$application);
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
				case "location_independent_tables.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "location_independent_tables.tablename":
					$counter++;
					break;
				case "tablename":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
