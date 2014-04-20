<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

abstract class cls_menu_creator_base
{
	private $p_application = null;
	private $p_menu = null;
	private $p_menu_template = null;
	private $p_language = 'DE';
	
	
	public function get_language()
	{
		return $this->p_language;
	}
	
	public function set_language($language)
	{
		$this->p_language = $language;
	}
	
	public function get_menu()
	{
		return $this->p_menu;
	}
	
	public function set_menu($menu)
	{
		$this->p_menu = $menu;
	}
	
	public function get_menu_template()
	{
		return $this->p_menu_template;
	}
		
	public function set_menu_template($menu_template)
	{	
		$this->p_menu_template = $menu_template;
	}
	
		
	public function get_application()
	{
		return $this->p_application;
	}

	public function set_application($application)
	{
		$this->p_application = $application;
	}

	public function __construct1($application)
	{
		$this->set_application($application);
	} 

	public function __construct2($application,$menu)
	{
		$this->set_application($application);
		$this->set_menu($db_menu);
	} 

	public function __construct3($application,$menu,$menu_template)
	{
		$this->set_application($application);
		$this->set_menu($db_menu);
		$this->set_menu_template($menu_template);	
	} 

	public function __construct4($application,$menu,$menu_template,$language)
	{
		$this->set_application($application);
		$this->set_menu($db_menu);
		$this->set_menu_template($menu_template);	
		$this->set_language($language);
	} 

	
	
	
	
	
	abstract function create_menu();



}
?>
