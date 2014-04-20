<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_onetime_payment_dc739bb0_f75d_48d2_8ef5_70baf2b1524a extends cls_table_view_base 
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
		$common_onetime_payment = cls_table_factory::get_common_onetime_payment();
		$array_onetime_payment =  $common_onetime_payment->get_onetime_payments($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_article($array_onetime_payment);
		$data_array_id_article = $this->fill_distinct_id_article($where);

		$result_array = array();
		foreach($array_onetime_payment as $onetime_payment)
			{
			$onetime_payment_id = $onetime_payment->get_id();
			$result_array[$onetime_payment_id]['onetime_payment.id'] = $onetime_payment->get_id();
			$result_array[$onetime_payment_id]['onetime_payment.name'] = $onetime_payment->get_name();
			$link_id = $onetime_payment->get_id_article();
			if (empty($link_id))
				{
				$result_array[$onetime_payment_id]['article.name'] = '';
				}
			else
				{
				$result_array[$onetime_payment_id]['article.name'] = $data_array_id_article[$link_id]->get_name();
				}
			$result_array[$onetime_payment_id]['onetime_payment.price'] = $onetime_payment->get_price();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_article($array_onetime_payment)
	{
		$ids = array();
		foreach ($array_onetime_payment as $onetime_payment)
		{
			$id = $onetime_payment->get_id_article();
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
			$this->p_column_definitions['onetime_payment.id']['type'] = 'uuid';
			$this->p_column_definitions['onetime_payment.name']['type'] = 'varchar';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
			$this->p_column_definitions['onetime_payment.price']['type'] = 'money';
		}
		return $this->p_column_definitions;
	}
}
?>
