<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_address
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
		foreach ($data as $address)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $address->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $address->get_id_data() . "'" . "," . "'" . $address->get_address1() . "'" . "," . "'" . $address->get_address2() . "'" . "," . "'" . $address->get_zip() . "'" . "," . "'" . $address->get_city() . "'" . "," . "'" . $address->get_id_country() . "'" . "," . "'" . $address->get_main() . "'" . "," . "'" . $address->get_id_address_type() . "'" . "," . "'" . $address->get_lat() . "'" . "," . "'" . $address->get_lon() . "'" . "," . "'" . $address->get_open_geo_db_id() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
