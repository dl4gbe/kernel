<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_bank_account_mandat
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
		foreach ($data as $bank_account_mandat)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $bank_account_mandat->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $bank_account_mandat->get_id_bank_account() . "'" . "," . "'" . $bank_account_mandat->get_mandatsreferenzno() . "'" . "," . "'" . $bank_account_mandat->get_signaturedate() . "'" . "," . "'" . $bank_account_mandat->get_issuedate() . "'" . "," . "'" . $bank_account_mandat->get_firstname() . "'" . "," . "'" . $bank_account_mandat->get_lastname() . "'" . "," . "'" . $bank_account_mandat->get_address() . "'" . "," . "'" . $bank_account_mandat->get_zip() . "'" . "," . "'" . $bank_account_mandat->get_city() . "'" . "," . "'" . $bank_account_mandat->get_iban() . "'" . "," . "'" . $bank_account_mandat->get_bic() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
