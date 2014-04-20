<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

require_once('include/data/table_includes/cls_table_includes.php');
require_once('include/data/table_factory/cls_table_factory.php');

class cls_creator_base
{
	/*
	* 
	*/
	
	public static function create_menu($application,$menu)
	{

		$menu_template = cls_table_factory::get_common_menu_template()->get_by_id($menu->get_id_menu_template(),$application->get_db_manager());
	
		$application->log(__CLASS__, __FUNCTION__,'menu_template creator_path : ' . $menu_template->get_creator_path());
	
		require_once($menu_template->get_creator_path());


		
		$filename = basename($menu_template->get_creator_path());
	
		$class_name = str_replace('.php','',$filename);
	
		$application->log(__CLASS__, __FUNCTION__,'menu creator class name : ' . $class_name);  
	
	
	
	
		$constructor = new $class_name;
		
		$constructor->set_application($application);
		$constructor->set_menu($menu);
		$constructor->set_menu_template($menu_template);
		$constructor->set_language($application->get_language());
	
		$constructor->create_menu();
	

	}

	/*
	* 
	*/
	
	public static function create_main_page($application, $main_page)
	{
			
		$main_page_template = cls_table_factory::get_common_main_page_template()->get_by_id($main_page->get_id_main_page_template(),$application->get_db_manager());		

		$application->log(__CLASS__, __FUNCTION__,'main_page_template creator_path : ' . $main_page_template->get_creator_path());
		
		require_once($main_page_template->get_creator_path());

		$filename = basename($menu_template->creator_path);
	
		$class_name = str_replace('.php','',$filename);
	
		$application->log(__CLASS__, __FUNCTION__,'main page creator class name : ' . $class_name);  

		$constructor = new $class_name;

		$constructor->set_application($application);
		$constructor->set_main_page($main_page);
		$constructor->set_main_page_template($main_page_template);
		$constructor->set_language($application->get_language());
	
		$constructor->create_main_page();

		
		
	}


}

?>