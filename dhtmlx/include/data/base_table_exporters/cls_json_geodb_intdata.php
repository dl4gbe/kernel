<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_geodb_intdata
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
		foreach ($data as $geodb_intdata)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $geodb_intdata->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $geodb_intdata->get_loc_id() . "'" . "," . "'" . $geodb_intdata->get_int_type() . "'" . "," . "'" . $geodb_intdata->get_int_val() . "'" . "," . "'" . $geodb_intdata->get_valid_since() . "'" . "," . "'" . $geodb_intdata->get_date_type_since() . "'" . "," . "'" . $geodb_intdata->get_valid_until() . "'" . "," . "'" . $geodb_intdata->get_date_type_until() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
