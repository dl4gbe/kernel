<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_field_revision_field_first_name
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
		foreach ($data as $drupal_field_revision_field_first_name)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_field_revision_field_first_name->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_field_revision_field_first_name->get_field_first_name_format() . "'" . "," . "'" . $drupal_field_revision_field_first_name->get_field_first_name_value() . "'" . "," . "'" . $drupal_field_revision_field_first_name->get_delta() . "'" . "," . "'" . $drupal_field_revision_field_first_name->get_language() . "'" . "," . "'" . $drupal_field_revision_field_first_name->get_revision_id() . "'" . "," . "'" . $drupal_field_revision_field_first_name->get_entity_id() . "'" . "," . "'" . $drupal_field_revision_field_first_name->get_deleted() . "'" . "," . "'" . $drupal_field_revision_field_first_name->get_bundle() . "'" . "," . "'" . $drupal_field_revision_field_first_name->get_entity_type() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
