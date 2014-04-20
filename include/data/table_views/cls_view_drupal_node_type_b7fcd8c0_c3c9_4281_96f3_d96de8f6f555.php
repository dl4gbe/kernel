<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_node_type_b7fcd8c0_c3c9_4281_96f3_d96de8f6f555 extends cls_table_view_base 
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
		$common_drupal_node_type = cls_table_factory::get_common_drupal_node_type();
		$array_drupal_node_type =  $common_drupal_node_type->get_drupal_node_types($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_node_type as $drupal_node_type)
			{
			$drupal_node_type_id = $drupal_node_type->get_id();
			$result_array[$drupal_node_type_id]['drupal_node_type.type'] = $drupal_node_type->get_type();
			$result_array[$drupal_node_type_id]['drupal_node_type.name'] = $drupal_node_type->get_name();
			$result_array[$drupal_node_type_id]['drupal_node_type.base'] = $drupal_node_type->get_base();
			$result_array[$drupal_node_type_id]['drupal_node_type.module'] = $drupal_node_type->get_module();
			$result_array[$drupal_node_type_id]['drupal_node_type.description'] = $drupal_node_type->get_description();
			$result_array[$drupal_node_type_id]['drupal_node_type.help'] = $drupal_node_type->get_help();
			$result_array[$drupal_node_type_id]['drupal_node_type.has_title'] = $drupal_node_type->get_has_title();
			$result_array[$drupal_node_type_id]['drupal_node_type.title_label'] = $drupal_node_type->get_title_label();
			$result_array[$drupal_node_type_id]['drupal_node_type.custom'] = $drupal_node_type->get_custom();
			$result_array[$drupal_node_type_id]['drupal_node_type.modified'] = $drupal_node_type->get_modified();
			$result_array[$drupal_node_type_id]['drupal_node_type.locked'] = $drupal_node_type->get_locked();
			$result_array[$drupal_node_type_id]['drupal_node_type.disabled'] = $drupal_node_type->get_disabled();
			$result_array[$drupal_node_type_id]['drupal_node_type.orig_type'] = $drupal_node_type->get_orig_type();
			$result_array[$drupal_node_type_id]['drupal_node_type.id'] = $drupal_node_type->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_node_type.type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_node_type.name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_node_type.base']['type'] = 'varchar';
			$this->p_column_definitions['drupal_node_type.module']['type'] = 'varchar';
			$this->p_column_definitions['drupal_node_type.description']['type'] = 'text';
			$this->p_column_definitions['drupal_node_type.help']['type'] = 'text';
			$this->p_column_definitions['drupal_node_type.has_title']['type'] = 'int4';
			$this->p_column_definitions['drupal_node_type.title_label']['type'] = 'varchar';
			$this->p_column_definitions['drupal_node_type.custom']['type'] = 'int2';
			$this->p_column_definitions['drupal_node_type.modified']['type'] = 'int2';
			$this->p_column_definitions['drupal_node_type.locked']['type'] = 'int2';
			$this->p_column_definitions['drupal_node_type.disabled']['type'] = 'int2';
			$this->p_column_definitions['drupal_node_type.orig_type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_node_type.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
