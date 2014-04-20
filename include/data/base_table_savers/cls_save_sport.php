<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_sport extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'sport';
		}

	public static function save_object($sport,$db_manager,$application)
		{
			if (is_null($sport))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$sport->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($sport->get_rehasport_is_dirty())
				{
				$data[] = array("name" => "rehasport" , "value" => $sport->get_rehasport() , "type" => "bool");
				}
			if ($sport->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $sport->get_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('sport',$sport->get_id()))
				{
				$result = $sport->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('sport',$sport->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$sport->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $sport->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('sport',$sport->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$sport->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$sport = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$sport = cls_table_factory::get_common_sport()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($sport))
				{
					$sport = cls_table_factory::create_instance('sport');
				}
			$sport->fill($data,false);
			return self::save_object($sport,$db_manager,$application);
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
				case "sport.rehasport":
					$counter++;
					break;
				case "rehasport":
					$counter++;
					break;
				case "sport.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "sport.id":
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
