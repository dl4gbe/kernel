<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

class cls_table_test_base
{

	private $p_db_manager = null;
	private $p_application = null;
	private $p_result = null;
	
	public function get_application()
	{
		return $this->p_application;
	}

	public function set_application($application)
	{
		$this->p_application = $application;
	}
	
	public function get_db_manager()
	{
		return $this->p_db_manager;
	}

	public function set_db_manager($db_manager)
	{
		$this->p_db_manager = $db_manager;
	}

	public function get_result()
	{
		return $this->p_result;
	}
	
	public function set_result($result)
	{
		$this->p_result = $result;
	}
	
	public function __construct1($db_manager)
	{
		$this->set_db_manager($db_manager);
	} 

	public function __construct2($db_manager,$application)
	{
		$this->set_db_manager($db_manager);
		$this->set_application($application);
	} 

	public function __construct3($db_manager,$application,$result)
	{
		$this->set_db_manager($db_manager);
		$this->set_application($application);
		$this->set_result($result);
	} 

	


}
?>