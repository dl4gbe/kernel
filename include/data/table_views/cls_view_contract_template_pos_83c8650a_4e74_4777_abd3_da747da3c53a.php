<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_contract_template_pos_83c8650a_4e74_4777_abd3_da747da3c53a extends cls_table_view_base 
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
		$common_contract_template_pos = cls_table_factory::get_common_contract_template_pos();
		$array_contract_template_pos =  $common_contract_template_pos->get_contract_template_poss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_contract_template($array_contract_template_pos);
		$data_array_id_contract_template = $this->fill_distinct_id_contract_template($where);

		$where = $this->get_distinct_ids_id_article($array_contract_template_pos);
		$data_array_id_article = $this->fill_distinct_id_article($where);

		$result_array = array();
		foreach($array_contract_template_pos as $contract_template_pos)
			{
			$contract_template_pos_id = $contract_template_pos->get_id();
			$result_array[$contract_template_pos_id]['contract_template_pos.id'] = $contract_template_pos->get_id();
			$link_id = $contract_template_pos->get_id_contract_template();
			if (empty($link_id))
				{
				$result_array[$contract_template_pos_id]['contract_template.name'] = '';
				}
			else
				{
				$result_array[$contract_template_pos_id]['contract_template.name'] = $data_array_id_contract_template[$link_id]->get_name();
				}
			$result_array[$contract_template_pos_id]['contract_template_pos.name'] = $contract_template_pos->get_name();
			$link_id = $contract_template_pos->get_id_article();
			if (empty($link_id))
				{
				$result_array[$contract_template_pos_id]['article.name'] = '';
				}
			else
				{
				$result_array[$contract_template_pos_id]['article.name'] = $data_array_id_article[$link_id]->get_name();
				}
			$result_array[$contract_template_pos_id]['contract_template_pos.maincontract'] = $contract_template_pos->get_maincontract();
			$result_array[$contract_template_pos_id]['contract_template_pos.durationinmonths'] = $contract_template_pos->get_durationinmonths();
			$result_array[$contract_template_pos_id]['contract_template_pos.amountperday'] = $contract_template_pos->get_amountperday();
			$result_array[$contract_template_pos_id]['contract_template_pos.amountperweek'] = $contract_template_pos->get_amountperweek();
			$result_array[$contract_template_pos_id]['contract_template_pos.amountpermonth'] = $contract_template_pos->get_amountpermonth();
			$result_array[$contract_template_pos_id]['contract_template_pos.amountperyear'] = $contract_template_pos->get_amountperyear();
			$result_array[$contract_template_pos_id]['contract_template_pos.increasepermonth'] = $contract_template_pos->get_increasepermonth();
			$result_array[$contract_template_pos_id]['contract_template_pos.increaseperyear'] = $contract_template_pos->get_increaseperyear();
			$result_array[$contract_template_pos_id]['contract_template_pos.freeunitsperday'] = $contract_template_pos->get_freeunitsperday();
			$result_array[$contract_template_pos_id]['contract_template_pos.freeunitsperweek'] = $contract_template_pos->get_freeunitsperweek();
			$result_array[$contract_template_pos_id]['contract_template_pos.freeunitspermonth'] = $contract_template_pos->get_freeunitspermonth();
			$result_array[$contract_template_pos_id]['contract_template_pos.freeunitsperyear'] = $contract_template_pos->get_freeunitsperyear();
			$result_array[$contract_template_pos_id]['contract_template_pos.optional'] = $contract_template_pos->get_optional();
			$result_array[$contract_template_pos_id]['contract_template_pos.paymentinterval'] = $contract_template_pos->get_paymentinterval();
			$result_array[$contract_template_pos_id]['contract_template_pos.paymentcycle'] = $contract_template_pos->get_paymentcycle();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_contract_template($array_contract_template_pos)
	{
		$ids = array();
		foreach ($array_contract_template_pos as $contract_template_pos)
		{
			$id = $contract_template_pos->get_id_contract_template();
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

	private function fill_distinct_id_contract_template($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "contract_template.id",contract_template.name as "contract_template.name" from contract_template where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$contract_template = cls_table_factory::create_instance('contract_template');
			$contract_template->fill($row);
			$data[$row['contract_template.id']] = $contract_template;
		}
		return $data;
	}

	private function get_distinct_ids_id_article($array_contract_template_pos)
	{
		$ids = array();
		foreach ($array_contract_template_pos as $contract_template_pos)
		{
			$id = $contract_template_pos->get_id_article();
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

	private function fill_distinct_id_article($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "article.id",article.name as "article.name" from article where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$article = cls_table_factory::create_instance('article');
			$article->fill($row);
			$data[$row['article.id']] = $article;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['contract_template_pos.id']['type'] = 'uuid';
			$this->p_column_definitions['contract_template.name']['type'] = 'varchar';
			$this->p_column_definitions['contract_template_pos.name']['type'] = 'varchar';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
			$this->p_column_definitions['contract_template_pos.maincontract']['type'] = 'bool';
			$this->p_column_definitions['contract_template_pos.durationinmonths']['type'] = 'int4';
			$this->p_column_definitions['contract_template_pos.amountperday']['type'] = 'money';
			$this->p_column_definitions['contract_template_pos.amountperweek']['type'] = 'money';
			$this->p_column_definitions['contract_template_pos.amountpermonth']['type'] = 'money';
			$this->p_column_definitions['contract_template_pos.amountperyear']['type'] = 'money';
			$this->p_column_definitions['contract_template_pos.increasepermonth']['type'] = 'numeric';
			$this->p_column_definitions['contract_template_pos.increaseperyear']['type'] = 'numeric';
			$this->p_column_definitions['contract_template_pos.freeunitsperday']['type'] = 'int4';
			$this->p_column_definitions['contract_template_pos.freeunitsperweek']['type'] = 'int4';
			$this->p_column_definitions['contract_template_pos.freeunitspermonth']['type'] = 'int4';
			$this->p_column_definitions['contract_template_pos.freeunitsperyear']['type'] = 'int4';
			$this->p_column_definitions['contract_template_pos.optional']['type'] = 'bool';
			$this->p_column_definitions['contract_template_pos.paymentinterval']['type'] = 'int4';
			$this->p_column_definitions['contract_template_pos.paymentcycle']['type'] = 'int4';
		}
		return $this->p_column_definitions;
	}
}
?>
