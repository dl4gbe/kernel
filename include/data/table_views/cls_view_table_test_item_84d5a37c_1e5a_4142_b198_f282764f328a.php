<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_table_test_item_84d5a37c_1e5a_4142_b198_f282764f328a extends cls_table_view_base 
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
		$common_table_test_item = cls_table_factory::get_common_table_test_item();
		$array_table_test_item =  $common_table_test_item->get_table_test_items($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_table_test_item as $table_test_item)
			{
			$table_test_item_id = $table_test_item->get_id();
			$result_array[$table_test_item_id]['table_test_item.id'] = $table_test_item->get_id();
			$result_array[$table_test_item_id]['table_test_item.tablename'] = $table_test_item->get_tablename();
			$result_array[$table_test_item_id]['table_test_item.name'] = $table_test_item->get_name();
			$result_array[$table_test_item_id]['table_test_item.path'] = $table_test_item->get_path();
			$result_array[$table_test_item_id]['table_test_item.source'] = $table_test_item->get_source();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['table_test_item.id']['type'] = 'uuid';
			$this->p_column_definitions['table_test_item.tablename']['type'] = 'varchar';
			$this->p_column_definitions['table_test_item.name']['type'] = 'varchar';
			$this->p_column_definitions['table_test_item.path']['type'] = 'varchar';
			$this->p_column_definitions['table_test_item.source']['type'] = 'text';
		}
		return $this->p_column_definitions;
	}
}
?>
