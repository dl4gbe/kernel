<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_table_lock_0153493b_cbc1_4cc2_9698_a4a0bdaec0f6 extends cls_table_view_base 
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
		$common_table_lock = cls_table_factory::get_common_table_lock();
		$array_table_lock =  $common_table_lock->get_table_locks($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_table_lock as $table_lock)
			{
			$table_lock_id = $table_lock->get_id();
			$result_array[$table_lock_id]['table_lock.id'] = $table_lock->get_id();
			$result_array[$table_lock_id]['table_lock.tablename'] = $table_lock->get_tablename();
			$result_array[$table_lock_id]['table_lock.max_days'] = $table_lock->get_max_days();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['table_lock.id']['type'] = 'uuid';
			$this->p_column_definitions['table_lock.tablename']['type'] = 'varchar';
			$this->p_column_definitions['table_lock.max_days']['type'] = 'int4';
		}
		return $this->p_column_definitions;
	}
}
?>
