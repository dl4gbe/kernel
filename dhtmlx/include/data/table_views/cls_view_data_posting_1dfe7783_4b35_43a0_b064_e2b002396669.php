<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_data_posting_1dfe7783_4b35_43a0_b064_e2b002396669 extends cls_table_view_base 
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
		$common_data_posting = cls_table_factory::get_common_data_posting();
		$array_data_posting =  $common_data_posting->get_data_postings($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_posting_header($array_data_posting);
		$data_array_id_posting_header = $this->fill_distinct_id_posting_header($where);

		$result_array = array();
		foreach($array_data_posting as $data_posting)
			{
			$data_posting_id = $data_posting->get_id();
			$result_array[$data_posting_id]['data_posting.id'] = $data_posting->get_id();
			$result_array[$data_posting_id]['data_posting.id_data'] = $data_posting->get_id_data();
			$link_id = $data_posting->get_id_posting_header();
			if (empty($link_id))
				{
				$result_array[$data_posting_id]['posting_header.remark'] = '';
				}
			else
				{
				$result_array[$data_posting_id]['posting_header.remark'] = $data_array_id_posting_header[$link_id]->get_remark();
				}
			$link_id = $data_posting->get_id_posting_header();
			if (empty($link_id))
				{
				$result_array[$data_posting_id]['posting_header.systemremark'] = '';
				}
			else
				{
				$result_array[$data_posting_id]['posting_header.systemremark'] = $data_array_id_posting_header[$link_id]->get_systemremark();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_posting_header($array_data_posting)
	{
		$ids = array();
		foreach ($array_data_posting as $data_posting)
		{
			$id = $data_posting->get_id_posting_header();
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
			$this->p_column_definitions['data_posting.id']['type'] = 'uuid';
			$this->p_column_definitions['data_posting.id_data']['type'] = 'uuid';
			$this->p_column_definitions['posting_header.remark']['type'] = 'varchar';
			$this->p_column_definitions['posting_header.systemremark']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
