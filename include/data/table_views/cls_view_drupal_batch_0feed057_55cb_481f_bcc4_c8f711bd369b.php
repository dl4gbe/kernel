<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_batch_0feed057_55cb_481f_bcc4_c8f711bd369b extends cls_table_view_base 
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
		$common_drupal_batch = cls_table_factory::get_common_drupal_batch();
		$array_drupal_batch =  $common_drupal_batch->get_drupal_batchs($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_batch as $drupal_batch)
			{
			$drupal_batch_id = $drupal_batch->get_id();
			$result_array[$drupal_batch_id]['drupal_batch.bid'] = $drupal_batch->get_bid();
			$result_array[$drupal_batch_id]['drupal_batch.token'] = $drupal_batch->get_token();
			$result_array[$drupal_batch_id]['drupal_batch.timestamp'] = $drupal_batch->get_timestamp();
			$result_array[$drupal_batch_id]['drupal_batch.batch'] = $drupal_batch->get_batch();
			$result_array[$drupal_batch_id]['drupal_batch.id'] = $drupal_batch->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_batch.bid']['type'] = 'int8';
			$this->p_column_definitions['drupal_batch.token']['type'] = 'varchar';
			$this->p_column_definitions['drupal_batch.timestamp']['type'] = 'int4';
			$this->p_column_definitions['drupal_batch.batch']['type'] = 'bytea';
			$this->p_column_definitions['drupal_batch.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
