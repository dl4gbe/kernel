<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_image_styles_66157e5f_70ee_460a_ab5f_a0cd2308ce7c extends cls_table_view_base 
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
		$common_drupal_image_styles = cls_table_factory::get_common_drupal_image_styles();
		$array_drupal_image_styles =  $common_drupal_image_styles->get_drupal_image_styless($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_image_styles as $drupal_image_styles)
			{
			$drupal_image_styles_id = $drupal_image_styles->get_id();
			$result_array[$drupal_image_styles_id]['drupal_image_styles.isid'] = $drupal_image_styles->get_isid();
			$result_array[$drupal_image_styles_id]['drupal_image_styles.name'] = $drupal_image_styles->get_name();
			$result_array[$drupal_image_styles_id]['drupal_image_styles.label'] = $drupal_image_styles->get_label();
			$result_array[$drupal_image_styles_id]['drupal_image_styles.id'] = $drupal_image_styles->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_image_styles.isid']['type'] = 'int4';
			$this->p_column_definitions['drupal_image_styles.name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_image_styles.label']['type'] = 'varchar';
			$this->p_column_definitions['drupal_image_styles.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
