<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_campaign_group extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'campaign_group';
		}

	public static function save_object($campaign_group,$db_manager,$application)
		{
			if (is_null($campaign_group))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$campaign_group->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($campaign_group->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $campaign_group->get_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('campaign_group',$campaign_group->get_id()))
				{
				$result = $campaign_group->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('campaign_group',$campaign_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$campaign_group->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $campaign_group->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('campaign_group',$campaign_group->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$campaign_group->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$campaign_group = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$campaign_group = cls_table_factory::get_common_campaign_group()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($campaign_group))
				{
					$campaign_group = cls_table_factory::create_instance('campaign_group');
				}
			$campaign_group->fill($data,false);
			return self::save_object($campaign_group,$db_manager,$application);
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
				case "campaign_group.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "campaign_group.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
