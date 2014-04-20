<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_contract_template_item
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
		foreach ($data as $contract_template_item)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $contract_template_item->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $contract_template_item->get_freeunitsperyear() . "'" . "," . "'" . $contract_template_item->get_freeunitspermonth() . "'" . "," . "'" . $contract_template_item->get_freeunitsperweek() . "'" . "," . "'" . $contract_template_item->get_freeunitsperday() . "'" . "," . "'" . $contract_template_item->get_increaseperyear() . "'" . "," . "'" . $contract_template_item->get_increasepermonth() . "'" . "," . "'" . $contract_template_item->get_amountperyear() . "'" . "," . "'" . $contract_template_item->get_amountpermonth() . "'" . "," . "'" . $contract_template_item->get_amountperweek() . "'" . "," . "'" . $contract_template_item->get_amountperday() . "'" . "," . "'" . $contract_template_item->get_durationinmonths() . "'" . "," . "'" . $contract_template_item->get_maincontract() . "'" . "," . "'" . $contract_template_item->get_id_article() . "'" . "," . "'" . $contract_template_item->get_name() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
