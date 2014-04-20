<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_system_5ce8a9c4_7950_45d9_879c_e0e57e673cb6 extends cls_table_view_base 
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
		$common_drupal_system = cls_table_factory::get_common_drupal_system();
		$array_drupal_system =  $common_drupal_system->get_drupal_systems($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_system as $drupal_system)
			{
			$drupal_system_id = $drupal_system->get_id();
			$result_array[$drupal_system_id]['drupal_system.filename'] = $drupal_system->get_filename();
			$result_array[$drupal_system_id]['drupal_system.name'] = $drupal_system->get_name();
			$result_array[$drupal_system_id]['drupal_system.type'] = $drupal_system->get_type();
			$result_array[$drupal_system_id]['drupal_system.owner'] = $drupal_system->get_owner();
			$result_array[$drupal_system_id]['drupal_system.status'] = $drupal_system->get_status();
			$result_array[$drupal_system_id]['drupal_system.bootstrap'] = $drupal_system->get_bootstrap();
			$result_array[$drupal_system_id]['drupal_system.schema_version'] = $drupal_system->get_schema_version();
			$result_array[$drupal_system_id]['drupal_system.weight'] = $drupal_system->get_weight();
			$result_array[$drupal_system_id]['drupal_system.info'] = $drupal_system->get_info();
			$result_array[$drupal_system_id]['drupal_system.id'] = $drupal_system->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_system.filename']['type'] = 'varchar';
			$this->p_column_definitions['drupal_system.name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_system.type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_system.owner']['type'] = 'varchar';
			$this->p_column_definitions['drupal_system.status']['type'] = 'int4';
			$this->p_column_definitions['drupal_system.bootstrap']['type'] = 'int4';
			$this->p_column_definitions['drupal_system.schema_version']['type'] = 'int2';
			$this->p_column_definitions['drupal_system.weight']['type'] = 'int4';
			$this->p_column_definitions['drupal_system.info']['type'] = 'bytea';
			$this->p_column_definitions['drupal_system.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
