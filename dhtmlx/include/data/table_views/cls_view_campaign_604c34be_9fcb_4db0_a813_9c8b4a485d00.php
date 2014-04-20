<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_campaign_604c34be_9fcb_4db0_a813_9c8b4a485d00 extends cls_table_view_base 
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
		$common_campaign = cls_table_factory::get_common_campaign();
		$array_campaign =  $common_campaign->get_campaigns($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_campaign_group($array_campaign);
		$data_array_id_campaign_group = $this->fill_distinct_id_campaign_group($where);

		$result_array = array();
		foreach($array_campaign as $campaign)
			{
			$campaign_id = $campaign->get_id();
			$result_array[$campaign_id]['campaign.id'] = $campaign->get_id();
			$link_id = $campaign->get_id_campaign_group();
			if (empty($link_id))
				{
				$result_array[$campaign_id]['campaign_group.name'] = '';
				}
			else
				{
				$result_array[$campaign_id]['campaign_group.name'] = $data_array_id_campaign_group[$link_id]->get_name();
				}
			$result_array[$campaign_id]['campaign.name'] = $campaign->get_name();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_campaign_group($array_campaign)
	{
		$ids = array();
		foreach ($array_campaign as $campaign)
		{
			$id = $campaign->get_id_campaign_group();
			if (!in_array($id,$ids)) $ids[] = $id;
		}
		$i = 0;
		$in = "";
		foreach ($ids as $id)
		{
			if (empty($id)) continue;
			if ($i != 0) $in .= ',';
			$in .= "'" . $id . "'";
			$i++;
		}
		if (!empty($in)) $in = ' id in (' . $in . ')';
		return $in;
	}

	private function fill_distinct_id_campaign_group($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "campaign_group.id",campaign_group.name as "campaign_group.name" from campaign_group where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$campaign_group = cls_table_factory::create_instance('campaign_group');
			$campaign_group->fill($row);
			$data[$row['campaign_group.id']] = $campaign_group;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['campaign.id']['type'] = 'uuid';
			$this->p_column_definitions['campaign_group.name']['type'] = 'varchar';
			$this->p_column_definitions['campaign.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
