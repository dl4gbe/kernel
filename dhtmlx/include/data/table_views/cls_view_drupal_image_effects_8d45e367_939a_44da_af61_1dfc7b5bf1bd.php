<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_image_effects_8d45e367_939a_44da_af61_1dfc7b5bf1bd extends cls_table_view_base 
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
		$common_drupal_image_effects = cls_table_factory::get_common_drupal_image_effects();
		$array_drupal_image_effects =  $common_drupal_image_effects->get_drupal_image_effectss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_image_effects as $drupal_image_effects)
			{
			$drupal_image_effects_id = $drupal_image_effects->get_id();
			$result_array[$drupal_image_effects_id]['drupal_image_effects.ieid'] = $drupal_image_effects->get_ieid();
			$result_array[$drupal_image_effects_id]['drupal_image_effects.isid'] = $drupal_image_effects->get_isid();
			$result_array[$drupal_image_effects_id]['drupal_image_effects.weight'] = $drupal_image_effects->get_weight();
			$result_array[$drupal_image_effects_id]['drupal_image_effects.name'] = $drupal_image_effects->get_name();
			$result_array[$drupal_image_effects_id]['drupal_image_effects.data'] = $drupal_image_effects->get_data();
			$result_array[$drupal_image_effects_id]['drupal_image_effects.id'] = $drupal_image_effects->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_image_effects.ieid']['type'] = 'int4';
			$this->p_column_definitions['drupal_image_effects.isid']['type'] = 'int8';
			$this->p_column_definitions['drupal_image_effects.weight']['type'] = 'int4';
			$this->p_column_definitions['drupal_image_effects.name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_image_effects.data']['type'] = 'bytea';
			$this->p_column_definitions['drupal_image_effects.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
