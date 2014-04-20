<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_sessions_f7b357a4_0ad5_4743_8ac5_fb21b156d62c extends cls_table_view_base 
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
		$common_sessions = cls_table_factory::get_common_sessions();
		$array_sessions =  $common_sessions->get_sessionss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_sessions as $sessions)
			{
			$sessions_id = $sessions->get_id();
			$result_array[$sessions_id]['sessions.id'] = $sessions->get_id();
			$result_array[$sessions_id]['sessions.uid'] = $sessions->get_uid();
			$result_array[$sessions_id]['sessions.sid'] = $sessions->get_sid();
			$result_array[$sessions_id]['sessions.ssid'] = $sessions->get_ssid();
			$result_array[$sessions_id]['sessions.hostname'] = $sessions->get_hostname();
			$result_array[$sessions_id]['sessions.timestamp'] = $sessions->get_timestamp();
			$result_array[$sessions_id]['sessions.cache'] = $sessions->get_cache();
			$result_array[$sessions_id]['sessions.session'] = $sessions->get_session();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
		}
		return $this->p_column_definitions;
	}
}
?>
