<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_node_revision
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
		foreach ($data as $drupal_node_revision)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_node_revision->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_node_revision->get_sticky() . "'" . "," . "'" . $drupal_node_revision->get_promote() . "'" . "," . "'" . $drupal_node_revision->get_comment() . "'" . "," . "'" . $drupal_node_revision->get_status() . "'" . "," . "'" . $drupal_node_revision->get_timestamp() . "'" . "," . "'" . $drupal_node_revision->get_log() . "'" . "," . "'" . $drupal_node_revision->get_title() . "'" . "," . "'" . $drupal_node_revision->get_uid() . "'" . "," . "'" . $drupal_node_revision->get_vid() . "'" . "," . "'" . $drupal_node_revision->get_nid() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
