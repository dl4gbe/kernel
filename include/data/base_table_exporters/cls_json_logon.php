<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_logon
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
		foreach ($data as $logon)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $logon->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $logon->get_id_location() . "'" . "," . "'" . $logon->get_password() . "'" . "," . "'" . $logon->get_username() . "'" . "," . "'" . $logon->get_id_person() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
