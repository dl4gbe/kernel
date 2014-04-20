<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_table_test_group_c92c0caa_a4bb_4e7a_8163_8ebe50f6f56e extends cls_table_view_base 
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
		$common_table_test_group = cls_table_factory::get_common_table_test_group();
		$array_table_test_group =  $common_table_test_group->get_table_test_groups($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_table_test_group as $table_test_group)
			{
			$table_test_group_id = $table_test_group->get_id();
			$result_array[$table_test_group_id]['table_test_group.id'] = $table_test_group->get_id();
			$result_array[$table_test_group_id]['table_test_group.name'] = $table_test_group->get_name();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['table_test_group.id']['type'] = 'uuid';
			$this->p_column_definitions['table_test_group.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
