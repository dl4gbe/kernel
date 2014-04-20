<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_contract_template_def67810_1d40_49ed_b371_2dc7ff335cac extends cls_table_view_base 
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
		$common_contract_template = cls_table_factory::get_common_contract_template();
		$array_contract_template =  $common_contract_template->get_contract_templates($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_contract_template_group($array_contract_template);
		$data_array_id_contract_template_group = $this->fill_distinct_id_contract_template_group($where);

		$result_array = array();
		foreach($array_contract_template as $contract_template)
			{
			$contract_template_id = $contract_template->get_id();
			$result_array[$contract_template_id]['contract_template.id'] = $contract_template->get_id();
			$result_array[$contract_template_id]['contract_template.name'] = $contract_template->get_name();
			$result_array[$contract_template_id]['contract_template.active'] = $contract_template->get_active();
			$result_array[$contract_template_id]['contract_template.maxsales'] = $contract_template->get_maxsales();
			$link_id = $contract_template->get_id_contract_template_group();
			if (empty($link_id))
				{
				$result_array[$contract_template_id]['contract_template_group.name'] = '';
				}
			else
				{
				$result_array[$contract_template_id]['contract_template_group.name'] = $data_array_id_contract_template_group[$link_id]->get_name();
				}
			$result_array[$contract_template_id]['contract_template.calcdifferenceamount'] = $contract_template->get_calcdifferenceamount();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_contract_template_group($array_contract_template)
	{
		$ids = array();
		foreach ($array_contract_template as $contract_template)
		{
			$id = $contract_template->get_id_contract_template_group();
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

	private function fill_distinct_id_contract_template_group($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "contract_template_group.id",contract_template_group.name as "contract_template_group.name" from contract_template_group where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$contract_template_group = cls_table_factory::create_instance('contract_template_group');
			$contract_template_group->fill($row);
			$data[$row['contract_template_group.id']] = $contract_template_group;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['contract_template.id']['type'] = 'uuid';
			$this->p_column_definitions['contract_template.name']['type'] = 'varchar';
			$this->p_column_definitions['contract_template.active']['type'] = 'bool';
			$this->p_column_definitions['contract_template.maxsales']['type'] = 'int4';
			$this->p_column_definitions['contract_template_group.name']['type'] = 'varchar';
			$this->p_column_definitions['contract_template.calcdifferenceamount']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
