<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_posting_header
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
		foreach ($data as $posting_header)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $posting_header->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $posting_header->get_id_posting_header_main_id() . "'" . "," . "'" . $posting_header->get_remark() . "'" . "," . "'" . $posting_header->get_id_offer_event() . "'" . "," . "'" . $posting_header->get_period() . "'" . "," . "'" . $posting_header->get_systemremark() . "'" . "," . "'" . $posting_header->get_duedate() . "'" . "," . "'" . $posting_header->get_paymenttype() . "'" . "," . "'" . $posting_header->get_id_contract() . "'" . "," . "'" . $posting_header->get_id_contract_pos() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
