<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_save_base.php');
require_once('include/data/cls_data_result.php');
class cls_save_bank extends cls_datatable_save_base
{

	public function get_table_name()
		{
			return 'bank';
		}

	public static function save_object($bank,$db_manager,$application)
		{
			if (is_null($bank))
			{
				$result = new cls_data_result();
				$result->state = 1;
				$result->message_no = 1;
				return $result;
			}
			if (!$bank->is_dirty())
			{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
			}
			$data = array();
			if ($bank->get_bankcode_is_dirty())
				{
				$data[] = array("name" => "bankcode" , "value" => $bank->get_bankcode() , "type" => "varchar");
				}
			if ($bank->get_bic_is_dirty())
				{
				$data[] = array("name" => "bic" , "value" => $bank->get_bic() , "type" => "varchar");
				}
			if ($bank->get_pan_is_dirty())
				{
				$data[] = array("name" => "pan" , "value" => $bank->get_pan() , "type" => "varchar");
				}
			if ($bank->get_name_is_dirty())
				{
				$data[] = array("name" => "name" , "value" => $bank->get_name() , "type" => "varchar");
				}
			if ($bank->get_id_person_is_dirty())
				{
				$data[] = array("name" => "id_person" , "value" => $bank->get_id_person() , "type" => "uuid");
				}
			if (count($data) == 0)
				{
				$result = new cls_data_result();
				$result->state = 2;
				return $result;
				}
			if ($db_manager->record_exists('bank',$bank->get_id()))
				{
				$result = $bank->check_values($db_manager,$application,false);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->update_record('bank',$bank->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$bank->after_save($db_manager,$application,false);
				}
			else
				{
				$result = $bank->check_values($db_manager,$application,true);
				if ($result->get_state() != 0) return $result;
				$result = $db_manager->insert_record('bank',$bank->get_id(),$data);
				if ($result->get_state() != 0) return $result;
				$bank->after_save($db_manager,$application,true);
				}
			if (!is_null($application->get_table_test()))
				{
				}
			return $result;
		}

	public static function save_array($data,$db_manager,$application)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$bank = null;
			$id = $this->get_id_from_array($data);
			if (!empty($id))
				{
				if (!self::check_data_complete($data))
					{
						$bank = cls_table_factory::get_common_bank()->get_by_id($id,$db_manager);
					}
				}
			if (is_null($bank))
				{
					$bank = cls_table_factory::create_instance('bank');
				}
			$bank->fill($data,false);
			return self::save_object($bank,$db_manager,$application);
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
				case "bank.id":
					$counter++;
					break;
				case "id":
					$counter++;
					break;
				case "bank.bankcode":
					$counter++;
					break;
				case "bankcode":
					$counter++;
					break;
				case "bank.bic":
					$counter++;
					break;
				case "bic":
					$counter++;
					break;
				case "bank.pan":
					$counter++;
					break;
				case "pan":
					$counter++;
					break;
				case "bank.name":
					$counter++;
					break;
				case "name":
					$counter++;
					break;
				case "bank.id_person":
					$counter++;
					break;
				case "id_person":
					$counter++;
					break;
				}
			}
			if ($counter == $field_count) return true;
			return false;
		}
}
?>
