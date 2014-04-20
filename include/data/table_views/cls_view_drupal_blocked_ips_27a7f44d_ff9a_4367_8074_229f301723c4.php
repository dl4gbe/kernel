<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_blocked_ips_27a7f44d_ff9a_4367_8074_229f301723c4 extends cls_table_view_base 
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
		$common_drupal_blocked_ips = cls_table_factory::get_common_drupal_blocked_ips();
		$array_drupal_blocked_ips =  $common_drupal_blocked_ips->get_drupal_blocked_ipss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_blocked_ips as $drupal_blocked_ips)
			{
			$drupal_blocked_ips_id = $drupal_blocked_ips->get_id();
			$result_array[$drupal_blocked_ips_id]['drupal_blocked_ips.iid'] = $drupal_blocked_ips->get_iid();
			$result_array[$drupal_blocked_ips_id]['drupal_blocked_ips.ip'] = $drupal_blocked_ips->get_ip();
			$result_array[$drupal_blocked_ips_id]['drupal_blocked_ips.id'] = $drupal_blocked_ips->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_blocked_ips.iid']['type'] = 'int4';
			$this->p_column_definitions['drupal_blocked_ips.ip']['type'] = 'varchar';
			$this->p_column_definitions['drupal_blocked_ips.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
