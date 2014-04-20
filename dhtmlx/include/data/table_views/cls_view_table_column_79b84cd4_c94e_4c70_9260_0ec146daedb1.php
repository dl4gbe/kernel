<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_table_column_79b84cd4_c94e_4c70_9260_0ec146daedb1 extends cls_table_view_base 
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
		$common_table_column = cls_table_factory::get_common_table_column();
		$array_table_column =  $common_table_column->get_table_columns($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_table_column as $table_column)
			{
			$table_column_id = $table_column->get_id();
			$result_array[$table_column_id]['table_column.id'] = $table_column->get_id();
			$result_array[$table_column_id]['table_column.table_name'] = $table_column->get_table_name();
			$result_array[$table_column_id]['table_column.column_name'] = $table_column->get_column_name();
			$result_array[$table_column_id]['table_column.name'] = $table_column->get_name();
			$result_array[$table_column_id]['table_column.width'] = $table_column->get_width();
			$result_array[$table_column_id]['table_column.default_control'] = $table_column->get_default_control();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['table_column.id']['type'] = 'uuid';
			$this->p_column_definitions['table_column.table_name']['type'] = 'varchar';
			$this->p_column_definitions['table_column.column_name']['type'] = 'varchar';
			$this->p_column_definitions['table_column.name']['type'] = 'varchar';
			$this->p_column_definitions['table_column.width']['type'] = 'int4';
			$this->p_column_definitions['table_column.default_control']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
