<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_users_4d6a60fb_258d_4203_86f8_a0cfbcebb6d1 extends cls_table_view_base 
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
		$common_drupal_users = cls_table_factory::get_common_drupal_users();
		$array_drupal_users =  $common_drupal_users->get_drupal_userss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_users as $drupal_users)
			{
			$drupal_users_id = $drupal_users->get_id();
			$result_array[$drupal_users_id]['drupal_users.uid'] = $drupal_users->get_uid();
			$result_array[$drupal_users_id]['drupal_users.name'] = $drupal_users->get_name();
			$result_array[$drupal_users_id]['drupal_users.pass'] = $drupal_users->get_pass();
			$result_array[$drupal_users_id]['drupal_users.mail'] = $drupal_users->get_mail();
			$result_array[$drupal_users_id]['drupal_users.theme'] = $drupal_users->get_theme();
			$result_array[$drupal_users_id]['drupal_users.signature'] = $drupal_users->get_signature();
			$result_array[$drupal_users_id]['drupal_users.signature_format'] = $drupal_users->get_signature_format();
			$result_array[$drupal_users_id]['drupal_users.created'] = $drupal_users->get_created();
			$result_array[$drupal_users_id]['drupal_users.access'] = $drupal_users->get_access();
			$result_array[$drupal_users_id]['drupal_users.login'] = $drupal_users->get_login();
			$result_array[$drupal_users_id]['drupal_users.status'] = $drupal_users->get_status();
			$result_array[$drupal_users_id]['drupal_users.timezone'] = $drupal_users->get_timezone();
			$result_array[$drupal_users_id]['drupal_users.language'] = $drupal_users->get_language();
			$result_array[$drupal_users_id]['drupal_users.picture'] = $drupal_users->get_picture();
			$result_array[$drupal_users_id]['drupal_users.init'] = $drupal_users->get_init();
			$result_array[$drupal_users_id]['drupal_users.data'] = $drupal_users->get_data();
			$result_array[$drupal_users_id]['drupal_users.id'] = $drupal_users->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_users.uid']['type'] = 'int8';
			$this->p_column_definitions['drupal_users.name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_users.pass']['type'] = 'varchar';
			$this->p_column_definitions['drupal_users.mail']['type'] = 'varchar';
			$this->p_column_definitions['drupal_users.theme']['type'] = 'varchar';
			$this->p_column_definitions['drupal_users.signature']['type'] = 'varchar';
			$this->p_column_definitions['drupal_users.signature_format']['type'] = 'varchar';
			$this->p_column_definitions['drupal_users.created']['type'] = 'int4';
			$this->p_column_definitions['drupal_users.access']['type'] = 'int4';
			$this->p_column_definitions['drupal_users.login']['type'] = 'int4';
			$this->p_column_definitions['drupal_users.status']['type'] = 'int2';
			$this->p_column_definitions['drupal_users.timezone']['type'] = 'varchar';
			$this->p_column_definitions['drupal_users.language']['type'] = 'varchar';
			$this->p_column_definitions['drupal_users.picture']['type'] = 'int4';
			$this->p_column_definitions['drupal_users.init']['type'] = 'varchar';
			$this->p_column_definitions['drupal_users.data']['type'] = 'bytea';
			$this->p_column_definitions['drupal_users.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
