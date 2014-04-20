<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_data_property_type
{
public function write_buffer($data)
	{
	}

public function echo_export_string($data)
	{
	echo $this->create_export_string($data);
	}

private function create_export_string($data)
	{
		$i = 0;
		$content = 'data = {' . PHP_EOL;
		$content .= 'rows: [' . PHP_EOL;
		foreach ($data as $data_property_type)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $data_property_type->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $data_property_type->get_lookuptable_wherecondition() . "'" . "," . "'" . $data_property_type->get_lookuptable_namefield5() . "'" . "," . "'" . $data_property_type->get_lookuptable_namefield4() . "'" . "," . "'" . $data_property_type->get_lookuptable_namefield3() . "'" . "," . "'" . $data_property_type->get_lookuptable_namefield2() . "'" . "," . "'" . $data_property_type->get_lookuptable_namefield1() . "'" . "," . "'" . $data_property_type->get_lookuptable_idfield() . "'" . "," . "'" . $data_property_type->get_lookuptablename() . "'" . "," . "'" . $data_property_type->get_active() . "'" . "," . "'" . $data_property_type->get_defaultvalue() . "'" . "," . "'" . $data_property_type->get_id_person_states() . "'" . "," . "'" . $data_property_type->get_datatype() . "'" . "," . "'" . $data_property_type->get_name() . "'" . "," . "'" . $data_property_type->get_tablename() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
