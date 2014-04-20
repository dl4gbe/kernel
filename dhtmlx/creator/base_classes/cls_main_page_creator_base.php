<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

abstract class cls_main_page_creator_base
{

	private $p_application = null;
	private $p_main_page = null;
	private $p_main_page_template = null;
	private $p_language = 'DE';
	
	
	public function get_language()
	{
		return $this->p_language;
	}
	
	public function set_language($language)
	{
		$this->p_language = $language;
	}
	
	public function get_main_page()
	{
		return $this->p_main_page;
	}
	
	public function set_main_page($main_page)
	{
		$this->p_main_page = $main_page;
	}
	
	public function get_main_page_template()
	{
		return $this->p_main_page_template;
	}
		
	public function set_main_page_template($main_page_template)
	{	
		$this->p_main_page_template = $main_page_template;
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

	public function __construct2($application,$main_page)
	{
		$this->set_application($application);
		$this->set_main_page($db_main_page);
	} 

	public function __construct3($application,$main_page,$main_page_template)
	{
		$this->set_application($application);
		$this->set_main_page($db_main_page);
		$this->set_main_page_template($main_page_template);	
	} 

	public function __construct4($application,$main_page,$main_page_template,$language)
	{
		$this->set_application($application);
		$this->set_main_page($db_main_page);
		$this->set_main_page_template($main_page_template);	
		$this->set_language($language);
	} 

	abstract function create_main_page();

}
?>

