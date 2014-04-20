<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_cache_image_8bbe2ae5_5fb2_47d2_a904_82128e20ab40 extends cls_table_view_base 
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
		$common_drupal_cache_image = cls_table_factory::get_common_drupal_cache_image();
		$array_drupal_cache_image =  $common_drupal_cache_image->get_drupal_cache_images($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_cache_image as $drupal_cache_image)
			{
			$drupal_cache_image_id = $drupal_cache_image->get_id();
			$result_array[$drupal_cache_image_id]['drupal_cache_image.cid'] = $drupal_cache_image->get_cid();
			$result_array[$drupal_cache_image_id]['drupal_cache_image.data'] = $drupal_cache_image->get_data();
			$result_array[$drupal_cache_image_id]['drupal_cache_image.expire'] = $drupal_cache_image->get_expire();
			$result_array[$drupal_cache_image_id]['drupal_cache_image.created'] = $drupal_cache_image->get_created();
			$result_array[$drupal_cache_image_id]['drupal_cache_image.serialized'] = $drupal_cache_image->get_serialized();
			$result_array[$drupal_cache_image_id]['drupal_cache_image.id'] = $drupal_cache_image->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_cache_image.cid']['type'] = 'varchar';
			$this->p_column_definitions['drupal_cache_image.data']['type'] = 'bytea';
			$this->p_column_definitions['drupal_cache_image.expire']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_image.created']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_image.serialized']['type'] = 'int2';
			$this->p_column_definitions['drupal_cache_image.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
