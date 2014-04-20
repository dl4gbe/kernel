<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_article_rent_price
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
		foreach ($data as $article_rent_price)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $article_rent_price->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $article_rent_price->get_id_article() . "'" . "," . "'" . $article_rent_price->get_deposit() . "'" . "," . "'" . $article_rent_price->get_id_article_price_group() . "'" . "," . "'" . $article_rent_price->get_validfrom() . "'" . "," . "'" . $article_rent_price->get_validtil() . "'" . "," . "'" . $article_rent_price->get_price_per_unit() . "'" . "," . "'" . $article_rent_price->get_id_time_unit() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
