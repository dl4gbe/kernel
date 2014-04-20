<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_offer_time
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
		foreach ($data as $offer_time)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $offer_time->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $offer_time->get_remark() . "'" . "," . "'" . $offer_time->get_duration_in_minutes() . "'" . "," . "'" . $offer_time->get_timetil() . "'" . "," . "'" . $offer_time->get_timefrom() . "'" . "," . "'" . $offer_time->get_validtil() . "'" . "," . "'" . $offer_time->get_validfrom() . "'" . "," . "'" . $offer_time->get_dayofweek() . "'" . "," . "'" . $offer_time->get_id_offer() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
