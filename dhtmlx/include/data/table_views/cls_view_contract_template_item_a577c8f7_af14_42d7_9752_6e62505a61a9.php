<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_contract_template_item_a577c8f7_af14_42d7_9752_6e62505a61a9 extends cls_table_view_base 
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
		$common_contract_template_item = cls_table_factory::get_common_contract_template_item();
		$array_contract_template_item =  $common_contract_template_item->get_contract_template_items($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_article($array_contract_template_item);
		$data_array_id_article = $this->fill_distinct_id_article($where);

		$result_array = array();
		foreach($array_contract_template_item as $contract_template_item)
			{
			$contract_template_item_id = $contract_template_item->get_id();
			$result_array[$contract_template_item_id]['contract_template_item.id'] = $contract_template_item->get_id();
			$result_array[$contract_template_item_id]['contract_template_item.name'] = $contract_template_item->get_name();
			$link_id = $contract_template_item->get_id_article();
			if (empty($link_id))
				{
				$result_array[$contract_template_item_id]['article.name'] = '';
				}
			else
				{
				$result_array[$contract_template_item_id]['article.name'] = $data_array_id_article[$link_id]->get_name();
				}
			$result_array[$contract_template_item_id]['contract_template_item.maincontract'] = $contract_template_item->get_maincontract();
			$result_array[$contract_template_item_id]['contract_template_item.durationinmonths'] = $contract_template_item->get_durationinmonths();
			$result_array[$contract_template_item_id]['contract_template_item.amountperday'] = $contract_template_item->get_amountperday();
			$result_array[$contract_template_item_id]['contract_template_item.amountperweek'] = $contract_template_item->get_amountperweek();
			$result_array[$contract_template_item_id]['contract_template_item.amountpermonth'] = $contract_template_item->get_amountpermonth();
			$result_array[$contract_template_item_id]['contract_template_item.amountperyear'] = $contract_template_item->get_amountperyear();
			$result_array[$contract_template_item_id]['contract_template_item.increasepermonth'] = $contract_template_item->get_increasepermonth();
			$result_array[$contract_template_item_id]['contract_template_item.increaseperyear'] = $contract_template_item->get_increaseperyear();
			$result_array[$contract_template_item_id]['contract_template_item.freeunitsperday'] = $contract_template_item->get_freeunitsperday();
			$result_array[$contract_template_item_id]['contract_template_item.freeunitsperweek'] = $contract_template_item->get_freeunitsperweek();
			$result_array[$contract_template_item_id]['contract_template_item.freeunitspermonth'] = $contract_template_item->get_freeunitspermonth();
			$result_array[$contract_template_item_id]['contract_template_item.freeunitsperyear'] = $contract_template_item->get_freeunitsperyear();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_article($array_contract_template_item)
	{
		$ids = array();
		foreach ($array_contract_template_item as $contract_template_item)
		{
			$id = $contract_template_item->get_id_article();
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
			$this->p_column_definitions['contract_template_item.id']['type'] = 'uuid';
			$this->p_column_definitions['contract_template_item.name']['type'] = 'varchar';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
			$this->p_column_definitions['contract_template_item.maincontract']['type'] = 'bool';
			$this->p_column_definitions['contract_template_item.durationinmonths']['type'] = 'int4';
			$this->p_column_definitions['contract_template_item.amountperday']['type'] = 'money';
			$this->p_column_definitions['contract_template_item.amountperweek']['type'] = 'money';
			$this->p_column_definitions['contract_template_item.amountpermonth']['type'] = 'money';
			$this->p_column_definitions['contract_template_item.amountperyear']['type'] = 'money';
			$this->p_column_definitions['contract_template_item.increasepermonth']['type'] = 'numeric';
			$this->p_column_definitions['contract_template_item.increaseperyear']['type'] = 'numeric';
			$this->p_column_definitions['contract_template_item.freeunitsperday']['type'] = 'int4';
			$this->p_column_definitions['contract_template_item.freeunitsperweek']['type'] = 'int4';
			$this->p_column_definitions['contract_template_item.freeunitspermonth']['type'] = 'int4';
			$this->p_column_definitions['contract_template_item.freeunitsperyear']['type'] = 'int4';
		}
		return $this->p_column_definitions;
	}
}
?>
