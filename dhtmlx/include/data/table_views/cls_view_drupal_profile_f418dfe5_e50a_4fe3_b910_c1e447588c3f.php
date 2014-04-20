<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_profile_f418dfe5_e50a_4fe3_b910_c1e447588c3f extends cls_table_view_base 
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
		$common_drupal_profile = cls_table_factory::get_common_drupal_profile();
		$array_drupal_profile =  $common_drupal_profile->get_drupal_profiles($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_profile as $drupal_profile)
			{
			$drupal_profile_id = $drupal_profile->get_id();
			$result_array[$drupal_profile_id]['drupal_profile.pid'] = $drupal_profile->get_pid();
			$result_array[$drupal_profile_id]['drupal_profile.type'] = $drupal_profile->get_type();
			$result_array[$drupal_profile_id]['drupal_profile.uid'] = $drupal_profile->get_uid();
			$result_array[$drupal_profile_id]['drupal_profile.label'] = $drupal_profile->get_label();
			$result_array[$drupal_profile_id]['drupal_profile.created'] = $drupal_profile->get_created();
			$result_array[$drupal_profile_id]['drupal_profile.changed'] = $drupal_profile->get_changed();
			$result_array[$drupal_profile_id]['drupal_profile.id'] = $drupal_profile->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_profile.pid']['type'] = 'int4';
			$this->p_column_definitions['drupal_profile.type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_profile.uid']['type'] = 'int8';
			$this->p_column_definitions['drupal_profile.label']['type'] = 'varchar';
			$this->p_column_definitions['drupal_profile.created']['type'] = 'int4';
			$this->p_column_definitions['drupal_profile.changed']['type'] = 'int4';
			$this->p_column_definitions['drupal_profile.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
