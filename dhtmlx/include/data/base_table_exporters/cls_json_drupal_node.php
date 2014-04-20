<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_node
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
		foreach ($data as $drupal_node)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_node->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_node->get_nid() . "'" . "," . "'" . $drupal_node->get_vid() . "'" . "," . "'" . $drupal_node->get_type() . "'" . "," . "'" . $drupal_node->get_language() . "'" . "," . "'" . $drupal_node->get_title() . "'" . "," . "'" . $drupal_node->get_uid() . "'" . "," . "'" . $drupal_node->get_status() . "'" . "," . "'" . $drupal_node->get_created() . "'" . "," . "'" . $drupal_node->get_changed() . "'" . "," . "'" . $drupal_node->get_comment() . "'" . "," . "'" . $drupal_node->get_promote() . "'" . "," . "'" . $drupal_node->get_sticky() . "'" . "," . "'" . $drupal_node->get_tnid() . "'" . "," . "'" . $drupal_node->get_translate() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
