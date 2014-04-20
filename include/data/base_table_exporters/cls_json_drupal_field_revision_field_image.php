<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_field_revision_field_image
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
		foreach ($data as $drupal_field_revision_field_image)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_field_revision_field_image->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_field_revision_field_image->get_field_image_height() . "'" . "," . "'" . $drupal_field_revision_field_image->get_field_image_width() . "'" . "," . "'" . $drupal_field_revision_field_image->get_field_image_title() . "'" . "," . "'" . $drupal_field_revision_field_image->get_field_image_alt() . "'" . "," . "'" . $drupal_field_revision_field_image->get_field_image_fid() . "'" . "," . "'" . $drupal_field_revision_field_image->get_delta() . "'" . "," . "'" . $drupal_field_revision_field_image->get_language() . "'" . "," . "'" . $drupal_field_revision_field_image->get_revision_id() . "'" . "," . "'" . $drupal_field_revision_field_image->get_entity_id() . "'" . "," . "'" . $drupal_field_revision_field_image->get_deleted() . "'" . "," . "'" . $drupal_field_revision_field_image->get_bundle() . "'" . "," . "'" . $drupal_field_revision_field_image->get_entity_type() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
