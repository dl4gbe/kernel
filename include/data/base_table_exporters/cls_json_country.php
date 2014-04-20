<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_country
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
		foreach ($data as $country)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $country->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $country->get_open_geo_db_id() . "'" . "," . "'" . $country->get_id_chart_of_account_default() . "'" . "," . "'" . $country->get_currency() . "'" . "," . "'" . $country->get_sepa() . "'" . "," . "'" . $country->get_ibanlength() . "'" . "," . "'" . $country->get_display() . "'" . "," . "'" . $country->get_orderno() . "'" . "," . "'" . $country->get_countrycode() . "'" . "," . "'" . $country->get_nationality() . "'" . "," . "'" . $country->get_name() . "'" . "," . "'" . $country->get_alpha3() . "'" . "," . "'" . $country->get_alpha2() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
