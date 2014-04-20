<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_block
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
		foreach ($data as $drupal_block)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_block->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_block->get_bid() . "'" . "," . "'" . $drupal_block->get_module() . "'" . "," . "'" . $drupal_block->get_delta() . "'" . "," . "'" . $drupal_block->get_theme() . "'" . "," . "'" . $drupal_block->get_status() . "'" . "," . "'" . $drupal_block->get_weight() . "'" . "," . "'" . $drupal_block->get_region() . "'" . "," . "'" . $drupal_block->get_custom() . "'" . "," . "'" . $drupal_block->get_visibility() . "'" . "," . "'" . $drupal_block->get_pages() . "'" . "," . "'" . $drupal_block->get_title() . "'" . "," . "'" . $drupal_block->get_cache() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
