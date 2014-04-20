<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_flood_24dc8734_0950_4c05_b275_b357eca58ab0 extends cls_table_view_base 
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
		$common_drupal_flood = cls_table_factory::get_common_drupal_flood();
		$array_drupal_flood =  $common_drupal_flood->get_drupal_floods($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_flood as $drupal_flood)
			{
			$drupal_flood_id = $drupal_flood->get_id();
			$result_array[$drupal_flood_id]['drupal_flood.fid'] = $drupal_flood->get_fid();
			$result_array[$drupal_flood_id]['drupal_flood.event'] = $drupal_flood->get_event();
			$result_array[$drupal_flood_id]['drupal_flood.identifier'] = $drupal_flood->get_identifier();
			$result_array[$drupal_flood_id]['drupal_flood.timestamp'] = $drupal_flood->get_timestamp();
			$result_array[$drupal_flood_id]['drupal_flood.expiration'] = $drupal_flood->get_expiration();
			$result_array[$drupal_flood_id]['drupal_flood.id'] = $drupal_flood->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_flood.fid']['type'] = 'int4';
			$this->p_column_definitions['drupal_flood.event']['type'] = 'varchar';
			$this->p_column_definitions['drupal_flood.identifier']['type'] = 'varchar';
			$this->p_column_definitions['drupal_flood.timestamp']['type'] = 'int4';
			$this->p_column_definitions['drupal_flood.expiration']['type'] = 'int4';
			$this->p_column_definitions['drupal_flood.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
