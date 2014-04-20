<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_menu_custom
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
		foreach ($data as $drupal_menu_custom)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_menu_custom->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_menu_custom->get_menu_name() . "'" . "," . "'" . $drupal_menu_custom->get_title() . "'" . "," . "'" . $drupal_menu_custom->get_description() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
