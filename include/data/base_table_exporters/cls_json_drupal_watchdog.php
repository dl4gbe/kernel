<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_watchdog
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
		foreach ($data as $drupal_watchdog)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_watchdog->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_watchdog->get_timestamp() . "'" . "," . "'" . $drupal_watchdog->get_hostname() . "'" . "," . "'" . $drupal_watchdog->get_referer() . "'" . "," . "'" . $drupal_watchdog->get_location() . "'" . "," . "'" . $drupal_watchdog->get_link() . "'" . "," . "'" . $drupal_watchdog->get_severity() . "'" . "," . "'" . $drupal_watchdog->get_variables() . "'" . "," . "'" . $drupal_watchdog->get_message() . "'" . "," . "'" . $drupal_watchdog->get_type() . "'" . "," . "'" . $drupal_watchdog->get_uid() . "'" . "," . "'" . $drupal_watchdog->get_wid() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
