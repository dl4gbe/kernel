<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_file_managed
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
		foreach ($data as $drupal_file_managed)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_file_managed->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_file_managed->get_timestamp() . "'" . "," . "'" . $drupal_file_managed->get_status() . "'" . "," . "'" . $drupal_file_managed->get_filesize() . "'" . "," . "'" . $drupal_file_managed->get_filemime() . "'" . "," . "'" . $drupal_file_managed->get_uri() . "'" . "," . "'" . $drupal_file_managed->get_filename() . "'" . "," . "'" . $drupal_file_managed->get_uid() . "'" . "," . "'" . $drupal_file_managed->get_fid() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
