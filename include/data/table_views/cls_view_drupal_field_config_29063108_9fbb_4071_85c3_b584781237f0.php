<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_field_config_29063108_9fbb_4071_85c3_b584781237f0 extends cls_table_view_base 
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
		$common_drupal_field_config = cls_table_factory::get_common_drupal_field_config();
		$array_drupal_field_config =  $common_drupal_field_config->get_drupal_field_configs($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_field_config as $drupal_field_config)
			{
			$drupal_field_config_id = $drupal_field_config->get_id();
			$result_array[$drupal_field_config_id]['drupal_field_config.id'] = $drupal_field_config->get_id();
			$result_array[$drupal_field_config_id]['drupal_field_config.field_name'] = $drupal_field_config->get_field_name();
			$result_array[$drupal_field_config_id]['drupal_field_config.type'] = $drupal_field_config->get_type();
			$result_array[$drupal_field_config_id]['drupal_field_config.module'] = $drupal_field_config->get_module();
			$result_array[$drupal_field_config_id]['drupal_field_config.active'] = $drupal_field_config->get_active();
			$result_array[$drupal_field_config_id]['drupal_field_config.storage_type'] = $drupal_field_config->get_storage_type();
			$result_array[$drupal_field_config_id]['drupal_field_config.storage_module'] = $drupal_field_config->get_storage_module();
			$result_array[$drupal_field_config_id]['drupal_field_config.storage_active'] = $drupal_field_config->get_storage_active();
			$result_array[$drupal_field_config_id]['drupal_field_config.locked'] = $drupal_field_config->get_locked();
			$result_array[$drupal_field_config_id]['drupal_field_config.data'] = $drupal_field_config->get_data();
			$result_array[$drupal_field_config_id]['drupal_field_config.cardinality'] = $drupal_field_config->get_cardinality();
			$result_array[$drupal_field_config_id]['drupal_field_config.translatable'] = $drupal_field_config->get_translatable();
			$result_array[$drupal_field_config_id]['drupal_field_config.deleted'] = $drupal_field_config->get_deleted();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_field_config.id']['type'] = 'int4';
			$this->p_column_definitions['drupal_field_config.field_name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_config.type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_config.module']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_config.active']['type'] = 'int2';
			$this->p_column_definitions['drupal_field_config.storage_type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_config.storage_module']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_config.storage_active']['type'] = 'int2';
			$this->p_column_definitions['drupal_field_config.locked']['type'] = 'int2';
			$this->p_column_definitions['drupal_field_config.data']['type'] = 'bytea';
			$this->p_column_definitions['drupal_field_config.cardinality']['type'] = 'int2';
			$this->p_column_definitions['drupal_field_config.translatable']['type'] = 'int2';
			$this->p_column_definitions['drupal_field_config.deleted']['type'] = 'int2';
		}
		return $this->p_column_definitions;
	}
}
?>
