<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_article_person_rent_8ca736c2_ed7e_4028_92f7_0dd7416ec56c extends cls_table_view_base 
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
		$common_article_person_rent = cls_table_factory::get_common_article_person_rent();
		$array_article_person_rent =  $common_article_person_rent->get_article_person_rents($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_article($array_article_person_rent);
		$data_array_id_article = $this->fill_distinct_id_article($where);

		$where = $this->get_distinct_ids_id_person($array_article_person_rent);
		$data_array_id_person = $this->fill_distinct_id_person($where);

		$where = $this->get_distinct_ids_id_posting_header($array_article_person_rent);
		$data_array_id_posting_header = $this->fill_distinct_id_posting_header($where);

		$where = $this->get_distinct_ids_id_person_employee_issued($array_article_person_rent);
		$data_array_id_person_employee_issued = $this->fill_distinct_id_person_employee_issued($where);

		$where = $this->get_distinct_ids_id_person_employee_returned($array_article_person_rent);
		$data_array_id_person_employee_returned = $this->fill_distinct_id_person_employee_returned($where);

		$where = $this->get_distinct_ids_id_fixed_asset($array_article_person_rent);
		$data_array_id_fixed_asset = $this->fill_distinct_id_fixed_asset($where);

		$result_array = array();
		foreach($array_article_person_rent as $article_person_rent)
			{
			$article_person_rent_id = $article_person_rent->get_id();
			$result_array[$article_person_rent_id]['article_person_rent.id'] = $article_person_rent->get_id();
			$link_id = $article_person_rent->get_id_article();
			if (empty($link_id))
				{
				$result_array[$article_person_rent_id]['article.name'] = '';
				}
			else
				{
				$result_array[$article_person_rent_id]['article.name'] = $data_array_id_article[$link_id]->get_name();
				}
			$link_id = $article_person_rent->get_id_person();
			if (empty($link_id))
				{
				$result_array[$article_person_rent_id]['person.name'] = '';
				}
			else
				{
				$result_array[$article_person_rent_id]['person.name'] = $data_array_id_person[$link_id]->get_name();
				}
			$result_array[$article_person_rent_id]['article_person_rent.datefrom'] = $article_person_rent->get_datefrom();
			$result_array[$article_person_rent_id]['article_person_rent.datetil'] = $article_person_rent->get_datetil();
			$link_id = $article_person_rent->get_id_posting_header();
			if (empty($link_id))
				{
				$result_array[$article_person_rent_id]['posting_header.remark'] = '';
				}
			else
				{
				$result_array[$article_person_rent_id]['posting_header.remark'] = $data_array_id_posting_header[$link_id]->get_remark();
				}
			$link_id = $article_person_rent->get_id_posting_header();
			if (empty($link_id))
				{
				$result_array[$article_person_rent_id]['posting_header.systemremark'] = '';
				}
			else
				{
				$result_array[$article_person_rent_id]['posting_header.systemremark'] = $data_array_id_posting_header[$link_id]->get_systemremark();
				}
			$link_id = $article_person_rent->get_id_person_employee_issued();
			if (empty($link_id))
				{
				$result_array[$article_person_rent_id]['person.name'] = '';
				}
			else
				{
				$result_array[$article_person_rent_id]['person.name'] = $data_array_id_person_employee_issued[$link_id]->get_name();
				}
			$link_id = $article_person_rent->get_id_person_employee_returned();
			if (empty($link_id))
				{
				$result_array[$article_person_rent_id]['person.name'] = '';
				}
			else
				{
				$result_array[$article_person_rent_id]['person.name'] = $data_array_id_person_employee_returned[$link_id]->get_name();
				}
			$link_id = $article_person_rent->get_id_fixed_asset();
			if (empty($link_id))
				{
				$result_array[$article_person_rent_id]['fixed_asset.name'] = '';
				}
			else
				{
				$result_array[$article_person_rent_id]['fixed_asset.name'] = $data_array_id_fixed_asset[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_article($array_article_person_rent)
	{
		$ids = array();
		foreach ($array_article_person_rent as $article_person_rent)
		{
			$id = $article_person_rent->get_id_article();
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

	private function get_distinct_ids_id_person($array_article_person_rent)
	{
		$ids = array();
		foreach ($array_article_person_rent as $article_person_rent)
		{
			$id = $article_person_rent->get_id_person();
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

	private function get_distinct_ids_id_posting_header($array_article_person_rent)
	{
		$ids = array();
		foreach ($array_article_person_rent as $article_person_rent)
		{
			$id = $article_person_rent->get_id_posting_header();
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

	private function get_distinct_ids_id_person_employee_issued($array_article_person_rent)
	{
		$ids = array();
		foreach ($array_article_person_rent as $article_person_rent)
		{
			$id = $article_person_rent->get_id_person_employee_issued();
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

	private function fill_distinct_id_person_employee_issued($where)
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

	private function get_distinct_ids_id_person_employee_returned($array_article_person_rent)
	{
		$ids = array();
		foreach ($array_article_person_rent as $article_person_rent)
		{
			$id = $article_person_rent->get_id_person_employee_returned();
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

	private function fill_distinct_id_person_employee_returned($where)
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

	private function get_distinct_ids_id_fixed_asset($array_article_person_rent)
	{
		$ids = array();
		foreach ($array_article_person_rent as $article_person_rent)
		{
			$id = $article_person_rent->get_id_fixed_asset();
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

	private function fill_distinct_id_fixed_asset($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "fixed_asset.id",fixed_asset.name as "fixed_asset.name" from fixed_asset where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$fixed_asset = cls_table_factory::create_instance('fixed_asset');
			$fixed_asset->fill($row);
			$data[$row['fixed_asset.id']] = $fixed_asset;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['article_person_rent.id']['type'] = 'uuid';
			$this->p_column_definitions['article.name']['type'] = 'varchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['article_person_rent.datefrom']['type'] = 'timestamptz';
			$this->p_column_definitions['article_person_rent.datetil']['type'] = 'timestamptz';
			$this->p_column_definitions['posting_header.remark']['type'] = 'varchar';
			$this->p_column_definitions['posting_header.systemremark']['type'] = 'varchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['fixed_asset.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
