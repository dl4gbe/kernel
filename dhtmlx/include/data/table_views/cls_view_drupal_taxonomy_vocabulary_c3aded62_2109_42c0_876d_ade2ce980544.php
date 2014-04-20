<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_taxonomy_vocabulary_c3aded62_2109_42c0_876d_ade2ce980544 extends cls_table_view_base 
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
		$common_drupal_taxonomy_vocabulary = cls_table_factory::get_common_drupal_taxonomy_vocabulary();
		$array_drupal_taxonomy_vocabulary =  $common_drupal_taxonomy_vocabulary->get_drupal_taxonomy_vocabularys($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_taxonomy_vocabulary as $drupal_taxonomy_vocabulary)
			{
			$drupal_taxonomy_vocabulary_id = $drupal_taxonomy_vocabulary->get_id();
			$result_array[$drupal_taxonomy_vocabulary_id]['drupal_taxonomy_vocabulary.vid'] = $drupal_taxonomy_vocabulary->get_vid();
			$result_array[$drupal_taxonomy_vocabulary_id]['drupal_taxonomy_vocabulary.name'] = $drupal_taxonomy_vocabulary->get_name();
			$result_array[$drupal_taxonomy_vocabulary_id]['drupal_taxonomy_vocabulary.machine_name'] = $drupal_taxonomy_vocabulary->get_machine_name();
			$result_array[$drupal_taxonomy_vocabulary_id]['drupal_taxonomy_vocabulary.description'] = $drupal_taxonomy_vocabulary->get_description();
			$result_array[$drupal_taxonomy_vocabulary_id]['drupal_taxonomy_vocabulary.hierarchy'] = $drupal_taxonomy_vocabulary->get_hierarchy();
			$result_array[$drupal_taxonomy_vocabulary_id]['drupal_taxonomy_vocabulary.module'] = $drupal_taxonomy_vocabulary->get_module();
			$result_array[$drupal_taxonomy_vocabulary_id]['drupal_taxonomy_vocabulary.weight'] = $drupal_taxonomy_vocabulary->get_weight();
			$result_array[$drupal_taxonomy_vocabulary_id]['drupal_taxonomy_vocabulary.id'] = $drupal_taxonomy_vocabulary->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_taxonomy_vocabulary.vid']['type'] = 'int4';
			$this->p_column_definitions['drupal_taxonomy_vocabulary.name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_taxonomy_vocabulary.machine_name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_taxonomy_vocabulary.description']['type'] = 'text';
			$this->p_column_definitions['drupal_taxonomy_vocabulary.hierarchy']['type'] = 'int4';
			$this->p_column_definitions['drupal_taxonomy_vocabulary.module']['type'] = 'varchar';
			$this->p_column_definitions['drupal_taxonomy_vocabulary.weight']['type'] = 'int4';
			$this->p_column_definitions['drupal_taxonomy_vocabulary.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
