<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_block_node_type_ccdcf5b4_c49a_48a0_8090_777bfc6ff9fa extends cls_table_view_base 
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
		$common_drupal_block_node_type = cls_table_factory::get_common_drupal_block_node_type();
		$array_drupal_block_node_type =  $common_drupal_block_node_type->get_drupal_block_node_types($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_block_node_type as $drupal_block_node_type)
			{
			$drupal_block_node_type_id = $drupal_block_node_type->get_id();
			$result_array[$drupal_block_node_type_id]['drupal_block_node_type.module'] = $drupal_block_node_type->get_module();
			$result_array[$drupal_block_node_type_id]['drupal_block_node_type.delta'] = $drupal_block_node_type->get_delta();
			$result_array[$drupal_block_node_type_id]['drupal_block_node_type.type'] = $drupal_block_node_type->get_type();
			$result_array[$drupal_block_node_type_id]['drupal_block_node_type.id'] = $drupal_block_node_type->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_block_node_type.module']['type'] = 'varchar';
			$this->p_column_definitions['drupal_block_node_type.delta']['type'] = 'varchar';
			$this->p_column_definitions['drupal_block_node_type.type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_block_node_type.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
