<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_taxonomy_vocabulary
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
		foreach ($data as $drupal_taxonomy_vocabulary)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_taxonomy_vocabulary->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_taxonomy_vocabulary->get_weight() . "'" . "," . "'" . $drupal_taxonomy_vocabulary->get_module() . "'" . "," . "'" . $drupal_taxonomy_vocabulary->get_hierarchy() . "'" . "," . "'" . $drupal_taxonomy_vocabulary->get_description() . "'" . "," . "'" . $drupal_taxonomy_vocabulary->get_machine_name() . "'" . "," . "'" . $drupal_taxonomy_vocabulary->get_name() . "'" . "," . "'" . $drupal_taxonomy_vocabulary->get_vid() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
