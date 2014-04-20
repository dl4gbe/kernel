<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_sessions
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
		foreach ($data as $drupal_sessions)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_sessions->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_sessions->get_session() . "'" . "," . "'" . $drupal_sessions->get_cache() . "'" . "," . "'" . $drupal_sessions->get_timestamp() . "'" . "," . "'" . $drupal_sessions->get_hostname() . "'" . "," . "'" . $drupal_sessions->get_ssid() . "'" . "," . "'" . $drupal_sessions->get_sid() . "'" . "," . "'" . $drupal_sessions->get_uid() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
