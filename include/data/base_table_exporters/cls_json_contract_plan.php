<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_contract_plan
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
		foreach ($data as $contract_plan)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $contract_plan->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $contract_plan->get_paymenttype() . "'" . "," . "'" . $contract_plan->get_id_contract_pos() . "'" . "," . "'" . $contract_plan->get_type() . "'" . "," . "'" . $contract_plan->get_id_posting_header() . "'" . "," . "'" . $contract_plan->get_duedate() . "'" . "," . "'" . $contract_plan->get_amount() . "'" . "," . "'" . $contract_plan->get_datetil() . "'" . "," . "'" . $contract_plan->get_datefrom() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
