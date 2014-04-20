<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_block_custom_1f6a072b_fa1c_4764_8cfe_e76cc27d0796 extends cls_table_view_base 
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
		$common_drupal_block_custom = cls_table_factory::get_common_drupal_block_custom();
		$array_drupal_block_custom =  $common_drupal_block_custom->get_drupal_block_customs($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_block_custom as $drupal_block_custom)
			{
			$drupal_block_custom_id = $drupal_block_custom->get_id();
			$result_array[$drupal_block_custom_id]['drupal_block_custom.bid'] = $drupal_block_custom->get_bid();
			$result_array[$drupal_block_custom_id]['drupal_block_custom.body'] = $drupal_block_custom->get_body();
			$result_array[$drupal_block_custom_id]['drupal_block_custom.info'] = $drupal_block_custom->get_info();
			$result_array[$drupal_block_custom_id]['drupal_block_custom.format'] = $drupal_block_custom->get_format();
			$result_array[$drupal_block_custom_id]['drupal_block_custom.id'] = $drupal_block_custom->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_block_custom.bid']['type'] = 'int4';
			$this->p_column_definitions['drupal_block_custom.body']['type'] = 'text';
			$this->p_column_definitions['drupal_block_custom.info']['type'] = 'varchar';
			$this->p_column_definitions['drupal_block_custom.format']['type'] = 'varchar';
			$this->p_column_definitions['drupal_block_custom.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
