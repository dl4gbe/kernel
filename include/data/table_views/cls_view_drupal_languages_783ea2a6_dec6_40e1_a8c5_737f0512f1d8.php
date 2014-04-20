<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_languages_783ea2a6_dec6_40e1_a8c5_737f0512f1d8 extends cls_table_view_base 
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
		$common_drupal_languages = cls_table_factory::get_common_drupal_languages();
		$array_drupal_languages =  $common_drupal_languages->get_drupal_languagess($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_languages as $drupal_languages)
			{
			$drupal_languages_id = $drupal_languages->get_id();
			$result_array[$drupal_languages_id]['drupal_languages.language'] = $drupal_languages->get_language();
			$result_array[$drupal_languages_id]['drupal_languages.name'] = $drupal_languages->get_name();
			$result_array[$drupal_languages_id]['drupal_languages.native'] = $drupal_languages->get_native();
			$result_array[$drupal_languages_id]['drupal_languages.direction'] = $drupal_languages->get_direction();
			$result_array[$drupal_languages_id]['drupal_languages.enabled'] = $drupal_languages->get_enabled();
			$result_array[$drupal_languages_id]['drupal_languages.plurals'] = $drupal_languages->get_plurals();
			$result_array[$drupal_languages_id]['drupal_languages.formula'] = $drupal_languages->get_formula();
			$result_array[$drupal_languages_id]['drupal_languages.domain'] = $drupal_languages->get_domain();
			$result_array[$drupal_languages_id]['drupal_languages.prefix'] = $drupal_languages->get_prefix();
			$result_array[$drupal_languages_id]['drupal_languages.weight'] = $drupal_languages->get_weight();
			$result_array[$drupal_languages_id]['drupal_languages.javascript'] = $drupal_languages->get_javascript();
			$result_array[$drupal_languages_id]['drupal_languages.id'] = $drupal_languages->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_languages.language']['type'] = 'varchar';
			$this->p_column_definitions['drupal_languages.name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_languages.native']['type'] = 'varchar';
			$this->p_column_definitions['drupal_languages.direction']['type'] = 'int4';
			$this->p_column_definitions['drupal_languages.enabled']['type'] = 'int4';
			$this->p_column_definitions['drupal_languages.plurals']['type'] = 'int4';
			$this->p_column_definitions['drupal_languages.formula']['type'] = 'varchar';
			$this->p_column_definitions['drupal_languages.domain']['type'] = 'varchar';
			$this->p_column_definitions['drupal_languages.prefix']['type'] = 'varchar';
			$this->p_column_definitions['drupal_languages.weight']['type'] = 'int4';
			$this->p_column_definitions['drupal_languages.javascript']['type'] = 'varchar';
			$this->p_column_definitions['drupal_languages.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
