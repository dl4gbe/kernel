<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_locales_target_ac9a39ab_7d47_4386_b7b6_4576707a1fed extends cls_table_view_base 
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
		$common_drupal_locales_target = cls_table_factory::get_common_drupal_locales_target();
		$array_drupal_locales_target =  $common_drupal_locales_target->get_drupal_locales_targets($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_locales_target as $drupal_locales_target)
			{
			$drupal_locales_target_id = $drupal_locales_target->get_id();
			$result_array[$drupal_locales_target_id]['drupal_locales_target.lid'] = $drupal_locales_target->get_lid();
			$result_array[$drupal_locales_target_id]['drupal_locales_target.translation'] = $drupal_locales_target->get_translation();
			$result_array[$drupal_locales_target_id]['drupal_locales_target.language'] = $drupal_locales_target->get_language();
			$result_array[$drupal_locales_target_id]['drupal_locales_target.plid'] = $drupal_locales_target->get_plid();
			$result_array[$drupal_locales_target_id]['drupal_locales_target.plural'] = $drupal_locales_target->get_plural();
			$result_array[$drupal_locales_target_id]['drupal_locales_target.id'] = $drupal_locales_target->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_locales_target.lid']['type'] = 'int4';
			$this->p_column_definitions['drupal_locales_target.translation']['type'] = 'text';
			$this->p_column_definitions['drupal_locales_target.language']['type'] = 'varchar';
			$this->p_column_definitions['drupal_locales_target.plid']['type'] = 'int4';
			$this->p_column_definitions['drupal_locales_target.plural']['type'] = 'int4';
			$this->p_column_definitions['drupal_locales_target.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
