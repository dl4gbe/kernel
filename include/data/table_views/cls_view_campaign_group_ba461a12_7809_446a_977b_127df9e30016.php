<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_campaign_group_ba461a12_7809_446a_977b_127df9e30016 extends cls_table_view_base 
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
		$common_campaign_group = cls_table_factory::get_common_campaign_group();
		$array_campaign_group =  $common_campaign_group->get_campaign_groups($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_campaign_group as $campaign_group)
			{
			$campaign_group_id = $campaign_group->get_id();
			$result_array[$campaign_group_id]['campaign_group.id'] = $campaign_group->get_id();
			$result_array[$campaign_group_id]['campaign_group.name'] = $campaign_group->get_name();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['campaign_group.id']['type'] = 'uuid';
			$this->p_column_definitions['campaign_group.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
