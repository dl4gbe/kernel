<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_menu_item
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
		foreach ($data as $menu_item)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $menu_item->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $menu_item->get_id_menu_group() . "'" . "," . "'" . $menu_item->get_name() . "'" . "," . "'" . $menu_item->get_id_control() . "'" . "," . "'" . $menu_item->get_order() . "'" . "," . "'" . $menu_item->get_imagepath() . "'" . "," . "'" . $menu_item->get_active() . "'" . "," . "'" . $menu_item->get_parameters() . "'" . "," . "'" . $menu_item->get_table_name() . "'" . "," . "'" . $menu_item->get_id_data_view() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
