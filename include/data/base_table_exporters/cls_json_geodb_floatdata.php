<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_geodb_floatdata
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
		foreach ($data as $geodb_floatdata)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $geodb_floatdata->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $geodb_floatdata->get_date_type_until() . "'" . "," . "'" . $geodb_floatdata->get_valid_until() . "'" . "," . "'" . $geodb_floatdata->get_date_type_since() . "'" . "," . "'" . $geodb_floatdata->get_valid_since() . "'" . "," . "'" . $geodb_floatdata->get_float_val() . "'" . "," . "'" . $geodb_floatdata->get_float_type() . "'" . "," . "'" . $geodb_floatdata->get_loc_id() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
