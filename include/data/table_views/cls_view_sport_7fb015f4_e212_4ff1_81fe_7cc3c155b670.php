<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_sport_7fb015f4_e212_4ff1_81fe_7cc3c155b670 extends cls_table_view_base 
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
		$common_sport = cls_table_factory::get_common_sport();
		$array_sport =  $common_sport->get_sports($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_sport as $sport)
			{
			$sport_id = $sport->get_id();
			$result_array[$sport_id]['sport.id'] = $sport->get_id();
			$result_array[$sport_id]['sport.name'] = $sport->get_name();
			$result_array[$sport_id]['sport.rehasport'] = $sport->get_rehasport();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['sport.id']['type'] = 'uuid';
			$this->p_column_definitions['sport.name']['type'] = 'varchar';
			$this->p_column_definitions['sport.rehasport']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>
