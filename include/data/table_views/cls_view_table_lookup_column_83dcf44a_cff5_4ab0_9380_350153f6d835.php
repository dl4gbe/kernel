<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_table_lookup_column_83dcf44a_cff5_4ab0_9380_350153f6d835 extends cls_table_view_base 
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
		$common_table_lookup_column = cls_table_factory::get_common_table_lookup_column();
		$array_table_lookup_column =  $common_table_lookup_column->get_table_lookup_columns($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_table_lookup_column as $table_lookup_column)
			{
			$table_lookup_column_id = $table_lookup_column->get_id();
			$result_array[$table_lookup_column_id]['table_lookup_column.id'] = $table_lookup_column->get_id();
			$result_array[$table_lookup_column_id]['table_lookup_column.table_name'] = $table_lookup_column->get_table_name();
			$result_array[$table_lookup_column_id]['table_lookup_column.table_column_name'] = $table_lookup_column->get_table_column_name();
			$result_array[$table_lookup_column_id]['table_lookup_column.column_order'] = $table_lookup_column->get_column_order();
			$result_array[$table_lookup_column_id]['table_lookup_column.activ'] = $table_lookup_column->get_activ();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['table_lookup_column.id']['type'] = 'uuid';
			$this->p_column_definitions['table_lookup_column.table_name']['type'] = 'varchar';
			$this->p_column_definitions['table_lookup_column.table_column_name']['type'] = 'varchar';
			$this->p_column_definitions['table_lookup_column.column_order']['type'] = 'int4';
			$this->p_column_definitions['table_lookup_column.activ']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
