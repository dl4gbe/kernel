<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_table_includes
{
public static function include_table($tablename)
	{
		switch ($tablename)
			{
				case "access_group":
					require_once('include/data/tables/cls_table_access_group.php');
					break;
				case "account":
					require_once('include/data/tables/cls_table_account.php');
					break;
				case "account_bankaccount":
					require_once('include/data/tables/cls_table_account_bankaccount.php');
					break;
				case "account_chart_of_account":
					require_once('include/data/tables/cls_table_account_chart_of_account.php');
					break;
				case "account_group":
					require_once('include/data/tables/cls_table_account_group.php');
					break;
				case "account_match":
					require_once('include/data/tables/cls_table_account_match.php');
					break;
				case "action":
					require_once('include/data/tables/cls_table_action.php');
					break;
				case "address":
					require_once('include/data/tables/cls_table_address.php');
					break;
				case "address_type":
					require_once('include/data/tables/cls_table_address_type.php');
					break;
				case "application":
					require_once('include/data/tables/cls_table_application.php');
					break;
				case "application_controller":
					require_once('include/data/tables/cls_table_application_controller.php');
					break;
				case "application_template":
					require_once('include/data/tables/cls_table_application_template.php');
					break;
				case "article":
					require_once('include/data/tables/cls_table_article.php');
					break;
				case "article_fixed_asset":
					require_once('include/data/tables/cls_table_article_fixed_asset.php');
					break;
				case "article_group":
					require_once('include/data/tables/cls_table_article_group.php');
					break;
				case "article_group_account":
					require_once('include/data/tables/cls_table_article_group_account.php');
					break;
				case "article_list":
					require_once('include/data/tables/cls_table_article_list.php');
					break;
				case "article_list_pos":
					require_once('include/data/tables/cls_table_article_list_pos.php');
					break;
				case "article_person_rent":
					require_once('include/data/tables/cls_table_article_person_rent.php');
					break;
				case "article_price":
					require_once('include/data/tables/cls_table_article_price.php');
					break;
				case "article_price_group":
					require_once('include/data/tables/cls_table_article_price_group.php');
					break;
				case "article_quantity":
					require_once('include/data/tables/cls_table_article_quantity.php');
					break;
				case "article_rent_price":
					require_once('include/data/tables/cls_table_article_rent_price.php');
					break;
				case "article_supplier":
					require_once('include/data/tables/cls_table_article_supplier.php');
					break;
				case "bank":
					require_once('include/data/tables/cls_table_bank.php');
					break;
				case "bank_account":
					require_once('include/data/tables/cls_table_bank_account.php');
					break;
				case "bank_account_mandat":
					require_once('include/data/tables/cls_table_bank_account_mandat.php');
					break;
				case "base_control_type":
					require_once('include/data/tables/cls_table_base_control_type.php');
					break;
				case "campaign":
					require_once('include/data/tables/cls_table_campaign.php');
					break;
				case "campaign_group":
					require_once('include/data/tables/cls_table_campaign_group.php');
					break;
				case "certificate_type":
					require_once('include/data/tables/cls_table_certificate_type.php');
					break;
				case "chart_of_account":
					require_once('include/data/tables/cls_table_chart_of_account.php');
					break;
				case "column_security":
					require_once('include/data/tables/cls_table_column_security.php');
					break;
				case "communication":
					require_once('include/data/tables/cls_table_communication.php');
					break;
				case "communication_event":
					require_once('include/data/tables/cls_table_communication_event.php');
					break;
				case "communication_reason":
					require_once('include/data/tables/cls_table_communication_reason.php');
					break;
				case "communication_reason_type":
					require_once('include/data/tables/cls_table_communication_reason_type.php');
					break;
				case "communication_reason_type_person_state":
					require_once('include/data/tables/cls_table_communication_reason_type_person_state.php');
					break;
				case "communication_type":
					require_once('include/data/tables/cls_table_communication_type.php');
					break;
				case "computer_configuration":
					require_once('include/data/tables/cls_table_computer_configuration.php');
					break;
				case "config_group":
					require_once('include/data/tables/cls_table_config_group.php');
					break;
				case "config_group_item":
					require_once('include/data/tables/cls_table_config_group_item.php');
					break;
				case "config_item_access_group":
					require_once('include/data/tables/cls_table_config_item_access_group.php');
					break;
				case "configuration":
					require_once('include/data/tables/cls_table_configuration.php');
					break;
				case "contract":
					require_once('include/data/tables/cls_table_contract.php');
					break;
				case "contract_plan":
					require_once('include/data/tables/cls_table_contract_plan.php');
					break;
				case "contract_pos":
					require_once('include/data/tables/cls_table_contract_pos.php');
					break;
				case "contract_template":
					require_once('include/data/tables/cls_table_contract_template.php');
					break;
				case "contract_template_group":
					require_once('include/data/tables/cls_table_contract_template_group.php');
					break;
				case "contract_template_item":
					require_once('include/data/tables/cls_table_contract_template_item.php');
					break;
				case "contract_template_onetimepayment":
					require_once('include/data/tables/cls_table_contract_template_onetimepayment.php');
					break;
				case "contract_template_pos":
					require_once('include/data/tables/cls_table_contract_template_pos.php');
					break;
				case "control":
					require_once('include/data/tables/cls_table_control.php');
					break;
				case "control_control_group":
					require_once('include/data/tables/cls_table_control_control_group.php');
					break;
				case "control_group":
					require_once('include/data/tables/cls_table_control_group.php');
					break;
				case "country":
					require_once('include/data/tables/cls_table_country.php');
					break;
				case "data_change":
					require_once('include/data/tables/cls_table_data_change.php');
					break;
				case "data_help":
					require_once('include/data/tables/cls_table_data_help.php');
					break;
				case "data_location":
					require_once('include/data/tables/cls_table_data_location.php');
					break;
				case "data_posting":
					require_once('include/data/tables/cls_table_data_posting.php');
					break;
				case "data_property":
					require_once('include/data/tables/cls_table_data_property.php');
					break;
				case "data_property_type":
					require_once('include/data/tables/cls_table_data_property_type.php');
					break;
				case "data_property_type_val":
					require_once('include/data/tables/cls_table_data_property_type_val.php');
					break;
				case "data_relation":
					require_once('include/data/tables/cls_table_data_relation.php');
					break;
				case "data_relation_type":
					require_once('include/data/tables/cls_table_data_relation_type.php');
					break;
				case "data_relation_types_val":
					require_once('include/data/tables/cls_table_data_relation_types_val.php');
					break;
				case "data_translation":
					require_once('include/data/tables/cls_table_data_translation.php');
					break;
				case "data_view":
					require_once('include/data/tables/cls_table_data_view.php');
					break;
				case "data_view_field":
					require_once('include/data/tables/cls_table_data_view_field.php');
					break;
				case "data_view_restriction":
					require_once('include/data/tables/cls_table_data_view_restriction.php');
					break;
				case "data_view_table":
					require_once('include/data/tables/cls_table_data_view_table.php');
					break;
				case "desease":
					require_once('include/data/tables/cls_table_desease.php');
					break;
				case "device":
					require_once('include/data/tables/cls_table_device.php');
					break;
				case "device_offer":
					require_once('include/data/tables/cls_table_device_offer.php');
					break;
				case "dms":
					require_once('include/data/tables/cls_table_dms.php');
					break;
				case "dms_document_type":
					require_once('include/data/tables/cls_table_dms_document_type.php');
					break;
				case "dms_type":
					require_once('include/data/tables/cls_table_dms_type.php');
					break;
				case "drupal_actions":
					require_once('include/data/tables/cls_table_drupal_actions.php');
					break;
				case "drupal_authmap":
					require_once('include/data/tables/cls_table_drupal_authmap.php');
					break;
				case "drupal_batch":
					require_once('include/data/tables/cls_table_drupal_batch.php');
					break;
				case "drupal_block":
					require_once('include/data/tables/cls_table_drupal_block.php');
					break;
				case "drupal_block_custom":
					require_once('include/data/tables/cls_table_drupal_block_custom.php');
					break;
				case "drupal_block_node_type":
					require_once('include/data/tables/cls_table_drupal_block_node_type.php');
					break;
				case "drupal_block_role":
					require_once('include/data/tables/cls_table_drupal_block_role.php');
					break;
				case "drupal_blocked_ips":
					require_once('include/data/tables/cls_table_drupal_blocked_ips.php');
					break;
				case "drupal_cache":
					require_once('include/data/tables/cls_table_drupal_cache.php');
					break;
				case "drupal_cache_block":
					require_once('include/data/tables/cls_table_drupal_cache_block.php');
					break;
				case "drupal_cache_bootstrap":
					require_once('include/data/tables/cls_table_drupal_cache_bootstrap.php');
					break;
				case "drupal_cache_field":
					require_once('include/data/tables/cls_table_drupal_cache_field.php');
					break;
				case "drupal_cache_filter":
					require_once('include/data/tables/cls_table_drupal_cache_filter.php');
					break;
				case "drupal_cache_form":
					require_once('include/data/tables/cls_table_drupal_cache_form.php');
					break;
				case "drupal_cache_image":
					require_once('include/data/tables/cls_table_drupal_cache_image.php');
					break;
				case "drupal_cache_menu":
					require_once('include/data/tables/cls_table_drupal_cache_menu.php');
					break;
				case "drupal_cache_page":
					require_once('include/data/tables/cls_table_drupal_cache_page.php');
					break;
				case "drupal_cache_path":
					require_once('include/data/tables/cls_table_drupal_cache_path.php');
					break;
				case "drupal_cache_update":
					require_once('include/data/tables/cls_table_drupal_cache_update.php');
					break;
				case "drupal_comment":
					require_once('include/data/tables/cls_table_drupal_comment.php');
					break;
				case "drupal_date_format_locale":
					require_once('include/data/tables/cls_table_drupal_date_format_locale.php');
					break;
				case "drupal_date_format_type":
					require_once('include/data/tables/cls_table_drupal_date_format_type.php');
					break;
				case "drupal_date_formats":
					require_once('include/data/tables/cls_table_drupal_date_formats.php');
					break;
				case "drupal_field_config":
					require_once('include/data/tables/cls_table_drupal_field_config.php');
					break;
				case "drupal_field_config_instance":
					require_once('include/data/tables/cls_table_drupal_field_config_instance.php');
					break;
				case "drupal_field_data_body":
					require_once('include/data/tables/cls_table_drupal_field_data_body.php');
					break;
				case "drupal_field_data_comment_body":
					require_once('include/data/tables/cls_table_drupal_field_data_comment_body.php');
					break;
				case "drupal_field_data_field_first_name":
					require_once('include/data/tables/cls_table_drupal_field_data_field_first_name.php');
					break;
				case "drupal_field_data_field_image":
					require_once('include/data/tables/cls_table_drupal_field_data_field_image.php');
					break;
				case "drupal_field_data_field_tags":
					require_once('include/data/tables/cls_table_drupal_field_data_field_tags.php');
					break;
				case "drupal_field_revision_body":
					require_once('include/data/tables/cls_table_drupal_field_revision_body.php');
					break;
				case "drupal_field_revision_comment_body":
					require_once('include/data/tables/cls_table_drupal_field_revision_comment_body.php');
					break;
				case "drupal_field_revision_field_first_name":
					require_once('include/data/tables/cls_table_drupal_field_revision_field_first_name.php');
					break;
				case "drupal_field_revision_field_image":
					require_once('include/data/tables/cls_table_drupal_field_revision_field_image.php');
					break;
				case "drupal_field_revision_field_tags":
					require_once('include/data/tables/cls_table_drupal_field_revision_field_tags.php');
					break;
				case "drupal_file_managed":
					require_once('include/data/tables/cls_table_drupal_file_managed.php');
					break;
				case "drupal_file_usage":
					require_once('include/data/tables/cls_table_drupal_file_usage.php');
					break;
				case "drupal_filter":
					require_once('include/data/tables/cls_table_drupal_filter.php');
					break;
				case "drupal_filter_format":
					require_once('include/data/tables/cls_table_drupal_filter_format.php');
					break;
				case "drupal_flood":
					require_once('include/data/tables/cls_table_drupal_flood.php');
					break;
				case "drupal_history":
					require_once('include/data/tables/cls_table_drupal_history.php');
					break;
				case "drupal_image_effects":
					require_once('include/data/tables/cls_table_drupal_image_effects.php');
					break;
				case "drupal_image_styles":
					require_once('include/data/tables/cls_table_drupal_image_styles.php');
					break;
				case "drupal_languages":
					require_once('include/data/tables/cls_table_drupal_languages.php');
					break;
				case "drupal_locales_source":
					require_once('include/data/tables/cls_table_drupal_locales_source.php');
					break;
				case "drupal_locales_target":
					require_once('include/data/tables/cls_table_drupal_locales_target.php');
					break;
				case "drupal_menu_custom":
					require_once('include/data/tables/cls_table_drupal_menu_custom.php');
					break;
				case "drupal_menu_links":
					require_once('include/data/tables/cls_table_drupal_menu_links.php');
					break;
				case "drupal_menu_router":
					require_once('include/data/tables/cls_table_drupal_menu_router.php');
					break;
				case "drupal_node":
					require_once('include/data/tables/cls_table_drupal_node.php');
					break;
				case "drupal_node_access":
					require_once('include/data/tables/cls_table_drupal_node_access.php');
					break;
				case "drupal_node_comment_statistics":
					require_once('include/data/tables/cls_table_drupal_node_comment_statistics.php');
					break;
				case "drupal_node_revision":
					require_once('include/data/tables/cls_table_drupal_node_revision.php');
					break;
				case "drupal_node_type":
					require_once('include/data/tables/cls_table_drupal_node_type.php');
					break;
				case "drupal_person":
					require_once('include/data/tables/cls_table_drupal_person.php');
					break;
				case "drupal_profile":
					require_once('include/data/tables/cls_table_drupal_profile.php');
					break;
				case "drupal_profile_type":
					require_once('include/data/tables/cls_table_drupal_profile_type.php');
					break;
				case "drupal_queue":
					require_once('include/data/tables/cls_table_drupal_queue.php');
					break;
				case "drupal_rdf_mapping":
					require_once('include/data/tables/cls_table_drupal_rdf_mapping.php');
					break;
				case "drupal_registry":
					require_once('include/data/tables/cls_table_drupal_registry.php');
					break;
				case "drupal_registry_file":
					require_once('include/data/tables/cls_table_drupal_registry_file.php');
					break;
				case "drupal_role":
					require_once('include/data/tables/cls_table_drupal_role.php');
					break;
				case "drupal_role_permission":
					require_once('include/data/tables/cls_table_drupal_role_permission.php');
					break;
				case "drupal_search_dataset":
					require_once('include/data/tables/cls_table_drupal_search_dataset.php');
					break;
				case "drupal_search_index":
					require_once('include/data/tables/cls_table_drupal_search_index.php');
					break;
				case "drupal_search_node_links":
					require_once('include/data/tables/cls_table_drupal_search_node_links.php');
					break;
				case "drupal_search_total":
					require_once('include/data/tables/cls_table_drupal_search_total.php');
					break;
				case "drupal_semaphore":
					require_once('include/data/tables/cls_table_drupal_semaphore.php');
					break;
				case "drupal_sequences":
					require_once('include/data/tables/cls_table_drupal_sequences.php');
					break;
				case "drupal_sessions":
					require_once('include/data/tables/cls_table_drupal_sessions.php');
					break;
				case "drupal_shortcut_set":
					require_once('include/data/tables/cls_table_drupal_shortcut_set.php');
					break;
				case "drupal_shortcut_set_users":
					require_once('include/data/tables/cls_table_drupal_shortcut_set_users.php');
					break;
				case "drupal_system":
					require_once('include/data/tables/cls_table_drupal_system.php');
					break;
				case "drupal_taxonomy_index":
					require_once('include/data/tables/cls_table_drupal_taxonomy_index.php');
					break;
				case "drupal_taxonomy_term_data":
					require_once('include/data/tables/cls_table_drupal_taxonomy_term_data.php');
					break;
				case "drupal_taxonomy_term_hierarchy":
					require_once('include/data/tables/cls_table_drupal_taxonomy_term_hierarchy.php');
					break;
				case "drupal_taxonomy_vocabulary":
					require_once('include/data/tables/cls_table_drupal_taxonomy_vocabulary.php');
					break;
				case "drupal_url_alias":
					require_once('include/data/tables/cls_table_drupal_url_alias.php');
					break;
				case "drupal_users":
					require_once('include/data/tables/cls_table_drupal_users.php');
					break;
				case "drupal_users_roles":
					require_once('include/data/tables/cls_table_drupal_users_roles.php');
					break;
				case "drupal_variable":
					require_once('include/data/tables/cls_table_drupal_variable.php');
					break;
				case "drupal_watchdog":
					require_once('include/data/tables/cls_table_drupal_watchdog.php');
					break;
				case "event_type":
					require_once('include/data/tables/cls_table_event_type.php');
					break;
				case "fixed_asset":
					require_once('include/data/tables/cls_table_fixed_asset.php');
					break;
				case "fixed_asset_group":
					require_once('include/data/tables/cls_table_fixed_asset_group.php');
					break;
				case "fixed_asset_group_account":
					require_once('include/data/tables/cls_table_fixed_asset_group_account.php');
					break;
				case "geodb_changelog":
					require_once('include/data/tables/cls_table_geodb_changelog.php');
					break;
				case "geodb_coordinates":
					require_once('include/data/tables/cls_table_geodb_coordinates.php');
					break;
				case "geodb_floatdata":
					require_once('include/data/tables/cls_table_geodb_floatdata.php');
					break;
				case "geodb_intdata":
					require_once('include/data/tables/cls_table_geodb_intdata.php');
					break;
				case "geodb_locations":
					require_once('include/data/tables/cls_table_geodb_locations.php');
					break;
				case "geodb_textdata":
					require_once('include/data/tables/cls_table_geodb_textdata.php');
					break;
				case "geodb_type_names":
					require_once('include/data/tables/cls_table_geodb_type_names.php');
					break;
				case "insurance":
					require_once('include/data/tables/cls_table_insurance.php');
					break;
				case "insurance_district":
					require_once('include/data/tables/cls_table_insurance_district.php');
					break;
				case "insurance_group":
					require_once('include/data/tables/cls_table_insurance_group.php');
					break;
				case "insurance_price":
					require_once('include/data/tables/cls_table_insurance_price.php');
					break;
				case "invoice":
					require_once('include/data/tables/cls_table_invoice.php');
					break;
				case "invoice_item":
					require_once('include/data/tables/cls_table_invoice_item.php');
					break;
				case "location":
					require_once('include/data/tables/cls_table_location.php');
					break;
				case "location_independent_table":
					require_once('include/data/tables/cls_table_location_independent_table.php');
					break;
				case "logon":
					require_once('include/data/tables/cls_table_logon.php');
					break;
				case "main_page":
					require_once('include/data/tables/cls_table_main_page.php');
					break;
				case "main_page_template":
					require_once('include/data/tables/cls_table_main_page_template.php');
					break;
				case "menu":
					require_once('include/data/tables/cls_table_menu.php');
					break;
				case "menu_access_group":
					require_once('include/data/tables/cls_table_menu_access_group.php');
					break;
				case "menu_group":
					require_once('include/data/tables/cls_table_menu_group.php');
					break;
				case "menu_item":
					require_once('include/data/tables/cls_table_menu_item.php');
					break;
				case "menu_template":
					require_once('include/data/tables/cls_table_menu_template.php');
					break;
				case "offer":
					require_once('include/data/tables/cls_table_offer.php');
					break;
				case "offer_event":
					require_once('include/data/tables/cls_table_offer_event.php');
					break;
				case "offer_time":
					require_once('include/data/tables/cls_table_offer_time.php');
					break;
				case "offer_type":
					require_once('include/data/tables/cls_table_offer_type.php');
					break;
				case "onetime_payment":
					require_once('include/data/tables/cls_table_onetime_payment.php');
					break;
				case "person":
					require_once('include/data/tables/cls_table_person.php');
					break;
				case "person_access_group":
					require_once('include/data/tables/cls_table_person_access_group.php');
					break;
				case "person_account":
					require_once('include/data/tables/cls_table_person_account.php');
					break;
				case "person_article_renting":
					require_once('include/data/tables/cls_table_person_article_renting.php');
					break;
				case "person_desease":
					require_once('include/data/tables/cls_table_person_desease.php');
					break;
				case "person_search_values":
					require_once('include/data/tables/cls_table_person_search_values.php');
					break;
				case "person_state":
					require_once('include/data/tables/cls_table_person_state.php');
					break;
				case "person_state_type":
					require_once('include/data/tables/cls_table_person_state_type.php');
					break;
				case "person_state_type_access_group":
					require_once('include/data/tables/cls_table_person_state_type_access_group.php');
					break;
				case "person_state_type_account":
					require_once('include/data/tables/cls_table_person_state_type_account.php');
					break;
				case "person_states_group":
					require_once('include/data/tables/cls_table_person_states_group.php');
					break;
				case "posting_header":
					require_once('include/data/tables/cls_table_posting_header.php');
					break;
				case "posting_line":
					require_once('include/data/tables/cls_table_posting_line.php');
					break;
				case "prescription":
					require_once('include/data/tables/cls_table_prescription.php');
					break;
				case "prescription_type":
					require_once('include/data/tables/cls_table_prescription_type.php');
					break;
				case "prescription_type_pos":
					require_once('include/data/tables/cls_table_prescription_type_pos.php');
					break;
				case "restperiod":
					require_once('include/data/tables/cls_table_restperiod.php');
					break;
				case "ribbonbar":
					require_once('include/data/tables/cls_table_ribbonbar.php');
					break;
				case "ribbonbar_group":
					require_once('include/data/tables/cls_table_ribbonbar_group.php');
					break;
				case "ribbonbar_item":
					require_once('include/data/tables/cls_table_ribbonbar_item.php');
					break;
				case "ribbonbar_tab":
					require_once('include/data/tables/cls_table_ribbonbar_tab.php');
					break;
				case "ribbonbar_template":
					require_once('include/data/tables/cls_table_ribbonbar_template.php');
					break;
				case "salutation":
					require_once('include/data/tables/cls_table_salutation.php');
					break;
				case "sport":
					require_once('include/data/tables/cls_table_sport.php');
					break;
				case "standard_icon":
					require_once('include/data/tables/cls_table_standard_icon.php');
					break;
				case "supplier_data":
					require_once('include/data/tables/cls_table_supplier_data.php');
					break;
				case "supplier_price":
					require_once('include/data/tables/cls_table_supplier_price.php');
					break;
				case "swift_statement":
					require_once('include/data/tables/cls_table_swift_statement.php');
					break;
				case "swift_statement_line":
					require_once('include/data/tables/cls_table_swift_statement_line.php');
					break;
				case "swift_statement_line_posting":
					require_once('include/data/tables/cls_table_swift_statement_line_posting.php');
					break;
				case "table_bean":
					require_once('include/data/tables/cls_table_table_bean.php');
					break;
				case "table_bean_access_group":
					require_once('include/data/tables/cls_table_table_bean_access_group.php');
					break;
				case "table_bean_table":
					require_once('include/data/tables/cls_table_table_bean_table.php');
					break;
				case "table_column":
					require_once('include/data/tables/cls_table_table_column.php');
					break;
				case "table_data":
					require_once('include/data/tables/cls_table_table_data.php');
					break;
				case "table_lock":
					require_once('include/data/tables/cls_table_table_lock.php');
					break;
				case "table_lookup_column":
					require_once('include/data/tables/cls_table_table_lookup_column.php');
					break;
				case "table_relation":
					require_once('include/data/tables/cls_table_table_relation.php');
					break;
				case "table_search_column":
					require_once('include/data/tables/cls_table_table_search_column.php');
					break;
				case "table_search_template":
					require_once('include/data/tables/cls_table_table_search_template.php');
					break;
				case "table_security":
					require_once('include/data/tables/cls_table_table_security.php');
					break;
				case "table_test":
					require_once('include/data/tables/cls_table_table_test.php');
					break;
				case "table_test_data":
					require_once('include/data/tables/cls_table_table_test_data.php');
					break;
				case "table_test_group":
					require_once('include/data/tables/cls_table_table_test_group.php');
					break;
				case "table_test_group_table":
					require_once('include/data/tables/cls_table_table_test_group_table.php');
					break;
				case "table_test_item":
					require_once('include/data/tables/cls_table_table_test_item.php');
					break;
				case "table_test_result":
					require_once('include/data/tables/cls_table_table_test_result.php');
					break;
				case "table_test_test":
					require_once('include/data/tables/cls_table_table_test_test.php');
					break;
				case "therapy_goal":
					require_once('include/data/tables/cls_table_therapy_goal.php');
					break;
				case "therapy_plan":
					require_once('include/data/tables/cls_table_therapy_plan.php');
					break;
				case "therapy_plan_template":
					require_once('include/data/tables/cls_table_therapy_plan_template.php');
					break;
				case "time_unit":
					require_once('include/data/tables/cls_table_time_unit.php');
					break;
				case "transfer":
					require_once('include/data/tables/cls_table_transfer.php');
					break;
				case "transfer_item":
					require_once('include/data/tables/cls_table_transfer_item.php');
					break;
				case "uom":
					require_once('include/data/tables/cls_table_uom.php');
					break;
				case "userconfiguration":
					require_once('include/data/tables/cls_table_userconfiguration.php');
					break;
			}
	}
}
?>
