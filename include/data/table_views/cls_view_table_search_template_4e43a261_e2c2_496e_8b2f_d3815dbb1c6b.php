<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_table_search_template_4e43a261_e2c2_496e_8b2f_d3815dbb1c6b extends cls_table_view_base 
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
		$common_table_search_template = cls_table_factory::get_common_table_search_template();
		$array_table_search_template =  $common_table_search_template->get_table_search_templates($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_table_search_template as $table_search_template)
			{
			$table_search_template_id = $table_search_template->get_id();
			$result_array[$table_search_template_id]['table_search_template.id'] = $table_search_template->get_id();
			$result_array[$table_search_template_id]['table_search_template.table_name'] = $table_search_template->get_table_name();
			$result_array[$table_search_template_id]['table_search_template.name'] = $table_search_template->get_name();
			$result_array[$table_search_template_id]['table_search_template.path'] = $table_search_template->get_path();
			$result_array[$table_search_template_id]['table_search_template.source'] = $table_search_template->get_source();
			$result_array[$table_search_template_id]['table_search_template.activ'] = $table_search_template->get_activ();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['table_search_template.id']['type'] = 'uuid';
			$this->p_column_definitions['table_search_template.table_name']['type'] = 'varchar';
			$this->p_column_definitions['table_search_template.name']['type'] = 'varchar';
			$this->p_column_definitions['table_search_template.path']['type'] = 'varchar';
			$this->p_column_definitions['table_search_template.source']['type'] = 'text';
			$this->p_column_definitions['table_search_template.activ']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
