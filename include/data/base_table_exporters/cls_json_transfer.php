<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_transfer
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
		foreach ($data as $transfer)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $transfer->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $transfer->get_remark() . "'" . "," . "'" . $transfer->get_defaultrun() . "'" . "," . "'" . $transfer->get_id_person_storno() . "'" . "," . "'" . $transfer->get_stornodate() . "'" . "," . "'" . $transfer->get_id_bank_account() . "'" . "," . "'" . $transfer->get_typ() . "'" . "," . "'" . $transfer->get_rundate() . "'" . "," . "'" . $transfer->get_id_person_employee() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
