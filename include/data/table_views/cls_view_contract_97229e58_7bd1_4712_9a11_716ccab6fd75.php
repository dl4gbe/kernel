<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_contract_97229e58_7bd1_4712_9a11_716ccab6fd75 extends cls_table_view_base 
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
		$common_contract = cls_table_factory::get_common_contract();
		$array_contract =  $common_contract->get_contracts($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$where = $this->get_distinct_ids_id_person($array_contract);
		$data_array_id_person = $this->fill_distinct_id_person($where);

		$where = $this->get_distinct_ids_id_person_signer($array_contract);
		$data_array_id_person_signer = $this->fill_distinct_id_person_signer($where);

		$where = $this->get_distinct_ids_id_campaign($array_contract);
		$data_array_id_campaign = $this->fill_distinct_id_campaign($where);

		$where = $this->get_distinct_ids_id_person_promoter($array_contract);
		$data_array_id_person_promoter = $this->fill_distinct_id_person_promoter($where);

		$where = $this->get_distinct_ids_id_bank_account($array_contract);
		$data_array_id_bank_account = $this->fill_distinct_id_bank_account($where);

		$where = $this->get_distinct_ids_id_contract_template($array_contract);
		$data_array_id_contract_template = $this->fill_distinct_id_contract_template($where);

		$result_array = array();
		foreach($array_contract as $contract)
			{
			$contract_id = $contract->get_id();
			$result_array[$contract_id]['contract.id'] = $contract->get_id();
			$link_id = $contract->get_id_person();
			if (empty($link_id))
				{
				$result_array[$contract_id]['person.name'] = '';
				}
			else
				{
				$result_array[$contract_id]['person.name'] = $data_array_id_person[$link_id]->get_name();
				}
			$link_id = $contract->get_id_person_signer();
			if (empty($link_id))
				{
				$result_array[$contract_id]['person.name'] = '';
				}
			else
				{
				$result_array[$contract_id]['person.name'] = $data_array_id_person_signer[$link_id]->get_name();
				}
			$link_id = $contract->get_id_campaign();
			if (empty($link_id))
				{
				$result_array[$contract_id]['campaign.name'] = '';
				}
			else
				{
				$result_array[$contract_id]['campaign.name'] = $data_array_id_campaign[$link_id]->get_name();
				}
			$link_id = $contract->get_id_person_promoter();
			if (empty($link_id))
				{
				$result_array[$contract_id]['person.name'] = '';
				}
			else
				{
				$result_array[$contract_id]['person.name'] = $data_array_id_person_promoter[$link_id]->get_name();
				}
			$link_id = $contract->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$contract_id]['bank_account.bankcode'] = '';
				}
			else
				{
				$result_array[$contract_id]['bank_account.bankcode'] = $data_array_id_bank_account[$link_id]->get_bankcode();
				}
			$link_id = $contract->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$contract_id]['bank_account.accountno'] = '';
				}
			else
				{
				$result_array[$contract_id]['bank_account.accountno'] = $data_array_id_bank_account[$link_id]->get_accountno();
				}
			$link_id = $contract->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$contract_id]['bank_account.iban'] = '';
				}
			else
				{
				$result_array[$contract_id]['bank_account.iban'] = $data_array_id_bank_account[$link_id]->get_iban();
				}
			$link_id = $contract->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$contract_id]['bank_account.bic'] = '';
				}
			else
				{
				$result_array[$contract_id]['bank_account.bic'] = $data_array_id_bank_account[$link_id]->get_bic();
				}
			$link_id = $contract->get_id_bank_account();
			if (empty($link_id))
				{
				$result_array[$contract_id]['bank_account.holder'] = '';
				}
			else
				{
				$result_array[$contract_id]['bank_account.holder'] = $data_array_id_bank_account[$link_id]->get_holder();
				}
			$link_id = $contract->get_id_contract_template();
			if (empty($link_id))
				{
				$result_array[$contract_id]['contract_template.name'] = '';
				}
			else
				{
				$result_array[$contract_id]['contract_template.name'] = $data_array_id_contract_template[$link_id]->get_name();
				}
			$result_array[$contract_id]['contract.contractstart'] = $contract->get_contractstart();
			$result_array[$contract_id]['contract.signeddate'] = $contract->get_signeddate();
			$result_array[$contract_id]['contract.accessdate'] = $contract->get_accessdate();
			$result_array[$contract_id]['contract.contractno'] = $contract->get_contractno();
			}
		return $result_array;
		}

	private function get_distinct_ids_id_person($array_contract)
	{
		$ids = array();
		foreach ($array_contract as $contract)
		{
			$id = $contract->get_id_person();
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

	private function fill_distinct_id_person($where)
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

	private function get_distinct_ids_id_person_signer($array_contract)
	{
		$ids = array();
		foreach ($array_contract as $contract)
		{
			$id = $contract->get_id_person_signer();
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

	private function fill_distinct_id_person_signer($where)
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

	private function get_distinct_ids_id_campaign($array_contract)
	{
		$ids = array();
		foreach ($array_contract as $contract)
		{
			$id = $contract->get_id_campaign();
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

	private function fill_distinct_id_campaign($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "campaign.id",campaign.name as "campaign.name" from campaign where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$campaign = cls_table_factory::create_instance('campaign');
			$campaign->fill($row);
			$data[$row['campaign.id']] = $campaign;
		}
		return $data;
	}

	private function get_distinct_ids_id_person_promoter($array_contract)
	{
		$ids = array();
		foreach ($array_contract as $contract)
		{
			$id = $contract->get_id_person_promoter();
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

	private function fill_distinct_id_person_promoter($where)
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

	private function get_distinct_ids_id_bank_account($array_contract)
	{
		$ids = array();
		foreach ($array_contract as $contract)
		{
			$id = $contract->get_id_bank_account();
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

	private function get_distinct_ids_id_contract_template($array_contract)
	{
		$ids = array();
		foreach ($array_contract as $contract)
		{
			$id = $contract->get_id_contract_template();
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

	private function fill_distinct_id_contract_template($where)
	{
		$data = array();
		if (empty($where)) return $data;
		$sql = 'select id as "contract_template.id",contract_template.name as "contract_template.name" from contract_template where ' . $where;
		$db = $this->get_db_manager();
		$result = $db->query($sql);
		while (($row=$db->fetch_by_assoc($result)) !=null)
		{
			$contract_template = cls_table_factory::create_instance('contract_template');
			$contract_template->fill($row);
			$data[$row['contract_template.id']] = $contract_template;
		}
		return $data;
	}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['contract.id']['type'] = 'uuid';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['campaign.name']['type'] = 'varchar';
			$this->p_column_definitions['person.name']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.bankcode']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.accountno']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.iban']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.bic']['type'] = 'varchar';
			$this->p_column_definitions['bank_account.holder']['type'] = 'varchar';
			$this->p_column_definitions['contract_template.name']['type'] = 'varchar';
			$this->p_column_definitions['contract.contractstart']['type'] = 'date';
			$this->p_column_definitions['contract.signeddate']['type'] = 'date';
			$this->p_column_definitions['contract.accessdate']['type'] = 'date';
			$this->p_column_definitions['contract.contractno']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>
