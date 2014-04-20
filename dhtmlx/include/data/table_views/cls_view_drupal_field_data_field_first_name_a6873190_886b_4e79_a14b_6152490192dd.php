<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_field_data_field_first_name_a6873190_886b_4e79_a14b_6152490192dd extends cls_table_view_base 
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
		$common_drupal_field_data_field_first_name = cls_table_factory::get_common_drupal_field_data_field_first_name();
		$array_drupal_field_data_field_first_name =  $common_drupal_field_data_field_first_name->get_drupal_field_data_field_first_names($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_field_data_field_first_name as $drupal_field_data_field_first_name)
			{
			$drupal_field_data_field_first_name_id = $drupal_field_data_field_first_name->get_id();
			$result_array[$drupal_field_data_field_first_name_id]['drupal_field_data_field_first_name.entity_type'] = $drupal_field_data_field_first_name->get_entity_type();
			$result_array[$drupal_field_data_field_first_name_id]['drupal_field_data_field_first_name.bundle'] = $drupal_field_data_field_first_name->get_bundle();
			$result_array[$drupal_field_data_field_first_name_id]['drupal_field_data_field_first_name.deleted'] = $drupal_field_data_field_first_name->get_deleted();
			$result_array[$drupal_field_data_field_first_name_id]['drupal_field_data_field_first_name.entity_id'] = $drupal_field_data_field_first_name->get_entity_id();
			$result_array[$drupal_field_data_field_first_name_id]['drupal_field_data_field_first_name.revision_id'] = $drupal_field_data_field_first_name->get_revision_id();
			$result_array[$drupal_field_data_field_first_name_id]['drupal_field_data_field_first_name.language'] = $drupal_field_data_field_first_name->get_language();
			$result_array[$drupal_field_data_field_first_name_id]['drupal_field_data_field_first_name.delta'] = $drupal_field_data_field_first_name->get_delta();
			$result_array[$drupal_field_data_field_first_name_id]['drupal_field_data_field_first_name.field_first_name_value'] = $drupal_field_data_field_first_name->get_field_first_name_value();
			$result_array[$drupal_field_data_field_first_name_id]['drupal_field_data_field_first_name.field_first_name_format'] = $drupal_field_data_field_first_name->get_field_first_name_format();
			$result_array[$drupal_field_data_field_first_name_id]['drupal_field_data_field_first_name.id'] = $drupal_field_data_field_first_name->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_field_data_field_first_name.entity_type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_data_field_first_name.bundle']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_data_field_first_name.deleted']['type'] = 'int2';
			$this->p_column_definitions['drupal_field_data_field_first_name.entity_id']['type'] = 'int8';
			$this->p_column_definitions['drupal_field_data_field_first_name.revision_id']['type'] = 'int8';
			$this->p_column_definitions['drupal_field_data_field_first_name.language']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_data_field_first_name.delta']['type'] = 'int8';
			$this->p_column_definitions['drupal_field_data_field_first_name.field_first_name_value']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_data_field_first_name.field_first_name_format']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_data_field_first_name.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
