<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_rdf_mapping_61c9dbcd_48c5_4c19_b51c_68b13fcb7541 extends cls_table_view_base 
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
		$common_drupal_rdf_mapping = cls_table_factory::get_common_drupal_rdf_mapping();
		$array_drupal_rdf_mapping =  $common_drupal_rdf_mapping->get_drupal_rdf_mappings($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_rdf_mapping as $drupal_rdf_mapping)
			{
			$drupal_rdf_mapping_id = $drupal_rdf_mapping->get_id();
			$result_array[$drupal_rdf_mapping_id]['drupal_rdf_mapping.type'] = $drupal_rdf_mapping->get_type();
			$result_array[$drupal_rdf_mapping_id]['drupal_rdf_mapping.bundle'] = $drupal_rdf_mapping->get_bundle();
			$result_array[$drupal_rdf_mapping_id]['drupal_rdf_mapping.mapping'] = $drupal_rdf_mapping->get_mapping();
			$result_array[$drupal_rdf_mapping_id]['drupal_rdf_mapping.id'] = $drupal_rdf_mapping->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_rdf_mapping.type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_rdf_mapping.bundle']['type'] = 'varchar';
			$this->p_column_definitions['drupal_rdf_mapping.mapping']['type'] = 'bytea';
			$this->p_column_definitions['drupal_rdf_mapping.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
