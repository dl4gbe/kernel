<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_location
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
		foreach ($data as $location)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $location->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $location->get_sollversteuerung() . "'" . "," . "'" . $location->get_id_person_laywer() . "'" . "," . "'" . $location->get_id_person_taxadvisor() . "'" . "," . "'" . $location->get_id_person_revenue_department() . "'" . "," . "'" . $location->get_taxid() . "'" . "," . "'" . $location->get_id_insurance_district() . "'" . "," . "'" . $location->get_id_chart_of_account() . "'" . "," . "'" . $location->get_iscenter() . "'" . "," . "'" . $location->get_ik() . "'" . "," . "'" . $location->get_unique_credit_identifier() . "'" . "," . "'" . $location->get_no() . "'" . "," . "'" . $location->get_id_person() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
