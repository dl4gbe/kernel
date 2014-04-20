<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_posting_line_40a0261a_48f7_4559_a877_6e7e370b0d5f extends cls_table_view_base 
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
		$common_posting_line = cls_table_factory::get_common_posting_line();
		$array_posting_line =  $common_posting_line->get_posting_lines($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_posting_header($array_posting_line);
		$data_array_id_posting_header = $this->fill_distinct_id_posting_header($where);

		$where = $this->get_distinct_ids_id_account($array_posting_line);
		$data_array_id_account = $this->fill_distinct_id_account($where);

		$where = $this->get_distinct_ids_id_article($array_posting_line);
		$data_array_id_article = $this->fill_distinct_id_article($where);

		$result_array = array();
		foreach($array_posting_line as $posting_line)
			{
			$posting_line_id = $posting_line->get_id();
			$result_array[$posting_line_id]['posting_line.id'] = $posting_line->get_id();
			$link_id = $posting_line->get_id_posting_header();
			if (empty($link_id))
				{
				$result_array[$posting_line_id]['posting_header.remark'] = '';
				}
			else
				{
				$result_array[$posting_line_id]['posting_header.remark'] = $data_array_id_posting_header[$link_id]->get_remark();
				}
			$link_id = $posting_line->get_id_posting_header();
			if (empty($link_id))
				{
				$result_array[$posting_line_id]['posting_header.systemremark'] = '';
				}
			else
				{
				$result_array[$posting_line_id]['posting_header.systemremark'] = $data_array_id_posting_header[$link_id]->get_systemremark();
				}
			$result_array[$posting_line_id]['posting_line.debit'] = $posting_line->get_debit();
			$result_array[$posting_line_id]['posting_line.credit'] = $posting_line->get_credit();
			$link_id = $posting_line->get_id_account();
			if (empty($link_id))
				{
				$result_array[$posting_line_id]['account.name'] = '';
				}
			else
				{
				$result_array[$posting_line_id]['account.name'] = $data_array_id_account[$link_id]->get_name();
				}
			$result_array[$posting_line_id]['posting_line.postingtype'] = $posting_line->get_postingtype();
			$link_id = $posting_line->get_id_article();
			if (empty($link_id))
				{
				$result_array[$posting_line_id]['article.name'] = '';
				}
			else
				{
				$result_array[$posting_line_id]['article.name'] = $data_array_id_article[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_posting_header($array_posting_line)
	{
		$ids = array();
		foreach ($array_posting_line as $posting_line)
		{
			$id = $posting_line->get_id_posting_header();
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

	private function get_distinct_ids_id_account($array_posting_line)
	{
		$ids = array();
		foreach ($array_posting_line as $posting_line)
		{
			$id = $posting_line->get_id_account();
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

	private function fill_distinct_id_account($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "account.id",account.name as "account.name" from account where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$account = cls_table_factory::create_instance('account');
			$account->fill($row);
			$data[$row['account.id']] = $account;
		}
		return $data;
	}

	private function get_distinct_ids_id_article($array_posting_line)
	{
		$ids = array();
		foreach ($array_posting_line as $posting_line)
		{
			$id = $posting_line->get_id_article();
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
			$this->p_column_definitions['posting_line.id']['type'] = 'uuid';
			$this->p_column_definitions['posting_header.remark']['type'] = 'varchar';
			$this->p_column_definitions['posting_header.systemremark']['type'] = 'varchar';
			$this->p_column_definitions['posting_line.debit']['type'] = 'money';
			$this->p_column_definitions['posting_line.credit']['type'] = 'money';
			$this->p_column_definitions['account.name']['type'] = 'varchar';
			$this->p_column_definitions['posting_line.postingtype']['type'] = 'bpchar';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
