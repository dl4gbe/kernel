<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_node_type
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
		foreach ($data as $drupal_node_type)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_node_type->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_node_type->get_type() . "'" . "," . "'" . $drupal_node_type->get_name() . "'" . "," . "'" . $drupal_node_type->get_base() . "'" . "," . "'" . $drupal_node_type->get_module() . "'" . "," . "'" . $drupal_node_type->get_description() . "'" . "," . "'" . $drupal_node_type->get_help() . "'" . "," . "'" . $drupal_node_type->get_has_title() . "'" . "," . "'" . $drupal_node_type->get_title_label() . "'" . "," . "'" . $drupal_node_type->get_custom() . "'" . "," . "'" . $drupal_node_type->get_modified() . "'" . "," . "'" . $drupal_node_type->get_locked() . "'" . "," . "'" . $drupal_node_type->get_disabled() . "'" . "," . "'" . $drupal_node_type->get_orig_type() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
