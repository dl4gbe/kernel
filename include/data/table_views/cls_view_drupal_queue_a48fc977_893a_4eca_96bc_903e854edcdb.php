<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_queue_a48fc977_893a_4eca_96bc_903e854edcdb extends cls_table_view_base 
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
		$common_drupal_queue = cls_table_factory::get_common_drupal_queue();
		$array_drupal_queue =  $common_drupal_queue->get_drupal_queues($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_queue as $drupal_queue)
			{
			$drupal_queue_id = $drupal_queue->get_id();
			$result_array[$drupal_queue_id]['drupal_queue.item_id'] = $drupal_queue->get_item_id();
			$result_array[$drupal_queue_id]['drupal_queue.name'] = $drupal_queue->get_name();
			$result_array[$drupal_queue_id]['drupal_queue.data'] = $drupal_queue->get_data();
			$result_array[$drupal_queue_id]['drupal_queue.expire'] = $drupal_queue->get_expire();
			$result_array[$drupal_queue_id]['drupal_queue.created'] = $drupal_queue->get_created();
			$result_array[$drupal_queue_id]['drupal_queue.id'] = $drupal_queue->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_queue.item_id']['type'] = 'int4';
			$this->p_column_definitions['drupal_queue.name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_queue.data']['type'] = 'bytea';
			$this->p_column_definitions['drupal_queue.expire']['type'] = 'int4';
			$this->p_column_definitions['drupal_queue.created']['type'] = 'int4';
			$this->p_column_definitions['drupal_queue.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
