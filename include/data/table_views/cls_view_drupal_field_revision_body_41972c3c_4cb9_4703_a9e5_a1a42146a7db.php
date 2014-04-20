<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_field_revision_body_41972c3c_4cb9_4703_a9e5_a1a42146a7db extends cls_table_view_base 
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
		$common_drupal_field_revision_body = cls_table_factory::get_common_drupal_field_revision_body();
		$array_drupal_field_revision_body =  $common_drupal_field_revision_body->get_drupal_field_revision_bodys($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_field_revision_body as $drupal_field_revision_body)
			{
			$drupal_field_revision_body_id = $drupal_field_revision_body->get_id();
			$result_array[$drupal_field_revision_body_id]['drupal_field_revision_body.entity_type'] = $drupal_field_revision_body->get_entity_type();
			$result_array[$drupal_field_revision_body_id]['drupal_field_revision_body.bundle'] = $drupal_field_revision_body->get_bundle();
			$result_array[$drupal_field_revision_body_id]['drupal_field_revision_body.deleted'] = $drupal_field_revision_body->get_deleted();
			$result_array[$drupal_field_revision_body_id]['drupal_field_revision_body.entity_id'] = $drupal_field_revision_body->get_entity_id();
			$result_array[$drupal_field_revision_body_id]['drupal_field_revision_body.revision_id'] = $drupal_field_revision_body->get_revision_id();
			$result_array[$drupal_field_revision_body_id]['drupal_field_revision_body.language'] = $drupal_field_revision_body->get_language();
			$result_array[$drupal_field_revision_body_id]['drupal_field_revision_body.delta'] = $drupal_field_revision_body->get_delta();
			$result_array[$drupal_field_revision_body_id]['drupal_field_revision_body.body_value'] = $drupal_field_revision_body->get_body_value();
			$result_array[$drupal_field_revision_body_id]['drupal_field_revision_body.body_summary'] = $drupal_field_revision_body->get_body_summary();
			$result_array[$drupal_field_revision_body_id]['drupal_field_revision_body.body_format'] = $drupal_field_revision_body->get_body_format();
			$result_array[$drupal_field_revision_body_id]['drupal_field_revision_body.id'] = $drupal_field_revision_body->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_field_revision_body.entity_type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_revision_body.bundle']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_revision_body.deleted']['type'] = 'int2';
			$this->p_column_definitions['drupal_field_revision_body.entity_id']['type'] = 'int8';
			$this->p_column_definitions['drupal_field_revision_body.revision_id']['type'] = 'int8';
			$this->p_column_definitions['drupal_field_revision_body.language']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_revision_body.delta']['type'] = 'int8';
			$this->p_column_definitions['drupal_field_revision_body.body_value']['type'] = 'text';
			$this->p_column_definitions['drupal_field_revision_body.body_summary']['type'] = 'text';
			$this->p_column_definitions['drupal_field_revision_body.body_format']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_revision_body.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
