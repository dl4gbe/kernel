<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_contract_template_pos
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
		foreach ($data as $contract_template_pos)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $contract_template_pos->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $contract_template_pos->get_id_contract_template() . "'" . "," . "'" . $contract_template_pos->get_name() . "'" . "," . "'" . $contract_template_pos->get_id_article() . "'" . "," . "'" . $contract_template_pos->get_maincontract() . "'" . "," . "'" . $contract_template_pos->get_durationinmonths() . "'" . "," . "'" . $contract_template_pos->get_amountperday() . "'" . "," . "'" . $contract_template_pos->get_amountperweek() . "'" . "," . "'" . $contract_template_pos->get_amountpermonth() . "'" . "," . "'" . $contract_template_pos->get_amountperyear() . "'" . "," . "'" . $contract_template_pos->get_increasepermonth() . "'" . "," . "'" . $contract_template_pos->get_increaseperyear() . "'" . "," . "'" . $contract_template_pos->get_freeunitsperday() . "'" . "," . "'" . $contract_template_pos->get_freeunitsperweek() . "'" . "," . "'" . $contract_template_pos->get_freeunitspermonth() . "'" . "," . "'" . $contract_template_pos->get_freeunitsperyear() . "'" . "," . "'" . $contract_template_pos->get_optional() . "'" . "," . "'" . $contract_template_pos->get_paymentinterval() . "'" . "," . "'" . $contract_template_pos->get_paymentcycle() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
