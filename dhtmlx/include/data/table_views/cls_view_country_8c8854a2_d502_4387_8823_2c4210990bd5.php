<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_country_8c8854a2_d502_4387_8823_2c4210990bd5 extends cls_table_view_base 
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
		$common_country = cls_table_factory::get_common_country();
		$array_country =  $common_country->get_countrys($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_chart_of_account_default($array_country);
		$data_array_id_chart_of_account_default = $this->fill_distinct_id_chart_of_account_default($where);

		$result_array = array();
		foreach($array_country as $country)
			{
			$country_id = $country->get_id();
			$result_array[$country_id]['country.id'] = $country->get_id();
			$result_array[$country_id]['country.alpha2'] = $country->get_alpha2();
			$result_array[$country_id]['country.alpha3'] = $country->get_alpha3();
			$result_array[$country_id]['country.name'] = $country->get_name();
			$result_array[$country_id]['country.nationality'] = $country->get_nationality();
			$result_array[$country_id]['country.countrycode'] = $country->get_countrycode();
			$result_array[$country_id]['country.orderno'] = $country->get_orderno();
			$result_array[$country_id]['country.display'] = $country->get_display();
			$result_array[$country_id]['country.ibanlength'] = $country->get_ibanlength();
			$result_array[$country_id]['country.sepa'] = $country->get_sepa();
			$result_array[$country_id]['country.currency'] = $country->get_currency();
			$link_id = $country->get_id_chart_of_account_default();
			if (empty($link_id))
				{
				$result_array[$country_id]['chart_of_account.name'] = '';
				}
			else
				{
				$result_array[$country_id]['chart_of_account.name'] = $data_array_id_chart_of_account_default[$link_id]->get_name();
				}
			$result_array[$country_id]['country.open_geo_db_id'] = $country->get_open_geo_db_id();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_chart_of_account_default($array_country)
	{
		$ids = array();
		foreach ($array_country as $country)
		{
			$id = $country->get_id_chart_of_account_default();
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

	private function fill_distinct_id_chart_of_account_default($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "chart_of_account.id",chart_of_account.name as "chart_of_account.name" from chart_of_account where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$chart_of_account = cls_table_factory::create_instance('chart_of_account');
			$chart_of_account->fill($row);
			$data[$row['chart_of_account.id']] = $chart_of_account;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['country.id']['type'] = 'uuid';
			$this->p_column_definitions['country.alpha2']['type'] = 'bpchar';
			$this->p_column_definitions['country.alpha3']['type'] = 'bpchar';
			$this->p_column_definitions['country.name']['type'] = 'varchar';
			$this->p_column_definitions['country.nationality']['type'] = 'varchar';
			$this->p_column_definitions['country.countrycode']['type'] = 'varchar';
			$this->p_column_definitions['country.orderno']['type'] = 'int4';
			$this->p_column_definitions['country.display']['type'] = 'bool';
			$this->p_column_definitions['country.ibanlength']['type'] = 'int4';
			$this->p_column_definitions['country.sepa']['type'] = 'bool';
			$this->p_column_definitions['country.currency']['type'] = 'varchar';
			$this->p_column_definitions['chart_of_account.name']['type'] = 'varchar';
			$this->p_column_definitions['country.open_geo_db_id']['type'] = 'int4';
		}
		return $this->p_column_definitions;
	}
}
?>
