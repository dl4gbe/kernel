<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_offer_event
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
		foreach ($data as $offer_event)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $offer_event->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $offer_event->get_id_event_type() . "'" . "," . "'" . $offer_event->get_id_offer() . "'" . "," . "'" . $offer_event->get_id_person() . "'" . "," . "'" . $offer_event->get_id_data() . "'" . "," . "'" . $offer_event->get_datefrom() . "'" . "," . "'" . $offer_event->get_datetil() . "'" . "," . "'" . $offer_event->get_data1() . "'" . "," . "'" . $offer_event->get_data2() . "'" . "," . "'" . $offer_event->get_id_device() . "'" . "," . "'" . $offer_event->get_id_posting_header() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
