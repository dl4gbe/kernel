<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_watchdog_9e33878b_779e_4125_99a2_1b6e77209f4d extends cls_table_view_base 
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
		$common_drupal_watchdog = cls_table_factory::get_common_drupal_watchdog();
		$array_drupal_watchdog =  $common_drupal_watchdog->get_drupal_watchdogs($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_watchdog as $drupal_watchdog)
			{
			$drupal_watchdog_id = $drupal_watchdog->get_id();
			$result_array[$drupal_watchdog_id]['drupal_watchdog.wid'] = $drupal_watchdog->get_wid();
			$result_array[$drupal_watchdog_id]['drupal_watchdog.uid'] = $drupal_watchdog->get_uid();
			$result_array[$drupal_watchdog_id]['drupal_watchdog.type'] = $drupal_watchdog->get_type();
			$result_array[$drupal_watchdog_id]['drupal_watchdog.message'] = $drupal_watchdog->get_message();
			$result_array[$drupal_watchdog_id]['drupal_watchdog.variables'] = $drupal_watchdog->get_variables();
			$result_array[$drupal_watchdog_id]['drupal_watchdog.severity'] = $drupal_watchdog->get_severity();
			$result_array[$drupal_watchdog_id]['drupal_watchdog.link'] = $drupal_watchdog->get_link();
			$result_array[$drupal_watchdog_id]['drupal_watchdog.location'] = $drupal_watchdog->get_location();
			$result_array[$drupal_watchdog_id]['drupal_watchdog.referer'] = $drupal_watchdog->get_referer();
			$result_array[$drupal_watchdog_id]['drupal_watchdog.hostname'] = $drupal_watchdog->get_hostname();
			$result_array[$drupal_watchdog_id]['drupal_watchdog.timestamp'] = $drupal_watchdog->get_timestamp();
			$result_array[$drupal_watchdog_id]['drupal_watchdog.id'] = $drupal_watchdog->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_watchdog.wid']['type'] = 'int4';
			$this->p_column_definitions['drupal_watchdog.uid']['type'] = 'int4';
			$this->p_column_definitions['drupal_watchdog.type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_watchdog.message']['type'] = 'text';
			$this->p_column_definitions['drupal_watchdog.variables']['type'] = 'bytea';
			$this->p_column_definitions['drupal_watchdog.severity']['type'] = 'int4';
			$this->p_column_definitions['drupal_watchdog.link']['type'] = 'varchar';
			$this->p_column_definitions['drupal_watchdog.location']['type'] = 'text';
			$this->p_column_definitions['drupal_watchdog.referer']['type'] = 'text';
			$this->p_column_definitions['drupal_watchdog.hostname']['type'] = 'varchar';
			$this->p_column_definitions['drupal_watchdog.timestamp']['type'] = 'int4';
			$this->p_column_definitions['drupal_watchdog.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
