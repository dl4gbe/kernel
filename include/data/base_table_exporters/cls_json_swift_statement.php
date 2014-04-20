<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_swift_statement
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
		foreach ($data as $swift_statement)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $swift_statement->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $swift_statement->get_transaction_reference_number() . "'" . "," . "'" . $swift_statement->get_statement_number() . "'" . "," . "'" . $swift_statement->get_related_reference() . "'" . "," . "'" . $swift_statement->get_opening_balance_date() . "'" . "," . "'" . $swift_statement->get_opening_balance_currency_code() . "'" . "," . "'" . $swift_statement->get_opening_balance_amount() . "'" . "," . "'" . $swift_statement->get_closing_balance_date() . "'" . "," . "'" . $swift_statement->get_closing_balance_currency_code() . "'" . "," . "'" . $swift_statement->get_closing_balance_amount() . "'" . "," . "'" . $swift_statement->get_closing_available_balance_date() . "'" . "," . "'" . $swift_statement->get_closing_available_balance_currency_code() . "'" . "," . "'" . $swift_statement->get_closing_available_balance_amount() . "'" . "," . "'" . $swift_statement->get_account_identification_code() . "'" . "," . "'" . $swift_statement->get_retrieval_date() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
