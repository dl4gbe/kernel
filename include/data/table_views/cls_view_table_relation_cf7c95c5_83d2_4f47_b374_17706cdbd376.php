<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_table_relation_cf7c95c5_83d2_4f47_b374_17706cdbd376 extends cls_table_view_base 
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
		$common_table_relation = cls_table_factory::get_common_table_relation();
		$array_table_relation =  $common_table_relation->get_table_relations($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_table_relation as $table_relation)
			{
			$table_relation_id = $table_relation->get_id();
			$result_array[$table_relation_id]['table_relation.id'] = $table_relation->get_id();
			$result_array[$table_relation_id]['table_relation.table_name_parent'] = $table_relation->get_table_name_parent();
			$result_array[$table_relation_id]['table_relation.parent_table_field'] = $table_relation->get_parent_table_field();
			$result_array[$table_relation_id]['table_relation.table_name_child'] = $table_relation->get_table_name_child();
			$result_array[$table_relation_id]['table_relation.child_table_field'] = $table_relation->get_child_table_field();
			$result_array[$table_relation_id]['table_relation.activ'] = $table_relation->get_activ();
			$result_array[$table_relation_id]['table_relation.remark'] = $table_relation->get_remark();
			$result_array[$table_relation_id]['table_relation.alias'] = $table_relation->get_alias();
			$result_array[$table_relation_id]['table_relation.one_to_many'] = $table_relation->get_one_to_many();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['table_relation.id']['type'] = 'uuid';
			$this->p_column_definitions['table_relation.table_name_parent']['type'] = 'varchar';
			$this->p_column_definitions['table_relation.parent_table_field']['type'] = 'varchar';
			$this->p_column_definitions['table_relation.table_name_child']['type'] = 'varchar';
			$this->p_column_definitions['table_relation.child_table_field']['type'] = 'varchar';
			$this->p_column_definitions['table_relation.activ']['type'] = 'bool';
			$this->p_column_definitions['table_relation.remark']['type'] = 'varchar';
			$this->p_column_definitions['table_relation.alias']['type'] = 'varchar';
			$this->p_column_definitions['table_relation.one_to_many']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
