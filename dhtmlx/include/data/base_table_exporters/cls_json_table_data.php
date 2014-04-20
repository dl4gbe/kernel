<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_table_data
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
		foreach ($data as $table_data)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $table_data->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $table_data->get_table_name() . "'" . "," . "'" . $table_data->get_location_independant() . "'" . "," . "'" . $table_data->get_static_data() . "'" . "," . "'" . $table_data->get_use_orm() . "'" . "," . "'" . $table_data->get_create_history() . "'" . "," . "'" . $table_data->get_searchable() . "'" . "," . "'" . $table_data->get_id_table_search_template() . "'" . "," . "'" . $table_data->get_config_table() . "'" . "," . "'" . $table_data->get_id_data_view_default() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
