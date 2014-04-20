<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_sessions_7f87de8a_788d_43d0_98dc_e94f8524ebbc extends cls_table_view_base 
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
		$common_drupal_sessions = cls_table_factory::get_common_drupal_sessions();
		$array_drupal_sessions =  $common_drupal_sessions->get_drupal_sessionss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_sessions as $drupal_sessions)
			{
			$drupal_sessions_id = $drupal_sessions->get_id();
			$result_array[$drupal_sessions_id]['drupal_sessions.uid'] = $drupal_sessions->get_uid();
			$result_array[$drupal_sessions_id]['drupal_sessions.sid'] = $drupal_sessions->get_sid();
			$result_array[$drupal_sessions_id]['drupal_sessions.ssid'] = $drupal_sessions->get_ssid();
			$result_array[$drupal_sessions_id]['drupal_sessions.hostname'] = $drupal_sessions->get_hostname();
			$result_array[$drupal_sessions_id]['drupal_sessions.timestamp'] = $drupal_sessions->get_timestamp();
			$result_array[$drupal_sessions_id]['drupal_sessions.cache'] = $drupal_sessions->get_cache();
			$result_array[$drupal_sessions_id]['drupal_sessions.session'] = $drupal_sessions->get_session();
			$result_array[$drupal_sessions_id]['drupal_sessions.id'] = $drupal_sessions->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_sessions.uid']['type'] = 'int8';
			$this->p_column_definitions['drupal_sessions.sid']['type'] = 'varchar';
			$this->p_column_definitions['drupal_sessions.ssid']['type'] = 'varchar';
			$this->p_column_definitions['drupal_sessions.hostname']['type'] = 'varchar';
			$this->p_column_definitions['drupal_sessions.timestamp']['type'] = 'int4';
			$this->p_column_definitions['drupal_sessions.cache']['type'] = 'int4';
			$this->p_column_definitions['drupal_sessions.session']['type'] = 'bytea';
			$this->p_column_definitions['drupal_sessions.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
