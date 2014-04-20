<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_ribbonbar_tab_caf56129_ebbf_475d_bf1f_b354042ceeba extends cls_table_view_base 
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
		$common_ribbonbar_tab = cls_table_factory::get_common_ribbonbar_tab();
		$array_ribbonbar_tab =  $common_ribbonbar_tab->get_ribbonbar_tabs($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_ribbonbar($array_ribbonbar_tab);
		$data_array_id_ribbonbar = $this->fill_distinct_id_ribbonbar($where);

		$result_array = array();
		foreach($array_ribbonbar_tab as $ribbonbar_tab)
			{
			$ribbonbar_tab_id = $ribbonbar_tab->get_id();
			$result_array[$ribbonbar_tab_id]['ribbonbar_tab.id'] = $ribbonbar_tab->get_id();
			$link_id = $ribbonbar_tab->get_id_ribbonbar();
			if (empty($link_id))
				{
				$result_array[$ribbonbar_tab_id]['ribbonbar.name'] = '';
				}
			else
				{
				$result_array[$ribbonbar_tab_id]['ribbonbar.name'] = $data_array_id_ribbonbar[$link_id]->get_name();
				}
			$result_array[$ribbonbar_tab_id]['ribbonbar_tab.name'] = $ribbonbar_tab->get_name();
			$result_array[$ribbonbar_tab_id]['ribbonbar_tab.imagepath'] = $ribbonbar_tab->get_imagepath();
			$result_array[$ribbonbar_tab_id]['ribbonbar_tab.active'] = $ribbonbar_tab->get_active();
			$result_array[$ribbonbar_tab_id]['ribbonbar_tab.tab_order'] = $ribbonbar_tab->get_tab_order();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_ribbonbar($array_ribbonbar_tab)
	{
		$ids = array();
		foreach ($array_ribbonbar_tab as $ribbonbar_tab)
		{
			$id = $ribbonbar_tab->get_id_ribbonbar();
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

	private function fill_distinct_id_ribbonbar($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "ribbonbar.id",ribbonbar.name as "ribbonbar.name" from ribbonbar where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$ribbonbar = cls_table_factory::create_instance('ribbonbar');
			$ribbonbar->fill($row);
			$data[$row['ribbonbar.id']] = $ribbonbar;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['ribbonbar_tab.id']['type'] = 'uuid';
			$this->p_column_definitions['ribbonbar.name']['type'] = 'varchar';
			$this->p_column_definitions['ribbonbar_tab.name']['type'] = 'varchar';
			$this->p_column_definitions['ribbonbar_tab.imagepath']['type'] = 'varchar';
			$this->p_column_definitions['ribbonbar_tab.active']['type'] = 'bool';
			$this->p_column_definitions['ribbonbar_tab.tab_order']['type'] = 'int4';
		}
		return $this->p_column_definitions;
	}
}
?>
