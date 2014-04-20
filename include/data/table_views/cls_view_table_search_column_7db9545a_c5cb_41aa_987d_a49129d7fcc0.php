<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_table_search_column_7db9545a_c5cb_41aa_987d_a49129d7fcc0 extends cls_table_view_base 
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
		$common_table_search_column = cls_table_factory::get_common_table_search_column();
		$array_table_search_column =  $common_table_search_column->get_table_search_columns($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_table_search_column as $table_search_column)
			{
			$table_search_column_id = $table_search_column->get_id();
			$result_array[$table_search_column_id]['table_search_column.id'] = $table_search_column->get_id();
			$result_array[$table_search_column_id]['table_search_column.table_name'] = $table_search_column->get_table_name();
			$result_array[$table_search_column_id]['table_search_column.table_column_name'] = $table_search_column->get_table_column_name();
			$result_array[$table_search_column_id]['table_search_column.activ'] = $table_search_column->get_activ();
			$result_array[$table_search_column_id]['table_search_column.case_sensitive'] = $table_search_column->get_case_sensitive();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['table_search_column.id']['type'] = 'uuid';
			$this->p_column_definitions['table_search_column.table_name']['type'] = 'varchar';
			$this->p_column_definitions['table_search_column.table_column_name']['type'] = 'varchar';
			$this->p_column_definitions['table_search_column.activ']['type'] = 'bool';
			$this->p_column_definitions['table_search_column.case_sensitive']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
