<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_cache_block_72a3b412_9314_4d13_b79c_acaf4ea9e17c extends cls_table_view_base 
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
		$common_drupal_cache_block = cls_table_factory::get_common_drupal_cache_block();
		$array_drupal_cache_block =  $common_drupal_cache_block->get_drupal_cache_blocks($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_cache_block as $drupal_cache_block)
			{
			$drupal_cache_block_id = $drupal_cache_block->get_id();
			$result_array[$drupal_cache_block_id]['drupal_cache_block.cid'] = $drupal_cache_block->get_cid();
			$result_array[$drupal_cache_block_id]['drupal_cache_block.data'] = $drupal_cache_block->get_data();
			$result_array[$drupal_cache_block_id]['drupal_cache_block.expire'] = $drupal_cache_block->get_expire();
			$result_array[$drupal_cache_block_id]['drupal_cache_block.created'] = $drupal_cache_block->get_created();
			$result_array[$drupal_cache_block_id]['drupal_cache_block.serialized'] = $drupal_cache_block->get_serialized();
			$result_array[$drupal_cache_block_id]['drupal_cache_block.id'] = $drupal_cache_block->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_cache_block.cid']['type'] = 'varchar';
			$this->p_column_definitions['drupal_cache_block.data']['type'] = 'bytea';
			$this->p_column_definitions['drupal_cache_block.expire']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_block.created']['type'] = 'int4';
			$this->p_column_definitions['drupal_cache_block.serialized']['type'] = 'int2';
			$this->p_column_definitions['drupal_cache_block.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
