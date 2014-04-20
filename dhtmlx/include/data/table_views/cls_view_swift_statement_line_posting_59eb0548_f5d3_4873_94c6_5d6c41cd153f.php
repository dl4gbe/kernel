<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_swift_statement_line_posting_59eb0548_f5d3_4873_94c6_5d6c41cd153f extends cls_table_view_base 
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
		$common_swift_statement_line_posting = cls_table_factory::get_common_swift_statement_line_posting();
		$array_swift_statement_line_posting =  $common_swift_statement_line_posting->get_swift_statement_line_postings($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_swift_statement_line($array_swift_statement_line_posting);
		$data_array_id_swift_statement_line = $this->fill_distinct_id_swift_statement_line($where);

		$where = $this->get_distinct_ids_id_person_employee_linked($array_swift_statement_line_posting);
		$data_array_id_person_employee_linked = $this->fill_distinct_id_person_employee_linked($where);

		$result_array = array();
		foreach($array_swift_statement_line_posting as $swift_statement_line_posting)
			{
			$swift_statement_line_posting_id = $swift_statement_line_posting->get_id();
			$result_array[$swift_statement_line_posting_id]['swift_statement_line_posting.id'] = $swift_statement_line_posting->get_id();
			$link_id = $swift_statement_line_posting->get_id_swift_statement_line();
			if (empty($link_id))
				{
				$result_array[$swift_statement_line_posting_id]['swift_statement_line.name'] = '';
				}
			else
				{
				$result_array[$swift_statement_line_posting_id]['swift_statement_line.name'] = $data_array_id_swift_statement_line[$link_id]->get_name();
				}
			$link_id = $swift_statement_line_posting->get_id_person_employee_linked();
			if (empty($link_id))
				{
				$result_array[$swift_statement_line_posting_id]['person.name'] = '';
				}
			else
				{
				$result_array[$swift_statement_line_posting_id]['person.name'] = $data_array_id_person_employee_linked[$link_id]->get_name();
				}
			$result_array[$swift_statement_line_posting_id]['swift_statement_line_posting.link_date'] = $swift_statement_line_posting->get_link_date();
			$result_array[$swift_statement_line_posting_id]['swift_statement_line_posting.remark'] = $swift_statement_line_posting->get_remark();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_swift_statement_line($array_swift_statement_line_posting)
	{
		$ids = array();
		foreach ($array_swift_statement_line_posting as $swift_statement_line_posting)
		{
			$id = $swift_statement_line_posting->get_id_swift_statement_line();
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

	private function fill_distinct_id_swift_statement_line($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "swift_statement_line.id",swift_statement_line.name as "swift_statement_line.name" from swift_statement_line where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$swift_statement_line = cls_table_factory::create_instance('swift_statement_line');
			$swift_statement_line->fill($row);
			$data[$row['swift_statement_line.id']] = $swift_statement_line;
		}
		return $data;
	}

	private function get_distinct_ids_id_person_employee_linked($array_swift_statement_line_posting)
	{
		$ids = array();
		foreach ($array_swift_statement_line_posting as $swift_statement_line_posting)
		{
			$id = $swift_statement_line_posting->get_id_person_employee_linked();
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

	private function fill_distinct_id_person_employee_linked($where)
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
			$this->p_column_definitions['swift_statement_line_posting.id']['type'] = 'uuid';
			$this->p_column_definitions['swift_statement_line.name']['type'] = 'varchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['swift_statement_line_posting.link_date']['type'] = 'date';
			$this->p_column_definitions['swift_statement_line_posting.remark']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
