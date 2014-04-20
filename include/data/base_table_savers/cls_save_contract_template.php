<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_contract_template extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'contract_template';
		}

	public static function save_object($contract_template,$db_manager,$application)
		{
			if (is_null($contract_template))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$contract_template->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($contract_template->get_calcdifferenceamount_is_dirty())
				{
				$data[] = array("name" => "calcdifferenceamount" , "value" => $contract_template->get_calcdifferenceamount() , "type" => "bool");
				}
			if ($contract_template->get_id_contract_template_group_is_dirty())
				{
				$data[] = array("name" => "id_contract_template_group" , "value" => $contract_template->get_id_contract_template_group() , "type" => "uuid");
				}
			if ($contract_template->get_maxsales_is_dirty())
				{
				$data[] = array("name" => "maxsales" , "value" => $contract_template->get_maxsales() , "type" => "int4");
				}
			if ($contract_template->get_active_is_dirty())
				{
				$data[] = array("name" => "active" , "value" => $contract_template->get_active() , "type" => "bool");
				}
			if ($contract_template->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $contract_template->get_name() , "type" => "varchar");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('contract_template',$contract_template->get_id()))
				{
				$result = $contract_template->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('contract_template',$contract_template->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$contract_template->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $contract_template->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('contract_template',$contract_template->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$contract_template->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once(include/data/table_factory/cls_table_factory.php');
			$contract_template = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$contract_template = cls_table_factory::get_common_contract_template()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($contract_template))
				{
					$contract_template = cls_table_factory::create_instance('contract_template');
				}
			$contract_template->fill($data,false);
			return self::save_object($contract_template,$db_manager,$application);
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
				case "contract_template.calcdifferenceamount":
					$counter++;
					break;
				case "calcdifferenceamount":
					$counter++;
					break;
				case "contract_template.id_contract_template_group":
					$counter++;
					break;
				case "id_contract_template_group":
					$counter++;
					break;
				case "contract_template.maxsales":
					$counter++;
					break;
				case "maxsales":
					$counter++;
					break;
				case "contract_template.active":
					$counter++;
					break;
				case "active":
					$counter++;
					break;
				case "contract_template.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "contract_template.id":
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
