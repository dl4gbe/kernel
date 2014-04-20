<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_semaphore_0708c7d8_eafc_4825_9af8_bd8447237422 extends cls_table_view_base 
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
		$common_drupal_semaphore = cls_table_factory::get_common_drupal_semaphore();
		$array_drupal_semaphore =  $common_drupal_semaphore->get_drupal_semaphores($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_semaphore as $drupal_semaphore)
			{
			$drupal_semaphore_id = $drupal_semaphore->get_id();
			$result_array[$drupal_semaphore_id]['drupal_semaphore.name'] = $drupal_semaphore->get_name();
			$result_array[$drupal_semaphore_id]['drupal_semaphore.value'] = $drupal_semaphore->get_value();
			$result_array[$drupal_semaphore_id]['drupal_semaphore.expire'] = $drupal_semaphore->get_expire();
			$result_array[$drupal_semaphore_id]['drupal_semaphore.id'] = $drupal_semaphore->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_semaphore.name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_semaphore.value']['type'] = 'varchar';
			$this->p_column_definitions['drupal_semaphore.expire']['type'] = 'float8';
			$this->p_column_definitions['drupal_semaphore.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
