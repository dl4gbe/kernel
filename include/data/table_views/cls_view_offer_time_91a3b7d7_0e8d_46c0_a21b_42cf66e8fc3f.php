<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_offer_time_91a3b7d7_0e8d_46c0_a21b_42cf66e8fc3f extends cls_table_view_base 
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
		$common_offer_time = cls_table_factory::get_common_offer_time();
		$array_offer_time =  $common_offer_time->get_offer_times($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_offer($array_offer_time);
		$data_array_id_offer = $this->fill_distinct_id_offer($where);

		$result_array = array();
		foreach($array_offer_time as $offer_time)
			{
			$offer_time_id = $offer_time->get_id();
			$result_array[$offer_time_id]['offer_time.id'] = $offer_time->get_id();
			$link_id = $offer_time->get_id_offer();
			if (empty($link_id))
				{
				$result_array[$offer_time_id]['offer.name'] = '';
				}
			else
				{
				$result_array[$offer_time_id]['offer.name'] = $data_array_id_offer[$link_id]->get_name();
				}
			$result_array[$offer_time_id]['offer_time.dayofweek'] = $offer_time->get_dayofweek();
			$result_array[$offer_time_id]['offer_time.validfrom'] = $offer_time->get_validfrom();
			$result_array[$offer_time_id]['offer_time.validtil'] = $offer_time->get_validtil();
			$result_array[$offer_time_id]['offer_time.timefrom'] = $offer_time->get_timefrom();
			$result_array[$offer_time_id]['offer_time.timetil'] = $offer_time->get_timetil();
			$result_array[$offer_time_id]['offer_time.duration_in_minutes'] = $offer_time->get_duration_in_minutes();
			$result_array[$offer_time_id]['offer_time.remark'] = $offer_time->get_remark();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_offer($array_offer_time)
	{
		$ids = array();
		foreach ($array_offer_time as $offer_time)
		{
			$id = $offer_time->get_id_offer();
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

	private function fill_distinct_id_offer($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "offer.id",offer.name as "offer.name" from offer where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$offer = cls_table_factory::create_instance('offer');
			$offer->fill($row);
			$data[$row['offer.id']] = $offer;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['offer_time.id']['type'] = 'uuid';
			$this->p_column_definitions['offer.name']['type'] = 'varchar';
			$this->p_column_definitions['offer_time.dayofweek']['type'] = 'int4';
			$this->p_column_definitions['offer_time.validfrom']['type'] = 'date';
			$this->p_column_definitions['offer_time.validtil']['type'] = 'date';
			$this->p_column_definitions['offer_time.timefrom']['type'] = 'timetz';
			$this->p_column_definitions['offer_time.timetil']['type'] = 'timetz';
			$this->p_column_definitions['offer_time.duration_in_minutes']['type'] = 'int4';
			$this->p_column_definitions['offer_time.remark']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
