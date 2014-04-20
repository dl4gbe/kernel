<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_field_config_instance_b3a3600c_74a1_4a6e_82a0_bf571e8c3edd extends cls_table_view_base 
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
		$common_drupal_field_config_instance = cls_table_factory::get_common_drupal_field_config_instance();
		$array_drupal_field_config_instance =  $common_drupal_field_config_instance->get_drupal_field_config_instances($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_field_config_instance as $drupal_field_config_instance)
			{
			$drupal_field_config_instance_id = $drupal_field_config_instance->get_id();
			$result_array[$drupal_field_config_instance_id]['drupal_field_config_instance.id'] = $drupal_field_config_instance->get_id();
			$result_array[$drupal_field_config_instance_id]['drupal_field_config_instance.field_id'] = $drupal_field_config_instance->get_field_id();
			$result_array[$drupal_field_config_instance_id]['drupal_field_config_instance.field_name'] = $drupal_field_config_instance->get_field_name();
			$result_array[$drupal_field_config_instance_id]['drupal_field_config_instance.entity_type'] = $drupal_field_config_instance->get_entity_type();
			$result_array[$drupal_field_config_instance_id]['drupal_field_config_instance.bundle'] = $drupal_field_config_instance->get_bundle();
			$result_array[$drupal_field_config_instance_id]['drupal_field_config_instance.data'] = $drupal_field_config_instance->get_data();
			$result_array[$drupal_field_config_instance_id]['drupal_field_config_instance.deleted'] = $drupal_field_config_instance->get_deleted();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_field_config_instance.id']['type'] = 'int4';
			$this->p_column_definitions['drupal_field_config_instance.field_id']['type'] = 'int4';
			$this->p_column_definitions['drupal_field_config_instance.field_name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_config_instance.entity_type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_config_instance.bundle']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_config_instance.data']['type'] = 'bytea';
			$this->p_column_definitions['drupal_field_config_instance.deleted']['type'] = 'int2';
		}
		return $this->p_column_definitions;
	}
}
?>
