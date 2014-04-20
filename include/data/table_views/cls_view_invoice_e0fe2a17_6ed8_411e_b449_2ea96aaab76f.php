<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_invoice_e0fe2a17_6ed8_411e_b449_2ea96aaab76f extends cls_table_view_base 
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
		$common_invoice = cls_table_factory::get_common_invoice();
		$array_invoice =  $common_invoice->get_invoices($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person($array_invoice);
		$data_array_id_person = $this->fill_distinct_id_person($where);

		$where = $this->get_distinct_ids_id_person_employee($array_invoice);
		$data_array_id_person_employee = $this->fill_distinct_id_person_employee($where);

		$result_array = array();
		foreach($array_invoice as $invoice)
			{
			$invoice_id = $invoice->get_id();
			$result_array[$invoice_id]['invoice.id'] = $invoice->get_id();
			$link_id = $invoice->get_id_person();
			if (empty($link_id))
				{
				$result_array[$invoice_id]['person.name'] = '';
				}
			else
				{
				$result_array[$invoice_id]['person.name'] = $data_array_id_person[$link_id]->get_name();
				}
			$result_array[$invoice_id]['invoice.invoiceno'] = $invoice->get_invoiceno();
			$result_array[$invoice_id]['invoice.invoicedate'] = $invoice->get_invoicedate();
			$link_id = $invoice->get_id_person_employee();
			if (empty($link_id))
				{
				$result_array[$invoice_id]['person.name'] = '';
				}
			else
				{
				$result_array[$invoice_id]['person.name'] = $data_array_id_person_employee[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person($array_invoice)
	{
		$ids = array();
		foreach ($array_invoice as $invoice)
		{
			$id = $invoice->get_id_person();
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

	private function fill_distinct_id_person($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "person.id",person.name as "person.name" from person where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$person = cls_table_factory::create_instance('person');
			$person->fill($row);
			$data[$row['person.id']] = $person;
		}
		return $data;
	}

	private function get_distinct_ids_id_person_employee($array_invoice)
	{
		$ids = array();
		foreach ($array_invoice as $invoice)
		{
			$id = $invoice->get_id_person_employee();
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

	private function fill_distinct_id_person_employee($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "person.id",person.name as "person.name" from person where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$person = cls_table_factory::create_instance('person');
			$person->fill($row);
			$data[$row['person.id']] = $person;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['invoice.id']['type'] = 'uuid';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['invoice.invoiceno']['type'] = 'varchar';
			$this->p_column_definitions['invoice.invoicedate']['type'] = 'date';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
