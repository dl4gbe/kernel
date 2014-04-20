<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_sequences_a7807ecb_9aa1_4b83_aa8b_99942d9e5bf2 extends cls_table_view_base 
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
		$common_drupal_sequences = cls_table_factory::get_common_drupal_sequences();
		$array_drupal_sequences =  $common_drupal_sequences->get_drupal_sequencess($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_sequences as $drupal_sequences)
			{
			$drupal_sequences_id = $drupal_sequences->get_id();
			$result_array[$drupal_sequences_id]['drupal_sequences.value'] = $drupal_sequences->get_value();
			$result_array[$drupal_sequences_id]['drupal_sequences.id'] = $drupal_sequences->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_sequences.value']['type'] = 'int4';
			$this->p_column_definitions['drupal_sequences.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>
