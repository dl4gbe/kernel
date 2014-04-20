<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_block_cbdff09f_69ba_4d8d_8722_af238e4d2b87 extends cls_table_view_base 
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
		$common_drupal_block = cls_table_factory::get_common_drupal_block();
		$array_drupal_block =  $common_drupal_block->get_drupal_blocks($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_block as $drupal_block)
			{
			$drupal_block_id = $drupal_block->get_id();
			$result_array[$drupal_block_id]['drupal_block.bid'] = $drupal_block->get_bid();
			$result_array[$drupal_block_id]['drupal_block.module'] = $drupal_block->get_module();
			$result_array[$drupal_block_id]['drupal_block.delta'] = $drupal_block->get_delta();
			$result_array[$drupal_block_id]['drupal_block.theme'] = $drupal_block->get_theme();
			$result_array[$drupal_block_id]['drupal_block.status'] = $drupal_block->get_status();
			$result_array[$drupal_block_id]['drupal_block.weight'] = $drupal_block->get_weight();
			$result_array[$drupal_block_id]['drupal_block.region'] = $drupal_block->get_region();
			$result_array[$drupal_block_id]['drupal_block.custom'] = $drupal_block->get_custom();
			$result_array[$drupal_block_id]['drupal_block.visibility'] = $drupal_block->get_visibility();
			$result_array[$drupal_block_id]['drupal_block.pages'] = $drupal_block->get_pages();
			$result_array[$drupal_block_id]['drupal_block.title'] = $drupal_block->get_title();
			$result_array[$drupal_block_id]['drupal_block.cache'] = $drupal_block->get_cache();
			$result_array[$drupal_block_id]['drupal_block.id'] = $drupal_block->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_block.bid']['type'] = 'int4';
			$this->p_column_definitions['drupal_block.module']['type'] = 'varchar';
			$this->p_column_definitions['drupal_block.delta']['type'] = 'varchar';
			$this->p_column_definitions['drupal_block.theme']['type'] = 'varchar';
			$this->p_column_definitions['drupal_block.status']['type'] = 'int2';
			$this->p_column_definitions['drupal_block.weight']['type'] = 'int4';
			$this->p_column_definitions['drupal_block.region']['type'] = 'varchar';
			$this->p_column_definitions['drupal_block.custom']['type'] = 'int2';
			$this->p_column_definitions['drupal_block.visibility']['type'] = 'int2';
			$this->p_column_definitions['drupal_block.pages']['type'] = 'text';
			$this->p_column_definitions['drupal_block.title']['type'] = 'varchar';
			$this->p_column_definitions['drupal_block.cache']['type'] = 'int2';
			$this->p_column_definitions['drupal_block.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
