<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_date_format_type
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
		foreach ($data as $drupal_date_format_type)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_date_format_type->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_date_format_type->get_locked() . "'" . "," . "'" . $drupal_date_format_type->get_title() . "'" . "," . "'" . $drupal_date_format_type->get_type() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>