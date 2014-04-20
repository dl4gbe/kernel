<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_person_8244d347_c24d_4357_a080_e65945092e5e extends cls_table_view_base 
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
		$common_person = cls_table_factory::get_common_person();
		$array_person =  $common_person->get_persons($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_salutation($array_person);
		$data_array_id_salutation = $this->fill_distinct_id_salutation($where);

		$where = $this->get_distinct_ids_id_country_nationality($array_person);
		$data_array_id_country_nationality = $this->fill_distinct_id_country_nationality($where);

		$where = $this->get_distinct_ids_id_bank_account($array_person);
		$data_array_id_bank_account = $this->fill_distinct_id_bank_account($where);

		$where = $this->get_distinct_ids_id_article_price_group($array_person);
		$data_array_id_article_price_group = $this->fill_distinct_id_article_price_group($where);

		$result_array = array();
		foreach($array_person as $person)
			{
			$person_id = $person->get_id();
			$result_array[$person_id]['person.id'] = $person->get_id();
			$result_array[$person_id]['person.firstname'] = $person->get_firstname();
			$result_array[$person_id]['person.lastname'] = $person->get_lastname();
			$result_array[$person_id]['person.middlename'] = $person->get_middlename();
			$link_id = $person->get_id_salutation();
			if (empty($link_id))
				{
				$result_array[$person_id]['salutation.name'] = '';
				}
			else
				{
				$result_array[$person_id]['salutation.name'] = $data_array_id_salutation[$link_id]->get_name();
				}
			$result_array[$person_id]['person.birthdate'] = $person->get_birthdate();
			$link_id = $person->get_id_country_nationality();
			if (empty($link_id))
				{
				$result_array[$person_id]['country.name'] = '';
				}
			else
				{
				$result_array[$person_id]['country.name'] = $data_array_id_country_nationality[$link_id]->get_name();
				}
			$link_id = $person->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$person_id]['bank_account.bankcode'] = '';
				}
			else
				{
				$result_array[$person_id]['bank_account.bankcode'] = $data_array_id_bank_account[$link_id]->get_bankcode();
				}
			$link_id = $person->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$person_id]['bank_account.accountno'] = '';
				}
			else
				{
				$result_array[$person_id]['bank_account.accountno'] = $data_array_id_bank_account[$link_id]->get_accountno();
				}
			$link_id = $person->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$person_id]['bank_account.iban'] = '';
				}
			else
				{
				$result_array[$person_id]['bank_account.iban'] = $data_array_id_bank_account[$link_id]->get_iban();
				}
			$link_id = $person->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$person_id]['bank_account.bic'] = '';
				}
			else
				{
				$result_array[$person_id]['bank_account.bic'] = $data_array_id_bank_account[$link_id]->get_bic();
				}
			$link_id = $person->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$person_id]['bank_account.holder'] = '';
				}
			else
				{
				$result_array[$person_id]['bank_account.holder'] = $data_array_id_bank_account[$link_id]->get_holder();
				}
			$result_array[$person_id]['person.paymenttype'] = $person->get_paymenttype();
			$result_array[$person_id]['person.cardno'] = $person->get_cardno();
			$link_id = $person->get_id_article_price_group();
			if (empty($link_id))
				{
				$result_array[$person_id]['article_price_group.name'] = '';
				}
			else
				{
				$result_array[$person_id]['article_price_group.name'] = $data_array_id_article_price_group[$link_id]->get_name();
				}
			$result_array[$person_id]['person.personno'] = $person->get_personno();
			$result_array[$person_id]['person.name'] = $person->get_name();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_salutation($array_person)
	{
		$ids = array();
		foreach ($array_person as $person)
		{
			$id = $person->get_id_salutation();
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

	private function fill_distinct_id_salutation($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "salutation.id",salutation.name as "salutation.name" from salutation where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$salutation = cls_table_factory::create_instance('salutation');
			$salutation->fill($row);
			$data[$row['salutation.id']] = $salutation;
		}
		return $data;
	}

	private function get_distinct_ids_id_country_nationality($array_person)
	{
		$ids = array();
		foreach ($array_person as $person)
		{
			$id = $person->get_id_country_nationality();
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

	private function fill_distinct_id_country_nationality($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "country.id",country.name as "country.name" from country where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$country = cls_table_factory::create_instance('country');
			$country->fill($row);
			$data[$row['country.id']] = $country;
		}
		return $data;
	}

	private function get_distinct_ids_id_bank_account($array_person)
	{
		$ids = array();
		foreach ($array_person as $person)
		{
			$id = $person->get_id_bank_account();
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

	private function fill_distinct_id_bank_account($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "bank_account.id",bank_account.bankcode as "bank_account.bankcode",bank_account.accountno as "bank_account.accountno",bank_account.iban as "bank_account.iban",bank_account.bic as "bank_account.bic",bank_account.holder as "bank_account.holder" from bank_account where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$bank_account = cls_table_factory::create_instance('bank_account');
			$bank_account->fill($row);
			$data[$row['bank_account.id']] = $bank_account;
		}
		return $data;
	}

	private function get_distinct_ids_id_article_price_group($array_person)
	{
		$ids = array();
		foreach ($array_person as $person)
		{
			$id = $person->get_id_article_price_group();
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

	private function fill_distinct_id_article_price_group($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "article_price_group.id",article_price_group.name as "article_price_group.name" from article_price_group where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$article_price_group = cls_table_factory::create_instance('article_price_group');
			$article_price_group->fill($row);
			$data[$row['article_price_group.id']] = $article_price_group;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['person.id']['type'] = 'uuid';
			$this->p_column_definitions['person.firstname']['type'] = 'varchar';
			$this->p_column_definitions['person.lastname']['type'] = 'varchar';
			$this->p_column_definitions['person.middlename']['type'] = 'varchar';
			$this->p_column_definitions['salutation.name']['type'] = 'varchar';
			$this->p_column_definitions['person.birthdate']['type'] = 'date';
			$this->p_column_definitions['country.name']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.bankcode']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.accountno']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.iban']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.bic']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.holder']['type'] = 'varchar';
			$this->p_column_definitions['person.paymenttype']['type'] = 'bpchar';
			$this->p_column_definitions['person.cardno']['type'] = 'varchar';
			$this->p_column_definitions['article_price_group.name']['type'] = 'varchar';
			$this->p_column_definitions['person.personno']['type'] = 'varchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
