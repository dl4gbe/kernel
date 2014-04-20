<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_article_person_rent
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
		foreach ($data as $article_person_rent)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $article_person_rent->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $article_person_rent->get_id_article() . "'" . "," . "'" . $article_person_rent->get_id_person() . "'" . "," . "'" . $article_person_rent->get_datefrom() . "'" . "," . "'" . $article_person_rent->get_datetil() . "'" . "," . "'" . $article_person_rent->get_id_posting_header() . "'" . "," . "'" . $article_person_rent->get_id_person_employee_issued() . "'" . "," . "'" . $article_person_rent->get_id_person_employee_returned() . "'" . "," . "'" . $article_person_rent->get_id_fixed_asset() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
