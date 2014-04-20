<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_comment
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
		foreach ($data as $drupal_comment)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_comment->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_comment->get_language() . "'" . "," . "'" . $drupal_comment->get_homepage() . "'" . "," . "'" . $drupal_comment->get_mail() . "'" . "," . "'" . $drupal_comment->get_name() . "'" . "," . "'" . $drupal_comment->get_thread() . "'" . "," . "'" . $drupal_comment->get_status() . "'" . "," . "'" . $drupal_comment->get_changed() . "'" . "," . "'" . $drupal_comment->get_created() . "'" . "," . "'" . $drupal_comment->get_hostname() . "'" . "," . "'" . $drupal_comment->get_subject() . "'" . "," . "'" . $drupal_comment->get_uid() . "'" . "," . "'" . $drupal_comment->get_nid() . "'" . "," . "'" . $drupal_comment->get_pid() . "'" . "," . "'" . $drupal_comment->get_cid() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
