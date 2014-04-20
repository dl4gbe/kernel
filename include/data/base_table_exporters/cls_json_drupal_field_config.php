<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_field_config
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
		foreach ($data as $drupal_field_config)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_field_config->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_field_config->get_deleted() . "'" . "," . "'" . $drupal_field_config->get_translatable() . "'" . "," . "'" . $drupal_field_config->get_cardinality() . "'" . "," . "'" . $drupal_field_config->get_data() . "'" . "," . "'" . $drupal_field_config->get_locked() . "'" . "," . "'" . $drupal_field_config->get_storage_active() . "'" . "," . "'" . $drupal_field_config->get_storage_module() . "'" . "," . "'" . $drupal_field_config->get_storage_type() . "'" . "," . "'" . $drupal_field_config->get_active() . "'" . "," . "'" . $drupal_field_config->get_module() . "'" . "," . "'" . $drupal_field_config->get_type() . "'" . "," . "'" . $drupal_field_config->get_field_name() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
