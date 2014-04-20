<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_contract_template_onetimepayment_11c0b1c2_8b75_4423_864d_baf4a8b4362f extends cls_table_view_base 
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
		$common_contract_template_onetimepayment = cls_table_factory::get_common_contract_template_onetimepayment();
		$array_contract_template_onetimepayment =  $common_contract_template_onetimepayment->get_contract_template_onetimepayments($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_contract_template($array_contract_template_onetimepayment);
		$data_array_id_contract_template = $this->fill_distinct_id_contract_template($where);

		$where = $this->get_distinct_ids_id_article($array_contract_template_onetimepayment);
		$data_array_id_article = $this->fill_distinct_id_article($where);

		$result_array = array();
		foreach($array_contract_template_onetimepayment as $contract_template_onetimepayment)
			{
			$contract_template_onetimepayment_id = $contract_template_onetimepayment->get_id();
			$result_array[$contract_template_onetimepayment_id]['contract_template_onetimepayment.id'] = $contract_template_onetimepayment->get_id();
			$link_id = $contract_template_onetimepayment->get_id_contract_template();
			if (empty($link_id))
				{
				$result_array[$contract_template_onetimepayment_id]['contract_template.name'] = '';
				}
			else
				{
				$result_array[$contract_template_onetimepayment_id]['contract_template.name'] = $data_array_id_contract_template[$link_id]->get_name();
				}
			$result_array[$contract_template_onetimepayment_id]['contract_template_onetimepayment.name'] = $contract_template_onetimepayment->get_name();
			$link_id = $contract_template_onetimepayment->get_id_article();
			if (empty($link_id))
				{
				$result_array[$contract_template_onetimepayment_id]['article.name'] = '';
				}
			else
				{
				$result_array[$contract_template_onetimepayment_id]['article.name'] = $data_array_id_article[$link_id]->get_name();
				}
			$result_array[$contract_template_onetimepayment_id]['contract_template_onetimepayment.price'] = $contract_template_onetimepayment->get_price();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_contract_template($array_contract_template_onetimepayment)
	{
		$ids = array();
		foreach ($array_contract_template_onetimepayment as $contract_template_onetimepayment)
		{
			$id = $contract_template_onetimepayment->get_id_contract_template();
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

	private function get_distinct_ids_id_article($array_contract_template_onetimepayment)
	{
		$ids = array();
		foreach ($array_contract_template_onetimepayment as $contract_template_onetimepayment)
		{
			$id = $contract_template_onetimepayment->get_id_article();
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
			$this->p_column_definitions['contract_template_onetimepayment.id']['type'] = 'uuid';
			$this->p_column_definitions['contract_template.name']['type'] = 'varchar';
			$this->p_column_definitions['contract_template_onetimepayment.name']['type'] = 'varchar';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
			$this->p_column_definitions['contract_template_onetimepayment.price']['type'] = 'money';
		}
		return $this->p_column_definitions;
	}
}
?>
