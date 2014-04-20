<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_languages
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
		foreach ($data as $drupal_languages)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_languages->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_languages->get_javascript() . "'" . "," . "'" . $drupal_languages->get_weight() . "'" . "," . "'" . $drupal_languages->get_prefix() . "'" . "," . "'" . $drupal_languages->get_domain() . "'" . "," . "'" . $drupal_languages->get_formula() . "'" . "," . "'" . $drupal_languages->get_plurals() . "'" . "," . "'" . $drupal_languages->get_enabled() . "'" . "," . "'" . $drupal_languages->get_direction() . "'" . "," . "'" . $drupal_languages->get_native() . "'" . "," . "'" . $drupal_languages->get_name() . "'" . "," . "'" . $drupal_languages->get_language() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
