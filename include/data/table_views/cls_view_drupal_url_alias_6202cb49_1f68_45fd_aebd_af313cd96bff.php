<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_url_alias_6202cb49_1f68_45fd_aebd_af313cd96bff extends cls_table_view_base 
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
		$common_drupal_url_alias = cls_table_factory::get_common_drupal_url_alias();
		$array_drupal_url_alias =  $common_drupal_url_alias->get_drupal_url_aliass($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_url_alias as $drupal_url_alias)
			{
			$drupal_url_alias_id = $drupal_url_alias->get_id();
			$result_array[$drupal_url_alias_id]['drupal_url_alias.pid'] = $drupal_url_alias->get_pid();
			$result_array[$drupal_url_alias_id]['drupal_url_alias.source'] = $drupal_url_alias->get_source();
			$result_array[$drupal_url_alias_id]['drupal_url_alias.alias'] = $drupal_url_alias->get_alias();
			$result_array[$drupal_url_alias_id]['drupal_url_alias.language'] = $drupal_url_alias->get_language();
			$result_array[$drupal_url_alias_id]['drupal_url_alias.id'] = $drupal_url_alias->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_url_alias.pid']['type'] = 'int4';
			$this->p_column_definitions['drupal_url_alias.source']['type'] = 'varchar';
			$this->p_column_definitions['drupal_url_alias.alias']['type'] = 'varchar';
			$this->p_column_definitions['drupal_url_alias.language']['type'] = 'varchar';
			$this->p_column_definitions['drupal_url_alias.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
