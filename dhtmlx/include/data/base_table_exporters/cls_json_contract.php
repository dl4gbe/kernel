<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_contract
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
		foreach ($data as $contract)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $contract->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $contract->get_id_person() . "'" . "," . "'" . $contract->get_id_person_signer() . "'" . "," . "'" . $contract->get_id_campaign() . "'" . "," . "'" . $contract->get_id_person_promoter() . "'" . "," . "'" . $contract->get_id_bank_account() . "'" . "," . "'" . $contract->get_id_contract_template() . "'" . "," . "'" . $contract->get_contractstart() . "'" . "," . "'" . $contract->get_signeddate() . "'" . "," . "'" . $contract->get_accessdate() . "'" . "," . "'" . $contract->get_contractno() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
