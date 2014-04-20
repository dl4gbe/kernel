<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_contract_pos
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
		foreach ($data as $contract_pos)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $contract_pos->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $contract_pos->get_id_contract() . "'" . "," . "'" . $contract_pos->get_startdate() . "'" . "," . "'" . $contract_pos->get_maincontract() . "'" . "," . "'" . $contract_pos->get_paymenttype() . "'" . "," . "'" . $contract_pos->get_enddate() . "'" . "," . "'" . $contract_pos->get_paymentstart() . "'" . "," . "'" . $contract_pos->get_cancelrequestreceived() . "'" . "," . "'" . $contract_pos->get_extendable() . "'" . "," . "'" . $contract_pos->get_id_article() . "'" . "," . "'" . $contract_pos->get_id_contract_template_pos() . "'" . "," . "'" . $contract_pos->get_payday() . "'" . "," . "'" . $contract_pos->get_paydow() . "'" . "," . "'" . $contract_pos->get_durationinmonths() . "'" . "," . "'" . $contract_pos->get_extensioninmonth() . "'" . "," . "'" . $contract_pos->get_amountperday() . "'" . "," . "'" . $contract_pos->get_amountperweek() . "'" . "," . "'" . $contract_pos->get_amountpermonth() . "'" . "," . "'" . $contract_pos->get_amountperyear() . "'" . "," . "'" . $contract_pos->get_increasepermonth() . "'" . "," . "'" . $contract_pos->get_increaseperyear() . "'" . "," . "'" . $contract_pos->get_freeunitsperday() . "'" . "," . "'" . $contract_pos->get_freeunitsperweek() . "'" . "," . "'" . $contract_pos->get_freeunitspermonth() . "'" . "," . "'" . $contract_pos->get_freeunitsperyear() . "'" . "," . "'" . $contract_pos->get_paymentinterval() . "'" . "," . "'" . $contract_pos->get_paymentcycle() . "'" . "," . "'" . $contract_pos->get_paymentsduringrestperiod() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
