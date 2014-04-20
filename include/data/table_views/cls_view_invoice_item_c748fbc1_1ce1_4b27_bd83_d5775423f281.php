<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_invoice_item_c748fbc1_1ce1_4b27_bd83_d5775423f281 extends cls_table_view_base 
{
	private $p_column_definitions = null;

	function __construct()
	{
		$a = func_get_args();
		$i = func_num_args();
		if (method_exists($this,$f="__construct".$i))
		{
			call_user_func_array(array($this,$f),$a);
		}
	}
	public function query($search_values,$limit,$offset)
		{
		require_once('include/data/table_factory/cls_table_factory.php');
		$common_invoice_item = cls_table_factory::get_common_invoice_item();
		$array_invoice_item =  $common_invoice_item->get_invoice_items($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_invoice($array_invoice_item);
		$data_array_id_invoice = $this->fill_distinct_id_invoice($where);

		$where = $this->get_distinct_ids_id_posting_header($array_invoice_item);
		$data_array_id_posting_header = $this->fill_distinct_id_posting_header($where);

		$result_array = array();
		foreach($array_invoice_item as $invoice_item)
			{
			$invoice_item_id = $invoice_item->get_id();
			$result_array[$invoice_item_id]['invoice_item.id'] = $invoice_item->get_id();
			$link_id = $invoice_item->get_id_invoice();
			if (empty($link_id))
				{
				$result_array[$invoice_item_id]['invoice.invoiceno'] = '';
				}
			else
				{
				$result_array[$invoice_item_id]['invoice.invoiceno'] = $data_array_id_invoice[$link_id]->get_invoiceno();
				}
			$link_id = $invoice_item->get_id_posting_header();
			if (empty($link_id))
				{
				$result_array[$invoice_item_id]['posting_header.remark'] = '';
				}
			else
				{
				$result_array[$invoice_item_id]['posting_header.remark'] = $data_array_id_posting_header[$link_id]->get_remark();
				}
			$link_id = $invoice_item->get_id_posting_header();
			if (empty($link_id))
				{
				$result_array[$invoice_item_id]['posting_header.systemremark'] = '';
				}
			else
				{
				$result_array[$invoice_item_id]['posting_header.systemremark'] = $data_array_id_posting_header[$link_id]->get_systemremark();
				}
			$result_array[$invoice_item_id]['invoice_item.amount'] = $invoice_item->get_amount();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_invoice($array_invoice_item)
	{
		$ids = array();
		foreach ($array_invoice_item as $invoice_item)
		{
			$id = $invoice_item->get_id_invoice();
			if (!in_array($id,$ids)) $ids[] = $id;
		}
		$i = 0;
		$in = "";
		foreach ($ids as $id)
		{
			if (empty($id)) continue;
			if ($i != 0) $in .= ',';
			$in .= "'" . $id . "'";
			$i++;
		}
		if (!empty($in)) $in = ' id in (' . $in . ')';
		return $in;
	}

	private function fill_distinct_id_invoice($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "invoice.id",invoice.invoiceno as "invoice.invoiceno" from invoice where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$invoice = cls_table_factory::create_instance('invoice');
			$invoice->fill($row);
			$data[$row['invoice.id']] = $invoice;
		}
		return $data;
	}

	private function get_distinct_ids_id_posting_header($array_invoice_item)
	{
		$ids = array();
		foreach ($array_invoice_item as $invoice_item)
		{
			$id = $invoice_item->get_id_posting_header();
			if (!in_array($id,$ids)) $ids[] = $id;
		}
		$i = 0;
		$in = "";
		foreach ($ids as $id)
		{
			if (empty($id)) continue;
			if ($i != 0) $in .= ',';
			$in .= "'" . $id . "'";
			$i++;
		}
		if (!empty($in)) $in = ' id in (' . $in . ')';
		return $in;
	}

	private function fill_distinct_id_posting_header($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "posting_header.id",posting_header.remark as "posting_header.remark",posting_header.systemremark as "posting_header.systemremark" from posting_header where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$posting_header = cls_table_factory::create_instance('posting_header');
			$posting_header->fill($row);
			$data[$row['posting_header.id']] = $posting_header;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['invoice_item.id']['type'] = 'uuid';
			$this->p_column_definitions['invoice.invoiceno']['type'] = 'varchar';
			$this->p_column_definitions['posting_header.remark']['type'] = 'varchar';
			$this->p_column_definitions['posting_header.systemremark']['type'] = 'varchar';
			$this->p_column_definitions['invoice_item.amount']['type'] = 'money';
		}
		return $this->p_column_definitions;
	}
}
?>
