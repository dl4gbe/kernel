<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_table_factory
{
	private static $p_common_access_group = null;
	private static $p_common_account = null;
	private static $p_common_account_bankaccount = null;
	private static $p_common_account_chart_of_account = null;
	private static $p_common_account_group = null;
	private static $p_common_account_match = null;
	private static $p_common_action = null;
	private static $p_common_address = null;
	private static $p_common_address_type = null;
	private static $p_common_application = null;
	private static $p_common_application_controller = null;
	private static $p_common_application_template = null;
	private static $p_common_article = null;
	private static $p_common_article_fixed_asset = null;
	private static $p_common_article_group = null;
	private static $p_common_article_group_account = null;
	private static $p_common_article_list = null;
	private static $p_common_article_list_pos = null;
	private static $p_common_article_person_rent = null;
	private static $p_common_article_price = null;
	private static $p_common_article_price_group = null;
	private static $p_common_article_quantity = null;
	private static $p_common_article_rent_price = null;
	private static $p_common_article_supplier = null;
	private static $p_common_bank = null;
	private static $p_common_bank_account = null;
	private static $p_common_bank_account_mandat = null;
	private static $p_common_base_control_type = null;
	private static $p_common_campaign = null;
	private static $p_common_campaign_group = null;
	private static $p_common_certificate_type = null;
	private static $p_common_chart_of_account = null;
	private static $p_common_column_security = null;
	private static $p_common_communication = null;
	private static $p_common_communication_event = null;
	private static $p_common_communication_reason = null;
	private static $p_common_communication_reason_type = null;
	private static $p_common_communication_reason_type_person_state = null;
	private static $p_common_communication_type = null;
	private static $p_common_computer_configuration = null;
	private static $p_common_config_group = null;
	private static $p_common_config_group_item = null;
	private static $p_common_config_item_access_group = null;
	private static $p_common_configuration = null;
	private static $p_common_contract = null;
	private static $p_common_contract_plan = null;
	private static $p_common_contract_pos = null;
	private static $p_common_contract_template = null;
	private static $p_common_contract_template_group = null;
	private static $p_common_contract_template_item = null;
	private static $p_common_contract_template_onetimepayment = null;
	private static $p_common_contract_template_pos = null;
	private static $p_common_control = null;
	private static $p_common_control_control_group = null;
	private static $p_common_control_group = null;
	private static $p_common_country = null;
	private static $p_common_data_change = null;
	private static $p_common_data_help = null;
	private static $p_common_data_location = null;
	private static $p_common_data_posting = null;
	private static $p_common_data_property = null;
	private static $p_common_data_property_type = null;
	private static $p_common_data_property_type_val = null;
	private static $p_common_data_relation = null;
	private static $p_common_data_relation_type = null;
	private static $p_common_data_relation_types_val = null;
	private static $p_common_data_translation = null;
	private static $p_common_data_view = null;
	private static $p_common_data_view_field = null;
	private static $p_common_data_view_restriction = null;
	private static $p_common_data_view_table = null;
	private static $p_common_desease = null;
	private static $p_common_device = null;
	private static $p_common_device_offer = null;
	private static $p_common_dms = null;
	private static $p_common_dms_document_type = null;
	private static $p_common_dms_type = null;
	private static $p_common_drupal_actions = null;
	private static $p_common_drupal_authmap = null;
	private static $p_common_drupal_batch = null;
	private static $p_common_drupal_block = null;
	private static $p_common_drupal_block_custom = null;
	private static $p_common_drupal_block_node_type = null;
	private static $p_common_drupal_block_role = null;
	private static $p_common_drupal_blocked_ips = null;
	private static $p_common_drupal_cache = null;
	private static $p_common_drupal_cache_block = null;
	private static $p_common_drupal_cache_bootstrap = null;
	private static $p_common_drupal_cache_field = null;
	private static $p_common_drupal_cache_filter = null;
	private static $p_common_drupal_cache_form = null;
	private static $p_common_drupal_cache_image = null;
	private static $p_common_drupal_cache_menu = null;
	private static $p_common_drupal_cache_page = null;
	private static $p_common_drupal_cache_path = null;
	private static $p_common_drupal_cache_update = null;
	private static $p_common_drupal_comment = null;
	private static $p_common_drupal_date_format_locale = null;
	private static $p_common_drupal_date_format_type = null;
	private static $p_common_drupal_date_formats = null;
	private static $p_common_drupal_field_config = null;
	private static $p_common_drupal_field_config_instance = null;
	private static $p_common_drupal_field_data_body = null;
	private static $p_common_drupal_field_data_comment_body = null;
	private static $p_common_drupal_field_data_field_first_name = null;
	private static $p_common_drupal_field_data_field_image = null;
	private static $p_common_drupal_field_data_field_tags = null;
	private static $p_common_drupal_field_revision_body = null;
	private static $p_common_drupal_field_revision_comment_body = null;
	private static $p_common_drupal_field_revision_field_first_name = null;
	private static $p_common_drupal_field_revision_field_image = null;
	private static $p_common_drupal_field_revision_field_tags = null;
	private static $p_common_drupal_file_managed = null;
	private static $p_common_drupal_file_usage = null;
	private static $p_common_drupal_filter = null;
	private static $p_common_drupal_filter_format = null;
	private static $p_common_drupal_flood = null;
	private static $p_common_drupal_history = null;
	private static $p_common_drupal_image_effects = null;
	private static $p_common_drupal_image_styles = null;
	private static $p_common_drupal_languages = null;
	private static $p_common_drupal_locales_source = null;
	private static $p_common_drupal_locales_target = null;
	private static $p_common_drupal_menu_custom = null;
	private static $p_common_drupal_menu_links = null;
	private static $p_common_drupal_menu_router = null;
	private static $p_common_drupal_node = null;
	private static $p_common_drupal_node_access = null;
	private static $p_common_drupal_node_comment_statistics = null;
	private static $p_common_drupal_node_revision = null;
	private static $p_common_drupal_node_type = null;
	private static $p_common_drupal_person = null;
	private static $p_common_drupal_profile = null;
	private static $p_common_drupal_profile_type = null;
	private static $p_common_drupal_queue = null;
	private static $p_common_drupal_rdf_mapping = null;
	private static $p_common_drupal_registry = null;
	private static $p_common_drupal_registry_file = null;
	private static $p_common_drupal_role = null;
	private static $p_common_drupal_role_permission = null;
	private static $p_common_drupal_search_dataset = null;
	private static $p_common_drupal_search_index = null;
	private static $p_common_drupal_search_node_links = null;
	private static $p_common_drupal_search_total = null;
	private static $p_common_drupal_semaphore = null;
	private static $p_common_drupal_sequences = null;
	private static $p_common_drupal_sessions = null;
	private static $p_common_drupal_shortcut_set = null;
	private static $p_common_drupal_shortcut_set_users = null;
	private static $p_common_drupal_system = null;
	private static $p_common_drupal_taxonomy_index = null;
	private static $p_common_drupal_taxonomy_term_data = null;
	private static $p_common_drupal_taxonomy_term_hierarchy = null;
	private static $p_common_drupal_taxonomy_vocabulary = null;
	private static $p_common_drupal_url_alias = null;
	private static $p_common_drupal_users = null;
	private static $p_common_drupal_users_roles = null;
	private static $p_common_drupal_variable = null;
	private static $p_common_drupal_watchdog = null;
	private static $p_common_event_type = null;
	private static $p_common_fixed_asset = null;
	private static $p_common_fixed_asset_group = null;
	private static $p_common_fixed_asset_group_account = null;
	private static $p_common_geodb_changelog = null;
	private static $p_common_geodb_coordinates = null;
	private static $p_common_geodb_floatdata = null;
	private static $p_common_geodb_intdata = null;
	private static $p_common_geodb_locations = null;
	private static $p_common_geodb_textdata = null;
	private static $p_common_geodb_type_names = null;
	private static $p_common_insurance = null;
	private static $p_common_insurance_district = null;
	private static $p_common_insurance_group = null;
	private static $p_common_insurance_price = null;
	private static $p_common_invoice = null;
	private static $p_common_invoice_item = null;
	private static $p_common_location = null;
	private static $p_common_location_independent_table = null;
	private static $p_common_logon = null;
	private static $p_common_main_page = null;
	private static $p_common_main_page_template = null;
	private static $p_common_menu = null;
	private static $p_common_menu_access_group = null;
	private static $p_common_menu_group = null;
	private static $p_common_menu_item = null;
	private static $p_common_menu_template = null;
	private static $p_common_offer = null;
	private static $p_common_offer_event = null;
	private static $p_common_offer_time = null;
	private static $p_common_offer_type = null;
	private static $p_common_onetime_payment = null;
	private static $p_common_person = null;
	private static $p_common_person_access_group = null;
	private static $p_common_person_account = null;
	private static $p_common_person_article_renting = null;
	private static $p_common_person_desease = null;
	private static $p_common_person_search_values = null;
	private static $p_common_person_state = null;
	private static $p_common_person_state_type = null;
	private static $p_common_person_state_type_access_group = null;
	private static $p_common_person_state_type_account = null;
	private static $p_common_person_states_group = null;
	private static $p_common_posting_header = null;
	private static $p_common_posting_line = null;
	private static $p_common_prescription = null;
	private static $p_common_prescription_type = null;
	private static $p_common_prescription_type_pos = null;
	private static $p_common_restperiod = null;
	private static $p_common_ribbonbar = null;
	private static $p_common_ribbonbar_group = null;
	private static $p_common_ribbonbar_item = null;
	private static $p_common_ribbonbar_tab = null;
	private static $p_common_ribbonbar_template = null;
	private static $p_common_salutation = null;
	private static $p_common_sport = null;
	private static $p_common_standard_icon = null;
	private static $p_common_supplier_data = null;
	private static $p_common_supplier_price = null;
	private static $p_common_swift_statement = null;
	private static $p_common_swift_statement_line = null;
	private static $p_common_swift_statement_line_posting = null;
	private static $p_common_table_bean = null;
	private static $p_common_table_bean_access_group = null;
	private static $p_common_table_bean_table = null;
	private static $p_common_table_column = null;
	private static $p_common_table_data = null;
	private static $p_common_table_lock = null;
	private static $p_common_table_lookup_column = null;
	private static $p_common_table_relation = null;
	private static $p_common_table_search_column = null;
	private static $p_common_table_search_template = null;
	private static $p_common_table_security = null;
	private static $p_common_table_test = null;
	private static $p_common_table_test_data = null;
	private static $p_common_table_test_group = null;
	private static $p_common_table_test_group_table = null;
	private static $p_common_table_test_item = null;
	private static $p_common_table_test_result = null;
	private static $p_common_table_test_test = null;
	private static $p_common_therapy_goal = null;
	private static $p_common_therapy_plan = null;
	private static $p_common_therapy_plan_template = null;
	private static $p_common_time_unit = null;
	private static $p_common_transfer = null;
	private static $p_common_transfer_item = null;
	private static $p_common_uom = null;
	private static $p_common_userconfiguration = null;

	public static function get_common_access_group()
		{
		if (is_null(self::$p_common_access_group))
			{
				self::$p_common_access_group = self::create_instance("access_group");
			}
			return self::$p_common_access_group;
		}


	public static function get_common_account()
		{
		if (is_null(self::$p_common_account))
			{
				self::$p_common_account = self::create_instance("account");
			}
			return self::$p_common_account;
		}


	public static function get_common_account_bankaccount()
		{
		if (is_null(self::$p_common_account_bankaccount))
			{
				self::$p_common_account_bankaccount = self::create_instance("account_bankaccount");
			}
			return self::$p_common_account_bankaccount;
		}


	public static function get_common_account_chart_of_account()
		{
		if (is_null(self::$p_common_account_chart_of_account))
			{
				self::$p_common_account_chart_of_account = self::create_instance("account_chart_of_account");
			}
			return self::$p_common_account_chart_of_account;
		}


	public static function get_common_account_group()
		{
		if (is_null(self::$p_common_account_group))
			{
				self::$p_common_account_group = self::create_instance("account_group");
			}
			return self::$p_common_account_group;
		}


	public static function get_common_account_match()
		{
		if (is_null(self::$p_common_account_match))
			{
				self::$p_common_account_match = self::create_instance("account_match");
			}
			return self::$p_common_account_match;
		}


	public static function get_common_action()
		{
		if (is_null(self::$p_common_action))
			{
				self::$p_common_action = self::create_instance("action");
			}
			return self::$p_common_action;
		}


	public static function get_common_address()
		{
		if (is_null(self::$p_common_address))
			{
				self::$p_common_address = self::create_instance("address");
			}
			return self::$p_common_address;
		}


	public static function get_common_address_type()
		{
		if (is_null(self::$p_common_address_type))
			{
				self::$p_common_address_type = self::create_instance("address_type");
			}
			return self::$p_common_address_type;
		}


	public static function get_common_application()
		{
		if (is_null(self::$p_common_application))
			{
				self::$p_common_application = self::create_instance("application");
			}
			return self::$p_common_application;
		}


	public static function get_common_application_controller()
		{
		if (is_null(self::$p_common_application_controller))
			{
				self::$p_common_application_controller = self::create_instance("application_controller");
			}
			return self::$p_common_application_controller;
		}


	public static function get_common_application_template()
		{
		if (is_null(self::$p_common_application_template))
			{
				self::$p_common_application_template = self::create_instance("application_template");
			}
			return self::$p_common_application_template;
		}


	public static function get_common_article()
		{
		if (is_null(self::$p_common_article))
			{
				self::$p_common_article = self::create_instance("article");
			}
			return self::$p_common_article;
		}


	public static function get_common_article_fixed_asset()
		{
		if (is_null(self::$p_common_article_fixed_asset))
			{
				self::$p_common_article_fixed_asset = self::create_instance("article_fixed_asset");
			}
			return self::$p_common_article_fixed_asset;
		}


	public static function get_common_article_group()
		{
		if (is_null(self::$p_common_article_group))
			{
				self::$p_common_article_group = self::create_instance("article_group");
			}
			return self::$p_common_article_group;
		}


	public static function get_common_article_group_account()
		{
		if (is_null(self::$p_common_article_group_account))
			{
				self::$p_common_article_group_account = self::create_instance("article_group_account");
			}
			return self::$p_common_article_group_account;
		}


	public static function get_common_article_list()
		{
		if (is_null(self::$p_common_article_list))
			{
				self::$p_common_article_list = self::create_instance("article_list");
			}
			return self::$p_common_article_list;
		}


	public static function get_common_article_list_pos()
		{
		if (is_null(self::$p_common_article_list_pos))
			{
				self::$p_common_article_list_pos = self::create_instance("article_list_pos");
			}
			return self::$p_common_article_list_pos;
		}


	public static function get_common_article_person_rent()
		{
		if (is_null(self::$p_common_article_person_rent))
			{
				self::$p_common_article_person_rent = self::create_instance("article_person_rent");
			}
			return self::$p_common_article_person_rent;
		}


	public static function get_common_article_price()
		{
		if (is_null(self::$p_common_article_price))
			{
				self::$p_common_article_price = self::create_instance("article_price");
			}
			return self::$p_common_article_price;
		}


	public static function get_common_article_price_group()
		{
		if (is_null(self::$p_common_article_price_group))
			{
				self::$p_common_article_price_group = self::create_instance("article_price_group");
			}
			return self::$p_common_article_price_group;
		}


	public static function get_common_article_quantity()
		{
		if (is_null(self::$p_common_article_quantity))
			{
				self::$p_common_article_quantity = self::create_instance("article_quantity");
			}
			return self::$p_common_article_quantity;
		}


	public static function get_common_article_rent_price()
		{
		if (is_null(self::$p_common_article_rent_price))
			{
				self::$p_common_article_rent_price = self::create_instance("article_rent_price");
			}
			return self::$p_common_article_rent_price;
		}


	public static function get_common_article_supplier()
		{
		if (is_null(self::$p_common_article_supplier))
			{
				self::$p_common_article_supplier = self::create_instance("article_supplier");
			}
			return self::$p_common_article_supplier;
		}


	public static function get_common_bank()
		{
		if (is_null(self::$p_common_bank))
			{
				self::$p_common_bank = self::create_instance("bank");
			}
			return self::$p_common_bank;
		}


	public static function get_common_bank_account()
		{
		if (is_null(self::$p_common_bank_account))
			{
				self::$p_common_bank_account = self::create_instance("bank_account");
			}
			return self::$p_common_bank_account;
		}


	public static function get_common_bank_account_mandat()
		{
		if (is_null(self::$p_common_bank_account_mandat))
			{
				self::$p_common_bank_account_mandat = self::create_instance("bank_account_mandat");
			}
			return self::$p_common_bank_account_mandat;
		}


	public static function get_common_base_control_type()
		{
		if (is_null(self::$p_common_base_control_type))
			{
				self::$p_common_base_control_type = self::create_instance("base_control_type");
			}
			return self::$p_common_base_control_type;
		}


	public static function get_common_campaign()
		{
		if (is_null(self::$p_common_campaign))
			{
				self::$p_common_campaign = self::create_instance("campaign");
			}
			return self::$p_common_campaign;
		}


	public static function get_common_campaign_group()
		{
		if (is_null(self::$p_common_campaign_group))
			{
				self::$p_common_campaign_group = self::create_instance("campaign_group");
			}
			return self::$p_common_campaign_group;
		}


	public static function get_common_certificate_type()
		{
		if (is_null(self::$p_common_certificate_type))
			{
				self::$p_common_certificate_type = self::create_instance("certificate_type");
			}
			return self::$p_common_certificate_type;
		}


	public static function get_common_chart_of_account()
		{
		if (is_null(self::$p_common_chart_of_account))
			{
				self::$p_common_chart_of_account = self::create_instance("chart_of_account");
			}
			return self::$p_common_chart_of_account;
		}


	public static function get_common_column_security()
		{
		if (is_null(self::$p_common_column_security))
			{
				self::$p_common_column_security = self::create_instance("column_security");
			}
			return self::$p_common_column_security;
		}


	public static function get_common_communication()
		{
		if (is_null(self::$p_common_communication))
			{
				self::$p_common_communication = self::create_instance("communication");
			}
			return self::$p_common_communication;
		}


	public static function get_common_communication_event()
		{
		if (is_null(self::$p_common_communication_event))
			{
				self::$p_common_communication_event = self::create_instance("communication_event");
			}
			return self::$p_common_communication_event;
		}


	public static function get_common_communication_reason()
		{
		if (is_null(self::$p_common_communication_reason))
			{
				self::$p_common_communication_reason = self::create_instance("communication_reason");
			}
			return self::$p_common_communication_reason;
		}


	public static function get_common_communication_reason_type()
		{
		if (is_null(self::$p_common_communication_reason_type))
			{
				self::$p_common_communication_reason_type = self::create_instance("communication_reason_type");
			}
			return self::$p_common_communication_reason_type;
		}


	public static function get_common_communication_reason_type_person_state()
		{
		if (is_null(self::$p_common_communication_reason_type_person_state))
			{
				self::$p_common_communication_reason_type_person_state = self::create_instance("communication_reason_type_person_state");
			}
			return self::$p_common_communication_reason_type_person_state;
		}


	public static function get_common_communication_type()
		{
		if (is_null(self::$p_common_communication_type))
			{
				self::$p_common_communication_type = self::create_instance("communication_type");
			}
			return self::$p_common_communication_type;
		}


	public static function get_common_computer_configuration()
		{
		if (is_null(self::$p_common_computer_configuration))
			{
				self::$p_common_computer_configuration = self::create_instance("computer_configuration");
			}
			return self::$p_common_computer_configuration;
		}


	public static function get_common_config_group()
		{
		if (is_null(self::$p_common_config_group))
			{
				self::$p_common_config_group = self::create_instance("config_group");
			}
			return self::$p_common_config_group;
		}


	public static function get_common_config_group_item()
		{
		if (is_null(self::$p_common_config_group_item))
			{
				self::$p_common_config_group_item = self::create_instance("config_group_item");
			}
			return self::$p_common_config_group_item;
		}


	public static function get_common_config_item_access_group()
		{
		if (is_null(self::$p_common_config_item_access_group))
			{
				self::$p_common_config_item_access_group = self::create_instance("config_item_access_group");
			}
			return self::$p_common_config_item_access_group;
		}


	public static function get_common_configuration()
		{
		if (is_null(self::$p_common_configuration))
			{
				self::$p_common_configuration = self::create_instance("configuration");
			}
			return self::$p_common_configuration;
		}


	public static function get_common_contract()
		{
		if (is_null(self::$p_common_contract))
			{
				self::$p_common_contract = self::create_instance("contract");
			}
			return self::$p_common_contract;
		}


	public static function get_common_contract_plan()
		{
		if (is_null(self::$p_common_contract_plan))
			{
				self::$p_common_contract_plan = self::create_instance("contract_plan");
			}
			return self::$p_common_contract_plan;
		}


	public static function get_common_contract_pos()
		{
		if (is_null(self::$p_common_contract_pos))
			{
				self::$p_common_contract_pos = self::create_instance("contract_pos");
			}
			return self::$p_common_contract_pos;
		}


	public static function get_common_contract_template()
		{
		if (is_null(self::$p_common_contract_template))
			{
				self::$p_common_contract_template = self::create_instance("contract_template");
			}
			return self::$p_common_contract_template;
		}


	public static function get_common_contract_template_group()
		{
		if (is_null(self::$p_common_contract_template_group))
			{
				self::$p_common_contract_template_group = self::create_instance("contract_template_group");
			}
			return self::$p_common_contract_template_group;
		}


	public static function get_common_contract_template_item()
		{
		if (is_null(self::$p_common_contract_template_item))
			{
				self::$p_common_contract_template_item = self::create_instance("contract_template_item");
			}
			return self::$p_common_contract_template_item;
		}


	public static function get_common_contract_template_onetimepayment()
		{
		if (is_null(self::$p_common_contract_template_onetimepayment))
			{
				self::$p_common_contract_template_onetimepayment = self::create_instance("contract_template_onetimepayment");
			}
			return self::$p_common_contract_template_onetimepayment;
		}


	public static function get_common_contract_template_pos()
		{
		if (is_null(self::$p_common_contract_template_pos))
			{
				self::$p_common_contract_template_pos = self::create_instance("contract_template_pos");
			}
			return self::$p_common_contract_template_pos;
		}


	public static function get_common_control()
		{
		if (is_null(self::$p_common_control))
			{
				self::$p_common_control = self::create_instance("control");
			}
			return self::$p_common_control;
		}


	public static function get_common_control_control_group()
		{
		if (is_null(self::$p_common_control_control_group))
			{
				self::$p_common_control_control_group = self::create_instance("control_control_group");
			}
			return self::$p_common_control_control_group;
		}


	public static function get_common_control_group()
		{
		if (is_null(self::$p_common_control_group))
			{
				self::$p_common_control_group = self::create_instance("control_group");
			}
			return self::$p_common_control_group;
		}


	public static function get_common_country()
		{
		if (is_null(self::$p_common_country))
			{
				self::$p_common_country = self::create_instance("country");
			}
			return self::$p_common_country;
		}


	public static function get_common_data_change()
		{
		if (is_null(self::$p_common_data_change))
			{
				self::$p_common_data_change = self::create_instance("data_change");
			}
			return self::$p_common_data_change;
		}


	public static function get_common_data_help()
		{
		if (is_null(self::$p_common_data_help))
			{
				self::$p_common_data_help = self::create_instance("data_help");
			}
			return self::$p_common_data_help;
		}


	public static function get_common_data_location()
		{
		if (is_null(self::$p_common_data_location))
			{
				self::$p_common_data_location = self::create_instance("data_location");
			}
			return self::$p_common_data_location;
		}


	public static function get_common_data_posting()
		{
		if (is_null(self::$p_common_data_posting))
			{
				self::$p_common_data_posting = self::create_instance("data_posting");
			}
			return self::$p_common_data_posting;
		}


	public static function get_common_data_property()
		{
		if (is_null(self::$p_common_data_property))
			{
				self::$p_common_data_property = self::create_instance("data_property");
			}
			return self::$p_common_data_property;
		}


	public static function get_common_data_property_type()
		{
		if (is_null(self::$p_common_data_property_type))
			{
				self::$p_common_data_property_type = self::create_instance("data_property_type");
			}
			return self::$p_common_data_property_type;
		}


	public static function get_common_data_property_type_val()
		{
		if (is_null(self::$p_common_data_property_type_val))
			{
				self::$p_common_data_property_type_val = self::create_instance("data_property_type_val");
			}
			return self::$p_common_data_property_type_val;
		}


	public static function get_common_data_relation()
		{
		if (is_null(self::$p_common_data_relation))
			{
				self::$p_common_data_relation = self::create_instance("data_relation");
			}
			return self::$p_common_data_relation;
		}


	public static function get_common_data_relation_type()
		{
		if (is_null(self::$p_common_data_relation_type))
			{
				self::$p_common_data_relation_type = self::create_instance("data_relation_type");
			}
			return self::$p_common_data_relation_type;
		}


	public static function get_common_data_relation_types_val()
		{
		if (is_null(self::$p_common_data_relation_types_val))
			{
				self::$p_common_data_relation_types_val = self::create_instance("data_relation_types_val");
			}
			return self::$p_common_data_relation_types_val;
		}


	public static function get_common_data_translation()
		{
		if (is_null(self::$p_common_data_translation))
			{
				self::$p_common_data_translation = self::create_instance("data_translation");
			}
			return self::$p_common_data_translation;
		}


	public static function get_common_data_view()
		{
		if (is_null(self::$p_common_data_view))
			{
				self::$p_common_data_view = self::create_instance("data_view");
			}
			return self::$p_common_data_view;
		}


	public static function get_common_data_view_field()
		{
		if (is_null(self::$p_common_data_view_field))
			{
				self::$p_common_data_view_field = self::create_instance("data_view_field");
			}
			return self::$p_common_data_view_field;
		}


	public static function get_common_data_view_restriction()
		{
		if (is_null(self::$p_common_data_view_restriction))
			{
				self::$p_common_data_view_restriction = self::create_instance("data_view_restriction");
			}
			return self::$p_common_data_view_restriction;
		}


	public static function get_common_data_view_table()
		{
		if (is_null(self::$p_common_data_view_table))
			{
				self::$p_common_data_view_table = self::create_instance("data_view_table");
			}
			return self::$p_common_data_view_table;
		}


	public static function get_common_desease()
		{
		if (is_null(self::$p_common_desease))
			{
				self::$p_common_desease = self::create_instance("desease");
			}
			return self::$p_common_desease;
		}


	public static function get_common_device()
		{
		if (is_null(self::$p_common_device))
			{
				self::$p_common_device = self::create_instance("device");
			}
			return self::$p_common_device;
		}


	public static function get_common_device_offer()
		{
		if (is_null(self::$p_common_device_offer))
			{
				self::$p_common_device_offer = self::create_instance("device_offer");
			}
			return self::$p_common_device_offer;
		}


	public static function get_common_dms()
		{
		if (is_null(self::$p_common_dms))
			{
				self::$p_common_dms = self::create_instance("dms");
			}
			return self::$p_common_dms;
		}


	public static function get_common_dms_document_type()
		{
		if (is_null(self::$p_common_dms_document_type))
			{
				self::$p_common_dms_document_type = self::create_instance("dms_document_type");
			}
			return self::$p_common_dms_document_type;
		}


	public static function get_common_dms_type()
		{
		if (is_null(self::$p_common_dms_type))
			{
				self::$p_common_dms_type = self::create_instance("dms_type");
			}
			return self::$p_common_dms_type;
		}


	public static function get_common_drupal_actions()
		{
		if (is_null(self::$p_common_drupal_actions))
			{
				self::$p_common_drupal_actions = self::create_instance("drupal_actions");
			}
			return self::$p_common_drupal_actions;
		}


	public static function get_common_drupal_authmap()
		{
		if (is_null(self::$p_common_drupal_authmap))
			{
				self::$p_common_drupal_authmap = self::create_instance("drupal_authmap");
			}
			return self::$p_common_drupal_authmap;
		}


	public static function get_common_drupal_batch()
		{
		if (is_null(self::$p_common_drupal_batch))
			{
				self::$p_common_drupal_batch = self::create_instance("drupal_batch");
			}
			return self::$p_common_drupal_batch;
		}


	public static function get_common_drupal_block()
		{
		if (is_null(self::$p_common_drupal_block))
			{
				self::$p_common_drupal_block = self::create_instance("drupal_block");
			}
			return self::$p_common_drupal_block;
		}


	public static function get_common_drupal_block_custom()
		{
		if (is_null(self::$p_common_drupal_block_custom))
			{
				self::$p_common_drupal_block_custom = self::create_instance("drupal_block_custom");
			}
			return self::$p_common_drupal_block_custom;
		}


	public static function get_common_drupal_block_node_type()
		{
		if (is_null(self::$p_common_drupal_block_node_type))
			{
				self::$p_common_drupal_block_node_type = self::create_instance("drupal_block_node_type");
			}
			return self::$p_common_drupal_block_node_type;
		}


	public static function get_common_drupal_block_role()
		{
		if (is_null(self::$p_common_drupal_block_role))
			{
				self::$p_common_drupal_block_role = self::create_instance("drupal_block_role");
			}
			return self::$p_common_drupal_block_role;
		}


	public static function get_common_drupal_blocked_ips()
		{
		if (is_null(self::$p_common_drupal_blocked_ips))
			{
				self::$p_common_drupal_blocked_ips = self::create_instance("drupal_blocked_ips");
			}
			return self::$p_common_drupal_blocked_ips;
		}


	public static function get_common_drupal_cache()
		{
		if (is_null(self::$p_common_drupal_cache))
			{
				self::$p_common_drupal_cache = self::create_instance("drupal_cache");
			}
			return self::$p_common_drupal_cache;
		}


	public static function get_common_drupal_cache_block()
		{
		if (is_null(self::$p_common_drupal_cache_block))
			{
				self::$p_common_drupal_cache_block = self::create_instance("drupal_cache_block");
			}
			return self::$p_common_drupal_cache_block;
		}


	public static function get_common_drupal_cache_bootstrap()
		{
		if (is_null(self::$p_common_drupal_cache_bootstrap))
			{
				self::$p_common_drupal_cache_bootstrap = self::create_instance("drupal_cache_bootstrap");
			}
			return self::$p_common_drupal_cache_bootstrap;
		}


	public static function get_common_drupal_cache_field()
		{
		if (is_null(self::$p_common_drupal_cache_field))
			{
				self::$p_common_drupal_cache_field = self::create_instance("drupal_cache_field");
			}
			return self::$p_common_drupal_cache_field;
		}


	public static function get_common_drupal_cache_filter()
		{
		if (is_null(self::$p_common_drupal_cache_filter))
			{
				self::$p_common_drupal_cache_filter = self::create_instance("drupal_cache_filter");
			}
			return self::$p_common_drupal_cache_filter;
		}


	public static function get_common_drupal_cache_form()
		{
		if (is_null(self::$p_common_drupal_cache_form))
			{
				self::$p_common_drupal_cache_form = self::create_instance("drupal_cache_form");
			}
			return self::$p_common_drupal_cache_form;
		}


	public static function get_common_drupal_cache_image()
		{
		if (is_null(self::$p_common_drupal_cache_image))
			{
				self::$p_common_drupal_cache_image = self::create_instance("drupal_cache_image");
			}
			return self::$p_common_drupal_cache_image;
		}


	public static function get_common_drupal_cache_menu()
		{
		if (is_null(self::$p_common_drupal_cache_menu))
			{
				self::$p_common_drupal_cache_menu = self::create_instance("drupal_cache_menu");
			}
			return self::$p_common_drupal_cache_menu;
		}


	public static function get_common_drupal_cache_page()
		{
		if (is_null(self::$p_common_drupal_cache_page))
			{
				self::$p_common_drupal_cache_page = self::create_instance("drupal_cache_page");
			}
			return self::$p_common_drupal_cache_page;
		}


	public static function get_common_drupal_cache_path()
		{
		if (is_null(self::$p_common_drupal_cache_path))
			{
				self::$p_common_drupal_cache_path = self::create_instance("drupal_cache_path");
			}
			return self::$p_common_drupal_cache_path;
		}


	public static function get_common_drupal_cache_update()
		{
		if (is_null(self::$p_common_drupal_cache_update))
			{
				self::$p_common_drupal_cache_update = self::create_instance("drupal_cache_update");
			}
			return self::$p_common_drupal_cache_update;
		}


	public static function get_common_drupal_comment()
		{
		if (is_null(self::$p_common_drupal_comment))
			{
				self::$p_common_drupal_comment = self::create_instance("drupal_comment");
			}
			return self::$p_common_drupal_comment;
		}


	public static function get_common_drupal_date_format_locale()
		{
		if (is_null(self::$p_common_drupal_date_format_locale))
			{
				self::$p_common_drupal_date_format_locale = self::create_instance("drupal_date_format_locale");
			}
			return self::$p_common_drupal_date_format_locale;
		}


	public static function get_common_drupal_date_format_type()
		{
		if (is_null(self::$p_common_drupal_date_format_type))
			{
				self::$p_common_drupal_date_format_type = self::create_instance("drupal_date_format_type");
			}
			return self::$p_common_drupal_date_format_type;
		}


	public static function get_common_drupal_date_formats()
		{
		if (is_null(self::$p_common_drupal_date_formats))
			{
				self::$p_common_drupal_date_formats = self::create_instance("drupal_date_formats");
			}
			return self::$p_common_drupal_date_formats;
		}


	public static function get_common_drupal_field_config()
		{
		if (is_null(self::$p_common_drupal_field_config))
			{
				self::$p_common_drupal_field_config = self::create_instance("drupal_field_config");
			}
			return self::$p_common_drupal_field_config;
		}


	public static function get_common_drupal_field_config_instance()
		{
		if (is_null(self::$p_common_drupal_field_config_instance))
			{
				self::$p_common_drupal_field_config_instance = self::create_instance("drupal_field_config_instance");
			}
			return self::$p_common_drupal_field_config_instance;
		}


	public static function get_common_drupal_field_data_body()
		{
		if (is_null(self::$p_common_drupal_field_data_body))
			{
				self::$p_common_drupal_field_data_body = self::create_instance("drupal_field_data_body");
			}
			return self::$p_common_drupal_field_data_body;
		}


	public static function get_common_drupal_field_data_comment_body()
		{
		if (is_null(self::$p_common_drupal_field_data_comment_body))
			{
				self::$p_common_drupal_field_data_comment_body = self::create_instance("drupal_field_data_comment_body");
			}
			return self::$p_common_drupal_field_data_comment_body;
		}


	public static function get_common_drupal_field_data_field_first_name()
		{
		if (is_null(self::$p_common_drupal_field_data_field_first_name))
			{
				self::$p_common_drupal_field_data_field_first_name = self::create_instance("drupal_field_data_field_first_name");
			}
			return self::$p_common_drupal_field_data_field_first_name;
		}


	public static function get_common_drupal_field_data_field_image()
		{
		if (is_null(self::$p_common_drupal_field_data_field_image))
			{
				self::$p_common_drupal_field_data_field_image = self::create_instance("drupal_field_data_field_image");
			}
			return self::$p_common_drupal_field_data_field_image;
		}


	public static function get_common_drupal_field_data_field_tags()
		{
		if (is_null(self::$p_common_drupal_field_data_field_tags))
			{
				self::$p_common_drupal_field_data_field_tags = self::create_instance("drupal_field_data_field_tags");
			}
			return self::$p_common_drupal_field_data_field_tags;
		}


	public static function get_common_drupal_field_revision_body()
		{
		if (is_null(self::$p_common_drupal_field_revision_body))
			{
				self::$p_common_drupal_field_revision_body = self::create_instance("drupal_field_revision_body");
			}
			return self::$p_common_drupal_field_revision_body;
		}


	public static function get_common_drupal_field_revision_comment_body()
		{
		if (is_null(self::$p_common_drupal_field_revision_comment_body))
			{
				self::$p_common_drupal_field_revision_comment_body = self::create_instance("drupal_field_revision_comment_body");
			}
			return self::$p_common_drupal_field_revision_comment_body;
		}


	public static function get_common_drupal_field_revision_field_first_name()
		{
		if (is_null(self::$p_common_drupal_field_revision_field_first_name))
			{
				self::$p_common_drupal_field_revision_field_first_name = self::create_instance("drupal_field_revision_field_first_name");
			}
			return self::$p_common_drupal_field_revision_field_first_name;
		}


	public static function get_common_drupal_field_revision_field_image()
		{
		if (is_null(self::$p_common_drupal_field_revision_field_image))
			{
				self::$p_common_drupal_field_revision_field_image = self::create_instance("drupal_field_revision_field_image");
			}
			return self::$p_common_drupal_field_revision_field_image;
		}


	public static function get_common_drupal_field_revision_field_tags()
		{
		if (is_null(self::$p_common_drupal_field_revision_field_tags))
			{
				self::$p_common_drupal_field_revision_field_tags = self::create_instance("drupal_field_revision_field_tags");
			}
			return self::$p_common_drupal_field_revision_field_tags;
		}


	public static function get_common_drupal_file_managed()
		{
		if (is_null(self::$p_common_drupal_file_managed))
			{
				self::$p_common_drupal_file_managed = self::create_instance("drupal_file_managed");
			}
			return self::$p_common_drupal_file_managed;
		}


	public static function get_common_drupal_file_usage()
		{
		if (is_null(self::$p_common_drupal_file_usage))
			{
				self::$p_common_drupal_file_usage = self::create_instance("drupal_file_usage");
			}
			return self::$p_common_drupal_file_usage;
		}


	public static function get_common_drupal_filter()
		{
		if (is_null(self::$p_common_drupal_filter))
			{
				self::$p_common_drupal_filter = self::create_instance("drupal_filter");
			}
			return self::$p_common_drupal_filter;
		}


	public static function get_common_drupal_filter_format()
		{
		if (is_null(self::$p_common_drupal_filter_format))
			{
				self::$p_common_drupal_filter_format = self::create_instance("drupal_filter_format");
			}
			return self::$p_common_drupal_filter_format;
		}


	public static function get_common_drupal_flood()
		{
		if (is_null(self::$p_common_drupal_flood))
			{
				self::$p_common_drupal_flood = self::create_instance("drupal_flood");
			}
			return self::$p_common_drupal_flood;
		}


	public static function get_common_drupal_history()
		{
		if (is_null(self::$p_common_drupal_history))
			{
				self::$p_common_drupal_history = self::create_instance("drupal_history");
			}
			return self::$p_common_drupal_history;
		}


	public static function get_common_drupal_image_effects()
		{
		if (is_null(self::$p_common_drupal_image_effects))
			{
				self::$p_common_drupal_image_effects = self::create_instance("drupal_image_effects");
			}
			return self::$p_common_drupal_image_effects;
		}


	public static function get_common_drupal_image_styles()
		{
		if (is_null(self::$p_common_drupal_image_styles))
			{
				self::$p_common_drupal_image_styles = self::create_instance("drupal_image_styles");
			}
			return self::$p_common_drupal_image_styles;
		}


	public static function get_common_drupal_languages()
		{
		if (is_null(self::$p_common_drupal_languages))
			{
				self::$p_common_drupal_languages = self::create_instance("drupal_languages");
			}
			return self::$p_common_drupal_languages;
		}


	public static function get_common_drupal_locales_source()
		{
		if (is_null(self::$p_common_drupal_locales_source))
			{
				self::$p_common_drupal_locales_source = self::create_instance("drupal_locales_source");
			}
			return self::$p_common_drupal_locales_source;
		}


	public static function get_common_drupal_locales_target()
		{
		if (is_null(self::$p_common_drupal_locales_target))
			{
				self::$p_common_drupal_locales_target = self::create_instance("drupal_locales_target");
			}
			return self::$p_common_drupal_locales_target;
		}


	public static function get_common_drupal_menu_custom()
		{
		if (is_null(self::$p_common_drupal_menu_custom))
			{
				self::$p_common_drupal_menu_custom = self::create_instance("drupal_menu_custom");
			}
			return self::$p_common_drupal_menu_custom;
		}


	public static function get_common_drupal_menu_links()
		{
		if (is_null(self::$p_common_drupal_menu_links))
			{
				self::$p_common_drupal_menu_links = self::create_instance("drupal_menu_links");
			}
			return self::$p_common_drupal_menu_links;
		}


	public static function get_common_drupal_menu_router()
		{
		if (is_null(self::$p_common_drupal_menu_router))
			{
				self::$p_common_drupal_menu_router = self::create_instance("drupal_menu_router");
			}
			return self::$p_common_drupal_menu_router;
		}


	public static function get_common_drupal_node()
		{
		if (is_null(self::$p_common_drupal_node))
			{
				self::$p_common_drupal_node = self::create_instance("drupal_node");
			}
			return self::$p_common_drupal_node;
		}


	public static function get_common_drupal_node_access()
		{
		if (is_null(self::$p_common_drupal_node_access))
			{
				self::$p_common_drupal_node_access = self::create_instance("drupal_node_access");
			}
			return self::$p_common_drupal_node_access;
		}


	public static function get_common_drupal_node_comment_statistics()
		{
		if (is_null(self::$p_common_drupal_node_comment_statistics))
			{
				self::$p_common_drupal_node_comment_statistics = self::create_instance("drupal_node_comment_statistics");
			}
			return self::$p_common_drupal_node_comment_statistics;
		}


	public static function get_common_drupal_node_revision()
		{
		if (is_null(self::$p_common_drupal_node_revision))
			{
				self::$p_common_drupal_node_revision = self::create_instance("drupal_node_revision");
			}
			return self::$p_common_drupal_node_revision;
		}


	public static function get_common_drupal_node_type()
		{
		if (is_null(self::$p_common_drupal_node_type))
			{
				self::$p_common_drupal_node_type = self::create_instance("drupal_node_type");
			}
			return self::$p_common_drupal_node_type;
		}


	public static function get_common_drupal_person()
		{
		if (is_null(self::$p_common_drupal_person))
			{
				self::$p_common_drupal_person = self::create_instance("drupal_person");
			}
			return self::$p_common_drupal_person;
		}


	public static function get_common_drupal_profile()
		{
		if (is_null(self::$p_common_drupal_profile))
			{
				self::$p_common_drupal_profile = self::create_instance("drupal_profile");
			}
			return self::$p_common_drupal_profile;
		}


	public static function get_common_drupal_profile_type()
		{
		if (is_null(self::$p_common_drupal_profile_type))
			{
				self::$p_common_drupal_profile_type = self::create_instance("drupal_profile_type");
			}
			return self::$p_common_drupal_profile_type;
		}


	public static function get_common_drupal_queue()
		{
		if (is_null(self::$p_common_drupal_queue))
			{
				self::$p_common_drupal_queue = self::create_instance("drupal_queue");
			}
			return self::$p_common_drupal_queue;
		}


	public static function get_common_drupal_rdf_mapping()
		{
		if (is_null(self::$p_common_drupal_rdf_mapping))
			{
				self::$p_common_drupal_rdf_mapping = self::create_instance("drupal_rdf_mapping");
			}
			return self::$p_common_drupal_rdf_mapping;
		}


	public static function get_common_drupal_registry()
		{
		if (is_null(self::$p_common_drupal_registry))
			{
				self::$p_common_drupal_registry = self::create_instance("drupal_registry");
			}
			return self::$p_common_drupal_registry;
		}


	public static function get_common_drupal_registry_file()
		{
		if (is_null(self::$p_common_drupal_registry_file))
			{
				self::$p_common_drupal_registry_file = self::create_instance("drupal_registry_file");
			}
			return self::$p_common_drupal_registry_file;
		}


	public static function get_common_drupal_role()
		{
		if (is_null(self::$p_common_drupal_role))
			{
				self::$p_common_drupal_role = self::create_instance("drupal_role");
			}
			return self::$p_common_drupal_role;
		}


	public static function get_common_drupal_role_permission()
		{
		if (is_null(self::$p_common_drupal_role_permission))
			{
				self::$p_common_drupal_role_permission = self::create_instance("drupal_role_permission");
			}
			return self::$p_common_drupal_role_permission;
		}


	public static function get_common_drupal_search_dataset()
		{
		if (is_null(self::$p_common_drupal_search_dataset))
			{
				self::$p_common_drupal_search_dataset = self::create_instance("drupal_search_dataset");
			}
			return self::$p_common_drupal_search_dataset;
		}


	public static function get_common_drupal_search_index()
		{
		if (is_null(self::$p_common_drupal_search_index))
			{
				self::$p_common_drupal_search_index = self::create_instance("drupal_search_index");
			}
			return self::$p_common_drupal_search_index;
		}


	public static function get_common_drupal_search_node_links()
		{
		if (is_null(self::$p_common_drupal_search_node_links))
			{
				self::$p_common_drupal_search_node_links = self::create_instance("drupal_search_node_links");
			}
			return self::$p_common_drupal_search_node_links;
		}


	public static function get_common_drupal_search_total()
		{
		if (is_null(self::$p_common_drupal_search_total))
			{
				self::$p_common_drupal_search_total = self::create_instance("drupal_search_total");
			}
			return self::$p_common_drupal_search_total;
		}


	public static function get_common_drupal_semaphore()
		{
		if (is_null(self::$p_common_drupal_semaphore))
			{
				self::$p_common_drupal_semaphore = self::create_instance("drupal_semaphore");
			}
			return self::$p_common_drupal_semaphore;
		}


	public static function get_common_drupal_sequences()
		{
		if (is_null(self::$p_common_drupal_sequences))
			{
				self::$p_common_drupal_sequences = self::create_instance("drupal_sequences");
			}
			return self::$p_common_drupal_sequences;
		}


	public static function get_common_drupal_sessions()
		{
		if (is_null(self::$p_common_drupal_sessions))
			{
				self::$p_common_drupal_sessions = self::create_instance("drupal_sessions");
			}
			return self::$p_common_drupal_sessions;
		}


	public static function get_common_drupal_shortcut_set()
		{
		if (is_null(self::$p_common_drupal_shortcut_set))
			{
				self::$p_common_drupal_shortcut_set = self::create_instance("drupal_shortcut_set");
			}
			return self::$p_common_drupal_shortcut_set;
		}


	public static function get_common_drupal_shortcut_set_users()
		{
		if (is_null(self::$p_common_drupal_shortcut_set_users))
			{
				self::$p_common_drupal_shortcut_set_users = self::create_instance("drupal_shortcut_set_users");
			}
			return self::$p_common_drupal_shortcut_set_users;
		}


	public static function get_common_drupal_system()
		{
		if (is_null(self::$p_common_drupal_system))
			{
				self::$p_common_drupal_system = self::create_instance("drupal_system");
			}
			return self::$p_common_drupal_system;
		}


	public static function get_common_drupal_taxonomy_index()
		{
		if (is_null(self::$p_common_drupal_taxonomy_index))
			{
				self::$p_common_drupal_taxonomy_index = self::create_instance("drupal_taxonomy_index");
			}
			return self::$p_common_drupal_taxonomy_index;
		}


	public static function get_common_drupal_taxonomy_term_data()
		{
		if (is_null(self::$p_common_drupal_taxonomy_term_data))
			{
				self::$p_common_drupal_taxonomy_term_data = self::create_instance("drupal_taxonomy_term_data");
			}
			return self::$p_common_drupal_taxonomy_term_data;
		}


	public static function get_common_drupal_taxonomy_term_hierarchy()
		{
		if (is_null(self::$p_common_drupal_taxonomy_term_hierarchy))
			{
				self::$p_common_drupal_taxonomy_term_hierarchy = self::create_instance("drupal_taxonomy_term_hierarchy");
			}
			return self::$p_common_drupal_taxonomy_term_hierarchy;
		}


	public static function get_common_drupal_taxonomy_vocabulary()
		{
		if (is_null(self::$p_common_drupal_taxonomy_vocabulary))
			{
				self::$p_common_drupal_taxonomy_vocabulary = self::create_instance("drupal_taxonomy_vocabulary");
			}
			return self::$p_common_drupal_taxonomy_vocabulary;
		}


	public static function get_common_drupal_url_alias()
		{
		if (is_null(self::$p_common_drupal_url_alias))
			{
				self::$p_common_drupal_url_alias = self::create_instance("drupal_url_alias");
			}
			return self::$p_common_drupal_url_alias;
		}


	public static function get_common_drupal_users()
		{
		if (is_null(self::$p_common_drupal_users))
			{
				self::$p_common_drupal_users = self::create_instance("drupal_users");
			}
			return self::$p_common_drupal_users;
		}


	public static function get_common_drupal_users_roles()
		{
		if (is_null(self::$p_common_drupal_users_roles))
			{
				self::$p_common_drupal_users_roles = self::create_instance("drupal_users_roles");
			}
			return self::$p_common_drupal_users_roles;
		}


	public static function get_common_drupal_variable()
		{
		if (is_null(self::$p_common_drupal_variable))
			{
				self::$p_common_drupal_variable = self::create_instance("drupal_variable");
			}
			return self::$p_common_drupal_variable;
		}


	public static function get_common_drupal_watchdog()
		{
		if (is_null(self::$p_common_drupal_watchdog))
			{
				self::$p_common_drupal_watchdog = self::create_instance("drupal_watchdog");
			}
			return self::$p_common_drupal_watchdog;
		}


	public static function get_common_event_type()
		{
		if (is_null(self::$p_common_event_type))
			{
				self::$p_common_event_type = self::create_instance("event_type");
			}
			return self::$p_common_event_type;
		}


	public static function get_common_fixed_asset()
		{
		if (is_null(self::$p_common_fixed_asset))
			{
				self::$p_common_fixed_asset = self::create_instance("fixed_asset");
			}
			return self::$p_common_fixed_asset;
		}


	public static function get_common_fixed_asset_group()
		{
		if (is_null(self::$p_common_fixed_asset_group))
			{
				self::$p_common_fixed_asset_group = self::create_instance("fixed_asset_group");
			}
			return self::$p_common_fixed_asset_group;
		}


	public static function get_common_fixed_asset_group_account()
		{
		if (is_null(self::$p_common_fixed_asset_group_account))
			{
				self::$p_common_fixed_asset_group_account = self::create_instance("fixed_asset_group_account");
			}
			return self::$p_common_fixed_asset_group_account;
		}


	public static function get_common_geodb_changelog()
		{
		if (is_null(self::$p_common_geodb_changelog))
			{
				self::$p_common_geodb_changelog = self::create_instance("geodb_changelog");
			}
			return self::$p_common_geodb_changelog;
		}


	public static function get_common_geodb_coordinates()
		{
		if (is_null(self::$p_common_geodb_coordinates))
			{
				self::$p_common_geodb_coordinates = self::create_instance("geodb_coordinates");
			}
			return self::$p_common_geodb_coordinates;
		}


	public static function get_common_geodb_floatdata()
		{
		if (is_null(self::$p_common_geodb_floatdata))
			{
				self::$p_common_geodb_floatdata = self::create_instance("geodb_floatdata");
			}
			return self::$p_common_geodb_floatdata;
		}


	public static function get_common_geodb_intdata()
		{
		if (is_null(self::$p_common_geodb_intdata))
			{
				self::$p_common_geodb_intdata = self::create_instance("geodb_intdata");
			}
			return self::$p_common_geodb_intdata;
		}


	public static function get_common_geodb_locations()
		{
		if (is_null(self::$p_common_geodb_locations))
			{
				self::$p_common_geodb_locations = self::create_instance("geodb_locations");
			}
			return self::$p_common_geodb_locations;
		}


	public static function get_common_geodb_textdata()
		{
		if (is_null(self::$p_common_geodb_textdata))
			{
				self::$p_common_geodb_textdata = self::create_instance("geodb_textdata");
			}
			return self::$p_common_geodb_textdata;
		}


	public static function get_common_geodb_type_names()
		{
		if (is_null(self::$p_common_geodb_type_names))
			{
				self::$p_common_geodb_type_names = self::create_instance("geodb_type_names");
			}
			return self::$p_common_geodb_type_names;
		}


	public static function get_common_insurance()
		{
		if (is_null(self::$p_common_insurance))
			{
				self::$p_common_insurance = self::create_instance("insurance");
			}
			return self::$p_common_insurance;
		}


	public static function get_common_insurance_district()
		{
		if (is_null(self::$p_common_insurance_district))
			{
				self::$p_common_insurance_district = self::create_instance("insurance_district");
			}
			return self::$p_common_insurance_district;
		}


	public static function get_common_insurance_group()
		{
		if (is_null(self::$p_common_insurance_group))
			{
				self::$p_common_insurance_group = self::create_instance("insurance_group");
			}
			return self::$p_common_insurance_group;
		}


	public static function get_common_insurance_price()
		{
		if (is_null(self::$p_common_insurance_price))
			{
				self::$p_common_insurance_price = self::create_instance("insurance_price");
			}
			return self::$p_common_insurance_price;
		}


	public static function get_common_invoice()
		{
		if (is_null(self::$p_common_invoice))
			{
				self::$p_common_invoice = self::create_instance("invoice");
			}
			return self::$p_common_invoice;
		}


	public static function get_common_invoice_item()
		{
		if (is_null(self::$p_common_invoice_item))
			{
				self::$p_common_invoice_item = self::create_instance("invoice_item");
			}
			return self::$p_common_invoice_item;
		}


	public static function get_common_location()
		{
		if (is_null(self::$p_common_location))
			{
				self::$p_common_location = self::create_instance("location");
			}
			return self::$p_common_location;
		}


	public static function get_common_location_independent_table()
		{
		if (is_null(self::$p_common_location_independent_table))
			{
				self::$p_common_location_independent_table = self::create_instance("location_independent_table");
			}
			return self::$p_common_location_independent_table;
		}


	public static function get_common_logon()
		{
		if (is_null(self::$p_common_logon))
			{
				self::$p_common_logon = self::create_instance("logon");
			}
			return self::$p_common_logon;
		}


	public static function get_common_main_page()
		{
		if (is_null(self::$p_common_main_page))
			{
				self::$p_common_main_page = self::create_instance("main_page");
			}
			return self::$p_common_main_page;
		}


	public static function get_common_main_page_template()
		{
		if (is_null(self::$p_common_main_page_template))
			{
				self::$p_common_main_page_template = self::create_instance("main_page_template");
			}
			return self::$p_common_main_page_template;
		}


	public static function get_common_menu()
		{
		if (is_null(self::$p_common_menu))
			{
				self::$p_common_menu = self::create_instance("menu");
			}
			return self::$p_common_menu;
		}


	public static function get_common_menu_access_group()
		{
		if (is_null(self::$p_common_menu_access_group))
			{
				self::$p_common_menu_access_group = self::create_instance("menu_access_group");
			}
			return self::$p_common_menu_access_group;
		}


	public static function get_common_menu_group()
		{
		if (is_null(self::$p_common_menu_group))
			{
				self::$p_common_menu_group = self::create_instance("menu_group");
			}
			return self::$p_common_menu_group;
		}


	public static function get_common_menu_item()
		{
		if (is_null(self::$p_common_menu_item))
			{
				self::$p_common_menu_item = self::create_instance("menu_item");
			}
			return self::$p_common_menu_item;
		}


	public static function get_common_menu_template()
		{
		if (is_null(self::$p_common_menu_template))
			{
				self::$p_common_menu_template = self::create_instance("menu_template");
			}
			return self::$p_common_menu_template;
		}


	public static function get_common_offer()
		{
		if (is_null(self::$p_common_offer))
			{
				self::$p_common_offer = self::create_instance("offer");
			}
			return self::$p_common_offer;
		}


	public static function get_common_offer_event()
		{
		if (is_null(self::$p_common_offer_event))
			{
				self::$p_common_offer_event = self::create_instance("offer_event");
			}
			return self::$p_common_offer_event;
		}


	public static function get_common_offer_time()
		{
		if (is_null(self::$p_common_offer_time))
			{
				self::$p_common_offer_time = self::create_instance("offer_time");
			}
			return self::$p_common_offer_time;
		}


	public static function get_common_offer_type()
		{
		if (is_null(self::$p_common_offer_type))
			{
				self::$p_common_offer_type = self::create_instance("offer_type");
			}
			return self::$p_common_offer_type;
		}


	public static function get_common_onetime_payment()
		{
		if (is_null(self::$p_common_onetime_payment))
			{
				self::$p_common_onetime_payment = self::create_instance("onetime_payment");
			}
			return self::$p_common_onetime_payment;
		}


	public static function get_common_person()
		{
		if (is_null(self::$p_common_person))
			{
				self::$p_common_person = self::create_instance("person");
			}
			return self::$p_common_person;
		}


	public static function get_common_person_access_group()
		{
		if (is_null(self::$p_common_person_access_group))
			{
				self::$p_common_person_access_group = self::create_instance("person_access_group");
			}
			return self::$p_common_person_access_group;
		}


	public static function get_common_person_account()
		{
		if (is_null(self::$p_common_person_account))
			{
				self::$p_common_person_account = self::create_instance("person_account");
			}
			return self::$p_common_person_account;
		}


	public static function get_common_person_article_renting()
		{
		if (is_null(self::$p_common_person_article_renting))
			{
				self::$p_common_person_article_renting = self::create_instance("person_article_renting");
			}
			return self::$p_common_person_article_renting;
		}


	public static function get_common_person_desease()
		{
		if (is_null(self::$p_common_person_desease))
			{
				self::$p_common_person_desease = self::create_instance("person_desease");
			}
			return self::$p_common_person_desease;
		}


	public static function get_common_person_search_values()
		{
		if (is_null(self::$p_common_person_search_values))
			{
				self::$p_common_person_search_values = self::create_instance("person_search_values");
			}
			return self::$p_common_person_search_values;
		}


	public static function get_common_person_state()
		{
		if (is_null(self::$p_common_person_state))
			{
				self::$p_common_person_state = self::create_instance("person_state");
			}
			return self::$p_common_person_state;
		}


	public static function get_common_person_state_type()
		{
		if (is_null(self::$p_common_person_state_type))
			{
				self::$p_common_person_state_type = self::create_instance("person_state_type");
			}
			return self::$p_common_person_state_type;
		}


	public static function get_common_person_state_type_access_group()
		{
		if (is_null(self::$p_common_person_state_type_access_group))
			{
				self::$p_common_person_state_type_access_group = self::create_instance("person_state_type_access_group");
			}
			return self::$p_common_person_state_type_access_group;
		}


	public static function get_common_person_state_type_account()
		{
		if (is_null(self::$p_common_person_state_type_account))
			{
				self::$p_common_person_state_type_account = self::create_instance("person_state_type_account");
			}
			return self::$p_common_person_state_type_account;
		}


	public static function get_common_person_states_group()
		{
		if (is_null(self::$p_common_person_states_group))
			{
				self::$p_common_person_states_group = self::create_instance("person_states_group");
			}
			return self::$p_common_person_states_group;
		}


	public static function get_common_posting_header()
		{
		if (is_null(self::$p_common_posting_header))
			{
				self::$p_common_posting_header = self::create_instance("posting_header");
			}
			return self::$p_common_posting_header;
		}


	public static function get_common_posting_line()
		{
		if (is_null(self::$p_common_posting_line))
			{
				self::$p_common_posting_line = self::create_instance("posting_line");
			}
			return self::$p_common_posting_line;
		}


	public static function get_common_prescription()
		{
		if (is_null(self::$p_common_prescription))
			{
				self::$p_common_prescription = self::create_instance("prescription");
			}
			return self::$p_common_prescription;
		}


	public static function get_common_prescription_type()
		{
		if (is_null(self::$p_common_prescription_type))
			{
				self::$p_common_prescription_type = self::create_instance("prescription_type");
			}
			return self::$p_common_prescription_type;
		}


	public static function get_common_prescription_type_pos()
		{
		if (is_null(self::$p_common_prescription_type_pos))
			{
				self::$p_common_prescription_type_pos = self::create_instance("prescription_type_pos");
			}
			return self::$p_common_prescription_type_pos;
		}


	public static function get_common_restperiod()
		{
		if (is_null(self::$p_common_restperiod))
			{
				self::$p_common_restperiod = self::create_instance("restperiod");
			}
			return self::$p_common_restperiod;
		}


	public static function get_common_ribbonbar()
		{
		if (is_null(self::$p_common_ribbonbar))
			{
				self::$p_common_ribbonbar = self::create_instance("ribbonbar");
			}
			return self::$p_common_ribbonbar;
		}


	public static function get_common_ribbonbar_group()
		{
		if (is_null(self::$p_common_ribbonbar_group))
			{
				self::$p_common_ribbonbar_group = self::create_instance("ribbonbar_group");
			}
			return self::$p_common_ribbonbar_group;
		}


	public static function get_common_ribbonbar_item()
		{
		if (is_null(self::$p_common_ribbonbar_item))
			{
				self::$p_common_ribbonbar_item = self::create_instance("ribbonbar_item");
			}
			return self::$p_common_ribbonbar_item;
		}


	public static function get_common_ribbonbar_tab()
		{
		if (is_null(self::$p_common_ribbonbar_tab))
			{
				self::$p_common_ribbonbar_tab = self::create_instance("ribbonbar_tab");
			}
			return self::$p_common_ribbonbar_tab;
		}


	public static function get_common_ribbonbar_template()
		{
		if (is_null(self::$p_common_ribbonbar_template))
			{
				self::$p_common_ribbonbar_template = self::create_instance("ribbonbar_template");
			}
			return self::$p_common_ribbonbar_template;
		}


	public static function get_common_salutation()
		{
		if (is_null(self::$p_common_salutation))
			{
				self::$p_common_salutation = self::create_instance("salutation");
			}
			return self::$p_common_salutation;
		}


	public static function get_common_sport()
		{
		if (is_null(self::$p_common_sport))
			{
				self::$p_common_sport = self::create_instance("sport");
			}
			return self::$p_common_sport;
		}


	public static function get_common_standard_icon()
		{
		if (is_null(self::$p_common_standard_icon))
			{
				self::$p_common_standard_icon = self::create_instance("standard_icon");
			}
			return self::$p_common_standard_icon;
		}


	public static function get_common_supplier_data()
		{
		if (is_null(self::$p_common_supplier_data))
			{
				self::$p_common_supplier_data = self::create_instance("supplier_data");
			}
			return self::$p_common_supplier_data;
		}


	public static function get_common_supplier_price()
		{
		if (is_null(self::$p_common_supplier_price))
			{
				self::$p_common_supplier_price = self::create_instance("supplier_price");
			}
			return self::$p_common_supplier_price;
		}


	public static function get_common_swift_statement()
		{
		if (is_null(self::$p_common_swift_statement))
			{
				self::$p_common_swift_statement = self::create_instance("swift_statement");
			}
			return self::$p_common_swift_statement;
		}


	public static function get_common_swift_statement_line()
		{
		if (is_null(self::$p_common_swift_statement_line))
			{
				self::$p_common_swift_statement_line = self::create_instance("swift_statement_line");
			}
			return self::$p_common_swift_statement_line;
		}


	public static function get_common_swift_statement_line_posting()
		{
		if (is_null(self::$p_common_swift_statement_line_posting))
			{
				self::$p_common_swift_statement_line_posting = self::create_instance("swift_statement_line_posting");
			}
			return self::$p_common_swift_statement_line_posting;
		}


	public static function get_common_table_bean()
		{
		if (is_null(self::$p_common_table_bean))
			{
				self::$p_common_table_bean = self::create_instance("table_bean");
			}
			return self::$p_common_table_bean;
		}


	public static function get_common_table_bean_access_group()
		{
		if (is_null(self::$p_common_table_bean_access_group))
			{
				self::$p_common_table_bean_access_group = self::create_instance("table_bean_access_group");
			}
			return self::$p_common_table_bean_access_group;
		}


	public static function get_common_table_bean_table()
		{
		if (is_null(self::$p_common_table_bean_table))
			{
				self::$p_common_table_bean_table = self::create_instance("table_bean_table");
			}
			return self::$p_common_table_bean_table;
		}


	public static function get_common_table_column()
		{
		if (is_null(self::$p_common_table_column))
			{
				self::$p_common_table_column = self::create_instance("table_column");
			}
			return self::$p_common_table_column;
		}


	public static function get_common_table_data()
		{
		if (is_null(self::$p_common_table_data))
			{
				self::$p_common_table_data = self::create_instance("table_data");
			}
			return self::$p_common_table_data;
		}


	public static function get_common_table_lock()
		{
		if (is_null(self::$p_common_table_lock))
			{
				self::$p_common_table_lock = self::create_instance("table_lock");
			}
			return self::$p_common_table_lock;
		}


	public static function get_common_table_lookup_column()
		{
		if (is_null(self::$p_common_table_lookup_column))
			{
				self::$p_common_table_lookup_column = self::create_instance("table_lookup_column");
			}
			return self::$p_common_table_lookup_column;
		}


	public static function get_common_table_relation()
		{
		if (is_null(self::$p_common_table_relation))
			{
				self::$p_common_table_relation = self::create_instance("table_relation");
			}
			return self::$p_common_table_relation;
		}


	public static function get_common_table_search_column()
		{
		if (is_null(self::$p_common_table_search_column))
			{
				self::$p_common_table_search_column = self::create_instance("table_search_column");
			}
			return self::$p_common_table_search_column;
		}


	public static function get_common_table_search_template()
		{
		if (is_null(self::$p_common_table_search_template))
			{
				self::$p_common_table_search_template = self::create_instance("table_search_template");
			}
			return self::$p_common_table_search_template;
		}


	public static function get_common_table_security()
		{
		if (is_null(self::$p_common_table_security))
			{
				self::$p_common_table_security = self::create_instance("table_security");
			}
			return self::$p_common_table_security;
		}


	public static function get_common_table_test()
		{
		if (is_null(self::$p_common_table_test))
			{
				self::$p_common_table_test = self::create_instance("table_test");
			}
			return self::$p_common_table_test;
		}


	public static function get_common_table_test_data()
		{
		if (is_null(self::$p_common_table_test_data))
			{
				self::$p_common_table_test_data = self::create_instance("table_test_data");
			}
			return self::$p_common_table_test_data;
		}


	public static function get_common_table_test_group()
		{
		if (is_null(self::$p_common_table_test_group))
			{
				self::$p_common_table_test_group = self::create_instance("table_test_group");
			}
			return self::$p_common_table_test_group;
		}


	public static function get_common_table_test_group_table()
		{
		if (is_null(self::$p_common_table_test_group_table))
			{
				self::$p_common_table_test_group_table = self::create_instance("table_test_group_table");
			}
			return self::$p_common_table_test_group_table;
		}


	public static function get_common_table_test_item()
		{
		if (is_null(self::$p_common_table_test_item))
			{
				self::$p_common_table_test_item = self::create_instance("table_test_item");
			}
			return self::$p_common_table_test_item;
		}


	public static function get_common_table_test_result()
		{
		if (is_null(self::$p_common_table_test_result))
			{
				self::$p_common_table_test_result = self::create_instance("table_test_result");
			}
			return self::$p_common_table_test_result;
		}


	public static function get_common_table_test_test()
		{
		if (is_null(self::$p_common_table_test_test))
			{
				self::$p_common_table_test_test = self::create_instance("table_test_test");
			}
			return self::$p_common_table_test_test;
		}


	public static function get_common_therapy_goal()
		{
		if (is_null(self::$p_common_therapy_goal))
			{
				self::$p_common_therapy_goal = self::create_instance("therapy_goal");
			}
			return self::$p_common_therapy_goal;
		}


	public static function get_common_therapy_plan()
		{
		if (is_null(self::$p_common_therapy_plan))
			{
				self::$p_common_therapy_plan = self::create_instance("therapy_plan");
			}
			return self::$p_common_therapy_plan;
		}


	public static function get_common_therapy_plan_template()
		{
		if (is_null(self::$p_common_therapy_plan_template))
			{
				self::$p_common_therapy_plan_template = self::create_instance("therapy_plan_template");
			}
			return self::$p_common_therapy_plan_template;
		}


	public static function get_common_time_unit()
		{
		if (is_null(self::$p_common_time_unit))
			{
				self::$p_common_time_unit = self::create_instance("time_unit");
			}
			return self::$p_common_time_unit;
		}


	public static function get_common_transfer()
		{
		if (is_null(self::$p_common_transfer))
			{
				self::$p_common_transfer = self::create_instance("transfer");
			}
			return self::$p_common_transfer;
		}


	public static function get_common_transfer_item()
		{
		if (is_null(self::$p_common_transfer_item))
			{
				self::$p_common_transfer_item = self::create_instance("transfer_item");
			}
			return self::$p_common_transfer_item;
		}


	public static function get_common_uom()
		{
		if (is_null(self::$p_common_uom))
			{
				self::$p_common_uom = self::create_instance("uom");
			}
			return self::$p_common_uom;
		}


	public static function get_common_userconfiguration()
		{
		if (is_null(self::$p_common_userconfiguration))
			{
				self::$p_common_userconfiguration = self::create_instance("userconfiguration");
			}
			return self::$p_common_userconfiguration;
		}


	public static function get_common($tablename)
	{
		switch ($tablename)
			{
				case "access_group":
					require_once('include/data/tables/cls_table_access_group.php');
					return self::get_common_access_group();
					break;
				case "account":
					require_once('include/data/tables/cls_table_account.php');
					return self::get_common_account();
					break;
				case "account_bankaccount":
					require_once('include/data/tables/cls_table_account_bankaccount.php');
					return self::get_common_account_bankaccount();
					break;
				case "account_chart_of_account":
					require_once('include/data/tables/cls_table_account_chart_of_account.php');
					return self::get_common_account_chart_of_account();
					break;
				case "account_group":
					require_once('include/data/tables/cls_table_account_group.php');
					return self::get_common_account_group();
					break;
				case "account_match":
					require_once('include/data/tables/cls_table_account_match.php');
					return self::get_common_account_match();
					break;
				case "action":
					require_once('include/data/tables/cls_table_action.php');
					return self::get_common_action();
					break;
				case "address":
					require_once('include/data/tables/cls_table_address.php');
					return self::get_common_address();
					break;
				case "address_type":
					require_once('include/data/tables/cls_table_address_type.php');
					return self::get_common_address_type();
					break;
				case "application":
					require_once('include/data/tables/cls_table_application.php');
					return self::get_common_application();
					break;
				case "application_controller":
					require_once('include/data/tables/cls_table_application_controller.php');
					return self::get_common_application_controller();
					break;
				case "application_template":
					require_once('include/data/tables/cls_table_application_template.php');
					return self::get_common_application_template();
					break;
				case "article":
					require_once('include/data/tables/cls_table_article.php');
					return self::get_common_article();
					break;
				case "article_fixed_asset":
					require_once('include/data/tables/cls_table_article_fixed_asset.php');
					return self::get_common_article_fixed_asset();
					break;
				case "article_group":
					require_once('include/data/tables/cls_table_article_group.php');
					return self::get_common_article_group();
					break;
				case "article_group_account":
					require_once('include/data/tables/cls_table_article_group_account.php');
					return self::get_common_article_group_account();
					break;
				case "article_list":
					require_once('include/data/tables/cls_table_article_list.php');
					return self::get_common_article_list();
					break;
				case "article_list_pos":
					require_once('include/data/tables/cls_table_article_list_pos.php');
					return self::get_common_article_list_pos();
					break;
				case "article_person_rent":
					require_once('include/data/tables/cls_table_article_person_rent.php');
					return self::get_common_article_person_rent();
					break;
				case "article_price":
					require_once('include/data/tables/cls_table_article_price.php');
					return self::get_common_article_price();
					break;
				case "article_price_group":
					require_once('include/data/tables/cls_table_article_price_group.php');
					return self::get_common_article_price_group();
					break;
				case "article_quantity":
					require_once('include/data/tables/cls_table_article_quantity.php');
					return self::get_common_article_quantity();
					break;
				case "article_rent_price":
					require_once('include/data/tables/cls_table_article_rent_price.php');
					return self::get_common_article_rent_price();
					break;
				case "article_supplier":
					require_once('include/data/tables/cls_table_article_supplier.php');
					return self::get_common_article_supplier();
					break;
				case "bank":
					require_once('include/data/tables/cls_table_bank.php');
					return self::get_common_bank();
					break;
				case "bank_account":
					require_once('include/data/tables/cls_table_bank_account.php');
					return self::get_common_bank_account();
					break;
				case "bank_account_mandat":
					require_once('include/data/tables/cls_table_bank_account_mandat.php');
					return self::get_common_bank_account_mandat();
					break;
				case "base_control_type":
					require_once('include/data/tables/cls_table_base_control_type.php');
					return self::get_common_base_control_type();
					break;
				case "campaign":
					require_once('include/data/tables/cls_table_campaign.php');
					return self::get_common_campaign();
					break;
				case "campaign_group":
					require_once('include/data/tables/cls_table_campaign_group.php');
					return self::get_common_campaign_group();
					break;
				case "certificate_type":
					require_once('include/data/tables/cls_table_certificate_type.php');
					return self::get_common_certificate_type();
					break;
				case "chart_of_account":
					require_once('include/data/tables/cls_table_chart_of_account.php');
					return self::get_common_chart_of_account();
					break;
				case "column_security":
					require_once('include/data/tables/cls_table_column_security.php');
					return self::get_common_column_security();
					break;
				case "communication":
					require_once('include/data/tables/cls_table_communication.php');
					return self::get_common_communication();
					break;
				case "communication_event":
					require_once('include/data/tables/cls_table_communication_event.php');
					return self::get_common_communication_event();
					break;
				case "communication_reason":
					require_once('include/data/tables/cls_table_communication_reason.php');
					return self::get_common_communication_reason();
					break;
				case "communication_reason_type":
					require_once('include/data/tables/cls_table_communication_reason_type.php');
					return self::get_common_communication_reason_type();
					break;
				case "communication_reason_type_person_state":
					require_once('include/data/tables/cls_table_communication_reason_type_person_state.php');
					return self::get_common_communication_reason_type_person_state();
					break;
				case "communication_type":
					require_once('include/data/tables/cls_table_communication_type.php');
					return self::get_common_communication_type();
					break;
				case "computer_configuration":
					require_once('include/data/tables/cls_table_computer_configuration.php');
					return self::get_common_computer_configuration();
					break;
				case "config_group":
					require_once('include/data/tables/cls_table_config_group.php');
					return self::get_common_config_group();
					break;
				case "config_group_item":
					require_once('include/data/tables/cls_table_config_group_item.php');
					return self::get_common_config_group_item();
					break;
				case "config_item_access_group":
					require_once('include/data/tables/cls_table_config_item_access_group.php');
					return self::get_common_config_item_access_group();
					break;
				case "configuration":
					require_once('include/data/tables/cls_table_configuration.php');
					return self::get_common_configuration();
					break;
				case "contract":
					require_once('include/data/tables/cls_table_contract.php');
					return self::get_common_contract();
					break;
				case "contract_plan":
					require_once('include/data/tables/cls_table_contract_plan.php');
					return self::get_common_contract_plan();
					break;
				case "contract_pos":
					require_once('include/data/tables/cls_table_contract_pos.php');
					return self::get_common_contract_pos();
					break;
				case "contract_template":
					require_once('include/data/tables/cls_table_contract_template.php');
					return self::get_common_contract_template();
					break;
				case "contract_template_group":
					require_once('include/data/tables/cls_table_contract_template_group.php');
					return self::get_common_contract_template_group();
					break;
				case "contract_template_item":
					require_once('include/data/tables/cls_table_contract_template_item.php');
					return self::get_common_contract_template_item();
					break;
				case "contract_template_onetimepayment":
					require_once('include/data/tables/cls_table_contract_template_onetimepayment.php');
					return self::get_common_contract_template_onetimepayment();
					break;
				case "contract_template_pos":
					require_once('include/data/tables/cls_table_contract_template_pos.php');
					return self::get_common_contract_template_pos();
					break;
				case "control":
					require_once('include/data/tables/cls_table_control.php');
					return self::get_common_control();
					break;
				case "control_control_group":
					require_once('include/data/tables/cls_table_control_control_group.php');
					return self::get_common_control_control_group();
					break;
				case "control_group":
					require_once('include/data/tables/cls_table_control_group.php');
					return self::get_common_control_group();
					break;
				case "country":
					require_once('include/data/tables/cls_table_country.php');
					return self::get_common_country();
					break;
				case "data_change":
					require_once('include/data/tables/cls_table_data_change.php');
					return self::get_common_data_change();
					break;
				case "data_help":
					require_once('include/data/tables/cls_table_data_help.php');
					return self::get_common_data_help();
					break;
				case "data_location":
					require_once('include/data/tables/cls_table_data_location.php');
					return self::get_common_data_location();
					break;
				case "data_posting":
					require_once('include/data/tables/cls_table_data_posting.php');
					return self::get_common_data_posting();
					break;
				case "data_property":
					require_once('include/data/tables/cls_table_data_property.php');
					return self::get_common_data_property();
					break;
				case "data_property_type":
					require_once('include/data/tables/cls_table_data_property_type.php');
					return self::get_common_data_property_type();
					break;
				case "data_property_type_val":
					require_once('include/data/tables/cls_table_data_property_type_val.php');
					return self::get_common_data_property_type_val();
					break;
				case "data_relation":
					require_once('include/data/tables/cls_table_data_relation.php');
					return self::get_common_data_relation();
					break;
				case "data_relation_type":
					require_once('include/data/tables/cls_table_data_relation_type.php');
					return self::get_common_data_relation_type();
					break;
				case "data_relation_types_val":
					require_once('include/data/tables/cls_table_data_relation_types_val.php');
					return self::get_common_data_relation_types_val();
					break;
				case "data_translation":
					require_once('include/data/tables/cls_table_data_translation.php');
					return self::get_common_data_translation();
					break;
				case "data_view":
					require_once('include/data/tables/cls_table_data_view.php');
					return self::get_common_data_view();
					break;
				case "data_view_field":
					require_once('include/data/tables/cls_table_data_view_field.php');
					return self::get_common_data_view_field();
					break;
				case "data_view_restriction":
					require_once('include/data/tables/cls_table_data_view_restriction.php');
					return self::get_common_data_view_restriction();
					break;
				case "data_view_table":
					require_once('include/data/tables/cls_table_data_view_table.php');
					return self::get_common_data_view_table();
					break;
				case "desease":
					require_once('include/data/tables/cls_table_desease.php');
					return self::get_common_desease();
					break;
				case "device":
					require_once('include/data/tables/cls_table_device.php');
					return self::get_common_device();
					break;
				case "device_offer":
					require_once('include/data/tables/cls_table_device_offer.php');
					return self::get_common_device_offer();
					break;
				case "dms":
					require_once('include/data/tables/cls_table_dms.php');
					return self::get_common_dms();
					break;
				case "dms_document_type":
					require_once('include/data/tables/cls_table_dms_document_type.php');
					return self::get_common_dms_document_type();
					break;
				case "dms_type":
					require_once('include/data/tables/cls_table_dms_type.php');
					return self::get_common_dms_type();
					break;
				case "drupal_actions":
					require_once('include/data/tables/cls_table_drupal_actions.php');
					return self::get_common_drupal_actions();
					break;
				case "drupal_authmap":
					require_once('include/data/tables/cls_table_drupal_authmap.php');
					return self::get_common_drupal_authmap();
					break;
				case "drupal_batch":
					require_once('include/data/tables/cls_table_drupal_batch.php');
					return self::get_common_drupal_batch();
					break;
				case "drupal_block":
					require_once('include/data/tables/cls_table_drupal_block.php');
					return self::get_common_drupal_block();
					break;
				case "drupal_block_custom":
					require_once('include/data/tables/cls_table_drupal_block_custom.php');
					return self::get_common_drupal_block_custom();
					break;
				case "drupal_block_node_type":
					require_once('include/data/tables/cls_table_drupal_block_node_type.php');
					return self::get_common_drupal_block_node_type();
					break;
				case "drupal_block_role":
					require_once('include/data/tables/cls_table_drupal_block_role.php');
					return self::get_common_drupal_block_role();
					break;
				case "drupal_blocked_ips":
					require_once('include/data/tables/cls_table_drupal_blocked_ips.php');
					return self::get_common_drupal_blocked_ips();
					break;
				case "drupal_cache":
					require_once('include/data/tables/cls_table_drupal_cache.php');
					return self::get_common_drupal_cache();
					break;
				case "drupal_cache_block":
					require_once('include/data/tables/cls_table_drupal_cache_block.php');
					return self::get_common_drupal_cache_block();
					break;
				case "drupal_cache_bootstrap":
					require_once('include/data/tables/cls_table_drupal_cache_bootstrap.php');
					return self::get_common_drupal_cache_bootstrap();
					break;
				case "drupal_cache_field":
					require_once('include/data/tables/cls_table_drupal_cache_field.php');
					return self::get_common_drupal_cache_field();
					break;
				case "drupal_cache_filter":
					require_once('include/data/tables/cls_table_drupal_cache_filter.php');
					return self::get_common_drupal_cache_filter();
					break;
				case "drupal_cache_form":
					require_once('include/data/tables/cls_table_drupal_cache_form.php');
					return self::get_common_drupal_cache_form();
					break;
				case "drupal_cache_image":
					require_once('include/data/tables/cls_table_drupal_cache_image.php');
					return self::get_common_drupal_cache_image();
					break;
				case "drupal_cache_menu":
					require_once('include/data/tables/cls_table_drupal_cache_menu.php');
					return self::get_common_drupal_cache_menu();
					break;
				case "drupal_cache_page":
					require_once('include/data/tables/cls_table_drupal_cache_page.php');
					return self::get_common_drupal_cache_page();
					break;
				case "drupal_cache_path":
					require_once('include/data/tables/cls_table_drupal_cache_path.php');
					return self::get_common_drupal_cache_path();
					break;
				case "drupal_cache_update":
					require_once('include/data/tables/cls_table_drupal_cache_update.php');
					return self::get_common_drupal_cache_update();
					break;
				case "drupal_comment":
					require_once('include/data/tables/cls_table_drupal_comment.php');
					return self::get_common_drupal_comment();
					break;
				case "drupal_date_format_locale":
					require_once('include/data/tables/cls_table_drupal_date_format_locale.php');
					return self::get_common_drupal_date_format_locale();
					break;
				case "drupal_date_format_type":
					require_once('include/data/tables/cls_table_drupal_date_format_type.php');
					return self::get_common_drupal_date_format_type();
					break;
				case "drupal_date_formats":
					require_once('include/data/tables/cls_table_drupal_date_formats.php');
					return self::get_common_drupal_date_formats();
					break;
				case "drupal_field_config":
					require_once('include/data/tables/cls_table_drupal_field_config.php');
					return self::get_common_drupal_field_config();
					break;
				case "drupal_field_config_instance":
					require_once('include/data/tables/cls_table_drupal_field_config_instance.php');
					return self::get_common_drupal_field_config_instance();
					break;
				case "drupal_field_data_body":
					require_once('include/data/tables/cls_table_drupal_field_data_body.php');
					return self::get_common_drupal_field_data_body();
					break;
				case "drupal_field_data_comment_body":
					require_once('include/data/tables/cls_table_drupal_field_data_comment_body.php');
					return self::get_common_drupal_field_data_comment_body();
					break;
				case "drupal_field_data_field_first_name":
					require_once('include/data/tables/cls_table_drupal_field_data_field_first_name.php');
					return self::get_common_drupal_field_data_field_first_name();
					break;
				case "drupal_field_data_field_image":
					require_once('include/data/tables/cls_table_drupal_field_data_field_image.php');
					return self::get_common_drupal_field_data_field_image();
					break;
				case "drupal_field_data_field_tags":
					require_once('include/data/tables/cls_table_drupal_field_data_field_tags.php');
					return self::get_common_drupal_field_data_field_tags();
					break;
				case "drupal_field_revision_body":
					require_once('include/data/tables/cls_table_drupal_field_revision_body.php');
					return self::get_common_drupal_field_revision_body();
					break;
				case "drupal_field_revision_comment_body":
					require_once('include/data/tables/cls_table_drupal_field_revision_comment_body.php');
					return self::get_common_drupal_field_revision_comment_body();
					break;
				case "drupal_field_revision_field_first_name":
					require_once('include/data/tables/cls_table_drupal_field_revision_field_first_name.php');
					return self::get_common_drupal_field_revision_field_first_name();
					break;
				case "drupal_field_revision_field_image":
					require_once('include/data/tables/cls_table_drupal_field_revision_field_image.php');
					return self::get_common_drupal_field_revision_field_image();
					break;
				case "drupal_field_revision_field_tags":
					require_once('include/data/tables/cls_table_drupal_field_revision_field_tags.php');
					return self::get_common_drupal_field_revision_field_tags();
					break;
				case "drupal_file_managed":
					require_once('include/data/tables/cls_table_drupal_file_managed.php');
					return self::get_common_drupal_file_managed();
					break;
				case "drupal_file_usage":
					require_once('include/data/tables/cls_table_drupal_file_usage.php');
					return self::get_common_drupal_file_usage();
					break;
				case "drupal_filter":
					require_once('include/data/tables/cls_table_drupal_filter.php');
					return self::get_common_drupal_filter();
					break;
				case "drupal_filter_format":
					require_once('include/data/tables/cls_table_drupal_filter_format.php');
					return self::get_common_drupal_filter_format();
					break;
				case "drupal_flood":
					require_once('include/data/tables/cls_table_drupal_flood.php');
					return self::get_common_drupal_flood();
					break;
				case "drupal_history":
					require_once('include/data/tables/cls_table_drupal_history.php');
					return self::get_common_drupal_history();
					break;
				case "drupal_image_effects":
					require_once('include/data/tables/cls_table_drupal_image_effects.php');
					return self::get_common_drupal_image_effects();
					break;
				case "drupal_image_styles":
					require_once('include/data/tables/cls_table_drupal_image_styles.php');
					return self::get_common_drupal_image_styles();
					break;
				case "drupal_languages":
					require_once('include/data/tables/cls_table_drupal_languages.php');
					return self::get_common_drupal_languages();
					break;
				case "drupal_locales_source":
					require_once('include/data/tables/cls_table_drupal_locales_source.php');
					return self::get_common_drupal_locales_source();
					break;
				case "drupal_locales_target":
					require_once('include/data/tables/cls_table_drupal_locales_target.php');
					return self::get_common_drupal_locales_target();
					break;
				case "drupal_menu_custom":
					require_once('include/data/tables/cls_table_drupal_menu_custom.php');
					return self::get_common_drupal_menu_custom();
					break;
				case "drupal_menu_links":
					require_once('include/data/tables/cls_table_drupal_menu_links.php');
					return self::get_common_drupal_menu_links();
					break;
				case "drupal_menu_router":
					require_once('include/data/tables/cls_table_drupal_menu_router.php');
					return self::get_common_drupal_menu_router();
					break;
				case "drupal_node":
					require_once('include/data/tables/cls_table_drupal_node.php');
					return self::get_common_drupal_node();
					break;
				case "drupal_node_access":
					require_once('include/data/tables/cls_table_drupal_node_access.php');
					return self::get_common_drupal_node_access();
					break;
				case "drupal_node_comment_statistics":
					require_once('include/data/tables/cls_table_drupal_node_comment_statistics.php');
					return self::get_common_drupal_node_comment_statistics();
					break;
				case "drupal_node_revision":
					require_once('include/data/tables/cls_table_drupal_node_revision.php');
					return self::get_common_drupal_node_revision();
					break;
				case "drupal_node_type":
					require_once('include/data/tables/cls_table_drupal_node_type.php');
					return self::get_common_drupal_node_type();
					break;
				case "drupal_person":
					require_once('include/data/tables/cls_table_drupal_person.php');
					return self::get_common_drupal_person();
					break;
				case "drupal_profile":
					require_once('include/data/tables/cls_table_drupal_profile.php');
					return self::get_common_drupal_profile();
					break;
				case "drupal_profile_type":
					require_once('include/data/tables/cls_table_drupal_profile_type.php');
					return self::get_common_drupal_profile_type();
					break;
				case "drupal_queue":
					require_once('include/data/tables/cls_table_drupal_queue.php');
					return self::get_common_drupal_queue();
					break;
				case "drupal_rdf_mapping":
					require_once('include/data/tables/cls_table_drupal_rdf_mapping.php');
					return self::get_common_drupal_rdf_mapping();
					break;
				case "drupal_registry":
					require_once('include/data/tables/cls_table_drupal_registry.php');
					return self::get_common_drupal_registry();
					break;
				case "drupal_registry_file":
					require_once('include/data/tables/cls_table_drupal_registry_file.php');
					return self::get_common_drupal_registry_file();
					break;
				case "drupal_role":
					require_once('include/data/tables/cls_table_drupal_role.php');
					return self::get_common_drupal_role();
					break;
				case "drupal_role_permission":
					require_once('include/data/tables/cls_table_drupal_role_permission.php');
					return self::get_common_drupal_role_permission();
					break;
				case "drupal_search_dataset":
					require_once('include/data/tables/cls_table_drupal_search_dataset.php');
					return self::get_common_drupal_search_dataset();
					break;
				case "drupal_search_index":
					require_once('include/data/tables/cls_table_drupal_search_index.php');
					return self::get_common_drupal_search_index();
					break;
				case "drupal_search_node_links":
					require_once('include/data/tables/cls_table_drupal_search_node_links.php');
					return self::get_common_drupal_search_node_links();
					break;
				case "drupal_search_total":
					require_once('include/data/tables/cls_table_drupal_search_total.php');
					return self::get_common_drupal_search_total();
					break;
				case "drupal_semaphore":
					require_once('include/data/tables/cls_table_drupal_semaphore.php');
					return self::get_common_drupal_semaphore();
					break;
				case "drupal_sequences":
					require_once('include/data/tables/cls_table_drupal_sequences.php');
					return self::get_common_drupal_sequences();
					break;
				case "drupal_sessions":
					require_once('include/data/tables/cls_table_drupal_sessions.php');
					return self::get_common_drupal_sessions();
					break;
				case "drupal_shortcut_set":
					require_once('include/data/tables/cls_table_drupal_shortcut_set.php');
					return self::get_common_drupal_shortcut_set();
					break;
				case "drupal_shortcut_set_users":
					require_once('include/data/tables/cls_table_drupal_shortcut_set_users.php');
					return self::get_common_drupal_shortcut_set_users();
					break;
				case "drupal_system":
					require_once('include/data/tables/cls_table_drupal_system.php');
					return self::get_common_drupal_system();
					break;
				case "drupal_taxonomy_index":
					require_once('include/data/tables/cls_table_drupal_taxonomy_index.php');
					return self::get_common_drupal_taxonomy_index();
					break;
				case "drupal_taxonomy_term_data":
					require_once('include/data/tables/cls_table_drupal_taxonomy_term_data.php');
					return self::get_common_drupal_taxonomy_term_data();
					break;
				case "drupal_taxonomy_term_hierarchy":
					require_once('include/data/tables/cls_table_drupal_taxonomy_term_hierarchy.php');
					return self::get_common_drupal_taxonomy_term_hierarchy();
					break;
				case "drupal_taxonomy_vocabulary":
					require_once('include/data/tables/cls_table_drupal_taxonomy_vocabulary.php');
					return self::get_common_drupal_taxonomy_vocabulary();
					break;
				case "drupal_url_alias":
					require_once('include/data/tables/cls_table_drupal_url_alias.php');
					return self::get_common_drupal_url_alias();
					break;
				case "drupal_users":
					require_once('include/data/tables/cls_table_drupal_users.php');
					return self::get_common_drupal_users();
					break;
				case "drupal_users_roles":
					require_once('include/data/tables/cls_table_drupal_users_roles.php');
					return self::get_common_drupal_users_roles();
					break;
				case "drupal_variable":
					require_once('include/data/tables/cls_table_drupal_variable.php');
					return self::get_common_drupal_variable();
					break;
				case "drupal_watchdog":
					require_once('include/data/tables/cls_table_drupal_watchdog.php');
					return self::get_common_drupal_watchdog();
					break;
				case "event_type":
					require_once('include/data/tables/cls_table_event_type.php');
					return self::get_common_event_type();
					break;
				case "fixed_asset":
					require_once('include/data/tables/cls_table_fixed_asset.php');
					return self::get_common_fixed_asset();
					break;
				case "fixed_asset_group":
					require_once('include/data/tables/cls_table_fixed_asset_group.php');
					return self::get_common_fixed_asset_group();
					break;
				case "fixed_asset_group_account":
					require_once('include/data/tables/cls_table_fixed_asset_group_account.php');
					return self::get_common_fixed_asset_group_account();
					break;
				case "geodb_changelog":
					require_once('include/data/tables/cls_table_geodb_changelog.php');
					return self::get_common_geodb_changelog();
					break;
				case "geodb_coordinates":
					require_once('include/data/tables/cls_table_geodb_coordinates.php');
					return self::get_common_geodb_coordinates();
					break;
				case "geodb_floatdata":
					require_once('include/data/tables/cls_table_geodb_floatdata.php');
					return self::get_common_geodb_floatdata();
					break;
				case "geodb_intdata":
					require_once('include/data/tables/cls_table_geodb_intdata.php');
					return self::get_common_geodb_intdata();
					break;
				case "geodb_locations":
					require_once('include/data/tables/cls_table_geodb_locations.php');
					return self::get_common_geodb_locations();
					break;
				case "geodb_textdata":
					require_once('include/data/tables/cls_table_geodb_textdata.php');
					return self::get_common_geodb_textdata();
					break;
				case "geodb_type_names":
					require_once('include/data/tables/cls_table_geodb_type_names.php');
					return self::get_common_geodb_type_names();
					break;
				case "insurance":
					require_once('include/data/tables/cls_table_insurance.php');
					return self::get_common_insurance();
					break;
				case "insurance_district":
					require_once('include/data/tables/cls_table_insurance_district.php');
					return self::get_common_insurance_district();
					break;
				case "insurance_group":
					require_once('include/data/tables/cls_table_insurance_group.php');
					return self::get_common_insurance_group();
					break;
				case "insurance_price":
					require_once('include/data/tables/cls_table_insurance_price.php');
					return self::get_common_insurance_price();
					break;
				case "invoice":
					require_once('include/data/tables/cls_table_invoice.php');
					return self::get_common_invoice();
					break;
				case "invoice_item":
					require_once('include/data/tables/cls_table_invoice_item.php');
					return self::get_common_invoice_item();
					break;
				case "location":
					require_once('include/data/tables/cls_table_location.php');
					return self::get_common_location();
					break;
				case "location_independent_table":
					require_once('include/data/tables/cls_table_location_independent_table.php');
					return self::get_common_location_independent_table();
					break;
				case "logon":
					require_once('include/data/tables/cls_table_logon.php');
					return self::get_common_logon();
					break;
				case "main_page":
					require_once('include/data/tables/cls_table_main_page.php');
					return self::get_common_main_page();
					break;
				case "main_page_template":
					require_once('include/data/tables/cls_table_main_page_template.php');
					return self::get_common_main_page_template();
					break;
				case "menu":
					require_once('include/data/tables/cls_table_menu.php');
					return self::get_common_menu();
					break;
				case "menu_access_group":
					require_once('include/data/tables/cls_table_menu_access_group.php');
					return self::get_common_menu_access_group();
					break;
				case "menu_group":
					require_once('include/data/tables/cls_table_menu_group.php');
					return self::get_common_menu_group();
					break;
				case "menu_item":
					require_once('include/data/tables/cls_table_menu_item.php');
					return self::get_common_menu_item();
					break;
				case "menu_template":
					require_once('include/data/tables/cls_table_menu_template.php');
					return self::get_common_menu_template();
					break;
				case "offer":
					require_once('include/data/tables/cls_table_offer.php');
					return self::get_common_offer();
					break;
				case "offer_event":
					require_once('include/data/tables/cls_table_offer_event.php');
					return self::get_common_offer_event();
					break;
				case "offer_time":
					require_once('include/data/tables/cls_table_offer_time.php');
					return self::get_common_offer_time();
					break;
				case "offer_type":
					require_once('include/data/tables/cls_table_offer_type.php');
					return self::get_common_offer_type();
					break;
				case "onetime_payment":
					require_once('include/data/tables/cls_table_onetime_payment.php');
					return self::get_common_onetime_payment();
					break;
				case "person":
					require_once('include/data/tables/cls_table_person.php');
					return self::get_common_person();
					break;
				case "person_access_group":
					require_once('include/data/tables/cls_table_person_access_group.php');
					return self::get_common_person_access_group();
					break;
				case "person_account":
					require_once('include/data/tables/cls_table_person_account.php');
					return self::get_common_person_account();
					break;
				case "person_article_renting":
					require_once('include/data/tables/cls_table_person_article_renting.php');
					return self::get_common_person_article_renting();
					break;
				case "person_desease":
					require_once('include/data/tables/cls_table_person_desease.php');
					return self::get_common_person_desease();
					break;
				case "person_search_values":
					require_once('include/data/tables/cls_table_person_search_values.php');
					return self::get_common_person_search_values();
					break;
				case "person_state":
					require_once('include/data/tables/cls_table_person_state.php');
					return self::get_common_person_state();
					break;
				case "person_state_type":
					require_once('include/data/tables/cls_table_person_state_type.php');
					return self::get_common_person_state_type();
					break;
				case "person_state_type_access_group":
					require_once('include/data/tables/cls_table_person_state_type_access_group.php');
					return self::get_common_person_state_type_access_group();
					break;
				case "person_state_type_account":
					require_once('include/data/tables/cls_table_person_state_type_account.php');
					return self::get_common_person_state_type_account();
					break;
				case "person_states_group":
					require_once('include/data/tables/cls_table_person_states_group.php');
					return self::get_common_person_states_group();
					break;
				case "posting_header":
					require_once('include/data/tables/cls_table_posting_header.php');
					return self::get_common_posting_header();
					break;
				case "posting_line":
					require_once('include/data/tables/cls_table_posting_line.php');
					return self::get_common_posting_line();
					break;
				case "prescription":
					require_once('include/data/tables/cls_table_prescription.php');
					return self::get_common_prescription();
					break;
				case "prescription_type":
					require_once('include/data/tables/cls_table_prescription_type.php');
					return self::get_common_prescription_type();
					break;
				case "prescription_type_pos":
					require_once('include/data/tables/cls_table_prescription_type_pos.php');
					return self::get_common_prescription_type_pos();
					break;
				case "restperiod":
					require_once('include/data/tables/cls_table_restperiod.php');
					return self::get_common_restperiod();
					break;
				case "ribbonbar":
					require_once('include/data/tables/cls_table_ribbonbar.php');
					return self::get_common_ribbonbar();
					break;
				case "ribbonbar_group":
					require_once('include/data/tables/cls_table_ribbonbar_group.php');
					return self::get_common_ribbonbar_group();
					break;
				case "ribbonbar_item":
					require_once('include/data/tables/cls_table_ribbonbar_item.php');
					return self::get_common_ribbonbar_item();
					break;
				case "ribbonbar_tab":
					require_once('include/data/tables/cls_table_ribbonbar_tab.php');
					return self::get_common_ribbonbar_tab();
					break;
				case "ribbonbar_template":
					require_once('include/data/tables/cls_table_ribbonbar_template.php');
					return self::get_common_ribbonbar_template();
					break;
				case "salutation":
					require_once('include/data/tables/cls_table_salutation.php');
					return self::get_common_salutation();
					break;
				case "sport":
					require_once('include/data/tables/cls_table_sport.php');
					return self::get_common_sport();
					break;
				case "standard_icon":
					require_once('include/data/tables/cls_table_standard_icon.php');
					return self::get_common_standard_icon();
					break;
				case "supplier_data":
					require_once('include/data/tables/cls_table_supplier_data.php');
					return self::get_common_supplier_data();
					break;
				case "supplier_price":
					require_once('include/data/tables/cls_table_supplier_price.php');
					return self::get_common_supplier_price();
					break;
				case "swift_statement":
					require_once('include/data/tables/cls_table_swift_statement.php');
					return self::get_common_swift_statement();
					break;
				case "swift_statement_line":
					require_once('include/data/tables/cls_table_swift_statement_line.php');
					return self::get_common_swift_statement_line();
					break;
				case "swift_statement_line_posting":
					require_once('include/data/tables/cls_table_swift_statement_line_posting.php');
					return self::get_common_swift_statement_line_posting();
					break;
				case "table_bean":
					require_once('include/data/tables/cls_table_table_bean.php');
					return self::get_common_table_bean();
					break;
				case "table_bean_access_group":
					require_once('include/data/tables/cls_table_table_bean_access_group.php');
					return self::get_common_table_bean_access_group();
					break;
				case "table_bean_table":
					require_once('include/data/tables/cls_table_table_bean_table.php');
					return self::get_common_table_bean_table();
					break;
				case "table_column":
					require_once('include/data/tables/cls_table_table_column.php');
					return self::get_common_table_column();
					break;
				case "table_data":
					require_once('include/data/tables/cls_table_table_data.php');
					return self::get_common_table_data();
					break;
				case "table_lock":
					require_once('include/data/tables/cls_table_table_lock.php');
					return self::get_common_table_lock();
					break;
				case "table_lookup_column":
					require_once('include/data/tables/cls_table_table_lookup_column.php');
					return self::get_common_table_lookup_column();
					break;
				case "table_relation":
					require_once('include/data/tables/cls_table_table_relation.php');
					return self::get_common_table_relation();
					break;
				case "table_search_column":
					require_once('include/data/tables/cls_table_table_search_column.php');
					return self::get_common_table_search_column();
					break;
				case "table_search_template":
					require_once('include/data/tables/cls_table_table_search_template.php');
					return self::get_common_table_search_template();
					break;
				case "table_security":
					require_once('include/data/tables/cls_table_table_security.php');
					return self::get_common_table_security();
					break;
				case "table_test":
					require_once('include/data/tables/cls_table_table_test.php');
					return self::get_common_table_test();
					break;
				case "table_test_data":
					require_once('include/data/tables/cls_table_table_test_data.php');
					return self::get_common_table_test_data();
					break;
				case "table_test_group":
					require_once('include/data/tables/cls_table_table_test_group.php');
					return self::get_common_table_test_group();
					break;
				case "table_test_group_table":
					require_once('include/data/tables/cls_table_table_test_group_table.php');
					return self::get_common_table_test_group_table();
					break;
				case "table_test_item":
					require_once('include/data/tables/cls_table_table_test_item.php');
					return self::get_common_table_test_item();
					break;
				case "table_test_result":
					require_once('include/data/tables/cls_table_table_test_result.php');
					return self::get_common_table_test_result();
					break;
				case "table_test_test":
					require_once('include/data/tables/cls_table_table_test_test.php');
					return self::get_common_table_test_test();
					break;
				case "therapy_goal":
					require_once('include/data/tables/cls_table_therapy_goal.php');
					return self::get_common_therapy_goal();
					break;
				case "therapy_plan":
					require_once('include/data/tables/cls_table_therapy_plan.php');
					return self::get_common_therapy_plan();
					break;
				case "therapy_plan_template":
					require_once('include/data/tables/cls_table_therapy_plan_template.php');
					return self::get_common_therapy_plan_template();
					break;
				case "time_unit":
					require_once('include/data/tables/cls_table_time_unit.php');
					return self::get_common_time_unit();
					break;
				case "transfer":
					require_once('include/data/tables/cls_table_transfer.php');
					return self::get_common_transfer();
					break;
				case "transfer_item":
					require_once('include/data/tables/cls_table_transfer_item.php');
					return self::get_common_transfer_item();
					break;
				case "uom":
					require_once('include/data/tables/cls_table_uom.php');
					return self::get_common_uom();
					break;
				case "userconfiguration":
					require_once('include/data/tables/cls_table_userconfiguration.php');
					return self::get_common_userconfiguration();
					break;
			}
	}

	public static function create_instance($tablename)
	{
		switch ($tablename)
			{
				case "access_group":
					require_once('include/data/tables/cls_table_access_group.php');
					return new cls_table_access_group();
					break;
				case "account":
					require_once('include/data/tables/cls_table_account.php');
					return new cls_table_account();
					break;
				case "account_bankaccount":
					require_once('include/data/tables/cls_table_account_bankaccount.php');
					return new cls_table_account_bankaccount();
					break;
				case "account_chart_of_account":
					require_once('include/data/tables/cls_table_account_chart_of_account.php');
					return new cls_table_account_chart_of_account();
					break;
				case "account_group":
					require_once('include/data/tables/cls_table_account_group.php');
					return new cls_table_account_group();
					break;
				case "account_match":
					require_once('include/data/tables/cls_table_account_match.php');
					return new cls_table_account_match();
					break;
				case "action":
					require_once('include/data/tables/cls_table_action.php');
					return new cls_table_action();
					break;
				case "address":
					require_once('include/data/tables/cls_table_address.php');
					return new cls_table_address();
					break;
				case "address_type":
					require_once('include/data/tables/cls_table_address_type.php');
					return new cls_table_address_type();
					break;
				case "application":
					require_once('include/data/tables/cls_table_application.php');
					return new cls_table_application();
					break;
				case "application_controller":
					require_once('include/data/tables/cls_table_application_controller.php');
					return new cls_table_application_controller();
					break;
				case "application_template":
					require_once('include/data/tables/cls_table_application_template.php');
					return new cls_table_application_template();
					break;
				case "article":
					require_once('include/data/tables/cls_table_article.php');
					return new cls_table_article();
					break;
				case "article_fixed_asset":
					require_once('include/data/tables/cls_table_article_fixed_asset.php');
					return new cls_table_article_fixed_asset();
					break;
				case "article_group":
					require_once('include/data/tables/cls_table_article_group.php');
					return new cls_table_article_group();
					break;
				case "article_group_account":
					require_once('include/data/tables/cls_table_article_group_account.php');
					return new cls_table_article_group_account();
					break;
				case "article_list":
					require_once('include/data/tables/cls_table_article_list.php');
					return new cls_table_article_list();
					break;
				case "article_list_pos":
					require_once('include/data/tables/cls_table_article_list_pos.php');
					return new cls_table_article_list_pos();
					break;
				case "article_person_rent":
					require_once('include/data/tables/cls_table_article_person_rent.php');
					return new cls_table_article_person_rent();
					break;
				case "article_price":
					require_once('include/data/tables/cls_table_article_price.php');
					return new cls_table_article_price();
					break;
				case "article_price_group":
					require_once('include/data/tables/cls_table_article_price_group.php');
					return new cls_table_article_price_group();
					break;
				case "article_quantity":
					require_once('include/data/tables/cls_table_article_quantity.php');
					return new cls_table_article_quantity();
					break;
				case "article_rent_price":
					require_once('include/data/tables/cls_table_article_rent_price.php');
					return new cls_table_article_rent_price();
					break;
				case "article_supplier":
					require_once('include/data/tables/cls_table_article_supplier.php');
					return new cls_table_article_supplier();
					break;
				case "bank":
					require_once('include/data/tables/cls_table_bank.php');
					return new cls_table_bank();
					break;
				case "bank_account":
					require_once('include/data/tables/cls_table_bank_account.php');
					return new cls_table_bank_account();
					break;
				case "bank_account_mandat":
					require_once('include/data/tables/cls_table_bank_account_mandat.php');
					return new cls_table_bank_account_mandat();
					break;
				case "base_control_type":
					require_once('include/data/tables/cls_table_base_control_type.php');
					return new cls_table_base_control_type();
					break;
				case "campaign":
					require_once('include/data/tables/cls_table_campaign.php');
					return new cls_table_campaign();
					break;
				case "campaign_group":
					require_once('include/data/tables/cls_table_campaign_group.php');
					return new cls_table_campaign_group();
					break;
				case "certificate_type":
					require_once('include/data/tables/cls_table_certificate_type.php');
					return new cls_table_certificate_type();
					break;
				case "chart_of_account":
					require_once('include/data/tables/cls_table_chart_of_account.php');
					return new cls_table_chart_of_account();
					break;
				case "column_security":
					require_once('include/data/tables/cls_table_column_security.php');
					return new cls_table_column_security();
					break;
				case "communication":
					require_once('include/data/tables/cls_table_communication.php');
					return new cls_table_communication();
					break;
				case "communication_event":
					require_once('include/data/tables/cls_table_communication_event.php');
					return new cls_table_communication_event();
					break;
				case "communication_reason":
					require_once('include/data/tables/cls_table_communication_reason.php');
					return new cls_table_communication_reason();
					break;
				case "communication_reason_type":
					require_once('include/data/tables/cls_table_communication_reason_type.php');
					return new cls_table_communication_reason_type();
					break;
				case "communication_reason_type_person_state":
					require_once('include/data/tables/cls_table_communication_reason_type_person_state.php');
					return new cls_table_communication_reason_type_person_state();
					break;
				case "communication_type":
					require_once('include/data/tables/cls_table_communication_type.php');
					return new cls_table_communication_type();
					break;
				case "computer_configuration":
					require_once('include/data/tables/cls_table_computer_configuration.php');
					return new cls_table_computer_configuration();
					break;
				case "config_group":
					require_once('include/data/tables/cls_table_config_group.php');
					return new cls_table_config_group();
					break;
				case "config_group_item":
					require_once('include/data/tables/cls_table_config_group_item.php');
					return new cls_table_config_group_item();
					break;
				case "config_item_access_group":
					require_once('include/data/tables/cls_table_config_item_access_group.php');
					return new cls_table_config_item_access_group();
					break;
				case "configuration":
					require_once('include/data/tables/cls_table_configuration.php');
					return new cls_table_configuration();
					break;
				case "contract":
					require_once('include/data/tables/cls_table_contract.php');
					return new cls_table_contract();
					break;
				case "contract_plan":
					require_once('include/data/tables/cls_table_contract_plan.php');
					return new cls_table_contract_plan();
					break;
				case "contract_pos":
					require_once('include/data/tables/cls_table_contract_pos.php');
					return new cls_table_contract_pos();
					break;
				case "contract_template":
					require_once('include/data/tables/cls_table_contract_template.php');
					return new cls_table_contract_template();
					break;
				case "contract_template_group":
					require_once('include/data/tables/cls_table_contract_template_group.php');
					return new cls_table_contract_template_group();
					break;
				case "contract_template_item":
					require_once('include/data/tables/cls_table_contract_template_item.php');
					return new cls_table_contract_template_item();
					break;
				case "contract_template_onetimepayment":
					require_once('include/data/tables/cls_table_contract_template_onetimepayment.php');
					return new cls_table_contract_template_onetimepayment();
					break;
				case "contract_template_pos":
					require_once('include/data/tables/cls_table_contract_template_pos.php');
					return new cls_table_contract_template_pos();
					break;
				case "control":
					require_once('include/data/tables/cls_table_control.php');
					return new cls_table_control();
					break;
				case "control_control_group":
					require_once('include/data/tables/cls_table_control_control_group.php');
					return new cls_table_control_control_group();
					break;
				case "control_group":
					require_once('include/data/tables/cls_table_control_group.php');
					return new cls_table_control_group();
					break;
				case "country":
					require_once('include/data/tables/cls_table_country.php');
					return new cls_table_country();
					break;
				case "data_change":
					require_once('include/data/tables/cls_table_data_change.php');
					return new cls_table_data_change();
					break;
				case "data_help":
					require_once('include/data/tables/cls_table_data_help.php');
					return new cls_table_data_help();
					break;
				case "data_location":
					require_once('include/data/tables/cls_table_data_location.php');
					return new cls_table_data_location();
					break;
				case "data_posting":
					require_once('include/data/tables/cls_table_data_posting.php');
					return new cls_table_data_posting();
					break;
				case "data_property":
					require_once('include/data/tables/cls_table_data_property.php');
					return new cls_table_data_property();
					break;
				case "data_property_type":
					require_once('include/data/tables/cls_table_data_property_type.php');
					return new cls_table_data_property_type();
					break;
				case "data_property_type_val":
					require_once('include/data/tables/cls_table_data_property_type_val.php');
					return new cls_table_data_property_type_val();
					break;
				case "data_relation":
					require_once('include/data/tables/cls_table_data_relation.php');
					return new cls_table_data_relation();
					break;
				case "data_relation_type":
					require_once('include/data/tables/cls_table_data_relation_type.php');
					return new cls_table_data_relation_type();
					break;
				case "data_relation_types_val":
					require_once('include/data/tables/cls_table_data_relation_types_val.php');
					return new cls_table_data_relation_types_val();
					break;
				case "data_translation":
					require_once('include/data/tables/cls_table_data_translation.php');
					return new cls_table_data_translation();
					break;
				case "data_view":
					require_once('include/data/tables/cls_table_data_view.php');
					return new cls_table_data_view();
					break;
				case "data_view_field":
					require_once('include/data/tables/cls_table_data_view_field.php');
					return new cls_table_data_view_field();
					break;
				case "data_view_restriction":
					require_once('include/data/tables/cls_table_data_view_restriction.php');
					return new cls_table_data_view_restriction();
					break;
				case "data_view_table":
					require_once('include/data/tables/cls_table_data_view_table.php');
					return new cls_table_data_view_table();
					break;
				case "desease":
					require_once('include/data/tables/cls_table_desease.php');
					return new cls_table_desease();
					break;
				case "device":
					require_once('include/data/tables/cls_table_device.php');
					return new cls_table_device();
					break;
				case "device_offer":
					require_once('include/data/tables/cls_table_device_offer.php');
					return new cls_table_device_offer();
					break;
				case "dms":
					require_once('include/data/tables/cls_table_dms.php');
					return new cls_table_dms();
					break;
				case "dms_document_type":
					require_once('include/data/tables/cls_table_dms_document_type.php');
					return new cls_table_dms_document_type();
					break;
				case "dms_type":
					require_once('include/data/tables/cls_table_dms_type.php');
					return new cls_table_dms_type();
					break;
				case "drupal_actions":
					require_once('include/data/tables/cls_table_drupal_actions.php');
					return new cls_table_drupal_actions();
					break;
				case "drupal_authmap":
					require_once('include/data/tables/cls_table_drupal_authmap.php');
					return new cls_table_drupal_authmap();
					break;
				case "drupal_batch":
					require_once('include/data/tables/cls_table_drupal_batch.php');
					return new cls_table_drupal_batch();
					break;
				case "drupal_block":
					require_once('include/data/tables/cls_table_drupal_block.php');
					return new cls_table_drupal_block();
					break;
				case "drupal_block_custom":
					require_once('include/data/tables/cls_table_drupal_block_custom.php');
					return new cls_table_drupal_block_custom();
					break;
				case "drupal_block_node_type":
					require_once('include/data/tables/cls_table_drupal_block_node_type.php');
					return new cls_table_drupal_block_node_type();
					break;
				case "drupal_block_role":
					require_once('include/data/tables/cls_table_drupal_block_role.php');
					return new cls_table_drupal_block_role();
					break;
				case "drupal_blocked_ips":
					require_once('include/data/tables/cls_table_drupal_blocked_ips.php');
					return new cls_table_drupal_blocked_ips();
					break;
				case "drupal_cache":
					require_once('include/data/tables/cls_table_drupal_cache.php');
					return new cls_table_drupal_cache();
					break;
				case "drupal_cache_block":
					require_once('include/data/tables/cls_table_drupal_cache_block.php');
					return new cls_table_drupal_cache_block();
					break;
				case "drupal_cache_bootstrap":
					require_once('include/data/tables/cls_table_drupal_cache_bootstrap.php');
					return new cls_table_drupal_cache_bootstrap();
					break;
				case "drupal_cache_field":
					require_once('include/data/tables/cls_table_drupal_cache_field.php');
					return new cls_table_drupal_cache_field();
					break;
				case "drupal_cache_filter":
					require_once('include/data/tables/cls_table_drupal_cache_filter.php');
					return new cls_table_drupal_cache_filter();
					break;
				case "drupal_cache_form":
					require_once('include/data/tables/cls_table_drupal_cache_form.php');
					return new cls_table_drupal_cache_form();
					break;
				case "drupal_cache_image":
					require_once('include/data/tables/cls_table_drupal_cache_image.php');
					return new cls_table_drupal_cache_image();
					break;
				case "drupal_cache_menu":
					require_once('include/data/tables/cls_table_drupal_cache_menu.php');
					return new cls_table_drupal_cache_menu();
					break;
				case "drupal_cache_page":
					require_once('include/data/tables/cls_table_drupal_cache_page.php');
					return new cls_table_drupal_cache_page();
					break;
				case "drupal_cache_path":
					require_once('include/data/tables/cls_table_drupal_cache_path.php');
					return new cls_table_drupal_cache_path();
					break;
				case "drupal_cache_update":
					require_once('include/data/tables/cls_table_drupal_cache_update.php');
					return new cls_table_drupal_cache_update();
					break;
				case "drupal_comment":
					require_once('include/data/tables/cls_table_drupal_comment.php');
					return new cls_table_drupal_comment();
					break;
				case "drupal_date_format_locale":
					require_once('include/data/tables/cls_table_drupal_date_format_locale.php');
					return new cls_table_drupal_date_format_locale();
					break;
				case "drupal_date_format_type":
					require_once('include/data/tables/cls_table_drupal_date_format_type.php');
					return new cls_table_drupal_date_format_type();
					break;
				case "drupal_date_formats":
					require_once('include/data/tables/cls_table_drupal_date_formats.php');
					return new cls_table_drupal_date_formats();
					break;
				case "drupal_field_config":
					require_once('include/data/tables/cls_table_drupal_field_config.php');
					return new cls_table_drupal_field_config();
					break;
				case "drupal_field_config_instance":
					require_once('include/data/tables/cls_table_drupal_field_config_instance.php');
					return new cls_table_drupal_field_config_instance();
					break;
				case "drupal_field_data_body":
					require_once('include/data/tables/cls_table_drupal_field_data_body.php');
					return new cls_table_drupal_field_data_body();
					break;
				case "drupal_field_data_comment_body":
					require_once('include/data/tables/cls_table_drupal_field_data_comment_body.php');
					return new cls_table_drupal_field_data_comment_body();
					break;
				case "drupal_field_data_field_first_name":
					require_once('include/data/tables/cls_table_drupal_field_data_field_first_name.php');
					return new cls_table_drupal_field_data_field_first_name();
					break;
				case "drupal_field_data_field_image":
					require_once('include/data/tables/cls_table_drupal_field_data_field_image.php');
					return new cls_table_drupal_field_data_field_image();
					break;
				case "drupal_field_data_field_tags":
					require_once('include/data/tables/cls_table_drupal_field_data_field_tags.php');
					return new cls_table_drupal_field_data_field_tags();
					break;
				case "drupal_field_revision_body":
					require_once('include/data/tables/cls_table_drupal_field_revision_body.php');
					return new cls_table_drupal_field_revision_body();
					break;
				case "drupal_field_revision_comment_body":
					require_once('include/data/tables/cls_table_drupal_field_revision_comment_body.php');
					return new cls_table_drupal_field_revision_comment_body();
					break;
				case "drupal_field_revision_field_first_name":
					require_once('include/data/tables/cls_table_drupal_field_revision_field_first_name.php');
					return new cls_table_drupal_field_revision_field_first_name();
					break;
				case "drupal_field_revision_field_image":
					require_once('include/data/tables/cls_table_drupal_field_revision_field_image.php');
					return new cls_table_drupal_field_revision_field_image();
					break;
				case "drupal_field_revision_field_tags":
					require_once('include/data/tables/cls_table_drupal_field_revision_field_tags.php');
					return new cls_table_drupal_field_revision_field_tags();
					break;
				case "drupal_file_managed":
					require_once('include/data/tables/cls_table_drupal_file_managed.php');
					return new cls_table_drupal_file_managed();
					break;
				case "drupal_file_usage":
					require_once('include/data/tables/cls_table_drupal_file_usage.php');
					return new cls_table_drupal_file_usage();
					break;
				case "drupal_filter":
					require_once('include/data/tables/cls_table_drupal_filter.php');
					return new cls_table_drupal_filter();
					break;
				case "drupal_filter_format":
					require_once('include/data/tables/cls_table_drupal_filter_format.php');
					return new cls_table_drupal_filter_format();
					break;
				case "drupal_flood":
					require_once('include/data/tables/cls_table_drupal_flood.php');
					return new cls_table_drupal_flood();
					break;
				case "drupal_history":
					require_once('include/data/tables/cls_table_drupal_history.php');
					return new cls_table_drupal_history();
					break;
				case "drupal_image_effects":
					require_once('include/data/tables/cls_table_drupal_image_effects.php');
					return new cls_table_drupal_image_effects();
					break;
				case "drupal_image_styles":
					require_once('include/data/tables/cls_table_drupal_image_styles.php');
					return new cls_table_drupal_image_styles();
					break;
				case "drupal_languages":
					require_once('include/data/tables/cls_table_drupal_languages.php');
					return new cls_table_drupal_languages();
					break;
				case "drupal_locales_source":
					require_once('include/data/tables/cls_table_drupal_locales_source.php');
					return new cls_table_drupal_locales_source();
					break;
				case "drupal_locales_target":
					require_once('include/data/tables/cls_table_drupal_locales_target.php');
					return new cls_table_drupal_locales_target();
					break;
				case "drupal_menu_custom":
					require_once('include/data/tables/cls_table_drupal_menu_custom.php');
					return new cls_table_drupal_menu_custom();
					break;
				case "drupal_menu_links":
					require_once('include/data/tables/cls_table_drupal_menu_links.php');
					return new cls_table_drupal_menu_links();
					break;
				case "drupal_menu_router":
					require_once('include/data/tables/cls_table_drupal_menu_router.php');
					return new cls_table_drupal_menu_router();
					break;
				case "drupal_node":
					require_once('include/data/tables/cls_table_drupal_node.php');
					return new cls_table_drupal_node();
					break;
				case "drupal_node_access":
					require_once('include/data/tables/cls_table_drupal_node_access.php');
					return new cls_table_drupal_node_access();
					break;
				case "drupal_node_comment_statistics":
					require_once('include/data/tables/cls_table_drupal_node_comment_statistics.php');
					return new cls_table_drupal_node_comment_statistics();
					break;
				case "drupal_node_revision":
					require_once('include/data/tables/cls_table_drupal_node_revision.php');
					return new cls_table_drupal_node_revision();
					break;
				case "drupal_node_type":
					require_once('include/data/tables/cls_table_drupal_node_type.php');
					return new cls_table_drupal_node_type();
					break;
				case "drupal_person":
					require_once('include/data/tables/cls_table_drupal_person.php');
					return new cls_table_drupal_person();
					break;
				case "drupal_profile":
					require_once('include/data/tables/cls_table_drupal_profile.php');
					return new cls_table_drupal_profile();
					break;
				case "drupal_profile_type":
					require_once('include/data/tables/cls_table_drupal_profile_type.php');
					return new cls_table_drupal_profile_type();
					break;
				case "drupal_queue":
					require_once('include/data/tables/cls_table_drupal_queue.php');
					return new cls_table_drupal_queue();
					break;
				case "drupal_rdf_mapping":
					require_once('include/data/tables/cls_table_drupal_rdf_mapping.php');
					return new cls_table_drupal_rdf_mapping();
					break;
				case "drupal_registry":
					require_once('include/data/tables/cls_table_drupal_registry.php');
					return new cls_table_drupal_registry();
					break;
				case "drupal_registry_file":
					require_once('include/data/tables/cls_table_drupal_registry_file.php');
					return new cls_table_drupal_registry_file();
					break;
				case "drupal_role":
					require_once('include/data/tables/cls_table_drupal_role.php');
					return new cls_table_drupal_role();
					break;
				case "drupal_role_permission":
					require_once('include/data/tables/cls_table_drupal_role_permission.php');
					return new cls_table_drupal_role_permission();
					break;
				case "drupal_search_dataset":
					require_once('include/data/tables/cls_table_drupal_search_dataset.php');
					return new cls_table_drupal_search_dataset();
					break;
				case "drupal_search_index":
					require_once('include/data/tables/cls_table_drupal_search_index.php');
					return new cls_table_drupal_search_index();
					break;
				case "drupal_search_node_links":
					require_once('include/data/tables/cls_table_drupal_search_node_links.php');
					return new cls_table_drupal_search_node_links();
					break;
				case "drupal_search_total":
					require_once('include/data/tables/cls_table_drupal_search_total.php');
					return new cls_table_drupal_search_total();
					break;
				case "drupal_semaphore":
					require_once('include/data/tables/cls_table_drupal_semaphore.php');
					return new cls_table_drupal_semaphore();
					break;
				case "drupal_sequences":
					require_once('include/data/tables/cls_table_drupal_sequences.php');
					return new cls_table_drupal_sequences();
					break;
				case "drupal_sessions":
					require_once('include/data/tables/cls_table_drupal_sessions.php');
					return new cls_table_drupal_sessions();
					break;
				case "drupal_shortcut_set":
					require_once('include/data/tables/cls_table_drupal_shortcut_set.php');
					return new cls_table_drupal_shortcut_set();
					break;
				case "drupal_shortcut_set_users":
					require_once('include/data/tables/cls_table_drupal_shortcut_set_users.php');
					return new cls_table_drupal_shortcut_set_users();
					break;
				case "drupal_system":
					require_once('include/data/tables/cls_table_drupal_system.php');
					return new cls_table_drupal_system();
					break;
				case "drupal_taxonomy_index":
					require_once('include/data/tables/cls_table_drupal_taxonomy_index.php');
					return new cls_table_drupal_taxonomy_index();
					break;
				case "drupal_taxonomy_term_data":
					require_once('include/data/tables/cls_table_drupal_taxonomy_term_data.php');
					return new cls_table_drupal_taxonomy_term_data();
					break;
				case "drupal_taxonomy_term_hierarchy":
					require_once('include/data/tables/cls_table_drupal_taxonomy_term_hierarchy.php');
					return new cls_table_drupal_taxonomy_term_hierarchy();
					break;
				case "drupal_taxonomy_vocabulary":
					require_once('include/data/tables/cls_table_drupal_taxonomy_vocabulary.php');
					return new cls_table_drupal_taxonomy_vocabulary();
					break;
				case "drupal_url_alias":
					require_once('include/data/tables/cls_table_drupal_url_alias.php');
					return new cls_table_drupal_url_alias();
					break;
				case "drupal_users":
					require_once('include/data/tables/cls_table_drupal_users.php');
					return new cls_table_drupal_users();
					break;
				case "drupal_users_roles":
					require_once('include/data/tables/cls_table_drupal_users_roles.php');
					return new cls_table_drupal_users_roles();
					break;
				case "drupal_variable":
					require_once('include/data/tables/cls_table_drupal_variable.php');
					return new cls_table_drupal_variable();
					break;
				case "drupal_watchdog":
					require_once('include/data/tables/cls_table_drupal_watchdog.php');
					return new cls_table_drupal_watchdog();
					break;
				case "event_type":
					require_once('include/data/tables/cls_table_event_type.php');
					return new cls_table_event_type();
					break;
				case "fixed_asset":
					require_once('include/data/tables/cls_table_fixed_asset.php');
					return new cls_table_fixed_asset();
					break;
				case "fixed_asset_group":
					require_once('include/data/tables/cls_table_fixed_asset_group.php');
					return new cls_table_fixed_asset_group();
					break;
				case "fixed_asset_group_account":
					require_once('include/data/tables/cls_table_fixed_asset_group_account.php');
					return new cls_table_fixed_asset_group_account();
					break;
				case "geodb_changelog":
					require_once('include/data/tables/cls_table_geodb_changelog.php');
					return new cls_table_geodb_changelog();
					break;
				case "geodb_coordinates":
					require_once('include/data/tables/cls_table_geodb_coordinates.php');
					return new cls_table_geodb_coordinates();
					break;
				case "geodb_floatdata":
					require_once('include/data/tables/cls_table_geodb_floatdata.php');
					return new cls_table_geodb_floatdata();
					break;
				case "geodb_intdata":
					require_once('include/data/tables/cls_table_geodb_intdata.php');
					return new cls_table_geodb_intdata();
					break;
				case "geodb_locations":
					require_once('include/data/tables/cls_table_geodb_locations.php');
					return new cls_table_geodb_locations();
					break;
				case "geodb_textdata":
					require_once('include/data/tables/cls_table_geodb_textdata.php');
					return new cls_table_geodb_textdata();
					break;
				case "geodb_type_names":
					require_once('include/data/tables/cls_table_geodb_type_names.php');
					return new cls_table_geodb_type_names();
					break;
				case "insurance":
					require_once('include/data/tables/cls_table_insurance.php');
					return new cls_table_insurance();
					break;
				case "insurance_district":
					require_once('include/data/tables/cls_table_insurance_district.php');
					return new cls_table_insurance_district();
					break;
				case "insurance_group":
					require_once('include/data/tables/cls_table_insurance_group.php');
					return new cls_table_insurance_group();
					break;
				case "insurance_price":
					require_once('include/data/tables/cls_table_insurance_price.php');
					return new cls_table_insurance_price();
					break;
				case "invoice":
					require_once('include/data/tables/cls_table_invoice.php');
					return new cls_table_invoice();
					break;
				case "invoice_item":
					require_once('include/data/tables/cls_table_invoice_item.php');
					return new cls_table_invoice_item();
					break;
				case "location":
					require_once('include/data/tables/cls_table_location.php');
					return new cls_table_location();
					break;
				case "location_independent_table":
					require_once('include/data/tables/cls_table_location_independent_table.php');
					return new cls_table_location_independent_table();
					break;
				case "logon":
					require_once('include/data/tables/cls_table_logon.php');
					return new cls_table_logon();
					break;
				case "main_page":
					require_once('include/data/tables/cls_table_main_page.php');
					return new cls_table_main_page();
					break;
				case "main_page_template":
					require_once('include/data/tables/cls_table_main_page_template.php');
					return new cls_table_main_page_template();
					break;
				case "menu":
					require_once('include/data/tables/cls_table_menu.php');
					return new cls_table_menu();
					break;
				case "menu_access_group":
					require_once('include/data/tables/cls_table_menu_access_group.php');
					return new cls_table_menu_access_group();
					break;
				case "menu_group":
					require_once('include/data/tables/cls_table_menu_group.php');
					return new cls_table_menu_group();
					break;
				case "menu_item":
					require_once('include/data/tables/cls_table_menu_item.php');
					return new cls_table_menu_item();
					break;
				case "menu_template":
					require_once('include/data/tables/cls_table_menu_template.php');
					return new cls_table_menu_template();
					break;
				case "offer":
					require_once('include/data/tables/cls_table_offer.php');
					return new cls_table_offer();
					break;
				case "offer_event":
					require_once('include/data/tables/cls_table_offer_event.php');
					return new cls_table_offer_event();
					break;
				case "offer_time":
					require_once('include/data/tables/cls_table_offer_time.php');
					return new cls_table_offer_time();
					break;
				case "offer_type":
					require_once('include/data/tables/cls_table_offer_type.php');
					return new cls_table_offer_type();
					break;
				case "onetime_payment":
					require_once('include/data/tables/cls_table_onetime_payment.php');
					return new cls_table_onetime_payment();
					break;
				case "person":
					require_once('include/data/tables/cls_table_person.php');
					return new cls_table_person();
					break;
				case "person_access_group":
					require_once('include/data/tables/cls_table_person_access_group.php');
					return new cls_table_person_access_group();
					break;
				case "person_account":
					require_once('include/data/tables/cls_table_person_account.php');
					return new cls_table_person_account();
					break;
				case "person_article_renting":
					require_once('include/data/tables/cls_table_person_article_renting.php');
					return new cls_table_person_article_renting();
					break;
				case "person_desease":
					require_once('include/data/tables/cls_table_person_desease.php');
					return new cls_table_person_desease();
					break;
				case "person_search_values":
					require_once('include/data/tables/cls_table_person_search_values.php');
					return new cls_table_person_search_values();
					break;
				case "person_state":
					require_once('include/data/tables/cls_table_person_state.php');
					return new cls_table_person_state();
					break;
				case "person_state_type":
					require_once('include/data/tables/cls_table_person_state_type.php');
					return new cls_table_person_state_type();
					break;
				case "person_state_type_access_group":
					require_once('include/data/tables/cls_table_person_state_type_access_group.php');
					return new cls_table_person_state_type_access_group();
					break;
				case "person_state_type_account":
					require_once('include/data/tables/cls_table_person_state_type_account.php');
					return new cls_table_person_state_type_account();
					break;
				case "person_states_group":
					require_once('include/data/tables/cls_table_person_states_group.php');
					return new cls_table_person_states_group();
					break;
				case "posting_header":
					require_once('include/data/tables/cls_table_posting_header.php');
					return new cls_table_posting_header();
					break;
				case "posting_line":
					require_once('include/data/tables/cls_table_posting_line.php');
					return new cls_table_posting_line();
					break;
				case "prescription":
					require_once('include/data/tables/cls_table_prescription.php');
					return new cls_table_prescription();
					break;
				case "prescription_type":
					require_once('include/data/tables/cls_table_prescription_type.php');
					return new cls_table_prescription_type();
					break;
				case "prescription_type_pos":
					require_once('include/data/tables/cls_table_prescription_type_pos.php');
					return new cls_table_prescription_type_pos();
					break;
				case "restperiod":
					require_once('include/data/tables/cls_table_restperiod.php');
					return new cls_table_restperiod();
					break;
				case "ribbonbar":
					require_once('include/data/tables/cls_table_ribbonbar.php');
					return new cls_table_ribbonbar();
					break;
				case "ribbonbar_group":
					require_once('include/data/tables/cls_table_ribbonbar_group.php');
					return new cls_table_ribbonbar_group();
					break;
				case "ribbonbar_item":
					require_once('include/data/tables/cls_table_ribbonbar_item.php');
					return new cls_table_ribbonbar_item();
					break;
				case "ribbonbar_tab":
					require_once('include/data/tables/cls_table_ribbonbar_tab.php');
					return new cls_table_ribbonbar_tab();
					break;
				case "ribbonbar_template":
					require_once('include/data/tables/cls_table_ribbonbar_template.php');
					return new cls_table_ribbonbar_template();
					break;
				case "salutation":
					require_once('include/data/tables/cls_table_salutation.php');
					return new cls_table_salutation();
					break;
				case "sport":
					require_once('include/data/tables/cls_table_sport.php');
					return new cls_table_sport();
					break;
				case "standard_icon":
					require_once('include/data/tables/cls_table_standard_icon.php');
					return new cls_table_standard_icon();
					break;
				case "supplier_data":
					require_once('include/data/tables/cls_table_supplier_data.php');
					return new cls_table_supplier_data();
					break;
				case "supplier_price":
					require_once('include/data/tables/cls_table_supplier_price.php');
					return new cls_table_supplier_price();
					break;
				case "swift_statement":
					require_once('include/data/tables/cls_table_swift_statement.php');
					return new cls_table_swift_statement();
					break;
				case "swift_statement_line":
					require_once('include/data/tables/cls_table_swift_statement_line.php');
					return new cls_table_swift_statement_line();
					break;
				case "swift_statement_line_posting":
					require_once('include/data/tables/cls_table_swift_statement_line_posting.php');
					return new cls_table_swift_statement_line_posting();
					break;
				case "table_bean":
					require_once('include/data/tables/cls_table_table_bean.php');
					return new cls_table_table_bean();
					break;
				case "table_bean_access_group":
					require_once('include/data/tables/cls_table_table_bean_access_group.php');
					return new cls_table_table_bean_access_group();
					break;
				case "table_bean_table":
					require_once('include/data/tables/cls_table_table_bean_table.php');
					return new cls_table_table_bean_table();
					break;
				case "table_column":
					require_once('include/data/tables/cls_table_table_column.php');
					return new cls_table_table_column();
					break;
				case "table_data":
					require_once('include/data/tables/cls_table_table_data.php');
					return new cls_table_table_data();
					break;
				case "table_lock":
					require_once('include/data/tables/cls_table_table_lock.php');
					return new cls_table_table_lock();
					break;
				case "table_lookup_column":
					require_once('include/data/tables/cls_table_table_lookup_column.php');
					return new cls_table_table_lookup_column();
					break;
				case "table_relation":
					require_once('include/data/tables/cls_table_table_relation.php');
					return new cls_table_table_relation();
					break;
				case "table_search_column":
					require_once('include/data/tables/cls_table_table_search_column.php');
					return new cls_table_table_search_column();
					break;
				case "table_search_template":
					require_once('include/data/tables/cls_table_table_search_template.php');
					return new cls_table_table_search_template();
					break;
				case "table_security":
					require_once('include/data/tables/cls_table_table_security.php');
					return new cls_table_table_security();
					break;
				case "table_test":
					require_once('include/data/tables/cls_table_table_test.php');
					return new cls_table_table_test();
					break;
				case "table_test_data":
					require_once('include/data/tables/cls_table_table_test_data.php');
					return new cls_table_table_test_data();
					break;
				case "table_test_group":
					require_once('include/data/tables/cls_table_table_test_group.php');
					return new cls_table_table_test_group();
					break;
				case "table_test_group_table":
					require_once('include/data/tables/cls_table_table_test_group_table.php');
					return new cls_table_table_test_group_table();
					break;
				case "table_test_item":
					require_once('include/data/tables/cls_table_table_test_item.php');
					return new cls_table_table_test_item();
					break;
				case "table_test_result":
					require_once('include/data/tables/cls_table_table_test_result.php');
					return new cls_table_table_test_result();
					break;
				case "table_test_test":
					require_once('include/data/tables/cls_table_table_test_test.php');
					return new cls_table_table_test_test();
					break;
				case "therapy_goal":
					require_once('include/data/tables/cls_table_therapy_goal.php');
					return new cls_table_therapy_goal();
					break;
				case "therapy_plan":
					require_once('include/data/tables/cls_table_therapy_plan.php');
					return new cls_table_therapy_plan();
					break;
				case "therapy_plan_template":
					require_once('include/data/tables/cls_table_therapy_plan_template.php');
					return new cls_table_therapy_plan_template();
					break;
				case "time_unit":
					require_once('include/data/tables/cls_table_time_unit.php');
					return new cls_table_time_unit();
					break;
				case "transfer":
					require_once('include/data/tables/cls_table_transfer.php');
					return new cls_table_transfer();
					break;
				case "transfer_item":
					require_once('include/data/tables/cls_table_transfer_item.php');
					return new cls_table_transfer_item();
					break;
				case "uom":
					require_once('include/data/tables/cls_table_uom.php');
					return new cls_table_uom();
					break;
				case "userconfiguration":
					require_once('include/data/tables/cls_table_userconfiguration.php');
					return new cls_table_userconfiguration();
					break;
			}
	}
}
?>
