<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_account_group
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
		foreach ($data as $account_group)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $account_group->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $account_group->get_id_chart_of_account() . "'" . "," . "'" . $account_group->get_no() . "'" . "," . "'" . $account_group->get_name() . "'" . "," . "'" . $account_group->get_accountfrom() . "'" . "," . "'" . $account_group->get_accounttil() . "'" . "," . "'" . $account_group->get_balancesheetaccount() . "'" . "," . "'" . $account_group->get_profitandlostaccount() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>