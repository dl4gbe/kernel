<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_registry_d855ab16_bba7_43de_b448_7e9b9d78edec extends cls_table_view_base 
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
		$common_drupal_registry = cls_table_factory::get_common_drupal_registry();
		$array_drupal_registry =  $common_drupal_registry->get_drupal_registrys($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_registry as $drupal_registry)
			{
			$drupal_registry_id = $drupal_registry->get_id();
			$result_array[$drupal_registry_id]['drupal_registry.name'] = $drupal_registry->get_name();
			$result_array[$drupal_registry_id]['drupal_registry.type'] = $drupal_registry->get_type();
			$result_array[$drupal_registry_id]['drupal_registry.filename'] = $drupal_registry->get_filename();
			$result_array[$drupal_registry_id]['drupal_registry.module'] = $drupal_registry->get_module();
			$result_array[$drupal_registry_id]['drupal_registry.weight'] = $drupal_registry->get_weight();
			$result_array[$drupal_registry_id]['drupal_registry.id'] = $drupal_registry->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_registry.name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_registry.type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_registry.filename']['type'] = 'varchar';
			$this->p_column_definitions['drupal_registry.module']['type'] = 'varchar';
			$this->p_column_definitions['drupal_registry.weight']['type'] = 'int4';
			$this->p_column_definitions['drupal_registry.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
