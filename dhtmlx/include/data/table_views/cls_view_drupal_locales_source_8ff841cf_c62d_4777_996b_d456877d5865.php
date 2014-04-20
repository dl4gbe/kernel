<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_locales_source_8ff841cf_c62d_4777_996b_d456877d5865 extends cls_table_view_base 
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
		$common_drupal_locales_source = cls_table_factory::get_common_drupal_locales_source();
		$array_drupal_locales_source =  $common_drupal_locales_source->get_drupal_locales_sources($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_locales_source as $drupal_locales_source)
			{
			$drupal_locales_source_id = $drupal_locales_source->get_id();
			$result_array[$drupal_locales_source_id]['drupal_locales_source.lid'] = $drupal_locales_source->get_lid();
			$result_array[$drupal_locales_source_id]['drupal_locales_source.location'] = $drupal_locales_source->get_location();
			$result_array[$drupal_locales_source_id]['drupal_locales_source.textgroup'] = $drupal_locales_source->get_textgroup();
			$result_array[$drupal_locales_source_id]['drupal_locales_source.source'] = $drupal_locales_source->get_source();
			$result_array[$drupal_locales_source_id]['drupal_locales_source.context'] = $drupal_locales_source->get_context();
			$result_array[$drupal_locales_source_id]['drupal_locales_source.version'] = $drupal_locales_source->get_version();
			$result_array[$drupal_locales_source_id]['drupal_locales_source.id'] = $drupal_locales_source->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_locales_source.lid']['type'] = 'int4';
			$this->p_column_definitions['drupal_locales_source.location']['type'] = 'text';
			$this->p_column_definitions['drupal_locales_source.textgroup']['type'] = 'varchar';
			$this->p_column_definitions['drupal_locales_source.source']['type'] = 'text';
			$this->p_column_definitions['drupal_locales_source.context']['type'] = 'varchar';
			$this->p_column_definitions['drupal_locales_source.version']['type'] = 'varchar';
			$this->p_column_definitions['drupal_locales_source.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
