<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_offer_696ea366_a28f_4441_9d8f_55a9537758ec extends cls_table_view_base 
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
		$common_offer = cls_table_factory::get_common_offer();
		$array_offer =  $common_offer->get_offers($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person_employee($array_offer);
		$data_array_id_person_employee = $this->fill_distinct_id_person_employee($where);

		$result_array = array();
		foreach($array_offer as $offer)
			{
			$offer_id = $offer->get_id();
			$result_array[$offer_id]['offer.id'] = $offer->get_id();
			$result_array[$offer_id]['offer.name'] = $offer->get_name();
			$result_array[$offer_id]['offer.no'] = $offer->get_no();
			$result_array[$offer_id]['offer.name'] = $offer->get_name();
			$result_array[$offer_id]['offer.positionnumber'] = $offer->get_positionnumber();
			$result_array[$offer_id]['offer.validfrom'] = $offer->get_validfrom();
			$result_array[$offer_id]['offer.validtil'] = $offer->get_validtil();
			$link_id = $offer->get_id_person_employee();
			if (empty($link_id))
				{
				$result_array[$offer_id]['person.name'] = '';
				}
			else
				{
				$result_array[$offer_id]['person.name'] = $data_array_id_person_employee[$link_id]->get_name();
				}
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person_employee($array_offer)
	{
		$ids = array();
		foreach ($array_offer as $offer)
		{
			$id = $offer->get_id_person_employee();
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

	private function fill_distinct_id_person_employee($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "person.id",person.name as "person.name" from person where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$person = cls_table_factory::create_instance('person');
			$person->fill($row);
			$data[$row['person.id']] = $person;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['offer.id']['type'] = 'uuid';
			$this->p_column_definitions['offer.name']['type'] = 'varchar';
			$this->p_column_definitions['offer.no']['type'] = 'varchar';
			$this->p_column_definitions['offer.name']['type'] = 'varchar';
			$this->p_column_definitions['offer.positionnumber']['type'] = 'varchar';
			$this->p_column_definitions['offer.validfrom']['type'] = 'date';
			$this->p_column_definitions['offer.validtil']['type'] = 'date';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
