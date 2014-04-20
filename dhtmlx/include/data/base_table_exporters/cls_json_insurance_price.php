<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_insurance_price
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
		foreach ($data as $insurance_price)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $insurance_price->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $insurance_price->get_id_insurance() . "'" . "," . "'" . $insurance_price->get_id_insurance_group() . "'" . "," . "'" . $insurance_price->get_id_article() . "'" . "," . "'" . $insurance_price->get_validfrom() . "'" . "," . "'" . $insurance_price->get_price() . "'" . "," . "'" . $insurance_price->get_onlyfornewprescriptions() . "'" . "," . "'" . $insurance_price->get_id_insurance_district() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
