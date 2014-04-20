<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_ribbonbar_fccef5b5_dedb_498f_ac8c_4473fcab93af extends cls_table_view_base 
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
		$common_ribbonbar = cls_table_factory::get_common_ribbonbar();
		$array_ribbonbar =  $common_ribbonbar->get_ribbonbars($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_ribbonbar_template($array_ribbonbar);
		$data_array_id_ribbonbar_template = $this->fill_distinct_id_ribbonbar_template($where);

		$result_array = array();
		foreach($array_ribbonbar as $ribbonbar)
			{
			$ribbonbar_id = $ribbonbar->get_id();
			$result_array[$ribbonbar_id]['ribbonbar.id'] = $ribbonbar->get_id();
			$result_array[$ribbonbar_id]['ribbonbar.name'] = $ribbonbar->get_name();
			$link_id = $ribbonbar->get_id_ribbonbar_template();
			if (empty($link_id))
				{
				$result_array[$ribbonbar_id]['ribbonbar_template.name'] = '';
				}
			else
				{
				$result_array[$ribbonbar_id]['ribbonbar_template.name'] = $data_array_id_ribbonbar_template[$link_id]->get_name();
				}
			$result_array[$ribbonbar_id]['ribbonbar.has_edit_form'] = $ribbonbar->get_has_edit_form();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_ribbonbar_template($array_ribbonbar)
	{
		$ids = array();
		foreach ($array_ribbonbar as $ribbonbar)
		{
			$id = $ribbonbar->get_id_ribbonbar_template();
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

	private function fill_distinct_id_ribbonbar_template($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "ribbonbar_template.id",ribbonbar_template.name as "ribbonbar_template.name" from ribbonbar_template where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$ribbonbar_template = cls_table_factory::create_instance('ribbonbar_template');
			$ribbonbar_template->fill($row);
			$data[$row['ribbonbar_template.id']] = $ribbonbar_template;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['ribbonbar.id']['type'] = 'uuid';
			$this->p_column_definitions['ribbonbar.name']['type'] = 'varchar';
			$this->p_column_definitions['ribbonbar_template.name']['type'] = 'varchar';
			$this->p_column_definitions['ribbonbar.has_edit_form']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
