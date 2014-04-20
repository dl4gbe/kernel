<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_salutation_5713d3b8_1a1e_41f8_9dfc_563815911f22 extends cls_table_view_base 
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
		$common_salutation = cls_table_factory::get_common_salutation();
		$array_salutation =  $common_salutation->get_salutations($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_salutation as $salutation)
			{
			$salutation_id = $salutation->get_id();
			$result_array[$salutation_id]['salutation.id'] = $salutation->get_id();
			$result_array[$salutation_id]['salutation.gender'] = $salutation->get_gender();
			$result_array[$salutation_id]['salutation.name'] = $salutation->get_name();
			$result_array[$salutation_id]['salutation.formal'] = $salutation->get_formal();
			$result_array[$salutation_id]['salutation.letter'] = $salutation->get_letter();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['salutation.id']['type'] = 'uuid';
			$this->p_column_definitions['salutation.gender']['type'] = 'bpchar';
			$this->p_column_definitions['salutation.name']['type'] = 'varchar';
			$this->p_column_definitions['salutation.formal']['type'] = 'bool';
			$this->p_column_definitions['salutation.letter']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
