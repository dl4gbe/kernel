<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_table_relation
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
		foreach ($data as $table_relation)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $table_relation->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $table_relation->get_table_name_parent() . "'" . "," . "'" . $table_relation->get_parent_table_field() . "'" . "," . "'" . $table_relation->get_table_name_child() . "'" . "," . "'" . $table_relation->get_child_table_field() . "'" . "," . "'" . $table_relation->get_activ() . "'" . "," . "'" . $table_relation->get_remark() . "'" . "," . "'" . $table_relation->get_alias() . "'" . "," . "'" . $table_relation->get_one_to_many() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
