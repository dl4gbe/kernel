<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_person
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
		foreach ($data as $person)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $person->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $person->get_firstname() . "'" . "," . "'" . $person->get_lastname() . "'" . "," . "'" . $person->get_middlename() . "'" . "," . "'" . $person->get_id_salutation() . "'" . "," . "'" . $person->get_birthdate() . "'" . "," . "'" . $person->get_id_country_nationality() . "'" . "," . "'" . $person->get_id_bank_account() . "'" . "," . "'" . $person->get_paymenttype() . "'" . "," . "'" . $person->get_cardno() . "'" . "," . "'" . $person->get_id_article_price_group() . "'" . "," . "'" . $person->get_personno() . "'" . "," . "'" . $person->get_name() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
