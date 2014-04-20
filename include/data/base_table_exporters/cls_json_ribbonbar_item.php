<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_ribbonbar_item
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
		foreach ($data as $ribbonbar_item)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $ribbonbar_item->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $ribbonbar_item->get_active() . "'" . "," . "'" . $ribbonbar_item->get_id_action() . "'" . "," . "'" . $ribbonbar_item->get_imagepath() . "'" . "," . "'" . $ribbonbar_item->get_name() . "'" . "," . "'" . $ribbonbar_item->get_item_order() . "'" . "," . "'" . $ribbonbar_item->get_id_ribbonbar_group() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
