<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_account_chart_of_account
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
		foreach ($data as $account_chart_of_account)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $account_chart_of_account->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $account_chart_of_account->get_type() . "'" . "," . "'" . $account_chart_of_account->get_active() . "'" . "," . "'" . $account_chart_of_account->get_freedigits() . "'" . "," . "'" . $account_chart_of_account->get_name() . "'" . "," . "'" . $account_chart_of_account->get_accountno() . "'" . "," . "'" . $account_chart_of_account->get_id_account_group() . "'" . "," . "'" . $account_chart_of_account->get_id_chart_of_account() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
