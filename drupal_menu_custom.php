<?php
if(!defined('kernel_entry'))define('kernel_entry', true);
require_once('include/cls_get_parameter.php');
require_once('include/entry_point.php');
require_once('include/application/cls_application.php');
require_once('include/data/tables/cls_table_drupal_menu_custom.php');
require_once('table_helpers/cls_drupal_menu_custom_helpers.php');
$app = new cls_application();
$get_parameter = new cls_get_parameter();
$helper = new cls_drupal_menu_custom_helpers($app->get_db_manager(),$app);
if (!empty($get_parameter->mode))
{
	$mode = strtolower($get_parameter->mode);
	switch ($mode)
		{
			case "grid":
				$helper->get_grid_page($get_parameter);
				break;
			case "describe":
				break;
			case "save":
				break;
			case "form":
				break;
			case "sql_create":
				require_once('creator/orm/cls_orm.php');
				$orm = new cls_orm($app->get_db_manager(),$app);
				return $orm->create_table_sql_statement("drupal_menu_custom",$get_parameter->database_type);
				break;
		}
	exit;
}
$helper->get_data($get_parameter);
?>
