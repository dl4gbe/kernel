<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_field_config_instance
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
		foreach ($data as $drupal_field_config_instance)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_field_config_instance->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_field_config_instance->get_deleted() . "'" . "," . "'" . $drupal_field_config_instance->get_data() . "'" . "," . "'" . $drupal_field_config_instance->get_bundle() . "'" . "," . "'" . $drupal_field_config_instance->get_entity_type() . "'" . "," . "'" . $drupal_field_config_instance->get_field_name() . "'" . "," . "'" . $drupal_field_config_instance->get_field_id() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
