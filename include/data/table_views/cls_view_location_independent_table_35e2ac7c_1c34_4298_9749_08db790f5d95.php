<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_location_independent_table_35e2ac7c_1c34_4298_9749_08db790f5d95 extends cls_table_view_base 
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
		$common_location_independent_table = cls_table_factory::get_common_location_independent_table();
		$array_location_independent_table =  $common_location_independent_table->get_location_independent_tables($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_location_independent_table as $location_independent_table)
			{
			$location_independent_table_id = $location_independent_table->get_id();
			$result_array[$location_independent_table_id]['location_independent_table.id'] = $location_independent_table->get_id();
			$result_array[$location_independent_table_id]['location_independent_table.tablename'] = $location_independent_table->get_tablename();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['location_independent_table.id']['type'] = 'uuid';
			$this->p_column_definitions['location_independent_table.tablename']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
