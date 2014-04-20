<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_supplier_data
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
		foreach ($data as $supplier_data)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $supplier_data->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $supplier_data->get_remark() . "'" . "," . "'" . $supplier_data->get_min_order_days() . "'" . "," . "'" . $supplier_data->get_min_order_qty() . "'" . "," . "'" . $supplier_data->get_name() . "'" . "," . "'" . $supplier_data->get_orderno() . "'" . "," . "'" . $supplier_data->get_id_data() . "'" . "," . "'" . $supplier_data->get_id_person_manufactorer() . "'" . "," . "'" . $supplier_data->get_id_person_supplier() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
