<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_therapy_plan
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
		foreach ($data as $therapy_plan)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $therapy_plan->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $therapy_plan->get_id_therapy_plan_template() . "'" . "," . "'" . $therapy_plan->get_id_person() . "'" . "," . "'" . $therapy_plan->get_id_person_employee_created() . "'" . "," . "'" . $therapy_plan->get_create_date() . "'" . "," . "'" . $therapy_plan->get_valid_from() . "'" . "," . "'" . $therapy_plan->get_valid_til() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
