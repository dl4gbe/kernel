<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_test_result.php');
require_once('include/cls_base_class.php');
class cls_table_test_run extends cls_base_class
{
	private $p_results  = array();

	public function get_results()
	{
		return $this->p_results;
	}

	function __construct()
	{
		$a = func_get_args();
		$i = func_num_args();
		if (method_exists($this,$f="__construct".$i))
		{
			call_user_func_array(array($this,$f),$a);
		}
	}

	public function run_access_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_access_group.php');
		$result = new cls_table_test_result('access_group');
		$test = new cls_test_access_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['access_group'] = $result;
		return $result;
	}

	public function run_account($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_account.php');
		$result = new cls_table_test_result('account');
		$test = new cls_test_account($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['account'] = $result;
		return $result;
	}

	public function run_account_bankaccount($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_account_bankaccount.php');
		$result = new cls_table_test_result('account_bankaccount');
		$test = new cls_test_account_bankaccount($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['account_bankaccount'] = $result;
		return $result;
	}

	public function run_account_chart_of_account($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_account_chart_of_account.php');
		$result = new cls_table_test_result('account_chart_of_account');
		$test = new cls_test_account_chart_of_account($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['account_chart_of_account'] = $result;
		return $result;
	}

	public function run_account_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_account_group.php');
		$result = new cls_table_test_result('account_group');
		$test = new cls_test_account_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['account_group'] = $result;
		return $result;
	}

	public function run_account_match($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_account_match.php');
		$result = new cls_table_test_result('account_match');
		$test = new cls_test_account_match($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['account_match'] = $result;
		return $result;
	}

	public function run_action($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_action.php');
		$result = new cls_table_test_result('action');
		$test = new cls_test_action($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['action'] = $result;
		return $result;
	}

	public function run_address($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_address.php');
		$result = new cls_table_test_result('address');
		$test = new cls_test_address($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['address'] = $result;
		return $result;
	}

	public function run_address_type($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_address_type.php');
		$result = new cls_table_test_result('address_type');
		$test = new cls_test_address_type($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['address_type'] = $result;
		return $result;
	}

	public function run_application($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_application.php');
		$result = new cls_table_test_result('application');
		$test = new cls_test_application($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['application'] = $result;
		return $result;
	}

	public function run_application_controller($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_application_controller.php');
		$result = new cls_table_test_result('application_controller');
		$test = new cls_test_application_controller($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['application_controller'] = $result;
		return $result;
	}

	public function run_application_template($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_application_template.php');
		$result = new cls_table_test_result('application_template');
		$test = new cls_test_application_template($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['application_template'] = $result;
		return $result;
	}

	public function run_article($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_article.php');
		$result = new cls_table_test_result('article');
		$test = new cls_test_article($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['article'] = $result;
		return $result;
	}

	public function run_article_fixed_asset($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_article_fixed_asset.php');
		$result = new cls_table_test_result('article_fixed_asset');
		$test = new cls_test_article_fixed_asset($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['article_fixed_asset'] = $result;
		return $result;
	}

	public function run_article_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_article_group.php');
		$result = new cls_table_test_result('article_group');
		$test = new cls_test_article_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['article_group'] = $result;
		return $result;
	}

	public function run_article_group_account($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_article_group_account.php');
		$result = new cls_table_test_result('article_group_account');
		$test = new cls_test_article_group_account($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['article_group_account'] = $result;
		return $result;
	}

	public function run_article_list($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_article_list.php');
		$result = new cls_table_test_result('article_list');
		$test = new cls_test_article_list($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['article_list'] = $result;
		return $result;
	}

	public function run_article_list_pos($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_article_list_pos.php');
		$result = new cls_table_test_result('article_list_pos');
		$test = new cls_test_article_list_pos($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['article_list_pos'] = $result;
		return $result;
	}

	public function run_article_person_rent($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_article_person_rent.php');
		$result = new cls_table_test_result('article_person_rent');
		$test = new cls_test_article_person_rent($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['article_person_rent'] = $result;
		return $result;
	}

	public function run_article_price($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_article_price.php');
		$result = new cls_table_test_result('article_price');
		$test = new cls_test_article_price($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['article_price'] = $result;
		return $result;
	}

	public function run_article_price_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_article_price_group.php');
		$result = new cls_table_test_result('article_price_group');
		$test = new cls_test_article_price_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['article_price_group'] = $result;
		return $result;
	}

	public function run_article_quantity($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_article_quantity.php');
		$result = new cls_table_test_result('article_quantity');
		$test = new cls_test_article_quantity($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['article_quantity'] = $result;
		return $result;
	}

	public function run_article_rent_price($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_article_rent_price.php');
		$result = new cls_table_test_result('article_rent_price');
		$test = new cls_test_article_rent_price($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['article_rent_price'] = $result;
		return $result;
	}

	public function run_article_supplier($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_article_supplier.php');
		$result = new cls_table_test_result('article_supplier');
		$test = new cls_test_article_supplier($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['article_supplier'] = $result;
		return $result;
	}

	public function run_bank($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_bank.php');
		$result = new cls_table_test_result('bank');
		$test = new cls_test_bank($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['bank'] = $result;
		return $result;
	}

	public function run_bank_account($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_bank_account.php');
		$result = new cls_table_test_result('bank_account');
		$test = new cls_test_bank_account($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['bank_account'] = $result;
		return $result;
	}

	public function run_bank_account_mandat($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_bank_account_mandat.php');
		$result = new cls_table_test_result('bank_account_mandat');
		$test = new cls_test_bank_account_mandat($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['bank_account_mandat'] = $result;
		return $result;
	}

	public function run_base_control_type($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_base_control_type.php');
		$result = new cls_table_test_result('base_control_type');
		$test = new cls_test_base_control_type($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['base_control_type'] = $result;
		return $result;
	}

	public function run_campaign($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_campaign.php');
		$result = new cls_table_test_result('campaign');
		$test = new cls_test_campaign($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['campaign'] = $result;
		return $result;
	}

	public function run_campaign_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_campaign_group.php');
		$result = new cls_table_test_result('campaign_group');
		$test = new cls_test_campaign_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['campaign_group'] = $result;
		return $result;
	}

	public function run_certificate_type($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_certificate_type.php');
		$result = new cls_table_test_result('certificate_type');
		$test = new cls_test_certificate_type($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['certificate_type'] = $result;
		return $result;
	}

	public function run_chart_of_account($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_chart_of_account.php');
		$result = new cls_table_test_result('chart_of_account');
		$test = new cls_test_chart_of_account($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['chart_of_account'] = $result;
		return $result;
	}

	public function run_column_security($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_column_security.php');
		$result = new cls_table_test_result('column_security');
		$test = new cls_test_column_security($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['column_security'] = $result;
		return $result;
	}

	public function run_communication($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_communication.php');
		$result = new cls_table_test_result('communication');
		$test = new cls_test_communication($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['communication'] = $result;
		return $result;
	}

	public function run_communication_event($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_communication_event.php');
		$result = new cls_table_test_result('communication_event');
		$test = new cls_test_communication_event($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['communication_event'] = $result;
		return $result;
	}

	public function run_communication_reason($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_communication_reason.php');
		$result = new cls_table_test_result('communication_reason');
		$test = new cls_test_communication_reason($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['communication_reason'] = $result;
		return $result;
	}

	public function run_communication_reason_type($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_communication_reason_type.php');
		$result = new cls_table_test_result('communication_reason_type');
		$test = new cls_test_communication_reason_type($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['communication_reason_type'] = $result;
		return $result;
	}

	public function run_communication_reason_type_person_state($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_communication_reason_type_person_state.php');
		$result = new cls_table_test_result('communication_reason_type_person_state');
		$test = new cls_test_communication_reason_type_person_state($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['communication_reason_type_person_state'] = $result;
		return $result;
	}

	public function run_communication_type($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_communication_type.php');
		$result = new cls_table_test_result('communication_type');
		$test = new cls_test_communication_type($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['communication_type'] = $result;
		return $result;
	}

	public function run_computer_configuration($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_computer_configuration.php');
		$result = new cls_table_test_result('computer_configuration');
		$test = new cls_test_computer_configuration($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['computer_configuration'] = $result;
		return $result;
	}

	public function run_config_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_config_group.php');
		$result = new cls_table_test_result('config_group');
		$test = new cls_test_config_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['config_group'] = $result;
		return $result;
	}

	public function run_config_group_item($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_config_group_item.php');
		$result = new cls_table_test_result('config_group_item');
		$test = new cls_test_config_group_item($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['config_group_item'] = $result;
		return $result;
	}

	public function run_config_item_access_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_config_item_access_group.php');
		$result = new cls_table_test_result('config_item_access_group');
		$test = new cls_test_config_item_access_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['config_item_access_group'] = $result;
		return $result;
	}

	public function run_configuration($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_configuration.php');
		$result = new cls_table_test_result('configuration');
		$test = new cls_test_configuration($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['configuration'] = $result;
		return $result;
	}

	public function run_contract($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_contract.php');
		$result = new cls_table_test_result('contract');
		$test = new cls_test_contract($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['contract'] = $result;
		return $result;
	}

	public function run_contract_plan($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_contract_plan.php');
		$result = new cls_table_test_result('contract_plan');
		$test = new cls_test_contract_plan($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['contract_plan'] = $result;
		return $result;
	}

	public function run_contract_pos($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_contract_pos.php');
		$result = new cls_table_test_result('contract_pos');
		$test = new cls_test_contract_pos($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['contract_pos'] = $result;
		return $result;
	}

	public function run_contract_template($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_contract_template.php');
		$result = new cls_table_test_result('contract_template');
		$test = new cls_test_contract_template($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['contract_template'] = $result;
		return $result;
	}

	public function run_contract_template_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_contract_template_group.php');
		$result = new cls_table_test_result('contract_template_group');
		$test = new cls_test_contract_template_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['contract_template_group'] = $result;
		return $result;
	}

	public function run_contract_template_item($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_contract_template_item.php');
		$result = new cls_table_test_result('contract_template_item');
		$test = new cls_test_contract_template_item($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['contract_template_item'] = $result;
		return $result;
	}

	public function run_contract_template_onetimepayment($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_contract_template_onetimepayment.php');
		$result = new cls_table_test_result('contract_template_onetimepayment');
		$test = new cls_test_contract_template_onetimepayment($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['contract_template_onetimepayment'] = $result;
		return $result;
	}

	public function run_contract_template_pos($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_contract_template_pos.php');
		$result = new cls_table_test_result('contract_template_pos');
		$test = new cls_test_contract_template_pos($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['contract_template_pos'] = $result;
		return $result;
	}

	public function run_control($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_control.php');
		$result = new cls_table_test_result('control');
		$test = new cls_test_control($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['control'] = $result;
		return $result;
	}

	public function run_control_control_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_control_control_group.php');
		$result = new cls_table_test_result('control_control_group');
		$test = new cls_test_control_control_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['control_control_group'] = $result;
		return $result;
	}

	public function run_control_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_control_group.php');
		$result = new cls_table_test_result('control_group');
		$test = new cls_test_control_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['control_group'] = $result;
		return $result;
	}

	public function run_country($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_country.php');
		$result = new cls_table_test_result('country');
		$test = new cls_test_country($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['country'] = $result;
		return $result;
	}

	public function run_data_change($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_data_change.php');
		$result = new cls_table_test_result('data_change');
		$test = new cls_test_data_change($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['data_change'] = $result;
		return $result;
	}

	public function run_data_help($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_data_help.php');
		$result = new cls_table_test_result('data_help');
		$test = new cls_test_data_help($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['data_help'] = $result;
		return $result;
	}

	public function run_data_location($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_data_location.php');
		$result = new cls_table_test_result('data_location');
		$test = new cls_test_data_location($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['data_location'] = $result;
		return $result;
	}

	public function run_data_posting($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_data_posting.php');
		$result = new cls_table_test_result('data_posting');
		$test = new cls_test_data_posting($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['data_posting'] = $result;
		return $result;
	}

	public function run_data_property($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_data_property.php');
		$result = new cls_table_test_result('data_property');
		$test = new cls_test_data_property($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['data_property'] = $result;
		return $result;
	}

	public function run_data_property_type($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_data_property_type.php');
		$result = new cls_table_test_result('data_property_type');
		$test = new cls_test_data_property_type($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['data_property_type'] = $result;
		return $result;
	}

	public function run_data_property_type_val($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_data_property_type_val.php');
		$result = new cls_table_test_result('data_property_type_val');
		$test = new cls_test_data_property_type_val($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['data_property_type_val'] = $result;
		return $result;
	}

	public function run_data_relation($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_data_relation.php');
		$result = new cls_table_test_result('data_relation');
		$test = new cls_test_data_relation($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['data_relation'] = $result;
		return $result;
	}

	public function run_data_relation_type($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_data_relation_type.php');
		$result = new cls_table_test_result('data_relation_type');
		$test = new cls_test_data_relation_type($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['data_relation_type'] = $result;
		return $result;
	}

	public function run_data_relation_types_val($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_data_relation_types_val.php');
		$result = new cls_table_test_result('data_relation_types_val');
		$test = new cls_test_data_relation_types_val($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['data_relation_types_val'] = $result;
		return $result;
	}

	public function run_data_translation($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_data_translation.php');
		$result = new cls_table_test_result('data_translation');
		$test = new cls_test_data_translation($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['data_translation'] = $result;
		return $result;
	}

	public function run_data_view($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_data_view.php');
		$result = new cls_table_test_result('data_view');
		$test = new cls_test_data_view($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['data_view'] = $result;
		return $result;
	}

	public function run_data_view_field($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_data_view_field.php');
		$result = new cls_table_test_result('data_view_field');
		$test = new cls_test_data_view_field($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['data_view_field'] = $result;
		return $result;
	}

	public function run_data_view_restriction($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_data_view_restriction.php');
		$result = new cls_table_test_result('data_view_restriction');
		$test = new cls_test_data_view_restriction($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['data_view_restriction'] = $result;
		return $result;
	}

	public function run_data_view_table($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_data_view_table.php');
		$result = new cls_table_test_result('data_view_table');
		$test = new cls_test_data_view_table($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['data_view_table'] = $result;
		return $result;
	}

	public function run_desease($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_desease.php');
		$result = new cls_table_test_result('desease');
		$test = new cls_test_desease($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['desease'] = $result;
		return $result;
	}

	public function run_device($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_device.php');
		$result = new cls_table_test_result('device');
		$test = new cls_test_device($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['device'] = $result;
		return $result;
	}

	public function run_device_offer($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_device_offer.php');
		$result = new cls_table_test_result('device_offer');
		$test = new cls_test_device_offer($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['device_offer'] = $result;
		return $result;
	}

	public function run_dms($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_dms.php');
		$result = new cls_table_test_result('dms');
		$test = new cls_test_dms($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['dms'] = $result;
		return $result;
	}

	public function run_dms_document_type($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_dms_document_type.php');
		$result = new cls_table_test_result('dms_document_type');
		$test = new cls_test_dms_document_type($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['dms_document_type'] = $result;
		return $result;
	}

	public function run_dms_type($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_dms_type.php');
		$result = new cls_table_test_result('dms_type');
		$test = new cls_test_dms_type($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['dms_type'] = $result;
		return $result;
	}

	public function run_drupal_actions($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_actions.php');
		$result = new cls_table_test_result('drupal_actions');
		$test = new cls_test_drupal_actions($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_actions'] = $result;
		return $result;
	}

	public function run_drupal_authmap($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_authmap.php');
		$result = new cls_table_test_result('drupal_authmap');
		$test = new cls_test_drupal_authmap($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_authmap'] = $result;
		return $result;
	}

	public function run_drupal_batch($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_batch.php');
		$result = new cls_table_test_result('drupal_batch');
		$test = new cls_test_drupal_batch($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_batch'] = $result;
		return $result;
	}

	public function run_drupal_block($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_block.php');
		$result = new cls_table_test_result('drupal_block');
		$test = new cls_test_drupal_block($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_block'] = $result;
		return $result;
	}

	public function run_drupal_block_custom($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_block_custom.php');
		$result = new cls_table_test_result('drupal_block_custom');
		$test = new cls_test_drupal_block_custom($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_block_custom'] = $result;
		return $result;
	}

	public function run_drupal_block_node_type($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_block_node_type.php');
		$result = new cls_table_test_result('drupal_block_node_type');
		$test = new cls_test_drupal_block_node_type($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_block_node_type'] = $result;
		return $result;
	}

	public function run_drupal_block_role($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_block_role.php');
		$result = new cls_table_test_result('drupal_block_role');
		$test = new cls_test_drupal_block_role($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_block_role'] = $result;
		return $result;
	}

	public function run_drupal_blocked_ips($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_blocked_ips.php');
		$result = new cls_table_test_result('drupal_blocked_ips');
		$test = new cls_test_drupal_blocked_ips($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_blocked_ips'] = $result;
		return $result;
	}

	public function run_drupal_cache($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_cache.php');
		$result = new cls_table_test_result('drupal_cache');
		$test = new cls_test_drupal_cache($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_cache'] = $result;
		return $result;
	}

	public function run_drupal_cache_block($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_cache_block.php');
		$result = new cls_table_test_result('drupal_cache_block');
		$test = new cls_test_drupal_cache_block($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_cache_block'] = $result;
		return $result;
	}

	public function run_drupal_cache_bootstrap($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_cache_bootstrap.php');
		$result = new cls_table_test_result('drupal_cache_bootstrap');
		$test = new cls_test_drupal_cache_bootstrap($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_cache_bootstrap'] = $result;
		return $result;
	}

	public function run_drupal_cache_field($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_cache_field.php');
		$result = new cls_table_test_result('drupal_cache_field');
		$test = new cls_test_drupal_cache_field($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_cache_field'] = $result;
		return $result;
	}

	public function run_drupal_cache_filter($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_cache_filter.php');
		$result = new cls_table_test_result('drupal_cache_filter');
		$test = new cls_test_drupal_cache_filter($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_cache_filter'] = $result;
		return $result;
	}

	public function run_drupal_cache_form($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_cache_form.php');
		$result = new cls_table_test_result('drupal_cache_form');
		$test = new cls_test_drupal_cache_form($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_cache_form'] = $result;
		return $result;
	}

	public function run_drupal_cache_image($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_cache_image.php');
		$result = new cls_table_test_result('drupal_cache_image');
		$test = new cls_test_drupal_cache_image($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_cache_image'] = $result;
		return $result;
	}

	public function run_drupal_cache_menu($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_cache_menu.php');
		$result = new cls_table_test_result('drupal_cache_menu');
		$test = new cls_test_drupal_cache_menu($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_cache_menu'] = $result;
		return $result;
	}

	public function run_drupal_cache_page($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_cache_page.php');
		$result = new cls_table_test_result('drupal_cache_page');
		$test = new cls_test_drupal_cache_page($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_cache_page'] = $result;
		return $result;
	}

	public function run_drupal_cache_path($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_cache_path.php');
		$result = new cls_table_test_result('drupal_cache_path');
		$test = new cls_test_drupal_cache_path($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_cache_path'] = $result;
		return $result;
	}

	public function run_drupal_cache_update($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_cache_update.php');
		$result = new cls_table_test_result('drupal_cache_update');
		$test = new cls_test_drupal_cache_update($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_cache_update'] = $result;
		return $result;
	}

	public function run_drupal_comment($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_comment.php');
		$result = new cls_table_test_result('drupal_comment');
		$test = new cls_test_drupal_comment($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_comment'] = $result;
		return $result;
	}

	public function run_drupal_date_format_locale($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_date_format_locale.php');
		$result = new cls_table_test_result('drupal_date_format_locale');
		$test = new cls_test_drupal_date_format_locale($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_date_format_locale'] = $result;
		return $result;
	}

	public function run_drupal_date_format_type($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_date_format_type.php');
		$result = new cls_table_test_result('drupal_date_format_type');
		$test = new cls_test_drupal_date_format_type($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_date_format_type'] = $result;
		return $result;
	}

	public function run_drupal_date_formats($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_date_formats.php');
		$result = new cls_table_test_result('drupal_date_formats');
		$test = new cls_test_drupal_date_formats($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_date_formats'] = $result;
		return $result;
	}

	public function run_drupal_field_config($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_field_config.php');
		$result = new cls_table_test_result('drupal_field_config');
		$test = new cls_test_drupal_field_config($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_field_config'] = $result;
		return $result;
	}

	public function run_drupal_field_config_instance($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_field_config_instance.php');
		$result = new cls_table_test_result('drupal_field_config_instance');
		$test = new cls_test_drupal_field_config_instance($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_field_config_instance'] = $result;
		return $result;
	}

	public function run_drupal_field_data_body($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_field_data_body.php');
		$result = new cls_table_test_result('drupal_field_data_body');
		$test = new cls_test_drupal_field_data_body($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_field_data_body'] = $result;
		return $result;
	}

	public function run_drupal_field_data_comment_body($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_field_data_comment_body.php');
		$result = new cls_table_test_result('drupal_field_data_comment_body');
		$test = new cls_test_drupal_field_data_comment_body($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_field_data_comment_body'] = $result;
		return $result;
	}

	public function run_drupal_field_data_field_first_name($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_field_data_field_first_name.php');
		$result = new cls_table_test_result('drupal_field_data_field_first_name');
		$test = new cls_test_drupal_field_data_field_first_name($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_field_data_field_first_name'] = $result;
		return $result;
	}

	public function run_drupal_field_data_field_image($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_field_data_field_image.php');
		$result = new cls_table_test_result('drupal_field_data_field_image');
		$test = new cls_test_drupal_field_data_field_image($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_field_data_field_image'] = $result;
		return $result;
	}

	public function run_drupal_field_data_field_tags($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_field_data_field_tags.php');
		$result = new cls_table_test_result('drupal_field_data_field_tags');
		$test = new cls_test_drupal_field_data_field_tags($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_field_data_field_tags'] = $result;
		return $result;
	}

	public function run_drupal_field_revision_body($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_field_revision_body.php');
		$result = new cls_table_test_result('drupal_field_revision_body');
		$test = new cls_test_drupal_field_revision_body($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_field_revision_body'] = $result;
		return $result;
	}

	public function run_drupal_field_revision_comment_body($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_field_revision_comment_body.php');
		$result = new cls_table_test_result('drupal_field_revision_comment_body');
		$test = new cls_test_drupal_field_revision_comment_body($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_field_revision_comment_body'] = $result;
		return $result;
	}

	public function run_drupal_field_revision_field_first_name($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_field_revision_field_first_name.php');
		$result = new cls_table_test_result('drupal_field_revision_field_first_name');
		$test = new cls_test_drupal_field_revision_field_first_name($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_field_revision_field_first_name'] = $result;
		return $result;
	}

	public function run_drupal_field_revision_field_image($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_field_revision_field_image.php');
		$result = new cls_table_test_result('drupal_field_revision_field_image');
		$test = new cls_test_drupal_field_revision_field_image($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_field_revision_field_image'] = $result;
		return $result;
	}

	public function run_drupal_field_revision_field_tags($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_field_revision_field_tags.php');
		$result = new cls_table_test_result('drupal_field_revision_field_tags');
		$test = new cls_test_drupal_field_revision_field_tags($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_field_revision_field_tags'] = $result;
		return $result;
	}

	public function run_drupal_file_managed($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_file_managed.php');
		$result = new cls_table_test_result('drupal_file_managed');
		$test = new cls_test_drupal_file_managed($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_file_managed'] = $result;
		return $result;
	}

	public function run_drupal_file_usage($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_file_usage.php');
		$result = new cls_table_test_result('drupal_file_usage');
		$test = new cls_test_drupal_file_usage($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_file_usage'] = $result;
		return $result;
	}

	public function run_drupal_filter($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_filter.php');
		$result = new cls_table_test_result('drupal_filter');
		$test = new cls_test_drupal_filter($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_filter'] = $result;
		return $result;
	}

	public function run_drupal_filter_format($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_filter_format.php');
		$result = new cls_table_test_result('drupal_filter_format');
		$test = new cls_test_drupal_filter_format($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_filter_format'] = $result;
		return $result;
	}

	public function run_drupal_flood($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_flood.php');
		$result = new cls_table_test_result('drupal_flood');
		$test = new cls_test_drupal_flood($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_flood'] = $result;
		return $result;
	}

	public function run_drupal_history($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_history.php');
		$result = new cls_table_test_result('drupal_history');
		$test = new cls_test_drupal_history($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_history'] = $result;
		return $result;
	}

	public function run_drupal_image_effects($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_image_effects.php');
		$result = new cls_table_test_result('drupal_image_effects');
		$test = new cls_test_drupal_image_effects($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_image_effects'] = $result;
		return $result;
	}

	public function run_drupal_image_styles($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_image_styles.php');
		$result = new cls_table_test_result('drupal_image_styles');
		$test = new cls_test_drupal_image_styles($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_image_styles'] = $result;
		return $result;
	}

	public function run_drupal_languages($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_languages.php');
		$result = new cls_table_test_result('drupal_languages');
		$test = new cls_test_drupal_languages($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_languages'] = $result;
		return $result;
	}

	public function run_drupal_locales_source($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_locales_source.php');
		$result = new cls_table_test_result('drupal_locales_source');
		$test = new cls_test_drupal_locales_source($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_locales_source'] = $result;
		return $result;
	}

	public function run_drupal_locales_target($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_locales_target.php');
		$result = new cls_table_test_result('drupal_locales_target');
		$test = new cls_test_drupal_locales_target($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_locales_target'] = $result;
		return $result;
	}

	public function run_drupal_menu_custom($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_menu_custom.php');
		$result = new cls_table_test_result('drupal_menu_custom');
		$test = new cls_test_drupal_menu_custom($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_menu_custom'] = $result;
		return $result;
	}

	public function run_drupal_menu_links($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_menu_links.php');
		$result = new cls_table_test_result('drupal_menu_links');
		$test = new cls_test_drupal_menu_links($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_menu_links'] = $result;
		return $result;
	}

	public function run_drupal_menu_router($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_menu_router.php');
		$result = new cls_table_test_result('drupal_menu_router');
		$test = new cls_test_drupal_menu_router($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_menu_router'] = $result;
		return $result;
	}

	public function run_drupal_node($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_node.php');
		$result = new cls_table_test_result('drupal_node');
		$test = new cls_test_drupal_node($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_node'] = $result;
		return $result;
	}

	public function run_drupal_node_access($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_node_access.php');
		$result = new cls_table_test_result('drupal_node_access');
		$test = new cls_test_drupal_node_access($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_node_access'] = $result;
		return $result;
	}

	public function run_drupal_node_comment_statistics($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_node_comment_statistics.php');
		$result = new cls_table_test_result('drupal_node_comment_statistics');
		$test = new cls_test_drupal_node_comment_statistics($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_node_comment_statistics'] = $result;
		return $result;
	}

	public function run_drupal_node_revision($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_node_revision.php');
		$result = new cls_table_test_result('drupal_node_revision');
		$test = new cls_test_drupal_node_revision($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_node_revision'] = $result;
		return $result;
	}

	public function run_drupal_node_type($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_node_type.php');
		$result = new cls_table_test_result('drupal_node_type');
		$test = new cls_test_drupal_node_type($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_node_type'] = $result;
		return $result;
	}

	public function run_drupal_person($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_person.php');
		$result = new cls_table_test_result('drupal_person');
		$test = new cls_test_drupal_person($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_person'] = $result;
		return $result;
	}

	public function run_drupal_profile($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_profile.php');
		$result = new cls_table_test_result('drupal_profile');
		$test = new cls_test_drupal_profile($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_profile'] = $result;
		return $result;
	}

	public function run_drupal_profile_type($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_profile_type.php');
		$result = new cls_table_test_result('drupal_profile_type');
		$test = new cls_test_drupal_profile_type($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_profile_type'] = $result;
		return $result;
	}

	public function run_drupal_queue($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_queue.php');
		$result = new cls_table_test_result('drupal_queue');
		$test = new cls_test_drupal_queue($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_queue'] = $result;
		return $result;
	}

	public function run_drupal_rdf_mapping($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_rdf_mapping.php');
		$result = new cls_table_test_result('drupal_rdf_mapping');
		$test = new cls_test_drupal_rdf_mapping($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_rdf_mapping'] = $result;
		return $result;
	}

	public function run_drupal_registry($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_registry.php');
		$result = new cls_table_test_result('drupal_registry');
		$test = new cls_test_drupal_registry($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_registry'] = $result;
		return $result;
	}

	public function run_drupal_registry_file($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_registry_file.php');
		$result = new cls_table_test_result('drupal_registry_file');
		$test = new cls_test_drupal_registry_file($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_registry_file'] = $result;
		return $result;
	}

	public function run_drupal_role($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_role.php');
		$result = new cls_table_test_result('drupal_role');
		$test = new cls_test_drupal_role($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_role'] = $result;
		return $result;
	}

	public function run_drupal_role_permission($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_role_permission.php');
		$result = new cls_table_test_result('drupal_role_permission');
		$test = new cls_test_drupal_role_permission($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_role_permission'] = $result;
		return $result;
	}

	public function run_drupal_search_dataset($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_search_dataset.php');
		$result = new cls_table_test_result('drupal_search_dataset');
		$test = new cls_test_drupal_search_dataset($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_search_dataset'] = $result;
		return $result;
	}

	public function run_drupal_search_index($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_search_index.php');
		$result = new cls_table_test_result('drupal_search_index');
		$test = new cls_test_drupal_search_index($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_search_index'] = $result;
		return $result;
	}

	public function run_drupal_search_node_links($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_search_node_links.php');
		$result = new cls_table_test_result('drupal_search_node_links');
		$test = new cls_test_drupal_search_node_links($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_search_node_links'] = $result;
		return $result;
	}

	public function run_drupal_search_total($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_search_total.php');
		$result = new cls_table_test_result('drupal_search_total');
		$test = new cls_test_drupal_search_total($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_search_total'] = $result;
		return $result;
	}

	public function run_drupal_semaphore($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_semaphore.php');
		$result = new cls_table_test_result('drupal_semaphore');
		$test = new cls_test_drupal_semaphore($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_semaphore'] = $result;
		return $result;
	}

	public function run_drupal_sequences($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_sequences.php');
		$result = new cls_table_test_result('drupal_sequences');
		$test = new cls_test_drupal_sequences($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_sequences'] = $result;
		return $result;
	}

	public function run_drupal_sessions($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_sessions.php');
		$result = new cls_table_test_result('drupal_sessions');
		$test = new cls_test_drupal_sessions($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_sessions'] = $result;
		return $result;
	}

	public function run_drupal_shortcut_set($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_shortcut_set.php');
		$result = new cls_table_test_result('drupal_shortcut_set');
		$test = new cls_test_drupal_shortcut_set($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_shortcut_set'] = $result;
		return $result;
	}

	public function run_drupal_shortcut_set_users($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_shortcut_set_users.php');
		$result = new cls_table_test_result('drupal_shortcut_set_users');
		$test = new cls_test_drupal_shortcut_set_users($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_shortcut_set_users'] = $result;
		return $result;
	}

	public function run_drupal_system($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_system.php');
		$result = new cls_table_test_result('drupal_system');
		$test = new cls_test_drupal_system($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_system'] = $result;
		return $result;
	}

	public function run_drupal_taxonomy_index($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_taxonomy_index.php');
		$result = new cls_table_test_result('drupal_taxonomy_index');
		$test = new cls_test_drupal_taxonomy_index($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_taxonomy_index'] = $result;
		return $result;
	}

	public function run_drupal_taxonomy_term_data($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_taxonomy_term_data.php');
		$result = new cls_table_test_result('drupal_taxonomy_term_data');
		$test = new cls_test_drupal_taxonomy_term_data($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_taxonomy_term_data'] = $result;
		return $result;
	}

	public function run_drupal_taxonomy_term_hierarchy($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_taxonomy_term_hierarchy.php');
		$result = new cls_table_test_result('drupal_taxonomy_term_hierarchy');
		$test = new cls_test_drupal_taxonomy_term_hierarchy($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_taxonomy_term_hierarchy'] = $result;
		return $result;
	}

	public function run_drupal_taxonomy_vocabulary($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_taxonomy_vocabulary.php');
		$result = new cls_table_test_result('drupal_taxonomy_vocabulary');
		$test = new cls_test_drupal_taxonomy_vocabulary($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_taxonomy_vocabulary'] = $result;
		return $result;
	}

	public function run_drupal_url_alias($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_url_alias.php');
		$result = new cls_table_test_result('drupal_url_alias');
		$test = new cls_test_drupal_url_alias($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_url_alias'] = $result;
		return $result;
	}

	public function run_drupal_users($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_users.php');
		$result = new cls_table_test_result('drupal_users');
		$test = new cls_test_drupal_users($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_users'] = $result;
		return $result;
	}

	public function run_drupal_users_roles($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_users_roles.php');
		$result = new cls_table_test_result('drupal_users_roles');
		$test = new cls_test_drupal_users_roles($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_users_roles'] = $result;
		return $result;
	}

	public function run_drupal_variable($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_variable.php');
		$result = new cls_table_test_result('drupal_variable');
		$test = new cls_test_drupal_variable($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_variable'] = $result;
		return $result;
	}

	public function run_drupal_watchdog($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_drupal_watchdog.php');
		$result = new cls_table_test_result('drupal_watchdog');
		$test = new cls_test_drupal_watchdog($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['drupal_watchdog'] = $result;
		return $result;
	}

	public function run_event_type($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_event_type.php');
		$result = new cls_table_test_result('event_type');
		$test = new cls_test_event_type($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['event_type'] = $result;
		return $result;
	}

	public function run_fixed_asset($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_fixed_asset.php');
		$result = new cls_table_test_result('fixed_asset');
		$test = new cls_test_fixed_asset($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['fixed_asset'] = $result;
		return $result;
	}

	public function run_fixed_asset_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_fixed_asset_group.php');
		$result = new cls_table_test_result('fixed_asset_group');
		$test = new cls_test_fixed_asset_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['fixed_asset_group'] = $result;
		return $result;
	}

	public function run_fixed_asset_group_account($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_fixed_asset_group_account.php');
		$result = new cls_table_test_result('fixed_asset_group_account');
		$test = new cls_test_fixed_asset_group_account($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['fixed_asset_group_account'] = $result;
		return $result;
	}

	public function run_geodb_changelog($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_geodb_changelog.php');
		$result = new cls_table_test_result('geodb_changelog');
		$test = new cls_test_geodb_changelog($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['geodb_changelog'] = $result;
		return $result;
	}

	public function run_geodb_coordinates($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_geodb_coordinates.php');
		$result = new cls_table_test_result('geodb_coordinates');
		$test = new cls_test_geodb_coordinates($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['geodb_coordinates'] = $result;
		return $result;
	}

	public function run_geodb_floatdata($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_geodb_floatdata.php');
		$result = new cls_table_test_result('geodb_floatdata');
		$test = new cls_test_geodb_floatdata($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['geodb_floatdata'] = $result;
		return $result;
	}

	public function run_geodb_intdata($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_geodb_intdata.php');
		$result = new cls_table_test_result('geodb_intdata');
		$test = new cls_test_geodb_intdata($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['geodb_intdata'] = $result;
		return $result;
	}

	public function run_geodb_locations($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_geodb_locations.php');
		$result = new cls_table_test_result('geodb_locations');
		$test = new cls_test_geodb_locations($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['geodb_locations'] = $result;
		return $result;
	}

	public function run_geodb_textdata($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_geodb_textdata.php');
		$result = new cls_table_test_result('geodb_textdata');
		$test = new cls_test_geodb_textdata($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['geodb_textdata'] = $result;
		return $result;
	}

	public function run_geodb_type_names($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_geodb_type_names.php');
		$result = new cls_table_test_result('geodb_type_names');
		$test = new cls_test_geodb_type_names($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['geodb_type_names'] = $result;
		return $result;
	}

	public function run_insurance($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_insurance.php');
		$result = new cls_table_test_result('insurance');
		$test = new cls_test_insurance($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['insurance'] = $result;
		return $result;
	}

	public function run_insurance_district($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_insurance_district.php');
		$result = new cls_table_test_result('insurance_district');
		$test = new cls_test_insurance_district($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['insurance_district'] = $result;
		return $result;
	}

	public function run_insurance_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_insurance_group.php');
		$result = new cls_table_test_result('insurance_group');
		$test = new cls_test_insurance_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['insurance_group'] = $result;
		return $result;
	}

	public function run_insurance_price($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_insurance_price.php');
		$result = new cls_table_test_result('insurance_price');
		$test = new cls_test_insurance_price($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['insurance_price'] = $result;
		return $result;
	}

	public function run_invoice($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_invoice.php');
		$result = new cls_table_test_result('invoice');
		$test = new cls_test_invoice($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['invoice'] = $result;
		return $result;
	}

	public function run_invoice_item($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_invoice_item.php');
		$result = new cls_table_test_result('invoice_item');
		$test = new cls_test_invoice_item($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['invoice_item'] = $result;
		return $result;
	}

	public function run_location($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_location.php');
		$result = new cls_table_test_result('location');
		$test = new cls_test_location($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['location'] = $result;
		return $result;
	}

	public function run_location_independent_table($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_location_independent_table.php');
		$result = new cls_table_test_result('location_independent_table');
		$test = new cls_test_location_independent_table($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['location_independent_table'] = $result;
		return $result;
	}

	public function run_logon($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_logon.php');
		$result = new cls_table_test_result('logon');
		$test = new cls_test_logon($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['logon'] = $result;
		return $result;
	}

	public function run_main_page($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_main_page.php');
		$result = new cls_table_test_result('main_page');
		$test = new cls_test_main_page($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['main_page'] = $result;
		return $result;
	}

	public function run_main_page_template($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_main_page_template.php');
		$result = new cls_table_test_result('main_page_template');
		$test = new cls_test_main_page_template($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['main_page_template'] = $result;
		return $result;
	}

	public function run_menu($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_menu.php');
		$result = new cls_table_test_result('menu');
		$test = new cls_test_menu($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['menu'] = $result;
		return $result;
	}

	public function run_menu_access_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_menu_access_group.php');
		$result = new cls_table_test_result('menu_access_group');
		$test = new cls_test_menu_access_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['menu_access_group'] = $result;
		return $result;
	}

	public function run_menu_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_menu_group.php');
		$result = new cls_table_test_result('menu_group');
		$test = new cls_test_menu_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['menu_group'] = $result;
		return $result;
	}

	public function run_menu_item($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_menu_item.php');
		$result = new cls_table_test_result('menu_item');
		$test = new cls_test_menu_item($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['menu_item'] = $result;
		return $result;
	}

	public function run_menu_template($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_menu_template.php');
		$result = new cls_table_test_result('menu_template');
		$test = new cls_test_menu_template($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['menu_template'] = $result;
		return $result;
	}

	public function run_offer($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_offer.php');
		$result = new cls_table_test_result('offer');
		$test = new cls_test_offer($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['offer'] = $result;
		return $result;
	}

	public function run_offer_event($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_offer_event.php');
		$result = new cls_table_test_result('offer_event');
		$test = new cls_test_offer_event($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['offer_event'] = $result;
		return $result;
	}

	public function run_offer_time($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_offer_time.php');
		$result = new cls_table_test_result('offer_time');
		$test = new cls_test_offer_time($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['offer_time'] = $result;
		return $result;
	}

	public function run_offer_type($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_offer_type.php');
		$result = new cls_table_test_result('offer_type');
		$test = new cls_test_offer_type($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['offer_type'] = $result;
		return $result;
	}

	public function run_onetime_payment($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_onetime_payment.php');
		$result = new cls_table_test_result('onetime_payment');
		$test = new cls_test_onetime_payment($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['onetime_payment'] = $result;
		return $result;
	}

	public function run_person($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_person.php');
		$result = new cls_table_test_result('person');
		$test = new cls_test_person($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['person'] = $result;
		return $result;
	}

	public function run_person_access_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_person_access_group.php');
		$result = new cls_table_test_result('person_access_group');
		$test = new cls_test_person_access_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['person_access_group'] = $result;
		return $result;
	}

	public function run_person_account($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_person_account.php');
		$result = new cls_table_test_result('person_account');
		$test = new cls_test_person_account($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['person_account'] = $result;
		return $result;
	}

	public function run_person_article_renting($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_person_article_renting.php');
		$result = new cls_table_test_result('person_article_renting');
		$test = new cls_test_person_article_renting($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['person_article_renting'] = $result;
		return $result;
	}

	public function run_person_desease($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_person_desease.php');
		$result = new cls_table_test_result('person_desease');
		$test = new cls_test_person_desease($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['person_desease'] = $result;
		return $result;
	}

	public function run_person_search_values($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_person_search_values.php');
		$result = new cls_table_test_result('person_search_values');
		$test = new cls_test_person_search_values($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['person_search_values'] = $result;
		return $result;
	}

	public function run_person_state($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_person_state.php');
		$result = new cls_table_test_result('person_state');
		$test = new cls_test_person_state($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['person_state'] = $result;
		return $result;
	}

	public function run_person_state_type($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_person_state_type.php');
		$result = new cls_table_test_result('person_state_type');
		$test = new cls_test_person_state_type($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['person_state_type'] = $result;
		return $result;
	}

	public function run_person_state_type_access_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_person_state_type_access_group.php');
		$result = new cls_table_test_result('person_state_type_access_group');
		$test = new cls_test_person_state_type_access_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['person_state_type_access_group'] = $result;
		return $result;
	}

	public function run_person_state_type_account($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_person_state_type_account.php');
		$result = new cls_table_test_result('person_state_type_account');
		$test = new cls_test_person_state_type_account($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['person_state_type_account'] = $result;
		return $result;
	}

	public function run_person_states_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_person_states_group.php');
		$result = new cls_table_test_result('person_states_group');
		$test = new cls_test_person_states_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['person_states_group'] = $result;
		return $result;
	}

	public function run_posting_header($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_posting_header.php');
		$result = new cls_table_test_result('posting_header');
		$test = new cls_test_posting_header($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['posting_header'] = $result;
		return $result;
	}

	public function run_posting_line($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_posting_line.php');
		$result = new cls_table_test_result('posting_line');
		$test = new cls_test_posting_line($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['posting_line'] = $result;
		return $result;
	}

	public function run_prescription($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_prescription.php');
		$result = new cls_table_test_result('prescription');
		$test = new cls_test_prescription($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['prescription'] = $result;
		return $result;
	}

	public function run_prescription_type($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_prescription_type.php');
		$result = new cls_table_test_result('prescription_type');
		$test = new cls_test_prescription_type($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['prescription_type'] = $result;
		return $result;
	}

	public function run_prescription_type_pos($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_prescription_type_pos.php');
		$result = new cls_table_test_result('prescription_type_pos');
		$test = new cls_test_prescription_type_pos($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['prescription_type_pos'] = $result;
		return $result;
	}

	public function run_restperiod($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_restperiod.php');
		$result = new cls_table_test_result('restperiod');
		$test = new cls_test_restperiod($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['restperiod'] = $result;
		return $result;
	}

	public function run_ribbonbar($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_ribbonbar.php');
		$result = new cls_table_test_result('ribbonbar');
		$test = new cls_test_ribbonbar($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['ribbonbar'] = $result;
		return $result;
	}

	public function run_ribbonbar_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_ribbonbar_group.php');
		$result = new cls_table_test_result('ribbonbar_group');
		$test = new cls_test_ribbonbar_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['ribbonbar_group'] = $result;
		return $result;
	}

	public function run_ribbonbar_item($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_ribbonbar_item.php');
		$result = new cls_table_test_result('ribbonbar_item');
		$test = new cls_test_ribbonbar_item($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['ribbonbar_item'] = $result;
		return $result;
	}

	public function run_ribbonbar_tab($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_ribbonbar_tab.php');
		$result = new cls_table_test_result('ribbonbar_tab');
		$test = new cls_test_ribbonbar_tab($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['ribbonbar_tab'] = $result;
		return $result;
	}

	public function run_ribbonbar_template($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_ribbonbar_template.php');
		$result = new cls_table_test_result('ribbonbar_template');
		$test = new cls_test_ribbonbar_template($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['ribbonbar_template'] = $result;
		return $result;
	}

	public function run_salutation($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_salutation.php');
		$result = new cls_table_test_result('salutation');
		$test = new cls_test_salutation($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['salutation'] = $result;
		return $result;
	}

	public function run_sport($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_sport.php');
		$result = new cls_table_test_result('sport');
		$test = new cls_test_sport($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['sport'] = $result;
		return $result;
	}

	public function run_standard_icon($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_standard_icon.php');
		$result = new cls_table_test_result('standard_icon');
		$test = new cls_test_standard_icon($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['standard_icon'] = $result;
		return $result;
	}

	public function run_supplier_data($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_supplier_data.php');
		$result = new cls_table_test_result('supplier_data');
		$test = new cls_test_supplier_data($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['supplier_data'] = $result;
		return $result;
	}

	public function run_supplier_price($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_supplier_price.php');
		$result = new cls_table_test_result('supplier_price');
		$test = new cls_test_supplier_price($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['supplier_price'] = $result;
		return $result;
	}

	public function run_swift_statement($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_swift_statement.php');
		$result = new cls_table_test_result('swift_statement');
		$test = new cls_test_swift_statement($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['swift_statement'] = $result;
		return $result;
	}

	public function run_swift_statement_line($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_swift_statement_line.php');
		$result = new cls_table_test_result('swift_statement_line');
		$test = new cls_test_swift_statement_line($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['swift_statement_line'] = $result;
		return $result;
	}

	public function run_swift_statement_line_posting($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_swift_statement_line_posting.php');
		$result = new cls_table_test_result('swift_statement_line_posting');
		$test = new cls_test_swift_statement_line_posting($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['swift_statement_line_posting'] = $result;
		return $result;
	}

	public function run_table_bean($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_table_bean.php');
		$result = new cls_table_test_result('table_bean');
		$test = new cls_test_table_bean($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['table_bean'] = $result;
		return $result;
	}

	public function run_table_bean_access_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_table_bean_access_group.php');
		$result = new cls_table_test_result('table_bean_access_group');
		$test = new cls_test_table_bean_access_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['table_bean_access_group'] = $result;
		return $result;
	}

	public function run_table_bean_table($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_table_bean_table.php');
		$result = new cls_table_test_result('table_bean_table');
		$test = new cls_test_table_bean_table($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['table_bean_table'] = $result;
		return $result;
	}

	public function run_table_column($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_table_column.php');
		$result = new cls_table_test_result('table_column');
		$test = new cls_test_table_column($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['table_column'] = $result;
		return $result;
	}

	public function run_table_data($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_table_data.php');
		$result = new cls_table_test_result('table_data');
		$test = new cls_test_table_data($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['table_data'] = $result;
		return $result;
	}

	public function run_table_lock($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_table_lock.php');
		$result = new cls_table_test_result('table_lock');
		$test = new cls_test_table_lock($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['table_lock'] = $result;
		return $result;
	}

	public function run_table_lookup_column($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_table_lookup_column.php');
		$result = new cls_table_test_result('table_lookup_column');
		$test = new cls_test_table_lookup_column($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['table_lookup_column'] = $result;
		return $result;
	}

	public function run_table_relation($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_table_relation.php');
		$result = new cls_table_test_result('table_relation');
		$test = new cls_test_table_relation($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['table_relation'] = $result;
		return $result;
	}

	public function run_table_search_column($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_table_search_column.php');
		$result = new cls_table_test_result('table_search_column');
		$test = new cls_test_table_search_column($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['table_search_column'] = $result;
		return $result;
	}

	public function run_table_search_template($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_table_search_template.php');
		$result = new cls_table_test_result('table_search_template');
		$test = new cls_test_table_search_template($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['table_search_template'] = $result;
		return $result;
	}

	public function run_table_security($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_table_security.php');
		$result = new cls_table_test_result('table_security');
		$test = new cls_test_table_security($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['table_security'] = $result;
		return $result;
	}

	public function run_table_test($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_table_test.php');
		$result = new cls_table_test_result('table_test');
		$test = new cls_test_table_test($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['table_test'] = $result;
		return $result;
	}

	public function run_table_test_data($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_table_test_data.php');
		$result = new cls_table_test_result('table_test_data');
		$test = new cls_test_table_test_data($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['table_test_data'] = $result;
		return $result;
	}

	public function run_table_test_group($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_table_test_group.php');
		$result = new cls_table_test_result('table_test_group');
		$test = new cls_test_table_test_group($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['table_test_group'] = $result;
		return $result;
	}

	public function run_table_test_group_table($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_table_test_group_table.php');
		$result = new cls_table_test_result('table_test_group_table');
		$test = new cls_test_table_test_group_table($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['table_test_group_table'] = $result;
		return $result;
	}

	public function run_table_test_item($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_table_test_item.php');
		$result = new cls_table_test_result('table_test_item');
		$test = new cls_test_table_test_item($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['table_test_item'] = $result;
		return $result;
	}

	public function run_table_test_result($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_table_test_result.php');
		$result = new cls_table_test_result('table_test_result');
		$test = new cls_test_table_test_result($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['table_test_result'] = $result;
		return $result;
	}

	public function run_table_test_test($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_table_test_test.php');
		$result = new cls_table_test_result('table_test_test');
		$test = new cls_test_table_test_test($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['table_test_test'] = $result;
		return $result;
	}

	public function run_therapy_goal($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_therapy_goal.php');
		$result = new cls_table_test_result('therapy_goal');
		$test = new cls_test_therapy_goal($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['therapy_goal'] = $result;
		return $result;
	}

	public function run_therapy_plan($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_therapy_plan.php');
		$result = new cls_table_test_result('therapy_plan');
		$test = new cls_test_therapy_plan($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['therapy_plan'] = $result;
		return $result;
	}

	public function run_therapy_plan_template($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_therapy_plan_template.php');
		$result = new cls_table_test_result('therapy_plan_template');
		$test = new cls_test_therapy_plan_template($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['therapy_plan_template'] = $result;
		return $result;
	}

	public function run_time_unit($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_time_unit.php');
		$result = new cls_table_test_result('time_unit');
		$test = new cls_test_time_unit($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['time_unit'] = $result;
		return $result;
	}

	public function run_transfer($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_transfer.php');
		$result = new cls_table_test_result('transfer');
		$test = new cls_test_transfer($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['transfer'] = $result;
		return $result;
	}

	public function run_transfer_item($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_transfer_item.php');
		$result = new cls_table_test_result('transfer_item');
		$test = new cls_test_transfer_item($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['transfer_item'] = $result;
		return $result;
	}

	public function run_uom($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_uom.php');
		$result = new cls_table_test_result('uom');
		$test = new cls_test_uom($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['uom'] = $result;
		return $result;
	}

	public function run_userconfiguration($db_manager,$application)
	{
		require_once('include/data/table_tests/cls_test_userconfiguration.php');
		$result = new cls_table_test_result('userconfiguration');
		$test = new cls_test_userconfiguration($db_manager,$application,$result);
		$test->run_tests();
		$this->get_results()['userconfiguration'] = $result;
		return $result;
	}

	public function run_tests()
	{
		$this->run_access_group($this->get_db_manager(),$this->get_application());
		$this->run_account($this->get_db_manager(),$this->get_application());
		$this->run_account_bankaccount($this->get_db_manager(),$this->get_application());
		$this->run_account_chart_of_account($this->get_db_manager(),$this->get_application());
		$this->run_account_group($this->get_db_manager(),$this->get_application());
		$this->run_account_match($this->get_db_manager(),$this->get_application());
		$this->run_action($this->get_db_manager(),$this->get_application());
		$this->run_address($this->get_db_manager(),$this->get_application());
		$this->run_address_type($this->get_db_manager(),$this->get_application());
		$this->run_application($this->get_db_manager(),$this->get_application());
		$this->run_application_controller($this->get_db_manager(),$this->get_application());
		$this->run_application_template($this->get_db_manager(),$this->get_application());
		$this->run_article($this->get_db_manager(),$this->get_application());
		$this->run_article_fixed_asset($this->get_db_manager(),$this->get_application());
		$this->run_article_group($this->get_db_manager(),$this->get_application());
		$this->run_article_group_account($this->get_db_manager(),$this->get_application());
		$this->run_article_list($this->get_db_manager(),$this->get_application());
		$this->run_article_list_pos($this->get_db_manager(),$this->get_application());
		$this->run_article_person_rent($this->get_db_manager(),$this->get_application());
		$this->run_article_price($this->get_db_manager(),$this->get_application());
		$this->run_article_price_group($this->get_db_manager(),$this->get_application());
		$this->run_article_quantity($this->get_db_manager(),$this->get_application());
		$this->run_article_rent_price($this->get_db_manager(),$this->get_application());
		$this->run_article_supplier($this->get_db_manager(),$this->get_application());
		$this->run_bank($this->get_db_manager(),$this->get_application());
		$this->run_bank_account($this->get_db_manager(),$this->get_application());
		$this->run_bank_account_mandat($this->get_db_manager(),$this->get_application());
		$this->run_base_control_type($this->get_db_manager(),$this->get_application());
		$this->run_campaign($this->get_db_manager(),$this->get_application());
		$this->run_campaign_group($this->get_db_manager(),$this->get_application());
		$this->run_certificate_type($this->get_db_manager(),$this->get_application());
		$this->run_chart_of_account($this->get_db_manager(),$this->get_application());
		$this->run_column_security($this->get_db_manager(),$this->get_application());
		$this->run_communication($this->get_db_manager(),$this->get_application());
		$this->run_communication_event($this->get_db_manager(),$this->get_application());
		$this->run_communication_reason($this->get_db_manager(),$this->get_application());
		$this->run_communication_reason_type($this->get_db_manager(),$this->get_application());
		$this->run_communication_reason_type_person_state($this->get_db_manager(),$this->get_application());
		$this->run_communication_type($this->get_db_manager(),$this->get_application());
		$this->run_computer_configuration($this->get_db_manager(),$this->get_application());
		$this->run_config_group($this->get_db_manager(),$this->get_application());
		$this->run_config_group_item($this->get_db_manager(),$this->get_application());
		$this->run_config_item_access_group($this->get_db_manager(),$this->get_application());
		$this->run_configuration($this->get_db_manager(),$this->get_application());
		$this->run_contract($this->get_db_manager(),$this->get_application());
		$this->run_contract_plan($this->get_db_manager(),$this->get_application());
		$this->run_contract_pos($this->get_db_manager(),$this->get_application());
		$this->run_contract_template($this->get_db_manager(),$this->get_application());
		$this->run_contract_template_group($this->get_db_manager(),$this->get_application());
		$this->run_contract_template_item($this->get_db_manager(),$this->get_application());
		$this->run_contract_template_onetimepayment($this->get_db_manager(),$this->get_application());
		$this->run_contract_template_pos($this->get_db_manager(),$this->get_application());
		$this->run_control($this->get_db_manager(),$this->get_application());
		$this->run_control_control_group($this->get_db_manager(),$this->get_application());
		$this->run_control_group($this->get_db_manager(),$this->get_application());
		$this->run_country($this->get_db_manager(),$this->get_application());
		$this->run_data_change($this->get_db_manager(),$this->get_application());
		$this->run_data_help($this->get_db_manager(),$this->get_application());
		$this->run_data_location($this->get_db_manager(),$this->get_application());
		$this->run_data_posting($this->get_db_manager(),$this->get_application());
		$this->run_data_property($this->get_db_manager(),$this->get_application());
		$this->run_data_property_type($this->get_db_manager(),$this->get_application());
		$this->run_data_property_type_val($this->get_db_manager(),$this->get_application());
		$this->run_data_relation($this->get_db_manager(),$this->get_application());
		$this->run_data_relation_type($this->get_db_manager(),$this->get_application());
		$this->run_data_relation_types_val($this->get_db_manager(),$this->get_application());
		$this->run_data_translation($this->get_db_manager(),$this->get_application());
		$this->run_data_view($this->get_db_manager(),$this->get_application());
		$this->run_data_view_field($this->get_db_manager(),$this->get_application());
		$this->run_data_view_restriction($this->get_db_manager(),$this->get_application());
		$this->run_data_view_table($this->get_db_manager(),$this->get_application());
		$this->run_desease($this->get_db_manager(),$this->get_application());
		$this->run_device($this->get_db_manager(),$this->get_application());
		$this->run_device_offer($this->get_db_manager(),$this->get_application());
		$this->run_dms($this->get_db_manager(),$this->get_application());
		$this->run_dms_document_type($this->get_db_manager(),$this->get_application());
		$this->run_dms_type($this->get_db_manager(),$this->get_application());
		$this->run_drupal_actions($this->get_db_manager(),$this->get_application());
		$this->run_drupal_authmap($this->get_db_manager(),$this->get_application());
		$this->run_drupal_batch($this->get_db_manager(),$this->get_application());
		$this->run_drupal_block($this->get_db_manager(),$this->get_application());
		$this->run_drupal_block_custom($this->get_db_manager(),$this->get_application());
		$this->run_drupal_block_node_type($this->get_db_manager(),$this->get_application());
		$this->run_drupal_block_role($this->get_db_manager(),$this->get_application());
		$this->run_drupal_blocked_ips($this->get_db_manager(),$this->get_application());
		$this->run_drupal_cache($this->get_db_manager(),$this->get_application());
		$this->run_drupal_cache_block($this->get_db_manager(),$this->get_application());
		$this->run_drupal_cache_bootstrap($this->get_db_manager(),$this->get_application());
		$this->run_drupal_cache_field($this->get_db_manager(),$this->get_application());
		$this->run_drupal_cache_filter($this->get_db_manager(),$this->get_application());
		$this->run_drupal_cache_form($this->get_db_manager(),$this->get_application());
		$this->run_drupal_cache_image($this->get_db_manager(),$this->get_application());
		$this->run_drupal_cache_menu($this->get_db_manager(),$this->get_application());
		$this->run_drupal_cache_page($this->get_db_manager(),$this->get_application());
		$this->run_drupal_cache_path($this->get_db_manager(),$this->get_application());
		$this->run_drupal_cache_update($this->get_db_manager(),$this->get_application());
		$this->run_drupal_comment($this->get_db_manager(),$this->get_application());
		$this->run_drupal_date_format_locale($this->get_db_manager(),$this->get_application());
		$this->run_drupal_date_format_type($this->get_db_manager(),$this->get_application());
		$this->run_drupal_date_formats($this->get_db_manager(),$this->get_application());
		$this->run_drupal_field_config($this->get_db_manager(),$this->get_application());
		$this->run_drupal_field_config_instance($this->get_db_manager(),$this->get_application());
		$this->run_drupal_field_data_body($this->get_db_manager(),$this->get_application());
		$this->run_drupal_field_data_comment_body($this->get_db_manager(),$this->get_application());
		$this->run_drupal_field_data_field_first_name($this->get_db_manager(),$this->get_application());
		$this->run_drupal_field_data_field_image($this->get_db_manager(),$this->get_application());
		$this->run_drupal_field_data_field_tags($this->get_db_manager(),$this->get_application());
		$this->run_drupal_field_revision_body($this->get_db_manager(),$this->get_application());
		$this->run_drupal_field_revision_comment_body($this->get_db_manager(),$this->get_application());
		$this->run_drupal_field_revision_field_first_name($this->get_db_manager(),$this->get_application());
		$this->run_drupal_field_revision_field_image($this->get_db_manager(),$this->get_application());
		$this->run_drupal_field_revision_field_tags($this->get_db_manager(),$this->get_application());
		$this->run_drupal_file_managed($this->get_db_manager(),$this->get_application());
		$this->run_drupal_file_usage($this->get_db_manager(),$this->get_application());
		$this->run_drupal_filter($this->get_db_manager(),$this->get_application());
		$this->run_drupal_filter_format($this->get_db_manager(),$this->get_application());
		$this->run_drupal_flood($this->get_db_manager(),$this->get_application());
		$this->run_drupal_history($this->get_db_manager(),$this->get_application());
		$this->run_drupal_image_effects($this->get_db_manager(),$this->get_application());
		$this->run_drupal_image_styles($this->get_db_manager(),$this->get_application());
		$this->run_drupal_languages($this->get_db_manager(),$this->get_application());
		$this->run_drupal_locales_source($this->get_db_manager(),$this->get_application());
		$this->run_drupal_locales_target($this->get_db_manager(),$this->get_application());
		$this->run_drupal_menu_custom($this->get_db_manager(),$this->get_application());
		$this->run_drupal_menu_links($this->get_db_manager(),$this->get_application());
		$this->run_drupal_menu_router($this->get_db_manager(),$this->get_application());
		$this->run_drupal_node($this->get_db_manager(),$this->get_application());
		$this->run_drupal_node_access($this->get_db_manager(),$this->get_application());
		$this->run_drupal_node_comment_statistics($this->get_db_manager(),$this->get_application());
		$this->run_drupal_node_revision($this->get_db_manager(),$this->get_application());
		$this->run_drupal_node_type($this->get_db_manager(),$this->get_application());
		$this->run_drupal_person($this->get_db_manager(),$this->get_application());
		$this->run_drupal_profile($this->get_db_manager(),$this->get_application());
		$this->run_drupal_profile_type($this->get_db_manager(),$this->get_application());
		$this->run_drupal_queue($this->get_db_manager(),$this->get_application());
		$this->run_drupal_rdf_mapping($this->get_db_manager(),$this->get_application());
		$this->run_drupal_registry($this->get_db_manager(),$this->get_application());
		$this->run_drupal_registry_file($this->get_db_manager(),$this->get_application());
		$this->run_drupal_role($this->get_db_manager(),$this->get_application());
		$this->run_drupal_role_permission($this->get_db_manager(),$this->get_application());
		$this->run_drupal_search_dataset($this->get_db_manager(),$this->get_application());
		$this->run_drupal_search_index($this->get_db_manager(),$this->get_application());
		$this->run_drupal_search_node_links($this->get_db_manager(),$this->get_application());
		$this->run_drupal_search_total($this->get_db_manager(),$this->get_application());
		$this->run_drupal_semaphore($this->get_db_manager(),$this->get_application());
		$this->run_drupal_sequences($this->get_db_manager(),$this->get_application());
		$this->run_drupal_sessions($this->get_db_manager(),$this->get_application());
		$this->run_drupal_shortcut_set($this->get_db_manager(),$this->get_application());
		$this->run_drupal_shortcut_set_users($this->get_db_manager(),$this->get_application());
		$this->run_drupal_system($this->get_db_manager(),$this->get_application());
		$this->run_drupal_taxonomy_index($this->get_db_manager(),$this->get_application());
		$this->run_drupal_taxonomy_term_data($this->get_db_manager(),$this->get_application());
		$this->run_drupal_taxonomy_term_hierarchy($this->get_db_manager(),$this->get_application());
		$this->run_drupal_taxonomy_vocabulary($this->get_db_manager(),$this->get_application());
		$this->run_drupal_url_alias($this->get_db_manager(),$this->get_application());
		$this->run_drupal_users($this->get_db_manager(),$this->get_application());
		$this->run_drupal_users_roles($this->get_db_manager(),$this->get_application());
		$this->run_drupal_variable($this->get_db_manager(),$this->get_application());
		$this->run_drupal_watchdog($this->get_db_manager(),$this->get_application());
		$this->run_event_type($this->get_db_manager(),$this->get_application());
		$this->run_fixed_asset($this->get_db_manager(),$this->get_application());
		$this->run_fixed_asset_group($this->get_db_manager(),$this->get_application());
		$this->run_fixed_asset_group_account($this->get_db_manager(),$this->get_application());
		$this->run_geodb_changelog($this->get_db_manager(),$this->get_application());
		$this->run_geodb_coordinates($this->get_db_manager(),$this->get_application());
		$this->run_geodb_floatdata($this->get_db_manager(),$this->get_application());
		$this->run_geodb_intdata($this->get_db_manager(),$this->get_application());
		$this->run_geodb_locations($this->get_db_manager(),$this->get_application());
		$this->run_geodb_textdata($this->get_db_manager(),$this->get_application());
		$this->run_geodb_type_names($this->get_db_manager(),$this->get_application());
		$this->run_insurance($this->get_db_manager(),$this->get_application());
		$this->run_insurance_district($this->get_db_manager(),$this->get_application());
		$this->run_insurance_group($this->get_db_manager(),$this->get_application());
		$this->run_insurance_price($this->get_db_manager(),$this->get_application());
		$this->run_invoice($this->get_db_manager(),$this->get_application());
		$this->run_invoice_item($this->get_db_manager(),$this->get_application());
		$this->run_location($this->get_db_manager(),$this->get_application());
		$this->run_location_independent_table($this->get_db_manager(),$this->get_application());
		$this->run_logon($this->get_db_manager(),$this->get_application());
		$this->run_main_page($this->get_db_manager(),$this->get_application());
		$this->run_main_page_template($this->get_db_manager(),$this->get_application());
		$this->run_menu($this->get_db_manager(),$this->get_application());
		$this->run_menu_access_group($this->get_db_manager(),$this->get_application());
		$this->run_menu_group($this->get_db_manager(),$this->get_application());
		$this->run_menu_item($this->get_db_manager(),$this->get_application());
		$this->run_menu_template($this->get_db_manager(),$this->get_application());
		$this->run_offer($this->get_db_manager(),$this->get_application());
		$this->run_offer_event($this->get_db_manager(),$this->get_application());
		$this->run_offer_time($this->get_db_manager(),$this->get_application());
		$this->run_offer_type($this->get_db_manager(),$this->get_application());
		$this->run_onetime_payment($this->get_db_manager(),$this->get_application());
		$this->run_person($this->get_db_manager(),$this->get_application());
		$this->run_person_access_group($this->get_db_manager(),$this->get_application());
		$this->run_person_account($this->get_db_manager(),$this->get_application());
		$this->run_person_article_renting($this->get_db_manager(),$this->get_application());
		$this->run_person_desease($this->get_db_manager(),$this->get_application());
		$this->run_person_search_values($this->get_db_manager(),$this->get_application());
		$this->run_person_state($this->get_db_manager(),$this->get_application());
		$this->run_person_state_type($this->get_db_manager(),$this->get_application());
		$this->run_person_state_type_access_group($this->get_db_manager(),$this->get_application());
		$this->run_person_state_type_account($this->get_db_manager(),$this->get_application());
		$this->run_person_states_group($this->get_db_manager(),$this->get_application());
		$this->run_posting_header($this->get_db_manager(),$this->get_application());
		$this->run_posting_line($this->get_db_manager(),$this->get_application());
		$this->run_prescription($this->get_db_manager(),$this->get_application());
		$this->run_prescription_type($this->get_db_manager(),$this->get_application());
		$this->run_prescription_type_pos($this->get_db_manager(),$this->get_application());
		$this->run_restperiod($this->get_db_manager(),$this->get_application());
		$this->run_ribbonbar($this->get_db_manager(),$this->get_application());
		$this->run_ribbonbar_group($this->get_db_manager(),$this->get_application());
		$this->run_ribbonbar_item($this->get_db_manager(),$this->get_application());
		$this->run_ribbonbar_tab($this->get_db_manager(),$this->get_application());
		$this->run_ribbonbar_template($this->get_db_manager(),$this->get_application());
		$this->run_salutation($this->get_db_manager(),$this->get_application());
		$this->run_sport($this->get_db_manager(),$this->get_application());
		$this->run_standard_icon($this->get_db_manager(),$this->get_application());
		$this->run_supplier_data($this->get_db_manager(),$this->get_application());
		$this->run_supplier_price($this->get_db_manager(),$this->get_application());
		$this->run_swift_statement($this->get_db_manager(),$this->get_application());
		$this->run_swift_statement_line($this->get_db_manager(),$this->get_application());
		$this->run_swift_statement_line_posting($this->get_db_manager(),$this->get_application());
		$this->run_table_bean($this->get_db_manager(),$this->get_application());
		$this->run_table_bean_access_group($this->get_db_manager(),$this->get_application());
		$this->run_table_bean_table($this->get_db_manager(),$this->get_application());
		$this->run_table_column($this->get_db_manager(),$this->get_application());
		$this->run_table_data($this->get_db_manager(),$this->get_application());
		$this->run_table_lock($this->get_db_manager(),$this->get_application());
		$this->run_table_lookup_column($this->get_db_manager(),$this->get_application());
		$this->run_table_relation($this->get_db_manager(),$this->get_application());
		$this->run_table_search_column($this->get_db_manager(),$this->get_application());
		$this->run_table_search_template($this->get_db_manager(),$this->get_application());
		$this->run_table_security($this->get_db_manager(),$this->get_application());
		$this->run_table_test($this->get_db_manager(),$this->get_application());
		$this->run_table_test_data($this->get_db_manager(),$this->get_application());
		$this->run_table_test_group($this->get_db_manager(),$this->get_application());
		$this->run_table_test_group_table($this->get_db_manager(),$this->get_application());
		$this->run_table_test_item($this->get_db_manager(),$this->get_application());
		$this->run_table_test_result($this->get_db_manager(),$this->get_application());
		$this->run_table_test_test($this->get_db_manager(),$this->get_application());
		$this->run_therapy_goal($this->get_db_manager(),$this->get_application());
		$this->run_therapy_plan($this->get_db_manager(),$this->get_application());
		$this->run_therapy_plan_template($this->get_db_manager(),$this->get_application());
		$this->run_time_unit($this->get_db_manager(),$this->get_application());
		$this->run_transfer($this->get_db_manager(),$this->get_application());
		$this->run_transfer_item($this->get_db_manager(),$this->get_application());
		$this->run_uom($this->get_db_manager(),$this->get_application());
		$this->run_userconfiguration($this->get_db_manager(),$this->get_application());
	}
	public function run_group($id_test_group)
	{
	}
}
?>
