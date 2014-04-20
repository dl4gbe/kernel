<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_uom_c0fe8c3c_9732_4575_963b_22532027faf2 extends cls_table_view_base 
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
		$common_uom = cls_table_factory::get_common_uom();
		$array_uom =  $common_uom->get_uoms($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_uom as $uom)
			{
			$uom_id = $uom->get_id();
			$result_array[$uom_id]['uom.id'] = $uom->get_id();
			$result_array[$uom_id]['uom.name'] = $uom->get_name();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['uom.id']['type'] = 'uuid';
			$this->p_column_definitions['uom.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
