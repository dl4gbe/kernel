<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_field_revision_field_tags_a81afa82_f180_4325_9c91_ee579bd14188 extends cls_table_view_base 
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
		$common_drupal_field_revision_field_tags = cls_table_factory::get_common_drupal_field_revision_field_tags();
		$array_drupal_field_revision_field_tags =  $common_drupal_field_revision_field_tags->get_drupal_field_revision_field_tagss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_field_revision_field_tags as $drupal_field_revision_field_tags)
			{
			$drupal_field_revision_field_tags_id = $drupal_field_revision_field_tags->get_id();
			$result_array[$drupal_field_revision_field_tags_id]['drupal_field_revision_field_tags.entity_type'] = $drupal_field_revision_field_tags->get_entity_type();
			$result_array[$drupal_field_revision_field_tags_id]['drupal_field_revision_field_tags.bundle'] = $drupal_field_revision_field_tags->get_bundle();
			$result_array[$drupal_field_revision_field_tags_id]['drupal_field_revision_field_tags.deleted'] = $drupal_field_revision_field_tags->get_deleted();
			$result_array[$drupal_field_revision_field_tags_id]['drupal_field_revision_field_tags.entity_id'] = $drupal_field_revision_field_tags->get_entity_id();
			$result_array[$drupal_field_revision_field_tags_id]['drupal_field_revision_field_tags.revision_id'] = $drupal_field_revision_field_tags->get_revision_id();
			$result_array[$drupal_field_revision_field_tags_id]['drupal_field_revision_field_tags.language'] = $drupal_field_revision_field_tags->get_language();
			$result_array[$drupal_field_revision_field_tags_id]['drupal_field_revision_field_tags.delta'] = $drupal_field_revision_field_tags->get_delta();
			$result_array[$drupal_field_revision_field_tags_id]['drupal_field_revision_field_tags.field_tags_tid'] = $drupal_field_revision_field_tags->get_field_tags_tid();
			$result_array[$drupal_field_revision_field_tags_id]['drupal_field_revision_field_tags.id'] = $drupal_field_revision_field_tags->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_field_revision_field_tags.entity_type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_revision_field_tags.bundle']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_revision_field_tags.deleted']['type'] = 'int2';
			$this->p_column_definitions['drupal_field_revision_field_tags.entity_id']['type'] = 'int8';
			$this->p_column_definitions['drupal_field_revision_field_tags.revision_id']['type'] = 'int8';
			$this->p_column_definitions['drupal_field_revision_field_tags.language']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_revision_field_tags.delta']['type'] = 'int8';
			$this->p_column_definitions['drupal_field_revision_field_tags.field_tags_tid']['type'] = 'int8';
			$this->p_column_definitions['drupal_field_revision_field_tags.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
