<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_field_data_field_image_8a4bd9d6_338d_484c_9895_ceea27c31083 extends cls_table_view_base 
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
		$common_drupal_field_data_field_image = cls_table_factory::get_common_drupal_field_data_field_image();
		$array_drupal_field_data_field_image =  $common_drupal_field_data_field_image->get_drupal_field_data_field_images($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_field_data_field_image as $drupal_field_data_field_image)
			{
			$drupal_field_data_field_image_id = $drupal_field_data_field_image->get_id();
			$result_array[$drupal_field_data_field_image_id]['drupal_field_data_field_image.entity_type'] = $drupal_field_data_field_image->get_entity_type();
			$result_array[$drupal_field_data_field_image_id]['drupal_field_data_field_image.bundle'] = $drupal_field_data_field_image->get_bundle();
			$result_array[$drupal_field_data_field_image_id]['drupal_field_data_field_image.deleted'] = $drupal_field_data_field_image->get_deleted();
			$result_array[$drupal_field_data_field_image_id]['drupal_field_data_field_image.entity_id'] = $drupal_field_data_field_image->get_entity_id();
			$result_array[$drupal_field_data_field_image_id]['drupal_field_data_field_image.revision_id'] = $drupal_field_data_field_image->get_revision_id();
			$result_array[$drupal_field_data_field_image_id]['drupal_field_data_field_image.language'] = $drupal_field_data_field_image->get_language();
			$result_array[$drupal_field_data_field_image_id]['drupal_field_data_field_image.delta'] = $drupal_field_data_field_image->get_delta();
			$result_array[$drupal_field_data_field_image_id]['drupal_field_data_field_image.field_image_fid'] = $drupal_field_data_field_image->get_field_image_fid();
			$result_array[$drupal_field_data_field_image_id]['drupal_field_data_field_image.field_image_alt'] = $drupal_field_data_field_image->get_field_image_alt();
			$result_array[$drupal_field_data_field_image_id]['drupal_field_data_field_image.field_image_title'] = $drupal_field_data_field_image->get_field_image_title();
			$result_array[$drupal_field_data_field_image_id]['drupal_field_data_field_image.field_image_width'] = $drupal_field_data_field_image->get_field_image_width();
			$result_array[$drupal_field_data_field_image_id]['drupal_field_data_field_image.field_image_height'] = $drupal_field_data_field_image->get_field_image_height();
			$result_array[$drupal_field_data_field_image_id]['drupal_field_data_field_image.id'] = $drupal_field_data_field_image->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_field_data_field_image.entity_type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_data_field_image.bundle']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_data_field_image.deleted']['type'] = 'int2';
			$this->p_column_definitions['drupal_field_data_field_image.entity_id']['type'] = 'int8';
			$this->p_column_definitions['drupal_field_data_field_image.revision_id']['type'] = 'int8';
			$this->p_column_definitions['drupal_field_data_field_image.language']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_data_field_image.delta']['type'] = 'int8';
			$this->p_column_definitions['drupal_field_data_field_image.field_image_fid']['type'] = 'int8';
			$this->p_column_definitions['drupal_field_data_field_image.field_image_alt']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_data_field_image.field_image_title']['type'] = 'varchar';
			$this->p_column_definitions['drupal_field_data_field_image.field_image_width']['type'] = 'int8';
			$this->p_column_definitions['drupal_field_data_field_image.field_image_height']['type'] = 'int8';
			$this->p_column_definitions['drupal_field_data_field_image.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
