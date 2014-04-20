<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_users
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
		foreach ($data as $drupal_users)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_users->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_users->get_data() . "'" . "," . "'" . $drupal_users->get_init() . "'" . "," . "'" . $drupal_users->get_picture() . "'" . "," . "'" . $drupal_users->get_language() . "'" . "," . "'" . $drupal_users->get_timezone() . "'" . "," . "'" . $drupal_users->get_status() . "'" . "," . "'" . $drupal_users->get_login() . "'" . "," . "'" . $drupal_users->get_access() . "'" . "," . "'" . $drupal_users->get_created() . "'" . "," . "'" . $drupal_users->get_signature_format() . "'" . "," . "'" . $drupal_users->get_signature() . "'" . "," . "'" . $drupal_users->get_theme() . "'" . "," . "'" . $drupal_users->get_mail() . "'" . "," . "'" . $drupal_users->get_pass() . "'" . "," . "'" . $drupal_users->get_name() . "'" . "," . "'" . $drupal_users->get_uid() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
