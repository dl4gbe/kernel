<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_person_desease
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
		foreach ($data as $person_desease)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $person_desease->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $person_desease->get_id_person() . "'" . "," . "'" . $person_desease->get_id_desease() . "'" . "," . "'" . $person_desease->get_id_offer_event() . "'" . "," . "'" . $person_desease->get_state() . "'" . "," . "'" . $person_desease->get_id_person_employee() . "'" . "," . "'" . $person_desease->get_issuedate() . "'" . "," . "'" . $person_desease->get_quarter() . "'" . "," . "'" . $person_desease->get_remark() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
