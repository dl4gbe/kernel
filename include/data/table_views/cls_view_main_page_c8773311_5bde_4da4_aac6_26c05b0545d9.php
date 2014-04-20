<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_main_page_c8773311_5bde_4da4_aac6_26c05b0545d9 extends cls_table_view_base 
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
		$common_main_page = cls_table_factory::get_common_main_page();
		$array_main_page =  $common_main_page->get_main_pages($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_main_page_template($array_main_page);
		$data_array_id_main_page_template = $this->fill_distinct_id_main_page_template($where);

		$result_array = array();
		foreach($array_main_page as $main_page)
			{
			$main_page_id = $main_page->get_id();
			$result_array[$main_page_id]['main_page.id'] = $main_page->get_id();
			$result_array[$main_page_id]['main_page.name'] = $main_page->get_name();
			$result_array[$main_page_id]['main_page.path'] = $main_page->get_path();
			$link_id = $main_page->get_id_main_page_template();
			if (empty($link_id))
				{
				$result_array[$main_page_id]['main_page_template.name'] = '';
				}
			else
				{
				$result_array[$main_page_id]['main_page_template.name'] = $data_array_id_main_page_template[$link_id]->get_name();
				}
			$result_array[$main_page_id]['main_page.caption'] = $main_page->get_caption();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_main_page_template($array_main_page)
	{
		$ids = array();
		foreach ($array_main_page as $main_page)
		{
			$id = $main_page->get_id_main_page_template();
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

	private function fill_distinct_id_main_page_template($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "main_page_template.id",main_page_template.name as "main_page_template.name" from main_page_template where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$main_page_template = cls_table_factory::create_instance('main_page_template');
			$main_page_template->fill($row);
			$data[$row['main_page_template.id']] = $main_page_template;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['main_page.id']['type'] = 'uuid';
			$this->p_column_definitions['main_page.name']['type'] = 'varchar';
			$this->p_column_definitions['main_page.path']['type'] = 'varchar';
			$this->p_column_definitions['main_page_template.name']['type'] = 'varchar';
			$this->p_column_definitions['main_page.caption']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
