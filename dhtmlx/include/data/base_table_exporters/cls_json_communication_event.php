<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_communication_event
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
		foreach ($data as $communication_event)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $communication_event->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $communication_event->get_id_event_type() . "'" . "," . "'" . $communication_event->get_id_person() . "'" . "," . "'" . $communication_event->get_id_communication() . "'" . "," . "'" . $communication_event->get_id_person_employee_planned() . "'" . "," . "'" . $communication_event->get_plandate() . "'" . "," . "'" . $communication_event->get_id_person_employee_done() . "'" . "," . "'" . $communication_event->get_donedate() . "'" . "," . "'" . $communication_event->get_remark() . "'" . "," . "'" . $communication_event->get_id_communication_event_previous() . "'" . "," . "'" . $communication_event->get_state() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
